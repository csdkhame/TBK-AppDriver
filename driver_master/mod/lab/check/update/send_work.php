 <? // echo $_GET[driver];
 
$driver_chat_load = new DOMDocument(); 
$driver_chat_load->load( '../data/xml/driver/work_change/send/'.$_GET[driver].'.xml' ); 

 
 
$driver_chat_xml = $driver_chat_load->getElementsByTagName("online" ); 

foreach( $driver_chat_xml as $load) 
{ 
$status=$load->getElementsByTagName('status')->item(0)->nodeValue;



$day=$load->getElementsByTagName('day')->item(0)->nodeValue;
$type=$load->getElementsByTagName('type')->item(0)->nodeValue;
$from=$load->getElementsByTagName('from')->item(0)->nodeValue;
$to=$load->getElementsByTagName('to')->item(0)->nodeValue; 
$time=$load->getElementsByTagName('time')->item(0)->nodeValue; 
$id=$load->getElementsByTagName('id')->item(0)->nodeValue;
 
	  }
 ?>
 
 
 
 
 <?
 
 
 
$now=time();

$time_reply=$now-$time;

 $time_limit= 300-$time_reply;

$time_limit_per=$time_limit/3;
 
$time_open_h= date('i:s',$time_limit);
 
  
  
  
  /// ส่งงานใหม่ ยังไม่หมดเวลา
 
  if($status=='new' and $time_limit>0){ ?> 
  
 
  <script>
  

$("#check_data_status_send_new_work" ).val(1);
   
 $("#load_send_work_time_countdown").html('เหลือเวลารับงาน&nbsp;<b><?=$time_open_h?>');



 
if(document.getElementById('check_data_status_send_new_work_id').value==0){
	
 
 var url_check_data_time_new = "go.php?name=lab/check/load/from&file=work_old&id=<?=$id?>&from=<?=$from?>&to=<?=$to?>&day=<?=$_GET[day]?>";
  
 $('#check_work_send_popup').load(url_check_data_time_new);
 
}


   $("#check_data_status_send_new_work_id" ).val(<?=$id?>);
   
 
 
  </script>
 

 
 <? }   ?>
 
 
 
 
 
 
 <?
 
  /// หมดเวลา
 
  if($status=='new' and $time_limit<1){  
  
  
  $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD); 

$res[name] = $db->select_query("SELECT id,nickname,post_date,company FROM ".TB_driver." WHERE id='".$to."' ");
$arr[name] = $db->fetch($res[name]);
$arr[name][nickname];

$res[company] = $db->select_query("SELECT company FROM ".TB_admin." WHERE id='".$arr[name][company]."' ");
$arr[company] = $db->fetch($res[company]);
  
 
 ?>
 
   <script>
 
	   swal({
		title: "<font style='font-size:28px'>ไม่มีการตอบรับงานจาก<b> ",
		text: "<font style='font-size:18px; color:#FF0000'><?=$arr[name][nickname]?> (<?=$arr[company][company];?>)</font ><br>ภายในระยะเวลาที่กำหนด",
		type: "error",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'รับทราบ',
		cancelButtonText: "ส่งใหม่",
		closeOnConfirm: true,
		closeOnCancel: true,
		html: true
	},
	function(isConfirm){
    if (isConfirm){
 
$( "#load_data_send_work_show" ).hide();
  $("#check_data_status_send_new_work" ).val(0);
 $("#check_data_status_send_new_work_id" ).val(0);
 
 
 
 
 /////
  var urlaction="go.php?name=lab/action&file=xml&action=cancel&type=send&driver=<?=$_GET[driver]?>";
  $("#check_update_work" ).load(urlaction);
  
 
  //// ลบไฟล์ทั้ง
 
 
 
  var url_place_load = "go.php?name=load/today&daytype=all&file=timeline&server=th&find=day&day=<?=$day?>";
 $('#load_th').show();
  $('#load_th').load(url_place_load); 
  
  
      } else {



 $( "#load_data_send_work_show" ).hide();
 $('#change_new_work_<?=$arr[project][id];?>').click();



    }
 	});
 
 
 
  </script>
 <?
   //@unlink("../data/xml/driver/work_change/send/".$_GET[driver].".xml");
 
  } 
  
  ?>
  
  
  
  
  
  <?
 
///// ถูกปฏิเสธ

 if($status=='cancel' ){ 
 
   $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD); 

