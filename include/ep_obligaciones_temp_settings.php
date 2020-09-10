<?php



$tdataep_obligaciones_temp = array();
$tdataep_obligaciones_temp[".searchableFields"] = array();
$tdataep_obligaciones_temp[".ShortName"] = "ep_obligaciones_temp";
$tdataep_obligaciones_temp[".OwnerID"] = "";
$tdataep_obligaciones_temp[".OriginalTable"] = "ep_obligaciones_temp";


$tdataep_obligaciones_temp[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataep_obligaciones_temp[".originalPagesByType"] = $tdataep_obligaciones_temp[".pagesByType"];
$tdataep_obligaciones_temp[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataep_obligaciones_temp[".originalPages"] = $tdataep_obligaciones_temp[".pages"];
$tdataep_obligaciones_temp[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataep_obligaciones_temp[".originalDefaultPages"] = $tdataep_obligaciones_temp[".defaultPages"];

//	field labels
$fieldLabelsep_obligaciones_temp = array();
$fieldToolTipsep_obligaciones_temp = array();
$pageTitlesep_obligaciones_temp = array();
$placeHoldersep_obligaciones_temp = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsep_obligaciones_temp["Spanish"] = array();
	$fieldToolTipsep_obligaciones_temp["Spanish"] = array();
	$placeHoldersep_obligaciones_temp["Spanish"] = array();
	$pageTitlesep_obligaciones_temp["Spanish"] = array();
	$fieldLabelsep_obligaciones_temp["Spanish"]["OID"] = "OID";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["OID"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["OID"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Numero_Documento"] = "Numero Documento";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Numero_Documento"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Numero_Documento"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Fecha_de_Registro"] = "Fecha de Registro";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Fecha_de_Registro"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Fecha_de_Registro"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Fecha_de_Creacion"] = "Fecha de Creacion";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Fecha_de_Creacion"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Fecha_de_Creacion"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Estado"] = "Estado";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Estado"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Estado"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Valor_Actual"] = "Valor Actual";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Valor_Actual"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Valor_Actual"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Valor_Deducciones"] = "Valor Deducciones";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Valor_Deducciones"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Valor_Deducciones"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Valor_Oblig_no_Orden"] = "Valor Oblig no Orden";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Valor_Oblig_no_Orden"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Valor_Oblig_no_Orden"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Tipo_Identificacion"] = "Tipo Identificacion";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Tipo_Identificacion"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Tipo_Identificacion"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Identificacion"] = "Identificacion";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Identificacion"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Identificacion"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Nombre_Razon_Social"] = "Nombre Razon Social";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Nombre_Razon_Social"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Nombre_Razon_Social"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Medio_de_Pago"] = "Medio de Pago";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Medio_de_Pago"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Medio_de_Pago"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Tipo_Cuenta"] = "Tipo Cuenta";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Tipo_Cuenta"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Tipo_Cuenta"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Numero_Cuenta"] = "Numero Cuenta";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Numero_Cuenta"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Numero_Cuenta"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Estado_Cuenta"] = "Estado Cuenta";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Estado_Cuenta"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Estado_Cuenta"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Entidad_Nit"] = "Entidad Nit";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Entidad_Nit"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Entidad_Nit"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Entidad_Descripcion"] = "Entidad Descripcion";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Entidad_Descripcion"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Entidad_Descripcion"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Dependencia"] = "Dependencia";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Dependencia"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Dependencia"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Dependencia_Descripcion"] = "Dependencia Descripcion";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Dependencia_Descripcion"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Dependencia_Descripcion"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Rubro"] = "Rubro";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Rubro"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Rubro"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Descripcion"] = "Descripcion";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Descripcion"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Descripcion"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Valor_Inicial"] = "Valor Inicial";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Valor_Inicial"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Valor_Inicial"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Valor_Operaciones"] = "Valor Operaciones";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Valor_Operaciones"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Valor_Operaciones"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Valor_Actual1"] = "Valor Actual1";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Valor_Actual1"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Valor_Actual1"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Saldo_por_Utilizar"] = "Saldo por Utilizar";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Saldo_por_Utilizar"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Saldo_por_Utilizar"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Fuente"] = "Fuente";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Fuente"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Fuente"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Situacion"] = "Situacion";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Situacion"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Situacion"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Recurso"] = "Recurso";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Recurso"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Recurso"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Concepto"] = "Concepto";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Concepto"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Concepto"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Solicitud_CDP"] = "Solicitud CDP";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Solicitud_CDP"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Solicitud_CDP"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["CDP"] = "CDP";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["CDP"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["CDP"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Compromisos"] = "Compromisos";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Compromisos"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Compromisos"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Cuentas_por_Pagar"] = "Cuentas por Pagar";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Cuentas_por_Pagar"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Cuentas_por_Pagar"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Fecha_Cuentas_por_Pagar"] = "Fecha Cuentas por Pagar";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Fecha_Cuentas_por_Pagar"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Fecha_Cuentas_por_Pagar"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Obligaciones"] = "Obligaciones";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Obligaciones"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Obligaciones"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Ordenes_de_Pago"] = "Ordenes de Pago";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Ordenes_de_Pago"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Ordenes_de_Pago"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Reintegros"] = "Reintegros";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Reintegros"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Reintegros"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Fecha_Doc_Soporte_Compromiso"] = "Fecha Doc Soporte Compromiso";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Fecha_Doc_Soporte_Compromiso"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Fecha_Doc_Soporte_Compromiso"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Tipo_Doc_Soporte_Compromiso"] = "Tipo Doc Soporte Compromiso";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Tipo_Doc_Soporte_Compromiso"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Tipo_Doc_Soporte_Compromiso"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Num_Doc_Soporte_Compromiso"] = "Num Doc Soporte Compromiso";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Num_Doc_Soporte_Compromiso"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Num_Doc_Soporte_Compromiso"] = "";
	$fieldLabelsep_obligaciones_temp["Spanish"]["Objeto_del_Compromiso"] = "Objeto del Compromiso";
	$fieldToolTipsep_obligaciones_temp["Spanish"]["Objeto_del_Compromiso"] = "";
	$placeHoldersep_obligaciones_temp["Spanish"]["Objeto_del_Compromiso"] = "";
	if (count($fieldToolTipsep_obligaciones_temp["Spanish"]))
		$tdataep_obligaciones_temp[".isUseToolTips"] = true;
}


	$tdataep_obligaciones_temp[".NCSearch"] = true;



