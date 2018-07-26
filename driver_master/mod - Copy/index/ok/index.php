 
 <?
 
 //echo date('Y-m-d');
 /// $time_now='05:59:00';


/// echo strtotime($time_now);
 
 
 
 if($_SESSION['data_user_driver']){
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
 
 $company=$arr[web_driver][company];
 
 
 
 
/*
// echo $arr[web_driver][car_num];

$pic_main= file_exists("../admin/file/driver/pic/" .$arr[web_driver][post_date].".jpg");
$pic_card= file_exists("../admin/file/driver/id_card/".$arr[web_driver][post_date].".jpg");
$pic_driver= file_exists("../admin/file/driver/id_driver/".$arr[web_driver][post_date].".jpg");
$pic_home= file_exists("../admin/file/driver/id_home/".$arr[web_driver][post_date].".jpg");
$pic_job= file_exists("../admin/file/driver/id_job/".$arr[web_driver][post_date].".jpg");

/// qr

$pic_qr_line= file_exists("../admin/file/driver/line_qr/".$arr[web_driver][post_date].".jpg");
$pic_qr_wechat= file_exists("../admin/file/driver/wechat_qr/".$arr[web_driver][post_date].".jpg");
 
  $db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD); 
            $db->update_db(TB_driver, array(
			"pic_main" => $pic_main,
			"pic_card" => $pic_card,
			"pic_driver" => $pic_driver,
			"pic_home" => $pic_home,
			"pic_job" => $pic_job,
			"pic_qr_line" => $pic_qr_line,
			"pic_qr_wechat" => $pic_qr_wechat
				 
            ), " id=".$arr[web_driver][id]." ");
 
 */

$profiledoc=$arr[web_driver][pic_main]+$arr[web_driver][pic_card]+$arr[web_driver][pic_driver]+$arr[web_driver][pic_home]+$arr[web_driver][pic_job];
$profiledoc=$profiledoc*20;
}
 
 
 
 
////////// file
if($arr[web_driver][username]<>""){ $profile_username=1; } else {  $profile_username=0; };
 
if($arr[web_driver][password]<>""){ $profile_password=1; } else {  $profile_password=0; };
if($arr[web_driver][name]<>""){ $profile_name=1; } else {  $profile_name=0; };
if($arr[web_driver][name_en]<>""){ $profile_name_en=1; } else {  $profile_name_en=0; };
if($arr[web_driver][nickname]<>""){ $profile_nickname=1; } else {  $profile_nickname=0; };
if($arr[web_driver][idcard]<>""){ $profile_idcard=1; } else {  $profile_idcard=0; };
if($arr[web_driver][iddriving]<>""){ $profile_iddriving=1; } else {  $profile_iddriving=0; };
if($arr[web_driver][address]<>""){ $profile_address=1; } else {  $profile_address=0; };
if($arr[web_driver][phone]<>""){ $profile_phone=1; } else {  $profile_phone=0; };
if($arr[web_driver][contact]<>""){ $profile_contact=1; } else {  $profile_contact=0; };

 
 $profileall=$profile_username+$profile_password+$profile_name+$profile_name_en+$profile_nickname+$profile_idcard+$profile_iddriving+$profile_address+$profile_phone+ $profile_contact;
 $profileall=$profileall*10;
  $profileno=100-$profileall;
  
$db->connectdb(DB_NAME_DATA, DB_USERNAME, DB_PASSWORD);
$res[car_history] = $db->select_query("SELECT * FROM history_use_car WHERE drivername='".$arr[web_driver][id] ."'  order by id desc limit 1   "); 
$arr[car_history] = $db->fetch($res[car_history]);

