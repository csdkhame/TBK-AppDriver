
  <style>
  .textmain_left_menu  {
  font-size:20px; font-family:Arial, Helvetica, sans-serif;color:#666666;
  }
  
    .textsub_left_menu  {
  font-size:16px;  font-family:Arial, Helvetica, sans-serif;
  }
  
      .textsub_left_menu:hover  {
  font-size:16px;  font-family:Arial, Helvetica, sans-serif; color:#3C8DBC;
  }
  .l-menu-li {
  
  border-bottom:  solid 1px #999999;
  }
  
    .l-menu-li-icon { 
	font-size:24px; padding-right:30px; color:#3C8DBC;
   }
   
  </style>
  
   <section class="sidebar" > 
  <ul class="sidebar-menu"> 
 
 
 
 
		 
        <li  id="menu_today">
          <a href="?name=all" >
            <i class="fa  fa-clock-o l-menu-li-icon"></i> <span class="textmain_left_menu">&nbsp;งานวันนี้</span>
            <span class="pull-right-container">
      
            </span>
          </a>
        </li>
		
		
        
        
        
		
         <li  id="menu_all" style="display:none">
          <a href="?name=all" >
            <i class="fa fa-car l-menu-li-icon"></i> <span class="textmain_left_menu">&nbsp;งานทั้งหมด</span>
      </a>
        </li>
		
	 
 
		
 
		
		
		
		 <script>
 
$('#menu_chat').click(function(){  
  
 
  $( "#load_data_manage_work" ).toggle(); 
 
	
 var url_chat_main = "load_page_chat.php?name=livechat/all&file=all_contact&driverid=<?=$driver_id?>&chat_from=driver&lang=th";
	
 
  

 
    $('#load_data_manage_work').load('load/loading/page_main.php'); 
	 $('#load_data_manage_work').load(url_chat_main); 
 
 
     	});
 
					
					</script> 
 
		
  	 <script>
 
$('#menu_chat_user').click(function(){  
 
 
  $( "#load_data_manage_work" ).toggle(); 
 
	
 var url_chat_main = "load_page_chat.php?name=livechat/all&file=all_user&driverid=<?=$driver_id?>&chat_from=driver&lang=th";
	
 
  

 
    $('#load_data_manage_work').load('load/loading/page_main.php'); 
	 $('#load_data_manage_work').load(url_chat_main); 
 
 
 
 	});
 
					
 </script> 
		
  
   
		
		 <li  id="menu_user" class="treeview" style="display:noneห">
		         <a href="#" >
             <i class="fa fa-cogs l-menu-li-icon"></i> <span class="textmain_left_menu">&nbsp;ข้อมูลรถ/แจ้งซ่อม</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu"  >
		   <li ><a href="?name=checkcar&file=data" ><i class="fa fa-circle-o" ></i><span  class="textsub_left_menu">ข้อมูลรถ</span></a></li>
      
 <li><a href="?name=checkcar&file=repair"><i class="fa fa-circle-o"></i><span  class="textsub_left_menu">แจ้งซ่อมรถ</span></a></li>
	 </a></li>
      <li><a href="?name=checkcar&file=repair_his"><i class="fa fa-circle-o"></i><span  class="textsub_left_menu">ประวัติแจ้งซ่อมรถ</span></a></li>
	 </a></li>
 
 
          </ul>
        </li>
		
		
		
		
		
		
		
		
		 <li  id="menu_user" class="treeview">
		         <a href="#" >
              <i class="fa fa-user l-menu-li-icon"></i> <span class="textmain_left_menu">&nbsp;ข้อมูลผู้ใช้งาน</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu"  >
          
          
          
          
          
          
            <li ><a href="?name=user" ><i class="fa fa-circle-o" ></i><span  class="textsub_left_menu">ข้อมูลส่วนตัว</span></a></li>
			
			<li ><a href="?name=user&file=job" ><i class="fa fa-circle-o" ></i><span  class="textsub_left_menu">บัตรประชาชน/ใบขับขี่</span></a></li>
			
 
 
			<li><a href="?name=user&file=password"><i class="fa fa-circle-o"></i><span  class="textsub_left_menu">เปลี่ยนรหัสผ่าน</span></a></li>
	 
          </ul>
        </li>
        
 
        
		
        
                
  <li  id="menu_user_network">
  <a href="?name=user&file=network" >
 <i class="fa fa-feed l-menu-li-icon"></i> <span class="textmain_left_menu">&nbsp;ข้อมูลติดต่ออนไลน์</span>
 </a>
        </li>    
        
        
        
  <li  id="menu_place">
  <a href="?name=place" >
 <i class="car-icon-uniF12F l-menu-li-icon" style="margin-left:-6px; padding-right:2px;"></i> <span class="textmain_left_menu">&nbsp;ปั้มน้ำมัน/อู่ซ่อมรถ</span> 
 <?php
 $time_now_menu = time();
 if($time_now_menu < 1530254764){
 	?>
 	<img src="images/update.gif" align="absmiddle" />
 	<?php
 }
 ?>
 
 </a>
        </li> 
        
        
        

        
         
        
        
        
		
		<? if(1==1){ ?>
		
		 
 
 
 
		          
 <li  id="menu_pay" lass="treeview">
 
          <a  >
		  
		  <i class="icon-new-uniF10E-13 l-menu-li-icon" style="margin-left:-6px; padding-right:2px;"></i> <span  class="textmain_left_menu">&nbsp;บัญชี การเงิน</span>
		     <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
		  
		   </a> 
		  
		   <ul class="treeview-menu">
           			<li><a id="btn_menu_pay_pay"><i class="fa fa-circle-o"></i><span  class="textsub_left_menu">ค่าเที่ยว เบี้ยเลี้ยง</span></a></li>
            <li><a href="?name=pay&file=bank"><i class="fa fa-circle-o"></i><span  class="textsub_left_menu">บัญชีธนาคาร</span></a></li>

			<li><a href="?name=pay&file=all"><i class="fa fa-circle-o"></i><span  class="textsub_left_menu">เงินเดือน ค่าโอที</span></a></li>
			 
		         </ul>
        </li>
		<? } ?>
		
		
        
        		
