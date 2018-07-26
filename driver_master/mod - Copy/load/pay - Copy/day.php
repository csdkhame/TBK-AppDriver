 
 
 <?
 //// bkk 6000
 //// krb
 $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD); 
 
$res[companydriver] = $db->select_query("SELECT admin_company FROM ".TB_admin." WHERE id='".$arr[web_driver][company]."'    "); 
$arr[companydriver] = $db->fetch($res[companydriver]);
 
$admin_company=$arr[companydriver][admin_company];
 
 
 $dbname='transfer_report_all';

 
 
   if($arr[web_driver][company]==1133){
 $selectdate="and outdate='".$_GET[day]."'";
	 
 } else {
	 
  $selectdate="and transfer_date='".$_GET[day]."'";
  
 }
 
 
 $find_date=$selectdate;
 
 
 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);

 


$row_yes = $db->num_rows("".$dbname."","id","drivername='".$driver_id."' $find_date and status = 'CONFIRM'  and number_of_report >0 and car_price > 0 group by invoice   ");

$row_all = $db->num_rows("".$dbname."","id","drivername='".$driver_id."' $find_date and status = 'CONFIRM' ");


$data_sale="where drivername='".$driver_id."'  $find_date and status = 'CONFIRM'   group by invoice";

  // $data_sale="where drivername='".$driver_id."'  $find_date and status = 'CONFIRM' and driver_pickup >-1  group by invoice ";
 
 $data_sale_all="where drivername='".$driver_id."'  $find_date and status = 'CONFIRM'   group by invoice";
 
  $data_sale_yes="where drivername='".$driver_id."'  $find_date and status = 'CONFIRM' and driver_pickup > 0  group by invoice";
 
  $data_sale_no="where drivername='".$driver_id."'  $find_date and status = 'CONFIRM' and driver_pickup < 1  group by invoice";
 
 
 

 
 
///  $data_sale="where drivername='".$driver_id."'  and status = 'CONFIRM'";
 
 //$row_complete = $db->num_rows(TB_order,"id","drivername='".$driver_id."' and transfer_date='".$_GET[day]."' and status = 'CONFIRM' group by carno  ");

//

 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$query = "SELECT  car_price  FROM  ".$dbname." $data_sale_all "; 
$result = mysql_query($query) or die(mysql_error());
// Print out result
$pay_ok = 0;
while($row = mysql_fetch_array($result)){
//$pay= $row['SUM(car_price)'];

$pay_ok += $row['car_price'];

}








 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$query = "SELECT  car_price  FROM  ".$dbname." $data_sale_yes "; 
$result = mysql_query($query) or die(mysql_error());
// Print out result
$pay = 0;
while($row = mysql_fetch_array($result)){
//$pay= $row['SUM(car_price)'];

$pay += $row['car_price'];

}
 
 
 
 
 
 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$query = "SELECT  car_price  FROM  ".$dbname." $data_sale_yes "; 
$result = mysql_query($query) or die(mysql_error());
// Print out result
$pay_yes = 0;
while($row = mysql_fetch_array($result)){
//$pay= $row['SUM(car_price)'];

$pay_yes += $row['car_price'];

}
 
 
 
 
 
 
 
 ///// ยังไม่กด
 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$query = "SELECT  car_price  FROM  ".$dbname." $data_sale_no "; 
$result = mysql_query($query) or die(mysql_error());
// Print out result
$pay_no = 0;
while($row = mysql_fetch_array($result)){
//$pay= $row['SUM(car_price)'];

$pay_no += $row['car_price'];

}
 
 

   
 ?>
 
 
   <style>
   .div-all-check-today-price{
	 padding:0px;   border-radius:  30px; border: 0px solid #3C8DBC;background-color:#FFFFFF;     margin-bottom: 0px; box-shadow: 0px  0px 5px #DADADA  ; margin-left:5px;  
	 
 }
 
 
 </style>
 
 <table width="100%" border="0" cellspacing="2" cellpadding="2" class="div-all-check-today-price">
  <tbody>
    <tr>
      <td width="33%" align="center"><strong>จำนวนงาน</strong></td>
      <td width="33%" align="center"><strong>ทั้งหมด</strong></td>
      <td width="33%" align="center"><strong>รับแล้ว</strong></td>
    </tr>
    <tr>
      <td align="center" class="font_22"><strong>
        <?=$row_yes?>
      </strong></td>
      <td align="center" class="font_22"><strong><font color="#FF0000">
        <?=$pay_yes+$pay_no?>
      </strong></td>
      <td align="center" class="font_22"><strong><font color="#0079C8">
        <?=$pay_yes?>
      </strong></td>
    </tr>
  </tbody>
</table>

 