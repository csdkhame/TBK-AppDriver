 
  <?
 
 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
 
 
 $selectdata="id,drivername,driver_topoint,driver_pickup,driver_complete,driver_checkcar,driver_scancode";
 
 
 
 $res[project] = $db->select_query("SELECT $selectdata FROM ".TB_transfer_report_all."  where id='".$_GET[bookid]."'");
 $arr[project] = $db->fetch($res[project]);
 
 
 ?>
 <style>
  
 @-webkit-keyframes DIV-TEXT {
    0%   { color: #FF0000 }
	
    50%  { color: #000000 }
    100% { color: #FF0000 }
 
}

 @-moz-keyframes DIV-TEXT {
 
    0%   { color: #FF0000 }
    50%  { color: #000000 }
    100% { color: #FF0000 }
 
}




.text-alert {
	 
 
   -webkit-transition: all 3s;
	   -moz-animation: DIV-TEXT 1s infinite;
	  
      -webkit-transition: all 3s;
    -webkit-animation: DIV-TEXT 1s infinite;
}

 </style>

 
 
 
 <?
 
 /// $arr[project][id]= $_GET[bookid];

 
if($_GET[type]=='driver_topoint'){
	
$type="สถานที่รับ";
}

if($_GET[type]=='driver_pickup'){

$type="รับแขก";
}

if($_GET[type]=='driver_complete'){
	
	
	

$type="สถานที่ส่ง";
}


if($_GET[type]=='driver_checkcar'){

$type="เช็คสัมภาระ";
}




 ?>
 
 
 
 
 <? if($arr[project][driver_pickup]==0){?>
 
<script>

 //$( "#load_step_check_pickup_<?=$arr[project][id]?>" ).hide();
 
</script>

<? } ?>
 
 
 
 
 
 
 
 
 
 
 
 
<? if($_GET[type]=='driver_topoint'){?>

<? if($arr[project][driver_topoint] > 0){?>
<a ><?=$type?></a>
 
<? } ?>

<? if($arr[project][driver_topoint]== 0){?>
<a id="timeline_btn_topoint_<?=$arr[project][id];?>" ><font color="#FF0000"><span class="text-alert"><i class="icon-new-uniF153-4 text-alert" style="font-size: 20px;  "></i><?=$type?></font></a>

<? } ?>

 
   <script>

$('#timeline_btn_topoint_<?=$arr[project][id];?>').click(function(){  



  var check_gps = document.getElementById('check_data_status_gps_lat').value;
 
  var check_car = document.getElementById('main_check_use_car_status').value;
 

 if(check_gps <1 ){
  
$( "#load_alert_gps_show" ).toggle();
 }
 
 
  if(check_car=='stop' ){
  
$("#load_alert_check_car_show" ).toggle();
 }

 if(check_gps >0 && check_car=='start'  ){
 
 $( "#load_data_checkin_popup" ).toggle();
  
var url_chat_<? echo $arr[project][id];?>= "load_data_checkin.php?name=load/show&file=popup_guest&opentype=check_to_point&id=<? echo $arr[project][id];?>";
 
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
 $('#load_data_checkin_popup').html(load_main_mod); 
 
 
/// $('#load_data_checkin_popup').load(url_chat_<? echo $arr[project][id];?>); 
 
 
$.post(url_chat_<? echo $arr[project][id];?>,$('#form_popup_send_data').serialize(),

function(response){ $('#load_data_checkin_popup').html(response); });


}


 
	});
					
</script>
 

<? } ?>






 
<? if($_GET[type]=='driver_pickup'){?>

<? if($arr[project][driver_pickup] > 0){?>

<script>

 $( "#load_step_check_pickup_<?=$arr[project][id]?>" ).show();
 
</script>



<a ><?=$type?></a>
 
<? } ?>

<? if($arr[project][driver_pickup]== 0 and $arr[project][driver_topoint]==1){?>
<a id="timeline_btn_pickup_<?=$_GET[id];?>"><font color="#FF0000"><span class="text-alert"><i class="icon-new-uniF153-4 text-alert" style="font-size: 20px;  "></i><?=$type?></font></a>
<script>

 $( "#load_step_check_pickup_<?=$arr[project][id]?>" ).show();
 
</script>

<? } ?>

<? if($$arr[project][driver_pickup] == 0 and $arr[project][driver_topoint]==0){?>
<a ><font color="#666666"><?=$type?></font></a>




<? } ?>


 


<? if($arr[project][driver_pickup]>0){?>
 
<script>

 $( "#load_step_check_pickup_<?=$arr[project][id]?>" ).show();
 
</script>

<? } ?>








 
   <script>

$('#timeline_btn_pickup_<?=$arr[project][id];?>').click(function(){  

var check_gps = document.getElementById('check_data_status_gps_lat').value;
 
  var check_car = document.getElementById('main_check_use_car_status').value;
 

 if(check_gps <1 ){
  
$( "#load_alert_gps_show" ).toggle();
 }
 
 
  if(check_car=='stop' ){
  
$("#load_alert_check_car_show" ).toggle();
 }

 if(check_gps >0 && check_car=='start'  ){


 
 $( "#load_data_checkin_popup" ).toggle();
  
var url_chat_<? echo $arr[project][id];?>= "load_data_checkin.php?name=load/show&file=popup_guest&opentype=check_to_point&id=<? echo $arr[project][id];?>";
 
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
 $('#load_data_checkin_popup').html(load_main_mod); 
 //$('#load_data_checkin_popup').load(url_chat_<? echo $arr[project][id];?>); 
 
 $.post(url_chat_<? echo $arr[project][id];?>,$('#form_popup_send_data').serialize(),
function(response){ $('#load_data_checkin_popup').html(response); });


}
 
 
	});
					
</script>
 

<? } ?>

 


 
<? if($_GET[type]=='driver_complete'){?>
 
 
 



<?

$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res[web_driver] = $db->select_query("SELECT id,company FROM web_driver WHERE  id='".$arr[project][drivername]."'    "); 
$arr[web_driver] = $db->fetch($res[web_driver]);
 
$driver_company=  $arr[web_driver][company];  


/// $driver_company=1133;

 ?>
 
 
 
 
 
 <?

$arr[project][driver_scancode]=1;

 if(driver_company==284 or $driver_company==276 or $driver_company==283 or $driver_company==3992 or $driver_company==3993 or $driver_company==3994 or $driver_company==3996){ ?> 
 
 
<? if($arr[project][driver_complete] == 0 and $arr[project][driver_pickup]>0 and $arr[project][driver_scancode]==0){?>
<a id="timeline_btn_qr<?=$arr[project][id];?>"><font color="#FF0000"><span class="text-alert"><i class="icon-new-uniF153-4 text-alert" style="font-size: 20px;  "></i>ยืนยันการใช้รถ</font></a>

<? } ?>



<? if($arr[project][driver_complete] == 0 and $arr[project][driver_pickup]>0 and $arr[project][driver_scancode]==1){?>
<a id="timeline_btn_complete_<?=$arr[project][id];?>"><font color="#FF0000"><span class="text-alert"><i class="icon-new-uniF153-4 text-alert" style="font-size: 20px;  "></i><?=$type?></font></a>

<? } ?>



<? if($arr[project][driver_complete] == 0 and $arr[project][driver_pickup]==0){?>
<a ><font color="#666666"><?=$type?></a>

<? } ?>




<? if($arr[project][driver_complete] == 1){?>
<a ><?=$type?></a>

<? } ?>

 
 
 <?
 
 
  } 
  ?>
 
 
 
 
 
 
 
 
 
 
 <?


 if($driver_company<>284 and $driver_company<>276 and $driver_company<>283 and $driver_company<>3992 and $driver_company<>3993 and $driver_company<>3994 and $driver_company<>3996){ ?> 
 
 

<? if($arr[project][driver_complete] == 0 and $arr[project][driver_pickup]>0){?>
<a id="timeline_btn_complete_<?=$arr[project][id];?>"><font color="#FF0000"><span class="text-alert"><i class="icon-new-uniF153-4 text-alert" style="font-size: 20px;  "></i><?=$type?></font></a>

<? } ?>



<? if($arr[project][driver_complete] == 0 and $arr[project][driver_pickup]==0){?>
<a ><font color="#666666"><?=$type?></a>

<? } ?>




<? if($arr[project][driver_complete] == 1){?>
<a ><?=$type?></a>

<? } ?>

 
 
 <?
 
 
  } 
  ?>
 
 
 
  





  
    <script>
 


 
$('#timeline_btn_qr<?=$arr[project][id];?>').click(function(){  

 
 $( "#load_data_checkin_popup" ).toggle();
  
var url_chat_<? echo $arr[project][id];?>= "load_data_checkin.php?name=load/show&file=popup_qr&opentype=check_to_point&id=<? echo $arr[project][id];?>";
 
 
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
 
 
 
 //alert(url_chat_<? echo $arr[project][id];?>);
 
 
 $('#load_data_checkin_popup').html(load_main_mod); 
 
 /// $('#load_data_checkin_popup').load('load/loading/page_main.php'); 
 // $('#load_data_checkin_popup').load(url_chat_<? echo $arr[project][id];?>); 
  
  
  
$.post(url_chat_<? echo $arr[project][id];?>,$('#form_popup_send_data').serialize(),
function(response){ $('#load_data_checkin_popup').html(response); });
  
  /*
 setTimeout(function () { 
  

	
	 $('#picfile').trigger('click');
	
	alert(0);
 }, 5000); //w
 
 */

 
 
     	});
		
		
			</script>
      



 


 
   <script>

$('#timeline_btn_complete_<?=$arr[project][id];?>').click(function(){  


var check_gps = document.getElementById('check_data_status_gps_lat').value;
 
  var check_car = document.getElementById('main_check_use_car_status').value;
 

 if(check_gps <1 ){
  
$( "#load_alert_gps_show" ).toggle();
 }
 
 
  if(check_car=='stop' ){
  
$("#load_alert_check_car_show" ).toggle();
 }

 if(check_gps >0 && check_car=='start'  ){
	 
	 
 
 $( "#load_data_checkin_popup" ).toggle();
  
var url_chat_<? echo $arr[project][id];?> = "load_data_checkin.php?name=load/show&file=popup_guest&daytype=<?=$_GET[daytype]?>&opentype=check_complete&id=<? echo $arr[project][id];?>&daytype=<?=$_GET[daytype]?>&day=<?=$_GET[day]?>";
 
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
 $('#load_data_checkin_popup').html(load_main_mod); 
 //$('#load_data_checkin_popup').load(url_chat_<? echo $arr[project][id];?>); 
 
$.post(url_chat_<? echo $arr[project][id];?>,$('#form_popup_send_data').serialize(),
function(response){ $('#load_data_checkin_popup').html(response); });
 
}
 
	});
					
</script>
 

<? } ?>

 

<? if($_GET[type]=='driver_checkcar'){?>

<? if($arr[project][driver_checkcar] > 0){?>
<a ><?=$type?></a>
 
<? } ?>

<? if($arr[project][driver_checkcar] == 0 and $arr[project][driver_complete]>0){?>
<a id="timeline_btn_checkcar_<?=$arr[project][id];?>"><font color="#FF0000"><span class="text-alert"><?=$type?></font></a>

<? } ?>


<? if($arr[project][driver_checkcar] == 0 and $arr[project][driver_complete]==0){?>
<a ><font color="#666666"><?=$type?></a>

<? } ?>




 
   <script>

$('#timeline_btn_checkcar_<?=$arr[project][id];?>').click(function(){  
 
 $( "#load_data_checkin_popup" ).toggle();
  
var url_chat_<? echo $arr[project][id];?>= "load_data_checkin.php?name=load/show&file=popup_guest&opentype=check_checkcar&id=<? echo $arr[project][id];?>&daytype=<?=$_GET[daytype]?>&day=<?=$_GET[day]?>";
 
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
 $('#load_data_checkin_popup').html(load_main_mod); 
 
 //$('#load_data_checkin_popup').load(url_chat_<? echo $arr[project][id];?>); 
 
 
$.post(url_chat_<? echo $arr[project][id];?>,$('#form_popup_send_data').serialize(),
function(response){ $('#load_data_checkin_popup').html(response); });
 
	});
					
</script>
 

<? } ?>