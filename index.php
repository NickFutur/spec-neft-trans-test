<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); $APPLICATION->SetPageProperty("description", "Устройства
    для обработки поверхности рулонных материалов. Инструментальные работы.");
    $APPLICATION->SetPageProperty("keywords", "липской завод, рулонные, обработка, инструментальные.");
    $APPLICATION->SetPageProperty("title", "Обработка поверхности рулонных материалов. Инструментальные работы.");
    $APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
    $APPLICATION->SetTitle("Липской завод");
    ?><div class="banner">
	<div class="banner-wrap">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"snt-slider",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "#SECTION_CODE#/#ELEMENT_ID#",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "services",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("short_desc",""),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?> <!-- <div class="swiper banner-slider" id="js-banner-slider">
            <div class="swiper-wrapper banner-slider__wrapper">
                <div class="swiper-slide">
                    <div class="banner-slider__slide">
                        <div class="banner-slider__desc-block">
                            <div class="banner-slider__desc">
                                <h2 class="banner-slider__title">Дорожно-строительная деятельность</h2>
                                <p class="banner-slider__text">
                                    Одним из ведущих направлений работы АО «Спецнефтетранс» является
                                    дорожно-строительная деятельность.
                                </p>
                                <p class="banner-slider__text">
                                    Услуги нашей компании:
                                </p>
                                <ul class="banner-slider__list">
                                    <li class="banner-slider__list-item">Строительство, реконструкция и ремонт автодорог
                                    </li>
                                    <li class="banner-slider__list-item">Строительство объектов дорожного хозяйства</li>
                                    <li class="banner-slider__list-item">Строительство и содержание магистральных
                                        автозимников</li>
                                    <li class="banner-slider__list-item">Строительство производственных площадок и
                                        инфраструктуры, дамб, буровых и кустовых оснований и подъездов к ним</li>
                                    <li class="banner-slider__list-item">Строительство мостов и путепроводов,
                                        трубопроводов, линий электропередач, объектов инфраструктуры</li>
                                    <li class="banner-slider__list-item">Производство стройматериалов</li>
                                </ul>
                                <a class="banner-slider__btn-more" href="#">Подробнее</a>
                            </div>
                        </div>
                        <div class="banner-slider__image">
                            <img src="/local/templates/spec-nefte-trans-test/images/banner-photo.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner-slider__slide">
                        <div class="banner-slider__desc-block">
                            <div class="banner-slider__desc">
                                <h2 class="banner-slider__title">Дорожно-строительная деятельность</h2>
                                <p class="banner-slider__text">
                                    Одним из ведущих направлений работы АО «Спецнефтетранс» является
                                    дорожно-строительная деятельность.
                                </p>
                                <p class="banner-slider__text">
                                    Услуги нашей компании:
                                </p>
                                <ul class="banner-slider__list">
                                    <li class="banner-slider__list-item">Строительство, реконструкция и ремонт автодорог
                                    </li>
                                    <li class="banner-slider__list-item">Строительство объектов дорожного хозяйства</li>
                                    <li class="banner-slider__list-item">Строительство и содержание магистральных
                                        автозимников</li>
                                    <li class="banner-slider__list-item">Строительство производственных площадок и
                                        инфраструктуры, дамб, буровых и кустовых оснований и подъездов к ним</li>
                                    <li class="banner-slider__list-item">Строительство мостов и путепроводов,
                                        трубопроводов, линий электропередач, объектов инфраструктуры</li>
                                    <li class="banner-slider__list-item">Производство стройматериалов</li>
                                </ul>
                                <a class="banner-slider__btn-more" href="#">Подробнее</a>
                            </div>
                        </div>
                        <div class="banner-slider__image">
                            <img src="/local/templates/spec-nefte-trans-test/images/banner-photo.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-pagination">
                <div class="banner-pagination__wrap">
                    <div class="banner-pagination__btn-prev">
                    </div>
                    <div class="swiper-pagination">
                    </div>
                    <div class="banner-pagination__btn-next">
                    </div>
                </div>
            </div>
        </div> -->
	</div>
</div>
<div class="service">
	<div class="service__wrap">
		<h2>Наши услуги</h2>
		<div class="service__wrapper">
			<div class="service-card">
 <a class="service-card__wrap" href="#">
				<div class="service-card__image">
 <img src="/local/templates/spec-nefte-trans-test/images/photo-1.png" alt="">
				</div>
				<div class="service-card__info">
					<h3 class="service-card__title">Автотранспортные услуги</h3>
					<div class="service-card__stroke">
					</div>
					<p class="service-card__text">
						 Компания «Спецнефтетранс» оказывает широкий спектр услуг автомобильным и специальным транспортом.
					</p>
				</div>
 </a>
			</div>
			<div class="service-card">
 <a class="service-card__wrap" href="#">
				<div class="service-card__image">
 <img src="/local/templates/spec-nefte-trans-test/images/photo-2.png" alt="">
				</div>
				<div class="service-card__info">
					<h3 class="service-card__title">Автотранспортные услуги</h3>
					<div class="service-card__stroke">
					</div>
					<p class="service-card__text">
						 Компания «Спецнефтетранс» оказывает широкий спектр услуг автомобильным и специальным транспортом.
					</p>
				</div>
 </a>
			</div>
			<div class="service-card">
 <a class="service-card__wrap" href="#">
				<div class="service-card__image">
 <img src="/local/templates/spec-nefte-trans-test/images/photo-3.png" alt="">
				</div>
				<div class="service-card__info">
					<h3 class="service-card__title">Автотранспортные услуги</h3>
					<div class="service-card__stroke">
					</div>
					<p class="service-card__text">
						 Компания «Спецнефтетранс» оказывает широкий спектр услуг автомобильным и специальным транспортом.
					</p>
				</div>
 </a>
			</div>
			<div class="service-card">
 <a class="service-card__wrap" href="#">
				<div class="service-card__image">
 <img src="/local/templates/spec-nefte-trans-test/images/photo-4.png" alt="">
				</div>
				<div class="service-card__info">
					<h3 class="service-card__title">Автотранспортные услуги</h3>
					<div class="service-card__stroke">
					</div>
					<p class="service-card__text">
						 Компания «Спецнефтетранс» оказывает широкий спектр услуг автомобильным и специальным транспортом.
					</p>
				</div>
 </a>
			</div>
			<div class="service-card">
 <a class="service-card__wrap" href="#">
				<div class="service-card__image">
 <img src="/local/templates/spec-nefte-trans-test/images/photo-5.png" alt="">
				</div>
				<div class="service-card__info">
					<h3 class="service-card__title">Автотранспортные услуги</h3>
					<div class="service-card__stroke">
					</div>
					<p class="service-card__text">
						 Компания «Спецнефтетранс» оказывает широкий спектр услуг автомобильным и специальным транспортом.
					</p>
				</div>
 </a>
			</div>
			<div class="service-card">
 <a class="service-card__wrap" href="#">
				<div class="service-card__image">
 <img src="/local/templates/spec-nefte-trans-test/images/photo-6.png" alt="">
				</div>
				<div class="service-card__info">
					<h3 class="service-card__title">Автотранспортные услуги</h3>
					<div class="service-card__stroke">
					</div>
					<p class="service-card__text">
						 Компания «Спецнефтетранс» оказывает широкий спектр услуг автомобильным и специальным транспортом.
					</p>
				</div>
 </a>
			</div>
			<div class="service-card">
 <a class="service-card__wrap" href="#">
				<div class="service-card__image">
 <img src="/local/templates/spec-nefte-trans-test/images/photo-empty.png" alt="">
				</div>
				<div class="service-card__info">
					<h3 class="service-card__title">Автотранспортные услуги</h3>
					<div class="service-card__stroke">
					</div>
					<p class="service-card__text">
						 Компания «Спецнефтетранс» оказывает широкий спектр услуг автомобильным и специальным транспортом.
					</p>
				</div>
 </a>
			</div>
			<div class="service-card">
 <a class="service-card__wrap" href="#">
				<div class="service-card__image">
 <img src="/local/templates/spec-nefte-trans-test/images/photo-empty.png" alt="">
				</div>
				<div class="service-card__info">
					<h3 class="service-card__title">Автотранспортные услуги</h3>
					<div class="service-card__stroke">
					</div>
					<p class="service-card__text">
						 Компания «Спецнефтетранс» оказывает широкий спектр услуг автомобильным и специальным транспортом.
					</p>
				</div>
 </a>
			</div>
		</div>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>