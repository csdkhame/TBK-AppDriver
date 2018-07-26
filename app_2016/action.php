<?
session_start();
include "config_ac.php";

if($_POST[data_sv] == 'CN'){
	$db->connectdb_cn(DB_NAME,DB_USERNAME,DB_PASSWORD);
}else{
	$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
}

if($_POST[col_name] == "driver_topoint"){
	//////////////////////////////////////////// ó Database Edit
 
	//include "admin/admin/car/driver/user/share.php";
	//*
		
		$db->update_db(TB_order,array(
			"driver_topoint"=>"1",
			"driver_topoint_date"=>"".time()."",	
		)," id='".$_POST[data_id]."' ");
		$db->closedb ();
		//*/
}

if($_POST[col_name] == "driver_pickup"){
	//////////////////////////////////////////// ó Database Edit
 
	
	//*
		if($_POST[data_val] == 1){
 
			$db->update_db(TB_order,array(
			"driver_pickup"=>"1",
			"driver_pickup_date"=>"".time()."",	
			)," id='".$_POST[data_id]."' ");
		$db->closedb ();
		}else{	
		$db->update_db(TB_order,array(
			"driver_pickup"=>"2",
			"driver_pickup_date"=>"".time()."",
			"driver_remark"=>"".$_POST[driver_remark_noguest]."",	
		)," id='".$_POST[data_id]."' ");
		$db->closedb ();
		}
		
		//*/
}

if($_POST[col_name] == "driver_complete"){
	//////////////////////////////////////////// ó Database Edit
 
	//include "admin/admin/car/driver/user/share.php";
	//*

		$db->update_db(TB_order,array(
			"driver_complete"=>"1",
			"driver_complete_date"=>"".time()."",
		)," id='".$_POST[data_id]."' ");
		$db->closedb ();
		//*/
}

/*
$_POST[col_name] = "driver_pickup";
$_POST[data_sv] = "TH";
$_POST[data_id] = "250644";
*/
//include "action_share.php";

?>
<br />
<iframe src="action_share.php?col_name=<?=$_POST[col_name];?>&data_id=<?=$_POST[data_id];?>&data_sv=<?=$_POST[data_sv];?>" style="height:250px; width:250px;"></iframe>


