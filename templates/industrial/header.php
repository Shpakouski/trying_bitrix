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
                    <ul class="navbar-nav ml-auto">
                        <li class="nav__item with-dropdown">
                            <a href="index.html" class="dropdown-toggle nav__item-link active">Home</a>
                            <i class="fas fa-angle-down" data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li class="nav__item"><a href="index.html" class="nav__item-link">Home Moderm</a></li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="home-classic.html" class="nav__item-link">Home
                                        classic</a></li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="home-architecture.html" class="nav__item-link">Home
                                        Architecture</a>
                                </li>
                                <!-- /.nav-item -->
                            </ul><!-- /.dropdown-menu -->
                        </li><!-- /.nav-item -->
                        <li class="nav__item with-dropdown">
                            <a href="about-us.html" class="dropdown-toggle nav__item-link">Company</a>
                            <i class="fas fa-angle-down" data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li class="nav__item"><a href="about-us.html" class="nav__item-link">About Us</a></li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="core-values.html" class="nav__item-link">core values</a>
                                </li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="leadership-team.html" class="nav__item-link">Leadership
                                        Team</a></li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="pricing.html" class="nav__item-link">Pricing & Plans</a>
                                </li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="faqs.html" class="nav__item-link">Help & FAQs</a></li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="careers.html" class="nav__item-link">careers</a></li>
                                <!-- /.nav-item -->
                            </ul><!-- /.dropdown-menu -->
                        </li><!-- /.nav-item -->
                        <li class="nav__item with-dropdown">
                            <a href="services.html" class="dropdown-toggle nav__item-link">Services</a>
                            <i class="fas fa-angle-down" data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li class="nav__item"><a href="services-single-service.html" class="nav__item-link">Construction
                                        Manage</a></li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="services-single-service.html" class="nav__item-link">Construction
                                        Consultants</a></li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="services-single-service.html" class="nav__item-link">Architecture
                                        &
                                        Building</a></li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="services-single-service.html" class="nav__item-link">Home
                                        Renovations</a></li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="services-single-service.html" class="nav__item-link">Tiling
                                        &
                                        Painiting</a></li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="services-single-service.html" class="nav__item-link">Interior
                                        Design</a></li>
                                <!-- /.nav-item -->
                            </ul><!-- /.dropdown-menu -->
                        </li><!-- /.nav-item -->
                        <li class="nav__item with-dropdown">
                            <a href="projects-grid.html" class="dropdown-toggle nav__item-link">Projects</a>
                            <i class="fas fa-angle-down" data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li class="nav__item"><a href="projects-grid.html" class="nav__item-link">projects
                                        grid</a></li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="projects-standard.html" class="nav__item-link">projects
                                        standard</a>
                                </li><!-- /.nav-item -->
                                <li class="nav__item"><a href="projects-tiles.html" class="nav__item-link">projects
                                        tiles</a>
                                </li><!-- /.nav-item -->
                                <li class="nav__item"><a href="projects-single-project.html" class="nav__item-link">projects
                                        single</a></li><!-- /.nav-item -->
                            </ul><!-- /.dropdown-menu -->
                        </li><!-- /.nav-item -->
                        <li class="nav__item with-dropdown">
                            <a href="blog.html" class="dropdown-toggle nav__item-link">News & Media</a>
                            <i class="fas fa-angle-down" data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li class="nav__item">
                                    <a href="blog.html" class="nav__item-link">Blog Grid</a>
                                </li><!-- /.nav-item -->
                                <li class="nav__item">
                                    <a href="blog-single-post.html" class="nav__item-link">Single Blog Post</a>
                                </li><!-- /.nav-item -->
                            </ul><!-- /.dropdown-menu -->
                        </li><!-- /.nav-item -->
                        <li class="nav__item">
                            <a href="contacs.html" class="nav__item-link">Contact Us</a>
                        </li><!-- /.nav-item -->
                    </ul><!-- /.navbar-nav -->
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
						