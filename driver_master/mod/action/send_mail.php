  <?

 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
  $res[project] = $db->select_query("SELECT id,agent,rsvn,server,invoice,vc_id,orderid,vc_code,product_name FROM ".TB_transfer_report_all."  where id='".$_POST[data_id]."'");
 $arr[project] = $db->fetch($res[project]);
 
if( $arr[project][server] == 'cn'){
	$db->connectdb_cn(DB_NAME,DB_USERNAME,DB_PASSWORD);
	$link_vc = "http://www.t-bookingcn.com";
}else{
	$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
	$link_vc = "http://www.t-booking.com";
}
 
 
 $res[email_admin] = $db->select_query("SELECT email,email_res2,email_res3,email_res4,email_res5,country FROM ".TB_admin." WHERE id='".$arr[project][agent]."' ");
$arr[email_admin] = $db->fetch($res[email_admin]);


$res[email_guest] = $db->select_query("SELECT id,guestemail,guestemail2,guestemail3 FROM ".TB_book_agent." WHERE invoice='".$arr[project][rsvn]."' ");
$arr[email_guest] = $db->fetch($res[email_guest]);

 
 
/// 
///$arr[email_admin][email]="system.goldenbeachgroup@gmail.com";


$email_agent_1 = $arr[email_admin][email];
$email_agent_2 = $arr[email_admin][email_res2];
$email_agent_3 = $arr[email_admin][email_res3];
$email_agent_4 = $arr[email_admin][email_res4];
$email_agent_5 = $arr[email_admin][email_res5]; 

 

$email_guest_1 = $arr[email_guest][guestemail];
$email_guest_2 = $arr[email_guest][guestemail2];
$email_guest_3 = $arr[email_guest][guestemail3];


 
//error_reporting(E_ALL);

//error_reporting(E_STRICT);


require_once('phpmail/class.phpmailer.php');
$mail             = new PHPMailer();


/*
//////
$webmail_port        = 465;                    // 端口
$webmail_host        = "smtp.zoho.com"; // SMTP server
//$webmail_username    = "systeminfoth@t-bookingcn.com";     // SMTP server username
$webmail_username    = "systeminfo-app@t-bookingcn.com";     // SMTP server username
$webmail_password    = "252631@MANbooking!@#$";            // SMTP server password 

*/





$webmail_port        = 465;                    // 端口
$webmail_host        = "mail.smtp2go.com"; // SMTP server
$webmail_username    = "tudtoojung@gmail.com";     // SMTP server username
$webmail_password    = "83KlLJH5pwLR";            // SMTP server password 
 
//////

//$mail->SMTPDebug = 0;
$mail->CharSet = "utf-8";
$mail->IsSMTP();                           // 启用SMTP
$mail->SMTPAuth    = true;                  // 启用SMTP认证
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host        = $webmail_host; // SMTP server
$mail->Port        = $webmail_port;                 // set the SMTP port for the GMAIL server
$mail->Username    = $webmail_username;     // SMTP server username
$mail->Password    = $webmail_password ;            // SMTP server password 

//$mail->SMTPDebug = 0;
//$mail->do_debug = 0;
 /////
 
 
 
 
 /////
///$_GET[photo]='checkcar';



  //// translate
 if($_GET[photo]=='topoint'){
	 
$topic_en='The driver has arrived';
$topic_cn='司机已经到达';
$topic_th='คนขับมาถึงแล้ว';

	 
 }
 
 
 if($_GET[photo]=='yes'){
	 
$topic_en='Guest On the vehicle';
$topic_cn='客人已经上车了';
$topic_th='แขกขึ้นรถแล้ว';

	 
 }
 
  if($_GET[photo]=='no'){
	 
$topic_en='Driver did not find the guest';
$topic_cn='司机找不到游客';
$topic_th='คนขับไม่พบแขก';


$sub_en='Cause';
$sub_cn='原因';
$sub_th='สาเหตุ';
  
 }
 
 
if($_GET[photo]=='finishpoint'){
	 
$topic_en='Driver sent the guest to the place';
$topic_cn='司机已经送客人到终点';
$topic_th='คนขับรถได้ส่งแขกถึงสถานที่ส่งแล้ว';
  
 }
 
 
 if($_GET[photo]=='checkcar'){
	 
$topic_en='The driver has checked that there is no missing luggage on the car';
$topic_cn='司机已经检查车上没有漏行李';
$topic_th='คนขับเช็คสัมภาระแล้วไม่มีของตกหล่น';
  
 }
 
 
 /////////
 
 	 
$pic_en='Photos and maps';
$pic_cn='照片和地图';
$pic_th='ภาพถ่ายและแผนที่';

$thank_en='Thank you for using our service.';
$thank_cn='感谢您使用我们的服务';
$thank_th='ขอบคุณที่ใช้บริการของเรา';


