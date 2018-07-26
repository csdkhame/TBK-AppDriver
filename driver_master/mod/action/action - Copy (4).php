 
 <div id="send_data_gps"   style="display: none">   </div>
 
 

<?

///////// ดึงข้อมูลคนขับล่าสุด

/*

$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res[drivername] = $db->select_query("SELECT id,car_number_use FROM ".TB_driver." WHERE id='".$arr[project][drivername]."' ");
$arr[drivername] = $db->fetch($res[drivername]);



$driver_car_use=$arr[drivername][car_number_use];





 
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$res[chkproject] = $db->select_query("SELECT car_price FROM ".TB_transfer_report_all."  where id='".$_POST[data_id]."' limit 1");
$arr[chkproject] = $db->fetch($res[chkproject]);
 
*/
 
// $driver_car_use=$arr[drivername][car_number_use]; 
 
 
 
 
//echo $_POST[data_id];
 
if($_POST[data_sv] == 'cn'){
	$db->connectdb_cn(DB_NAME,DB_USERNAME,DB_PASSWORD);
}else{
	$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
}


/*
$res[vc] = $db->select_query("SELECT invoice  FROM ".TB_order."  where id='".$_POST[data_id]."'  limit 1");
$arr[vc] = $db->fetch($res[vc]);
*/




  

if($_POST[col_name] == "driver_topoint"){
	
 
	////////////////////////////////////////////  
	////// งานรวม
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$db->update_db(TB_transfer_report_all,array(


			//"car_number"=>"".$driver_car_use."",


			"driver_topoint_lat"=>"".$_POST[data_lat]."",
			"driver_topoint_lng"=>"".$_POST[data_lng]."",	
 
			"driver_topoint"=>"1",
			"driver_topoint_date"=>"".time()."",	
		)," id='".$_POST[data_id]."' ");
		$db->closedb ();


 if($_POST[data_sv] == 'cn'){
	$db->connectdb_cn(DB_NAME,DB_USERNAME,DB_PASSWORD);
}else{
	$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
}

		  	$db->update_db('web_transfer_report',array(
			
			//"car_number"=>"".$driver_car_use."",
			"driver_topoint_lat"=>"".$_POST[data_lat]."",
			"driver_topoint_lng"=>"".$_POST[data_lng]."",	
			"driver_topoint"=>"1",
			"driver_topoint_date"=>"".time()."",	
		)," id='".$_POST[data_report_id]."' ");
 
  		$db->update_db(TB_order,array(
		
		//"car_number"=>"".$driver_car_use."",
					"driver_topoint_lat"=>"".$_POST[data_lat]."",
			"driver_topoint_lng"=>"".$_POST[data_lng]."",	
			"driver_topoint"=>"1",
			"driver_topoint_date"=>"".time()."",	
		)," invoice='".$_POST[data_vc]."' ");
		$db->closedb ();
		
		
		
		?>
        
        
        
 
        
        
        
 <script type="text/javascript">
 


  //// ปรับปุ่ม

$('#btn_topoint<?=$_POST[data_id];?>').removeClass("btnstatus-checkin");
$('#btn_topoint<?=$_POST[data_id];?>').addClass("btnstatus-checkin-no");

/// ขั้นตอนต่อไป

$('#sub_see_guest<?=$_POST[data_id];?>').fadeIn("slow");

 

		 
// alert(document.getElementById('check_data_status_gps_lat_old').value); 
		 
$('#iconchk_s1_<?=$_POST[data_id]?>').attr("src", "images/yes.png");
$('#checkstep_1_<?=$_POST[data_id]?>').addClass("checkinstep_active");

$('#tab_to_<?=$_POST[data_id]?>').removeClass("tab_alert");
$('#tab_pickup_<?=$_POST[data_id]?>').addClass("tab_alert");

 
$('#mapto_<?=$_POST[data_id];?>').load('load/page/loading_mini.php');
 
 var url_map<?=$_POST[data_id];?> = "load_small.php?name=load/show/map&file=view&sv=<?=$_POST[data_sv];?>&bookid=<?=$_POST[data_id];?>&type=driver_topoint";
	
setTimeout(function () {
$('#mapto_<?=$_POST[data_id];?>').load(url_map<?=$_POST[data_id];?>);
 $('#checkin_sound_to').click();
}, 2000); //w


////  
var load_time_topoint_<?=$_POST[data_id];?> = "load_small.php?name=load/today/sub&file=time&sv=<?=$_GET[sv];?>&bookid=<?=$_POST[data_id];?>&type=driver_topoint&driver_topoint=1&driver_topoint_date=<?=time();?>"; 
$('#load_time_topoint_<?=$_POST[data_id];?>').load(load_time_topoint_<?=$_POST[data_id];?>);



////  
var load_step_<?=$_POST[data_id];?> = "load_small.php?name=load/today/sub&file=step&bookid=<?=$_POST[data_id];?>&type=driver_topoint&status=1"; 
$('#load_step_topoint_<?=$_POST[data_id];?>').load(load_step_<?=$_POST[data_id];?>);


//// เช็คแขก
 
var load_step_<?=$_POST[data_id];?> = "load_small.php?name=load/today/sub&file=step&bookid=<?=$_POST[data_id];?>&type=driver_pickup&status=0"; 
$('#load_step_pickup_<?=$_POST[data_id];?>').load(load_step_<?=$_POST[data_id];?>);

 
////  
var load_step_<?=$_POST[data_id];?> = "load_small.php?name=load/today/sub&file=step_guest&bookid=<?=$_POST[data_id];?>&type=driver_pickup&status=0"; 
$('#load_step_check_pickup_<?=$_POST[data_id];?>').load(load_step_<?=$_POST[data_id];?>);

 
 
</script>



<?

 ///// check ok
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$res[chkproject] = $db->select_query("SELECT driver_topoint,invoice FROM ".TB_transfer_report_all."  where id='".$_POST[data_id]."' limit 1");
$arr[chkproject] = $db->fetch($res[chkproject]);
 
$check_point=$arr[chkproject][driver_topoint];
 
 if($check_point>0){ 
 
 /// pic
$_GET[folder]=$arr[chkproject][invoice];
 $_GET[photo]='topoint';
 
include "mod/action/upload_pic.php";

 ///
 
 ?>

<script>

 
 
  setTimeout(function () {
 
 ///// next step
 
 /// alert('บันทึกข้อมูลสำเร็จ');
 
 
 swal({
  position: 'top-right',
  type: 'success',
  title: 'บันทึกข้อมูล',
  text: "ถึงสถานที่รับสำเร็จ",
  showConfirmButton: false,
  timer: 4000
})
 
  

 

 $( "#load_data_checkin_popup" ).toggle(); 
 $( "#load_data_checkin_popup" ).html('');

 
}, 4000); //w
 
</script>

<? } ?>

 



		<?
		//*/
}