<script>
		
 $("#btn_menu_pay_pay").click(function(){
			 
$("#head_full_popup_main_menu" ).html('ค่าเที่ยว เบี้ยเลี้ยง');			 
 
 $("#popup_work_main_menu" ).toggle();
 
  $("#load_work_main_menu").load('go.php?name=pay&file=pay');
 
 
		 });
		
		</script>
        
        
		<li  id="menu_phone" lass="treeview">
 
          <a  >
		  
		  <i class="icon-new-uniF_ultimate159 l-menu-li-icon" style="margin-left:-6px; padding-right:2px;" ></i> <span  class="textmain_left_menu">&nbsp;สมุดโทรศัพท์</span>
		     <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
		  
		   </a> 
		  
		   <ul class="treeview-menu">
            <li><a href="?name=phone&file=phone" id="menu_phone_phone"><i class="fa fa-circle-o"></i><span  class="textsub_left_menu">เบอร์โทรศัพท์ส่วนตัว</span></a></li>
			<li><a   id="btn_menu_phone_driver"><i class="fa fa-circle-o"></i><span  class="textsub_left_menu">เบอร์โทรศัพท์คนขับรถ</span></a></li>
 
			 
		         </ul>
        </li>
		
		<script>
		
		 $("#btn_menu_phone_driver").click(function(){
			 
$("#head_full_popup_main_menu" ).html('เบอร์โทรศัพท์คนขับรถ');			 

 
 
 $("#popup_work_main_menu" ).toggle();
 
  $("#load_work_main_menu").load('go.php?name=phone&file=driver');
 
 
		 });
		
		</script>
		
		
        
        
		
		 
		
 
						<li  id="menu_logout">
          <a  id="l-logout" >
		  
            <i class=" icon-new-uniF182 l-menu-li-icon" style="margin-left:-6px; padding-right:2px;" ></i> <span class="textmain_left_menu" >&nbsp;ออกจากระบบ</span>
      </a>
        </li>
		<br>
<br>
<br>
<br>
<br>
<br>
 <br>
<br>
<br>
<br>
<br>
 
 

		<script>
		
		$("#l-logout").click(function(){ 
 
  
	   swal({
		title: "<font style='font-size:28px'><b> คุณแน่ใจหรือไม่",
		text: "ว่าต้องการออกจากระบบ",
		type: "error",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'ใช่',
		cancelButtonText: "ไม่ใช่",
		closeOnConfirm: true,
		closeOnCancel: true,
		html: true
	},
	function(isConfirm){
    if (isConfirm){
	 
	
swal("ออกจากระบบสำเร็จ", "success");

window.location = "signin.php";;
 
    
   
	//  alert('dd');
    } else {
      swal("Cancelled", "", "error");
    }
	});
	   
	    

});
		
		
		
		</script>
		
		
		
		
		
		
		
		
		
		
		