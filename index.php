<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("");
?>
    <section class="main-screen">
        <video loop autoplay muted -webkit-playsinline playsinline class="main-screen_video">
            <source src="<?= ASSETS ?>video/background.webm" type="video/webm"/>
        </video>
        <div class="main-screen_wrap content-wrap">
            <h1 class="main-screen_title">
                <?
                $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/includes/index/title.php"
                    )
                );
                ?>
            </h1>
            <h2 class="main-screen_subtitle">
                <?
                $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/includes/index/subtitle.php"
                    )
                );
                ?>
            </h2>
            <div class="ms-numbers">
                <div class="ms-numbers_item">
                    <span>
                        <?
                        $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => "/includes/index/numbers/objects.php"
                            )
                        );
                        ?>
                    </span> сданных объектов
                </div>
                <div class="ms-numbers_item">
                    <span>
                        <?
                        $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => "/includes/index/numbers/exp.php"
                            )
                        );
                        ?>
                    </span> лет накопленного опыта
                </div>
                <div class="ms-numbers_item">
                    <span>
                        <?
                        $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => "/includes/index/numbers/people.php"
                            )
                        );
                        ?>
                    </span>сотрудников в штатном расписании
                </div>
            </div>
        </div>
        <div class="preloader">
            <div class="preloader-icon">
                <svg class="preloader-icon_line-1" width="303" height="303" viewBox="0 0 303 303" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                            d="M54.482 259.238C27.0015 233.442 10.7053 197.844 9.10006 160.104H3.125C4.83435 199.36 21.7892 236.383 50.3564 263.238C61.8827 274.195 75.093 283.215 89.4788 289.95L92.0395 284.522C78.2884 278.104 65.6172 269.574 54.482 259.238Z"
                            fill="#CC0000"/>
                    <path
                            d="M43.5326 50.6859C60.5796 32.3874 81.9131 18.6594 105.592 10.7509C129.271 2.84235 154.543 1.0044 179.109 5.40422V2.26164C157.643 -1.47733 135.629 -0.572184 114.539 4.91658C93.449 10.4053 73.7689 20.3513 56.8141 34.0895C39.8593 47.8277 26.0205 65.0417 16.2228 84.5808C6.42514 104.12 0.8943 125.534 0 147.391H3.12979C4.58213 111.328 18.9254 76.9965 43.5326 50.6859Z"
                            fill="#72C4CF"/>
                    <path
                            d="M286.382 200.672L294.633 203.529C301.551 183.619 304.227 162.472 302.487 141.457C300.747 120.443 294.63 100.03 284.532 81.54L276.992 85.6825C286.485 103.122 292.226 122.369 293.843 142.177C295.461 161.985 292.919 181.913 286.382 200.672Z"
                            fill="#72C4CF"/>
                </svg>
                <svg class="preloader-icon_line-2" width="256" height="255" viewBox="0 0 256 255" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.5"
                          d="M220.828 213.952C203.723 232.36 181.529 245.276 157.063 251.059C132.597 256.842 106.962 255.231 83.4141 246.432C59.8659 237.633 39.466 222.042 24.8043 201.638C10.1425 181.234 1.88029 156.938 1.06649 131.834C0.252701 106.73 6.92407 81.9508 20.2336 60.6419C33.5431 39.3331 52.8905 22.4559 75.8195 12.1529C98.7485 1.84998 124.225 -1.414 149.014 2.77539C173.803 6.96477 196.788 18.4186 215.049 35.6826C227.156 47.0022 236.91 60.5954 243.754 75.6846C250.598 90.7738 254.397 107.063 254.934 123.62C255.471 140.178 252.735 156.678 246.882 172.178C241.03 187.678 232.176 201.873 220.828 213.952Z"
                          stroke="#72C4CF" stroke-miterlimit="10"/>
                    <path
                            d="M155.141 252.172L153.153 243.087C122.675 249.766 90.7907 244.087 64.494 227.294C38.1973 210.502 19.6347 183.967 12.8771 153.51L3.64844 155.497C11.0849 188.278 31.1419 216.808 59.4726 234.905C87.8032 253.001 122.125 259.205 154.999 252.172H155.141Z"
                            fill="#72C4CF"/>
                </svg>
                <svg class="preloader-icon_star" width="322" height="321" viewBox="0 0 322 321" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <g class="lg-arrows">
                        <path
                                d="M148.293 82.4103H169.77L159.03 23.8284L148.29 82.4103H148.293ZM174.756 86.5657H143.305L159.03 0.782227L174.756 86.5657Z"
                                fill="#FDFDFD"/>
                        <path
                                d="M23.0532 159.017L81.6375 169.757V148.28L23.0532 159.017ZM85.7834 174.743L0 159.017L85.7834 143.292V174.743Z"
                                fill="#FDFDFD"/>
                        <path
                                d="M148.071 239.204L158.811 297.795L169.549 239.208L148.071 239.204ZM158.811 320.841L143.086 235.058H174.534L158.811 320.841Z"
                                fill="#FDFDFD"/>
                        <path
                                d="M240.374 148.36V169.84L298.958 159.1L240.374 148.36ZM236.219 174.826V143.375L322.002 159.1L236.219 174.826Z"
                                fill="#FDFDFD"/>
                    </g>
                    <g class="sm-arrows">
                        <path d="M86.9531 86.9375L105.164 123.861L123.876 105.146L86.9531 86.9375Z" fill="#FDFDFD"/>
                        <path d="M230.687 230.677L212.478 193.754L193.766 212.466L230.687 230.677Z" fill="#FDFDFD"/>
                        <path d="M231.03 87.0137L194.109 105.225L212.821 123.937L231.03 87.0137Z" fill="#FDFDFD"/>
                        <path d="M87.2188 231.1L124.142 212.889L105.43 194.177L87.2188 231.1Z" fill="#FDFDFD"/>
                    </g>
                    <path class="circle"
                          d="M159.017 99.4011C151.185 99.3877 143.428 100.922 136.19 103.915C128.952 106.908 122.378 111.302 116.843 116.843C114.296 119.39 111.982 122.159 109.929 125.119C93.5333 148.8 96.4423 180.794 116.843 201.195C128.029 212.38 143.2 218.664 159.019 218.664C174.837 218.664 190.009 212.38 201.194 201.195C212.38 190.009 218.664 174.838 218.664 159.019C218.664 143.2 212.38 128.029 201.194 116.843C195.659 111.301 189.084 106.907 181.846 103.914C174.608 100.921 166.85 99.3872 159.017 99.4011ZM159.017 224.897C150.364 224.922 141.791 223.23 133.795 219.92C125.8 216.61 118.54 211.748 112.436 205.613C89.9048 183.08 86.6947 147.742 104.805 121.584C107.07 118.317 109.624 115.259 112.436 112.448C138.121 86.7634 179.914 86.7634 205.601 112.448C231.286 138.133 231.286 179.926 205.601 205.613C199.497 211.748 192.237 216.611 184.241 219.921C176.245 223.231 167.671 224.922 159.017 224.897Z"
                          fill="white"/>
                </svg>
                <a href="#services" class="preloader-icon_link">Услуги</a>
            </div>
        </div>
    </section>

