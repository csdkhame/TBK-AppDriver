<?php 
if($_GET[type]=="belt"){
	
	/*include("../../../../includes/class.resizepic.php");
	$original_image = $_FILES['fileUpload']['tmp_name'] ;
	$desired_width = 600;
	$desired_height = _INEWS_H ;
	$image = new hft_image($original_image);
	$image->resize($desired_width, $desired_height, '0');
	header('Content-Type: application/json');
	$result = $image->output_resized("","JPG");
	
	
//	echo json_encode($_FILES);*/
	$path = "../../../../../car/pic/guest/belt/".$_GET[id].".png";
	$result = @copy ($_FILES['belt_img']['tmp_name'] , $path );
	$return[result] = $result;
	$return[path] = $path;
	echo json_encode($return);
	exit();
}
if($_GET['type']=='del_belt'){
	  
	$result = @unlink("../../../../../car/pic/guest/belt/".$_GET[id].".png");  
	$return[result] = $result;
	$return[path] = "../../../../../car/pic/guest/belt/".$_GET[id].".png";
	echo json_encode($return);
	exit();
}

?>