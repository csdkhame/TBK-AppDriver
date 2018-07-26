 <div id="check_data_update" style="display:none"></div>
<div id="check_receive_work" style="display:nones"></div>
<div id="check_send_work" style="display:nones"></div>

<div id="check_new_work" style="display:nones"></div>

<div id="check_cancel_work" style="display:nones"></div>

<div id="check_update_new_work" style="display:nones"></div>

<div id="check_update_work" style="display:nones"></div>




  <input type="hidden" name="check_data_status_change_new_work" id="check_data_status_change_new_work" value="0"  style="width:100px " />
  
<input type="hidden" name="check_data_status_change_new_work_id" id="check_data_status_change_new_work_id" value="0"  style="width:100px " />

 
 
  <input type="hidden" name="check_data_status_send_new_work" id="check_data_status_send_new_work" value="0"  style="width:100px " />
  
<input type="hidden" name="check_data_status_send_new_work_id" id="check_data_status_send_new_work_id" value="0"  style="width:100px " />




<input type="hidden" name="check_data_driver_new_work" id="check_data_driver_new_work" value="0"  style="width:100px " />
<input type="hidden" name="check_data_driver_new_work_id" id="check_data_driver_new_work_id" value="0"  style="width:100px " />


<input type="hidden" name="check_data_driver_cancel_work" id="check_data_driver_cancel_work" value="0"  style="width:100px " />

<input type="hidden" name="check_data_driver_cancel_work_id" id="check_data_driver_cancel_work_id" value="0"  style="width:100px " />





<input type="hidden" name="sound_alert_change_new_new" id="sound_alert_change_new_new" value="0"  style="width:100px " />

<input type="hidden" name="sound_alert_change_new_to_ok" id="sound_alert_change_new_to_ok" value="0"  style="width:100px " />

<input type="hidden" name="sound_alert_change_new_to_reject" id="sound_alert_change_new_to_reject" value="0"  style="width:100px " />

 
	 
<script>
 var url_check_data_update = "go.php?name=load/update&file=data";
 $('#check_data_update').load(url_check_data_update);

 setInterval(function() {
 var url_check_data_update = "go.php?name=load/update&file=data";
 $('#check_data_update').load(url_check_data_update);


}, 60000); // 60000 milliseconds = one minute

	</script>
	<script>
 setInterval(function() {
 var url_check_data_time = "load_blank.php?name=load/update&file=time&driver=<?=$driver_id?>";
 url_check_data_time =url_check_data_time+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
 url_check_data_time =url_check_data_time+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
   
 $('#load_data_time').load(url_check_data_time);
 
  
}, 1000); // 60000 milliseconds = one minute
 
	</script>
    
    
    
	<script>	
//// เช็คงานเข้า
 var url_check_work_change = "go.php?name=lab/check/update&file=receive_work&driver=<?=$driver_id?>";  
  $('#check_receive_work').load(url_check_work_change);
	
 setInterval(function() {
 var url_check_work_change = "go.php?name=lab/check/update&file=receive_work&driver=<?=$driver_id?>";  
 $('#check_receive_work').load(url_check_work_change);

}, 1000); 
	</script>
    
    
     
 <script>	
//// เช็คส่งงาน
 var url_check_work_send = "go.php?name=lab/check/update&file=send_work&driver=<?=$driver_id?>";  
 $('#check_send_work').load(url_check_work_send);
	
 setInterval(function() {
 var url_check_work_send = "go.php?name=lab/check/update&file=send_work&driver=<?=$driver_id?>";  
 $('#check_send_work').load(url_check_work_send);

}, 1000); 
</script>





 <script>	
 
 /*
//// เช็คเพิ่มงานใหม่
 var url_check_work_cancel = "go.php?name=today/check/update&file=cancel_work&driver=<?=$driver_id?>";  
 $('#check_cancel_work').load(url_check_work_cancel);
	
 setInterval(function() {
 var url_check_work_cancel = "go.php?name=today/check/update&file=cancel_work&driver=<?=$driver_id?>";  
 $('#check_cancel_work').load(url_check_work_cancel);

}, 1000); 


*/
</script>



 <script>	
 /*
//// เช็คยกเลิกงาน
 var url_check_work_new = "go.php?name=today/check/update&file=new_work&driver=<?=$driver_id?>";  
 $('#check_new_work').load(url_check_work_new);
	
 setInterval(function() {
 var url_check_work_new = "go.php?name=today/check/update&file=new_work&driver=<?=$driver_id?>";  
 $('#check_new_work').load(url_check_work_new);

}, 1000); 

*/
</script>









 <script>	
//// เช็คจัดงานใหม่
/*
 var url_check_work_send = "go.php?name=lab/check/update&file=send_work&driver=<?=$driver_id?>";  
 $('#check_update_new_work').load(url_check_work_send);
	
 setInterval(function() {
 var url_check_work_send = "go.php?name=lab/check/update&file=send_work&driver=<?=$driver_id?>";  
 $('#check_update_new_work').load(url_check_work_send);

}, 1000); 

*/



