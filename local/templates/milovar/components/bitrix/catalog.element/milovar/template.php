<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

//echo "<pre>",var_dump(),"</pre>";
?>

<div class="block-gallery-product">
    <div class="left-gallery">
        <div class="product-slider">
            <a class="prod-light-box" data-fancybox="gallery" rel="group" href="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>">
                <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" class="slide-item-img" alt="<?= $arResult["NAME"] ?>">
            </a>
            <a class="prod-light-box" data-fancybox="gallery" rel="group" href="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>">
                <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" class="slide-item-img" alt="<?= $arResult["NAME"] ?>">
            </a>
            <a class="prod-light-box" data-fancybox="gallery" rel="group" href="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>">
                <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" class="slide-item-img" alt="<?= $arResult["NAME"] ?>">
            </a>
            <a class="prod-light-box" data-fancybox="gallery" rel="group" href="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>">
                <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" class="slide-item-img" alt="<?= $arResult["NAME"] ?>">
            </a>
            <a class="prod-light-box" data-fancybox="gallery" rel="group" href="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>">
                <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" class="slide-item-img" alt="<?= $arResult["NAME"] ?>">
            </a>
        </div>

        <div class="product-slider-mini">
            <div class="slide-item">
                <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" class="slide-item-img" alt="<?= $arResult["NAME"] ?>">
            </div>
            <div class="slide-item">
                <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" class="slide-item-img" alt="<?= $arResult["NAME"] ?>">
            </div>
            <div class="slide-item">
                <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" class="slide-item-img" alt="<?= $arResult["NAME"] ?>">
            </div>
            <div class="slide-item">
                <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" class="slide-item-img" alt="<?= $arResult["NAME"] ?>">
            </div>
            <div class="slide-item">
                <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" class="slide-item-img" alt="<?= $arResult["NAME"] ?>">
            </div>
        </div>
    </div>
    <div class="right-info js-prod-item">
        <div class="navigation-btn">
            <? if(isset($arResult['link_tovar']['prev'])): ?>
                <a class="prev-prod" href="<?= $arResult['link_tovar']['prev'] ?>">< Пред.</a>
            <? endif; ?>

            <? if(isset($arResult['link_tovar']['next'])): ?>
                <a class="next-prod" href="<?= $arResult['link_tovar']['next'] ?>">След. ></a>
            <? endif; ?>
        </div>

        <h3><?= $arResult["NAME"] ?></h3>
        <div class="specifications">
            <h6>Внешний вид: <span class="line-dotted"></span> <span>прозрачное твердое вещество</span></h6>
            <h6>Ионный характер: <span class="line-dotted"></span> <span>анионный</span></h6>
            <h6>Массовая доля воды: <span class="line-dotted"></span> <span>18 — 22 %</span></h6>
            <h6>рН: ( 2 % раствор): <span class="line-dotted"></span> <span>9,5 — 10.5</span></h6>
            <h6>Температура плавления: <span class="line-dotted"></span> <span>65-70°С</span></h6>
            <h6>Температура застывания: <span class="line-dotted"></span> <span>50-55°С</span></h6>
            <h6>Производитель: <span class="line-dotted"></span> <span>Россия</span></h6>
            <h6>Срок годности: <span class="line-dotted"></span> <span>24 месяца</span></h6>
            <h6>Lorem: <span class="line-dotted"></span> <span>Россия</span></h6>
            <h6>Lorem: <span class="line-dotted"></span> <span>24 месяца</span></h6>
        </div>

        <div class="fasov-colvo">
            <div class="fasov-colvo__title">
                <span class="fasov" >Фасовка:</span>
            </div>

            <div class="fasov-colvo__list">

                <? foreach ($arResult['offer_data'] as $key_offer => $one_offer): ?>
                    <div class="fasov-colvo__item-container">
                        <div class="fasov-colvo__item js-sel-product<?= $one_offer['class_active'] ?>" data-big-data='<?= $one_offer['big-date'] ?>'>
                            <span class="fasov-colvo__item-quest">
                                <span class="fasov-colvo__item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                            </span>

                            <span class="fasov-colvo__item-title"><?= $one_offer['portion'] ?></span>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
        </div>

        <div class="buy-price js-cart-counter">
            <? $price_tov = (float)json_decode($arResult['offer_data'][0]['big-date'])->price ?>
            <span class="price js-cart-price"><?= number_format($price_tov, 2, '.', " ") ?> Р</span>

            <div class="colvo">
                <button class="quan-minus js-card-minus">&ndash;</button>
                <input  class="quan-num js-card-count" type="number" value="1" />
                <button class="quan-plus js-card-plus">+</button>
            </div>

            <button type="button" class="into-basket js-add-basket" data-link='<?= $arResult['offer_data'][0]['big-date'] ?>'>В корзину</button>
        </div>
    </div>
