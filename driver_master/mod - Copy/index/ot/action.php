<?


$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res[ot_driver] = $db->select_query("SELECT * FROM web_driver WHERE id='".$_GET[drivername]."'    "); 
$arr[ot_driver] = $db->fetch($res[ot_driver]);
 

 

$db->connectdb(DB_NAME_DATA, DB_USERNAME, DB_PASSWORD);
         $db->update_db('driver_work_ot', array(
 
            "ot_status" => "$_GET[status]",			
			"ot_confirm" => "0" ,
			"send_date"=>"".TIMESTAMP.""
			
			
			
            ///  "update_date" => "" . TIMESTAMP . ""
        ), " drivername=$_GET[drivername]  and  ot_day='".$_GET[day]."'");
        $db->closedb();

 
 
/// echo $_GET[day];
?>
 