<script src="js/hide-address-bar.js?v=<?=time()?>"></script>
<?
   $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD); 
   $res[project] = $db->select_query("SELECT id,report_id,server,invoice,guest_name,guest_phone,outdate,transfer_date,product_area,to_place,name_to_place FROM ".TB_transfer_report_all."  where id='".$_GET[id]."'");
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
            <div   style="border:none; color:#000000; font-size:16px; ">
               <center> <i class="fa  fa-camera faa-flash animated" style="font-size:36px;   margin-top:10px;color: #3C8DBC" ></i></center>
               </font></b>  
            </div>
            <div    style="color:#000000; font-size:16px; text-transform:capitalize;z-index:99999; margin-top: 5px; ">
               <center>
               <div style="margin-top: 10px; "> 
                  อัพโหลดรูปภาพ</b></font> </span></font></b>
               </div>
            </div>
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
               </center>
            </h4>
            <div class="modal-body"  >
               <center>
               <div style="padding:2px; font-size:20px; margin-top:10px; color:#999999;border-top: 0px solid #e5e5e5;  ">ว่ามาถึงสถานที่รับแขกแล้ว</div>
               <table  style="width:100% " >
                  <tr>
                     <td align="center" class="gay5">
                        <div class="topictransfer">
                           <center>
                           ถ่ายภาพสถานที่รับแขก
                        </div>
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
   <form id="form_img_belt" name="form_img_belt" enctype="multipart/form-data">
   	<input type="file" name="belt_img" id="belt_img" style="display: none;"  onchange="readURL(this,'<? echo $arr[project][id];?>');">
   </form>
