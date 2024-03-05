<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Main\Application,
    Bitrix\Main\Context,
    Bitrix\Main\Request,
    Bitrix\Main\Server,
    Bitrix\Main\Loader,
    Bitrix\Highloadblock as HL,
    Bitrix\Main\Entity;

$context = Application::getInstance()->getContext();
$request = $context->getRequest();
$values = $request->getPostList();

if ($values['ID']) {
    if (Loader::includeModule('iblock')) {
        $arSelect = array("ID", "NAME", "DETAIL_PICTURE", "DETAIL_TEXT");
        $arFilter = array("IBLOCK_ID" => 3, 'ID' => $values['ID'], "ACTIVE_DATE" => "Y", "ACTIVE" => "Y");
        $res = CIBlockElement::GetList([], $arFilter, false, [], $arSelect);
        $arResult = [];
        while ($ob = $res->GetNextElement()) {
            $arFields = $ob->GetFields();
            $arResult = [
                'ID' => $arFields['ID'],
                'NAME' => $arFields['NAME'],
                'DETAIL_PICTURE' => CFile::GetFileArray($arFields['DETAIL_PICTURE']),
                'DETAIL_TEXT' => $arFields['DETAIL_TEXT'],
            ];
        }
        if (!empty($arResult)) {
            if ($arResult['DETAIL_TEXT']) {
                ?>
                <div class="m-service">
                    <? if ($arResult['DETAIL_PICTURE']['SRC']): ?>
                        <div class="m-service_img">
                            <img src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>" alt="<?= $arResult['NAME'] ?>">
                        </div>
                    <? endif; ?>
                    <h3 class="title"><?= $arResult['NAME'] ?></h3>
                    <div class="m-service_description">
                        <?= $arResult['DETAIL_TEXT'] ?>
                    </div>
                </div>
                <?
            } else {
                echo 'false';
            }
        }
    }
} else {
    echo 'error';
}
