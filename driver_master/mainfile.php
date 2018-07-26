 <? date_default_timezone_set("Asia/Bangkok");

if (eregi("mainfile.php",$PHP_SELF)) {
    Header("Location: index.php");
    die();
}
error_reporting(0);
 
function GETMODULE($name,$file){
	global $MODPATH, $MODPATHFILE ;
	if(!$name){$name = "index";}
	if(!$file){$file = "index";}
$modpathfile="mod/".$name."/".$file.".php";
///$modpathfile="mod/".$name."/".$file.".html";
if (file_exists($modpathfile)) {
	$MODPATHFILE = $modpathfile;
	$MODPATH = "mod/".$name."/";
	}else{
	die ("page not found...");
	}
} 
 
require_once("includes/config.in.php");
require_once("includes/class.mysql.php");
require_once("includes/function.in.php");
 

$db = New DB();

?>
 
<?
 

if($_SESSION['data_user_driver']){
	
 
 
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res[web_driver] = $db->select_query("SELECT * FROM web_driver WHERE username='".$_SESSION['data_user_driver']."'    "); 
$arr[web_driver] = $db->fetch($res[web_driver]);

$_SESSION['data_user_date']=$arr[web_driver][post_date];

////
 $res[companydriver] = $db->select_query("SELECT admin_company,province,car_group FROM ".TB_admin." WHERE id='".$arr[web_driver][company]."'    "); 
$arr[companydriver] = $db->fetch($res[companydriver]);

 

////
 

$driver_id =  $arr[web_driver][id];  
$carnumber =  $arr[web_driver][car_num];  

$driver_carnumber =  $arr[web_driver][car_num];  
 
$driver_company=  $arr[web_driver][company];  
$driver_name_en =  $arr[web_driver][name_en]; 
$driver_car_use =  $arr[web_driver][car_number_use]; 
$driver_car_use_number =  $arr[web_driver][car_number_use]; 
$driver_car_use_status =  $arr[web_driver][status_usecar]; 

$driver_company=$arr[web_driver][company];


///////// driver detail
 $data_driver_name=$arr[web_driver][name];
$data_driver_nickname=$arr[web_driver][nickname];
$data_driver_phone=$arr[web_driver][phone];



$driver_company_admin=  $arr[companydriver][admin_company]; 

 



 
 /*
 
 

$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD); 
$driver_id =  $_SESSION['data_user_id'];  
$carnumber =  $arr[web_driver][car_num];  
 $chk_data_id =  $arr[web_driver][id];
 */
 
 
 


 

  
if($_SESSION['data_user_password']<>$arr[web_driver] [password]){ ?> 
 
 <script>
 
 
 
 
///  window.location.href = "logout.php"; //will redirect to your blog page (an ex: blog.html)
  </script>

<? } ?>
<?
}
?>

 <script>
 var load_main_icon_big="<div class='overlay' style='background-color:#FFFFFF; padding:15px;border: solid 1px #DADADA '><center> <i class='fa fa-refresh fa-spin 2x' style='font-size:100px; color:#367FA9; ' ></i> </center><br><font style='font-size:18px; color:#367FA9 ' ><center>กำลังโหลดข้อมูล</center></font></div>";
 </script>
 
 
 
 
 
  <script>
 var load_main_icon_mini="<div style='top:0; left:0'><table width='100%'  border='0' cellspacing='0' cellpadding='0'><tr><td style='width:24px; '><i class='fa fa-refresh fa-spin 2x' style='font-size:22px; color:#367FA9; ' ></i> </td><td><font style='font-size:14px; color:#367FA9 ' >โหลดข้อมูล</center></font></td></tr></table></div> ";
 </script>
 
