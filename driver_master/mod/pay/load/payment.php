 <style>
.box-pay-icon {
    border-radius: 50%;  
 
    padding: 5px; 
    width: 60px;
    height: 60px; 
	text-align: justify; color:#3C8DBC;  font-size:24px;  
	border: solid 2px #3C8DBC;
	 box-shadow: 0 0 0px 0px #E8E6E6;  
}

  
.div-box-pay-detail {
border-radius: 0px ; padding:0px; background-color:#FFF;  border-bottom:2px dotted #dadada; margin-bottom:0px; 
 box-shadow: 0 0  0px 0px #E8E6E6; margin-top:8px; display:nones; padding-bottom:0px;   
 
}


.div-box-pay-detail-none {
border-radius: 0px ; padding:0px; background-color:#FFF;  border-bottom:2px dotted #dadada; margin-bottom:0px; 
 box-shadow: 0 0  0px 0px #E8E6E6; margin-top:8px; display:none; padding-bottom:0px;   
 
}


.div-box-pay-shop {
border-radius: 15px ; padding:0px; background-color:#FFF;  border:2px solid #dadada; margin-bottom:10px; 
 box-shadow: 0 0  0px   #E8E6E6; margin-top:5px; display:nones; padding-bottom: 5px; padding-left:5px;   

}

.div-box-pay-shop-active {
border-radius: 15px ; padding:0px; background-color:#FFF;  border:1px solid #dadada; margin-bottom:10px; 
 box-shadow: 0 0  0px   #E8E6E6; margin-top:5px; display:nones; padding-bottom: 5px; padding-left:5px;   border:2px solid #3C8DBC;

}






.circle-pay-icon{
    border-radius: 50%; background-color:<?=$main_color?>; display: block;  
 
    padding: 10px; padding-top:10px;   
    width: 60px;
    height: 60px; 
 
	 color:#FFFFFF;  font-size:30px;  
	border: solid 2px #FFFFFF;
 
    text-align: center;
	vertical-align: middle;   border:2px solid #dadada;
 
}



.circle-pay-icon-small{
    border-radius: 50%; background-color:<?=$main_color?>; display: block;  
 
    padding: 10px; padding-top:10px;   
    width: 28px;
    height: 28px; 
 
	 color:#FFFFFF;  font-size:20px;  
	border: solid 2px #F6F6F6;
 
    text-align: center;
	vertical-align: middle;   border:2px solid #dadada;
 
}





</style> 

 <?
 if($_GET[paytype]=='oil_bill'){
	 
 $paytype='เบิกบิลน้ำมัน';
	 
 }
 
  if($_GET[paytype]=='car_over'){
	 
 $paytype='ใช้ชั่วโมงรถเพิ่ม';
	 
 }
   if($_GET[paytype]=='food'){
 
  $paytype='ร้านอาหาร';
 
  }
  
     if($_GET[paytype]=='other'){
 
  $paytype='รายรับอื่นๆ';
 
  }
 
 
 ?> 
 
<script type="text/javascript" src="js/dialog/main.js"></script>
 
	  
			  
		   
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  <style type="text/css">
  .circle-pay-icon1 {    border-radius: 50%; background-color:<?=$main_color?>; display: block;  
 
    padding: 10px; padding-top:10px;   
    width: 60px;
    height: 60px; 
 
	 color:#FFFFFF;  font-size:30px;  
	border: solid 2px #FFFFFF;
 
    text-align: center;
	vertical-align: middle;   border:2px solid #dadada;
}
.div-box-pay {border-radius: 30px ; padding:0px; background-color:#FFF;  border:2px solid #dadada; margin-bottom:0px; 
 box-shadow: 0 0  5px 0px #E8E6E6; margin-top:8px;  
}
  </style>
  <script src="plugins/iCheck/icheck.min.js"></script>
 
  
<form id="form_checkin"    action="load_small.php?name=action&file=send_guest_data&id=<?=$arr[project][id];?>&folder=<?=$arr[project][invoice];?>&photo=topoint" method="post"  enctype="multipart/form-data"   target="popupuploadframe"  >
 

