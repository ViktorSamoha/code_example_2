<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
//Достаем свойства раздела
$arSection = CIBlockSection::GetList([], ['IBLOCK_ID' => IB_MAIN_CONTENT, 'ID' => $arParams['PARENT_SECTION']], false, ['NAME', 'DESCRIPTION']);
while ($arSectionFields = $arSection->GetNext()) {
    $arResult['SECTION']['NAME'] = $arSectionFields['NAME'];
    $arResult['SECTION']['DESCRIPTION'] = $arSectionFields['DESCRIPTION'];
}


$arItems = [];
foreach ($arResult['ITEMS'] as $arItem) {
    if ($arItem['DISPLAY_PROPERTIES']['DOCS']) {
        if (count($arItem['DISPLAY_PROPERTIES']['DOCS']['VALUE']) > 1) {
            foreach ($arItem['DISPLAY_PROPERTIES']['DOCS']['FILE_VALUE'] as $file) {
                $arItems[] = [
                    'NAME' => $arItem['NAME'],
                    'LOGO' => $arItem['DISPLAY_PROPERTIES']['LOGO']['FILE_VALUE'],
                    'IMAGE' => $file,
                ];
            }
        } else {
            $arItems[] = [
                'NAME' => $arItem['NAME'],
                'LOGO' => $arItem['DISPLAY_PROPERTIES']['LOGO']['FILE_VALUE'],
                'IMAGE' => $arItem['DISPLAY_PROPERTIES']['DOCS']['FILE_VALUE'],
            ];
        }
    }
}
if ($arItems) {
    $arResult['ITEMS'] = $arItems;
}