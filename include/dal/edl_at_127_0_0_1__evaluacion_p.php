<?php
$dalTableevaluacion_p = array();
$dalTableevaluacion_p["eval_id"] = array("type"=>3,"varname"=>"eval_id", "name" => "eval_id");
$dalTableevaluacion_p["id_eval_fk"] = array("type"=>3,"varname"=>"id_eval_fk", "name" => "id_eval_fk");
$dalTableevaluacion_p["id_EvaluadorFK"] = array("type"=>3,"varname"=>"id_EvaluadorFK", "name" => "id_EvaluadorFK");
$dalTableevaluacion_p["id_eval_vigencia_fk"] = array("type"=>3,"varname"=>"id_eval_vigencia_fk", "name" => "id_eval_vigencia_fk");
$dalTableevaluacion_p["eval_fecha_i"] = array("type"=>7,"varname"=>"eval_fecha_i", "name" => "eval_fecha_i");
$dalTableevaluacion_p["eval_fecha_f"] = array("type"=>7,"varname"=>"eval_fecha_f", "name" => "eval_fecha_f");
$dalTableevaluacion_p["eval_dias"] = array("type"=>3,"varname"=>"eval_dias", "name" => "eval_dias");
$dalTableevaluacion_p["eval_estado"] = array("type"=>16,"varname"=>"eval_estado", "name" => "eval_estado");
$dalTableevaluacion_p["eval_ultima_actividad"] = array("type"=>135,"varname"=>"eval_ultima_actividad", "name" => "eval_ultima_actividad");
	$dalTableevaluacion_p["eval_id"]["key"]=true;

$dal_info["edl_at_127_0_0_1__evaluacion_p"] = &$dalTableevaluacion_p;
?>