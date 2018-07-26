 

<?

 



$driver_chat_load_last = new DOMDocument(); 
 @$driver_chat_load_last->load( "../data/xml/translate/".$_GET[vc]."_".$_GET[id]."_".$_GET[from].".xml" ); 
//echo $xml_load_driver;
$driver_chat_xml_last = $driver_chat_load_last->getElementsByTagName( "trans" ); 
foreach( $driver_chat_xml_last as $load_last) 
{ 
 echo $trans_message=$load_last->getElementsByTagName('t')->item(0)->nodeValue;
 
 }


?>