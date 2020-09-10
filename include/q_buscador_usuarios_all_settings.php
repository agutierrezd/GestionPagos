<?php



$tdataq_buscador_usuarios_all = array();
$tdataq_buscador_usuarios_all[".searchableFields"] = array();
$tdataq_buscador_usuarios_all[".ShortName"] = "q_buscador_usuarios_all";
$tdataq_buscador_usuarios_all[".OwnerID"] = "";
$tdataq_buscador_usuarios_all[".OriginalTable"] = "q_buscador_usuarios_all";


$tdataq_buscador_usuarios_all[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataq_buscador_usuarios_all[".originalPagesByType"] = $tdataq_buscador_usuarios_all[".pagesByType"];
$tdataq_buscador_usuarios_all[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataq_buscador_usuarios_all[".originalPages"] = $tdataq_buscador_usuarios_all[".pages"];
$tdataq_buscador_usuarios_all[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdataq_buscador_usuarios_all[".originalDefaultPages"] = $tdataq_buscador_usuarios_all[".defaultPages"];

//	field labels
$fieldLabelsq_buscador_usuarios_all = array();
$fieldToolTipsq_buscador_usuarios_all = array();
$pageTitlesq_buscador_usuarios_all = array();
$placeHoldersq_buscador_usuarios_all = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_buscador_usuarios_all["Spanish"] = array();
	$fieldToolTipsq_buscador_usuarios_all["Spanish"] = array();
	$placeHoldersq_buscador_usuarios_all["Spanish"] = array();
	$pageTitlesq_buscador_usuarios_all["Spanish"] = array();
	$fieldLabelsq_buscador_usuarios_all["Spanish"]["idusrglobal"] = "Idusrglobal";
	$fieldToolTipsq_buscador_usuarios_all["Spanish"]["idusrglobal"] = "";
	$placeHoldersq_buscador_usuarios_all["Spanish"]["idusrglobal"] = "";
	$fieldLabelsq_buscador_usuarios_all["Spanish"]["Username"] = "Usuario";
	$fieldToolTipsq_buscador_usuarios_all["Spanish"]["Username"] = "";
	$placeHoldersq_buscador_usuarios_all["Spanish"]["Username"] = "";
	$fieldLabelsq_buscador_usuarios_all["Spanish"]["usr_email"] = "Email";
	$fieldToolTipsq_buscador_usuarios_all["Spanish"]["usr_email"] = "";
	$placeHoldersq_buscador_usuarios_all["Spanish"]["usr_email"] = "";
	$fieldLabelsq_buscador_usuarios_all["Spanish"]["usr_name"] = "Nombres";
	$fieldToolTipsq_buscador_usuarios_all["Spanish"]["usr_name"] = "";
	$placeHoldersq_buscador_usuarios_all["Spanish"]["usr_name"] = "";
	$fieldLabelsq_buscador_usuarios_all["Spanish"]["usr_lname"] = "Apellidos";
	$fieldToolTipsq_buscador_usuarios_all["Spanish"]["usr_lname"] = "";
	$placeHoldersq_buscador_usuarios_all["Spanish"]["usr_lname"] = "";
	$fieldLabelsq_buscador_usuarios_all["Spanish"]["usr_personalid"] = "Documento";
	$fieldToolTipsq_buscador_usuarios_all["Spanish"]["usr_personalid"] = "";
	$placeHoldersq_buscador_usuarios_all["Spanish"]["usr_personalid"] = "";
	$fieldLabelsq_buscador_usuarios_all["Spanish"]["usr_image"] = "Usr Image";
	$fieldToolTipsq_buscador_usuarios_all["Spanish"]["usr_image"] = "";
	$placeHoldersq_buscador_usuarios_all["Spanish"]["usr_image"] = "";
	$fieldLabelsq_buscador_usuarios_all["Spanish"]["BUSCADOR"] = "BUSCADOR";
	$fieldToolTipsq_buscador_usuarios_all["Spanish"]["BUSCADOR"] = "";
	$placeHoldersq_buscador_usuarios_all["Spanish"]["BUSCADOR"] = "";
	$fieldLabelsq_buscador_usuarios_all["Spanish"]["usr_status"] = "Usr Status";
	$fieldToolTipsq_buscador_usuarios_all["Spanish"]["usr_status"] = "";
	$placeHoldersq_buscador_usuarios_all["Spanish"]["usr_status"] = "";
	$fieldLabelsq_buscador_usuarios_all["Spanish"]["status_name"] = "Status Name";
	$fieldToolTipsq_buscador_usuarios_all["Spanish"]["status_name"] = "";
	$placeHoldersq_buscador_usuarios_all["Spanish"]["status_name"] = "";
	$fieldLabelsq_buscador_usuarios_all["Spanish"]["usr_dependencia"] = "Usr Dependencia";
	$fieldToolTipsq_buscador_usuarios_all["Spanish"]["usr_dependencia"] = "";
	$placeHoldersq_buscador_usuarios_all["Spanish"]["usr_dependencia"] = "";
	$fieldLabelsq_buscador_usuarios_all["Spanish"]["usr_emergencia"] = "Usr Emergencia";
	$fieldToolTipsq_buscador_usuarios_all["Spanish"]["usr_emergencia"] = "";
	$placeHoldersq_buscador_usuarios_all["Spanish"]["usr_emergencia"] = "";
	$fieldLabelsq_buscador_usuarios_all["Spanish"]["usr_extension"] = "Usr Extension";
	$fieldToolTipsq_buscador_usuarios_all["Spanish"]["usr_extension"] = "";
	$placeHoldersq_buscador_usuarios_all["Spanish"]["usr_extension"] = "";
	$fieldLabelsq_buscador_usuarios_all["Spanish"]["usr_piso"] = "Usr Piso";
	$fieldToolTipsq_buscador_usuarios_all["Spanish"]["usr_piso"] = "";
	$placeHoldersq_buscador_usuarios_all["Spanish"]["usr_piso"] = "";
	$fieldLabelsq_buscador_usuarios_all["Spanish"]["global_rol_me"] = "Global Rol Me";
	$fieldToolTipsq_buscador_usuarios_all["Spanish"]["global_rol_me"] = "";
	$placeHoldersq_buscador_usuarios_all["Spanish"]["global_rol_me"] = "";
	$fieldLabelsq_buscador_usuarios_all["Spanish"]["usr_minequipo_lider"] = "Usr Minequipo Lider";
	$fieldToolTipsq_buscador_usuarios_all["Spanish"]["usr_minequipo_lider"] = "";
	$placeHoldersq_buscador_usuarios_all["Spanish"]["usr_minequipo_lider"] = "";
	$fieldLabelsq_buscador_usuarios_all["Spanish"]["usr_minequipo_grupo"] = "Usr Minequipo Grupo";
	$fieldToolTipsq_buscador_usuarios_all["Spanish"]["usr_minequipo_grupo"] = "";
	$placeHoldersq_buscador_usuarios_all["Spanish"]["usr_minequipo_grupo"] = "";
	$fieldLabelsq_buscador_usuarios_all["Spanish"]["usr_dep"] = "Dep";
	$fieldToolTipsq_buscador_usuarios_all["Spanish"]["usr_dep"] = "";
	$placeHoldersq_buscador_usuarios_all["Spanish"]["usr_dep"] = "";
	$fieldLabelsq_buscador_usuarios_all["Spanish"]["usr_cargo"] = "Cargo";
	$fieldToolTipsq_buscador_usuarios_all["Spanish"]["usr_cargo"] = "";
	$placeHoldersq_buscador_usuarios_all["Spanish"]["usr_cargo"] = "";
	$fieldLabelsq_buscador_usuarios_all["Spanish"]["nombre_de_cargo"] = "Nombre Cargo";
	$fieldToolTipsq_buscador_usuarios_all["Spanish"]["nombre_de_cargo"] = "";
	$placeHoldersq_buscador_usuarios_all["Spanish"]["nombre_de_cargo"] = "";
	$fieldLabelsq_buscador_usuarios_all["Spanish"]["cargo"] = "Cargo";
	$fieldToolTipsq_buscador_usuarios_all["Spanish"]["cargo"] = "";
	$placeHoldersq_buscador_usuarios_all["Spanish"]["cargo"] = "";
	$fieldLabelsq_buscador_usuarios_all["Spanish"]["grado"] = "Grado";
	$fieldToolTipsq_buscador_usuarios_all["Spanish"]["grado"] = "";
	$placeHoldersq_buscador_usuarios_all["Spanish"]["grado"] = "";
	$fieldLabelsq_buscador_usuarios_all["Spanish"]["nombre_dependencia"] = "Nombre Dependencia";
	$fieldToolTipsq_buscador_usuarios_all["Spanish"]["nombre_dependencia"] = "";
	$placeHoldersq_buscador_usuarios_all["Spanish"]["nombre_dependencia"] = "";
	$fieldLabelsq_buscador_usuarios_all["Spanish"]["Departamento_superior"] = "Departamento Superior";
	$fieldToolTipsq_buscador_usuarios_all["Spanish"]["Departamento_superior"] = "";
	$placeHoldersq_buscador_usuarios_all["Spanish"]["Departamento_superior"] = "";
	$fieldLabelsq_buscador_usuarios_all["Spanish"]["usr_nombresfull"] = "Nombres";
	$fieldToolTipsq_buscador_usuarios_all["Spanish"]["usr_nombresfull"] = "";
	$placeHoldersq_buscador_usuarios_all["Spanish"]["usr_nombresfull"] = "";
	if (count($fieldToolTipsq_buscador_usuarios_all["Spanish"]))
		$tdataq_buscador_usuarios_all[".isUseToolTips"] = true;
}


	$tdataq_buscador_usuarios_all[".NCSearch"] = true;



$tdataq_buscador_usuarios_all[".shortTableName"] = "q_buscador_usuarios_all";
$tdataq_buscador_usuarios_all[".nSecOptions"] = 0;

$tdataq_buscador_usuarios_all[".mainTableOwnerID"] = "";
$tdataq_buscador_usuarios_all[".entityType"] = 0;

$tdataq_buscador_usuarios_all[".strOriginalTableName"] = "q_buscador_usuarios_all";

	



$tdataq_buscador_usuarios_all[".showAddInPopup"] = false;

$tdataq_buscador_usuarios_all[".showEditInPopup"] = false;

$tdataq_buscador_usuarios_all[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataq_buscador_usuarios_all[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataq_buscador_usuarios_all[".listAjax"] = false;
//	temporary
$tdataq_buscador_usuarios_all[".listAjax"] = false;

	$tdataq_buscador_usuarios_all[".audit"] = true;

	$tdataq_buscador_usuarios_all[".locking"] = true;


$pages = $tdataq_buscador_usuarios_all[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_buscador_usuarios_all[".edit"] = true;
	$tdataq_buscador_usuarios_all[".afterEditAction"] = 1;
	$tdataq_buscador_usuarios_all[".closePopupAfterEdit"] = 1;
	$tdataq_buscador_usuarios_all[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_buscador_usuarios_all[".add"] = true;
$tdataq_buscador_usuarios_all[".afterAddAction"] = 1;
$tdataq_buscador_usuarios_all[".closePopupAfterAdd"] = 1;
$tdataq_buscador_usuarios_all[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_buscador_usuarios_all[".list"] = true;
}



$tdataq_buscador_usuarios_all[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_buscador_usuarios_all[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_buscador_usuarios_all[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_buscador_usuarios_all[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_buscador_usuarios_all[".printFriendly"] = true;
}



$tdataq_buscador_usuarios_all[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_buscador_usuarios_all[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_buscador_usuarios_all[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_buscador_usuarios_all[".isUseAjaxSuggest"] = true;

$tdataq_buscador_usuarios_all[".rowHighlite"] = true;





$tdataq_buscador_usuarios_all[".ajaxCodeSnippetAdded"] = false;

$tdataq_buscador_usuarios_all[".buttonsAdded"] = false;

$tdataq_buscador_usuarios_all[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_buscador_usuarios_all[".isUseTimeForSearch"] = false;


$tdataq_buscador_usuarios_all[".badgeColor"] = "EDCA00";


$tdataq_buscador_usuarios_all[".allSearchFields"] = array();
$tdataq_buscador_usuarios_all[".filterFields"] = array();
$tdataq_buscador_usuarios_all[".requiredSearchFields"] = array();

$tdataq_buscador_usuarios_all[".googleLikeFields"] = array();
$tdataq_buscador_usuarios_all[".googleLikeFields"][] = "idusrglobal";
$tdataq_buscador_usuarios_all[".googleLikeFields"][] = "Username";
$tdataq_buscador_usuarios_all[".googleLikeFields"][] = "usr_email";
$tdataq_buscador_usuarios_all[".googleLikeFields"][] = "usr_name";
$tdataq_buscador_usuarios_all[".googleLikeFields"][] = "usr_lname";
$tdataq_buscador_usuarios_all[".googleLikeFields"][] = "usr_personalid";
$tdataq_buscador_usuarios_all[".googleLikeFields"][] = "usr_image";
$tdataq_buscador_usuarios_all[".googleLikeFields"][] = "BUSCADOR";
$tdataq_buscador_usuarios_all[".googleLikeFields"][] = "usr_status";
$tdataq_buscador_usuarios_all[".googleLikeFields"][] = "status_name";
$tdataq_buscador_usuarios_all[".googleLikeFields"][] = "usr_dependencia";
$tdataq_buscador_usuarios_all[".googleLikeFields"][] = "usr_emergencia";
$tdataq_buscador_usuarios_all[".googleLikeFields"][] = "usr_extension";
$tdataq_buscador_usuarios_all[".googleLikeFields"][] = "usr_piso";
$tdataq_buscador_usuarios_all[".googleLikeFields"][] = "global_rol_me";
$tdataq_buscador_usuarios_all[".googleLikeFields"][] = "usr_minequipo_lider";
$tdataq_buscador_usuarios_all[".googleLikeFields"][] = "usr_minequipo_grupo";
$tdataq_buscador_usuarios_all[".googleLikeFields"][] = "usr_dep";
$tdataq_buscador_usuarios_all[".googleLikeFields"][] = "usr_cargo";
$tdataq_buscador_usuarios_all[".googleLikeFields"][] = "nombre_de_cargo";
$tdataq_buscador_usuarios_all[".googleLikeFields"][] = "cargo";
$tdataq_buscador_usuarios_all[".googleLikeFields"][] = "grado";
$tdataq_buscador_usuarios_all[".googleLikeFields"][] = "nombre_dependencia";
$tdataq_buscador_usuarios_all[".googleLikeFields"][] = "Departamento_superior";
$tdataq_buscador_usuarios_all[".googleLikeFields"][] = "usr_nombresfull";



$tdataq_buscador_usuarios_all[".tableType"] = "list";

$tdataq_buscador_usuarios_all[".printerPageOrientation"] = 0;
$tdataq_buscador_usuarios_all[".nPrinterPageScale"] = 100;

$tdataq_buscador_usuarios_all[".nPrinterSplitRecords"] = 40;

$tdataq_buscador_usuarios_all[".geocodingEnabled"] = false;










$tdataq_buscador_usuarios_all[".pageSize"] = 20;

$tdataq_buscador_usuarios_all[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataq_buscador_usuarios_all[".strOrderBy"] = $tstrOrderBy;

$tdataq_buscador_usuarios_all[".orderindexes"] = array();

$tdataq_buscador_usuarios_all[".sqlHead"] = "SELECT idusrglobal,  	Username,  	usr_email,  	usr_name,  	usr_lname,  	usr_personalid,  	usr_image,  	BUSCADOR,  	usr_status,  	status_name,  	usr_dependencia,  	usr_emergencia,  	usr_extension,  	usr_piso,  	global_rol_me,  	usr_minequipo_lider,  	usr_minequipo_grupo,  	usr_dep,  	usr_cargo,  	nombre_de_cargo,  	cargo,  	grado,  	nombre_dependencia,  	Departamento_superior,  	usr_nombresfull";
$tdataq_buscador_usuarios_all[".sqlFrom"] = "FROM q_buscador_usuarios_all";
$tdataq_buscador_usuarios_all[".sqlWhereExpr"] = "";
$tdataq_buscador_usuarios_all[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_buscador_usuarios_all[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_buscador_usuarios_all[".arrGroupsPerPage"] = $arrGPP;

$tdataq_buscador_usuarios_all[".highlightSearchResults"] = true;

$tableKeysq_buscador_usuarios_all = array();
$tdataq_buscador_usuarios_all[".Keys"] = $tableKeysq_buscador_usuarios_all;


$tdataq_buscador_usuarios_all[".hideMobileList"] = array();




//	idusrglobal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idusrglobal";
	$fdata["GoodName"] = "idusrglobal";
	$fdata["ownerTable"] = "q_buscador_usuarios_all";
	$fdata["Label"] = GetFieldLabel("q_buscador_usuarios_all","idusrglobal");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "idusrglobal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idusrglobal";

	
	
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


	$tdataq_buscador_usuarios_all["idusrglobal"] = $fdata;
		$tdataq_buscador_usuarios_all[".searchableFields"][] = "idusrglobal";
//	Username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Username";
	$fdata["GoodName"] = "Username";
	$fdata["ownerTable"] = "q_buscador_usuarios_all";
	$fdata["Label"] = GetFieldLabel("q_buscador_usuarios_all","Username");
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


	$tdataq_buscador_usuarios_all["Username"] = $fdata;
		$tdataq_buscador_usuarios_all[".searchableFields"][] = "Username";
//	usr_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "usr_email";
	$fdata["GoodName"] = "usr_email";
	$fdata["ownerTable"] = "q_buscador_usuarios_all";
	$fdata["Label"] = GetFieldLabel("q_buscador_usuarios_all","usr_email");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "usr_email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_email";

	
	
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


	$tdataq_buscador_usuarios_all["usr_email"] = $fdata;
		$tdataq_buscador_usuarios_all[".searchableFields"][] = "usr_email";
//	usr_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "usr_name";
	$fdata["GoodName"] = "usr_name";
	$fdata["ownerTable"] = "q_buscador_usuarios_all";
	$fdata["Label"] = GetFieldLabel("q_buscador_usuarios_all","usr_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "usr_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_name";

	
	
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


	$tdataq_buscador_usuarios_all["usr_name"] = $fdata;
		$tdataq_buscador_usuarios_all[".searchableFields"][] = "usr_name";
//	usr_lname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "usr_lname";
	$fdata["GoodName"] = "usr_lname";
	$fdata["ownerTable"] = "q_buscador_usuarios_all";
	$fdata["Label"] = GetFieldLabel("q_buscador_usuarios_all","usr_lname");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "usr_lname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_lname";

	
	
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


	$tdataq_buscador_usuarios_all["usr_lname"] = $fdata;
		$tdataq_buscador_usuarios_all[".searchableFields"][] = "usr_lname";
//	usr_personalid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "usr_personalid";
	$fdata["GoodName"] = "usr_personalid";
	$fdata["ownerTable"] = "q_buscador_usuarios_all";
	$fdata["Label"] = GetFieldLabel("q_buscador_usuarios_all","usr_personalid");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "usr_personalid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_personalid";

	
	
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


	$tdataq_buscador_usuarios_all["usr_personalid"] = $fdata;
		$tdataq_buscador_usuarios_all[".searchableFields"][] = "usr_personalid";
//	usr_image
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "usr_image";
	$fdata["GoodName"] = "usr_image";
	$fdata["ownerTable"] = "q_buscador_usuarios_all";
	$fdata["Label"] = GetFieldLabel("q_buscador_usuarios_all","usr_image");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "usr_image";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_image";

	
	
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


	$tdataq_buscador_usuarios_all["usr_image"] = $fdata;
		$tdataq_buscador_usuarios_all[".searchableFields"][] = "usr_image";
//	BUSCADOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "BUSCADOR";
	$fdata["GoodName"] = "BUSCADOR";
	$fdata["ownerTable"] = "q_buscador_usuarios_all";
	$fdata["Label"] = GetFieldLabel("q_buscador_usuarios_all","BUSCADOR");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "BUSCADOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BUSCADOR";

	
	
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
			$edata["EditParams"].= " maxlength=172";

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


	$tdataq_buscador_usuarios_all["BUSCADOR"] = $fdata;
		$tdataq_buscador_usuarios_all[".searchableFields"][] = "BUSCADOR";
//	usr_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "usr_status";
	$fdata["GoodName"] = "usr_status";
	$fdata["ownerTable"] = "q_buscador_usuarios_all";
	$fdata["Label"] = GetFieldLabel("q_buscador_usuarios_all","usr_status");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "usr_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_status";

	
	
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


	$tdataq_buscador_usuarios_all["usr_status"] = $fdata;
		$tdataq_buscador_usuarios_all[".searchableFields"][] = "usr_status";
//	status_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "status_name";
	$fdata["GoodName"] = "status_name";
	$fdata["ownerTable"] = "q_buscador_usuarios_all";
	$fdata["Label"] = GetFieldLabel("q_buscador_usuarios_all","status_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "status_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status_name";

	
	
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


	$tdataq_buscador_usuarios_all["status_name"] = $fdata;
		$tdataq_buscador_usuarios_all[".searchableFields"][] = "status_name";
//	usr_dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "usr_dependencia";
	$fdata["GoodName"] = "usr_dependencia";
	$fdata["ownerTable"] = "q_buscador_usuarios_all";
	$fdata["Label"] = GetFieldLabel("q_buscador_usuarios_all","usr_dependencia");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "usr_dependencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_dependencia";

	
	
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
			$edata["EditParams"].= " maxlength=3";

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


	$tdataq_buscador_usuarios_all["usr_dependencia"] = $fdata;
		$tdataq_buscador_usuarios_all[".searchableFields"][] = "usr_dependencia";
//	usr_emergencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "usr_emergencia";
	$fdata["GoodName"] = "usr_emergencia";
	$fdata["ownerTable"] = "q_buscador_usuarios_all";
	$fdata["Label"] = GetFieldLabel("q_buscador_usuarios_all","usr_emergencia");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "usr_emergencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_emergencia";

	
	
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


	$tdataq_buscador_usuarios_all["usr_emergencia"] = $fdata;
		$tdataq_buscador_usuarios_all[".searchableFields"][] = "usr_emergencia";
//	usr_extension
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "usr_extension";
	$fdata["GoodName"] = "usr_extension";
	$fdata["ownerTable"] = "q_buscador_usuarios_all";
	$fdata["Label"] = GetFieldLabel("q_buscador_usuarios_all","usr_extension");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "usr_extension";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_extension";

	
	
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
			$edata["EditParams"].= " maxlength=16";

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


	$tdataq_buscador_usuarios_all["usr_extension"] = $fdata;
		$tdataq_buscador_usuarios_all[".searchableFields"][] = "usr_extension";
//	usr_piso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "usr_piso";
	$fdata["GoodName"] = "usr_piso";
	$fdata["ownerTable"] = "q_buscador_usuarios_all";
	$fdata["Label"] = GetFieldLabel("q_buscador_usuarios_all","usr_piso");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "usr_piso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_piso";

	
	
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


	$tdataq_buscador_usuarios_all["usr_piso"] = $fdata;
		$tdataq_buscador_usuarios_all[".searchableFields"][] = "usr_piso";
//	global_rol_me
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "global_rol_me";
	$fdata["GoodName"] = "global_rol_me";
	$fdata["ownerTable"] = "q_buscador_usuarios_all";
	$fdata["Label"] = GetFieldLabel("q_buscador_usuarios_all","global_rol_me");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "global_rol_me";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_me";

	
	
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


	$tdataq_buscador_usuarios_all["global_rol_me"] = $fdata;
		$tdataq_buscador_usuarios_all[".searchableFields"][] = "global_rol_me";
//	usr_minequipo_lider
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "usr_minequipo_lider";
	$fdata["GoodName"] = "usr_minequipo_lider";
	$fdata["ownerTable"] = "q_buscador_usuarios_all";
	$fdata["Label"] = GetFieldLabel("q_buscador_usuarios_all","usr_minequipo_lider");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "usr_minequipo_lider";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_minequipo_lider";

	
	
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


	$tdataq_buscador_usuarios_all["usr_minequipo_lider"] = $fdata;
		$tdataq_buscador_usuarios_all[".searchableFields"][] = "usr_minequipo_lider";
//	usr_minequipo_grupo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "usr_minequipo_grupo";
	$fdata["GoodName"] = "usr_minequipo_grupo";
	$fdata["ownerTable"] = "q_buscador_usuarios_all";
	$fdata["Label"] = GetFieldLabel("q_buscador_usuarios_all","usr_minequipo_grupo");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "usr_minequipo_grupo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_minequipo_grupo";

	
	
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


	$tdataq_buscador_usuarios_all["usr_minequipo_grupo"] = $fdata;
		$tdataq_buscador_usuarios_all[".searchableFields"][] = "usr_minequipo_grupo";
//	usr_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "usr_dep";
	$fdata["GoodName"] = "usr_dep";
	$fdata["ownerTable"] = "q_buscador_usuarios_all";
	$fdata["Label"] = GetFieldLabel("q_buscador_usuarios_all","usr_dep");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "usr_dep";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_dep";

	
	
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


	$tdataq_buscador_usuarios_all["usr_dep"] = $fdata;
		$tdataq_buscador_usuarios_all[".searchableFields"][] = "usr_dep";
//	usr_cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "usr_cargo";
	$fdata["GoodName"] = "usr_cargo";
	$fdata["ownerTable"] = "q_buscador_usuarios_all";
	$fdata["Label"] = GetFieldLabel("q_buscador_usuarios_all","usr_cargo");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "usr_cargo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_cargo";

	
	
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


	$tdataq_buscador_usuarios_all["usr_cargo"] = $fdata;
		$tdataq_buscador_usuarios_all[".searchableFields"][] = "usr_cargo";
//	nombre_de_cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "nombre_de_cargo";
	$fdata["GoodName"] = "nombre_de_cargo";
	$fdata["ownerTable"] = "q_buscador_usuarios_all";
	$fdata["Label"] = GetFieldLabel("q_buscador_usuarios_all","nombre_de_cargo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nombre_de_cargo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_de_cargo";

	
	
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


	$tdataq_buscador_usuarios_all["nombre_de_cargo"] = $fdata;
		$tdataq_buscador_usuarios_all[".searchableFields"][] = "nombre_de_cargo";
//	cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "cargo";
	$fdata["GoodName"] = "cargo";
	$fdata["ownerTable"] = "q_buscador_usuarios_all";
	$fdata["Label"] = GetFieldLabel("q_buscador_usuarios_all","cargo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cargo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cargo";

	
	
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
			$edata["EditParams"].= " maxlength=6";

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


	$tdataq_buscador_usuarios_all["cargo"] = $fdata;
		$tdataq_buscador_usuarios_all[".searchableFields"][] = "cargo";
//	grado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "grado";
	$fdata["GoodName"] = "grado";
	$fdata["ownerTable"] = "q_buscador_usuarios_all";
	$fdata["Label"] = GetFieldLabel("q_buscador_usuarios_all","grado");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "grado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grado";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdataq_buscador_usuarios_all["grado"] = $fdata;
		$tdataq_buscador_usuarios_all[".searchableFields"][] = "grado";
//	nombre_dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "nombre_dependencia";
	$fdata["GoodName"] = "nombre_dependencia";
	$fdata["ownerTable"] = "q_buscador_usuarios_all";
	$fdata["Label"] = GetFieldLabel("q_buscador_usuarios_all","nombre_dependencia");
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


	$tdataq_buscador_usuarios_all["nombre_dependencia"] = $fdata;
		$tdataq_buscador_usuarios_all[".searchableFields"][] = "nombre_dependencia";
//	Departamento_superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Departamento_superior";
	$fdata["GoodName"] = "Departamento_superior";
	$fdata["ownerTable"] = "q_buscador_usuarios_all";
	$fdata["Label"] = GetFieldLabel("q_buscador_usuarios_all","Departamento_superior");
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


	$tdataq_buscador_usuarios_all["Departamento_superior"] = $fdata;
		$tdataq_buscador_usuarios_all[".searchableFields"][] = "Departamento_superior";
//	usr_nombresfull
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "usr_nombresfull";
	$fdata["GoodName"] = "usr_nombresfull";
	$fdata["ownerTable"] = "q_buscador_usuarios_all";
	$fdata["Label"] = GetFieldLabel("q_buscador_usuarios_all","usr_nombresfull");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "usr_nombresfull";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_nombresfull";

	
	
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


	$tdataq_buscador_usuarios_all["usr_nombresfull"] = $fdata;
		$tdataq_buscador_usuarios_all[".searchableFields"][] = "usr_nombresfull";


$tables_data["q_buscador_usuarios_all"]=&$tdataq_buscador_usuarios_all;
$field_labels["q_buscador_usuarios_all"] = &$fieldLabelsq_buscador_usuarios_all;
$fieldToolTips["q_buscador_usuarios_all"] = &$fieldToolTipsq_buscador_usuarios_all;
$placeHolders["q_buscador_usuarios_all"] = &$placeHoldersq_buscador_usuarios_all;
$page_titles["q_buscador_usuarios_all"] = &$pageTitlesq_buscador_usuarios_all;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["q_buscador_usuarios_all"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["q_buscador_usuarios_all"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_q_buscador_usuarios_all()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idusrglobal,  	Username,  	usr_email,  	usr_name,  	usr_lname,  	usr_personalid,  	usr_image,  	BUSCADOR,  	usr_status,  	status_name,  	usr_dependencia,  	usr_emergencia,  	usr_extension,  	usr_piso,  	global_rol_me,  	usr_minequipo_lider,  	usr_minequipo_grupo,  	usr_dep,  	usr_cargo,  	nombre_de_cargo,  	cargo,  	grado,  	nombre_dependencia,  	Departamento_superior,  	usr_nombresfull";
$proto0["m_strFrom"] = "FROM q_buscador_usuarios_all";
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
	"m_strName" => "idusrglobal",
	"m_strTable" => "q_buscador_usuarios_all",
	"m_srcTableName" => "q_buscador_usuarios_all"
));

$proto6["m_sql"] = "idusrglobal";
$proto6["m_srcTableName"] = "q_buscador_usuarios_all";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Username",
	"m_strTable" => "q_buscador_usuarios_all",
	"m_srcTableName" => "q_buscador_usuarios_all"
));

$proto8["m_sql"] = "Username";
$proto8["m_srcTableName"] = "q_buscador_usuarios_all";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_email",
	"m_strTable" => "q_buscador_usuarios_all",
	"m_srcTableName" => "q_buscador_usuarios_all"
));

$proto10["m_sql"] = "usr_email";
$proto10["m_srcTableName"] = "q_buscador_usuarios_all";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_name",
	"m_strTable" => "q_buscador_usuarios_all",
	"m_srcTableName" => "q_buscador_usuarios_all"
));

$proto12["m_sql"] = "usr_name";
$proto12["m_srcTableName"] = "q_buscador_usuarios_all";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_lname",
	"m_strTable" => "q_buscador_usuarios_all",
	"m_srcTableName" => "q_buscador_usuarios_all"
));

$proto14["m_sql"] = "usr_lname";
$proto14["m_srcTableName"] = "q_buscador_usuarios_all";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_personalid",
	"m_strTable" => "q_buscador_usuarios_all",
	"m_srcTableName" => "q_buscador_usuarios_all"
));

$proto16["m_sql"] = "usr_personalid";
$proto16["m_srcTableName"] = "q_buscador_usuarios_all";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_image",
	"m_strTable" => "q_buscador_usuarios_all",
	"m_srcTableName" => "q_buscador_usuarios_all"
));

$proto18["m_sql"] = "usr_image";
$proto18["m_srcTableName"] = "q_buscador_usuarios_all";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "BUSCADOR",
	"m_strTable" => "q_buscador_usuarios_all",
	"m_srcTableName" => "q_buscador_usuarios_all"
));

$proto20["m_sql"] = "BUSCADOR";
$proto20["m_srcTableName"] = "q_buscador_usuarios_all";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_status",
	"m_strTable" => "q_buscador_usuarios_all",
	"m_srcTableName" => "q_buscador_usuarios_all"
));

$proto22["m_sql"] = "usr_status";
$proto22["m_srcTableName"] = "q_buscador_usuarios_all";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "status_name",
	"m_strTable" => "q_buscador_usuarios_all",
	"m_srcTableName" => "q_buscador_usuarios_all"
));

$proto24["m_sql"] = "status_name";
$proto24["m_srcTableName"] = "q_buscador_usuarios_all";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_dependencia",
	"m_strTable" => "q_buscador_usuarios_all",
	"m_srcTableName" => "q_buscador_usuarios_all"
));

