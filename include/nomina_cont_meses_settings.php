<?php



$tdatanomina_cont_meses = array();
$tdatanomina_cont_meses[".searchableFields"] = array();
$tdatanomina_cont_meses[".ShortName"] = "nomina_cont_meses";
$tdatanomina_cont_meses[".OwnerID"] = "";
$tdatanomina_cont_meses[".OriginalTable"] = "nomina_cont_meses";


$tdatanomina_cont_meses[".pagesByType"] = my_json_decode( "{}" );
$tdatanomina_cont_meses[".originalPagesByType"] = $tdatanomina_cont_meses[".pagesByType"];
$tdatanomina_cont_meses[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatanomina_cont_meses[".originalPages"] = $tdatanomina_cont_meses[".pages"];
$tdatanomina_cont_meses[".defaultPages"] = my_json_decode( "{}" );
$tdatanomina_cont_meses[".originalDefaultPages"] = $tdatanomina_cont_meses[".defaultPages"];

//	field labels
$fieldLabelsnomina_cont_meses = array();
$fieldToolTipsnomina_cont_meses = array();
$pageTitlesnomina_cont_meses = array();
$placeHoldersnomina_cont_meses = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsnomina_cont_meses["Spanish"] = array();
	$fieldToolTipsnomina_cont_meses["Spanish"] = array();
	$placeHoldersnomina_cont_meses["Spanish"] = array();
	$pageTitlesnomina_cont_meses["Spanish"] = array();
	$fieldLabelsnomina_cont_meses["Spanish"]["mes_id"] = "Mes Id";
	$fieldToolTipsnomina_cont_meses["Spanish"]["mes_id"] = "";
	$placeHoldersnomina_cont_meses["Spanish"]["mes_id"] = "";
	$fieldLabelsnomina_cont_meses["Spanish"]["mes_name"] = "Mes Name";
	$fieldToolTipsnomina_cont_meses["Spanish"]["mes_name"] = "";
	$placeHoldersnomina_cont_meses["Spanish"]["mes_name"] = "";
	$fieldLabelsnomina_cont_meses["Spanish"]["mes_dias"] = "Mes Dias";
	$fieldToolTipsnomina_cont_meses["Spanish"]["mes_dias"] = "";
	$placeHoldersnomina_cont_meses["Spanish"]["mes_dias"] = "";
	if (count($fieldToolTipsnomina_cont_meses["Spanish"]))
		$tdatanomina_cont_meses[".isUseToolTips"] = true;
}


	$tdatanomina_cont_meses[".NCSearch"] = true;



$tdatanomina_cont_meses[".shortTableName"] = "nomina_cont_meses";
$tdatanomina_cont_meses[".nSecOptions"] = 0;

$tdatanomina_cont_meses[".mainTableOwnerID"] = "";
$tdatanomina_cont_meses[".entityType"] = 0;

$tdatanomina_cont_meses[".strOriginalTableName"] = "nomina_cont_meses";

	



$tdatanomina_cont_meses[".showAddInPopup"] = false;

$tdatanomina_cont_meses[".showEditInPopup"] = false;

