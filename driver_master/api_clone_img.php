<?php 
header('Access-Control-Allow-Origin: *');
if($_GET[key]=='clone_img'){
	set_time_limit(100000000);
//	$invoice = $_POST[invoice];
	$invoice = $_GET[invoice];
	
	$url = "http://192.168.0.114/booking/admin/admin/lab_report/photo_driver/".$invoice."/1.jpg";	

	$local = "car/pic/guest/topoint/".$invoice."/1.jpg";
	@mkdir("car/pic/guest/topoint/".$invoice, 0777);
	@chmod("car/pic/guest/topoint/".$invoice, 0777);    

	$content = file_get_contents($url);

	$fp = fopen($local, "w");
	fwrite($fp, $content);
	fclose($fp);

//	echo 123; 
	
}

if($_GET[key]=='post_img'){
	$tmpFilePath = $_FILES['file']['tmp_name'];
	$invoice = $_POST[invoice];
	
		 	 
				@mkdir("../car/pic/guest/topoint/".$invoice, 0777);
				@chmod("../car/pic/guest/topoint/".$invoice, 0777);    
				$target_file = "../car/pic/guest/topoint/".$invoice."/1.png";
				
             if(move_uploaded_file($tmpFilePath, $target_file)) {
					$result[upload_photo] = true;
                }
                $result[invoice] = $invoice;
                $result[file] = file_exists($target_file);
                
		echo json_encode($result);
}
?>
