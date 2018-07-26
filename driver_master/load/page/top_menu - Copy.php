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
 
		  
		     <i  class="dropdown-toggles" data-toggle="dropdown" style="padding:3px; padding-bottom:9px;border-bottom:  solid 0px #FFF799; width:30px;">
		  		      <li class="dropdown notifications-menu" style="margin-top:20px; margin-right:10px; padding: 0px; width:34px;  ">
 <i id="topmenu_icon_share" class="fa  fa-share-alt" style="font-size:30px; color:#FFFFFF "></i>   
         </i>
		  		    <ul class="dropdown-menu" role="menu" style="right:3; width:100%;   background-color:#ffffff"   onClick="event.stopPropagation();"> 
			 <div style="padding:5px; "> 
  	<? 
 
 include "load/top/network.php" ;
 ?>
 </div>
 
  
        </ul>
		  
		  
		  
 
		  
 <i  class="dropdown-toggles" data-toggle="dropdown" style="padding:3px">
		  		      <li id="topmenu_icon_gps" class="dropdown notifications-menu" style="margin-top:20px; margin-right:5px; width:34px;   ">
 <i  id="main_gps_status"  style=" font-size:30px; color: #CCCCCC " class="fa fa-map-marker " ></i>  
         </i>
		 
		 
		    <ul class="dropdown-menu" role="menu" style="right:3; width:100%;   background-color:#ffffff"   onClick="event.stopPropagation();"> 
			 <div style="padding:5px; " id="load_topmenu_icon_gps"> 
 </div>
 
  
        </ul>
		
		   
		   
		   
		   
 
		  
		     <i  class="dropdown-toggles" data-toggle="dropdown" style="padding:3px">
		  		      <li class="dropdown notifications-menu" style="margin-top:20px; margin-right:5px;width:34px;   ">
 <i id="topmenu_icon_sound" class="fa fa-microphone" style="font-size:30px; color: #FFFFFF "></i>  
         </i>
		  
		  
		     <ul class="dropdown-menu" role="menu" style="right:3; width:100%;   background-color:#ffffff"   onClick="event.stopPropagation();"> 
			 <div style="padding:5px; " id="talk_off" onclick="startDictation()"  ><input type="text" name="q" id="transcript" placeholder="กรุณาพูด" /  style="width:100%; border:none; font-size:18px; text-align:center "><center>
<img src="images/talk/close.png" width="200"  align="absmiddle" id="icon_mic_status"></center>
 </div>
  
        </ul>
		
		
		
 
   <i  class="dropdown-toggles" data-toggle="dropdown" style="padding:3px">
		  		      <li class="dropdown notifications-menu" style="margin-top:20px; margin-right:5px;  ">
 <i id="topmenu_icon_setting" class="fa fa-gear" style="font-size:30px; color:#FFFFFF "></i>  
         </i>
 
		     <ul class="dropdown-menu" role="menu" style="right:3; width:100%;  background-color:#ffffff"   onClick="event.stopPropagation();"> 
 
   <div  class="drop-sub-menu-link"><a  ><i class="fa  fa-user drop-menu-icon"></i> <span  class="drop-sub-menu-span">ข้อมูลส่วนตัว</span></font></b></a></div>
      <a ><div  class="drop-sub-menu-link"><i class="fa  fa-volume-up drop-menu-icon"></i> <span  class="drop-sub-menu-span">ตั้งค่าเสียงเตือน </font></b>  </div></a>
	     <a > <div  class="drop-sub-menu-link"><i class="fa  fa-map-marker drop-menu-icon"> </i><span  class="drop-sub-menu-span">ตรวจสอบตำแหน่ง </font></b></div></a>
		    <a  ><div  class="drop-sub-menu-link-none"><i class="fa  fa-share-square drop-menu-icon"></i> <span  class="drop-sub-menu-span">ออกจากระบบ </font></b></div></a>
 
 
             
         
		  
		  
		  
        </ul>
		
		
		
		
		
		 
		
		</div>
		
		</div>
 
	      <script>
  function startDictation() {

 
    if (window.hasOwnProperty('webkitSpeechRecognition')) {
 
 
      var recognition = new webkitSpeechRecognition();
 
      recognition.continuous = true;
      recognition.interimResults = true;
 
      recognition.lang = "th-TH";
      recognition.start();
      $("#icon_mic_status").attr("src", "images/talk/open.gif");
      recognition.onresult = function(e) {
	 

	
        document.getElementById('transcript').value
                                 = e.results[0][0].transcript;
								// responsiveVoice.speak('ค่าเที่ยววันนี้,150  บาท ,  ขอบคุณค่ะ', 'Thai Female', {rate: 0.9});
								 
								 if( document.getElementById('transcript').value=="ถึงสถานที่รับ" ||  document.getElementById('transcript').value=="สถานที่รับ"  ){								
 $("#dropdown").hide();
 
responsiveVoice.speak('กรุณาทำการยืนยันด้วยค่ะ , ', 'Thai Female', {rate: 0.9});
 
								/// window.location.href = "index.php?name=pay&file=all"; //will redirect to your blog page (an ex: blog.html) 
								} 
								
						 if( document.getElementById('transcript').value=="ยืนยัน" ){								
 $("#dropdown").hide();
 
responsiveVoice.speak('ยืนยันการมาถึงสถานที่รับสำเร็จค่ะ , ', 'Thai Female', {rate: 0.9});
 
								/// window.location.href = "index.php?name=pay&file=all"; //will redirect to your blog page (an ex: blog.html) 
								} 
								 
								        setTimeout(function () {
										
 if( document.getElementById('transcript').value=="เช็คยอดเงิน"){								
 $("#dropdown").hide();
 
responsiveVoice.speak('ค่าเที่ยววันนี้,200 บาท ,  ขอบคุณค่ะ', 'Thai Female', {rate: 0.9});
 
								/// window.location.href = "index.php?name=pay&file=all"; //will redirect to your blog page (an ex: blog.html) 
								}
								if( document.getElementById('transcript').value=="งานวันนี้"){								
								window.location.href = "index.php?name=today"; //will redirect to your blog page (an ex: blog.html)  
//$('#load_data_mod').load('load/page/loading_main.php');
 //$('#load_data_mod').load('load.php?name=today'); 
								}
									if( document.getElementById('transcript').value=="งานทั้งหมด"){								
									
window.location.href = "index.php?name=all"; //will redirect to your blog page (an ex: blog.html) 
									
	//$('#load_data_mod').load('load/page/loading_main.php');
// $('#load_data_mod').load('load.php?name=all'); 
									 
								/// window.location.href = "index.php?name=all"; //will redirect to your blog page (an ex: blog.html) 
								}
								 
 
}, 2000); //w 
								 
								 
								
     ///   recognition.stop();
		  $("#icon_mic_status").attr("src", "images/talk/close.png");
    //    document.getElementById('labnol').submit();
      };
 
      recognition.onerror = function(e) {
	  
	  alert('55');
	  
    ///    recognition.stop();
		  
      }

    } 
	

	
	
  }
  
  
  $("#topmenu_icon_gps").click(function(){
 $('#load_topmenu_icon_gps').load('google/check_system.php');
  
  });
  
  
  
</script> 




  