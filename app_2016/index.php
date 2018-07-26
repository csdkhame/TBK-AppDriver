<?
session_start();
include "config_fir.php";
if($_SESSION['admin_id'] == ''){
?>
<script>
	window.location = "login.php";
</script>
<?
}
?>
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
        <style type="text/css">
          h1 {font-size:19px !important;font-weight:bold;margin:6px 0px !important;padding:6px 0px !imporant; line-height:30px;}
        </style>
             <style type="text/css">
                * {
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
<script type="text/javascript">
  // Approve - Reject image
$(document).ready(function(){
  $(".btnstatus").click(function(){
  	alert('aaaa');
	});
	});
</script>
</head>
<body class="ui-mobile-viewport" data-pinterest-extension-installed="cr1.39.1">
<link rel="stylesheet" type="text/css" href="scripts/jqueryui.css">
<script src="scripts/jqueryUI.js" type="text/javascript"></script>
<style type="text/css">
   td.telx div, td.telx a {font-size:16px;color:#777777;}
   .ui-dialog { min-height:140px !important;}
</style>
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
?>
<div data-role="page" data-theme="d" id="MainMenu" data-url="MainMenu" class="ui-page ui-body-d ui-page-active">
    <div data-role="header" data-position="fixed" data-id="headerMain" data-theme="b" class="ui-bar-b ui-header ui-header-fixed fade ui-fixed-overlay" role="banner" style="top: 0px;" align="center">
<h1>
สวัสดี คุณ<? echo $arr[web_driver][name]; ?>
</h1>            
    </div> 
    <div data-role="content" class="ui-content" role="main">
        <ul class="iteList">
                  <li><table width="98%"><tbody><tr>
                  <td style="width:40px">
                       <img class="imgA" src="images/1449437987_today.png" width="40">
                  </td>
                  <td><a href="today.php?day=<?=$_GET[day];?>" rel="external" parentid="36"  style="display:block" class="ui-link">งานวันนี้</a></td>
                   <td class="ytb">
                   </td>
                  </tr></tbody></table></li>
                  <li><table width="98%"><tbody><tr>
                  <td style="width:40px">
                       <img class="imgA" src="images/1449437976_plan.png" width="40">
                  </td>
                  <td><a href="all.php" rel="external" parentid="114" onClick="return ocParent(this);" style="display:block" class="ui-link">งานทั้งหมด</a></td>
                   <td class="ytb">
                   </td>
                  </tr></tbody></table>
                  </li>
            <li><table width="98%"><tbody><tr>
                  <td style="width:40px">
                       <img class="imgA" src="images/1449437981_user 2.png" width="40">
                  </td>
                  <td><a href="profile.php" rel="external" style="display:block" class="ui-link">โปรไฟล์</a></td>
                   <td class="ytb">
                   </td>
                  </tr></tbody></table>
                  </li>    
            <li>
            <table width="100%"><tbody><tr>
            <td style="width:40px"><img class="imgA" src="images/1449437949_exit.png" width="40"></td>
            <td>
             <a href="logout.php" rel="external" >ออกจากระบบ</a>
            </td></tr></tbody></table>
            </li>
         </ul>
   </div>
     <div data-role="footer" style="display: none; top: 1611px;" data-position="fixed" data-id="footerMain" class="ui-bar-d ui-footer ui-footer-fixed fade ui-fixed-overlay" role="contentinfo">
    </div>
 </div>
        <script type="text/javascript">
            $(function () {
                window.setInterval(function () {
                    xmlAsyncA2("/Products/CheckState", null, function (req) {
                    });
                }, 60000);
            })
        </script>
<? include "share.php"; ?>
</body>
</html>