<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "wa_about",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
        "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
        "AJAX_MODE" => "N",    // Включить режим AJAX
        "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
        "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
        "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
        "AJAX_OPTION_STYLE" => "N",    // Включить подгрузку стилей
        "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
        "CACHE_GROUPS" => "N",    // Учитывать права доступа
        "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
        "CACHE_TYPE" => "A",    // Тип кеширования
        "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
        "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
        "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
        "DISPLAY_DATE" => "N",    // Выводить дату элемента
        "DISPLAY_NAME" => "N",    // Выводить название элемента
        "DISPLAY_PICTURE" => "N",    // Выводить изображение для анонса
        "DISPLAY_PREVIEW_TEXT" => "N",    // Выводить текст анонса
        "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
        "FIELD_CODE" => array(    // Поля
            0 => "",
            1 => "",
            2 => "",
        ),
        "FILTER_NAME" => "",    // Фильтр
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
        "IBLOCK_ID" => 2,    // Код информационного блока
        "IBLOCK_TYPE" => IB_MAIN_CONTENT_TYPE,    // Тип информационного блока (используется только для проверки)
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
        "INCLUDE_SUBSECTIONS" => "N",    // Показывать элементы подразделов раздела
        "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
        "NEWS_COUNT" => "1",    // Количество новостей на странице
        "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
        "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
        "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
        "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
        "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
        "PAGER_TITLE" => "Новости",    // Название категорий
        "PARENT_SECTION" => "1",    // ID раздела
        "PARENT_SECTION_CODE" => "",    // Код раздела
        "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
        "PROPERTY_CODE" => array(    // Свойства
            0 => "",
            1 => "",
        ),
        "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
        "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
        "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
        "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
        "SET_STATUS_404" => "N",    // Устанавливать статус 404
        "SET_TITLE" => "N",    // Устанавливать заголовок страницы
        "SHOW_404" => "N",    // Показ специальной страницы
        "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
        "SORT_BY2" => "ID",    // Поле для второй сортировки новостей
        "SORT_ORDER1" => "ASC",    // Направление для первой сортировки новостей
        "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
        "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
    ),
    false
); ?>

