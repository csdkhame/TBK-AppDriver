 <? // echo $_GET[driver];
 
$driver_chat_load = new DOMDocument(); 
$driver_chat_load->load( '../data/xml/driver/usecar/'.$_GET[driver].'_start.xml' ); 

 
 
$driver_chat_xml = $driver_chat_load->getElementsByTagName("online" ); 

foreach( $driver_chat_xml as $load) 
{ 
///$status=$load->getElementsByTagName('status')->item(0)->nodeValue;


 
 $time=$load->getElementsByTagName('timestop')->item(0)->nodeValue;
 
 
	  }
	  
	  
 $timestop=$time-time()-25200;
	  
 ?>
 <b><?=date('H:i:s',  $timestop);?>