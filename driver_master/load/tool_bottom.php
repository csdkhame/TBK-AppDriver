 <div  class="bottom-popup-main"   id="show_main_tool_bottom"> 

 
 <? if(1 <>'0'){
	 

	 
	 
 
 //$_GET[name]
 
  ?>
 
 
 
 				
 
 
 

  <script>
$( document ).ready(function() { 
 
 
$('#btn_work_bottom_menu').click(function(){  


 
 	var url_chat_bottom_menu = "load_page.php?name=all&sv=th&chat_from=driver&chat_to=customer&lang=th";
 
  
 $( "#load_data_manage_work" ).toggle();
 
///  $( ".bottom_popup" ).slideToggle();
 
 /// $( "#main-sub-loader" ).show();
 
 /*
    $('#load_data_manage_work').load('load/loading/page_main.php'); 
	$('#load_data_manage_work').load(url_chat_bottom_menu); 
	///   $( "#popup_chat_share_map" ).slideToggle();
  /// $('#load_chat_share_map').load('google/check_system.php');
*/
	
 	});
 
     	});
 
					
					</script> 
                    
                    
<? if(!$_GET[name]){ 

$home_class='-active';
 
}
?>   
                    
<? if($_GET[name]=='all' or$_GET[name]=='today' ){ 

$work_class='-active';
 
}
?>
               
<? if($_GET[name]=='pay'){ 

$pay_class='-active';
 
}
?>          

<? if($_GET[name]=='user'){ 

$user_class='-active';
 
}
?>        
                    
                  
                  <form id="form_popup_send_data" action="" method="post"  enctype="multipart/form-data"   >
                  
                  </form>  
 


<?

if($driver_company==284 or $driver_company==276 or $driver_company==283 or $driver_company==3992 or $driver_company==3993 or $driver_company==3994 or $driver_company==3996){ 






?>


 
   <input type="hidden" name="main_check_use_car_status" id="main_check_use_car_status" value="<?=$driver_car_use_status;?>"  style="width:100px " />
   
 <? } else { ?>
   
 <input type="hidden" name="main_check_use_car_status" id="main_check_use_car_status" value="start"  style="width:100px " />
 
<? } ?>
 
 
   <input type="hidden" name="main_check_use_car_number" id="main_check_use_car_number" value="<?=$driver_car_use_number;?>"  style="width:100px " />
 
 
 
 
 
 
 
  <input type="hidden" name="check_open_alert" id="check_open_alert" value="0"  style="width:100px " />
<table width="100%" border="0" cellspacing="5" cellpadding="5" style="display:none">
  <tbody>
    <tr>
      <td width="25%" height="30"><strong>ปกติ</strong></td>
      <td width="35%"><strong>ปานกลาง</strong></td>
      <td width="25%"><strong>ใหญ่</strong></td>
      <td width="25%">&nbsp;</td>
    </tr>
  </tbody>
</table>

 
 <input type="file" class="form-control" value="ยังไม่มีภาพถ่าย" readonly  style="padding-left:5px; padding-right:5px; width:125px; display:none" name="load_checkin_camers" id="load_checkin_cameras"   multiple>
                 
            
                 
 <table width="100%"  border="0" cellspacing="2" cellpadding="2">
  <tr align="center">
    <td width="25%" class="bottom-area-icon-activess" > 
    
    <div id="check_load_css" style="display:none;z-index:999999999999"></div>
    
 
 
 <a  id="btn_home_bottom_menu" >
	<div style="height:25px;"><i class="fa fa-home bottom-popup-icon<?=$home_class?>"  style="font-size:24px"></i></div>
	
	<font color="#333333" style="font-size:13px">หน้าแรก</font></a>
    
    
 
    

    
    </td>
    <td width="25%">  
	<div> <span data-toggle="tooltip" title="<?=check_work_today($driver_id)?>  งาน"  class="badge bg-red"   style="position:absolute; margin-left:10px; border-radius: 25px; height:20px; width:20px; background-color:#FF0000; padding:0px; padding-top:5px; " id="number_bottom_chat">
 
  
 <?=check_work_today($driver_id)?> 
 
    </span> </div>
 
  <a  id="btn_work_all_bottom_menu">   
	<div style="height:25px;" id="btn_work_bottom_menus"><i style="font-size:26px;" class="fa fa-clock-o bottom-popup-icon<?=$work_class?>" ></i></div>
 
 
	
	<font color="#333333" style="font-size:13px">งานวันนี้</font></a></td>
    <td width="25%"><div style="height:25px;">
    
  <a  id="btn_pay_bottom_menu">   
    
    <i class="icon-new-uniF121-10 bottom-popup-icon<?=$pay_class?>" ></i></div>
 
 
    
	<font color="#333333" style="font-size:13px">การเงิน</a></td>
    
    
    
    <td width="25%"><div style="height:25px;">	  
    
    
    
    
    
    <div> <span data-toggle="tooltip" title="<?=check_work_today($driver_id)?>  งาน"  class="badge bg-red"   style="position:absolute; margin-left:10px; border-radius: 25px; height:20px; width:20px; background-color:#F7941D; padding:0px; padding-top:5px; display:none " id="number_bottom_chat">
 
  

 
    </span></div>
    
 
    
    <a  id="bottom_menu_alert" >
    
    <i class="fa fa-bell faa-ring animateds bottom-popup-icon<?=$user_class?> faasss-ring animateds" style="font-size:24px; "></i></div>
	
   
	<font color="#333333" style="font-size:13px">แจ้งเตือน 
    
    
    
    
    </td>
  </tr>
</table>
 </div>
 
 
 
 
</a>

<script>
		
 $("#btn_pay_bottom_menu").click(function(){
	 

$("#alert_show_pay" ).toggle();
			 
//$("#head_full_popup_main_menu" ).html('ค่าเที่ยว เบี้ยเลี้ยง');			 
 
// $("#popup_work_main_menu" ).toggle();
 
 /// $("#load_work_main_menu").load('go.php?name=pay&file=pay');
 
 
		 });
		
		</script>
		
        
<script>
		
 $("#btn_work_all_bottom_menu").click(function(){
	 
	window.location.href = "index.php?name=all"; 
	 
	 /*
			 
  $("#load_mod").html(load_main_mod_icon);	
 
  $("#load_mod").load('go.php?name=all');
  
  
  */
 
 
		 });
		
		</script>
        
        
<script>
		
 $("#btn_home_bottom_menu").click(function(){
 
 
 window.location.href = "index.php"; 
 
 
 
 /*
 
 
 
 
 
 
     if(document.getElementById('check_button_head_show_slide').value==1){
 
	  
 document.getElementById('check_button_head_show_slide').value=0;
 
 
  $("#button_head_close").hide();
  $("#button_head_show").show();
  
  $("#button_head_show_slide").click();
 
  }
  
 
 
 
 
 
 
 
 
 
  $("#load_mod").html(load_main_mod_icon);	 
  $("#load_mod").load('go.php?name=index');
 
 
 
 */
 
		 });
		
		</script>
        
 
 <style>
.bottom-popup-main
{ 
font-size:22px;   padding:5px;  color:#666666;  width:100%; background-color:#F6F6F6;      
 border-bottom: 0px solid #e5e5e5; margin-bottom: 0px; padding-bottom:0px; padding-top:2px;
 
position: fixed;
  bottom:  0;
 
 box-shadow: 1px 1px 10px #999999;
  left: 0; z-index:99; height:50px;
 
}
.bottom-popup-icon {
font-size:24px; color:#B4B4B4; margin-bottom:1px;

}

.bottom-popup-icon-active {
font-size:24px; color:#3C8DBC;  

}


.bottom-area-icon-active {
font-size:24px; color:#3C8DBC; background-color: #3C8DBC;

}


 </style><? } ?>
 
 <style>
