<?
if($_GET[type]=="usecar"){  ?>

 

<?

 
 
if($_GET[usecar]=='start'){

$use='เริ่มใช้รถ';
}
if($_GET[usecar]=='finish'){

$use='เลิกใช้รถ';
}



$stoptime=time()+21600;
 
///echo $use;

$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$db->add_db('driver_use_car',array(
 		
		
		 	"type"=>"$_GET[usecar]", 
			 
			"posted"=>"$_SESSION[admin_user]",
			"post_date"=>"".TIMESTAMP."",
			"update_date"=>"".TIMESTAMP."",
			"stop_date"=>"".$stoptime."",
						
			"car_number"=>"$_GET[car]", 
			"drivername"=>"$_GET[drivername]", 			
				
			////
			"check_water"=>"$_GET[check_water]",
			"check_rain"=>"$_GET[check_rain]",
			"check_rubber"=>"$_GET[check_rubber]",
			"check_oil"=>"$_GET[check_oil]",			
	 	
			"check_wash"=>"$_GET[check_wash]",	
			"detail"=>"$_POST[check_detail_car]",	
			
			
					
			
			////
		  	"lat" => "$_GET[lat]",
		  	"lng" => "$_GET[lng]",		
			
			"mile" => "$_GET[check_mile]",		
			"mile_use" => "$_GET[check_mile_use]",		   		   
		   
		 	"start_time"=>"".TIMESTAMP.""
			//"finish_time"=>"$_POST[finish_time]" 			
 	

	
		));
        $db->closedb();
		
 
 
 ///// update user
 
 
		 
		 $db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
         $db->update_db(TB_driver, array(
            "car_number_use" => "$_GET[car]",
			 "status_usecar" => "$_GET[usecar]",			
			
			 "start_date_usercar" => "" . TIMESTAMP . "",
              "update_date_usercar" => "" . TIMESTAMP . ""
			  
			  
        ), " id=$_GET[drivername] ");
        $db->closedb();
		
 
 
		
@copy("../data/fileupload/store/usecar/".$_GET[drivername]."_1.jpg", "../data/fileupload/usecar/".$_GET[drivername]."_".$_GET[usecar]."_".TIMESTAMP."_1.jpg" ); 
 
 @copy("../data/fileupload/store/usecar/".$_GET[drivername]."_2.jpg", "../data/fileupload/usecar/".$_GET[drivername]."_".$_GET[usecar]."_".TIMESTAMP."_2.jpg" ); 
  
  
  
@unlink("../data/fileupload/store/usecar/".$_GET[drivername]."_1.jpg" ); 
  
@unlink("../data/fileupload/store/usecar/".$_GET[drivername]."_2.jpg" ); 
 
		
 
		/// xml
		
  $folder_xml="../data/xml";

$product = ""
. "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n"
. "<online>\n";
$product .= "<type>".$_GET[usecar]."</type>\n";
$product .="<lat>".$_GET[lat]."</lat>\n";
$product .="<lng>".$_GET[lng]."</lng>\n";
$product .="<timestop>".$stoptime."</timestop>\n";
$product .="<timestart>".time()."</timestart>\n";
$product .="<timeupdate>".time()."</timeupdate>\n";
$product .="<car>".$_GET[car]."</car>\n";
$product .= "</online>";



@unlink("$folder_xml/driver/usecar/".$_GET[drivername]."_".$_GET[usecar].".xml");
@$fd = @fopen("$folder_xml/driver/usecar/".$_GET[drivername]."_".$_GET[usecar].".xml", "a+");
@fputs($fd, $product . "");
@fclose($fd);
 
 
		
		
		
		?>
		  
 
 
 <script>
 
 
   var url_car = "go.php?name=checkcar/load&file=start&type=usecar&drivername=<?=$driver_id;?>&usecar=start";
   
  
 $("#load_status_use_car").load(url_car);
 
 
 
 window.location.href = "index.php";
 
 
 
 /*
 
   var url_car_main_start = "go.php?name=checkcar/load&file=main&type=usecar&drivername=<?=$driver_id;?>&usecar=start";   
  
 $("#load_main_use_car").load(url_car_main_start);
 
 
  setTimeout(function(){ 
$( "#load_data_manage_work_show" ).toggle();
 }, 3000);
 
 
 */
 
 
 
 
 
 
 
 
 
 </script>
		<?
}

