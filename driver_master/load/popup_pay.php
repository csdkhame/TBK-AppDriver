<style>
body {
    margin : 0;
}

.outer-container {
    position: fixed; margin-left: 0px; margin-top: 0px; display:table; top:0; left:0;  
    width: 100%; /* This could be ANY width */
    height: 100%; /* This could be ANY height */
   z-index:999  ;  
	background: url('images/bg-popup.png');   
}

.inner-container {
    display: table-cell;
    vertical-align: middle;
    text-align: center;
}

.centered-content {
    display: inline-block;
    text-align: left; width:280px;
   
 
    border : 5px solid <?=$maincolor?>;  
	z-index:9 ; background-color:#F6F6F6;   -moz-border-radius:10px;
  -webkit-border-radius:3px;

  height:auto ; padding:5px;  border-radius:25px;
}

.box-pay-icon-popup {
    border-radius: 50%;  
 
    padding: 5px; 
    width: 60px;
    height: 60px; 
	text-align: justify; color:#3C8DBC;  font-size:24px;  
	border: solid 2px #3C8DBC;
	 box-shadow: 0 0 0px 0px #E8E6E6;  
}

.circle-pay-icon-small{
    border-radius: 50%; background-color:<?=$main_color?>; display: block;  
 
    padding: 5px; padding-top:10px;   
    width: 40px;
    height: 40px; 
 
	 color:#FFFFFF;  font-size:20px;  
	border: solid 2px #F6F6F6;
 
    text-align: center;
	vertical-align: middle;   border:1px solid #dadada;
 
}

</style>

 
 
 
  
 
<div id="alert_show_pay" style="display:none;z-index:999">
<div class="outer-container" >
   <div class="inner-container">  <img src="images/close-popup.png" width="50" height="50" alt="" style="margin-top:-45px; position:absolute; margin-left:240px; margin-top:-10px; cursor:pointer" id="close_alert_show_pay"/>
     <div class="centered-content">

 <table width="100%" border="0" cellspacing="3" cellpadding="5">
  <tbody>
    <tr>
      <td width="40">
      
      <div  class="circle-pay-icon-small" style="background-color:<?=$maincolor?>">
      
      <i class="icon-new-uniF121-10 " ></i>
      
      </div>
      
      </td>
      <td height="50"  style="margin-top:0px;border-radius:25px;border :  2px solid #DADADA; padding-left:3PX;"><a  style="color:<?=$maincolor?>; font-size:18px;" id="menu_popup_driver_price_work" ><b>&nbsp;ค่าเที่ยว  เบี้ยเลี้ยง</td>
    </tr>
    <tr style="display:nones">
      <td>
      
      
      <div  class="circle-pay-icon-small" style="background-color:#17B3B2">
      <i class="icon-new-uniF14C-4" ></i>
      
      </div>
      
      </td>
      <td height="50"   style="margin-top:0px;border-radius:25px;border :  2px solid #DADADA; padding-left:3PX;"   ><a  style="color:#17B3B2; font-size:18px;" id="menu_popup_driver_price_all"><b>&nbsp; เงินเดือน โอที</td>
    </tr>
    
        <tr style="display:none">
      <td><i class="icon-new-uniF195 bottom-popup-icon" style="font-size:36px;color:#17B3B2"  ></i></td>
      <td height="50"   style="margin-top:0px;border-radius:25px;border :  2px solid #DADADA; padding-left:3PX;"   ><a  style="color:#17B3B2; font-size:18px;" id="menu_popup_driver_recieve"><b>&nbsp; รับเงิน ฝากเก็บเงิน </td>
    </tr>
    
    
    
    <tr style="display:none">
      <td><div  class="circle-pay-icon-small" style="background-color:#F26522"><center>
                           <i class="car-icon-uniF12F"  ></i>
                            </div></td>
 <td height="50"   style="margin-top:0px;border-radius:25px;border :  2px solid #DADADA; padding-left:3PX;"><a  style="color:#F26522; font-size:18px;" id="menu_popup_driver_pay"><b>&nbsp; เบิกบิลน้ำมัน</b></a>
</td>
    </tr>
    

    
    
  </tbody>
</table>

 
     </div>
   </div>
</div>
 
 </div>
 
 <script>
 
 
 
 $("#menu_popup_driver_price_work").click(function(){   
 
 $( "#load_data_main_popup" ).hide();
 
 $("#head_full_popup_main_menu" ).html('ค่าเที่ยว เบี้ยเลี้ยง');			 
 
 $("#popup_work_main_menu" ).show();
 
 $("#load_work_main_menu").load('go.php?name=pay&file=pay');
  $( "#alert_show_pay" ).hide();
 
 });
 
 
 
 
 
  
 $("#menu_popup_driver_price_all").click(function(){   
 
 $( "#load_data_main_popup" ).hide();
 
 $("#head_full_popup_main_menu" ).html('เงินเดือน โอที');			 
 
 $("#popup_work_main_menu" ).show();
 
 $("#load_work_main_menu").load('go.php?name=pay&file=all');
  $( "#alert_show_pay" ).hide();
 
 });
 
 
 
 
 
 </script>
 
 
 
 
 
<script>
    	$("#close_alert_show_pay").click(function(){   
 
 $( "#alert_show_pay" ).hide();
 
  });

</script>


	 <script>
 
$('#menu_popup_driver_recieve').click(function(){  

 $("#popup_work_main_menu" ).hide();

/// $( "#alert_show_pay" ).hide();
 
///   $( ".bottom_popup" ).slideToggle();
  $( "#load_data_main_popup" ).toggle();
 
 	var url_chat = "load_data_mod.php?name=pay/load&file=main_recieve";
 
 $('#load_data_main_popup').load(url_chat); 
/// $( "#alert_show_pay" ).hide();
 

 
  
 	});
 
 
 
					
 </script> 
 
 
 
	 <script>
 
$('#menu_popup_driver_pay').click(function(){  
// $( "#alert_show_pay" ).hide();
 
///   $( ".bottom_popup" ).slideToggle();
 $( "#load_data_main_popup" ).toggle();
 
 	var url_chat = "load_data_mod.php?name=pay/load&file=main_payment";
 
 $('#load_data_main_popup').load(url_chat); 
 
/// $( "#alert_show_pay" ).hide();
 
 	});
 
 
 
// $('#menu_popup_driver_recieve').click();
 
 // $( "#load_data_main_popup" ).toggle();
 var url_load = "load_data_mod.php?name=pay/load&file=recieve&paytype=other";
 
 //$('#load_data_main_popup').load(url_load); 
 
 
 
					
 </script> 

