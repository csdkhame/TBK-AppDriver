<div  style="padding-top:0px; padding:5px; ">
 <? //  include "mod/load/update/all_today.php" ;?>

 <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>

						
<table width="100%"  border="0" cellspacing="2" cellpadding="2"  >
  <tr align="center">
    <td width="20%" bgcolor="#999999" class="font_16" style="color:#FFFFFF; padding:2px; "><b>วันที่</b></td>
    <td width="10%" bgcolor="#999999" class="font_16" style="color:#FFFFFF; padding:2px; "><b>งาน</td>
    <td width="30%" bgcolor="#999999" class="font_16" style="color:#FFFFFF; padding:2px; "><b>รายรับ </td>
    <td width="30%" bgcolor="#999999" class="font_16" style="color:#FFFFFF; padding:2px; "><span class="font_16" style="color:#FFFFFF; padding:2px; "><b>รวม </span></td>
  </tr>
</table>
						
 						
						 
 
 <?
 //// bkk 6000
 //// krb
 $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD); 
 
$res[companydriver] = $db->select_query("SELECT admin_company FROM ".TB_admin." WHERE id='".$arr[web_driver][company]."'    "); 
$arr[companydriver] = $db->fetch($res[companydriver]);
 
$admin_company=$arr[companydriver][admin_company];
 
 
 
 
$_GET[day] = date('Y-m-d');
 
 $_GET[day] = '2016-08-16';
 
 $date_finish = date('Y-m-d',strtotime("+0 day")); 
$date_finish_plus = date('Y-m-d',strtotime("+1 day")); 
 
 
 
 

if($_GET[month]=='01'){ 
 $paydate='2017-12-31';
  
}
 
 if($_GET[month]=='02'){ 
 $paydate='2018-01-31';  
}
 
 
if($_GET[month]=='03'){ 
 $paydate='2018-02-28';  
}


 
if($_GET[month]=='04'){ 
 $paydate='2018-03-31';  
}
 
if($_GET[month]=='05'){ 
 $paydate='2018-04-30';  
}
 
 if($_GET[month]=='06'){ 
 $paydate='2018-05-31';  
}
 

 
 
 $date_start ='2016-09-01';
 
 
 
 
 
 if($admin_company==1){
 
 $date_pay ='2016-09-01';
 
 }
 
 
 
 
 
 
 
 if($arr[web_driver][company]==276 or   $arr[web_driver][company]==283 or   $arr[web_driver][company]==284){
	 
 $pay_bonus=5400;
	
	
 if($_GET[month]>'03'){ 
 $payplus=1.7;  
} 


else {
	
 $payplus=2;  	
	
}
	 
 }
 
 
  if($arr[web_driver][company]==1133){
	  
	  
 
	  
	  
	 
	$pay_bonus=6500;
	 $payplus=2;  	
	 
 }
 
   if($arr[web_driver][company]==1280){
	 
	$pay_bonus=10000;
	 $payplus=2;  	
	 
 }
 
 
  if($arr[web_driver][company]<>276  and  $arr[web_driver][company]<>283  and  $arr[web_driver][company]<>284 and  $arr[web_driver][company]<>1133 and  $arr[web_driver][company]<>1280 ){
	 
 $pay_bonus=99999999999999;
	 
 }
 
 

 
 
 
 
   if($arr[web_driver][company]==1133){
 $selectdate="outdate";
	 
 } else {
	 
  $selectdate="transfer_date";
  
 }
 


/// 276 283 284
 

//$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
//$db->del(TB_transfer_report_all," transfer_date < '".$_GET[day]."' "); 


///echo $driver_id;
 
