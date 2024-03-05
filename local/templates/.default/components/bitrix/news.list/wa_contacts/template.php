<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
?>
<section class="section section--blue section-contacts" id="contacts">
    <div class="contacts">
        <div class="contacts_text">
            <h2 class="title"><?= $arResult['NAME'] ?></h2>
            <div class="contacts_list">
                <div class="contacts-item">
                    <?= $arResult['ITEMS'][0]['DETAIL_TEXT'] ?>
                </div>
                <div class="contacts-item">
                    <? foreach ($arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['CONTACT_PHONE']['VALUE'] as $phone): ?>
                        <a href="tel:<?= str_replace(' ', '', $phone) ?>" class="contacts-item_link"><?= $phone ?></a>
                    <? endforeach; ?>
                    <? foreach ($arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['CONTACT_EMAIL']['VALUE'] as $email): ?>
                        <a href="mailto:<?= $email ?>" class="contacts-item_link"><?= $email ?></a>
                    <? endforeach; ?>
                </div>
            </div>
        </div>
        <div class="contacts_map" id="map"></div>
    </div>
</section>
<script type="text/javascript">
    ymaps.ready(init);

    function init() {
        var myMap = new ymaps.Map("map", {
            center: [<?=$arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['NORTHERN_LATITUDE']['VALUE']?>, <?=$arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['EASTERN_LONGITUDE']['VALUE']?>],
            zoom: 16
        });
        var myGeoObject = new ymaps.GeoObject({
            geometry: {
                type: "Point",
                coordinates: [<?=$arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['NORTHERN_LATITUDE']['VALUE']?>, <?=$arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['EASTERN_LONGITUDE']['VALUE']?>]
            }
        });
        myMap.geoObjects.add(myGeoObject);
    }
</script>