<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
//Достаем свойства раздела
$arSection = CIBlockSection::GetList([], ['IBLOCK_ID' => 5, 'ID' => $arParams['PARENT_SECTION']], false, ['NAME','DESCRIPTION']);
while ($arSectionFields = $arSection->GetNext()) {
    $arResult['SECTION']['NAME'] = $arSectionFields['NAME'];
    $arResult['SECTION']['DESCRIPTION'] = $arSectionFields['DESCRIPTION'];
}