.back_popup_alert
{ 
font-size:22px;   padding:2px;  color:#FFFFF;  width:100%;  background-color: #464646;
 border-bottom: 0px solid #ffffff; margin-bottom: 0px; margin-top:55px;
 
    position: fixed;
  top:  0;  
 
 box-shadow: 1px 1px 10px #999999;
  left: 0; z-index:99;
 
}
 </style>
  <?  include('sound/index.php')?>
  
  
<script>
$( document ).ready(function() {

/// ion.sound.play("welcome");

});
  
 </script>
 <div class="back_popup_alert" style="display:none; margin-bottom: 5px; " id="box_popup_alert_message"><center> 
 
 

 <table width="80%"  border="0" align="center" cellpadding="2" cellspacing="2"    id="box_alert_new_msg"  style="background-color: #464646"  >

  <tr>
    <td width="50" rowspan="2" style="padding:5px; " id="box_alert_new_msg_icon"></td>
    <td style="padding:2px; "> <strong class="font_16" style="color:#FFFFFF ">ข้อความใหม่</strong></td>
    <td width="80"><div id="box_alert_new_msg_time"  style="color: #FFFFCC "></div></td>
  </tr>
  <tr>
    <td colspan="2" style="padding:2px; "><div id="box_alert_new_msg_comment"  style="color:#FFFFFF ">คนขับรถอยู่ที่ไหน</div></td>
   </tr>
