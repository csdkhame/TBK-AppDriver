<?
///// to place
$driver_online_load = new DOMDocument(); 
 @$driver_online_load->load( '../data/xml/driver/online/'.$driver_id.'.xml' ); 
//echo $xml_load_driver;
$driver_online_xml = $driver_online_load->getElementsByTagName( "newmsg" ); 
foreach( $driver_online_xml as $load) 
{ 
 echo $onlinetime=$load->getElementsByTagName('time')->item(0)->nodeValue;
 } 
 
?>


