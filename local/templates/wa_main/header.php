<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

$isErrPage = (defined("ERROR_404") && ERROR_404 === "Y");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <? $APPLICATION->ShowHead() ?>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <? Asset::getInstance()->addCss(ASSETS . "css/swiper.min.css"); ?>
    <? Asset::getInstance()->addCss(ASSETS . "css/fancybox.css"); ?>
    <? Asset::getInstance()->addCss(ASSETS . "css/main.css"); ?>
    <!--yandex_map-->
    <script src="https://api-maps.yandex.ru/2.1/?apikey="
            type="text/javascript"></script>
    <!--yandex_map-->
</head>
<body>
<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
<header class="header header--position-absolute <?= $isErrPage ? 'header--no-border' : '' ?>">
    <div class="header_wrap content-wrap">
        <?
        $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => "/includes/header/logo.php"
            )
        );
        ?>
        <? if (!$isErrPage): ?>
            <nav class="nav">
                <a href="#about" class="nav_link">О нас</a>
                <a href="#services" class="nav_link">Услуги</a>
                <a href="#works" class="nav_link">Портфолио</a>
                <a href="#partners" class="nav_link">Заказчики</a>
                <a href="#licenses" class="nav_link">Сертификаты</a>
                <a href="#contacts" class="nav_link">Контакты</a>
            </nav>
            <div class="h-contacts">
                <a href="" class="h-contacts_item" id="h-phone">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                                d="M11.6582 9.42715L8.94819 6.96315C8.82009 6.84672 8.65175 6.78462 8.47872 6.78997C8.3057 6.79532 8.14152 6.8677 8.02085 6.99182L6.42552 8.63249C6.04152 8.55915 5.26952 8.31849 4.47485 7.52582C3.68019 6.73049 3.43952 5.95649 3.36819 5.57515L5.00752 3.97915C5.1318 3.85857 5.20428 3.69437 5.20963 3.52129C5.21498 3.34821 5.15278 3.17985 5.03619 3.05182L2.57285 0.342485C2.45622 0.214056 2.29411 0.136154 2.12096 0.125325C1.94781 0.114495 1.77725 0.17159 1.64552 0.284485L0.198855 1.52515C0.0835955 1.64083 0.014801 1.79479 0.0055213 1.95782C-0.0044787 2.12448 -0.195145 6.07248 2.86619 9.13515C5.53685 11.8052 8.88219 12.0005 9.80352 12.0005C9.93819 12.0005 10.0209 11.9965 10.0429 11.9952C10.2059 11.986 10.3597 11.9169 10.4749 11.8012L11.7149 10.3538C11.8282 10.2225 11.8857 10.0521 11.8751 9.87895C11.8645 9.70581 11.7867 9.54367 11.6582 9.42715Z"
                                fill="white"/>
                    </svg>
                    <span>
                    <?
                    $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/includes/header/phone.php"
                        )
                    );
                    ?>
                </span>
                </a>
                <a href="" class="h-contacts_item" id="h-email">
                    <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                                d="M2 0C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2V2.201L6 5.432L12 2.202V2C12 1.46957 11.7893 0.960859 11.4142 0.585786C11.0391 0.210714 10.5304 0 10 0H2ZM12 3.337L6.237 6.44C6.16416 6.47921 6.08273 6.49974 6 6.49974C5.91727 6.49974 5.83584 6.47921 5.763 6.44L0 3.337V8C0 8.53043 0.210714 9.03914 0.585786 9.41421C0.960859 9.78929 1.46957 10 2 10H10C10.5304 10 11.0391 9.78929 11.4142 9.41421C11.7893 9.03914 12 8.53043 12 8V3.337Z"
                                fill="white"/>
                    </svg>
                    <span>
                    <?
                    $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/includes/header/email.php"
                        )
                    );
                    ?>
                </span>
                </a>

                <script>
                    let phone = document.getElementById('h-phone').innerHTML.trim().split(' ').join('');
                    document.querySelector('a.h-phone').setAttribute('href', 'tel:' + phone);
                    let email = document.getElementById('h-email').innerHTML.trim().split(' ').join('');
                    document.querySelector('a.email').setAttribute('href', 'mailto:' + email);

                </script>
            </div>
        <? endif; ?>
    </div>
</header>

<main <?= $isErrPage ? 'class="content-404"' : 'class="main"' ?>>
