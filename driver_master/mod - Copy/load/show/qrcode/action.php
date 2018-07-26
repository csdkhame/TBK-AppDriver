 

<?
 
 
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$res[chkproject] = $db->select_query("SELECT id,report_id,invoice,server,car_number,car_company,server FROM ".TB_transfer_report_all."  where id='".$_GET[id]."' limit 1");
$arr[chkproject] = $db->fetch($res[chkproject]);
 
  
 
$_POST[data_id]=$arr[chkproject][id];
$_POST[data_sv]=$arr[chkproject][server];
$_POST[col_name] = "driver_scancode";

$_POST[data_vc]=$arr[chkproject][invoice];
$_POST[data_report_id]=$arr[chkproject][report_id];


if($arr[chkproject][car_number]<>$_GET[car]){
	
	///$arr[chkproject][car_number]
	
}


 
 
 
if($_POST[data_sv] == 'cn'){
	$db->connectdb_cn(DB_NAME,DB_USERNAME,DB_PASSWORD);
}else{
	$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
}

 

 
 
 
$db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
$res[car] = $db->select_query("SELECT id,company FROM " . TB_carall . "  where  id=".$_GET[car]."");
$arr[car] = $db->fetch($res[car]);
 



 
////////////////////////////////////////////  
////// งานรวม
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$db->update_db(TB_transfer_report_all,array(
 
			"car_number_old"=>$arr[chkproject][car_number], 
			"car_company_old"=>$arr[chkproject][car_company], 
			"car_company"=>$arr[car][company], 
 			"car_number"=>$_GET[car], 
			"driver_scancode"=>"1",
			"driver_scancode_date"=>"".time()."",	
 
			
		)," id='".$_POST[data_id]."' ");
		
		
		$db->closedb ();



/*
 


$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$db->update_db(TB_driver,array(
 
 			"company_old"=>$arr[chkproject][car_company], 
			"car_num_old"=>$arr[chkproject][car_number], 
			"company"=>$arr[car][company], 
 			"car_num"=>$_GET[car] 
			
			
		)," id='".$arr[web_driver][id]."' ");
		
		
		$db->closedb ();


 */
 
 

///$arr[web_driver][car_num];
 
 

 if($_POST[data_sv] == 'cn'){
	$db->connectdb_cn(DB_NAME,DB_USERNAME,DB_PASSWORD);
}else{
	$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
}

		  	$db->update_db('web_transfer_report',array(
			
			"car_number_old"=>$arr[chkproject][car_number], 
			"car_company_old"=>$arr[chkproject][car_company], 
			"car_company"=>$arr[car][company], 
 			"car_number"=>$_GET[car], 
			"driver_scancode"=>"1",
			"driver_scancode_date"=>"".time()."",	
			
			
		)," id='".$_POST[data_report_id]."' ");
		
 	
	
	
	
 
  		$db->update_db(TB_order,array(
		
 			"car_number"=>$_GET[car] 
 
	 
			
		)," invoice='".$_POST[data_vc]."' ");
		$db->closedb ();
		
		
		
 
		?>
        
        
  
 
<script>

 ion.sound.play("checkin_car");
 
 var load_step_complete_<?=$_POST[data_id];?> = "load_small.php?name=load/today/sub&file=step&bookid=<?=$_POST[data_id];?>&type=driver_complete"; 
$('#load_step_complete_<?=$_POST[data_id];?>').load(load_step_complete_<?=$_POST[data_id];?>);


$('#timeline_btn_qr<?=$_POST[data_id];?>').hide();

 

   var url_checkcar = "go.php?name=load/show/qrcode&file=car_use&id=<? echo $_POST[data_id];?>"; 
 
  $("#driver_use_car_<? echo $_POST[data_id];?>").load(url_checkcar); 
  
  $("#driver_use_car_<? echo $_POST[data_id];?>").show();
  
 

</script>


<script>
 
 
 ///// next step
 
 
 
 /*
 swal({
  position: 'top-right',
  type: 'success',
  title: 'บันทึกข้อมูล',
  text: "การใช้รถสำเร็จ",
  showConfirmButton: false,
  timer: 500
})
 */
 

 $( "#load_data_checkin_popup" ).hide(); 
 $( "#load_data_checkin_popup" ).html('');

 
 
 
</script>

 
 
 



 