?> 

<?php 
if($_GET[type]=="uploadfile"){
	
	@mkdir("../data/fileupload/repair/".TIMESTAMP."", 0777);
	$name = 'photo_checkguest_'.$_GET[id];
	echo $name;
	echo $_GET[id];
	@copy ($_FILES[$name]['tmp_name'] , "../data/fileupload/repair/".TIMESTAMP."/".$_GET[id].".jpg" ); 
//	@copy ($_FILES['photo_checkguest_2']['tmp_name'] , "../data/fileupload/repair/".TIMESTAMP."/2.jpg" ); 
//	@copy ($_FILES['pic_file_3']['tmp_name'] , "pic/carwash/".TIMESTAMP."/3.png" ); 
//	@copy ($_FILES['pic_file_4']['tmp_name'] , "pic/carwash/".TIMESTAMP."/4.png" ); 
//	@copy ($_FILES['pic_file_5']['tmp_name'] , "pic/carwash/".TIMESTAMP."/5.png" ); 
}
?>


<?
if($_GET[type]=="repair"){
	
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);


$db->connectdb(DB_NAME_APP, DB_USERNAME, DB_PASSWORD);
 
$next_increment     = 0;
$qShowStatus        = "SHOW TABLE STATUS LIKE 'car_repair_order'";
$qShowStatusResult  = mysql_query($qShowStatus) or die ( "Query failed: " . mysql_error() . "<br/>" . $qShowStatus );
$row = mysql_fetch_assoc($qShowStatusResult);

$last_id = $row['Auto_increment'];
$member_db = $row['Auto_increment'];



if($member_db>=10000) {
$member_in = "R$member_db" ;
}
elseif($member_db >=1000) {
$member_in = "R0$member_db" ;
}
elseif($member_db >=100) {
$member_in = "R00$member_db" ;
}
elseif($member_db >=10) {
$member_in = "R000$member_db" ;
}
else {
$member_in = "R0000$member_db" ;
}

 
 

$detail =  $_POST[detail_all];

$driver_id = $_GET[id];

//$data[type] = $_POST[topic_repair];
$data[driver_id] = $driver_id;

$data[invoice] = $member_in;

$data[car_id] = $_POST[car];
$data[posted] = $driver_id;
$data[detail] = $detail;
$data[post_date] = TIMESTAMP;
$data[update_date] = TIMESTAMP;
$data[status] = 'NEW';
$data[order_date] = date('Y-m-d');

$data[result] = $db->add_db('car_repair_order',$data);
$insert_last_id = mysql_insert_id();	
//$insert_last_id = 19;	

@mkdir("../data/fileupload/repair/".$insert_last_id."", 0777);
echo $_FILES['photo_checkguest_1']['tmp_name']." : ".$_FILES['photo_checkguest_1']['name'];
@copy ($_FILES['photo_checkguest_1']['tmp_name'] , "../data/fileupload/repair/".$insert_last_id."/1.png" ); 
@copy ($_FILES['photo_checkguest_2']['tmp_name'] , "../data/fileupload/repair/".$insert_last_id."/2.png" ); 
@copy ($_FILES['photo_checkguest_3']['tmp_name'] , "../data/fileupload/repair/".$insert_last_id."/3.png" ); 



$data_histroy[type] = '1';
$data_histroy[driver_id] = $driver_id;
$data_histroy[repair_order] = $insert_last_id;
$data_histroy[repair_invoice] = $member_in;
$data_histroy[detail_history] = $detail;
$data_histroy[remark] = '';
$data_histroy[posted] = $driver_id;
$data_histroy[post_date] = time();
$data_histroy[update_date] = time();
$data_histroy[type_activity] = 1; // แจ้งซ่อม
$data_histroy[result] = $db->add_db('car_repair_history',$data_histroy);

