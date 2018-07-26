
  <style>
  .textmain_left_menu  {
  font-size:20px; font-family:Arial, Helvetica, sans-serif;
  }
  
    .textsub_left_menu  {
  font-size:16px;  font-family:Arial, Helvetica, sans-serif;
  }
  
      .textsub_left_menu:hover  {
  font-size:16px;  font-family:Arial, Helvetica, sans-serif; color:#FFCC00;
  }
   
  </style>
  
  
  <ul class="sidebar-menu"> 
 
	  <li class="header"  style="padding-left:15px; padding-bottom:5px;padding-top:5px; color:#FFFFFF; font-size:12px; background-color:#14181A "><?=date('Y-m-d');?>&nbsp;&nbsp;เวลา&nbsp;<span id="tm"></span></li>
        <li class="header" style="font-size:14px; color: #999999"><b>เมนูการจัดการ</b></li>
         
         
		       <li  id="menu_home" >
          <a href="index.php" >
            <i class="fa fa-home"></i> <span class="textmain_left_menu">&nbsp;หน้าแรก</span>
      </a>
        </li>
		 
		 
		 
		 
        <li  id="menu_today">
          <a href="?name=today" >
            <i class="fa  fa-automobile"></i> <span class="textmain_left_menu">&nbsp;งานวันนี้</span>
            <span class="pull-right-container">
      
            </span>
          </a>
        </li>
		
		
		
         <li  id="menu_all">
          <a href="?name=all" >
            <i class="fa fa-calculator"></i> <span class="textmain_left_menu">&nbsp;งานทั้งหมด</span>
      </a>
        </li>
		
		
		 <li  id="menu_user" class="treeview">
		         <a href="#" >
              <i class="fa fa-user"></i> <span class="textmain_left_menu">&nbsp;ข้อมูลผู้ใช้งาน</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu"  >
            <li ><a href="?name=user" ><i class="fa fa-circle-o" ></i><span  class="textsub_left_menu">ข้อมูลส่วนตัว</span></a></li>
			<li><a href="?name=user&file=network"><i class="fa fa-circle-o"></i><span  class="textsub_left_menu">ข้อมูลการติดต่อสื่อสาร</span></a></li>
			<li><a href="?name=user&file=phone"><i class="fa fa-circle-o"></i><span  class="textsub_left_menu">เบอร์โทรศัพท์ส่วนตัว</span></a></li>
			<? if(1==0){ ?>
			<li><a href="?name=user&file=pic"><i class="fa fa-circle-o" ></i><span  class="textsub_left_menu">เปลี่ยนภาพประจำตัว</span></a></li>
			<? } ?>
			<li><a href="?name=user&file=password"><i class="fa fa-circle-o"></i><span  class="textsub_left_menu">เปลี่ยนรหัสผ่าน</span></a></li>
			
			<? if(1==0){ ?>
			 <li><a href="?name=user&file=document"><i class="fa fa-circle-o"></i><span  class="textsub_left_menu">ไฟล์เอกสาร</span></a></li>
            
			<li><a href="?name=user&file=network"><i class="fa fa-circle-o"></i><span  class="textsub_left_menu">ข้อมูลการทำงาน</span></a></li>
			
			<? } ?>
          </ul>
        </li>
		
		
		<? if(1==1){ ?>
		
		 
 
 
 
		          
				<li  id="menu_pay" lass="treeview">
 
          <a  >
		  
		  <i class="fa fa-recycle"></i> <span  class="textmain_left_menu">&nbsp;บัญชี การเงิน</span>
		     <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
		  
		   </a> 
		  
		   <ul class="treeview-menu">
            <li><a href="?name=pay&file=bank"><i class="fa fa-circle-o"></i><span  class="textsub_left_menu">บัญชีธนาคาร เงินเดือน</span></a></li>
			<li><a href="?name=pay&file=pay"><i class="fa fa-circle-o"></i><span  class="textsub_left_menu">ค่าเที่ยว เบี้ยเลี้ยง</span></a></li>
			 
		         </ul>
        </li>
		<? } ?>
		
		
		<!------>
		<li  id="menu_pay" lass="treeview">
 
          <a  >
		  
		  <i class="fa fa-recycle"></i> <span  class="textmain_left_menu">&nbsp;โปรแกรมช่วยเหลือ</span>
		     <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
		  
		   </a> 
		  
		   <ul class="treeview-menu">
            <li><a href="https://www.flightradar24.com/data/flights" target="_blank"><i class="fa fa-plane"></i><span  class="textsub_left_menu">เช็คเที่ยวบิน</span></a></li>
			 
			 
		         </ul>
        </li>
		
		<!------>
		
		
		
		
 
						<li  id="menu_logout">
          <a  id="l-logout" >
		  
            <i class="fa fa-share-square" style="color: #FFCC00 "></i> <span class="textmain_left_menu" >&nbsp;ออกจากระบบ</span>
      </a>
        </li>
		
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
		
		
		
		
		
		
		
		
		
		
		