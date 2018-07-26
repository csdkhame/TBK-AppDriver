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
         .ulLevel .green5 {background-color:#26CA50;color:White;cursor:pointer;border-radius:5px;}
         .ulLevel .gay5 {background-color:#888888;color:White;cursor:pointer;border-radius:5px;}
         .ulLevel .normal {background-color:#EEEEEE;cursor:pointer;border-radius:5px;}
         .Detail div {margin-bottom:2px;}
         .Detail .mcode {display:inline-block;width:90px;margin-right:10px;}
         .Detail .tel {color:#666666;font-size:0.9em;}
         .Detail table {}
         .Detail th {background-color:#888888;font-size:0.8em;font-weight:bold;width:90px; text-align:center;color:white;padding:5px 3px;border-radius:5px;}
         .Detail td {text-align:center;padding:5px 3px;}
         .Detail .red5 {background-color:Red;color:White;border-radius:5px;}
         .Detail .green5 {background-color:#26CA50;color:White;border-radius:5px;}
         .Detail .gay5 {background-color:#888888;color:White;border-radius:5px;}
         .circleC {font-size:1.6em;}
      </style>
<?
if($_GET[day] != ''){
	$_GET[day] = $_GET[day];
}else{
	$_GET[day] = date('Y-m-d');
}
?> 
<div data-role="page" data-theme="d" id="MainMenu" data-url="MainMenu" class="ui-page ui-body-d ui-page-active">
    <div data-role="header" data-position="fixed" data-id="headerMain" data-theme="b" class="ui-bar-b ui-header ui-header-fixed fade ui-fixed-overlay" role="banner" style="top: 0px;" align="center">
<h1>งานทั้งหมด</h1>
<a href="index.php" rel="external"   data-iconpos="notext" title="Back" data-icon="arrow-l" class="ui-btn-left ui-btn ui-btn-up-b ui-btn-icon-notext ui-btn-corner-all ui-shadow" data-theme="b">
<span class="ui-btn-inner ui-btn-corner-all">
<span class="ui-btn-text">Back</span>
<span class="ui-icon ui-icon-arrow-l ui-icon-shadow"></span>
</span>
</a>
</div> 
<script src="js/jquery.min.js"></script>
<div data-role="content" class="ui-content" role="main">
<div class="ui-corner-all" style="border:solid 1px #BBBBBB;padding:15px;margin:15px;text-align:center;"> 
        <div align="center">
                           <span class="fldZ labelA" langen="Date" langth="งานวันนี้">งานวันที่</span>
<input type="text"  readonly="readonly"  maxlength="10" value="<?=$_GET[day];?>"  name="date_report" id="date_report" style="width: 100px">                         
<!-- Dateoick Calendar -->		
 <div style="display: none;"  > 
<span id="calImgInx">
<img src="images/calendar.png" style="cursor:pointer" id="imgCal1" data-pin-nopin="true" align="absmiddle">
</span>
</div>                                 
<a id="btn_form" data-role="button" data-theme="b" class="ui-btn ui-btn-corner-all ui-shadow ui-btn-up-b "><span class="ui-btn-inner ui-btn-corner-all  "><span class="ui-btn-text">ค้นหา</span></span></a>
        </div>
</div> 
<?
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res[web_driver] = $db->select_query("SELECT * FROM web_driver WHERE username='".$_SESSION['admin_user_dv']."'    "); 
$arr[web_driver] = $db->fetch($res[web_driver]);
$driver_id =  $_SESSION['admin_id'];
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res[gg_map] = $db->select_query("SELECT id,map,transferplace_type,star FROM ".TB_transferplace_new."  ");
	while($arr[gg_map] = $db->fetch($res[gg_map])){
		$arr_map[$arr[gg_map][id]] = $arr[gg_map][map];
		$arr_type[$arr[gg_map][id]] = $arr[gg_map][transferplace_type];
		$arr_star[$arr[gg_map][id]] = $arr[gg_map][star];
	}
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res[gg_map] = $db->select_query("SELECT id,topic,province,amphur FROM ".TB_transferplace."  ");
	while($arr[gg_map] = $db->fetch($res[gg_map])){
		$arr_t_topic[$arr[gg_map][id]] = $arr[gg_map][topic];
		$arr_t_province[$arr[gg_map][id]] = $arr[gg_map][province];
		$arr_t_amphur[$arr[gg_map][id]] = $arr[gg_map][amphur];
	}	
?> 
<div data-role="content" class="ui-content" role="main" style="border:solid 1px #BBBBBB;padding:15px;margin:15px;text-align:center;">
        <ul id="ulLevel" class="iteList ulLevel" onclick="ulLevelClick(this,event);" >
<li><img src="images/loading-large.gif"/></li>
        </ul>
   </div>
 <!--  datepicker OK --> 
<link href="js/datepick/jquery.datepick.css" rel="stylesheet">
<script src="js/datepick/jquery.plugin.js"></script>
<script src="js/datepick/jquery.datepick.js"></script> 
<script src="js/datepick/datepick.op.js"></script> 
<script type="text/javascript">
 $('#date_report').datepick({altField: '#star_cal' 	, dateFormat: 'yyyy-mm-dd' 	, showTrigger: '#calImgInx' }); 
$("#btn_form").click(function(){
	//$('.loader').show();
	var date_report = $("#date_report").val();
	var url_place = "data.php?day="+$("#date_report").val()+"";
	//window.location = "all_in.php?day="+date_report+"";
	$('#ulLevel').html('<li><img src="images/loading-large.gif"/></li>');
	$('#ulLevel').load(url_place);
	
	
});

	var url_place = "data.php?day="+$("#date_report").val()+"";
	$('#ulLevel').load(url_place);
	//$('.loader').show();




        
</script>
   </div>
</div>
</body>
</html>