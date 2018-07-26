  <script src="js/hide-address-bar.js?v=<?=time()?>"></script>
 
 <?
 
 
 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD); 
 $res[project] = $db->select_query("SELECT id,report_id,server,invoice,guest_name,guest_phone,outdate,transfer_date FROM ".TB_transfer_report_all."  where id='".$_GET[id]."'");
 $arr[project] = $db->fetch($res[project]);
 
 
 if($arr[web_driver][company]==1133){
	
$daywork=$arr[project][outdate];	
	
} else {
	
$daywork=$arr[project][transfer_date];		
	
}

 

$string_service     = array ("-");
$string_after_service  = array ("_");
$daywork_new       = str_replace($string_service , $string_after_service ,$daywork , $count);   
 
 
 
 
 ?>
 
 <?
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$query = "SELECT SUM(total) FROM ".TB_deposit." where  group_vc='".$arr[project][invoice]."' "; 
 
$result = mysql_query($query) or die(mysql_error());
 
// Print out result 

while($row = mysql_fetch_array($result)){
	
	


$row['SUM(total)'];

 
$deposit= $row['SUM(total)'];



}


 
?>
 
 
  
 <br>
<br>

 
 	   
<style>
 
.outer-loading-mod-checkin {
    position: fixed; margin-left: 0px; margin-top: 0px; display:table; top:0; left:0;  
    width: 100%; /* This could be ANY width */
    height: 100%; /* This could be ANY height */
   z-index:999999999999999999; background-color: rgba(255, 255, 255, 1) !important;
 
}

