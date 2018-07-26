 
<style>
	.css-full-popup {
	position: fixed;
	left: 0px;
	top: 0px; 
	bottom:0;
	width: 100%;
	height: 100%;
	z-index: 9999; 
	overflow-y:hidden ; padding:0px; background-color:#FFFFFF; 

}

 

.back-full-popup
{ 
font-size:22px;   padding:10px;  color:#FFFFF;  width:100%; background-color:<?=$maincolor?>;      
 border-top: 0px solid #000000; margin-bottom: 0px;  
  top:  0; position:fixed;
    z-index: 1; 
 
}
 
 
</style> 
 
 
<div class="css-full-popup" id="load_data_change_work_show" style="display:nones; position:fixed; overflow: auto "> 

 
 
  <div class="back-full-popup"> 
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="40"   style="display:none" ><div class="back-full-popup-button-change" ><i class="fa fa-arrow-circle-left" style="font-size:22px; color:#FFFFFF "></div></i></td>
  <td align="center"   ><div style="font-size:22px; color:#FFFFFF " id="head_full_popup">มีการส่งงานต่อให้คุณ</div></td>
     
  </tr>
</table>
</div>

 
 
 
 

 

 <div style="padding:10px; margin-top:40px;">
 
 

 


 <script>
  
  
   $("#check_data_status_change_new_work_id" ).val(<?=$_GET[id]?>);
   
   
   
   
   
 
   
 
  
   /// document.getElementById('check_data_status_gps_lat_old').value
   
  
   //  $( "#load_data_change_work_show" ).show();
	//$( "#load_data_change_work_show" ).show();
 
  </script>

<?


$from=$_GET[from];
$to=$_GET[to];
$id=$_GET[id];





//$_GET[dvold];
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD); 

$res[name] = $db->select_query("SELECT id,nickname,post_date,company FROM ".TB_driver." WHERE id='".$from."' ");
$arr[name] = $db->fetch($res[name]);
$arr[name][nickname];

$res[company] = $db->select_query("SELECT company FROM ".TB_admin." WHERE id='".$arr[name][company]."' ");
$arr[company] = $db->fetch($res[company]);


$res[drivernamenew] = $db->select_query("SELECT id,nickname,post_date,company FROM ".TB_driver." WHERE id='".$to."' ");
$arr[drivernamenew] = $db->fetch($res[drivernamenew]);

$res[companynew] = $db->select_query("SELECT company FROM ".TB_admin." WHERE id='".$arr[drivernamenew][company]."' ");
$arr[companynew] = $db->fetch($res[companynew]);

?>

 
 
<table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tbody>
    <tr>
      <td align="center"><span class="font_34" style="padding-top:5px; color:#009999  ">
        <div style="margin-left:-10px; ">
        <?
 $filename = "../../admin/file/driver/pic/" . $arr[drivernamenew][post_date] . ".jpg";
if(file_exists($filename)) {

$file_exists = 1;  
}else{
	$url = "http://t-booking.com/admin/file/driver/pic/" . $arr[drivernamenew][post_date] . ".jpg";

$response = get_headers($url, 1);
$file_exists = (strpos($response[0], "404") === false);  
}	
                      
                       // if(file_exists($file_exists)) {
                        if($file_exists) {
                          // Ǩͺ
                          ?>
        <img src="../data/pic/driver/main/<?=$arr[name][post_date];?>.jpg"  width="180"   border="0"  class="IMGSHOP"  style="border-radius: 15px;"  />
        <?
                        }
                        else {
                          ?>
        <img src="../data/pic/driver/main/no.jpg"  width="180" border="0"  class="IMGSHOP"  style="border-radius: 15px;"  />
        <?
                        } ?>
        </span></td>
    </tr>
  </tbody>
</table>


<script>

/*


 navigator.serviceWorker.register('sw.js');
 
  Notification.requestPermission(function(result) {
    if (result === 'granted') {
      navigator.serviceWorker.ready.then(function(registration) {
        registration.showNotification('<?=$arr[name][nickname]?> (<?=$arr[company][company];?>)', {
          body: 'ส่งงานต่อมาให้คุณ กรุณาตรวจสอบด้วยค่ะ',
          icon: 'http://t-booking.com/admin/file/driver/pic/<?=$arr[name][post_date];?>.jpg',
		  sound: 'sound/new.mp3',
		  //   icon: 'images/applogo.png',
		   images: 'view.png',
 
          requireInteraction: true,
		   action: 'gramophone-action',
		  
          tag: 'require-interaction<?=$now?>'
        });

 
      });
    }
  });
  
*/
 ///showNotifications();
</script>


<table width="100%"  border="0" cellspacing="2" cellpadding="2">
  <tr>
    
    
  </tr>
  <tr>
    <td align="center" class="font_28" style="padding-top:0px; "><b>มีการส่งงานจาก</td>
  </tr>
  <tr>
    <td align="center" class="font_22" style="padding-top:0px; "><?=$arr[name][nickname]?>
      <font class="font_14">      (<?=$arr[company][company];?>)</td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="top" class="font_38"  style="padding-top:5px; color:#FF0000  ">
         <div id="load_change_work_time_countdown" class="font_24"  style="padding-top:0px; color:#FF0000; text-align:center  ">
