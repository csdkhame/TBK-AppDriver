
<?
 $_POST[data_drivername];
 $_POST[data_date];
 $_POST[data_id];
 
if($_POST[data_sv] == 'cn'){
	$db->connectdb_cn(DB_NAME,DB_USERNAME,DB_PASSWORD);
}else{
	$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
}
?>


<?

if($_GET[action] == "change_work"){
 
 $_GET[drivername];
 
 	$db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
         $db->update_db(TB_driver, array(
            "alert_new_work" => "1",
			 "check_alert_new_work" => "1"
        ), " id='".$_GET[drivername]."' ");
		
		 	$db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
         $db->update_db(TB_driver, array(
            "alert_change_work" => "1",
			 "check_alert_change_work" => "1"
        ), " id='".$_GET[old_drivername]."' ");
 
 
 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
 		$db->add_db('history_transfer_report',array(
 
 			"type"=>"to",
			"vc"=>"$_POST[data_vc]",
			"report_id"=>"$_POST[data_report_id]",
			"order_id"=>"$_POST[data_order_id]",
			"posted"=>"$_SESSION[admin_user_dv]",
			"post_date"=>"".TIMESTAMP."",
			"update_date"=>"".TIMESTAMP.""
	 
		));

  
  $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$db->update_db(TB_transfer_report_all,array(
			//"driver_topoint"=>"1",
			"drivername"=>"$_GET[drivername]",
			"change_old_drivername	"=>"$_GET[old_drivername]",
			"carno"=>"$_GET[carno]",
			"change_old_carno"=>"$_GET[old_carno]",
			"change_work_type"=>"$_GET[type]"
		)," id='".$_POST[data_id]."' ");
		$db->closedb ();
 
}



?>





<?















$res[vc] = $db->select_query("SELECT  invoice  FROM ".TB_order."  where id='".$_POST[data_id]."'  limit 1");
$arr[vc] = $db->fetch($res[vc]);

$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);

$res[project] = $db->select_query("SELECT id  FROM ".TB_transfer_report_all."  where transfer_date='".$_POST[data_date]."' and  drivername='".$_POST[data_drivername]."' and  carno='".$_POST[data_carno]."' ");
	while($arr[project] = $db->fetch($res[project])){

///echo $arr[project][id];
?>

 <script type="text/javascript">
 
$('#iconchk_s1_<?=$arr[project][id];?>').attr("src", "images/yes.png");
$('#checkstep_1_<?=$arr[project][id];?>').addClass("checkinstep_active");

$('#tab_to_<?=$arr[project][id]?>').removeClass("tab_alert");
$('#tab_pickup_<?=$arr[project][id]?>').addClass("tab_alert");

$('#btn_topoint<?=$arr[project][id]?>').addClass("tab_alert");


 
	var url_map<?=$_POST[data_id];?> = "popup.php?name=map&file=view&sv=<?=$_POST[data_sv];?>&bookid=<?=$_POST[data_id];?>&type=driver_topoint";
$('#mapto_<?=$_POST[data_id];?>').load(url_map<?=$_POST[data_id];?>);
 
</script>



<?
}
 