<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "wa_services",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
        "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
        "AJAX_MODE" => "N",    // Включить режим AJAX
        "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
        "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
        "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
        "AJAX_OPTION_STYLE" => "N",    // Включить подгрузку стилей
        "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
        "CACHE_GROUPS" => "N",    // Учитывать права доступа
        "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
        "CACHE_TYPE" => "A",    // Тип кеширования
        "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
        "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
        "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
        "DISPLAY_DATE" => "N",    // Выводить дату элемента
        "DISPLAY_NAME" => "N",    // Выводить название элемента
        "DISPLAY_PICTURE" => "N",    // Выводить изображение для анонса
        "DISPLAY_PREVIEW_TEXT" => "N",    // Выводить текст анонса
        "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
        "FIELD_CODE" => array(    // Поля
            0 => "NAME",
            1 => "DETAIL_TEXT",
        ),
        "FILTER_NAME" => "",    // Фильтр
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
        "IBLOCK_ID" => 3,    // Код информационного блока
        "IBLOCK_TYPE" => IB_MAIN_CONTENT_TYPE,    // Тип информационного блока (используется только для проверки)
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
        "INCLUDE_SUBSECTIONS" => "N",    // Показывать элементы подразделов раздела
        "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
        "NEWS_COUNT" => "10",    // Количество новостей на странице
        "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
        "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
        "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
        "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
        "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
        "PAGER_TITLE" => "Новости",    // Название категорий
        "PARENT_SECTION" => "",    // ID раздела
        "PARENT_SECTION_CODE" => "",    // Код раздела
        "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
        "PROPERTY_CODE" => array(    // Свойства
            0 => "",
            1 => "",
        ),
        "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
        "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
        "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
        "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
        "SET_STATUS_404" => "N",    // Устанавливать статус 404
        "SET_TITLE" => "N",    // Устанавливать заголовок страницы
        "SHOW_404" => "N",    // Показ специальной страницы
        "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
        "SORT_BY2" => "ID",    // Поле для второй сортировки новостей
        "SORT_ORDER1" => "ASC",    // Направление для первой сортировки новостей
        "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
        "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
        "COMPONENT_TEMPLATE" => ".default"
    ),
    false
); ?>
    <div id="ajax-portfolio">
        <?
        $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "wa_portfolio",
            array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                "AJAX_MODE" => "N",    // Включить режим AJAX
                "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "N",    // Включить подгрузку стилей
                "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                "CACHE_GROUPS" => "N",    // Учитывать права доступа
                "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                "CACHE_TYPE" => "A",    // Тип кеширования
                "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
                "DISPLAY_DATE" => "N",    // Выводить дату элемента
                "DISPLAY_NAME" => "N",    // Выводить название элемента
                "DISPLAY_PICTURE" => "N",    // Выводить изображение для анонса
                "DISPLAY_PREVIEW_TEXT" => "N",    // Выводить текст анонса
                "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                "FIELD_CODE" => array(    // Поля
                    0 => "DETAIL_PICTURE",
                    1 => "",
                ),
                "FILTER_NAME" => "",    // Фильтр
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                "IBLOCK_ID" => 4,    // Код информационного блока
                "IBLOCK_TYPE" => IB_MAIN_CONTENT_TYPE,    // Тип информационного блока (используется только для проверки)
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
                "INCLUDE_SUBSECTIONS" => "N",    // Показывать элементы подразделов раздела
                "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                "NEWS_COUNT" => "10",    // Количество новостей на странице
                "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                "PAGER_TITLE" => "Новости",    // Название категорий
                "PARENT_SECTION" => "",    // ID раздела
                "PARENT_SECTION_CODE" => "",    // Код раздела
                "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                "PROPERTY_CODE" => array(    // Свойства
                    0 => "",
                    1 => "",
                ),
                "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
                "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
                "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
                "SET_STATUS_404" => "N",    // Устанавливать статус 404
                "SET_TITLE" => "N",    // Устанавливать заголовок страницы
                "SHOW_404" => "N",    // Показ специальной страницы
                "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
                "SORT_BY2" => "ID",    // Поле для второй сортировки новостей
                "SORT_ORDER1" => "ASC",    // Направление для первой сортировки новостей
                "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
                "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
                "COMPONENT_TEMPLATE" => ".default",
                "SELECTED_SECTION_ID" => 13,
            ),
            false
        ); ?>
    </div>
