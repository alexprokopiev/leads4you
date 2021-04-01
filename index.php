<?php
if (isset($_GET['utm_source'])) {
    $utm_source = $_GET['utm_source'];
    setcookie("utm_source", $utm_source, time() + 60 * 60 * 24 * 50);
}
if (isset($_GET['utm_medium'])) {
    $utm_medium = $_GET['utm_medium'];
    setcookie("utm_medium", $utm_medium, time() + 60 * 60 * 24 * 50);
}
if (isset($_GET['utm_campaign'])) {
    $utm_campaign = $_GET['utm_campaign'];
    setcookie("utm_campaign", $utm_campaign, time() + 60 * 60 * 24 * 50);
}
if (isset($_GET['utm_content'])) {
    $utm_content = $_GET['utm_content'];
    setcookie("utm_content", $utm_content, time() + 60 * 60 * 24 * 50);
}
if (isset($_GET['utm_term'])) {
    $utm_term = $_GET['utm_term'];
    setcookie("utm_term", $utm_term, time() + 60 * 60 * 24 * 50);
}
?>
<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Заявки на строительство домов</title>
    <meta name="description" content="Заявки на строительство домов">
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon" />
    <link href="main.css" rel="stylesheet">
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(63825814, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/63825814" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
    <script async src="https://allstat-pp.ru/1008051/73347321a075d197d0fe75aa3ca142f547eb67fb.js"></script>
</head>

<body>
    <header class="header"><a class="header__logo" href="/"><img src="img/logo.png" alt="logo" /></a><a
            class="header__phone" href="tel:+79002068661">+7 900 206 86 61</a></header>
    <section class="promo">
        <div class="container">
            <h1 class="promo__title">Привлекаю КЛИЕНТОВ на строительство домов</h1>
            <div class="promo__text">Каркасных, деревянных, панельных, блочных, кирпичных</div>
            <div class="promo__text">Оставьте ваши контакты и получите подробную информацию</div>
            <form class="form" action="#">
                <input type="tel" name="phone" placeholder="Введите номер телефона" />
                <input type="hidden" name="type" value="Строительство">
                <button onclick="ym(63825814,'reachGoal','reklama.stroyka'); return true;" type="submit">Отправить</button>
            </form>
            <div class="privacy">Нажимая на кнопку, вы даете согласие на обработку персональных данных и
                соглашаетесь c <a href="#">политикой конфиденциальности</a></div>
        </div>
    </section>
    <section class="benefits">
        <div class="container">
            <h2 class="title">Почему работать со мной выгодно?</h2>
            <div class="benefits__wrapper">
                <div class="benefits__item"><img class="benefits__img" src="img/star.svg" alt="star" />
                    <div class="benefits__descr">Настройка - Бесплатно</div>
                    <div class="benefits__text">Нет фиксированной оплаты за настройку рекламы. Только 10% комиссии с вашего рекламного бюджета</div>
                </div>
                <div class="benefits__item"><img class="benefits__img" src="img/comments.svg" alt="comments" />
                    <div class="benefits__descr">Заявки от 100 рублей!</div>
                    <div class="benefits__text">В зависимости от города и типа ваших работ, а также сезонности спроса и конкуренции</div>
                </div>
                <div class="benefits__item"><img class="benefits__img" src="img/money.svg" alt="money" />
                    <div class="benefits__descr">Готовая схема</div>
                    <div class="benefits__text">Проверенная временем рекламная кампания и лендинг, который приносит заявки</div>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages">
        <div class="container">
            <h2 class="title">Преимущества сотрудничества</h2>
            <div class="advantages__item"><img class="advantages__item-img" src="img/tick.svg" alt="tick" />
                <div class="advantages__item-wrapper">
                    <div class="advantages__item-title">Целевые клиенты</div>
                    <div class="advantages__item-descr">Я работаю с трафиком из Яндекса, где люди уже заинтересованы в постройке дома</div>
                </div>
            </div>
            <div class="advantages__item"><img class="advantages__item-img" src="img/tick.svg" alt="tick" />
                <div class="advantages__item-wrapper">
                    <div class="advantages__item-title">Низкая стоимость</div>
                    <div class="advantages__item-descr">100 рублей - минимальная стоимость заявки. В среднем при длительной работе и большом объеме выходит 200-400 рублей в зависимости от города</div>
                </div>
            </div>
            <div class="advantages__item"><img class="advantages__item-img" src="img/tick.svg" alt="tick" />
                <div class="advantages__item-wrapper">
                    <div class="advantages__item-title">Большие объемы</div>
                    <div class="advantages__item-descr">5-10 заявок в день в среднем приходится на каждый город. Объем
                        зависит от вашего бюджета</div>
                </div>
            </div>
            <div class="advantages__item"><img class="advantages__item-img" src="img/tick.svg" alt="tick" />
                <div class="advantages__item-wrapper">
                    <div class="advantages__item-title">Готовая связка</div>
                    <div class="advantages__item-descr">Мои рекламные кампании и лендинги уже протестированы и приносят
                        результат. Не трачу ваше время на разработку и тестирование</div>
                </div>
            </div>
            <div class="advantages__item"><img class="advantages__item-img" src="img/tick.svg" alt="tick" />
                <div class="advantages__item-wrapper">
                    <div class="advantages__item-title">Прозрачная схема</div>
                    <div class="advantages__item-descr">Заявки будут приходить вам на почту, строго в одни руки. 
                    Можно настроить интеграцию с CRM. Оплата через р/с по договору. Предоставляю акты</div>
                </div>
            </div>
        </div>
    </section>
    <section class="feedback" id="feedback-first">
        <div class="container">
            <h2 class="title title_other">Хотите получать целевые заявки по строительству?</h2>
            <div class="feedback__text">Для начала оставьте номер телефона. Мы позвоним вам и ответим на все вопросы!
            </div>
            <form class="form" action="#">
                <input type="tel" name="phone" placeholder="Введите номер телефона" />
                <input type="hidden" name="type" value="Строительство">
                <button onclick="ym(63825814,'reachGoal','reklama.stroyka'); return true;" type="submit">Отправить</button>
            </form>
            <div class="privacy">Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь c
                <a href="#">политикой конфиденциальности</a>
            </div>
        </div>
    </section>
    <section class="stages">
        <div class="container">
            <h2 class="title">Этапы начала работ</h2>
            <ol class="stages__wrapper">
                <li class="stages__item">
                    <div class="stages__item-wrapper">
                        <div class="stages__item-title">Вы оставляете заявку</div>
                        <div class="stages__item-descr">Мы созваниваемся. Я рассказываю о моем предложении. Получаю от
                            вас вводные данные</div>
                    </div>
                </li>
                <li class="stages__item">
                    <div class="stages__item-wrapper">
                        <div class="stages__item-title">Составление медиаплана</div>
                        <div class="stages__item-descr">С подробным расчетом о рекламных расходах и получаемом вами
                            результате, вплоть до прибыли</div>
                    </div>
                </li>
                <li class="stages__item">
                    <div class="stages__item-wrapper">
                        <div class="stages__item-title">Запуск тестовой рекламы</div>
                        <div class="stages__item-descr">По вашим данным делаю сайт и рекламную кампанию. Запускаю рекламу на тестовый бюджет на несколько дней</div>
                    </div>
                </li>
                <li class="stages__item">
                    <div class="stages__item-wrapper">
                        <div class="stages__item-title">Проверка заявок</div>
                        <div class="stages__item-descr">Вы получаете первые заявки и обрабатываете их. Делаете вывод об
                            эффективности и выгодности сотрудничества</div>
                    </div>
                </li>
                <li class="stages__item">
                    <div class="stages__item-wrapper">
                        <div class="stages__item-title">Повторный созвон</div>
                        <div class="stages__item-descr">Я получаю от вас обратную связь. И в случае положительного
                            решения мы совместно определяем требуемый для вас объем заявок и рекламный бюджет</div>
                    </div>
                </li>
                <li class="stages__item">
                    <div class="stages__item-wrapper">
                        <div class="stages__item-title">Дальнейшее сотрудничество</div>
                        <div class="stages__item-descr">Вы пополняете ТОЛЬКО рекламный бюджет. Я успешно веду для вас
                            рекламу и привожу целевые заявки!</div>
                    </div>
                </li>
            </ol>
        </div>
    </section>
    <section class="suit">
        <div class="container">
            <h2 class="title">Для кого подходит?</h2>
            <div class="suit__wrapper">
                <div class="suit__item">
                    <div class="suit__item-wrapper">
                        <div class="suit__item-title">Крупные компании</div>
                        <div class="suit__item-descr">Возможность получать 300-400 заявок в месяц в большом городе. У
                            вас есть свой отдел продаж, обрабатывающий и подогревающий большой поток лидов</div>
                    </div><img class="suit__item-img" src="img/big_house.svg" alt="big" />
                </div>
                <div class="suit__item">
                    <div class="suit__item-wrapper">
                        <div class="suit__item-title">Небольшие фирмы и бригады</div>
                        <div class="suit__item-descr">Возможность получать небольшой поток заявок по низкой стоимости. В
                            таком случае достаточно самостоятельного прозвона входящих лидов</div>
                    </div><img class="suit__item-img" src="img/little_house.svg" alt="little" />
                </div>
            </div>
        </div>
    </section>
    <section class="feedback" id="feedback-second">
        <div class="container">
            <h2 class="title title_other">Решили начать сотрудничество и получать заявки на строительство?</h2>
            <div class="feedback__text">Для начала оставьте номер телефона. Мы позвоним вам и ответим на все вопросы!
            </div>
            <form class="form" action="#">
                <input type="tel" name="phone" placeholder="Введите номер телефона" />
                <input type="hidden" name="type" value="Строительство">
                <button onclick="ym(63825814,'reachGoal','reklama.stroyka'); return true;" type="submit">Отправить</button>
            </form>
            <div class="privacy">Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь c
                <a href="#">политикой конфиденциальности</a>
            </div>
        </div>
    </section>
    <section class="slider">
        <div class="container">
            <div class="slider__img-wrapper">
                <img class="slider__img" src="img/slider_1.png" alt="slider_1" />
                <img class="slider__img" src="img/slider_2.png" alt="slider_2" />
                <img class="slider__img" src="img/slider_3.png" alt="slider_3" />
                <img class="slider__img" src="img/slider_4.png" alt="slider_4" />
                <img class="slider__img" src="img/slider_5.png" alt="slider_5" />
                <div class="slider__prev">
                    <div class="slider__arrow-left">&lt;</div>
                </div>
                <div class="slider__next">
                    <div class="slider__arrow-right">&gt;</div>
                </div>
            </div>
            <div class="slider__dots">
                <div class="slider__dot slider__dot_active"></div>
                <div class="slider__dot"></div>
                <div class="slider__dot"></div>
                <div class="slider__dot"></div>
                <div class="slider__dot"></div>
            </div>
            <div class="slider__descr-wrapper">
                <div class="slider__descr-item">
                    <div class="slider__descr-title">Скриншот заявки 1</div>
                    <div class="slider__descr-text">Такие заявки будут приходить вам на почту. В них указаны Имя,
                        Телефон, E-mail, а также основные характеристики, которые посетитель указывает при заполнении.
                        Заявки приходят с сайта напрямую на вашу почту</div>
                </div>
                <div class="slider__descr-item">
                    <div class="slider__descr-title">Скриншот заявки 2</div>
                    <div class="slider__descr-text">Иногда это может быть просто заказ обратного звонка. Но везде есть
                        UTM-метки, показывающие откуда пришла заявка</div>
                </div>
                <div class="slider__descr-item">
                    <div class="slider__descr-title">Шапка сайта</div>
                    <div class="slider__descr-text">Помимо форм для оставления заявки на каждом сайте указывается номер
                        телефона и кнопка обратного звонка. По нажатию на номер посетитель может совершить звонок</div>
                </div>
                <div class="slider__descr-item">
                    <div class="slider__descr-title">Статистика по рекламе</div>
                    <div class="slider__descr-text">Пример статистики рекламного кабинета Яндекс Директ для клиента в
                        городе Миасс. Запуск тестовой рекламной кампании. Цена цели - это стоимость оставленной заявки.
                        В небольших городах она значительно ниже областных центров</div>
                </div>
                <div class="slider__descr-item">
                    <div class="slider__descr-title">Статистика по рекламе</div>
                    <div class="slider__descr-text">Статистика по рекламному кабинету Яндекс Директ для клиента в
                        Новосибирске. Так как город крупный, заявки обходятся дороже, но остаются в пределах среднего
                        значения. Также заметен разброс стоимости по дням недели</div>
                </div>
            </div>
            <hr class="slider__divider" />
        </div>
    </section>
    <section class="aboutme">
        <div class="container">
            <h2 class="title">Хотите узнать обо мне?</h2>
            <div class="aboutme__descr">Нет проблем! Я работаю в открытую и нацелен на долгосрочное сотрудничество</div>
            <div class="aboutme__item"><img class="aboutme__img" src="img/myphoto.webp" alt="myphoto" />
                <div class="aboutme__wrapper">
                    <div class="aboutme__name">Владислав Зембицкий</div>
                    <div class="aboutme__text">Интернет-маркетолог, специалист по контекстной (Яндекс, Google) и
                        таргетированной рекламе (ВКонтакте, Facebook, Instagram).<br><br>Опыт продвижения проектов в
                        сфере строительства и ремонта более двух лет. За это время успел наработать собственные
                        стратегии и сайты, которые принесли результаты многим клиентам.<br><br>На данном сайте я
                        предлагаю вам уже упакованный продукт - связку рекламных кампаний и сайтов. Никаких
                        дополнительных сервисов и интеграций.<br><br>Помимо этого, в рамках данного предложения я не
                        беру фиксированную оплату за настройку рекламы, так как получаю комиссию с рекламных кабинетов.
                        Что значительно удешевляет конечную стоимость рекламы для вас.</div>
                </div>
            </div>
        </div>
    </section>
    <section class="feedback" id="feedback-third">
        <div class="container">
            <h2 class="title title_other">Начать работу и получать заявки на строительство</h2>
            <div class="feedback__text">Для начала оставьте номер телефона. Мы позвоним вам и ответим на все вопросы
                перед запуском!</div>
            <form class="form" action="#">
                <input type="tel" name="phone" placeholder="Введите номер телефона" />
                <input type="hidden" name="type" value="Строительство">
                <button onclick="ym(63825814,'reachGoal','reklama.stroyka'); return true;" type="submit">Отправить</button>
            </form>
            <div class="privacy">Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь c
                <a href="#">политикой конфиденциальности</a>
            </div>
        </div>
    </section>
    <section class="contacts">
        <div class="container">
            <div class="contacts__text">Либо пишите нам напрямую:</div>
            <div class="contacts__wrapper">
                <a class="contacts__whatsapp" href="https://wa.me/+79002068661">Написать в WhatsApp</a>
                <a class="contacts__telegram" href="tg://resolve?domain=HitLead_bot">Написать в Telegram</a>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="footer__visitcard">ИП Зембицкий Владислав Владимирович</div>
            <div class="footer__visitcard">ИНН 662333397720 / ОГРНИП 319665800148890</div>
            <div class="footer__visitcard">г. Екатеринбург</div><a class="footer__email"
                href="mailto:contact.leads4you@yandex.ru">contact.leads4you@yandex.ru</a><a class="footer__phone"
                href="tel:+79002068661">+7 900 206-86-61</a>
        </div>
    </footer>
    <div class="thanks">
        <div class="thanks__content">Спасибо за заявку! Мы с Вами свяжемся
            <div class="thanks__close">&#10006;</div>
        </div>
    </div>
    <section class="confid">
        <div class="confid__wrapper">
            <button class="confid__back">Перейти обратно на сайт</button>
            <h2 class="confid__header">Политика в отношении обработки персональных данных</h2>
            <p>Обращаем ваше внимание на то, что данный Интернет-сайт носит исключительно информационный характер и
                ни
                при каких условиях не является публичной офертой, определяемой положениями Статьи 437 Гражданского
                кодекса Российской Федерации.</p>
            <p>Проект осуществляет подбор займов между лицом, желающим взять займ, и кредитными учреждениями которые
                на
                основании ФЗ "О потребительском кредите (займе)" от 21.12.2013 № 353-ФЗ имеет право осуществлять
                профессиональную деятельность по предоставлению потребительских займов. Проект не является
                финансовым
                учреждением, банком или кредитором, и не несёт ответственности за любые заключенные договоры
                кредитования или условия.</p>
            <ol class="confid__rules">
                <li class="confid__item">Общие положения Настоящая политика обработки персональных данных
                    составлена в
                    соответствии с требованиями Федерального закона от 27.07.2006. №152-ФЗ «О персональных данных» и
                    определяет порядок обработки персональных данных и меры по обеспечению безопасности персональных
                    данных
                    ООО Транс+ (далее – Оператор).
                    <ol>
                        <li>Оператор ставит своей важнейшей целью и условием осуществления своей деятельности
                            соблюдение
                            прав и свобод человека и гражданина при обработке его персональных данных, в том числе
                            защиты
                            прав на неприкосновенность частной жизни, личную и семейную тайну.</li>
                        <li>Настоящая политика Оператора в отношении обработки персональных данных (далее –
                            Политика)
                            применяется ко всей информации, которую Оператор может получить о посетителях веб-сайта
                            leads4you.ru/">http://leads4you.ru/</a>.
                        </li>
                    </ol>
                </li>
                <li class="confid__item">Основные понятия, используемые в Политике
                    <ol>
                        <li>Автоматизированная обработка персональных данных – обработка персональных данных с
                            помощью
                            средств вычислительной техники;</li>
                        <li>Блокирование персональных данных – временное прекращение обработки персональных данных
                            (за
                            исключением случаев, если обработка необходима для уточнения персональных данных);</li>
                        <li>Веб-сайт – совокупность графических и информационных материалов, а также программ для
                            ЭВМ и
                            баз
                            данных, обеспечивающих их доступность в сети интернет по сетевому адресу <a
                                href="http://leads4you.ru/">http://leads4you.ru/</a>;</li>
                        <li>Информационная система персональных данных — совокупность содержащихся в базах данных
                            персональных данных, и обеспечивающих их обработку информационных технологий и
                            технических
                            средств;</li>
                        <li>Обезличивание персональных данных — действия, в результате которых невозможно определить
                            без
                            использования дополнительной информации принадлежность персональных данных конкретному
                            Пользователю или иному субъекту персональных данных;</li>
                        <li>Обработка персональных данных – любое действие (операция) или совокупность действий
                            (операций),
                            совершаемых с использованием средств автоматизации или без использования таких средств с
                            персональными данными, включая сбор, запись, систематизацию, накопление, хранение,
                            уточнение
                            (обновление, изменение), извлечение, использование, передачу (распространение,
                            предоставление,
                            доступ), обезличивание, блокирование, удаление, уничтожение персональных данных;</li>
                        <li>Оператор – государственный орган, муниципальный орган, юридическое или физическое лицо,
                            самостоятельно или совместно с другими лицами организующие и (или) осуществляющие
                            обработку
                            персональных данных, а также определяющие цели обработки персональных данных, состав
                            персональных данных, подлежащих обработке, действия (операции), совершаемые с
                            персональными
                            данными;</li>
                        <li>Персональные данные – любая информация, относящаяся прямо или косвенно к определенному
                            или
                            определяемому Пользователю веб-сайта <a
                                href="http://leads4you.ru/">http://leads4you.ru/</a>;
                        </li>
                        <li>Пользователь – любой посетитель веб-сайта <a
                                href="http://leads4you.ru/">http://leads4you.ru/</a>;</li>
                        <li>Предоставление персональных данных – действия, направленные на раскрытие персональных
                            данных
                            определенному лицу или определенному кругу лиц;</li>
                        <li>Распространение персональных данных – любые действия, направленные на раскрытие
                            персональных
                            данных неопределенному кругу лиц (передача персональных данных) или на ознакомление с
                            персональными данными неограниченного круга лиц, в том числе обнародование персональных
                            данных в
                            средствах массовой информации, размещение в информационно-телекоммуникационных сетях или
                            предоставление доступа к персональным данным каким-либо иным способом;</li>
                        <li>Трансграничная передача персональных данных – передача персональных данных на территорию
                            иностранного государства органу власти иностранного государства, иностранному
                            физическому
                            или
                            иностранному юридическому лицу;</li>
                        <li>Уничтожение персональных данных – любые действия, в результате которых персональные
                            данные
                            уничтожаются безвозвратно с невозможностью дальнейшего восстановления содержания
                            персональных
                            данных в информационной системе персональных данных и (или) уничтожаются материальные
                            носители
                            персональных данных.</li>
                    </ol>
                </li>
                <li class="confid__item">Оператор может обрабатывать следующие персональные данные Пользователя
                    <ol>
                        <li>Фамилия, имя, отчество;</li>
                        <li>Электронный адрес;</li>
                        <li>Номера телефонов;</li>
                        <li>Также на сайте происходит сбор и обработка обезличенных данных о посетителях (в т.ч.
                            файлов
                            «cookie») с помощью сервисов интернет-статистики (Яндекс Метрика и Гугл Аналитика и
                            других).
                        </li>
                        <li>Вышеперечисленные данные далее по тексту Политики объединены общим понятием Персональные
                            данные.
                        </li>
                    </ol>
                </li>
                <li class="confid__item">Цели обработки персональных данных
                    <ol>
                        <li>Цель обработки персональных данных Пользователя — информирование Пользователя
                            посредством
                            отправки электронных писем; заключение, исполнение и прекращение гражданско-правовых
                            договоров;
                            предоставление доступа Пользователю к сервисам, информации и/или материалам,
                            содержащимся на
                            веб-сайте.</li>
                        <li>Также Оператор имеет право направлять Пользователю уведомления о новых продуктах и
                            услугах,
                            специальных предложениях и различных событиях. Пользователь всегда может отказаться от
                            получения
                            информационных сообщений, направив Оператору письмо на адрес электронной почты <a
                                href="email:vladislav@leads4you.ru">vladislav@leads4you.ru</a> с пометкой «Отказ от
                            уведомлений о новых продуктах и услугах и специальных предложениях».</li>
                        <li>Обезличенные данные Пользователей, собираемые с помощью сервисов интернет-статистики,
                            служат
                            для
                            сбора информации о действиях Пользователей на сайте, улучшения качества сайта и его
                            содержания.
                        </li>
                    </ol>
                </li>
                <li class="confid__item">Правовые основания обработки персональных данных
                    <ol>
                        <li>Оператор обрабатывает персональные данные Пользователя только в случае их заполнения
                            и/или
                            отправки Пользователем самостоятельно через специальные формы, расположенные на сайте
                            <a href="http://leads4you.ru/">http://leads4you.ru/</a>. Заполняя соответствующие
                            формы
                            и/или
                            отправляя свои персональные данные
                            Оператору, Пользователь выражает свое согласие с данной Политикой.
                        </li>
                        <li>Оператор обрабатывает обезличенные данные о Пользователе в случае, если это разрешено в
                            настройках браузера Пользователя (включено сохранение файлов «cookie» и использование
                            технологии
                            JavaScript).</li>
                    </ol>
                </li>
                <li class="confid__item">Порядок сбора, хранения, передачи и других видов обработки персональных
                    данных
                    Безопасность персональных данных, которые обрабатываются Оператором, обеспечивается путем
                    реализации
                    правовых, организационных и технических мер, необходимых для выполнения в полном объеме
                    требований
                    действующего законодательства в области защиты персональных данных.
                    <ol>
                        <li>Оператор обеспечивает сохранность персональных данных и принимает все возможные меры,
                            исключающие доступ к персональным данным неуполномоченных лиц.</li>
                        <li>Персональные данные Пользователя никогда, ни при каких условиях не будут переданы
                            третьим
                            лицам,
                            за исключением случаев, связанных с исполнением действующего законодательства.</li>
                        <li>В случае выявления неточностей в персональных данных, Пользователь может актуализировать
                            их
                            самостоятельно, путем направления Оператору уведомление на адрес электронной почты
                            Оператора
                            <a href="email:vladislav@leads4you.ru">vladislav@leads4you.ru</a> с пометкой «Актуализация
                            персональных данных».
                        </li>
                        <li>Срок обработки персональных данных является неограниченным. Пользователь может в любой
                            момент
                            отозвать свое согласие на обработку персональных данных, направив Оператору уведомление
                            посредством электронной почты на электронный адрес Оператора <a
                                href="email:vladislav@leads4you.ru">vladislav@leads4you.ru</a> с пометкой «Отзыв
                            согласия
                            на
                            обработку персональных данных».</li>
                    </ol>
                </li>
                <li class="confid__item">Трансграничная передача персональных данных
                    <ol>
                        <li>Оператор до начала осуществления трансграничной передачи персональных данных обязан
                            убедиться в
                            том, что иностранным государством, на территорию которого предполагается осуществлять
                            передачу
                            персональных данных, обеспечивается надежная защита прав субъектов персональных данных.
                        </li>
                        <li>Трансграничная передача персональных данных на территории иностранных государств, не
                            отвечающих
                            вышеуказанным требованиям, может осуществляться только в случае наличия согласия в
                            письменной
                            форме субъекта персональных данных на трансграничную передачу его персональных данных
                            и/или
                            исполнения договора, стороной которого является субъект персональных данных.</li>
                    </ol>
                </li>
                <li class="confid__item">Заключительные положения
                    <ol>
                        <li>Пользователь может получить любые разъяснения по интересующим вопросам, касающимся
                            обработки
                            его
                            персональных данных, обратившись к Оператору с помощью электронной почты <a
                                href="email:vladislav@leads4you.ru">vladislav@leads4you.ru</a>.</li>
                        <li>В данном документе будут отражены любые изменения политики обработки персональных данных
                            Оператором. Политика действует бессрочно до замены ее новой версией.</li>
                        <li>Актуальная версия Политики в свободном доступе расположена в сети Интернет по адресу <a
                                href="leads4you.ru/privacy-policy.html">leads4you.ru/privacy-policy.html</a>.
                        </li>
                    </ol>
                </li>
            </ol>
            <button class="confid__back">Перейти обратно на сайт</button>
        </div>
    </section>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/jquery.maskedinput.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>