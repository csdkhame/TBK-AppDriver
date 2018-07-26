<?

$rand=$_GET[rand];
///load_msg

 
 ////  
$driver_chat_load_last = new DOMDocument(); 
 @$driver_chat_load_last->load( '../data/xml/driver/online/'.$_GET[dv].'.xml' ); 
//echo $xml_load_driver;
$driver_chat_xml_last = $driver_chat_load_last->getElementsByTagName( "online" ); 
foreach( $driver_chat_xml_last as $load_last) 
{ 
 $driver=$load_last->getElementsByTagName('driver')->item(0)->nodeValue;
 $time=$load_last->getElementsByTagName('time')->item(0)->nodeValue;
 
	  }
	  
 $online_time=time()-$time;
	 
	 if($online_time < 10){?>
		 
<font color="#FF0000">ผู้รับงานกำลังอยู่ในระบบ


<script>

 $('#load_check_status_to_driver<?=$rand?>').removeClass('div-all-check-offline');
$('#load_check_status_to_driver<?=$rand?>').addClass('div-all-check-online');

</script>

<?	 }   ?>
	 
	 
	 
	<? if($online_time > 11){?>
		 
 
 <font color="#333333">ผู้รับงานยังไม่เปิดระบบ
 
 <script>
 $('#load_check_status_to_driver<?=$rand?>').removeClass('div-all-check-online');
$('#load_check_status_to_driver<?=$rand?>').addClass('div-all-check-offline');

</script>

	<?  } ?>