$tdatanomina_cont_meses[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatanomina_cont_meses[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatanomina_cont_meses[".listAjax"] = false;
//	temporary
$tdatanomina_cont_meses[".listAjax"] = false;

	$tdatanomina_cont_meses[".audit"] = true;

	$tdatanomina_cont_meses[".locking"] = true;


$pages = $tdatanomina_cont_meses[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanomina_cont_meses[".edit"] = true;
	$tdatanomina_cont_meses[".afterEditAction"] = 1;
	$tdatanomina_cont_meses[".closePopupAfterEdit"] = 1;
	$tdatanomina_cont_meses[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatanomina_cont_meses[".add"] = true;
$tdatanomina_cont_meses[".afterAddAction"] = 1;
$tdatanomina_cont_meses[".closePopupAfterAdd"] = 1;
$tdatanomina_cont_meses[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatanomina_cont_meses[".list"] = true;
}



$tdatanomina_cont_meses[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatanomina_cont_meses[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanomina_cont_meses[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanomina_cont_meses[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanomina_cont_meses[".printFriendly"] = true;
}



$tdatanomina_cont_meses[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanomina_cont_meses[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanomina_cont_meses[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanomina_cont_meses[".isUseAjaxSuggest"] = true;

$tdatanomina_cont_meses[".rowHighlite"] = true;





$tdatanomina_cont_meses[".ajaxCodeSnippetAdded"] = false;

$tdatanomina_cont_meses[".buttonsAdded"] = false;

$tdatanomina_cont_meses[".addPageEvents"] = false;

// use timepicker for search panel
$tdatanomina_cont_meses[".isUseTimeForSearch"] = false;


$tdatanomina_cont_meses[".badgeColor"] = "CD853F";


$tdatanomina_cont_meses[".allSearchFields"] = array();
$tdatanomina_cont_meses[".filterFields"] = array();
$tdatanomina_cont_meses[".requiredSearchFields"] = array();

$tdatanomina_cont_meses[".googleLikeFields"] = array();
$tdatanomina_cont_meses[".googleLikeFields"][] = "mes_id";
$tdatanomina_cont_meses[".googleLikeFields"][] = "mes_name";
$tdatanomina_cont_meses[".googleLikeFields"][] = "mes_dias";



$tdatanomina_cont_meses[".tableType"] = "list";

$tdatanomina_cont_meses[".printerPageOrientation"] = 0;
$tdatanomina_cont_meses[".nPrinterPageScale"] = 100;

$tdatanomina_cont_meses[".nPrinterSplitRecords"] = 40;

$tdatanomina_cont_meses[".geocodingEnabled"] = false;










$tdatanomina_cont_meses[".pageSize"] = 20;

$tdatanomina_cont_meses[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatanomina_cont_meses[".strOrderBy"] = $tstrOrderBy;

$tdatanomina_cont_meses[".orderindexes"] = array();

$tdatanomina_cont_meses[".sqlHead"] = "SELECT mes_id,  	mes_name,  	mes_dias";
$tdatanomina_cont_meses[".sqlFrom"] = "FROM nomina_cont_meses";
$tdatanomina_cont_meses[".sqlWhereExpr"] = "";
$tdatanomina_cont_meses[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanomina_cont_meses[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanomina_cont_meses[".arrGroupsPerPage"] = $arrGPP;

$tdatanomina_cont_meses[".highlightSearchResults"] = true;

$tableKeysnomina_cont_meses = array();
$tableKeysnomina_cont_meses[] = "mes_id";
$tdatanomina_cont_meses[".Keys"] = $tableKeysnomina_cont_meses;


$tdatanomina_cont_meses[".hideMobileList"] = array();




//	mes_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "mes_id";
	$fdata["GoodName"] = "mes_id";
	$fdata["ownerTable"] = "nomina_cont_meses";
	$fdata["Label"] = GetFieldLabel("nomina_cont_meses","mes_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "mes_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mes_id";

	
	
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


	$tdatanomina_cont_meses["mes_id"] = $fdata;
		$tdatanomina_cont_meses[".searchableFields"][] = "mes_id";
//	mes_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "mes_name";
	$fdata["GoodName"] = "mes_name";
	$fdata["ownerTable"] = "nomina_cont_meses";
	$fdata["Label"] = GetFieldLabel("nomina_cont_meses","mes_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "mes_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mes_name";

	
	
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


	$tdatanomina_cont_meses["mes_name"] = $fdata;
		$tdatanomina_cont_meses[".searchableFields"][] = "mes_name";
//	mes_dias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "mes_dias";
	$fdata["GoodName"] = "mes_dias";
	$fdata["ownerTable"] = "nomina_cont_meses";
	$fdata["Label"] = GetFieldLabel("nomina_cont_meses","mes_dias");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "mes_dias";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mes_dias";

	
	
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


	$tdatanomina_cont_meses["mes_dias"] = $fdata;
		$tdatanomina_cont_meses[".searchableFields"][] = "mes_dias";


$tables_data["nomina_cont_meses"]=&$tdatanomina_cont_meses;
$field_labels["nomina_cont_meses"] = &$fieldLabelsnomina_cont_meses;
$fieldToolTips["nomina_cont_meses"] = &$fieldToolTipsnomina_cont_meses;
$placeHolders["nomina_cont_meses"] = &$placeHoldersnomina_cont_meses;
$page_titles["nomina_cont_meses"] = &$pageTitlesnomina_cont_meses;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["nomina_cont_meses"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["nomina_cont_meses"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_nomina_cont_meses()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "mes_id,  	mes_name,  	mes_dias";
$proto0["m_strFrom"] = "FROM nomina_cont_meses";
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
	"m_strName" => "mes_id",
	"m_strTable" => "nomina_cont_meses",
	"m_srcTableName" => "nomina_cont_meses"
));

$proto6["m_sql"] = "mes_id";
$proto6["m_srcTableName"] = "nomina_cont_meses";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "mes_name",
	"m_strTable" => "nomina_cont_meses",
	"m_srcTableName" => "nomina_cont_meses"
));

$proto8["m_sql"] = "mes_name";
$proto8["m_srcTableName"] = "nomina_cont_meses";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "mes_dias",
	"m_strTable" => "nomina_cont_meses",
	"m_srcTableName" => "nomina_cont_meses"
));

$proto10["m_sql"] = "mes_dias";
$proto10["m_srcTableName"] = "nomina_cont_meses";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "nomina_cont_meses";
$proto13["m_srcTableName"] = "nomina_cont_meses";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "mes_id";
$proto13["m_columns"][] = "mes_name";
$proto13["m_columns"][] = "mes_dias";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "nomina_cont_meses";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "nomina_cont_meses";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="nomina_cont_meses";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_nomina_cont_meses = createSqlQuery_nomina_cont_meses();


	
								;

			

$tdatanomina_cont_meses[".sqlquery"] = $queryData_nomina_cont_meses;

$tableEvents["nomina_cont_meses"] = new eventsBase;
$tdatanomina_cont_meses[".hasEvents"] = false;

?>