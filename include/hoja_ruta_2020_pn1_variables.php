<?php
$strTableName="hoja_ruta_2020_pn1";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="hoja_ruta_2020";

$gstrOrderBy="ORDER BY hr_id DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("hoja_ruta_2020_pn1");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["hoja_ruta_2020_pn1"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>