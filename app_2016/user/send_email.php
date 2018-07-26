<?

//////////////// mail
 /*
$webmail_port        = 465;                    
$webmail_host        = "smtp.zoho.com"; // SMTP server
$webmail_username    = "system@goldenbeachgroup.com";     // SMTP server username
//$webmail_password    = "252631@MANbooking!@#$";            // SMTP server password 
$webmail_password    = "dfjpsrvs6ah6";            // SMTP server password 
//*/

//error_reporting(E_ALL);
//error_reporting(E_STRICT);
require_once('phpmail/class.phpmailer.php');
$mail             = new PHPMailer();
//////////////// ส่งเมล์

$mail->CharSet = "utf-8";
$mail->IsSMTP();                           // 启用SMTP
$mail->SMTPAuth    = true;                  // 启用SMTP认证
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host        = $webmail_host; // SMTP server
$mail->Port        = $webmail_port;                 // set the SMTP port for the GMAIL server
$mail->Username    = $webmail_username;     // SMTP server username
$mail->Password    = $webmail_password ;            // SMTP server password 





$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
/*
$res[driver_email] = $db->select_query("
SELECT 
".TB_order.".*
, pickup.topic as pickup_topic 
, pickup.province as pickup_province 
, pickup.amphur as pickup_amphur 
, toplace.topic as toplace_topic 
, toplace.province as toplace_province 
, toplace.amphur as toplace_amphur  
, transferproduct.area as pro_area  
FROM ".TB_order." 
LEFT JOIN ".TB_transferplace." pickup ON  pickup.id = ".TB_order.".pickup_place
LEFT JOIN ".TB_transferplace." toplace ON  toplace.id = ".TB_order.".to_place
LEFT JOIN ".TB_transferproduct." transferproduct ON  transferproduct.id = ".TB_order.".program
WHERE id='".$_GET[id]."' 

");

*/

$res[driver_email] = $db->select_query("SELECT * FROM ".TB_order." WHERE id='".$_GET[id]."' ");
$arr[driver_email] = $db->fetch($res[driver_email]);

$res[pickup] = $db->select_query("SELECT topic,province,amphur FROM ".TB_transferplace." WHERE id='".$arr[driver_email][pickup_place]."' ");
$arr[pickup] = $db->fetch($res[pickup]);

$res[toplace] = $db->select_query("SELECT topic,province,amphur FROM ".TB_transferplace." WHERE id='".$arr[driver_email][to_place]."' ");
$arr[toplace] = $db->fetch($res[toplace]);

$res[transferproduct] = $db->select_query("SELECT area FROM ".TB_transferproduct." WHERE id='".$arr[driver_email][program]."' ");
$arr[transferproduct] = $db->fetch($res[transferproduct]);


$db->closedb ();
date_default_timezone_set('Asia/Bangkok');

$driver_vc = $arr[driver_email][invoice];
$driver_date = $arr[driver_email][transfer_date];
$driver_time = $arr[driver_email][airout_time];
$driver_area = $arr[transferproduct][area];
 
 


$ex_email = "admin_khame@t-booking.com"; 
$ex_email = "manphuket1@hotmail.com";
if($ex_email != ''){


$body = "
<br />
<font style='font-size:18px;color :#336699;'>วันที่ : $driver_date  เวลา : $driver_time</font>
<br />
<p>หมายเลขการจอง : <a href='$emailurl/index.php?name=admin&file=mg_driver&part=golden&day=".$driver_date."' target='_blank'><font style='font-size:15px;color :#336699;'>$driver_vc </font></a><br/>
-------------------<br />";

if($driver_area == "Out" ){
$body .= "
<strong>วันที่รับแขก</strong>		:  ".$arr[driver_email][transfer_date]."<br />
<strong>เวลารับแขก</strong>		:  ".$arr[driver_email][airout_time]."<br />
<strong>สถานที่รับแขก</strong>		:  ".$arr[pickup][topic]." ( ".$arr[pickup][province]." / ".$arr[pickup][amphur]." ) <br />
-------------------<br />
<strong>เที่ยวบินที่</strong>			:  ".$arr[driver_email][air]."<br />
<strong>วันที่ขึ้นเครื่อง</strong>		:  ".$arr[driver_email][ondate]."<br />
<strong>เวลาขึ้นเครื่อง</strong>		:  ".$arr[driver_email][airin_time]."<br />
<strong>สถานที่ส่งแขก</strong>		:  ".$arr[toplace][topic]." ( ".$arr[toplace][province]." / ".$arr[toplace][amphur]." ) <br />		
";	
}elseif($driver_area == "In"){
$body .= "
<strong>วันที่รับแขก</strong>		:  ".$arr[driver_email][ondate]."<br />
<strong>เที่ยวบินที่</strong>			:  ".$arr[driver_email][air]."<br />
<strong>เวลาลงจอดเที่ยวบิน</strong>	:  ".$arr[driver_email][airin_time]."<br />
<strong>สถานที่รับแขก</strong>		:  ".$arr[pickup][topic]." ( ".$arr[pickup][province]." / ".$arr[pickup][amphur]." ) <br />
-------------------<br />
<strong>สถานที่ส่งแขก</strong>		:  ".$arr[toplace][topic]." ( ".$arr[toplace][province]." / ".$arr[toplace][amphur]." ) <br />		
";

}else{
$body .= "
<strong>วันที่รับแขก</strong>		:  ".$arr[driver_email][transfer_date]."<br />
<strong>เวลารับแขก</strong>		:  ".$arr[driver_email][airout_time]."<br />
<strong>สถานที่รับแขก</strong>		:  ".$arr[pickup][topic]." ( ".$arr[pickup][province]." / ".$arr[pickup][amphur]." ) <br />
-------------------<br />
<strong>สถานที่ส่งแขก</strong>		:  ".$arr[toplace][topic]." ( ".$arr[toplace][province]." / ".$arr[toplace][amphur]." ) <br />		
";	
}

$mail->SetFrom($webmail_username, 'Golden Beach Tour');
$mail->AddReplyTo($webmail_username,"Golden Beach Tour");
$mail->Subject    = "ใบงาน วันที่ : $driver_date เวลา : $driver_time";
$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
$mail->MsgHTML($body);
$address = $ex_email;
$mail->AddAddress($address, "Golden Beach Tour");
//$attach_file = "data/pdf/vc/$vc.pdf";
//$mail->AddAttachment($attach_file);
 
 




if(!$mail->Send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
}else {
echo " <center>Send Email complete<center>" ;	
}
 
}

?>