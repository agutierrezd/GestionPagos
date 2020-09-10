<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["funcionario.idCargo"] )) {
			$lookupTableLinks["cargo"]["funcionario.idCargo"] = array();
		}
		$lookupTableLinks["cargo"]["funcionario.idCargo"]["edit"] = array("table" => "funcionario", "field" => "idCargo", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["funcionario.idDependencia"] )) {
			$lookupTableLinks["dependencia"]["funcionario.idDependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["funcionario.idDependencia"]["edit"] = array("table" => "funcionario", "field" => "idDependencia", "page" => "edit");
		if( !isset( $lookupTableLinks["funcionario"] ) ) {
			$lookupTableLinks["funcionario"] = array();
		}
		if( !isset( $lookupTableLinks["funcionario"]["funcionario.idEvaluador"] )) {
			$lookupTableLinks["funcionario"]["funcionario.idEvaluador"] = array();
		}
		$lookupTableLinks["funcionario"]["funcionario.idEvaluador"]["edit"] = array("table" => "funcionario", "field" => "idEvaluador", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato"] ) ) {
			$lookupTableLinks["contrato"] = array();
		}
		if( !isset( $lookupTableLinks["contrato"]["funcionario.idContrato"] )) {
			$lookupTableLinks["contrato"]["funcionario.idContrato"] = array();
		}
		$lookupTableLinks["contrato"]["funcionario.idContrato"]["edit"] = array("table" => "funcionario", "field" => "idContrato", "page" => "edit");
		if( !isset( $lookupTableLinks["nombramiento"] ) ) {
			$lookupTableLinks["nombramiento"] = array();
		}
		if( !isset( $lookupTableLinks["nombramiento"]["funcionario.idNombramiento"] )) {
			$lookupTableLinks["nombramiento"]["funcionario.idNombramiento"] = array();
		}
		$lookupTableLinks["nombramiento"]["funcionario.idNombramiento"]["edit"] = array("table" => "funcionario", "field" => "idNombramiento", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados"] ) ) {
			$lookupTableLinks["tparam_estados"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados"]["funcionario.estado_funcionario"] )) {
			$lookupTableLinks["tparam_estados"]["funcionario.estado_funcionario"] = array();
		}
		$lookupTableLinks["tparam_estados"]["funcionario.estado_funcionario"]["edit"] = array("table" => "funcionario", "field" => "estado_funcionario", "page" => "edit");
		if( !isset( $lookupTableLinks["funcionario"] ) ) {
			$lookupTableLinks["funcionario"] = array();
		}
		if( !isset( $lookupTableLinks["funcionario"]["global_users.id_fk"] )) {
			$lookupTableLinks["funcionario"]["global_users.id_fk"] = array();
		}
		$lookupTableLinks["funcionario"]["global_users.id_fk"]["edit"] = array("table" => "global_users", "field" => "id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["global_rol_almacen"] ) ) {
			$lookupTableLinks["global_rol_almacen"] = array();
		}
		if( !isset( $lookupTableLinks["global_rol_almacen"]["global_users.global_rol_almacen"] )) {
			$lookupTableLinks["global_rol_almacen"]["global_users.global_rol_almacen"] = array();
		}
		$lookupTableLinks["global_rol_almacen"]["global_users.global_rol_almacen"]["edit"] = array("table" => "global_users", "field" => "global_rol_almacen", "page" => "edit");
		if( !isset( $lookupTableLinks["global_rol_c"] ) ) {
			$lookupTableLinks["global_rol_c"] = array();
		}
		if( !isset( $lookupTableLinks["global_rol_c"]["global_users.global_rol_contratos"] )) {
			$lookupTableLinks["global_rol_c"]["global_users.global_rol_contratos"] = array();
		}
		$lookupTableLinks["global_rol_c"]["global_users.global_rol_contratos"]["edit"] = array("table" => "global_users", "field" => "global_rol_contratos", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["global_users.usr_dep"] )) {
			$lookupTableLinks["dependencia"]["global_users.usr_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["global_users.usr_dep"]["edit"] = array("table" => "global_users", "field" => "usr_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["global_users.usr_cargo"] )) {
			$lookupTableLinks["cargo"]["global_users.usr_cargo"] = array();
		}
		$lookupTableLinks["cargo"]["global_users.usr_cargo"]["edit"] = array("table" => "global_users", "field" => "usr_cargo", "page" => "edit");
		if( !isset( $lookupTableLinks["q_bandejaentrada_supervisores"] ) ) {
			$lookupTableLinks["q_bandejaentrada_supervisores"] = array();
		}
		if( !isset( $lookupTableLinks["q_bandejaentrada_supervisores"]["hoja_ruta_2020_pn.id_cont_fk"] )) {
			$lookupTableLinks["q_bandejaentrada_supervisores"]["hoja_ruta_2020_pn.id_cont_fk"] = array();
		}
		$lookupTableLinks["q_bandejaentrada_supervisores"]["hoja_ruta_2020_pn.id_cont_fk"]["edit"] = array("table" => "hoja_ruta_2020_pn", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["hoja_ruta_2020_pn.sys_dep"] )) {
			$lookupTableLinks["dependencia"]["hoja_ruta_2020_pn.sys_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["hoja_ruta_2020_pn.sys_dep"]["edit"] = array("table" => "hoja_ruta_2020_pn", "field" => "sys_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["hoja_ruta_2020_pn.sys_user"] )) {
			$lookupTableLinks["global_users"]["hoja_ruta_2020_pn.sys_user"] = array();
		}
		$lookupTableLinks["global_users"]["hoja_ruta_2020_pn.sys_user"]["edit"] = array("table" => "hoja_ruta_2020_pn", "field" => "sys_user", "page" => "edit");
		if( !isset( $lookupTableLinks["hoja_ruta_event_type"] ) ) {
			$lookupTableLinks["hoja_ruta_event_type"] = array();
		}
		if( !isset( $lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_pn.evento_type_id_fk"] )) {
			$lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_pn.evento_type_id_fk"] = array();
		}
		$lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_pn.evento_type_id_fk"]["edit"] = array("table" => "hoja_ruta_2020_pn", "field" => "evento_type_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["nomina_cont_meses"] ) ) {
			$lookupTableLinks["nomina_cont_meses"] = array();
		}
		if( !isset( $lookupTableLinks["nomina_cont_meses"]["hoja_ruta_2020_pn.mes"] )) {
			$lookupTableLinks["nomina_cont_meses"]["hoja_ruta_2020_pn.mes"] = array();
		}
		$lookupTableLinks["nomina_cont_meses"]["hoja_ruta_2020_pn.mes"]["edit"] = array("table" => "hoja_ruta_2020_pn", "field" => "mes", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_estados"] ) ) {
			$lookupTableLinks["contrato_estados"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_estados"]["q_bandejaentrada_supervisores.cont_estado"] )) {
			$lookupTableLinks["contrato_estados"]["q_bandejaentrada_supervisores.cont_estado"] = array();
		}
		$lookupTableLinks["contrato_estados"]["q_bandejaentrada_supervisores.cont_estado"]["edit"] = array("table" => "q_bandejaentrada_supervisores", "field" => "cont_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["q_bandejaentrada_supervisores.cargo_id"] )) {
			$lookupTableLinks["cargo"]["q_bandejaentrada_supervisores.cargo_id"] = array();
		}
		$lookupTableLinks["cargo"]["q_bandejaentrada_supervisores.cargo_id"]["edit"] = array("table" => "q_bandejaentrada_supervisores", "field" => "cargo_id", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["q_bandejaentrada_supervisores.dependencia_id"] )) {
			$lookupTableLinks["dependencia"]["q_bandejaentrada_supervisores.dependencia_id"] = array();
		}
		$lookupTableLinks["dependencia"]["q_bandejaentrada_supervisores.dependencia_id"]["edit"] = array("table" => "q_bandejaentrada_supervisores", "field" => "dependencia_id", "page" => "edit");
		if( !isset( $lookupTableLinks["hoja_ruta_2020"] ) ) {
			$lookupTableLinks["hoja_ruta_2020"] = array();
		}
		if( !isset( $lookupTableLinks["hoja_ruta_2020"]["hoja_ruta_2020_files.hr_id_fk"] )) {
			$lookupTableLinks["hoja_ruta_2020"]["hoja_ruta_2020_files.hr_id_fk"] = array();
		}
		$lookupTableLinks["hoja_ruta_2020"]["hoja_ruta_2020_files.hr_id_fk"]["edit"] = array("table" => "hoja_ruta_2020_files", "field" => "hr_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["informe_intersup_anexos_tipo"] ) ) {
			$lookupTableLinks["informe_intersup_anexos_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_anexos_tipo"]["hoja_ruta_2020_files.hr_tipo_doc"] )) {
			$lookupTableLinks["informe_intersup_anexos_tipo"]["hoja_ruta_2020_files.hr_tipo_doc"] = array();
		}
		$lookupTableLinks["informe_intersup_anexos_tipo"]["hoja_ruta_2020_files.hr_tipo_doc"]["edit"] = array("table" => "hoja_ruta_2020_files", "field" => "hr_tipo_doc", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["hoja_ruta_2020_tracking.sys_user"] )) {
			$lookupTableLinks["global_users"]["hoja_ruta_2020_tracking.sys_user"] = array();
		}
		$lookupTableLinks["global_users"]["hoja_ruta_2020_tracking.sys_user"]["edit"] = array("table" => "hoja_ruta_2020_tracking", "field" => "sys_user", "page" => "edit");
		if( !isset( $lookupTableLinks["hoja_ruta_event_type"] ) ) {
			$lookupTableLinks["hoja_ruta_event_type"] = array();
		}
		if( !isset( $lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_tracking.evento_type_id_fk"] )) {
			$lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_tracking.evento_type_id_fk"] = array();
		}
		$lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_tracking.evento_type_id_fk"]["edit"] = array("table" => "hoja_ruta_2020_tracking", "field" => "evento_type_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["hoja_ruta_2020_tracking.user_from"] )) {
			$lookupTableLinks["global_users"]["hoja_ruta_2020_tracking.user_from"] = array();
		}
		$lookupTableLinks["global_users"]["hoja_ruta_2020_tracking.user_from"]["edit"] = array("table" => "hoja_ruta_2020_tracking", "field" => "user_from", "page" => "edit");
		if( !isset( $lookupTableLinks["contractor_master"] ) ) {
			$lookupTableLinks["contractor_master"] = array();
		}
		if( !isset( $lookupTableLinks["contractor_master"]["hoja_ruta_2020_pn1.nombrecont"] )) {
			$lookupTableLinks["contractor_master"]["hoja_ruta_2020_pn1.nombrecont"] = array();
		}
		$lookupTableLinks["contractor_master"]["hoja_ruta_2020_pn1.nombrecont"]["edit"] = array("table" => "hoja_ruta_2020_pn1", "field" => "nombrecont", "page" => "edit");
		if( !isset( $lookupTableLinks["q_buscador_usuarios_all"] ) ) {
			$lookupTableLinks["q_buscador_usuarios_all"] = array();
		}
		if( !isset( $lookupTableLinks["q_buscador_usuarios_all"]["hoja_ruta_2020_pn1.sys_user"] )) {
			$lookupTableLinks["q_buscador_usuarios_all"]["hoja_ruta_2020_pn1.sys_user"] = array();
		}
		$lookupTableLinks["q_buscador_usuarios_all"]["hoja_ruta_2020_pn1.sys_user"]["edit"] = array("table" => "hoja_ruta_2020_pn1", "field" => "sys_user", "page" => "edit");
		if( !isset( $lookupTableLinks["hoja_ruta_event_type"] ) ) {
			$lookupTableLinks["hoja_ruta_event_type"] = array();
		}
		if( !isset( $lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_pn1.evento_type_id_fk"] )) {
			$lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_pn1.evento_type_id_fk"] = array();
		}
		$lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_pn1.evento_type_id_fk"]["edit"] = array("table" => "hoja_ruta_2020_pn1", "field" => "evento_type_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["hoja_ruta_2020_pn1.user_from"] )) {
			$lookupTableLinks["global_users"]["hoja_ruta_2020_pn1.user_from"] = array();
		}
		$lookupTableLinks["global_users"]["hoja_ruta_2020_pn1.user_from"]["edit"] = array("table" => "hoja_ruta_2020_pn1", "field" => "user_from", "page" => "edit");
		if( !isset( $lookupTableLinks["nomina_cont_meses"] ) ) {
			$lookupTableLinks["nomina_cont_meses"] = array();
		}
		if( !isset( $lookupTableLinks["nomina_cont_meses"]["hoja_ruta_2020_pn1.mes"] )) {
			$lookupTableLinks["nomina_cont_meses"]["hoja_ruta_2020_pn1.mes"] = array();
		}
		$lookupTableLinks["nomina_cont_meses"]["hoja_ruta_2020_pn1.mes"]["edit"] = array("table" => "hoja_ruta_2020_pn1", "field" => "mes", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["hoja_ruta_2020_pn1.sys_dep"] )) {
			$lookupTableLinks["dependencia"]["hoja_ruta_2020_pn1.sys_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["hoja_ruta_2020_pn1.sys_dep"]["edit"] = array("table" => "hoja_ruta_2020_pn1", "field" => "sys_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_estados"] ) ) {
			$lookupTableLinks["contrato_estados"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_estados"]["q_info_cont.cont_estado"] )) {
			$lookupTableLinks["contrato_estados"]["q_info_cont.cont_estado"] = array();
		}
		$lookupTableLinks["contrato_estados"]["q_info_cont.cont_estado"]["edit"] = array("table" => "q_info_cont", "field" => "cont_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["q_info_cont.cargo_id"] )) {
			$lookupTableLinks["cargo"]["q_info_cont.cargo_id"] = array();
		}
		$lookupTableLinks["cargo"]["q_info_cont.cargo_id"]["edit"] = array("table" => "q_info_cont", "field" => "cargo_id", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["q_info_cont.dependencia_id"] )) {
			$lookupTableLinks["dependencia"]["q_info_cont.dependencia_id"] = array();
		}
		$lookupTableLinks["dependencia"]["q_info_cont.dependencia_id"]["edit"] = array("table" => "q_info_cont", "field" => "dependencia_id", "page" => "edit");
		if( !isset( $lookupTableLinks["hoja_ruta_2020"] ) ) {
			$lookupTableLinks["hoja_ruta_2020"] = array();
		}
		if( !isset( $lookupTableLinks["hoja_ruta_2020"]["hoja_ruta_ob.hr_id_fk"] )) {
			$lookupTableLinks["hoja_ruta_2020"]["hoja_ruta_ob.hr_id_fk"] = array();
		}
		$lookupTableLinks["hoja_ruta_2020"]["hoja_ruta_ob.hr_id_fk"]["edit"] = array("table" => "hoja_ruta_ob", "field" => "hr_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["hoja_ruta_event_type"] ) ) {
			$lookupTableLinks["hoja_ruta_event_type"] = array();
		}
		if( !isset( $lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020.evento_type_id_fk"] )) {
			$lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020.evento_type_id_fk"] = array();
		}
		$lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020.evento_type_id_fk"]["edit"] = array("table" => "hoja_ruta_2020", "field" => "evento_type_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["hoja_ruta_2020"] ) ) {
			$lookupTableLinks["hoja_ruta_2020"] = array();
		}
		if( !isset( $lookupTableLinks["hoja_ruta_2020"]["hoja_ruta_op.hr_id_fk"] )) {
			$lookupTableLinks["hoja_ruta_2020"]["hoja_ruta_op.hr_id_fk"] = array();
		}
		$lookupTableLinks["hoja_ruta_2020"]["hoja_ruta_op.hr_id_fk"]["edit"] = array("table" => "hoja_ruta_op", "field" => "hr_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["contractor_master"] ) ) {
			$lookupTableLinks["contractor_master"] = array();
		}
		if( !isset( $lookupTableLinks["contractor_master"]["hoja_ruta_2020_pn2.nombrecont"] )) {
			$lookupTableLinks["contractor_master"]["hoja_ruta_2020_pn2.nombrecont"] = array();
		}
		$lookupTableLinks["contractor_master"]["hoja_ruta_2020_pn2.nombrecont"]["edit"] = array("table" => "hoja_ruta_2020_pn2", "field" => "nombrecont", "page" => "edit");
		if( !isset( $lookupTableLinks["q_buscador_usuarios_all"] ) ) {
			$lookupTableLinks["q_buscador_usuarios_all"] = array();
		}
		if( !isset( $lookupTableLinks["q_buscador_usuarios_all"]["hoja_ruta_2020_pn2.sys_user"] )) {
			$lookupTableLinks["q_buscador_usuarios_all"]["hoja_ruta_2020_pn2.sys_user"] = array();
		}
		$lookupTableLinks["q_buscador_usuarios_all"]["hoja_ruta_2020_pn2.sys_user"]["edit"] = array("table" => "hoja_ruta_2020_pn2", "field" => "sys_user", "page" => "edit");
		if( !isset( $lookupTableLinks["hoja_ruta_event_type"] ) ) {
			$lookupTableLinks["hoja_ruta_event_type"] = array();
		}
		if( !isset( $lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_pn2.evento_type_id_fk"] )) {
			$lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_pn2.evento_type_id_fk"] = array();
		}
		$lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_pn2.evento_type_id_fk"]["edit"] = array("table" => "hoja_ruta_2020_pn2", "field" => "evento_type_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["hoja_ruta_2020_pn2.user_from"] )) {
			$lookupTableLinks["global_users"]["hoja_ruta_2020_pn2.user_from"] = array();
		}
		$lookupTableLinks["global_users"]["hoja_ruta_2020_pn2.user_from"]["edit"] = array("table" => "hoja_ruta_2020_pn2", "field" => "user_from", "page" => "edit");
		if( !isset( $lookupTableLinks["nomina_cont_meses"] ) ) {
			$lookupTableLinks["nomina_cont_meses"] = array();
		}
		if( !isset( $lookupTableLinks["nomina_cont_meses"]["hoja_ruta_2020_pn2.mes"] )) {
			$lookupTableLinks["nomina_cont_meses"]["hoja_ruta_2020_pn2.mes"] = array();
		}
		$lookupTableLinks["nomina_cont_meses"]["hoja_ruta_2020_pn2.mes"]["edit"] = array("table" => "hoja_ruta_2020_pn2", "field" => "mes", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["hoja_ruta_2020_pn2.sys_dep"] )) {
			$lookupTableLinks["dependencia"]["hoja_ruta_2020_pn2.sys_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["hoja_ruta_2020_pn2.sys_dep"]["edit"] = array("table" => "hoja_ruta_2020_pn2", "field" => "sys_dep", "page" => "edit");
}

?>