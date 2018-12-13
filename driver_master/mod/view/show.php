
 


<?php
if($_GET[admin_company] == 5){
	$outdate_bkk = $_GET[outdate_bkk];
}else{
	$outdate_bkk = $_GET[day];
}
?>


 

   <? $google_api="AIzaSyDJa08ZMaSnJP5A6EsL9wxqdDderh7zU90";?>
 
 <div style="overflow: scroll; margin-top:30px; ">
<script>
geolocatCall();
 $("#head_full_popup" ).html("จัดการงาน <?=$outdate_bkk?>");
  $("#head_full_popup_icon" ).html("<i class='fa  fa-clock-o'></i>");
 
</script>
  


  


  <ul class="nav nav-tabs" style="padding:2px; padding-bottom:10px;">
  	 <li class="active"  id="btn_chk_full" style="padding:2px;"><a  style="font-size:24px;">ทั้งหมด</a></li>
    
    <li id="btn_chk_short" ><a  style="font-size:24px;">แบบย่อ</a></li>
 
 
  </ul>


<script>





</script>



 <script>
 
 
 
$('#btn_chk_short').click(function(){ 

$('.show_guest_detail_all').hide(''); 
$('.show_product_detail_all').hide(''); 

$('#btn_chk_short').addClass("active");
$('#btn_chk_full').removeClass("active");
 
 });

 

$('#btn_chk_full').click(function(){ 

$('.show_guest_detail_all').show(''); 	
	$('.show_product_detail_all').show(''); 
	
	$('#btn_chk_full').addClass("active");
	$('#btn_chk_short').removeClass("active");
	
	
 
 
 });

 
 	
					</script> 




 
<div >


<? //=$_GET[cartype]?>


 <?php
 /**
 * ******************************** CALL REMARKKKKKKKK
 * @return
 */
 
 //*
 
 function func_remark_reader($id,$server){

$url = "http://www.t-booking.com/json_remark.php?id=".$id."&server=".$server;
  $ch = curl_init($url);
  curl_setopt( $ch, CURLOPT_ENCODING, "utf-8" );
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_POST, true); 
  $data = curl_exec($ch);
  curl_close($ch);
return $data;
}
//*/
 
 ?>



    
<?
if($_GET[sv] == 'cn'){
	$link_vc = "http://www.t-bookingcn.com/";
}else{
	$link_vc = "http://www.t-booking.com/";
}

 

/// data db
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);

 
if($_GET[cartype]==2 ){ 



$res[project] = $db->select_query("SELECT * FROM ".TB_transfer_report_all."  where drivername='".$driver_id."' and transfer_date='".$_GET[day]."' and carno = '".$_GET[carno]."'  and cartype= 2 and status='CONFIRM'  group  by invoice  order by airin_h ASC,airin_time ASC  limit 10 ");


///// ดึง 1 ข้อมูล

/*
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);


	$res[projectshow] = $db->select_query("SELECT * FROM ".TB_transfer_report_all."  where drivername='".$driver_id."' and transfer_date='".$_GET[day]."' and carno = '".$_GET[carno]."' and cartype= 2 group by invoice");
	$arr[projectshow] = $db->fetch($res[projectshow]);


*/
 //echo $arr[project่show][name_pickup_place];
 
//echo $_GET[day];

///



///

 $allcar = $db->num_rows(TB_transfer_report_all,"id","drivername='".$driver_id."' and transfer_date='".$_GET[day]."' and carno = '".$_GET[carno]."' and cartype= 2 group by invoice"); 
 
 
  $allcar_place = $db->num_rows(TB_transfer_report_all,"id","drivername='".$driver_id."' and transfer_date='".$_GET[day]."' and carno = '".$_GET[carno]."' and cartype= 2  and place_number > 0 group by invoice"); 
  
  if($allcar_place==$allcar){
  
  $join_sort='place_number ASC';
  
  } else {
  
  $join_sort='airin_h ASC,airin_time ASC';
  
  }
  
 

}
 
 
 
?>

 
 
 
 


  





    
    
<?

//// loop ข้อมูลหลัก
if($_GET[sv] == 'cn'){
	$link_vc = "http://www.t-bookingcn.com/";
}else{
	$link_vc = "http://www.t-booking.com/";
}

 

