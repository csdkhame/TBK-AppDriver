<?
$btn_main_w='30';
$btn_main_h='30';
$btn_li_z='22';



?>   

 

<div class="navbar-custom-menu" style=" padding:0px; "  >  
        <ul class="nav navbar-nav" style="margin-top:-5px; padding:0px; ">
		
		  <li class="dropdown notifications-menu" style="margin-top:5px;  ">
 
 
	  </li>



         		  
          <!-- Notifications: style can be found in dropdown.less -->
		 
         
         
         			  <!------>
                      
                      
<? if(1==1){ ?> 
 
		  
 <i  class="dropdown-toggles" data-toggle="dropdown" style="padding:3px">
		  		      <li  class="dropdown notifications-menu" style="margin-top:22px; margin-right:10px; width:34px;   ">  
 <i  id="top_menu_icon_phone" class="icon-new-uniF152-3 " style="font-size:26px; color:#FFFFFF;   "></i>   

        </i>  
		 
		 
		    <ul class="dropdown-menu" role="menu" style="right:3; width:100%; overflow:scroll;   background-color:#ffffff"   onClick="event.stopPropagation();"> 
			 <div style="padding:5px;width:100%; overflow: scroll" id="load_topmenu_phone"> 
 
 </div>
 
  
 </ul>
         
         
  <? } ?> 
         
         
         
         
         
         
   <!------>
 
		  
 <i  class="dropdown-toggles" data-toggle="dropdown" style="padding:3px">
		  		      <li  class="dropdown notifications-menu" style="margin-top:20px; margin-right:5px; width:34px;   ">  
 <i  id="top_menu_icon_share" class="fa  fa-share-alt" style="font-size:30px; color:#FFFFFF "></i>   

        </i>  
		 
		 
		    <ul class="dropdown-menu" role="menu" style="right:3; width:100%;   background-color:#ffffff"   onClick="event.stopPropagation();"> 
			 <div style="padding:5px;width:100%; " id="load_topmenu_share"> 
 
 </div>
 
  
 </ul>
 
 
 	  <!------>
 
		  
 <i class="dropdown-toggles" data-toggle="dropdown" style="padding:3px">

<li   class="dropdown notifications-menu" style="margin-top:24px; margin-right:5px; width:34px;   ">
 <i  id="main_gps_status" style=" font-size:24px; color: #CCCCCC " class="icon-new-uniF139-6 " ></i>  
</i>
		   
		    <ul class="dropdown-menu" role="menu" style="right:3; width:100%;   background-color:#ffffff"   onClick="event.stopPropagation();"> 
			 <div style="padding:2px;width:100%; height:450px;  " id="load_topmenu_gps"> 
 </div>
 
  
        </ul>
		
		   
		   
		   
           
           
	  <!------>
 
 
 
<i  class="dropdown-toggless" data-toggle="dropdown" style="padding:3px">
		  		      <li class="dropdowns notifications-menu" style="margin-top:22px; margin-right:5px;  ">
 <i id="top_menu_icon_setting" class="fa fa-refresh " style="font-size:28px; color:#FFFFFF "></i>  
         </i>
 
 <ul class="dropdown-menu" role="menu" style="right:3; width:100%;  background-color:#ffffff"   onClick="event.stopPropagation();"> 
  <div style="padding:0px;width:100%; " id="load_topmenu_setting"> 

 
 </div>
             
         
		  
		  
		  
        </ul>
		
		
		
		
		
		 
		
		</div>
		
		</div>
 
	      <script>
		  
		  
  $("#top_menu_icon_phone").click(function(){
  //alert('share');
 $('#load_topmenu_phone').load('go.php?name=menu/top&file=phone');
  
  });
  
 $("#top_menu_icon_phone").click();
		  
		  
 
  $("#top_menu_icon_share").click(function(){
  //alert('share');
 $('#load_topmenu_share').load('load/top/network.php');
  
  });
  
$("#top_menu_icon_talk").click(function(){
 ///alert('talk');
 $('#load_topmenu_talk').load('load/top/talk.php');
  
  });
  
  $("#top_menu_icon_setting").click(function(){
 
 window.location.reload()
 
 
/// $('#load_topmenu_setting').load('load/top/setting.php');
  
  });



  
  $("#main_gps_status").click(function(){
 // alert('gps');
 $('#load_topmenu_gps').load('google/check_system.php');
  
  });
  
  
  
</script> 




   <? //  include ("load/loading/page_mod.php");?> 

<style>
 
.outer-loading-mod {
    position: fixed; margin-left: 0px; margin-top: 0px; display:table; top:0; left:0;  
    width: 100%; /* This could be ANY width */
    height: 100%; /* This could be ANY height */
   z-index:9999; background-color: rgba(255, 255, 255, 0.9) !important;
 
}


.outer-loading-mod-icon {
    position: fixed; margin-left: 0px; margin-top: 0px; display:table; top:0; left:0;  
    width: 100%; /* This could be ANY width */
    height: 100%; /* This could be ANY height */
   z-index:9999;  
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


 <script>
 var load_main_mod='<div class="outer-loading-mod"   id="main_index_load_page_mod"><div class="inner-loading"><center><span  class="navload"><i class="fa fa-circle-o-notch fa-spin 4x" style="font-size:40px;   margin-top:10px " ></i></center></span><div style="font-size:14px; color:#333333; font-weight:normal;  margin-top:10px " ><center><span id="navload_topic"> โหลดข้อมูล</span></center></div></div></div>';
</script>

 <script>
 var load_main_mod_icon='<div class="outer-loading-mod-icon"   id="main_index_load_page_mod"><div class="inner-loading"><center><span  class="navload"><i class="fa fa-circle-o-notch fa-spin 4x" style="font-size:40px;   margin-top:10px " ></i></center></span><div style="font-size:14px; color:#333333; font-weight:normal;  margin-top:10px " ><center><span id="navload_topic"> โหลดข้อมูล</span></center></div></div></div>';
</script>

 

 <script>
 var load_main_mod_table='<br><center><span  class="navload"><i class="fa fa-circle-o-notch fa-spin 4x" style="font-size:40px;   margin-top:10px " ></i></center></span><div style="font-size:14px; color:#333333; font-weight:normal;  margin-top:10px " ><center><span id="navload_topic"> โหลดข้อมูล</span></center></div';
 
 
  var load_main_mod_table_icon='<br><center><span  class="navload"><i class="fa fa-circle-o-notch fa-spin 4x" style="font-size:40px;   margin-top:10px " ></i></center></span>';
 
 
  ///var load_main_mod_table='';
</script>
 