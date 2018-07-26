<?

$db->connectdb(DB_NAME_DATA, DB_USERNAME, DB_PASSWORD);
/*
$res[car_history] = $db->select_query("SELECT * FROM history_use_car WHERE drivername='".$_GET[id] ."'  order by id desc limit 1   "); 
$arr[car_history] = $db->fetch($res[car_history]);
*/
 
		$db->add_db('check_transferplace',array(
 
		   "lat" => "$_GET[lat]",
		    "lng" => "$_GET[lng]",
			 "place_id" => "$_GET[place]",
		   
		 "drivername" =>$driver_id,
 
 
   "post_date"=>"".TIMESTAMP."",
			"update_date"=>"".TIMESTAMP.""
		));

        $db->closedb();
?>