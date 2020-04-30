<?php
require_once(getabspath("classes/cipherer.php"));



$tdatadashboard = array();
$tdatadashboard[".ShortName"] = "dashboard";

$tdatadashboard[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" );
$tdatadashboard[".originalPagesByType"] = $tdatadashboard[".pagesByType"];
$tdatadashboard[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" ) );
$tdatadashboard[".originalPages"] = $tdatadashboard[".pages"];
$tdatadashboard[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\",\"search\":\"search\"}" );
$tdatadashboard[".originalDefaultPages"] = $tdatadashboard[".defaultPages"];


//	field labels
$fieldLabelsdashboard = array();
$pageTitlesdashboard = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdashboard["Spanish"] = array();
	$fieldLabelsdashboard["Spanish"]["q_graph_002_UEJ"] = "UEJ";
	$fieldLabelsdashboard["Spanish"]["q_graph_002_sector_name"] = "Sector Name";
	$fieldLabelsdashboard["Spanish"]["q_graph_002_short_name"] = "Short Name";
	$fieldLabelsdashboard["Spanish"]["q_graph_002_TIPO"] = "TIPO";
	$fieldLabelsdashboard["Spanish"]["q_graph_002_uej_name"] = "Uej Name";
	$fieldLabelsdashboard["Spanish"]["q_graph_002_TOTVIGENTE"] = "TOTVIGENTE";
	$fieldLabelsdashboard["Spanish"]["q_graph_002_TOTCOMPROMISO"] = "TOTCOMPROMISO";
	$fieldLabelsdashboard["Spanish"]["q_graph_002_TOTPAGOS"] = "TOTPAGOS";
	$fieldLabelsdashboard["Spanish"]["q_graph_001_Chart_short_name"] = "UNIDAD EJECUTORA";
	$fieldLabelsdashboard["Spanish"]["q_graph_001_Chart_TOTVIGENTE"] = "VIGENTE";
	$fieldLabelsdashboard["Spanish"]["q_graph_001_Chart_TOTCOMPROMISO"] = "COMPROMISO";
	$fieldLabelsdashboard["Spanish"]["q_graph_001_Chart_TOTPAGOS"] = "PAGOS";
	$fieldLabelsdashboard["Spanish"]["q_graph_001_Chart_UEJ"] = "UEJ";
	$fieldLabelsdashboard["Spanish"]["q_graph_001_Chart_sector_name"] = "Sector Name";
	$fieldLabelsdashboard["Spanish"]["q_graph_002_Chart_UEJ"] = "UEJ";
	$fieldLabelsdashboard["Spanish"]["q_graph_002_Chart_sector_name"] = "Sector Name";
	$fieldLabelsdashboard["Spanish"]["q_graph_002_Chart_short_name"] = "Short Name";
	$fieldLabelsdashboard["Spanish"]["q_graph_002_Chart_TIPO"] = "TIPO";
	$fieldLabelsdashboard["Spanish"]["q_graph_002_Chart_uej_name"] = "Uej Name";
	$fieldLabelsdashboard["Spanish"]["q_graph_002_Chart_TOTVIGENTE"] = "TOTVIGENTE";
	$fieldLabelsdashboard["Spanish"]["q_graph_002_Chart_TOTCOMPROMISO"] = "TOTCOMPROMISO";
	$fieldLabelsdashboard["Spanish"]["q_graph_002_Chart_TOTPAGOS"] = "TOTPAGOS";
}

//	search fields
$tdatadashboard[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"q_graph_002", "field"=>"UEJ" );
$tdatadashboard[".searchFields"]["q_graph_002_UEJ"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_graph_002", "field"=>"sector_name" );
$tdatadashboard[".searchFields"]["q_graph_002_sector_name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_graph_002", "field"=>"short_name" );
$tdatadashboard[".searchFields"]["q_graph_002_short_name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_graph_002", "field"=>"TIPO" );
$tdatadashboard[".searchFields"]["q_graph_002_TIPO"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_graph_002", "field"=>"uej_name" );
$tdatadashboard[".searchFields"]["q_graph_002_uej_name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_graph_002", "field"=>"TOTVIGENTE" );
$tdatadashboard[".searchFields"]["q_graph_002_TOTVIGENTE"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_graph_002", "field"=>"TOTCOMPROMISO" );
$tdatadashboard[".searchFields"]["q_graph_002_TOTCOMPROMISO"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_graph_002", "field"=>"TOTPAGOS" );
$tdatadashboard[".searchFields"]["q_graph_002_TOTPAGOS"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_graph_001 Chart", "field"=>"short_name" );
$tdatadashboard[".searchFields"]["q_graph_001_Chart_short_name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_graph_001 Chart", "field"=>"TOTVIGENTE" );
$tdatadashboard[".searchFields"]["q_graph_001_Chart_TOTVIGENTE"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_graph_001 Chart", "field"=>"TOTCOMPROMISO" );
$tdatadashboard[".searchFields"]["q_graph_001_Chart_TOTCOMPROMISO"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_graph_001 Chart", "field"=>"TOTPAGOS" );
$tdatadashboard[".searchFields"]["q_graph_001_Chart_TOTPAGOS"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_graph_001 Chart", "field"=>"UEJ" );
$tdatadashboard[".searchFields"]["q_graph_001_Chart_UEJ"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_graph_001 Chart", "field"=>"sector_name" );
$tdatadashboard[".searchFields"]["q_graph_001_Chart_sector_name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_graph_002 Chart", "field"=>"UEJ" );
$tdatadashboard[".searchFields"]["q_graph_002_Chart_UEJ"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_graph_002 Chart", "field"=>"sector_name" );
$tdatadashboard[".searchFields"]["q_graph_002_Chart_sector_name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_graph_002 Chart", "field"=>"short_name" );
$tdatadashboard[".searchFields"]["q_graph_002_Chart_short_name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_graph_002 Chart", "field"=>"TIPO" );
$tdatadashboard[".searchFields"]["q_graph_002_Chart_TIPO"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_graph_002 Chart", "field"=>"uej_name" );
$tdatadashboard[".searchFields"]["q_graph_002_Chart_uej_name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_graph_002 Chart", "field"=>"TOTVIGENTE" );
$tdatadashboard[".searchFields"]["q_graph_002_Chart_TOTVIGENTE"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_graph_002 Chart", "field"=>"TOTCOMPROMISO" );
$tdatadashboard[".searchFields"]["q_graph_002_Chart_TOTCOMPROMISO"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"q_graph_002 Chart", "field"=>"TOTPAGOS" );
$tdatadashboard[".searchFields"]["q_graph_002_Chart_TOTPAGOS"] = $dashField;

// all search fields
$tdatadashboard[".allSearchFields"] = array();
$tdatadashboard[".allSearchFields"][] = "q_graph_002_UEJ";
$tdatadashboard[".allSearchFields"][] = "q_graph_002_sector_name";
$tdatadashboard[".allSearchFields"][] = "q_graph_002_short_name";
$tdatadashboard[".allSearchFields"][] = "q_graph_002_TIPO";
$tdatadashboard[".allSearchFields"][] = "q_graph_002_uej_name";
$tdatadashboard[".allSearchFields"][] = "q_graph_002_TOTVIGENTE";
$tdatadashboard[".allSearchFields"][] = "q_graph_002_TOTCOMPROMISO";
$tdatadashboard[".allSearchFields"][] = "q_graph_002_TOTPAGOS";
$tdatadashboard[".allSearchFields"][] = "q_graph_001_Chart_short_name";
$tdatadashboard[".allSearchFields"][] = "q_graph_001_Chart_TOTVIGENTE";
$tdatadashboard[".allSearchFields"][] = "q_graph_001_Chart_TOTCOMPROMISO";
$tdatadashboard[".allSearchFields"][] = "q_graph_001_Chart_TOTPAGOS";
$tdatadashboard[".allSearchFields"][] = "q_graph_001_Chart_UEJ";
$tdatadashboard[".allSearchFields"][] = "q_graph_001_Chart_sector_name";
$tdatadashboard[".allSearchFields"][] = "q_graph_002_Chart_UEJ";
$tdatadashboard[".allSearchFields"][] = "q_graph_002_Chart_sector_name";
$tdatadashboard[".allSearchFields"][] = "q_graph_002_Chart_short_name";
$tdatadashboard[".allSearchFields"][] = "q_graph_002_Chart_TIPO";
$tdatadashboard[".allSearchFields"][] = "q_graph_002_Chart_uej_name";
$tdatadashboard[".allSearchFields"][] = "q_graph_002_Chart_TOTVIGENTE";
$tdatadashboard[".allSearchFields"][] = "q_graph_002_Chart_TOTCOMPROMISO";
$tdatadashboard[".allSearchFields"][] = "q_graph_002_Chart_TOTPAGOS";

// good like search fields
$tdatadashboard[".googleLikeFields"] = array();
$tdatadashboard[".googleLikeFields"][] = "q_graph_002_UEJ";
$tdatadashboard[".googleLikeFields"][] = "q_graph_002_sector_name";
$tdatadashboard[".googleLikeFields"][] = "q_graph_002_short_name";
$tdatadashboard[".googleLikeFields"][] = "q_graph_002_TIPO";
$tdatadashboard[".googleLikeFields"][] = "q_graph_002_uej_name";
$tdatadashboard[".googleLikeFields"][] = "q_graph_002_TOTVIGENTE";
$tdatadashboard[".googleLikeFields"][] = "q_graph_002_TOTCOMPROMISO";
$tdatadashboard[".googleLikeFields"][] = "q_graph_002_TOTPAGOS";
$tdatadashboard[".googleLikeFields"][] = "q_graph_001_Chart_short_name";
$tdatadashboard[".googleLikeFields"][] = "q_graph_001_Chart_TOTVIGENTE";
$tdatadashboard[".googleLikeFields"][] = "q_graph_001_Chart_TOTCOMPROMISO";
$tdatadashboard[".googleLikeFields"][] = "q_graph_001_Chart_TOTPAGOS";
$tdatadashboard[".googleLikeFields"][] = "q_graph_001_Chart_UEJ";
$tdatadashboard[".googleLikeFields"][] = "q_graph_001_Chart_sector_name";
$tdatadashboard[".googleLikeFields"][] = "q_graph_002_Chart_UEJ";
$tdatadashboard[".googleLikeFields"][] = "q_graph_002_Chart_sector_name";
$tdatadashboard[".googleLikeFields"][] = "q_graph_002_Chart_short_name";
$tdatadashboard[".googleLikeFields"][] = "q_graph_002_Chart_TIPO";
$tdatadashboard[".googleLikeFields"][] = "q_graph_002_Chart_uej_name";
$tdatadashboard[".googleLikeFields"][] = "q_graph_002_Chart_TOTVIGENTE";
$tdatadashboard[".googleLikeFields"][] = "q_graph_002_Chart_TOTCOMPROMISO";
$tdatadashboard[".googleLikeFields"][] = "q_graph_002_Chart_TOTPAGOS";

$tdatadashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "q_graph_002_list", "table" => "q_graph_002", 
		 "pageName" => "list","type" => 0);
	$dbelement["cellName"] = "cell_1_0";

					$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;
	
	$dbelement["updateSelected"] = 1 > 0;

$dbelement["masterTable"] = "q_graph_001 Chart";

	$tdatadashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "q_graph_001_chart_chart", "table" => "q_graph_001 Chart", 
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "cell_0_0";

			

	$tdatadashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "q_graph_002_chart_chart", "table" => "q_graph_002 Chart", 
		 "pageName" => "chart1","type" => 1);
	$dbelement["cellName"] = "cell_2_0";

			

	$tdatadashboard[".dashElements"][] = $dbelement;

$tdatadashboard[".shortTableName"] = "dashboard";
$tdatadashboard[".entityType"] = 4;



$tableEvents["Dashboard"] = new eventsBase;
$tdatadashboard[".hasEvents"] = false;


$tdatadashboard[".tableType"] = "dashboard";



$tdatadashboard[".addPageEvents"] = false;

$tdatadashboard[".isUseAjaxSuggest"] = true;

$tables_data["Dashboard"]=&$tdatadashboard;
$field_labels["Dashboard"] = &$fieldLabelsdashboard;
$page_titles["Dashboard"] = &$pageTitlesdashboard;

?>