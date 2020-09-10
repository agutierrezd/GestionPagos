<?php



$tdatahoja_ruta_event_type = array();
$tdatahoja_ruta_event_type[".searchableFields"] = array();
$tdatahoja_ruta_event_type[".ShortName"] = "hoja_ruta_event_type";
$tdatahoja_ruta_event_type[".OwnerID"] = "";
$tdatahoja_ruta_event_type[".OriginalTable"] = "hoja_ruta_event_type";


$tdatahoja_ruta_event_type[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" );
$tdatahoja_ruta_event_type[".originalPagesByType"] = $tdatahoja_ruta_event_type[".pagesByType"];
$tdatahoja_ruta_event_type[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdatahoja_ruta_event_type[".originalPages"] = $tdatahoja_ruta_event_type[".pages"];
$tdatahoja_ruta_event_type[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );
$tdatahoja_ruta_event_type[".originalDefaultPages"] = $tdatahoja_ruta_event_type[".defaultPages"];

//	field labels
$fieldLabelshoja_ruta_event_type = array();
$fieldToolTipshoja_ruta_event_type = array();
$pageTitleshoja_ruta_event_type = array();
$placeHoldershoja_ruta_event_type = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshoja_ruta_event_type["Spanish"] = array();
	$fieldToolTipshoja_ruta_event_type["Spanish"] = array();
	$placeHoldershoja_ruta_event_type["Spanish"] = array();
	$pageTitleshoja_ruta_event_type["Spanish"] = array();
	$fieldLabelshoja_ruta_event_type["Spanish"]["evento_type_id"] = "Evento Type Id";
	$fieldToolTipshoja_ruta_event_type["Spanish"]["evento_type_id"] = "";
	$placeHoldershoja_ruta_event_type["Spanish"]["evento_type_id"] = "";
	$fieldLabelshoja_ruta_event_type["Spanish"]["evento_type_group"] = "Evento Type Group";
	$fieldToolTipshoja_ruta_event_type["Spanish"]["evento_type_group"] = "";
	$placeHoldershoja_ruta_event_type["Spanish"]["evento_type_group"] = "";
	$fieldLabelshoja_ruta_event_type["Spanish"]["evento_group_id"] = "Evento Group Id";
	$fieldToolTipshoja_ruta_event_type["Spanish"]["evento_group_id"] = "";
	$placeHoldershoja_ruta_event_type["Spanish"]["evento_group_id"] = "";
	$fieldLabelshoja_ruta_event_type["Spanish"]["evento_type_name"] = "Evento Type Name";
	$fieldToolTipshoja_ruta_event_type["Spanish"]["evento_type_name"] = "";
	$placeHoldershoja_ruta_event_type["Spanish"]["evento_type_name"] = "";
	$fieldLabelshoja_ruta_event_type["Spanish"]["evento_id_rol_fk"] = "Evento Id Rol Fk";
	$fieldToolTipshoja_ruta_event_type["Spanish"]["evento_id_rol_fk"] = "";
	$placeHoldershoja_ruta_event_type["Spanish"]["evento_id_rol_fk"] = "";
	$fieldLabelshoja_ruta_event_type["Spanish"]["evento_type_desc"] = "Evento Type Desc";
	$fieldToolTipshoja_ruta_event_type["Spanish"]["evento_type_desc"] = "";
	$placeHoldershoja_ruta_event_type["Spanish"]["evento_type_desc"] = "";
	if (count($fieldToolTipshoja_ruta_event_type["Spanish"]))
		$tdatahoja_ruta_event_type[".isUseToolTips"] = true;
}


	$tdatahoja_ruta_event_type[".NCSearch"] = true;



$tdatahoja_ruta_event_type[".shortTableName"] = "hoja_ruta_event_type";
$tdatahoja_ruta_event_type[".nSecOptions"] = 0;

$tdatahoja_ruta_event_type[".mainTableOwnerID"] = "";
$tdatahoja_ruta_event_type[".entityType"] = 0;

$tdatahoja_ruta_event_type[".strOriginalTableName"] = "hoja_ruta_event_type";

	



$tdatahoja_ruta_event_type[".showAddInPopup"] = false;

$tdatahoja_ruta_event_type[".showEditInPopup"] = false;

$tdatahoja_ruta_event_type[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahoja_ruta_event_type[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahoja_ruta_event_type[".listAjax"] = false;
//	temporary
$tdatahoja_ruta_event_type[".listAjax"] = false;

	$tdatahoja_ruta_event_type[".audit"] = true;

	$tdatahoja_ruta_event_type[".locking"] = true;


$pages = $tdatahoja_ruta_event_type[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahoja_ruta_event_type[".edit"] = true;
	$tdatahoja_ruta_event_type[".afterEditAction"] = 1;
	$tdatahoja_ruta_event_type[".closePopupAfterEdit"] = 1;
	$tdatahoja_ruta_event_type[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahoja_ruta_event_type[".add"] = true;
$tdatahoja_ruta_event_type[".afterAddAction"] = 1;
$tdatahoja_ruta_event_type[".closePopupAfterAdd"] = 1;
$tdatahoja_ruta_event_type[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahoja_ruta_event_type[".list"] = true;
}



$tdatahoja_ruta_event_type[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahoja_ruta_event_type[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahoja_ruta_event_type[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahoja_ruta_event_type[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahoja_ruta_event_type[".printFriendly"] = true;
}



$tdatahoja_ruta_event_type[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahoja_ruta_event_type[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahoja_ruta_event_type[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahoja_ruta_event_type[".isUseAjaxSuggest"] = true;

$tdatahoja_ruta_event_type[".rowHighlite"] = true;





$tdatahoja_ruta_event_type[".ajaxCodeSnippetAdded"] = false;

$tdatahoja_ruta_event_type[".buttonsAdded"] = false;

$tdatahoja_ruta_event_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahoja_ruta_event_type[".isUseTimeForSearch"] = false;


$tdatahoja_ruta_event_type[".badgeColor"] = "CD853F";


$tdatahoja_ruta_event_type[".allSearchFields"] = array();
$tdatahoja_ruta_event_type[".filterFields"] = array();
$tdatahoja_ruta_event_type[".requiredSearchFields"] = array();

$tdatahoja_ruta_event_type[".googleLikeFields"] = array();
$tdatahoja_ruta_event_type[".googleLikeFields"][] = "evento_type_id";
$tdatahoja_ruta_event_type[".googleLikeFields"][] = "evento_type_group";
$tdatahoja_ruta_event_type[".googleLikeFields"][] = "evento_group_id";
$tdatahoja_ruta_event_type[".googleLikeFields"][] = "evento_type_name";
$tdatahoja_ruta_event_type[".googleLikeFields"][] = "evento_id_rol_fk";
$tdatahoja_ruta_event_type[".googleLikeFields"][] = "evento_type_desc";



$tdatahoja_ruta_event_type[".tableType"] = "list";

$tdatahoja_ruta_event_type[".printerPageOrientation"] = 0;
$tdatahoja_ruta_event_type[".nPrinterPageScale"] = 100;

$tdatahoja_ruta_event_type[".nPrinterSplitRecords"] = 40;

$tdatahoja_ruta_event_type[".geocodingEnabled"] = false;










$tdatahoja_ruta_event_type[".pageSize"] = 20;

$tdatahoja_ruta_event_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahoja_ruta_event_type[".strOrderBy"] = $tstrOrderBy;

$tdatahoja_ruta_event_type[".orderindexes"] = array();

$tdatahoja_ruta_event_type[".sqlHead"] = "SELECT evento_type_id,  	evento_type_group,  	evento_group_id,  	evento_type_name,  	evento_id_rol_fk,  	evento_type_desc";
$tdatahoja_ruta_event_type[".sqlFrom"] = "FROM hoja_ruta_event_type";
$tdatahoja_ruta_event_type[".sqlWhereExpr"] = "";
$tdatahoja_ruta_event_type[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahoja_ruta_event_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahoja_ruta_event_type[".arrGroupsPerPage"] = $arrGPP;

$tdatahoja_ruta_event_type[".highlightSearchResults"] = true;

$tableKeyshoja_ruta_event_type = array();
$tableKeyshoja_ruta_event_type[] = "evento_type_id";
$tdatahoja_ruta_event_type[".Keys"] = $tableKeyshoja_ruta_event_type;


$tdatahoja_ruta_event_type[".hideMobileList"] = array();




//	evento_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "evento_type_id";
	$fdata["GoodName"] = "evento_type_id";
	$fdata["ownerTable"] = "hoja_ruta_event_type";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_event_type","evento_type_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "evento_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evento_type_id";

	
	
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


	$tdatahoja_ruta_event_type["evento_type_id"] = $fdata;
		$tdatahoja_ruta_event_type[".searchableFields"][] = "evento_type_id";
//	evento_type_group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "evento_type_group";
	$fdata["GoodName"] = "evento_type_group";
	$fdata["ownerTable"] = "hoja_ruta_event_type";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_event_type","evento_type_group");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "evento_type_group";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evento_type_group";

	
	
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


	$tdatahoja_ruta_event_type["evento_type_group"] = $fdata;
		$tdatahoja_ruta_event_type[".searchableFields"][] = "evento_type_group";
//	evento_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "evento_group_id";
	$fdata["GoodName"] = "evento_group_id";
	$fdata["ownerTable"] = "hoja_ruta_event_type";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_event_type","evento_group_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "evento_group_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evento_group_id";

	
	
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


	$tdatahoja_ruta_event_type["evento_group_id"] = $fdata;
		$tdatahoja_ruta_event_type[".searchableFields"][] = "evento_group_id";
//	evento_type_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "evento_type_name";
	$fdata["GoodName"] = "evento_type_name";
	$fdata["ownerTable"] = "hoja_ruta_event_type";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_event_type","evento_type_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "evento_type_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evento_type_name";

	
	
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


	$tdatahoja_ruta_event_type["evento_type_name"] = $fdata;
		$tdatahoja_ruta_event_type[".searchableFields"][] = "evento_type_name";
//	evento_id_rol_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "evento_id_rol_fk";
	$fdata["GoodName"] = "evento_id_rol_fk";
	$fdata["ownerTable"] = "hoja_ruta_event_type";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_event_type","evento_id_rol_fk");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "evento_id_rol_fk";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evento_id_rol_fk";

	
	
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


	$tdatahoja_ruta_event_type["evento_id_rol_fk"] = $fdata;
		$tdatahoja_ruta_event_type[".searchableFields"][] = "evento_id_rol_fk";
//	evento_type_desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "evento_type_desc";
	$fdata["GoodName"] = "evento_type_desc";
	$fdata["ownerTable"] = "hoja_ruta_event_type";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_event_type","evento_type_desc");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "evento_type_desc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evento_type_desc";

	
	
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


	$tdatahoja_ruta_event_type["evento_type_desc"] = $fdata;
		$tdatahoja_ruta_event_type[".searchableFields"][] = "evento_type_desc";


$tables_data["hoja_ruta_event_type"]=&$tdatahoja_ruta_event_type;
$field_labels["hoja_ruta_event_type"] = &$fieldLabelshoja_ruta_event_type;
$fieldToolTips["hoja_ruta_event_type"] = &$fieldToolTipshoja_ruta_event_type;
$placeHolders["hoja_ruta_event_type"] = &$placeHoldershoja_ruta_event_type;
$page_titles["hoja_ruta_event_type"] = &$pageTitleshoja_ruta_event_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hoja_ruta_event_type"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["hoja_ruta_event_type"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_hoja_ruta_event_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "evento_type_id,  	evento_type_group,  	evento_group_id,  	evento_type_name,  	evento_id_rol_fk,  	evento_type_desc";
$proto0["m_strFrom"] = "FROM hoja_ruta_event_type";
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
	"m_strName" => "evento_type_id",
	"m_strTable" => "hoja_ruta_event_type",
	"m_srcTableName" => "hoja_ruta_event_type"
));

$proto6["m_sql"] = "evento_type_id";
$proto6["m_srcTableName"] = "hoja_ruta_event_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "evento_type_group",
	"m_strTable" => "hoja_ruta_event_type",
	"m_srcTableName" => "hoja_ruta_event_type"
));

$proto8["m_sql"] = "evento_type_group";
$proto8["m_srcTableName"] = "hoja_ruta_event_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "evento_group_id",
	"m_strTable" => "hoja_ruta_event_type",
	"m_srcTableName" => "hoja_ruta_event_type"
));

$proto10["m_sql"] = "evento_group_id";
$proto10["m_srcTableName"] = "hoja_ruta_event_type";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "evento_type_name",
	"m_strTable" => "hoja_ruta_event_type",
	"m_srcTableName" => "hoja_ruta_event_type"
));

$proto12["m_sql"] = "evento_type_name";
$proto12["m_srcTableName"] = "hoja_ruta_event_type";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "evento_id_rol_fk",
	"m_strTable" => "hoja_ruta_event_type",
	"m_srcTableName" => "hoja_ruta_event_type"
));

$proto14["m_sql"] = "evento_id_rol_fk";
$proto14["m_srcTableName"] = "hoja_ruta_event_type";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "evento_type_desc",
	"m_strTable" => "hoja_ruta_event_type",
	"m_srcTableName" => "hoja_ruta_event_type"
));

$proto16["m_sql"] = "evento_type_desc";
$proto16["m_srcTableName"] = "hoja_ruta_event_type";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "hoja_ruta_event_type";
$proto19["m_srcTableName"] = "hoja_ruta_event_type";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "evento_type_id";
$proto19["m_columns"][] = "evento_type_group";
$proto19["m_columns"][] = "evento_group_id";
$proto19["m_columns"][] = "evento_type_name";
$proto19["m_columns"][] = "evento_id_rol_fk";
$proto19["m_columns"][] = "evento_type_desc";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "hoja_ruta_event_type";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "hoja_ruta_event_type";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hoja_ruta_event_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hoja_ruta_event_type = createSqlQuery_hoja_ruta_event_type();


	
								;

						

$tdatahoja_ruta_event_type[".sqlquery"] = $queryData_hoja_ruta_event_type;

$tableEvents["hoja_ruta_event_type"] = new eventsBase;
$tdatahoja_ruta_event_type[".hasEvents"] = false;

?>