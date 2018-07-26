<?
session_start();
include "config_ac.php";

if($_GET[data_sv] == 'CN'){
	$db->connectdb_cn(DB_NAME,DB_USERNAME,DB_PASSWORD);
}else{
	$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
}
echo $_GET[col_lat]." - ".$_GET[lat]." - ".$_GET[col_lng]." - ".$_GET[lng]." - ".$_GET[id]." - ".$_GET[data_sv];
//$_GET['id'] = 250644;
		$db->update_db(TB_order,array(
			"".$_GET[col_lat].""=>"".$_GET[lat]."",
			"".$_GET[col_lng].""=>"".$_GET[lng]."",	
		)," id=$_GET[id] ");
		$db->closedb (); 


 



?>