///// update report <--- order
 /*
$select_order="id,code,invoice,program,orderid,agent,transfer_date,pickup_place,to_place,carno,drivername,air,airin_time,airout_time,driver_remark,total";
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res[update] = $db->select_query("SELECT $select_order  FROM ".TB_order."  where drivername='".$driver_id."' and  transfer_date >= '".$_GET[day]."'  order by transfer_date  limit 30");
//$arr[update][orderid]=309054;


while($arr[update] = $db->fetch($res[update])){
 
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
	$res[book2] = $db->select_query("SELECT  id,guest,phone FROM ".TB_book_agent." WHERE id='".$arr[update][orderid]."' ");
	$arr[book2] = $db->fetch($res[book2]);
 
echo $arr[book2] [guest];
//echo " &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;";
//echo $arr[update] [invoice];
echo "<br>";
//echo $arr[update] [orderid] ;
//echo "<br>";
 
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$db->update_db(TB_transfer_report_all,array(
 
 		"guest_name"=>$arr[book2] [guest] ,
		"guest_phone"=>$arr[book2] [phone] ,
		
		"agent"=>$arr[update] [agent] ,
		"vc_id"=>$arr[update] [id] ,
		"vc_code"=>$arr[update] [code] ,
		
		"total"=>$arr[update] [total] ,
 
 		"remark"=>$arr[update] [remark] ,
 		"pickup_place"=>$arr[update] [pickup_place] ,
		"to_place"=>$arr[update] [to_place] ,
		
		
		"airin_time"=>$arr[update] [airin_time] ,
		"airout_time"=>$arr[update] [airout_time] ,
		
		"orderid"=>$arr[update] [orderid] 
		
		)," invoice='".$arr[update] [invoice]."' ");

 
}
 */
/// map th
/*
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res[gg_map] = $db->select_query("SELECT id,map,transferplace_type,star FROM ".TB_transferplace_new."  ");
	while($arr[gg_map] = $db->fetch($res[gg_map])){
		$arr_map[$arr[gg_map][id]] = $arr[gg_map][map];
		$arr_type[$arr[gg_map][id]] = $arr[gg_map][transferplace_type];
		$arr_star[$arr[gg_map][id]] = $arr[gg_map][star];
	}
 
$res[gg_map] = $db->select_query("SELECT id,topic,province,amphur FROM ".TB_transferplace."  ");
	while($arr[gg_map] = $db->fetch($res[gg_map])){
		$arr_t_topic[$arr[gg_map][id]] = $arr[gg_map][topic];
		$arr_t_province[$arr[gg_map][id]] = $arr[gg_map][province];
		$arr_t_amphur[$arr[gg_map][id]] = $arr[gg_map][amphur];
	}
	
/// map cn
	$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res[gg_map_cn] = $db->select_query("SELECT id,map,transferplace_type,star FROM ".TB_transferplace_cn_new."  ");
	while($arr[gg_map_cn] = $db->fetch($res[gg_map_cn])){
		$arr_map[$arr[gg_map_cn][id]] = $arr[gg_map_cn][map];
		$arr_type[$arr[gg_map_cn][id]] = $arr[gg_map_cn][transferplace_type];
		$arr_star[$arr[gg_map_cn][id]] = $arr[gg_map_cn][star];
	}
 
$res[gg_map_cn] = $db->select_query("SELECT id,topic,province,amphur FROM ".TB_transferplace_cn."  ");
	while($arr[gg_map_cn] = $db->fetch($res[gg_map_cn])){
		$arr_t_topic[$arr[gg_map_cn][id]] = $arr[gg_map_cn][topic];
		$arr_t_province[$arr[gg_map_cn][id]] = $arr[gg_map_cn][province];
		$arr_t_amphur[$arr[gg_map_cn][id]] = $arr[gg_map_cn][amphur];
	}
	 
*/

 $m_minus = date('Y-m',strtotime("-2 month")); 
   
 $m_now = date('Y-m',strtotime("-0 month")); 
   


  $no    = "$_GET[year]-$_GET[month]";
  
   $no_acc    = "acc_$_GET[year]_$_GET[month]";
  
 $data_sale = "where dayall like '%" . $no . "%'   $saleuser";
       $allpage   = "dayall like '%" . $no . "%'   $saleuser";
	   


if($no > $m_minus){
	
	
	$dbname='transfer_report_all';
	
  
	
} else {
	
		$dbname=$no_acc;
	
}


if($no >= $m_now){
 $dbname='transfer_report_all';
	
}





 

 

	   

 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD); 
 
 
 $res[bookcheck] = $db->select_query("SELECT  id FROM  ".$dbname."  ");
$arr[bookcheck] = $db->fetch($res[bookcheck]);
 

if($res[bookcheck] <>''){
	
////	echo  888;
	
}

	   
///// start date

$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);

$res[startdate] = $db->select_query("SELECT * FROM date_loop  where dayall like '%" . $no . "%'"); 

$arr[startdate] = $db->fetch($res[startdate]);
 

  $day_start=$arr[startdate][dayall];
	   
	   
	   
	   