</table>
</div>
<? 
$lang='Thai Female';
///$lang='Chinese Female';
 

 /// $newmsg='ผู้ใช้บริการต้องการใช้รถก่อนเวลา 1 ชั่วโมง 30 นาที  ค่ะ';

//$newmsg='用户需要使用汽车1小时30分钟';



?>
 
 
 
 


<a id="auto_play_welcome_new"  onclick="responsiveVoice.speak('<?=$newmsg?>', '<?=$lang?>', {rate: 0.8});" style="display:none" >Test Sound</a> 

<script>
$( document ).ready(function() {

 
$('#check_load_css').load('css/maincss.php?font_size=4');
 

$('#change_font').click(function(){   
  
$('#check_load_css').load('css/maincss.php?font_size=6');
  
});


$('#change_font_4').click(function(){   
  
$('#check_load_css').load('css/maincss.php?font_size=4');
  
});



$('#change_font_2').click(function(){   
  
$('#check_load_css').load('css/maincss.php?font_size=2');
  
});


});

   </script>
   
   
   
 
   
   <div id="check_work_change_popup" style="display:nones;"></div>

<div id="check_work_send_popup" style="display:nones;"></div>

<div id="check_work_cancel_popup" style="display:nones;"></div>

<div id="check_work_new_popup" style="display:nones;"></div>




 
<div id="popup_work_preview_photo"    style="width:100%; height:100%; padding:0px;  left:0px;  top:0px;   z-index:999999999; background-color:#000000; position:fixed;  display:none; margin-top:0px; overflow:hidden">
   <div class="back-full-popup" style="background-color:#000000">
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="40"   ></td>
  <td   ><div style="font-size:22px; color:#FFFFFF; text-align:center " id="head_full_popup_photo"><?="ตำแหน่งของคุณ"?></div></td>
  
      <td width="40"   ><div   style="margin-right:-10px" id="btn_close_chat_preview_photo" class="back-full-popup-photo-icon"><i class="fa fa-times-circle" style="font-size:30px; color:#FFFFFF; margin-right:-10px; "> </i></div></td>
    </tr>
</table>
</div>
 
   
 
 <div   id="load_work_preview_photo"   style="margin-top: 0px; height:100%; overflow:hidden;  "  >  
		 

