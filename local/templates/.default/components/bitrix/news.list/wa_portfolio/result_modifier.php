<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
//Достаем свойства раздела
$arSection = CIBlockSection::GetList([], ['IBLOCK_ID' => 4, 'ACTIVE' => "Y"], false, ['NAME']);
while ($arSectionFields = $arSection->GetNext()) {
    $arResult['SECTION']['NAME'] = $arSectionFields['NAME'];
}
$arSections = [];
$arSection = CIBlockSection::GetList([], ['IBLOCK_ID' => 4, 'ID' => [13, 14, 15], 'ACTIVE' => "Y"], false, ['ID', 'NAME']);
while ($arSectionFields = $arSection->GetNext()) {
    $arResult['SECTIONS'][$arSectionFields['ID']]['NAME'] = $arSectionFields['NAME'];
    $arSections[] = $arSectionFields['ID'];
}
$arElements = [];
$arSelect = array("ID", "NAME", "DETAIL_PICTURE", 'IBLOCK_SECTION_ID');
if (isset($arParams['SELECTED_SECTION_ID'])) {
    $arFilter = array("IBLOCK_ID" => 4, 'SECTION_ID' => $arParams['SELECTED_SECTION_ID'], 'ACTIVE' => "Y");
} else {
    $arFilter = array("IBLOCK_ID" => 4, 'SECTION_ID' => $arSections, 'ACTIVE' => "Y");
    $arResult['DEFAULT_SECTION'] = $arSections[0];
}
$res = CIBlockElement::GetList([], $arFilter, false, [], $arSelect);
while ($ob = $res->GetNextElement()) {
    $arFields = $ob->GetFields();
    $arElements[] = [
        'ID' => $arFields['ID'],
        'NAME' => $arFields['NAME'],
        'DETAIL_PICTURE_URL' => CFile::GetPath($arFields['DETAIL_PICTURE']),
        'IBLOCK_SECTION_ID' => $arFields['IBLOCK_SECTION_ID'],
    ];
}
foreach ($arElements as $element) {
    $arResult['SECTIONS'][$element['IBLOCK_SECTION_ID']]['ELEMENTS'][] = $element;
}
