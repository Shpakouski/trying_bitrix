<?
if ( ! defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
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
$this->setFrameMode(false);

$propertyPage    = 5;
$propertyName    = 2;
$propertyPhone   = 1;
$propertyDetails = 3;
$propertyAccept  = 4;
$url             = (( ! empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>

<form name="iblock_add" action="<?= POST_FORM_ACTION_URI ?>" method="post" enctype="multipart/form-data"
      id="contactForm"
      class="contact-panel__form">
    <?= bitrix_sessid_post() ?>
    <input type="hidden" name="PROPERTY[<?= $propertyPage ?>][0]" value="<?php echo $url; ?>"/>
    <div class="row">
        <div class="col-sm-12">
            <?php
            if ( ! empty($arResult["ERRORS"])):?>
                <? ShowError(implode("<br />", $arResult["ERRORS"])) ?>
            <?endif;
            if ($arResult["MESSAGE"] <> ''):?>
                <? ShowNote($arResult["MESSAGE"]) ?>
            <? endif; ?>
            <h4 class="contact-panel__title"><?= GetMessage("IBLOCK_FORM_NAME") ?></h4>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="<?= GetMessage("IBLOCK_FORM_FIELD_NAME") ?>"
                       id="contact-name"
                       name="PROPERTY[<?= $propertyName ?>][0]">
            </div>
        </div><!-- /.col-lg-6 -->
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="<?= GetMessage("IBLOCK_FORM_FIELD_EMAIL") ?>"
                       id="contact-email"
                       name="PROPERTY[NAME][0]" required>
            </div>
        </div><!-- /.col-lg-6 -->
        <div class="col-sm-12">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="<?= GetMessage("IBLOCK_FORM_FIELD_PHONE") ?>"
                       id="contact-Phone"
                       name="PROPERTY[<?= $propertyPhone ?>][0]">
            </div>
        </div><!-- /.col-lg-6 -->
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="form-group">
                      <textarea class="form-control" placeholder="<?= GetMessage("IBLOCK_FORM_FIELD_DETAILS") ?>"
                                id="contact-messgae"
                                name="PROPERTY[<?= $propertyDetails ?>][0]"></textarea>
            </div>
        </div><!-- /.col-lg-12 -->
        <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap align-items-center">
            <button type="submit" class="btn btn__secondary mr-40" name="iblock_submit"
                    value="<?= GetMessage("IBLOCK_FORM_SUBMIT") ?>">
                <i class="icon-arrow-right"></i> <span><?= GetMessage("IBLOCK_FORM_SUBMIT") ?></span>
            </button>
        </div><!-- /.col-lg-12 -->
    </div>
</form>