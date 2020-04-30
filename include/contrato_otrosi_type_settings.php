<?php



$tdatacontrato_otrosi_type = array();
$tdatacontrato_otrosi_type[".searchableFields"] = array();
$tdatacontrato_otrosi_type[".ShortName"] = "contrato_otrosi_type";
$tdatacontrato_otrosi_type[".OwnerID"] = "";
$tdatacontrato_otrosi_type[".OriginalTable"] = "contrato_otrosi_type";


$tdatacontrato_otrosi_type[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacontrato_otrosi_type[".originalPagesByType"] = $tdatacontrato_otrosi_type[".pagesByType"];
$tdatacontrato_otrosi_type[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacontrato_otrosi_type[".originalPages"] = $tdatacontrato_otrosi_type[".pages"];
$tdatacontrato_otrosi_type[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacontrato_otrosi_type[".originalDefaultPages"] = $tdatacontrato_otrosi_type[".defaultPages"];

//	field labels
$fieldLabelscontrato_otrosi_type = array();
$fieldToolTipscontrato_otrosi_type = array();
$pageTitlescontrato_otrosi_type = array();
$placeHolderscontrato_otrosi_type = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato_otrosi_type["Spanish"] = array();
	$fieldToolTipscontrato_otrosi_type["Spanish"] = array();
	$placeHolderscontrato_otrosi_type["Spanish"] = array();
	$pageTitlescontrato_otrosi_type["Spanish"] = array();
	$fieldLabelscontrato_otrosi_type["Spanish"]["otrosi_id"] = "Código";
	$fieldToolTipscontrato_otrosi_type["Spanish"]["otrosi_id"] = "";
	$placeHolderscontrato_otrosi_type["Spanish"]["otrosi_id"] = "";
	$fieldLabelscontrato_otrosi_type["Spanish"]["otrosi_name"] = "Nombre";
	$fieldToolTipscontrato_otrosi_type["Spanish"]["otrosi_name"] = "";
	$placeHolderscontrato_otrosi_type["Spanish"]["otrosi_name"] = "";
	$fieldLabelscontrato_otrosi_type["Spanish"]["otrosi_lnk"] = "Otrosi Lnk";
	$fieldToolTipscontrato_otrosi_type["Spanish"]["otrosi_lnk"] = "";
	$placeHolderscontrato_otrosi_type["Spanish"]["otrosi_lnk"] = "";
	if (count($fieldToolTipscontrato_otrosi_type["Spanish"]))
		$tdatacontrato_otrosi_type[".isUseToolTips"] = true;
}


	$tdatacontrato_otrosi_type[".NCSearch"] = true;



$tdatacontrato_otrosi_type[".shortTableName"] = "contrato_otrosi_type";
$tdatacontrato_otrosi_type[".nSecOptions"] = 0;

$tdatacontrato_otrosi_type[".mainTableOwnerID"] = "";
$tdatacontrato_otrosi_type[".entityType"] = 0;

$tdatacontrato_otrosi_type[".strOriginalTableName"] = "contrato_otrosi_type";

	



$tdatacontrato_otrosi_type[".showAddInPopup"] = false;

$tdatacontrato_otrosi_type[".showEditInPopup"] = false;

$tdatacontrato_otrosi_type[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacontrato_otrosi_type[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacontrato_otrosi_type[".listAjax"] = false;
//	temporary
$tdatacontrato_otrosi_type[".listAjax"] = false;

	$tdatacontrato_otrosi_type[".audit"] = true;

	$tdatacontrato_otrosi_type[".locking"] = true;


$pages = $tdatacontrato_otrosi_type[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato_otrosi_type[".edit"] = true;
	$tdatacontrato_otrosi_type[".afterEditAction"] = 1;
	$tdatacontrato_otrosi_type[".closePopupAfterEdit"] = 1;
	$tdatacontrato_otrosi_type[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato_otrosi_type[".add"] = true;
$tdatacontrato_otrosi_type[".afterAddAction"] = 1;
$tdatacontrato_otrosi_type[".closePopupAfterAdd"] = 1;
$tdatacontrato_otrosi_type[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato_otrosi_type[".list"] = true;
}



$tdatacontrato_otrosi_type[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato_otrosi_type[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato_otrosi_type[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato_otrosi_type[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato_otrosi_type[".printFriendly"] = true;
}



$tdatacontrato_otrosi_type[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato_otrosi_type[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato_otrosi_type[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato_otrosi_type[".isUseAjaxSuggest"] = true;

$tdatacontrato_otrosi_type[".rowHighlite"] = true;





$tdatacontrato_otrosi_type[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato_otrosi_type[".buttonsAdded"] = false;

$tdatacontrato_otrosi_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato_otrosi_type[".isUseTimeForSearch"] = false;


$tdatacontrato_otrosi_type[".badgeColor"] = "8FBC8B";


$tdatacontrato_otrosi_type[".allSearchFields"] = array();
$tdatacontrato_otrosi_type[".filterFields"] = array();
$tdatacontrato_otrosi_type[".requiredSearchFields"] = array();

$tdatacontrato_otrosi_type[".googleLikeFields"] = array();
$tdatacontrato_otrosi_type[".googleLikeFields"][] = "otrosi_id";
$tdatacontrato_otrosi_type[".googleLikeFields"][] = "otrosi_name";
$tdatacontrato_otrosi_type[".googleLikeFields"][] = "otrosi_lnk";



$tdatacontrato_otrosi_type[".tableType"] = "list";

$tdatacontrato_otrosi_type[".printerPageOrientation"] = 0;
$tdatacontrato_otrosi_type[".nPrinterPageScale"] = 100;

$tdatacontrato_otrosi_type[".nPrinterSplitRecords"] = 40;

$tdatacontrato_otrosi_type[".geocodingEnabled"] = false;










$tdatacontrato_otrosi_type[".pageSize"] = 20;

$tdatacontrato_otrosi_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacontrato_otrosi_type[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato_otrosi_type[".orderindexes"] = array();

$tdatacontrato_otrosi_type[".sqlHead"] = "SELECT otrosi_id,  	otrosi_name,  	otrosi_lnk";
$tdatacontrato_otrosi_type[".sqlFrom"] = "FROM contrato_otrosi_type";
$tdatacontrato_otrosi_type[".sqlWhereExpr"] = "";
$tdatacontrato_otrosi_type[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato_otrosi_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato_otrosi_type[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato_otrosi_type[".highlightSearchResults"] = true;

$tableKeyscontrato_otrosi_type = array();
$tableKeyscontrato_otrosi_type[] = "otrosi_id";
$tdatacontrato_otrosi_type[".Keys"] = $tableKeyscontrato_otrosi_type;


$tdatacontrato_otrosi_type[".hideMobileList"] = array();




//	otrosi_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "otrosi_id";
	$fdata["GoodName"] = "otrosi_id";
	$fdata["ownerTable"] = "contrato_otrosi_type";
	$fdata["Label"] = GetFieldLabel("contrato_otrosi_type","otrosi_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "otrosi_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "otrosi_id";

	
	
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


	$tdatacontrato_otrosi_type["otrosi_id"] = $fdata;
		$tdatacontrato_otrosi_type[".searchableFields"][] = "otrosi_id";
//	otrosi_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "otrosi_name";
	$fdata["GoodName"] = "otrosi_name";
	$fdata["ownerTable"] = "contrato_otrosi_type";
	$fdata["Label"] = GetFieldLabel("contrato_otrosi_type","otrosi_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "otrosi_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "otrosi_name";

	
	
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


	$tdatacontrato_otrosi_type["otrosi_name"] = $fdata;
		$tdatacontrato_otrosi_type[".searchableFields"][] = "otrosi_name";
//	otrosi_lnk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "otrosi_lnk";
	$fdata["GoodName"] = "otrosi_lnk";
	$fdata["ownerTable"] = "contrato_otrosi_type";
	$fdata["Label"] = GetFieldLabel("contrato_otrosi_type","otrosi_lnk");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "otrosi_lnk";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "otrosi_lnk";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdatacontrato_otrosi_type["otrosi_lnk"] = $fdata;
		$tdatacontrato_otrosi_type[".searchableFields"][] = "otrosi_lnk";


$tables_data["contrato_otrosi_type"]=&$tdatacontrato_otrosi_type;
$field_labels["contrato_otrosi_type"] = &$fieldLabelscontrato_otrosi_type;
$fieldToolTips["contrato_otrosi_type"] = &$fieldToolTipscontrato_otrosi_type;
$placeHolders["contrato_otrosi_type"] = &$placeHolderscontrato_otrosi_type;
$page_titles["contrato_otrosi_type"] = &$pageTitlescontrato_otrosi_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["contrato_otrosi_type"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["contrato_otrosi_type"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_contrato_otrosi_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "otrosi_id,  	otrosi_name,  	otrosi_lnk";
$proto0["m_strFrom"] = "FROM contrato_otrosi_type";
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
	"m_strName" => "otrosi_id",
	"m_strTable" => "contrato_otrosi_type",
	"m_srcTableName" => "contrato_otrosi_type"
));

$proto6["m_sql"] = "otrosi_id";
$proto6["m_srcTableName"] = "contrato_otrosi_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "otrosi_name",
	"m_strTable" => "contrato_otrosi_type",
	"m_srcTableName" => "contrato_otrosi_type"
));

$proto8["m_sql"] = "otrosi_name";
$proto8["m_srcTableName"] = "contrato_otrosi_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "otrosi_lnk",
	"m_strTable" => "contrato_otrosi_type",
	"m_srcTableName" => "contrato_otrosi_type"
));

$proto10["m_sql"] = "otrosi_lnk";
$proto10["m_srcTableName"] = "contrato_otrosi_type";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "contrato_otrosi_type";
$proto13["m_srcTableName"] = "contrato_otrosi_type";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "otrosi_id";
$proto13["m_columns"][] = "otrosi_name";
$proto13["m_columns"][] = "otrosi_lnk";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "contrato_otrosi_type";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "contrato_otrosi_type";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="contrato_otrosi_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato_otrosi_type = createSqlQuery_contrato_otrosi_type();


	
								;

			

$tdatacontrato_otrosi_type[".sqlquery"] = $queryData_contrato_otrosi_type;

$tableEvents["contrato_otrosi_type"] = new eventsBase;
$tdatacontrato_otrosi_type[".hasEvents"] = false;

?>