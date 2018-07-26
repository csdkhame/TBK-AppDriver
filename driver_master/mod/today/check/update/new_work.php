 
<? // echo $_GET[driver];
 
$driver_chat_load = new DOMDocument(); 
$driver_chat_load->load( '../data/xml/driver/work_to/new/'.$_GET[driver].'.xml' ); 

 
 
$driver_chat_xml = $driver_chat_load->getElementsByTagName("online" ); 

foreach( $driver_chat_xml as $load) 
{ 
$status=$load->getElementsByTagName('status')->item(0)->nodeValue;
 
$vc=$load->getElementsByTagName('vc')->item(0)->nodeValue;
$report=$load->getElementsByTagName('report')->item(0)->nodeValue;
$old_dv=$load->getElementsByTagName('old')->item(0)->nodeValue;
$new_dv=$load->getElementsByTagName('new')->item(0)->nodeValue; 
$time=$load->getElementsByTagName('time')->item(0)->nodeValue; 
$server=$load->getElementsByTagName('server')->item(0)->nodeValue;


 
	  }
	  
	  
 ?>
 
 
<? if($report>0){?>
 
 
   <script>
  

$("#check_data_driver_new_work" ).val(1);


if(document.getElementById('check_data_driver_new_work_id').value==0){
	
 
 var url_check_data_time_new = "go.php?name=today/check/load/from&file=work_new&report=<?=$report?>&server=<?=$server?>&vc=<?=$vc?>&from=<?=$old_dv?>&to=<?=$new_dv?>&day=<?=$_GET[day]?>";
 
// $('#check_work_send_popup').show();
 
 //$("#load_driver_new_work_show" ).show();
  
 $('#check_work_cancel_popup').load(url_check_data_time_new);
 
}


   $("#check_data_driver_new_work_id" ).val(<?=$report?>);


</script>
 
  <? } ?><br>
 