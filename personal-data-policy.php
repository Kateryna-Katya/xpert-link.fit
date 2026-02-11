<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> — IT-школа нового поколения</title>
    
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 rx=%2220%22 fill=%22%232563eb%22/><path d=%22M30 30L70 70M70 30L30 70%22 stroke=%22white%22 stroke-width=%2212%22 stroke-linecap=%22round%22/></svg>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Sora:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://unpkg.com/lucide@latest"></script>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__icon"></span>
                <span class="logo__text"><?= $domainTitle ?></span>
            </a>
            
            <nav class="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#courses" class="nav__link">Курсы</a></li>
                    <li><a href="./#benefits" class="nav__link">Преимущества</a></li>
                    <li><a href="./#method" class="nav__link">Методология</a></li>
                    <li><a href="./#reviews" class="nav__link">Отзывы</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--header">
                <span>Связаться</span>
                <i data-lucide="arrow-up-right"></i>
            </a>

            <button class="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>
    <main class="legal-page">
    <section class="pages">
        <div class="container">
            <span class="section-tag reveal-item">Privacy & Security</span>
            <h1 class="reveal-item">Политика касаемо обработки персональных данных</h1>

            <div class="legal-content">
                <div class="policy-intro reveal-item">
                    <h2>1. Общие положения</h2>
                    <p>
                        Настоящая политика обработки персональных данных (далее —
                        «Политика») определяет порядок и условия обработки персональных
                        данных, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и
                        устанавливает меры по обеспечению безопасности этих данных в соответствии с регламентами ЕС.
                    </p>
                    <p>
                        1.1. Важнейшей целью и условием осуществления своей деятельности
                        Оператор считает соблюдение прав и свобод человека и гражданина при
                        обработке его персональных данных, включая защиту прав на
                        неприкосновенность частной жизни.
                    </p>
                    <p>
                        1.2. Настоящая Политика применяется ко всей информации, которую
                        Оператор может получить о посетителях (далее — «Пользователи»)
                        веб-сайта <strong><?= $fullDomain ?></strong>.
                    </p>
                </div>

                <div class="policy-section reveal-item">
                    <h2>2. Основные понятия</h2>
                    <ul class="terminology-list">
                        <li>
                            <strong>Веб-сайт</strong> — совокупность графических и
                            информационных материалов <strong><?= $fullDomain ?></strong>.
                        </li>
                        <li><strong>Пользователь</strong> — любой посетитель веб-сайта.</li>
                        <li>
                            <strong>Персональные данные</strong> — любая информация,
                            относящаяся прямо или косвенно к Пользователю (субъекту данных).
                        </li>
                        <li>
                            <strong>Обработка данных</strong> — любое действие, совершаемое с данными (сбор, запись, систематизация, хранение).
                        </li>
                    </ul>
                </div>

                <div class="policy-section reveal-item">
                    <h2>3. Данные, которые мы обрабатываем</h2>
                    <div class="data-grid">
                        <div class="data-item">
                            <div class="data-item__icon">
                                <i data-lucide="user-check"></i>
                            </div>
                            <div>
                                <strong>Личные данные:</strong>
                                <p>Имя, Email, номер телефона для связи.</p>
                            </div>
                        </div>
                        <div class="data-item">
                            <div class="data-item__icon">
                                <i data-lucide="monitor-smartphone"></i>
                            </div>
                            <div>
                                <strong>Технические данные:</strong>
                                <p>Cookies, анонимный IP-адрес, данные браузера.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="policy-section reveal-item">
                    <h2>4. Цели обработки данных</h2>
                    <ul class="legal-list">
                        <li>Идентификация Пользователя для доступа к платформе обучения.</li>
                        <li>Установление обратной связи и обработка входящих заявок.</li>
                        <li>Исполнение договоров и предоставление образовательных услуг.</li>
                        <li>Улучшение качества работы IT-школы на основе аналитики.</li>
                    </ul>
                </div>

                <div class="policy-section reveal-item">
                    <h2>5. Правовые основания</h2>
                    <p>Оператор обрабатывает данные только при наличии вашего явного согласия, выраженного через использование форм на сайте или настройки файлов «cookie» в вашем браузере. Мы гарантируем конфиденциальность данных в рамках инфраструктуры <strong><?= $domainTitle ?></strong>.</p>
                </div>

                <div class="policy-section contact-footer-policy reveal-item">
                    <h2>6. Вопросы и отзывы</h2>
                    <p>Если у вас возникли вопросы касательно ваших данных, вы можете направить запрос нашей службе поддержки:</p>
                    <a href="mailto:hello@<?= $fullDomain ?>" class="policy-mail">hello@<?= $fullDomain ?></a>
                </div>
            </div>
        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#hero" class="logo logo--footer">
                    <span class="logo__text"><?= $domainTitle ?></span>
                </a>
                <p class="footer__tagline">Технологии нового поколения для вашего карьерного взлета.</p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__links">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#courses">Курсы</a></li>
                    <li><a href="./#benefits">Преимущества</a></li>
                    <li><a href="./#reviews">Отзывы</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Юридическая информация</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Политика конфиденциальности</a></li>
                    <li><a href="./cookies.php">Cookie файлы</a></li>
                    <li><a href="./terms.php">Условия использования</a></li>
                    <li><a href="./personal-data-policy.php">Персональные данные</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contact-list">
                    <li>
                        <i data-lucide="phone"></i>
                        <a href="tel:+33189480054">+33 1 89 48 00 54</a>
                    </li>
                    <li>
                        <i data-lucide="mail"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                    </li>
                    <li>
                        <i data-lucide="map-pin"></i>
                        <span>15 Rue de la Paix, 75002 Paris, France</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="container footer__bottom">
            <p>&copy; 2026 <?= $domainTitle ?>. Все права защищены.</p>
            <div class="footer__legal-inline">
                <a href="./return.php">Возврат</a>
                <a href="./disclaimer.php">Отказ от ответственности</a>
                <a href="./contact.php">Контакты</a>
            </div>
        </div>
    </footer>
    <div id="cookie-popup" class="cookie-popup">
        <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie политике</a>.</p>
        <button id="cookie-accept" class="btn btn--header">Принять</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js"></script>
    <script src="script.js"></script>
</body>
</html>