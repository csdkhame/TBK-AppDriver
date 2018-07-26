<style>
body {
    margin : 0;
}

.outer-container {
    position: fixed; margin-left: 0px; margin-top: 0px; display:table; top:0; left:0;  
    width: 100%; /* This could be ANY width */
    height: 100%; /* This could be ANY height */
   z-index:99  ;  
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

  height:auto ; padding:10px;  border-radius:25px;
}

</style>
  
  

 
 
 
<div id="alert_show_pay" style="display:noned;z-index:99   ">
<div class="outer-container" >
   <div class="inner-container">  <img src="images/close-popup.png" width="50" height="50" alt="" style="margin-top:-45px; position:absolute; margin-left:240px; margin-top:-10px; cursor:pointer" id="close_alert_show_pay"/>
     <div class="centered-content">

 <table width="100%" border="0" cellspacing="2" cellpadding="5">
  <tbody>
    <tr>
      <td width="60"><i class="icon-new-uniF121-10 bottom-popup-icon" style="font-size:36px;color:<?=$maincolor?>" ></i></td>
      <td  style="margin-top:0px;border-radius:25px;border :  2px solid #DADADA; padding-left:3PX;"><a  style="color:<?=$maincolor?>; font-size:20px;" id="menu_popup_driver_price_work" href="index.php?name=pay&file=pay"><b>&nbsp;ค่าเที่ยว  เบี้ยเลี้ยง</td>
    </tr>
    
        <tr>
      <td><i class="icon-new-uniF195 bottom-popup-icon" style="font-size:36px;color:#17B3B2"  ></i></td>
      <td   style="margin-top:0px;border-radius:25px;border :  2px solid #DADADA; padding-left:3PX;"   ><a  style="color:#17B3B2; font-size:20px;" id="menu_popup_driver_recieve"><b>&nbsp;รายรับ คนขับรถ</td>
    </tr>
    
    
    
    <tr>
      <td><i class="icon-new-uniF19B bottom-popup-icon" style="font-size:36px;color:#FF0000" ></i></td>
 <td   style="margin-top:0px;border-radius:25px;border :  2px solid #DADADA; padding-left:3PX;"><a  style="color:#FF0000; font-size:20px;" id="menu_popup_driver_pay"><b>&nbsp;รายจ่าย คนขับรถ</b></a>
</td>
    </tr>
    

    
    
  </tbody>
</table>

 
     </div>
   </div>
</div>
 
 </div>
 
<script>
    	$("#close_alert_show_pay").click(function(){   
 
 $( "#alert_show_pay" ).hide();
 
  });

</script>


	 <script>
 
$('#menu_popup_driver_recieve').click(function(){  

/// $( "#alert_show_pay" ).hide();
 
///   $( ".bottom_popup" ).slideToggle();
  $( "#load_data_main_popup" ).toggle();
 
 	var url_chat = "load_data_mod.php?name=pay/load&file=main_recieve";
 
 $('#load_data_main_popup').load(url_chat); 
 
  
 	});
 
 
 
					
 </script> 
 
 
 
	 <script>
 
$('#menu_popup_driver_pay').click(function(){  
// $( "#alert_show_pay" ).hide();
 
///   $( ".bottom_popup" ).slideToggle();
 $( "#load_data_main_popup" ).toggle();
 
 	var url_chat = "load_data_mod.php?name=pay/load&file=pay";
 
 $('#load_data_main_popup').load(url_chat); 
 
 
 
 	});
 
 
 
// $('#menu_popup_driver_recieve').click();
 
 // $( "#load_data_main_popup" ).toggle();
 var url_load = "load_data_mod.php?name=pay/load&file=recieve&paytype=other";
 
 //$('#load_data_main_popup').load(url_load); 
 
 
 
					
 </script> 

