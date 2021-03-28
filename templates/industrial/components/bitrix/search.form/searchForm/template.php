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
$this->setFrameMode(true); ?>

<form class="search-popup__form" action="<?= $arResult["FORM_ACTION"] ?>">
    <? if ($arParams["USE_SUGGEST"] === "Y"): ?><? $APPLICATION->IncludeComponent(
        "bitrix:search.suggest.input",
        "",
        array(
            "NAME"          => "q",
            "VALUE"         => "",
            "INPUT_SIZE"    => 15,
            "DROPDOWN_SIZE" => 10,
        ),
        $component, array("HIDE_ICONS" => "Y")
    ); ?><? else: ?>
        <input type="text" class="search-popup__form__input" name="q" placeholder="Type Words Then Enter">
    <? endif; ?>
    <button class="search-popup__btn" name="s" type="submit"><i class="fas fa-search"></i></button>
</form>