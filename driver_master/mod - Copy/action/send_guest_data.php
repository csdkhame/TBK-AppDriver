 
<script>
///  alert('<?=$_GET[photo]?>');
 
 </script>
 
 
<?
 






if($_GET[photo]=='topoint'){

 

@mkdir("../car/pic/guest/".$_GET[photo]."/".$_GET[folder]."", 0777);      
@chmod("../car/pic/guest/".$_GET[photo]."/".$_GET[folder]."", 0777);      

 @copy ($_FILES['photo_topoint_'.$_GET[id].'_1']['tmp_name'] , "../car/pic/guest/".$_GET[photo]."/".$_GET[folder]."/1.png" ); 
@copy ($_FILES['photo_topoint_'.$_GET[id].'_2']['tmp_name'] , "../car/pic/guest/".$_GET[photo]."/".$_GET[folder]."/2.png" ); 
@copy ($_FILES['photo_topoint_'.$_GET[id].'_3']['tmp_name'] , "../car/pic/guest/".$_GET[photo]."/".$_GET[folder]."/3.png" ); 

}



if($_GET[photo]=='finishpoint'){
 
 @mkdir("../car/pic/guest/".$_GET[photo]."/".$_GET[folder]."", 0777);      
@chmod("../car/pic/guest/".$_GET[photo]."/".$_GET[folder]."", 0777);      
  @copy ($_FILES['photo_finishpoint_'.$_GET[id].'_1']['tmp_name'] , "../car/pic/guest/".$_GET[photo]."/".$_GET[folder]."/1.png" ); 
@copy ($_FILES['photo_finishpoint_'.$_GET[id].'_2']['tmp_name'] , "../car/pic/guest/".$_GET[photo]."/".$_GET[folder]."/2.png" ); 
@copy ($_FILES['photo_finishpoint_'.$_GET[id].'_3']['tmp_name'] , "../car/pic/guest/".$_GET[photo]."/".$_GET[folder]."/3.png" ); 

}


if($_GET[photo]=='checkcar'){
 
 @mkdir("../car/pic/guest/".$_GET[photo]."/".$_GET[folder]."", 0777);      
@chmod("../car/pic/guest/".$_GET[photo]."/".$_GET[folder]."", 0777);      
 @copy ($_FILES['photo_checkcar_'.$_GET[id].'_1']['tmp_name'] , "../car/pic/guest/".$_GET[photo]."/".$_GET[folder]."/1.png" ); 
@copy ($_FILES['photo_checkcar_'.$_GET[id].'_2']['tmp_name'] , "../car/pic/guest/".$_GET[photo]."/".$_GET[folder]."/2.png" ); 
@copy ($_FILES['photo_checkcar_'.$_GET[id].'_3']['tmp_name'] , "../car/pic/guest/".$_GET[photo]."/".$_GET[folder]."/3.png" ); 

}



if($_GET[photo]=='no'){

$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$db->add_db('driver_send_guest_remark',array(

			"transfer_id"=>"$_GET[id]",
			"report_id"=>"$_GET[report_id]",
			"vc_id"=>"$_GET[vc_id]",
			"order_id"=>"$_GET[order_id]",
			"drivername"=>"$_GET[drivername]",
			
			 "type"=>"$_POST[driver_remark_noguest]",
			"remark"=>"$_POST[driver_remark_detail]",
			"invoice"=>"$_GET[folder]",
 
			  
			"posted"=>"$_SESSION[admin_user]",

			"post_date"=>"".TIMESTAMP."",

			"update_date"=>"".TIMESTAMP.""

 
		));
 



 @mkdir("../car/pic/guest/".$_GET[photo]."/".$_GET[folder]."", 0777);      
@chmod("../car/pic/guest/".$_GET[photo]."/".$_GET[folder]."", 0777);      

@copy ($_FILES['photo_no_'.$_GET[id].'_1']['tmp_name'] , "../car/pic/guest/".$_GET[photo]."/".$_GET[folder]."/1.png" ); 
@copy ($_FILES['photo_no_'.$_GET[id].'_2']['tmp_name'] , "../car/pic/guest/".$_GET[photo]."/".$_GET[folder]."/2.png" ); 
@copy ($_FILES['photo_no_'.$_GET[id].'_3']['tmp_name'] , "../car/pic/guest/".$_GET[photo]."/".$_GET[folder]."/3.png" ); 
 
 

}
 
 if($_GET[photo]=='yes'){

 

 @mkdir("../car/pic/guest/".$_GET[photo]."/".$_GET[folder]."", 0777);      
@chmod("../car/pic/guest/".$_GET[photo]."/".$_GET[folder]."", 0777);      

 @copy ($_FILES['photo_yes_'.$_GET[id].'_1']['tmp_name'] , "../car/pic/guest/".$_GET[photo]."/".$_GET[folder]."/1.png" ); 
@copy ($_FILES['photo_yes_'.$_GET[id].'_2']['tmp_name'] , "../car/pic/guest/".$_GET[photo]."/".$_GET[folder]."/2.png" ); 
@copy ($_FILES['photo_yes_'.$_GET[id].'_3']['tmp_name'] , "../car/pic/guest/".$_GET[photo]."/".$_GET[folder]."/3.png" ); 

}

?>
 





