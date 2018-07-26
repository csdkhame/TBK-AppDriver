 

<?
if($_GET[type]=="payment"){
	
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
 
 
$next_increment     = 0;
$qShowStatus        = "SHOW TABLE STATUS LIKE 'pay_history_driver_payment'";
$qShowStatusResult  = mysql_query($qShowStatus) or die ( "Query failed: " . mysql_error() . "<br/>" . $qShowStatus );
$row = mysql_fetch_assoc($qShowStatusResult);

$last_id = $row['Auto_increment'];
$member_db = $row['Auto_increment'];



if($member_db>=10000) {
$member_in = "$member_db" ;
}
elseif($member_db >=1000) {
$member_in = "0$member_db" ;
}
elseif($member_db >=100) {
$member_in = "00$member_db" ;
}
elseif($member_db >=10) {
$member_in = "000$member_db" ;
}
else {
$member_in = "0000$member_db" ;
}

 
 

 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
 		$db->add_db('pay_history_driver_payment',array(
		
 
 		"type"=>'biil_oil_new',
 
 		"invoice"=>$member_in,
		"car_number"=>"$_POST[check_data_car_work]",
		
		"bill_number"=>"$_POST[payment_bill_number]",
		
		"drivername"=>$driver_id,
		
		"cost"=>"$_POST[payment_cost]",
		
		"transfer_date"=>"$_POST[payment_date]",
		"transfer_time"=>"$_POST[payment_time]",
		
		"detail"=>"$_POST[payment_detail]",
 	"post_date"=>"".TIMESTAMP."",
			"update_date"=>"".TIMESTAMP.""
	 
		));
		
 
		
$insert_last_id = mysql_insert_id();	
//$insert_last_id = 19;	




@mkdir("../data/fileupload/store/acc/driver/".$_GET[type]."/".$member_in."", 0777);



 for($i=1;$i<4;$i++){ 
 
 $_GET['number']=$i;

 
@copy ("../data/fileupload/store/acc/driver/".$_GET[type]."/".$_GET[code]."_".$_GET['number'].".png", "../data/fileupload/store/acc/driver/".$_GET[type]."/".$member_in."/".$i.".png" );
 
@unlink("../data/fileupload/store/acc/driver/".$_GET[type]."/".$_GET[code]."_".$_GET['number'].".png");

 }


}
 

?> 

 