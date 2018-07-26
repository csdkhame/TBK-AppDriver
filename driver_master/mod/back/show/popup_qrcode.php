 
 
 
 
 <?
 
 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
 
 $res[project] = $db->select_query("SELECT id,report_id,server,invoice,guest_name,guest_phone FROM ".TB_transfer_report_all."  where id='".$_GET[id]."'");
 $arr[project] = $db->fetch($res[project]);
 
 
 ?>
  
 <br>
<br>

 
 
 
 
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
  
  var url_checkin = "go.php?name=action&file=action&id=<?=$GET[id];?>&type=driver_topoint"; 
 
 $.post(url_checkin,$('#form_checkin').serialize(),function(response){
 $('#send_data_checkin').html(response);

 
 /// upload photo
 ////$("#btn_upload_photo_<?=$arr[project][id];?>" ).click(); 
 
 
 
$("#submit_send_data_<? echo $arr[project][id];?>" ).toggle(); 
$("#load_send_data_<? echo $arr[project][id];?>" ).toggle(); 

 
 
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
 
 
 
 
 
  <div id="send_data_checkin"></div>
<br>
<br />
<br>
<br />
<br>
<br />
<br>
<br />