</div> 
 
 </div>
 
  
 <script>
 
 $('.back-full-popup-photo-icon').click(function(){  
 
	 $( "#popup_work_preview_photo" ).toggle();	
 
});	


 


 </script> 

 <style>
	#popup_work_preview_map_timeline {
	position: fixed;  
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	 overflow:hidden;
	background: url('images/loader.gif') 50% 50% no-repeat rgb(249,249,249); background-color:#FFFFFF
}
</style>
  
  <div id="popup_work_preview_map_timeline"    style="width:100%; height:100%; padding:0px;  left:0px;  top:0px;   z-index:99999; background-color:#FFFFFF; position:fixed;  display:none; margin-top:0px; overflow:hidden">
   <div class="back-full-popup">
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="40"   ><div   id="btn_close_chat_preview_map_timeline" class="back-full-popup-map-icon-timeline"><i class="fa fa-arrow-circle-left" style="font-size:22px; color:#FFFFFF "> </i></div></td>
  <td   ><div style="font-size:18px; color:#FFFFFF " id="head_full_popup_map_timeline"><?="ตำแหน่งของคุณ"?></div></td>
    <td width="50" align="right"   ><div style="font-size:18px; color:#FFFFFF " id="head_full_popup_icon"><i class='fa  fa-map-marker'></i></div></td>
  </tr>
</table>
</div>
 
   <div   style=" background-color:#F6F6F6 ; height:80px;width:100%; top:43; position:fixed; padding:10px;  ; overflow:hidden;z-index:999999; " >
 
<table width="100%"  border="0" cellspacing="2" cellpadding="0" >
  <tr>
 
    <td   style=" color:#000000; padding-top:0px; font-size:18px "><b>ตำแหน่ง</b></td>
 
   
  </tr>
  <tr>
    <td id="load_work_preview_map_timeline_address"  style=" color:#333333; padding-bottom:5px; " >&nbsp;</td>
  </tr>
</table>

</div>
 
 <div   id="load_work_preview_map_timeline"   style="margin-top: 0px; height:100%; overflow:hidden;  "  >  
		 
 <?  ///  include('google/check_system_realtime.php')?>
</div> 
 
 
              
				                </div>
   <script>
    	
  $('.back-full-popup-map-icon-timeline').click(function(){   
 
   $( "#popup_work_preview_map_timeline" ).toggle();
 
  //  $( "#popup_work_preview_map_timeline" ).html('');

     	});
  </script>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <style>
	#popup_work_preview_map_driver_edit {
	position: fixed;  
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	 overflow:hidden;
	background: url('images/loader.gif') 50% 50% no-repeat rgb(249,249,249); background-color:#FFFFFF
}
</style>
  
  <div id="popup_work_preview_map_driver_edit"    style="width:100%; height:100%; padding:0px;  left:0px;  top:0px;   z-index:999999; background-color:#FFFFFF; position:fixed;  display:none; margin-top:0px; overflow:hidden">
  
   <div class="back-full-popup">
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="40"   ><div   id="btn_close_chat_preview_map_driver_edit" class="back-full-popup-map-icon-driver_edit"><i class="fa fa-arrow-circle-left" style="font-size:22px; color:#FFFFFF "> </i></div></td>
  <td   ><div style="font-size:18px; color:#FFFFFF " id="head_full_popup_map_driver_edit"><?="ตำแหน่งของคุณ"?></div></td>
    <td width="80" align="right"   ><div style="font-size:18px; color:#000 " id="head_full_popup_icon"  style="z-index:2">
    
    
    <div class="dropdown" style="z-index:288888888888888; display:nones; " >
 
 
      <button type="button" class="btn"   data-toggle="dropdown"    data-backdrop="static"  style="padding:3px; width:100%;   background-color: #FFFF;font-size:15px; margin-top: -2px; color:#333333 " >  <i class="icon-new-uniF139-6"></i> เลือกจุดเริ่มต้น</button>
  <ul class="dropdown-menu"  style="z-index:2; background:#FFFFFF; width:250px; margin-left:-135px ; border-radius: 5px; ">
    <li><a   id="btn_send_new_points"  style="display:none"><span style="font-size:18px; color:#000000">แจ้งตำแหน่งใหม่</span></a></li>
    <li><a  id="btn_start_new_point" ><i class="icon-new-uniF139-6"></i><span style="font-size:16px; color:#000000">แสดงตำแหน่งในระบบทีบุคกิ้ง</a></li>
    <li><a  id="btn_realtime_new_point" ><i class="icon-new-uniF139-6"></i><span style="font-size:16px; color:#000000">แสดงตำแหน่งปัจจุบันของคุณ</a></li>
  </ul>
