<?php
$strTableName="hoja_ruta_2020_tracking";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="hoja_ruta_2020_tracking";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("hoja_ruta_2020_tracking");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["hoja_ruta_2020_tracking"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>