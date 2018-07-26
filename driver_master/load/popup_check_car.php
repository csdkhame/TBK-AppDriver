 
<style>
 .css-full-popup-check-car {
	position: fixed;
	left: 0px;
	top: 0px; 
	bottom:0;
	width: 100%;
	height: 100%;
	z-index: 9999; 
	overflow-y:hidden ; padding:0px; background-color:#333333;
 
}
.back-full-popup-check-car
{ 
font-size:22px;   padding:10px;  color:#FFFFF;  width:100%; background-color:#000000;      
 border-top: 0px solid #000000; margin-bottom: 0px;  
  top:  0; position:fixed;
    z-index: 1; 
 
}
 .modal-checkcar {
 
  text-align: center; height:100%;
  vertical-align: middle; margin-top:50px; overflow:hidden;
  }
 
</style>




<div class="css-full-popup-check-car" id="load_alert_check_car_show" style="display:none; position:fixed;overflow:hidden;"> 
 <div class="back-full-popup-check-car">
 
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" style="padding:5px; padding-top:18px;font-size:18px; color:#FFFFFF; padding:5px  "  class="close_alert_check-car_show_popup">กลับไปเลือกรถที่ใช้งาน</td>
  </tr>
</table></div>
  <div  class="modal-checkcar"><br> 


    <table width="100%"  border="0" cellspacing="2" cellpadding="2">
  <tr>
      <td align="center"  style="font-size:20px; color:#FFFFFF; padding:2px  ">
      
      
<style>
.boxservice-icon {
    border-radius: 50%;  
 
    padding: 5px; 
    width: 250px;
    height: 250px; 
	text-align: justify; color:#3C8DBC;  font-size:24px;  
	border: solid 15px #FF9900; 
	 box-shadow: 0 0 0px 0px #E8E6E6;  
}

.box-button-service { border-radius: 40px ; padding:3px; background-color:#FFF;  border:1px solid #dadada; margin-bottom:8px;  box-shadow: 0 0  5px #E8E6E6; 
	
	
	
	
}



</style>
                
      
      
      
 
      
      <div class="boxservice-icon"> 
      
      
      
      
      <i class="icon-new-uniF10A-9"  style="font-size:180px; color: #FF9900; padding:2px; margin-left:-20px; margin-top:-50px;  "></i>
      
 </div>
      
      <br> 
 
</td>
  </tr>
    <tr>
      <td align="center" style="font-size:25px; color: #FF9900; font-family:Arial, Helvetica, sans-serif; padding:2px;  "><b>คุณยังไม่ได้เลือกรถ</b></td>
  </tr>
    <tr>
   <td align="center" style="font-size:20px; color:#FFFFFF; padding:2px  ">กรุณาเลือกการเริ่มต้นใช้รถ</td>
  </tr>
    <tr>
      <td align="center" style="font-size:18px; color:#FFFFFF; padding:2px  ">ก่อนจัดการงานทุกครั้ง </td>
    </tr>
  </table>
 
 

</div><?  /// include "load/loading/page_main.php" ; ?>
 
</div>

<script>
$('.back-full-popup-check-car').click(function(){   


/// load_alert_check-car_show
  $( "#load_alert_check_car_show" ).toggle();
  
  
  //// เปิดทันที
  
  $( "#load_data_manage_work_show" ).toggle();
 
 	var url_car = "load_page_show.php?name=checkcar&file=popup_checkcar_start&id=<?=$arr[project][id];?>&day=<?=$daywork;?>&carno=<?=$arr[project][carno];?>&cartype=<?= $arr[project][cartype];?>&car_list=<?=$i;?>&sv=<?=$arr[project][server];?>";
/// $( "#load_data_manage_work" ).toggle();
//    $('#load_data_manage_work_show').load('load/loading/page_main.php'); 
		$('#load_data_manage_work_show').load(url_car); 
  
 });

</script>