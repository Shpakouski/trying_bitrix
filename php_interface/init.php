<?php
include_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/wsrubi.smtp/classes/general/wsrubismtp.php");
// отправка на email заявки с сайта
AddEventHandler("iblock", "OnAfterIBlockElementAdd", "sendOrderFromSite");

function sendOrderFromSite(&$arFields)
{
    if ('IBLOCK_ID' === 2) {
//Отправка заявки на email
        $arEventFields = array(
            "NAME"    => $arFields['PROPERTY_VALUES'][2],
            "PHONE"   => $arFields['PROPERTY_VALUES'][1],
            "EMAIL"   => $arFields['NAME'],
            "DETAILS" => $arFields['PROPERTY_VALUES'][3],
            "PAGE"    => $arFields['PROPERTY_VALUES'][5],
        );
        CEvent::Send("NEW_LEAD", "s1", $arEventFields);

    }
    AddMessage2Log($arFields);
}