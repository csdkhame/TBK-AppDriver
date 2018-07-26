   <style>
   .div-all-checkin-step{
	 padding:10px;   border-radius: 15px; border: 2px solid #ddd;background-color:#FFFFFF;     margin-bottom: 5px; box-shadow: 0px  0px 5px #DADADA  ; width:100%; margin-left:-10px; 
	 
 }
 
 
 </style>
 
   <style>
   .div-find-data{
	 padding: 5px;   border-radius:  10px; border: 1px solid #dadada;background-color:#FFFFFF;     margin-bottom: 5px; box-shadow: 0px  0px 5px #DADADA  ; margin-top:10px; margin:5px;  
	 
 }
 
    .div-main-find-data{
 background-color:#FFFFFF; padding: 5px;      margin-bottom: 0px; box-shadow: 0px  0px 0px #DADADA  ; position:fixed; width:100%; z-index:1; margin-top: 13px; margin-left: 0px; top:30; 
	 
 }
 
 
 </style>

 
<script>
 $("#head_full_popup" ).html("ส่งงานให้คนอื่น  <? //=$_GET[vc]?>");
</script> 

 <?
 
  $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
 	$res[project] = $db->select_query("SELECT  id,drivername,cartype,admin_company  FROM   transfer_report_all  WHERE id='".$_GET[id]."' ");
	$arr[project] = $db->fetch($res[project]);
 
 ?>
                  
 <input name="old_drivername" type="hidden" id="old_drivername<? echo $arr[project][id];?>" style="width:120px; FONT-SIZE:13px; " value="<? echo $arr[project][drivername];?>" />

<input name="work_type" type="hidden" id="work_type<? echo $arr[project][id];?>" style="width:120px; FONT-SIZE:13px; " value="0" />
<input name="old_carno" type="hidden" id="old_carno<? echo $arr[project][id];?>" style="width:120px; FONT-SIZE:13px; " value="<? echo $arr[project][carno];?>" />

<input name="change_carno" type="hidden" id="change_carno<? echo $arr[project][id];?>" style="width:120px; FONT-SIZE:13px; " value="<? echo $arr[project][carno];?>" />

<input name="change_drivername" type="hidden" id="change_drivername<? echo $arr[project][id];?>" style="width:120px; FONT-SIZE:13px; " value="<? echo $arr[project][drivername];?>" />
 
 
 
<input type="hidden" id="val_select_com" value="0"/>
<input type="hidden" id="val_select_dv" value="0"/>
<input type="hidden" id="project_id" value="<?=$arr[project][id];?>"/>
<input type="hidden" id="admin_com" value="<?=$_GET[admin_company];?>"/> 
 
	
    
    <div class="div-main-find-data" style="padding:10px;">
    
	<div id="box_search_dv" class="div-all-checkin-step" >
	<div style="font-size:  20px; color:#3C8DBC"><i class="fa fa-search"></i>&nbsp;ค้นหาคนขับรถ</div>
	<div style="margin-top: 5px;padding: 0px;">
   <form id="form_driver_send_data" action="" method="post"  enctype="multipart/form-data"   > 
    <table width="100%" border="0" cellspacing="2" cellpadding="2" >
  <tbody>
    <tr>
    
      
      <td>
      <div style="padding-bottom:5px; font-size:18px"><b>พิมพ์ชื่อ ไอดี หรือเบอร์โทรศัพท์</div>
      
      
 
        <table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tbody>
    <tr>
      <td><input    id="findname"  name="findname"  style="width: 100%;box-shadow: 1px 1px 2px #ddd; border-radius: 15px; font-size: 14px; font-weight: 500;
    padding: 15px;"  /></td>
      <td width="80"><button type="reset" class="btn btn-block btn-primary" id="submit_find_dv"  style="width:80px; position: static; border-radius: 15px;" data-toggle="modal" d ><i class="fa fa-find"></i> ดูทั้งหมด</button></td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
 
  </tbody>
