<? if ( ! defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

foreach ($arResult["ITEMS"] as $arItem):

    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
        array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>

    <!-- feature item #1 -->
    <div class="feature-item">
        <div class="feature-item__content">
            <h4 class="feature-item__title"><? echo $arItem["NAME"] ?></h4>
            <p class="feature-item__desc"><? echo $arItem["PREVIEW_TEXT"]; ?></p>
            <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="btn btn__link btn__secondary"><i
                        class="icon-arrow-right"></i></a>
        </div><!-- /.feature-content -->
    </div><!-- /.col-lg-3 -->

<?php
endforeach;
?>
<!-- feature item #4 -->
<div class="feature-item bg-theme">
    <div class="slick-carousel m-slides-0"
         data-slick='{"slidesToShow": 1, "arrows": false, "dots": true, "autoPlay": true}'>
        <div class="feature-item__content">
            <h4 class="feature-item__title color-white d-flex align-items-end mb-25">
                <span class="counter">6,154</span><span>Projects</span>
            </h4>
            <p class="feature-item__desc color-white mb-0">Complete control over products allows us
                to
                ensure our
                customers receive
                the best quality prices and service.</p>
        </div><!-- /.feature-content -->
        <div class="feature-item__content">
            <h4 class="feature-item__title color-white d-flex align-items-end mb-25">
                <span class="counter">3,200</span><span>Employees</span>
            </h4>
            <p class="feature-item__desc color-white mb-0">Complete control over products allows us
                to
                ensure our
                customers receive
                the best quality prices and service.</p>
        </div><!-- /.feature-content -->
    </div>
</div><!-- /.col-lg-3 -->