<script>



 $('#head_full_popup').html("<?=$paytype?>"); 
 
 

 

</script>
 
 

 <?
 $_GET[checkin]='payment';
 ?>


<div  > 



 
 <div style="padding:1px; margin-top: 0px;"   ><br>

 
          <table width="100%" border="0" cellspacing="2" cellpadding="2">
                  <tbody>
   
                    
                    
                    <tr id="btn_driver_payment_oil_bill"class="div-box-pay-detail-none">
                      <td><table width="100%" border="0" cellspacing="2" cellpadding="2"  class="div-box-pay-detail"    data_type="oil_bill">
                        <tbody>
                          <tr>
                            <td width="40"><div  class="circle-pay-icon1" style="background-color:#34A0E7">
                              <div style="margin-top:5px;" ><i class="car-icon-uniF12E"  ></i></div>
                            </div></td>
                            <td align="left" class="font_18"><strong>เบิกบิลน้ำมัน</strong><br>
                              <font  class="font_14" style="color:#666666"> กรุณาแจ้งยอดเงิน ระบุรถที่เติมน้ำมัน<br>
                                และถ่ายภาพบิลน้ำมันที่เขียนเสร็จแล้ว</font></td>
                          </tr>
                        </tbody>
                      </table></td>
  
  
  
                      
                    </tr>
                    
                    <tr id="btn_driver_payment_car_over"   class="div-box-pay-detail-none">
                      <td><table width="100%" border="0" cellspacing="2" cellpadding="2"  class="div-box-pay-detail"  data_type="car_over" >
                        <tbody>
                          <tr>
                            <td width="40"><div  class="circle-pay-icon" style="background-color:#F7941D"><i class="icon-new-uniF13C"  ></i></div></td>
                            <td align="left" class="font_22"><strong>ใช้ชั่วโมงรถเพิ่ม</strong><br>
                              <font  class="font_14" style="color:#666666">เก็บเงินสดกับแขกตามที่ฝ่ายจัดรถแจ้ง
                              
                              <br>แจ้งยอดเงินและชั่วโมงที่ใช้รถเกินเวลา
                              
                              </font></td>
                          </tr>
                        </tbody>
                      </table>
                      
                      
                      
                      
                      </td>
                    </tr>
                    
               <tr id="btn_driver_payment_food"    class="div-box-pay-detail-none">
                      <td><table width="100%" border="0" cellspacing="2" cellpadding="2"  class="div-box-pay-detail"  data_type="food" >
    <tbody>
      <tr>
        <td width="40"> <div  class="circle-pay-icon" style="background-color:#17B3B2"><i class="icon-new-uniF1C1-1"  ></i></div></td>
        <td align="left" class="font_22"><strong>ร้านอาหาร</strong><br><font  class="font_14" style="color:#666666">
        
        
        
        
        กรุณาแจ้งรายรับต่อหัว ค่าจอดรถ <br>หรือคอมมิชชั่นจากยอดที่แขกใช้บริการ</font>
