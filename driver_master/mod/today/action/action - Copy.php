
<?
 $folder_xml="../data/xml";
 
/// เช็คข้อมูล
 $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD); 

$res[name] = $db->select_query("SELECT id,nickname,post_date,company FROM ".TB_driver." WHERE id='".$_GET[dv_old]."' ");
$arr[name] = $db->fetch($res[name]);
$arr[name][nickname];

$res[company] = $db->select_query("SELECT company FROM ".TB_admin." WHERE id='".$arr[name][company]."' ");
$arr[company] = $db->fetch($res[company]);
 
 
$res[drivernamenew] = $db->select_query("SELECT id,nickname,post_date,company FROM ".TB_driver." WHERE id='".$_GET[dv_new]."' ");
$arr[drivernamenew] = $db->fetch($res[drivernamenew]);

$res[companynew] = $db->select_query("SELECT company FROM ".TB_admin." WHERE id='".$arr[drivernamenew][company]."' ");
$arr[companynew] = $db->fetch($res[companynew]);



/////
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$res[project] = $db->select_query("SELECT * FROM ".TB_transfer_report_all."  where id='".$_GET[data_id]."' limit 1");
$arr[project] = $db->fetch($res[project]);

 



 
/// ส่งงานใหม่
 
if($_GET[action]=='change_work'){
 
 
 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
 		$db->add_db('history_transfer_change_driver',array(
		
 
 	 	"transfer_id"=>"$_GET[data_id]",
		 "report_id"=>$arr[project][report_id],
 		"vc"=>$arr[project][invoice],
		"server"=>$arr[project][server],
 		"change_old_drivername	"=>"$_GET[dv_old]",
		"change_to_drivername	"=>"$_GET[dv_new]",
 
 			"posted"=>"$_SESSION[admin_user_dv]",
			"post_date"=>"".TIMESTAMP."",
			"update_date"=>"".TIMESTAMP.""
	 
		));
		
		
 
  $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$db->update_db(TB_transfer_report_all,array( 
			"change_work_status"=>"1"
		)," id='".$_GET[data_id]."' ");
		$db->closedb ();
 
 
		
		
		
//echo $_GET[lat];

$driver_id=$_GET[driver];
$folder_xml="../data/xml";



//////  คนอื่นรับงาน

$online = ""
. "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n"
. "<online>\n";
$online .="<status>new</status>\n";
$online .="<type>change</type>\n";
$online .="<day>".$_GET[day]."</day>\n";
$online .="<from>".$_GET[dv_old]."</from>\n";
$online .="<to>".$_GET[dv_new]."</to>\n";
$online .="<time>".time()."</time>";
$online .="<id>".$_GET[data_id]."</id>";

$online .= "\n</online>";
@unlink("$folder_xml/driver/work_change/receive/".$_GET[dv_new].".xml");
@$fd = @fopen("$folder_xml/driver/work_change/receive/".$_GET[dv_new].".xml", "a+");
@fputs($fd, $online . "");
@fclose($fd);
		
 
////// ส่งงานให้คนอื่น
		
$online2 = ""
. "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n"
. "<online>\n";
$online2 .="<status>new</status>\n";
$online2 .="<type>change</type>\n";
$online2 .="<day>".$_GET[day]."</day>\n";
$online2 .="<from>".$_GET[dv_old]."</from>\n";
$online2 .="<to>".$_GET[dv_new]."</to>\n";
$online2 .="<time>".time()."</time>";
$online2 .="<id>".$_GET[data_id]."</id>";

$online2 .= "\n</online>";
@unlink("$folder_xml/driver/work_change/send/".$_GET[dv_old].".xml");
@$fd2 = @fopen("$folder_xml/driver/work_change/send/".$_GET[dv_old].".xml", "a+");
@fputs($fd2, $online2 . "");
@fclose($fd2);
		
 
 

}

 
 /// ไม่ตอบรับ
 
 
 if($_GET[action]=='change_work_cancel'){
 

//////  คนอื่นรับงาน

/*

$online = ""
. "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n"
. "<online>\n";
$online .="<status>cancel</status>\n";
$online .="<type>change</type>\n";
$online .="<day>".$_GET[day]."</day>\n";
$online .="<from>".$_GET[dv_old]."</from>\n";
$online .="<to>".$_GET[dv_new]."</to>\n";
$online .="<time>888</time>";
$online .="<id>".$_GET[data_id]."</id>";

$online .= "\n</online>";
@unlink("$folder_xml/driver/work_change/receive/".$_GET[dv_new].".xml");
@$fd = @fopen("$folder_xml/driver/work_change/receive/".$_GET[dv_new].".xml", "a+");
@fputs($fd, $online . "");
@fclose($fd);
 */
@unlink("$folder_xml/driver/work_change/receive/".$_GET[dv_new].".xml");
////// ส่งงานให้คนอื่น
		
$online2 = ""
. "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n"
. "<online>\n";
$online2 .="<status>cancel</status>\n";
$online2 .="<type>change</type>\n";
$online2 .="<day>".$_GET[day]."</day>\n";
$online2 .="<from>".$_GET[dv_old]."</from>\n";
$online2 .="<to>".$_GET[dv_new]."</to>\n";
$online2 .="<time>0</time>\n";
$online2 .="<id>".$_GET[data_id]."</id>"; 
$online2 .= "\n</online>";
@unlink("$folder_xml/driver/work_change/send/".$_GET[dv_old].".xml");
@$fd2 = @fopen("$folder_xml/driver/work_change/send/".$_GET[dv_old].".xml", "a+");
@fputs($fd2, $online2 . "");
@fclose($fd2);
		
 

		
///// history


$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
 		$db->add_db('history_transfer_change_driver',array(
		 
 			"change_work_type"=>"$_GET[type]",
			// "vc"=>$arr[project][invoice],
			"change_old_drivername	"=>"$_GET[from]",
			"change_to_drivername	"=>"$_GET[to]",
			//"change_old_car"=>"$_GET[old_carno]",
			//"change_to_car"=>"$_GET[carno]",
			
			"server"=>$arr[project][server],
			
			"status"=>"cancel",		
			"transfer_id"=>"$_GET[data_id]",
	 "report_id"=>$arr[project][report_id],
 		"vc"=>$arr[project][invoice],
		"server"=>$arr[project][server],
		 "posted"=>"$_SESSION[admin_user_dv]",
		 "post_date"=>"".TIMESTAMP."",
		 "update_date"=>"".TIMESTAMP.""
	 
		));

 
 }
 
 
 
 
 
 /////  change_work_confirm
  
 
 if($_GET[action]=='change_work_confirm'){
	 

 

//////  คนอื่นรับงาน
/*
$online = ""
. "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n"
. "<online>\n";
$online .="<status>confirm</status>\n";
$online .="<type>change</type>\n";
$online .="<day>".$_GET[day]."</day>\n";
$online .="<from>".$_GET[dv_old]."</from>\n";
$online .="<to>".$_GET[dv_new]."</to>\n";
$online .="<time>".time()."</time>";
$online .="<id>".$_GET[data_id]."</id>";

$online .= "\n</online>";
@unlink("$folder_xml/driver/work_change/receive/".$_GET[dv_new].".xml");
@$fd = @fopen("$folder_xml/driver/work_change/receive/".$_GET[dv_new].".xml", "a+");
@fputs($fd, $online . "");
@fclose($fd);
		
 */
 
@unlink("$folder_xml/driver/work_change/receive/".$_GET[dv_new].".xml");
////// ส่งงานให้คนอื่น
		
$online2 = ""
. "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n"
. "<online>\n";
$online2 .="<status>confirm</status>\n";
$online2 .="<type>change</type>\n";
$online2 .="<day>".$_GET[day]."</day>\n";
$online2 .="<from>".$_GET[dv_old]."</from>\n";
$online2 .="<to>".$_GET[dv_new]."</to>\n";
$online2 .="<time>".time()."</time>\n";
$online2 .="<id>".$_GET[data_id]."</id>"; 
$online2 .= "\n</online>";
@unlink("$folder_xml/driver/work_change/send/".$_GET[dv_old].".xml");
@$fd2 = @fopen("$folder_xml/driver/work_change/send/".$_GET[dv_old].".xml", "a+");
@fputs($fd2, $online2 . "");
@fclose($fd2);
		
 

 
 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$db->update_db(TB_transfer_report_all,array( 
			"change_work_status"=>"0"
		)," id='".$_GET[data_id]."' ");
		$db->closedb ();
 
 
//////


  $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$db->update_db(TB_transfer_report_all,array(
			//"driver_topoint"=>"1",
			
			
			"drivername"=>"$_GET[dv_new]",
			"change_old_drivername"=>"$_GET[dv_old]" 
 
		)," id='".$arr[project][id]."' ");
		$db->closedb ();	
		
		  
 //////////////
		
 
  if($arr[project][server] == 'cn'){
	$db->connectdb_cn(DB_NAME,DB_USERNAME,DB_PASSWORD);
}else{
	$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
}

		  	$db->update_db('web_transfer_report',array(
			"drivername"=>"$_GET[dv_new]",
			// "carno"=>"$_GET[carno]",
			"update_date"=>"".TIMESTAMP.""
		)," id='".$arr[project][report_id]."' ");
 
 
 
 /////////
   		$db->update_db(TB_order,array(
			"drivername"=>"$_GET[dv_new]",
			"carno"=>"$_GET[carno]",
			"update_date"=>"".TIMESTAMP.""
		)," invoice='".$arr[project][invoice]."' "); 
 
 
 
 

///////////
 
///// history


$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
 		$db->add_db('history_transfer_change_driver',array(
		 
		 
		 "transfer_id"=>"$_GET[data_id]",
		 "report_id"=>$arr[project][report_id],
 		"vc"=>$arr[project][invoice],
		"server"=>$arr[project][server],
 		"change_old_drivername	"=>"$_GET[dv_old]",
		"change_to_drivername	"=>"$_GET[dv_new]",
		
			"status"=>"confirm",			
			"posted"=>"$_SESSION[admin_user_dv]",
			"post_date"=>"".TIMESTAMP."",
			"update_date"=>"".TIMESTAMP.""
	 
		));

?>
<script>
 window.location.href = "index.php?name=all"; //will redirect to your blog page (an ex: blog.html
</script>



<?

//////////////// 

 
 
 }
 
?>




 