
<?

/// echo time();


 
 
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$res[chkcar] = $db->select_query("SELECT * FROM  driver_use_car  where drivername='".$driver_id."'   order by id desc limit 1 ");
$arr[chkcar] = $db->fetch($res[chkcar]);


 

///// รถ

        $db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
        $res[car] = $db->select_query("SELECT * FROM " . TB_carall . "  where id=".$arr[chkcar][car_number]." ");
        ;
       $arr[car] = $db->fetch($res[car]);
	   
	               $res[aum]   = $db->select_query("SELECT * FROM " . TB_carall_type . " WHERE id='" . $arr[car][car_type] . "' ");
            $arr[aum]   = $db->fetch($res[aum]);
            $res[aum]   = $db->select_query("SELECT * FROM " . TB_carall_type . " WHERE id='" . $arr[car][car_type] . "' ");
            $arr[aum]   = $db->fetch($res[aum]);
			
			if($arr[aum][topic_en]=='Car'){
			$arr[aum][topic_en]='รถเก๋ง';
			}
			if($arr[aum][topic_en]=='Van'){
			$arr[aum][topic_en]='รถตู้';
			}
			
			            $res[admin] = $db->select_query("SELECT * FROM " . TB_admin . " WHERE id='" . $arr[car][company] . "' ");
            $arr[admin] = $db->fetch($res[admin]);
 
 
 
 $driver_car_use_status=$arr[chkcar][type];
 
 
 
if($driver_car_use_status=='stop' or !$driver_car_use_status){

$use='หยุดใช้รถ';
$use_status='หยุดใช้รถ';

$usecolor='#FF0000';
 
}

 
if($driver_car_use_status=='start' ){

$use='เริ่มใช้รถ';
$use_status='กำลังใช้รถ';

$usecolor='#00CC66';
 
}
 
/// $driver_car_use_status=1;
?>




 <? if($driver_car_use_status==''){?>
 
 <div style="font-size:16px; color:#FF0000"><center>ยังไม่มีข้อมูลการใช้งานรถ</div>
 
  
 <? } ?>



 <? if($driver_car_use_status<>''){?>

<div style="font-size:24px"><b>

สถานะ : <font color="<?=$usecolor?>"><?=$use_status?></font>


</div>





<table width="100%" border="0" cellspacing="2" cellpadding="2">

  <tr>
    <td style="font-size:16px"><b><?  echo "" . $arr[car][car_num] . "  ( " . $arr[aum][topic_en] . " )  -  " . $arr[admin][company] . ""; ?></td>
  </tr>
  
  
    <tr>
    <td style="font-size:16px; padding-top:5px;"><?=$use;?> : <?=date('Y-m-d',  $arr[chkcar][start_time]);?>  เวลา  
	
 
 <font color="<?=$usecolor?>"><b><?=date('H:i:s',  $arr[chkcar][start_time]);?></td>
  </tr>
  
  <? if($arr[chkcar][type]=='stop'){ ?>
  
  <tr>
    <td  style="font-size:16px; padding-top:5px;">ระยะทางที่ใช้งาน <strong><?=$arr[chkcar][mile_use]?></strong> กิโลเมตร </td>
  </tr>
  <? } ?>
  
  
    <? if($arr[chkcar][type]=='start'){ ?>
    
    
    
        <tr>
    <td  style="font-size:16px; padding-top:5px;" id="load_car_time_stopห" ><b style=" color:#FF0000">หยุดอัตโนมัติภายในเวลา</b> <span id="load_car_time_stop"></span></td>
  </tr>
    
    
    
    
    
    
    
  
  <tr>
    <td  style="font-size:16px; padding-top:5px;" id="load_car_time_stopห" ><b style=" color:#000000">
    
    <?=$arr[car][insure_company]?>
    
<div style="padding-top:5px;">
    
    
<a href="tel:<?=$arr[car][insure_phone]?>" style="font-size:24px"><img src="images/icon/map/phone.png" align="bottom" width="30"> โทรศัพท์ <?=$arr[car][insure_phone]?></a><br></b>
 
    </div>
    
    </td>
  </tr>
  
  
  
  <tr>
    <td  style="font-size:16px; padding-top:5px;" id="load_car_time_stopห" > 
    
 เลขที่  : 
    
    <?=$arr[car][insure_num]?>
    
    
    </td>
  </tr>
  
    <tr>
    <td  style="font-size:16px; padding-top:5px;" id="load_car_time_stopห" > 
    
 วันหมดอายุ  : 
    
    <?=$arr[car][exp_insur]?>
    
    
    </td>
  </tr>
  
  
  

  
  
  <? } ?>
  
  	<script>
 setInterval(function() {
 var url_check_data_time = "load_blank.php?name=checkcar/load/time&file=start&driver=<?=$driver_id?>";
 
   
 $('#load_car_time_stop').load(url_check_data_time);
 
  
}, 1000); // 60000 milliseconds = one minute
 
	</script>
  
  
</table>

<? } ?>