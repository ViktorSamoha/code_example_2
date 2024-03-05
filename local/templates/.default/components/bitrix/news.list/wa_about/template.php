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
<section class="section section-about" id="about">
    <div class="content-wrap">
        <h2 class="title"><?= $arResult['SECTION']['NAME'] ?></h2>
        <div class="description">
            <?= $arResult['SECTION']['DESCRIPTION'] ?>
        </div>
    </div>
</section>