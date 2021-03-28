<? if ( ! defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <? $APPLICATION->ShowHead(); ?>
    <!--    <meta charset="UTF-8" />-->
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
    <!--    <meta http-equiv="X-UA-Compatible" content="ie=edge" />-->
    <!--    <meta name="description" content="Amarou - Construction And Building Template">-->
    <link href="assets/images/favicon/favicon.png" rel="icon">
    <title><? $APPLICATION->ShowTitle() ?></title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Rubik:400,500,600,700%7cRoboto:400,500,700&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH; ?>/assets/css/libraries.css">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH; ?>/assets/css/style.css">
</head>

<body>
<? $APPLICATION->ShowPanel() ?>
<div class="wrapper">
    <div class="preloader">
        <div class="spinner"><span class="cube1"></span><span class="cube2"></span></div>
    </div><!-- /.preloader -->

    <!-- =========================
        Header
    =========================== -->
    <header class="header header-light header-layout1">
        <div class="header-topbar d-none d-xl-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-7 col-lg-7">
                        <div class="d-flex flex-wrap justify-content-between">
                            <ul class="contact-list list-unstyled mb-0 d-flex flex-wrap">
                                <li>
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_SHOW"   => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE"    => "",
                                            "PATH"             => SITE_TEMPLATE_PATH . "/inc/phone_header.php",
                                        )
                                    ); ?>
                                </li>
                                <li>
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_SHOW"   => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE"    => "",
                                            "PATH"             => SITE_TEMPLATE_PATH . "/inc/email_header.php",
                                        )
                                    ); ?>
                                </li>
                                <li>
                                    <i class="icon-clock"></i><span>
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        array(
                                            "AREA_FILE_SHOW"   => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE"    => "",
                                            "PATH"             => SITE_TEMPLATE_PATH . "/inc/work_time.php",
                                        )
                                    ); ?>
</span>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.col-lg-7 -->
                    <div class="col-sm-12 col-md-5 col-lg-5 d-flex flex-wrap justify-content-end">
                        <ul class="header-topbar__links d-flex flex-wrap list-unstyled mb-0">
                            <li><a href="#">New & Media</a></li>
                            <li><a href="contacs.html">Contacts</a></li>
                            <li><a href="careers.html">Careers</a></li>
                        </ul>
                        <ul class="social-icons list-unstyled mb-0">
                            <li>
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    array(
                                        "AREA_FILE_SHOW"   => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE"    => "",
                                        "PATH"             => SITE_TEMPLATE_PATH . "/inc/fb.php",
                                    )
                                ); ?>
                            </li>
                            <li>
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    array(
                                        "AREA_FILE_SHOW"   => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE"    => "",
                                        "PATH"             => SITE_TEMPLATE_PATH . "/inc/instagram.php",
                                    )
                                ); ?>
                            </li>
                            <li>
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    array(
                                        "AREA_FILE_SHOW"   => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE"    => "",
                                        "PATH"             => SITE_TEMPLATE_PATH . "/inc/twitter.php",
                                    )
                                ); ?>
                            </li>
                        </ul>
                    </div><!-- /.col-lg-5 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.header-topbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid px-0">
                <a class="navbar-brand" href="/">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW"   => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE"    => "",
                            "PATH"             => SITE_TEMPLATE_PATH . "/inc/logo.php",
                        )
                    ); ?>
                </a>
                <button class="navbar-toggler" type="button">
                    <span class="menu-lines"><span></span></span>
                </button>

                <div class="collapse navbar-collapse" id="mainNavigation">

                    <? $APPLICATION->IncludeComponent("bitrix:menu", "topmenu", array(
                        "ALLOW_MULTI_SELECT"    => "N",    // Разрешить несколько активных пунктов одновременно
                        "CHILD_MENU_TYPE"       => "left",    // Тип меню для остальных уровней
                        "DELAY"                 => "N",    // Откладывать выполнение шаблона меню
                        "MAX_LEVEL"             => "1",    // Уровень вложенности меню
                        "MENU_CACHE_GET_VARS"   => array(    // Значимые переменные запроса
                            0 => "",
                        ),
                        "MENU_CACHE_TIME"       => "3600",    // Время кеширования (сек.)
                        "MENU_CACHE_TYPE"       => "N",    // Тип кеширования
                        "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                        "ROOT_MENU_TYPE"        => "top",    // Тип меню для первого уровня
                        "USE_EXT"               => "N",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                    ),
                        false
                    ); ?>


                </div><!-- /.navbar-collapse -->

                <div class="header-actions d-flex align-items-center">
                    <button type="button" class="action-btn__search"><i class="fas fa-search"></i></button>

                    <a href="request-quote.html" class="btn btn__primary action-btn__request">
                        <span>Request A Quote</span><i class="icon-arrow-right"></i>
                    </a>
                </div>
            </div><!-- /.container -->
        </nav><!-- /.navabr -->
    </header><!-- /.Header -->
    <?
    if ($APPLICATION->GetCurPage(false) !== '/'):
        $APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs-industrial", array(
            "PATH"       => "",
            // Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
            "SITE_ID"    => "s1",
            // Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
            "START_FROM" => "0",
            // Номер пункта, начиная с которого будет построена навигационная цепочка
        ),
            false
        );
    endif; ?>
						