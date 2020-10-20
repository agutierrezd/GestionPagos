<?php



$tdatahoja_ruta_ob = array();
$tdatahoja_ruta_ob[".searchableFields"] = array();
$tdatahoja_ruta_ob[".ShortName"] = "hoja_ruta_ob";
$tdatahoja_ruta_ob[".OwnerID"] = "";
$tdatahoja_ruta_ob[".OriginalTable"] = "hoja_ruta_ob";


$tdatahoja_ruta_ob[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatahoja_ruta_ob[".originalPagesByType"] = $tdatahoja_ruta_ob[".pagesByType"];
$tdatahoja_ruta_ob[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatahoja_ruta_ob[".originalPages"] = $tdatahoja_ruta_ob[".pages"];
$tdatahoja_ruta_ob[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatahoja_ruta_ob[".originalDefaultPages"] = $tdatahoja_ruta_ob[".defaultPages"];

//	field labels
$fieldLabelshoja_ruta_ob = array();
$fieldToolTipshoja_ruta_ob = array();
$pageTitleshoja_ruta_ob = array();
$placeHoldershoja_ruta_ob = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshoja_ruta_ob["Spanish"] = array();
	$fieldToolTipshoja_ruta_ob["Spanish"] = array();
	$placeHoldershoja_ruta_ob["Spanish"] = array();
	$pageTitleshoja_ruta_ob["Spanish"] = array();
	$fieldLabelshoja_ruta_ob["Spanish"]["ctrlpagos_id"] = "Ctrlpagos Id";
	$fieldToolTipshoja_ruta_ob["Spanish"]["ctrlpagos_id"] = "";
	$placeHoldershoja_ruta_ob["Spanish"]["ctrlpagos_id"] = "";
	$fieldLabelshoja_ruta_ob["Spanish"]["hr_id_fk"] = "Hoja ruta";
	$fieldToolTipshoja_ruta_ob["Spanish"]["hr_id_fk"] = "";
	$placeHoldershoja_ruta_ob["Spanish"]["hr_id_fk"] = "";
	$fieldLabelshoja_ruta_ob["Spanish"]["id_cont_fk"] = "Cont_ID";
	$fieldToolTipshoja_ruta_ob["Spanish"]["id_cont_fk"] = "";
	$placeHoldershoja_ruta_ob["Spanish"]["id_cont_fk"] = "";
	$fieldLabelshoja_ruta_ob["Spanish"]["ob_num"] = "Obligación Número";
	$fieldToolTipshoja_ruta_ob["Spanish"]["ob_num"] = "";
	$placeHoldershoja_ruta_ob["Spanish"]["ob_num"] = "";
	$fieldLabelshoja_ruta_ob["Spanish"]["ob_fecha"] = "Fecha de Obligación";
	$fieldToolTipshoja_ruta_ob["Spanish"]["ob_fecha"] = "";
	$placeHoldershoja_ruta_ob["Spanish"]["ob_fecha"] = "";
	$fieldLabelshoja_ruta_ob["Spanish"]["ob_anexo"] = "Anexar Obligación";
	$fieldToolTipshoja_ruta_ob["Spanish"]["ob_anexo"] = "";
	$placeHoldershoja_ruta_ob["Spanish"]["ob_anexo"] = "";
	$fieldLabelshoja_ruta_ob["Spanish"]["ob_user"] = "Registrado por";
	$fieldToolTipshoja_ruta_ob["Spanish"]["ob_user"] = "";
	$placeHoldershoja_ruta_ob["Spanish"]["ob_user"] = "";
	$fieldLabelshoja_ruta_ob["Spanish"]["ob_fechauser"] = "Fecha sistema";
	$fieldToolTipshoja_ruta_ob["Spanish"]["ob_fechauser"] = "";
	$placeHoldershoja_ruta_ob["Spanish"]["ob_fechauser"] = "";
	$fieldLabelshoja_ruta_ob["Spanish"]["tercero_email_a"] = "Email personal";
	$fieldToolTipshoja_ruta_ob["Spanish"]["tercero_email_a"] = "";
	$placeHoldershoja_ruta_ob["Spanish"]["tercero_email_a"] = "";
	$fieldLabelshoja_ruta_ob["Spanish"]["tercero_email_b"] = "Email institucional";
	$fieldToolTipshoja_ruta_ob["Spanish"]["tercero_email_b"] = "";
	$placeHoldershoja_ruta_ob["Spanish"]["tercero_email_b"] = "";
	if (count($fieldToolTipshoja_ruta_ob["Spanish"]))
		$tdatahoja_ruta_ob[".isUseToolTips"] = true;
}


	$tdatahoja_ruta_ob[".NCSearch"] = true;



$tdatahoja_ruta_ob[".shortTableName"] = "hoja_ruta_ob";
$tdatahoja_ruta_ob[".nSecOptions"] = 0;

$tdatahoja_ruta_ob[".mainTableOwnerID"] = "";
$tdatahoja_ruta_ob[".entityType"] = 0;

$tdatahoja_ruta_ob[".strOriginalTableName"] = "hoja_ruta_ob";

	



$tdatahoja_ruta_ob[".showAddInPopup"] = false;

$tdatahoja_ruta_ob[".showEditInPopup"] = false;

$tdatahoja_ruta_ob[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahoja_ruta_ob[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahoja_ruta_ob[".listAjax"] = false;
//	temporary
$tdatahoja_ruta_ob[".listAjax"] = false;

	$tdatahoja_ruta_ob[".audit"] = true;

	$tdatahoja_ruta_ob[".locking"] = true;


$pages = $tdatahoja_ruta_ob[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahoja_ruta_ob[".edit"] = true;
	$tdatahoja_ruta_ob[".afterEditAction"] = 1;
	$tdatahoja_ruta_ob[".closePopupAfterEdit"] = 1;
	$tdatahoja_ruta_ob[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahoja_ruta_ob[".add"] = true;
$tdatahoja_ruta_ob[".afterAddAction"] = 1;
$tdatahoja_ruta_ob[".closePopupAfterAdd"] = 1;
$tdatahoja_ruta_ob[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahoja_ruta_ob[".list"] = true;
}



$tdatahoja_ruta_ob[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahoja_ruta_ob[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahoja_ruta_ob[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahoja_ruta_ob[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahoja_ruta_ob[".printFriendly"] = true;
}



$tdatahoja_ruta_ob[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahoja_ruta_ob[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahoja_ruta_ob[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahoja_ruta_ob[".isUseAjaxSuggest"] = true;

$tdatahoja_ruta_ob[".rowHighlite"] = true;





$tdatahoja_ruta_ob[".ajaxCodeSnippetAdded"] = false;

$tdatahoja_ruta_ob[".buttonsAdded"] = false;

$tdatahoja_ruta_ob[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahoja_ruta_ob[".isUseTimeForSearch"] = false;


$tdatahoja_ruta_ob[".badgeColor"] = "db7093";


$tdatahoja_ruta_ob[".allSearchFields"] = array();
$tdatahoja_ruta_ob[".filterFields"] = array();
$tdatahoja_ruta_ob[".requiredSearchFields"] = array();

$tdatahoja_ruta_ob[".googleLikeFields"] = array();
$tdatahoja_ruta_ob[".googleLikeFields"][] = "ctrlpagos_id";
$tdatahoja_ruta_ob[".googleLikeFields"][] = "hr_id_fk";
$tdatahoja_ruta_ob[".googleLikeFields"][] = "id_cont_fk";
$tdatahoja_ruta_ob[".googleLikeFields"][] = "ob_num";
$tdatahoja_ruta_ob[".googleLikeFields"][] = "ob_fecha";
$tdatahoja_ruta_ob[".googleLikeFields"][] = "ob_anexo";
$tdatahoja_ruta_ob[".googleLikeFields"][] = "ob_user";
$tdatahoja_ruta_ob[".googleLikeFields"][] = "ob_fechauser";
$tdatahoja_ruta_ob[".googleLikeFields"][] = "tercero_email_a";
$tdatahoja_ruta_ob[".googleLikeFields"][] = "tercero_email_b";



$tdatahoja_ruta_ob[".tableType"] = "list";

$tdatahoja_ruta_ob[".printerPageOrientation"] = 0;
$tdatahoja_ruta_ob[".nPrinterPageScale"] = 100;

$tdatahoja_ruta_ob[".nPrinterSplitRecords"] = 40;

$tdatahoja_ruta_ob[".geocodingEnabled"] = false;










$tdatahoja_ruta_ob[".pageSize"] = 20;

$tdatahoja_ruta_ob[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahoja_ruta_ob[".strOrderBy"] = $tstrOrderBy;

$tdatahoja_ruta_ob[".orderindexes"] = array();

$tdatahoja_ruta_ob[".sqlHead"] = "SELECT ctrlpagos_id,  	hr_id_fk,  	id_cont_fk,  	ob_num,  	ob_fecha,  	ob_anexo,  	ob_user,  	ob_fechauser,  	tercero_email_a,  	tercero_email_b";
$tdatahoja_ruta_ob[".sqlFrom"] = "FROM hoja_ruta_ob";
$tdatahoja_ruta_ob[".sqlWhereExpr"] = "";
$tdatahoja_ruta_ob[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahoja_ruta_ob[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahoja_ruta_ob[".arrGroupsPerPage"] = $arrGPP;

$tdatahoja_ruta_ob[".highlightSearchResults"] = true;

$tableKeyshoja_ruta_ob = array();
$tableKeyshoja_ruta_ob[] = "ctrlpagos_id";
$tdatahoja_ruta_ob[".Keys"] = $tableKeyshoja_ruta_ob;


$tdatahoja_ruta_ob[".hideMobileList"] = array();




//	ctrlpagos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ctrlpagos_id";
	$fdata["GoodName"] = "ctrlpagos_id";
	$fdata["ownerTable"] = "hoja_ruta_ob";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_ob","ctrlpagos_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ctrlpagos_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ctrlpagos_id";

	
	
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


	$tdatahoja_ruta_ob["ctrlpagos_id"] = $fdata;
		$tdatahoja_ruta_ob[".searchableFields"][] = "ctrlpagos_id";
//	hr_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "hr_id_fk";
	$fdata["GoodName"] = "hr_id_fk";
	$fdata["ownerTable"] = "hoja_ruta_ob";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_ob","hr_id_fk");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "hr_id_fk";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_id_fk";

	
	
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
	$edata["LookupTable"] = "hoja_ruta_2020";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"id_cont_fk", 'lookupF'=>"id_cont_fk");
	$edata["autoCompleteFields"][] = array('masterF'=>"tercero_email_a", 'lookupF'=>"tercero_email_a");
	$edata["autoCompleteFields"][] = array('masterF'=>"tercero_email_b", 'lookupF'=>"tercero_email_b");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "hr_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "hr_id";

	

	
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


	$tdatahoja_ruta_ob["hr_id_fk"] = $fdata;
		$tdatahoja_ruta_ob[".searchableFields"][] = "hr_id_fk";
//	id_cont_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_cont_fk";
	$fdata["GoodName"] = "id_cont_fk";
	$fdata["ownerTable"] = "hoja_ruta_ob";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_ob","id_cont_fk");
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


	$tdatahoja_ruta_ob["id_cont_fk"] = $fdata;
		$tdatahoja_ruta_ob[".searchableFields"][] = "id_cont_fk";
//	ob_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ob_num";
	$fdata["GoodName"] = "ob_num";
	$fdata["ownerTable"] = "hoja_ruta_ob";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_ob","ob_num");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ob_num";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ob_num";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=15";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "El número ingresado ya existe!", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatahoja_ruta_ob["ob_num"] = $fdata;
		$tdatahoja_ruta_ob[".searchableFields"][] = "ob_num";
//	ob_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ob_fecha";
	$fdata["GoodName"] = "ob_fecha";
	$fdata["ownerTable"] = "hoja_ruta_ob";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_ob","ob_fecha");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "ob_fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ob_fecha";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 1;
	$edata["LastYearFactor"] = 1;

	
	
	
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


	$tdatahoja_ruta_ob["ob_fecha"] = $fdata;
		$tdatahoja_ruta_ob[".searchableFields"][] = "ob_fecha";
//	ob_anexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ob_anexo";
	$fdata["GoodName"] = "ob_anexo";
	$fdata["ownerTable"] = "hoja_ruta_ob";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_ob","ob_anexo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ob_anexo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ob_anexo";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["UploadFolder"] = "files/ob/";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
							$edata["acceptFileTypes"] = "pdf";
			$edata["acceptFileTypesHtml"] = ".pdf";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";

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


	$tdatahoja_ruta_ob["ob_anexo"] = $fdata;
		$tdatahoja_ruta_ob[".searchableFields"][] = "ob_anexo";
//	ob_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ob_user";
	$fdata["GoodName"] = "ob_user";
	$fdata["ownerTable"] = "hoja_ruta_ob";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_ob","ob_user");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ob_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ob_user";

	
	
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


	$tdatahoja_ruta_ob["ob_user"] = $fdata;
		$tdatahoja_ruta_ob[".searchableFields"][] = "ob_user";
//	ob_fechauser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ob_fechauser";
	$fdata["GoodName"] = "ob_fechauser";
	$fdata["ownerTable"] = "hoja_ruta_ob";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_ob","ob_fechauser");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "ob_fechauser";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ob_fechauser";

	
	
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


	$tdatahoja_ruta_ob["ob_fechauser"] = $fdata;
		$tdatahoja_ruta_ob[".searchableFields"][] = "ob_fechauser";
//	tercero_email_a
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "tercero_email_a";
	$fdata["GoodName"] = "tercero_email_a";
	$fdata["ownerTable"] = "hoja_ruta_ob";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_ob","tercero_email_a");
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


	$tdatahoja_ruta_ob["tercero_email_a"] = $fdata;
		$tdatahoja_ruta_ob[".searchableFields"][] = "tercero_email_a";
//	tercero_email_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "tercero_email_b";
	$fdata["GoodName"] = "tercero_email_b";
	$fdata["ownerTable"] = "hoja_ruta_ob";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_ob","tercero_email_b");
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


	$tdatahoja_ruta_ob["tercero_email_b"] = $fdata;
		$tdatahoja_ruta_ob[".searchableFields"][] = "tercero_email_b";


$tables_data["hoja_ruta_ob"]=&$tdatahoja_ruta_ob;
$field_labels["hoja_ruta_ob"] = &$fieldLabelshoja_ruta_ob;
$fieldToolTips["hoja_ruta_ob"] = &$fieldToolTipshoja_ruta_ob;
$placeHolders["hoja_ruta_ob"] = &$placeHoldershoja_ruta_ob;
$page_titles["hoja_ruta_ob"] = &$pageTitleshoja_ruta_ob;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hoja_ruta_ob"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["hoja_ruta_ob"] = array();



	
				$strOriginalDetailsTable="hoja_ruta_2020";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hoja_ruta_2020_pn1";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "hoja_ruta_2020_pn1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["hoja_ruta_ob"][0] = $masterParams;
				$masterTablesData["hoja_ruta_ob"][0]["masterKeys"] = array();
	$masterTablesData["hoja_ruta_ob"][0]["masterKeys"][]="hr_id";
				$masterTablesData["hoja_ruta_ob"][0]["detailKeys"] = array();
	$masterTablesData["hoja_ruta_ob"][0]["detailKeys"][]="hr_id_fk";
		
	
				$strOriginalDetailsTable="hoja_ruta_2020";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hoja_ruta_2020_pn2";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "hoja_ruta_2020_pn2";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["hoja_ruta_ob"][1] = $masterParams;
				$masterTablesData["hoja_ruta_ob"][1]["masterKeys"] = array();
	$masterTablesData["hoja_ruta_ob"][1]["masterKeys"][]="hr_id";
				$masterTablesData["hoja_ruta_ob"][1]["detailKeys"] = array();
	$masterTablesData["hoja_ruta_ob"][1]["detailKeys"][]="hr_id_fk";
		
	
				$strOriginalDetailsTable="hoja_ruta_2020";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hoja_ruta_2020_pn0";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "hoja_ruta_2020_pn0";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["hoja_ruta_ob"][2] = $masterParams;
				$masterTablesData["hoja_ruta_ob"][2]["masterKeys"] = array();
	$masterTablesData["hoja_ruta_ob"][2]["masterKeys"][]="hr_id";
				$masterTablesData["hoja_ruta_ob"][2]["detailKeys"] = array();
	$masterTablesData["hoja_ruta_ob"][2]["detailKeys"][]="hr_id_fk";
		
	
				$strOriginalDetailsTable="hoja_ruta_2020";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hoja_ruta_2020_pnc1";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "hoja_ruta_2020_pnc1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["hoja_ruta_ob"][3] = $masterParams;
				$masterTablesData["hoja_ruta_ob"][3]["masterKeys"] = array();
	$masterTablesData["hoja_ruta_ob"][3]["masterKeys"][]="hr_id";
				$masterTablesData["hoja_ruta_ob"][3]["detailKeys"] = array();
	$masterTablesData["hoja_ruta_ob"][3]["detailKeys"][]="hr_id_fk";
		
	
				$strOriginalDetailsTable="hoja_ruta_2020";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hoja_ruta_2020_pn3";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "hoja_ruta_2020_pn3";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["hoja_ruta_ob"][4] = $masterParams;
				$masterTablesData["hoja_ruta_ob"][4]["masterKeys"] = array();
	$masterTablesData["hoja_ruta_ob"][4]["masterKeys"][]="hr_id";
				$masterTablesData["hoja_ruta_ob"][4]["detailKeys"] = array();
	$masterTablesData["hoja_ruta_ob"][4]["detailKeys"][]="hr_id_fk";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_hoja_ruta_ob()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ctrlpagos_id,  	hr_id_fk,  	id_cont_fk,  	ob_num,  	ob_fecha,  	ob_anexo,  	ob_user,  	ob_fechauser,  	tercero_email_a,  	tercero_email_b";
$proto0["m_strFrom"] = "FROM hoja_ruta_ob";
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
	"m_strName" => "ctrlpagos_id",
	"m_strTable" => "hoja_ruta_ob",
	"m_srcTableName" => "hoja_ruta_ob"
));

$proto6["m_sql"] = "ctrlpagos_id";
$proto6["m_srcTableName"] = "hoja_ruta_ob";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_id_fk",
	"m_strTable" => "hoja_ruta_ob",
	"m_srcTableName" => "hoja_ruta_ob"
));

$proto8["m_sql"] = "hr_id_fk";
$proto8["m_srcTableName"] = "hoja_ruta_ob";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_fk",
	"m_strTable" => "hoja_ruta_ob",
	"m_srcTableName" => "hoja_ruta_ob"
));

$proto10["m_sql"] = "id_cont_fk";
$proto10["m_srcTableName"] = "hoja_ruta_ob";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ob_num",
	"m_strTable" => "hoja_ruta_ob",
	"m_srcTableName" => "hoja_ruta_ob"
));

$proto12["m_sql"] = "ob_num";
$proto12["m_srcTableName"] = "hoja_ruta_ob";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ob_fecha",
	"m_strTable" => "hoja_ruta_ob",
	"m_srcTableName" => "hoja_ruta_ob"
));

$proto14["m_sql"] = "ob_fecha";
$proto14["m_srcTableName"] = "hoja_ruta_ob";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ob_anexo",
	"m_strTable" => "hoja_ruta_ob",
	"m_srcTableName" => "hoja_ruta_ob"
));

$proto16["m_sql"] = "ob_anexo";
$proto16["m_srcTableName"] = "hoja_ruta_ob";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ob_user",
	"m_strTable" => "hoja_ruta_ob",
	"m_srcTableName" => "hoja_ruta_ob"
));

$proto18["m_sql"] = "ob_user";
$proto18["m_srcTableName"] = "hoja_ruta_ob";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ob_fechauser",
	"m_strTable" => "hoja_ruta_ob",
	"m_srcTableName" => "hoja_ruta_ob"
));