$tdataep_obligaciones_temp[".shortTableName"] = "ep_obligaciones_temp";
$tdataep_obligaciones_temp[".nSecOptions"] = 0;

$tdataep_obligaciones_temp[".mainTableOwnerID"] = "";
$tdataep_obligaciones_temp[".entityType"] = 0;

$tdataep_obligaciones_temp[".strOriginalTableName"] = "ep_obligaciones_temp";

	



$tdataep_obligaciones_temp[".showAddInPopup"] = false;

$tdataep_obligaciones_temp[".showEditInPopup"] = false;

$tdataep_obligaciones_temp[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataep_obligaciones_temp[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataep_obligaciones_temp[".listAjax"] = false;
//	temporary
$tdataep_obligaciones_temp[".listAjax"] = false;

	$tdataep_obligaciones_temp[".audit"] = false;

	$tdataep_obligaciones_temp[".locking"] = false;


$pages = $tdataep_obligaciones_temp[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataep_obligaciones_temp[".edit"] = true;
	$tdataep_obligaciones_temp[".afterEditAction"] = 1;
	$tdataep_obligaciones_temp[".closePopupAfterEdit"] = 1;
	$tdataep_obligaciones_temp[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataep_obligaciones_temp[".add"] = true;
$tdataep_obligaciones_temp[".afterAddAction"] = 1;
$tdataep_obligaciones_temp[".closePopupAfterAdd"] = 1;
$tdataep_obligaciones_temp[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataep_obligaciones_temp[".list"] = true;
}



$tdataep_obligaciones_temp[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataep_obligaciones_temp[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataep_obligaciones_temp[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataep_obligaciones_temp[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataep_obligaciones_temp[".printFriendly"] = true;
}



$tdataep_obligaciones_temp[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataep_obligaciones_temp[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataep_obligaciones_temp[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataep_obligaciones_temp[".isUseAjaxSuggest"] = true;

$tdataep_obligaciones_temp[".rowHighlite"] = true;





$tdataep_obligaciones_temp[".ajaxCodeSnippetAdded"] = false;

$tdataep_obligaciones_temp[".buttonsAdded"] = false;

$tdataep_obligaciones_temp[".addPageEvents"] = false;

// use timepicker for search panel
$tdataep_obligaciones_temp[".isUseTimeForSearch"] = false;


$tdataep_obligaciones_temp[".badgeColor"] = "1E90FF";


$tdataep_obligaciones_temp[".allSearchFields"] = array();
$tdataep_obligaciones_temp[".filterFields"] = array();
$tdataep_obligaciones_temp[".requiredSearchFields"] = array();

$tdataep_obligaciones_temp[".googleLikeFields"] = array();
$tdataep_obligaciones_temp[".googleLikeFields"][] = "OID";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Numero Documento";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Fecha de Registro";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Fecha de Creacion";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Estado";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Valor Actual";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Valor Deducciones";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Valor Oblig no Orden";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Tipo Identificacion";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Identificacion";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Nombre Razon Social";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Medio de Pago";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Tipo Cuenta";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Numero Cuenta";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Estado Cuenta";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Entidad Nit";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Entidad Descripcion";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Dependencia";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Dependencia Descripcion";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Rubro";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Descripcion";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Valor Inicial";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Valor Operaciones";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Valor Actual1";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Saldo por Utilizar";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Fuente";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Situacion";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Recurso";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Concepto";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Solicitud CDP";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "CDP";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Compromisos";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Cuentas por Pagar";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Fecha Cuentas por Pagar";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Obligaciones";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Ordenes de Pago";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Reintegros";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Fecha Doc Soporte Compromiso";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Tipo Doc Soporte Compromiso";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Num Doc Soporte Compromiso";
$tdataep_obligaciones_temp[".googleLikeFields"][] = "Objeto del Compromiso";



$tdataep_obligaciones_temp[".tableType"] = "list";

$tdataep_obligaciones_temp[".printerPageOrientation"] = 0;
$tdataep_obligaciones_temp[".nPrinterPageScale"] = 100;

$tdataep_obligaciones_temp[".nPrinterSplitRecords"] = 40;

$tdataep_obligaciones_temp[".geocodingEnabled"] = false;










$tdataep_obligaciones_temp[".pageSize"] = 20;

$tdataep_obligaciones_temp[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataep_obligaciones_temp[".strOrderBy"] = $tstrOrderBy;

$tdataep_obligaciones_temp[".orderindexes"] = array();

$tdataep_obligaciones_temp[".sqlHead"] = "SELECT OID,  	`Numero Documento`,  	`Fecha de Registro`,  	`Fecha de Creacion`,  	Estado,  	`Valor Actual`,  	`Valor Deducciones`,  	`Valor Oblig no Orden`,  	`Tipo Identificacion`,  	Identificacion,  	`Nombre Razon Social`,  	`Medio de Pago`,  	`Tipo Cuenta`,  	`Numero Cuenta`,  	`Estado Cuenta`,  	`Entidad Nit`,  	`Entidad Descripcion`,  	Dependencia,  	`Dependencia Descripcion`,  	Rubro,  	Descripcion,  	`Valor Inicial`,  	`Valor Operaciones`,  	`Valor Actual1`,  	`Saldo por Utilizar`,  	Fuente,  	Situacion,  	Recurso,  	Concepto,  	`Solicitud CDP`,  	CDP,  	Compromisos,  	`Cuentas por Pagar`,  	`Fecha Cuentas por Pagar`,  	Obligaciones,  	`Ordenes de Pago`,  	Reintegros,  	`Fecha Doc Soporte Compromiso`,  	`Tipo Doc Soporte Compromiso`,  	`Num Doc Soporte Compromiso`,  	`Objeto del Compromiso`";
$tdataep_obligaciones_temp[".sqlFrom"] = "FROM ep_obligaciones_temp";
$tdataep_obligaciones_temp[".sqlWhereExpr"] = "";
$tdataep_obligaciones_temp[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataep_obligaciones_temp[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataep_obligaciones_temp[".arrGroupsPerPage"] = $arrGPP;

$tdataep_obligaciones_temp[".highlightSearchResults"] = true;

$tableKeysep_obligaciones_temp = array();
$tableKeysep_obligaciones_temp[] = "OID";
$tdataep_obligaciones_temp[".Keys"] = $tableKeysep_obligaciones_temp;


$tdataep_obligaciones_temp[".hideMobileList"] = array();




//	OID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "OID";
	$fdata["GoodName"] = "OID";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","OID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "OID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OID";

	
	
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


	$tdataep_obligaciones_temp["OID"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "OID";
//	Numero Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Numero Documento";
	$fdata["GoodName"] = "Numero_Documento";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Numero_Documento");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Numero Documento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Numero Documento`";

	
	
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


	$tdataep_obligaciones_temp["Numero Documento"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Numero Documento";
//	Fecha de Registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fecha de Registro";
	$fdata["GoodName"] = "Fecha_de_Registro";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Fecha_de_Registro");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "Fecha de Registro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Fecha de Registro`";

	
	
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


	$tdataep_obligaciones_temp["Fecha de Registro"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Fecha de Registro";
//	Fecha de Creacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Fecha de Creacion";
	$fdata["GoodName"] = "Fecha_de_Creacion";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Fecha_de_Creacion");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "Fecha de Creacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Fecha de Creacion`";

	
	
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


	$tdataep_obligaciones_temp["Fecha de Creacion"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Fecha de Creacion";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Estado");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Estado";

	
	
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


	$tdataep_obligaciones_temp["Estado"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Estado";
//	Valor Actual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Valor Actual";
	$fdata["GoodName"] = "Valor_Actual";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Valor_Actual");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Valor Actual";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Actual`";

	
	
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


	$tdataep_obligaciones_temp["Valor Actual"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Valor Actual";
//	Valor Deducciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Valor Deducciones";
	$fdata["GoodName"] = "Valor_Deducciones";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Valor_Deducciones");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Valor Deducciones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Deducciones`";

	
	
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


	$tdataep_obligaciones_temp["Valor Deducciones"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Valor Deducciones";
//	Valor Oblig no Orden
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Valor Oblig no Orden";
	$fdata["GoodName"] = "Valor_Oblig_no_Orden";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Valor_Oblig_no_Orden");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Valor Oblig no Orden";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Oblig no Orden`";

	
	
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


	$tdataep_obligaciones_temp["Valor Oblig no Orden"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Valor Oblig no Orden";
//	Tipo Identificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Tipo Identificacion";
	$fdata["GoodName"] = "Tipo_Identificacion";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Tipo_Identificacion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Tipo Identificacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Tipo Identificacion`";

	
	
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


	$tdataep_obligaciones_temp["Tipo Identificacion"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Tipo Identificacion";
//	Identificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Identificacion";
	$fdata["GoodName"] = "Identificacion";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Identificacion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Identificacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Identificacion";

	
	
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


	$tdataep_obligaciones_temp["Identificacion"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Identificacion";
//	Nombre Razon Social
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Nombre Razon Social";
	$fdata["GoodName"] = "Nombre_Razon_Social";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Nombre_Razon_Social");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Nombre Razon Social";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Nombre Razon Social`";

	
	
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


	$tdataep_obligaciones_temp["Nombre Razon Social"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Nombre Razon Social";
//	Medio de Pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Medio de Pago";
	$fdata["GoodName"] = "Medio_de_Pago";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Medio_de_Pago");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Medio de Pago";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Medio de Pago`";

	
	
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


	$tdataep_obligaciones_temp["Medio de Pago"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Medio de Pago";
//	Tipo Cuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Tipo Cuenta";
	$fdata["GoodName"] = "Tipo_Cuenta";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Tipo_Cuenta");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Tipo Cuenta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Tipo Cuenta`";

	
	
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


	$tdataep_obligaciones_temp["Tipo Cuenta"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Tipo Cuenta";
//	Numero Cuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Numero Cuenta";
	$fdata["GoodName"] = "Numero_Cuenta";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Numero_Cuenta");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Numero Cuenta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Numero Cuenta`";

	
	
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


	$tdataep_obligaciones_temp["Numero Cuenta"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Numero Cuenta";
//	Estado Cuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Estado Cuenta";
	$fdata["GoodName"] = "Estado_Cuenta";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Estado_Cuenta");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Estado Cuenta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Estado Cuenta`";

	
	
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


	$tdataep_obligaciones_temp["Estado Cuenta"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Estado Cuenta";
//	Entidad Nit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Entidad Nit";
	$fdata["GoodName"] = "Entidad_Nit";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Entidad_Nit");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Entidad Nit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Entidad Nit`";

	
	
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


	$tdataep_obligaciones_temp["Entidad Nit"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Entidad Nit";
//	Entidad Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Entidad Descripcion";
	$fdata["GoodName"] = "Entidad_Descripcion";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Entidad_Descripcion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Entidad Descripcion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Entidad Descripcion`";

	
	
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


	$tdataep_obligaciones_temp["Entidad Descripcion"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Entidad Descripcion";
//	Dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Dependencia";
	$fdata["GoodName"] = "Dependencia";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Dependencia");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Dependencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Dependencia";

	
	
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


	$tdataep_obligaciones_temp["Dependencia"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Dependencia";
//	Dependencia Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Dependencia Descripcion";
	$fdata["GoodName"] = "Dependencia_Descripcion";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Dependencia_Descripcion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Dependencia Descripcion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Dependencia Descripcion`";

	
	
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


	$tdataep_obligaciones_temp["Dependencia Descripcion"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Dependencia Descripcion";
//	Rubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Rubro";
	$fdata["GoodName"] = "Rubro";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Rubro");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Rubro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Rubro";

	
	
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


	$tdataep_obligaciones_temp["Rubro"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Rubro";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Descripcion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Descripcion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Descripcion";

	
	
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


	$tdataep_obligaciones_temp["Descripcion"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Descripcion";
//	Valor Inicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Valor Inicial";
	$fdata["GoodName"] = "Valor_Inicial";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Valor_Inicial");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Valor Inicial";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Inicial`";

	
	
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


	$tdataep_obligaciones_temp["Valor Inicial"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Valor Inicial";
//	Valor Operaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Valor Operaciones";
	$fdata["GoodName"] = "Valor_Operaciones";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Valor_Operaciones");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Valor Operaciones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Operaciones`";

	
	
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


	$tdataep_obligaciones_temp["Valor Operaciones"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Valor Operaciones";
//	Valor Actual1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Valor Actual1";
	$fdata["GoodName"] = "Valor_Actual1";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Valor_Actual1");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Valor Actual1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Actual1`";

	
	
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


	$tdataep_obligaciones_temp["Valor Actual1"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Valor Actual1";
//	Saldo por Utilizar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Saldo por Utilizar";
	$fdata["GoodName"] = "Saldo_por_Utilizar";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Saldo_por_Utilizar");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Saldo por Utilizar";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Saldo por Utilizar`";

	
	
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


	$tdataep_obligaciones_temp["Saldo por Utilizar"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Saldo por Utilizar";
//	Fuente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Fuente";
	$fdata["GoodName"] = "Fuente";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Fuente");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Fuente";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fuente";

	
	
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


	$tdataep_obligaciones_temp["Fuente"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Fuente";
//	Situacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Situacion";
	$fdata["GoodName"] = "Situacion";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Situacion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Situacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Situacion";

	
	
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


	$tdataep_obligaciones_temp["Situacion"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Situacion";
//	Recurso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Recurso";
	$fdata["GoodName"] = "Recurso";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Recurso");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Recurso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Recurso";

	
	
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


	$tdataep_obligaciones_temp["Recurso"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Recurso";
//	Concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "Concepto";
	$fdata["GoodName"] = "Concepto";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Concepto");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Concepto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Concepto";

	
	
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


	$tdataep_obligaciones_temp["Concepto"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Concepto";
//	Solicitud CDP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Solicitud CDP";
	$fdata["GoodName"] = "Solicitud_CDP";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Solicitud_CDP");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Solicitud CDP";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Solicitud CDP`";

	
	
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


	$tdataep_obligaciones_temp["Solicitud CDP"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Solicitud CDP";
//	CDP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "CDP";
	$fdata["GoodName"] = "CDP";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","CDP");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "CDP";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CDP";

	
	
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


	$tdataep_obligaciones_temp["CDP"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "CDP";
//	Compromisos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "Compromisos";
	$fdata["GoodName"] = "Compromisos";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Compromisos");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Compromisos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Compromisos";

	
	
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


	$tdataep_obligaciones_temp["Compromisos"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Compromisos";
//	Cuentas por Pagar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Cuentas por Pagar";
	$fdata["GoodName"] = "Cuentas_por_Pagar";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Cuentas_por_Pagar");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Cuentas por Pagar";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Cuentas por Pagar`";

	
	
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


	$tdataep_obligaciones_temp["Cuentas por Pagar"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Cuentas por Pagar";
//	Fecha Cuentas por Pagar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Fecha Cuentas por Pagar";
	$fdata["GoodName"] = "Fecha_Cuentas_por_Pagar";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Fecha_Cuentas_por_Pagar");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "Fecha Cuentas por Pagar";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Fecha Cuentas por Pagar`";

	
	
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


	$tdataep_obligaciones_temp["Fecha Cuentas por Pagar"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Fecha Cuentas por Pagar";
//	Obligaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Obligaciones";
	$fdata["GoodName"] = "Obligaciones";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Obligaciones");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Obligaciones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Obligaciones";

	
	
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


	$tdataep_obligaciones_temp["Obligaciones"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Obligaciones";
//	Ordenes de Pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Ordenes de Pago";
	$fdata["GoodName"] = "Ordenes_de_Pago";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Ordenes_de_Pago");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Ordenes de Pago";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Ordenes de Pago`";

	
	
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


	$tdataep_obligaciones_temp["Ordenes de Pago"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Ordenes de Pago";
//	Reintegros
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Reintegros";
	$fdata["GoodName"] = "Reintegros";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Reintegros");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Reintegros";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Reintegros";

	
	
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


	$tdataep_obligaciones_temp["Reintegros"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Reintegros";
//	Fecha Doc Soporte Compromiso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Fecha Doc Soporte Compromiso";
	$fdata["GoodName"] = "Fecha_Doc_Soporte_Compromiso";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Fecha_Doc_Soporte_Compromiso");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "Fecha Doc Soporte Compromiso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Fecha Doc Soporte Compromiso`";

	
	
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


	$tdataep_obligaciones_temp["Fecha Doc Soporte Compromiso"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Fecha Doc Soporte Compromiso";
//	Tipo Doc Soporte Compromiso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Tipo Doc Soporte Compromiso";
	$fdata["GoodName"] = "Tipo_Doc_Soporte_Compromiso";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Tipo_Doc_Soporte_Compromiso");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Tipo Doc Soporte Compromiso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Tipo Doc Soporte Compromiso`";

	
	
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


	$tdataep_obligaciones_temp["Tipo Doc Soporte Compromiso"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Tipo Doc Soporte Compromiso";
//	Num Doc Soporte Compromiso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Num Doc Soporte Compromiso";
	$fdata["GoodName"] = "Num_Doc_Soporte_Compromiso";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Num_Doc_Soporte_Compromiso");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Num Doc Soporte Compromiso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Num Doc Soporte Compromiso`";

	
	
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


	$tdataep_obligaciones_temp["Num Doc Soporte Compromiso"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Num Doc Soporte Compromiso";
//	Objeto del Compromiso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "Objeto del Compromiso";
	$fdata["GoodName"] = "Objeto_del_Compromiso";
	$fdata["ownerTable"] = "ep_obligaciones_temp";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones_temp","Objeto_del_Compromiso");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Objeto del Compromiso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Objeto del Compromiso`";

	
	
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


	$tdataep_obligaciones_temp["Objeto del Compromiso"] = $fdata;
		$tdataep_obligaciones_temp[".searchableFields"][] = "Objeto del Compromiso";


$tables_data["ep_obligaciones_temp"]=&$tdataep_obligaciones_temp;
$field_labels["ep_obligaciones_temp"] = &$fieldLabelsep_obligaciones_temp;
$fieldToolTips["ep_obligaciones_temp"] = &$fieldToolTipsep_obligaciones_temp;
$placeHolders["ep_obligaciones_temp"] = &$placeHoldersep_obligaciones_temp;
$page_titles["ep_obligaciones_temp"] = &$pageTitlesep_obligaciones_temp;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ep_obligaciones_temp"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ep_obligaciones_temp"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_ep_obligaciones_temp()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "OID,  	`Numero Documento`,  	`Fecha de Registro`,  	`Fecha de Creacion`,  	Estado,  	`Valor Actual`,  	`Valor Deducciones`,  	`Valor Oblig no Orden`,  	`Tipo Identificacion`,  	Identificacion,  	`Nombre Razon Social`,  	`Medio de Pago`,  	`Tipo Cuenta`,  	`Numero Cuenta`,  	`Estado Cuenta`,  	`Entidad Nit`,  	`Entidad Descripcion`,  	Dependencia,  	`Dependencia Descripcion`,  	Rubro,  	Descripcion,  	`Valor Inicial`,  	`Valor Operaciones`,  	`Valor Actual1`,  	`Saldo por Utilizar`,  	Fuente,  	Situacion,  	Recurso,  	Concepto,  	`Solicitud CDP`,  	CDP,  	Compromisos,  	`Cuentas por Pagar`,  	`Fecha Cuentas por Pagar`,  	Obligaciones,  	`Ordenes de Pago`,  	Reintegros,  	`Fecha Doc Soporte Compromiso`,  	`Tipo Doc Soporte Compromiso`,  	`Num Doc Soporte Compromiso`,  	`Objeto del Compromiso`";
$proto0["m_strFrom"] = "FROM ep_obligaciones_temp";
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
	"m_strName" => "OID",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto6["m_sql"] = "OID";
$proto6["m_srcTableName"] = "ep_obligaciones_temp";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero Documento",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto8["m_sql"] = "`Numero Documento`";
$proto8["m_srcTableName"] = "ep_obligaciones_temp";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de Registro",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto10["m_sql"] = "`Fecha de Registro`";
$proto10["m_srcTableName"] = "ep_obligaciones_temp";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de Creacion",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto12["m_sql"] = "`Fecha de Creacion`";
$proto12["m_srcTableName"] = "ep_obligaciones_temp";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto14["m_sql"] = "Estado";
$proto14["m_srcTableName"] = "ep_obligaciones_temp";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Actual",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto16["m_sql"] = "`Valor Actual`";
$proto16["m_srcTableName"] = "ep_obligaciones_temp";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Deducciones",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto18["m_sql"] = "`Valor Deducciones`";
$proto18["m_srcTableName"] = "ep_obligaciones_temp";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Oblig no Orden",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto20["m_sql"] = "`Valor Oblig no Orden`";
$proto20["m_srcTableName"] = "ep_obligaciones_temp";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo Identificacion",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto22["m_sql"] = "`Tipo Identificacion`";
$proto22["m_srcTableName"] = "ep_obligaciones_temp";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Identificacion",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto24["m_sql"] = "Identificacion";
$proto24["m_srcTableName"] = "ep_obligaciones_temp";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre Razon Social",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto26["m_sql"] = "`Nombre Razon Social`";
$proto26["m_srcTableName"] = "ep_obligaciones_temp";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Medio de Pago",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto28["m_sql"] = "`Medio de Pago`";
$proto28["m_srcTableName"] = "ep_obligaciones_temp";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo Cuenta",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto30["m_sql"] = "`Tipo Cuenta`";
$proto30["m_srcTableName"] = "ep_obligaciones_temp";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero Cuenta",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto32["m_sql"] = "`Numero Cuenta`";
$proto32["m_srcTableName"] = "ep_obligaciones_temp";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado Cuenta",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto34["m_sql"] = "`Estado Cuenta`";
$proto34["m_srcTableName"] = "ep_obligaciones_temp";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Entidad Nit",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto36["m_sql"] = "`Entidad Nit`";
$proto36["m_srcTableName"] = "ep_obligaciones_temp";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Entidad Descripcion",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto38["m_sql"] = "`Entidad Descripcion`";
$proto38["m_srcTableName"] = "ep_obligaciones_temp";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Dependencia",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto40["m_sql"] = "Dependencia";
$proto40["m_srcTableName"] = "ep_obligaciones_temp";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Dependencia Descripcion",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto42["m_sql"] = "`Dependencia Descripcion`";
$proto42["m_srcTableName"] = "ep_obligaciones_temp";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Rubro",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto44["m_sql"] = "Rubro";
$proto44["m_srcTableName"] = "ep_obligaciones_temp";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto46["m_sql"] = "Descripcion";
$proto46["m_srcTableName"] = "ep_obligaciones_temp";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Inicial",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto48["m_sql"] = "`Valor Inicial`";
$proto48["m_srcTableName"] = "ep_obligaciones_temp";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Operaciones",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto50["m_sql"] = "`Valor Operaciones`";
$proto50["m_srcTableName"] = "ep_obligaciones_temp";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Actual1",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto52["m_sql"] = "`Valor Actual1`";
$proto52["m_srcTableName"] = "ep_obligaciones_temp";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "Saldo por Utilizar",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto54["m_sql"] = "`Saldo por Utilizar`";
$proto54["m_srcTableName"] = "ep_obligaciones_temp";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "Fuente",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto56["m_sql"] = "Fuente";
$proto56["m_srcTableName"] = "ep_obligaciones_temp";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "Situacion",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto58["m_sql"] = "Situacion";
$proto58["m_srcTableName"] = "ep_obligaciones_temp";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Recurso",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto60["m_sql"] = "Recurso";
$proto60["m_srcTableName"] = "ep_obligaciones_temp";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "Concepto",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto62["m_sql"] = "Concepto";
$proto62["m_srcTableName"] = "ep_obligaciones_temp";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "Solicitud CDP",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto64["m_sql"] = "`Solicitud CDP`";
$proto64["m_srcTableName"] = "ep_obligaciones_temp";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "CDP",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto66["m_sql"] = "CDP";
$proto66["m_srcTableName"] = "ep_obligaciones_temp";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "Compromisos",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto68["m_sql"] = "Compromisos";
$proto68["m_srcTableName"] = "ep_obligaciones_temp";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "Cuentas por Pagar",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto70["m_sql"] = "`Cuentas por Pagar`";
$proto70["m_srcTableName"] = "ep_obligaciones_temp";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha Cuentas por Pagar",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto72["m_sql"] = "`Fecha Cuentas por Pagar`";
$proto72["m_srcTableName"] = "ep_obligaciones_temp";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "Obligaciones",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto74["m_sql"] = "Obligaciones";
$proto74["m_srcTableName"] = "ep_obligaciones_temp";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Ordenes de Pago",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto76["m_sql"] = "`Ordenes de Pago`";
$proto76["m_srcTableName"] = "ep_obligaciones_temp";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "Reintegros",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto78["m_sql"] = "Reintegros";
$proto78["m_srcTableName"] = "ep_obligaciones_temp";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha Doc Soporte Compromiso",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto80["m_sql"] = "`Fecha Doc Soporte Compromiso`";
$proto80["m_srcTableName"] = "ep_obligaciones_temp";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo Doc Soporte Compromiso",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto82["m_sql"] = "`Tipo Doc Soporte Compromiso`";
$proto82["m_srcTableName"] = "ep_obligaciones_temp";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "Num Doc Soporte Compromiso",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto84["m_sql"] = "`Num Doc Soporte Compromiso`";
$proto84["m_srcTableName"] = "ep_obligaciones_temp";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "Objeto del Compromiso",
	"m_strTable" => "ep_obligaciones_temp",
	"m_srcTableName" => "ep_obligaciones_temp"
));

$proto86["m_sql"] = "`Objeto del Compromiso`";
$proto86["m_srcTableName"] = "ep_obligaciones_temp";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto88=array();
$proto88["m_link"] = "SQLL_MAIN";
			$proto89=array();
$proto89["m_strName"] = "ep_obligaciones_temp";
$proto89["m_srcTableName"] = "ep_obligaciones_temp";
$proto89["m_columns"] = array();
$proto89["m_columns"][] = "OID";
$proto89["m_columns"][] = "Numero Documento";
$proto89["m_columns"][] = "Fecha de Registro";
$proto89["m_columns"][] = "Fecha de Creacion";
$proto89["m_columns"][] = "Estado";
$proto89["m_columns"][] = "Valor Actual";
$proto89["m_columns"][] = "Valor Deducciones";
$proto89["m_columns"][] = "Valor Oblig no Orden";
$proto89["m_columns"][] = "Tipo Identificacion";
$proto89["m_columns"][] = "Identificacion";
$proto89["m_columns"][] = "Nombre Razon Social";
$proto89["m_columns"][] = "Medio de Pago";
$proto89["m_columns"][] = "Tipo Cuenta";
$proto89["m_columns"][] = "Numero Cuenta";
$proto89["m_columns"][] = "Estado Cuenta";
$proto89["m_columns"][] = "Entidad Nit";
$proto89["m_columns"][] = "Entidad Descripcion";
$proto89["m_columns"][] = "Dependencia";
$proto89["m_columns"][] = "Dependencia Descripcion";
$proto89["m_columns"][] = "Rubro";
$proto89["m_columns"][] = "Descripcion";
$proto89["m_columns"][] = "Valor Inicial";
$proto89["m_columns"][] = "Valor Operaciones";
$proto89["m_columns"][] = "Valor Actual1";
$proto89["m_columns"][] = "Saldo por Utilizar";
$proto89["m_columns"][] = "Fuente";
$proto89["m_columns"][] = "Situacion";
$proto89["m_columns"][] = "Recurso";
$proto89["m_columns"][] = "Concepto";
$proto89["m_columns"][] = "Solicitud CDP";
$proto89["m_columns"][] = "CDP";
$proto89["m_columns"][] = "Compromisos";
$proto89["m_columns"][] = "Cuentas por Pagar";
$proto89["m_columns"][] = "Fecha Cuentas por Pagar";
$proto89["m_columns"][] = "Obligaciones";
$proto89["m_columns"][] = "Ordenes de Pago";
$proto89["m_columns"][] = "Reintegros";
$proto89["m_columns"][] = "Fecha Doc Soporte Compromiso";
$proto89["m_columns"][] = "Tipo Doc Soporte Compromiso";
$proto89["m_columns"][] = "Num Doc Soporte Compromiso";
$proto89["m_columns"][] = "Objeto del Compromiso";
$obj = new SQLTable($proto89);

$proto88["m_table"] = $obj;
$proto88["m_sql"] = "ep_obligaciones_temp";
$proto88["m_alias"] = "";
$proto88["m_srcTableName"] = "ep_obligaciones_temp";
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
$proto0["m_srcTableName"]="ep_obligaciones_temp";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ep_obligaciones_temp = createSqlQuery_ep_obligaciones_temp();


	
								;

																																									

$tdataep_obligaciones_temp[".sqlquery"] = $queryData_ep_obligaciones_temp;

include_once(getabspath("include/ep_obligaciones_temp_events.php"));
$tableEvents["ep_obligaciones_temp"] = new eventclass_ep_obligaciones_temp;
$tdataep_obligaciones_temp[".hasEvents"] = true;

?>