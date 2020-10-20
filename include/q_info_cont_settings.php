<?php



$tdataq_info_cont = array();
$tdataq_info_cont[".searchableFields"] = array();
$tdataq_info_cont[".ShortName"] = "q_info_cont";
$tdataq_info_cont[".OwnerID"] = "";
$tdataq_info_cont[".OriginalTable"] = "q_bandejaentrada_supervisores";


$tdataq_info_cont[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"print\":[\"print1\"],\"search\":[\"search\"]}" );
$tdataq_info_cont[".originalPagesByType"] = $tdataq_info_cont[".pagesByType"];
$tdataq_info_cont[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"print\":[\"print1\"],\"search\":[\"search\"]}" ) );
$tdataq_info_cont[".originalPages"] = $tdataq_info_cont[".pages"];
$tdataq_info_cont[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"print\":\"print1\",\"search\":\"search\"}" );
$tdataq_info_cont[".originalDefaultPages"] = $tdataq_info_cont[".defaultPages"];

//	field labels
$fieldLabelsq_info_cont = array();
$fieldToolTipsq_info_cont = array();
$pageTitlesq_info_cont = array();
$placeHoldersq_info_cont = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_info_cont["Spanish"] = array();
	$fieldToolTipsq_info_cont["Spanish"] = array();
	$placeHoldersq_info_cont["Spanish"] = array();
	$pageTitlesq_info_cont["Spanish"] = array();
	$fieldLabelsq_info_cont["Spanish"]["id_cont"] = "Id Cont";
	$fieldToolTipsq_info_cont["Spanish"]["id_cont"] = "";
	$placeHoldersq_info_cont["Spanish"]["id_cont"] = "";
	$fieldLabelsq_info_cont["Spanish"]["cont_nit_contra_ta"] = "Documento | NIT";
	$fieldToolTipsq_info_cont["Spanish"]["cont_nit_contra_ta"] = "";
	$placeHoldersq_info_cont["Spanish"]["cont_nit_contra_ta"] = "";
	$fieldLabelsq_info_cont["Spanish"]["cont_estado"] = "Estado";
	$fieldToolTipsq_info_cont["Spanish"]["cont_estado"] = "";
	$placeHoldersq_info_cont["Spanish"]["cont_estado"] = "";
	$fieldLabelsq_info_cont["Spanish"]["numcontrato"] = "Número de contrato";
	$fieldToolTipsq_info_cont["Spanish"]["numcontrato"] = "";
	$placeHoldersq_info_cont["Spanish"]["numcontrato"] = "";
	$fieldLabelsq_info_cont["Spanish"]["pre_contnumero"] = "Pre Contnumero";
	$fieldToolTipsq_info_cont["Spanish"]["pre_contnumero"] = "";
	$placeHoldersq_info_cont["Spanish"]["pre_contnumero"] = "";
	$fieldLabelsq_info_cont["Spanish"]["contnumero"] = "Contnumero";
	$fieldToolTipsq_info_cont["Spanish"]["contnumero"] = "";
	$placeHoldersq_info_cont["Spanish"]["contnumero"] = "";
	$fieldLabelsq_info_cont["Spanish"]["cont_ano"] = "Vigencia";
	$fieldToolTipsq_info_cont["Spanish"]["cont_ano"] = "";
	$placeHoldersq_info_cont["Spanish"]["cont_ano"] = "";
	$fieldLabelsq_info_cont["Spanish"]["cont_codrubro"] = "Cont Codrubro";
	$fieldToolTipsq_info_cont["Spanish"]["cont_codrubro"] = "";
	$placeHoldersq_info_cont["Spanish"]["cont_codrubro"] = "";
	$fieldLabelsq_info_cont["Spanish"]["cont_catalogo_presupuestal"] = "Cont Catalogo Presupuestal";
	$fieldToolTipsq_info_cont["Spanish"]["cont_catalogo_presupuestal"] = "";
	$placeHoldersq_info_cont["Spanish"]["cont_catalogo_presupuestal"] = "";
	$fieldLabelsq_info_cont["Spanish"]["cont_fecha_inicio"] = "Cont Fecha Inicio";
	$fieldToolTipsq_info_cont["Spanish"]["cont_fecha_inicio"] = "";
	$placeHoldersq_info_cont["Spanish"]["cont_fecha_inicio"] = "";
	$fieldLabelsq_info_cont["Spanish"]["cont_fechafinal"] = "Cont Fechafinal";
	$fieldToolTipsq_info_cont["Spanish"]["cont_fechafinal"] = "";
	$placeHoldersq_info_cont["Spanish"]["cont_fechafinal"] = "";
	$fieldLabelsq_info_cont["Spanish"]["cont_periodicidad"] = "Cont Periodicidad";
	$fieldToolTipsq_info_cont["Spanish"]["cont_periodicidad"] = "";
	$placeHoldersq_info_cont["Spanish"]["cont_periodicidad"] = "";
	$fieldLabelsq_info_cont["Spanish"]["cont_valorinicial"] = "Cont Valorinicial";
	$fieldToolTipsq_info_cont["Spanish"]["cont_valorinicial"] = "";
	$placeHoldersq_info_cont["Spanish"]["cont_valorinicial"] = "";
	$fieldLabelsq_info_cont["Spanish"]["cont_valormensual"] = "Cont Valormensual";
	$fieldToolTipsq_info_cont["Spanish"]["cont_valormensual"] = "";
	$placeHoldersq_info_cont["Spanish"]["cont_valormensual"] = "";
	$fieldLabelsq_info_cont["Spanish"]["cont_secop_enlace"] = "Enlace SECOP";
	$fieldToolTipsq_info_cont["Spanish"]["cont_secop_enlace"] = "";
	$placeHoldersq_info_cont["Spanish"]["cont_secop_enlace"] = "";
	$fieldLabelsq_info_cont["Spanish"]["documento_id"] = "Documento supervisor";
	$fieldToolTipsq_info_cont["Spanish"]["documento_id"] = "";
	$placeHoldersq_info_cont["Spanish"]["documento_id"] = "";
	$fieldLabelsq_info_cont["Spanish"]["nombres"] = "Nombres supervisor";
	$fieldToolTipsq_info_cont["Spanish"]["nombres"] = "";
	$placeHoldersq_info_cont["Spanish"]["nombres"] = "";
	$fieldLabelsq_info_cont["Spanish"]["apellidos"] = "Apellidos supervisor";
	$fieldToolTipsq_info_cont["Spanish"]["apellidos"] = "";
	$placeHoldersq_info_cont["Spanish"]["apellidos"] = "";
	$fieldLabelsq_info_cont["Spanish"]["cargo_id"] = "Cargo";
	$fieldToolTipsq_info_cont["Spanish"]["cargo_id"] = "";
	$placeHoldersq_info_cont["Spanish"]["cargo_id"] = "";
	$fieldLabelsq_info_cont["Spanish"]["dependencia_id"] = "Dependencia";
	$fieldToolTipsq_info_cont["Spanish"]["dependencia_id"] = "";
	$placeHoldersq_info_cont["Spanish"]["dependencia_id"] = "";
	$fieldLabelsq_info_cont["Spanish"]["sup_fechanot"] = "Sup Fechanot";
	$fieldToolTipsq_info_cont["Spanish"]["sup_fechanot"] = "";
	$placeHoldersq_info_cont["Spanish"]["sup_fechanot"] = "";
	$fieldLabelsq_info_cont["Spanish"]["sup_mailnot"] = "Sup Mailnot";
	$fieldToolTipsq_info_cont["Spanish"]["sup_mailnot"] = "";
	$placeHoldersq_info_cont["Spanish"]["sup_mailnot"] = "";
	$fieldLabelsq_info_cont["Spanish"]["sup_status"] = "Sup Status";
	$fieldToolTipsq_info_cont["Spanish"]["sup_status"] = "";
	$placeHoldersq_info_cont["Spanish"]["sup_status"] = "";
	$fieldLabelsq_info_cont["Spanish"]["idusrglobal_fk"] = "Idusrglobal Fk";
	$fieldToolTipsq_info_cont["Spanish"]["idusrglobal_fk"] = "";
	$placeHoldersq_info_cont["Spanish"]["idusrglobal_fk"] = "";
	$fieldLabelsq_info_cont["Spanish"]["contractor_name"] = "Contractor Name";
	$fieldToolTipsq_info_cont["Spanish"]["contractor_name"] = "";
	$placeHoldersq_info_cont["Spanish"]["contractor_name"] = "";
	$fieldLabelsq_info_cont["Spanish"]["contractor_lname"] = "Contractor Lname";
	$fieldToolTipsq_info_cont["Spanish"]["contractor_lname"] = "";
	$placeHoldersq_info_cont["Spanish"]["contractor_lname"] = "";
	$fieldLabelsq_info_cont["Spanish"]["contractor_nombresfull"] = "Nombres | Razón Social";
	$fieldToolTipsq_info_cont["Spanish"]["contractor_nombresfull"] = "";
	$placeHoldersq_info_cont["Spanish"]["contractor_nombresfull"] = "";
	$fieldLabelsq_info_cont["Spanish"]["contractor_email"] = "Contractor Email";
	$fieldToolTipsq_info_cont["Spanish"]["contractor_email"] = "";
	$placeHoldersq_info_cont["Spanish"]["contractor_email"] = "";
	$fieldLabelsq_info_cont["Spanish"]["contractor_email_mincit"] = "Contractor Email Mincit";
	$fieldToolTipsq_info_cont["Spanish"]["contractor_email_mincit"] = "";
	$placeHoldersq_info_cont["Spanish"]["contractor_email_mincit"] = "";
	$fieldLabelsq_info_cont["Spanish"]["PLAZO"] = "PLAZO";
	$fieldToolTipsq_info_cont["Spanish"]["PLAZO"] = "";
	$placeHoldersq_info_cont["Spanish"]["PLAZO"] = "";
	$fieldLabelsq_info_cont["Spanish"]["nombresupfull"] = "Nombresupfull";
	$fieldToolTipsq_info_cont["Spanish"]["nombresupfull"] = "";
	$placeHoldersq_info_cont["Spanish"]["nombresupfull"] = "";
	$fieldLabelsq_info_cont["Spanish"]["prenumero"] = "Prenumero";
	$fieldToolTipsq_info_cont["Spanish"]["prenumero"] = "";
	$placeHoldersq_info_cont["Spanish"]["prenumero"] = "";
	$fieldLabelsq_info_cont["Spanish"]["numregistro"] = "Numregistro";
	$fieldToolTipsq_info_cont["Spanish"]["numregistro"] = "";
	$placeHoldersq_info_cont["Spanish"]["numregistro"] = "";
	$fieldLabelsq_info_cont["Spanish"]["cont_unspsc"] = "Cont Unspsc";
	$fieldToolTipsq_info_cont["Spanish"]["cont_unspsc"] = "";
	$placeHoldersq_info_cont["Spanish"]["cont_unspsc"] = "";
	$fieldLabelsq_info_cont["Spanish"]["cont_tipo_rubro"] = "Cont Tipo Rubro";
	$fieldToolTipsq_info_cont["Spanish"]["cont_tipo_rubro"] = "";
	$placeHoldersq_info_cont["Spanish"]["cont_tipo_rubro"] = "";
	$fieldLabelsq_info_cont["Spanish"]["cont_tipopre"] = "Cont Tipopre";
	$fieldToolTipsq_info_cont["Spanish"]["cont_tipopre"] = "";
	$placeHoldersq_info_cont["Spanish"]["cont_tipopre"] = "";
	$fieldLabelsq_info_cont["Spanish"]["cont_causalc"] = "Cont Causalc";
	$fieldToolTipsq_info_cont["Spanish"]["cont_causalc"] = "";
	$placeHoldersq_info_cont["Spanish"]["cont_causalc"] = "";
	$fieldLabelsq_info_cont["Spanish"]["cont_objeto"] = "Cont Objeto";
	$fieldToolTipsq_info_cont["Spanish"]["cont_objeto"] = "";
	$placeHoldersq_info_cont["Spanish"]["cont_objeto"] = "";
	$fieldLabelsq_info_cont["Spanish"]["cont_obligaciones"] = "Cont Obligaciones";
	$fieldToolTipsq_info_cont["Spanish"]["cont_obligaciones"] = "";
	$placeHoldersq_info_cont["Spanish"]["cont_obligaciones"] = "";
	$fieldLabelsq_info_cont["Spanish"]["cont_plazo"] = "Cont Plazo";
	$fieldToolTipsq_info_cont["Spanish"]["cont_plazo"] = "";
	$placeHoldersq_info_cont["Spanish"]["cont_plazo"] = "";
	$fieldLabelsq_info_cont["Spanish"]["ctb_tipo_nombre"] = "Ctb Tipo Nombre";
	$fieldToolTipsq_info_cont["Spanish"]["ctb_tipo_nombre"] = "";
	$placeHoldersq_info_cont["Spanish"]["ctb_tipo_nombre"] = "";
	$fieldLabelsq_info_cont["Spanish"]["nombre_cargo"] = "Nombre Cargo";
	$fieldToolTipsq_info_cont["Spanish"]["nombre_cargo"] = "";
	$placeHoldersq_info_cont["Spanish"]["nombre_cargo"] = "";
	$fieldLabelsq_info_cont["Spanish"]["nombre_dependencia"] = "Nombre Dependencia";
	$fieldToolTipsq_info_cont["Spanish"]["nombre_dependencia"] = "";
	$placeHoldersq_info_cont["Spanish"]["nombre_dependencia"] = "";
	$fieldLabelsq_info_cont["Spanish"]["id_depto_superior"] = "Id Depto Superior";
	$fieldToolTipsq_info_cont["Spanish"]["id_depto_superior"] = "";
	$placeHoldersq_info_cont["Spanish"]["id_depto_superior"] = "";
	$fieldLabelsq_info_cont["Spanish"]["Departamento_superior"] = "Departamento Superior";
	$fieldToolTipsq_info_cont["Spanish"]["Departamento_superior"] = "";
	$placeHoldersq_info_cont["Spanish"]["Departamento_superior"] = "";
	$fieldLabelsq_info_cont["Spanish"]["cont_numpoliza"] = "Cont Numpoliza";
	$fieldToolTipsq_info_cont["Spanish"]["cont_numpoliza"] = "";
	$placeHoldersq_info_cont["Spanish"]["cont_numpoliza"] = "";
	$fieldLabelsq_info_cont["Spanish"]["cont_secop_proceso"] = "Cont Secop Proceso";
	$fieldToolTipsq_info_cont["Spanish"]["cont_secop_proceso"] = "";
	$placeHoldersq_info_cont["Spanish"]["cont_secop_proceso"] = "";
	$fieldLabelsq_info_cont["Spanish"]["cont_fecha_aprobgarantia"] = "Cont Fecha Aprobgarantia";
	$fieldToolTipsq_info_cont["Spanish"]["cont_fecha_aprobgarantia"] = "";
	$placeHoldersq_info_cont["Spanish"]["cont_fecha_aprobgarantia"] = "";
	$fieldLabelsq_info_cont["Spanish"]["cont_fechaapertura"] = "Cont Fechaapertura";
	$fieldToolTipsq_info_cont["Spanish"]["cont_fechaapertura"] = "";
	$placeHoldersq_info_cont["Spanish"]["cont_fechaapertura"] = "";
	$fieldLabelsq_info_cont["Spanish"]["cont_munejec"] = "Cont Munejec";
	$fieldToolTipsq_info_cont["Spanish"]["cont_munejec"] = "";
	$placeHoldersq_info_cont["Spanish"]["cont_munejec"] = "";
	$fieldLabelsq_info_cont["Spanish"]["cont_cesion"] = "Cont Cesion";
	$fieldToolTipsq_info_cont["Spanish"]["cont_cesion"] = "";
	$placeHoldersq_info_cont["Spanish"]["cont_cesion"] = "";
	$fieldLabelsq_info_cont["Spanish"]["cont_modifica"] = "Cont Modifica";
	$fieldToolTipsq_info_cont["Spanish"]["cont_modifica"] = "";
	$placeHoldersq_info_cont["Spanish"]["cont_modifica"] = "";
	$fieldLabelsq_info_cont["Spanish"]["Username"] = "Username";
	$fieldToolTipsq_info_cont["Spanish"]["Username"] = "";
	$placeHoldersq_info_cont["Spanish"]["Username"] = "";
	if (count($fieldToolTipsq_info_cont["Spanish"]))
		$tdataq_info_cont[".isUseToolTips"] = true;
}


	$tdataq_info_cont[".NCSearch"] = true;



