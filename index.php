<?require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
$APPLICATION->SetPageProperty("BODY_CLASS", "home");

?><section class="head-content-block">
<div class="container">
	<div class="head-title-block">
		<h1>Всё для <strong>мыловарения <br>
		 и косметики</strong> ручной работы</h1>
 <a href="/catalog" class="goto-catalog">Перейти в каталог</a>
	</div>
</div>
 </section> <section class="home-action">
<div class="container">
	<h2 class="action-main__title">Акции и скидки</h2>

    <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"main-action", 
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
		"COMPONENT_TEMPLATE" => "main-action",
		"CONVERT_CURRENCY" => "N",
		"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
		"DETAIL_URL" => "/catalog/element.php?ELEMENT_ID=#ELEMENT_ID#",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
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
		"PAGE_ELEMENT_COUNT" => "3",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
			0 => "RETAIL",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false}]",
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
		"SET_META_KEYWORDS" => "Y",
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
 
 <section class="home-catalog">
	<div class="container">
		<h2>Каталог продукции</h2>
		<div class="home-catalog-content">

			<div class="home-catalog-content__top">

					<div  class="home-catalog-content__column">
						<a href='#' class="home-catalog-content__item" style='background-image: url(/local/templates/milovar/images/home/catalog-sale.png);'>	
							
						<div class="home-catalog-content__item-text">
								<h5>Скидки</h5>
								<p>
									Самые приятные цены в нашем каталоге
								</p>
							</div>
						</a>
						<!-- <img alt="sale" src="/local/templates/milovar/images/home/catalog-sale.png"> </a> -->
					</div>	
					<div  class="home-catalog-content__column">

						<a href='#' class="home-catalog-content__item" style='background-image: url(/local/templates/milovar/images/home/catalog-new.png);'>
							<div class="home-catalog-content__item-text">
								<h5>Новинки</h5>
								<p>
									Самые приятные цены в нашем каталоге
								</p>
							</div>

						</a>
							<!-- <img alt="new" src="/local/templates/milovar/images/home/catalog-new.png"> </a> -->
					</div>
				</div>


		
				<div class="content-bottom">
					<a href="#" class="content-bottom-item">
								<h6>Масла</h6>
					<img alt="item" src="/local/templates/milovar/images/home/catalog-image-item1.png"> </a> <a href="#" class="content-bottom-item">
								<h6>Праздники</h6>
					<img alt="item" src="/local/templates/milovar/images/home/catalog-image-item2.png"> </a> <a href="#" class="content-bottom-item">
								<h6>Мыльная основа</h6>
					<img alt="item" src="/local/templates/milovar/images/home/catalog-image-item3.png"> </a> <a href="#" class="content-bottom-item">
								<h6>Масла</h6>
					<img alt="item" src="/local/templates/milovar/images/home/catalog-image-item1.png"> </a> <a href="#" class="content-bottom-item">
								<h6>Мыльная основа</h6>
					<img alt="item" src="/local/templates/milovar/images/home/catalog-image-item3.png"> </a> <a href="#" class="content-bottom-item">
								<h6>Масла</h6>
					<img alt="item" src="/local/templates/milovar/images/home/catalog-image-item1.png"> </a> <a href="#" class="content-bottom-item">
								<h6>Праздники</h6>
					<img alt="item" src="/local/templates/milovar/images/home/catalog-image-item2.png"> </a> <a href="#" class="content-bottom-item">
								<h6>Мыльная основа</h6>
					<img alt="item" src="/local/templates/milovar/images/home/catalog-image-item3.png"> </a> <a href="#" class="content-bottom-item">
								<h6>Масла</h6>
					<img alt="item" src="/local/templates/milovar/images/home/catalog-image-item1.png"> </a> <a href="#" class="content-bottom-item">
								<h6>Праздники</h6>
					<img alt="item" src="/local/templates/milovar/images/home/catalog-image-item2.png"> </a> <a href="#" class="content-bottom-item">
								<h6>Мыльная основа</h6>
					<img alt="item" src="/local/templates/milovar/images/home/catalog-image-item3.png"> </a> <a href="#" class="content-bottom-item">
								<h6>Масла</h6>
					<img alt="item" src="/local/templates/milovar/images/home/catalog-image-item1.png"> </a>
							</div>
				<a href="/catalog" class="goto-catalog">Смотреть весь каталог</a>
			</div>
		</div>
 </section> 
 
 
 <section class="home-about">
<div class="container">
	<div class="about-content">
		<div class="about-content-left">
			<h2>О нашем магазине</h2>
			<p>
				 На нашем сайте вы найдете не только все для мыловарения, но и полезные статьи и рецепты, узнаете много интересного про составляющие мыла: эфирные и базовые масла, отдушки, различные добавки. Мы расскажем, как превратить обычную мыльную основу, беззапаха и цвета, в потрясающий подарок, в маленькое произведение искусства.<br>
 <br>
				 Люди, которые следят за состоянием своего тела, особенно оценят мыловарение и изготовление косметики в домашних условиях. Ведь вы можете добавлять не только перламутры, отдушки и разнообразные пигменты, но и полезные составляющие, оказывающие благотворное влияние на состояние кожи волоси ногтей.
			</p>
		</div>
		<div class="about-content-right">
 <img alt="surprise-box" src="/local/templates/milovar/images/home/about-image.png">
		</div>
	</div>
</div>
 </section> <section class="home-news">
<div class="container">
	<h2>Новости</h2>
	<div class="home-news-content">
		<div class="news-content-item">
 <a href="#"> <img alt="news" src="/local/templates/milovar/images/home/news-image.png"> <span class="datanews">18.08.2020</span>
			<h5>Вышел уже 21 выпуск марафона</h5>
 </a>
		</div>
		<div class="news-content-item">
 <a href="#"> <img alt="news" src="/local/templates/milovar/images/home/news-image.png"> <span class="datanews">18.08.2020</span>
			<h5>Новый рецепт - Свеча из вощины</h5>
 </a>
		</div>
		<div class="news-content-item">
 <a href="#"> <img alt="news" src="/local/templates/milovar/images/home/news-image.png"> <span class="datanews">18.08.2020</span>
			<h5>О нашем магазине</h5>
 </a>
		</div>
	</div>
</div>
 </section>


<section class="home-masterclass">

<div class="container">
	<div class="master-class-content">
		<h2>Наш мастер-класс</h2>
		<p>
			 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
		</p>
 <a href="#" class="goto-mc">Записаться</a>
	</div>
</div>
</section>


    <section class="home-action">
        <div class="container">
            <h2 class="action-main__title">Хиты продаж</h2>

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
  <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>