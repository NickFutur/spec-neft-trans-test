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

        <div class="header-block__wrap">
            <div class="logo">
                <a href="/">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/logo.svg" alt="logo">
                </a>
            </div>
            <div class="header-block__func-btns">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/local/include/address.php"
                    )
                );?>
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
        </div>



    </header>
    <main>