$tdataq_info_cont[".shortTableName"] = "q_info_cont";
$tdataq_info_cont[".nSecOptions"] = 0;

$tdataq_info_cont[".mainTableOwnerID"] = "";
$tdataq_info_cont[".entityType"] = 1;

$tdataq_info_cont[".strOriginalTableName"] = "q_bandejaentrada_supervisores";

	



$tdataq_info_cont[".showAddInPopup"] = false;

$tdataq_info_cont[".showEditInPopup"] = false;

$tdataq_info_cont[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataq_info_cont[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataq_info_cont[".listAjax"] = false;
//	temporary
$tdataq_info_cont[".listAjax"] = false;

	$tdataq_info_cont[".audit"] = true;

	$tdataq_info_cont[".locking"] = true;


$pages = $tdataq_info_cont[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_info_cont[".edit"] = true;
	$tdataq_info_cont[".afterEditAction"] = 1;
	$tdataq_info_cont[".closePopupAfterEdit"] = 1;
	$tdataq_info_cont[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_info_cont[".add"] = true;
$tdataq_info_cont[".afterAddAction"] = 1;
$tdataq_info_cont[".closePopupAfterAdd"] = 1;
$tdataq_info_cont[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_info_cont[".list"] = true;
}



$tdataq_info_cont[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_info_cont[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_info_cont[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_info_cont[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_info_cont[".printFriendly"] = true;
}



$tdataq_info_cont[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_info_cont[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_info_cont[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_info_cont[".isUseAjaxSuggest"] = true;

$tdataq_info_cont[".rowHighlite"] = true;





$tdataq_info_cont[".ajaxCodeSnippetAdded"] = false;

$tdataq_info_cont[".buttonsAdded"] = false;

$tdataq_info_cont[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_info_cont[".isUseTimeForSearch"] = false;


$tdataq_info_cont[".badgeColor"] = "2f4f4f";


$tdataq_info_cont[".allSearchFields"] = array();
$tdataq_info_cont[".filterFields"] = array();
$tdataq_info_cont[".requiredSearchFields"] = array();

$tdataq_info_cont[".googleLikeFields"] = array();
$tdataq_info_cont[".googleLikeFields"][] = "id_cont";
$tdataq_info_cont[".googleLikeFields"][] = "cont_nit_contra_ta";
$tdataq_info_cont[".googleLikeFields"][] = "cont_estado";
$tdataq_info_cont[".googleLikeFields"][] = "numcontrato";
$tdataq_info_cont[".googleLikeFields"][] = "pre_contnumero";
$tdataq_info_cont[".googleLikeFields"][] = "contnumero";
$tdataq_info_cont[".googleLikeFields"][] = "cont_ano";
$tdataq_info_cont[".googleLikeFields"][] = "cont_codrubro";
$tdataq_info_cont[".googleLikeFields"][] = "cont_catalogo_presupuestal";
$tdataq_info_cont[".googleLikeFields"][] = "cont_fecha_inicio";
$tdataq_info_cont[".googleLikeFields"][] = "cont_fechafinal";
$tdataq_info_cont[".googleLikeFields"][] = "PLAZO";
$tdataq_info_cont[".googleLikeFields"][] = "cont_periodicidad";
$tdataq_info_cont[".googleLikeFields"][] = "cont_valorinicial";
$tdataq_info_cont[".googleLikeFields"][] = "cont_valormensual";
$tdataq_info_cont[".googleLikeFields"][] = "cont_secop_enlace";
$tdataq_info_cont[".googleLikeFields"][] = "documento_id";
$tdataq_info_cont[".googleLikeFields"][] = "nombres";
$tdataq_info_cont[".googleLikeFields"][] = "apellidos";
$tdataq_info_cont[".googleLikeFields"][] = "nombresupfull";
$tdataq_info_cont[".googleLikeFields"][] = "cargo_id";
$tdataq_info_cont[".googleLikeFields"][] = "dependencia_id";
$tdataq_info_cont[".googleLikeFields"][] = "sup_fechanot";
$tdataq_info_cont[".googleLikeFields"][] = "sup_mailnot";
$tdataq_info_cont[".googleLikeFields"][] = "sup_status";
$tdataq_info_cont[".googleLikeFields"][] = "idusrglobal_fk";
$tdataq_info_cont[".googleLikeFields"][] = "contractor_name";
$tdataq_info_cont[".googleLikeFields"][] = "contractor_lname";
$tdataq_info_cont[".googleLikeFields"][] = "contractor_nombresfull";
$tdataq_info_cont[".googleLikeFields"][] = "contractor_email";
$tdataq_info_cont[".googleLikeFields"][] = "contractor_email_mincit";
$tdataq_info_cont[".googleLikeFields"][] = "prenumero";
$tdataq_info_cont[".googleLikeFields"][] = "numregistro";
$tdataq_info_cont[".googleLikeFields"][] = "cont_unspsc";
$tdataq_info_cont[".googleLikeFields"][] = "cont_tipo_rubro";
$tdataq_info_cont[".googleLikeFields"][] = "cont_tipopre";
$tdataq_info_cont[".googleLikeFields"][] = "cont_causalc";
$tdataq_info_cont[".googleLikeFields"][] = "cont_objeto";
$tdataq_info_cont[".googleLikeFields"][] = "cont_obligaciones";
$tdataq_info_cont[".googleLikeFields"][] = "cont_plazo";
$tdataq_info_cont[".googleLikeFields"][] = "ctb_tipo_nombre";
$tdataq_info_cont[".googleLikeFields"][] = "nombre_cargo";
$tdataq_info_cont[".googleLikeFields"][] = "nombre_dependencia";
$tdataq_info_cont[".googleLikeFields"][] = "id_depto_superior";
$tdataq_info_cont[".googleLikeFields"][] = "Departamento_superior";
$tdataq_info_cont[".googleLikeFields"][] = "cont_numpoliza";
$tdataq_info_cont[".googleLikeFields"][] = "cont_secop_proceso";
$tdataq_info_cont[".googleLikeFields"][] = "cont_fecha_aprobgarantia";
$tdataq_info_cont[".googleLikeFields"][] = "cont_fechaapertura";
$tdataq_info_cont[".googleLikeFields"][] = "cont_munejec";
$tdataq_info_cont[".googleLikeFields"][] = "cont_cesion";
$tdataq_info_cont[".googleLikeFields"][] = "cont_modifica";
$tdataq_info_cont[".googleLikeFields"][] = "Username";



$tdataq_info_cont[".tableType"] = "list";

$tdataq_info_cont[".printerPageOrientation"] = 0;
$tdataq_info_cont[".nPrinterPageScale"] = 100;

$tdataq_info_cont[".nPrinterSplitRecords"] = 40;

$tdataq_info_cont[".geocodingEnabled"] = false;










$tdataq_info_cont[".pageSize"] = 20;

$tdataq_info_cont[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataq_info_cont[".strOrderBy"] = $tstrOrderBy;

$tdataq_info_cont[".orderindexes"] = array();

$tdataq_info_cont[".sqlHead"] = "SELECT id_cont,  	cont_nit_contra_ta,  	cont_estado,  	numcontrato,  	pre_contnumero,  	contnumero,  	cont_ano,  	cont_codrubro,  	cont_catalogo_presupuestal,  	cont_fecha_inicio,  	cont_fechafinal,  	PLAZO,  	cont_periodicidad,  	cont_valorinicial,  	cont_valormensual,  	cont_secop_enlace,  	documento_id,  	nombres,  	apellidos,  	nombresupfull,  	cargo_id,  	dependencia_id,  	sup_fechanot,  	sup_mailnot,  	sup_status,  	idusrglobal_fk,  	contractor_name,  	contractor_lname,  	contractor_nombresfull,  	contractor_email,  	contractor_email_mincit,  	prenumero,  	numregistro,  	cont_unspsc,  	cont_tipo_rubro,  	cont_tipopre,  	cont_causalc,  	cont_objeto,  	cont_obligaciones,  	cont_plazo,  	ctb_tipo_nombre,  	nombre_cargo,  	nombre_dependencia,  	id_depto_superior,  	Departamento_superior,  	cont_numpoliza,  	cont_secop_proceso,  	cont_fecha_aprobgarantia,  	cont_fechaapertura,  	cont_munejec,  	cont_cesion,  	cont_modifica,  	Username";
$tdataq_info_cont[".sqlFrom"] = "FROM q_bandejaentrada_supervisores";
$tdataq_info_cont[".sqlWhereExpr"] = "";
$tdataq_info_cont[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_info_cont[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_info_cont[".arrGroupsPerPage"] = $arrGPP;

$tdataq_info_cont[".highlightSearchResults"] = true;

$tableKeysq_info_cont = array();
$tableKeysq_info_cont[] = "id_cont";
$tdataq_info_cont[".Keys"] = $tableKeysq_info_cont;


$tdataq_info_cont[".hideMobileList"] = array();




//	id_cont
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_cont";
	$fdata["GoodName"] = "id_cont";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","id_cont");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_cont";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_cont";

	
	
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


	$tdataq_info_cont["id_cont"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "id_cont";
//	cont_nit_contra_ta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cont_nit_contra_ta";
	$fdata["GoodName"] = "cont_nit_contra_ta";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","cont_nit_contra_ta");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_nit_contra_ta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_nit_contra_ta";

	
	
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


	$tdataq_info_cont["cont_nit_contra_ta"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "cont_nit_contra_ta";
//	cont_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cont_estado";
	$fdata["GoodName"] = "cont_estado";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","cont_estado");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "cont_estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_estado";

	
	
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
	$edata["LookupTable"] = "contrato_estados";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "estado_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "estado_nombre";

	

	
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
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_info_cont["cont_estado"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "cont_estado";
//	numcontrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "numcontrato";
	$fdata["GoodName"] = "numcontrato";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","numcontrato");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "numcontrato";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numcontrato";

	
	
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
			$edata["EditParams"].= " maxlength=106";

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


	$tdataq_info_cont["numcontrato"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "numcontrato";
//	pre_contnumero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "pre_contnumero";
	$fdata["GoodName"] = "pre_contnumero";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","pre_contnumero");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "pre_contnumero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pre_contnumero";

	
	
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


	$tdataq_info_cont["pre_contnumero"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "pre_contnumero";
//	contnumero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "contnumero";
	$fdata["GoodName"] = "contnumero";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","contnumero");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contnumero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contnumero";

	
	
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


	$tdataq_info_cont["contnumero"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "contnumero";
//	cont_ano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cont_ano";
	$fdata["GoodName"] = "cont_ano";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","cont_ano");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "cont_ano";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_ano";

	
	
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


	$tdataq_info_cont["cont_ano"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "cont_ano";
//	cont_codrubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cont_codrubro";
	$fdata["GoodName"] = "cont_codrubro";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","cont_codrubro");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_codrubro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_codrubro";

	
	
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


	$tdataq_info_cont["cont_codrubro"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "cont_codrubro";
//	cont_catalogo_presupuestal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cont_catalogo_presupuestal";
	$fdata["GoodName"] = "cont_catalogo_presupuestal";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","cont_catalogo_presupuestal");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_catalogo_presupuestal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_catalogo_presupuestal";

	
	
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


	$tdataq_info_cont["cont_catalogo_presupuestal"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "cont_catalogo_presupuestal";
//	cont_fecha_inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cont_fecha_inicio";
	$fdata["GoodName"] = "cont_fecha_inicio";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","cont_fecha_inicio");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "cont_fecha_inicio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_fecha_inicio";

	
	
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


	$tdataq_info_cont["cont_fecha_inicio"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "cont_fecha_inicio";
//	cont_fechafinal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "cont_fechafinal";
	$fdata["GoodName"] = "cont_fechafinal";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","cont_fechafinal");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "cont_fechafinal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_fechafinal";

	
	
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


	$tdataq_info_cont["cont_fechafinal"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "cont_fechafinal";
//	PLAZO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "PLAZO";
	$fdata["GoodName"] = "PLAZO";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","PLAZO");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "PLAZO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PLAZO";

	
	
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


	$tdataq_info_cont["PLAZO"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "PLAZO";
//	cont_periodicidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "cont_periodicidad";
	$fdata["GoodName"] = "cont_periodicidad";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","cont_periodicidad");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "cont_periodicidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_periodicidad";

	
	
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


	$tdataq_info_cont["cont_periodicidad"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "cont_periodicidad";
//	cont_valorinicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "cont_valorinicial";
	$fdata["GoodName"] = "cont_valorinicial";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","cont_valorinicial");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "cont_valorinicial";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_valorinicial";

	
	
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


	$tdataq_info_cont["cont_valorinicial"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "cont_valorinicial";
//	cont_valormensual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "cont_valormensual";
	$fdata["GoodName"] = "cont_valormensual";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","cont_valormensual");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "cont_valormensual";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_valormensual";

	
	
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


	$tdataq_info_cont["cont_valormensual"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "cont_valormensual";
//	cont_secop_enlace
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "cont_secop_enlace";
	$fdata["GoodName"] = "cont_secop_enlace";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","cont_secop_enlace");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_secop_enlace";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_secop_enlace";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Hyperlink");

	
	
	
	
				$vdata["hlNewWindow"] = true;
	$vdata["hlType"] = 1;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Ir a enlace SECOP";
	$vdata["hlTitleField"] = "cont_secop_enlace";

	
	
	
	
	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataq_info_cont["cont_secop_enlace"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "cont_secop_enlace";
//	documento_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "documento_id";
	$fdata["GoodName"] = "documento_id";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","documento_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "documento_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "documento_id";

	
	
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


	$tdataq_info_cont["documento_id"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "documento_id";
//	nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "nombres";
	$fdata["GoodName"] = "nombres";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","nombres");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nombres";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombres";

	
	
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


	$tdataq_info_cont["nombres"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "nombres";
//	apellidos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "apellidos";
	$fdata["GoodName"] = "apellidos";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","apellidos");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "apellidos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "apellidos";

	
	
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


	$tdataq_info_cont["apellidos"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "apellidos";
//	nombresupfull
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "nombresupfull";
	$fdata["GoodName"] = "nombresupfull";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","nombresupfull");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nombresupfull";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombresupfull";

	
	
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
			$edata["EditParams"].= " maxlength=201";

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


	$tdataq_info_cont["nombresupfull"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "nombresupfull";
//	cargo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "cargo_id";
	$fdata["GoodName"] = "cargo_id";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","cargo_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "cargo_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cargo_id";

	
	
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
	$edata["LookupTable"] = "cargo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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


	$tdataq_info_cont["cargo_id"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "cargo_id";
//	dependencia_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "dependencia_id";
	$fdata["GoodName"] = "dependencia_id";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","dependencia_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "dependencia_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dependencia_id";

	
	
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

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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


	$tdataq_info_cont["dependencia_id"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "dependencia_id";
//	sup_fechanot
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "sup_fechanot";
	$fdata["GoodName"] = "sup_fechanot";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","sup_fechanot");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "sup_fechanot";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sup_fechanot";

	
	
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


	$tdataq_info_cont["sup_fechanot"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "sup_fechanot";
//	sup_mailnot
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "sup_mailnot";
	$fdata["GoodName"] = "sup_mailnot";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","sup_mailnot");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "sup_mailnot";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sup_mailnot";

	
	
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


	$tdataq_info_cont["sup_mailnot"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "sup_mailnot";
//	sup_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "sup_status";
	$fdata["GoodName"] = "sup_status";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","sup_status");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "sup_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sup_status";

	
	
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


	$tdataq_info_cont["sup_status"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "sup_status";
//	idusrglobal_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "idusrglobal_fk";
	$fdata["GoodName"] = "idusrglobal_fk";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","idusrglobal_fk");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "idusrglobal_fk";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idusrglobal_fk";

	
	
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


	$tdataq_info_cont["idusrglobal_fk"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "idusrglobal_fk";
//	contractor_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "contractor_name";
	$fdata["GoodName"] = "contractor_name";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","contractor_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_name";

	
	
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


	$tdataq_info_cont["contractor_name"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "contractor_name";
//	contractor_lname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "contractor_lname";
	$fdata["GoodName"] = "contractor_lname";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","contractor_lname");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_lname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_lname";

	
	
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


	$tdataq_info_cont["contractor_lname"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "contractor_lname";
//	contractor_nombresfull
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "contractor_nombresfull";
	$fdata["GoodName"] = "contractor_nombresfull";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","contractor_nombresfull");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_nombresfull";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_nombresfull";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdataq_info_cont["contractor_nombresfull"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "contractor_nombresfull";
//	contractor_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "contractor_email";
	$fdata["GoodName"] = "contractor_email";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","contractor_email");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_email";

	
	
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


	$tdataq_info_cont["contractor_email"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "contractor_email";
//	contractor_email_mincit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "contractor_email_mincit";
	$fdata["GoodName"] = "contractor_email_mincit";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","contractor_email_mincit");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "contractor_email_mincit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_email_mincit";

	
	
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


	$tdataq_info_cont["contractor_email_mincit"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "contractor_email_mincit";
//	prenumero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "prenumero";
	$fdata["GoodName"] = "prenumero";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","prenumero");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "prenumero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "prenumero";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdataq_info_cont["prenumero"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "prenumero";
//	numregistro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "numregistro";
	$fdata["GoodName"] = "numregistro";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","numregistro");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "numregistro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numregistro";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdataq_info_cont["numregistro"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "numregistro";
//	cont_unspsc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "cont_unspsc";
	$fdata["GoodName"] = "cont_unspsc";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","cont_unspsc");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_unspsc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_unspsc";

	
	
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
			$edata["EditParams"].= " maxlength=48";

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


	$tdataq_info_cont["cont_unspsc"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "cont_unspsc";
//	cont_tipo_rubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "cont_tipo_rubro";
	$fdata["GoodName"] = "cont_tipo_rubro";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","cont_tipo_rubro");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_tipo_rubro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_tipo_rubro";

	
	
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


	$tdataq_info_cont["cont_tipo_rubro"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "cont_tipo_rubro";
//	cont_tipopre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "cont_tipopre";
	$fdata["GoodName"] = "cont_tipopre";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","cont_tipopre");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_tipopre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_tipopre";

	
	
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


	$tdataq_info_cont["cont_tipopre"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "cont_tipopre";
//	cont_causalc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "cont_causalc";
	$fdata["GoodName"] = "cont_causalc";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","cont_causalc");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "cont_causalc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_causalc";

	
	
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


	$tdataq_info_cont["cont_causalc"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "cont_causalc";
//	cont_objeto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "cont_objeto";
	$fdata["GoodName"] = "cont_objeto";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","cont_objeto");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "cont_objeto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_objeto";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdataq_info_cont["cont_objeto"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "cont_objeto";
//	cont_obligaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "cont_obligaciones";
	$fdata["GoodName"] = "cont_obligaciones";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","cont_obligaciones");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "cont_obligaciones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_obligaciones";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdataq_info_cont["cont_obligaciones"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "cont_obligaciones";
//	cont_plazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "cont_plazo";
	$fdata["GoodName"] = "cont_plazo";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","cont_plazo");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "cont_plazo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_plazo";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdataq_info_cont["cont_plazo"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "cont_plazo";
//	ctb_tipo_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "ctb_tipo_nombre";
	$fdata["GoodName"] = "ctb_tipo_nombre";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","ctb_tipo_nombre");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ctb_tipo_nombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ctb_tipo_nombre";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataq_info_cont["ctb_tipo_nombre"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "ctb_tipo_nombre";
//	nombre_cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "nombre_cargo";
	$fdata["GoodName"] = "nombre_cargo";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","nombre_cargo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nombre_cargo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_cargo";

	
	
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
			$edata["EditParams"].= " maxlength=45";

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


	$tdataq_info_cont["nombre_cargo"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "nombre_cargo";
//	nombre_dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "nombre_dependencia";
	$fdata["GoodName"] = "nombre_dependencia";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","nombre_dependencia");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nombre_dependencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_dependencia";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataq_info_cont["nombre_dependencia"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "nombre_dependencia";
//	id_depto_superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "id_depto_superior";
	$fdata["GoodName"] = "id_depto_superior";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","id_depto_superior");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_depto_superior";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_depto_superior";

	
	
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


	$tdataq_info_cont["id_depto_superior"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "id_depto_superior";
//	Departamento_superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "Departamento_superior";
	$fdata["GoodName"] = "Departamento_superior";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","Departamento_superior");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Departamento_superior";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Departamento_superior";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataq_info_cont["Departamento_superior"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "Departamento_superior";
//	cont_numpoliza
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "cont_numpoliza";
	$fdata["GoodName"] = "cont_numpoliza";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","cont_numpoliza");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_numpoliza";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_numpoliza";

	
	
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


	$tdataq_info_cont["cont_numpoliza"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "cont_numpoliza";
//	cont_secop_proceso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "cont_secop_proceso";
	$fdata["GoodName"] = "cont_secop_proceso";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","cont_secop_proceso");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_secop_proceso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_secop_proceso";

	
	
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


	$tdataq_info_cont["cont_secop_proceso"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "cont_secop_proceso";
//	cont_fecha_aprobgarantia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "cont_fecha_aprobgarantia";
	$fdata["GoodName"] = "cont_fecha_aprobgarantia";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","cont_fecha_aprobgarantia");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "cont_fecha_aprobgarantia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_fecha_aprobgarantia";

	
	
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


	$tdataq_info_cont["cont_fecha_aprobgarantia"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "cont_fecha_aprobgarantia";
//	cont_fechaapertura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "cont_fechaapertura";
	$fdata["GoodName"] = "cont_fechaapertura";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","cont_fechaapertura");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "cont_fechaapertura";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_fechaapertura";

	
	
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


	$tdataq_info_cont["cont_fechaapertura"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "cont_fechaapertura";
//	cont_munejec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "cont_munejec";
	$fdata["GoodName"] = "cont_munejec";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","cont_munejec");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_munejec";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_munejec";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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


	$tdataq_info_cont["cont_munejec"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "cont_munejec";
//	cont_cesion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "cont_cesion";
	$fdata["GoodName"] = "cont_cesion";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","cont_cesion");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "cont_cesion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_cesion";

	
	
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


	$tdataq_info_cont["cont_cesion"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "cont_cesion";
//	cont_modifica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "cont_modifica";
	$fdata["GoodName"] = "cont_modifica";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","cont_modifica");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "cont_modifica";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_modifica";

	
	
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


	$tdataq_info_cont["cont_modifica"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "cont_modifica";
//	Username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "Username";
	$fdata["GoodName"] = "Username";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_info_cont","Username");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Username";

	
	
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


	$tdataq_info_cont["Username"] = $fdata;
		$tdataq_info_cont[".searchableFields"][] = "Username";


$tables_data["q_info_cont"]=&$tdataq_info_cont;
$field_labels["q_info_cont"] = &$fieldLabelsq_info_cont;
$fieldToolTips["q_info_cont"] = &$fieldToolTipsq_info_cont;
$placeHolders["q_info_cont"] = &$placeHoldersq_info_cont;
$page_titles["q_info_cont"] = &$pageTitlesq_info_cont;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["q_info_cont"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["q_info_cont"] = array();



	
				$strOriginalDetailsTable="hoja_ruta_2020";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hoja_ruta_2020_pn1";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "hoja_ruta_2020_pn1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["q_info_cont"][0] = $masterParams;
				$masterTablesData["q_info_cont"][0]["masterKeys"] = array();
	$masterTablesData["q_info_cont"][0]["masterKeys"][]="id_cont_fk";
				$masterTablesData["q_info_cont"][0]["detailKeys"] = array();
	$masterTablesData["q_info_cont"][0]["detailKeys"][]="id_cont";
		
	
				$strOriginalDetailsTable="hoja_ruta_2020";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hoja_ruta_2020_pn2";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "hoja_ruta_2020_pn2";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["q_info_cont"][1] = $masterParams;
				$masterTablesData["q_info_cont"][1]["masterKeys"] = array();
	$masterTablesData["q_info_cont"][1]["masterKeys"][]="id_cont_fk";
				$masterTablesData["q_info_cont"][1]["detailKeys"] = array();
	$masterTablesData["q_info_cont"][1]["detailKeys"][]="id_cont";
		
	
				$strOriginalDetailsTable="hoja_ruta_2020";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hoja_ruta_2020_pn";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "hoja_ruta_2020_pn";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["q_info_cont"][2] = $masterParams;
				$masterTablesData["q_info_cont"][2]["masterKeys"] = array();
	$masterTablesData["q_info_cont"][2]["masterKeys"][]="id_cont_fk";
				$masterTablesData["q_info_cont"][2]["detailKeys"] = array();
	$masterTablesData["q_info_cont"][2]["detailKeys"][]="id_cont";
		
	
				$strOriginalDetailsTable="hoja_ruta_2020";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hoja_ruta_2020_pn0";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "hoja_ruta_2020_pn0";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["q_info_cont"][3] = $masterParams;
				$masterTablesData["q_info_cont"][3]["masterKeys"] = array();
	$masterTablesData["q_info_cont"][3]["masterKeys"][]="id_cont_fk";
				$masterTablesData["q_info_cont"][3]["detailKeys"] = array();
	$masterTablesData["q_info_cont"][3]["detailKeys"][]="id_cont";
		
	
				$strOriginalDetailsTable="hoja_ruta_2020";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hoja_ruta_2020_pnc1";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "hoja_ruta_2020_pnc1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["q_info_cont"][4] = $masterParams;
				$masterTablesData["q_info_cont"][4]["masterKeys"] = array();
	$masterTablesData["q_info_cont"][4]["masterKeys"][]="id_cont_fk";
				$masterTablesData["q_info_cont"][4]["detailKeys"] = array();
	$masterTablesData["q_info_cont"][4]["detailKeys"][]="id_cont";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_q_info_cont()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_cont,  	cont_nit_contra_ta,  	cont_estado,  	numcontrato,  	pre_contnumero,  	contnumero,  	cont_ano,  	cont_codrubro,  	cont_catalogo_presupuestal,  	cont_fecha_inicio,  	cont_fechafinal,  	PLAZO,  	cont_periodicidad,  	cont_valorinicial,  	cont_valormensual,  	cont_secop_enlace,  	documento_id,  	nombres,  	apellidos,  	nombresupfull,  	cargo_id,  	dependencia_id,  	sup_fechanot,  	sup_mailnot,  	sup_status,  	idusrglobal_fk,  	contractor_name,  	contractor_lname,  	contractor_nombresfull,  	contractor_email,  	contractor_email_mincit,  	prenumero,  	numregistro,  	cont_unspsc,  	cont_tipo_rubro,  	cont_tipopre,  	cont_causalc,  	cont_objeto,  	cont_obligaciones,  	cont_plazo,  	ctb_tipo_nombre,  	nombre_cargo,  	nombre_dependencia,  	id_depto_superior,  	Departamento_superior,  	cont_numpoliza,  	cont_secop_proceso,  	cont_fecha_aprobgarantia,  	cont_fechaapertura,  	cont_munejec,  	cont_cesion,  	cont_modifica,  	Username";
$proto0["m_strFrom"] = "FROM q_bandejaentrada_supervisores";
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
	"m_strName" => "id_cont",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto6["m_sql"] = "id_cont";
$proto6["m_srcTableName"] = "q_info_cont";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_nit_contra_ta",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto8["m_sql"] = "cont_nit_contra_ta";
$proto8["m_srcTableName"] = "q_info_cont";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_estado",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto10["m_sql"] = "cont_estado";
$proto10["m_srcTableName"] = "q_info_cont";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "numcontrato",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto12["m_sql"] = "numcontrato";
$proto12["m_srcTableName"] = "q_info_cont";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "pre_contnumero",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto14["m_sql"] = "pre_contnumero";
$proto14["m_srcTableName"] = "q_info_cont";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "contnumero",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto16["m_sql"] = "contnumero";
$proto16["m_srcTableName"] = "q_info_cont";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_ano",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto18["m_sql"] = "cont_ano";
$proto18["m_srcTableName"] = "q_info_cont";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_codrubro",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto20["m_sql"] = "cont_codrubro";
$proto20["m_srcTableName"] = "q_info_cont";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_catalogo_presupuestal",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto22["m_sql"] = "cont_catalogo_presupuestal";
$proto22["m_srcTableName"] = "q_info_cont";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fecha_inicio",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto24["m_sql"] = "cont_fecha_inicio";
$proto24["m_srcTableName"] = "q_info_cont";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fechafinal",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto26["m_sql"] = "cont_fechafinal";
$proto26["m_srcTableName"] = "q_info_cont";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "PLAZO",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto28["m_sql"] = "PLAZO";
$proto28["m_srcTableName"] = "q_info_cont";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_periodicidad",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto30["m_sql"] = "cont_periodicidad";
$proto30["m_srcTableName"] = "q_info_cont";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valorinicial",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto32["m_sql"] = "cont_valorinicial";
$proto32["m_srcTableName"] = "q_info_cont";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valormensual",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto34["m_sql"] = "cont_valormensual";
$proto34["m_srcTableName"] = "q_info_cont";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_secop_enlace",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto36["m_sql"] = "cont_secop_enlace";
$proto36["m_srcTableName"] = "q_info_cont";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "documento_id",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto38["m_sql"] = "documento_id";
$proto38["m_srcTableName"] = "q_info_cont";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "nombres",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto40["m_sql"] = "nombres";
$proto40["m_srcTableName"] = "q_info_cont";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "apellidos",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto42["m_sql"] = "apellidos";
$proto42["m_srcTableName"] = "q_info_cont";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "nombresupfull",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto44["m_sql"] = "nombresupfull";
$proto44["m_srcTableName"] = "q_info_cont";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "cargo_id",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto46["m_sql"] = "cargo_id";
$proto46["m_srcTableName"] = "q_info_cont";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "dependencia_id",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto48["m_sql"] = "dependencia_id";
$proto48["m_srcTableName"] = "q_info_cont";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "sup_fechanot",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto50["m_sql"] = "sup_fechanot";
$proto50["m_srcTableName"] = "q_info_cont";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "sup_mailnot",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto52["m_sql"] = "sup_mailnot";
$proto52["m_srcTableName"] = "q_info_cont";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "sup_status",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto54["m_sql"] = "sup_status";
$proto54["m_srcTableName"] = "q_info_cont";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "idusrglobal_fk",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto56["m_sql"] = "idusrglobal_fk";
$proto56["m_srcTableName"] = "q_info_cont";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_name",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto58["m_sql"] = "contractor_name";
$proto58["m_srcTableName"] = "q_info_cont";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_lname",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto60["m_sql"] = "contractor_lname";
$proto60["m_srcTableName"] = "q_info_cont";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_nombresfull",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto62["m_sql"] = "contractor_nombresfull";
$proto62["m_srcTableName"] = "q_info_cont";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_email",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto64["m_sql"] = "contractor_email";
$proto64["m_srcTableName"] = "q_info_cont";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_email_mincit",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto66["m_sql"] = "contractor_email_mincit";
$proto66["m_srcTableName"] = "q_info_cont";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "prenumero",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto68["m_sql"] = "prenumero";
$proto68["m_srcTableName"] = "q_info_cont";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "numregistro",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto70["m_sql"] = "numregistro";
$proto70["m_srcTableName"] = "q_info_cont";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_unspsc",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto72["m_sql"] = "cont_unspsc";
$proto72["m_srcTableName"] = "q_info_cont";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipo_rubro",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto74["m_sql"] = "cont_tipo_rubro";
$proto74["m_srcTableName"] = "q_info_cont";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipopre",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto76["m_sql"] = "cont_tipopre";
$proto76["m_srcTableName"] = "q_info_cont";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_causalc",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto78["m_sql"] = "cont_causalc";
$proto78["m_srcTableName"] = "q_info_cont";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_objeto",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto80["m_sql"] = "cont_objeto";
$proto80["m_srcTableName"] = "q_info_cont";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_obligaciones",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto82["m_sql"] = "cont_obligaciones";
$proto82["m_srcTableName"] = "q_info_cont";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_plazo",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto84["m_sql"] = "cont_plazo";
$proto84["m_srcTableName"] = "q_info_cont";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "ctb_tipo_nombre",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto86["m_sql"] = "ctb_tipo_nombre";
$proto86["m_srcTableName"] = "q_info_cont";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_cargo",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto88["m_sql"] = "nombre_cargo";
$proto88["m_srcTableName"] = "q_info_cont";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_dependencia",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto90["m_sql"] = "nombre_dependencia";
$proto90["m_srcTableName"] = "q_info_cont";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "id_depto_superior",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto92["m_sql"] = "id_depto_superior";
$proto92["m_srcTableName"] = "q_info_cont";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "Departamento_superior",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto94["m_sql"] = "Departamento_superior";
$proto94["m_srcTableName"] = "q_info_cont";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_numpoliza",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto96["m_sql"] = "cont_numpoliza";
$proto96["m_srcTableName"] = "q_info_cont";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_secop_proceso",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto98["m_sql"] = "cont_secop_proceso";
$proto98["m_srcTableName"] = "q_info_cont";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fecha_aprobgarantia",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto100["m_sql"] = "cont_fecha_aprobgarantia";
$proto100["m_srcTableName"] = "q_info_cont";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fechaapertura",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto102["m_sql"] = "cont_fechaapertura";
$proto102["m_srcTableName"] = "q_info_cont";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_munejec",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto104["m_sql"] = "cont_munejec";
$proto104["m_srcTableName"] = "q_info_cont";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_cesion",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto106["m_sql"] = "cont_cesion";
$proto106["m_srcTableName"] = "q_info_cont";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_modifica",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto108["m_sql"] = "cont_modifica";
$proto108["m_srcTableName"] = "q_info_cont";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "Username",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_info_cont"
));

$proto110["m_sql"] = "Username";
$proto110["m_srcTableName"] = "q_info_cont";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto112=array();
$proto112["m_link"] = "SQLL_MAIN";
			$proto113=array();
$proto113["m_strName"] = "q_bandejaentrada_supervisores";
$proto113["m_srcTableName"] = "q_info_cont";
$proto113["m_columns"] = array();
$proto113["m_columns"][] = "id_cont";
$proto113["m_columns"][] = "cont_nit_contra_ta";
$proto113["m_columns"][] = "cont_estado";
$proto113["m_columns"][] = "numcontrato";
$proto113["m_columns"][] = "pre_contnumero";
$proto113["m_columns"][] = "contnumero";
$proto113["m_columns"][] = "cont_ano";
$proto113["m_columns"][] = "cont_codrubro";
$proto113["m_columns"][] = "cont_catalogo_presupuestal";
$proto113["m_columns"][] = "cont_fecha_inicio";
$proto113["m_columns"][] = "cont_fechafinal";
$proto113["m_columns"][] = "PLAZO";
$proto113["m_columns"][] = "cont_periodicidad";
$proto113["m_columns"][] = "cont_valorinicial";
$proto113["m_columns"][] = "cont_valormensual";
$proto113["m_columns"][] = "cont_secop_enlace";
$proto113["m_columns"][] = "documento_id";
$proto113["m_columns"][] = "nombres";
$proto113["m_columns"][] = "apellidos";
$proto113["m_columns"][] = "nombresupfull";
$proto113["m_columns"][] = "cargo_id";
$proto113["m_columns"][] = "dependencia_id";
$proto113["m_columns"][] = "sup_fechanot";
$proto113["m_columns"][] = "sup_mailnot";
$proto113["m_columns"][] = "sup_status";
$proto113["m_columns"][] = "idusrglobal_fk";
$proto113["m_columns"][] = "contractor_name";
$proto113["m_columns"][] = "contractor_lname";
$proto113["m_columns"][] = "contractor_nombresfull";
$proto113["m_columns"][] = "contractor_email";
$proto113["m_columns"][] = "contractor_email_mincit";
$proto113["m_columns"][] = "prenumero";
$proto113["m_columns"][] = "numregistro";
$proto113["m_columns"][] = "cont_unspsc";
$proto113["m_columns"][] = "cont_tipo_rubro";
$proto113["m_columns"][] = "cont_tipopre";
$proto113["m_columns"][] = "cont_causalc";
$proto113["m_columns"][] = "cont_objeto";
$proto113["m_columns"][] = "cont_obligaciones";
$proto113["m_columns"][] = "cont_plazo";
$proto113["m_columns"][] = "ctb_tipo_nombre";
$proto113["m_columns"][] = "nombre_cargo";
$proto113["m_columns"][] = "nombre_dependencia";
$proto113["m_columns"][] = "id_depto_superior";
$proto113["m_columns"][] = "Departamento_superior";
$proto113["m_columns"][] = "cont_numpoliza";
$proto113["m_columns"][] = "cont_secop_proceso";
$proto113["m_columns"][] = "cont_fecha_aprobgarantia";
$proto113["m_columns"][] = "cont_fechaapertura";
$proto113["m_columns"][] = "cont_munejec";
$proto113["m_columns"][] = "cont_cesion";
$proto113["m_columns"][] = "cont_modifica";
$proto113["m_columns"][] = "Username";
$obj = new SQLTable($proto113);

$proto112["m_table"] = $obj;
$proto112["m_sql"] = "q_bandejaentrada_supervisores";
$proto112["m_alias"] = "";
$proto112["m_srcTableName"] = "q_info_cont";
$proto114=array();
$proto114["m_sql"] = "";
$proto114["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto114["m_column"]=$obj;
$proto114["m_contained"] = array();
$proto114["m_strCase"] = "";
$proto114["m_havingmode"] = false;
$proto114["m_inBrackets"] = false;
$proto114["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto114);

$proto112["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto112);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="q_info_cont";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_info_cont = createSqlQuery_q_info_cont();


	
								;

																																																					

$tdataq_info_cont[".sqlquery"] = $queryData_q_info_cont;

$tableEvents["q_info_cont"] = new eventsBase;
$tdataq_info_cont[".hasEvents"] = false;

?>