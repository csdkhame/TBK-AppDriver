 
<form id="form_checkin"    action="load_small.php?name=action&file=send_guest_data&id=<?=$arr[project][id];?>&folder=<?=$arr[project][invoice];?>&photo=topoint" method="post"  enctype="multipart/form-data"   target="popupuploadframe"  >
 

<script>
 $('#head_full_popup').html("รายจ่ายคนขับรถ"); 
 

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
			 
 
 
              <div class="modal-body"  >  
		  
 <div style="padding:2px; font-size:20px; margin-top:10px;  border-top: 0px solid #e5e5e5;  "> <strong>เลือกประเภทรายจ่าย</strong></div>
		  
<select name="work_sort" size="0"    id="work_sort"  class="form-control"  style="font-size:20px;   margin-left:0px; height:40px; " >
 
  <option value="all" selected="selected"  >ค่าน้ำมันรถ</option>		
 
 <option value="no" >งานไม่สำเร็จอยู่ด้านบน</option>
		
<option value="yes" >งานสำเร็จอยู่ด้านบน</option>
              
                       
 
                       
</select> 


<div style="padding:2px; font-size:20px; margin-top:10px;  border-top: 0px solid #e5e5e5;  "> <strong>จำนวนเงิน</strong></div>

 <input  type="number" class="form-control"  style="font-size:20px;   margin-left:0px; height:40px; "  id="data_id" name="data_id">
 
 
 
 
 <div class="form-group">
                <label class="font_20">วันที่จ่ายเงิน</label>

                <div class="input-group date">
   
                  <input type="text" class="form-control pull-right" value="<?=date('Y-m-d');?>"  name="date_report" id="date_report"  readonly="true" style="background-color:#FFFFFF; height:40px; font-size:24px ">               <div class="input-group-addon"  id="btn_calendar" style="cursor:pointer ">
                     <i class="fa fa-calendar" style="font-size:24px; "></i> 
                  </div>
                </div>
 
 
 
 
 
		  
        <table  style="width:100% " >
          <tr>
            <td align="center" class="gay5">
            
            
            
            <div class="topictransfer"> 
              ถ่ายภาพเอกสารการจ่ายเงิน</div>
          
 
          
          <?  include ("mod/pay/load/photo.php");?>
 
                
                
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
      <td width="50%" style="padding-right:5px;"><button type="button"  id="btn_close_pay" class="btn btn-modal-no"   data-backdrop="static" style="width:100%" >ยกเลิก</button></td>
      <td width="50%" style="padding-left:5px;display:noneห" id="td_confirm_checkpoint_<? echo $arr[project][id];?>"> <button type="button" class="btn btn-modal-ok"   data-dismiss="modal" data-backdrop="static" id="btn_confirm_topoint_<? echo $arr[project][id];?>"  style="width:100%" >บันทึกข้อมูล</button> </td>
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
  <script>
    $("#btn_close_pay").click(function(){    
 
  $("#load_data_main_popup" ).hide();
 
   });
 
 
  
  </script>