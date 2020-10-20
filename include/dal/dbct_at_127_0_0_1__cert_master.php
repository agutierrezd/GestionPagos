<?php
$dalTablecert_master = array();
$dalTablecert_master["cert_id"] = array("type"=>3,"varname"=>"cert_id", "name" => "cert_id");
$dalTablecert_master["cert_hash"] = array("type"=>200,"varname"=>"cert_hash", "name" => "cert_hash");
$dalTablecert_master["id_cont_fk"] = array("type"=>3,"varname"=>"id_cont_fk", "name" => "id_cont_fk");
$dalTablecert_master["cont_hash_fk"] = array("type"=>200,"varname"=>"cont_hash_fk", "name" => "cont_hash_fk");
$dalTablecert_master["cert_califcumpli"] = array("type"=>16,"varname"=>"cert_califcumpli", "name" => "cert_califcumpli");
$dalTablecert_master["cert_obliga"] = array("type"=>16,"varname"=>"cert_obliga", "name" => "cert_obliga");
$dalTablecert_master["cert_obs"] = array("type"=>200,"varname"=>"cert_obs", "name" => "cert_obs");
$dalTablecert_master["cert_fecha"] = array("type"=>135,"varname"=>"cert_fecha", "name" => "cert_fecha");
$dalTablecert_master["cert_status"] = array("type"=>16,"varname"=>"cert_status", "name" => "cert_status");
$dalTablecert_master["cert_mailsol"] = array("type"=>200,"varname"=>"cert_mailsol", "name" => "cert_mailsol");
$dalTablecert_master["cert_fechacarga"] = array("type"=>7,"varname"=>"cert_fechacarga", "name" => "cert_fechacarga");
$dalTablecert_master["cert_file"] = array("type"=>200,"varname"=>"cert_file", "name" => "cert_file");
$dalTablecert_master["cert_estado"] = array("type"=>16,"varname"=>"cert_estado", "name" => "cert_estado");
$dalTablecert_master["cert_mailnot"] = array("type"=>200,"varname"=>"cert_mailnot", "name" => "cert_mailnot");
	$dalTablecert_master["cert_id"]["key"]=true;

$dal_info["dbct_at_127_0_0_1__cert_master"] = &$dalTablecert_master;
?>