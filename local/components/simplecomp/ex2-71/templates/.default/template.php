<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$url = $APPLICATION->GetCurPage() . "?F=Y";?>
Фильтр<a href="<?=$url?>"><?=$url?></a>

<p><b><?=GetMessage("SIMPLECOMP_EXAM2_CAT_TITLE")?></b></p>
<ul>
<?
foreach($arResult["CLASSIFIER"] as $section)
{
	?>
	<li><b><?=$section["NAME"]?></b></li>
	<ul>
	<? 
	if( is_array($section["ELEMENTS_ID"]) && (count($section["ELEMENTS_ID"]) > 0) )
	{
		foreach($section["ELEMENTS_ID"] as $elem)
		{
			?><li><?=$arResult["ELEMENTS"][$elem]["NAME"]?> - <?=$arResult["ELEMENTS"][$elem]["PROP"]["PRICE"]["VALUE"]?> - <?=$arResult["ELEMENTS"][$elem]["PROP"]["MATERIAL"]["VALUE"]?> (<?=$arResult["ELEMENTS"][$elem]["DETAIL_PAGE"]// ex2-81_71?>)<?
		}
	}
	?>
	</li>
	</ul>
<?
}
?>
</ul>