<?
session_start();
include "config_fir.php";

?>
<? include("load.php") ; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" class="ui-mobile landscape min-width-320px min-width-480px min-width-768px min-width-1024px">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>T-Booking</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<link rel="apple-touch-icon" href="https://topup2rich.com/images/iteRestaurant.png">
<link href="scripts/style.css" rel="stylesheet" type="text/css">
<link href="scripts/style(1).css" rel="stylesheet" type="text/css">

        <script type="text/javascript" src="scripts/jQuery.js"></script>
        <script type="text/javascript" src="scripts/jMobile.js"></script>
        <script type="text/javascript" src="scripts/iteMain.js"></script><style type="text/css"></style>
        <script type="text/javascript" src="scripts/jQueryMask.js"></script>
    <link rel="stylesheet" href="styles/kendo.common-material.min.css" />
    <link rel="stylesheet" href="styles/kendo.material.min.css" />

    <script src="js/jquery.min.js"></script>
    <script src="js/kendo.all.min.js"></script>
        <style type="text/css">

          h1 {font-size:19px !important;font-weight:bold;margin:6px 0px !important;padding:6px 0px !imporant; line-height:30px;}
        </style>
        
             <style type="text/css">
                * {
                    /*font-size:18px;*/
                    font-size:15px;
                }
               
           </style>
        

        <style type="text/css">
        
         input[type='text'], input[type='number'], input[type='tel'],textarea, input[type='password']
                {
                        background-color:White !important;
                        -moz-box-shadow: none !important;
                        -webkit-box-shadow: none !important;
                        box-shadow: none !important;
                        -moz-border-radius: 0em !important;
                        -webkit-border-radius: 0em !important;
                        border-radius:0em !important;
                        border:solid 1px #CCCCCC !important;
                }
        </style>


</head>
<body class="ui-mobile-viewport" data-pinterest-extension-installed="cr1.39.1">

        
<link rel="stylesheet" type="text/css" href="scripts/jqueryui.css">
<script src="scripts/jqueryUI.js" type="text/javascript"></script>
 
 