</td>
      </tr>
    </tbody>
  </table>
  
  
  
  
  
  </td>
  
 
                    </tr>
                       <tr id="btn_driver_payment_shop"  class="div-box-pay-detail-none">
                          
                      <td>
                      
                      <table width="100%" border="0" cellspacing="2" cellpadding="2"  class="div-box-pay-detail"   data_type="shop" >
                        <tbody>
                          <tr>
                            <td width="40"><div  class="circle-pay-icon" style="background-color:#A67C52"><i class="fa fa-cart-plus"  ></i></div></td>
                            <td align="left" class="font_22"><strong>ร้านค้า ช็อปปิ้ง</strong><br>
                              <font  class="font_14" style="color:#666666">กรุณาแจ้งรายรับต่อหัว ค่าจอดรถ <br>
                            หรือคอมมิชชั่นจากยอดที่แขกใช้บริการ</font></td>
                          </tr>
                        </tbody>
                      </table>
                      </td>
                    </tr>
                 
                 
                 
                          <tr  id="btn_driver_payment_tour"   class="div-box-pay-detail-none">
                      
                      
                      <td><table width="100%" border="0" cellspacing="2" cellpadding="2"  class="div-box-pay-detail"  data_type="shop">
                        <tbody>
                          <tr>
                            <td width="40"><div  class="circle-pay-icon" style="background-color:#8DC63F"><i class="icon-new-uniF136"  ></i></div></td>
                            <td align="left" class="font_22"><strong>ท่องเที่ยวทั่วไป</strong><br>
                              <font  class="font_14" style="color:#666666">กรุณาแจ้งรายรับต่อหัว ค่าจอดรถ <br>
                            หรือคอมมิชชั่นจากยอดที่แขกใช้บริการ</font></td>
                          </tr>
                        </tbody>
                      </table></td>
                      
                      
                      
                    </tr>
                    
                    
                              <tr  id="btn_driver_payment_other" class="div-box-pay-detail-none">
                      <td><table width="100%" border="0" cellspacing="2" cellpadding="2"  class="div-box-pay-detail"    data_type="other">
                        <tbody>
                          <tr>
                            <td width="40"><div  class="circle-pay-icon" style="background-color:#F06EAA"><i class="icon-new-uniF121-10" style="margin-left:-2px; top:10px;"  ></i></div></td>
                            <td align="left" class="font_22"><strong>รายรับอื่นๆ</strong><br>
                              <font  class="font_14" style="color:#666666">กรุณาแจ้งรายรับทั้งหมด<br>
                            และระบุรายละเอียดเกี่ยวกับการรับเงิน</font></td>
                          </tr>
                        </tbody>
                      </table></td>
                    </tr>
                  </tbody>
                </table>
          
          
 
          
          <? $mt=0?>
          
          
  
		  <div  style="padding:5px; margin-top:-<?=$mt?>px;">
 
 
<table width="100%" border="0" cellspacing="0" cellpadding="1">
  <tbody>
    <tr>
      <td><table width="100%" border="0" cellspacing="2" cellpadding="2">
        <tbody>
          <tr>
            <td width="50%"><div style="padding:2px; font-size:18px; margin-top:5px;  border-top: 0px solid #e5e5e5;  "> <strong>วันที่</strong></div>
                <div class="input-group date">
   <input type="text" class="form-control pull-right" value="<?=date('Y-m-d');?>"  name="payment_date" id="payment_date"  readonly="true" style="background-color:#FFFFFF; height:40px; font-size:16px ; z-index:0"   >               <div class="input-group-addon"  id="btn_calendar" style="cursor:pointer;border-radius:25px; "   >
                     <i class="fa fa-calendar" style="font-size:24px; "></i> 
                  </div>
                </div>
                
                
                </td>
            <td width="50%"><div style="padding:2px; font-size:18px; margin-top:5px;  border-top: 0px solid #e5e5e5;  "> <strong>เวลา</strong></div>
              <input name="payment_time"  class="form-control"  id="data_id4"  style="font-size:18px;   margin-left:0px; height:40px; " value="<?=date('H:i')?>" readonly="true"></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    
    <tr style="display:nones">
 
    
      <td>
    
    
    <table width="100%" border="0" cellspacing="2" cellpadding="2"  style="display:none">
  <tbody>
  
  
    <tr>
      <td width="50%"><div style="padding:2px; font-size:18px; margin-top:5px;  border-top: 0px solid #e5e5e5;  "> <strong>จำนวนชั่วโมง</strong></div>
      
        <select name="work_sort" size="0"    id="work_sort"  class="form-control"  style="font-size:20px;   margin-left:0px; height:40px; " >
 
  <option value="1" selected="selected"  >1</option>		
 
 <option value="2" >2</option>
		
<option value="3" >3</option>
<option value="3" >3</option>
              
 
 
                       
</select></td>
      <td width="50%"><div style="padding:2px; font-size:18px; margin-top:5px;  border-top: 0px solid #e5e5e5;  "> <strong>ราคา/ชั่วโมง</strong></div>
        <input  class="form-control"  style="font-size:18px;   margin-left:0px; height:40px; "  id="data_id2" name="data_id2"></td>
      </tr>
  </tbody>