$res[name] = $db->select_query("SELECT id,nickname,post_date,company FROM ".TB_driver." WHERE id='".$to."' ");
$arr[name] = $db->fetch($res[name]);
$arr[name][nickname];

$res[company] = $db->select_query("SELECT company FROM ".TB_admin." WHERE id='".$arr[name][company]."' ");
$arr[company] = $db->fetch($res[company]);
 
 
  ?> 
  
 <script>
 
	   swal({
		title: "<font style='font-size:28px'>การส่งต่องาน<b> ",
		text: "ถูกปฏิเสธโดยคุณ<br><font style='font-size:18px; color:#FF0000'><?=$arr[name][nickname]?> (<?=$arr[company][company];?>)</font >",
		type: "error",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'รับทราบ',
		cancelButtonText: "ส่งใหม่",
		closeOnConfirm: true,
		closeOnCancel: true,
		html: true
	},
	function(isConfirm){
    if (isConfirm){
		

 $( "#load_data_send_work_show" ).hide();
  $("#check_data_status_send_new_work" ).val(0);
 $("#check_data_status_send_new_work_id" ).val(0);
 
 
  var urlaction="go.php?name=lab/action&file=xml&action=cancel&type=send&driver=<?=$_GET[driver]?>";
  $("#check_update_work" ).load(urlaction);



 window.location = "?name=all"; 

///////

/*
 navigator.serviceWorker.register('sw.js');
 
  Notification.requestPermission(function(result) {
    if (result === 'granted') {
      navigator.serviceWorker.ready.then(function(registration) {
        registration.showNotification('<?=$arr[name][nickname]?> (<?=$arr[company][company];?>)', {
          body: 'ปฏิเสธการส่งต่องานของคุณ กรุณาตรวจสอบด้วยค่ะ',
          icon: 'http://t-booking.com/admin/file/driver/pic/<?=$arr[name][post_date];?>.jpg',
   
		  images: 'view.png', 
		  
		  //   icon: 'images/applogo.png',
		  /// sound: 'sound/new.mp3',
 
          requireInteraction: true,
		   action: 'gramophone-action',
		  
          tag: 'require-interaction<?=$now?>'
        });

 
      });
	  
	  
	  
	  
    }
	
	
	
	
	
  });
  

*/
 
 
    } else {
		
		
  var urlaction="go.php?name=lab/action&file=xml&action=cancel&type=send&driver=<?=$_GET[driver]?>";
  $("#check_update_work" ).load(urlaction);
		
 $( "#load_data_send_work_show" ).hide();
 
 
 
 
 $('#change_new_work_<?=$arr[project][id];?>').click();
 
 
 
 window.location = "?name=all"; 
 
 
 
    }
	});
 
 
 
</script>
  
  
  <?
 
   } ?>
   
   
   
   
<?
 
///// ถูกยกเลิก

 if($status=='confirm' ){ 
 
 
    $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD); 

$res[name] = $db->select_query("SELECT id,nickname,post_date,company FROM ".TB_driver." WHERE id='".$to."' ");
$arr[name] = $db->fetch($res[name]);
$arr[name][nickname];

$res[company] = $db->select_query("SELECT company FROM ".TB_admin." WHERE id='".$arr[name][company]."' ");
$arr[company] = $db->fetch($res[company]);
 
 
 
  ?> 
  
<script>
 
	   swal({
		title: "<font style='font-size:28px'>การส่งต่องานสำเร็จ<b> ",
		text: "<font style='font-size:18px; color:#FF0000'><?=$arr[name][nickname]?> (<?=$arr[company][company];?>)</font ><br>ตอบรับงานของคุณแล้ว",
		type: "info",
		//showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'ดูงานทั้งหมด',
		cancelButtonText: "ยกเลิก",
		closeOnConfirm: true,
		closeOnCancel: true,
		html: true
	},
	function(isConfirm){
    if (isConfirm){
	 
	
window.location.href = "index.php?name=all"; //will redirect to your blog page (an ex: blog.html
  
var urlaction="go.php?name=lab/action&file=xml&action=cancel&type=send&driver=<?=$_GET[driver]?>";
$("#check_update_work" ).load(urlaction);

  
  
 
    } else {
		
	
  window.location.href = "index.php?name=all"; //will redirect to your blog page (an ex: blog.html
		
 
    }
	});
 
 
 
</script>
  
  
  <?
 
   } ?>
   
   