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
<section class="section section-team" id="team">
    <svg class="t-circle_01" width="1226" height="1226" viewBox="0 0 1226 1226" fill="none"
         xmlns="http://www.w3.org/2000/svg">
        <path
                d="M1139.45 591.579C1139.45 885.589 901.825 1123.93 608.708 1123.93C315.59 1123.93 77.9688 885.589 77.9688 591.579C77.9688 297.568 315.59 59.2275 608.708 59.2275C901.825 59.2275 1139.45 297.568 1139.45 591.579Z"
                stroke="white" stroke-opacity="0.5" />
        <path opacity="0.5"
              d="M1060.56 1029.11C978.129 1118.01 871.173 1180.38 753.268 1208.31C635.364 1236.24 511.83 1228.46 398.349 1185.96C284.868 1143.47 186.559 1068.18 115.902 969.64C45.2462 871.104 5.42968 753.77 1.50794 632.536C-2.4138 511.303 29.7361 391.636 93.876 288.73C158.016 185.823 251.253 104.318 361.75 54.562C472.247 4.80596 595.019 -10.9567 714.482 9.27503C833.944 29.5068 944.706 84.8205 1032.71 168.194C1091.05 222.859 1138.06 288.505 1171.04 361.375C1204.02 434.245 1222.33 512.911 1224.92 592.871C1227.51 672.831 1214.32 752.517 1186.12 827.371C1157.91 902.225 1115.25 970.778 1060.56 1029.11Z"
              stroke="#72C4CF" stroke-miterlimit="10" />
        <path
                d="M745.91 1210.35L736.331 1166.48C589.451 1198.73 435.798 1171.31 309.072 1090.21C182.346 1009.12 92.8908 880.972 60.3256 733.884L15.8516 743.482C51.6885 901.791 148.345 1039.57 284.873 1126.96C421.401 1214.35 586.801 1244.32 745.225 1210.35H745.91Z"
                fill="#72C4CF" />
    </svg>
    <svg class="t-circle_02" width="1504" height="1503" viewBox="0 0 1504 1503" fill="none"
         xmlns="http://www.w3.org/2000/svg">
        <path
                d="M270.001 1258.05C137.449 1134.26 58.8446 963.432 51.1018 782.33H22.2812C30.5262 970.712 112.307 1148.37 250.101 1277.25C305.698 1329.83 369.417 1373.11 438.807 1405.43L451.158 1379.38C384.83 1348.59 323.711 1307.65 270.001 1258.05Z"
                fill="#CC0000" />
        <path
                d="M234.767 262.394C316.993 174.584 419.895 108.706 534.108 70.7543C648.322 32.803 770.223 23.983 888.719 45.0968V30.0163C785.177 12.0737 678.993 16.4173 577.265 42.7567C475.538 69.0962 380.611 116.825 298.83 182.752C217.049 248.679 150.298 331.285 103.039 425.049C55.7806 518.813 29.1027 621.575 24.7891 726.465H39.8855C46.8909 553.402 116.075 388.654 234.767 262.394Z"
                fill="#72C4CF" />
        <path
                d="M1391.01 1005.07L1430.46 1019.75C1466.15 925.045 1481.52 823.908 1475.59 722.889C1469.65 621.87 1442.54 523.222 1396.01 433.335L1359.16 452.323C1402.9 537.102 1428.34 630.108 1433.82 725.325C1439.31 820.541 1424.72 915.846 1391.01 1005.07Z"
                fill="#72C4CF" />
    </svg>
    <div class="team content-wrap">
        <div class="team_left">
            <h2 class="title"><?= $arResult['SECTION']['NAME'] ?></h2>
            <div class="description">
                <?= $arResult['SECTION']['DESCRIPTION'] ?>
            </div>
        </div>
        <div class="team_right">
            <div class="t-numbers">
                <svg class="t-numbers_bg" width="742" height="358" viewBox="0 0 742 358" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.3">
                        <path d="M371 0V149C371 165.569 357.569 179 341 179H0" stroke="#EDEDED"/>
                        <path d="M371 0V149C371 165.569 384.431 179 401 179H742" stroke="#EDEDED"/>
                        <path d="M371 358V209C371 192.431 357.569 179 341 179H0" stroke="#EDEDED"/>
                        <path d="M371 358V209C371 192.431 384.431 179 401 179H742" stroke="#EDEDED"/>
                    </g>
                </svg>
                <? foreach ($arResult['ITEMS'] as $item): ?>
                    <div class="t-numbers_item">
                        <span><?= $item['DETAIL_TEXT'] ?></span><?= $item['NAME'] ?>
                    </div>
                <? endforeach; ?>
            </div>
        </div>

    </div>
</section>