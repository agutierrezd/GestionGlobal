<?php



$tdataglobal_ejecucion_desagregada = array();
$tdataglobal_ejecucion_desagregada[".searchableFields"] = array();
$tdataglobal_ejecucion_desagregada[".ShortName"] = "global_ejecucion_desagregada";
$tdataglobal_ejecucion_desagregada[".OwnerID"] = "";
$tdataglobal_ejecucion_desagregada[".OriginalTable"] = "global_ejecucion_desagregada";


$tdataglobal_ejecucion_desagregada[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataglobal_ejecucion_desagregada[".originalPagesByType"] = $tdataglobal_ejecucion_desagregada[".pagesByType"];
$tdataglobal_ejecucion_desagregada[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataglobal_ejecucion_desagregada[".originalPages"] = $tdataglobal_ejecucion_desagregada[".pages"];
$tdataglobal_ejecucion_desagregada[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataglobal_ejecucion_desagregada[".originalDefaultPages"] = $tdataglobal_ejecucion_desagregada[".defaultPages"];

//	field labels
$fieldLabelsglobal_ejecucion_desagregada = array();
$fieldToolTipsglobal_ejecucion_desagregada = array();
$pageTitlesglobal_ejecucion_desagregada = array();
$placeHoldersglobal_ejecucion_desagregada = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"] = array();
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"] = array();
	$placeHoldersglobal_ejecucion_desagregada["Spanish"] = array();
	$pageTitlesglobal_ejecucion_desagregada["Spanish"] = array();
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["id_transac_des"] = "Id Transac Des";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["id_transac_des"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["id_transac_des"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["UEJ"] = "UEJ";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["UEJ"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["UEJ"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["TIPO"] = "TIPO";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["TIPO"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["TIPO"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["RUB"] = "RUB";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["RUB"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["RUB"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["RUBRO"] = "RUBRO";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["RUBRO"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["RUBRO"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["DESCRIPCION"] = "DESCRIPCION";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["DESCRIPCION"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["DESCRIPCION"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["NOMBRE_UEJ"] = "NOMBRE UEJ";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["NOMBRE_UEJ"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["NOMBRE_UEJ"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["CODIGO_BPIN"] = "CODIGO BPIN";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["CODIGO_BPIN"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["CODIGO_BPIN"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["CTA"] = "CTA";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["CTA"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["CTA"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["SUBCTA"] = "SUBCTA";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["SUBCTA"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["SUBCTA"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["OBJ"] = "OBJ";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["OBJ"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["OBJ"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["ORD"] = "ORD";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["ORD"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["ORD"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["SORORD"] = "SORORD";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["SORORD"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["SORORD"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["ITEM"] = "ITEM";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["ITEM"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["ITEM"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["SUBITEM"] = "SUBITEM";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["SUBITEM"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["SUBITEM"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["SUBITEM_2"] = "SUBITEM 2";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["SUBITEM_2"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["SUBITEM_2"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["FUENTE"] = "FUENTE";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["FUENTE"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["FUENTE"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["REC"] = "REC";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["REC"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["REC"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["SIT"] = "SIT";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["SIT"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["SIT"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["APR__INICIAL"] = "APR. INICIAL";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["APR__INICIAL"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["APR__INICIAL"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["APR__ADICIONADA"] = "APR. ADICIONADA";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["APR__ADICIONADA"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["APR__ADICIONADA"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["APR__REDUCIDA"] = "APR. REDUCIDA";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["APR__REDUCIDA"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["APR__REDUCIDA"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["APR__VIGENTE"] = "APR. VIGENTE";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["APR__VIGENTE"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["APR__VIGENTE"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["APR_BLOQUEADA"] = "APR BLOQUEADA";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["APR_BLOQUEADA"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["APR_BLOQUEADA"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["CDP"] = "CDP";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["CDP"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["CDP"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["APR__DISPONIBLE"] = "APR. DISPONIBLE";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["APR__DISPONIBLE"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["APR__DISPONIBLE"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["COMPROMISO"] = "COMPROMISO";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["COMPROMISO"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["COMPROMISO"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["OBLIGACION"] = "OBLIGACION";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["OBLIGACION"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["OBLIGACION"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["ORDEN_PAGO"] = "ORDEN PAGO";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["ORDEN_PAGO"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["ORDEN_PAGO"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["PAGOS"] = "PAGOS";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["PAGOS"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["PAGOS"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["FECHA_CORTE"] = "FECHA CORTE";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["FECHA_CORTE"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["FECHA_CORTE"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["FECHA_ACTUALIZACION"] = "FECHA ACTUALIZACION";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["FECHA_ACTUALIZACION"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["FECHA_ACTUALIZACION"] = "";
	$fieldLabelsglobal_ejecucion_desagregada["Spanish"]["VIGENCIA"] = "VIGENCIA";
	$fieldToolTipsglobal_ejecucion_desagregada["Spanish"]["VIGENCIA"] = "";
	$placeHoldersglobal_ejecucion_desagregada["Spanish"]["VIGENCIA"] = "";
	if (count($fieldToolTipsglobal_ejecucion_desagregada["Spanish"]))
		$tdataglobal_ejecucion_desagregada[".isUseToolTips"] = true;
}


	$tdataglobal_ejecucion_desagregada[".NCSearch"] = true;



$tdataglobal_ejecucion_desagregada[".shortTableName"] = "global_ejecucion_desagregada";
$tdataglobal_ejecucion_desagregada[".nSecOptions"] = 0;

$tdataglobal_ejecucion_desagregada[".mainTableOwnerID"] = "";
$tdataglobal_ejecucion_desagregada[".entityType"] = 0;

$tdataglobal_ejecucion_desagregada[".strOriginalTableName"] = "global_ejecucion_desagregada";

	



$tdataglobal_ejecucion_desagregada[".showAddInPopup"] = false;

$tdataglobal_ejecucion_desagregada[".showEditInPopup"] = false;

$tdataglobal_ejecucion_desagregada[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataglobal_ejecucion_desagregada[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataglobal_ejecucion_desagregada[".listAjax"] = false;
//	temporary
$tdataglobal_ejecucion_desagregada[".listAjax"] = false;

	$tdataglobal_ejecucion_desagregada[".audit"] = true;

	$tdataglobal_ejecucion_desagregada[".locking"] = true;


$pages = $tdataglobal_ejecucion_desagregada[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_ejecucion_desagregada[".edit"] = true;
	$tdataglobal_ejecucion_desagregada[".afterEditAction"] = 1;
	$tdataglobal_ejecucion_desagregada[".closePopupAfterEdit"] = 1;
	$tdataglobal_ejecucion_desagregada[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_ejecucion_desagregada[".add"] = true;
$tdataglobal_ejecucion_desagregada[".afterAddAction"] = 1;
$tdataglobal_ejecucion_desagregada[".closePopupAfterAdd"] = 1;
$tdataglobal_ejecucion_desagregada[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_ejecucion_desagregada[".list"] = true;
}



$tdataglobal_ejecucion_desagregada[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_ejecucion_desagregada[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_ejecucion_desagregada[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_ejecucion_desagregada[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_ejecucion_desagregada[".printFriendly"] = true;
}



$tdataglobal_ejecucion_desagregada[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_ejecucion_desagregada[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_ejecucion_desagregada[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_ejecucion_desagregada[".isUseAjaxSuggest"] = true;

$tdataglobal_ejecucion_desagregada[".rowHighlite"] = true;





$tdataglobal_ejecucion_desagregada[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_ejecucion_desagregada[".buttonsAdded"] = false;

$tdataglobal_ejecucion_desagregada[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_ejecucion_desagregada[".isUseTimeForSearch"] = false;


$tdataglobal_ejecucion_desagregada[".badgeColor"] = "cd5c5c";


$tdataglobal_ejecucion_desagregada[".allSearchFields"] = array();
$tdataglobal_ejecucion_desagregada[".filterFields"] = array();
$tdataglobal_ejecucion_desagregada[".requiredSearchFields"] = array();

$tdataglobal_ejecucion_desagregada[".googleLikeFields"] = array();
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "id_transac_des";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "UEJ";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "TIPO";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "RUB";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "RUBRO";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "DESCRIPCION";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "NOMBRE UEJ";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "CODIGO_BPIN";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "CTA";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "SUBCTA";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "OBJ";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "ORD";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "SORORD";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "ITEM";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "SUBITEM";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "SUBITEM 2";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "FUENTE";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "REC";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "SIT";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "APR. INICIAL";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "APR. ADICIONADA";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "APR. REDUCIDA";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "APR. VIGENTE";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "APR BLOQUEADA";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "CDP";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "APR. DISPONIBLE";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "COMPROMISO";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "OBLIGACION";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "ORDEN PAGO";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "PAGOS";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "FECHA_CORTE";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "FECHA_ACTUALIZACION";
$tdataglobal_ejecucion_desagregada[".googleLikeFields"][] = "VIGENCIA";



$tdataglobal_ejecucion_desagregada[".tableType"] = "list";

$tdataglobal_ejecucion_desagregada[".printerPageOrientation"] = 0;
$tdataglobal_ejecucion_desagregada[".nPrinterPageScale"] = 100;

$tdataglobal_ejecucion_desagregada[".nPrinterSplitRecords"] = 40;

$tdataglobal_ejecucion_desagregada[".geocodingEnabled"] = false;










$tdataglobal_ejecucion_desagregada[".pageSize"] = 20;

$tdataglobal_ejecucion_desagregada[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataglobal_ejecucion_desagregada[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_ejecucion_desagregada[".orderindexes"] = array();

$tdataglobal_ejecucion_desagregada[".sqlHead"] = "SELECT id_transac_des,  	UEJ,  	TIPO,  	RUB,  	RUBRO,  	DESCRIPCION,  	`NOMBRE UEJ`,  	CODIGO_BPIN,  	CTA,  	SUBCTA,  	OBJ,  	ORD,  	SORORD,  	ITEM,  	SUBITEM,  	`SUBITEM 2`,  	FUENTE,  	REC,  	SIT,  	`APR. INICIAL`,  	`APR. ADICIONADA`,  	`APR. REDUCIDA`,  	`APR. VIGENTE`,  	`APR BLOQUEADA`,  	CDP,  	`APR. DISPONIBLE`,  	COMPROMISO,  	OBLIGACION,  	`ORDEN PAGO`,  	PAGOS,  	FECHA_CORTE,  	FECHA_ACTUALIZACION,  	VIGENCIA";
$tdataglobal_ejecucion_desagregada[".sqlFrom"] = "FROM global_ejecucion_desagregada";
$tdataglobal_ejecucion_desagregada[".sqlWhereExpr"] = "";
$tdataglobal_ejecucion_desagregada[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_ejecucion_desagregada[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_ejecucion_desagregada[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_ejecucion_desagregada[".highlightSearchResults"] = true;

$tableKeysglobal_ejecucion_desagregada = array();
$tableKeysglobal_ejecucion_desagregada[] = "id_transac_des";
$tdataglobal_ejecucion_desagregada[".Keys"] = $tableKeysglobal_ejecucion_desagregada;


$tdataglobal_ejecucion_desagregada[".hideMobileList"] = array();




//	id_transac_des
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_transac_des";
	$fdata["GoodName"] = "id_transac_des";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","id_transac_des");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_transac_des";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_transac_des";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["id_transac_des"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "id_transac_des";
//	UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "UEJ";
	$fdata["GoodName"] = "UEJ";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","UEJ");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "UEJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UEJ";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["UEJ"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "UEJ";
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","TIPO");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "TIPO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIPO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=1";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["TIPO"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "TIPO";
//	RUB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "RUB";
	$fdata["GoodName"] = "RUB";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","RUB");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "RUB";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RUB";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["RUB"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "RUB";
//	RUBRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "RUBRO";
	$fdata["GoodName"] = "RUBRO";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","RUBRO");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "RUBRO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RUBRO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["RUBRO"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "RUBRO";
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","DESCRIPCION");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "DESCRIPCION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESCRIPCION";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["DESCRIPCION"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "DESCRIPCION";
//	NOMBRE UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "NOMBRE UEJ";
	$fdata["GoodName"] = "NOMBRE_UEJ";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","NOMBRE_UEJ");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NOMBRE UEJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`NOMBRE UEJ`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["NOMBRE UEJ"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "NOMBRE UEJ";
//	CODIGO_BPIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CODIGO_BPIN";
	$fdata["GoodName"] = "CODIGO_BPIN";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","CODIGO_BPIN");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "CODIGO_BPIN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CODIGO_BPIN";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=13";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["CODIGO_BPIN"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "CODIGO_BPIN";
//	CTA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CTA";
	$fdata["GoodName"] = "CTA";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","CTA");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "CTA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CTA";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["CTA"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "CTA";
//	SUBCTA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "SUBCTA";
	$fdata["GoodName"] = "SUBCTA";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","SUBCTA");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "SUBCTA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUBCTA";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["SUBCTA"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "SUBCTA";
//	OBJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "OBJ";
	$fdata["GoodName"] = "OBJ";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","OBJ");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "OBJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OBJ";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["OBJ"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "OBJ";
//	ORD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ORD";
	$fdata["GoodName"] = "ORD";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","ORD");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ORD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ORD";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["ORD"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "ORD";
//	SORORD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "SORORD";
	$fdata["GoodName"] = "SORORD";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","SORORD");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "SORORD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SORORD";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["SORORD"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "SORORD";
//	ITEM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ITEM";
	$fdata["GoodName"] = "ITEM";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","ITEM");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ITEM";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ITEM";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["ITEM"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "ITEM";
//	SUBITEM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "SUBITEM";
	$fdata["GoodName"] = "SUBITEM";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","SUBITEM");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "SUBITEM";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUBITEM";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["SUBITEM"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "SUBITEM";
//	SUBITEM 2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "SUBITEM 2";
	$fdata["GoodName"] = "SUBITEM_2";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","SUBITEM_2");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "SUBITEM 2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`SUBITEM 2`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["SUBITEM 2"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "SUBITEM 2";
//	FUENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "FUENTE";
	$fdata["GoodName"] = "FUENTE";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","FUENTE");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "FUENTE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FUENTE";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["FUENTE"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "FUENTE";
//	REC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "REC";
	$fdata["GoodName"] = "REC";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","REC");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "REC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REC";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=2";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["REC"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "REC";
//	SIT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "SIT";
	$fdata["GoodName"] = "SIT";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","SIT");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "SIT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SIT";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=3";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["SIT"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "SIT";
//	APR. INICIAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "APR. INICIAL";
	$fdata["GoodName"] = "APR__INICIAL";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","APR__INICIAL");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "APR. INICIAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`APR. INICIAL`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["APR. INICIAL"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "APR. INICIAL";
//	APR. ADICIONADA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "APR. ADICIONADA";
	$fdata["GoodName"] = "APR__ADICIONADA";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","APR__ADICIONADA");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "APR. ADICIONADA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`APR. ADICIONADA`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["APR. ADICIONADA"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "APR. ADICIONADA";
//	APR. REDUCIDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "APR. REDUCIDA";
	$fdata["GoodName"] = "APR__REDUCIDA";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","APR__REDUCIDA");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "APR. REDUCIDA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`APR. REDUCIDA`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["APR. REDUCIDA"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "APR. REDUCIDA";
//	APR. VIGENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "APR. VIGENTE";
	$fdata["GoodName"] = "APR__VIGENTE";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","APR__VIGENTE");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "APR. VIGENTE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`APR. VIGENTE`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["APR. VIGENTE"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "APR. VIGENTE";
//	APR BLOQUEADA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "APR BLOQUEADA";
	$fdata["GoodName"] = "APR_BLOQUEADA";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","APR_BLOQUEADA");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "APR BLOQUEADA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`APR BLOQUEADA`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["APR BLOQUEADA"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "APR BLOQUEADA";
//	CDP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "CDP";
	$fdata["GoodName"] = "CDP";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","CDP");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "CDP";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CDP";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["CDP"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "CDP";
//	APR. DISPONIBLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "APR. DISPONIBLE";
	$fdata["GoodName"] = "APR__DISPONIBLE";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","APR__DISPONIBLE");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "APR. DISPONIBLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`APR. DISPONIBLE`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["APR. DISPONIBLE"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "APR. DISPONIBLE";
//	COMPROMISO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "COMPROMISO";
	$fdata["GoodName"] = "COMPROMISO";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","COMPROMISO");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "COMPROMISO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMPROMISO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["COMPROMISO"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "COMPROMISO";
//	OBLIGACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "OBLIGACION";
	$fdata["GoodName"] = "OBLIGACION";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","OBLIGACION");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "OBLIGACION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OBLIGACION";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["OBLIGACION"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "OBLIGACION";
//	ORDEN PAGO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "ORDEN PAGO";
	$fdata["GoodName"] = "ORDEN_PAGO";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","ORDEN_PAGO");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "ORDEN PAGO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ORDEN PAGO`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["ORDEN PAGO"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "ORDEN PAGO";
//	PAGOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "PAGOS";
	$fdata["GoodName"] = "PAGOS";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","PAGOS");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "PAGOS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAGOS";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["PAGOS"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "PAGOS";
//	FECHA_CORTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "FECHA_CORTE";
	$fdata["GoodName"] = "FECHA_CORTE";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","FECHA_CORTE");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "FECHA_CORTE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FECHA_CORTE";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["FECHA_CORTE"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "FECHA_CORTE";
//	FECHA_ACTUALIZACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "FECHA_ACTUALIZACION";
	$fdata["GoodName"] = "FECHA_ACTUALIZACION";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","FECHA_ACTUALIZACION");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "FECHA_ACTUALIZACION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FECHA_ACTUALIZACION";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["FECHA_ACTUALIZACION"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "FECHA_ACTUALIZACION";
//	VIGENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "VIGENCIA";
	$fdata["GoodName"] = "VIGENCIA";
	$fdata["ownerTable"] = "global_ejecucion_desagregada";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_desagregada","VIGENCIA");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "VIGENCIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VIGENCIA";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_ejecucion_desagregada["VIGENCIA"] = $fdata;
		$tdataglobal_ejecucion_desagregada[".searchableFields"][] = "VIGENCIA";


$tables_data["global_ejecucion_desagregada"]=&$tdataglobal_ejecucion_desagregada;
$field_labels["global_ejecucion_desagregada"] = &$fieldLabelsglobal_ejecucion_desagregada;
$fieldToolTips["global_ejecucion_desagregada"] = &$fieldToolTipsglobal_ejecucion_desagregada;
$placeHolders["global_ejecucion_desagregada"] = &$placeHoldersglobal_ejecucion_desagregada;
$page_titles["global_ejecucion_desagregada"] = &$pageTitlesglobal_ejecucion_desagregada;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["global_ejecucion_desagregada"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["global_ejecucion_desagregada"] = array();



	
				$strOriginalDetailsTable="global_ejecucion";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="global_ejecucion";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "global_ejecucion";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["global_ejecucion_desagregada"][0] = $masterParams;
				$masterTablesData["global_ejecucion_desagregada"][0]["masterKeys"] = array();
	$masterTablesData["global_ejecucion_desagregada"][0]["masterKeys"][]="UEJ";
				$masterTablesData["global_ejecucion_desagregada"][0]["masterKeys"][]="TIPO";
				$masterTablesData["global_ejecucion_desagregada"][0]["masterKeys"][]="RUBRO";
				$masterTablesData["global_ejecucion_desagregada"][0]["detailKeys"] = array();
	$masterTablesData["global_ejecucion_desagregada"][0]["detailKeys"][]="UEJ";
				$masterTablesData["global_ejecucion_desagregada"][0]["detailKeys"][]="TIPO";
				$masterTablesData["global_ejecucion_desagregada"][0]["detailKeys"][]="RUB";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_global_ejecucion_desagregada()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_transac_des,  	UEJ,  	TIPO,  	RUB,  	RUBRO,  	DESCRIPCION,  	`NOMBRE UEJ`,  	CODIGO_BPIN,  	CTA,  	SUBCTA,  	OBJ,  	ORD,  	SORORD,  	ITEM,  	SUBITEM,  	`SUBITEM 2`,  	FUENTE,  	REC,  	SIT,  	`APR. INICIAL`,  	`APR. ADICIONADA`,  	`APR. REDUCIDA`,  	`APR. VIGENTE`,  	`APR BLOQUEADA`,  	CDP,  	`APR. DISPONIBLE`,  	COMPROMISO,  	OBLIGACION,  	`ORDEN PAGO`,  	PAGOS,  	FECHA_CORTE,  	FECHA_ACTUALIZACION,  	VIGENCIA";
$proto0["m_strFrom"] = "FROM global_ejecucion_desagregada";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
								;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id_transac_des",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto6["m_sql"] = "id_transac_des";
$proto6["m_srcTableName"] = "global_ejecucion_desagregada";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "UEJ",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto8["m_sql"] = "UEJ";
$proto8["m_srcTableName"] = "global_ejecucion_desagregada";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto10["m_sql"] = "TIPO";
$proto10["m_srcTableName"] = "global_ejecucion_desagregada";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "RUB",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto12["m_sql"] = "RUB";
$proto12["m_srcTableName"] = "global_ejecucion_desagregada";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "RUBRO",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto14["m_sql"] = "RUBRO";
$proto14["m_srcTableName"] = "global_ejecucion_desagregada";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto16["m_sql"] = "DESCRIPCION";
$proto16["m_srcTableName"] = "global_ejecucion_desagregada";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE UEJ",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto18["m_sql"] = "`NOMBRE UEJ`";
$proto18["m_srcTableName"] = "global_ejecucion_desagregada";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CODIGO_BPIN",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto20["m_sql"] = "CODIGO_BPIN";
$proto20["m_srcTableName"] = "global_ejecucion_desagregada";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CTA",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto22["m_sql"] = "CTA";
$proto22["m_srcTableName"] = "global_ejecucion_desagregada";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "SUBCTA",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto24["m_sql"] = "SUBCTA";
$proto24["m_srcTableName"] = "global_ejecucion_desagregada";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "OBJ",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto26["m_sql"] = "OBJ";
$proto26["m_srcTableName"] = "global_ejecucion_desagregada";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ORD",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto28["m_sql"] = "ORD";
$proto28["m_srcTableName"] = "global_ejecucion_desagregada";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "SORORD",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto30["m_sql"] = "SORORD";
$proto30["m_srcTableName"] = "global_ejecucion_desagregada";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ITEM",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto32["m_sql"] = "ITEM";
$proto32["m_srcTableName"] = "global_ejecucion_desagregada";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "SUBITEM",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto34["m_sql"] = "SUBITEM";
$proto34["m_srcTableName"] = "global_ejecucion_desagregada";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "SUBITEM 2",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto36["m_sql"] = "`SUBITEM 2`";
$proto36["m_srcTableName"] = "global_ejecucion_desagregada";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "FUENTE",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto38["m_sql"] = "FUENTE";
$proto38["m_srcTableName"] = "global_ejecucion_desagregada";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "REC",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto40["m_sql"] = "REC";
$proto40["m_srcTableName"] = "global_ejecucion_desagregada";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "SIT",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto42["m_sql"] = "SIT";
$proto42["m_srcTableName"] = "global_ejecucion_desagregada";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "APR. INICIAL",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto44["m_sql"] = "`APR. INICIAL`";
$proto44["m_srcTableName"] = "global_ejecucion_desagregada";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "APR. ADICIONADA",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto46["m_sql"] = "`APR. ADICIONADA`";
$proto46["m_srcTableName"] = "global_ejecucion_desagregada";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "APR. REDUCIDA",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto48["m_sql"] = "`APR. REDUCIDA`";
$proto48["m_srcTableName"] = "global_ejecucion_desagregada";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "APR. VIGENTE",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto50["m_sql"] = "`APR. VIGENTE`";
$proto50["m_srcTableName"] = "global_ejecucion_desagregada";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "APR BLOQUEADA",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto52["m_sql"] = "`APR BLOQUEADA`";
$proto52["m_srcTableName"] = "global_ejecucion_desagregada";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "CDP",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto54["m_sql"] = "CDP";
$proto54["m_srcTableName"] = "global_ejecucion_desagregada";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "APR. DISPONIBLE",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto56["m_sql"] = "`APR. DISPONIBLE`";
$proto56["m_srcTableName"] = "global_ejecucion_desagregada";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "COMPROMISO",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto58["m_sql"] = "COMPROMISO";
$proto58["m_srcTableName"] = "global_ejecucion_desagregada";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "OBLIGACION",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto60["m_sql"] = "OBLIGACION";
$proto60["m_srcTableName"] = "global_ejecucion_desagregada";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "ORDEN PAGO",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto62["m_sql"] = "`ORDEN PAGO`";
$proto62["m_srcTableName"] = "global_ejecucion_desagregada";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "PAGOS",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto64["m_sql"] = "PAGOS";
$proto64["m_srcTableName"] = "global_ejecucion_desagregada";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHA_CORTE",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto66["m_sql"] = "FECHA_CORTE";
$proto66["m_srcTableName"] = "global_ejecucion_desagregada";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHA_ACTUALIZACION",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto68["m_sql"] = "FECHA_ACTUALIZACION";
$proto68["m_srcTableName"] = "global_ejecucion_desagregada";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "VIGENCIA",
	"m_strTable" => "global_ejecucion_desagregada",
	"m_srcTableName" => "global_ejecucion_desagregada"
));

$proto70["m_sql"] = "VIGENCIA";
$proto70["m_srcTableName"] = "global_ejecucion_desagregada";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto72=array();
$proto72["m_link"] = "SQLL_MAIN";
			$proto73=array();
$proto73["m_strName"] = "global_ejecucion_desagregada";
$proto73["m_srcTableName"] = "global_ejecucion_desagregada";
$proto73["m_columns"] = array();
$proto73["m_columns"][] = "id_transac_des";
$proto73["m_columns"][] = "UEJ";
$proto73["m_columns"][] = "TIPO";
$proto73["m_columns"][] = "RUB";
$proto73["m_columns"][] = "RUBRO";
$proto73["m_columns"][] = "DESCRIPCION";
$proto73["m_columns"][] = "NOMBRE UEJ";
$proto73["m_columns"][] = "CODIGO_BPIN";
$proto73["m_columns"][] = "CTA";
$proto73["m_columns"][] = "SUBCTA";
$proto73["m_columns"][] = "OBJ";
$proto73["m_columns"][] = "ORD";
$proto73["m_columns"][] = "SORORD";
$proto73["m_columns"][] = "ITEM";
$proto73["m_columns"][] = "SUBITEM";
$proto73["m_columns"][] = "SUBITEM 2";
$proto73["m_columns"][] = "FUENTE";
$proto73["m_columns"][] = "REC";
$proto73["m_columns"][] = "SIT";
$proto73["m_columns"][] = "APR. INICIAL";
$proto73["m_columns"][] = "APR. ADICIONADA";
$proto73["m_columns"][] = "APR. REDUCIDA";
$proto73["m_columns"][] = "APR. VIGENTE";
$proto73["m_columns"][] = "APR BLOQUEADA";
$proto73["m_columns"][] = "CDP";
$proto73["m_columns"][] = "APR. DISPONIBLE";
$proto73["m_columns"][] = "COMPROMISO";
$proto73["m_columns"][] = "OBLIGACION";
$proto73["m_columns"][] = "ORDEN PAGO";
$proto73["m_columns"][] = "PAGOS";
$proto73["m_columns"][] = "FECHA_CORTE";
$proto73["m_columns"][] = "FECHA_ACTUALIZACION";
$proto73["m_columns"][] = "VIGENCIA";
$obj = new SQLTable($proto73);

$proto72["m_table"] = $obj;
$proto72["m_sql"] = "global_ejecucion_desagregada";
$proto72["m_alias"] = "";
$proto72["m_srcTableName"] = "global_ejecucion_desagregada";
$proto74=array();
$proto74["m_sql"] = "";
$proto74["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto74["m_column"]=$obj;
$proto74["m_contained"] = array();
$proto74["m_strCase"] = "";
$proto74["m_havingmode"] = false;
$proto74["m_inBrackets"] = false;
$proto74["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto74);

$proto72["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto72);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="global_ejecucion_desagregada";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_ejecucion_desagregada = createSqlQuery_global_ejecucion_desagregada();


	
								;

																																	

$tdataglobal_ejecucion_desagregada[".sqlquery"] = $queryData_global_ejecucion_desagregada;

$tableEvents["global_ejecucion_desagregada"] = new eventsBase;
$tdataglobal_ejecucion_desagregada[".hasEvents"] = false;

?>