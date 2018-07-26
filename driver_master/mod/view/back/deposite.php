 <?
 
 
 
 $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$query = "SELECT SUM(total) FROM web_deposit  where  group_vc='".$arr[project][invoice]."' "; 
 
$result = mysql_query($query) or die(mysql_error());
 
// Print out result 

while($row = mysql_fetch_array($result)){

$row['SUM(total)'];
 

$deposit= $row['SUM(total)'];

 if(!$deposit){
  $deposit=0;
		  
  }


}
 
 
 
 $db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
$res[income] = $db->select_query("SELECT * FROM  web_deposit  where  group_vc='".$arr[project][invoice]."'");
$arr[income] = $db->fetch($res[income]);
 
$main_check_deposit=$arr[income][i_driver];


if(!$main_check_deposit){
	$main_check_deposit=0;
 
}
 
 
 
?>


 <input type="hidden"   value="<? echo $deposit ;?>" id="main_deposit_total_<?=$arr[project][id]?>" name="main_deposit_total_<?=$arr[project][id]?>">
 
 <input type="hidden"   value="<? echo $main_check_deposit ;?>" id="main_deposit_status_<?=$arr[project][id]?>" name="main_deposit_status_<?=$arr[project][id]?>">

