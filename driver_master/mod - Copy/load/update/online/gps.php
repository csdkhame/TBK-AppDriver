<? 

$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$numpay = $db->num_rows('driver_online_update',"id","drivername='".$driver_id."'");


   /////////////////
   if($numpay==0){
    
     $db->add_db('driver_online_update',array(
			"drivername"=>$driver_id,
			"lat"=>$_GET[lat],
			"lng"=>$_GET[lng],
			"update_date"=>"".TIMESTAMP.""
 
		));
   
   } else {
	   
 
          $db->update_db('driver_online_update', array(		 
 
 			"status"=>1,
			"lat"=>$_GET[lat],
			"lng"=>$_GET[lng],
			"update_date"=>"".TIMESTAMP.""
			
        ), " drivername='".$driver_id."'");
	   
   }

 
 $db->closedb ();

 
  $folder_xml="../data/xml";

$product = ""
. "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n"
. "<online>\n";
$product .= "<driver>".$driver_id."</driver>\n";
$product .= "<lat>".$_GET[lat]."</lat>\n";
$product .= "<lng>".$_GET[lng]."</lng>\n";
$product .= "<time>".time()."</time>\n";
$product .= "</online>";

@unlink("$folder_xml/driver/gps/".$driver_id.".xml");
@$fd = @fopen("$folder_xml/driver/gps/".$driver_id.".xml", "a+");
@fputs($fd, $product . "");
@fclose($fd);
  
?>
 