</table>

    
    
       
       
    
    
    
    
    
      
      <table width="100%" border="0" cellspacing="2" cellpadding="2" style="display:none">
        <tbody>
     <tr>
       <td width="50%"><div style="padding:2px; font-size:18px; margin-top:5px;  border-top: 0px solid #e5e5e5;  "> <strong>จำนวนเงิน</strong></div>
         <input  class="form-control"  style="font-size:18px;   margin-left:0px; height:40px; "  id="data_id2" name="data_id2"></td>
    
       <td width="50%"><div style="padding:2px; font-size:18px; margin-top:5px;  border-top: 0px solid #e5e5e5;  "> <strong>เลขวอเชอร์ </strong></div>
         <input  class="form-control"  style="font-size:18px;   margin-left:0px; height:40px; "  id="data_id" name="data_id"></td>
         
         
         
     </tr>
   </tbody>
 </table>
 
 
 
<table width="100%"  border="0" cellspacing="2" cellpadding="2">
            <tr>
             
      <td style="font-size:22px; font-weight:bold; height:45px;border-radius: 30px ; padding:10px; background-color:#FFF ;  border:1px solid #dadada; padding:10px;box-shadow: 0px 0px 10px  #dadada;" >
      
    <div >  <center>
    
      
      
      
      <input type="hidden" name="check_data_car_work" id="check_data_car_work" value="<?=$driver_carnumber?>"  style="width:100px " />
      
    
      
    
      <a id="btn_select_car" style="font-size:20px; color:#333333">เลือกรถที่เติมน้ำมัน
      
    
      
    <div id="load_select_car"></div>
 </a>
 
  
  
        </div>
        
         
        
      
      </td>
            </tr>
         </table>
<table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tbody>
    <tr>
      <td><table width="100%" border="0" cellspacing="2" cellpadding="2" style="display:nones">
        <tbody>
          <tr>
            <td width="50%"><div style="padding:2px; font-size:18px; margin-top:5px;  border-top: 0px solid #e5e5e5;  "> <strong>เลขที่บิลน้ำมัน</strong></div>
              <input type="number"  class="form-control"  style="font-size:18px;   margin-left:0px; height:40px; "  id="payment_bill_number" name="payment_bill_number"></td>
          </tr>
        </tbody>
      </table></td>
      <td><table width="100%" border="0" cellspacing="2" cellpadding="2" style="display:nones">
        <tbody>
          <tr>
            <td width="50%"><div style="padding:2px; font-size:18px; margin-top:5px;  border-top: 0px solid #e5e5e5;  "> <strong>จำนวนเงิน</strong></div>
              <input type="number"  class="form-control"  style="font-size:18px;   margin-left:0px; height:40px; "  id="payment_cost" name="payment_cost"></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
  </tbody>
</table></td>
    </tr>
    
    
    
    
    <tr style="display:noness">
      <td>
	
    
      <table width="100%"  border="0" cellpadding="2" cellspacing="2"  class="div-box-pay-shopห " id="tb_check_all_car" style="display:none">
  <tr style="display:noneห" id="price_list_park">
    <td colspan="2" style="width:30px; height:40px; "><div style="padding:2px; font-size:18px; margin-top:0px;  border-top: 0px solid #e5e5e5;  "> <strong>ชื่อร้านอาหาร/สถานที่</strong></div>
      <input  class="form-control"  style="font-size:18px;   margin-left:0px; height:40px; "  id="data_id3" name="data_id4"></td>
  </tr>
</table>


  <table width="100%"  border="0" cellpadding="2" cellspacing="2"  class="div-box-pay-shopห " id="tb_check_all_car">
  <tr style="display:noneห" id="price_list_park">
    <td colspan="2" style="width:30px; height:40px; "><div style="padding:2px; font-size:18px; margin-top:0px;  border-top: 0px solid #e5e5e5;  "> <strong>รายละเอียด/บันทึกความจำ</strong></div>