<style type="text/css"> 
         #ulMember .mcode {display:inline-block;width:85px;}  
         #ulMember .inv {font-size:0.9em;color:#777777;}
         .ulLevel table {width:98%;}
         .ulLevel .col1 {width:40px;text-align:center;}
         .ulLevel .col2 {padding-left:10px;}
         .ulLevel .col3 {text-align:right;width:200px;}
         .ulLevel .mnl {color:#777777;font-size:0.85em;margin-right:5px;}
         .ulLevel .mnt {display:inline-block;width:80px;margin-right:50px;}
         .ulLevel .mnb {display:inline-block;width:80px;}
         .ulLevel .txl {display:inline-block;width:120px;padding:2px;text-align:left;}
         .ulLevel .txa {display:inline-block;width:50px;text-align:right;padding:2px;background-color:#CCCCCC;border-radius:5px;}
         .ulLevel .txg {display:inline-block;width:50px;text-align:right;padding:2px;background-color:#26CA50;border-radius:5px;text-shadow:none !important;font-weight:bold;}
         .ulLevel .txr {display:inline-block;width:50px;text-align:right;padding:2px;background-color:red;border-radius:5px;color:White; text-shadow:none !important;font-weight:bold;}
         .ulLevel .line {margin:2px;}
         .ulLevel .tbx {width:auto !important;margin-top:5px;}
         .ulLevel .tbx th {background-color:#888888;font-size:0.8em;font-weight:bold;width:100px; text-align:center;color:white;padding:5px 3px;border-radius:5px;}
         .ulLevel .tbx td {text-align:center;padding:5px 3px;}
         .ulLevel .red5 {background-color:Red;color:White;cursor:pointer;border-radius:5px;}
         .ulLevel .green5 {background-color:#26CA50;cursor:pointer;border-radius:5px;}
         .ulLevel .gay5 {background-color:#888888;color:White;cursor:pointer;border-radius:5px;}
         .ulLevel .normal {background-color:#EEEEEE;cursor:pointer;border-radius:5px;}
         .Detail div {margin-bottom:2px;}
         .Detail .mcode {display:inline-block;width:90px;margin-right:10px;}
         .Detail .tel {color:#666666;font-size:0.9em;}
         .Detail table {}
         .Detail th {background-color:#888888;font-size:0.8em;font-weight:bold;width:90px; text-align:center;color:white;padding:5px 3px;border-radius:5px;}
         .Detail td {text-align:center;padding:5px 3px;}
         .Detail .red5 {background-color:Red;color:White;border-radius:5px;}
         .Detail .green5 {background-color:#26CA50;border-radius:5px;}
         .Detail .gay5 {background-color:#888888;color:White;border-radius:5px;}
         .circleC {font-size:1.6em;}
      </style>

 <?
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);

$res[web_driver] = $db->select_query("SELECT * FROM web_driver WHERE username='".$_SESSION['admin_user_dv']."'    "); 
$arr[web_driver] = $db->fetch($res[web_driver]);

$driver_id =  $_SESSION['admin_id'];
 


 

?>

<div data-role="page" data-theme="d" id="MainMenu" data-url="MainMenu" class="ui-page ui-body-d ui-page-active">
    <div data-role="header" data-position="fixed" data-id="headerMain" data-theme="b" class="ui-bar-b ui-header ui-header-fixed fade ui-fixed-overlay" role="banner" style="top: 0px;" align="center">
      
<h1>ข้อมูลส่วนตัว</h1>
<a href="index.php" rel="external"   data-iconpos="notext" title="Back" data-icon="arrow-l" class="ui-btn-left ui-btn ui-btn-up-b ui-btn-icon-notext ui-btn-corner-all ui-shadow" data-theme="b">
<span class="ui-btn-inner ui-btn-corner-all">
<span class="ui-btn-text">Back</span>
<span class="ui-icon ui-icon-arrow-l ui-icon-shadow"></span>
</span>
</a>

</div> 




<div data-role="content" data-theme="d" class="ui-content ui-body-d" role="main">
 
        <form method="post" action="checklogin.php" id="frmLogin" name="frmLogin">
            <div style="text-align:center;font-size:14px;color:#555555;margin:-10px">
                

            
            
            </div>
            <div class="ui-corner-all" style="border:solid 1px #BBBBBB;padding:15px;margin:15px;text-align:center;">
                <div style="width:85%;margin:auto;max-width:400px;">
                   
                    <div>
                    <div>
<?
$filename = "../admin/file/driver/pic/" . $arr[web_driver][post_date] . ".jpg";
if (file_exists($filename)) { // Ǩͺ
?>

<a href="http://t-booking.com/admin/file/driver/pic/<?=$arr[web_driver][post_date];?>.jpg"  target="_blank">
<img src="http://t-booking.com/admin/file/driver/pic/<?=$arr[web_driver][post_date];?>.jpg"  width="150"  border="0" id="view01" class="driver_pic"  /></a>

<? }else{ ?>
<img src="admin/file/driver/pic/no.jpg" class="circleC"  width="90" height="105" border="0" id="view01" class="IMGSHOP" />
<? } ?>
                        <br />                   	
                    </div>
                    </div>
                   <div>
                    <div>ผู้ใช้งาน</div>
                    <input type="text" name="username" id="username" maxlength="50" required="true" style="width:97%" onkeypress="UserEnter(this,event)" value="<?=$arr[web_driver][username];?>" class="ui-input-text ui-body-null ui-corner-all ui-shadow-inset ui-body-d" readonly="readonly">
                    </div>
                    <div>
                     <div>รหัสผ่าน</div>
                    <input type="password" name="password" id="password"  required="true" onkeypress="PasswordEnter(this,event)" style="padding:4px 2px;width:97%;" value="<?=$arr[web_driver][password];?>" class="ui-input-text ui-body-null ui-corner-all ui-shadow-inset ui-body-d">
                    </div>
                    <div>
                     <div>ชื่อ - นามสกุล ไทย</div>
                    <input type="text" name="name" id="name"  required="true" onkeypress="PasswordEnter(this,event)" style="padding:4px 2px;width:97%;" value="<?=$arr[web_driver][name];?>" class="ui-input-text ui-body-null ui-corner-all ui-shadow-inset ui-body-d">
                    </div>
                    <div>
                     <div>ชื่อ - นามสกุล อังกฤษ</div>
                    <input type="text" name="name_en" id="name_en"  required="true" onkeypress="PasswordEnter(this,event)" style="padding:4px 2px;width:97%;" value="<?=$arr[web_driver][name_en];?>" class="ui-input-text ui-body-null ui-corner-all ui-shadow-inset ui-body-d">
                    </div>
                    <div>
                     <div>เลขบัตรประจำตัวประชาชน</div>
                    <input type="text" name="idcard" id="idcard"  required="true" onkeypress="PasswordEnter(this,event)" style="padding:4px 2px;width:97%;" value="<?=$arr[web_driver][idcard];?>" class="ui-input-text ui-body-null ui-corner-all ui-shadow-inset ui-body-d">
                    </div>
                    <div>
                     <div>ที่อยุ่</div>
                    <input type="text" name="address" id="address"  required="true" onkeypress="PasswordEnter(this,event)" style="padding:4px 2px;width:97%;" value="<?=$arr[web_driver][address];?>" class="ui-input-text ui-body-null ui-corner-all ui-shadow-inset ui-body-d">
                    </div>
                    <div>
                     <div>เบอร์โทรศัพท์</div>
                    <input type="text" name="phone" id="phone"  required="true" onkeypress="PasswordEnter(this,event)" style="padding:4px 2px;width:97%;" value="<?=$arr[web_driver][phone];?>" class="ui-input-text ui-body-null ui-corner-all ui-shadow-inset ui-body-d">
                    </div>
                    <div>
                     <div>เบอร์โทรฉุกเฉิน</div>
                    <input type="text" name="contact" id="contact"  required="true" onkeypress="PasswordEnter(this,event)" style="padding:4px 2px;width:97%;" value="<?=$arr[web_driver][contact];?>" class="ui-input-text ui-body-null ui-corner-all ui-shadow-inset ui-body-d">
                    </div>
                    <div>
                     <div>E-mail</div>
                    <input type="text" name="email" id="email"  required="true" onkeypress="PasswordEnter(this,event)" style="padding:4px 2px;width:97%;" value="<?=$arr[web_driver][email];?>" class="ui-input-text ui-body-null ui-corner-all ui-shadow-inset ui-body-d">
                    </div>
                    <div>
                     <div>Wechat ID</div>
                    <input type="text" name="wechat_id" id="wechat_id"  required="true" onkeypress="PasswordEnter(this,event)" style="padding:4px 2px;width:97%;" value="<?=$arr[web_driver][wechat_id];?>" class="ui-input-text ui-body-null ui-corner-all ui-shadow-inset ui-body-d">
                    </div>
                    <div>
                     <div>Line ID</div>
                    <input type="text" name="line_id" id="line_id"  required="true" onkeypress="PasswordEnter(this,event)" style="padding:4px 2px;width:97%;" value="<?=$arr[web_driver][line_id];?>" class="ui-input-text ui-body-null ui-corner-all ui-shadow-inset ui-body-d">
                    </div>
                    <div>
                     <div>วันที่เริ่มงาน</div>
                    <input type="text" name="start_work" id="start_work"  required="true" onkeypress="PasswordEnter(this,event)" style="padding:4px 2px;width:97%;" value="<?=$arr[web_driver][start_work];?>" class="ui-input-text ui-body-null ui-corner-all ui-shadow-inset ui-body-d" readonly="readonly">
                    </div>
 
 


                    <div style="margin-top:30px">
                           <a href="#"   onclick="return btnSave(this);" data-role="button" data-theme="b" class="ui-btn ui-btn-corner-all ui-shadow ui-btn-up-b"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">บันทึกข้อมูล</span></span></a>

       

                    </div>
                </div>
            </div>

       </form>
       

       

            
 

   </div>
 <div data-role="footer" style="display:none" class="ui-bar-b ui-footer" role="contentinfo">
    </div> 
 </div>

 




</body>

</html>