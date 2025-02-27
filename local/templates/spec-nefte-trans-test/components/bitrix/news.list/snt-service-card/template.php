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
?>
<div class="service__wrapper">
    <?if($arParams["DISPLAY_TOP_PAGER"]):?>
    <?=$arResult["NAV_STRING"]?><br />
    <?endif;?>
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <div class="service-card" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <a class="service-card__wrap" href="/service/?ELEMENT_ID=<?=$arItem['ID']?>">
            <div class="service-card__image">
                <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                <img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]; ?>" alt="<?php echo $item["NAME"]; ?>" />
                <?else:?>
                <img src="<?=$arItem["PROPERTIES"]["card_photo"]["VALUE"]; ?>" alt="<?php echo $item["NAME"]; ?>" />
                <?endif;?>
                <?endif?>
            </div>
            <div class="service-card__info">
                <h3 class="service-card__title">
                    <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
                    <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                    <?echo $arItem["NAME"]?>
                    <?else:?>
                    <?echo $arItem["NAME"]?>
                    <?endif;?>
                    <?endif;?>
                </h3>
                <div class="service-card__stroke">
                </div>
                <p class="service-card__text">
                    <?=$arItem["PROPERTIES"]["short_desc"]["VALUE"]?>
                </p>
            </div>
        </a>
    </div>


    <?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>

    <?endif?>

    <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>

    <?endif;?>
    <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>

    <?endif?>
    <?foreach($arItem["FIELDS"] as $code=>$value):?>
    <!-- <small> -->
    <?//=GetMessage("IBLOCK_FIELD_".$code)?>
    <!--:&nbsp;-->
    <?//=$value;?>
    <!-- </small><br /> -->
    <?endforeach;?>


    <?endforeach;?>
    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <br /><?=$arResult["NAV_STRING"]?>
    <?endif;?>
</div>