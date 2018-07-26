 
 
  <?
  
  if($_GET['action']=='upload'){
  
include("includes/class.resizepic.php");
  
  
$part='D:/AppServ/www/booking/admin/file/driver/';
 
// copy ($_FILES['load_chat_album']['tmp_name'] , "../data/1.png" ); 
 
 		// @copy ($_FILES['load_checkin_camera']['tmp_name'] , "../data/fileupload/store/driver_id/".$_GET['time'].".jpg" );
		
		
		
		 $original_image = $_FILES['load_checkin_camera']['tmp_name'] ;
		
		
			$desired_width = 400;
			$desired_height = _INEWS_H ;
			$image = new hft_image($original_image);
			$image->resize($desired_width, $desired_height, '0');
			$image->output_resized("../data/fileupload/store/driver_id/".$driver_id."_".$_GET['type'].".jpg","JPG");
/*




 
			$desired_width = 600;
			$desired_height = _INEWS_H ;
			$image = new hft_image($original_image);
			$image->resize($desired_width, $desired_height, '0');
			$image->output_resized("../data/fileupload/store/driver_checkin/".$_GET['id']."_".$_GET['number']."_".$_GET['type'].".jpg","JPG");
 
//opy ($_FILES['fileupload']['tmp_name'], "".$_POST[userid].".png" ); 
 
 			*/
  }
  
  
  
  if($_GET['action']=='del'){
	  
@unlink("../car/pic/guest/".$_GET[type]."/".$_GET[folder]."/".$_GET['number'].".png");  
  }
  
 
?>
 