$proto20["m_sql"] = "ob_fechauser";
$proto20["m_srcTableName"] = "hoja_ruta_ob";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "tercero_email_a",
	"m_strTable" => "hoja_ruta_ob",
	"m_srcTableName" => "hoja_ruta_ob"
));

$proto22["m_sql"] = "tercero_email_a";
$proto22["m_srcTableName"] = "hoja_ruta_ob";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "tercero_email_b",
	"m_strTable" => "hoja_ruta_ob",
	"m_srcTableName" => "hoja_ruta_ob"
));

$proto24["m_sql"] = "tercero_email_b";
$proto24["m_srcTableName"] = "hoja_ruta_ob";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "hoja_ruta_ob";
$proto27["m_srcTableName"] = "hoja_ruta_ob";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "ctrlpagos_id";
$proto27["m_columns"][] = "hr_id_fk";
$proto27["m_columns"][] = "id_cont_fk";
$proto27["m_columns"][] = "ob_num";
$proto27["m_columns"][] = "ob_fecha";
$proto27["m_columns"][] = "ob_anexo";
$proto27["m_columns"][] = "ob_user";
$proto27["m_columns"][] = "ob_fechauser";
$proto27["m_columns"][] = "tercero_email_a";
$proto27["m_columns"][] = "tercero_email_b";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "hoja_ruta_ob";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "hoja_ruta_ob";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hoja_ruta_ob";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hoja_ruta_ob = createSqlQuery_hoja_ruta_ob();


	
								;

										

$tdatahoja_ruta_ob[".sqlquery"] = $queryData_hoja_ruta_ob;

$tableEvents["hoja_ruta_ob"] = new eventsBase;
$tdatahoja_ruta_ob[".hasEvents"] = false;

?>