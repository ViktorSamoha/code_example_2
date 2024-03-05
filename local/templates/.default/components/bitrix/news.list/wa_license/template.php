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
<section class="section section--gray" id="licenses">
    <div class="content-wrap">
        <h2 class="title"><?= $arResult['NAME'] ?></h2>
        <div class="slider-licenses-block">
            <div class="slider-licenses swiper">
                <div class="slider-licenses_wrap swiper-wrapper">
                    <? foreach ($arResult['ITEMS'] as $item): ?>
                        <div class="slider-licenses_item swiper-slide">
                            <a href="<?= $item['IMAGE']['SRC'] ?>" class="license" data-fancybox>
                                <div class="license_text">
                                    <div class="license_logo">
                                        <? if ($item['LOGO']): ?>
                                            <img src="<?= $item['LOGO']['SRC'] ?>"
                                                 alt="">
                                        <? endif; ?>
                                    </div>
                                    <span class="license_title"><?= $item['NAME'] ?></span>
                                </div>
                                <div class="license_preview">
                                    <img src="<?= $item['IMAGE']['SRC'] ?>"
                                         alt="<?= $item['IMAGE']['ORIGINAL_NAME'] ?>">
                                </div>
                            </a>
                        </div>
                    <? endforeach; ?>
                </div>
            </div>
            <button class="slider-licenses_prev arrow_prev" type="button">
                <svg width="20" height="34" viewBox="0 0 20 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.5547 33L2.00296 17L18.5547 1" stroke="#0D2D58" stroke-width="2"/>
                </svg>
            </button>
            <button class="slider-licenses_next arrow_next" type="button">
                <svg width="19" height="34" viewBox="0 0 19 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L17.5517 17L1 33" stroke="#0D2D58" stroke-width="2"/>
                </svg>
            </button>
        </div>
    </div>
</section>