<!-- ========================
  Footer
========================== -->
<footer class="footer">
    <div class="footer-primary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-5 footer-widget footer-widget-about">
                    <h6 class="footer-widget-title">About Amarou</h6>
                    <div class="footer-widget-content">
                        <p class="mb-20">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                    "AREA_FILE_SHOW"   => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE"    => "",
                                    "PATH"             => SITE_TEMPLATE_PATH . "/inc/about.php",
                                )
                            ); ?>
                        </p>
                        <a href="request-quote.html" class="btn btn__primary btn__link ">
                            <i class="icon-arrow-right"></i><span>Request A Quote</span>
                        </a>
                    </div>
                </div><!-- /.col-xl-4 -->
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 col-xl-2 footer-widget footer-widget-nav">
                    <h6 class="footer-widget-title">Services</h6>
                    <div class="footer-widget-content">
                        <nav>
                            <ul class="list-unstyled">
                                <li><a href="#">Construction Manage</a></li>
                                <li><a href="#">Construction Consultants</a></li>
                                <li><a href="#">Architecture & Building</a></li>
                                <li><a href="#">Home Renovations</a></li>
                                <li><a href="#">Tiling & Painiting</a></li>
                                <li><a href="#">Interior Design</a></li>
                            </ul>
                        </nav>
                    </div><!-- /.footer-widget-content -->
                </div><!-- /.col-xl-2 -->
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 col-xl-2 footer-widget footer-widget-nav">
                    <h6 class="footer-widget-title">Company</h6>
                    <div class="footer-widget-content">
                        <nav>
                            <ul class="list-unstyled">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="leadership-team.html">Meet Our Team</a></li>
                                <li><a href="blog.html">News & Media</a></li>
                                <li><a href="projects-grid.html">Case Studies</a></li>
                                <li><a href="contacs.html">Contacts</a></li>
                                <li><a href="careers.html">Careers</a></li>
                            </ul>
                        </nav>
                    </div><!-- /.footer-widget-content -->
                </div><!-- /.col-xl-2 -->
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 footer-widget footer-widget-contact">
                    <h6 class="footer-widget-title">Quick Contact</h6>
                    <div class="footer-widget-content">
                        <p class="mb-20"><? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                    "AREA_FILE_SHOW"   => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE"    => "",
                                    "PATH"             => SITE_TEMPLATE_PATH . "/inc/contacts_text.php",
                                )
                            ); ?></p>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW"   => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE"    => "",
                                "PATH"             => SITE_TEMPLATE_PATH . "/inc/contacts_phone.php",
                            )
                        ); ?><!-- /.contact__numbr -->
                        <p class="mb-30"><? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                    "AREA_FILE_SHOW"   => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE"    => "",
                                    "PATH"             => SITE_TEMPLATE_PATH . "/inc/contacts_address.php",
                                )
                            ); ?></p>
                        <ul class="social-icons list-unstyled">
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
                        </ul><!-- /.social-icons -->
                    </div><!-- /.footer-widget-content -->
                </div><!-- /.col-xl-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-primary -->
    <div class="footer-copyrights">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <p class="mb-0">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW"   => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE"    => "",
                                "PATH"             => SITE_TEMPLATE_PATH . "/inc/copyright.php",
                            )
                        ); ?>
                    </p>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-copyrights-->
</footer><!-- /.Footer -->
<button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>

<div class="search-popup">
    <i class="search-popup__close">&times;</i>
    <? $APPLICATION->IncludeComponent("bitrix:search.form", "searchForm", array(
        "PAGE"        => "#SITE_DIR#search/index.php",
        // ???????????????? ???????????? ?????????????????????? ???????????? (???????????????? ???????????? #SITE_DIR#)
        "USE_SUGGEST" => "N",
        // ???????????????????? ?????????????????? ?? ???????????????????? ??????????????
    ),
        false
    ); ?>
</div><!-- /. search-popup -->

</div><!-- /.wrapper -->

<script src="<?= SITE_TEMPLATE_PATH; ?>/assets/js/jquery-3.5.1.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH; ?>/assets/js/plugins.js"></script>
<script src="<?= SITE_TEMPLATE_PATH; ?>/assets/js/main.js"></script>
</body>

</html>

<?
if ( ! defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
?>
</body>
</html>