/// data db
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);

 
if($_GET[cartype]==2 ){ 
$res[project] = $db->select_query("SELECT * FROM ".TB_transfer_report_all."  where drivername='".$driver_id."' and transfer_date='".$_GET[day]."' and carno = '".$_GET[carno]."'  and cartype= 2 and status='CONFIRM'  group  by invoice  order by airin_h ASC,airin_time ASC  limit 10 ");

$allcar = $db->num_rows(TB_transfer_report_all,"id","drivername='".$driver_id."' and transfer_date='".$_GET[day]."' and carno = '".$_GET[carno]."' and cartype= 2 group by invoice"); 

}
 
if($_GET[cartype]<>2 ){ 
 
$res[project] = $db->select_query("SELECT * FROM ".TB_transfer_report_all."  where drivername='".$driver_id."' and transfer_date='".$_GET[day]."' and id = '".$_GET[id]."' and status='CONFIRM' group by invoice  order by airin_h ASC,airin_time ASC  limit 10 ");
$allcar="1";
//

}

///$res[project] = $db->select_query("SELECT * FROM ".TB_transfer_report_all."  where drivername='".$driver_id."' order by airin_h ASC,airin_time ASC limit 1  ");
 
 
?>









 <div data-role="content"   role="main">
	
 
 <?