$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$query = "SELECT SUM(car_price) FROM  ".$dbname."  where  ".$selectdate."  like '%" . $no . "%'  and status = 'CONFIRM' and driver_pickup > '0' and number_of_report >0 and car_price > 0 and drivername='".$driver_id."'  "; 
$result = mysql_query($query) or die(mysql_error());
// Print out result
while($row = mysql_fetch_array($result)){
//$pay_all= $row['SUM(car_price)'];
}

////



$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
//$query = "SELECT SUM(car_price) FROM  ".$dbname."  where transfer_date like '%" . $no . "%'  and status = 'CONFIRM' and driver_pickup > '-1' and number_of_report >0 and car_price > 0 and drivername='".$_GET[driver]."' group by invoice "; 
$query = "SELECT car_price,invoice FROM  ".$dbname."  where ".$selectdate." like '%" . $no . "%'  and status = 'CONFIRM' and driver_pickup > '-1' and number_of_report >0 and car_price > 0 and drivername='".$driver_id."' group by invoice "; 
$result = mysql_query($query) or die(mysql_error());
// Print out result
$pay_all = 0 ;
while($row = mysql_fetch_array($result)){
//echo $row['invoice']." ".$row['car_price']." <br />";
$pay_all += $row['car_price'];

}








  
 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$query = "SELECT SUM(cost) FROM history_transfer_ot where  ".$selectdate."  like '%" . $no . "%'  and drivername='".$driver_id."' "; 
$result = mysql_query($query) or die(mysql_error());
// Print out result
while($row = mysql_fetch_array($result)){
$payot_all= $row['SUM(cost)'];
}





 
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res[timeline] = $db->select_query("SELECT * FROM date_loop  $data_sale and  dayall   < '".$date_finish_plus."' order by  id  asc  limit 31");
while($arr[timeline] = $db->fetch($res[timeline])){
///echo $arr[timeline][dayall];

$bgcolor = ($i++ & 1) ? '#FFFFFF' : '#FFFDE9'; 
 
$daywork=$arr[timeline][dayall];

$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res[drivername] = $db->select_query("SELECT id,nickname,post_date,company FROM ".TB_driver." WHERE id='".$arr[project][drivername]."' ");
$arr[drivername] = $db->fetch($res[drivername]);


 
	///echo $arr[project][id];
	

	
 
 
 
 
	
  $admin_company = $arr[companydriver][admin_company];
	if($arr[companydriver][admin_company]==5) {
		
	//$find_date="and ondate='". $daywork."'";
	$find_date="and ".$selectdate."='". $daywork."'";
	
	//$find_date_today="and ondate BETWEEN '". $day_start."' AND '". $daywork."'";
	$find_date_today="and ".$selectdate." BETWEEN '". $day_start."' AND '". $daywork."'";
	
	} 
	
		else {
			
$find_date="and ".$selectdate."='". $daywork."'";
$find_date_today="and ".$selectdate." BETWEEN '". $day_start."' AND '". $daywork."'";
	} 

$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);

/*
$row_no = $db->num_rows(TB_transfer_report_all,"id","drivername='".$driver_id."' and transfer_date='".$daywork."' and status = 'CONFIRM' and driver_pickup  < '1' group by driver_complete,invoice, order by driver_complete desc   ");
$row_yes = $db->num_rows(TB_transfer_report_all,"id","drivername='".$driver_id."' and transfer_date='".$daywork."' and status = 'CONFIRM' and driver_pickup > '0' group by driver_complete,invoice order by driver_complete desc ");
*/

//$row_no = $db->num_rows(TB_transfer_report_all,"id","drivername='".$driver_id."' and transfer_date='".$daywork."' and status = 'CONFIRM' and driver_pickup  < '1' group by driver_complete,invoice, order by driver_complete desc   ");



/*
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
//$query = "SELECT SUM(car_price) FROM  ".$dbname."  where transfer_date like '%" . $no . "%'  and status = 'CONFIRM' and driver_pickup > '-1' and number_of_report >0 and car_price > 0 and drivername='".$_GET[driver]."' group by invoice "; 
$query = "SELECT car_price,invoice FROM  ".$dbname."  where transfer_date like '%" . $no . "%'  and status = 'CONFIRM' and driver_pickup > '-1' and number_of_report >0 and car_price > 0 and drivername='".$driver_id."' group by invoice "; 
$result = mysql_query($query) or die(mysql_error());
// Print out result
$pay_all = 0 ;
while($row = mysql_fetch_array($result)){
//echo $row['invoice']." ".$row['car_price']." <br />";
$pay_all += $row['car_price'];

}
*/







