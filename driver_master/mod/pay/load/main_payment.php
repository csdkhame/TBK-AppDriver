 <style>
 
.outer-loading-mod {
    position: fixed; margin-left: 0px; margin-top: 0px; display:table; top:0; left:0;  
    width: 100%; /* This could be ANY width */
    height: 100%; /* This could be ANY height */
   z-index:9999; background-color: rgba(255, 255, 255, 0.9) !important;
 
}

.inner-loading {
    display: table-cell;
    vertical-align: middle;
    text-align: center;
	    width: 100%; /* This could be ANY width */
    height: 100%; /* This could be ANY height */
	background:none;    
}

 .navload {
  display: block;
  background-color: #f7f7f7;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#f7f7f7), to(#e7e7e7));
  background-image: -webkit-linear-gradient(top, #f7f7f7, #e7e7e7); 
  background-image: -moz-linear-gradient(top, #f7f7f7, #e7e7e7); 
  background-image: -ms-linear-gradient(top, #f7f7f7, #e7e7e7); 
  background-image: -o-linear-gradient(top, #f7f7f7, #e7e7e7); 
color: #3C8DBC;
 
  width:  60px;
  height: 60px;
 
  text-align: center;
 
  border-radius: 50%;
  box-shadow: 0px 3px 8px #aaa, inset 0px 2px 3px #fff;
}


</style>

<style>
  
 @-webkit-keyframes DIV-TEXT {
    0%   { color: #FF0000 }
	
    50%  { color: #0079C8 }
    100% { color: #FF0000 }
 
}

 @-moz-keyframes DIV-TEXT {
 
    0%   { color: #FF0000 }
    50%  { color: #0079C8 }
    100% { color: #FF0000 }
 
}




.text-alert {
	 
 
   -webkit-transition: all 3s;
	   -moz-animation: DIV-TEXT 1s infinite;
	  
      -webkit-transition: all 3s;
    -webkit-animation: DIV-TEXT 1s infinite;
}

 </style>
 <script>
 var load_main_mod='<div class="outer-loading-mod"   id="main_index_load_page_mod"><div class="inner-loading"><center><span  class="navload"><i class="fa fa-circle-o-notch fa-spin 4x" style="font-size:40px;   margin-top:10px " ></i></center></span><div style="font-size:14px; color:#333333; font-weight:normal;  margin-top:10px " ><center><span id="navload_topic"> โหลดข้อมูล</span></center></div></div></div>';
</script>


 <script>
 var load_main_mod_table='<br><center><span  class="navload"><i class="fa fa-circle-o-notch fa-spin 4x" style="font-size:40px;   margin-top:10px " ></i></center></span><div style="font-size:14px; color:#333333; font-weight:normal;  margin-top:10px " ><center><span id="navload_topic"> โหลดข้อมูล</span></center></div';
 
 
  ///var load_main_mod_table='';
</script>
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

 <br>

<form id="form_checkin"    action="load_small.php?name=action&file=send_guest_data&id=<?=$arr[project][id];?>&folder=<?=$arr[project][invoice];?>&photo=topoint" method="post"  enctype="multipart/form-data"   target="popupuploadframe"  >
 

<script>
 $('#head_full_popup').html("รายการเบิก จ่าย ออกบิล"); 
 

</script>


 



<div  id="popup_topoint_<?=$arr[project][id];?>"  >
  <div   >
    <table width="100%" border="0" cellspacing="2" cellpadding="2">
        <tbody>
                    <tr>
                      <td>
                      
                      

                      
 <table width="100%" border="0" cellspacing="2" cellpadding="2"  class="div-box-pay"  id="btn_driver_payment_oil_bill"  data_type="oil_bill">
    <tbody>
      <tr>
        <td width="40"> <div  class="circle-pay-icon" style="background-color:#34A0E7"><div style="margin-top:5px;" ><i class="car-icon-uniF12E"  ></i></div></div></td>
        <td align="left" class="font_18"><strong>เบิกบิลน้ำมันใหม่</strong><br>
          <font  class="font_14" style="color:#666666"> 
        
        กรุณาแจ้งยอดเงิน ระบุรถที่เติมน้ำมัน<br>
        
        
        และถ่ายภาพบิลน้ำมันที่เขียนเสร็จแล้ว</font>
</td>
      </tr>
    </tbody>
  </table>
  
  
  
  
  
  </td>
  
  
  
                      
                    </tr>
                  </tbody>
                </table>
                <table width="100%" border="0" cellspacing="2" cellpadding="2">
                  <tbody>
                    <tr>
                      <td> 
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td> 
    
    <div  style="border: 1px solid #dadada; width:100%; border-radius: 15px; margin-bottom:10px; padding:10px;">
        
      <a id="btn_select_car" style="font-size:20px; color:#333333"><center><b>ประวัติการเบิกบิลน้ำมัน
      
    
      
    <div id="load_select_car"></div>
 </a>
    
	<table width="100%"  border="0" cellspacing="2" cellpadding="2" style="display:nones">
        <tr>
          <td width="50" style="font-size:16px "><strong>เดือน  </strong></td>
          <td width="70"><select name="data_m" id="data_m" style="width:60px; font-size:20px ">
            <?
				   for($ii=1;$ii<13;$ii++){
				   if( $ii < 10){ $ii = '0'.$ii; }
				  ?>
            <option value="<?=$ii;?>" <?  if(date('m')== $ii){ echo "selected=selected";} ?> >
            <?=$ii;?>
            </option>
            <?  } ?>
          </select> </td>
          <td width="50"><strong>พ.ศ.   </strong></td>
          <td width="80"><select name="data_y" id="data_y"  style="width:70px; font-size:20px ">
            <?
				   for($ii=2018;$ii< date('Y')+1;$ii++){
 
				  ?>
            <option value="<?=$ii;?>" <?  if(date('Y')== $ii){ echo "selected=selected";} ?> >
            <?=$ii+543;?>
            </option>
            <?  } ?>
          </select></td>
          <td valign="top"><button type="button" id="btn_form" class="btn btn-block btn-primary btn-fx"  style="width:60px; height:30px; ">ค้นหา</button></td>
        </tr>
      </table>
      
      
      </div >
      
      
      
	
 <br>

	
	<div  id="load_payment"  style="display:nones " > ssss
 
</div></td>
  </tr>
  <tr>
    <td> 
 <br>



 
<script type="text/javascript">
// $('#date_report').datepick({altField: '#star_cal' 	, dateFormat: 'yyyy-mm-dd' 	, showTrigger: '#calImgInx' }); 
$("#btn_form").click(function(){
	
 
 
	//$('.loader').show();
	var year = $("#data_y").val();
	var month = $("#data_m").val();
  
  
  
var url_place_th = "go.php?name=pay/history&file=payment&server=th&year="+$("#data_y").val()+"&month="+$("#data_m").val()+"";  
  

	
 
	  $('#load_payment').html(load_main_mod_table);
 
 $('#load_payment').load(url_place_th); 
 
 
	/*
	
	//// cn
		var url_place_cn = "go.php?name=load/all&file=all&server=cn&day="+$("#date_report").val()+"";
	$('#load_cn').show();
	$('#load_cn').load('load/page/loading.php');
	$('#load_cn').load(url_place_cn); 
	*/
});
$( document ).ready(function() {
///var url_place_th = "go.php?name=pay/history&file=payment_new";
	 
	///$('#load_payment').load('load/page/loading.php');
	///$('#load_payment').load(url_place_th); 
	});
	
 
 
 
 
 $( "#data_m" ).change(function() {
 
var url_place_th = "go.php?name=pay/history&file=payment&server=th&year="+$("#data_y").val()+"&month="+$("#data_m").val()+"";  
  
 
	 
	  $('#load_payment').html(load_main_mod_table);
 
 $('#load_payment').load(url_place_th); 
 
 });
	/*
	//// cn
		var url_place_cn = "go.php?name=load/all&file=all&server=cn&day="+$("#date_report").val()+"";
	$('#load_cn').show();
	$('#load_cn').load('load/page/loading.php');
	$('#load_cn').load(url_place_cn); 
	//$('.loader').show();


*/

 




  $("#btn_form").click();   
	
 
	
	
	
	
</script></td>
  </tr>
</table>         
 
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                  </tbody>
                </table>
 
 
 
</form>


	 <script>
 
$('.div-box-pay').click(function(){  
 
 var type=$(this).attr("data_type");
 
/// $( "#load_data_main_popup" ).toggle();
 
var url_load = "load_data_mod.php?name=pay/load&file=payment&paytype="+type;
 
 $('#load_data_main_popup').load(url_load); 
 
 ///alert(url_load);
 
 	});
 
 
 
					
 </script> 
 

