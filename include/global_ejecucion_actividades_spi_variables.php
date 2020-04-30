<?php
$strTableName="global_ejecucion_actividades_spi";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="global_ejecucion_actividades_spi";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("global_ejecucion_actividades_spi");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["global_ejecucion_actividades_spi"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>