.inner-loading-checkin {
    display: table-cell;
    vertical-align: middle;
    text-align: center;
	    width: 100%; /* This could be ANY width */
    height: 100%; /* This could be ANY height */
	background:none;    
}

 .navload-checkin {
  display: block;
  background-color: #f7f7f7;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#f7f7f7), to(#e7e7e7));
  background-image: -webkit-linear-gradient(top, #f7f7f7, #e7e7e7); 
  background-image: -moz-linear-gradient(top, #f7f7f7, #e7e7e7); 
  background-image: -ms-linear-gradient(top, #f7f7f7, #e7e7e7); 
  background-image: -o-linear-gradient(top, #f7f7f7, #e7e7e7); 
color: #FF0000;
 
  width:  60px;
  height: 60px;
 
  text-align: center;
 
  border-radius: 50%;
  box-shadow: 0px 3px 8px #aaa, inset 0px 2px 3px #fff;
}


</style>


 <script>
 
 
  ///ion.sound.play("new");
 
 
 
 
 
 
 
 
 var load_main_mod_checkin_wait='<div class="outer-loading-mod-checkin"   ><div class="inner-loading-checkin"><center><span  class="navload-checkins"  id="checkin_action"><i class="fa  fa-circle-o-notch fa-spin 4x" style="font-size:120px;   margin-top:10px;color: #999999" ></i></center></span><div style="font-size:18px; color:#333333; font-weight:normal;  margin-top:10px " ><center><span id="checkin_topic"><b> กำลังบันทึกข้อมูล</span></center></div></div></div>';
 
/// $("#checkin_action" ).html(load_main_mod_checkin_wait);  
 
 
 
 
 
function save_checkin_action() {
 
 
 
 
$("#checkin_action" ).html('<i class="fa fa-check-circle" style="font-size:126px;color:#0FA5C5;   margin-top:10px " ></i>');  
$("#checkin_topic" ).html('<b>บันทึกข้อมูลสำเร็จ');  
 

  setTimeout(function () {
 
 
 

 $( "#load_data_checkin_popup" ).hide(); 
 $( "#load_data_checkin_popup" ).html('');

 
}, 500); //w
 
}
 
</script>

 
  
  
  
  
  
  

<style>
 

.outer-loadwait {
    position: fixed; margin-left: 0px; margin-top: 0px; display:table; top:0; left:0;  
    width: 100%; /* This could be ANY width */
    height: 100%; /* This could be ANY height */
   z-index:9999999999;  
	background: url('images/bg-popup.png');  
}

.inner-loadwait {
    display: table-cell;
    vertical-align: middle;
    text-align: center;
}

.div-loadwait {
    display: inline-block;
    text-align: left; width:130px;
   
 
    border : 0px solid <?=$maincolor?>;  
	z-index:999999999999999; background-color:#F6F6F6;   -moz-border-radius:10px;
  -webkit-border-radius:3px;

 border-radius: 30px; height: 100px; padding:10px; width:150px;  
}

</style>

 
<div id="popup_show_upload_pic" style="display:none;z-index:99999;  ">
<div class="outer-loadwait" >
   <div class="inner-loadwait">
     <div class="div-loadwait">
 

<div   style="border:none; color:#000000; font-size:16px; "><center> <i class="fa  fa-camera faa-flash animated" style="font-size:36px;   margin-top:10px;color: #3C8DBC" ></i></center></font></b>  </div> 

 <div    style="color:#000000; font-size:16px; text-transform:capitalize;z-index:99999; margin-top: 5px; "><center>  <div style="margin-top: 10px; "> 
 อัพโหลดรูปภาพ</b></font> </span></font></b></div></div>
 
 

</div>
     
<br>
 
     </div>
   </div>
</div>
 
 </div>
 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
 
 
 
<? if($_GET[opentype]=='check_to_point' ){ 

$_GET[checkin]='topoint';
 

?>
<form id="form_checkin"    action="load_small.php?name=action&file=send_guest_data&id=<?=$arr[project][id];?>&folder=<?=$arr[project][invoice];?>&photo=topoint" method="post"  enctype="multipart/form-data"   target="popupuploadframe"  >
  <iframe id="popupuploadframe" name="popupuploadframe" src="" style="width:1px;height:1px;border:0"></iframe>

<script>
 $('#head_full_popup_checkin_step').html("ถึงสถานที่รับแขก"); 

</script>



<script>

 
 
 
$(".btn-modal-ok").click(function(){   

$("#send_data_checkin_wait" ).html(load_main_mod_checkin_wait);  


  
  var url_checkin = "go.php?name=action&file=action&id=<?=$GET[id];?>&type=driver_topoint"; 
 
 $.post(url_checkin,$('#form_checkin').serialize(),function(response){
 $('#send_data_checkin').html(response);

 
 /// upload photo
 ////$("#btn_upload_photo_<?=$arr[project][id];?>" ).click(); 
 
 
 
//$("#submit_send_data_<? echo $arr[project][id];?>" ).toggle(); 
//$("#load_send_data_<? echo $arr[project][id];?>" ).toggle(); 

 
 
   ///// close popup step 1   
  /// $( "#load_data_checkin_popup" ).toggle(); 
   /// $( "#load_data_checkin_popup" ).html('');
	
	
	///// show step 2

////   $( "#sub_see_guest<?=$arr[project][id];?>").show(); 	
 
 ///////
 
   });
  });
  
  
 

</script>




<div  id="popup_topoint_<?=$arr[project][id];?>"  > 



  <? //  include ("load/page/back_popup.php");?>
 <div   >
 
 
            <!-- Modal  class="modal fade" content-->
            <div class="modal-content"    > 
			 
                    <h4 class="modal-title" style="font-size:25px; height:15px;   font-family:Arial, Helvetica, sans-serif; text-transform:uppercase;border-bottom: 0px solid #e5e5e5;">
					
					
					<center>
					<b> แน่ใจหรือไม่
					<? //=$arr[project][id];?></b>
	          </center></h4>
 
              <div class="modal-body"  >  
		  
		<center><div style="padding:2px; font-size:20px; margin-top:10px; color:#999999;border-top: 0px solid #e5e5e5;  ">ว่ามาถึงสถานที่รับแขกแล้ว</div>
		  

		  
        <table  style="width:100% " >
          <tr>
            <td align="center" class="gay5">
            
            
            
            <div class="topictransfer"><center>
              ถ่ายภาพสถานที่รับแขก</div>
          
 
          
          <?  include ("mod/load/show/step/photo.php");?>
 
                
                
                <div style="padding-bottom:5px; ">
                  <div style=" display:none ">
                    <input id="btn_upload_photo_<?=$arr[project][id];?>" type="submit"  class="btn btn-primary"   data-backdrop="static" value="อัพโหลด">
                  </div>
              </div></td>
          </tr>
        </table>
        
        
 
        
		
		
              </div> 

 
 <div class="modal-footer" style="margin-top:-10px;">
 <center>
                       
                       
   
                  
                       
 <?
 
 if($deposit>0){ 
 
  include("mod/load/show/step/income_check.php");
 
 }
 
 ?>          
                       
                       
                       
                       
                       
                       
                       
                       
<table width="100%" border="0" cellspacing="2" cellpadding="2" style="margin-top:-10px" id="submit_send_data_<? echo $arr[project][id];?>">
  <tbody>
    <tr>
      <td width="50%" style="padding-right:5px;"><button type="button" class="btn btn-modal-no" data-dismiss="modal" data-backdrop="static" style="width:100%" >ไม่แน่ใจ</button></td>
      <td width="50%" style="padding-left:5px;display:none" id="td_confirm_checkpoint_<? echo $arr[project][id];?>"> <button type="button" class="btn btn-modal-ok"   data-dismiss="modal" data-backdrop="static" id="btn_confirm_topoint_<? echo $arr[project][id];?>"  style="width:100%" >แน่ใจ</button> </td>
    </tr>
  </tbody>
</table>

 
 
 
 
 <table width="100%" border="0" cellspacing="2" cellpadding="2" id="load_send_data_<? echo $arr[project][id];?>" style="display:none">
  <tbody>
    <tr>
      <td align="center" style="font-size:24px;color: #FF0000; "><i class="fa fa-circle-o-notch fa-spin 4x" style="font-size:24px;color: ##FF0000; " ></i> กำลังบันทึกข้อมูล</td>
    </tr>
  </tbody>
</table>

 
 </center>   
 
 
 					 <br />
					   <br />
					   <br />
					   <br />
					 <br />
					   <br />
					   <br />
					   <br />       
                </div>
				
 
            </div>
  </div>
 
</div>	







<div style="display:none">
 <input type="text"   value="<? echo $arr[project][id];?>" id="data_id" name="data_id">
 <input type="text"   value="<? echo $arr[project][report_id];?>" id="data_report_id" name="data_report_id">
               
 <input type="text"   value="<? echo $arr[project][server];?>" id="data_sv" name="data_sv">                  
 <input type="text"   value="driver_topoint" id="col_name" name="col_name">                   
 <input type="text"   value="<? echo $arr[project][invoice];?>" id="data_vc" name="data_vc">                   
 <input type="text"   value="<? echo $_GET[lat];?>" id="data_lat" name="data_lat">
 <input type="text"   value="<? echo $_GET[lng];?>" id="data_lng"  name="data_lng">

</div>
 
</form>
 
<? } ?>
 
 
 
 
 
 

 
 <? if($_GET[opentype]=='check_pickup' ){ 
 
 
 $_GET[checkin]='yes';
 
 
 ?>
 

 
<form id="form_checkin" action="load_small.php?name=action&file=send_guest_data&id=<?=$arr[project][id];?>&folder=<?=$arr[project][invoice];?>&photo=yes&day=<? echo $daywork;?>&daynew=111" method="post"  enctype="multipart/form-data"   target="popupuploadframe">
<iframe id="popupuploadframe" name="popupuploadframe" src="" style="width:1px;height:1px;border:0"></iframe>
 
 <script>
 $('#head_full_popup_checkin_step').html("เช็คชื่อแขก"); 
 

</script>




<script>

 ///////// เพิ่ม ประเภทการเชคชื่อ



$(".btn-modal-ok").click(function(){  

 $("#send_data_checkin_wait" ).html(load_main_mod_checkin_wait);  
 
  var url_checkin = "go.php?name=action&file=action "; 
 
 $.post(url_checkin,$('#form_checkin').serialize(),function(response){
   $('#send_data_checkin').html(response);
   
   
   
      /// upload photo
    //$( "#btn_upload_photo_<?=$arr[project][id];?>" ).click(); 
   
   
 
   
// $("#submit_send_data_<? echo $arr[project][id];?>" ).toggle(); 
//$("#load_send_data_<? echo $arr[project][id];?>" ).toggle(); 
   
 
   
   
   
   
   
   
   ///// close popup step 1   
  // $( "#load_data_checkin_popup" ).toggle(); 
    //$( "#load_data_checkin_popup" ).html('');
	
		///// show step 2

 ///   $( "#sub_complete<?=$arr[project][id];?>" ).show(); 	
 
 ///////
 
 
  });
 
  
    });




</script>
                	

 
 
 
  <div    >
 
 <div   >
 
            <!-- Modal  class="modal fade" content-->
            <div class="modal-content"  > 
                    <h4 class="modal-title" style="font-size:26px; height:15px;   font-family:Arial, Helvetica, sans-serif; text-transform:uppercase"><center><b>เช็คชื่อแขก</b></center></h4>
 
                <div class="modal-body" >  
 

<table  style="width:100% " >
          
 <tr style=" display:none<? if($chk_logo==1){echo "show";} ?>">
  <td colspan="2"><div  align="left">
  <? if($chk_logo==1){ ?>
 <img src="../admin/file/logo/crop/<?=$arr[project][agent];?>.jpg" name="view01" height="80" border="0"       />
 <br />
 <? } ?>
									   </div></td>
      </tr>
									<tr>
									  <td class="gay5">
									  
									  <div style="padding-top:10px; padding-bottom:10px">
	 


 <ul class="nav nav-tabs" style="padding:2px;">
    
    <li class="active" id="btn_chk_name" ><a data-toggle="tab" href="#tab_chk_name">รายชื่อ</a></li>
	 <li id="btn_chk_qr" style="padding:2px; display:none"><a data-toggle="tab" href="#tab_chk_qr">QR CODE</a></li>
		<li id="btn_chk_code"  style="padding:2px; display:none"><a data-toggle="tab" href="#tab_chk_code">ส่งรหัส</a></li>	
   

	
 
  </ul>
 
 
 

 <script>
 
 
$('#btn_chk_name').click(function(){ 

 
$('#pic_guest_check').show(''); 
 
//$('#tab_chk_qr').html('');
 });


 




$('#btn_chk_qr').click(function(){  

$('#pic_guest_check').hide('');

     	});		
 	
 
$('#btn_chk_code').click(function(){  

$('#pic_guest_check').hide('');

     	});
					
					</script> 
					
					</script> 







  <div class="tab-content">
 

    <div id="tab_chk_code" class="tab-pane fade" > 
	
	<?
 $rand = substr(str_shuffle('123456789012345678901234567890'),0,6);
?>


 


<table width="100%" border="0" cellspacing="5" cellpadding="2">
  <tr>
    <td style="font-size:30px; padding-top:10px;">รหัสยืนยัน  : <?=$rand?></td>
  </tr>
  <tr>
    <td><center>กำลังรอการตอบรับจากผู้ใช้บริการ</td>
  </tr>
  <tr>
    <td> <button type="button" class="btn-modal-ok"   style="background-color:<?=$ok_button_color?>; width:100% "    id="btn_guest_send_code_<? echo $arr[project][id];?>"   data-toggle="modal" data-backdrop="false" data-keyboard="false">ส่งรหัสยืนยัน</button></td>
  </tr>
</table>

 
 
    </div>	
	
	
<div id="tab_chk_name" class="tab-pane fade in active">
    
   		<div id="tab_check_guest">	  
									
									  
									  
									  
									  
									  <div style="  background-color:#F6F6F6; padding:10PX;border-radius: 10px; margin-top:5px; "><table width="100%"  border="0" cellspacing="0" cellpadding="0" >
									    <tr style="display:none">
                                          <td  ><div class="topictransfer">เอเย่นต์</div></td>
								        </tr>
									    <tr style="display:none">
                                          <td class="gay5"><? echo $arr[showlogo][company];?></td>
								        </tr>
									    <tr>
                                          <td class="gay5"><div class="topictransfer">ชื่อแขก</div></td>
								        </tr>
									    <tr>
                                          <td class="gay5"><? echo $arr[project][guest_name];?></td>
								        </tr>
									    <tr>
                                          <td class="gay5"><div class="topictransfer">เบอร์โทรศัพท์แขก</div></td>
								        </tr>
									    <tr>
                                          <td class="gay5"><? echo $arr[project][guest_phone];?></td>
								        </tr>
									    <tr>
                                          <td class="gay5"><div class="topictransfer">วอเชอร์</div></td>
								        </tr>
									    <tr>
                                          <td class="gay5"><? echo $arr[project][invoice];?></td>
								        </tr>
                                        <tr>
                                          <td>&nbsp;</td>
                                        </tr>
                                      </table></div>
									  
		      </div>
									  
    </div>
	
	
    <div id="tab_chk_qr" class="tab-pane fade">
	
   <?
 //include("mod/load/show/step/qr_scan.php");
  /// include("mod/load/show/step/index.html");
 ?>
    </div>
	
	
	
  </div>




  </td>
		  </tr>
									 
                          
        </table>

  </div>
                <div class="modal-footer">
				                 
<center>
 <div>
   <div class="tab-content">
     <div id="div" class="tab-pane fade"></div>
   </div>
   <div>
   
   
  
   
   
<div id="pic_guest_check">
   
   
   
   <script type="text/javascript" src="js/dialog/main.js"></script>
 
	  
			  
 

   
   
   <div class="topictransfer"><center>
     ถ่ายรูปแขก </div>




  <?  include ("mod/load/show/step/photo.php");?>

        
 <?  include ("mod/load/show/step/income_check.php");?>
 
 
 
 <table width="100%" border="0" cellspacing="2" cellpadding="2" id="submit_send_data_<? echo $arr[project][id];?>">
  <tr>
    <td width="50%" style="padding-right:5px;"><button type="button" class="btn-modal-no"  data-backdrop="static" id="btn_cancel_guest_yes_<? echo $arr[project][id];?>" data-dismiss="modal" style=" width:100%"  >ไม่ถูกต้อง</button></td>
    <td width="50%"  style="padding-left:5px; display:none" id="td_confirm_checkpoint_<? echo $arr[project][id];?>"><button type="button" class="btn-modal-ok"   style="background-color:<?=$ok_button_color?>; width:100% "    id="btn_guest_check_ok_<? echo $arr[project][id];?>" >ถูกต้อง</button>	</td>
  </tr>
</table>
 
 <table width="100%" border="0" cellspacing="2" cellpadding="2" id="load_send_data_<? echo $arr[project][id];?>" style="display:none">
  <tbody>
    <tr>
      <td align="center" style="font-size:24px;color: #FF0000; "><i class="fa fa-circle-o-notch fa-spin 4x" style="font-size:24px;color: ##FF0000; " ></i> กำลังบันทึกข้อมูล</td>
    </tr>
  </tbody>
</table>
					 
 
					 <br />
					   <br />
					   <br />
					   <br />
					 <br />
					   <br />
					   <br />
					   <br />
						
</div>				
					 
  
 
					
<div style="display:none">
 <input type="text"   value="<? echo $arr[project][id];?>" id="data_id" name="data_id">
<input type="text"   value="<? echo $arr[project][report_id];?>" id="data_report_id" name="data_report_id">
<input type="text"   value="<? echo $arr[project][server];?>" id="data_sv" name="data_sv">                  
<input type="text"   value="driver_pickup" id="col_name" name="col_name">                   
<input type="text"   value="<? echo $arr[project][invoice];?>" id="data_vc" name="data_vc">                   
<input type="text"   value="<? echo $_GET[lat];?>" id="data_lat" name="data_lat">
<input type="text"   value="<? echo $_GET[lng];?>" id="data_lng"  name="data_lng">
<input type="text"   value="1" id="data_val"  name="data_val">


  <input type="text"   value="<? echo $daywork;?>" id="data_day" name="data_day">
  <input type="text"   value="<? echo $daywork_new;?>" id="data_day_new" name="data_day_new">
<div>
 


	 
					
 
					
					
					
        </div>
            </div>
    </div>
 
</div>	



 

 
 </form>


<? } ?>



 
 
 
 
 
 
 
 
 

 
 
 
 <? if($_GET[opentype]=='check_pickup_no_guest' ){ 

$_GET[checkin]='no';

 

?>
<form id="form_checkin"   method="post"    action="load_small.php?name=action&file=send_guest_data&id=<?=$arr[project][id];?>&folder=<?=$arr[project][invoice];?>&photo=no"   enctype="multipart/form-data"   target="popupuploadframe"  >
  <iframe id="popupuploadframe" name="popupuploadframe" src="" style="width:1px;height:1px;border:0"></iframe>

<script>
 $('#head_full_popup_checkin_step').html("ไม่เจอแขก"); 

</script>



<script>

 
$(".btn-modal-ok").click(function(){  

 
 
 if($('#driver_remark_noguest_<?=$arr[project][id];?>').val() == 0){
 alert('กรุณาเลือกสาเหตุที่ไม่เจอแขก');
 
 
 
 
 
 return ;

}
 
 
 $("#send_data_checkin_wait" ).html(load_main_mod_checkin_wait);  
 
 var url_checkin = "go.php?name=action&file=action "; 
  
 
 $.post(url_checkin,$('#form_checkin').serialize(),function(response){
   $('#send_data_checkin').html(response);
 
   /// upload photo
    //$( "#btn_upload_photo_<?=$arr[project][id];?>" ).click(); 
 
 
 
    
 //$("#submit_send_data_<? echo $arr[project][id];?>" ).toggle(); 
///$("#load_send_data_<? echo $arr[project][id];?>" ).toggle(); 
 
 
   ///// close popup step 1   
/// $( "#load_data_checkin_popup" ).toggle(); 
///  $( "#load_data_checkin_popup" ).html('');
 
	///// show step 3

 ////  $( "#sub_complete<?=$arr[project][id];?>" ).show(); 	
 
 ///////
 
   });
  });
 
</script>
 

<div    id="popup_topoint_<?=$arr[project][id];?>"  > 
  <? //  include ("load/page/back_popup.php");?>
 <div   >
 
            <!-- Modal  class="modal fade" content-->
            <div class="modal-content"    > 
			 
                    <h4 class="modal-title" style="font-size:25px; height:15px;   font-family:Arial, Helvetica, sans-serif; text-transform:uppercase;border-bottom: 0px solid #e5e5e5;">
					
					
 <center><b> แน่ใจหรือไม่</b></center></h4>
 
              <div class="modal-body"  >  
		  
		<center><div style="padding:2px; font-size:20px; margin-top:10px; color:#999999;border-top: 0px solid #e5e5e5;  ">ว่าไม่เจอแขก</div>
		  
<table border="0"  style="width:100%; ">
  <tr>
    <td><div class="topictransfer">สาเหตุ</div>
    
    
    <div id="div_driver_remark_noguest_<?=$arr[project][id];?>">
      <select name="driver_remark_noguest" id="driver_remark_noguest_<?=$arr[project][id];?>"  class="form-control"  style="width:100%; font-size:16px; color:#000000" >
        <option value="0">---- กรุณาเลือกสาเหตุที่ไม่เจอแขก ----</option>
        <?
  $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res[remark_noguest] = $db->select_query("SELECT * FROM web_driver_remark WHERE status='1' and type = '2' ");
while($arr[remark_noguest] = $db->fetch($res[remark_noguest])){
?>
        <option value="<?=$arr[remark_noguest][id];?>">
          <?=$arr[remark_noguest][topic_th];?>
        </option>
        <? } ?>
      </select>
      
      </div>
      <div class="topictransfer" style="color:#FF0000; font-size:18px; display:none " id="alert_driver_remark_noguest_<?=$arr[project][id];?>">กรุณาเลือกสาเหตุที่ไม่เจอแขก</div>
      <script>
	  
	  
	  $('#div_driver_remark_noguest_<?=$arr[project][id];?>').addClass("tab_alert");
		
$('#driver_remark_noguest_<?=$arr[project][id];?>').on('change',function(){ 


 
 if($('#driver_remark_noguest_<?=$arr[project][id];?>').val() > 0){
		//alert(00);
		$('#alert_driver_remark_noguest_<?=$arr[project][id];?>').hide();
$('#div_driver_remark_noguest_<?=$arr[project][id];?>').removeClass("tab_alert");

}

 if($('#driver_remark_noguest_<?=$arr[project][id];?>').val() == 0){
		//alert(00);
		$('#alert_driver_remark_noguest_<?=$arr[project][id];?>').show();
$('#div_driver_remark_noguest_<?=$arr[project][id];?>').addClass("tab_alert");

}
		});
		</script></td>
  </tr>
  <tr>
    <td><div class="topictransfer">ระบุสาเหตุอื่น ๆ </div>
      <input class="form-control"  type="text"  name="driver_remark_detail" id="driver_remark_detail_<?=$arr[project][id];?>"/></td>
  </tr>
</table>
		  
        <table  style="width:100% " >
          <tr>
            <td align="center" class="gay5">
            
            
            
            
 
            
            <div class="topictransfer"><center>ถ่ายภาพสถานที่รับแขก</div>
          
       
          <?  include ("mod/load/show/step/photo.php");?>
 
                
                
                <div style="padding-bottom:5px; ">
                  <div style=" display:none ">
                    <input id="btn_upload_photo_<?=$arr[project][id];?>" type="submit"  class="btn btn-primary"   data-backdrop="static" value="อัพโหลด">
                  </div>
              </div></td>
          </tr>
        </table>
		
		
              </div> 

 
                <div class="modal-footer" style="margin-top:-10px;">
				       <center>
                       
                      <table width="100%" border="0" cellspacing="2" cellpadding="2" style="margin-top:-10px" id="submit_send_data_<? echo $arr[project][id];?>">
  <tbody>
    <tr>
      <td width="50%" style="padding-right:5px;"><button type="button" class="btn btn-modal-no" data-dismiss="modal" data-backdrop="static" style="width:100%" >ไม่แน่ใจ</button></td>
      <td width="50%" style="padding-left:5px;  display:none" id="td_confirm_checkpoint_<? echo $arr[project][id];?>"> <button type="button" class="btn btn-modal-ok"   data-dismiss="modal" data-backdrop="static" id="btn_confirm_topoint_<? echo $arr[project][id];?> "  style="width:100%" >แน่ใจ</button> </td>
    </tr>
  </tbody>
</table>


 <table width="100%" border="0" cellspacing="2" cellpadding="2" id="load_send_data_<? echo $arr[project][id];?>" style="display:none">
  <tbody>
    <tr>
      <td align="center" style="font-size:24px;color: #FF0000; "><i class="fa fa-circle-o-notch fa-spin 4x" style="font-size:24px;color: ##FF0000; " ></i> กำลังบันทึกข้อมูล</td>
    </tr>
  </tbody>
</table>
 
                       
					 
	
 </center>   
 
 
 					 <br />
					   <br />
					   <br />
					   <br />
					 <br />
					   <br />
					   <br />
					   <br />       
                </div>
				
 
				
            </div>
  </div>
 
</div>	





<div style="display:none">


   <input type="text"   value="<? echo $arr[project][id];?>" id="data_id" name="data_id">
         
            <input type="text"   value="<? echo $arr[project][report_id];?>" id="data_report_id" name="data_report_id">      
                  <input type="text"   value="<? echo $arr[project][server];?>" id="data_sv" name="data_sv">                  
                   <input type="text"   value="driver_pickup" id="col_name" name="col_name">                   
                   <input type="text"   value="<? echo $arr[project][invoice];?>" id="data_vc" name="data_vc">                   
                   <input type="text"   value="<? echo $_GET[lat];?>" id="data_lat" name="data_lat">
                   <input type="text"   value="<? echo $_GET[lng];?>" id="data_lng"  name="data_lng">
                     <input type="text"   value="2" id="data_val"  name="data_val">
                     
                       <input type="text"   value="<? echo $daywork;?>" id="data_day" name="data_day">
  <input type="text"   value="<? echo $daywork_new;?>" id="data_day_new" name="data_day_new">

</div>
 



</form>


 
 
<? } ?>
 
 
 
 
 
 

<!--  End Guest -->						
 
 


 <? if($_GET[opentype]=='check_complete' ){
	 
$_GET[checkin]='finishpoint';
	  
	  ?>
 
 <form id="form_checkin" action="load_small.php?name=action&file=send_guest_data&id=<?=$arr[project][id];?>&folder=<?=$arr[project][invoice];?>&photo=finishpoint" method="post"  enctype="multipart/form-data"   target="popupuploadframe">
   <iframe id="popupuploadframe" name="popupuploadframe" src="" style="width:1px;height:1px;border:0"></iframe>
 
 <script>
 $('#head_full_popup_checkin_step').html("งานสำเร็จ  | เช็ครถ"); 
 
</script>




<script>

 ///////// เพิ่ม ประเภทการเชคชื่อ



$(".btn-modal-ok").click(function(){  

 $("#send_data_checkin_wait" ).html(load_main_mod_checkin_wait);  
  var url_checkin = "go.php?name=action&file=action&daytype=<?=$_GET[daytype]?>&day=<?=$_GET[day]?>"; 
 
 $.post(url_checkin,$('#form_checkin').serialize(),function(response){
   $('#send_data_checkin').html(response);
   
   
 // $("#btn_upload_photo_<?=$arr[project][id];?>" ).click(); 
	
	
	
	
//$("#submit_send_data_<? echo $arr[project][id];?>" ).toggle(); 
//$("#load_send_data_<? echo $arr[project][id];?>" ).toggle(); 
   
   
   
   ///// close popup step 1   
   //$( "#load_data_checkin_popup" ).toggle(); 
   // $( "#load_data_checkin_popup" ).html('');
	
		///// show step 2

/// $( "#sub_checkcar<?=$arr[project][id];?>" ).show(); 	
 
 ///////
 
 
  });
 
  
    });




</script>

		  		    
<div   >
 
 <div   >

   <!-- Modal  class="modal fade" content-->
            <div class="modal-content"  > 
 			 
			<h4 class="modal-title" style="font-size:25px; height:15px;   font-family:Arial, Helvetica, sans-serif; text-transform:uppercase">
 					<center><b> แน่ใจหรือไม่</b></center></h4>
 
              <div class="modal-body" >  
		  
		<center><div style="padding:2px; font-size:20px; margin-top:10px; color:#999999 ">ว่ามาถึงสถานที่ส่งแขกแล้ว</div>
        
        
        <div class="topictransfer"><center>ถ่ายภาพสถานที่ส่งแขก</div>
		  
	  <?  include ("mod/load/show/step/photo.php");?>
      
      <div class="topictransfer"><center>ถ่ายภาพภายในรถ</div>
            
    <?  include ("mod/load/show/step/photo_complete.php");?>
    
    <?  include ("mod/load/show/step/lost.php");?>
    
    
    
   
    
    
     <?  include ("mod/load/show/step/income_check.php");?>
      
      
         <div style="padding-bottom:5px; ">
   <div style=" display:none ">
     <input name="submit" type="submit"  class="btn btn-primary" id="btn_upload_photo_<?=$arr[project][id];?>" value="อัพโหลด"   data-backdrop="static" />
   </div>
 </div>
      
 
                <div class="modal-footer" style="margin-top: 10px; padding:0px; ">
				       <center>
 <table width="100%" border="0" cellspacing="2" cellpadding="2" id="submit_send_data_<? echo $arr[project][id];?>">
  <tbody>
    <tr>
      <td width="50%" style="padding-right:5px;"><button type="button" class="btn btn-modal-no" data-dismiss="modal" data-backdrop="static" style="width:100%" >ไม่แน่ใจ</button></td>
      <td width="50%" style="padding-left:5px; display:none" id="td_confirm_checkpoint_<? echo $arr[project][id];?>">	 <button type="button" class="btn btn-modal-ok"   data-dismiss="modal" data-backdrop="static" id="btn_confirm_complete_<? echo $arr[project][id];?>"  style="width:100%" >แน่ใจ</button> </td>
    </tr>
  </tbody>
</table>


 <table width="100%" border="0" cellspacing="2" cellpadding="2" id="load_send_data_<? echo $arr[project][id];?>" style="display:none">
  <tbody>
    <tr>
      <td align="center" style="font-size:24px;color: #FF0000; "><i class="fa fa-circle-o-notch fa-spin 4x" style="font-size:24px;color: ##FF0000; " ></i> กำลังบันทึกข้อมูล</td>
    </tr>
  </tbody>
</table>






 </center>       
 
 
					 <br />
					   <br />
					   <br />
					   <br />
    
                </div>
            </div>
    </div>
 
</div>	
 <div style="display:none">
                  <input type="text"   value="<? echo $arr[project][id];?>" id="data_id" name="data_id">
                  <input type="text"   value="<? echo $arr[project][report_id];?>" id="data_report_id" name="data_report_id">
                  <input type="text"   value="<? echo $arr[project][server];?>" id="data_sv" name="data_sv">                  
                   <input type="text"   value="driver_complete" id="col_name" name="col_name">                   
                   <input type="text"   value="<? echo $arr[project][invoice];?>" id="data_vc" name="data_vc">                   
                   <input type="text"   value="<? echo $_GET[lat];?>" id="data_lat" name="data_lat">
                   
                   <input type="text"   value="<? echo $_GET[lng];?>" id="data_lng"  name="data_lng">
      
                    <input type="text"   value="1" id="data_val"  name="data_val">
                    
                    
                    

<div>
 


					
					
 
					
					
					
					
					
        </div>
            </div>
 
</form>



<? } ?>












 <? if($_GET[opentype]=='check_checkcar' ){
	 
	$_GET[checkin]='checkcar'; 
	 
	  ?>
 
  
 <form id="form_checkin" action="load_small.php?name=action&file=send_guest_data&id=<?=$arr[project][id];?>&folder=<?=$arr[project][invoice];?>&photo=checkcar" method="post"  enctype="multipart/form-data"     target="popupuploadframe">
   <iframe id="popupuploadframe" name="popupuploadframe" src="" style="width:1px;height:1px;border:0"></iframe>
 
 <script>
 $('#head_full_popup_checkin_step').html("ตรวจสอบสัมภาระบนรถ"); 
 

</script>




<script>

 ///////// เพิ่ม ประเภทการเชคชื่อ



$(".btn-modal-ok").click(function(){  

 
  var url_checkin = "go.php?name=action&file=action&daytype=<?=$_GET[daytype]?>&day=<?=$_GET[day]?>"; 
 
 $.post(url_checkin,$('#form_checkin').serialize(),function(response){
   $('#send_data_checkin').html(response);
   
   
   /// photo
   
    //$( "#btn_upload_photo_<?=$arr[project][id];?>" ).click(); 
	
	
	
$("#submit_send_data_<? echo $arr[project][id];?>" ).toggle(); 
$("#load_send_data_<? echo $arr[project][id];?>" ).toggle(); 
   
   
   ///// close popup step 1   
  // $( "#load_data_checkin_popup" ).toggle(); 
 //   $( "#load_data_checkin_popup" ).html('');
	
		///// show step 2

 ///  $( "#sub_checkcar<?=$arr[project][id];?>" ).show(); 	
 
 ///////
 
 
  });
 
  
    });




</script>

		  		    
<div >
 
 <div   >

   <!-- Modal  class="modal fade" content-->
            <div class="modal-content"  > 
 			 
			<h4 class="modal-title" style="font-size:25px; height:15px;   font-family:Arial, Helvetica, sans-serif; text-transform:uppercase">
 					<center><b> แน่ใจหรือไม่</b></center></h4>
 
              <div class="modal-body" >  
		  
		<center>
		<div style="padding:2px; font-size:20px; margin-top:10px; color:#999999 ">ว่าตรวจสอบสัมภาระเรียบร้อยแล้ว</div>
		  
		  
        <table  style="width:100% " >
          <tr>
            <td class="gay5"><div class="topictransfer"><center>ถ่ายภาพภายในรถ</div>
            
                         <?  include ("mod/load/show/step/photo.php");?>
 
                
                
                <div style="padding-bottom:5px; ">
                  <div style=" display:none ">
                    <input id="btn_upload_photo_<?=$arr[project][id];?>" type="submit"  class="btn btn-primary"   data-backdrop="static" value="อัพโหลด">
                  </div>
              </div>
              
              
              </td>
          </tr>
        </table>
              </div> 















 
                <div class="modal-footer" style="margin-top:-10px;">
				       <center>
<table width="100%" border="0" cellspacing="2" cellpadding="2"  id="submit_send_data_<? echo $arr[project][id];?>">
  <tbody>
    <tr>
      <td width="50%" style="padding-right:5px;"><button type="button" class="btn btn-modal-no" data-dismiss="modal" data-backdrop="static" style="width:100%" >ไม่แน่ใจ</button></td>
      <td width="50%" style="padding-left:5px; display:none" id="td_confirm_checkpoint_<? echo $arr[project][id];?>">	 <button type="button" class="btn btn-modal-ok"   data-dismiss="modal" data-backdrop="static" id="btn_confirm_complete_<? echo $arr[project][id];?>"  style="width:100%" >แน่ใจ</button> </td>
    </tr>
  </tbody>
</table>
 

 <table width="100%" border="0" cellspacing="2" cellpadding="2" id="load_send_data_<? echo $arr[project][id];?>" style="display:none">
  <tbody>
    <tr>
      <td align="center" style="font-size:24px;color: #FF0000; "><i class="fa fa-circle-o-notch fa-spin 4x" style="font-size:24px;color: ##FF0000; " ></i> กำลังบันทึกข้อมูล</td>
    </tr>
  </tbody>
</table>

 
			 <br />
					   <br />
					   <br />
					   <br />


 </center>          
                </div>
            </div>
    </div>
 
</div>	

<div style="display:none">
  <input type="text"   value="<? echo $arr[project][id];?>" id="data_id" name="data_id">
 <input type="text"   value="<? echo $arr[project][report_id];?>" id="data_report_id" name="data_report_id">
 <input type="text"   value="<? echo $arr[project][server];?>" id="data_sv" name="data_sv">                  
 <input type="text"   value="driver_checkcar" id="col_name" name="col_name">                   
 <input type="text"   value="<? echo $arr[project][invoice];?>" id="data_vc" name="data_vc">                   
 <input type="text"   value="<? echo $_GET[lat];?>" id="data_lat" name="data_lat">
  <input type="text"   value="<? echo $_GET[lng];?>" id="data_lng"  name="data_lng">
 <input type="text"   value="1" id="data_val"  name="data_val">
                    
                    
         			 <br />
					   <br />
					   <br />
					   <br />
           

</div>
 
</form>



<? } ?>







 <? if($_GET[opentype]=='check_check_airport' ){ ?>


<div   id="popup_confirm_guest_<?=$arr[project][id];?>" role="dialog"   aria-labelledby="myModalLabel"    >
 <?  include ("load/page/back_popup.php");?> 
 <div   >

            <!-- Modal  class="modal fade" content-->
            <div class="modal-content"  > 
 
                    <h4 class="modal-title" style="font-size:25px; height:15px;   font-family:Arial, Helvetica, sans-serif; text-transform:uppercase">
					
					
					<center><b> แน่ใจหรือไม่</b></center></h4>
 
                <div class="modal-body" >  
		  
		<center><div style="padding:2px; font-size:20px; margin-top:10px; color:#999999 ">ว่าเช็คชื่อแขกถูกต้องแล้ว
 
		<? if($arr[project][product_area] == 'Out' and $arr[project][to_place]==193){  ?>
		
		
<div style="padding:2px; font-size:20px; margin-top:10px; margin-bottom:10px; color:#000000 ">
<table width="100%"  border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td><img src="images/airport/phuket_new.jpg"   align="bottom"  width="100%"  id="terminal_map_new<?=$arr[project][id];?>"   style="cursor:pointer " /></td>
  </tr>
  <tr>
    <td><img src="images/airport/phuket_old.jpg"   align="bottom"  width="100%"  id="terminal_map_old<?=$arr[project][id];?>"   style="cursor:pointer " /></td>
  </tr>
</table>

<br>
เลือกจุดส่งแขกที่สนามบิน</div>
<select name="terminal<?=$arr[project][id];?>"   id="terminal<?=$arr[project][id];?>"    style="font-size:26px; padding-bottom: 1px; background-color:#FFFDE9; height:40px; width:250px; color:#333333" chosen width="'100%'">
  <option value=""  selected>--กรุณาเลือก--</option>
  <option value="new"  >อาคารใหม่</option>
  <option value="old" >อาคารเก่า</option>
 
  </select>
  <script>
  $( document ).ready(function() {
  $('#btn_foot_confirm_guest_<? echo $arr[project][id];?>').hide();
 
 });
  
  </script>
  
  
  <? }  else {?>
  
    <input  name="terminal<?=$arr[project][id];?>"  type="hidden"   id="terminal<?=$arr[project][id];?>" value="0">
  <? } ?>
		</div>
		  
		  
</div> 

 
                <div class="modal-footer" style="margin-top:-10px;" >
				       <center>
					   <div id="btn_foot_confirm_guest_<? echo $arr[project][id];?>" >
					 <button type="button" class="btn btn-modal-no" data-dismiss="modal" data-backdrop="static"  id="btn_cancel_confirm_guest_<? echo $arr[project][id];?>">ไม่แน่ใจ</button>
					 
 
					 
					 <button type="button" class="btn btn-modal-ok"   data-dismiss="modal" data-backdrop="static" id="btn_confirm_guest_<? echo $arr[project][id];?>"   >แน่ใจ</button>
					
					
					
					 <br />
					   <br />
					   <br />
					   <br />
					 <br />
					   <br />
					   <br />
					   <br />
					   
					   
					   
					   
					   
					   
					   </div>
 </center>          
                </div>
            </div>
  </div>
 
</div>	



 
 <script>
 $('#terminal_map_new<?=$arr[project][id];?>').click(function(){  
  $('#terminal_map_old<?=$arr[project][id];?>').removeClass("tab_alert");
 $('#terminal_map_new<?=$arr[project][id];?>').removeClass("tab_alert");
$('#terminal_map_new<?=$arr[project][id];?>').addClass("tab_alert");
 document.getElementById('terminal<?=$arr[project][id];?>').value = 'new' ;
   $('#btn_foot_confirm_guest_<? echo $arr[project][id];?>').show();
 
     	});
		
 $('#terminal_map_old<?=$arr[project][id];?>').click(function(){  
  $('#terminal_map_new<?=$arr[project][id];?>').removeClass("tab_alert");
  $('#terminal_map_old<?=$arr[project][id];?>').removeClass("tab_alert");
$('#terminal_map_old<?=$arr[project][id];?>').addClass("tab_alert");
document.getElementById('terminal<?=$arr[project][id];?>').value = 'old' ;
 $('#btn_foot_confirm_guest_<? echo $arr[project][id];?>').show();
 
     	});
 
 $('#terminal<?=$arr[project][id];?>').change(function(){
 if( document.getElementById('terminal<?=$arr[project][id];?>').value == 'new' ){

 $('#terminal_map_old<?=$arr[project][id];?>').removeClass("tab_alert");
 $('#terminal_map_new<?=$arr[project][id];?>').addClass("tab_alert");
  $('#btn_foot_confirm_guest_<? echo $arr[project][id];?>').show();
  }
   if( document.getElementById('terminal<?=$arr[project][id];?>').value == 'old' ){
    $('#btn_foot_confirm_guest_<? echo $arr[project][id];?>').show();
 
  $('#terminal_map_new<?=$arr[project][id];?>').removeClass("tab_alert");
$('#terminal_map_old<?=$arr[project][id];?>').addClass("tab_alert");
  }
  
     if( document.getElementById('terminal<?=$arr[project][id];?>').value == '' ){
  $('#terminal_map_new<?=$arr[project][id];?>').removeClass("tab_alert");
  $('#terminal_map_old<?=$arr[project][id];?>').removeClass("tab_alert");
  
   $('#btn_foot_confirm_guest_<? echo $arr[project][id];?>').hide();

  }
 
 
 
    	});
 
$('#btn_cancel_confirm_guest_<? echo $arr[project][id];?>').click(function(){  
 
$('.modal').modal('hide');
     	});
					
			
			
			
			

					</script> 


















 
 <? } ?>
 
  <div id="send_data_checkin" ></div>
  
  
  
  <div id="send_data_checkin_wait"></div>
  
  
  
  
  
  <br>
		 <br />
         
         
         <br>
<br>
<br>

         
         
         
         
         
         
         
         
         
         
         
 <? //  include ("load/loading/page_mod.php");?> 
<script src="js/hide-address-bar.js?v=<?=time()?>"></script>