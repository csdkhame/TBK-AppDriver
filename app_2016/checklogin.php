<?php
if($_POST[remember] == 1){
		setcookie('remember_user', '', time() + (86400 * 90 * 30), "/"); 
		setcookie('remember_pass', '', time() + (86400 * 90 * 30), "/");
	    
		setcookie('remember_user', $_POST[username], time() + (86400 * 90 * 30), "/"); 
		setcookie('remember_pass', $_POST[password], time() + (86400 * 90 * 30), "/");
	}else{

		setcookie ("remember_user", "", time() - 3600);
		setcookie ("remember_pass", "", time() - 3600);
	}
	setcookie('remember', '', time() - 3600, '/');
	setcookie('remember', $_POST[remember], time() + (86400 * 90 * 30), "/");
?>
<?
@session_start();
define("DB_HOST","localhost");
define("DB_NAME","admin_web");
define("DB_USERNAME","admin_MANbooking");
define("DB_PASSWORD","252631MANbooking");
require_once("../includes/class.mysql.php");
require_once("../includes/function.in.php");
$db = New DB();

//Check Admin
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);

$tb_admin_chk = "web_driver";

$res[admin] = $db->select_query("SELECT * FROM ".$tb_admin_chk." WHERE username='".$_POST[username]."' AND password='".$_POST[password]."'  "); 
$rows[admin] = $db->rows($res[admin]); 
if($rows[admin]){
	$arr[admin] = $db->fetch($res[admin]);
	
}
//Can Login
if($arr[admin][id]){
	//Login ผ่าน
	ob_start();
	$_SESSION['admin_user_dv'] = $_POST[username] ;
	$_SESSION['admin_pwd'] = $_POST[password] ;
	$_SESSION['admin_id'] = $arr[admin][id] ;
	echo '1';
	
}else{
	echo '0';
}
?>