<?php
declare(strict_types=1);

$phoneDisplay = '+7 (927) 519-01-33';
$phoneHref = 'tel:+79275190133';
$mapUrl = 'https://yandex.ru/maps/-/CPToEY3p';
$address = 'Тенистая ул., 29, микрорайон Западный, Домодедово';
$hours = 'ежедневно 10:00-18:00';
$ownerName = 'Власов Владислав Сергеевич';
$ownerLegalLabel = 'Самозанятый ' . $ownerName;
$ownerInn = '345402094690';
$ownerEmail = 'Vladislaw.vlasov2013@yandex.ru';
$legalAddress = $address;

$carCatalog = [
    'Lada' => ['1111 Ока', '2104', '2105', '2107', 'Granta', 'Vesta', 'XRAY', 'Niva', 'Niva Travel', 'Largus', 'Priora', 'Kalina', 'Samara', '2110', '2111', '2112'],
    'ВАЗ' => ['2101', '2102', '2103', '2104', '2105', '2106', '2107', '2108', '2109', '21099', '2110', '2111', '2112', '2113', '2114', '2115', '2121 Нива', '2131 Нива', 'Ока'],
    'Hyundai' => ['Accent', 'Avante', 'Creta', 'Elantra', 'Equus', 'Genesis', 'Getz', 'Grand Starex', 'H-1', 'i20', 'i30', 'i40', 'ix35', 'Kona', 'Matrix', 'Palisade', 'Santa Fe', 'Solaris', 'Sonata', 'Staria', 'Terracan', 'Trajet', 'Tucson', 'Veloster', 'Veracruz'],
    'Kia' => ['Carens', 'Carnival', 'Ceed', 'Cerato', 'K5', 'K7', 'Magentis', 'Mohave', 'Opirus', 'Optima', 'Picanto', 'Quoris', 'Rio', 'Seltos', 'Sorento', 'Soul', 'Spectra', 'Sportage', 'Stinger', 'Venga'],
    'Toyota' => ['4Runner', 'Alphard', 'Auris', 'Avensis', 'Camry', 'Carina', 'Celica', 'Corolla', 'Crown', 'Fortuner', 'Highlander', 'Hilux', 'Land Cruiser', 'Land Cruiser Prado', 'Mark II', 'Prius', 'RAV4', 'Sequoia', 'Sienna', 'Supra', 'Tundra', 'Venza', 'Verso', 'Yaris'],
    'Volkswagen' => ['Amarok', 'Arteon', 'Atlas', 'Beetle', 'Bora', 'Caddy', 'California', 'Caravelle', 'CC', 'Crafter', 'Eos', 'Fox', 'Golf', 'Golf Plus', 'Golf Variant', 'ID.3', 'ID.4', 'ID.5', 'Jetta', 'Lupo', 'Multivan', 'New Beetle', 'Passat', 'Passat CC', 'Phaeton', 'Pointer', 'Polo', 'Scirocco', 'Sharan', 'T-Cross', 'T-Roc', 'Taos', 'Teramont', 'Tiguan', 'Touareg', 'Touran', 'Transporter', 'up!', 'Vento'],
    'Renault' => ['Arkana', 'Captur', 'Clio', 'Dokker', 'Duster', 'Espace', 'Fluence', 'Kangoo', 'Kaptur', 'Koleos', 'Laguna', 'Latitude', 'Logan', 'Master', 'Megane', 'Sandero', 'Scenic', 'Symbol', 'Trafic', 'Twingo'],
    'Skoda' => ['Citigo', 'Fabia', 'Felicia', 'Kamiq', 'Karoq', 'Kodiaq', 'Octavia', 'Rapid', 'Roomster', 'Scala', 'Superb', 'Yeti'],
    'Nissan' => ['Almera', 'Juke', 'Leaf', 'Maxima', 'Micra', 'Murano', 'Navara', 'Note', 'Pathfinder', 'Patrol', 'Primera', 'Qashqai', 'Sentra', 'Serena', 'Teana', 'Terrano', 'Tiida', 'X-Trail'],
    'Ford' => ['C-Max', 'EcoSport', 'Escape', 'Explorer', 'Fiesta', 'Focus', 'Fusion', 'Galaxy', 'Kuga', 'Maverick', 'Mondeo', 'Mustang', 'Ranger', 'S-Max', 'Transit', 'Transit Connect', 'Transit Custom'],
    'Chevrolet' => ['Aveo', 'Camaro', 'Captiva', 'Cobalt', 'Corvette', 'Cruze', 'Epica', 'Lacetti', 'Lanos', 'Malibu', 'Niva', 'Orlando', 'Rezzo', 'Spark', 'Tahoe', 'TrailBlazer'],
    'Mitsubishi' => ['ASX', 'Carisma', 'Colt', 'Eclipse Cross', 'Galant', 'L200', 'Lancer', 'Outlander', 'Pajero', 'Pajero Pinin', 'Pajero Sport', 'Space Star'],
    'Mazda' => ['2', '3', '5', '6', '323', '626', 'Atenza', 'Axela', 'CX-3', 'CX-30', 'CX-5', 'CX-7', 'CX-9', 'MX-5', 'Premacy', 'Tribute'],
    'Mercedes-Benz' => ['A-Class', 'B-Class', 'C-Class', 'CLA', 'CLK', 'CLS', 'E-Class', 'G-Class', 'GL', 'GLA', 'GLB', 'GLC', 'GLE', 'GLK', 'GLS', 'M-Class', 'S-Class', 'SL', 'Sprinter', 'V-Class', 'Viano', 'Vito'],
    'BMW' => ['1 Series', '2 Series', '3 Series', '4 Series', '5 Series', '6 Series', '7 Series', '8 Series', 'i3', 'i4', 'i8', 'X1', 'X2', 'X3', 'X4', 'X5', 'X6', 'X7', 'Z4'],
    'Audi' => ['A1', 'A2', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'Allroad', 'Q2', 'Q3', 'Q5', 'Q7', 'Q8', 'R8', 'RS3', 'RS4', 'RS5', 'RS6', 'S3', 'S4', 'S5', 'S6', 'TT'],
    'Peugeot' => ['107', '206', '207', '208', '3008', '301', '307', '308', '4007', '408', '5008', '508', '607', 'Partner', 'Traveller'],
    'Citroen' => ['Berlingo', 'C-Elysee', 'C-Crosser', 'C1', 'C3', 'C4', 'C4 Picasso', 'C5', 'DS3', 'DS4', 'DS5', 'Jumpy', 'SpaceTourer', 'Xsara'],
    'Opel' => ['Antara', 'Astra', 'Corsa', 'Frontera', 'Insignia', 'Meriva', 'Mokka', 'Omega', 'Signum', 'Vectra', 'Vivaro', 'Zafira'],
    'Honda' => ['Accord', 'Civic', 'CR-V', 'Crosstour', 'Element', 'Fit', 'HR-V', 'Insight', 'Jazz', 'Legend', 'Odyssey', 'Pilot', 'Stepwgn', 'Stream'],
    'Geely' => ['Atlas', 'Atlas Pro', 'Coolray', 'Emgrand', 'Emgrand EC7', 'Geometry C', 'Monjaro', 'Okavango', 'Tugella'],
    'Chery' => ['Amulet', 'Arrizo 8', 'Bonus', 'Fora', 'Kimo', 'M11', 'Tiggo', 'Tiggo 2', 'Tiggo 3', 'Tiggo 4', 'Tiggo 4 Pro', 'Tiggo 7', 'Tiggo 7 Pro', 'Tiggo 8', 'Tiggo 8 Pro', 'Tiggo 8 Pro Max'],
    'Haval' => ['Dargo', 'F7', 'F7x', 'H2', 'H5', 'H6', 'H9', 'Jolion', 'M6'],
    'Changan' => ['Alsvin', 'CS35', 'CS35 Plus', 'CS55', 'CS55 Plus', 'CS75', 'CS75 Plus', 'CS85 Coupe', 'CS95', 'Eado', 'Hunter Plus', 'Lamore', 'Uni-K', 'Uni-S', 'Uni-T', 'Uni-V'],
    'Omoda' => ['C5', 'S5'],
    'Exeed' => ['LX', 'RX', 'TXL', 'VX'],
    'Москвич' => ['3', '3e', '6'],
    'УАЗ' => ['Буханка', 'Патриот', 'Пикап', 'Профи', 'Хантер'],
    'ГАЗ' => ['Валдай Next', 'Газель', 'Газель Бизнес', 'ГАЗель Next', 'ГАЗель NN', 'Соболь', 'Соболь Бизнес', 'Соболь NN'],
];

