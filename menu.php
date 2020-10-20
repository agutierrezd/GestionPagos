<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


require_once("include/dbcommon.php");
require_once('classes/menupage.php');


Security::processLogoutRequest();
if( !isLogged() || isLoggedAsGuest() ) 
{
	Security::tryRelogin();
}

if( !isLogged() )
{
	HeaderRedirect("login");
	return;
}


if (($_SESSION["MyURL"] == "") || (!isLoggedAsGuest())) {
	Security::saveRedirectURL();
}





require_once('include/xtempl.php');
require_once(getabspath("classes/cipherer.php"));

include_once(getabspath("include/hoja_ruta_2020_pn_events.php"));
$tableEvents["hoja_ruta_2020_pn"] = new eventclass_hoja_ruta_2020_pn;
include_once(getabspath("include/hoja_ruta_2020_pn1_events.php"));
$tableEvents["hoja_ruta_2020_pn1"] = new eventclass_hoja_ruta_2020_pn1;
include_once(getabspath("include/ep_obligaciones_temp_events.php"));
$tableEvents["ep_obligaciones_temp"] = new eventclass_ep_obligaciones_temp;
include_once(getabspath("include/ep_registros_events.php"));
$tableEvents["ep_registros"] = new eventclass_ep_registros;
include_once(getabspath("include/ep_op_temp_events.php"));
$tableEvents["ep_op_temp"] = new eventclass_ep_op_temp;
include_once(getabspath("include/hoja_ruta_2020_pn2_events.php"));
$tableEvents["hoja_ruta_2020_pn2"] = new eventclass_hoja_ruta_2020_pn2;
include_once(getabspath("include/hoja_ruta_2020_pnc_events.php"));
$tableEvents["hoja_ruta_2020_pnc"] = new eventclass_hoja_ruta_2020_pnc;
include_once(getabspath("include/hoja_ruta_2020_pn0_events.php"));
$tableEvents["hoja_ruta_2020_pn0"] = new eventclass_hoja_ruta_2020_pn0;
include_once(getabspath("include/hoja_ruta_2020_pnc1_events.php"));
$tableEvents["hoja_ruta_2020_pnc1"] = new eventclass_hoja_ruta_2020_pnc1;
include_once(getabspath("include/hoja_ruta_2020_pn3_events.php"));
$tableEvents["hoja_ruta_2020_pn3"] = new eventclass_hoja_ruta_2020_pn3;

$xt = new Xtempl();

//array of params for classes
$params = array();
$params["id"] = postvalue_number("id"); 
$params["xt"] = &$xt;
$params["tName"] = GLOBAL_PAGES;
$params["pageType"] = PAGE_MENU;
$params["isGroupSecurity"] = $isGroupSecurity;
$params["needSearchClauseObj"] = false;
$params["pageName"] = postvalue("page"); 

$pageObject = new MenuPage($params);
$pageObject->init();

$pageObject->process();
?>