</div>

    
    
    
    </div></td>
  </tr>
</table>
</div>

 
   <div   style=" background-color:#FFF ;   height:auto;width:100%; margin-top:50px; padding:10px; overflow:hidden;z-index:1; " >
 
<table width="100%"  border="0" cellspacing="2" cellpadding="0" >
  <tr>
 
    <td   style=" color:#3C8DBC; padding-top:0px; font-size:18px " id="load_work_preview_map_driver_edit_address_name"> </td>
 
   
  </tr>
  <tr>
    <td id="load_work_preview_map_driver_edit_address"  style=" color:#333333; padding-bottom:5px; " >&nbsp;</td>
  </tr>
</table>

</div>
 
 <div   id="load_work_preview_map_driver_edit"   style="margin-top: 0px; height:100%; overflow:hidden;  "  >  
		 
 <?  ///  include('google/check_system_realtime.php')?>
</div> 
 
 
              
				                </div>
   <script>
    	
  $('.back-full-popup-map-icon-driver_edit').click(function(){   
 
   $( "#popup_work_preview_map_driver_edit" ).toggle();
 
  //  $( "#popup_work_preview_map_driver_edit" ).html('');

     	});
  </script>
  
  
  
  
  
  
  
  
  
 
  <style>
	#popup_work_main_menu {
	position: fixed;  
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	 overflow:hidden;
	/*background: url('images/loader.gif') 50% 50% no-repeat rgb(249,249,249); */background-color:#FFFFFF
}
</style>
  
  <div id="popup_work_main_menu"    style="width:100%; height:100%; padding:0px;  left:0px;  top:0px;   z-index:999999; background-color:#FFFFFF; position:fixed;  display:none; margin-top:0px; overflow:hidden">
  
   <div class="back-full-popup">
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="40"   ><div   id="btn_close_popup_main_menu" class="back-full-popup-main-menu"><i class="fa fa-arrow-circle-left" style="font-size:22px; color:#FFFFFF "> </i></div></td>
  <td   ><div style="font-size:18px; color:#FFFFFF " id="head_full_popup_main_menu"><?="ตำแหน่งของคุณ"?></div></td>
    <td width="80" align="right"   >
    </div></td>
  </tr>
</table>
</div>

 
 
 
 <div   id="load_work_main_menu"   style="margin-top: 0px; height:100%; overflow:auto; padding-bottom:50px;  "  >  
		 
 <?  ///  include('google/check_system_realtime.php')?>
</div> 
 
 
              
				                </div>
  <script>
    	
  $('.back-full-popup-main-menu').click(function(){   
 
   $( "#popup_work_main_menu" ).toggle();
 
  //  $( "#popup_work_main_menu" ).html('');

     	});
  </script>
  
  
  
  <style>
	#popup_work_main_control_work {
	position: fixed;  
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	 overflow:hidden;
	/*background: url('images/loader.gif') 50% 50% no-repeat rgb(249,249,249); */background-color:#FFFFFF
}
</style>
  
  <div id="popup_work_main_control_work"    style="width:100%; height:100%; padding:0px;  left:0px;  top:0px;   z-index:99999; background-color:#FFFFFF; position:fixed;  display:none; margin-top:0px; overflow:hidden">
  
   <div class="back-full-popup">
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="40"   ><div   id="btn_close_popup_main_control_work" class="back-full-popup-main-control-work"><i class="fa fa-arrow-circle-left" style="font-size:22px; color:#FFFFFF "> </i></div></td>
  <td   ><div style="font-size:18px; color:#FFFFFF " id="head_full_popup_main_control_work"><?="ตำแหน่งของคุณ"?></div></td>
    <td width="80" align="right"   >
    </div></td>
  </tr>
