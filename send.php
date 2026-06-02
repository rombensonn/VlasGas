<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

function json_response(array $payload, int $status = 200): void
{
    http_response_code($status);
    echo json_encode($payload, JSON_UNESCAPED_UNICODE);
    exit;
}

function load_env_file(string $path): void
{
    if (!is_readable($path)) {
        return;
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if ($lines === false) {
        return;
    }

    foreach ($lines as $line) {
        $line = trim($line);
        if ($line === '' || str_starts_with($line, '#') || !str_contains($line, '=')) {
            continue;
        }

        [$key, $value] = array_map('trim', explode('=', $line, 2));
        $value = trim($value, "\"'");

        if ($key !== '' && getenv($key) === false) {
            putenv($key . '=' . $value);
            $_ENV[$key] = $value;
        }
    }
}

function post_value(string $name): string
{
    $value = $_POST[$name] ?? '';
    return is_string($value) ? trim($value) : '';
}

function normalize_phone(string $phone): string
{
    $digits = preg_replace('/\D+/', '', $phone) ?? '';

    if (strlen($digits) === 11 && str_starts_with($digits, '8')) {
        $digits = '7' . substr($digits, 1);
    }

    if (strlen($digits) === 10) {
        $digits = '7' . $digits;
    }

    return '+' . $digits;
}

function telegram_send(string $token, string $chatId, string $message): bool
{
    $url = 'https://api.telegram.org/bot' . rawurlencode($token) . '/sendMessage';
    $payload = [
        'chat_id' => $chatId,
        'text' => $message,
        'parse_mode' => 'HTML',
        'disable_web_page_preview' => true,
    ];

    if (function_exists('curl_init')) {
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
            CURLOPT_POSTFIELDS => json_encode($payload, JSON_UNESCAPED_UNICODE),
        ]);

        $response = curl_exec($ch);
        $status = (int) curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
        $error = curl_error($ch);
        curl_close($ch);

        if ($response === false || $error !== '' || $status < 200 || $status >= 300) {
            return false;
        }

        $decoded = json_decode((string) $response, true);
        return is_array($decoded) && ($decoded['ok'] ?? false) === true;
    }

    $context = stream_context_create([
        'http' => [
            'method' => 'POST',
            'header' => "Content-Type: application/json\r\n",
            'content' => json_encode($payload, JSON_UNESCAPED_UNICODE),
            'timeout' => 10,
            'ignore_errors' => true,
        ],
    ]);

    $response = file_get_contents($url, false, $context);
    $decoded = json_decode((string) $response, true);

    return is_array($decoded) && ($decoded['ok'] ?? false) === true;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    json_response(['ok' => false, 'error' => 'Метод не поддерживается.'], 405);
}

load_env_file(__DIR__ . '/.env');

if (post_value('website') !== '') {
    json_response(['ok' => true]);
}

$services = [
    'repair' => 'Автоэлектрика и ремонт',
    'diagnostics' => 'Диагностика авто',
    'polishing' => 'Полировка авто',
    'lighting' => 'Дополнительное освещение для внедорожников',
    'mobile' => 'Выездная диагностика',
    'gbo' => 'Установка ГБО',
];

$visitTypes = [
    'service' => 'Приеду в сервис',
    'mobile' => 'Нужен выезд',
    'unknown' => 'Подскажите удобный вариант',
];

$serviceKey = post_value('service');
$visitKey = post_value('visit_type');
$problem = post_value('problem');
$phoneRaw = post_value('phone');
$carBrand = post_value('car_brand');
$carModel = post_value('car_model');
$car = post_value('car');
$name = post_value('name');
$comment = post_value('comment');
$personalDataConsent = post_value('personal_data_consent');
$privacyPolicyConsent = post_value('privacy_policy_consent');

if ($car === '') {
    $car = trim($carBrand . ' ' . $carModel);
}

if (!array_key_exists($serviceKey, $services)) {
    json_response(['ok' => false, 'error' => 'Выберите услугу из списка.'], 422);
}

if ($visitKey !== '' && !array_key_exists($visitKey, $visitTypes)) {
    json_response(['ok' => false, 'error' => 'Выберите формат обращения из списка.'], 422);
}

if ($problem === '' || mb_strlen($problem) < 5) {
    json_response(['ok' => false, 'error' => 'Коротко опишите проблему с автомобилем.'], 422);
}

if ($personalDataConsent !== 'yes' || $privacyPolicyConsent !== 'yes') {
    json_response(['ok' => false, 'error' => 'Подтвердите согласие на обработку персональных данных и политику обработки персональных данных.'], 422);
}

$digits = preg_replace('/\D+/', '', $phoneRaw) ?? '';
if (strlen($digits) < 10 || strlen($digits) > 15) {
    json_response(['ok' => false, 'error' => 'Укажите корректный телефон.'], 422);
}

$token = getenv('TELEGRAM_BOT_TOKEN') ?: '';
$chatId = getenv('TELEGRAM_CHAT_ID') ?: '';

if ($token === '' || $chatId === '') {
    json_response([
        'ok' => false,
        'error' => 'Канал уведомлений пока не настроен. Позвоните по номеру +7 (927) 519-01-33.'
    ], 503);
}

$phone = normalize_phone($phoneRaw);
$message = implode("\n", array_filter([
    '<b>Новая заявка с сайта VlasGas</b>',
    '<b>Услуга:</b> ' . htmlspecialchars($services[$serviceKey], ENT_QUOTES, 'UTF-8'),
    '<b>Формат:</b> ' . htmlspecialchars($visitTypes[$visitKey] ?? 'Не указан', ENT_QUOTES, 'UTF-8'),
    '<b>Телефон:</b> ' . htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'),
    $name !== '' ? '<b>Имя:</b> ' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') : '',
    $car !== '' ? '<b>Авто:</b> ' . htmlspecialchars($car, ENT_QUOTES, 'UTF-8') : '',
    '<b>Проблема:</b> ' . htmlspecialchars($problem, ENT_QUOTES, 'UTF-8'),
    $comment !== '' ? '<b>Комментарий:</b> ' . htmlspecialchars($comment, ENT_QUOTES, 'UTF-8') : '',
    '<b>Согласия:</b> получены',
]));

if (!telegram_send($token, $chatId, $message)) {
    json_response([
        'ok' => false,
        'error' => 'Не удалось отправить заявку. Позвоните по номеру +7 (927) 519-01-33.'
    ], 502);
}

json_response(['ok' => true]);
