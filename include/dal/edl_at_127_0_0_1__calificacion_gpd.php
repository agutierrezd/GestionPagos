<?php
$dalTablecalificacion_gpd = array();
$dalTablecalificacion_gpd["id_cal"] = array("type"=>3,"varname"=>"id_cal", "name" => "id_cal");
$dalTablecalificacion_gpd["dep_id_fk"] = array("type"=>3,"varname"=>"dep_id_fk", "name" => "dep_id_fk");
$dalTablecalificacion_gpd["cal_vigencia"] = array("type"=>2,"varname"=>"cal_vigencia", "name" => "cal_vigencia");
$dalTablecalificacion_gpd["cal_valor"] = array("type"=>3,"varname"=>"cal_valor", "name" => "cal_valor");
	$dalTablecalificacion_gpd["id_cal"]["key"]=true;

$dal_info["edl_at_127_0_0_1__calificacion_gpd"] = &$dalTablecalificacion_gpd;
?>