if($_POST[col_name] == "driver_topoint"){


///// send data to driver
 	$db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
         $db->update_db(TB_driver, array(
		 	"alert_lab_call_terminal" =>"$_POST[terminal]",
            "alert_lab_call" => "1",
			 "check_alert_lab_call" => "1"
        ), " id=".$_POST[data_drivername]." ");
/////
	 
	
	////// งานรวม
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$db->update_db(TB_transfer_report_all,array(
			//"driver_topoint"=>"1",
			"driver_topoint"=>"0",
			"driver_topoint_date"=>"".time()."",	
		)," id='".$_POST[data_id]."' ");
		$db->closedb ();
	
	
 if($_POST[data_sv] == 'cn'){
	$db->connectdb_cn(DB_NAME,DB_USERNAME,DB_PASSWORD);
}else{
	$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
}

		  	$db->update_db('web_transfer_report',array(
			////"driver_topoint"=>"0",
			"driver_topoint"=>"1",
			"driver_topoint_date"=>"".time()."",	
		)," id='".$_POST[data_report_id]."' ");
		
		///// join
		/*
		if($_GET[cartype]==2 and $_GET[area]=='in'){
 
				  	$db->update_db('web_transfer_report',array(
			////"driver_topoint"=>"0",
			"driver_topoint"=>"1",
			"driver_topoint_date"=>"".time()."",	
		)," transfer_date='".$_POST[data_date]."' and  drivername='".$_POST[data_drivername]."' and  carno='".$_POST[data_carno]."'");
		
		
		}
		/////
		*/
		
		
 
  		$db->update_db(TB_order,array(
			"driver_topoint"=>"1",
			"driver_topoint_date"=>"".time()."",	
		)," invoice='".$_POST[data_vc]."' ");
		$db->closedb ();
		
		//// lab history
		
		
		
		
		///// add history
 
 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
 		$db->add_db('history_transfer_report',array(
 
 			"type"=>"to",
			"vc"=>"$_POST[data_vc]",
			"report_id"=>"$_POST[data_report_id]",
			"order_id"=>"$_POST[data_order_id]",
			"posted"=>"$_SESSION[admin_user_dv]",
			"post_date"=>"".TIMESTAMP."",
			"update_date"=>"".TIMESTAMP.""
	 
		));
 
		
		?> 
		 <script type="text/javascript">
$('#iconchk_s1_<?=$_POST[data_id];?>').attr("src", "images/yes.png");
$('#checkstep_1_<?=$_POST[data_id];?>').addClass("checkinstep_active");

$('#tab_to_<?=$_POST[data_id]?>').removeClass("tab_alert");
$('#tab_pickup_<?=$_POST[data_id]?>').addClass("tab_alert");

$('#btn_topoint<?=$_POST[data_id]?>').addClass("tab_alert");


 
	var url_map<?=$_POST[data_id];?> = "popup.php?name=map&file=view&sv=<?=$_POST[data_sv];?>&bookid=<?=$_POST[data_id];?>&type=driver_topoint";
$('#mapto_<?=$_POST[data_id];?>').load(url_map<?=$_POST[data_id];?>);
 
</script>
		<?
		//*/
}

if($_POST[col_name] == "driver_pickup"){
//////////////////////////////////////////// ó Database Edit
  
////////////////// เจอแขก
		if($_POST[data_val] == 1){
		
///// send data to driver
 	$db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
         $db->update_db(TB_driver, array(
            "alert_lab_call" => "2",
			 "check_alert_lab_call" => "1"
        ), " id=".$_POST[data_drivername]." ");
/////
		
				
		////// งานรวม
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$db->update_db(TB_transfer_report_all,array(
			"driver_pickup"=>"1",
			"driver_pickup_date"=>"".time()."",	
		)," id='".$_POST[data_id]."' ");
		$db->closedb ();
		
if($_POST[data_sv] == 'cn'){
$db->connectdb_cn(DB_NAME,DB_USERNAME,DB_PASSWORD);
}else{
	$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
}

			$db->update_db('web_transfer_report',array(
			"driver_pickup"=>"1",
			"driver_pickup_date"=>"".time()."",	
		)," id='".$_POST[data_report_id]."' ");
 
 	
			$db->update_db(TB_order,array(
			"driver_pickup"=>"1",
			"driver_pickup_date"=>"".time()."",	
)," invoice='".$_POST[data_vc]."' ");

		$db->closedb ();
		
		
		}else{	
		
////////////////// ไม่เจอแขก
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$db->update_db(TB_transfer_report_all,array(
			"driver_pickup"=>"2",
			"driver_pickup_date"=>"".time()."",	
		)," id='".$_POST[data_id]."' ");
		$db->closedb ();
		

if($_POST[data_sv] == 'cn'){
$db->connectdb_cn(DB_NAME,DB_USERNAME,DB_PASSWORD);
}else{
	$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
}

			$db->update_db('web_transfer_report',array(
			"driver_pickup"=>"2",
			"driver_pickup_date"=>"".time()."",	
		)," id='".$_POST[data_report_id]."' ");
 
		$db->update_db(TB_order,array(
 			"driver_pickup"=>"2",
			"driver_pickup_date"=>"".time()."",
			"driver_remark"=>"".$_POST[driver_remark_noguest]."",	
		)," invoice='".$_POST[data_vc]."' ");
				
		/////
		$db->add_db('web_driver_send_remark',array(

			"vc"=>"$_POST[data_id]",
			"type"=>"$_POST[driver_remark]",
			"detail"=>"$_POST[driver_remark_detail]",
			"invoice"=>"$_POST[data_vc]",
			
			
			"server"=>"$_POST[data_sv]",
			  
			"posted"=>"$_SESSION[admin_user]",

			"post_date"=>"".TIMESTAMP."",

			"update_date"=>"".TIMESTAMP.""

 

		));
		
		
		$db->closedb ();
		////
		}
		
		$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
 		$db->add_db('history_transfer_report',array(
 			"guest"=>"$_POST[data_val]",
 			"type"=>"pickup",
			"vc"=>"$_POST[data_vc]",
			"report_id"=>"$_POST[data_report_id]",
			"order_id"=>"$_POST[data_or0der_id]",
			"posted"=>"$_SESSION[admin_user_dv]",
			"post_date"=>"".TIMESTAMP."",
			"update_date"=>"".TIMESTAMP.""
	 
		));
		
		?>
		<script>
$('#iconchk_s2_<?=$_POST[data_id];?>').attr("src", "images/yes.png");
$('#checkstep_2_<?=$_POST[data_id];?>').addClass("checkinstep_active");

$('#tab_pickup_<?=$_POST[data_id]?>').removeClass("tab_alert");
$('#tab_complete_<?=$_POST[data_id]?>').addClass("tab_alert");
 
 	var url_map<?=$_POST[data_id];?> = "popup.php?name=map&file=view&sv=<?=$_POST[data_sv];?>&bookid=<?=$_POST[data_id];?>&type=driver_pickup&data_val=<?=$_POST[data_val];?>";
$('#mappickup_<?=$_POST[data_id];?>').load(url_map<?=$_POST[data_id];?>);

$('#show_price<?=$_POST[data_id]?>').show();
 
		</script>
		
		<?
		//*/
}

