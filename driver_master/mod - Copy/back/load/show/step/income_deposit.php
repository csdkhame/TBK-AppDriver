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







if($deposit>0){ 

        $db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
        $res[income] = $db->select_query("SELECT * FROM  web_deposit  where  group_vc='".$arr[project][invoice]."'");
  
    $arr[income] = $db->fetch($res[income]);
	
 

}







?>

<? if($arr[income][i_driver]==0){?>

 <script>
 $('#deposit_no_<?=$arr[project][id];?>').show();
  $('#deposit_ok_<?=$arr[project][id];?>').hide();
 
 </script>


<? } ?>

<? if($arr[income][i_driver]==1){?>

 <script>
 $('#deposit_no_<?=$arr[project][id];?>').hide();
  $('#deposit_ok_<?=$arr[project][id];?>').show();
 
 </script>


<? } ?>
 
 
 
 
 
 <div id="deposit_no_<?=$arr[project][id];?>" class="topictransfer1" style="border-radius: 25px ; padding:5px; background-color:#FFF;  border:2px solid #FF0000;  
 box-shadow: 0 0  0px   #E8E6E6; margin-top:15px; display:none; padding-bottom: 5px; padding-left:5px;   "><i class="fa  fa-plus-circle" style="font-size: 22px;color:#FF0000"></i> ฝากเก็บเงิน <span class="span-detail1" style="font-size:20px; color:#FF0000 "><b>
 
 
 
  <? echo number_format( $deposit , 2 );?>
&nbsp;บาท</b></span></div>
 

 <div id="deposit_ok_<?=$arr[project][id];?>" class="topictransfer1" style="border-radius: 25px ; padding:5px; background-color:#FFF;  border:2px solid #17B3B2;  
 box-shadow: 0 0  0px   #E8E6E6; margin-top:15px; display:none; padding-bottom: 5px; padding-left:5px;   ">    <i class="fa fa fa-check-circle" style="font-size: 22px; color:#17B3B2"></i>&nbsp;เก็บเงิน <span class="span-detail1" style="font-size:20px;  "><b>
                                   <? echo number_format( $deposit , 2 );?>
&nbsp;บาท  สำเร็จ</b></span></div>