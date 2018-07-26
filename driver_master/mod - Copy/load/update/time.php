 <?   echo date("H:i:s");  ?>
 
 
<?
//echo $_GET[lat];

$driver_id=$_GET[driver];
$folder_xml="../data/xml";

$online = ""
. "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n"
. "<online>\n";
$online .= "<driver>".$driver_id."</driver>\n";
$online .="<lat>".$_GET[lat]."</lat>\n";
$online .="<lng>".$_GET[lng]."</lng>\n";
$online .="<time>".time()."</time>";
$online .= "\n</online>";
@unlink("$folder_xml/driver/online/".$driver_id.".xml");
@$fd = @fopen("$folder_xml/driver/online/".$driver_id.".xml", "a+");
@fputs($fd, $online . "");
@fclose($fd);

/*

///echo $driver_id;

require_once("includes/config.in.php");
require_once("includes/class.mysql.php");

$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
echo $numpay = $db->num_rows('driver_online_update',"id","drivername='".$driver_id."'");


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

*/

?>

 