<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "wa_team",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
        "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
        "AJAX_MODE" => "N",    // Включить режим AJAX
        "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
        "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
        "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
        "AJAX_OPTION_STYLE" => "N",    // Включить подгрузку стилей
        "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
        "CACHE_GROUPS" => "N",    // Учитывать права доступа
        "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
        "CACHE_TYPE" => "A",    // Тип кеширования
        "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
        "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
        "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
        "DISPLAY_DATE" => "N",    // Выводить дату элемента
        "DISPLAY_NAME" => "N",    // Выводить название элемента
        "DISPLAY_PICTURE" => "N",    // Выводить изображение для анонса
        "DISPLAY_PREVIEW_TEXT" => "N",    // Выводить текст анонса
        "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
        "FIELD_CODE" => array(    // Поля
            0 => "NAME",
            1 => "DETAIL_TEXT",
        ),
        "FILTER_NAME" => "",    // Фильтр
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
        "IBLOCK_ID" => 5,    // Код информационного блока
        "IBLOCK_TYPE" => IB_MAIN_CONTENT_TYPE,    // Тип информационного блока (используется только для проверки)
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
        "INCLUDE_SUBSECTIONS" => "N",    // Показывать элементы подразделов раздела
        "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
        "NEWS_COUNT" => "10",    // Количество новостей на странице
        "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
        "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
        "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
        "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
        "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
        "PAGER_TITLE" => "Новости",    // Название категорий
        "PARENT_SECTION" => "16",    // ID раздела
        "PARENT_SECTION_CODE" => "",    // Код раздела
        "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
        "PROPERTY_CODE" => array(    // Свойства
            0 => "",
            1 => "",
        ),
        "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
        "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
        "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
        "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
        "SET_STATUS_404" => "N",    // Устанавливать статус 404
        "SET_TITLE" => "N",    // Устанавливать заголовок страницы
        "SHOW_404" => "N",    // Показ специальной страницы
        "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
        "SORT_BY2" => "ID",    // Поле для второй сортировки новостей
        "SORT_ORDER1" => "ASC",    // Направление для первой сортировки новостей
        "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
        "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
        "COMPONENT_TEMPLATE" => ".default"
    ),
    false
); ?>

<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "wa_clients",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
        "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
        "AJAX_MODE" => "N",    // Включить режим AJAX
        "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
        "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
        "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
        "AJAX_OPTION_STYLE" => "N",    // Включить подгрузку стилей
        "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
        "CACHE_GROUPS" => "N",    // Учитывать права доступа
        "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
        "CACHE_TYPE" => "A",    // Тип кеширования
        "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
        "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
        "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
        "DISPLAY_DATE" => "N",    // Выводить дату элемента
        "DISPLAY_NAME" => "N",    // Выводить название элемента
        "DISPLAY_PICTURE" => "N",    // Выводить изображение для анонса
        "DISPLAY_PREVIEW_TEXT" => "N",    // Выводить текст анонса
        "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
        "FIELD_CODE" => array(    // Поля
            0 => "NAME",
            1 => "DETAIL_PICTURE",
        ),
        "FILTER_NAME" => "",    // Фильтр
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
        "IBLOCK_ID" => 6,    // Код информационного блока
        "IBLOCK_TYPE" => IB_MAIN_CONTENT_TYPE,    // Тип информационного блока (используется только для проверки)
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
        "INCLUDE_SUBSECTIONS" => "N",    // Показывать элементы подразделов раздела
        "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
        "NEWS_COUNT" => "20",    // Количество новостей на странице
        "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
        "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
        "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
        "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
        "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
        "PAGER_TITLE" => "Новости",    // Название категорий
        "PARENT_SECTION" => "",    // ID раздела
        "PARENT_SECTION_CODE" => "",    // Код раздела
        "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
        "PROPERTY_CODE" => array(    // Свойства
            0 => "",
            1 => "",
        ),
        "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
        "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
        "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
        "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
        "SET_STATUS_404" => "N",    // Устанавливать статус 404
        "SET_TITLE" => "N",    // Устанавливать заголовок страницы
        "SHOW_404" => "N",    // Показ специальной страницы
        "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
        "SORT_BY2" => "ID",    // Поле для второй сортировки новостей
        "SORT_ORDER1" => "ASC",    // Направление для первой сортировки новостей
        "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
        "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
        "COMPONENT_TEMPLATE" => ".default"
    ),
    false
); ?>