$res[car_history_last] = $db->select_query("SELECT * FROM history_use_car WHERE drivername='".$arr[web_driver][id] ."' and type='start'  order by id desc limit 1   "); 
$arr[car_history_last] = $db->fetch($res[car_history_last]);
 ?>
 
 <? if(1==1){ ?>
<div  style="margin-right: 0px; padding:10px;box-shadow: 0px -5px 10px #B4B4B4; background-color:#FFFFFF; display:none">
 <form id="edit_form"  name="edit_form" action="" method="post" enctype="multipart/form-data"   >
					

<div id="load_main_use_car">
 

</div>



<script>

 
 $( document ).ready(function() {
 
 
  var url_car_main_start = "go.php?name=checkcar/load&file=main&type=usecar&drivername=<?=$driver_id;?>&usecar=start";   
  
 $("#load_main_use_car").load(url_car_main_start);
 
 
 
 
 
 
 var url_car_start = "go.php?name=checkcar/load&file=start&type=usecar&drivername=<?=$driver_id;?>&usecar=start";   
  
 $("#load_status_use_car").load(url_car_start);
 
 
  

 
 
 
 });
</script>










</form>

<div id="load_status_use_car"  style="margin-top:5px;"> 
 
</div>



</div>
 

                            
                              
 
 
<?
	 
	 
	 
 
 
 
 
 
 
 
 
 
 
 
 
        $db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
        $res[maincar] = $db->select_query("SELECT id,car_type,plate_color,car_sub_brand,car_brand,plate_num,province,car_num   FROM " . TB_carall . "  where  id=".$carnumber."");
  
    $arr[maincar] = $db->fetch($res[maincar]);
            $res[maincartype]   = $db->select_query("SELECT topic_en FROM " .TB_carall_type." WHERE id='" . $arr[maincar][car_type] . "' ");
            $arr[maincartype]   = $db->fetch($res[maincartype]);
 
 
			
			
			
			if($arr[maincartype][topic_en]=='Car'){
			$arr[maincartype][topic_en]='รถเก๋ง';
			}
			if($arr[maincartype][topic_en]=='Van'){
			$arr[maincartype][topic_en]='รถตู้';
			}
			
 
  
     
?>


 

<div class="box-body" style="padding:0px; padding-top:10px; ">
     <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="33%"> <a class="btn btn-app " style="background-color:#FFFFFF; width:auto; border-radius: 15px;" href="?name=all"  >
                <span class="badge bg-yellow"><font class="font_14"><?=check_work_today($driver_id)?> งาน</font></span>
                <i class="fa fa-clock-o "  style="font-size: 24px; margin-top:-3px"></i> <font class="font_14">งานวันนี้
              </a></td>
    <td width="33%">              <a class="btn btn-app" style="background-color:#FFFFFF; border-radius: 15px;  ">
                <span class="badge bg-teal"><font class="font_14">1 คัน</font></span>
            <div style="font-size: 24px; margin-top:-3px">    <i class="icon-new-uniF133-2" style="font-size: 24px; margin-top:-10px"></i></div> <div style="font-size: 24px; margin-top:-0px"><font class="font_14"> 
รถขับประจำ</font></div>
              </a></td>
    <td width="33%">              <a class="btn btn-app" style="background-color:#FFFFFF; border-radius: 15px ">
                <span class="badge bg-red"><font class="font_14">ไม่มี</font></span>
                <i class="fa fa-bell"></i> <font class="font_14">แจ้งเตือน
              </a></td>
  </tr>
</table>

              
             
 
 


 
 </div> 
 
 
 
 <?
  if($company==276 or  $company==283 or  $company==284){  
 
 

 
 require_once("mod/index/ot/main.php");
 
 
 ?>
 
 
 
 
 
 <? } ?>
 
 
 
  
<table width="100%"  border="0" cellspacing="2" cellpadding="2" class="drivertable" style="; border-radius: 25px">
  <tr>
    <td width="40%" ><img src="../data/pic/driver/main/<?=$arr[web_driver][post_date];?>.jpg"  width="105%"   border="0"  class="IMGSHOP"   style="margin-top:15px;border-radius:15px;" /></td>
    <td width="60%" valign="top" style="padding-left:30px">
	  <style>
		
	.drivertable{        
        border-radius:5px; margin-top:10px; margin-bottom:10px;

   border:0px solid #999999; background-color:#FFFFFF; 
   box-shadow: 0px 1px 5px #DADADA;  }
	.tdtable  td {height:26px;}
	
	</style>
	  <br><? if($arr[maincar][plate_color]=="Green"){
	 
	 $plate_color="009999"; } ?>
       <? if($arr[maincar][plate_color]=="Yellow"){
	 
	 $plate_color="FFCC00"; } ?>
       <? if($arr[maincar][plate_color]=="Black"){
	 
	 $plate_color="FFFFFF"; } ?>
       <? if($arr[maincar][plate_color]=="Red"){
	 
	 $plate_color="FF0000"; } ?><table width="95%" cellpadding="1" cellspacing="2"  style="margin-left:0px;  margin-right: 0px; margin-bottom:5px; margin-right:10px; " >
       <?

if($_GET[company_tran] == ''){
	$_GET[company_tran] = 283;
}

if($_GET[company_tran] != ''){
	
	$company_tran = " and company = '".$_GET[company_tran]."' ";

}

if($_GET[status] != ''){
	
	$status = " and status = '".$_GET[status]."' ";

}



 $res[car_type] = $db->select_query("SELECT * FROM ".TB_carall_type." WHERE id='".$arr[maincar][car_type]."' ");
	$arr[car_type] = $db->fetch($res[car_type]);


    $string_to_replace     = array ("COROLLA" );
$string_after_replace  = array ("" );


$arr[maincar][car_sub_brand]      = str_replace($string_to_replace , $string_after_replace ,$arr[maincar][car_sub_brand], $count);   


	//Comment Icon
 

?>
       <? if($arr[maincar][plate_color]=="Green"){
	 
	 $plate_color="009999"; } ?>
       <? if($arr[maincar][plate_color]=="Yellow"){
	 
	 $plate_color="FFCC00"; } ?>
       <? if($arr[maincar][plate_color]=="Black"){
	 
	 $plate_color="FFFFFF"; } ?>
       <? if($arr[maincar][plate_color]=="Red"){
	 
	 $plate_color="FF0000"; } ?>
  <td width="80" align="center" bgcolor="#<?=$plate_color?>" style="border: solid 0px; color:#CCCCCC; padding:5px; padding-right:10px;border-radius: 20px;"><font color="#<? if($arr[maincar][plate_color]=="Green"){
	 
	 echo "FFFFFF"; } ?>"  class="font_26"><b><? echo $arr[maincar][plate_num];?> <br>
              <font   class="font_20"><? echo $arr[maincar][province];?></font></b></font></td>
  </tr>
  <?

 

?>
     </table>
	  <table width="100%"  border="0" cellspacing="2" cellpadding="2"  class="tdtable" >
      <tr>
        <td colspan="2"  class="font_20"><b><? echo "" . $arr[maincartype][topic_en] . " "; ?>  เบอร์ <? echo "" . $arr[maincar][car_num] . ""; ?></td>
        </tr>
 
      <tr>
        <td width="20" class="font_14"><strong>ยี่ห้อ</strong></td>
        <td class="font_14" style="text-transform: inherit   "><? echo $arr[maincar][car_brand];?></td>
      </tr>
      <tr>
        <td class="font_14"><strong>รุ่น</strong></td>
        <td class="font_14"><? echo $arr[maincar][car_sub_brand];?></td>
      </tr>
    </table></td>
  </tr>
</table>













 







<? } ?>
  
 
 <style>
 .icon { padding-top: 20px; } 
p {
	font-family: Arial, Helvetica, sans-serif; font-size:18px;
}
 
 body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
</style>