$i=1;
while($arr[project] = $db->fetch($res[project])){
 
 
 
 
 ////// งานรวม  	70101242
 
 /*
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);  
$db->update_db(TB_transfer_report_all,array(
			  "driver_topoint"=>"1",
		  "driver_pickup"=>"1",
			"driver_checkcar"=>"1",
			"driver_scancode"=>"1",
			 "driver_complete"=>"0"
 
		)," id='".$arr[project][id]."' ");
 
 */
 /// 

 
 
$datetime = $arr[project][outdate]." ".$arr[project][airout_time].":00";
$exp = explode(" ",$datetime);
$t = explode(":",$exp[1]);
$d = explode("-",$exp[0]);

 $time_booking = @mktime($t[0], $t[1], $t[2], $d[1], $d[2], $d[0]);	

/*
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res[product] = $db->select_query("SELECT cartype,area,admin_company,topic_en,topic_th  FROM web_transferproduct WHERE id='".$arr[project][program]."' ");
	$arr[project] = $db->fetch($res[product]);
	
	
 */
 
 $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
	$res[showlogo] = $db->select_query("SELECT id,company,company_or FROM ".TB_admin." WHERE id='".$arr[project][agent]."' ");
	$arr[showlogo] = $db->fetch($res[showlogo]);
	
 $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
 $res[pickup] = $db->select_query("SELECT topic,amphur,province,phone FROM ".TB_transferplace." WHERE id='".$arr[project][pickup_place]."' ");
$arr[pickup] = $db->fetch($res[pickup]);
	
	$res[to] = $db->select_query("SELECT topic,amphur,province,phone FROM ".TB_transferplace." WHERE id='".$arr[project][to_place]."' ");
	$arr[to] = $db->fetch($res[to]);
	///
	 $res[pickupmap] = $db->select_query("SELECT map,lat,lng,place_id FROM ".TB_transferplace_new." WHERE id='".$arr[project][pickup_place]."' ");
$arr[pickupmap] = $db->fetch($res[pickupmap]);
	
	$res[tomap] = $db->select_query("SELECT map,lat,lng,place_id FROM ".TB_transferplace_new." WHERE id='".$arr[project][to_place]."' ");
	$arr[tomap] = $db->fetch($res[tomap]);
	
	//

  $chk_logo = file_exists("../admin/file/logo/".$arr[project][agent].".jpg");
	

/*
	$res[place] = $db->select_query("SELECT topic FROM ".TB_transferplace." WHERE id='".$arr[project][pickup_place]."' ");
	$arr[place] = $db->fetch($res[place]);
	
	$res[to] = $db->select_query("SELECT topic FROM ".TB_transferplace." WHERE id='".$arr[project][to_place]."' ");
	$arr[to] = $db->fetch($res[to]);
*/	
	//////////
//for($i=1;$i<=6;$i++){


?>
<?
 if($_GET[sv] == 'th'){
 /*
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);

$res[remark] = $db->select_query("SELECT  id,remark,adult,child,baby,admin_company FROM  ".TB_order."  where invoice='".$arr[project][invoice]."'  ");
$arr[project] = $db->fetch($res[remark]);

//echo $arr[project][invoice];
  */
	}
	
	if($_GET[sv] == 'cn'){
	/*
$db->connectdb_cn(DB_NAME,DB_USERNAME,DB_PASSWORD);

$res[remark] = $db->select_query("SELECT  id,remark,adult,child,baby,admin_company FROM  ".TB_order."  where invoice='".$arr[project][invoice]."'  ");
 $arr[project] = $db->fetch($res[remark]);
 */
  
	}
 ?>
 
 	
			<? 
			 
			if($arr[project][agent]=='13' and  $arr[project][cartype] <>'2'){
			$carpart="Ctrip";			
			}
				if($arr[project][agent]=='13' and  $arr[project][cartype] =='2'){
			$carpart="Join";			
			}
			
			if($arr[project][agent]<>'13' and  $arr[project][cartype] <>'2'){
			$carpart="Golden";			
			}
				if($arr[project][agent]<>'13' and  $arr[project][cartype] =='2'){
			$carpart="Join";			
			}
			
			if($arr[project][admin_company]<>'1' and  $arr[project][cartype] <>'2'){
			$carpart="Private";			
			}
  
			
			?>

 	<?php
    
 	//$remark =  func_remark_reader($arr[project][vc_id],$arr[project][server]);
   //echo $remark;
 
 
    ?>

   <iframe style="border:none; display:none" src="go.php?name=trans&sl=auto&tl=th&q=<? echo $remark;?>&p=1&method=get&type=output&id=<?=$arr[project][id]?>&vc=<?=$arr[chat][voucher]?>&from=<?=$chat_from?>&lang=<?=$_GET[lang]?>"  ></iframe>
 
 <div  class="box box-default" style="padding:5px; border-top:none"    >
 
                  <table width="100%" >
              
                        <tr>
                           <td  >
						   
	 <div  style="margin-left:0px;  margin-right: 0px; margin-top:0px;box-shadow: 0px -5px 5px #f6f6f6; padding:5px;"    > 

 
 
						   <table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="60"  style="background-color:#F6F6F6 "><div   id="cir_<?=$i;?>">
      <table width="100%"  border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td height="35"   class="boxnumber" style="font-size:18px; color:#FFFFFF; background-color: #006699 ; font-weight:bold ;border-radius: 0px;" id=>
	
	
	  <center>
	
 
 

 
 
 
	
	<span id="place_number_<?=$arr[project][id]?>"><?=$i;?></span> | <?=$allcar;?>
    </center></td>
  </tr>
</table>
</div> </td>
    
    <td width="100" height="30" valign="top" style="background-color:#F3F3F3; padding-top:5px; padding-left:10px;  "><? if($arr[project][cartype] == 2){  
	
	$work_type="จอย";
	
	?>
        <table width="100%"  border="0" cellspacing="0" cellpadding="0" >
          <tr>
            <td style="font-size:24px ; color:#009999; color:#444444"><i class="fa fa-users"></i></td>
            <td  style="font-size:16px ; font-weight:bold; margin-left:-10px;">จอย </td>
          </tr>
        </table>
        <? }else{ 
	  $work_type="ไพรเวท";
	  
	  ?>
        <table width="100%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td style="font-size:24px ; color:#009999; color:#444444;"><i class="fa fa-user"></i></td>
            <td  style="font-size:14px ; font-weight:bold">ไพรเวท</td>
          </tr>
        </table>
        <? } ?></td>
    <td valign="middle" style="font-size:16px ; font-weight:bold; padding-top:5px;"> 
  
						<? if($arr[project][product_area] == 'In'){ 
						$work_area="รับเข้า";
						$music_type="รับเข้าจาก..";
						 $music_service="รับเข้าจาก";
  					 $work_f="เที่ยวบิน..".$arr[project][air]. "";
			  ?>
 
 
						 
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr> 
 <td style="font-size:22px ; color: #3399CC; color:#444444  " width="30">&nbsp;<i class="fa   fa-plane " style=" -webkit-transform:rotateX(180deg);
  -moz-transform:rotateX(180deg);
  -o-transform:rotateX(180deg);
  -ms-transform:rotateX(180deg); "></i></td>
    <td style="font-size:16px ; font-weight:bold">&nbsp;รับเข้า</td>
  </tr>
</table>  
						  
 		 
						   
						   <?  } elseif($arr[project][product_area] == 'Out'){
						   $work_area="ส่งออก";
						   $music_type="ส่งออกจาก..";
						   
						    $music_service="ส่งออกจาก";
						    
						   $work_f="เที่ยวบิน..".$arr[project][air]. "";
						    ?>
						   
						   <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr> 
 <td style="font-size:22px ;color: #3399CC; color:#444444  " width="30">&nbsp;<i class="fa   fa-plane "></i></td>
    <td style="font-size:16px ; font-weight:bold">&nbsp;ส่งออก</td>
  </tr>
</table>  
 
						  
	 <?  } elseif($arr[project][product_area] == 'Point'){ 
	 
	  $work_area="พ้อยท์ทูพ้อยท์";
	  $music_service="รับจาก";
	 ?>  
						<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr> 
 <td style="font-size:22px ; color: #3399CC; color:#444444  " width="30">&nbsp;<i class="fa   fa-share-alt"></i></td>
    <td style="font-size:16px ; font-weight:bold">&nbsp;พ้อยท์</td>
  </tr>
</table>  
						  
	 
	  
	<?  } elseif ($arr[project][product_area] == 'InOut'){ 
						 
						 
 
						   ?> 
 
 <? if($arr[project][pickup_place]==1461 or  $arr[project][pickup_place]==193){ 
 
 
 					$airport="In";
 
 						$work_area="รับเข้า";
						$music_type="รับเข้าจาก..";
						 $music_service="รับเข้าจาก";
  					 $work_f="เที่ยวบิน..".$arr[project][air]. "";
 
 
 
 ?>
 
 <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr> 
 <td style="font-size:22px ; color: #3399CC; color:#444444  " width="30">&nbsp;<i class="fa   fa-plane " style=" -webkit-transform:rotateX(180deg);
  -moz-transform:rotateX(180deg);
  -o-transform:rotateX(180deg);
  -ms-transform:rotateX(180deg); "></i></td>
    <td style="font-size:16px ; font-weight:bold">&nbsp;รับเข้า</td>
  </tr>
</table>  
						 
 
 <? } ?>
 
 
 
 
  
 <? if($arr[project][to_place]==1461 or  $arr[project][to_place]==193){ 
 
 
 
 				$airport="Out";
 
 
 
 
   $work_area="ส่งออก";
						   $music_type="ส่งออกจาก..";
						   
						    $music_service="ส่งออกจาก";
						    
						   $work_f="เที่ยวบิน..".$arr[project][air]. "";
						    ?>
						   
						   <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr> 
 <td style="font-size:22px ;color: #3399CC; color:#444444  " width="30">&nbsp;<i class="fa   fa-plane "></i></td>
    <td style="font-size:16px ; font-weight:bold">&nbsp;ส่งออก</td>
  </tr>
</table>  
 
 
 <? } ?>
 
 
 	
						 
                           
                           
                           
                           
                           
                           
          <?  } else { 
						   $work_area="เซอร์วิส";
						   $music_service="งานใช้รถใน";
						   
						   ?> 
 
 
 <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr> 
 <td style="font-size:20px ; color: #3399CC; color:#444444 " width="30">&nbsp;<i class="fa  fa-taxi"></i></td>
    <td style="font-size:16px ; font-weight:bold">&nbsp;เซอร์วิส</td>
  </tr>
</table>
						
						   <? } ?>                  
                           
                           
                           
                           </td>
   
  </tr>
</table>
<script>
///setTimeout(responsiveVoice.speak("Welcome to the Responsive Voice website"), 3000);
</script>

 
<?php 
if($_GET[admin_company] == 5){
	$transfer_date_admin = $arr[project][outdate];
}else{
	$transfer_date_admin = $arr[project][transfer_date];
}
?>
<div  style="margin-top:10px; font-size:22px; font-weight:bold; background-color:#F6F6F6; padding:5PX;border-radius: 10px; "><?=$carpart?>&nbsp;&nbsp;<?=$arr[project][carno];?>&nbsp;<span style="font-size:16px; margin-top: 30px; "> ( <?=$transfer_date_admin;?> )</span></div>
 <div style="margin-top:10px;padding:5px;    ">
 
  <?
$string_to     = array ("/" );
$string_after  = array (" - " );
$pro_name_th_cut = str_replace($string_to , $string_after ,$arr[project][product_name_th], $count);   
$pro_name_en_cut= str_replace($string_to , $string_after ,$arr[project][product_name], $count);   
  ?>
  
  
  <div class="show_product_detail_all" style="display:nones ">
  
  <font class="font_16"><b>
  <?=$pro_name_en_cut?>&nbsp; &nbsp;<font color="#666666"> <?=$pro_name_th_cut?></font></b></div>
 
 
						   
						   <table width="100%"  border="0" cellspacing="0" cellpadding="0" >
                             <tr>
                               <td >
							   
 
							   
							   <div style="background-color:#F6F6F6; margin-top:5px; margin-bottom:5px; padding: 2px 0px 2px 0px;border-radius: 20px;"   >
                                   <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                     <tr>
                                       <td valign="top"><div class="topictransfer1" style=" margin-top: -2px; margin-left:" ><i class="icon-new-uniF139-6" style="color:#666666"></i> <span class="font_18">สถานที่รับ</span></div></td>
                                     </tr>
                                   </table>
                                   


                               </div>
							   
				    
							   


</td>
                             </tr>
                             <tr>
                               <td ><div  align="left"  style="font-size:20px; "> <? echo $arr[project][name_pickup_place] ?>
							   
							   
  <? if($arr[project][pickup_place]==193){   ?>
	  
  <?
	   	 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$res[terminalair] = $db->select_query("SELECT id,terminal FROM airport_detail  WHERE air_name='".$arr[project][air]."' or  air_name like '%".$arr[project][air]."%'  or air_f like '%".$arr[project][air]."'   ");
$arr[terminalair] = $db->fetch($res[terminalair]);
 
if($arr[terminalair][terminal]==1){
$terminal="อาคารผู้โดยสารใหม่";
} 
if($arr[terminalair][terminal]==3){
$terminal="อาคารผู้โดยสารเก่า";
} 
 
 
	  ?>
  
                        
                        
                        
                        
                        
                        
                        <br>
 
<font color="#FF0000" style="font-size:18px"><? //=$terminal?>

<?
	   
 
 }
 
	  ?>	   
	</font>						   
							   
 


<font color="#666666" class="font_16"> (<? echo $arr[project][name_pickup_place_area] ?> | <? echo $arr[project][name_pickup_place_province] ?>) 
 


<div id="show_map_pickup_show_<?=$arr[project][id]?>">

<?
 // include "mod/load/today/sub/place/pickup.php";

?></div>

<script>

var url_map_show_pickup_<? echo $arr[project][id];?> = "go.php?name=load/today/sub/place&file=pickup&id=<?=$arr[project][id];?>&pickup=<?=$arr[project][pickup_place];?>&to=<?=$arr[project][to_place];?>&set=show";
 
 url_map_show_pickup_<? echo $arr[project][id];?>=url_map_show_pickup_<? echo $arr[project][id];?>+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
url_map_show_pickup_<? echo $arr[project][id];?>=url_map_show_pickup_<? echo $arr[project][id];?>+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;


 $('#show_map_pickup_show_<?=$arr[project][id]?>').html(load_main_mod); 
/// $('#load_data_manage_work_show').load(url_chat_<? echo $arr[project][id];?>); 
 
 
 $.post(url_map_show_pickup_<? echo $arr[project][id];?>,$('#form_popup_send_data').serialize(),

function(response){ $('#show_map_pickup_show_<?=$arr[project][id]?>').html(response); });

</script>






</div>

 


</td>
                             </tr>
                             <tr>
                               <td id="show_guest_detail_<? echo $arr[project][id] ?>" class="show_guest_detail_all" >
                               
                       
                       
                       
                       
   
 
                       
                        <?  include "mod/view/data_guest.php" ;?>
 
 
                               </td>
                             </tr>
                             <tr>
                               <td></td>
                             </tr>
                             <tr>
                               <td >
							   
							   
							   
					<div style="background-color:#F6F6F6; margin-top:5px; margin-bottom:5px; padding: 2px 0px 2px 0px;border-radius: 20px;"   >
                                   <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                     <tr>
                                       <td valign="top"><div class="topictransfer1" style=" margin-top: -2px; margin-left:" ><i class="icon-new-uniF139-6" style="color:#666666"></i> <span class="font_18">สถานที่ส่ง</span></div></td>
                                     </tr>
                                   </table>
                                   


                               </div>		   
							   
	 </td>
                             </tr>
                             <tr>
                               <td ><div  align="left"  style="font-size:20px; "> <? echo $arr[project][name_to_place] ?>
							   
							   
  <? if($arr[project][to_place]==193){   ?>
	  
  <?
	   	 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$res[terminalair] = $db->select_query("SELECT id,terminal FROM airport_detail  WHERE air_name='".$arr[project][air]."' or  air_name like '%".$arr[project][air]."%'  or air_f like '%".$arr[project][air]."'   ");
$arr[terminalair] = $db->fetch($res[terminalair]);
 
if($arr[terminalair][terminal]==1){
$terminal="อาคารผู้โดยสารใหม่";
} 
if($arr[terminalair][terminal]==3){
$terminal="อาคารผู้โดยสารเก่า";
} 
 
 
	  ?>
  
                        
                        
                        
                        
                        
                        
                        <br>
 
<font color="#FF0000" style="font-size:18px"><? //=$terminal?>

<?
	   
 
 }
 
	  ?>	   
	</font>						   
							   






<font color="#666666" class="font_16"> (<? echo $arr[project][name_to_place_area] ?> | <? echo $arr[project][name_to_place_province] ?>) 
 



<div id="show_map_to_show_<?=$arr[project][id]?>">

<?
 // include "mod/load/today/sub/place/pickup.php";

?></div>

<script>

var url_map_show_to_<? echo $arr[project][id];?> = "go.php?name=load/today/sub/place&file=toplace&id=<?=$arr[project][id];?>&pickup=<?=$arr[project][pickup_place];?>&to=<?=$arr[project][to_place];?>&set=show";
 
 url_map_show_to_<? echo $arr[project][id];?>=url_map_show_to_<? echo $arr[project][id];?>+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
url_map_show_to_<? echo $arr[project][id];?>=url_map_show_to_<? echo $arr[project][id];?>+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;


 $('#show_map_to_show_<?=$arr[project][id]?>').html(load_main_mod); 
/// $('#load_data_manage_work_show').load(url_chat_<? echo $arr[project][id];?>); 
 
 
 $.post(url_map_show_to_<? echo $arr[project][id];?>,$('#form_popup_send_data').serialize(),

function(response){ $('#show_map_to_show_<?=$arr[project][id]?>').html(response); });

</script>








</div>






</td>
                             </tr>
                             
 <tr style="display: none<? if($arr[project][product_area] == 'Out' or $airport=="Out"){ echo "1"; } ?>">
           <td  >
           
       <table width="100%" border="0" cellspacing="2" cellpadding="4" style="margin-left:-10px;">
 
      <tr>
      <td width="20" valign="top" ><i class="icon-new-uniF104" style="color:#666666; font-size:18px;"></i></td>
      <td width="100" valign="top" class="td-text"><b>เที่ยวบิน</td>
      <td valign="top" class="td-text"><? echo $arr[project][air];?> / <? echo $arr[project][airin_time];?></td>
    </tr>
  
           
       </table>   
       
       
         </td>
 </tr>
<tr style="display:none<? echo $arr[project][remark];?>">
                               <td >
       <table width="100%" border="0" cellspacing="2" cellpadding="4" style="margin-left:-10px;">
 
      <tr>
      <td width="20" valign="top" ><i class="icon-new-uniF114-6" style="color:#666666; font-size:18px;"></i></td>
      <td width="100" valign="top" class="td-text"><b>หมายเหตุ</td>
      <td valign="top" class="td-text">&nbsp; </td>
    </tr>
  
           
       </table>                
                 <div class="td-text">           
                          <? echo $arr[project][remark];?></div>
                               
                               
<? if($arr[project][remark_th] <>  $arr[project][remark] and $arr[project][remark_th]<>'' ) { ?>      

 
  <br> 
<b class="font_16">แปลภาษาอัตโนมัติโดย Google</b>
  <br>
 <div class="td-text">  <font color="#FF0000">             
( <? echo $arr[project][remark_th];?> )

<? } ?>
                               </div>             
                                      
                               
                               
                               
                               </td>
                             </tr>
                             
 
                             
                             
              <tr id="tr_remark_<?=$arr[project][vc_id];?>" style="display:none">
                               <td >
                               	<table width="100%" border="0" cellspacing="0" cellpadding="0">
                                     <tbody><tr>
                                       <td valign="top"><div class="topictransfer1" style=" margin-top:-2px;"><i class="fa  fa-comment" style="color:#c1c1c1"></i> <span class="font_16"><font color="#006699">หมายเหตุ</font></span></div></td>
                                       
                                     </tr>
                                   </tbody>
                                   <tr>
                                   	<td class="font_16">
                                   	
                                    
                                    
 <?php
										
 
    //*
 	$remark =  func_remark_reader($arr[project][vc_id],$arr[project][server]);
    echo $remark;
    $chk_remark = trim($remark);
    if($chk_remark != ''){
			?>
			<script>
				$('#tr_remark_<?=$arr[project][vc_id];?>').show();
			</script>
			<?php
		}
		
		 //*/
    ?>
    
    
    
    
    
 
    
                                   	</td>
                                   </tr>
                                   </table>
                               </td>
                             </tr>
                           
                           
                           
                           
                           </table>
						   </div> 
                           
        
      <?   include ("mod/view/deposite.php");?>    
      
      <?
	///  $deposit=1500;
	  
	  ?>       
            
<? if($deposit>0){  ?>
            
            
          <?
 include("mod/load/show/step/income_deposit.php");
 ?>  
 
 <? } ?>   
            
                  
   
                  
 <?=check_driver_action($driver_company)?>          
                  
           
                  
    <div class="company-show-hide">            
    
     
 <div class="div-all-checkin-step" style="font-size: 20px; padding:5px; color:#3C8DBC;padding-bottom: 10px; display:nones">   <b>
               
            <center>   ข้อมูลการใช้รถขณะนี้</center>
                     
                           
       <div  id="driver_use_car_<? echo $arr[project][id];?>" > 

    </div>                   
   
   </div>
   
   
   </div>
   
   
                  
                  
<script>
   var url_checkcar = "go.php?name=load/show/qrcode&file=car_use&car=<?=$_GET[car];?>&id=<? echo $arr[project][id];?>"; 
 
  $("#driver_use_car_<? echo $arr[project][id];?>").load(url_checkcar); 

</script>                 
                           
                           
                           
                           
                             
						   </td>
						</tr>
						<tr>
                           <td  >
 
 

 <?  include ("mod/load/show/phone.php");?>
<?    include ("mod/load/show/check_step.php");?>

  <?  //include ("mod/load/show/popup_guest.php");?>
 
 
  
 
 
  <?   /// include ("mod/load/show/popup.php");?>
 

 
<?php
 // @mkdir("../car/pic/guest_no/".$arr[project][invoice]."", 0777);
?>
<?
$i++;	
}
?>
 
 
 
 
 
 <div id="load_googlemap"  style="display:none "></div>     
 
  </ul>
 
 
 
 
 
 
 
  <?   ///  include ("mod/load/show/action.php");?>


<iframe id="uploadtarget" name="uploadtarget" src="" style="width:1px;height:1px;border:0"></iframe>

 
 
 				
 
					<br>
<br>
<br>
<br>
<br>
 


 <script>
 
  $("#head_full_popup_map").click(function(){  

$( "#popup_work_preview_map" ).toggle();

});

 
 $(".back-full-popup-map-icon").click(function(){  
 
 

$( "#popup_work_preview_map" ).toggle();

});


 </script>
<input  style="display:none" type='file'  id='picfilenew'  name='picfilenew' onchange='handleFiles(this.files)' accept="image/*"  capture="camera"/ >



 