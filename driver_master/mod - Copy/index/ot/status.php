<?


  


//if($arr[ot_driver][ot_day]==''){

$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);

$all_ot = $db->num_rows('driver_work_ot',"id","drivername='".$_GET[drivername]."' and ot_day='".$_GET[day]."'");


if($all_ot==0){

$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
 		$db->add_db('driver_work_ot',array(
		
 
 	 	"drivername"=>"$_GET[drivername]",
 		"ot_day"=>"$_GET[day]",
 
			"post_date"=>"".TIMESTAMP.""
		 
	 
		));
		
		


}







 /*

$db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
         $db->update_db(TB_driver, array(
 
            "ot_day" => "$_GET[day]",
            ///  "update_date" => "" . TIMESTAMP . ""
        ), " id=$_GET[drivername]");
        $db->closedb();

*/
 




 


// $arr[ot_driver][ot_status]=1;
 
 
 
 

$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$res[ot_driver] = $db->select_query("SELECT * FROM driver_work_ot WHERE drivername='".$_GET[drivername]."'  and ot_day='".$_GET[day]."'   "); 
$arr[ot_driver] = $db->fetch($res[ot_driver]);


 

?>



<?


if($_GET[day]==date('Y-m-d') and $arr[ot_driver][ot_status]==2 and $arr[ot_driver][ot_confirm]==1){ 

$show_ot_status='complete';

?>
	
<script> $(".show_ot_status").hide();</script>
    
    
 <div style="color:#009999; font-size:24px;"><b>วันนี้คุณกำลังทำโอที </div>

<?  }  


if($_GET[day]==date('Y-m-d') and $arr[ot_driver][ot_status]==1 and $arr[ot_driver][ot_confirm]==1){ 
	
	
$show_ot_status='complete';

?>

 <div style="color:#FF00000; font-size:24px;"><b>วันนี้คุณหยุดงาน</div>
 <script> $(".show_ot_status").hide();</script>

<? } ?>


<b>

<? if (1==1){ ?>




<div class="show_ot_status">





 <div style="color:#000; font-size:24px;">
วันที่ <?=$_GET[day];?></b><br>


</div>
 <font color="#333333">

<? if($arr[ot_driver][ot_status]==0){ ?>
<i class="fa fa-refresh fa-spin  "></i>  คุณยังไม่ได้แจ้งความต้องการ
 
 <? } ?>
 
 
 <? if($arr[ot_driver][ot_status]==2){ ?>
 <div style="color:#009999; font-size:24px;"><b>คุณต้องการทำโอที</b></div>
 

<? if($arr[ot_driver][ot_confirm]==0){ ?>


<i class="fa fa-refresh fa-spin  "></i>  รอการอนุมัติจากฝ่ายจัดรถ

  
 <? } ?>
 
 
 <? if($arr[ot_driver][ot_confirm]==1){ ?>


<i class="fa fa-check-circle" style="color:#009999; font-size:24px;"></i>  อนุมัติการทำโอที

  
 <? } ?>
 
 
 
 
 
 <? } ?>
 
 
 
 
 
 
 
 
  <? if($arr[ot_driver][ot_status]==1){ ?>
 <div style="color:#FF0000; font-size:24px;"><b>คุณไม่ต้องการทำโอที</b></div>
 
 
 
 <? if($arr[ot_driver][ot_confirm]==0){ ?>


<i class="fa fa-refresh fa-spin  "></i> รอการอนุมัติจากฝ่ายจัดรถ

  
 <? } ?>
 
 
 
 
 
 <? if($arr[ot_driver][ot_confirm]==1){ ?>


<i class="fa fa-check-circle" style="color:#009999; font-size:24px;"></i>  อนุมัติให้หยุดงาน

  
 <? } ?>
 
 
 <? } ?> 
 
 
 
 
 
 
 
  <? } ?> </font></div>