$proto26["m_sql"] = "usr_dependencia";
$proto26["m_srcTableName"] = "q_buscador_usuarios_all";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_emergencia",
	"m_strTable" => "q_buscador_usuarios_all",
	"m_srcTableName" => "q_buscador_usuarios_all"
));

$proto28["m_sql"] = "usr_emergencia";
$proto28["m_srcTableName"] = "q_buscador_usuarios_all";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_extension",
	"m_strTable" => "q_buscador_usuarios_all",
	"m_srcTableName" => "q_buscador_usuarios_all"
));

$proto30["m_sql"] = "usr_extension";
$proto30["m_srcTableName"] = "q_buscador_usuarios_all";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_piso",
	"m_strTable" => "q_buscador_usuarios_all",
	"m_srcTableName" => "q_buscador_usuarios_all"
));

$proto32["m_sql"] = "usr_piso";
$proto32["m_srcTableName"] = "q_buscador_usuarios_all";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_me",
	"m_strTable" => "q_buscador_usuarios_all",
	"m_srcTableName" => "q_buscador_usuarios_all"
));

$proto34["m_sql"] = "global_rol_me";
$proto34["m_srcTableName"] = "q_buscador_usuarios_all";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_minequipo_lider",
	"m_strTable" => "q_buscador_usuarios_all",
	"m_srcTableName" => "q_buscador_usuarios_all"
));

