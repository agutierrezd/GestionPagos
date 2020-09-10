<?php



$tdataep_op = array();
$tdataep_op[".searchableFields"] = array();
$tdataep_op[".ShortName"] = "ep_op";
$tdataep_op[".OwnerID"] = "";
$tdataep_op[".OriginalTable"] = "ep_op";


$tdataep_op[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataep_op[".originalPagesByType"] = $tdataep_op[".pagesByType"];
$tdataep_op[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataep_op[".originalPages"] = $tdataep_op[".pages"];
$tdataep_op[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataep_op[".originalDefaultPages"] = $tdataep_op[".defaultPages"];

//	field labels
$fieldLabelsep_op = array();
$fieldToolTipsep_op = array();
$pageTitlesep_op = array();
$placeHoldersep_op = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsep_op["Spanish"] = array();
	$fieldToolTipsep_op["Spanish"] = array();
	$placeHoldersep_op["Spanish"] = array();
	$pageTitlesep_op["Spanish"] = array();
	$fieldLabelsep_op["Spanish"]["OP_ID"] = "OP ID";
	$fieldToolTipsep_op["Spanish"]["OP_ID"] = "";
	$placeHoldersep_op["Spanish"]["OP_ID"] = "";
	$fieldLabelsep_op["Spanish"]["Numero_Documento"] = "Numero Documento";
	$fieldToolTipsep_op["Spanish"]["Numero_Documento"] = "";
	$placeHoldersep_op["Spanish"]["Numero_Documento"] = "";
	$fieldLabelsep_op["Spanish"]["Fecha_de_pago"] = "Fecha de pago";
	$fieldToolTipsep_op["Spanish"]["Fecha_de_pago"] = "";
	$placeHoldersep_op["Spanish"]["Fecha_de_pago"] = "";
	$fieldLabelsep_op["Spanish"]["Estado"] = "Estado";
	$fieldToolTipsep_op["Spanish"]["Estado"] = "";
	$placeHoldersep_op["Spanish"]["Estado"] = "";
	$fieldLabelsep_op["Spanish"]["Valor_Bruto"] = "Valor Bruto";
	$fieldToolTipsep_op["Spanish"]["Valor_Bruto"] = "";
	$placeHoldersep_op["Spanish"]["Valor_Bruto"] = "";
	$fieldLabelsep_op["Spanish"]["Valor_Deducciones"] = "Valor Deducciones";
	$fieldToolTipsep_op["Spanish"]["Valor_Deducciones"] = "";
	$placeHoldersep_op["Spanish"]["Valor_Deducciones"] = "";
	$fieldLabelsep_op["Spanish"]["Valor_Neto"] = "Valor Neto";
	$fieldToolTipsep_op["Spanish"]["Valor_Neto"] = "";
	$placeHoldersep_op["Spanish"]["Valor_Neto"] = "";
	$fieldLabelsep_op["Spanish"]["Tipo_Beneficiario"] = "Tipo Beneficiario";
	$fieldToolTipsep_op["Spanish"]["Tipo_Beneficiario"] = "";
	$placeHoldersep_op["Spanish"]["Tipo_Beneficiario"] = "";
	$fieldLabelsep_op["Spanish"]["Vigencia_Presupuestal"] = "Vigencia Presupuestal";
	$fieldToolTipsep_op["Spanish"]["Vigencia_Presupuestal"] = "";
	$placeHoldersep_op["Spanish"]["Vigencia_Presupuestal"] = "";
	$fieldLabelsep_op["Spanish"]["Tipo_Identificacion"] = "Tipo Identificacion";
	$fieldToolTipsep_op["Spanish"]["Tipo_Identificacion"] = "";
	$placeHoldersep_op["Spanish"]["Tipo_Identificacion"] = "";
	$fieldLabelsep_op["Spanish"]["Identificacion"] = "Identificacion";
	$fieldToolTipsep_op["Spanish"]["Identificacion"] = "";
	$placeHoldersep_op["Spanish"]["Identificacion"] = "";
	$fieldLabelsep_op["Spanish"]["Nombre_Razon_Social"] = "Nombre Razon Social";
	$fieldToolTipsep_op["Spanish"]["Nombre_Razon_Social"] = "";
	$placeHoldersep_op["Spanish"]["Nombre_Razon_Social"] = "";
	$fieldLabelsep_op["Spanish"]["Medio_de_Pago"] = "Medio de Pago";
	$fieldToolTipsep_op["Spanish"]["Medio_de_Pago"] = "";
	$placeHoldersep_op["Spanish"]["Medio_de_Pago"] = "";
	$fieldLabelsep_op["Spanish"]["Tipo_Cuenta"] = "Tipo Cuenta";
	$fieldToolTipsep_op["Spanish"]["Tipo_Cuenta"] = "";
	$placeHoldersep_op["Spanish"]["Tipo_Cuenta"] = "";
	$fieldLabelsep_op["Spanish"]["Numero_Cuenta"] = "Numero Cuenta";
	$fieldToolTipsep_op["Spanish"]["Numero_Cuenta"] = "";
	$placeHoldersep_op["Spanish"]["Numero_Cuenta"] = "";
	$fieldLabelsep_op["Spanish"]["Estado_Cuenta"] = "Estado Cuenta";
	$fieldToolTipsep_op["Spanish"]["Estado_Cuenta"] = "";
	$placeHoldersep_op["Spanish"]["Estado_Cuenta"] = "";
	$fieldLabelsep_op["Spanish"]["Entidad_Nit"] = "Entidad Nit";
	$fieldToolTipsep_op["Spanish"]["Entidad_Nit"] = "";
	$placeHoldersep_op["Spanish"]["Entidad_Nit"] = "";
	$fieldLabelsep_op["Spanish"]["Entidad_Descripcion"] = "Entidad Descripcion";
	$fieldToolTipsep_op["Spanish"]["Entidad_Descripcion"] = "";
	$placeHoldersep_op["Spanish"]["Entidad_Descripcion"] = "";
	$fieldLabelsep_op["Spanish"]["Dependencia"] = "Dependencia";
	$fieldToolTipsep_op["Spanish"]["Dependencia"] = "";
	$placeHoldersep_op["Spanish"]["Dependencia"] = "";
	$fieldLabelsep_op["Spanish"]["Dependencia_Descripcion"] = "Dependencia Descripcion";
	$fieldToolTipsep_op["Spanish"]["Dependencia_Descripcion"] = "";
	$placeHoldersep_op["Spanish"]["Dependencia_Descripcion"] = "";
	$fieldLabelsep_op["Spanish"]["Rubro"] = "Rubro";
	$fieldToolTipsep_op["Spanish"]["Rubro"] = "";
	$placeHoldersep_op["Spanish"]["Rubro"] = "";
	$fieldLabelsep_op["Spanish"]["Descripcion"] = "Descripcion";
	$fieldToolTipsep_op["Spanish"]["Descripcion"] = "";
	$placeHoldersep_op["Spanish"]["Descripcion"] = "";
	$fieldLabelsep_op["Spanish"]["Fuente"] = "Fuente";
	$fieldToolTipsep_op["Spanish"]["Fuente"] = "";
	$placeHoldersep_op["Spanish"]["Fuente"] = "";
	$fieldLabelsep_op["Spanish"]["Recurso"] = "Recurso";
	$fieldToolTipsep_op["Spanish"]["Recurso"] = "";
	$placeHoldersep_op["Spanish"]["Recurso"] = "";
	$fieldLabelsep_op["Spanish"]["Sit"] = "Sit";
	$fieldToolTipsep_op["Spanish"]["Sit"] = "";
	$placeHoldersep_op["Spanish"]["Sit"] = "";
	$fieldLabelsep_op["Spanish"]["Valor_Pesos"] = "Valor Pesos";
	$fieldToolTipsep_op["Spanish"]["Valor_Pesos"] = "";
	$placeHoldersep_op["Spanish"]["Valor_Pesos"] = "";
	$fieldLabelsep_op["Spanish"]["Valor_Moneda"] = "Valor Moneda";
	$fieldToolTipsep_op["Spanish"]["Valor_Moneda"] = "";
	$placeHoldersep_op["Spanish"]["Valor_Moneda"] = "";
	$fieldLabelsep_op["Spanish"]["Valor_Reintegrado_Pesos"] = "Valor Reintegrado Pesos";
	$fieldToolTipsep_op["Spanish"]["Valor_Reintegrado_Pesos"] = "";
	$placeHoldersep_op["Spanish"]["Valor_Reintegrado_Pesos"] = "";
	$fieldLabelsep_op["Spanish"]["Valor_Reintegrado_Moneda"] = "Valor Reintegrado Moneda";
	$fieldToolTipsep_op["Spanish"]["Valor_Reintegrado_Moneda"] = "";
	$placeHoldersep_op["Spanish"]["Valor_Reintegrado_Moneda"] = "";
	$fieldLabelsep_op["Spanish"]["Tesoreria_Pagadora"] = "Tesoreria Pagadora";
	$fieldToolTipsep_op["Spanish"]["Tesoreria_Pagadora"] = "";
	$placeHoldersep_op["Spanish"]["Tesoreria_Pagadora"] = "";
	$fieldLabelsep_op["Spanish"]["Identificacion_Pagaduria"] = "Identificacion Pagaduria";
	$fieldToolTipsep_op["Spanish"]["Identificacion_Pagaduria"] = "";
	$placeHoldersep_op["Spanish"]["Identificacion_Pagaduria"] = "";
	$fieldLabelsep_op["Spanish"]["Cuenta_Pagaduria"] = "Cuenta Pagaduria";
	$fieldToolTipsep_op["Spanish"]["Cuenta_Pagaduria"] = "";
	$placeHoldersep_op["Spanish"]["Cuenta_Pagaduria"] = "";
	$fieldLabelsep_op["Spanish"]["Endosada"] = "Endosada";
	$fieldToolTipsep_op["Spanish"]["Endosada"] = "";
	$placeHoldersep_op["Spanish"]["Endosada"] = "";
	$fieldLabelsep_op["Spanish"]["Tipo_Identificacion1"] = "Tipo Identificacion1";
	$fieldToolTipsep_op["Spanish"]["Tipo_Identificacion1"] = "";
	$placeHoldersep_op["Spanish"]["Tipo_Identificacion1"] = "";
	$fieldLabelsep_op["Spanish"]["Identificacion1"] = "Identificacion1";
	$fieldToolTipsep_op["Spanish"]["Identificacion1"] = "";
	$placeHoldersep_op["Spanish"]["Identificacion1"] = "";
	$fieldLabelsep_op["Spanish"]["Razon_social"] = "Razon Social";
	$fieldToolTipsep_op["Spanish"]["Razon_social"] = "";
	$placeHoldersep_op["Spanish"]["Razon_social"] = "";
	$fieldLabelsep_op["Spanish"]["Numero_Cuenta1"] = "Numero Cuenta1";
	$fieldToolTipsep_op["Spanish"]["Numero_Cuenta1"] = "";
	$placeHoldersep_op["Spanish"]["Numero_Cuenta1"] = "";
	$fieldLabelsep_op["Spanish"]["Concepto_Pago"] = "Concepto Pago";
	$fieldToolTipsep_op["Spanish"]["Concepto_Pago"] = "";
	$placeHoldersep_op["Spanish"]["Concepto_Pago"] = "";
	$fieldLabelsep_op["Spanish"]["Solicitud_CDP"] = "Solicitud CDP";
	$fieldToolTipsep_op["Spanish"]["Solicitud_CDP"] = "";
	$placeHoldersep_op["Spanish"]["Solicitud_CDP"] = "";
	$fieldLabelsep_op["Spanish"]["CDP"] = "CDP";
	$fieldToolTipsep_op["Spanish"]["CDP"] = "";
	$placeHoldersep_op["Spanish"]["CDP"] = "";
	$fieldLabelsep_op["Spanish"]["Compromisos"] = "Compromisos";
	$fieldToolTipsep_op["Spanish"]["Compromisos"] = "";
	$placeHoldersep_op["Spanish"]["Compromisos"] = "";
	$fieldLabelsep_op["Spanish"]["Cuentas_por_Pagar"] = "Cuentas por Pagar";
	$fieldToolTipsep_op["Spanish"]["Cuentas_por_Pagar"] = "";
	$placeHoldersep_op["Spanish"]["Cuentas_por_Pagar"] = "";
	$fieldLabelsep_op["Spanish"]["Fecha_Cuentas_por_Pagar"] = "Fecha Cuentas por Pagar";
	$fieldToolTipsep_op["Spanish"]["Fecha_Cuentas_por_Pagar"] = "";
	$placeHoldersep_op["Spanish"]["Fecha_Cuentas_por_Pagar"] = "";
	$fieldLabelsep_op["Spanish"]["Obligaciones"] = "Obligaciones";
	$fieldToolTipsep_op["Spanish"]["Obligaciones"] = "";
	$placeHoldersep_op["Spanish"]["Obligaciones"] = "";
	$fieldLabelsep_op["Spanish"]["Ordenes_de_Pago"] = "Ordenes de Pago";
	$fieldToolTipsep_op["Spanish"]["Ordenes_de_Pago"] = "";
	$placeHoldersep_op["Spanish"]["Ordenes_de_Pago"] = "";
	$fieldLabelsep_op["Spanish"]["Reintegros"] = "Reintegros";
	$fieldToolTipsep_op["Spanish"]["Reintegros"] = "";
	$placeHoldersep_op["Spanish"]["Reintegros"] = "";
	$fieldLabelsep_op["Spanish"]["Fecha_Doc_Soporte_Compromiso"] = "Fecha Doc Soporte Compromiso";
	$fieldToolTipsep_op["Spanish"]["Fecha_Doc_Soporte_Compromiso"] = "";
	$placeHoldersep_op["Spanish"]["Fecha_Doc_Soporte_Compromiso"] = "";
	$fieldLabelsep_op["Spanish"]["Tipo_Doc_Soporte_Compromiso"] = "Tipo Doc Soporte Compromiso";
	$fieldToolTipsep_op["Spanish"]["Tipo_Doc_Soporte_Compromiso"] = "";
	$placeHoldersep_op["Spanish"]["Tipo_Doc_Soporte_Compromiso"] = "";
	$fieldLabelsep_op["Spanish"]["Num_Doc_Soporte_Compromiso"] = "Num Doc Soporte Compromiso";
	$fieldToolTipsep_op["Spanish"]["Num_Doc_Soporte_Compromiso"] = "";
	$placeHoldersep_op["Spanish"]["Num_Doc_Soporte_Compromiso"] = "";
	$fieldLabelsep_op["Spanish"]["Objeto_del_Compromiso"] = "Objeto del Compromiso";
	$fieldToolTipsep_op["Spanish"]["Objeto_del_Compromiso"] = "";
	$placeHoldersep_op["Spanish"]["Objeto_del_Compromiso"] = "";
	$fieldLabelsep_op["Spanish"]["Fecha_de_Registro"] = "Fecha de Registro";
	$fieldToolTipsep_op["Spanish"]["Fecha_de_Registro"] = "";
	$placeHoldersep_op["Spanish"]["Fecha_de_Registro"] = "";
	if (count($fieldToolTipsep_op["Spanish"]))
		$tdataep_op[".isUseToolTips"] = true;
}


	$tdataep_op[".NCSearch"] = true;



$tdataep_op[".shortTableName"] = "ep_op";
$tdataep_op[".nSecOptions"] = 0;

$tdataep_op[".mainTableOwnerID"] = "";
$tdataep_op[".entityType"] = 0;

$tdataep_op[".strOriginalTableName"] = "ep_op";

	



$tdataep_op[".showAddInPopup"] = false;

$tdataep_op[".showEditInPopup"] = false;

$tdataep_op[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataep_op[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataep_op[".listAjax"] = false;
//	temporary
$tdataep_op[".listAjax"] = false;

	$tdataep_op[".audit"] = false;

	$tdataep_op[".locking"] = false;


$pages = $tdataep_op[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataep_op[".edit"] = true;
	$tdataep_op[".afterEditAction"] = 1;
	$tdataep_op[".closePopupAfterEdit"] = 1;
	$tdataep_op[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataep_op[".add"] = true;
$tdataep_op[".afterAddAction"] = 1;
$tdataep_op[".closePopupAfterAdd"] = 1;
$tdataep_op[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataep_op[".list"] = true;
}



$tdataep_op[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataep_op[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataep_op[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataep_op[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataep_op[".printFriendly"] = true;
}



$tdataep_op[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataep_op[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataep_op[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataep_op[".isUseAjaxSuggest"] = true;

$tdataep_op[".rowHighlite"] = true;





$tdataep_op[".ajaxCodeSnippetAdded"] = false;

$tdataep_op[".buttonsAdded"] = false;

$tdataep_op[".addPageEvents"] = false;

// use timepicker for search panel
$tdataep_op[".isUseTimeForSearch"] = false;


$tdataep_op[".badgeColor"] = "DAA520";


$tdataep_op[".allSearchFields"] = array();
$tdataep_op[".filterFields"] = array();
$tdataep_op[".requiredSearchFields"] = array();

$tdataep_op[".googleLikeFields"] = array();
$tdataep_op[".googleLikeFields"][] = "OP_ID";
$tdataep_op[".googleLikeFields"][] = "Numero Documento";
$tdataep_op[".googleLikeFields"][] = "Fecha de Registro";
$tdataep_op[".googleLikeFields"][] = "Fecha de pago";
$tdataep_op[".googleLikeFields"][] = "Estado";
$tdataep_op[".googleLikeFields"][] = "Valor Bruto";
$tdataep_op[".googleLikeFields"][] = "Valor Deducciones";
$tdataep_op[".googleLikeFields"][] = "Valor Neto";
$tdataep_op[".googleLikeFields"][] = "Tipo Beneficiario";
$tdataep_op[".googleLikeFields"][] = "Vigencia Presupuestal";
$tdataep_op[".googleLikeFields"][] = "Tipo Identificacion";
$tdataep_op[".googleLikeFields"][] = "Identificacion";
$tdataep_op[".googleLikeFields"][] = "Nombre Razon Social";
$tdataep_op[".googleLikeFields"][] = "Medio de Pago";
$tdataep_op[".googleLikeFields"][] = "Tipo Cuenta";
$tdataep_op[".googleLikeFields"][] = "Numero Cuenta";
$tdataep_op[".googleLikeFields"][] = "Estado Cuenta";
$tdataep_op[".googleLikeFields"][] = "Entidad Nit";
$tdataep_op[".googleLikeFields"][] = "Entidad Descripcion";
$tdataep_op[".googleLikeFields"][] = "Dependencia";
$tdataep_op[".googleLikeFields"][] = "Dependencia Descripcion";
$tdataep_op[".googleLikeFields"][] = "Rubro";
$tdataep_op[".googleLikeFields"][] = "Descripcion";
$tdataep_op[".googleLikeFields"][] = "Fuente";
$tdataep_op[".googleLikeFields"][] = "Recurso";
$tdataep_op[".googleLikeFields"][] = "Sit";
$tdataep_op[".googleLikeFields"][] = "Valor Pesos";
$tdataep_op[".googleLikeFields"][] = "Valor Moneda";
$tdataep_op[".googleLikeFields"][] = "Valor Reintegrado Pesos";
$tdataep_op[".googleLikeFields"][] = "Valor Reintegrado Moneda";
$tdataep_op[".googleLikeFields"][] = "Tesoreria Pagadora";
$tdataep_op[".googleLikeFields"][] = "Identificacion Pagaduria";
$tdataep_op[".googleLikeFields"][] = "Cuenta Pagaduria";
$tdataep_op[".googleLikeFields"][] = "Endosada";
$tdataep_op[".googleLikeFields"][] = "Tipo Identificacion1";
$tdataep_op[".googleLikeFields"][] = "Identificacion1";
$tdataep_op[".googleLikeFields"][] = "Razon social";
$tdataep_op[".googleLikeFields"][] = "Numero Cuenta1";
$tdataep_op[".googleLikeFields"][] = "Concepto Pago";
$tdataep_op[".googleLikeFields"][] = "Solicitud CDP";
$tdataep_op[".googleLikeFields"][] = "CDP";
$tdataep_op[".googleLikeFields"][] = "Compromisos";
$tdataep_op[".googleLikeFields"][] = "Cuentas por Pagar";
$tdataep_op[".googleLikeFields"][] = "Fecha Cuentas por Pagar";
$tdataep_op[".googleLikeFields"][] = "Obligaciones";
$tdataep_op[".googleLikeFields"][] = "Ordenes de Pago";
$tdataep_op[".googleLikeFields"][] = "Reintegros";
$tdataep_op[".googleLikeFields"][] = "Fecha Doc Soporte Compromiso";
$tdataep_op[".googleLikeFields"][] = "Tipo Doc Soporte Compromiso";
$tdataep_op[".googleLikeFields"][] = "Num Doc Soporte Compromiso";
$tdataep_op[".googleLikeFields"][] = "Objeto del Compromiso";



$tdataep_op[".tableType"] = "list";

$tdataep_op[".printerPageOrientation"] = 0;
$tdataep_op[".nPrinterPageScale"] = 100;

$tdataep_op[".nPrinterSplitRecords"] = 40;

$tdataep_op[".geocodingEnabled"] = false;










$tdataep_op[".pageSize"] = 20;

$tdataep_op[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataep_op[".strOrderBy"] = $tstrOrderBy;

$tdataep_op[".orderindexes"] = array();

$tdataep_op[".sqlHead"] = "SELECT OP_ID,  	`Numero Documento`,  	`Fecha de Registro`,  	`Fecha de pago`,  	Estado,  	`Valor Bruto`,  	`Valor Deducciones`,  	`Valor Neto`,  	`Tipo Beneficiario`,  	`Vigencia Presupuestal`,  	`Tipo Identificacion`,  	Identificacion,  	`Nombre Razon Social`,  	`Medio de Pago`,  	`Tipo Cuenta`,  	`Numero Cuenta`,  	`Estado Cuenta`,  	`Entidad Nit`,  	`Entidad Descripcion`,  	Dependencia,  	`Dependencia Descripcion`,  	Rubro,  	Descripcion,  	Fuente,  	Recurso,  	Sit,  	`Valor Pesos`,  	`Valor Moneda`,  	`Valor Reintegrado Pesos`,  	`Valor Reintegrado Moneda`,  	`Tesoreria Pagadora`,  	`Identificacion Pagaduria`,  	`Cuenta Pagaduria`,  	Endosada,  	`Tipo Identificacion1`,  	Identificacion1,  	`Razon social`,  	`Numero Cuenta1`,  	`Concepto Pago`,  	`Solicitud CDP`,  	CDP,  	Compromisos,  	`Cuentas por Pagar`,  	`Fecha Cuentas por Pagar`,  	Obligaciones,  	`Ordenes de Pago`,  	Reintegros,  	`Fecha Doc Soporte Compromiso`,  	`Tipo Doc Soporte Compromiso`,  	`Num Doc Soporte Compromiso`,  	`Objeto del Compromiso`";
$tdataep_op[".sqlFrom"] = "FROM ep_op";
$tdataep_op[".sqlWhereExpr"] = "";
$tdataep_op[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataep_op[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataep_op[".arrGroupsPerPage"] = $arrGPP;

$tdataep_op[".highlightSearchResults"] = true;

$tableKeysep_op = array();
$tableKeysep_op[] = "OP_ID";
$tdataep_op[".Keys"] = $tableKeysep_op;


$tdataep_op[".hideMobileList"] = array();




//	OP_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "OP_ID";
	$fdata["GoodName"] = "OP_ID";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","OP_ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "OP_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OP_ID";

	
	
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


	$tdataep_op["OP_ID"] = $fdata;
		$tdataep_op[".searchableFields"][] = "OP_ID";
//	Numero Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Numero Documento";
	$fdata["GoodName"] = "Numero_Documento";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Numero_Documento");
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


	$tdataep_op["Numero Documento"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Numero Documento";
//	Fecha de Registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fecha de Registro";
	$fdata["GoodName"] = "Fecha_de_Registro";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Fecha_de_Registro");
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "OP_ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataep_op["Fecha de Registro"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Fecha de Registro";
//	Fecha de pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Fecha de pago";
	$fdata["GoodName"] = "Fecha_de_pago";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Fecha_de_pago");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "Fecha de pago";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Fecha de pago`";

	
	
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


	$tdataep_op["Fecha de pago"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Fecha de pago";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Estado");
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "OP_ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataep_op["Estado"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Estado";
//	Valor Bruto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Valor Bruto";
	$fdata["GoodName"] = "Valor_Bruto";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Valor_Bruto");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "Valor Bruto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Bruto`";

	
	
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


	$tdataep_op["Valor Bruto"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Valor Bruto";
//	Valor Deducciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Valor Deducciones";
	$fdata["GoodName"] = "Valor_Deducciones";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Valor_Deducciones");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "Valor Deducciones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Deducciones`";

	
	
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


	$tdataep_op["Valor Deducciones"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Valor Deducciones";
//	Valor Neto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Valor Neto";
	$fdata["GoodName"] = "Valor_Neto";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Valor_Neto");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "Valor Neto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Neto`";

	
	
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


	$tdataep_op["Valor Neto"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Valor Neto";
//	Tipo Beneficiario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Tipo Beneficiario";
	$fdata["GoodName"] = "Tipo_Beneficiario";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Tipo_Beneficiario");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Tipo Beneficiario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Tipo Beneficiario`";

	
	
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


	$tdataep_op["Tipo Beneficiario"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Tipo Beneficiario";
//	Vigencia Presupuestal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Vigencia Presupuestal";
	$fdata["GoodName"] = "Vigencia_Presupuestal";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Vigencia_Presupuestal");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Vigencia Presupuestal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Vigencia Presupuestal`";

	
	
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


	$tdataep_op["Vigencia Presupuestal"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Vigencia Presupuestal";
//	Tipo Identificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Tipo Identificacion";
	$fdata["GoodName"] = "Tipo_Identificacion";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Tipo_Identificacion");
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


	$tdataep_op["Tipo Identificacion"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Tipo Identificacion";
//	Identificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Identificacion";
	$fdata["GoodName"] = "Identificacion";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Identificacion");
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


	$tdataep_op["Identificacion"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Identificacion";
//	Nombre Razon Social
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Nombre Razon Social";
	$fdata["GoodName"] = "Nombre_Razon_Social";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Nombre_Razon_Social");
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


	$tdataep_op["Nombre Razon Social"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Nombre Razon Social";
//	Medio de Pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Medio de Pago";
	$fdata["GoodName"] = "Medio_de_Pago";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Medio_de_Pago");
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


	$tdataep_op["Medio de Pago"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Medio de Pago";
//	Tipo Cuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Tipo Cuenta";
	$fdata["GoodName"] = "Tipo_Cuenta";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Tipo_Cuenta");
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


	$tdataep_op["Tipo Cuenta"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Tipo Cuenta";
//	Numero Cuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Numero Cuenta";
	$fdata["GoodName"] = "Numero_Cuenta";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Numero_Cuenta");
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


	$tdataep_op["Numero Cuenta"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Numero Cuenta";
//	Estado Cuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Estado Cuenta";
	$fdata["GoodName"] = "Estado_Cuenta";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Estado_Cuenta");
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


	$tdataep_op["Estado Cuenta"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Estado Cuenta";
//	Entidad Nit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Entidad Nit";
	$fdata["GoodName"] = "Entidad_Nit";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Entidad_Nit");
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


	$tdataep_op["Entidad Nit"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Entidad Nit";
//	Entidad Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Entidad Descripcion";
	$fdata["GoodName"] = "Entidad_Descripcion";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Entidad_Descripcion");
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


	$tdataep_op["Entidad Descripcion"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Entidad Descripcion";
//	Dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Dependencia";
	$fdata["GoodName"] = "Dependencia";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Dependencia");
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


	$tdataep_op["Dependencia"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Dependencia";
//	Dependencia Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Dependencia Descripcion";
	$fdata["GoodName"] = "Dependencia_Descripcion";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Dependencia_Descripcion");
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


	$tdataep_op["Dependencia Descripcion"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Dependencia Descripcion";
//	Rubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Rubro";
	$fdata["GoodName"] = "Rubro";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Rubro");
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


	$tdataep_op["Rubro"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Rubro";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Descripcion");
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


	$tdataep_op["Descripcion"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Descripcion";
//	Fuente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Fuente";
	$fdata["GoodName"] = "Fuente";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Fuente");
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


	$tdataep_op["Fuente"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Fuente";
//	Recurso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Recurso";
	$fdata["GoodName"] = "Recurso";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Recurso");
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


	$tdataep_op["Recurso"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Recurso";
//	Sit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Sit";
	$fdata["GoodName"] = "Sit";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Sit");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Sit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sit";

	
	
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


	$tdataep_op["Sit"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Sit";
//	Valor Pesos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Valor Pesos";
	$fdata["GoodName"] = "Valor_Pesos";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Valor_Pesos");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "Valor Pesos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Pesos`";

	
	
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


	$tdataep_op["Valor Pesos"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Valor Pesos";
//	Valor Moneda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Valor Moneda";
	$fdata["GoodName"] = "Valor_Moneda";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Valor_Moneda");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "Valor Moneda";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Moneda`";

	
	
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


	$tdataep_op["Valor Moneda"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Valor Moneda";
//	Valor Reintegrado Pesos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "Valor Reintegrado Pesos";
	$fdata["GoodName"] = "Valor_Reintegrado_Pesos";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Valor_Reintegrado_Pesos");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "Valor Reintegrado Pesos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Reintegrado Pesos`";

	
	
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


	$tdataep_op["Valor Reintegrado Pesos"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Valor Reintegrado Pesos";
//	Valor Reintegrado Moneda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Valor Reintegrado Moneda";
	$fdata["GoodName"] = "Valor_Reintegrado_Moneda";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Valor_Reintegrado_Moneda");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "Valor Reintegrado Moneda";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Reintegrado Moneda`";

	
	
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


	$tdataep_op["Valor Reintegrado Moneda"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Valor Reintegrado Moneda";
//	Tesoreria Pagadora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Tesoreria Pagadora";
	$fdata["GoodName"] = "Tesoreria_Pagadora";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Tesoreria_Pagadora");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Tesoreria Pagadora";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Tesoreria Pagadora`";

	
	
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


	$tdataep_op["Tesoreria Pagadora"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Tesoreria Pagadora";
//	Identificacion Pagaduria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "Identificacion Pagaduria";
	$fdata["GoodName"] = "Identificacion_Pagaduria";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Identificacion_Pagaduria");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Identificacion Pagaduria";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Identificacion Pagaduria`";

	
	
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


	$tdataep_op["Identificacion Pagaduria"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Identificacion Pagaduria";
//	Cuenta Pagaduria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Cuenta Pagaduria";
	$fdata["GoodName"] = "Cuenta_Pagaduria";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Cuenta_Pagaduria");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Cuenta Pagaduria";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Cuenta Pagaduria`";

	
	
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


	$tdataep_op["Cuenta Pagaduria"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Cuenta Pagaduria";
//	Endosada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Endosada";
	$fdata["GoodName"] = "Endosada";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Endosada");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Endosada";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Endosada";

	
	
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


	$tdataep_op["Endosada"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Endosada";
//	Tipo Identificacion1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Tipo Identificacion1";
	$fdata["GoodName"] = "Tipo_Identificacion1";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Tipo_Identificacion1");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Tipo Identificacion1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Tipo Identificacion1`";

	
	
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


	$tdataep_op["Tipo Identificacion1"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Tipo Identificacion1";
//	Identificacion1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Identificacion1";
	$fdata["GoodName"] = "Identificacion1";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Identificacion1");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Identificacion1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Identificacion1";

	
	
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


	$tdataep_op["Identificacion1"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Identificacion1";
//	Razon social
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Razon social";
	$fdata["GoodName"] = "Razon_social";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Razon_social");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Razon social";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Razon social`";

	
	
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


	$tdataep_op["Razon social"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Razon social";
//	Numero Cuenta1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Numero Cuenta1";
	$fdata["GoodName"] = "Numero_Cuenta1";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Numero_Cuenta1");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Numero Cuenta1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Numero Cuenta1`";

	
	
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


	$tdataep_op["Numero Cuenta1"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Numero Cuenta1";
//	Concepto Pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Concepto Pago";
	$fdata["GoodName"] = "Concepto_Pago";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Concepto_Pago");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Concepto Pago";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Concepto Pago`";

	
	
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


	$tdataep_op["Concepto Pago"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Concepto Pago";
//	Solicitud CDP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Solicitud CDP";
	$fdata["GoodName"] = "Solicitud_CDP";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Solicitud_CDP");
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


	$tdataep_op["Solicitud CDP"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Solicitud CDP";
//	CDP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "CDP";
	$fdata["GoodName"] = "CDP";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","CDP");
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


	$tdataep_op["CDP"] = $fdata;
		$tdataep_op[".searchableFields"][] = "CDP";
//	Compromisos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "Compromisos";
	$fdata["GoodName"] = "Compromisos";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Compromisos");
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


	$tdataep_op["Compromisos"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Compromisos";
//	Cuentas por Pagar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "Cuentas por Pagar";
	$fdata["GoodName"] = "Cuentas_por_Pagar";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Cuentas_por_Pagar");
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


	$tdataep_op["Cuentas por Pagar"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Cuentas por Pagar";
//	Fecha Cuentas por Pagar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "Fecha Cuentas por Pagar";
	$fdata["GoodName"] = "Fecha_Cuentas_por_Pagar";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Fecha_Cuentas_por_Pagar");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Fecha Cuentas por Pagar";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Fecha Cuentas por Pagar`";

	
	
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


	$tdataep_op["Fecha Cuentas por Pagar"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Fecha Cuentas por Pagar";
//	Obligaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "Obligaciones";
	$fdata["GoodName"] = "Obligaciones";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Obligaciones");
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


	$tdataep_op["Obligaciones"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Obligaciones";
//	Ordenes de Pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "Ordenes de Pago";
	$fdata["GoodName"] = "Ordenes_de_Pago";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Ordenes_de_Pago");
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


	$tdataep_op["Ordenes de Pago"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Ordenes de Pago";
//	Reintegros
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "Reintegros";
	$fdata["GoodName"] = "Reintegros";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Reintegros");
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


	$tdataep_op["Reintegros"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Reintegros";
//	Fecha Doc Soporte Compromiso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "Fecha Doc Soporte Compromiso";
	$fdata["GoodName"] = "Fecha_Doc_Soporte_Compromiso";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Fecha_Doc_Soporte_Compromiso");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Fecha Doc Soporte Compromiso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Fecha Doc Soporte Compromiso`";

	
	
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


	$tdataep_op["Fecha Doc Soporte Compromiso"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Fecha Doc Soporte Compromiso";
//	Tipo Doc Soporte Compromiso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "Tipo Doc Soporte Compromiso";
	$fdata["GoodName"] = "Tipo_Doc_Soporte_Compromiso";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Tipo_Doc_Soporte_Compromiso");
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


	$tdataep_op["Tipo Doc Soporte Compromiso"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Tipo Doc Soporte Compromiso";
//	Num Doc Soporte Compromiso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "Num Doc Soporte Compromiso";
	$fdata["GoodName"] = "Num_Doc_Soporte_Compromiso";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Num_Doc_Soporte_Compromiso");
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


	$tdataep_op["Num Doc Soporte Compromiso"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Num Doc Soporte Compromiso";
//	Objeto del Compromiso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "Objeto del Compromiso";
	$fdata["GoodName"] = "Objeto_del_Compromiso";
	$fdata["ownerTable"] = "ep_op";
	$fdata["Label"] = GetFieldLabel("ep_op","Objeto_del_Compromiso");
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


	$tdataep_op["Objeto del Compromiso"] = $fdata;
		$tdataep_op[".searchableFields"][] = "Objeto del Compromiso";


$tables_data["ep_op"]=&$tdataep_op;
$field_labels["ep_op"] = &$fieldLabelsep_op;
$fieldToolTips["ep_op"] = &$fieldToolTipsep_op;
$placeHolders["ep_op"] = &$placeHoldersep_op;
$page_titles["ep_op"] = &$pageTitlesep_op;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ep_op"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ep_op"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_ep_op()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "OP_ID,  	`Numero Documento`,  	`Fecha de Registro`,  	`Fecha de pago`,  	Estado,  	`Valor Bruto`,  	`Valor Deducciones`,  	`Valor Neto`,  	`Tipo Beneficiario`,  	`Vigencia Presupuestal`,  	`Tipo Identificacion`,  	Identificacion,  	`Nombre Razon Social`,  	`Medio de Pago`,  	`Tipo Cuenta`,  	`Numero Cuenta`,  	`Estado Cuenta`,  	`Entidad Nit`,  	`Entidad Descripcion`,  	Dependencia,  	`Dependencia Descripcion`,  	Rubro,  	Descripcion,  	Fuente,  	Recurso,  	Sit,  	`Valor Pesos`,  	`Valor Moneda`,  	`Valor Reintegrado Pesos`,  	`Valor Reintegrado Moneda`,  	`Tesoreria Pagadora`,  	`Identificacion Pagaduria`,  	`Cuenta Pagaduria`,  	Endosada,  	`Tipo Identificacion1`,  	Identificacion1,  	`Razon social`,  	`Numero Cuenta1`,  	`Concepto Pago`,  	`Solicitud CDP`,  	CDP,  	Compromisos,  	`Cuentas por Pagar`,  	`Fecha Cuentas por Pagar`,  	Obligaciones,  	`Ordenes de Pago`,  	Reintegros,  	`Fecha Doc Soporte Compromiso`,  	`Tipo Doc Soporte Compromiso`,  	`Num Doc Soporte Compromiso`,  	`Objeto del Compromiso`";
$proto0["m_strFrom"] = "FROM ep_op";
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
	"m_strName" => "OP_ID",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto6["m_sql"] = "OP_ID";
$proto6["m_srcTableName"] = "ep_op";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero Documento",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto8["m_sql"] = "`Numero Documento`";
$proto8["m_srcTableName"] = "ep_op";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de Registro",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto10["m_sql"] = "`Fecha de Registro`";
$proto10["m_srcTableName"] = "ep_op";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de pago",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto12["m_sql"] = "`Fecha de pago`";
$proto12["m_srcTableName"] = "ep_op";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto14["m_sql"] = "Estado";
$proto14["m_srcTableName"] = "ep_op";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Bruto",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto16["m_sql"] = "`Valor Bruto`";
$proto16["m_srcTableName"] = "ep_op";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Deducciones",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto18["m_sql"] = "`Valor Deducciones`";
$proto18["m_srcTableName"] = "ep_op";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Neto",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto20["m_sql"] = "`Valor Neto`";
$proto20["m_srcTableName"] = "ep_op";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo Beneficiario",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto22["m_sql"] = "`Tipo Beneficiario`";
$proto22["m_srcTableName"] = "ep_op";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Vigencia Presupuestal",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto24["m_sql"] = "`Vigencia Presupuestal`";
$proto24["m_srcTableName"] = "ep_op";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo Identificacion",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto26["m_sql"] = "`Tipo Identificacion`";
$proto26["m_srcTableName"] = "ep_op";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Identificacion",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto28["m_sql"] = "Identificacion";
$proto28["m_srcTableName"] = "ep_op";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre Razon Social",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto30["m_sql"] = "`Nombre Razon Social`";
$proto30["m_srcTableName"] = "ep_op";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Medio de Pago",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto32["m_sql"] = "`Medio de Pago`";
$proto32["m_srcTableName"] = "ep_op";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo Cuenta",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto34["m_sql"] = "`Tipo Cuenta`";
$proto34["m_srcTableName"] = "ep_op";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero Cuenta",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto36["m_sql"] = "`Numero Cuenta`";
$proto36["m_srcTableName"] = "ep_op";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado Cuenta",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto38["m_sql"] = "`Estado Cuenta`";
$proto38["m_srcTableName"] = "ep_op";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Entidad Nit",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto40["m_sql"] = "`Entidad Nit`";
$proto40["m_srcTableName"] = "ep_op";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Entidad Descripcion",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto42["m_sql"] = "`Entidad Descripcion`";
$proto42["m_srcTableName"] = "ep_op";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Dependencia",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto44["m_sql"] = "Dependencia";
$proto44["m_srcTableName"] = "ep_op";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Dependencia Descripcion",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto46["m_sql"] = "`Dependencia Descripcion`";
$proto46["m_srcTableName"] = "ep_op";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Rubro",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto48["m_sql"] = "Rubro";
$proto48["m_srcTableName"] = "ep_op";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto50["m_sql"] = "Descripcion";
$proto50["m_srcTableName"] = "ep_op";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Fuente",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto52["m_sql"] = "Fuente";
$proto52["m_srcTableName"] = "ep_op";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "Recurso",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto54["m_sql"] = "Recurso";
$proto54["m_srcTableName"] = "ep_op";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "Sit",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto56["m_sql"] = "Sit";
$proto56["m_srcTableName"] = "ep_op";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Pesos",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto58["m_sql"] = "`Valor Pesos`";
$proto58["m_srcTableName"] = "ep_op";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Moneda",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto60["m_sql"] = "`Valor Moneda`";
$proto60["m_srcTableName"] = "ep_op";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Reintegrado Pesos",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto62["m_sql"] = "`Valor Reintegrado Pesos`";
$proto62["m_srcTableName"] = "ep_op";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Reintegrado Moneda",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto64["m_sql"] = "`Valor Reintegrado Moneda`";
$proto64["m_srcTableName"] = "ep_op";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "Tesoreria Pagadora",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto66["m_sql"] = "`Tesoreria Pagadora`";
$proto66["m_srcTableName"] = "ep_op";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "Identificacion Pagaduria",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto68["m_sql"] = "`Identificacion Pagaduria`";
$proto68["m_srcTableName"] = "ep_op";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "Cuenta Pagaduria",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto70["m_sql"] = "`Cuenta Pagaduria`";
$proto70["m_srcTableName"] = "ep_op";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "Endosada",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto72["m_sql"] = "Endosada";
$proto72["m_srcTableName"] = "ep_op";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo Identificacion1",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto74["m_sql"] = "`Tipo Identificacion1`";
$proto74["m_srcTableName"] = "ep_op";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Identificacion1",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto76["m_sql"] = "Identificacion1";
$proto76["m_srcTableName"] = "ep_op";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "Razon social",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto78["m_sql"] = "`Razon social`";
$proto78["m_srcTableName"] = "ep_op";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero Cuenta1",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto80["m_sql"] = "`Numero Cuenta1`";
$proto80["m_srcTableName"] = "ep_op";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "Concepto Pago",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto82["m_sql"] = "`Concepto Pago`";
$proto82["m_srcTableName"] = "ep_op";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "Solicitud CDP",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto84["m_sql"] = "`Solicitud CDP`";
$proto84["m_srcTableName"] = "ep_op";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "CDP",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto86["m_sql"] = "CDP";
$proto86["m_srcTableName"] = "ep_op";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "Compromisos",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto88["m_sql"] = "Compromisos";
$proto88["m_srcTableName"] = "ep_op";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "Cuentas por Pagar",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto90["m_sql"] = "`Cuentas por Pagar`";
$proto90["m_srcTableName"] = "ep_op";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha Cuentas por Pagar",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto92["m_sql"] = "`Fecha Cuentas por Pagar`";
$proto92["m_srcTableName"] = "ep_op";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "Obligaciones",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto94["m_sql"] = "Obligaciones";
$proto94["m_srcTableName"] = "ep_op";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "Ordenes de Pago",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto96["m_sql"] = "`Ordenes de Pago`";
$proto96["m_srcTableName"] = "ep_op";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "Reintegros",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto98["m_sql"] = "Reintegros";
$proto98["m_srcTableName"] = "ep_op";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha Doc Soporte Compromiso",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto100["m_sql"] = "`Fecha Doc Soporte Compromiso`";
$proto100["m_srcTableName"] = "ep_op";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo Doc Soporte Compromiso",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto102["m_sql"] = "`Tipo Doc Soporte Compromiso`";
$proto102["m_srcTableName"] = "ep_op";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "Num Doc Soporte Compromiso",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto104["m_sql"] = "`Num Doc Soporte Compromiso`";
$proto104["m_srcTableName"] = "ep_op";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "Objeto del Compromiso",
	"m_strTable" => "ep_op",
	"m_srcTableName" => "ep_op"
));

$proto106["m_sql"] = "`Objeto del Compromiso`";
$proto106["m_srcTableName"] = "ep_op";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto108=array();
$proto108["m_link"] = "SQLL_MAIN";
			$proto109=array();
$proto109["m_strName"] = "ep_op";
$proto109["m_srcTableName"] = "ep_op";
$proto109["m_columns"] = array();
$proto109["m_columns"][] = "OP_ID";
$proto109["m_columns"][] = "Numero Documento";
$proto109["m_columns"][] = "Fecha de Registro";
$proto109["m_columns"][] = "Fecha de pago";
$proto109["m_columns"][] = "Estado";
$proto109["m_columns"][] = "Valor Bruto";
$proto109["m_columns"][] = "Valor Deducciones";
$proto109["m_columns"][] = "Valor Neto";
$proto109["m_columns"][] = "Tipo Beneficiario";
$proto109["m_columns"][] = "Vigencia Presupuestal";
$proto109["m_columns"][] = "Tipo Identificacion";
$proto109["m_columns"][] = "Identificacion";
$proto109["m_columns"][] = "Nombre Razon Social";
$proto109["m_columns"][] = "Medio de Pago";
$proto109["m_columns"][] = "Tipo Cuenta";
$proto109["m_columns"][] = "Numero Cuenta";
$proto109["m_columns"][] = "Estado Cuenta";
$proto109["m_columns"][] = "Entidad Nit";
$proto109["m_columns"][] = "Entidad Descripcion";
$proto109["m_columns"][] = "Dependencia";
$proto109["m_columns"][] = "Dependencia Descripcion";
$proto109["m_columns"][] = "Rubro";
$proto109["m_columns"][] = "Descripcion";
$proto109["m_columns"][] = "Fuente";
$proto109["m_columns"][] = "Recurso";
$proto109["m_columns"][] = "Sit";
$proto109["m_columns"][] = "Valor Pesos";
$proto109["m_columns"][] = "Valor Moneda";
$proto109["m_columns"][] = "Valor Reintegrado Pesos";
$proto109["m_columns"][] = "Valor Reintegrado Moneda";
$proto109["m_columns"][] = "Tesoreria Pagadora";
$proto109["m_columns"][] = "Identificacion Pagaduria";
$proto109["m_columns"][] = "Cuenta Pagaduria";
$proto109["m_columns"][] = "Endosada";
$proto109["m_columns"][] = "Tipo Identificacion1";
$proto109["m_columns"][] = "Identificacion1";
$proto109["m_columns"][] = "Razon social";
$proto109["m_columns"][] = "Numero Cuenta1";
$proto109["m_columns"][] = "Concepto Pago";
$proto109["m_columns"][] = "Solicitud CDP";
$proto109["m_columns"][] = "CDP";
$proto109["m_columns"][] = "Compromisos";
$proto109["m_columns"][] = "Cuentas por Pagar";
$proto109["m_columns"][] = "Fecha Cuentas por Pagar";
$proto109["m_columns"][] = "Obligaciones";
$proto109["m_columns"][] = "Ordenes de Pago";
$proto109["m_columns"][] = "Reintegros";
$proto109["m_columns"][] = "Fecha Doc Soporte Compromiso";
$proto109["m_columns"][] = "Tipo Doc Soporte Compromiso";
$proto109["m_columns"][] = "Num Doc Soporte Compromiso";
$proto109["m_columns"][] = "Objeto del Compromiso";
$obj = new SQLTable($proto109);

$proto108["m_table"] = $obj;
$proto108["m_sql"] = "ep_op";
$proto108["m_alias"] = "";
$proto108["m_srcTableName"] = "ep_op";
$proto110=array();
$proto110["m_sql"] = "";
$proto110["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto110["m_column"]=$obj;
$proto110["m_contained"] = array();
$proto110["m_strCase"] = "";
$proto110["m_havingmode"] = false;
$proto110["m_inBrackets"] = false;
$proto110["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto110);

$proto108["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto108);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ep_op";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ep_op = createSqlQuery_ep_op();


	
								;

																																																			

$tdataep_op[".sqlquery"] = $queryData_ep_op;

$tableEvents["ep_op"] = new eventsBase;
$tdataep_op[".hasEvents"] = false;

?>