$vc_en='Click Here For View Voucher';
$vc_cn='点击这里查看确认单';
$vc_th='คลิกที่นี่เพื่อดู Voucher';
 
  
 //////
 
 

//$body = file_get_contents("data/html/vc/".$arr[product][invoice]."_".$arr[product][code].".html");
//$body = mb_convert_encoding($body, 'HTML-ENTITIES', "UTF-8");
 $time_check= date('H:i:s',time());
  
if( $arr[project][server] == 'cn'){
 
 $mail->Subject    = "[".$time_check."]  Voucher No. ".$arr[project][invoice]." : ".$topic_en." ,".$topic_cn."   ";
 } else {
	 
$mail->Subject    = "[".$time_check."]  Voucher No. ".$arr[project][invoice]." : ".$topic_en." ,".$topic_th."   "; 
	 
 }
 
 
if( $arr[project][server] == 'cn'){
 
 $body = "<p><div  style='font-size:18px'><b><font style='font-size:24px; color#FF0000'>[".$time_check."] &nbsp;</font><font style='font-size:24px'>Voucher No. ".$arr[project][invoice]."</b> <br>[".$arr[project][product_name]."]</font><br /><br/><font color='#FF0000'> ".$topic_en." &nbsp;&nbsp;".$topic_cn."</div> 
<br />
 <a href='$link_vc/printmail.php?name=admin/voucher&file=transfer&no=".$arr[project][vc_id]."&order=".$arr[project][orderid]."&code=".$arr[project][vc_code]."' target='_blank' style='font-size:30px;text-decoration: none'> <b>".$vc_en."&nbsp;".$vc_cn."&nbsp; ".$arr[project][invoice]." </a><br />
<br />
 
 <b>".$thank_en."&nbsp;&nbsp;".$thank_cn." </b><br/>

<div><a href='$link_vc' target='_blank' style='font-size:18px;text-decoration: none;'>".$link_vc."</a></div>
 
<br/>
 
";  

   } else {
	   

	 
 $body = "<p><div  style='font-size:18px'><b><font style='font-size:24px; color#FF0000'>[".$time_check."] &nbsp;</font><font style='font-size:24px'>Voucher No. ".$arr[project][invoice]."</b> <br>[".$arr[project][product_name]."]</font><br/> <br /><font color='#FF0000'>".$topic_en." &nbsp;&nbsp;".$topic_th."</div> 
<br />
 <a href='$link_vc/printmail.php?name=admin/voucher&file=transfer&no=".$arr[project][vc_id]."&order=".$arr[project][orderid]."&code=".$arr[project][vc_code]."' target='_blank' style='font-size:30px;text-decoration: none'> <b>".$vc_en."&nbsp;".$vc_th."&nbsp; ".$arr[project][invoice]." </a><br />
<br />
 
 <b>".$thank_en."&nbsp;&nbsp;".$thank_th." </b><br/>

<div><a href='$link_vc' target='_blank' style='font-size:18px;text-decoration: none;'>".$link_vc."</a></div>
 
<br/>
 
";
    
    
   }
 
 
 

$mail->SetFrom($webmail_username, 'Golden Beach Tour Co.,Ltd.'); 
$mail->AddReplyTo($webmail_username,"Golden Beach Tour Co.,Ltd.");


 
 
 
 
 
 
		//$mail-
 
///$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test 
 
$mail->MsgHTML($body);

 
 
 
///1
if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email_agent_1)){ 
}
else{ 
$mail->AddAddress($email_agent_1, $email_agent_1);
 }
 
 ///2
 if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email_agent_2)){ 
}
else{ 
$mail->AddAddress($email_agent_2, $email_agent_2);
 }
 
///3
 if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email_agent_3)){ 
}
else{ 
$mail->AddAddress($email_agent_3, $email_agent_3);
 }
 
 ///4
 if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email_agent_4)){ 
}
else{ 
$mail->AddAddress($email_agent_4, $email_agent_4);
 }
  
///
 
 
//// guest email
if($_GET[photo]=='topoint'  or  $_GET[photo]=='checkcar'){
	
	
///1
if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email_guest_1)){ 
}
else{ 
$mail->AddAddress($email_guest_1, $email_guest_1);
 }
 
 ///2
 if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email_guest_2)){ 
}
else{ 
$mail->AddAddress($email_guest_2, $email_guest_2);
 }
 
///3
 if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email_guest_3)){ 
}else{ 
$mail->AddAddress($email_guest_3, $email_guest_3);
 }
 
 
  }  
  
  
  
  if(!$mail->Send()) {

 // echo "Mailer Error: " . $mail->ErrorInfo;

} else {

//echo " <center>Send Email complete<center>" ;	

 

}

 
 ////
 
 ?>