<?=$time_open_h?>
    
    </div>
  
    
    <table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tbody>
    <tr>
      <td width="50%"> <button type="button" class="btn btn-modal-no"   id="btn_no_change_work" style="width:100%; border-radius:20px;" >ปฏิเสธ</button></td>
      <td width="50%"><button type="button" class="btn btn-modal-ok"   data-dismiss="modal" data-backdrop="static" id="btn_ok_change_work" style="width:100%; border-radius:20px;" >รับงาน</button></td>
    </tr>
  </tbody>
</table>
 <div style="margin-top:-20px;">
 <?  include "mod/lab/check/load/from/work_detail.php" ;?>
 
 </div>
 

    </td>
  </tr>
</table>
 
 
 
 
 <div id="load_change_work_data"></div>
 
 

 			

</div><br>




 
 
 
 

<?   /// include "load/loading/page_main.php" ; ?>
 
 
 

</div>














   <script>
 
    	
  $('#btn_no_change_work').click(function(){   
 
  
	   swal({
		title: "<font style='font-size:28px'><b> คุณแน่ใจหรือไม่",
		text: "ว่าต้องการปฏิเสธงานจาก<br><font style='font-size:18px; color:#FF0000'><?=$arr[name][nickname]?> (<?=$arr[company][company];?>)",
		type: "error",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'แน่ใจ',
		cancelButtonText: "ไม่แน่ใจ",
		closeOnConfirm: true,
		closeOnCancel: true,
		html: true
	},
	function(isConfirm){
    if (isConfirm){
	 
	
 // swal("สลับงานสำเร็จ", "success");
 
 
 var url="load_in.php?name=lab/action&file=action&action=change_work_cancel&day=<?=$_GET[day]?>&data_id=<?=$id;?>&dv_new=<?=$to?>&dv_old=<?=$from?>";
 
$('#load_change_work_data').load(url);
 
$("#check_data_status_change_new_work_id" ).val(0);
$("#check_data_status_change_new_work" ).val(0);


$( "#load_data_change_work_show" ).hide();
 
 /*
	
url=url+"&drivername="+document.getElementById('drivername<? echo $arr[project][id];?>').value;
url=url+"&old_drivername="+document.getElementById('old_drivername<? echo $arr[project][id];?>').value;
 
  */
    
   
	//  alert('dd');
    } else {
      swal("Cancelled", "", "error");
    }
	});
	   
	    

});
		
		
 
 
 
 
 /////////////
 
 
 ////  ยืนยันรับงาน
 
 
 
 
    	
  $('#btn_ok_change_work').click(function(){    
  
  

	   swal({
		title: "<font style='font-size:28px'><b> คุณแน่ใจหรือไม่",
		text: "ว่าต้องการรับงานจาก<br><font style='font-size:18px; color:#FF0000'><?=$arr[name][nickname]?> (<?=$arr[company][company];?>)",
		type: "success",
		showCancelButton: true,
		confirmButtonColor: '#0ACB68',
		confirmButtonText: 'แน่ใจ',
		cancelButtonText: "ไม่แน่ใจ",
		closeOnConfirm: true,
		closeOnCancel: true,
		html: true
	},
	function(isConfirm){
    if (isConfirm){
	 
	
//swal("สลับงานสำเร็จ", "success");
/*
 
 var url="load_in.php?name=lab/action&file=action&action=change_work&data_id=<?=id;?>";
	
url=url+"&drivername="+document.getElementById('drivername<? echo $arr[project][id];?>').value;
url=url+"&old_drivername="+document.getElementById('old_drivername<? echo $arr[project][id];?>').value;
 
  */
  
 
  
 var url="load_in.php?name=lab/action&file=action&action=change_work_confirm&day=<?=$_GET[day]?>&data_id=<?=$id;?>&dv_new=<?=$to?>&dv_old=<?=$from?>";
 
$('#load_change_work_data').load(url);
 
$("#check_data_status_change_new_work_id" ).val(0);
$("#check_data_status_change_new_work" ).val(0);


$( "#load_data_change_work_show" ).hide();


var urlaction="go.php?name=lab/action&file=xml&action=cancel&type=send&driver=<?=$_GET[driver]?>";
$("#check_update_work" ).load(urlaction);


  
 
   
	//  alert('dd');
    } else {
      swal("Cancelled", "", "error");
    }
	});
	   
	    

});
		
 
 
 //// 
 
   $('.back-full-popup-button-change').click(function(){   
   
   
   $("#check_data_status_change_new_work_id" ).val(0);
$("#check_data_status_change_new_work" ).val(0);
  
 
   $( "#load_data_change_work_show" ).toggle();
 

     	});
 
 
 
 
 
 
 
  </script>
  
  