<form id="form_checkin" action="load_small.php?name=action&file=send_guest_data&id=<?=$arr[project][id];?>&folder=<?=$arr[project][invoice];?>&photo=yes&day=<? echo $daywork;?>&daynew=111" method="post"  enctype="multipart/form-data"   target="popupuploadframe">
   <iframe id="popupuploadframe" name="popupuploadframe" src="" style="width:1px;height:1px;border:0"></iframe>
   <script>
      $('#head_full_popup_checkin_step').html("เช็คชื่อแขก"); 
   </script>
   <script>
      ///////// เพิ่ม ประเภทการเชคชื่อ
      $(".btn-modal-ok").click(function(){  
      if(document.getElementById('terminal').value==''){
      alert('กรุณาเลือกจุดส่งแขกที่สนามบิน');
      }
       else {
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
       }
         });
   </script>
   <div    >
   <div   >
   <!-- Modal  class="modal fade" content-->
   <div class="modal-content"  >
   <h4 class="modal-title" style="font-size:26px; height:15px;   font-family:Arial, Helvetica, sans-serif; text-transform:uppercase">
      <center><b>เช็คชื่อแขก</b></center>
   </h4>
   <div class="modal-body" >
   <table  style="width:100% " >
      <tr style=" display:none<? if($chk_logo==1){echo "show";} ?>">
         <td colspan="2">
            <div  align="left">
               <? if($chk_logo==1){ ?>
               <img src="../admin/file/logo/crop/<?=$arr[project][agent];?>.jpg" name="view01" height="80" border="0"       />
               <br />
               <? } ?>
            </div>
         </td>
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
                           <td>
                              <center>
                              กำลังรอการตอบรับจากผู้ใช้บริการ
                           </td>
                        </tr>
                        <tr>
                           <td> <button type="button" class="btn-modal-ok"   style="background-color:<?=$ok_button_color?>; width:100% "    id="btn_guest_send_code_<? echo $arr[project][id];?>"   data-toggle="modal" data-backdrop="false" data-keyboard="false">ส่งรหัสยืนยัน</button></td>
                        </tr>
                     </table>
                  </div>
                  <div id="tab_chk_name" class="tab-pane fade in active">
                     <div id="tab_check_guest">
                        <div style="  background-color:#F6F6F6; padding:10PX;border-radius: 10px; margin-top:5px; ">
                           <table width="100%"  border="0" cellspacing="0" cellpadding="0" >
                              <tr style="display:none">
                                 <td  >
                                    <div class="topictransfer">เอเย่นต์</div>
                                 </td>
                              </tr>
                              <tr style="display:none">
                                 <td class="gay5"><? echo $arr[showlogo][company];?></td>
                              </tr>
                              <tr>
                                 <td class="gay5">
                                    <div class="topictransfer" style="font-size:18px;">ชื่อแขก</div>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="gay5" style="font-size:18px;"><? echo $arr[project][guest_name];?></td>
                              </tr>
                              <tr>
                                 <td class="gay5">
                                    <div class="topictransfer" style="font-size:18px;">เบอร์โทรศัพท์แขก</div>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="gay5" style="font-size:18px;"><? echo $arr[project][guest_phone];?></td>
                              </tr>
                              <tr>
                                 <td class="gay5">
                                    <div class="topictransfer" style="font-size:18px;">วอเชอร์</div>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="gay5" style="font-size:18px;"><? echo $arr[project][invoice];?></td>
                              </tr>           
                                <tr>
                                 <td class="gay5">
                                    <div class="topictransfer" style="font-size:18px;">สถานที่ส่ง</div>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="gay5" style="font-size:18px;"><? echo $arr[project][name_to_place];?></td>
                              </tr>                   
                           </table>
                        </div>
                     </div>
                  </div>
                  <div id="tab_chk_qr" class="tab-pane fade">
                     <?
                        //include("mod/load/show/step/qr_scan.php");
                         /// include("mod/load/show/step/index.html");
                        ?>
                  </div>
               </div>
			</div>
         </td>
      </tr>
   </table>
   </div>
    
   <div style="display:nones;padding: 0px 20px;">
   <center>
   <div>
      <div class="tab-content">
         <div id="div" class="tab-pane fade"></div>
      </div>
      
      <div>
         <div id="pic_guest_check">
            <script type="text/javascript" src="js/dialog/main.js"></script>
            <div class="topictransfer">
               <center>
               ถ่ายรูปแขก 
            </div>
            <?  include ("mod/load/show/step/photo.php");?>
            <?  include ("mod/load/show/step/income_check.php");?>
            <?  include ("mod/load/show/step/checkairport.php");?>
            
            <table width="100%" border="0" cellspacing="2" cellpadding="2" id="load_send_data_<? echo $arr[project][id];?>" style="display:none">
               <tbody>
                  <tr>
                     <td align="center" style="font-size:24px;color: #FF0000; "><i class="fa fa-circle-o-notch fa-spin 4x" style="font-size:24px;color: ##FF0000; " ></i> กำลังบันทึกข้อมูล</td>
                  </tr>
               </tbody>
            </table>
           
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
   </center>
   </div>
   	
   	<div style="padding: 10px 20px;">
   		<style>
      			.border-red{
					border: 1px solid #F44336;
					padding: 4px;
				}
      		</style>
      		
      		<div style="display: none;">
      		<a style="font-size: 30px; margin-left: 0px;" onclick="responsiveVoice.speak('请系好安全带 ', 'Chinese Female', {rate: 1});" ><i class="fa fa-volume-up" aria-hidden="true"></i>&nbsp;<span style="color: #000;font-size: 20px;">ภาษาจีน : 请系好安全带</span></a><br/>
      		<a style="font-size: 30px; margin-left: 0px;" onclick="responsiveVoice.speak('Please wear a seat belt. ', 'UK English Female', {rate: 1});" ><i class="fa fa-volume-up" aria-hidden="true"></i>&nbsp;<span style="color: #000;font-size: 20px;">ภาษาอังกฤษ : <span style="font-size: 16px;">Please wear a seat belt.</span></span></a><br/>
      		</div>
      		<div id="box_belt" class="border-red" onclick="checkBelt();" style="display: none;">
      		
      		
      		<!--<input onclick="checkBelt();" type="checkbox" id="check_belt" name="check_belt" value="1" data-ck="0" />-->
      		<div id="ic_check" class="icheckbox_square-blue " aria-checked="true" aria-disabled="false" style="position: relative;"  onclick="checkBelt();">
      		<input type="hidden" id="check_belt" name="check_belt" value="0" style="position: absolute; visibility: hidden;">
      		<ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
      		
      		<label for="check_belt" class="topictransfer" style="    font-size: 22px;">ผู้โดยสารคาดเข็มขัดนิรภัยแล้ว</label>
      		<div style="color:#FF0000"><center>กรุณาเช็คผู้โดยสารคาดเข็มขัดนิรภัย</center></div></div>
   	</div>
   			
    <div style="margin-bottom: 20px;padding: 0px 20px;display: none;" id="box_photo_belt">
            	<div class="topictransfer">
	               <center>
	               ถ่ายรูปแขกคาดเข็มขัดนิรภัย 
	            	</center>
	            </div>
	            
