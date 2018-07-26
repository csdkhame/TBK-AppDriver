<?php 
	include('../../../includes/class.mysql.php');
	include('../../../includes/config.in.php');
	$db = new DB();
	
	if($_GET[type]=='distance'){
		$id = $_POST[id];
		$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
		$res[point] = $db->select_query("SELECT  driver_topoint_lat, driver_topoint_lng, driver_pickup FROM  transfer_report_all  where id = '".$id."' ");
		$arr[point] = $db->fetch($res[point]);
		
		
		
		echo json_encode($arr);
	}
?>