if($_POST[col_name] == "driver_complete"){
	//////////////////////////////////////////// ó Database Edit
 ?>
 
 <script>

$('#iconchk_s3').attr("src", "images/yes.png");
$('#checkstep_3').addClass("checkinstep_active");

$('#tab_complete_<?=$_POST[data_id]?>').removeClass("tab_alert");

 	var url_map<?=$_POST[data_id];?> = "popup.php?name=map&file=view&sv=<?=$_POST[data_sv];?>&bookid=<?=$_POST[data_id];?>&type=driver_complete&data_val=<?=$_POST[data_val];?>";
$('#mapcomplete_<?=$_POST[data_id];?>').load(url_map<?=$_POST[data_id];?>);

$('#show_price<?=$_POST[data_id]?>').show();
 
 
		</script>
 <?
	//include "admin/admin/car/driver/user/share.php";
	//*
		////// งานรวม
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$db->update_db(TB_transfer_report_all,array(
			"driver_complete"=>"1",
			"driver_complete_date"=>"".time()."",
		)," id='".$_POST[data_id]."' ");
		$db->closedb ();
		
 
 if($_POST[data_sv] == 'cn'){
$db->connectdb_cn(DB_NAME,DB_USERNAME,DB_PASSWORD);
}else{
	$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
}
 		$db->update_db('web_transfer_report',array(
			"driver_complete"=>"1",
			"driver_complete_date"=>"".time()."",
		)," id='".$_POST[data_report_id]."' ");
 
 	
			$db->update_db(TB_order,array(
			"driver_complete"=>"1",
			"driver_complete_date"=>"".time()."",
)," invoice='".$_POST[data_vc]."' ");

		$db->closedb ();
 
 
		
}

/*
$_POST[col_name] = "driver_pickup";
$_POST[data_sv] = "TH";
$_POST[data_id] = "250644";
*/
//include "action_share.php";

$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$db->update_db(TB_transfer_report_all,array(
			"driver_lastpoint_date"=>"".time()."" 
		)," id='".$_POST[data_id]."' ");
		$db->closedb ();
?>
 
  
 
<iframe src="popup.php?name=action&file=share&col_name=<?=$_POST[col_name];?>&data_vc=<?=$_POST[data_vc];?>&data_id=<?=$_POST[data_id];?>&data_report_id=<?=$_POST[data_report_id];?>"  ></iframe>
 