$services = [
    [
        'id' => 'repair',
        'code' => 'ELEC',
        'title' => 'Автоэлектрика и ремонт',
        'price' => 'от 1 000 ₽',
        'when' => 'Не работает свет, проводка, приборка, запуск или есть разряд аккумулятора.',
        'includes' => 'Поиск причины, согласование стоимости и ремонт.',
    ],
    [
        'id' => 'diagnostics',
        'code' => 'SCAN',
        'title' => 'Диагностика авто',
        'price' => 'от 1 000 ₽',
        'when' => 'Есть ошибка, нестабильная работа или непонятная неисправность.',
        'includes' => 'Поиск причины до ремонта и лишних замен.',
    ],
    [
        'id' => 'polishing',
        'code' => 'POLISH',
        'title' => 'Полировка авто',
        'price' => 'после оценки',
        'when' => 'Нужно убрать матовость, мелкие дефекты ЛКП или вернуть кузову аккуратный блеск.',
        'includes' => 'Оценка состояния покрытия, подбор подхода и согласование работ до старта.',
    ],
    [
        'id' => 'lighting',
        'code' => 'LIGHT',
        'title' => 'Дополнительное освещение',
        'price' => 'от 4 000 ₽',
        'when' => 'Нужно поставить доп. оборудование для внедорожника.',
        'includes' => 'Монтаж освещения и подключение оборудования.',
    ],
    [
        'id' => 'mobile',
        'code' => 'OUT',
        'title' => 'Выездная диагностика',
        'price' => 'от 3 000 ₽',
        'when' => 'Автомобиль не едет или удобнее показать его на месте.',
        'includes' => 'Выезд к клиенту и диагностика автомобиля.',
    ],
    [
        'id' => 'gbo',
        'code' => 'GBO',
        'title' => 'Установка ГБО',
        'price' => 'от 20 000 ₽',
        'when' => 'Дополнительное направление для тех, кому нужно газобаллонное оборудование.',
        'includes' => 'Подбор решения, установка и проверка работы системы.',
    ],
];

$reviews = [
    [
        'name' => 'Никита Сидинкин',
        'date' => '11 февраля 2025',
        'text' => 'Перегорела фара, габаритные огни и приборка. Мастер все восстановил в кратчайшие сроки, цена тоже вполне приемлемая.',
    ],
    [
        'name' => 'Азат К',
        'date' => '12 февраля 2025',
        'text' => 'Мастер своего дела, быстро приехал, нашел и устранил проблему.',
    ],
    [
        'name' => 'Сергей',
        'date' => '28 мая 2025',
        'text' => 'Была проблема с проводкой Рено Трафик, никто не брался помочь. Влад быстро нашел поломку и устранил ее.',
    ],
    [
        'name' => 'Олег Медведев',
        'date' => '11 февраля 2025',
        'text' => 'Обратился с проблемой разряда аккумулятора. Нашел причину довольно быстро.',
    ],
];

