<?php require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("title", "О компании");

$APPLICATION->SetTitle("Добро пожаловать в сервисный центр Ударник");

?>
<div class="intec-content-wrapper">
	<div class="intec-content">
		<div class="my-flex-cont-about">
			<div class="my-flex-box-about">
				<div class="wrapper-text-about-left">
					<div class="wrapper-header-about">
						<span class="header-about">Сервис работает с 21.09.2016</span>
					</div>
					<p>
						С самого начала работы клиентская база стала постоянной и только росла.
					</p>
					<p>
						За время существования сервиса было произведено более 8000 ремонтов.
					</p>
					<p>
						Накоплен немалый опыт в сфере ремонта, что позволит решать любые задачи, даже самые сложные.
					</p>
					<p>
						В наличии имеем весь специализированный инструмент и расходники.
					</p>
					<p>
						Постоянно поддерживаем запас всех ходовых и необходимых запчастей.
					</p>
					<p>
						Удобное расположение между станциями метро Дмитровская и Бутырская
					</p>
					<p>
						К нам легко добраться общественным транспортом и для автомобиля есть бесплатная парковка
					</p>
				</div>
			</div>
			<div class="my-flex-box-about">
				<div class="wrapper-text-about-right">
					<div class="wrapper-header-about">
						<span class="header-about">Наша цель</span>
					</div>
					<p>
						Сделать качесвенный и доступный сервис всех видов техники и инструментов для каждого клиента
					</p>
					<div class="wrapper-header-about">
						<span class="header-about">Информация о юридическом лице</span>
					</div>
					<p>
						Индивидуальный предприниматель <br>
						<b>Седых Сегрей Сергеевич</b>
					</p>
					<p>
						Фактический адрес: <br>
						<b>127254, г. Москва, проезд Добролюбова д.3, стр. 4</b>
					</p>
					<p>
						Юридический адрес: <br>
						<b>123458, г. Москва, ул. Одинцовская, 23</b>
					</p>
					<p>
						<b>ИНН</b> 773403386143
					</p>
					<p>
						<b>ОГРНИП</b>318774600439460
					</p>
				</div>
			</div>
		</div>
	</div>
	<style>
		.my-flex-cont-about {
			display: flex;
			align-items: flex-start;
			width: 100%;
			color: #393C4B;
			margin-bottom: 60px;
		}

		.my-flex-box-about {
			padding: 5px;
			font-size: 16px;
		}

		.header-about:before {
			content: url('/local/templates/universe_s1/icons/znak.png');
			font-size: 18px;
			font-weight: 700;
			display: inline-block;
			vertical-align: middle;
			height: 100%;
			padding-right: 15px;
		}

		.header-about {
			font-size: 17px;
			font-weight: 700;
			display: inline-block;
			width: 60%;
			vertical-align: middle;
		}

		.wrapper-header-about {
			margin-bottom: 15px;
		}

		.wrapper-text-about-left {
			width: 90%;
		}

		h1 {
			font-weight: 700;
			color: #393C4B;
		}

		.my-flex-box-about p {
			margin: 0 0 13px 0;
		}

		#i-17-intec-universe-main-services-template-8-E57RVsHiOmVa {
			background-color: #f4f4f4 !important;
			fill: #f4f4f4 !important;
			padding: 60px 0 60px 0;
		}

		#i-19-intec-universe-main-reviews-template-13-tmM8CssPei3V {
			background-color: #f4f4f4 !important;
			fill: #f4f4f4 !important;
			padding: 60px 0 60px 0;
		}

		#i-20-intec-universe-main-brands-template-1-ZxlMNuLRZfyp {
			padding: 60px 0 60px 0;
		}

		.intec-template .intec-template-layout-page-wrapper {
			margin-bottom: 0;
		}

		@media (max-width: 600px) {
			.my-flex-cont-about {
				flex-wrap: wrap;
				width: 100%;
			}

			.wrapper-text-about-left {
				padding: 0 15px 0 15px;
			}

			.wrapper-text-about-right {
				padding: 0 15px 0 15px;
			}

			.header-about:before {
				content: '';
				padding-right: 0;
			}

			#i-17-intec-universe-main-services-template-8-E57RVsHiOmVa {
				background-color: #f4f4f4 !important;
				fill: #f4f4f4 !important;
				padding: 40px 0 40px 0;
			}

			#i-19-intec-universe-main-reviews-template-13-tmM8CssPei3V {
				background-color: #f4f4f4 !important;
				fill: #f4f4f4 !important;
				padding: 40px 0 40px 0;
			}

			#i-20-intec-universe-main-brands-template-1-ZxlMNuLRZfyp {
				padding: 40px 0 40px 0;
			}

			.my-flex-cont-about {
				margin-bottom: 40px;
			}

			.header-about {
				width: 100%;
			}

			.widget.c-brands.c-brands-template-1[data-slider="false"] .widget-item-wrapper {
				padding: 15px 5px !important;
			}
		}

		@media (max-width: 768px) {
			.widget-web-form-2 .widget-web-form-2-title {
				word-break: inherit;
			}

			.widget.c-brands.c-brands-template-1[data-slider="false"][data-columns="5"] .widget-item-wrapper {
				padding: 16px 20px;
			}
		}
	</style>
	<div class="container-572" style="margin: 0px 0px 0px 0px; padding: 60px 0px 40px 0px; background-color: #F4F4F4;">
        <? $APPLICATION->IncludeComponent(
            "intec.universe:main.advantages",
            "template.2",
            array(
                "BACKGROUND_COLOR" => "#F4F4F4",
                "BACKGROUND_SHOW" => "Y",
                "CACHE_TIME" => "0",
                "CACHE_TYPE" => "A",
                "COLUMNS" => "5",
                "COMPONENT_TEMPLATE" => "template.2",
                "DESCRIPTION" => "",
                "DESCRIPTION_POSITION" => "center",
                "DESCRIPTION_SHOW" => "N",
                "ELEMENTS_COUNT" => "4",
                "HEADER" => "КАК МЫ РАБОТАЕМ",
                "HEADER_POSITION" => "left",
                "HEADER_SHOW" => "Y",
                "IBLOCK_ID" => "9",
                "IBLOCK_TYPE" => "content",
                "LAZYLOAD_USE" => "N",
                "LINE_COUNT" => "4",
                "LINK_PROPERTY_USE" => "N",
                "LINK_USE" => "N",
                "MOBILE_COLUMNS" => "2",
                "NAME_ALIGN" => "center",
                "NAME_SHOW" => "Y",
                "ORDER_BY" => "ASC",
                "PICTURE_ALIGN" => "center",
                "PICTURE_POSITION" => "top",
                "PICTURE_SHOW" => "Y",
                "PREVIEW_ALIGN" => "center",
                "PREVIEW_SHOW" => "Y",
                "PROPERTY_SVG_FILE" => "ICON",
                "SECTIONS" => array(0 => "", 1 => "",),
                "SECTIONS_MODE" => "id",
                "SETTINGS_USE" => "Y",
                "SORT_BY" => "SORT",
                "SVG_FILE_USE" => "Y",
                "THEME" => "light",
                "TITLE_POSITION" => "top",
                "VIEW" => "number"
            )
        ); ?>
    </div>
    <div class="container-572" style="margin: 0px 0px 0px 0px; padding: 60px 0px 40px 0px;">
        <? $APPLICATION->IncludeComponent(
    "intec.universe:main.brands", 
    "template.1", 
    array(
        "ALIGNMENT" => "center",
        "CACHE_TIME" => "0",
        "CACHE_TYPE" => "A",
        "COMPONENT_TEMPLATE" => "template.1",
        "DESCRIPTION_SHOW" => "N",
        "DETAIL_URL" => "",
        "EFFECT" => "none",
        "ELEMENTS_COUNT" => "",
        "FOOTER_SHOW" => "N",
        "HEADER_POSITION" => "left",
        "HEADER_SHOW" => "Y",
        "HEADER_TEXT" => "РЕМОНТИРУЕМ ТЕХНИКУ ЛЮБОЙ МАРКИ",
        "IBLOCK_ID" => "43",
        "IBLOCK_TYPE" => "content",
        "LAZYLOAD_USE" => "N",
        "LINE_COUNT" => "5",
        "LINK_USE" => "N",
        "LIST_PAGE_URL" => "",
        "ORDER_BY" => "ASC",
        "SECTIONS" => array(
            0 => "",
            1 => "",
        ),
        "SECTIONS_MODE" => "id",
        "SECTION_URL" => "",
        "SETTINGS_USE" => "Y",
        "SLIDER_USE" => "N",
        "SORT_BY" => "SORT",
        "TRANSPARENCY" => "0"
    ),
    false
); ?>
    </div>
    <div class="container-572" style="margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px; background-color: #F4F4F4;">
        <? $APPLICATION->IncludeComponent(
            "intec.universe:main.services",
            "template.8",
            array(
                "CACHE_TIME" => "0",
                "CACHE_TYPE" => "A",
                "COLUMNS" => "2",
                "DESCRIPTION_BLOCK_SHOW" => "N",
                "DESCRIPTION_USE" => "Y",
                "DETAIL_URL" => "",
                "ELEMENTS_COUNT" => "4",
                "FOOTER_SHOW" => "N",
                "HEADER_BLOCK_POSITION" => "left",
                "HEADER_BLOCK_SHOW" => "Y",
                "HEADER_BLOCK_TEXT" => "ПОЧЕМУ НАМ ДОВЕРЯЮТ",
                "IBLOCK_ID" => "20",
                "IBLOCK_TYPE" => "catalogs",
                "INDENT_IMAGE_USE" => "N",
                "LAZYLOAD_USE" => "N",
                "LINK_USE" => "N",
                "LIST_PAGE_URL" => "",
                "ORDER_BY" => "ASC",
                "SECTIONS" => array("", ""),
                "SECTION_URL" => "",
                "SETTINGS_USE" => "Y",
                "SORT_BY" => "SORT"
            )
        ); ?>
    </div>
    <div class="container-572" style="margin: 0px 0px 0px 0px; padding: 40px 0px 0px 0px; background-color: #F4F4F4;">
        <? $APPLICATION->IncludeComponent(
            "intec.universe:widget",
            "web.form.2",
            array(
                "BUTTON" => "",
                "CACHE_TIME" => "0",
                "CACHE_TYPE" => "A",
                "CONSENT_URL" => "/company/consent/",
                "DESCRIPTION" => "",
                "FORM" => "",
                "GRAB_DATA" => "N",
                "TITLE" => "",
                "WEB_FORM_ID" => "2",
                "WEB_FORM_TEMPLATE" => ".default"
            )
        ); ?>
    </div>
    <div class="container-572" style="margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px;">
        <? $APPLICATION->IncludeComponent(
    "intec.universe:main.reviews", 
    "template.13", 
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ACTIVE_DATE_SHOW" => "Y",
        "BUTTON_ALL_SHOW" => "Y",
        "BUTTON_ALL_TEXT" => "Все отзывы",
        "CACHE_TIME" => "0",
        "CACHE_TYPE" => "A",
        "COMPONENT_TEMPLATE" => "template.13",
        "DESCRIPTION_SHOW" => "N",
        "DETAIL_URL" => "",
        "ELEMENTS_COUNT" => "",
        "HEADER_POSITION" => "left",
        "HEADER_SHOW" => "Y",
        "HEADER_TEXT" => "ЧТО О НАС ГОВОРЯТ",
        "IBLOCK_ID" => "31",
        "IBLOCK_TYPE" => "content",
        "LAZYLOAD_USE" => "N",
        "LINK_BLANK" => "Y",
        "LINK_TEXT" => "Полный отзыв",
        "LINK_USE" => "Y",
        "LIST_PAGE_URL" => "/company/reviews/",
        "ORDER_BY" => "ASC",
        "PREVIEW_TRUNCATE_USE" => "N",
        "PROPERTY_RATING" => "RATING",
        "RATING_SHOW" => "Y",
        "SECTIONS" => array(
            0 => "",
            1 => "",
        ),
        "SECTIONS_MODE" => "id",
        "SECTION_URL" => "",
        "SEND_USE" => "N",
        "SETTINGS_USE" => "Y",
        "SLIDER_AUTO_USE" => "N",
        "SLIDER_LOOP" => "Y",
        "SORT_BY" => "SORT"
    ),
    false
); ?>
    </div>
    <div class="container-572" style="margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px;">
        <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/index/wide/contacts/simple.1.php"
            )
        ); ?>
    </div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php') ?>