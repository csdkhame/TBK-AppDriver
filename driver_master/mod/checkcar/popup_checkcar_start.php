<style type="text/css">
<!--
.topicname { padding-top:10px; padding-left:0px; padding-bottom:5px; font-size:18px; font-weight:bold; color: #666666 ; text-align:left;  
 
}
 

 
-->
</style>  
<script>
 $("#head_full_popup" ).html("เริ่มใช้รถเวลา <?   echo date("H:i:s");  ?>");
  $("#head_full_popup_icon" ).html("<i class='fa  fa-clock-o'></i>");
</script>


<br />
 
<form id="user_car_send_data"  name="user_car_send_data" action="popup.php?name=checkcar/file&file=upload_pic&type=carcare" method="post" enctype="multipart/form-data" >

 <!-- iCheck -->
 
 <div class="topicname"><i class="icon-new-uniF10A-9"></i>&nbsp;หมายเลขรถที่ขับ</div>
		          <table width="100%"  border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td>
    
    
    
    
    
    
    
    
    <div id="div_select_use_car">
    
    
    
    <table width="100%"  border="0" cellspacing="2" cellpadding="2">
            <tr>
             
      <td style="font-size:22px; font-weight:bold; height:45px;border-radius: 30px ; padding:10px; background-color:#FFF ;  border:1px solid #dadada; padding:10px;box-shadow: 0px 0px 10px  #dadada;" >
      
    <div >  <center>
    
      
      
      
      <input type="hidden" name="check_data_car_work" id="check_data_car_work" value="<?=$driver_carnumber?>"  style="width:100px " />
      
      
      
      
      
    
      <a id="btn_select_car" style="font-size:20px;">เลือกรถที่ขับ
      
    
      
    <div id="load_select_car"></div>
 </a>
 
 
 
  
        </div>
        
        
        
        
      
      </td>
            </tr>
        </table>
    
    
    
    
     </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table> 


        

<script>

////// หา product
////$(document).ready(function(){

/*
  var url_car_number="go.php?name=checkcar/load&file=time_start&car="+document.getElementById('check_car_number').value;
 
 $("#load_time_start_car").load(url_car_number);
 
 
 
  $("#check_car_number").on('change',function(){ 
  
 
  
  var url_car_number="go.php?name=checkcar/load&file=time_start&car="+document.getElementById('check_car_number').value;
 
 $("#load_time_start_car").load(url_car_number);
 
  });
  
 
 
  
  $("#reset_use_car").click(function(){  
  
 
  setTimeout(function(){ 
 
    var url_car_number="go.php?name=checkcar/load&file=time_start&car="+document.getElementById('check_car_number').value;
 
 $("#load_time_start_car").load(url_car_number);
 
 
  }, 2000);
 
 
  });
  
  
  
/////});

*/

</script>


 
 
 <?
 
 

 
///// รถ

$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$res[chkcar] = $db->select_query("SELECT * FROM  driver_use_car  where drivername='".$driver_id."'   order by id desc limit 1 ");
$arr[chkcar] = $db->fetch($res[chkcar]);

 
 ?>
 
 
 
 
                    <div class="topicname"><i class="fa  fa-tachometer"></i>&nbsp;เลขกิโลเมตรออกรถ</div>
                     
       
         <table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td id="load_time_start_car"> <input name="check_mile" type="number"  class="form-control" id="check_mile"  style="font-size:30px; height:50px;" onKeyPress="if(this.value.length==6) return false;" value="<?=$arr[chkcar][mile]?>"/></td>
  </tr>
</table>
          
			 
 <br />
 
 
 

					
					
                    <div class="topicname"><i class="fa  fa-wrench"></i>&nbsp;ตรวจเช็คสภาพรถ</div>
                    
                   <div id="tb_check_all_car">
                    
                    
                    <table width="100%"  border="0" cellspacing="2" cellpadding="2"  >
                      <tr>
					   <td style="width:30px; height:40px; "> 
  
