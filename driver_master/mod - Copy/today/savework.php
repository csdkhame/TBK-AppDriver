  <?php  @header ('Content-type: text/html; charset=utf-8'); 
 
 date_default_timezone_set("Asia/Bangkok");
  
 ?>
 
 <?
 
  $_GET[driver];
 
  if($_GET[driver]>0){ ?>
 
 
<style>
@import url('https://fonts.googleapis.com/css?family=Prompt');
</style>
 
 <style>
 
 
 @-webkit-keyframes DIV-BORDER-DV {
    0%   { border-color: #FF0000 }
    50%  { border-color: white }
    100% { border-color: #FF0000 }
}

 @-moz-keyframes DIV-BORDER-DV {
 
    0%   { border-color: #FF0000 }
    50%  { border-color: white }
    100% { border-color: #FF0000 }
}




.tab_alert_dv {
 
      border: 1px solid;
	  
	  
	 	  -webkit-transition: all 1s;
	   -moz-animation: DIV-BORDER-DV 1s infinite;
	  
      -webkit-transition: all 1s;
    -webkit-animation: DIV-BORDER-DV 1s infinite;
}
 
 
 </style>


  <?  include ("bootstrap/fonts/all.php");?> 

 
<?
///include("config.php");
 
?>
 

<?
$date=date('Y-m-d');

 $time=date("H:i:s");
  $timeall=date("H:i");
  

 $timestamp=time();

///echo $date=$_GET[day];


if(!$_GET[day]){
	
  $_GET[day]=$date;
}


 
$sortcar = "outdate_time asc";

$sortcarnext = "airout_time asc";

 
 
 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
  
/////

//$res[project] = $db->select_query("SELECT id,product_area,airout_time,outdate,product_name_th,carno,outdate_time  FROM  transfer_report_all where drivername='".$_GET[driver]."'  and  outdate >= '".$_GET[day]."'  and status='CONFIRM'  order by $sortcar   ");
// $arr[project] = $db->fetch($res[project]); 
 /*

while($arr[project] = $db->fetch($res[project])){
	
	/*
$outdate_time=strtotime($arr[project][outdate].$arr[project][airout_time].':00'); 
 
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);  
$db->update_db(TB_transfer_report_all,array(
 
 "outdate_time"=>$outdate_time
 
		)," id='".$arr[project][id]."' ");
		
		
}

*/

//
  
  
  
  
  
  
  
  
  
  

 
 
 
 
$res[project] = $db->select_query("SELECT id,product_area,airout_time,outdate,product_name_th,carno,outdate_time  FROM  transfer_report_all where drivername='".$_GET[driver]."'  and  transfer_date >= '".$_GET[day]."'  and status='CONFIRM'  order by $sortcar  limit 20 ");
// $arr[project] = $db->fetch($res[project]); 

$i=0;

while($arr[project] = $db->fetch($res[project])){
	
	/*
$outdate_time=strtotime($arr[project][outdate].$arr[project][airout_time].':00'); 
 
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);  
$db->update_db(TB_transfer_report_all,array(
 
 "outdate_time"=>$outdate_time
 
		)," id='".$arr[project][id]."' ");
		
 */

$i++;

 
 

 
 
 
?>

 
  <?
 
  $string_to_replace     = array ("-" ,"," , " ");
$string_after_replace  = array (" ?????? " ,"" , "" ,);
$pro_name_th       = str_replace($string_to_replace , $string_after_replace ,$arr[project][product_name_th], $count);   
 
  ?>

 
 


<table width="100%" border="0" cellspacing="2" cellpadding="2"   id="work_<?=$arr[project][id]?>" >
  <tbody>
    <tr>
      <td width="40" style="font-size:18px; color:#000000"><?= $i;?> )</td>
      <td width="90" style="font-size:16px; color:#FF0000"> 
	  
	  <? //=$arr[project] [carno]?>
	  
	  
	  
	  <? if($arr[project][product_area] == 'In'){ 
						$work_area="???????";
						$music_type="??????????..";
						 $music_service="??????????";
  					 $work_f="?????????..".$arr[project][air]. "";
			  ?>
        <table width="100%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td style="font-size:22px ; color: #3399CC; color:#444444  " width="30">&nbsp;<i class="fa   fa-plane " style=" -webkit-transform:rotateX(180deg);
  -moz-transform:rotateX(180deg);
  -o-transform:rotateX(180deg);
  -ms-transform:rotateX(180deg); "></i></td>
            <td style="font-size:14px ; font-weight:bold">&nbsp;1&#3619;&#3633;&#3610;&#3648;&#3586;&#3657;&#3634;</td>
          </tr>
        </table>
        <?  } elseif($arr[project][product_area] == 'Out'){
						   $work_area="??????";
 
						    ?>
        <table width="100%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td style="font-size:22px ;color: #3399CC; color:#444444  " width="30">&nbsp;<i class="fa   fa-plane "></i></td>
            <td style="font-size:14px ; font-weight:bold">&nbsp;&#3626;&#3656;&#3591;&#3629;&#3629;&#3585;</td>
          </tr>
        </table>
        <? }elseif($arr[project][product_area] == 'Point'){ 
	 
	  $work_area="??????????????";
	  $music_service="??????";
	 ?>
        <table width="100%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td style="font-size:22px ; color: #3399CC; color:#444444  " width="30">&nbsp;<i class="fa   fa-share-alt"></i></td>
            <td style="font-size:14px ; font-weight:bold">&nbsp;&#3614;&#3657;&#3629;&#3618;&#3607;&#3660;</td>
          </tr>
        </table>
        <? }else{ 
						   $work_area="????????";
 
						   
						   ?>
        <table width="100%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td style="font-size:20px ; color: #3399CC; color:#444444 " width="30">&nbsp;<i class="fa  fa-taxi"></i></td>
            <td style="font-size:14px ; font-weight:bold">&nbsp;&#3648;&#3595;&#3629;&#3619;&#3660;&#3623;&#3636;&#3626;</td>
          </tr>
        </table>
      <? } ?></td>
      <td width="80" style="font-size:18px; color:#FF0000"><i class="fa  fa-clock-o"  fa-spin 6x style="color:#999999"></i><b>&nbsp;&nbsp;<?=$arr[project] [airout_time]?></td>
      <td width="80"><b><?=$arr[project] [outdate]?></td>
      <td><?=$pro_name_th?></td>
    </tr>
  </tbody>
</table>
 
  

<? } ?> 



<? } ?>