<div class="div-all-photo">
   <table width="100%" border="0" cellspacing="2" cellpadding="2">
      <tbody>
         <tr>
            <td width="10" class="font_20">1.</td>
            <td width="100">
               <label class="input-group-btn"> 
               <span class="btn btn-primary" style="width:100px; z-index:0; border-radius: 15px;" id="btn_camera_belt" onclick="$('#belt_img').click(); "> <i class="fa  fa-camera"></i>&nbsp;ถ่ายภาพ
               
               
               </span></label>
            </td>
            <td><span class="input-group" style="margin-top:5px;">
               <input type="text" value="ไม่มีภาพถ่าย" class="photo-no-active" readonly="" style="padding-left:5px; margin-top:-5px; padding-right:0px; width:100%; height:35px;" id="belt_img_input">
               </span>
            </td>
            <td width="30">        
               <button type="button" class="btn btn-default " data-toggle="modal" style="padding-left:5px; padding-right:5px; width:30px" id="del_belt_img" onclick="deletePhoto('<? echo $arr[project][id];?>');"><i class="fa  fa-trash" style="font-size:20px; "></i></button>
            </td>
         </tr>
      </tbody>
   </table>
	
   <img id="belt_img_preview" name="belt_img_preview" style="width:100%; padding:5px; margin-top:0px;border-radius:15px; display:none ">     
</div>
<div style="color:#FF0000"><center>กรุณาถ่ายภาพผู้โดยสารคาดเข็มขัด</center></div>
            </div>
   
   <div  class="modal-footer" style="display: nones;">
		<table width="100%" border="0" cellspacing="2" cellpadding="2" id="submit_send_data_<? echo $arr[project][id];?>">
               <tr>
                  <td width="50%" style="padding-right:5px;"><button type="button" class="btn-modal-no"  data-backdrop="static" id="btn_cancel_guest_yes_<? echo $arr[project][id];?>" data-dismiss="modal" style=" width:100%"  >ไม่ถูกต้อง</button></td>
                  <td width="50%"  style="padding-left:5px; display:none" id="td_confirm_checkpoint_<? echo $arr[project][id];?>"><button type="button" class="btn-modal-ok"   style="background-color:<?=$ok_button_color?>; width:100% "    id="btn_guest_check_ok_<? echo $arr[project][id];?>" >ถูกต้อง</button>	</td>
               </tr>
            </table>
	</div>


