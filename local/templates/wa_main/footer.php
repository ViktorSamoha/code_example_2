</main>

<div class="modal" data-name="modal-service">
    <div class="modal_block">
        <button class="modal-close-btn js-close-modal" type="button">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                        d="M1.84615 24L0 22.1538L10.1538 12L0 1.84615L1.84615 0L12 10.1538L22.1538 0L24 1.84615L13.8462 12L24 22.1538L22.1538 24L12 13.8462L1.84615 24Z"
                        fill="#162E4B"/>
            </svg>
        </button>
        <div id="modal-ajax-data">
            <div class="m-service">
                <div class="m-service_img">
                    <img src="images/m-service.jpeg" alt="">
                </div>
                <h3 class="title">Наименование услуги средней длины</h3>
                <div class="m-service_description">
                    <p>Главная цель нулевого цикла - полная подготовка участка к дальнейшему строительству. Исключение
                        ошибок и
                        правильное проведение работ позволят сэкономить время и средства на строительство объекта.</p>
                    <p>Нулевой цикл работ включает подготовку участка и всей инфраструктуры для строительства. </p>
                    <p class="uppercase"><b>Основные этапы нулевого цикла:</b></p>
                    <ul>
                        <li><b>подготовка проекта:</b></li>
                        <li><b>геодезические и геологические исследования;</b></li>
                        <li><b>разработка технической и разрешительной документации;</b></li>
                        <li><b>установка временных ограждений и предупреждающих знаков;</b></li>
                        <li><b>проведение земляных работ:</b>
                            <ul>
                                <li>подготовка котлована</li>
                                <li>заливка фундамента</li>
                                <li>гидро- и теплоизоляция</li>
                            </ul>
                        </li>
                    </ul>
                    <p>Любое строительство начинается с проекта. Все геологические и геодезические исследования должны
                        быть
                        проведены и зафиксированы в документах. После разработки проекта требуется согласование
                        надзорных органов и
                        выдача разрешений.Место строительства должно быть расчищено от мусора и подготовлено к
                        проведению работ.
                        Особое внимание следует уделить обустройству подъезда к площадке. Временные ограждения и
                        предупреждающие знаки
                        необходимы для обеспечения безопасности работников и пешеходов. Работы по строительству
                        фундамента требуют
                        качественной работы, от которой зависит надёжность строения. Основные требования: прочность,
                        морозостойкость,
                        безопасность.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="footer_wrap content-wrap">
        <span class="copyright">2023 <? $APPLICATION->ShowTitle() ?> ©</span>
        <a href="" class="dev" target="_blank">
            <img src="<?= ASSETS ?>images/wa.svg" alt="">
        </a>
    </div>
</footer>
<?

use Bitrix\Main\Page\Asset;

Asset::getInstance()->addJs(ASSETS . 'js/lib/swiper.min.js');
Asset::getInstance()->addJs(ASSETS . 'js/lib/fancybox.umd.js');
Asset::getInstance()->addJs(ASSETS . 'js/app/main.js');
?>
</body>
</html>