</div>

<div class="info-product-content">
    <h3>Описание товара</h3>
    <p>Мыльная основа Brilliant SLS Free предназначена для изготовления мыла ручной работы методом горячего плавления. Представляет собой однородную прозрачную массу без содержания Лаурил Сульфат Натрия и посторонних примесей. Мыльная основа brilliant (бриллиант) это идеальный выбор для тех, кто только начинает изучать мыло ручной работы. Несмотря на низкую стоимость, по качеству она сравнима
        с зарубежными аналогами. Основной ее особенностью является то, что она застывает чуть дольше других. А значит, у вас будет больше времени на введение добавок и заливку в форму Обладает высокой способностью пенообразования, нежно очищает кожу даря приятные ощущения, при этом
        не пересушивая ее. Отлично принимает масла и парфюмерные композиции. Сроки годности товаров, представленных на нашем сайте, начинаются от трех месяцев. Точную информацию о сроке годности отдельных товаров вы можете уточнить по электронной почте hello@milovarpro.ru, по телефону 8-800-301-5207 или в онлайн-чате. В случае, если вам пришел товар с меньшим сроком годности, напишите нам на электронную почту мы заменим его или вернем деньги.</p>

    <h3>Рекомендации для начинающих мыловаров:</h3>
    <ul>
        <li>Нарезайте мыльную основу кубиками со стороной примерно 0,5 -1 см.</li>
        <li>Первый раз мыло лучше плавить на водяной бане, а не в микроволновке – так оно плавится равномернее и нет шансов, что основа «убежит»</li>
        <li>Для придания мылу запаха можно добавить ароматизатор или отдушку. Вы можете добавить до 25 капель на 100 грамм мыла, в зависимости от того, какой по интенсивности запах хотите получить. Учтите, что после застывания мыло будет пахнуть чуть слабее.</li>
        <li>Окрашивать мыло можно любыми красителями, представленными в нашем ассортименте. Но имейте в виду, что пищевые красители могут со временем мигрировать при заливке многослойного мыла (один цвет будет перетекать в другой)</li>
        <li>Все отзывы о мыльной основе brilliant sls free – положительные. Она подходит для любого мыла ручной работы. Исключение составляет лишь мыло с вплавлениями – по прозрачности эта основа немного проигрывает английской и немецкой.</li>
        <li>Если Вы заливаете многослойное мыло, не забывайте каждый предыдущий слой «процарапывать» и сбрызгивать спиртом</li>
        <li>Для первых экспериментов лучше воспользоваться силиконовыми формами – из них легче достать готовое мыло</li>
        <li>Если сразу после заливки на поверхности мыла есть пузырьки – сбрызните их этиловым или муравьиным спиртом</li>
        <li>Наконец, не забудьте упаковать готовое мыло в пленку  – в противном случае оно со временем усохнет, на поверхности могут образоваться капельки воды и запах частично улетучится.</li>
        <li>ВНИМАНИЕ: С учетом усушки вес мыльной основы может колебаться от 940 до 1000 грамм</li>
    </ul>

    <h3>Дополнительная информация</h3>
    <ul>
        <li><a href="#">Экспертное заключение.jpg</a></li>
        <li><a href="#">Свид-во о гос.регистрации.jpg</a></li>
    </ul>

    <div class="grey-block">
        <p>Прозрачная мыльная основа «Brilliant SLS Free» производства Россия. Вы можете купить мыльную основу добавив товар
            в корзину, либо по бесплатному номеру: 8-(800)-350-20-57.</p>
        <p class="grey-label">Товар в наличии, доставка по Санкт-Петербургу, Москве и в другие регионы России</p>
    </div>


