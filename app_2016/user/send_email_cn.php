<?

//////////////// mail
 /*
$webmail_port        = 465;                    
$webmail_host        = "smtp.zoho.com"; // SMTP server
$webmail_username    = "system@goldenbeachgroup.com";     // SMTP server username
//$webmail_password    = "252631@MANbooking!@#$";            // SMTP server password 
$webmail_password    = "dfjpsrvs6ah6";            // SMTP server password 
//*/

date_default_timezone_set('Asia/Bangkok');
$date = date('Y-m-d');

$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$allbooking = $db->num_rows(TB_order,"id","type='transfer' and transfer_date='$date' and sub_confirm <>1 $fillcar_ctrip  and master_transfer > '0'  and gbt_control ='1'  and company = '283'  and  (carno = 0  or drivername = '' ) ");


if($allbooking > 0){

//error_reporting(E_ALL);
//error_reporting(E_STRICT);
require_once('phpmail/class.phpmailer.php');
$mail             = new PHPMailer();
//////////////// ส่งเมล์

$golden = $db->num_rows(TB_order,"id","type='transfer'  and agent<>13  and cartype <>'2' and transfer_date='$date' and sub_confirm <>1 $fillcar_ctrip  and master_transfer > '0'  and gbt_control ='1'  and company = '283'  and  (carno = 0  or drivername = '' ) ");
$ctrip = $db->num_rows(TB_order,"id","type='transfer'  and agent=13  and cartype <>'2' and transfer_date='$date' and sub_confirm <>1 $fillcar_ctrip  and master_transfer > '0'  and gbt_control ='1'  and company = '283'  and  (carno = 0  or drivername = '' ) ");
$join = $db->num_rows(TB_order,"id","type='transfer'  and cartype ='2' and transfer_date='$date' and sub_confirm <>1 $fillcar_ctrip  and master_transfer > '0'  and gbt_control ='1'  and company = '283'  and  (carno = 0  or drivername = '' ) ");


$mail->CharSet = "utf-8";
$mail->IsSMTP();                           // 启用SMTP
$mail->SMTPAuth    = true;                  // 启用SMTP认证
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host        = $webmail_host; // SMTP server
$mail->Port        = $webmail_port;                 // set the SMTP port for the GMAIL server
$mail->Username    = $webmail_username;     // SMTP server username
$mail->Password    = $webmail_password ;            // SMTP server password 

//$email = "khamenajakm@gmail.com,arsenal_2533@hotmail.com,arsenal_2533@hotmail.com,khamenajakm@gmail.com";
//$email = "manphuket1@hotmail.com,arsenal_2533@hotmail.com,khamenajakm@gmail.com";
$email = "adminuser_lop@t-booking.com,adminuser_arm@t-booking.com,adminuser_kai@t-booking.com";
$r_email = explode(",",$email);




foreach($r_email as $ex_email){
 
$body = "
<br />
<font style='font-size:18px;color :#336699;'>China Server</font>
<br />
<p>Management transfer not success on date ".$date." From T-Booking System. Please Check Now. <br/>
-----------------------------------------------------------------------------------<br />
Part : <a href='$emailurl/index.php?name=admin&file=mg_driver&part=golden&day=".$date."' target='_blank'><font color=#009900> Golden Beach ( ".$golden." ) </font></a> <br />
Part : <a href='$emailurl/index.php?name=admin&file=mg_driver&part=ctrip&day=".$date."' target='_blank'><font color=#336699> Ctrip ( ".$ctrip." )</font></a> <br />
Part : <a href='$emailurl/index.php?name=admin&file=mg_driver&part=join&day=".$date."' target='_blank'><font color=#f76211> Transfer Join ( ".$join." )</font></a> <br /> 
";
$mail->SetFrom($webmail_username, 'Golden Beach Tour');
$mail->AddReplyTo($webmail_username,"Golden Beach Tour");
$mail->Subject    = "China Server : Management transfer not Complete on date ".$date." Please Check Now.";
$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
$mail->MsgHTML($body);
$address = $ex_email;
$mail->AddAddress($address, "Golden Beach Tour");
//$attach_file = "data/pdf/vc/$vc.pdf";
//$mail->AddAttachment($attach_file);
 
}




if(!$mail->Send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
}else {
echo " <center>Send Email complete<center>" ;	
//echo "<meta http-equiv=refresh content=2;URL=.?name=admin&amp;file=booking&amp;op=bookagent_edit&amp;view=view&amp;id=".$_POST[order].">";
}
 

}

?>