$proto36["m_sql"] = "usr_minequipo_lider";
$proto36["m_srcTableName"] = "q_buscador_usuarios_all";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_minequipo_grupo",
	"m_strTable" => "q_buscador_usuarios_all",
	"m_srcTableName" => "q_buscador_usuarios_all"
));

$proto38["m_sql"] = "usr_minequipo_grupo";
$proto38["m_srcTableName"] = "q_buscador_usuarios_all";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_dep",
	"m_strTable" => "q_buscador_usuarios_all",
	"m_srcTableName" => "q_buscador_usuarios_all"
));

$proto40["m_sql"] = "usr_dep";
$proto40["m_srcTableName"] = "q_buscador_usuarios_all";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_cargo",
	"m_strTable" => "q_buscador_usuarios_all",
	"m_srcTableName" => "q_buscador_usuarios_all"
));

$proto42["m_sql"] = "usr_cargo";
$proto42["m_srcTableName"] = "q_buscador_usuarios_all";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_de_cargo",
	"m_strTable" => "q_buscador_usuarios_all",
	"m_srcTableName" => "q_buscador_usuarios_all"
));

$proto44["m_sql"] = "nombre_de_cargo";
$proto44["m_srcTableName"] = "q_buscador_usuarios_all";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "cargo",
	"m_strTable" => "q_buscador_usuarios_all",
	"m_srcTableName" => "q_buscador_usuarios_all"
));

