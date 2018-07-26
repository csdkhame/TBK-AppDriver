<b>งานต่อไปอีก
<?

 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);  

$res[project] =  $db->select_query("SELECT outdate_time,airout_time,id,drivername  FROM  transfer_report_all where id='".$_GET[id]."'  limit 1 ");
 $arr[project] = $db->fetch($res[project]); 

 
 $nowtime=$arr[project][outdate_time];
	  
	  

$res[now] =  $db->select_query("SELECT outdate_time,airout_time,invoice  FROM  transfer_report_all where drivername='".$arr[project] [drivername]."' and outdate_time > '".$arr[project][outdate_time]."'  and id<>".$arr[project][id]." and status='CONFIRM' order by  outdate_time  limit 1 ");
 $arr[now] = $db->fetch($res[now]); 
 /*
 echo $nowtime;
 echo '<br>';
 
 echo  $totime=$arr[now] [outdate_time];
 */
 
 $totime=$arr[now] [outdate_time]-$nowtime-25200;
 
$time_open_h= date('G',$totime);  
  
  $time_open_m= date('i',$totime);  
  
  
  
 $next_work_time=$arr[now][airout_time];


	  ?>
      
      <? if($time_open_h<1){ ?>
      <font color="#FF0000">
      
      <? } ?>
      
         <? if($time_open_h > 0){ ?>
      <font color="#F26522">
      
      <? } ?>
 
      
	  
	  <? if($time_open_h>0){ ?>
      <?=$time_open_h?> ชั่วโมง
 
      <? } ?>
	 
      	  <? if($time_open_m>0){ ?>
      <?=$time_open_m?>  นาที
      
      <? } ?>
      
 

      <? //=$arr[now][invoice]?>