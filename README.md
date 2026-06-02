# VlasGas Landing

Одностраничный PHP-лендинг для VlasGas с Tailwind CSS build и отправкой заявок в Telegram.

## Запуск

```bash
npm install
npm run build
php -S 127.0.0.1:8080
```

Откройте `http://127.0.0.1:8080`.

## GitHub Pages

Для GitHub Pages используется сгенерированный `index.html`. PHP-файлы остаются в проекте для обычного PHP-хостинга, но GitHub Pages не выполняет `send.php`, поэтому Telegram-отправка формы работает только на PHP-сервере с настроенным `.env`.

## Telegram

Скопируйте `.env.example` в `.env` и заполните:

```env
TELEGRAM_BOT_TOKEN=...
TELEGRAM_CHAT_ID=...
```

Форма отправляет `POST /send.php` и получает JSON-ответ.

## SMSAERO

SMSAERO подключается как дополнительный канал уведомлений. Если переменные заполнены, `send.php` отправит короткое SMS с данными заявки.

```env
SMSAERO_EMAIL=...
SMSAERO_API_KEY=...
SMSAERO_SIGN=SMS Aero
SMSAERO_TO=79275190133
```

Нужны email аккаунта SMSAERO, API-ключ, имя отправителя и номер получателя SMS в формате `7XXXXXXXXXX`.
