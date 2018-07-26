<?php @header ('Content-type: text/html; charset=utf-8'); 
@session_start();
require_once("mainfile.php");
$PHP_SELF = "index.php";
GETMODULE($_GET[name],$_GET[file]);
 //require_once("js/control.php");
?>    
 <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css?v=<?=time()?>">
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bootstrap/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bootstrap/css/ionicons.min.css">
  <!-- Theme style -->

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.css?v=<?=time()?>">
  
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css?v=<?=time()?>">
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bootstrap/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bootstrap/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css?v=<?=time()?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.css?v=<?=time()?>">
  
   

 
    <link href="docs/css/highlight.css" rel="stylesheet">
    <link href="dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet">

 
    <link href="docs/css/highlight.css" rel="stylesheet">
    <link href="dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet">
 
  
   
 
  <script>
    	
  $('.back-full-popup-button-show').click(function(){   
 
   $( "#load_data_manage_work_show" ).toggle();
 
    $( "#load_data_manage_work_show" ).html('');

     	});
  </script>
 
  <div class="back-full-popup"> 
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="40"   ><div class="back-full-popup-button-show" ><i class="fa fa-arrow-circle-left" style="font-size:22px; color:#FFFFFF "></div></i></td>
  <td   ><div style="font-size:18px; color:#FFFFFF " id="head_full_popup"></div></td>
    <td width="50" align="right"   ><div style="font-size:22px; color:#FFFFFF " id="head_full_popup_icon"></div></td>
  </tr>
</table>
</div>


  <div style="top:0px; padding:10px; overflow: auto; width:100%   ">  <br>

 
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
 
 
<style>
.popup-open {
    overflow: hidden;
} 
.css-small-popup {
    /* left: 0px; */
    /* right: 0px; */
    /* bottom: 0px; */
    /*top: 50px;*/
   /* margin-top: 95px;
    margin-left: 30px;*/
/*    margin: 40px;*/
	  margin: 0% auto;
    position : relative;
    width: 100%;
    height: auto%;
    z-index: 9999;
    /* padding: 30px; */
    background-color: #fff;
    border: 2px solid #cccccc;
    border-radius: 10px;
}
.background-smal-popup{
	width: 100%;
	height: 100%;
	z-index: 9990;
	background-color: rgba(0, 0, 0, 0.45);
	top: 0px;
    left: 0px;
    right: 0px;
    bottom: 0px;
}
.close-small-popup{
	position : relative;
/*	right : 50px;
	top : 95px;*/
	z-index : 10000;
	color : #000000;
	width: 100%;
	/*margin-left: -10px;
	margin-top: 5px;*/
}
.css-full-popup2{
	position: fixed;
	width: 100%;
	z-index: 9999;
	background-color: #ffff;
	height: 100%;
/*	margin-top: 48px;*/
}
.btn_select{
		width: 100%; 
		border: 1px solid #ddd; 
		padding: 13px; 
		margin-top: 0px; 
		border-radius: 20px;
		background-color: #fff;
		box-shadow: 1px 1px 5px #ddd;
		background-color: #3b5998;
		color: #ffff;
	}
</style>


<div class="background-smal-popup" id="load_mod_popup_select_dv" style="position: fixed; overflow: auto;display: none;padding:15px;">

<div class="css-small-popup">
<div class="close-small-popup"><i id="close-small-popup" class="fa fa-close" style="font-size:26px; color:#333; "></i></div>
	  <div id="body_load_select_pv" style="overflow: auto;margin-top:45px; ">
	 </div>
	 
</div>



</div>
<script>
$('#close-small-popup').click(function(){
	console.log(123);
	$('#load_mod_popup_select_dv').hide();
});

$('.close-craftpip-popup').click(function(){
	console.log(123);
	$('.mobileSelect-container').hide();
});

</script>



<link rel="stylesheet" href="js/craftpip/css/bootstrap-fullscreen-select.css" />

<div class="mobileSelect-container white" style="display: none;" id="popup_craftpip_1">
   <div class="" style="transition: all 0.4s;top: 0px;left: 0px;right: 0px;bottom: 0px;">
  <div class="close-small-popup" align="right" style="right:10px;margin-top: 5px;"><i  class="fa fa-close close-craftpip-popup" style="font-size:26px; color:#333; "></i></div>
      <div class="mobileSelect-title" style="height: 100px;">
      
         <table width="100%">
            <tbody>
               <tr>
                  <td width="110"><span style="font-size:20px;">เลือกบริษัท</span></td>
                  <td align="right" valign="top"> </td>
               </tr>
                <tr>
               		<td><input style="border-radius:15px;margin-top:5px;" type="text" class="form-control search_com_box" placeholder="ค้นหาจากชื่อบริษัท .." style="margin-top:5px;" onkeyup='filterNameCom();'  /></td>
               </tr>
            </tbody>
         </table>
      </div>
      <div class="list-container" id="list_popup_switch_1" style="margin-bottom:0px !important;margin-top:100px;-webkit-overflow-scrolling: touch;"></div>
      <!--<div class="mobileSelect-buttons"><a href="#" class="mobileSelect-savebtn">ตกลง</a><a href="#" class="mobileSelect-cancelbtn">ยกเลิก</a></div>-->
   </div>
</div>

<div class="mobileSelect-container white" style="display: none;" id="popup_craftpip_2">
   <div class="" style="transition: all 0.4s;top: 0px;left: 0px;right: 0px;bottom: 0px;">
  <div class="close-small-popup" align="right" style="right:13px;margin-top: 7px;"><i class="fa fa-close close-craftpip-popup" style="font-size:30px; color:#333; "></i></div>
      <div class="mobileSelect-title" style="height: 145px;">
      
         <table width="100%">
            <tbody>
               <tr>
                  <td width="110"><span style="font-size:20px;">เลือกคนขับ</span></td>
                  <td align="right" valign="top"> </td>
               </tr>
               <tr>
               		<td>
               		<input style="border-radius:15px;margin-top:5px;" type="text" class="form-control search_dv_box" placeholder="ค้นหาจาก ID คนขับ เช่น 000551" style="margin-top:5px;" onkeyup='filterIdDriver();'  />
               		</td>
               </tr>
                <tr>
               		<td>
               		<input style="border-radius:15px;margin-top:5px;" type="text" class="form-control search_dv_box_name" placeholder="ค้นหาจากชื่อคนขับ" style="margin-top:5px;" onkeyup='filterNameDriver();'  />
               		</td>
               </tr>
            </tbody>
         </table>
      </div>
      <div class="list-container" id="list_popup_switch_2" style="margin-bottom:60px !important;margin-top:145px;-webkit-overflow-scrolling: touch;"></div>
      <!--<div class="mobileSelect-buttons"><a href="#" class="mobileSelect-savebtn">ตกลง</a><a href="#" class="mobileSelect-cancelbtn">ยกเลิก</a></div>-->
   </div>
</div>