$proto46["m_sql"] = "cargo";
$proto46["m_srcTableName"] = "q_buscador_usuarios_all";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "grado",
	"m_strTable" => "q_buscador_usuarios_all",
	"m_srcTableName" => "q_buscador_usuarios_all"
));

$proto48["m_sql"] = "grado";
$proto48["m_srcTableName"] = "q_buscador_usuarios_all";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_dependencia",
	"m_strTable" => "q_buscador_usuarios_all",
	"m_srcTableName" => "q_buscador_usuarios_all"
));

$proto50["m_sql"] = "nombre_dependencia";
$proto50["m_srcTableName"] = "q_buscador_usuarios_all";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Departamento_superior",
	"m_strTable" => "q_buscador_usuarios_all",
	"m_srcTableName" => "q_buscador_usuarios_all"
));

$proto52["m_sql"] = "Departamento_superior";
$proto52["m_srcTableName"] = "q_buscador_usuarios_all";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_nombresfull",
	"m_strTable" => "q_buscador_usuarios_all",
	"m_srcTableName" => "q_buscador_usuarios_all"
));

$proto54["m_sql"] = "usr_nombresfull";
$proto54["m_srcTableName"] = "q_buscador_usuarios_all";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto56=array();
$proto56["m_link"] = "SQLL_MAIN";
			$proto57=array();