</table>
</div>

 
 
 
 <div   id="load_work_main_control_work"   style="margin-top: 0px; height:100%; overflow:auto; padding-bottom:50px;  "  >  
		 
 <?  ///  include('google/check_system_realtime.php')?>
</div> 
 
 </div>
  
  
 
  
  
 
  <script>
    	
  $('.back-full-popup-main-control-work').click(function(){   
 
   $( "#popup_work_main_control_work" ).toggle();
 
  //  $( "#popup_work_main_control_work" ).html('');

     	});
  </script>
  
  
  <style>
	#popup_main_control_select {
	position: fixed;  
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	 overflow:hidden;
	/*background: url('images/loader.gif') 50% 50% no-repeat rgb(249,249,249); */background-color:#FFFFFF
}
</style>
  
  <div id="popup_main_control_select"    style="width:100%; height:100%; padding:0px;  left:0px;  top:0px;   z-index:99999999; background-color:#FFFFFF; position:fixed;  display:none; margin-top:0px; overflow:hidden">
  
   <div class="back-full-popup"  style="z-index:999">
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="40"   ><div   id="btn_close_popup_main_control_select" class="back-full-popup-main-control-select"><i class="fa fa-arrow-circle-left" style="font-size:22px; color:#FFFFFF "> </i></div></td>
  <td   ><div style="font-size:18px; color:#FFFFFF " id="head_full_popup_main_control_select"> </div></td>
    <td width="80" align="right"   >      
    
    
 
    
     <div class="dropdown" style="z-index:288888888888888; display:nones; " >
 
 
      <button type="button" class="btn"   data-toggle="dropdown"    data-backdrop="static"  style="padding:3px; width:100%;   background-color: #FFFF;font-size:15px; margin-top: -2px; color:#333333; border-radius: 15px; padding-right:5px;  " >  <i class="icon-new-uniF10A-9"></i> เลือกประเภทรถ</button>
  <ul class="dropdown-menu"  style="z-index:2; background:#FFFFFF; width:150px; margin-left: -35px ; border-radius: 5px; ">
 
    <li><a  id="btn_show_car_select_all" ><i class="fa fa-angle-right"></i><span style="font-size:16px; color:#000000">รถทั้งหมด</a></li>
    <li><a   id="btn_show_car_select_van"  ><i class="fa fa-angle-right"></i></i><span style="font-size:16px; color:#000000">รถตู้</a></li>
        <li><a   id="btn_show_car_select_car" ><i class="fa fa-angle-right"></i></i><span style="font-size:16px; color:#000000">รถเก๋ง</a></li>
    
    
    
  </ul>
</div>

    
    
    
    </div>
    
    
    </td>
  </tr>
</table>
</div>

 
 
 
 <div   id="load_main_control_select"   style="margin-top: 0px; height:100%; overflow:auto; padding-bottom:50px; padding:10px;  "  >  
		 
 <?  ///  include('google/check_system_realtime.php')?>