foreach( $_POST[brokencar_type] as $key => $val ) {



  $broken_type[type_id] = $val;
  $broken_type[repair_order] = $data_histroy[repair_order];
 $broken_type[repair_invoice] = $member_in;
  $broken_type[posted] = $driver_id;
  $broken_type[post_date] = time();
  $broken_type[update_date] = time();
  $result = $db->add_db('car_repair_type_broken_list',$broken_type);
//  $broken_type[key] = $key;
  echo print_r($result);
  sleep(1);
//   echo "\n";
}
 echo "\n";
//echo json_encode($data_histroy);	
$db->closedb();

 echo print_r($data);
 echo "\n";
 echo print_r($data_histroy);
 echo "\n";
 
// echo $_FILES['photo_checkguest_2']['tmp_name'];

}

if($_GET[type]=="cancel_repair"){
	
	$id = $_GET[id];
	$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
	$data[update_date] = TIMESTAMP;
	$data[status] = 'CANCEL';
	
	$data[result] = $db->update_db('car_repair_order',$data,"id = '".$id."' ");
	
	$data_histroy[detail_history] = $_GET[detail_cancel];
	$data_histroy[type_activity] = 0; // ปฏิเสธ
	$data_histroy[repair_order] = $id;
	$data_histroy[type] = '1';
	$data_histroy[driver_id] = $_GET[driver_id];
	$data_histroy[posted] = $driver_id;
	$data_histroy[post_date] = time();
	$data_histroy[update_date] = time();
		
		
		$data_histroy[result] = $db->add_db('car_repair_history',$data_histroy);
	echo print_r($data);
	echo print_r($data_histroy);
}
?> 

<?
if($_GET[type]=="carcare"){

/*
@mkdir("pic/carwash/".TIMESTAMP."", 0777);

@copy ($_FILES['pic_file_1']['tmp_name'] , "pic/carwash/".TIMESTAMP."/1.png" ); 
@copy ($_FILES['pic_file_2']['tmp_name'] , "pic/carwash/".TIMESTAMP."/2.png" ); 
@copy ($_FILES['pic_file_3']['tmp_name'] , "pic/carwash/".TIMESTAMP."/3.png" ); 
@copy ($_FILES['pic_file_4']['tmp_name'] , "pic/carwash/".TIMESTAMP."/4.png" ); 
@copy ($_FILES['pic_file_5']['tmp_name'] , "pic/carwash/".TIMESTAMP."/5.png" ); 

*/
 
 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$db->add_db('driver_send_carcare',array(
 
			"type"=>"1",
			"detail"=>"$_POST[detail]",
			
			"rubber"=>"$_POST[rubber]",
			"water"=>"$_POST[water]",
			"rain"=>"$_POST[rain]",
			"oil"=>"$_POST[oil]",
 
  
			"driver_id"=>"".$driver_id."",
			
			"car_id"=>"$_POST[car]",
  
			"posted"=>"$_SESSION[admin_user]",

			"post_date"=>"".TIMESTAMP."",

			"update_date"=>"".TIMESTAMP.""

		));
        $db->closedb();
		
		
 
		 

 	
		?>
		  
              <div class="alert alert-success alert-dismissible" style="margin-top:5px; margin-bottom:-10px; padding:5px; " id="save">
                     <i class="icon fa fa-check"></i>  ส่งข้อมูลการแจ้งซ่อมสำเร็จ
              </div>
 
 <script>
 setTimeout(function(){ 
 $('#save').fadeOut(2000);
 }, 1000);
 
 </script>
		<?
}

?> 




<?
if($_GET[type]=="user"){
 
$db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
         $db->update_db(TB_driver, array(
               "password" => "" . $_POST[password] . "",
                  "name_en" => "$_POST[name_en]",
            "name" => "$_POST[name]",
            "nickname" => "$_POST[nickname]",
            "idcard" => "$_POST[idcard]",
            "iddriving" => "$_POST[iddriving]",
 
            "phone" => "$_POST[phone]",
            "contact" => "$_POST[contact]",
            "address" => "$_POST[address]",
 
            "update_date" => "" . TIMESTAMP . ""
        ), " id=$_GET[id] ");
        $db->closedb();
		?>
		  
              <div class="alert alert-danger alert-dismissible" style="margin-top:5px; margin-bottom: 10px; padding:5px;  margin-left:20px; margin-right:22px;" id="save">
                     <i class="icon fa fa-check"></i>  บันทึกข้อมูลส่วนตัวสำเร็จ
              </div>
 
 <script>
 setTimeout(function(){ 
 $('#save').fadeOut(2000);
 }, 1000);
 
 </script>
		<?
}

