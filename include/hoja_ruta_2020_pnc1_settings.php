<?php



$tdatahoja_ruta_2020_pnc1 = array();
$tdatahoja_ruta_2020_pnc1[".searchableFields"] = array();
$tdatahoja_ruta_2020_pnc1[".ShortName"] = "hoja_ruta_2020_pnc1";
$tdatahoja_ruta_2020_pnc1[".OwnerID"] = "sys_user";
$tdatahoja_ruta_2020_pnc1[".OriginalTable"] = "hoja_ruta_2020";


$tdatahoja_ruta_2020_pnc1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatahoja_ruta_2020_pnc1[".originalPagesByType"] = $tdatahoja_ruta_2020_pnc1[".pagesByType"];
$tdatahoja_ruta_2020_pnc1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatahoja_ruta_2020_pnc1[".originalPages"] = $tdatahoja_ruta_2020_pnc1[".pages"];
$tdatahoja_ruta_2020_pnc1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatahoja_ruta_2020_pnc1[".originalDefaultPages"] = $tdatahoja_ruta_2020_pnc1[".defaultPages"];

//	field labels
$fieldLabelshoja_ruta_2020_pnc1 = array();
$fieldToolTipshoja_ruta_2020_pnc1 = array();
$pageTitleshoja_ruta_2020_pnc1 = array();
$placeHoldershoja_ruta_2020_pnc1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"] = array();
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"] = array();
	$placeHoldershoja_ruta_2020_pnc1["Spanish"] = array();
	$pageTitleshoja_ruta_2020_pnc1["Spanish"] = array();
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["hr_id"] = "Hoja de ruta";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["hr_id"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["hr_id"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["hr_concepto_id"] = "Concepto";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["hr_concepto_id"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["hr_concepto_id"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["id_cont_fk"] = "Contrato";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["id_cont_fk"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["id_cont_fk"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["hr_anio"] = "Vigencia";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["hr_anio"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["hr_anio"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["ctrlpagos_id_fk"] = "Ctrlpagos Id Fk";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["ctrlpagos_id_fk"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["ctrlpagos_id_fk"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["cxc_id_fk"] = "Cxc Id Fk";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["cxc_id_fk"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["cxc_id_fk"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["obligacion"] = "Obligacion";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["obligacion"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["obligacion"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["id_informe_fk"] = "Id Informe Fk";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["id_informe_fk"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["id_informe_fk"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["hr_nit_contra_ta"] = "Documento";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["hr_nit_contra_ta"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["hr_nit_contra_ta"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["hr_asunto"] = "Asunto";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["hr_asunto"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["hr_asunto"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["hr_valor"] = "Valor a pagar solicitado";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["hr_valor"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["hr_valor"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["hr_fechaingreso"] = "Fecha de registro";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["hr_fechaingreso"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["hr_fechaingreso"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["hr_fecha_salida"] = "Hr Fecha Salida";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["hr_fecha_salida"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["hr_fecha_salida"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["hr_estado_firma"] = "Hr Estado Firma";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["hr_estado_firma"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["hr_estado_firma"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["hr_estado_numero"] = "Hr Estado Numero";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["hr_estado_numero"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["hr_estado_numero"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["hr_estado_fecha"] = "Hr Estado Fecha";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["hr_estado_fecha"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["hr_estado_fecha"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["hr_estado_file"] = "Hr Estado File";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["hr_estado_file"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["hr_estado_file"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["hr_estado_user"] = "Hr Estado User";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["hr_estado_user"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["hr_estado_user"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["sys_user"] = "Supervisor";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["sys_user"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["sys_user"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["sys_user_actual"] = "Sys User Actual";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["sys_user_actual"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["sys_user_actual"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["sys_fecha_reg"] = "Sys Fecha Reg";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["sys_fecha_reg"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["sys_fecha_reg"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["hr_file"] = "Hr File";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["hr_file"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["hr_file"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["not_status"] = "Not Status";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["not_status"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["not_status"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["not_time"] = "Not Time";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["not_time"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["not_time"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["not_user"] = "Not User";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["not_user"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["not_user"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["not_date"] = "Not Date";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["not_date"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["not_date"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["not_mail"] = "Email";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["not_mail"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["not_mail"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["not_msg"] = "Comentarios";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["not_msg"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["not_msg"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["sysdate"] = "Fecha sistema";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["sysdate"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["sysdate"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["evento_type_id_fk"] = "Actividad";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["evento_type_id_fk"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["evento_type_id_fk"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["user_from"] = "Generado por";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["user_from"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["user_from"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["last_act_user"] = "Ultima actividad";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["last_act_user"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["last_act_user"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["hr_aprob_estado"] = "Hr Aprob Estado";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["hr_aprob_estado"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["hr_aprob_estado"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["hr_aprob_fecha"] = "Hr Aprob Fecha";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["hr_aprob_fecha"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["hr_aprob_fecha"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["hr_aprob_user"] = "Hr Aprob User";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["hr_aprob_user"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["hr_aprob_user"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["tercero_email_a"] = "Correo personal";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["tercero_email_a"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["tercero_email_a"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["tercero_email_b"] = "Correo institucional";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["tercero_email_b"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["tercero_email_b"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["anio"] = "Historial de solicitudes";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["anio"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["anio"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["mes"] = "Mes";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["mes"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["mes"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["sys_dep"] = "Enviar a dependencia";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["sys_dep"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["sys_dep"] = "";
	$fieldLabelshoja_ruta_2020_pnc1["Spanish"]["cont_num"] = "Contrato número";
	$fieldToolTipshoja_ruta_2020_pnc1["Spanish"]["cont_num"] = "";
	$placeHoldershoja_ruta_2020_pnc1["Spanish"]["cont_num"] = "";
	if (count($fieldToolTipshoja_ruta_2020_pnc1["Spanish"]))
		$tdatahoja_ruta_2020_pnc1[".isUseToolTips"] = true;
}


	$tdatahoja_ruta_2020_pnc1[".NCSearch"] = true;



$tdatahoja_ruta_2020_pnc1[".shortTableName"] = "hoja_ruta_2020_pnc1";
$tdatahoja_ruta_2020_pnc1[".nSecOptions"] = 1;

$tdatahoja_ruta_2020_pnc1[".mainTableOwnerID"] = "sys_user";
$tdatahoja_ruta_2020_pnc1[".entityType"] = 1;

$tdatahoja_ruta_2020_pnc1[".strOriginalTableName"] = "hoja_ruta_2020";

	



$tdatahoja_ruta_2020_pnc1[".showAddInPopup"] = false;

$tdatahoja_ruta_2020_pnc1[".showEditInPopup"] = false;

$tdatahoja_ruta_2020_pnc1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahoja_ruta_2020_pnc1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahoja_ruta_2020_pnc1[".listAjax"] = false;
//	temporary
$tdatahoja_ruta_2020_pnc1[".listAjax"] = false;

	$tdatahoja_ruta_2020_pnc1[".audit"] = true;

	$tdatahoja_ruta_2020_pnc1[".locking"] = true;


$pages = $tdatahoja_ruta_2020_pnc1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahoja_ruta_2020_pnc1[".edit"] = true;
	$tdatahoja_ruta_2020_pnc1[".afterEditAction"] = 0;
	$tdatahoja_ruta_2020_pnc1[".closePopupAfterEdit"] = 1;
	$tdatahoja_ruta_2020_pnc1[".afterEditActionDetTable"] = "hoja_ruta_2020_files";
}

if( $pages[PAGE_ADD] ) {
$tdatahoja_ruta_2020_pnc1[".add"] = true;
$tdatahoja_ruta_2020_pnc1[".afterAddAction"] = 0;
$tdatahoja_ruta_2020_pnc1[".closePopupAfterAdd"] = 1;
$tdatahoja_ruta_2020_pnc1[".afterAddActionDetTable"] = "hoja_ruta_2020_files";
}

if( $pages[PAGE_LIST] ) {
	$tdatahoja_ruta_2020_pnc1[".list"] = true;
}



$tdatahoja_ruta_2020_pnc1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahoja_ruta_2020_pnc1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahoja_ruta_2020_pnc1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahoja_ruta_2020_pnc1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahoja_ruta_2020_pnc1[".printFriendly"] = true;
}



$tdatahoja_ruta_2020_pnc1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahoja_ruta_2020_pnc1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahoja_ruta_2020_pnc1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahoja_ruta_2020_pnc1[".isUseAjaxSuggest"] = true;

$tdatahoja_ruta_2020_pnc1[".rowHighlite"] = true;





$tdatahoja_ruta_2020_pnc1[".ajaxCodeSnippetAdded"] = false;

$tdatahoja_ruta_2020_pnc1[".buttonsAdded"] = false;

$tdatahoja_ruta_2020_pnc1[".addPageEvents"] = true;

// use timepicker for search panel
$tdatahoja_ruta_2020_pnc1[".isUseTimeForSearch"] = false;


$tdatahoja_ruta_2020_pnc1[".badgeColor"] = "D2AF80";


$tdatahoja_ruta_2020_pnc1[".allSearchFields"] = array();
$tdatahoja_ruta_2020_pnc1[".filterFields"] = array();
$tdatahoja_ruta_2020_pnc1[".requiredSearchFields"] = array();

$tdatahoja_ruta_2020_pnc1[".googleLikeFields"] = array();
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "hr_id";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "hr_concepto_id";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "id_cont_fk";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "hr_anio";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "ctrlpagos_id_fk";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "cxc_id_fk";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "obligacion";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "id_informe_fk";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "hr_nit_contra_ta";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "hr_asunto";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "hr_valor";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "hr_fechaingreso";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "hr_fecha_salida";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "hr_estado_firma";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "hr_estado_numero";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "hr_estado_fecha";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "hr_estado_file";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "hr_estado_user";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "sys_dep";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "sys_user";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "sys_user_actual";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "sys_fecha_reg";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "hr_file";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "not_status";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "not_time";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "not_user";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "not_date";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "not_mail";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "not_msg";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "sysdate";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "evento_type_id_fk";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "user_from";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "last_act_user";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "hr_aprob_estado";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "hr_aprob_fecha";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "hr_aprob_user";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "tercero_email_a";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "tercero_email_b";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "anio";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "mes";
$tdatahoja_ruta_2020_pnc1[".googleLikeFields"][] = "cont_num";



$tdatahoja_ruta_2020_pnc1[".tableType"] = "list";

$tdatahoja_ruta_2020_pnc1[".printerPageOrientation"] = 0;
$tdatahoja_ruta_2020_pnc1[".nPrinterPageScale"] = 100;

$tdatahoja_ruta_2020_pnc1[".nPrinterSplitRecords"] = 40;

$tdatahoja_ruta_2020_pnc1[".geocodingEnabled"] = false;




$tdatahoja_ruta_2020_pnc1[".isDisplayLoading"] = true;






$tdatahoja_ruta_2020_pnc1[".pageSize"] = 20;

$tdatahoja_ruta_2020_pnc1[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY hr_id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahoja_ruta_2020_pnc1[".strOrderBy"] = $tstrOrderBy;

$tdatahoja_ruta_2020_pnc1[".orderindexes"] = array();
	$tdatahoja_ruta_2020_pnc1[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "hr_id");


$tdatahoja_ruta_2020_pnc1[".sqlHead"] = "SELECT hr_id,  hr_concepto_id,  id_cont_fk,  hr_anio,  ctrlpagos_id_fk,  cxc_id_fk,  obligacion,  id_informe_fk,  hr_nit_contra_ta,  hr_asunto,  hr_valor,  hr_fechaingreso,  hr_fecha_salida,  hr_estado_firma,  hr_estado_numero,  hr_estado_fecha,  hr_estado_file,  hr_estado_user,  sys_dep,  sys_user,  sys_user_actual,  sys_fecha_reg,  hr_file,  not_status,  not_time,  not_user,  not_date,  not_mail,  not_msg,  `sysdate`,  evento_type_id_fk,  user_from,  last_act_user,  hr_aprob_estado,  hr_aprob_fecha,  hr_aprob_user,  tercero_email_a,  tercero_email_b,  anio,  mes,  cont_num";
$tdatahoja_ruta_2020_pnc1[".sqlFrom"] = "FROM hoja_ruta_2020";
$tdatahoja_ruta_2020_pnc1[".sqlWhereExpr"] = "(hr_concepto_id = 8)";
$tdatahoja_ruta_2020_pnc1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahoja_ruta_2020_pnc1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahoja_ruta_2020_pnc1[".arrGroupsPerPage"] = $arrGPP;

$tdatahoja_ruta_2020_pnc1[".highlightSearchResults"] = true;

$tableKeyshoja_ruta_2020_pnc1 = array();
$tableKeyshoja_ruta_2020_pnc1[] = "hr_id";
$tdatahoja_ruta_2020_pnc1[".Keys"] = $tableKeyshoja_ruta_2020_pnc1;


$tdatahoja_ruta_2020_pnc1[".hideMobileList"] = array();




//	hr_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "hr_id";
	$fdata["GoodName"] = "hr_id";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","hr_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "hr_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_id";

	
	
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


	$tdatahoja_ruta_2020_pnc1["hr_id"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "hr_id";
//	hr_concepto_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "hr_concepto_id";
	$fdata["GoodName"] = "hr_concepto_id";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","hr_concepto_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "hr_concepto_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_concepto_id";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
		$edata["autoUpdatable"] = true;

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


	$tdatahoja_ruta_2020_pnc1["hr_concepto_id"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "hr_concepto_id";
//	id_cont_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_cont_fk";
	$fdata["GoodName"] = "id_cont_fk";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","id_cont_fk");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_cont_fk";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_cont_fk";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "q_bandejaentrada_supervisores_c";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"hr_anio", 'lookupF'=>"cont_ano");
	$edata["autoCompleteFields"][] = array('masterF'=>"hr_valor", 'lookupF'=>"cont_valormensual");
	$edata["autoCompleteFields"][] = array('masterF'=>"sys_dep", 'lookupF'=>"dependencia_id");
	$edata["autoCompleteFields"][] = array('masterF'=>"tercero_email_a", 'lookupF'=>"contractor_email");
	$edata["autoCompleteFields"][] = array('masterF'=>"tercero_email_b", 'lookupF'=>"contractor_email_mincit");
	$edata["autoCompleteFields"][] = array('masterF'=>"cont_num", 'lookupF'=>"numcontrato");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_cont";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "contractor_nombresfull";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "hr_nit_contra_ta", "lookup" => "cont_nit_contra_ta" );

	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatahoja_ruta_2020_pnc1["id_cont_fk"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "id_cont_fk";
//	hr_anio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "hr_anio";
	$fdata["GoodName"] = "hr_anio";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","hr_anio");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "hr_anio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_anio";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatahoja_ruta_2020_pnc1["hr_anio"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "hr_anio";
//	ctrlpagos_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ctrlpagos_id_fk";
	$fdata["GoodName"] = "ctrlpagos_id_fk";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","ctrlpagos_id_fk");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "ctrlpagos_id_fk";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ctrlpagos_id_fk";

	
	
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


	$tdatahoja_ruta_2020_pnc1["ctrlpagos_id_fk"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "ctrlpagos_id_fk";
//	cxc_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cxc_id_fk";
	$fdata["GoodName"] = "cxc_id_fk";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","cxc_id_fk");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "cxc_id_fk";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cxc_id_fk";

	
	
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


	$tdatahoja_ruta_2020_pnc1["cxc_id_fk"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "cxc_id_fk";
//	obligacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "obligacion";
	$fdata["GoodName"] = "obligacion";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","obligacion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "obligacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "obligacion";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatahoja_ruta_2020_pnc1["obligacion"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "obligacion";
//	id_informe_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "id_informe_fk";
	$fdata["GoodName"] = "id_informe_fk";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","id_informe_fk");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_informe_fk";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_informe_fk";

	
	
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


	$tdatahoja_ruta_2020_pnc1["id_informe_fk"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "id_informe_fk";
//	hr_nit_contra_ta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "hr_nit_contra_ta";
	$fdata["GoodName"] = "hr_nit_contra_ta";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","hr_nit_contra_ta");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "hr_nit_contra_ta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_nit_contra_ta";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
		$edata["autoUpdatable"] = true;

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


	$tdatahoja_ruta_2020_pnc1["hr_nit_contra_ta"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "hr_nit_contra_ta";
//	hr_asunto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "hr_asunto";
	$fdata["GoodName"] = "hr_asunto";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","hr_asunto");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "hr_asunto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_asunto";

	
	
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
			$edata["EditParams"].= " maxlength=500";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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


	$tdatahoja_ruta_2020_pnc1["hr_asunto"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "hr_asunto";
//	hr_valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "hr_valor";
	$fdata["GoodName"] = "hr_valor";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","hr_valor");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "hr_valor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_valor";

	
	
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


	$tdatahoja_ruta_2020_pnc1["hr_valor"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "hr_valor";
//	hr_fechaingreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "hr_fechaingreso";
	$fdata["GoodName"] = "hr_fechaingreso";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","hr_fechaingreso");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "hr_fechaingreso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_fechaingreso";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatahoja_ruta_2020_pnc1["hr_fechaingreso"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "hr_fechaingreso";
//	hr_fecha_salida
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "hr_fecha_salida";
	$fdata["GoodName"] = "hr_fecha_salida";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","hr_fecha_salida");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "hr_fecha_salida";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_fecha_salida";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatahoja_ruta_2020_pnc1["hr_fecha_salida"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "hr_fecha_salida";
//	hr_estado_firma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "hr_estado_firma";
	$fdata["GoodName"] = "hr_estado_firma";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","hr_estado_firma");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "hr_estado_firma";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_estado_firma";

	
	
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


	$tdatahoja_ruta_2020_pnc1["hr_estado_firma"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "hr_estado_firma";
//	hr_estado_numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "hr_estado_numero";
	$fdata["GoodName"] = "hr_estado_numero";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","hr_estado_numero");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "hr_estado_numero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_estado_numero";

	
	
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
			$edata["EditParams"].= " maxlength=12";

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


	$tdatahoja_ruta_2020_pnc1["hr_estado_numero"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "hr_estado_numero";
//	hr_estado_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "hr_estado_fecha";
	$fdata["GoodName"] = "hr_estado_fecha";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","hr_estado_fecha");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "hr_estado_fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_estado_fecha";

	
	
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


	$tdatahoja_ruta_2020_pnc1["hr_estado_fecha"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "hr_estado_fecha";
//	hr_estado_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "hr_estado_file";
	$fdata["GoodName"] = "hr_estado_file";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","hr_estado_file");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "hr_estado_file";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_estado_file";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatahoja_ruta_2020_pnc1["hr_estado_file"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "hr_estado_file";
//	hr_estado_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "hr_estado_user";
	$fdata["GoodName"] = "hr_estado_user";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","hr_estado_user");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "hr_estado_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_estado_user";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatahoja_ruta_2020_pnc1["hr_estado_user"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "hr_estado_user";
//	sys_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "sys_dep";
	$fdata["GoodName"] = "sys_dep";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","sys_dep");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "sys_dep";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_dep";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dependencia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "nombre";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "sys_user";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatahoja_ruta_2020_pnc1["sys_dep"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "sys_dep";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","sys_user");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "sys_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_user";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "global_users";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"not_user", 'lookupF'=>"Username");
	$edata["autoCompleteFields"][] = array('masterF'=>"not_mail", 'lookupF'=>"usr_email");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Username";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "usr_nombresfull";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "usr_nombresfull";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "sys_dep", "lookup" => "usr_dep" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatahoja_ruta_2020_pnc1["sys_user"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "sys_user";
//	sys_user_actual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "sys_user_actual";
	$fdata["GoodName"] = "sys_user_actual";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","sys_user_actual");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "sys_user_actual";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_user_actual";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatahoja_ruta_2020_pnc1["sys_user_actual"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "sys_user_actual";
//	sys_fecha_reg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "sys_fecha_reg";
	$fdata["GoodName"] = "sys_fecha_reg";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","sys_fecha_reg");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "sys_fecha_reg";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_fecha_reg";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatahoja_ruta_2020_pnc1["sys_fecha_reg"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "sys_fecha_reg";
//	hr_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "hr_file";
	$fdata["GoodName"] = "hr_file";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","hr_file");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "hr_file";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_file";

	
	
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


	$tdatahoja_ruta_2020_pnc1["hr_file"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "hr_file";
//	not_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "not_status";
	$fdata["GoodName"] = "not_status";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","not_status");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "not_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "not_status";

	
	
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


	$tdatahoja_ruta_2020_pnc1["not_status"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "not_status";
//	not_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "not_time";
	$fdata["GoodName"] = "not_time";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","not_time");
	$fdata["FieldType"] = 134;

	
	
	
			

		$fdata["strField"] = "not_time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "not_time";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdatahoja_ruta_2020_pnc1["not_time"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "not_time";
//	not_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "not_user";
	$fdata["GoodName"] = "not_user";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","not_user");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "not_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "not_user";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatahoja_ruta_2020_pnc1["not_user"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "not_user";
//	not_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "not_date";
	$fdata["GoodName"] = "not_date";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","not_date");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "not_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "not_date";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

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


	$tdatahoja_ruta_2020_pnc1["not_date"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "not_date";
//	not_mail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "not_mail";
	$fdata["GoodName"] = "not_mail";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","not_mail");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "not_mail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "not_mail";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatahoja_ruta_2020_pnc1["not_mail"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "not_mail";
//	not_msg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "not_msg";
	$fdata["GoodName"] = "not_msg";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","not_msg");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "not_msg";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "not_msg";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatahoja_ruta_2020_pnc1["not_msg"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "not_msg";
//	sysdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "sysdate";
	$fdata["GoodName"] = "sysdate";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","sysdate");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "sysdate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sysdate`";

	
	
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


	$tdatahoja_ruta_2020_pnc1["sysdate"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "sysdate";
//	evento_type_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "evento_type_id_fk";
	$fdata["GoodName"] = "evento_type_id_fk";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","evento_type_id_fk");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "evento_type_id_fk";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evento_type_id_fk";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "hoja_ruta_event_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "evento_type_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "evento_type_name";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatahoja_ruta_2020_pnc1["evento_type_id_fk"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "evento_type_id_fk";
//	user_from
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "user_from";
	$fdata["GoodName"] = "user_from";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","user_from");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "user_from";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_from";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
		$edata["autoUpdatable"] = true;

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


	$tdatahoja_ruta_2020_pnc1["user_from"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "user_from";
//	last_act_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "last_act_user";
	$fdata["GoodName"] = "last_act_user";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","last_act_user");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "last_act_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_act_user";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

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


	$tdatahoja_ruta_2020_pnc1["last_act_user"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "last_act_user";
//	hr_aprob_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "hr_aprob_estado";
	$fdata["GoodName"] = "hr_aprob_estado";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","hr_aprob_estado");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "hr_aprob_estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_aprob_estado";

	
	
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


	$tdatahoja_ruta_2020_pnc1["hr_aprob_estado"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "hr_aprob_estado";
//	hr_aprob_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "hr_aprob_fecha";
	$fdata["GoodName"] = "hr_aprob_fecha";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","hr_aprob_fecha");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "hr_aprob_fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_aprob_fecha";

	
	
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


	$tdatahoja_ruta_2020_pnc1["hr_aprob_fecha"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "hr_aprob_fecha";
//	hr_aprob_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "hr_aprob_user";
	$fdata["GoodName"] = "hr_aprob_user";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","hr_aprob_user");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "hr_aprob_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_aprob_user";

	
	
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
			$edata["EditParams"].= " maxlength=60";

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


	$tdatahoja_ruta_2020_pnc1["hr_aprob_user"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "hr_aprob_user";
//	tercero_email_a
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "tercero_email_a";
	$fdata["GoodName"] = "tercero_email_a";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","tercero_email_a");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "tercero_email_a";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tercero_email_a";

	
	
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


	$tdatahoja_ruta_2020_pnc1["tercero_email_a"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "tercero_email_a";
//	tercero_email_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "tercero_email_b";
	$fdata["GoodName"] = "tercero_email_b";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","tercero_email_b");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "tercero_email_b";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tercero_email_b";

	
	
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


	$tdatahoja_ruta_2020_pnc1["tercero_email_b"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "tercero_email_b";
//	anio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "anio";
	$fdata["GoodName"] = "anio";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","anio");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "anio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "anio";

	
	
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
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "hr_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatahoja_ruta_2020_pnc1["anio"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "anio";
//	mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "mes";
	$fdata["GoodName"] = "mes";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","mes");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "mes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mes";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "nomina_cont_meses";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "mes_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "mes_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "hr_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

		$fdata["parentFilterField"] = "anio";


	
	
//end of Filters settings


	$tdatahoja_ruta_2020_pnc1["mes"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "mes";
//	cont_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "cont_num";
	$fdata["GoodName"] = "cont_num";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_pnc1","cont_num");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_num";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_num";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatahoja_ruta_2020_pnc1["cont_num"] = $fdata;
		$tdatahoja_ruta_2020_pnc1[".searchableFields"][] = "cont_num";


$tables_data["hoja_ruta_2020_pnc1"]=&$tdatahoja_ruta_2020_pnc1;
$field_labels["hoja_ruta_2020_pnc1"] = &$fieldLabelshoja_ruta_2020_pnc1;
$fieldToolTips["hoja_ruta_2020_pnc1"] = &$fieldToolTipshoja_ruta_2020_pnc1;
$placeHolders["hoja_ruta_2020_pnc1"] = &$placeHoldershoja_ruta_2020_pnc1;
$page_titles["hoja_ruta_2020_pnc1"] = &$pageTitleshoja_ruta_2020_pnc1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hoja_ruta_2020_pnc1"] = array();
//	hoja_ruta_2020_files
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="hoja_ruta_2020_files";
		$detailsParam["dOriginalTable"] = "hoja_ruta_2020_files";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "hoja_ruta_2020_files";
	$detailsParam["dCaptionTable"] = GetTableCaption("hoja_ruta_2020_files");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["hoja_ruta_2020_pnc1"][$dIndex] = $detailsParam;

	
		$detailsTablesData["hoja_ruta_2020_pnc1"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["hoja_ruta_2020_pnc1"][$dIndex]["masterKeys"][]="hr_id";

				$detailsTablesData["hoja_ruta_2020_pnc1"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["hoja_ruta_2020_pnc1"][$dIndex]["detailKeys"][]="hr_id_fk";
//	hoja_ruta_2020_tracking
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="hoja_ruta_2020_tracking";
		$detailsParam["dOriginalTable"] = "hoja_ruta_2020_tracking";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "hoja_ruta_2020_tracking";
	$detailsParam["dCaptionTable"] = GetTableCaption("hoja_ruta_2020_tracking");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["hoja_ruta_2020_pnc1"][$dIndex] = $detailsParam;

	
		$detailsTablesData["hoja_ruta_2020_pnc1"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["hoja_ruta_2020_pnc1"][$dIndex]["masterKeys"][]="hr_id";

				$detailsTablesData["hoja_ruta_2020_pnc1"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["hoja_ruta_2020_pnc1"][$dIndex]["detailKeys"][]="hr_id_fk";
//	hoja_ruta_ob
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="hoja_ruta_ob";
		$detailsParam["dOriginalTable"] = "hoja_ruta_ob";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "hoja_ruta_ob";
	$detailsParam["dCaptionTable"] = GetTableCaption("hoja_ruta_ob");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["hoja_ruta_2020_pnc1"][$dIndex] = $detailsParam;

	
		$detailsTablesData["hoja_ruta_2020_pnc1"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["hoja_ruta_2020_pnc1"][$dIndex]["masterKeys"][]="hr_id";

				$detailsTablesData["hoja_ruta_2020_pnc1"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["hoja_ruta_2020_pnc1"][$dIndex]["detailKeys"][]="hr_id_fk";
//	hoja_ruta_op
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="hoja_ruta_op";
		$detailsParam["dOriginalTable"] = "hoja_ruta_op";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "hoja_ruta_op";
	$detailsParam["dCaptionTable"] = GetTableCaption("hoja_ruta_op");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["hoja_ruta_2020_pnc1"][$dIndex] = $detailsParam;

	
		$detailsTablesData["hoja_ruta_2020_pnc1"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["hoja_ruta_2020_pnc1"][$dIndex]["masterKeys"][]="hr_id";

				$detailsTablesData["hoja_ruta_2020_pnc1"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["hoja_ruta_2020_pnc1"][$dIndex]["detailKeys"][]="hr_id_fk";
//	q_info_cont
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="q_info_cont";
		$detailsParam["dOriginalTable"] = "q_bandejaentrada_supervisores";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "q_info_cont";
	$detailsParam["dCaptionTable"] = GetTableCaption("q_info_cont");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["hoja_ruta_2020_pnc1"][$dIndex] = $detailsParam;

	
		$detailsTablesData["hoja_ruta_2020_pnc1"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["hoja_ruta_2020_pnc1"][$dIndex]["masterKeys"][]="id_cont_fk";

				$detailsTablesData["hoja_ruta_2020_pnc1"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["hoja_ruta_2020_pnc1"][$dIndex]["detailKeys"][]="id_cont";

// tables which are master tables for current table (detail)
$masterTablesData["hoja_ruta_2020_pnc1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_hoja_ruta_2020_pnc1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "hr_id,  hr_concepto_id,  id_cont_fk,  hr_anio,  ctrlpagos_id_fk,  cxc_id_fk,  obligacion,  id_informe_fk,  hr_nit_contra_ta,  hr_asunto,  hr_valor,  hr_fechaingreso,  hr_fecha_salida,  hr_estado_firma,  hr_estado_numero,  hr_estado_fecha,  hr_estado_file,  hr_estado_user,  sys_dep,  sys_user,  sys_user_actual,  sys_fecha_reg,  hr_file,  not_status,  not_time,  not_user,  not_date,  not_mail,  not_msg,  `sysdate`,  evento_type_id_fk,  user_from,  last_act_user,  hr_aprob_estado,  hr_aprob_fecha,  hr_aprob_user,  tercero_email_a,  tercero_email_b,  anio,  mes,  cont_num";
$proto0["m_strFrom"] = "FROM hoja_ruta_2020";
$proto0["m_strWhere"] = "(hr_concepto_id = 8)";
$proto0["m_strOrderBy"] = "ORDER BY hr_id DESC";
	
								;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "hr_concepto_id = 8";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "hr_concepto_id",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 8";
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
	"m_strName" => "hr_id",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto6["m_sql"] = "hr_id";
$proto6["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_concepto_id",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto8["m_sql"] = "hr_concepto_id";
$proto8["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_fk",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto10["m_sql"] = "id_cont_fk";
$proto10["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_anio",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto12["m_sql"] = "hr_anio";
$proto12["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ctrlpagos_id_fk",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto14["m_sql"] = "ctrlpagos_id_fk";
$proto14["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_id_fk",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto16["m_sql"] = "cxc_id_fk";
$proto16["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "obligacion",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto18["m_sql"] = "obligacion";
$proto18["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "id_informe_fk",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto20["m_sql"] = "id_informe_fk";
$proto20["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_nit_contra_ta",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto22["m_sql"] = "hr_nit_contra_ta";
$proto22["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_asunto",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto24["m_sql"] = "hr_asunto";
$proto24["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_valor",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto26["m_sql"] = "hr_valor";
$proto26["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_fechaingreso",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto28["m_sql"] = "hr_fechaingreso";
$proto28["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_fecha_salida",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto30["m_sql"] = "hr_fecha_salida";
$proto30["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_estado_firma",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto32["m_sql"] = "hr_estado_firma";
$proto32["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_estado_numero",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto34["m_sql"] = "hr_estado_numero";
$proto34["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_estado_fecha",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto36["m_sql"] = "hr_estado_fecha";
$proto36["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_estado_file",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto38["m_sql"] = "hr_estado_file";
$proto38["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_estado_user",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto40["m_sql"] = "hr_estado_user";
$proto40["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_dep",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto42["m_sql"] = "sys_dep";
$proto42["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto44["m_sql"] = "sys_user";
$proto44["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user_actual",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto46["m_sql"] = "sys_user_actual";
$proto46["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_fecha_reg",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto48["m_sql"] = "sys_fecha_reg";
$proto48["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_file",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto50["m_sql"] = "hr_file";
$proto50["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "not_status",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto52["m_sql"] = "not_status";
$proto52["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "not_time",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto54["m_sql"] = "not_time";
$proto54["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "not_user",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto56["m_sql"] = "not_user";
$proto56["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "not_date",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto58["m_sql"] = "not_date";
$proto58["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "not_mail",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto60["m_sql"] = "not_mail";
$proto60["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "not_msg",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto62["m_sql"] = "not_msg";
$proto62["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "sysdate",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto64["m_sql"] = "`sysdate`";
$proto64["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "evento_type_id_fk",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto66["m_sql"] = "evento_type_id_fk";
$proto66["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "user_from",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto68["m_sql"] = "user_from";
$proto68["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "last_act_user",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto70["m_sql"] = "last_act_user";
$proto70["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_aprob_estado",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto72["m_sql"] = "hr_aprob_estado";
$proto72["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_aprob_fecha",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto74["m_sql"] = "hr_aprob_fecha";
$proto74["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_aprob_user",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto76["m_sql"] = "hr_aprob_user";
$proto76["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "tercero_email_a",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto78["m_sql"] = "tercero_email_a";
$proto78["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "tercero_email_b",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto80["m_sql"] = "tercero_email_b";
$proto80["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "anio",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto82["m_sql"] = "anio";
$proto82["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "mes",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto84["m_sql"] = "mes";
$proto84["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_num",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto86["m_sql"] = "cont_num";
$proto86["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto88=array();
$proto88["m_link"] = "SQLL_MAIN";
			$proto89=array();
$proto89["m_strName"] = "hoja_ruta_2020";
$proto89["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto89["m_columns"] = array();
$proto89["m_columns"][] = "hr_id";
$proto89["m_columns"][] = "hr_concepto_id";
$proto89["m_columns"][] = "id_cont_fk";
$proto89["m_columns"][] = "cont_num";
$proto89["m_columns"][] = "hr_anio";
$proto89["m_columns"][] = "periodo_id";
$proto89["m_columns"][] = "ctrlpagos_id_fk";
$proto89["m_columns"][] = "cxc_id_fk";
$proto89["m_columns"][] = "obligacion";
$proto89["m_columns"][] = "id_informe_fk";
$proto89["m_columns"][] = "hr_nit_contra_ta";
$proto89["m_columns"][] = "hr_asunto";
$proto89["m_columns"][] = "hr_valor";
$proto89["m_columns"][] = "hr_fechaingreso";
$proto89["m_columns"][] = "hr_fecha_salida";
$proto89["m_columns"][] = "hr_estado_firma";
$proto89["m_columns"][] = "hr_estado_numero";
$proto89["m_columns"][] = "hr_estado_fecha";
$proto89["m_columns"][] = "hr_estado_file";
$proto89["m_columns"][] = "hr_estado_user";
$proto89["m_columns"][] = "sys_user";
$proto89["m_columns"][] = "sys_sup";
$proto89["m_columns"][] = "sys_dep";
$proto89["m_columns"][] = "sys_user_actual";
$proto89["m_columns"][] = "sys_fecha_reg";
$proto89["m_columns"][] = "hr_file";
$proto89["m_columns"][] = "not_status";
$proto89["m_columns"][] = "not_time";
$proto89["m_columns"][] = "not_user";
$proto89["m_columns"][] = "not_date";
$proto89["m_columns"][] = "not_mail";
$proto89["m_columns"][] = "not_msg";
$proto89["m_columns"][] = "sysdate";
$proto89["m_columns"][] = "evento_type_id_fk";
$proto89["m_columns"][] = "user_from";
$proto89["m_columns"][] = "tercero_email_a";
$proto89["m_columns"][] = "tercero_email_b";
$proto89["m_columns"][] = "last_act_user";
$proto89["m_columns"][] = "hr_aprob_estado";
$proto89["m_columns"][] = "hr_aprob_fecha";
$proto89["m_columns"][] = "hr_aprob_user";
$proto89["m_columns"][] = "anio";
$proto89["m_columns"][] = "mes";
$obj = new SQLTable($proto89);

$proto88["m_table"] = $obj;
$proto88["m_sql"] = "hoja_ruta_2020";
$proto88["m_alias"] = "";
$proto88["m_srcTableName"] = "hoja_ruta_2020_pnc1";
$proto90=array();
$proto90["m_sql"] = "";
$proto90["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto90["m_column"]=$obj;
$proto90["m_contained"] = array();
$proto90["m_strCase"] = "";
$proto90["m_havingmode"] = false;
$proto90["m_inBrackets"] = false;
$proto90["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto90);

$proto88["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto88);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto92=array();
						$obj = new SQLField(array(
	"m_strName" => "hr_id",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_pnc1"
));

$proto92["m_column"]=$obj;
$proto92["m_bAsc"] = 0;
$proto92["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto92);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="hoja_ruta_2020_pnc1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hoja_ruta_2020_pnc1 = createSqlQuery_hoja_ruta_2020_pnc1();


	
								;

																																									

$tdatahoja_ruta_2020_pnc1[".sqlquery"] = $queryData_hoja_ruta_2020_pnc1;

include_once(getabspath("include/hoja_ruta_2020_pnc1_events.php"));
$tableEvents["hoja_ruta_2020_pnc1"] = new eventclass_hoja_ruta_2020_pnc1;
$tdatahoja_ruta_2020_pnc1[".hasEvents"] = true;

?>