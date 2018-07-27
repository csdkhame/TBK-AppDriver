<?php 
 
 @setcookie ("appdriver_remember_user", $_POST[loginusername], time() + (86400 * 30), "/"); // 86400 = 1 day
 @setcookie ("appdriver_remember_pass", $_POST[loginpassword], time() + (86400 * 30), "/"); // 86400 = 1 day
 @setcookie('appdriver_remember_time', false);
 

?>


<?
 @session_start();
require_once("includes/config.in.php");
require_once("includes/class.mysql.php");
require_once("includes/function.in.php");
$db = New DB();


 $username_full=$_POST[loginusername];
$username_short='driver_'.$_POST[loginusername];
//Check Admin
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);

$tb_admin_chk = "web_driver";

$res[admin] = $db->select_query("SELECT * FROM ".$tb_admin_chk." WHERE password='".$_POST[loginpassword]."'  AND (username='".$username_full."' or username='".$username_short."' or phone='".$username_full."') "); 
$rows[admin] = $db->rows($res[admin]); 
if($rows[admin]){
	$arr[admin] = $db->fetch($res[admin]);
 	//$driver_id = $arr[admin][id] ;	
	//include("xml/update/id.php");
	
}
//Can Login
if($arr[admin][id]){
	//Login ผ่าน
	 ob_start();
	session_start();
	$_SESSION['data_user_driver'] = $arr[admin] [username] ;
	$_SESSION['data_user_password'] = $_POST[loginpassword] ;
	$_SESSION['data_user_id'] = $arr[admin][id] ;
	$_SESSION['data_user_date'] = $arr[admin] [post_date] ;

// $xml_load_driver =  $_SESSION['data_user_id']._.$_SESSION['data_user_driver'];  
 //include("xml/load/id.php");
 
	
	?>
 
 
	
<script>


window.location.href = "index.php?newlogin=2018-07-26==11:51:00";
 
 ///alert('<?=$_SESSION['data_user_driver']?>');
  //$("#load_form").hide();
 
 
 </script>
 <?
}
 

else{ ?>
 <div style="padding:5px; background-color:#FF0000 ; border-radius: 25px; font-weight:normal"><font color="#FFFFFF"> 
    ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง</font> </div>
 

	
	<?
}
?>
 