<input name="check_water"  type="checkbox" id="check_water" onclick="check_use_car();" value="1"   data-off-text="ชำรุด" data-on-text="สมบูรณ์" >
 
			 
			 </td>
			 
                        <td valign="middle" style="padding-bottom:2px; font-size:18px;  padding-left:10px; ">หม้อน้ำ น้ำที่ปัดน้ำฝน</td>
					  </tr>
						 
						  <tr>
                   <td style="width:30px; height:40px; "> 
						<input name="check_oil"  type="checkbox" id="check_oil"  onclick="check_use_car();" value="1"   data-off-text="ชำรุด" data-on-text="สมบูรณ์"  ></td>
						
                        <td valign="middle" style="padding-bottom:2px; font-size:18px; padding-left:10px;">น้ำมันเครื่อง</td>
                      
						</tr>
						
						<tr>
						<td style="width:30px; height:40px; "> 
						 
						 <input name="check_rubber"  type="checkbox" id="check_rubber"  onclick="check_use_car();" value="1"   data-off-text="ชำรุด" data-on-text="สมบูรณ์"  ></td>
                        <td valign="middle" style="padding-bottom:2px; font-size:18px;  padding-left:10px; ">ลมยาง</td>
						</tr>
						<tr>
						
 	
						
                      <td style="width:30px; height:40px; "> 
					  
					  <input name="check_rain"  type="checkbox" id="check_rain" value="1" data-off-text="ชำรุด" data-on-text="สมบูรณ์"  onclick="check_use_car();"  ></td>
						  <td valign="middle" style="padding-bottom:2px; font-size:18px;  padding-left:10px; ">ที่ปัดน้ำฝน</td>
                        
                      </tr>
						<tr style="display:none">
						  <td style="width:30px; height:40px; "><input name="check_wash"  type="checkbox" id="check_wash" value="1" data-off-text="ชำรุด" data-on-text="สมบูรณ์"  onclick="check_use_car();"  ></td>
						  <td valign="middle" style="padding-bottom:2px; font-size:18px;  padding-left:10px; ">ล้างรถ</td>
					  </tr>
  </table>
           
     </div>      
              
			  
			  
  <div id="photo_usecar" style="display:none">  
			  
 
  
			  
          <div class="topicname"><i class="fa  fa-automobile"></i>&nbsp;ภาพถ่ายรถ</div>
                                  <div class="input-group">
                                    <label class="input-group-btn"> <span class="btn btn-primary"> <i class="fa  fa-camera"></i>&nbsp;ถ่ายภาพ
                                      <input type="file" class="form-control" name="photo_checkguest_<?=$arr[project][id];?>_1" id="photo_checkguest_<?=$arr[project][id];?>_1" accept="image/*"  capture="camera"  style="display: none;"/>
                                    </span> </label>
                                    <input name="text" type="text" class="form-control" id="url_photo_checkguest_<?=$arr[project][id];?>_1"  style="padding-left:5px; padding-right:5px; width:160px" value="ยังไม่มีภาพถ่าย" readonly />
                                    &nbsp;
                                    <button type="button" class="btn btn-default" data-toggle="modal"   style="padding-left:5px; padding-right:5px; width:30px" id="del_photo_checkguest_<?=$arr[project][id];?>_1"><i class="fa  fa-trash" style="font-size:20px; "></i></button>
                                    <script>
 
$('#del_photo_checkguest_<?=$arr[project][id];?>_1').click(function(){  
document.getElementById('photo_checkguest_<?=$arr[project][id];?>_1').value='';
document.getElementById('url_photo_checkguest_<?=$arr[project][id];?>_1').value='ยังไม่มีภาพถ่าย';
$('#url_photo_checkguest_<?=$arr[project][id];?>_1').css({"background": "#fa1431","color": "#333333", });

     	});
					
					              </script>
                                  </div>
                                  <div class="input-group" style="margin-top:10px; ">
                                    <label class="input-group-btn"> <span class="btn btn-primary"> <i class="fa  fa-camera"></i>&nbsp;ถ่ายภาพ
                                      <input type="file" class="form-control" name="photo_checkguest_<?=$arr[project][id];?>_2" id="photo_checkguest_<?=$arr[project][id];?>_2" accept="image/*"  capture="camera"  style="display: none;"/>
                                    </span> </label>
                                    <input name="text" type="text" class="form-control" id="url_photo_checkguest_<?=$arr[project][id];?>_2"  style="padding-left:5px; padding-right:5px; width:160px" value="ยังไม่มีภาพถ่าย" readonly />
                                    &nbsp;
                                    <button type="button" class="btn btn-default" data-toggle="modal"   style="padding-left:5px; padding-right:5px; width:30px" id="del_photo_checkguest_<?=$arr[project][id];?>_2"><i class="fa  fa-trash" style="font-size:20px; "></i></button>
                                    <script>
 
$('#del_photo_checkguest_<?=$arr[project][id];?>_2').click(function(){  
document.getElementById('photo_checkguest_<?=$arr[project][id];?>_2').value='';
document.getElementById('url_photo_checkguest_<?=$arr[project][id];?>_2').value='ยังไม่มีภาพถ่าย';
$('#url_photo_checkguest_<?=$arr[project][id];?>_2').css({"background": "#fa1431","color": "#333333", });
     	});
					
					              </script>
                                  </div>
								  
								  
								  
								  
  </div>						  
								  
 
 
 
  <div class="topicname" style="margin-top:10px;"><i class="icon-new-uniF133-7"></i>&nbsp;ถ่ายภาพรถ</div>

				  <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="padding-right:5px;">  <?  include ("mod/checkcar/load/car/photo.php");?></td>
    </tr>
</table>	
                        		  
 
 	  
                                  <div class="topicname" style="margin-top:10px;"><i class="fa  fa-pencil-square"></i>&nbsp;รายละเอียดเพิ่มเติม</div>

				  <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="padding-right:5px; "><textarea name="check_detail_car" rows="2" class="form-control" id="check_detail_car" onKeyPress="PasswordEnter(this,event)" ></textarea></td>
    </tr>
</table>

			 
			  
 