?>







<?

if($_POST[col_name] == "driver_pickup"){

//////////////////////////////////////////// ó Database Edit
 
 
 
////////////////// เจอแขก
		if($_POST[data_val] == 1){
				
		////// งานรวม
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$db->update_db(TB_transfer_report_all,array(

//"car_number"=>"".$driver_car_use."",
			"driver_pickup_lat"=>"".$_POST[data_lat]."",
			"driver_pickup_lng"=>"".$_POST[data_lng]."",	
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
			
			//"car_number"=>"".$driver_car_use."",
			"driver_pickup_lat"=>"".$_POST[data_lat]."",
			"driver_pickup_lng"=>"".$_POST[data_lng]."",	
			"driver_pickup"=>"1",
			"driver_pickup_date"=>"".time()."",	
		)," id='".$_POST[data_report_id]."' ");
 
 	
			$db->update_db(TB_order,array(
			
			//"car_number"=>"".$driver_car_use."",
			"driver_pickup_lat"=>"".$_POST[data_lat]."",
			"driver_pickup_lng"=>"".$_POST[data_lng]."",	
			"driver_pickup"=>"1",
			"driver_pickup_date"=>"".time()."",	
)," invoice='".$_POST[data_vc]."' ");

		$db->closedb ();
		?>
 
		
 <script>
				
$('#btn_pickup_check_<?=$_POST[data_id];?>').removeClass("btnstatus-checkin");
$('#btn_pickup_check_<?=$_POST[data_id];?>').addClass("btnstatus-checkin-no");


$('#btn_pickup_not_check_<?=$_POST[data_id];?>').removeClass("btnstatus-checkin-no");
$('#btn_pickup_not_check_<?=$_POST[data_id];?>').addClass("btnstatus-checkin-red");
 
		 </script>
		
		<?
		
		
		
		
		}else{	
		
////////////////// ไม่เจอแขก
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$db->update_db(TB_transfer_report_all,array(


			//"car_number"=>"".$driver_car_use."",
			"driver_pickup_lat"=>"".$_POST[data_lat]."",
			"driver_pickup_lng"=>"".$_POST[data_lng]."",	
			//"driver_pickup"=>"2",
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
			
			//"car_number"=>"".$driver_car_use."",
			"driver_pickup_lat"=>"".$_POST[data_lat]."",
			"driver_pickup_lng"=>"".$_POST[data_lng]."",	
			//"driver_pickup"=>"2",
			"driver_pickup"=>"2",
			"driver_pickup_date"=>"".time()."",	
		)," id='".$_POST[data_report_id]."' ");
 
		$db->update_db(TB_order,array(
		
			//"car_number"=>"".$driver_car_use."",
			"driver_pickup_lat"=>"".$_POST[data_lat]."",
			"driver_pickup_lng"=>"".$_POST[data_lng]."",	
			//"driver_pickup"=>"2",
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
		?>
		<script>
		
		 //// ปรับปุ่ม
$('#btn_pickup_check_<?=$_POST[data_id];?>').removeClass("btnstatus-checkin-no");
$('#btn_pickup_check_<?=$_POST[data_id];?>').addClass("btnstatus-checkin");

$('#btn_pickup_not_check_<?=$_POST[data_id];?>').removeClass("btnstatus-checkin-red");
$('#btn_pickup_not_check_<?=$_POST[data_id];?>').addClass("btnstatus-checkin-no");
 
		
		/// alert(0);
	 
	///	$('#text_2_complete_<?=$_POST[data_id]?>').show();
	////	$('#text_1_complete_<?=$_POST[data_id]?>').hide();
		 </script>
		
		
		<?
		
		
		
		////
		}
		?>


<script>

$('#sub_complete<?=$_POST[data_id];?>').fadeIn( "slow" );
 






$('#iconchk_s2_<?=$_POST[data_id]?>').attr("src", "images/yes.png");
$('#checkstep_2_<?=$_POST[data_id]?>').addClass("checkinstep_active");

$('#tab_pickup_<?=$_POST[data_id]?>').removeClass("tab_alert");
$('#tab_complete_<?=$_POST[data_id]?>').addClass("tab_alert");


$('#mappickup_<?=$_POST[data_id];?>').load('load/page/loading_mini.php');
 
 	var url_map<?=$_POST[data_id];?> = "load_small.php?name=load/show/map&file=view&sv=<?=$_POST[data_sv];?>&bookid=<?=$_POST[data_id];?>&type=driver_pickup&data_val=<?=$_POST[data_val];?>";

 

setTimeout(function () {
$('#mappickup_<?=$_POST[data_id];?>').load(url_map<?=$_POST[data_id];?>);

 $('#checkin_sound_pickup_<?=$_POST[data_val]?>').click();

}, 2000); //w


///////
	var load_time_pickup_<?=$_POST[data_id];?> = "load_small.php?name=load/today/sub&file=time&sv=<?=$_GET[sv];?>&bookid=<?=$_POST[data_id];?>&type=driver_pickup&driver_pickup=1&driver_pickup_date=<?=time();?>"; 
$('#load_time_pickup_<?=$_POST[data_id];?>').load(load_time_pickup_<?=$_POST[data_id];?>);



///// 


//// เช็คแขก
 
var load_step_<?=$_POST[data_id];?> = "load_small.php?name=load/today/sub&file=step&bookid=<?=$_POST[data_id];?>&type=driver_pickup&status=<?=$_POST[col_name];?>"; 
$('#load_step_pickup_<?=$_POST[data_id];?>').load(load_step_<?=$_POST[data_id];?>);

 
////  
var load_step_<?=$_POST[data_id];?> = "load_small.php?name=load/today/sub&file=step_guest&bookid=<?=$_POST[data_id];?>&type=driver_pickup&status=<?=$_POST[col_name];?>"; 
$('#load_step_check_pickup_<?=$_POST[data_id];?>').load(load_step_<?=$_POST[data_id];?>);






var load_step_<?=$_POST[data_id];?> = "load_small.php?name=load/today/sub&file=step&bookid=<?=$_POST[data_id];?>&type=driver_complete&status=0"; 
$('#load_step_complete_<?=$_POST[data_id];?>').load(load_step_<?=$_POST[data_id];?>);








/*
 var load_show_price_<?=$_POST[data_id];?> = "load_small.php?name=load/today/sub&file=price&driver_price=1&id=<?=$_POST[data_id];?>&price=<?= $arr[chkproject][car_price];?>";
 $('#show_price_<?=$_POST[data_id];?>').load(load_show_price_<?=$_POST[data_id];?>);
 
 */
 
 </script>
        
 
<?
 
 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$res[chkproject] = $db->select_query("SELECT driver_pickup,invoice FROM ".TB_transfer_report_all."  where id='".$_POST[data_id]."' limit 1");
$arr[chkproject] = $db->fetch($res[chkproject]);
 
$check_point=$arr[chkproject][driver_pickup];
 
 
 if($check_point>0){ 
 
 
 
  /// pic
$_GET[folder]=$arr[chkproject][invoice];

 if($_POST[data_val] == 1){
 $_GET[photo]='yes';
}
 if($_POST[data_val] == 2){
 $_GET[photo]='no';
}
 
 include "mod/action/upload_pic.php";
 
 
 
 
 
 
 
 ///// check ok

 
 
 ?>

<script>
 
  setTimeout(function () {
 
 ///// next step
 
 /// alert('บันทึกข้อมูลสำเร็จ');
 
 
  swal({
  position: 'top-right',
  type: 'success',
  title: 'บันทึกข้อมูล',
  text: "เช็คชื่อแขกสำเร็จ",
  showConfirmButton: false,
  timer: 4000
})
 
 
 $( "#load_data_checkin_popup" ).toggle(); 
 $( "#load_data_checkin_popup" ).html('');

 
}, 4000); //w
 
</script>

<? } ?>

        
        
        
        
        
		
		<?
 
} ?>





<?

if($_POST[col_name] == "driver_complete"){
	//////////////////////////////////////////// ó Database Edit
 ?>
 
 <style>
 
.cirnumbershowok {
    border-radius: 50%; background-color: #009999;
 
    padding: 10px; 
    width: 60px;
    height: 60px; 
	text-align: justify; color:#FFFFFF; margin-left:-35px; margin-top:-8px; font-size:24px; font-weight:bold;  
	border: solid 4px #FFFFFF;
	 box-shadow: 0 0 0px 0px #E8E6E6; position:absolute;   
	   background: #01A62C !important;
  background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #009999), color-stop(1, #18B5B5)) !important;
  background: -ms-linear-gradient(bottom, #009999, #18B5B5) !important;
  background: -moz-linear-gradient(center bottom, #009999 0%, #18B5B5 100%) !important;
  background: -o-linear-gradient(#009999, #01A62C) !important;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f7bc60', endColorstr='#01A62C', GradientType=0) !important;
  color: #fff;
}
 
 
 </style>
 
 
 <?
	//include "admin/admin/car/driver/user/share.php";
	//*
		////// งานรวม
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$db->update_db(TB_transfer_report_all,array(
			//"car_number"=>"".$driver_car_use."",
			
						"driver_checkcar_lat"=>"".$_POST[data_lat]."",
			"driver_checkcar_lng"=>"".$_POST[data_lng]."",	
			"driver_checkcar"=>"1",
			"driver_checkcar_date"=>"".time()."",
			
			"driver_complete_lat"=>"".$_POST[data_lat]."",
			"driver_complete_lng"=>"".$_POST[data_lng]."",	
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
		
			//"car_number"=>"".$driver_car_use."",
			
						"driver_checkcar_lat"=>"".$_POST[data_lat]."",
			"driver_checkcar_lng"=>"".$_POST[data_lng]."",	
			"driver_checkcar"=>"1",
			"driver_checkcar_date"=>"".time()."",
			
			
			"driver_complete_lat"=>"".$_POST[data_lat]."",
			"driver_complete_lng"=>"".$_POST[data_lng]."",	
			"driver_complete"=>"1",
			"driver_complete_date"=>"".time()."",
		)," id='".$_POST[data_report_id]."' ");
 
 	
			$db->update_db(TB_order,array(
			//"car_number"=>"".$driver_car_use."",
			
						"driver_checkcar_lat"=>"".$_POST[data_lat]."",
			"driver_checkcar_lng"=>"".$_POST[data_lng]."",	
			"driver_checkcar"=>"1",
			"driver_checkcar_date"=>"".time()."",
			
			
			"driver_complete_lat"=>"".$_POST[data_lat]."",
			"driver_complete_lng"=>"".$_POST[data_lng]."",	
			"driver_complete"=>"1",
			"driver_complete_date"=>"".time()."",
)," invoice='".$_POST[data_vc]."' ");

		$db->closedb ();
 
 
 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$res[chkproject] = $db->select_query("SELECT car_price FROM ".TB_transfer_report_all."  where id='".$_POST[data_id]."' limit 1");
$arr[chkproject] = $db->fetch($res[chkproject]);

?>


<script>
 
$('#cir_<?=$_POST[data_id]?>').addClass("cirnumbershowok");
 
 
$('#iconchk_s3_<?=$_POST[data_id]?>').attr("src", "images/yes.png");
$('#checkstep_3_<?=$_POST[data_id]?>').addClass("checkinstep_active");

$('#tab_complete_<?=$_POST[data_id]?>').removeClass("tab_alert");
 
$('#tab_checkcar_<?=$_POST[data_id]?>').addClass("tab_alert");
 



$('#mapcomplete_<?=$_POST[data_id];?>').load('load/page/loading_mini.php');


 	var url_map_complete_<?=$_POST[data_id];?> = "load_small.php?name=load/show/map&file=view&sv=<?=$_POST[data_sv];?>&bookid=<?=$_POST[data_id];?>&type=driver_complete&data_val=<?=$_POST[data_val];?>";
 
 
 
setTimeout(function () {
$('#mapcomplete_<?=$_POST[data_id];?>').load(url_map_complete_<?=$_POST[data_id];?>);
 //$('#checkin_sound_complete').click();
}, 2000); //w


 var load_time_complete_<?=$_POST[data_id];?> = "load_small.php?name=load/today/sub&file=time&sv=<?=$_GET[sv];?>&bookid=<?=$_POST[data_id];?>&type=driver_complete&driver_complete=1&driver_complete_date=<?=time();?>"; 
$('#load_time_complete_<?=$_POST[data_id];?>').load(load_time_complete_<?=$_POST[data_id];?>);


 
 var load_step_complete_<?=$_POST[data_id];?> = "load_small.php?name=load/today/sub&file=step&bookid=<?=$_POST[data_id];?>&type=driver_complete&status=<?=$_POST[col_name];?>"; 
$('#load_step_complete_<?=$_POST[data_id];?>').load(load_step_complete_<?=$_POST[data_id];?>);


 var load_step_complete_<?=$_POST[data_id];?> = "load_small.php?name=load/today/sub&file=step&bookid=<?=$_POST[data_id];?>&type=driver_checkcar&status=<?=$_POST[col_name];?>"; 
$('#load_step_checkcar_<?=$_POST[data_id];?>').load(load_step_complete_<?=$_POST[data_id];?>);

 
 
 
 
 
 //// แสดงยอด
 
 
 var load_show_price_<?=$_POST[data_id];?> = "load_small.php?name=load/today/sub&file=price&driver_price=1&id=<?=$_POST[data_id];?>&price=<?= $arr[chkproject][car_price];?>";
 $('#show_price_<?=$_POST[data_id];?>').load(load_show_price_<?=$_POST[data_id];?>);
 
 
 
 
 
 
  //// ปรับปุ่ม

$('#btn_complete<?=$_POST[data_id];?>').removeClass("btnstatus-checkin");
$('#btn_complete<?=$_POST[data_id];?>').addClass("btnstatus-checkin-no");

/// ขั้นตอนต่อไป

$( "#sub_checkcar<?=$_POST[data_id]?>" ).fadeIn( "slow" );
 
 
 </script>



<script>

//// checkcar
 
$('#cir_<?=$_POST[data_id]?>').addClass("cirnumbershowok");
 
 
$('#iconchk_s4_<?=$_POST[data_id]?>').attr("src", "images/yes.png");
$('#checkstep_4_<?=$_POST[data_id]?>').addClass("checkinstep_active");

$('#tab_checkcar_<?=$_POST[data_id]?>').removeClass("tab_alert");
 

$('#mapcheckcar_<?=$_POST[data_id];?>').load('load/page/loading_mini.php');


 	var url_map_checkcar_<?=$_POST[data_id];?> = "load_small.php?name=load/show/map&file=view&sv=<?=$_POST[data_sv];?>&bookid=<?=$_POST[data_id];?>&type=driver_checkcar&data_val=<?=$_POST[data_val];?>";
 
 
 
setTimeout(function () {
 $('#mapcheckcar_<?=$_POST[data_id];?>').load(url_map_checkcar_<?=$_POST[data_id];?>);
 ///$('#checkin_sound_checkcar').click();
}, 2000); //w


 var load_time_checkcar_<?=$_POST[data_id];?> = "load_small.php?name=load/today/sub&file=time&sv=<?=$_GET[sv];?>&bookid=<?=$_POST[data_id];?>&type=driver_checkcar&driver_checkcar=1&driver_checkcar_date=<?=time();?>"; 
$('#load_time_checkcar_<?=$_POST[data_id];?>').load(load_time_checkcar_<?=$_POST[data_id];?>);

 
 var load_step_checkcar_<?=$_POST[data_id];?> = "load_small.php?name=load/today/sub&file=step&bookid=<?=$_POST[data_id];?>&type=driver_checkcar&status=<?=$_POST[col_name];?>"; 
$('#load_step_checkcar_<?=$_POST[data_id];?>').load(load_step_checkcar_<?=$_POST[data_id];?>);
 
 /// $('#show_price<?=$_POST[data_id]?>').show();
 
 
   //// ปรับปุ่ม

$('#btn_checkcar<?=$_POST[data_id];?>').removeClass("btnstatus-checkin");
$('#btn_checkcar<?=$_POST[data_id];?>').addClass("btnstatus-checkin-no");
 
 
 
		</script>





<?

 ///// check ok
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$res[chkproject] = $db->select_query("SELECT driver_complete,invoice FROM ".TB_transfer_report_all."  where id='".$_POST[data_id]."' limit 1");
$arr[chkproject] = $db->fetch($res[chkproject]);
 
$check_point=$arr[chkproject][driver_complete];

 
 if($check_point>0){ 
 
  /// pic
$_GET[folder]=$arr[chkproject][invoice];
$_GET[photo]='finishpoint';
 
 include "mod/action/upload_pic.php";
 
 
 
 ?>

<script>
 
  setTimeout(function () {
 
 ///// next step
 
 // alert('<?=$_GET[daytype]?><?=$_GET[day]?>');
 
 
 /// alert('บันทึกข้อมูลสำเร็จ');
 
  swal({
  position: 'top-right',
  type: 'success',
  title: 'บันทึกข้อมูล',
  text: "ถึงสถานที่ส่งแขกสำเร็จ",
  showConfirmButton: false,
  timer: 4000
})
 
 
  

 
 


 
 $( "#load_data_checkin_popup" ).toggle(); 
 $( "#load_data_checkin_popup" ).html('');
 
 
 
 
 

 
}, 4000); //w
 
</script>

<? } ?>





 


<?


}

?>


 
 
 
 
 
 
 
 
 
<?



//// finish



if($_POST[col_name] == "driver_finish"){
	//////////////////////////////////////////// ó Database Edit
 ?>
 
 <style>
 
.cirnumbershowok {
    border-radius: 50%; background-color: #009999;
 
    padding: 10px; 
    width: 60px;
    height: 60px; 
	text-align: justify; color:#FFFFFF; margin-left:-35px; margin-top:-8px; font-size:24px; font-weight:bold;  
	border: solid 4px #FFFFFF;
	 box-shadow: 0 0 0px 0px #E8E6E6; position:absolute;   
	   background: #01A62C !important;
  background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #009999), color-stop(1, #18B5B5)) !important;
  background: -ms-linear-gradient(bottom, #009999, #18B5B5) !important;
  background: -moz-linear-gradient(center bottom, #009999 0%, #18B5B5 100%) !important;
  background: -o-linear-gradient(#009999, #01A62C) !important;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f7bc60', endColorstr='#01A62C', GradientType=0) !important;
  color: #fff;
}
 
 
 </style>
 
 
 <?
	//include "admin/admin/car/driver/user/share.php";
	//*
		////// งานรวม
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$db->update_db(TB_transfer_report_all,array(

			//"car_number"=>"".$driver_car_use."",
			
			"driver_complete_lat"=>"".$_POST[data_lat]."",
			"driver_complete_lng"=>"".$_POST[data_lng]."",	
			"driver_complete"=>"1",
			"driver_complete_date"=>"".time()."",			
 
			
			"driver_checkcar_lat"=>"".$_POST[data_lat]."",
			"driver_checkcar_lng"=>"".$_POST[data_lng]."",	
			"driver_checkcar"=>"1",
			"driver_checkcar_date"=>"".time()."",
		)," id='".$_POST[data_id]."' ");
		$db->closedb ();
		
 
 if($_POST[data_sv] == 'cn'){
$db->connectdb_cn(DB_NAME,DB_USERNAME,DB_PASSWORD);
}else{
	$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
}
 		$db->update_db('web_transfer_report',array(
		
			//"car_number"=>"".$driver_car_use."",
			
			"driver_complete_lat"=>"".$_POST[data_lat]."",
			"driver_complete_lng"=>"".$_POST[data_lng]."",	
			"driver_complete"=>"1",
			"driver_complete_date"=>"".time()."",		
			
			
			"driver_checkcar_lat"=>"".$_POST[data_lat]."",
			"driver_checkcar_lng"=>"".$_POST[data_lng]."",	
			"driver_checkcar"=>"1",
			"driver_checkcar_date"=>"".time()."",
		)," id='".$_POST[data_report_id]."' ");
 
 	
			$db->update_db(TB_order,array(
			
			
			"driver_complete_lat"=>"".$_POST[data_lat]."",
			"driver_complete_lng"=>"".$_POST[data_lng]."",	
			"driver_complete"=>"1",
			"driver_complete_date"=>"".time()."",		
			
			//"car_number"=>"".$driver_car_use."",
			"driver_checkcar_lat"=>"".$_POST[data_lat]."",
			"driver_checkcar_lng"=>"".$_POST[data_lng]."",	
			"driver_checkcar"=>"1",
			"driver_checkcar_date"=>"".time()."",
)," invoice='".$_POST[data_vc]."' ");

		$db->closedb ();
 
?>
 
<script>
 
$('#cir_<?=$_POST[data_id]?>').addClass("cirnumbershowok");
 
 
$('#iconchk_s4_<?=$_POST[data_id]?>').attr("src", "images/yes.png");
$('#checkstep_4_<?=$_POST[data_id]?>').addClass("checkinstep_active");

$('#tab_checkcar_<?=$_POST[data_id]?>').removeClass("tab_alert");
 

$('#mapcheckcar_<?=$_POST[data_id];?>').load('load/page/loading_mini.php');


 	var url_map<?=$_POST[data_id];?> = "load_small.php?name=load/show/map&file=view&sv=<?=$_POST[data_sv];?>&bookid=<?=$_POST[data_id];?>&type=driver_checkcar&data_val=<?=$_POST[data_val];?>";
 
 
 
setTimeout(function () {
$('#mapcheckcar_<?=$_POST[data_id];?>').load(url_map<?=$_POST[data_id];?>);
 ///$('#checkin_sound_checkcar').click();
}, 2000); //w


 var load_time_checkcar_<?=$_POST[data_id];?> = "load_small.php?name=load/today/sub&file=time&sv=<?=$_GET[sv];?>&bookid=<?=$_POST[data_id];?>&type=driver_checkcar&driver_checkcar=1&driver_checkcar_date=<?=time();?>"; 
$('#load_time_checkcar_<?=$_POST[data_id];?>').load(load_time_checkcar_<?=$_POST[data_id];?>);

 
 var load_step_<?=$_POST[data_id];?> = "load_small.php?name=load/today/sub&file=step&bookid=<?=$_POST[data_id];?>&type=driver_checkcar&status=<?=$_POST[col_name];?>"; 
$('#load_step_checkcar_<?=$_POST[data_id];?>').load(load_step_<?=$_POST[data_id];?>);
 
 /// $('#show_price<?=$_POST[data_id]?>').show();
 
 
		</script>


 



<?
 ///// check ok
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$res[chkproject] = $db->select_query("SELECT driver_checkcar,invoice FROM ".TB_transfer_report_all."  where id='".$_POST[data_id]."' limit 1");
$arr[chkproject] = $db->fetch($res[chkproject]);
 
$check_point=$arr[chkproject][driver_checkcar]; 
 
 if($check_point>0){ 
 
 
   /// pic
$_GET[folder]=$arr[chkproject][invoice];

$_GET[photo]='finishpoint';

$_GET[photo_new]='checkcar';


 include "mod/action/upload_pic.php";
 
 ?>

<script>
 
  setTimeout(function () {
 
 ///// next step
 
   ///alert('<?=$_GET[daytype]?>');
   
   
 
  swal({
  position: 'top-right',
  type: 'success',
  title: 'บันทึกข้อมูล',
  text: "ถึงสถานที่รับและเช็คสัมภาระในรถสำเร็จ",
  showConfirmButton: false,
  timer: 4000
})
 
 $( "#load_data_checkin_popup" ).toggle(); 
 $( "#load_data_checkin_popup" ).html('');
 
 $('#btn_checkcar<?=$_POST[data_id];?>').attr('disabled', true);

 
}, 4000); //w
 
</script>

<? } ?>



<? if($_GET[daytype]=='today'){ ?>
<script>

 var url_place_load = "go.php?name=load/today&daytype=today&file=index&server=th&day=<?=$_GET[day]?>";
 $('#load_th').show();
 
 $('#load_th').load(url_place_load); 

</script>


<? } ?>



<? if($_GET[daytype]=='all'){ ?>
<script>

 var url_place_load = "go.php?name=load/today&daytype=all&file=timeline&server=th&find=day&day=<?=$_GET[day]?>";
 $('#load_th').show();
 
 $('#load_th').load(url_place_load); 

</script>


<? } ?>



<?
 	
}


?>







 
 
 
 
 
 
 
 
 
 




<?

 

///
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$db->update_db(TB_transfer_report_all,array(
			"driver_lastpoint_date"=>"".time()."" 
		)," id='".$_POST[data_id]."' ");
		$db->closedb ();
?>





 
  
 
 

 
 <style>
.btnstatus{ box-shadow: 1px 1px 5px #999999; border:0px solid #FFFFFF; 
border-radius: 15px;padding:5px; height:40px; font-size:14px; width:100px; margin-right:15px; background-color:#367FA9;font-family:Arial, Helvetica, sans-serif ; color:#FFFFFF;

}
.btnstatus:hover{

background-color:#999999;font-family:Arial, Helvetica, sans-serif ; color:#FFFFFF; border:0px solid #FFFFFF; 
}


.btn-modal-ok{ box-shadow: 1px 1px 5px #999999; border:0px solid #FFFFFF; 
border-radius: 15px;padding:5px; font-size:20px; width:120px; background-color:<?=$ok_button_color?>;font-family:Arial, Helvetica, sans-serif ; color:#FFFFFF

}
.btn-modal-ok:hover{

background-color:#999999;font-family:Arial, Helvetica, sans-serif ; color:#FFFFFF
}

.btn-modal-no{ box-shadow: 1px 1px 5px #999999; border:0px solid #FFFFFF; 
border-radius: 15px;padding:5px; font-size:20px;  width:120px; background-color:<?=$no_button_color?>;font-family:Arial, Helvetica, sans-serif ; color:#FFFFFF
}

.btn-modal-no:hover{
background-color:#999999;font-family:Arial, Helvetica, sans-serif ; color:#FFFFFF
}
 
</style> 

<style>
  .modal-backdrop {
   display: none;  
}

.modal.fade:not(.in) .modal-dialog {
box-shadow:none;  top:0;
    background-color:#000000
    -webkit-transform: translate3d(-50%, 0, 0);
    transform: translate3d(-50%, 0, 0);  
 
}

.modal {
box-shadow:none;
    background-color:#FFFFFF; z-index:99999;   
 
 
}
.modal {
box-shadow:none;
    background-color:#FFFFFF; z-index:99999;   
	
	
 
}

.modal-dialog { margin-top:30px;
 

}
.modal-content {
 box-shadow:none;  border:none;     

}
body.modal-open { 
  padding-right: 0 !important; 
 
}
body.modal-open {
    overflow: visible;
    position: absolute;
    width: 100%;
    height:100%;
}
 </style>