</div> 
 
 </div>
  
  
 
 
 
 
  
 
  <script>
    	
  $('.back-full-popup-main-control-select').click(function(){   
 
   $( "#popup_main_control_select" ).toggle();
 
  //  $( "#popup_main_control_select" ).html('');

     	});
		
	  </script>	
		
		
	 
 
		
  <script>
 
 
 
 
 /*
  
 
  Notification.requestPermission(function(result) {
	  

	  
    if (result === 'granted') {
 

      navigator.serviceWorker.ready.then(function(registration) {
        registration.showNotification('สวัสดีคุณ<?=$arr[web_driver][nickname]?>', {
          body: 'คุณมีงานใหม่เข้ามา กรุณาตรวจสอบด้วยค่ะ',
          icon: '../data/pic/driver/main/<?=$arr[web_driver][post_date];?>.jpg',
   
		 
		/// url: 'app://tb-driver', 
		 
		///  images: 'view.png', 
		  
 
    ///  click_url: 'http://support.realtime.co/push-notifications/how-can-i-change-the-click-link-for-each-web-push-notification-i-send'       ,   
 
		  
		///  icon: 'images/applogo.png',
		  /// sound: 'sound/new.mp3',
 
          requireInteraction: true,
		   action: 'gramophone-action',
		  
          tag: 'require-interaction<? ///=time()?>'
        });

 
      });
	  
	  
    }
	
	
	
	
	
  });
  
  */
 
  
 
  </script>
  
  
  
  
  
  
  
  
  
  
  
  
  <script>
  
 
 navigator.serviceWorker.register('swnew.js?v=3');
 
 
 
 
  Notification.requestPermission(function(result) {
	  

	  
    if (result === 'granted') {
		
		
		
 
   
   
 $('#check_open_alert').val(1);
 
 
 /*
 
 
 setInterval(function() {
 var url_check_alert_time = "go.php?name=load/update/alert&file=new&id=<?=$driver_id;?>";
   
  $('#check_load_alert_work').load(url_check_alert_time);
 
}, 10000); // 60000 milliseconds = one minute


 
 
 
 */
 
	  
    }
	
 
	
  });
  
 
</script>
 
 
 





<div id="check_load_alert_work" style="display:none"></div> 











		<script>
		
 /*
 
  
	   swal({
		title: "<font style='font-size:28px'><b> คุณแน่ใจหรือไม่",
		text: "ว่าต้องการออกจากระบบ",
		type: "error",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'ใช่',
		cancelButtonText: "ไม่ใช่",
		closeOnConfirm: true,
		closeOnCancel: true,
		
		html: true,
		animation: false
	},
	function(isConfirm){
    if (isConfirm){
	 
	
swal("ออกจากระบบสำเร็จ", "success");

window.location = "signin.php";;
 
    
   
	//  alert('dd');
    } else {
      swal("Cancelled", "", "error");
    }
	});
	   
	    

 
		*/
		
		
		</script>
		
		


<?
$ok_button_color="#0ACB68";
$no_button_color="#F50202";

?>

<style>
.btnstatus{ box-shadow: 1px 1px 5px #999999; border:0px solid #FFFFFF; 
border-radius: 25px;padding:5px; height:40px; font-size:16px; width:100px; margin-right:15px; background-color:#367FA9;font-family:Arial, Helvetica, sans-serif ; color:#FFFFFF;

}
.btnstatus:hover{

background-color:#999999;font-family:Arial, Helvetica, sans-serif ; color:#FFFFFF; border:0px solid #FFFFFF; 
}


.btn-modal-ok{ box-shadow: 1px 1px 5px #999999; border:0px solid #FFFFFF; 
border-radius: 25px;padding:5px; font-size:22px; width:120px; background-color:<?=$ok_button_color?>;font-family:Arial, Helvetica, sans-serif ; color:#FFFFFF

}
 

.btn-modal-no{ box-shadow: 1px 1px 5px #999999; border:0px solid #FFFFFF; 
border-radius: 25px;padding:5px; font-size:22px;  width:120px; background-color:<?=$no_button_color?>;font-family:Arial, Helvetica, sans-serif ; color:#FFFFFF
}


.btn-modal-no-close{ box-shadow: 1px 1px 5px #999999; border:0px solid #FFFFFF; 
border-radius: 25px;padding:5px; font-size:22px;  width:120px; background-color:<?=$no_button_color?>;font-family:Arial, Helvetica, sans-serif ; color:#FFFFFF
}


 
</style> 



 
<script src="js/hide-address-bar.js?v=<?=time()?>"></script>
<div style="display:none"><?  include ("google/gps/check.php");?></div>