$proto57["m_strName"] = "q_buscador_usuarios_all";
$proto57["m_srcTableName"] = "q_buscador_usuarios_all";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "idusrglobal";
$proto57["m_columns"][] = "Username";
$proto57["m_columns"][] = "usr_email";
$proto57["m_columns"][] = "usr_name";
$proto57["m_columns"][] = "usr_lname";
$proto57["m_columns"][] = "usr_personalid";
$proto57["m_columns"][] = "usr_image";
$proto57["m_columns"][] = "BUSCADOR";
$proto57["m_columns"][] = "usr_status";
$proto57["m_columns"][] = "status_name";
$proto57["m_columns"][] = "usr_dependencia";
$proto57["m_columns"][] = "usr_emergencia";
$proto57["m_columns"][] = "usr_extension";
$proto57["m_columns"][] = "usr_piso";
$proto57["m_columns"][] = "global_rol_me";
$proto57["m_columns"][] = "usr_minequipo_lider";
$proto57["m_columns"][] = "usr_minequipo_grupo";
$proto57["m_columns"][] = "usr_dep";
$proto57["m_columns"][] = "usr_cargo";
$proto57["m_columns"][] = "nombre_de_cargo";
$proto57["m_columns"][] = "cargo";
$proto57["m_columns"][] = "grado";
$proto57["m_columns"][] = "nombre_dependencia";
$proto57["m_columns"][] = "Departamento_superior";
$proto57["m_columns"][] = "usr_nombresfull";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "q_buscador_usuarios_all";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "q_buscador_usuarios_all";
$proto58=array();
$proto58["m_sql"] = "";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="q_buscador_usuarios_all";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_buscador_usuarios_all = createSqlQuery_q_buscador_usuarios_all();


	
								;

																									

$tdataq_buscador_usuarios_all[".sqlquery"] = $queryData_q_buscador_usuarios_all;

$tableEvents["q_buscador_usuarios_all"] = new eventsBase;
$tdataq_buscador_usuarios_all[".hasEvents"] = false;

?>