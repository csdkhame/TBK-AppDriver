<?php 
//Get the file
set_time_limit(100000);
 $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
    $res[category] = $db->select_query("SELECT * FROM ".TB_driver." where  status=1  ");
while ($arr[category] = $db->fetch($res[category])){

//$url = "http://t-booking.com/admin/file/driver/pic/".$arr[category][post_date].".jpg";	
$url = "http://t-booking.com/admin/file/driver/pic/small".$arr[category][post_date].".jpg";	
$content = file_get_contents($url);
//Store in the filesystem.
$local = "../data/pic/driver/small/".$arr[category][post_date].".jpg";
$fp = fopen($local, "w");
fwrite($fp, $content);
fclose($fp);
echo $arr[category][post_date]." : ".$url."<br/>";
}
?>