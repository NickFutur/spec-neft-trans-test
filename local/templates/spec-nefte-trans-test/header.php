<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$curPage = $APPLICATION->GetCurPage(false); ?>
<!-- Служебный код, необходим для защиты подключения этого файла без подключения ядра -->
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <?
        use Bitrix\Main\Page\Asset;
        $APPLICATION->ShowHead();
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/scss/reset.css");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/scss/swiper-bundle.min.css");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/scss/style.css");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/scss/media.css");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/scss/styles.css");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/template_style.css");
        ?>
    <title>
        <?$APPLICATION->ShowTitle()?>
    </title>
</head>

<body class="">
    <? $APPLICATION->ShowPanel(); ?>
    <!-- Отображение административной панели внизу страницы -->

    <!-- Header -->
    <header class="header-block">

        <div class="header-block__networks-wrap">
            <div class="address-block">
                <div class="address-block__city">
                    <p>
                        <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/local/include/address-city.php"
                    )
                );?>
                    </p>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 9.5L12 15.5L18 9.5" stroke="#E21936" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
                <p class="address-block__street">
                    <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/local/include/address-street.php"
                    )
                );?>
                </p>
            </div>
            <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/local/include/networks.php"
                    )
                );?>
        </div>
        <div class="header-block__info-wrap">
            <div class="logo">
                <a href="/">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/logo.svg" alt="logo">
                </a>
            </div>

            <div class="header-block__func-block">
                <div class="menu">
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "spec-neft-trans-menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"MENU_THEME" => "site",
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"COMPONENT_TEMPLATE" => "horizontal_multilevel"
	),
	false
);?>
                </div>
                <div class="search">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_4514_172)">
                            <path
                                d="M8.4995 1C4.36652 1 1 4.36652 1 8.4995C1 12.6325 4.36652 15.999 8.4995 15.999C10.2968 15.999 11.9473 15.3608 13.2409 14.3014L17.7186 18.7791C17.7877 18.8511 17.8705 18.9085 17.9621 18.9481C18.0537 18.9877 18.1522 19.0086 18.252 19.0096C18.3518 19.0106 18.4508 18.9917 18.5431 18.954C18.6355 18.9163 18.7194 18.8605 18.79 18.79C18.8605 18.7194 18.9163 18.6355 18.954 18.5431C18.9917 18.4508 19.0106 18.3518 19.0096 18.252C19.0086 18.1522 18.9877 18.0537 18.9481 17.9621C18.9085 17.8705 18.8511 17.7877 18.7791 17.7186L14.3014 13.2409C15.3608 11.9473 15.999 10.2968 15.999 8.4995C15.999 4.36652 12.6325 1 8.4995 1ZM8.4995 2.4999C11.8219 2.4999 14.4991 5.17713 14.4991 8.4995C14.4991 11.8219 11.8219 14.4991 8.4995 14.4991C5.17713 14.4991 2.4999 11.8219 2.4999 8.4995C2.4999 5.17713 5.17713 2.4999 8.4995 2.4999Z"
                                fill="#231F20" stroke="#868686" stroke-width="0.1" />
                        </g>
                        <defs>
                            <clipPath id="clip0_4514_172">
                                <rect width="20" height="20" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
            </div>

        </div>



    </header>
    <main>