<?php @header ('Content-type: text/html; charset=utf-8'); 
@session_start();
require_once("mainfile.php");
$PHP_SELF = "index.php";
GETMODULE($_GET[name],$_GET[file]);
 //require_once("js/control.php");
?>    
  
  
  
  <script>
    	
  $('.back-full-popup-checkin-button-show').click(function(){   

   $( "#load_data_checkin_popup" ).toggle();
 
    $( "#load_data_checkin_popup" ).html('');

     	});
  </script>
 
  <div class="back-full-popup-mod"> 
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="40"   ><div class="back-full-popup-checkin-button-show" ><i class="fa fa-arrow-circle-left" style="font-size:22px; color:#FFFFFF "></div></i></td>
  <td   ><div style="font-size:18px; color:#FFFFFF " id="head_full_popup_checkin_step"></div></td>
    <td width="50" align="right"   ><div style="font-size:22px; color:#FFFFFF " id="head_full_popup_icon"></div></td>
  </tr>
</table>
</div>


  <div style="top:0px; padding:5px;  overflow: auto; width:100%   "> <br>

 
  <? include ("".$MODPATHFILE.""); ?>
  </div>
 <style>
.bottom_popup
{ 
font-size:22px;   padding:5px;  color:#666666;  width:100%; background-color:#F6F6F6;      
 border-bottom: 0px solid #e5e5e5; margin-bottom: 0px; padding-bottom:5px;
 
position: fixed;
  bottom:  0;
 
 box-shadow: 1px 1px 10px #999999;
  left: 0; z-index:99990;
 
}
.bottom-popup-icon {
font-size:24px; color:#B4B4B4; margin-bottom:1px;

}


.bottom-popup-icon-active {
font-size:24px; color:#3C8DBC;  

}


 </style> 