</table>
	   </form>

	</div>
    </div>
    
     </div>
    
    
 
 <div id="load_driver_data" style="margin-top: 175px;" > <?  // include "mod/phone/load/driver.php" ;?></div>
 
 

 
 
 
 
 
 
 
 
   <script>
 	 
	      
	   $("#submit_find_dv").click(function(){ 
//$('#file_upload_line').click();
 
  var url_phone='go.php?name=lab/action&file=select_driver&type=find&id=<?=$_GET[id];?>';
 
/// $('#load_phone_data').load(url_phone);
 
/*
 $.post('go.php?name=phone/load&file=driver&type=find',$('#load_phone_data').serialize(),function(response){
   $('#phone_send_data').html(response);
  });*/
  
 $('#load_driver_data').html(load_main_mod_table_icon);
  $.post(url_phone,$('#form_driver_send_data').serialize(),

function(response){ $('#load_driver_data').html(response); });
  
 
  
 });
 
 
 
    $("#findname").keyup(function() {
//$('#file_upload_line').click();
 
  var url_phone='go.php?name=lab/action&file=select_driver&type=find&id=<?=$_GET[id];?>';
 
/// $('#load_phone_data').load(url_phone);
 
/*
 $.post('go.php?name=phone/load&file=driver&type=find',$('#load_phone_data').serialize(),function(response){
   $('#phone_send_data').html(response);
  });*/
  $.post(url_phone,$('#form_driver_send_data').serialize(),

function(response){ $('#load_driver_data').html(response); });
  
 
 });
 
 
 
	  
 
    $("#findname").keyup(function() {
//$('#file_upload_line').click();
 
  var url_phone='go.php?name=lab/action&file=select_driver&type=find&id=<?=$_GET[id];?>';
  
  
///  alert($("#findname").val());
 
 $('#load_driver_data').html(load_main_mod_table_icon);
 
/*
 $.post('go.php?name=phone/load&file=driver&type=find',$('#load_phone_data').serialize(),function(response){
   $('#phone_send_data').html(response);
  });*/
  
  
  $.post(url_phone,$('#form_driver_send_data').serialize(),

function(response){ $('#load_driver_data').html(response); });
 
  
  
 
  
 });
 
 
 
 
 
 
 
 
  var url_phone='go.php?name=lab/action&file=select_driver&type=find&id=<?=$_GET[id];?>';
 
/// $('#load_phone_data').load(url_phone);
 
/*
 $.post('go.php?name=phone/load&file=driver&type=find',$('#load_phone_data').serialize(),function(response){
   $('#phone_send_data').html(response);
  });*/
  
   $('#load_driver_data').html(load_main_mod_table_icon);
  $.post(url_phone,$('#form_driver_send_data').serialize(),

function(response){ $('#load_driver_data').html(response); });
 
 
 
	   
	   </script>
       
       
 
 
 
 <style>
	#popup_work_main_control_send_work {
	position: fixed;  
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	 overflow:hidden;
	/*background: url('images/loader.gif') 50% 50% no-repeat rgb(249,249,249); */background-color:#FFFFFF
}
</style>
  
  <div id="popup_work_main_control_send_work"    style="width:100%; height:100%;   left:0px;  top:0px;   z-index:99999; background-color:#FFFFFF; position:fixed;  display:none; margin-top:0px; overflow:hidden">
  
   <div class="back-full-popup">
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="40"   ><div   id="btn_close_popup_main_control_send_work" class="back-full-popup-main-control-work"><i class="fa fa-arrow-circle-left" style="font-size:22px; color:#FFFFFF "> </i></div></td>
  <td   ><div style="font-size:18px; color:#FFFFFF " id="head_full_popup_main_control_send_work"><?="เลือกคนขับใหม่"?></div></td>
    <td width="80" align="right"   >
    </div></td>
  </tr>
</table>
</div>

 
 
 
 <div   id="load_send_work_data"   style="margin-top: 0px; height:100%; overflow:auto; padding-bottom:50px;padding:20px; padding-top:40px;  "  >  
		 
 <?  ///  include('google/check_system_realtime.php')?>
</div> 
 
 
              
				                </div>
  <script>
    	
  $('.back-full-popup-main-control-work').click(function(){   
 
   $( "#popup_work_main_control_send_work" ).toggle();
 
  //  $( "#popup_work_main_control_send_work" ).html('');

     	});
		
		
$('#head_full_popup_main_control_send_work').click(function(){   		
		
	   $( "#popup_work_main_control_send_work" ).toggle();
 
  //  $( "#popup_work_main_control_send_work" ).html('');

     	});	
		
		
 
		
		
		
  </script>
  