<?php
declare(strict_types=1);

$phoneDisplay = '+7 (927) 519-01-33';
$phoneHref = 'tel:+79275190133';
$mapUrl = 'https://yandex.ru/maps/-/CPToEY3p';
$address = 'Тенистая ул., 29, микрорайон Западный, Домодедово';
$hours = 'ежедневно 10:00-18:00';

$services = [
    [
        'id' => 'gbo',
        'code' => 'GBO',
        'title' => 'Установка ГБО',
        'price' => 'от 20 000 ₽',
        'when' => 'Нужен переход на газобаллонное оборудование.',
        'includes' => 'Подбор решения, установка и проверка работы системы.',
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
        'id' => 'repair',
        'code' => 'ELEC',
        'title' => 'Ремонт / автоэлектрика',
        'price' => 'после диагностики',
        'when' => 'Не работает свет, проводка, приборка, запуск или есть разряд аккумулятора.',
        'includes' => 'Поиск причины, согласование стоимости и ремонт.',
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
  <title>VlasGas - ГБО, автоэлектрик и диагностика авто в Домодедово</title>
  <meta name="description" content="VlasGas в Домодедово: установка ГБО от 20 000 ₽, диагностика авто от 1 000 ₽, выездная диагностика от 3 000 ₽, автоэлектрика и ремонт. Рейтинг 4,9 на Яндекс.Картах.">
  <link rel="preload" href="assets/fonts/inter-cyrillic-700.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="assets/images/workshop-hero.png" as="image">
  <link rel="stylesheet" href="assets/css/styles.css">
  <script type="application/ld+json"><?= json_encode($jsonLd, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?></script>
</head>
<body class="font-sans">
  <a class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-50 focus:rounded-md focus:bg-white focus:px-4 focus:py-3 focus:text-ink" href="#calculator">Перейти к расчету стоимости</a>

  <header class="border-b border-white/10 bg-ink">
    <div class="container-page flex min-h-[76px] items-center justify-between gap-4">
      <a class="group flex items-center gap-3" href="#top" aria-label="VlasGas">
        <span class="flex h-11 w-11 items-center justify-center rounded-md border border-copper-400/50 bg-copper-500 text-sm font-black text-white">VG</span>
        <span>
          <span class="block text-xl font-black tracking-normal text-white">VlasGas</span>
          <span class="block text-sm font-semibold text-slate-400">ГБО, диагностика, автоэлектрика</span>
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
          <div class="mx-auto flex max-w-[21.5rem] flex-col items-center text-center sm:max-w-3xl lg:mx-0" data-reveal>
            <div class="flex max-w-[21.5rem] flex-wrap justify-center gap-2 sm:max-w-none">
              <span class="status-pill">4,9 на Яндекс.Картах</span>
              <span class="status-pill">25 оценок</span>
              <span class="status-pill">20 отзывов</span>
            </div>

            <h1 class="mt-7 max-w-[21.5rem] text-[2rem] font-black leading-[1.02] tracking-normal text-white sm:max-w-3xl sm:text-6xl sm:leading-[0.98] lg:text-7xl">
              <span class="block sm:inline">ГБО и</span>
              <span class="block sm:inline"> автоэлектрика:</span>
              <span class="block">сначала причина,</span>
              <span class="block">потом смета</span>
            </h1>
            <p class="mt-6 max-w-[21.5rem] text-base font-medium leading-7 text-slate-200 sm:max-w-2xl sm:text-xl sm:leading-8">
              VlasGas в Домодедово диагностирует неисправности, устанавливает ГБО, подключает доп. оборудование и помогает с выездной диагностикой без непонятной стоимости заранее.
            </p>

            <div class="mt-8 flex max-w-[21.5rem] flex-col gap-3 sm:max-w-none sm:flex-row sm:justify-center">
              <a class="btn-primary" href="#calculator">Рассчитать стоимость</a>
              <a class="btn-secondary" href="<?= $phoneHref; ?>">Позвонить <?= $phoneDisplay; ?></a>
            </div>

            <div class="mt-8 grid max-w-[21.5rem] gap-3 sm:max-w-2xl sm:grid-cols-3">
              <div class="service-chip bg-white/[0.08] text-white backdrop-blur">
                <div class="text-xs font-black uppercase tracking-[0.16em] text-copper-400">Диагностика</div>
                <div class="mt-2 text-2xl font-black">от 1 000 ₽</div>
              </div>
              <div class="service-chip bg-white/[0.08] text-white backdrop-blur">
                <div class="text-xs font-black uppercase tracking-[0.16em] text-copper-400">ГБО</div>
                <div class="mt-2 text-2xl font-black">от 20 000 ₽</div>
              </div>
              <div class="service-chip bg-white/[0.08] text-white backdrop-blur">
                <div class="text-xs font-black uppercase tracking-[0.16em] text-copper-400">Выезд</div>
                <div class="mt-2 text-2xl font-black">от 3 000 ₽</div>
              </div>
            </div>
          </div>

          <aside class="metal-card p-5 sm:p-6 lg:self-center" data-reveal>
            <div class="flex items-start justify-between gap-5">
              <div>
                <div class="eyebrow">Диагностический пост</div>
                <h2 class="mt-3 text-2xl font-black leading-tight text-white sm:text-3xl">Работы согласуются после поиска причины</h2>
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
                  <div class="font-black text-white">Вы описываете симптомы</div>
                  <p class="mt-1 text-sm leading-6 text-slate-300">Форма фиксирует услугу, формат и проблему до звонка.</p>
                </div>
              </div>
              <div class="grid grid-cols-[44px_1fr] gap-4">
                <div class="flex h-11 w-11 items-center justify-center rounded-md bg-white text-sm font-black text-ink">02</div>
                <div>
                  <div class="font-black text-white">Мастер уточняет детали</div>
                  <p class="mt-1 text-sm leading-6 text-slate-300">Если нужна диагностика или выезд, это видно до начала работ.</p>
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
          <p class="section-lead-dark">Выберите услугу, формат и опишите проблему. В заявке не будет выдуманной цены: показываем стартовую стоимость и сразу передаем детали мастеру.</p>

          <div class="mt-8 metal-card p-5">
            <div class="flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">
              <div>
                <div class="text-sm font-black uppercase tracking-[0.16em] text-slate-400">Предварительно</div>
                <div class="mt-2 text-2xl font-black text-white" data-service-output>Диагностика авто</div>
                <p class="mt-2 max-w-md text-sm leading-6 text-slate-300" data-note-output>Подходит, когда нужно понять причину до ремонта и лишних замен.</p>
              </div>
              <div class="min-w-[180px] rounded-lg border border-copper-400/45 bg-ink/70 p-4 text-left shadow-industrial">
                <div class="flex items-center gap-2 text-xs font-black uppercase tracking-[0.16em] text-copper-400">
                  <span class="h-2 w-2 rounded-full bg-signal"></span>
                  Старт
                </div>
                <div class="mt-2 text-3xl font-black text-white" data-price-output>от 1 000 ₽</div>
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
                <option value="diagnostics">Диагностика авто - от 1 000 ₽</option>
                <option value="gbo">Установка ГБО - от 20 000 ₽</option>
                <option value="lighting">Дополнительное освещение - от 4 000 ₽</option>
                <option value="mobile">Выездная диагностика - от 3 000 ₽</option>
                <option value="repair">Ремонт / автоэлектрика - после диагностики</option>
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
              <label class="field-label" for="car">Автомобиль</label>
              <input class="field" id="car" name="car" type="text" placeholder="Например: Renault Trafic">
            </div>

            <div class="sm:col-span-2">
              <label class="field-label" for="problem">Что случилось</label>
              <textarea class="field min-h-[118px] resize-y" id="problem" name="problem" placeholder="Например: не заводится, горит ошибка, проблема с проводкой, нужен монтаж ГБО..." required></textarea>
            </div>

            <div class="sm:col-span-2">
              <label class="field-label" for="comment">Комментарий</label>
              <textarea class="field min-h-[92px] resize-y" id="comment" name="comment" placeholder="Удобное время, адрес для выезда или важные детали"></textarea>
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
            <h2 class="section-title mt-3">Услуги без лишних формулировок</h2>
            <p class="section-lead">Каждый модуль отвечает на три вопроса: когда обращаться, что входит и с какой цены начинается работа.</p>
          </div>
          <a class="btn-dark lg:mb-1" href="#calculator">Подобрать услугу</a>
        </div>

        <div class="mt-10 grid gap-4 lg:grid-cols-5">
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
            <h2 class="section-title-dark mt-3">Новый визуальный язык строится вокруг прозрачности ремонта</h2>
            <p class="section-lead-dark">Фото и интерфейс показывают не “красивый сервис ради красоты”, а рабочий процесс: диагностика, приборы, согласование, ремонт.</p>

            <div class="mt-9 grid gap-4">
              <div class="metal-card p-5">
                <div class="text-lg font-black">Сначала диагностика</div>
                <p class="mt-2 text-sm leading-6 text-slate-300">Ремонт начинается с поиска причины, а не с замены деталей наугад.</p>
              </div>
              <div class="metal-card p-5">
                <div class="text-lg font-black">Стоимость до работ</div>
                <p class="mt-2 text-sm leading-6 text-slate-300">После выявления проблемы понятно, что нужно делать и сколько это стоит.</p>
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
                    Опишите проблему - мастер поймет, с чего начать
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
                    <option value="diagnostics">Диагностика авто - от 1 000 ₽</option>
                    <option value="gbo">Установка ГБО - от 20 000 ₽</option>
                    <option value="lighting">Дополнительное освещение - от 4 000 ₽</option>
                    <option value="mobile">Выездная диагностика - от 3 000 ₽</option>
                    <option value="repair">Ремонт / автоэлектрика - после диагностики</option>
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
                  <label class="field-label" for="final_car">Автомобиль</label>
                  <input class="field" id="final_car" name="car" type="text" placeholder="Марка, модель, год">
                </div>

                <div class="sm:col-span-2">
                  <label class="field-label" for="final_problem">Описание проблемы</label>
                  <textarea class="field min-h-[132px] resize-y" id="final_problem" name="problem" placeholder="Что произошло, когда началось, есть ли ошибка на панели, нужен ли выезд..." required></textarea>
                </div>

                <div class="sm:col-span-2">
                  <label class="field-label" for="final_comment">Комментарий</label>
                  <textarea class="field min-h-[84px] resize-y" id="final_comment" name="comment" placeholder="Удобное время для звонка или адрес для выезда"></textarea>
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

  <footer class="border-t border-white/10 bg-ink pb-24 pt-6 text-slate-400 md:pb-6">
    <div class="container-page flex flex-col gap-3 text-sm sm:flex-row sm:items-center sm:justify-between">
      <div class="font-bold">VlasGas, Домодедово</div>
      <a class="font-black text-copper-400" href="<?= htmlspecialchars($mapUrl, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">Карточка на Яндекс.Картах</a>
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
