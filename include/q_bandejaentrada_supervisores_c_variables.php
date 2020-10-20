<?php
$strTableName="q_bandejaentrada_supervisores_c";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="q_bandejaentrada_supervisores";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("q_bandejaentrada_supervisores_c");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["q_bandejaentrada_supervisores_c"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>