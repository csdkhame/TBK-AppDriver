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





 
.div-box-pay {
border-radius: 30px ; padding:0px; background-color:#FFF;  border:2px solid #dadada; margin-bottom:0px; 
 box-shadow: 0 0  5px 0px #E8E6E6; margin-top:8px;  

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


 .div-box-pay:hover {
 
 border:2px solid #3C8DBC; background-color:#F6F6F6;
 
}
 
.div-box-pay:active {
border:2px solid #3C8DBC;
  
 
}
 
 

 
</style> 

 
<form id="form_checkin"    action="load_small.php?name=action&file=send_guest_data&id=<?=$arr[project][id];?>&folder=<?=$arr[project][invoice];?>&photo=topoint" method="post"  enctype="multipart/form-data"   target="popupuploadframe"  >
 

<script>
 $('#head_full_popup').html("รายรับคนขับรถ"); 
 

</script>


 



<div  id="popup_topoint_<?=$arr[project][id];?>"  >
  <div   ><br>

 
 
 
                <table width="100%" border="0" cellspacing="2" cellpadding="2">
                  <tbody>
                    <tr>
      
                       
                    </tr>
                    <tr>
                      <td>
                      
                      

                      
 <table width="100%" border="0" cellspacing="2" cellpadding="2"  class="div-box-pay"  id="btn_driver_recieve_deposit"  data_type="deposit">
    <tbody>
      <tr>
        <td width="40"> <div  class="circle-pay-icon" style="background-color:#34A0E7"><i class="icon-new-uniF12D-13"  ></i></div></td>
        <td align="left" class="font_18"><strong>ฝากเก็บเงินลูกค้า</strong><br><font  class="font_14" style="color:#666666"> 
        
        กรุณาแจ้งยอดเงินที่ได้รับจากแขก<br>
        
        
        หากวอเชอร์ระบุว่าให้เก็บเงินสดกับแขก</font>
</td>
      </tr>
    </tbody>
  </table>
  
  
  
  
  
  </td>
  
  
  
                      
                    </tr>
                    <tr>
                      <td><table width="100%" border="0" cellspacing="2" cellpadding="2"  class="div-box-pay" id="btn_driver_recieve_car_over"  data_type="car_over" >
                        <tbody>
                          <tr>
                            <td width="40"><div  class="circle-pay-icon" style="background-color:#F7941D"><i class="icon-new-uniF13C"  ></i></div></td>
                            <td align="left" class="font_18"><strong>ใช้ชั่วโมงรถเพิ่ม</strong><br>
                              <font  class="font_14" style="color:#666666">เก็บเงินสดกับแขกตามที่ฝ่ายจัดรถแจ้ง
                              
                              <br>แจ้งยอดเงินและชั่วโมงที่ใช้รถเกินเวลา
                              
                              </font></td>
                          </tr>
                        </tbody>
                      </table>
                      
                      
                      
                      
                      </td>
                    </tr>
                    <tr>
                      <td><table width="100%" border="0" cellspacing="2" cellpadding="2"  class="div-box-pay" id="btn_driver_recieve_food"  data_type="food" >
    <tbody>
      <tr>
        <td width="40"> <div  class="circle-pay-icon" style="background-color:#17B3B2"><i class="icon-new-uniF1C1-1"  ></i></div></td>
        <td align="left" class="font_18"><strong>ร้านอาหาร</strong><br><font  class="font_14" style="color:#666666">
        
        
        
        
        กรุณาแจ้งรายรับต่อหัว ค่าจอดรถ <br>หรือคอมมิชชั่นจากยอดที่แขกใช้บริการ</font>
</td>
      </tr>
    </tbody>
  </table>
  
  
  
  
  
  </td>
  
 
                    </tr>
                    <tr>
                      <td>
                      
                      <table width="100%" border="0" cellspacing="2" cellpadding="2"  class="div-box-pay"  id="btn_driver_recieve_shop" data_type="shop" >
                        <tbody>
                          <tr>
                            <td width="40"><div  class="circle-pay-icon" style="background-color:#A67C52"><i class="fa fa-cart-plus"  ></i></div></td>
                            <td align="left" class="font_18"><strong>ร้านค้า ช็อปปิ้ง</strong><br>
                              <font  class="font_14" style="color:#666666">กรุณาแจ้งรายรับต่อหัว ค่าจอดรถ <br>
                            หรือคอมมิชชั่นจากยอดที่แขกใช้บริการ</font></td>
                          </tr>
                        </tbody>
                      </table>
                      </td>
                    </tr>
                    <tr>
                      
                      
                      <td><table width="100%" border="0" cellspacing="2" cellpadding="2"  class="div-box-pay"  id="btn_driver_recieve_tour"  data_type="shop">
                        <tbody>
                          <tr>
                            <td width="40"><div  class="circle-pay-icon" style="background-color:#8DC63F"><i class="icon-new-uniF136"  ></i></div></td>
                            <td align="left" class="font_18"><strong>ท่องเที่ยวทั่วไป</strong><br>
                              <font  class="font_14" style="color:#666666">กรุณาแจ้งรายรับต่อหัว ค่าจอดรถ <br>
                            หรือคอมมิชชั่นจากยอดที่แขกใช้บริการ</font></td>
                          </tr>
                        </tbody>
                      </table></td>
                      
                      
                      
                    </tr>
                    <tr>
                      <td><table width="100%" border="0" cellspacing="2" cellpadding="2"  class="div-box-pay"  id="btn_driver_recieve_other"  data_type="other">
                        <tbody>
                          <tr>
                            <td width="40"><div  class="circle-pay-icon" style="background-color:#F06EAA"><i class="icon-new-uniF121-10" style="margin-left:-2px; top:10px;"  ></i></div></td>
                            <td align="left" class="font_18"><strong>รายรับอื่นๆ</strong><br>
                              <font  class="font_14" style="color:#666666">กรุณาแจ้งรายรับทั้งหมด<br>
                            และระบุรายละเอียดเกี่ยวกับการรับเงิน</font></td>
                          </tr>
                        </tbody>
                      </table></td>
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
 
 
</div>	

 
</form>


	 <script>
 
$('.div-box-pay').click(function(){  
 
 var type=$(this).attr("data_type");
 
/// $( "#load_data_main_popup" ).toggle();
 
var url_load = "load_data_mod.php?name=pay/load&file=recieve&paytype="+type;
 
 $('#load_data_main_popup').load(url_load); 
 
 ///alert(url_load);
 
 	});
 
 
 
					
 </script> 
 