$row_yes = $db->num_rows("".$dbname."","id","drivername='".$driver_id."' $find_date and status = 'CONFIRM' and driver_pickup > '-1' and number_of_report >0 and car_price > 0 group by invoice   ");

$row_all = $db->num_rows("".$dbname."","id","drivername='".$driver_id."' $find_date and status = 'CONFIRM' ");


 $data_sale="where drivername='".$driver_id."'  $find_date and status = 'CONFIRM' and driver_pickup > '0'";

 $data_sale="where drivername='".$driver_id."'  $find_date and status = 'CONFIRM' and driver_pickup >-1  group by invoice ";
 
 
  $data_sale_today="where drivername='".$driver_id."'  $find_date_today and status = 'CONFIRM' and driver_pickup >-1  group by invoice ";


$data_ot="where drivername='".$driver_id."' $find_date ";
 
///  $data_sale="where drivername='".$driver_id."'  and status = 'CONFIRM'";
 
 //$row_complete = $db->num_rows(TB_order,"id","drivername='".$driver_id."' and transfer_date='".$_GET[day]."' and status = 'CONFIRM' group by carno  ");

//
 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$query = "SELECT  car_price  FROM  ".$dbname." $data_sale "; 
$result = mysql_query($query) or die(mysql_error());
// Print out result
$pay = 0;
while($row = mysql_fetch_array($result)){
//$pay= $row['SUM(car_price)'];

$pay += $row['car_price'];

}
 



 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$query = "SELECT SUM(cost) FROM history_transfer_ot $data_ot "; 
$result = mysql_query($query) or die(mysql_error());
// Print out result
while($row = mysql_fetch_array($result)){
$payot= $row['SUM(cost)'];
}
 
 
 ////
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$query = "SELECT SUM(use_car_overtime_cost_driver_total)  FROM  ".$dbname." $data_sale "; 
$result = mysql_query($query) or die(mysql_error());
// Print out result
while($row = mysql_fetch_array($result)){
$pay_advance= $row['SUM(use_car_overtime_cost_driver_total)'];
}

 ?>
 
 
 
 
 
 
 <?
	
	
//echo $daywork;
	
	//
 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$query = "SELECT  car_price  FROM  ".$dbname." $data_sale_today "; 
$result = mysql_query($query) or die(mysql_error());
// Print out result
$pay_total = 0;
while($row = mysql_fetch_array($result)){
//$pay= $row['SUM(car_price)'];

  $pay_total += $row['car_price'];

}

 
if($pay_total>$pay_bonus and $daywork > $paydate){
	
	$bgcolor='#FDC689'; 
	
	
	
	
	?>
    
    
  <table width="100%" border="0" cellspacing="0" cellpadding="0" style="display:none">
  <tbody>
    <tr>
      <td align="center" bgcolor="#ff0000">เริ่มต้นนับค่าเที่ยวคูณ 2</td>
    </tr>
  </tbody>
</table>

    
    
    <?
	
}
 
	
	?>
 
 
 
 
 
 
 
 <div >