</form>
<script>
	function deletePhoto(id){
		var url_upload = "mod/load/show/photo_upload/upload_new.php?type=del_belt&id="+id;
		$.ajax({
                url: url_upload, // point to server-side PHP script 
                dataType: 'json', // what to expect back from the PHP script, if anything
                type: 'post',
                success: function(php_script_response) {
                    console.log(php_script_response);
	      			$('#belt_img_preview').hide();
	      			$('#belt_img').val('');
//	      			$('.modal-footer').hide();
	      			sum_photo();
	      			$('#btn_camera_belt').addClass('btn-primary');
	      			$('#btn_camera_belt').removeClass('btn-success');
	      			$('#del_belt_img').addClass('btn-default');
	      			$('#del_belt_img').removeClass('btn-danger');
	      			$('#belt_img_input').val('ไม่มีภาพถ่าย');
	      			$('#box_photo_belt').addClass('border-red');
	      			
                },
                error: function(e) {
                    console.log(e)
                }
            });
	}

	function readURL(input,id) {
		console.log('upload');
	  if (input.files && input.files[0]) {
	    var reader = new FileReader();

	    reader.onload = function(e) {
	      
	      var url_upload = "mod/load/show/photo_upload/upload_new.php?type=belt&id="+id;
	      var data = new FormData($('#form_img_belt')[0]);
//            data.append('fileUpload', $('#belt_img')[0].files[0]);
	      $.ajax({
                url: url_upload, // point to server-side PHP script 
                dataType: 'json', // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: data,
                type: 'post',
                success: function(php_script_response) {
                    console.log(php_script_response);
                   	$('#belt_img_preview').attr('src', '../car/pic/guest/belt/'+id+'.png');
	      			$('#belt_img_preview').show();
//	      			$('.modal-footer').show();
	      			sum_photo();
	      			$('#btn_camera_belt').removeClass('btn-primary');
	      			$('#btn_camera_belt').addClass('btn-success');
	      			$('#del_belt_img').removeClass('btn-default');
	      			$('#del_belt_img').addClass('btn-danger');
	      			$('#belt_img_input').val('มีภาพถ่ายแล้ว');
	      			$('#box_photo_belt').removeClass('border-red');
                },
                error: function(e) {
                    console.log(e)
                }
            });
	      
	    }

	    reader.readAsDataURL(input.files[0]);
	  }
	}
	function checkBelt(){
		console.log("value Check before : "+$("#check_belt").val());
		
		if($("#check_belt").val() == 0){
		    $('#box_photo_belt').show();
		    $('#ic_check').addClass('checked');
//		    $("#check_belt").attr('data-ck',1);
			$("#check_belt").val(1);
		    $('#box_belt').removeClass('border-red');
			if($('#belt_img').val()!=""){
//				$('.modal-footer').show();
			}else{
				$('#box_photo_belt').addClass('border-red');
			}
		}else{
			$('#ic_check').removeClass('checked');
//			$('.modal-footer').hide();
			$('#box_photo_belt').hide();
//			$("#check_belt").attr('data-ck',0);
			$("#check_belt").val(0);
			$('#box_belt').addClass('border-red');
			$('#box_photo_belt').removeClass('border-red');
		}
		
		setTimeout(function(){ sum_photo(); }, 500);
	}
	
	$('.icheckbox_square-blue').click(function(){
		checkBelt();
	});
