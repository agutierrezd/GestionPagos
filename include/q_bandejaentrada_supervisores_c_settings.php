<?php



$tdataq_bandejaentrada_supervisores_c = array();
$tdataq_bandejaentrada_supervisores_c[".searchableFields"] = array();
$tdataq_bandejaentrada_supervisores_c[".ShortName"] = "q_bandejaentrada_supervisores_c";
$tdataq_bandejaentrada_supervisores_c[".OwnerID"] = "documento_id";
$tdataq_bandejaentrada_supervisores_c[".OriginalTable"] = "q_bandejaentrada_supervisores";


$tdataq_bandejaentrada_supervisores_c[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataq_bandejaentrada_supervisores_c[".originalPagesByType"] = $tdataq_bandejaentrada_supervisores_c[".pagesByType"];
$tdataq_bandejaentrada_supervisores_c[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataq_bandejaentrada_supervisores_c[".originalPages"] = $tdataq_bandejaentrada_supervisores_c[".pages"];
$tdataq_bandejaentrada_supervisores_c[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdataq_bandejaentrada_supervisores_c[".originalDefaultPages"] = $tdataq_bandejaentrada_supervisores_c[".defaultPages"];

//	field labels
$fieldLabelsq_bandejaentrada_supervisores_c = array();
$fieldToolTipsq_bandejaentrada_supervisores_c = array();
$pageTitlesq_bandejaentrada_supervisores_c = array();
$placeHoldersq_bandejaentrada_supervisores_c = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"] = array();
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"] = array();
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"] = array();
	$pageTitlesq_bandejaentrada_supervisores_c["Spanish"] = array();
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["id_cont"] = "Id Cont";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["id_cont"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["id_cont"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["cont_nit_contra_ta"] = "Documento | NIT";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["cont_nit_contra_ta"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["cont_nit_contra_ta"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["cont_estado"] = "Estado";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["cont_estado"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["cont_estado"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["numcontrato"] = "Número de contrato";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["numcontrato"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["numcontrato"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["pre_contnumero"] = "Pre Contnumero";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["pre_contnumero"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["pre_contnumero"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["contnumero"] = "Contnumero";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["contnumero"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["contnumero"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["cont_ano"] = "Vigencia";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["cont_ano"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["cont_ano"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["cont_codrubro"] = "Cont Codrubro";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["cont_codrubro"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["cont_codrubro"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["cont_catalogo_presupuestal"] = "Cont Catalogo Presupuestal";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["cont_catalogo_presupuestal"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["cont_catalogo_presupuestal"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["cont_fecha_inicio"] = "Cont Fecha Inicio";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["cont_fecha_inicio"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["cont_fecha_inicio"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["cont_fechafinal"] = "Cont Fechafinal";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["cont_fechafinal"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["cont_fechafinal"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["cont_periodicidad"] = "Cont Periodicidad";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["cont_periodicidad"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["cont_periodicidad"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["cont_valorinicial"] = "Cont Valorinicial";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["cont_valorinicial"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["cont_valorinicial"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["cont_valormensual"] = "Cont Valormensual";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["cont_valormensual"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["cont_valormensual"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["cont_secop_enlace"] = "Cont Secop Enlace";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["cont_secop_enlace"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["cont_secop_enlace"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["documento_id"] = "Documento supervisor";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["documento_id"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["documento_id"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["nombres"] = "Nombres supervisor";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["nombres"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["nombres"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["apellidos"] = "Apellidos supervisor";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["apellidos"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["apellidos"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["cargo_id"] = "Cargo";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["cargo_id"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["cargo_id"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["dependencia_id"] = "Dependencia";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["dependencia_id"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["dependencia_id"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["sup_fechanot"] = "Sup Fechanot";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["sup_fechanot"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["sup_fechanot"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["sup_mailnot"] = "Sup Mailnot";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["sup_mailnot"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["sup_mailnot"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["sup_status"] = "Sup Status";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["sup_status"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["sup_status"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["idusrglobal_fk"] = "Idusrglobal Fk";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["idusrglobal_fk"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["idusrglobal_fk"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["contractor_name"] = "Contractor Name";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["contractor_name"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["contractor_name"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["contractor_lname"] = "Contractor Lname";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["contractor_lname"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["contractor_lname"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["contractor_nombresfull"] = "Nombres | Razón Social";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["contractor_nombresfull"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["contractor_nombresfull"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["contractor_email"] = "Contractor Email";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["contractor_email"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["contractor_email"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["contractor_email_mincit"] = "Contractor Email Mincit";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["contractor_email_mincit"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["contractor_email_mincit"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["PLAZO"] = "PLAZO";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["PLAZO"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["PLAZO"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["nombresupfull"] = "Nombresupfull";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["nombresupfull"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["nombresupfull"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["prenumero"] = "Prenumero";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["prenumero"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["prenumero"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["numregistro"] = "Numregistro";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["numregistro"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["numregistro"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["cont_unspsc"] = "Cont Unspsc";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["cont_unspsc"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["cont_unspsc"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["cont_tipo_rubro"] = "Cont Tipo Rubro";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["cont_tipo_rubro"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["cont_tipo_rubro"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["cont_tipopre"] = "Cont Tipopre";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["cont_tipopre"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["cont_tipopre"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["cont_causalc"] = "Cont Causalc";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["cont_causalc"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["cont_causalc"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["cont_objeto"] = "Cont Objeto";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["cont_objeto"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["cont_objeto"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["cont_obligaciones"] = "Cont Obligaciones";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["cont_obligaciones"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["cont_obligaciones"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["cont_plazo"] = "Cont Plazo";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["cont_plazo"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["cont_plazo"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["ctb_tipo_nombre"] = "Ctb Tipo Nombre";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["ctb_tipo_nombre"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["ctb_tipo_nombre"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["nombre_cargo"] = "Nombre Cargo";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["nombre_cargo"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["nombre_cargo"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["nombre_dependencia"] = "Nombre Dependencia";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["nombre_dependencia"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["nombre_dependencia"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["id_depto_superior"] = "Id Depto Superior";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["id_depto_superior"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["id_depto_superior"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["Departamento_superior"] = "Departamento Superior";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["Departamento_superior"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["Departamento_superior"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["cont_numpoliza"] = "Cont Numpoliza";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["cont_numpoliza"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["cont_numpoliza"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["cont_secop_proceso"] = "Cont Secop Proceso";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["cont_secop_proceso"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["cont_secop_proceso"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["cont_fecha_aprobgarantia"] = "Cont Fecha Aprobgarantia";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["cont_fecha_aprobgarantia"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["cont_fecha_aprobgarantia"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["cont_fechaapertura"] = "Cont Fechaapertura";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["cont_fechaapertura"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["cont_fechaapertura"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["cont_munejec"] = "Cont Munejec";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["cont_munejec"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["cont_munejec"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["cont_cesion"] = "Cont Cesion";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["cont_cesion"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["cont_cesion"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["cont_modifica"] = "Cont Modifica";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["cont_modifica"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["cont_modifica"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_c["Spanish"]["Username"] = "Username";
	$fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]["Username"] = "";
	$placeHoldersq_bandejaentrada_supervisores_c["Spanish"]["Username"] = "";
	if (count($fieldToolTipsq_bandejaentrada_supervisores_c["Spanish"]))
		$tdataq_bandejaentrada_supervisores_c[".isUseToolTips"] = true;
}


	$tdataq_bandejaentrada_supervisores_c[".NCSearch"] = true;



$tdataq_bandejaentrada_supervisores_c[".shortTableName"] = "q_bandejaentrada_supervisores_c";
$tdataq_bandejaentrada_supervisores_c[".nSecOptions"] = 0;

$tdataq_bandejaentrada_supervisores_c[".mainTableOwnerID"] = "documento_id";
$tdataq_bandejaentrada_supervisores_c[".entityType"] = 1;

$tdataq_bandejaentrada_supervisores_c[".strOriginalTableName"] = "q_bandejaentrada_supervisores";

	



$tdataq_bandejaentrada_supervisores_c[".showAddInPopup"] = false;

$tdataq_bandejaentrada_supervisores_c[".showEditInPopup"] = false;

$tdataq_bandejaentrada_supervisores_c[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataq_bandejaentrada_supervisores_c[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataq_bandejaentrada_supervisores_c[".listAjax"] = false;
//	temporary
$tdataq_bandejaentrada_supervisores_c[".listAjax"] = false;

	$tdataq_bandejaentrada_supervisores_c[".audit"] = true;

	$tdataq_bandejaentrada_supervisores_c[".locking"] = true;


$pages = $tdataq_bandejaentrada_supervisores_c[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_bandejaentrada_supervisores_c[".edit"] = true;
	$tdataq_bandejaentrada_supervisores_c[".afterEditAction"] = 1;
	$tdataq_bandejaentrada_supervisores_c[".closePopupAfterEdit"] = 1;
	$tdataq_bandejaentrada_supervisores_c[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_bandejaentrada_supervisores_c[".add"] = true;
$tdataq_bandejaentrada_supervisores_c[".afterAddAction"] = 1;
$tdataq_bandejaentrada_supervisores_c[".closePopupAfterAdd"] = 1;
$tdataq_bandejaentrada_supervisores_c[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_bandejaentrada_supervisores_c[".list"] = true;
}



$tdataq_bandejaentrada_supervisores_c[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_bandejaentrada_supervisores_c[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_bandejaentrada_supervisores_c[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_bandejaentrada_supervisores_c[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_bandejaentrada_supervisores_c[".printFriendly"] = true;
}



$tdataq_bandejaentrada_supervisores_c[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_bandejaentrada_supervisores_c[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_bandejaentrada_supervisores_c[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_bandejaentrada_supervisores_c[".isUseAjaxSuggest"] = true;

$tdataq_bandejaentrada_supervisores_c[".rowHighlite"] = true;





$tdataq_bandejaentrada_supervisores_c[".ajaxCodeSnippetAdded"] = false;

$tdataq_bandejaentrada_supervisores_c[".buttonsAdded"] = false;

$tdataq_bandejaentrada_supervisores_c[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_bandejaentrada_supervisores_c[".isUseTimeForSearch"] = false;


$tdataq_bandejaentrada_supervisores_c[".badgeColor"] = "BC8F8F";


$tdataq_bandejaentrada_supervisores_c[".allSearchFields"] = array();
$tdataq_bandejaentrada_supervisores_c[".filterFields"] = array();
$tdataq_bandejaentrada_supervisores_c[".requiredSearchFields"] = array();

$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"] = array();
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "id_cont";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "cont_nit_contra_ta";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "cont_estado";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "numcontrato";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "pre_contnumero";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "contnumero";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "cont_ano";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "cont_codrubro";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "cont_catalogo_presupuestal";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "cont_fecha_inicio";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "cont_fechafinal";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "PLAZO";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "cont_periodicidad";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "cont_valorinicial";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "cont_valormensual";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "cont_secop_enlace";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "documento_id";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "nombres";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "apellidos";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "nombresupfull";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "cargo_id";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "dependencia_id";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "sup_fechanot";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "sup_mailnot";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "sup_status";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "idusrglobal_fk";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "contractor_name";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "contractor_lname";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "contractor_nombresfull";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "contractor_email";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "contractor_email_mincit";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "prenumero";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "numregistro";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "cont_unspsc";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "cont_tipo_rubro";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "cont_tipopre";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "cont_causalc";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "cont_objeto";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "cont_obligaciones";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "cont_plazo";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "ctb_tipo_nombre";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "nombre_cargo";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "nombre_dependencia";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "id_depto_superior";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "Departamento_superior";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "cont_numpoliza";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "cont_secop_proceso";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "cont_fecha_aprobgarantia";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "cont_fechaapertura";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "cont_munejec";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "cont_cesion";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "cont_modifica";
$tdataq_bandejaentrada_supervisores_c[".googleLikeFields"][] = "Username";



$tdataq_bandejaentrada_supervisores_c[".tableType"] = "list";

$tdataq_bandejaentrada_supervisores_c[".printerPageOrientation"] = 0;
$tdataq_bandejaentrada_supervisores_c[".nPrinterPageScale"] = 100;

$tdataq_bandejaentrada_supervisores_c[".nPrinterSplitRecords"] = 40;

$tdataq_bandejaentrada_supervisores_c[".geocodingEnabled"] = false;










$tdataq_bandejaentrada_supervisores_c[".pageSize"] = 20;

$tdataq_bandejaentrada_supervisores_c[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataq_bandejaentrada_supervisores_c[".strOrderBy"] = $tstrOrderBy;

$tdataq_bandejaentrada_supervisores_c[".orderindexes"] = array();

$tdataq_bandejaentrada_supervisores_c[".sqlHead"] = "SELECT id_cont,  	cont_nit_contra_ta,  	cont_estado,  	numcontrato,  	pre_contnumero,  	contnumero,  	cont_ano,  	cont_codrubro,  	cont_catalogo_presupuestal,  	cont_fecha_inicio,  	cont_fechafinal,  	PLAZO,  	cont_periodicidad,  	cont_valorinicial,  	cont_valormensual,  	cont_secop_enlace,  	documento_id,  	nombres,  	apellidos,  	nombresupfull,  	cargo_id,  	dependencia_id,  	sup_fechanot,  	sup_mailnot,  	sup_status,  	idusrglobal_fk,  	contractor_name,  	contractor_lname,  	contractor_nombresfull,  	contractor_email,  	contractor_email_mincit,  	prenumero,  	numregistro,  	cont_unspsc,  	cont_tipo_rubro,  	cont_tipopre,  	cont_causalc,  	cont_objeto,  	cont_obligaciones,  	cont_plazo,  	ctb_tipo_nombre,  	nombre_cargo,  	nombre_dependencia,  	id_depto_superior,  	Departamento_superior,  	cont_numpoliza,  	cont_secop_proceso,  	cont_fecha_aprobgarantia,  	cont_fechaapertura,  	cont_munejec,  	cont_cesion,  	cont_modifica,  	Username";
$tdataq_bandejaentrada_supervisores_c[".sqlFrom"] = "FROM q_bandejaentrada_supervisores";
$tdataq_bandejaentrada_supervisores_c[".sqlWhereExpr"] = "";
$tdataq_bandejaentrada_supervisores_c[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_bandejaentrada_supervisores_c[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_bandejaentrada_supervisores_c[".arrGroupsPerPage"] = $arrGPP;

$tdataq_bandejaentrada_supervisores_c[".highlightSearchResults"] = true;

$tableKeysq_bandejaentrada_supervisores_c = array();
$tableKeysq_bandejaentrada_supervisores_c[] = "id_cont";
$tdataq_bandejaentrada_supervisores_c[".Keys"] = $tableKeysq_bandejaentrada_supervisores_c;


$tdataq_bandejaentrada_supervisores_c[".hideMobileList"] = array();




//	id_cont
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_cont";
	$fdata["GoodName"] = "id_cont";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","id_cont");
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


	$tdataq_bandejaentrada_supervisores_c["id_cont"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "id_cont";
//	cont_nit_contra_ta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cont_nit_contra_ta";
	$fdata["GoodName"] = "cont_nit_contra_ta";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","cont_nit_contra_ta");
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


	$tdataq_bandejaentrada_supervisores_c["cont_nit_contra_ta"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "cont_nit_contra_ta";
//	cont_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cont_estado";
	$fdata["GoodName"] = "cont_estado";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","cont_estado");
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


	$tdataq_bandejaentrada_supervisores_c["cont_estado"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "cont_estado";
//	numcontrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "numcontrato";
	$fdata["GoodName"] = "numcontrato";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","numcontrato");
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


	$tdataq_bandejaentrada_supervisores_c["numcontrato"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "numcontrato";
//	pre_contnumero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "pre_contnumero";
	$fdata["GoodName"] = "pre_contnumero";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","pre_contnumero");
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


	$tdataq_bandejaentrada_supervisores_c["pre_contnumero"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "pre_contnumero";
//	contnumero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "contnumero";
	$fdata["GoodName"] = "contnumero";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","contnumero");
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


	$tdataq_bandejaentrada_supervisores_c["contnumero"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "contnumero";
//	cont_ano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cont_ano";
	$fdata["GoodName"] = "cont_ano";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","cont_ano");
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


	$tdataq_bandejaentrada_supervisores_c["cont_ano"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "cont_ano";
//	cont_codrubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cont_codrubro";
	$fdata["GoodName"] = "cont_codrubro";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","cont_codrubro");
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


	$tdataq_bandejaentrada_supervisores_c["cont_codrubro"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "cont_codrubro";
//	cont_catalogo_presupuestal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cont_catalogo_presupuestal";
	$fdata["GoodName"] = "cont_catalogo_presupuestal";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","cont_catalogo_presupuestal");
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


	$tdataq_bandejaentrada_supervisores_c["cont_catalogo_presupuestal"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "cont_catalogo_presupuestal";
//	cont_fecha_inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cont_fecha_inicio";
	$fdata["GoodName"] = "cont_fecha_inicio";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","cont_fecha_inicio");
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


	$tdataq_bandejaentrada_supervisores_c["cont_fecha_inicio"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "cont_fecha_inicio";
//	cont_fechafinal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "cont_fechafinal";
	$fdata["GoodName"] = "cont_fechafinal";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","cont_fechafinal");
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


	$tdataq_bandejaentrada_supervisores_c["cont_fechafinal"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "cont_fechafinal";
//	PLAZO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "PLAZO";
	$fdata["GoodName"] = "PLAZO";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","PLAZO");
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


	$tdataq_bandejaentrada_supervisores_c["PLAZO"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "PLAZO";
//	cont_periodicidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "cont_periodicidad";
	$fdata["GoodName"] = "cont_periodicidad";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","cont_periodicidad");
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


	$tdataq_bandejaentrada_supervisores_c["cont_periodicidad"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "cont_periodicidad";
//	cont_valorinicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "cont_valorinicial";
	$fdata["GoodName"] = "cont_valorinicial";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","cont_valorinicial");
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


	$tdataq_bandejaentrada_supervisores_c["cont_valorinicial"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "cont_valorinicial";
//	cont_valormensual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "cont_valormensual";
	$fdata["GoodName"] = "cont_valormensual";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","cont_valormensual");
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


	$tdataq_bandejaentrada_supervisores_c["cont_valormensual"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "cont_valormensual";
//	cont_secop_enlace
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "cont_secop_enlace";
	$fdata["GoodName"] = "cont_secop_enlace";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","cont_secop_enlace");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cont_secop_enlace";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_secop_enlace";

	
	
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


	$tdataq_bandejaentrada_supervisores_c["cont_secop_enlace"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "cont_secop_enlace";
//	documento_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "documento_id";
	$fdata["GoodName"] = "documento_id";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","documento_id");
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


	$tdataq_bandejaentrada_supervisores_c["documento_id"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "documento_id";
//	nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "nombres";
	$fdata["GoodName"] = "nombres";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","nombres");
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


	$tdataq_bandejaentrada_supervisores_c["nombres"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "nombres";
//	apellidos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "apellidos";
	$fdata["GoodName"] = "apellidos";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","apellidos");
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


	$tdataq_bandejaentrada_supervisores_c["apellidos"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "apellidos";
//	nombresupfull
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "nombresupfull";
	$fdata["GoodName"] = "nombresupfull";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","nombresupfull");
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


	$tdataq_bandejaentrada_supervisores_c["nombresupfull"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "nombresupfull";
//	cargo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "cargo_id";
	$fdata["GoodName"] = "cargo_id";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","cargo_id");
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


	$tdataq_bandejaentrada_supervisores_c["cargo_id"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "cargo_id";
//	dependencia_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "dependencia_id";
	$fdata["GoodName"] = "dependencia_id";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","dependencia_id");
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


	$tdataq_bandejaentrada_supervisores_c["dependencia_id"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "dependencia_id";
//	sup_fechanot
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "sup_fechanot";
	$fdata["GoodName"] = "sup_fechanot";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","sup_fechanot");
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


	$tdataq_bandejaentrada_supervisores_c["sup_fechanot"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "sup_fechanot";
//	sup_mailnot
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "sup_mailnot";
	$fdata["GoodName"] = "sup_mailnot";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","sup_mailnot");
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


	$tdataq_bandejaentrada_supervisores_c["sup_mailnot"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "sup_mailnot";
//	sup_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "sup_status";
	$fdata["GoodName"] = "sup_status";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","sup_status");
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


	$tdataq_bandejaentrada_supervisores_c["sup_status"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "sup_status";
//	idusrglobal_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "idusrglobal_fk";
	$fdata["GoodName"] = "idusrglobal_fk";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","idusrglobal_fk");
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


	$tdataq_bandejaentrada_supervisores_c["idusrglobal_fk"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "idusrglobal_fk";
//	contractor_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "contractor_name";
	$fdata["GoodName"] = "contractor_name";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","contractor_name");
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


	$tdataq_bandejaentrada_supervisores_c["contractor_name"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "contractor_name";
//	contractor_lname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "contractor_lname";
	$fdata["GoodName"] = "contractor_lname";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","contractor_lname");
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


	$tdataq_bandejaentrada_supervisores_c["contractor_lname"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "contractor_lname";
//	contractor_nombresfull
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "contractor_nombresfull";
	$fdata["GoodName"] = "contractor_nombresfull";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","contractor_nombresfull");
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


	$tdataq_bandejaentrada_supervisores_c["contractor_nombresfull"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "contractor_nombresfull";
//	contractor_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "contractor_email";
	$fdata["GoodName"] = "contractor_email";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","contractor_email");
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


	$tdataq_bandejaentrada_supervisores_c["contractor_email"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "contractor_email";
//	contractor_email_mincit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "contractor_email_mincit";
	$fdata["GoodName"] = "contractor_email_mincit";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","contractor_email_mincit");
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


	$tdataq_bandejaentrada_supervisores_c["contractor_email_mincit"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "contractor_email_mincit";
//	prenumero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "prenumero";
	$fdata["GoodName"] = "prenumero";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","prenumero");
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


	$tdataq_bandejaentrada_supervisores_c["prenumero"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "prenumero";
//	numregistro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "numregistro";
	$fdata["GoodName"] = "numregistro";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","numregistro");
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


	$tdataq_bandejaentrada_supervisores_c["numregistro"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "numregistro";
//	cont_unspsc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "cont_unspsc";
	$fdata["GoodName"] = "cont_unspsc";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","cont_unspsc");
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


	$tdataq_bandejaentrada_supervisores_c["cont_unspsc"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "cont_unspsc";
//	cont_tipo_rubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "cont_tipo_rubro";
	$fdata["GoodName"] = "cont_tipo_rubro";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","cont_tipo_rubro");
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


	$tdataq_bandejaentrada_supervisores_c["cont_tipo_rubro"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "cont_tipo_rubro";
//	cont_tipopre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "cont_tipopre";
	$fdata["GoodName"] = "cont_tipopre";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","cont_tipopre");
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


	$tdataq_bandejaentrada_supervisores_c["cont_tipopre"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "cont_tipopre";
//	cont_causalc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "cont_causalc";
	$fdata["GoodName"] = "cont_causalc";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","cont_causalc");
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


	$tdataq_bandejaentrada_supervisores_c["cont_causalc"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "cont_causalc";
//	cont_objeto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "cont_objeto";
	$fdata["GoodName"] = "cont_objeto";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","cont_objeto");
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


	$tdataq_bandejaentrada_supervisores_c["cont_objeto"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "cont_objeto";
//	cont_obligaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "cont_obligaciones";
	$fdata["GoodName"] = "cont_obligaciones";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","cont_obligaciones");
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


	$tdataq_bandejaentrada_supervisores_c["cont_obligaciones"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "cont_obligaciones";
//	cont_plazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "cont_plazo";
	$fdata["GoodName"] = "cont_plazo";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","cont_plazo");
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


	$tdataq_bandejaentrada_supervisores_c["cont_plazo"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "cont_plazo";
//	ctb_tipo_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "ctb_tipo_nombre";
	$fdata["GoodName"] = "ctb_tipo_nombre";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","ctb_tipo_nombre");
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


	$tdataq_bandejaentrada_supervisores_c["ctb_tipo_nombre"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "ctb_tipo_nombre";
//	nombre_cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "nombre_cargo";
	$fdata["GoodName"] = "nombre_cargo";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","nombre_cargo");
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


	$tdataq_bandejaentrada_supervisores_c["nombre_cargo"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "nombre_cargo";
//	nombre_dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "nombre_dependencia";
	$fdata["GoodName"] = "nombre_dependencia";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","nombre_dependencia");
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


	$tdataq_bandejaentrada_supervisores_c["nombre_dependencia"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "nombre_dependencia";
//	id_depto_superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "id_depto_superior";
	$fdata["GoodName"] = "id_depto_superior";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","id_depto_superior");
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


	$tdataq_bandejaentrada_supervisores_c["id_depto_superior"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "id_depto_superior";
//	Departamento_superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "Departamento_superior";
	$fdata["GoodName"] = "Departamento_superior";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","Departamento_superior");
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


	$tdataq_bandejaentrada_supervisores_c["Departamento_superior"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "Departamento_superior";
//	cont_numpoliza
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "cont_numpoliza";
	$fdata["GoodName"] = "cont_numpoliza";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","cont_numpoliza");
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


	$tdataq_bandejaentrada_supervisores_c["cont_numpoliza"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "cont_numpoliza";
//	cont_secop_proceso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "cont_secop_proceso";
	$fdata["GoodName"] = "cont_secop_proceso";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","cont_secop_proceso");
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


	$tdataq_bandejaentrada_supervisores_c["cont_secop_proceso"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "cont_secop_proceso";
//	cont_fecha_aprobgarantia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "cont_fecha_aprobgarantia";
	$fdata["GoodName"] = "cont_fecha_aprobgarantia";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","cont_fecha_aprobgarantia");
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


	$tdataq_bandejaentrada_supervisores_c["cont_fecha_aprobgarantia"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "cont_fecha_aprobgarantia";
//	cont_fechaapertura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "cont_fechaapertura";
	$fdata["GoodName"] = "cont_fechaapertura";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","cont_fechaapertura");
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


	$tdataq_bandejaentrada_supervisores_c["cont_fechaapertura"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "cont_fechaapertura";
//	cont_munejec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "cont_munejec";
	$fdata["GoodName"] = "cont_munejec";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","cont_munejec");
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


	$tdataq_bandejaentrada_supervisores_c["cont_munejec"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "cont_munejec";
//	cont_cesion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "cont_cesion";
	$fdata["GoodName"] = "cont_cesion";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","cont_cesion");
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


	$tdataq_bandejaentrada_supervisores_c["cont_cesion"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "cont_cesion";
//	cont_modifica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "cont_modifica";
	$fdata["GoodName"] = "cont_modifica";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","cont_modifica");
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


	$tdataq_bandejaentrada_supervisores_c["cont_modifica"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "cont_modifica";
//	Username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "Username";
	$fdata["GoodName"] = "Username";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_c","Username");
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


	$tdataq_bandejaentrada_supervisores_c["Username"] = $fdata;
		$tdataq_bandejaentrada_supervisores_c[".searchableFields"][] = "Username";


$tables_data["q_bandejaentrada_supervisores_c"]=&$tdataq_bandejaentrada_supervisores_c;
$field_labels["q_bandejaentrada_supervisores_c"] = &$fieldLabelsq_bandejaentrada_supervisores_c;
$fieldToolTips["q_bandejaentrada_supervisores_c"] = &$fieldToolTipsq_bandejaentrada_supervisores_c;
$placeHolders["q_bandejaentrada_supervisores_c"] = &$placeHoldersq_bandejaentrada_supervisores_c;
$page_titles["q_bandejaentrada_supervisores_c"] = &$pageTitlesq_bandejaentrada_supervisores_c;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["q_bandejaentrada_supervisores_c"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["q_bandejaentrada_supervisores_c"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_q_bandejaentrada_supervisores_c()
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
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto6["m_sql"] = "id_cont";
$proto6["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_nit_contra_ta",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto8["m_sql"] = "cont_nit_contra_ta";
$proto8["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_estado",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto10["m_sql"] = "cont_estado";
$proto10["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "numcontrato",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto12["m_sql"] = "numcontrato";
$proto12["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "pre_contnumero",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto14["m_sql"] = "pre_contnumero";
$proto14["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "contnumero",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto16["m_sql"] = "contnumero";
$proto16["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_ano",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto18["m_sql"] = "cont_ano";
$proto18["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_codrubro",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto20["m_sql"] = "cont_codrubro";
$proto20["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_catalogo_presupuestal",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto22["m_sql"] = "cont_catalogo_presupuestal";
$proto22["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fecha_inicio",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto24["m_sql"] = "cont_fecha_inicio";
$proto24["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fechafinal",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto26["m_sql"] = "cont_fechafinal";
$proto26["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "PLAZO",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto28["m_sql"] = "PLAZO";
$proto28["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_periodicidad",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto30["m_sql"] = "cont_periodicidad";
$proto30["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valorinicial",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto32["m_sql"] = "cont_valorinicial";
$proto32["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valormensual",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto34["m_sql"] = "cont_valormensual";
$proto34["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_secop_enlace",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto36["m_sql"] = "cont_secop_enlace";
$proto36["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "documento_id",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto38["m_sql"] = "documento_id";
$proto38["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "nombres",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto40["m_sql"] = "nombres";
$proto40["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "apellidos",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto42["m_sql"] = "apellidos";
$proto42["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "nombresupfull",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto44["m_sql"] = "nombresupfull";
$proto44["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "cargo_id",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto46["m_sql"] = "cargo_id";
$proto46["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "dependencia_id",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto48["m_sql"] = "dependencia_id";
$proto48["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "sup_fechanot",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto50["m_sql"] = "sup_fechanot";
$proto50["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "sup_mailnot",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto52["m_sql"] = "sup_mailnot";
$proto52["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "sup_status",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto54["m_sql"] = "sup_status";
$proto54["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "idusrglobal_fk",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto56["m_sql"] = "idusrglobal_fk";
$proto56["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_name",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto58["m_sql"] = "contractor_name";
$proto58["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_lname",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto60["m_sql"] = "contractor_lname";
$proto60["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_nombresfull",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto62["m_sql"] = "contractor_nombresfull";
$proto62["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_email",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto64["m_sql"] = "contractor_email";
$proto64["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_email_mincit",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto66["m_sql"] = "contractor_email_mincit";
$proto66["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "prenumero",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto68["m_sql"] = "prenumero";
$proto68["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "numregistro",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto70["m_sql"] = "numregistro";
$proto70["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_unspsc",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto72["m_sql"] = "cont_unspsc";
$proto72["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipo_rubro",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto74["m_sql"] = "cont_tipo_rubro";
$proto74["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipopre",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto76["m_sql"] = "cont_tipopre";
$proto76["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_causalc",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto78["m_sql"] = "cont_causalc";
$proto78["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_objeto",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto80["m_sql"] = "cont_objeto";
$proto80["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_obligaciones",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto82["m_sql"] = "cont_obligaciones";
$proto82["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_plazo",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto84["m_sql"] = "cont_plazo";
$proto84["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "ctb_tipo_nombre",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto86["m_sql"] = "ctb_tipo_nombre";
$proto86["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_cargo",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto88["m_sql"] = "nombre_cargo";
$proto88["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_dependencia",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto90["m_sql"] = "nombre_dependencia";
$proto90["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "id_depto_superior",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto92["m_sql"] = "id_depto_superior";
$proto92["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "Departamento_superior",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto94["m_sql"] = "Departamento_superior";
$proto94["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_numpoliza",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto96["m_sql"] = "cont_numpoliza";
$proto96["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_secop_proceso",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto98["m_sql"] = "cont_secop_proceso";
$proto98["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fecha_aprobgarantia",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto100["m_sql"] = "cont_fecha_aprobgarantia";
$proto100["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fechaapertura",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto102["m_sql"] = "cont_fechaapertura";
$proto102["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_munejec",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto104["m_sql"] = "cont_munejec";
$proto104["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_cesion",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto106["m_sql"] = "cont_cesion";
$proto106["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_modifica",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto108["m_sql"] = "cont_modifica";
$proto108["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "Username",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_c"
));

$proto110["m_sql"] = "Username";
$proto110["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto112=array();
$proto112["m_link"] = "SQLL_MAIN";
			$proto113=array();
$proto113["m_strName"] = "q_bandejaentrada_supervisores";
$proto113["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
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
$proto112["m_srcTableName"] = "q_bandejaentrada_supervisores_c";
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
$proto0["m_srcTableName"]="q_bandejaentrada_supervisores_c";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_bandejaentrada_supervisores_c = createSqlQuery_q_bandejaentrada_supervisores_c();


	
								;

																																																					

$tdataq_bandejaentrada_supervisores_c[".sqlquery"] = $queryData_q_bandejaentrada_supervisores_c;

$tableEvents["q_bandejaentrada_supervisores_c"] = new eventsBase;
$tdataq_bandejaentrada_supervisores_c[".hasEvents"] = false;

?>