<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "wa_license",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
        "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
        "AJAX_MODE" => "N",    // Включить режим AJAX
        "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
        "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
        "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
        "AJAX_OPTION_STYLE" => "N",    // Включить подгрузку стилей
        "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
        "CACHE_GROUPS" => "N",    // Учитывать права доступа
        "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
        "CACHE_TYPE" => "A",    // Тип кеширования
        "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
        "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
        "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
        "DISPLAY_DATE" => "N",    // Выводить дату элемента
        "DISPLAY_NAME" => "N",    // Выводить название элемента
        "DISPLAY_PICTURE" => "N",    // Выводить изображение для анонса
        "DISPLAY_PREVIEW_TEXT" => "N",    // Выводить текст анонса
        "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
        "FIELD_CODE" => array(    // Поля
            0 => "NAME",
            1 => "",
        ),
        "FILTER_NAME" => "",    // Фильтр
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
        "IBLOCK_ID" => 7,    // Код информационного блока
        "IBLOCK_TYPE" => IB_MAIN_CONTENT_TYPE,    // Тип информационного блока (используется только для проверки)
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
        "INCLUDE_SUBSECTIONS" => "N",    // Показывать элементы подразделов раздела
        "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
        "NEWS_COUNT" => "20",    // Количество новостей на странице
        "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
        "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
        "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
        "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
        "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
        "PAGER_TITLE" => "Новости",    // Название категорий
        "PARENT_SECTION" => "",    // ID раздела
        "PARENT_SECTION_CODE" => "",    // Код раздела
        "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
        "PROPERTY_CODE" => array(    // Свойства
            0 => "LOGO",
            1 => "DOCS",
        ),
        "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
        "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
        "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
        "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
        "SET_STATUS_404" => "N",    // Устанавливать статус 404
        "SET_TITLE" => "N",    // Устанавливать заголовок страницы
        "SHOW_404" => "N",    // Показ специальной страницы
        "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
        "SORT_BY2" => "ID",    // Поле для второй сортировки новостей
        "SORT_ORDER1" => "ASC",    // Направление для первой сортировки новостей
        "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
        "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
        "COMPONENT_TEMPLATE" => ".default"
    ),
    false
); ?>

<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "wa_contacts",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
        "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
        "AJAX_MODE" => "N",    // Включить режим AJAX
        "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
        "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
        "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
        "AJAX_OPTION_STYLE" => "N",    // Включить подгрузку стилей
        "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
        "CACHE_GROUPS" => "N",    // Учитывать права доступа
        "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
        "CACHE_TYPE" => "A",    // Тип кеширования
        "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
        "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
        "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
        "DISPLAY_DATE" => "N",    // Выводить дату элемента
        "DISPLAY_NAME" => "N",    // Выводить название элемента
        "DISPLAY_PICTURE" => "N",    // Выводить изображение для анонса
        "DISPLAY_PREVIEW_TEXT" => "N",    // Выводить текст анонса
        "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
        "FIELD_CODE" => array(    // Поля
            0 => "DETAIL_TEXT",
            1 => "",
        ),
        "FILTER_NAME" => "",    // Фильтр
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
        "IBLOCK_ID" => 8,    // Код информационного блока
        "IBLOCK_TYPE" => IB_MAIN_CONTENT_TYPE,    // Тип информационного блока (используется только для проверки)
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
        "INCLUDE_SUBSECTIONS" => "N",    // Показывать элементы подразделов раздела
        "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
        "NEWS_COUNT" => "20",    // Количество новостей на странице
        "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
        "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
        "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
        "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
        "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
        "PAGER_TITLE" => "Новости",    // Название категорий
        "PARENT_SECTION" => "",    // ID раздела
        "PARENT_SECTION_CODE" => "",    // Код раздела
        "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
        "PROPERTY_CODE" => array(    // Свойства
            0 => "CONTACT_PHONE",
            1 => "CONTACT_EMAIL",
            2 => "NORTHERN_LATITUDE",
            3 => "EASTERN_LONGITUDE",
        ),
        "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
        "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
        "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
        "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
        "SET_STATUS_404" => "N",    // Устанавливать статус 404
        "SET_TITLE" => "N",    // Устанавливать заголовок страницы
        "SHOW_404" => "N",    // Показ специальной страницы
        "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
        "SORT_BY2" => "ID",    // Поле для второй сортировки новостей
        "SORT_ORDER1" => "ASC",    // Направление для первой сортировки новостей
        "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
        "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
        "COMPONENT_TEMPLATE" => ".default"
    ),
    false
); ?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>