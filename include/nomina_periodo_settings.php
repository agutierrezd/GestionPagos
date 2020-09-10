<?php



$tdatanomina_periodo = array();
$tdatanomina_periodo[".searchableFields"] = array();
$tdatanomina_periodo[".ShortName"] = "nomina_periodo";
$tdatanomina_periodo[".OwnerID"] = "";
$tdatanomina_periodo[".OriginalTable"] = "nomina_periodo";


$tdatanomina_periodo[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatanomina_periodo[".originalPagesByType"] = $tdatanomina_periodo[".pagesByType"];
$tdatanomina_periodo[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatanomina_periodo[".originalPages"] = $tdatanomina_periodo[".pages"];
$tdatanomina_periodo[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatanomina_periodo[".originalDefaultPages"] = $tdatanomina_periodo[".defaultPages"];

//	field labels
$fieldLabelsnomina_periodo = array();
$fieldToolTipsnomina_periodo = array();
$pageTitlesnomina_periodo = array();
$placeHoldersnomina_periodo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsnomina_periodo["Spanish"] = array();
	$fieldToolTipsnomina_periodo["Spanish"] = array();
	$placeHoldersnomina_periodo["Spanish"] = array();
	$pageTitlesnomina_periodo["Spanish"] = array();
	$fieldLabelsnomina_periodo["Spanish"]["nomina_id"] = "Ordinal";
	$fieldToolTipsnomina_periodo["Spanish"]["nomina_id"] = "";
	$placeHoldersnomina_periodo["Spanish"]["nomina_id"] = "";
	$fieldLabelsnomina_periodo["Spanish"]["nomina_periodo"] = "Nombre del periodo";
	$fieldToolTipsnomina_periodo["Spanish"]["nomina_periodo"] = "";
	$placeHoldersnomina_periodo["Spanish"]["nomina_periodo"] = "";
	$fieldLabelsnomina_periodo["Spanish"]["nomina_estado"] = "¿Periodo activo?";
	$fieldToolTipsnomina_periodo["Spanish"]["nomina_estado"] = "";
	$placeHoldersnomina_periodo["Spanish"]["nomina_estado"] = "";
	$fieldLabelsnomina_periodo["Spanish"]["nomina_fechalimite"] = "Fecha de cierre";
	$fieldToolTipsnomina_periodo["Spanish"]["nomina_fechalimite"] = "";
	$placeHoldersnomina_periodo["Spanish"]["nomina_fechalimite"] = "";
	if (count($fieldToolTipsnomina_periodo["Spanish"]))
		$tdatanomina_periodo[".isUseToolTips"] = true;
}


	$tdatanomina_periodo[".NCSearch"] = true;



$tdatanomina_periodo[".shortTableName"] = "nomina_periodo";
$tdatanomina_periodo[".nSecOptions"] = 0;

$tdatanomina_periodo[".mainTableOwnerID"] = "";
$tdatanomina_periodo[".entityType"] = 0;

$tdatanomina_periodo[".strOriginalTableName"] = "nomina_periodo";

	



$tdatanomina_periodo[".showAddInPopup"] = false;

$tdatanomina_periodo[".showEditInPopup"] = false;

$tdatanomina_periodo[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatanomina_periodo[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatanomina_periodo[".listAjax"] = false;
//	temporary
$tdatanomina_periodo[".listAjax"] = false;

	$tdatanomina_periodo[".audit"] = false;

	$tdatanomina_periodo[".locking"] = false;


$pages = $tdatanomina_periodo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanomina_periodo[".edit"] = true;
	$tdatanomina_periodo[".afterEditAction"] = 1;
	$tdatanomina_periodo[".closePopupAfterEdit"] = 1;
	$tdatanomina_periodo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatanomina_periodo[".add"] = true;
$tdatanomina_periodo[".afterAddAction"] = 1;
$tdatanomina_periodo[".closePopupAfterAdd"] = 1;
$tdatanomina_periodo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatanomina_periodo[".list"] = true;
}



$tdatanomina_periodo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatanomina_periodo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanomina_periodo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanomina_periodo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanomina_periodo[".printFriendly"] = true;
}



$tdatanomina_periodo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanomina_periodo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanomina_periodo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanomina_periodo[".isUseAjaxSuggest"] = true;

$tdatanomina_periodo[".rowHighlite"] = true;





$tdatanomina_periodo[".ajaxCodeSnippetAdded"] = false;

$tdatanomina_periodo[".buttonsAdded"] = false;

$tdatanomina_periodo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatanomina_periodo[".isUseTimeForSearch"] = false;


$tdatanomina_periodo[".badgeColor"] = "778899";


$tdatanomina_periodo[".allSearchFields"] = array();
$tdatanomina_periodo[".filterFields"] = array();
$tdatanomina_periodo[".requiredSearchFields"] = array();

$tdatanomina_periodo[".googleLikeFields"] = array();
$tdatanomina_periodo[".googleLikeFields"][] = "nomina_id";
$tdatanomina_periodo[".googleLikeFields"][] = "nomina_periodo";
$tdatanomina_periodo[".googleLikeFields"][] = "nomina_estado";
$tdatanomina_periodo[".googleLikeFields"][] = "nomina_fechalimite";



$tdatanomina_periodo[".tableType"] = "list";

$tdatanomina_periodo[".printerPageOrientation"] = 0;
$tdatanomina_periodo[".nPrinterPageScale"] = 100;

$tdatanomina_periodo[".nPrinterSplitRecords"] = 40;

$tdatanomina_periodo[".geocodingEnabled"] = false;










$tdatanomina_periodo[".pageSize"] = 20;

$tdatanomina_periodo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatanomina_periodo[".strOrderBy"] = $tstrOrderBy;

$tdatanomina_periodo[".orderindexes"] = array();

$tdatanomina_periodo[".sqlHead"] = "SELECT nomina_id,  	nomina_periodo,  	nomina_estado,  	nomina_fechalimite";
$tdatanomina_periodo[".sqlFrom"] = "FROM nomina_periodo";
$tdatanomina_periodo[".sqlWhereExpr"] = "";
$tdatanomina_periodo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanomina_periodo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanomina_periodo[".arrGroupsPerPage"] = $arrGPP;

$tdatanomina_periodo[".highlightSearchResults"] = true;

$tableKeysnomina_periodo = array();
$tableKeysnomina_periodo[] = "nomina_id";
$tdatanomina_periodo[".Keys"] = $tableKeysnomina_periodo;


$tdatanomina_periodo[".hideMobileList"] = array();




//	nomina_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "nomina_id";
	$fdata["GoodName"] = "nomina_id";
	$fdata["ownerTable"] = "nomina_periodo";
	$fdata["Label"] = GetFieldLabel("nomina_periodo","nomina_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "nomina_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nomina_id";

	
	
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


	$tdatanomina_periodo["nomina_id"] = $fdata;
		$tdatanomina_periodo[".searchableFields"][] = "nomina_id";
//	nomina_periodo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nomina_periodo";
	$fdata["GoodName"] = "nomina_periodo";
	$fdata["ownerTable"] = "nomina_periodo";
	$fdata["Label"] = GetFieldLabel("nomina_periodo","nomina_periodo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nomina_periodo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nomina_periodo";

	
	
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
			$edata["EditParams"].= " maxlength=7";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "El periodo registrado ya existe", "messageType" => "Text");

	
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


	$tdatanomina_periodo["nomina_periodo"] = $fdata;
		$tdatanomina_periodo[".searchableFields"][] = "nomina_periodo";
//	nomina_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nomina_estado";
	$fdata["GoodName"] = "nomina_estado";
	$fdata["ownerTable"] = "nomina_periodo";
	$fdata["Label"] = GetFieldLabel("nomina_periodo","nomina_estado");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "nomina_estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nomina_estado";

	
	
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
	$edata["LookupTable"] = "tipo_si_no";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
		
	$edata["LinkField"] = "sn_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "sn_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatanomina_periodo["nomina_estado"] = $fdata;
		$tdatanomina_periodo[".searchableFields"][] = "nomina_estado";
//	nomina_fechalimite
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nomina_fechalimite";
	$fdata["GoodName"] = "nomina_fechalimite";
	$fdata["ownerTable"] = "nomina_periodo";
	$fdata["Label"] = GetFieldLabel("nomina_periodo","nomina_fechalimite");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "nomina_fechalimite";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nomina_fechalimite";

	
	
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

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[1,2,3,4,5]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatanomina_periodo["nomina_fechalimite"] = $fdata;
		$tdatanomina_periodo[".searchableFields"][] = "nomina_fechalimite";


$tables_data["nomina_periodo"]=&$tdatanomina_periodo;
$field_labels["nomina_periodo"] = &$fieldLabelsnomina_periodo;
$fieldToolTips["nomina_periodo"] = &$fieldToolTipsnomina_periodo;
$placeHolders["nomina_periodo"] = &$placeHoldersnomina_periodo;
$page_titles["nomina_periodo"] = &$pageTitlesnomina_periodo;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["nomina_periodo"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["nomina_periodo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_nomina_periodo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "nomina_id,  	nomina_periodo,  	nomina_estado,  	nomina_fechalimite";
$proto0["m_strFrom"] = "FROM nomina_periodo";
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
	"m_strName" => "nomina_id",
	"m_strTable" => "nomina_periodo",
	"m_srcTableName" => "nomina_periodo"
));

$proto6["m_sql"] = "nomina_id";
$proto6["m_srcTableName"] = "nomina_periodo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nomina_periodo",
	"m_strTable" => "nomina_periodo",
	"m_srcTableName" => "nomina_periodo"
));

$proto8["m_sql"] = "nomina_periodo";
$proto8["m_srcTableName"] = "nomina_periodo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "nomina_estado",
	"m_strTable" => "nomina_periodo",
	"m_srcTableName" => "nomina_periodo"
));

$proto10["m_sql"] = "nomina_estado";
$proto10["m_srcTableName"] = "nomina_periodo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nomina_fechalimite",
	"m_strTable" => "nomina_periodo",
	"m_srcTableName" => "nomina_periodo"
));

$proto12["m_sql"] = "nomina_fechalimite";
$proto12["m_srcTableName"] = "nomina_periodo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "nomina_periodo";
$proto15["m_srcTableName"] = "nomina_periodo";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "nomina_id";
$proto15["m_columns"][] = "nomina_periodo";
$proto15["m_columns"][] = "nomina_estado";
$proto15["m_columns"][] = "nomina_fechalimite";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "nomina_periodo";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "nomina_periodo";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="nomina_periodo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_nomina_periodo = createSqlQuery_nomina_periodo();


	
								;

				

$tdatanomina_periodo[".sqlquery"] = $queryData_nomina_periodo;

$tableEvents["nomina_periodo"] = new eventsBase;
$tdatanomina_periodo[".hasEvents"] = false;

?>