?> 


<?
if($_GET[type]=="bank"){
 
$db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
         $db->update_db(TB_driver, array(
            "pay_bank_name" => "$_POST[pay_bank_name]",
			 "pay_bank" => "$_POST[pay_bank]",
			 "pay_bank_sub" => "$_POST[pay_bank_sub]",
			          "pay_bank_number" => "$_POST[pay_bank_number]",
               "update_date" => "" . TIMESTAMP . ""
        ), " id=$_GET[id] ");
        $db->closedb();
		?>
		  
   <div class="alert alert-danger alert-dismissible" style="margin-top:5px; margin-bottom:-10px; padding:5px; " id="save">
                     <i class="icon fa fa-check"></i>  บันทึกข้อมูลธนาคารสำเร็จ
              </div>
 
 <script>
 setTimeout(function(){ 
 $('#save').fadeOut(2000);
 }, 1000);
 
 </script>
		<?
}

?> 


<?
if($_GET[type]=="phone_add"){
 
$db->add_db('contact_phone_driver',array(
		"phone"=>"$_POST[phone]",
		"name"=>"$_POST[name]",
		"type"=>"$_POST[type]",
		"driver_id"=>$driver_id,
  "post_date"=>"".TIMESTAMP."",
			"update_date"=>"".TIMESTAMP.""
 
		));

        $db->closedb();
		?>
		  
              <div class="alert alert-danger alert-dismissible" style="margin-top:5px; margin-bottom: 0px; padding:5px; " id="save">
                     <i class="icon fa fa-check"></i>  บันทึกข้อมูลสำเร็จ
              </div>
 
 <script>
 setTimeout(function(){ 
 $('#save').fadeOut(2000);
 	   var url_phone = "go.php?name=load/phone&file=all";
	$('#load_phone_data').show();
	$('#load_phone_data').load('load/page/loading.php');
 $('#load_phone_data').load(url_phone); 
 }, 2000);
 
 </script>
		<?
}

?> 





<?
if($_GET[type]=="phone_edit"){
 
$db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
         $db->update_db('contact_phone_driver', array(
		"phone"=>"$_POST[phone]",
		"name"=>"$_POST[name]",
		"type"=>"$_POST[type]",
 
			"update_date"=>"".TIMESTAMP.""
			
        ), " id=$_POST[id] ");
        $db->closedb();
		?>
		  
  <div class="alert alert-danger alert-dismissible" style="margin-top:5px; margin-bottom:-10px; padding:5px; " id="save">
 <i class="icon fa fa-check"></i>  แก้ไขบันทึกข้อมูลสำเร็จ
              </div>
<script>
 setTimeout(function(){ 
 $('#save').fadeOut(2000);
 	   var url_phone = "go.php?name=load/phone&file=all";
	$('#load_phone_data').show();
	$('#load_phone_data').load('load/page/loading.php');
 $('#load_phone_data').load(url_phone); 
 }, 2000);
 
 </script>
		<?
}

?> 


<?
if($_GET[type]=="phone_delete"){
 
$db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
$db->del('contact_phone_driver'," id='".$_GET[id]."' "); 
 
        $db->closedb();
		?>
		  
              <div class="alert alert-danger alert-dismissible" style="margin-top:5px; margin-bottom:-10px; padding:5px; " id="save">
                     <i class="icon fa fa-check"></i>  ลบข้อมูลสำเร็จ
              </div>
<script>
 setTimeout(function(){ 
 $('#save').fadeOut(2000);
 	   var url_phone = "go.php?name=load/phone&file=all";
	$('#load_phone_data').show();
	$('#load_phone_data').load('load/page/loading.php');
 $('#load_phone_data').load(url_phone); 
 }, 2000);
 
 </script>
		<?
}

?> 
