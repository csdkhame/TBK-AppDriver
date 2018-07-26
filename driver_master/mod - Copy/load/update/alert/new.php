<div style="display:none">

 
 <script>
 
 /// alert(<?=$driver_id?>);
 </script>
 
 

 
<? 

////$driver_id=$_GET[id]; 






$filename = '../data/xml/driver/work_new/'.$driver_id .'.xml';

if (!file_exists($filename)) {
   
} else {
   
 
 
/////   ส่งงานให้คนอื่น
$driver_chat_load = new DOMDocument(); 
 @$driver_chat_load->load( '../data/xml/driver/work_new/'.$driver_id .'.xml' ); 
 
$driver_chat_xml = $driver_chat_load->getElementsByTagName("online" ); 
foreach( $driver_chat_xml as $load) 
{ 

/// $day=$load->getElementsByTagName('day')->item(0)->nodeValue;
 $status=$load->getElementsByTagName('status')->item(0)->nodeValue;
 
$to=$load->getElementsByTagName('to')->item(0)->nodeValue;
 
$from=$load->getElementsByTagName('from')->item(0)->nodeValue;



$pickuptime=$load->getElementsByTagName('pickuptime')->item(0)->nodeValue;

$day=$load->getElementsByTagName('day')->item(0)->nodeValue;
 
$time=$load->getElementsByTagName('time')->item(0)->nodeValue;
 
$arr[project][id]=$load->getElementsByTagName('id')->item(0)->nodeValue;


@unlink("../data/xml/driver/work_new/".$driver_id.".xml");
  
 
	  }
	  
 

 
}
	  
 ?>
 
        
        
<? if($status=='new'){
	
	

	
	
	
	
	
	?>
        <script>
 
 
///$("#play_new_work").click();
 
 </script>
  
        
  <script>
 





 
 navigator.serviceWorker.register('swnew.js?v=3');
 
 
 
 
  Notification.requestPermission(function(result) {
	  

	  
    if (result === 'granted') {
		
		
 
 

      navigator.serviceWorker.ready.then(function(registration) {
        registration.showNotification('สวัสดีค่ะคุณ<?=$arr[web_driver][nickname]?>', {
          body: 'คุณมีงานใหม่เวลา <?=$pickuptime?> น.  วันที่  <?=$day?> รับจาก <?=$from?>  ส่งที่ <?=$to?> ค่ะ',
          icon: '../data/pic/driver/main/<?=$arr[web_driver][post_date];?>.jpg',
		  
		 noscreen: true, 
		 
		 dir: 'rtl',
		  
		  
vibrate: [200000],
		   
 
 
 
 badge: 'mod/load/update/alert/i.png',
 
 
  ///	 silent: true,
		 
		/// url: 'app://tb-driver', 
		 
		///  images: 'view.png', 
	///	requireInteraction: shouldRequireInteraction,
		  
 
    ///  click_url: 'http://support.realtime.co/push-notifications/how-can-i-change-the-click-link-for-each-web-push-notification-i-send'       ,   
 
		  
 ///  icon: 'images/applogo.png',
/// sound: 'https://goldenbeachgroup.com/app/driver_master/sound/new_work.mp3',
 requireInteraction: true,
		   action: 'gramophone-action',
		  
          tag: 'new_work<?=time()?>'
        });

 
      });
	  
	  
    }
	
 
	
  });
  
  
  
  
 
  </script>
  
  
 
  
  <? 
   
  

  
  
  
  
  } ?>
  
  </div>