<table width="100%"  border="0" cellspacing="2" cellpadding="2">
  <tr align="center">
    <td width="20%" style="height:35px;background-color:<?=$bgcolor ?> "  class="font_18"><? //=$arr[timeline][dayall]?><?=$i?></td>
    <td width="10%"  class="font_18" style="background-color:<?=$bgcolor ?> ">

    
    			<? if($row_yes==0){?>
	<font color="#FF0000"> - </font>
		<? }  else {?>
        
        <a>
        
        	<?=$row_yes?> </a>
        
        <? } ?>
    
    
    
    </td>
    <td width="30%" align="right"  class="font_18" style="padding-right:10px;background-color:<?=$bgcolor ?> ">
	
	<? if($pay_advance>0){
	
	$db->connectdb(DB_NAME_data,DB_USERNAME,DB_PASSWORD);
$res[projectnew] = $db->select_query("SELECT * FROM ".$dbname."  $data_sale and use_car_overtime > 0  ");

$arr[projectnew] = $db->fetch($res[projectnew]);
	
	 
	?>
	
	<a  data-toggle="modal" data-target="#myModal<?=$arr[projectnew][id];?>" ><font  color="#FF0000">(<?=$pay_advance?>)</font></a>
 
	<div id="myModal<?=$arr[projectnew][id];?>" class="modal fade" role="dialog">
  <div class="modal-dialog"   style="max-width:350px; ">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
 
        <h4 class="modal-title"><?=$arr[projectnew][product_name_th];?></h4>
      </div>
      <div class="modal-body">
        <p>งานใช้รถเพิ่ม <?=$arr[projectnew][use_car_overtime];?> ชั่วโมง</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
      </div>
    </div>

  </div>
</div>
	
	<? } ?> 
	
	
	<? if($payot>0){?>
	
	<font color="#006699">(โอที)</font> 
	<? } ?> 
	<? if($row_all>0){?>
    <font color="#FF0000">
	<?= number_format( $pay , 0 );?>
		<? } ?>
 
			<? if($row_all==0){?>
	<font color="#FF0000"> - </font>
		<? } ?>
		
		 
	
	
	
	</td>
    <td width="30%" align="right"  class="font_18" style="padding-right:10px;background-color:<?=$bgcolor ?> ">
    
    
    <?= number_format( $pay_total , 0 );?>
    
    
    </td>
  </tr>
</table>

 </div>
 <? }  ?>
 </div>
<br>
<table width="100%"  border="0" cellspacing="2" cellpadding="2">
  <tr  >
    <td  class="font_16" style="height:30px; padding-left:5px; ">ค่าเที่ยว  (ปกติ)</td>
    <td width="100" align="right"  class="font_20" style="padding-right:10px; color:#000000 "> 
    
    <? if($pay_all>$pay_bonus  and $daywork > '2018-01-31'){
		
		$pay_normal=$pay_bonus;
		
		
		
		?>
    
 
	<?= number_format( $pay_bonus , 0 );?>
    
    
    <? } else { 
	
	$pay_normal=$pay_all;
	
	
	?>
		 
	<?= number_format( $pay_all , 0 );?>
    
    
    <? } ?>
	
	
	</td>
  </tr>
  <tr  >
    <td  class="font_16" style="height:30px; padding-left:5px; ">ค่าเที่ยว  (<?=$payplus?> เท่า)</span></td>
    <td align="right"  class="font_20" style="padding-right:10px; color:#000000 ">
    
    
        <? if($pay_all>$pay_bonus and $daywork >  $paydate){
			
			
	 $pay_extra=($pay_all-$pay_bonus)*$payplus;	
			
 
			
			?>
    
 
	<span class="font_14">( <?= number_format( $pay_all-$pay_bonus , 0 );?>x<?=$payplus?> )&nbsp;</span><?= number_format( $pay_extra , 0 );?>
    
    
    <? } else { 
	
	$pay_extra=0;
	
	?>
		 
	<?= number_format( 0 , 0 );?>
    
    
    <? } ?>
    
    
    
    </td>
  </tr>
  <tr  style="display:none" >
    <td  class="font_16" style="height:30px; padding-left:5px; ">รวมค่าเที่ยว </td>
    <td align="right"  class="font_20" style="padding-right:10px; color:#000000 "><?= number_format( $pay_normal+$pay_extra , 0 );?></td>
  </tr>
 </table>
 <? if($driver_id=='11001'){ 
 $payphone=816;
 }
 
 ?>
 <table width="100%"  border="0" cellpadding="2" cellspacing="2"  style="background-color:#F6F6F6;border:  dotted 1px #999999;  ">
   <tr  >
     <td  class="font_18" style="height:30px; padding-left:5px; ">รวมค่าเที่ยว </td>
     <td width="40%" align="right"  class="font_20" style="padding-right:10px; color: #006699 "><?= number_format( $pay_normal+$pay_extra , 0 );?>
     </td>
   </tr>
 </table>
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
   <tbody>
     <tr>
       <td><table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">
         <tbody>
           <tr>
             <td width="22" height="20" bgcolor="#FDC689">&nbsp;</td>
             <td class="font_18" ><font color="#FF0004">&nbsp;วันที่มีค่าเที่ยว คูณ <?=$payplus?> เท่า</td>
           </tr>
         </tbody>
       </table></td>
     </tr>
   </tbody>
 </table>
 
 