$jsonLd = [
    '@context' => 'https://schema.org',
    '@type' => 'AutoRepair',
    'name' => 'VlasGas',
    'telephone' => $phoneDisplay,
    'email' => $ownerEmail,
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => 'Тенистая ул., 29',
        'addressLocality' => 'Домодедово',
        'addressRegion' => 'Московская область',
        'addressCountry' => 'RU',
    ],
    'openingHoursSpecification' => [[
        '@type' => 'OpeningHoursSpecification',
        'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
        'opens' => '10:00',
        'closes' => '18:00',
    ]],
    'aggregateRating' => [
        '@type' => 'AggregateRating',
        'ratingValue' => '4.9',
        'ratingCount' => '25',
        'reviewCount' => '20',
    ],
    'hasMap' => $mapUrl,
    'priceRange' => 'от 1 000 ₽',
    'areaServed' => 'Домодедово',
];
?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VlasGas - автоэлектрика, диагностика и полировка авто в Домодедово</title>
  <meta name="description" content="VlasGas в Домодедово: автоэлектрика и ремонт после диагностики, диагностика авто от 1 000 ₽, полировка авто после оценки, выездная диагностика от 3 000 ₽. Рейтинг 4,9 на Яндекс.Картах.">
  <link rel="preload" href="assets/fonts/open-sans-cyrillic.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="assets/images/workshop-hero.png" as="image">
  <link rel="stylesheet" href="assets/css/styles.css">
  <script type="application/ld+json"><?= json_encode($jsonLd, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?></script>
</head>
<body class="font-sans">
  <a class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-50 focus:rounded-md focus:bg-white focus:px-4 focus:py-3 focus:text-ink" href="#calculator">Перейти к расчету стоимости</a>
  <script>
    window.VLASGAS_CAR_CATALOG = <?= json_encode($carCatalog, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>;
  </script>

  <header class="border-b border-white/10 bg-ink">
    <div class="container-page flex min-h-[76px] items-center justify-between gap-4">
      <a class="group flex items-center gap-3" href="#top" aria-label="VlasGas">
        <span class="flex h-11 w-11 items-center justify-center rounded-md border border-copper-400/50 bg-copper-500 text-sm font-black text-white">VG</span>
        <span>
          <span class="block text-xl font-black tracking-normal text-white">VlasGas</span>
          <span class="block text-sm font-semibold text-slate-400">Автоэлектрика, диагностика, полировка</span>
        </span>
      </a>

      <nav class="hidden items-center gap-6 lg:flex" aria-label="Основная навигация">
        <a class="text-sm font-bold text-slate-300 hover:text-white" href="#services">Услуги</a>
        <a class="text-sm font-bold text-slate-300 hover:text-white" href="#calculator">Расчет</a>
        <a class="text-sm font-bold text-slate-300 hover:text-white" href="#reviews">Отзывы</a>
        <a class="text-sm font-bold text-slate-300 hover:text-white" href="#contacts">Контакты</a>
      </nav>

      <div class="hidden items-center gap-3 md:flex">
        <a class="text-sm font-black text-copper-400" href="<?= htmlspecialchars($mapUrl, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">Домодедово, Тенистая 29</a>
        <a class="btn-secondary" href="<?= $phoneHref; ?>">Позвонить</a>
      </div>
    </div>
  </header>

  <main id="top">
    <section class="hero-photo border-b border-white/10">
      <div class="container-page py-8 sm:py-10 lg:min-h-[820px] lg:py-16">
        <div class="grid h-full gap-8 lg:grid-cols-[1.02fr_0.98fr] lg:items-center">
          <div class="flex max-w-[21.5rem] flex-col items-start text-left sm:max-w-2xl" data-reveal>
            <div class="flex max-w-[21.5rem] flex-wrap justify-start gap-2 sm:max-w-none">
              <span class="status-pill">4,9 на Яндекс.Картах</span>
              <span class="status-pill">25 оценок</span>
              <span class="status-pill">20 отзывов</span>
            </div>

            <h1 class="mt-7 max-w-[21.5rem] text-[1.9rem] font-black leading-[1.06] tracking-normal text-white sm:max-w-2xl sm:text-5xl sm:leading-[1.03] lg:text-[3.25rem] xl:text-[3.6rem]">
              <span class="block sm:inline">Автоэлектрика</span>
              <span class="block sm:inline"> и полировка:</span>
              <span class="block">сначала причина,</span>
              <span class="block">потом понятная работа</span>
            </h1>
            <p class="mt-6 max-w-[21.5rem] text-base font-medium leading-7 text-slate-200 sm:max-w-xl sm:text-lg sm:leading-8">
              VlasGas в Домодедово помогает с проводкой, светом, запуском, разрядом аккумулятора, диагностикой и полировкой кузова. Стоимость согласуется после понятной оценки задачи.
            </p>

            <div class="mt-8 flex max-w-[21.5rem] flex-col gap-3 sm:max-w-none sm:flex-row sm:justify-start">
              <a class="btn-primary" href="#calculator">Рассчитать стоимость</a>
              <a class="btn-secondary" href="<?= $phoneHref; ?>">Позвонить <?= $phoneDisplay; ?></a>
            </div>

            <div class="mt-8 grid max-w-[21.5rem] gap-3 sm:max-w-2xl sm:grid-cols-3">
              <div class="service-chip bg-white/[0.08] text-white backdrop-blur">
                <div class="text-xs font-black uppercase tracking-[0.16em] text-copper-400">Автоэлектрика</div>
                <div class="mt-2 text-2xl font-black">от 1 000 ₽</div>
              </div>
              <div class="service-chip bg-white/[0.08] text-white backdrop-blur">
                <div class="text-xs font-black uppercase tracking-[0.16em] text-copper-400">Диагностика</div>
                <div class="mt-2 text-2xl font-black">от 1 000 ₽</div>
              </div>
              <div class="service-chip bg-white/[0.08] text-white backdrop-blur">
                <div class="text-xs font-black uppercase tracking-[0.16em] text-copper-400">Полировка</div>
                <div class="mt-2 text-2xl font-black">после оценки</div>
              </div>
            </div>
          </div>

          <aside class="metal-card p-5 sm:p-6 lg:self-center" data-reveal>
            <div class="flex items-start justify-between gap-5">
              <div>
                <div class="eyebrow">Электрика и внешний вид</div>
                <h2 class="mt-3 text-2xl font-black leading-tight text-white sm:text-3xl">Главный фокус: найти неисправность и привести авто в порядок</h2>
              </div>
              <div class="rounded-md border border-copper-400/40 bg-copper-500/20 px-4 py-3 text-right">
                <div class="text-3xl font-black text-copper-400">4,9</div>
                <div class="text-xs font-black uppercase tracking-[0.12em] text-slate-300">рейтинг</div>
              </div>
            </div>

            <div class="industrial-rule my-5"></div>

            <div class="grid gap-4">
              <div class="grid grid-cols-[44px_1fr] gap-4">
                <div class="flex h-11 w-11 items-center justify-center rounded-md bg-white text-sm font-black text-ink">01</div>
                <div>
                  <div class="font-black text-white">Вы описываете задачу</div>
                  <p class="mt-1 text-sm leading-6 text-slate-300">Электрика, диагностика, полировка или выезд фиксируются до звонка.</p>
                </div>
              </div>
              <div class="grid grid-cols-[44px_1fr] gap-4">
                <div class="flex h-11 w-11 items-center justify-center rounded-md bg-white text-sm font-black text-ink">02</div>
                <div>
                  <div class="font-black text-white">Мастер уточняет детали</div>
                  <p class="mt-1 text-sm leading-6 text-slate-300">По электрике важны симптомы, по полировке - состояние покрытия и желаемый результат.</p>
                </div>
              </div>
              <div class="grid grid-cols-[44px_1fr] gap-4">
                <div class="flex h-11 w-11 items-center justify-center rounded-md bg-white text-sm font-black text-ink">03</div>
                <div>
                  <div class="font-black text-white">Стоимость согласуется</div>
                  <p class="mt-1 text-sm leading-6 text-slate-300">Ремонт не начинается с непонятной суммы “на всякий случай”.</p>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </section>

    <section id="calculator" class="section steel-surface">
      <div class="container-page grid gap-8 lg:grid-cols-[0.88fr_1.12fr] lg:items-start">
        <div data-reveal>
          <div class="eyebrow">Расчет заявки</div>
          <h2 class="section-title-dark mt-3">Мини-калькулятор до первого звонка</h2>
          <p class="section-lead-dark">Выберите электрику, диагностику, полировку или другое направление и опишите задачу. В заявке не будет выдуманной цены: показываем только подтвержденные стартовые цены и сразу передаем детали мастеру.</p>

          <div class="mt-8 metal-card p-5">
            <div class="flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">
              <div>
                <div class="text-sm font-black uppercase tracking-[0.16em] text-slate-400">Предварительно</div>
                <div class="mt-2 text-2xl font-black text-white" data-service-output>Автоэлектрика и ремонт</div>
                <p class="mt-2 max-w-md text-sm leading-6 text-slate-300" data-note-output>Сначала ищем причину: свет, проводка, запуск, приборка или разряд аккумулятора.</p>
              </div>
              <div class="min-w-[180px] rounded-lg border border-copper-400/45 bg-ink/70 p-4 text-left shadow-industrial">
                <div class="flex items-center gap-2 text-xs font-black uppercase tracking-[0.16em] text-copper-400">
                  <span class="h-2 w-2 rounded-full bg-signal"></span>
                  Старт
                </div>
                <div class="mt-2 whitespace-nowrap text-[1.45rem] font-black leading-none text-white sm:text-2xl" data-price-output>от 1 000 ₽</div>
                <div class="mt-3 h-1.5 overflow-hidden rounded-full bg-white/10">
                  <div class="h-full w-2/3 rounded-full bg-copper-500"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <form class="metal-card p-5 sm:p-6" action="send.php" method="post" data-estimate-form data-reveal>
          <input type="text" name="website" class="hidden" tabindex="-1" autocomplete="off">

          <div class="grid gap-4 sm:grid-cols-2">
            <div class="sm:col-span-2">
              <label class="field-label" for="service">Услуга</label>
              <select class="field" id="service" name="service" data-service-select required>
                <option value="repair">Автоэлектрика и ремонт - от 1 000 ₽</option>
                <option value="diagnostics">Диагностика авто - от 1 000 ₽</option>
                <option value="polishing">Полировка авто - после оценки</option>
                <option value="lighting">Дополнительное освещение - от 4 000 ₽</option>
                <option value="mobile">Выездная диагностика - от 3 000 ₽</option>
                <option value="gbo">Установка ГБО - от 20 000 ₽</option>
              </select>
            </div>

            <div>
              <label class="field-label" for="visit_type">Формат</label>
              <select class="field" id="visit_type" name="visit_type">
                <option value="service">Приеду в сервис</option>
                <option value="mobile">Нужен выезд</option>
                <option value="unknown">Подскажите удобный вариант</option>
              </select>
            </div>

            <div>
              <label class="field-label" for="phone">Телефон</label>
              <input class="field" id="phone" name="phone" type="tel" inputmode="tel" placeholder="+7 927 519-01-33" autocomplete="tel" required>
            </div>

            <div>
              <label class="field-label" for="name">Имя</label>
              <input class="field" id="name" name="name" type="text" autocomplete="name" placeholder="Как к вам обратиться">
            </div>

            <div>
              <label class="field-label" for="car_brand">Марка</label>
              <select class="field" id="car_brand" name="car_brand" data-car-brand>
                <option value="">Выберите марку</option>
                <?php foreach (array_keys($carCatalog) as $brand): ?>
                  <option value="<?= htmlspecialchars($brand, ENT_QUOTES, 'UTF-8'); ?>"><?= htmlspecialchars($brand, ENT_QUOTES, 'UTF-8'); ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="sm:col-span-2">
              <label class="field-label" for="car_model">Модель</label>
              <select class="field" id="car_model" name="car_model" data-car-model disabled>
                <option value="">Сначала выберите марку</option>
              </select>
              <input class="field mt-3 hidden" id="car_model_custom" name="car_model_custom" type="text" placeholder="Введите модель вручную" data-car-model-custom disabled>
              <input type="hidden" name="car" data-car-combined>
            </div>

            <div class="sm:col-span-2">
              <label class="field-label" for="problem">Что случилось</label>
              <textarea class="field min-h-[118px] resize-y" id="problem" name="problem" placeholder="Например: не заводится, горит ошибка, проблема с проводкой, нужна полировка кузова..." required></textarea>
            </div>

            <div class="sm:col-span-2">
              <label class="field-label" for="comment">Комментарий</label>
              <textarea class="field min-h-[92px] resize-y" id="comment" name="comment" placeholder="Удобное время, адрес для выезда или важные детали"></textarea>
            </div>

            <div class="sm:col-span-2 grid gap-3">
              <label class="consent-check">
                <input class="consent-input" type="checkbox" name="personal_data_consent" value="yes" required>
                <span><a href="consent-personal-data.html" target="_blank" rel="noopener">Даю согласие на обработку персональных данных.</a></span>
              </label>
              <label class="consent-check">
                <input class="consent-input" type="checkbox" name="privacy_policy_consent" value="yes" required>
                <span><a href="personal-data-policy.html" target="_blank" rel="noopener">Согласен с политикой обработки персональных данных.</a></span>
              </label>
            </div>
          </div>

          <button class="btn-primary mt-5 w-full" type="submit">Отправить расчет</button>
          <p class="mt-4 text-sm leading-6 text-slate-400">Можно без формы: <a class="font-black text-copper-400" href="<?= $phoneHref; ?>"><?= $phoneDisplay; ?></a>. Данные используются только для связи по заявке.</p>
          <div data-form-status aria-live="polite" role="status"></div>
        </form>
      </div>
    </section>

    <section id="services" class="section bg-paper text-ink">
      <div class="container-page">
        <div class="flex flex-col gap-5 lg:flex-row lg:items-end lg:justify-between">
          <div>
            <div class="eyebrow">Рабочие направления</div>
            <h2 class="section-title mt-3">Сначала электрика и полировка, затем дополнительные работы</h2>
            <p class="section-lead">Основные направления вынесены первыми. ГБО осталось в списке как второстепенная услуга, без акцента на первом экране.</p>
          </div>
          <a class="btn-dark lg:mb-1" href="#calculator">Подобрать услугу</a>
        </div>

        <div class="mt-10 grid gap-4 md:grid-cols-2 xl:grid-cols-3">
          <?php foreach ($services as $service): ?>
            <article class="motion-card paper-card p-5" data-reveal>
              <div class="flex items-start justify-between gap-4">
                <div class="rounded-md bg-ink px-3 py-2 text-xs font-black uppercase tracking-[0.16em] text-copper-400"><?= htmlspecialchars($service['code'], ENT_QUOTES, 'UTF-8'); ?></div>
                <div class="text-right text-lg font-black text-copper-600"><?= htmlspecialchars($service['price'], ENT_QUOTES, 'UTF-8'); ?></div>
              </div>
              <h3 class="mt-6 text-xl font-black leading-tight"><?= htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
              <p class="mt-3 text-sm leading-6 text-slate-600"><?= htmlspecialchars($service['when'], ENT_QUOTES, 'UTF-8'); ?></p>
              <div class="mt-5 h-px bg-stone-300"></div>
              <p class="mt-5 text-sm leading-6 text-slate-700"><span class="font-black text-ink">Что входит:</span> <?= htmlspecialchars($service['includes'], ENT_QUOTES, 'UTF-8'); ?></p>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="bg-ink text-white">
      <div class="grid lg:grid-cols-2">
        <div class="diagnostics-photo min-h-[420px] lg:min-h-[680px]" role="img" aria-label="Диагностика электрики автомобиля мультиметром в мастерской"></div>
        <div class="section px-4 sm:px-6 lg:px-12 xl:px-16">
          <div class="max-w-2xl" data-reveal>
            <div class="eyebrow">Антистрахи клиента</div>
            <h2 class="section-title-dark mt-3">Электрика, диагностика и полировка без непонятной сметы</h2>
            <p class="section-lead-dark">Для электрики сначала ищется причина, для полировки оценивается состояние покрытия. Работы согласуются до старта, без случайных сумм в заявке.</p>

            <div class="mt-9 grid gap-4">
              <div class="metal-card p-5">
                <div class="text-lg font-black">Сначала причина</div>
                <p class="mt-2 text-sm leading-6 text-slate-300">По электрике работа начинается с поиска неисправности, а не с замены деталей наугад.</p>
              </div>
              <div class="metal-card p-5">
                <div class="text-lg font-black">Полировка после оценки</div>
                <p class="mt-2 text-sm leading-6 text-slate-300">Цена по полировке не придумывается заранее: сначала смотрят состояние ЛКП и объем работ.</p>
              </div>
              <div class="metal-card p-5">
                <div class="text-lg font-black">Есть выезд</div>
                <p class="mt-2 text-sm leading-6 text-slate-300">Если машина не на ходу, можно запросить выездную диагностику от 3 000 ₽.</p>
              </div>
              <div class="metal-card p-5">
                <div class="text-lg font-black">Показывают недочеты</div>
                <p class="mt-2 text-sm leading-6 text-slate-300">В отзывах клиенты отмечают, что мастер объясняет и показывает найденные проблемы.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="reviews" class="section bg-ink text-white">
      <div class="container-page">
        <div class="grid gap-8 lg:grid-cols-[0.82fr_1.18fr]">
          <div data-reveal>
            <div class="eyebrow">Социальное доказательство</div>
            <h2 class="section-title-dark mt-3">4,9 по 25 оценкам</h2>
            <p class="section-lead-dark">Отзывы на Яндекс.Картах повторяют то, что важно клиенту автосервиса: нашли причину, сделали быстро, цена адекватная, мастер объясняет.</p>
            <div class="mt-8 grid grid-cols-2 gap-3">
              <div class="metal-card p-5">
                <div class="text-4xl font-black text-copper-400">4,9</div>
                <div class="mt-1 text-sm font-bold text-slate-300">рейтинг</div>
              </div>
              <div class="metal-card p-5">
                <div class="text-4xl font-black text-copper-400">20</div>
                <div class="mt-1 text-sm font-bold text-slate-300">отзывов</div>
              </div>
            </div>
          </div>

          <div class="grid gap-4 md:grid-cols-2">
            <?php foreach ($reviews as $review): ?>
              <figure class="motion-card metal-card p-5" data-reveal>
                <blockquote class="text-base font-medium leading-7 text-slate-100">“<?= htmlspecialchars($review['text'], ENT_QUOTES, 'UTF-8'); ?>”</blockquote>
                <figcaption class="mt-5 border-t border-white/10 pt-4">
                  <div class="font-black text-white"><?= htmlspecialchars($review['name'], ENT_QUOTES, 'UTF-8'); ?></div>
                  <div class="mt-1 text-sm text-slate-400"><?= htmlspecialchars($review['date'], ENT_QUOTES, 'UTF-8'); ?></div>
                </figcaption>
              </figure>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>

    <section class="section bg-paper text-ink">
      <div class="container-page">
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
          <div class="paper-card p-5" data-reveal>
            <div class="text-sm font-black uppercase tracking-[0.16em] text-copper-600">Оплата</div>
            <div class="mt-3 text-2xl font-black">Картой</div>
            <p class="mt-2 text-sm leading-6 text-slate-600">Особенность указана в карточке бизнеса.</p>
          </div>
          <div class="paper-card p-5" data-reveal>
            <div class="text-sm font-black uppercase tracking-[0.16em] text-copper-600">На месте</div>
            <div class="mt-3 text-2xl font-black">Парковка</div>
            <p class="mt-2 text-sm leading-6 text-slate-600">Можно приехать на диагностику или ремонт.</p>
          </div>
          <div class="paper-card p-5" data-reveal>
            <div class="text-sm font-black uppercase tracking-[0.16em] text-copper-600">Удобство</div>
            <div class="mt-3 text-2xl font-black">Запись</div>
            <p class="mt-2 text-sm leading-6 text-slate-600">Заявка помогает заранее описать проблему.</p>
          </div>
          <div class="paper-card p-5" data-reveal>
            <div class="text-sm font-black uppercase tracking-[0.16em] text-copper-600">Карточка</div>
            <div class="mt-3 text-2xl font-black">Гарантия</div>
            <p class="mt-2 text-sm leading-6 text-slate-600">Отмечена как особенность VlasGas.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="contacts" class="section steel-surface">
      <div class="container-page grid gap-8 lg:grid-cols-[1fr_0.9fr] lg:items-center">
        <div data-reveal>
          <div class="eyebrow">Контакты</div>
          <h2 class="section-title-dark mt-3">Домодедово, Тенистая 29</h2>
          <p class="section-lead-dark">Для срочной проблемы можно позвонить. Для расчета стоимости удобнее оставить заявку с описанием симптомов.</p>
          <div class="mt-8 flex flex-col gap-3 sm:flex-row">
            <a class="btn-primary" href="<?= $phoneHref; ?>">Позвонить <?= $phoneDisplay; ?></a>
            <a class="btn-secondary" href="<?= htmlspecialchars($mapUrl, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">Открыть Яндекс.Карты</a>
          </div>
        </div>

        <div class="metal-card p-6" data-reveal>
          <dl class="grid gap-6">
            <div>
              <dt class="text-xs font-black uppercase tracking-[0.18em] text-copper-400">Адрес</dt>
              <dd class="mt-2 text-xl font-black text-white"><?= htmlspecialchars($address, ENT_QUOTES, 'UTF-8'); ?></dd>
            </div>
            <div class="industrial-rule"></div>
            <div>
              <dt class="text-xs font-black uppercase tracking-[0.18em] text-copper-400">График</dt>
              <dd class="mt-2 text-xl font-black text-white">Понедельник-воскресенье, 10:00-18:00</dd>
            </div>
            <div class="industrial-rule"></div>
            <div>
              <dt class="text-xs font-black uppercase tracking-[0.18em] text-copper-400">Телефон</dt>
              <dd class="mt-2 text-xl font-black text-white"><a href="<?= $phoneHref; ?>"><?= $phoneDisplay; ?></a></dd>
            </div>
          </dl>
        </div>
      </div>
    </section>

    <section id="final-form" class="section bg-ink text-white">
      <div class="container-page">
        <div class="overflow-hidden rounded-xl border border-white/[0.12] bg-white/[0.05] shadow-industrial">
          <div class="grid lg:grid-cols-[0.92fr_1.08fr]">
            <div class="diagnostics-photo min-h-[360px] p-6 sm:p-8 lg:min-h-full" data-reveal>
              <div class="flex h-full flex-col justify-between">
                <div>
                  <div class="eyebrow">Финальная заявка</div>
                  <h2 class="mt-4 max-w-2xl text-3xl font-black leading-[1.05] sm:text-5xl">
                    Опишите задачу по электрике, диагностике или полировке
                  </h2>
                </div>
                <div class="mt-10 grid gap-3 sm:grid-cols-3 lg:grid-cols-1 xl:grid-cols-3">
                  <div class="rounded-md border border-white/[0.16] bg-ink/60 p-4 backdrop-blur">
                    <div class="text-xs font-black uppercase tracking-[0.16em] text-copper-400">Адрес</div>
                    <div class="mt-2 text-sm font-bold">Тенистая 29</div>
                  </div>
                  <div class="rounded-md border border-white/[0.16] bg-ink/60 p-4 backdrop-blur">
                    <div class="text-xs font-black uppercase tracking-[0.16em] text-copper-400">График</div>
                    <div class="mt-2 text-sm font-bold">10:00-18:00</div>
                  </div>
                  <div class="rounded-md border border-white/[0.16] bg-ink/60 p-4 backdrop-blur">
                    <div class="text-xs font-black uppercase tracking-[0.16em] text-copper-400">Рейтинг</div>
                    <div class="mt-2 text-sm font-bold">4,9 / 25 оценок</div>
                  </div>
                </div>
              </div>
            </div>

            <form class="p-5 sm:p-8" action="send.php" method="post" data-estimate-form data-reveal>
              <input type="text" name="website" class="hidden" tabindex="-1" autocomplete="off">

              <div class="grid gap-4 sm:grid-cols-2">
                <div class="sm:col-span-2">
                  <label class="field-label" for="final_service">Что нужно сделать</label>
                  <select class="field" id="final_service" name="service" data-service-select required>
                    <option value="repair">Автоэлектрика и ремонт - от 1 000 ₽</option>
                    <option value="diagnostics">Диагностика авто - от 1 000 ₽</option>
                    <option value="polishing">Полировка авто - после оценки</option>
                    <option value="lighting">Дополнительное освещение - от 4 000 ₽</option>
                    <option value="mobile">Выездная диагностика - от 3 000 ₽</option>
                    <option value="gbo">Установка ГБО - от 20 000 ₽</option>
                  </select>
                </div>

                <div>
                  <label class="field-label" for="final_visit_type">Формат</label>
                  <select class="field" id="final_visit_type" name="visit_type">
                    <option value="service">Приеду в сервис</option>
                    <option value="mobile">Нужен выезд</option>
                    <option value="unknown">Подскажите удобный вариант</option>
                  </select>
                </div>

                <div>
                  <label class="field-label" for="final_phone">Телефон</label>
                  <input class="field" id="final_phone" name="phone" type="tel" inputmode="tel" placeholder="+7 927 519-01-33" autocomplete="tel" required>
                </div>

                <div>
                  <label class="field-label" for="final_name">Имя</label>
                  <input class="field" id="final_name" name="name" type="text" autocomplete="name" placeholder="Как к вам обратиться">
                </div>

                <div>
                  <label class="field-label" for="final_car_brand">Марка</label>
                  <select class="field" id="final_car_brand" name="car_brand" data-car-brand>
                    <option value="">Выберите марку</option>
                    <?php foreach (array_keys($carCatalog) as $brand): ?>
                      <option value="<?= htmlspecialchars($brand, ENT_QUOTES, 'UTF-8'); ?>"><?= htmlspecialchars($brand, ENT_QUOTES, 'UTF-8'); ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>

                <div class="sm:col-span-2">
                  <label class="field-label" for="final_car_model">Модель</label>
                  <select class="field" id="final_car_model" name="car_model" data-car-model disabled>
                    <option value="">Сначала выберите марку</option>
                  </select>
                  <input class="field mt-3 hidden" id="final_car_model_custom" name="car_model_custom" type="text" placeholder="Введите модель вручную" data-car-model-custom disabled>
                  <input type="hidden" name="car" data-car-combined>
                </div>

                <div class="sm:col-span-2">
                  <label class="field-label" for="final_problem">Описание проблемы</label>
                  <textarea class="field min-h-[132px] resize-y" id="final_problem" name="problem" placeholder="Что произошло с электрикой, какая ошибка на панели, что нужно по полировке или нужен ли выезд..." required></textarea>
                </div>

                <div class="sm:col-span-2">
                  <label class="field-label" for="final_comment">Комментарий</label>
                  <textarea class="field min-h-[84px] resize-y" id="final_comment" name="comment" placeholder="Удобное время для звонка или адрес для выезда"></textarea>
                </div>

                <div class="sm:col-span-2 grid gap-3">
                  <label class="consent-check">
                    <input class="consent-input" type="checkbox" name="personal_data_consent" value="yes" required>
                    <span><a href="consent-personal-data.html" target="_blank" rel="noopener">Даю согласие на обработку персональных данных.</a></span>
                  </label>
                  <label class="consent-check">
                    <input class="consent-input" type="checkbox" name="privacy_policy_consent" value="yes" required>
                    <span><a href="personal-data-policy.html" target="_blank" rel="noopener">Согласен с политикой обработки персональных данных.</a></span>
                  </label>
                </div>
              </div>

              <button class="btn-primary mt-5 w-full" type="submit">Отправить заявку</button>
              <p class="mt-4 text-sm leading-6 text-slate-400">Если вопрос срочный, звоните напрямую: <a class="font-black text-copper-400" href="<?= $phoneHref; ?>"><?= $phoneDisplay; ?></a>.</p>
              <div data-form-status aria-live="polite" role="status"></div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="border-t border-white/10 bg-ink pb-28 pt-12 text-slate-400 md:pb-10">
    <div class="container-page">
      <div class="grid gap-8 lg:grid-cols-[1.05fr_0.95fr_1fr]">
        <div>
          <div class="flex items-center gap-3">
            <span class="flex h-11 w-11 items-center justify-center rounded-md border border-copper-400/50 bg-copper-500 text-sm font-black text-white">VG</span>
            <div>
              <div class="text-xl font-black text-white">VlasGas</div>
              <div class="text-sm font-semibold">Автоэлектрика, диагностика, полировка</div>
            </div>
          </div>
          <p class="mt-5 max-w-md text-sm leading-6">Информация на сайте носит справочный характер и не является публичной офертой. Итоговая стоимость работ согласуется после диагностики или оценки автомобиля.</p>
          <a class="mt-5 inline-flex font-black text-copper-400" href="<?= htmlspecialchars($mapUrl, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">Карточка на Яндекс.Картах</a>
        </div>

        <div>
          <h2 class="text-sm font-black uppercase tracking-[0.16em] text-white">Контакты</h2>
          <dl class="mt-5 grid gap-4 text-sm leading-6">
            <div>
              <dt class="font-black text-slate-200">Телефон</dt>
              <dd><a class="text-copper-400" href="<?= $phoneHref; ?>"><?= $phoneDisplay; ?></a></dd>
            </div>
            <div>
              <dt class="font-black text-slate-200">Email для обращений</dt>
              <dd><a class="text-copper-400" href="mailto:<?= htmlspecialchars($ownerEmail, ENT_QUOTES, 'UTF-8'); ?>"><?= htmlspecialchars($ownerEmail, ENT_QUOTES, 'UTF-8'); ?></a></dd>
            </div>
            <div>
              <dt class="font-black text-slate-200">Адрес оказания услуг</dt>
              <dd><?= htmlspecialchars($address, ENT_QUOTES, 'UTF-8'); ?></dd>
            </div>
            <div>
              <dt class="font-black text-slate-200">График</dt>
              <dd>ежедневно 10:00-18:00</dd>
            </div>
          </dl>
        </div>

        <div>
          <h2 class="text-sm font-black uppercase tracking-[0.16em] text-white">Юридическая информация</h2>
          <dl class="mt-5 grid gap-3 text-sm leading-6">
            <div>
              <dt class="font-black text-slate-200">Владелец сайта / оператор ПДн</dt>
              <dd><?= htmlspecialchars($ownerLegalLabel, ENT_QUOTES, 'UTF-8'); ?></dd>
            </div>
            <div>
              <dt class="font-black text-slate-200">ИНН</dt>
              <dd><?= htmlspecialchars($ownerInn, ENT_QUOTES, 'UTF-8'); ?></dd>
            </div>
            <div>
              <dt class="font-black text-slate-200">ОГРН / ОГРНИП</dt>
              <dd>Не применяется для самозанятого физического лица на НПД</dd>
            </div>
            <div>
              <dt class="font-black text-slate-200">Адрес для юридических обращений</dt>
              <dd><?= htmlspecialchars($legalAddress, ENT_QUOTES, 'UTF-8'); ?></dd>
            </div>
            <div>
              <dt class="font-black text-slate-200">Email для обращений по ПДн</dt>
              <dd><a class="text-copper-400" href="mailto:<?= htmlspecialchars($ownerEmail, ENT_QUOTES, 'UTF-8'); ?>"><?= htmlspecialchars($ownerEmail, ENT_QUOTES, 'UTF-8'); ?></a></dd>
            </div>
            <div>
              <dt class="font-black text-slate-200">РКН</dt>
              <dd>Сведения о регистрационном номере оператора ПДн отсутствуют в переданных реквизитах</dd>
            </div>
            <div>
              <dt class="font-black text-slate-200">Налоговый статус</dt>
              <dd>Плательщик налога на профессиональный доход. При оплате формируется чек самозанятого.</dd>
            </div>
          </dl>
        </div>
      </div>

      <div class="mt-10 flex flex-col gap-4 border-t border-white/10 pt-6 text-sm sm:flex-row sm:items-center sm:justify-between">
        <div>© <?= date('Y'); ?> VlasGas. Все права защищены.</div>
        <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:gap-5">
          <a class="font-black text-copper-400" href="consent-personal-data.html">Согласие на обработку персональных данных</a>
          <a class="font-black text-copper-400" href="personal-data-policy.html">Политика обработки персональных данных</a>
        </div>
      </div>
    </div>
  </footer>

  <div class="fixed inset-x-0 bottom-0 z-40 border-t border-white/10 bg-ink/[0.96] p-3 backdrop-blur md:hidden">
    <div class="grid max-w-[21.5rem] grid-cols-2 gap-3">
      <a class="btn-primary" href="#calculator">Рассчитать</a>
      <a class="btn-secondary" href="<?= $phoneHref; ?>">Позвонить</a>
    </div>
  </div>

  <script src="assets/js/main.js" defer></script>
</body>
</html>
