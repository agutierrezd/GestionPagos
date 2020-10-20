<?php



$tdatahoja_ruta_2020_files = array();
$tdatahoja_ruta_2020_files[".searchableFields"] = array();
$tdatahoja_ruta_2020_files[".ShortName"] = "hoja_ruta_2020_files";
$tdatahoja_ruta_2020_files[".OwnerID"] = "";
$tdatahoja_ruta_2020_files[".OriginalTable"] = "hoja_ruta_2020_files";


$tdatahoja_ruta_2020_files[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatahoja_ruta_2020_files[".originalPagesByType"] = $tdatahoja_ruta_2020_files[".pagesByType"];
$tdatahoja_ruta_2020_files[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatahoja_ruta_2020_files[".originalPages"] = $tdatahoja_ruta_2020_files[".pages"];
$tdatahoja_ruta_2020_files[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatahoja_ruta_2020_files[".originalDefaultPages"] = $tdatahoja_ruta_2020_files[".defaultPages"];

//	field labels
$fieldLabelshoja_ruta_2020_files = array();
$fieldToolTipshoja_ruta_2020_files = array();
$pageTitleshoja_ruta_2020_files = array();
$placeHoldershoja_ruta_2020_files = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshoja_ruta_2020_files["Spanish"] = array();
	$fieldToolTipshoja_ruta_2020_files["Spanish"] = array();
	$placeHoldershoja_ruta_2020_files["Spanish"] = array();
	$pageTitleshoja_ruta_2020_files["Spanish"] = array();
	$fieldLabelshoja_ruta_2020_files["Spanish"]["file_hr_id"] = "File Hr Id";
	$fieldToolTipshoja_ruta_2020_files["Spanish"]["file_hr_id"] = "";
	$placeHoldershoja_ruta_2020_files["Spanish"]["file_hr_id"] = "";
	$fieldLabelshoja_ruta_2020_files["Spanish"]["hr_id_fk"] = "Hr Id Fk";
	$fieldToolTipshoja_ruta_2020_files["Spanish"]["hr_id_fk"] = "";
	$placeHoldershoja_ruta_2020_files["Spanish"]["hr_id_fk"] = "";
	$fieldLabelshoja_ruta_2020_files["Spanish"]["hr_file"] = "Anexo";
	$fieldToolTipshoja_ruta_2020_files["Spanish"]["hr_file"] = "";
	$placeHoldershoja_ruta_2020_files["Spanish"]["hr_file"] = "";
	$fieldLabelshoja_ruta_2020_files["Spanish"]["sys_user"] = "Subido por:";
	$fieldToolTipshoja_ruta_2020_files["Spanish"]["sys_user"] = "";
	$placeHoldershoja_ruta_2020_files["Spanish"]["sys_user"] = "";
	$fieldLabelshoja_ruta_2020_files["Spanish"]["sys_date"] = "Fecha de carga";
	$fieldToolTipshoja_ruta_2020_files["Spanish"]["sys_date"] = "";
	$placeHoldershoja_ruta_2020_files["Spanish"]["sys_date"] = "";
	$fieldLabelshoja_ruta_2020_files["Spanish"]["hr_tipo_doc"] = "Tipo documento";
	$fieldToolTipshoja_ruta_2020_files["Spanish"]["hr_tipo_doc"] = "";
	$placeHoldershoja_ruta_2020_files["Spanish"]["hr_tipo_doc"] = "";
	if (count($fieldToolTipshoja_ruta_2020_files["Spanish"]))
		$tdatahoja_ruta_2020_files[".isUseToolTips"] = true;
}


	$tdatahoja_ruta_2020_files[".NCSearch"] = true;



$tdatahoja_ruta_2020_files[".shortTableName"] = "hoja_ruta_2020_files";
$tdatahoja_ruta_2020_files[".nSecOptions"] = 0;

$tdatahoja_ruta_2020_files[".mainTableOwnerID"] = "";
$tdatahoja_ruta_2020_files[".entityType"] = 0;

$tdatahoja_ruta_2020_files[".strOriginalTableName"] = "hoja_ruta_2020_files";

	



$tdatahoja_ruta_2020_files[".showAddInPopup"] = false;

$tdatahoja_ruta_2020_files[".showEditInPopup"] = false;

$tdatahoja_ruta_2020_files[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahoja_ruta_2020_files[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahoja_ruta_2020_files[".listAjax"] = false;
//	temporary
$tdatahoja_ruta_2020_files[".listAjax"] = false;

	$tdatahoja_ruta_2020_files[".audit"] = true;

	$tdatahoja_ruta_2020_files[".locking"] = true;


$pages = $tdatahoja_ruta_2020_files[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahoja_ruta_2020_files[".edit"] = true;
	$tdatahoja_ruta_2020_files[".afterEditAction"] = 1;
	$tdatahoja_ruta_2020_files[".closePopupAfterEdit"] = 1;
	$tdatahoja_ruta_2020_files[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahoja_ruta_2020_files[".add"] = true;
$tdatahoja_ruta_2020_files[".afterAddAction"] = 1;
$tdatahoja_ruta_2020_files[".closePopupAfterAdd"] = 1;
$tdatahoja_ruta_2020_files[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahoja_ruta_2020_files[".list"] = true;
}



$tdatahoja_ruta_2020_files[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahoja_ruta_2020_files[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahoja_ruta_2020_files[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahoja_ruta_2020_files[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahoja_ruta_2020_files[".printFriendly"] = true;
}



$tdatahoja_ruta_2020_files[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahoja_ruta_2020_files[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahoja_ruta_2020_files[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahoja_ruta_2020_files[".isUseAjaxSuggest"] = true;

$tdatahoja_ruta_2020_files[".rowHighlite"] = true;





$tdatahoja_ruta_2020_files[".ajaxCodeSnippetAdded"] = false;

$tdatahoja_ruta_2020_files[".buttonsAdded"] = false;

$tdatahoja_ruta_2020_files[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahoja_ruta_2020_files[".isUseTimeForSearch"] = false;


$tdatahoja_ruta_2020_files[".badgeColor"] = "daa520";


$tdatahoja_ruta_2020_files[".allSearchFields"] = array();
$tdatahoja_ruta_2020_files[".filterFields"] = array();
$tdatahoja_ruta_2020_files[".requiredSearchFields"] = array();

$tdatahoja_ruta_2020_files[".googleLikeFields"] = array();
$tdatahoja_ruta_2020_files[".googleLikeFields"][] = "file_hr_id";
$tdatahoja_ruta_2020_files[".googleLikeFields"][] = "hr_id_fk";
$tdatahoja_ruta_2020_files[".googleLikeFields"][] = "hr_tipo_doc";
$tdatahoja_ruta_2020_files[".googleLikeFields"][] = "hr_file";
$tdatahoja_ruta_2020_files[".googleLikeFields"][] = "sys_user";
$tdatahoja_ruta_2020_files[".googleLikeFields"][] = "sys_date";



$tdatahoja_ruta_2020_files[".tableType"] = "list";

$tdatahoja_ruta_2020_files[".printerPageOrientation"] = 0;
$tdatahoja_ruta_2020_files[".nPrinterPageScale"] = 100;

$tdatahoja_ruta_2020_files[".nPrinterSplitRecords"] = 40;

$tdatahoja_ruta_2020_files[".geocodingEnabled"] = false;










$tdatahoja_ruta_2020_files[".pageSize"] = 20;

$tdatahoja_ruta_2020_files[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY hr_tipo_doc";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahoja_ruta_2020_files[".strOrderBy"] = $tstrOrderBy;

$tdatahoja_ruta_2020_files[".orderindexes"] = array();
	$tdatahoja_ruta_2020_files[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "hr_tipo_doc");


$tdatahoja_ruta_2020_files[".sqlHead"] = "SELECT file_hr_id,  hr_id_fk,  hr_tipo_doc,  hr_file,  sys_user,  sys_date";
$tdatahoja_ruta_2020_files[".sqlFrom"] = "FROM hoja_ruta_2020_files";
$tdatahoja_ruta_2020_files[".sqlWhereExpr"] = "";
$tdatahoja_ruta_2020_files[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahoja_ruta_2020_files[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahoja_ruta_2020_files[".arrGroupsPerPage"] = $arrGPP;

$tdatahoja_ruta_2020_files[".highlightSearchResults"] = true;

$tableKeyshoja_ruta_2020_files = array();
$tableKeyshoja_ruta_2020_files[] = "file_hr_id";
$tdatahoja_ruta_2020_files[".Keys"] = $tableKeyshoja_ruta_2020_files;


$tdatahoja_ruta_2020_files[".hideMobileList"] = array();




//	file_hr_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "file_hr_id";
	$fdata["GoodName"] = "file_hr_id";
	$fdata["ownerTable"] = "hoja_ruta_2020_files";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_files","file_hr_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "file_hr_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "file_hr_id";

	
	
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


	$tdatahoja_ruta_2020_files["file_hr_id"] = $fdata;
		$tdatahoja_ruta_2020_files[".searchableFields"][] = "file_hr_id";
//	hr_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "hr_id_fk";
	$fdata["GoodName"] = "hr_id_fk";
	$fdata["ownerTable"] = "hoja_ruta_2020_files";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_files","hr_id_fk");
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
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "hr_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "hr_id";

	

	
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


	$tdatahoja_ruta_2020_files["hr_id_fk"] = $fdata;
		$tdatahoja_ruta_2020_files[".searchableFields"][] = "hr_id_fk";
//	hr_tipo_doc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "hr_tipo_doc";
	$fdata["GoodName"] = "hr_tipo_doc";
	$fdata["ownerTable"] = "hoja_ruta_2020_files";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_files","hr_tipo_doc");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "hr_tipo_doc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_tipo_doc";

	
	
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
	$edata["LookupTable"] = "informe_intersup_anexos_tipo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "anexos_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "anexos_name";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "anexos_name";

	
	
	
	

	
	
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


	$tdatahoja_ruta_2020_files["hr_tipo_doc"] = $fdata;
		$tdatahoja_ruta_2020_files[".searchableFields"][] = "hr_tipo_doc";
//	hr_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "hr_file";
	$fdata["GoodName"] = "hr_file";
	$fdata["ownerTable"] = "hoja_ruta_2020_files";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_files","hr_file");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "hr_file";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_file";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["UploadFolder"] = "soporte_pago/";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
				$vdata["ShowThumbnail"] = true;
			$vdata["ShowFileSize"] = true;
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


	$tdatahoja_ruta_2020_files["hr_file"] = $fdata;
		$tdatahoja_ruta_2020_files[".searchableFields"][] = "hr_file";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "hoja_ruta_2020_files";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_files","sys_user");
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


	$tdatahoja_ruta_2020_files["sys_user"] = $fdata;
		$tdatahoja_ruta_2020_files[".searchableFields"][] = "sys_user";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "hoja_ruta_2020_files";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_files","sys_date");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "sys_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_date";

	
	
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

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
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


	$tdatahoja_ruta_2020_files["sys_date"] = $fdata;
		$tdatahoja_ruta_2020_files[".searchableFields"][] = "sys_date";


$tables_data["hoja_ruta_2020_files"]=&$tdatahoja_ruta_2020_files;
$field_labels["hoja_ruta_2020_files"] = &$fieldLabelshoja_ruta_2020_files;
$fieldToolTips["hoja_ruta_2020_files"] = &$fieldToolTipshoja_ruta_2020_files;
$placeHolders["hoja_ruta_2020_files"] = &$placeHoldershoja_ruta_2020_files;
$page_titles["hoja_ruta_2020_files"] = &$pageTitleshoja_ruta_2020_files;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hoja_ruta_2020_files"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["hoja_ruta_2020_files"] = array();



	
				$strOriginalDetailsTable="hoja_ruta_2020";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hoja_ruta_2020_pn";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "hoja_ruta_2020_pn";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["hoja_ruta_2020_files"][0] = $masterParams;
				$masterTablesData["hoja_ruta_2020_files"][0]["masterKeys"] = array();
	$masterTablesData["hoja_ruta_2020_files"][0]["masterKeys"][]="hr_id";
				$masterTablesData["hoja_ruta_2020_files"][0]["detailKeys"] = array();
	$masterTablesData["hoja_ruta_2020_files"][0]["detailKeys"][]="hr_id_fk";
		
	
				$strOriginalDetailsTable="hoja_ruta_2020";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hoja_ruta_2020_pn1";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "hoja_ruta_2020_pn1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["hoja_ruta_2020_files"][1] = $masterParams;
				$masterTablesData["hoja_ruta_2020_files"][1]["masterKeys"] = array();
	$masterTablesData["hoja_ruta_2020_files"][1]["masterKeys"][]="hr_id";
				$masterTablesData["hoja_ruta_2020_files"][1]["detailKeys"] = array();
	$masterTablesData["hoja_ruta_2020_files"][1]["detailKeys"][]="hr_id_fk";
		
	
				$strOriginalDetailsTable="hoja_ruta_2020";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hoja_ruta_2020_pn2";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "hoja_ruta_2020_pn2";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["hoja_ruta_2020_files"][2] = $masterParams;
				$masterTablesData["hoja_ruta_2020_files"][2]["masterKeys"] = array();
	$masterTablesData["hoja_ruta_2020_files"][2]["masterKeys"][]="hr_id";
				$masterTablesData["hoja_ruta_2020_files"][2]["detailKeys"] = array();
	$masterTablesData["hoja_ruta_2020_files"][2]["detailKeys"][]="hr_id_fk";
		
	
				$strOriginalDetailsTable="hoja_ruta_2020";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hoja_ruta_2020_pnc";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "hoja_ruta_2020_pnc";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["hoja_ruta_2020_files"][3] = $masterParams;
				$masterTablesData["hoja_ruta_2020_files"][3]["masterKeys"] = array();
	$masterTablesData["hoja_ruta_2020_files"][3]["masterKeys"][]="hr_id";
				$masterTablesData["hoja_ruta_2020_files"][3]["detailKeys"] = array();
	$masterTablesData["hoja_ruta_2020_files"][3]["detailKeys"][]="hr_id_fk";
		
	
				$strOriginalDetailsTable="hoja_ruta_2020";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hoja_ruta_2020_pn0";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "hoja_ruta_2020_pn0";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["hoja_ruta_2020_files"][4] = $masterParams;
				$masterTablesData["hoja_ruta_2020_files"][4]["masterKeys"] = array();
	$masterTablesData["hoja_ruta_2020_files"][4]["masterKeys"][]="hr_id";
				$masterTablesData["hoja_ruta_2020_files"][4]["detailKeys"] = array();
	$masterTablesData["hoja_ruta_2020_files"][4]["detailKeys"][]="hr_id_fk";
		
	
				$strOriginalDetailsTable="hoja_ruta_2020";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hoja_ruta_2020_pnc1";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "hoja_ruta_2020_pnc1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["hoja_ruta_2020_files"][5] = $masterParams;
				$masterTablesData["hoja_ruta_2020_files"][5]["masterKeys"] = array();
	$masterTablesData["hoja_ruta_2020_files"][5]["masterKeys"][]="hr_id";
				$masterTablesData["hoja_ruta_2020_files"][5]["detailKeys"] = array();
	$masterTablesData["hoja_ruta_2020_files"][5]["detailKeys"][]="hr_id_fk";
		
	
				$strOriginalDetailsTable="hoja_ruta_2020";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hoja_ruta_2020_pn3";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "hoja_ruta_2020_pn3";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["hoja_ruta_2020_files"][6] = $masterParams;
				$masterTablesData["hoja_ruta_2020_files"][6]["masterKeys"] = array();
	$masterTablesData["hoja_ruta_2020_files"][6]["masterKeys"][]="hr_id";
				$masterTablesData["hoja_ruta_2020_files"][6]["detailKeys"] = array();
	$masterTablesData["hoja_ruta_2020_files"][6]["detailKeys"][]="hr_id_fk";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_hoja_ruta_2020_files()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "file_hr_id,  hr_id_fk,  hr_tipo_doc,  hr_file,  sys_user,  sys_date";
$proto0["m_strFrom"] = "FROM hoja_ruta_2020_files";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY hr_tipo_doc";
	
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
	"m_strName" => "file_hr_id",
	"m_strTable" => "hoja_ruta_2020_files",
	"m_srcTableName" => "hoja_ruta_2020_files"
));

$proto6["m_sql"] = "file_hr_id";
$proto6["m_srcTableName"] = "hoja_ruta_2020_files";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_id_fk",
	"m_strTable" => "hoja_ruta_2020_files",
	"m_srcTableName" => "hoja_ruta_2020_files"
));

$proto8["m_sql"] = "hr_id_fk";
$proto8["m_srcTableName"] = "hoja_ruta_2020_files";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_tipo_doc",
	"m_strTable" => "hoja_ruta_2020_files",
	"m_srcTableName" => "hoja_ruta_2020_files"
));

$proto10["m_sql"] = "hr_tipo_doc";
$proto10["m_srcTableName"] = "hoja_ruta_2020_files";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_file",
	"m_strTable" => "hoja_ruta_2020_files",
	"m_srcTableName" => "hoja_ruta_2020_files"
));

$proto12["m_sql"] = "hr_file";
$proto12["m_srcTableName"] = "hoja_ruta_2020_files";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "hoja_ruta_2020_files",
	"m_srcTableName" => "hoja_ruta_2020_files"
));

$proto14["m_sql"] = "sys_user";
$proto14["m_srcTableName"] = "hoja_ruta_2020_files";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "hoja_ruta_2020_files",
	"m_srcTableName" => "hoja_ruta_2020_files"
));

$proto16["m_sql"] = "sys_date";
$proto16["m_srcTableName"] = "hoja_ruta_2020_files";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "hoja_ruta_2020_files";
$proto19["m_srcTableName"] = "hoja_ruta_2020_files";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "file_hr_id";
$proto19["m_columns"][] = "hr_id_fk";
$proto19["m_columns"][] = "hr_tipo_doc";
$proto19["m_columns"][] = "hr_file";
$proto19["m_columns"][] = "sys_user";
$proto19["m_columns"][] = "sys_date";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "hoja_ruta_2020_files";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "hoja_ruta_2020_files";
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
												$proto22=array();
						$obj = new SQLField(array(
	"m_strName" => "hr_tipo_doc",
	"m_strTable" => "hoja_ruta_2020_files",
	"m_srcTableName" => "hoja_ruta_2020_files"
));

$proto22["m_column"]=$obj;
$proto22["m_bAsc"] = 1;
$proto22["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto22);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="hoja_ruta_2020_files";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hoja_ruta_2020_files = createSqlQuery_hoja_ruta_2020_files();


	
								;

						

$tdatahoja_ruta_2020_files[".sqlquery"] = $queryData_hoja_ruta_2020_files;

$tableEvents["hoja_ruta_2020_files"] = new eventsBase;
$tdatahoja_ruta_2020_files[".hasEvents"] = false;

?>