<script type="text/javascript" src="js/dialog/main.js"></script>
 
	  
			  
		   
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  <script src="plugins/iCheck/icheck.min.js"></script>

<script>
 
 /// check login
 


  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
 

     <div id="send_data_car"></div>
  
  
  
  <div style="margin-top:0px; display:nones"  id="check_status_use_car" >
 <table width="100%"  border="0" cellspacing="2" cellpadding="2"  >
  <tr>
    <td width="50%" style="padding:5 px;"><button type="reset" class="btn-modal-no-popup"  style="width:100% ">รีเซ็ต</button>
	<input name="file_upload_submit"  id="file_upload_submit" type="submit" style="display:none">
    <td width="50%" style="padding:5px;"><button id="submit_use_car" type="button" class="btn-modal-ok" style="width:100% ">บันทึกข้อมูล</button></td>
	
	
	</td>
  </tr>
</table>
 

 
        
  </div>
  
    <!----- ปิด row-->
   
   
     </div>  
  	
 
  <script>
       
 
  
 /// check login

$("#submit_use_car").click(function(){  
//$('#file_upload_line').click();


 //alert(document.getElementById('check_water').value);
 
 
if(document.getElementById('check_water').checked) {
   document.getElementById('check_water').value=1;
} else {

document.getElementById('check_water').value=0;
}



 
if(document.getElementById('check_rain').checked) {
   document.getElementById('check_rain').value=1;
} else {

document.getElementById('check_rain').value=0;
}
 
 
  
if(document.getElementById('check_oil').checked) {
   document.getElementById('check_oil').value=1;
} else {

document.getElementById('check_oil').value=0;
}
 
 
  
if(document.getElementById('check_rubber').checked) {
   document.getElementById('check_rubber').value=1;
} else {

document.getElementById('check_rubber').value=0;
}





if(document.getElementById('check_wash').checked) {
   document.getElementById('check_wash').value=1;
} else {

document.getElementById('check_wash').value=0;
}
 
 
 var checkcar =parseInt (document.getElementById('check_water').value) + parseInt (document.getElementById('check_oil').value) + parseInt (document.getElementById('check_rain').value) + parseInt (document.getElementById('check_rubber').value) + parseInt (document.getElementById('check_wash').value);
 
 
 
 
 ///alert(checkcar);
 
 
// if(checkcar<5 && document.getElementById('check_mile').value==''){
 

 
 
 if(document.getElementById('check_mile').value==''){
 
  alert('กรุณากรอกเลขกิโลเมตรเริ่มต้นออกรถ');
  
  
  
  document.getElementById('check_mile').focus() ; 
return false ;
 
  }


   if(checkcar<4){
 
  alert('กรุณาตรวจสอบรายการเช็คสภาพรถให้ครบ');
  
  $('#tb_check_all_car').addClass("tab_alert");
  
    document.getElementById('check_water').focus() ; 
return false ;
 
  }
  
  
 
 
 
// }
  
  
  
  else {
	  
	  
	  
	  
//////
 
 
 $('#tb_check_all_car').removeClass("tab_alert");
 
 
  var url_car = "popup.php?name=checkcar&file=savedata&type=usecar&drivername=<?=$driver_id;?>&usecar=start";
  
  url_car=url_car+"&car="+document.getElementById('check_data_car_work').value;
  
   	url_car=url_car+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
	url_car=url_car+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
	
	
	 url_car=url_car+"&check_water="+document.getElementById('check_water').value;
	 url_car=url_car+"&check_oil="+document.getElementById('check_oil').value;
	 url_car=url_car+"&check_rain="+document.getElementById('check_rain').value;
	 url_car=url_car+"&check_rubber="+document.getElementById('check_rubber').value;
	 url_car=url_car+"&check_wash="+document.getElementById('check_wash').value;
	 
	  url_car=url_car+"&check_mile="+document.getElementById('check_mile').value;

 

 $.post(url_car,$('#user_car_send_data').serialize(),function(response){
   $('#send_data_car').html(response);
 
  });
  
 
  }
  
  
  //////
  

 });
 </script> 
 
  <iframe id="uploadtarget" name="uploadtarget" src="" style="width:1px;height:1px;border:0"></iframe>
</form> 
 
 <br />
  <br />
  <br />
  

  
  
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
  
  
  
</script>


  
  
  
  
  
  
  
   <script>
	  
	  var car=<?=$driver_carnumber?>;
	  
	  
	  
	  
 var url_car="go.php?name=checkcar/load/car&file=car_now&car="+car;
	  

  $("#load_select_car").load(url_car);
  
  
  
  
	  
		
 $("#btn_select_car").click(function(){
	 
 
	 
  var car=document.getElementById("check_data_car_work").value;
			 
$("#head_full_popup_main_control_select" ).html('รถทั้งหมด');			 
 
 $("#popup_main_control_select" ).toggle();
 
  var url_car="go.php?name=checkcar/load/car&file=car_select&id=<?=$_GET[id]?>&car="+car;
 
  $("#load_main_control_select").load(url_car);
 
 
		 });
		
		</script>