</script>
	




	
    
	
	
		
	
	 
 

 <div> 
 <script>
$('#menu_<?=$_GET[name]?>').addClass("");
</script>
		
		
<?  if(!$_GET[name]){
$topic="หน้าแรก";
$topicicon="fa  fa-home";
 ?> <script>$('#menu_home').addClass("active"); </script><? }?>
 
 
<?  if($_GET[name] == 'today' or $_GET[name] == 'lab'){
$topic="งานวันนี้";
$topicicon="fa  fa-clock-o";
?> <script>$('#menu_<?=$_GET[name]?>').addClass("treeview active"); </script><? }?>


<?  if($_GET[name] == 'work_update'){
$topic="อัพเดทงานใหม่";
$topicicon="fa  fa-clock-o";
?>  <? }?>







<?  if($_GET[name] == 'all'){
$topic="งานทั้งหมด";
$topicicon="fa fa-calendar-o";
 ?> <script>$('#menu_<?=$_GET[name]?>').addClass("active"); </script><? }?>
 
 <?  if($_GET[name] == 'checkcar'){
$topic="จัดการรถ";
$topicicon="fa fa-cogs";
 ?> <script>$('#menu_<?=$_GET[name]?>').addClass("active"); </script><? }?>
 
 
<?  if($_GET[name] == 'view'){
$topic="การจัดการงาน";
$topicicon="fa  fa-automobile";
}
?>
<?  if($_GET[name] == 'timeline'){
$topic="ลำดับเวลาการเดินรถ";
$topicicon="fa fa-dashboard";
}
?>
<?  if($_GET[name] == 'user'){
$topic="ข้อมูลผู้ใช้งาน";
$topicicon="fa fa-user";
?>



		<script>
$('#menu_<?=$_GET[name]?>').addClass("treeview active");
  		</script>
 <? } ?>
 
 <?  if($_GET[name] == 'phone'){
$topic="เบอร์โทรศัพท์";
$topicicon="fa fa-phone";
?>
		<script>
$('#menu_<?=$_GET[name]?>').addClass("treeview active");
  		</script>
 <? } ?>



<?  if($_GET[name] == 'chat'){
$topic="ห้องสนทนา";
$topicicon="fa fa-comments";
}
?>




<?  if($_GET[name] == 'pay'){
$topic="บัญชี การเงิน";
$topicicon="fa fa-recycle";
 ?> <script>$('#menu_<?=$_GET[name]?>').addClass("active"); </script><? }?><style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
-->
</style>
 
 
 <ol class="breadcrumb" >	   
        <li style="padding-top:0px;border-radius: 5px; margin-left: -5px; "> <a href="index.php" style="font-size:16px; color:#666666"><i class="fa fa-home"></i>&nbsp;หน้าแรก</a></li>
        <span>&nbsp;|&nbsp;<a href="?name=<?=$_GET[name]?>"  style="font-size:16px; color:#666666"><?=$topic?>&nbsp;</a></span>
		
		<?  if($_GET[name] == '5user'){ ?>
		
        <li class="active"><?=$arr[web_driver][name];?><? //=date('Y-m-d');?></li>
		
		<? } ?>
		
   </ol>
 

<h1  style="font-family:Arial, Helvetica, sans-serif;background-color:#FFFFFF; padding:10px; padding-right:10px; border-bottom: solid 0px #999999; box-shadow: 0 0 5px 3px #E8E6E6; font-size:18px; border-radius: 20px; margin-top:-10px"  >
       <i class="<?=$topicicon?>" style="font-size:22px; padding-right:3px; color:#999999; "></i><b><font color="#666666"> <?=$topic?></font></b> &nbsp;<span id="load_data_time"></span>
	   <div style=" font-size:20px ; margin-top:0px; display:none; ">
 <?=date('Y-m-d');?>&nbsp;&nbsp;เวลา&nbsp;<span id="tm"></span></li></div>
 
       
   </h1> 

 
 <?  if($_GET[newlogin]){  ?>
 

  <script>
$( document ).ready(function() {
 ion.sound.play("welcome");
});
   </script>
 

 <? } ?>
 
 
 
 <?  if($_GET[newlogin]==1){ echo "";} else {?>
	 
	   <h1 class="backpage" style="margin-top:10px; margin-bottom:-10px; border-radius: 20px; padding-bottom:10px; padding-left:10px; " >
	 
	  
<a href="javascript:window.history.back();;"> <i class="fa fa-chevron-circle-left"  style="font-size:22px; color:#FFFFFF "></i><b  style="font-size:22px; color:#FFFFFF"> ย้อนกลับหน้าที่แล้ว</b></a>
  
      </h1>  
<? } ?>
    </sections>
	
</div>
 