</div>
<section class="prod-element__bottom-sales">
    <div class="container">
        <h2 class="prod-element__bottom-sales-title">С этим товаром покупают</h2>

        <?$APPLICATION->IncludeComponent(
            "bitrix:catalog.section", 
            "main-action-bottom", 
            array(
                "ACTION_VARIABLE" => "action",
                "ADD_PICT_PROP" => "-",
                "ADD_PROPERTIES_TO_BASKET" => "Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "ADD_TO_BASKET_ACTION" => "ADD",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "BACKGROUND_IMAGE" => "-",
                "BASKET_URL" => "/personal/basket.php",
                "BROWSER_TITLE" => "-",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "COMPATIBLE_MODE" => "Y",
                "COMPONENT_TEMPLATE" => "main-action-bottom",
                "CONVERT_CURRENCY" => "N",
                "CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
                "DETAIL_URL" => "/catalog/element.php?ELEMENT_ID=#ELEMENT_ID#",
                "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_COMPARE" => "N",
                "DISPLAY_TOP_PAGER" => "N",
                "ELEMENT_SORT_FIELD" => "sort",
                "ELEMENT_SORT_FIELD2" => "id",
                "ELEMENT_SORT_ORDER" => "asc",
                "ELEMENT_SORT_ORDER2" => "desc",
                "ENLARGE_PRODUCT" => "STRICT",
                "FILTER_NAME" => "arrFilter",
                "HIDE_NOT_AVAILABLE" => "N",
                "HIDE_NOT_AVAILABLE_OFFERS" => "N",
                "IBLOCK_ID" => "28",
                "IBLOCK_TYPE" => "xmlcatalog",
                "INCLUDE_SUBSECTIONS" => "Y",
                "LABEL_PROP" => array(
                ),
                "LAZY_LOAD" => "N",
                "LINE_ELEMENT_COUNT" => "3",
                "LOAD_ON_SCROLL" => "N",
                "MESSAGE_404" => "",
                "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                "MESS_BTN_BUY" => "Купить",
                "MESS_BTN_DETAIL" => "Подробнее",
                "MESS_BTN_SUBSCRIBE" => "Подписаться",
                "MESS_NOT_AVAILABLE" => "Нет в наличии",
                "META_DESCRIPTION" => "-",
                "META_KEYWORDS" => "-",
                "OFFERS_LIMIT" => "5",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => "milovar",
                "PAGER_TITLE" => "Товары",
                "PAGE_ELEMENT_COUNT" => "18",
                "PARTIAL_PRODUCT_PROPERTIES" => "N",
                "PRICE_CODE" => array(
                    0 => "RETAIL",
                ),
                "PRICE_VAT_INCLUDE" => "Y",
                "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
                "PRODUCT_ID_VARIABLE" => "id",
                "PRODUCT_PROPS_VARIABLE" => "prop",
                "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                "PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
                "PRODUCT_SUBSCRIPTION" => "Y",
                "RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
                "RCM_TYPE" => "personal",
                "SECTION_CODE" => "",
                "SECTION_ID" => "203",
                "SECTION_ID_VARIABLE" => "SECTION_ID",
                "SECTION_URL" => "/catalog/section.php?SECTION_ID=#SECTION_ID#",
                "SECTION_USER_FIELDS" => array(
                    0 => "",
                    1 => "",
                ),
                "SEF_MODE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SHOW_ALL_WO_SECTION" => "N",
                "SHOW_CLOSE_POPUP" => "N",
                "SHOW_DISCOUNT_PERCENT" => "N",
                "SHOW_FROM_SECTION" => "N",
                "SHOW_MAX_QUANTITY" => "N",
                "SHOW_OLD_PRICE" => "N",
                "SHOW_PRICE_COUNT" => "1",
                "SHOW_SLIDER" => "Y",
                "SLIDER_INTERVAL" => "3000",
                "SLIDER_PROGRESS" => "N",
                "TEMPLATE_THEME" => "blue",
                "USE_ENHANCED_ECOMMERCE" => "N",
                "USE_MAIN_ELEMENT_SECTION" => "N",
                "USE_PRICE_COUNT" => "N",
                "USE_PRODUCT_QUANTITY" => "Y",
                "OFFERS_SORT_FIELD" => "sort",
                "OFFERS_SORT_ORDER" => "asc",
                "OFFERS_SORT_FIELD2" => "id",
                "OFFERS_SORT_ORDER2" => "desc",
                "OFFERS_FIELD_CODE" => array(
                    0 => "",
                    1 => "FASOVKA",
                    2 => "",
                ),
                "PRODUCT_DISPLAY_MODE" => "N",
                "SEF_RULE" => "/catalog/#SECTION_CODE_PATH#/",
                "SECTION_CODE_PATH" => $_REQUEST["SECTION_CODE_PATH"]
            ),
            false
        );?>
    </div>
</section>