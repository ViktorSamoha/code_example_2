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
<section class="section section--gray" id="works">
    <div class="content-wrap">
        <div class="title-w-filter">
            <h2 class="title"><?= $arResult['NAME'] ?></h2>
            <div class="filter">
                <? if (!$arResult['DEFAULT_SECTION']): ?>
                    <? foreach ($arResult['SECTIONS'] as $id => $section): ?>
                        <button class="filter_btn <?= $arParams['SELECTED_SECTION_ID'] == $id ? 'active' : '' ?>"
                                type="button" data-id="<?= $id ?>"><?= $section['NAME'] ?></button>
                    <? endforeach; ?>
                <? else: ?>
                    <? foreach ($arResult['SECTIONS'] as $id => $section): ?>
                        <button class="filter_btn <?= $arResult['DEFAULT_SECTION'] == $id ? 'active' : '' ?>"
                                type="button" data-id="<?= $id ?>"><?= $section['NAME'] ?></button>
                    <? endforeach; ?>
                <? endif; ?>
            </div>
        </div>
        <div class="works">
            <?
            if (!$arResult['DEFAULT_SECTION']) {
                $sectionId = $arParams['SELECTED_SECTION_ID'];
            } else {
                $sectionId = $arResult['DEFAULT_SECTION'];
            }
            ?>
            <? foreach ($arResult['SECTIONS'][$sectionId]['ELEMENTS'] as $item): ?>
                <div class="work">
                    <a href="<?= $item['DETAIL_PICTURE_URL'] ?>" class="work_link" data-fancybox>
                        <img src="<?= $item['DETAIL_PICTURE_URL'] ?>" alt="<?= $item['NAME'] ?>" class="work_img">
                        <div class="work_text">
                            <span class="work_title"><?= $item['NAME'] ?></span>
                            <svg width="36" height="35" viewBox="0 0 36 35" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M0.199769 18.0893L0.199769 16.4369L32.5944 16.407L17.5256 1.33826L18.7229 0.140911L35.8452 17.2631L18.7229 34.3854L17.5256 33.188L32.5944 18.1192L0.199769 18.0893Z"
                                        fill="white"/>
                            </svg>
                        </div>
                    </a>
                </div>
            <? endforeach; ?>
        </div>
    </div>
</section>