<textarea name="payment_detail" rows="2" class="form-control" id="payment_detail" onKeyPress="PasswordEnter(this,event)" ></textarea></td>
  </tr>
</table>
	  
	  
	  
	  
 
	  
	  
	  
	  
	  <?
	  /*
require_once("mod/pay/load/list/park.php");
require_once("mod/pay/load/list/person.php");
require_once("mod/pay/load/list/com.php");
*/

?> </td>
    </tr>
    
   <tr style="display:none">
      <td>&nbsp;</td>
    </tr>
    
     <tr style="display:none">
      <td>&nbsp;</td>
    </tr>
    
  <tr style="display:none">
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

 


 
 

 
	
    
    
    
    
    
    
    
    
    
    
    	  
        <table  style="width:100% " >
          <tr>
            <td   class="gay5">
            
            
            
            <div style="padding:2px; font-size:18px; margin-top:0px;  border-top: 0px solid #e5e5e5;  "> <strong>ถ่ายภาพบิลน้ำมัน</strong></div>
 
 

          <?  include ("mod/pay/photo_upload/photo.php");?>
 
                
                
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
      <td width="50%" style="padding-right:5px;"><button type="button" class="btn btn-modal-no"   data-backdrop="static" style="width:100%" >ยกเลิก</button></td>
      <td width="50%" style="padding-left:5px;display:none" id="td_confirm_checkpoint_<? echo $arr[project][id];?>"> <button type="button" class="btn btn-modal-ok"   data-dismiss="modal" data-backdrop="static" id="btn_confirm_payment"  style="width:100%" >บันทึกข้อมูล</button> </td>
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

		<div id="send_data_pay"> </div>			 
	
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





 
</form>



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

   var url_load = "load_data_mod.php?name=pay/history&file=payment&type=<?=$_GET[type]?>";
 
 $('#load_data_main_popup').load(url_load); 



   $('#btn_driver_payment_<?=$_GET[paytype]?>').show(); 
 
 
$("#btn_confirm_payment").click(function(){   







/// 

 if(document.getElementById('check_data_car_work').value < 1){
	 
	 alert('กรุณาเลือกรถที่เติมน้ำมัน');
	 
	 document.getElementById('check_data_car_work').focus();	 
	 
	 return;
 
 }







 if(document.getElementById('payment_bill_number').value < 1){
	 
	 alert('กรุณากรอกเลขที่บิลน้ำมัน');
	 
	 document.getElementById('payment_bill_number').focus();	 
	 
	 return;
 
 }




 if(document.getElementById('payment_cost').value < 1){
	 
	 alert('กรุณากรอกจำนวนเงิน');
	 
	 document.getElementById('payment_cost').focus();	 
	 
	 return;
 
 }







 
  
  var url_checkin = "go.php?name=pay&file=savedata&id=<?=$GET[id];?>&type=payment&code=<?=$rand?>"; 
 
 $.post(url_checkin,$('#form_checkin').serialize(),function(response){
 $('#send_data_pay').html(response);
 
 
 
   ///// close popup step 1   
  /// $( "#load_data_checkin_popup" ).toggle(); 
   /// $( "#load_data_checkin_popup" ).html('');
	
	
	///// show step 2

////   $( "#sub_see_guest<?=$arr[project][id];?>").show(); 	
 
 ///////
 
   });
   
   
   

   
 
   
   
  });
  
  
 

</script>


<script>
	  
	  var car=<?=$driver_carnumber?>;
	  
	  
	  
	  
 var url_car="go.php?name=pay/car&file=car_now&car="+car;
	  

  $("#load_select_car").load(url_car);
  
  
  
  
	  
		
 $("#btn_select_car").click(function(){
	 
 
	 
  var car=document.getElementById("check_data_car_work").value;
			 
$("#head_full_popup_main_control_select" ).html('รถทั้งหมด');			 
 
 $("#popup_main_control_select" ).toggle();
 
  var url_car="go.php?name=pay/car&file=car_select&id=<?=$_GET[id]?>&car="+car;
 
  $("#load_main_control_select").load(url_car);
 
 
		 });
		
		</script>
        
        