</script>
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
               <center><b> แน่ใจหรือไม่</b></center>
            </h4>
            <div class="modal-body"  >
               <center>
               <div style="padding:2px; font-size:20px; margin-top:10px; color:#999999;border-top: 0px solid #e5e5e5;  ">ว่าไม่เจอแขก</div>
               <table border="0"  style="width:100%; ">
                  <tr>
                     <td>
                        <div class="topictransfer">สาเหตุ</div>
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
                        </script>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div class="topictransfer">ระบุสาเหตุอื่น ๆ </div>
                        <input class="form-control"  type="text"  name="driver_remark_detail" id="driver_remark_detail_<?=$arr[project][id];?>"/>
                     </td>
                  </tr>
               </table>
               <table  style="width:100% " >
                  <tr>
                     <td align="center" class="gay5">
                        <div class="topictransfer">
                           <center>
                           ถ่ายภาพสถานที่รับแขก
                        </div>
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
       if($('#data_income_other_check').val()>0){
       	var url_ic_dv = "income_other/income_other_php.php?action=save_list";
       	var dv = $('#dv_balance').val();
       	var com = $('#com_balance').val();
       	var type = $('#type_income_other').val();
       	var all = $('#balance_input').val()
       	var data = {
      	type : type,
      	balance : all,
      	driver_balance : dv,
      	company_balance : com,
      	posted : "<?=$arr[web_driver][username];?>",
      	transfer_id : "<?=$arr[project][id];?>"
        };
        console.log(data);
        $.post(url_ic_dv,data,function(data){
        		console.log(data);
        		var dv_percent = $('#txt_dv_percent').text();
        		$('#txt_show_dv_percent').text(dv_percent);
        		$('#txt_show_dv_balance').text(dv);
        		$('#txt_show_balance').text(all);
        		$('#txt_show_type_name').text($("#type_income_other option:selected").text());
        		$('#box_detail_ic_other_yes').show();
        		$('#box_detail_ic_other_no').hide();
        		$('#date_income_other_show').text("<?=date('Y-m-d',time());?>");
        		$('#time_income_other_show').text("<?=date('H:i:s',time());?>");
        });
      //	  return;
       }
      $("#send_data_checkin_wait" ).html(load_main_mod_checkin_wait);  
       var url_checkin = "go.php?name=action&file=action&daytype=<?=$_GET[daytype]?>&day=<?=$_GET[day]?>"; 
      $.post(url_checkin,$('#form_checkin').serialize(),function(response){
        $('#send_data_checkin').html(response);
        $('#tr_box_income_other').show();
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
            <center><b> แน่ใจหรือไม่</b></center>
         </h4>
         <div class="modal-body" >
            <center>
            <div style="padding:2px; font-size:20px; margin-top:10px; color:#999999 ">ว่ามาถึงสถานที่ส่งแขกแล้ว</div>
            <div class="div-all-lost">
               <div class="topictransfer">
                  <center>
                  ถ่ายภาพสถานที่ส่งแขก
               </div>
               <?  include ("mod/load/show/step/photo.php");?>
            </div>
            <div class="div-all-lost">
               <div class="topictransfer">
                  <center>
                  ถ่ายภาพภายในรถ
               </div>
               <?  include ("mod/load/show/step/photo_complete.php");?>
            </div>
            <?  include ("mod/load/show/step/lost.php");?>
            <?  include ("mod/load/show/step/income_check.php");?>
            <table width="100%" border="0" cellspacing="2" cellpadding="2"  class="div-all-lost" style="display:none;">
               <tbody>
                  <tr>
                     <td colspan="2">
                        <h4>
                           <center><b> รายได้อื่นๆ</b></center>
                        </h4>
                        <input type="hidden" value="0" id="data_income_other_check" name="data_income_other_check" />
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <table width="100%" border="0" cellspacing="2" cellpadding="2">
                           <tbody>
                              <tr>
                                 <td width="30"><input name="check_ic_other"  type="radio" id="check_income_other_1"  value="0" checked="checked"   data-off-text="ชำรุด" data-on-text="สมบูรณ์"></td>
                                 <td class="font_18">ไม่มี</td>
                              </tr>
                           </tbody>
                        </table>
                     </td>
                     <td width="50%">
                        <table width="100%" border="0" cellspacing="2" cellpadding="2">
                           <tbody>
                              <tr>
                                 <td width="30"><input name="check_ic_other"  type="radio" id="check_income_other_2"  value="1"   data-off-text="ชำรุด" data-on-text="สมบูรณ์"></td>
                                 <td  class="font_18">มี</td>
                              </tr>
                           </tbody>
                        </table>
                     </td>
                  </tr>
                  <tr id="tr_detail_income_other" style="display:none">
                     <td colspan="2">
                        <table width="100%">
                           <tr>
                              <td>
                                 <h4>
                                    <center><b>กรอกข้อมูลของรายได้</b></center>
                                 </h4>
                                 <select class="form-control" name="type_income_other" id="type_income_other">
                                    <option value="0">- กรุณาเลือกประเภท -</option>
                                    <?php 
                                       $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
                                       $res[type] = $db->select_query("select * from income_other_type  where id>0");
                                       while($arr[type] = $db->fetch($res[type])){ ?>
                                    <option value="<?=$arr[type][id];?>" role="xx" dv-percent="<?=$arr[type][driver_percent];?>" com-percent="<?=$arr[type][company_percent];?>" ><?=$arr[type][topic];?></option>
                                    <? }
                                       ?>
                                 </select>
                              </td>
                           </tr>
                           <tr class="tr-income-other" style="display: none;">
                              <td>
                                 <p>คนขับ <span id="txt_dv_percent">0</span> % บริษัท <span id="txt_com_percent">0</span> %</p>
                              </td>
                           </tr>
                           <tr class="tr-income-other" style="display: none;">
                              <td><input type="number" id="balance_input" name="balance_input" class="form-control" placeholder="กรุณากรอกรายได้" /></td>
                           </tr>
                           <tr class="tr-income-other" style="display: none;">
                              <td>
                                 <h3>รายได้ของคุณ : <span id="txt_dv_balance" >0</span>&nbsp;บาท</h3>
                                 <input type="hidden" id="dv_balance" />
                              </td>
                           </tr>
                           <tr  style="display: none;">
                              <td>
                                 <h3>รายได้บริษัท : <span id="txt_com_balance" >0</span>&nbsp;บาท</h3>
                                 <input type="hidden" id="com_balance" />
                              </td>
                           </tr>
                        </table>
                     </td>
                  </tr>
               </tbody>
               <script>
                  /**
                  * 
                  * @var Nut
                  * 
                  */
                  /* {
                  type : type_income_other,
                  balance : balance_input,
                  driver_balance : $('#txt_dv_balance').text(),
                  company_balance : $('#txt_com_balance').text()
                  }*/
                  $('#balance_input').keyup(function(){
                  		var input_val = $(this).val();
                  		calDv(input_val)
                  		calCom(input_val)
                  });
                  function calDv(input_val){
                  	if(input_val!="" && input_val!=0){
                  	var dv_percent = $('#txt_dv_percent').text();
                  			var balance = parseInt(input_val) * parseInt(dv_percent)/100;
                  			console.log(balance);
                  			$('#txt_dv_balance').text(balance);
                  			$('#dv_balance').val(balance);
                  }else{
                  	$('#txt_dv_balance').text(0);
                  	$('#dv_balance').val(0);
                  }
                  }
                  function calCom(input_val){
                  	if(input_val!="" && input_val!=0){
                  	var com_percent = $('#txt_com_percent').text();
                  			var balance = parseInt(input_val) * parseInt(com_percent)/100;
                  			console.log(balance);
                  			$('#txt_com_balance').text(balance);
                  			$('#com_balance').val(balance);
                  }else{
                  	$('#txt_com_balance').text(0);
                  	$('#com_balance').val(0);
                  }
                  }
                  $('#type_income_other').change(function(){
                  		var id_type = $(this).val();
                  		if(id_type==""){
                  	$('.tr-income-other').hide();
                  	return;
                  }
                  $('.tr-income-other').show();
                  		var dv = $('option:selected', this).attr("dv-percent");
                  		var com = $('option:selected', this).attr("com-percent");
                  		var xx = $('option:selected', this).attr("role");
                  		console.log(id_type+" | "+dv+" | "+com+" | "+xx)
                  		$('#txt_dv_percent').text(dv);
                  		$('#txt_com_percent').text(com);
                  });
                  $('#check_income_other_1').on('ifChecked', function(event){
                  $('#tr_detail_income_other').hide();
                  $('#data_income_other_check').val(0);
                  });
                  $('#check_income_other_2').on('ifChecked', function(event){
                  $('#tr_detail_income_other').show();
                  $('#data_income_other_check').val(1);
                  });
               </script>
            </table>
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
               <center><b> แน่ใจหรือไม่</b></center>
            </h4>
            <div class="modal-body" >
               <center>
               <div style="padding:2px; font-size:20px; margin-top:10px; color:#999999 ">ว่าตรวจสอบสัมภาระเรียบร้อยแล้ว</div>
               <table  style="width:100% " >
                  <tr>
                     <td class="gay5">
                        <div class="topictransfer">
                           <center>
                           ถ่ายภาพภายในรถ
                        </div>
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
<div id="send_data_checkin" ></div>
<div id="send_data_checkin_wait"></div>
<br>
<br />
<br>
<br>
<br>
<? //  include ("load/loading/page_mod.php");?> 
<script src="js/hide-address-bar.js?v=<?=time()?>"></script>