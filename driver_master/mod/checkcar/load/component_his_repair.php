  <style>
   .div-all-check-car{
	 padding:10px;   border-radius:  25px; border: 1px solid #DADADA;background-color:#FFFFFF;     margin-bottom: 5px; box-shadow: 0px  0px 5px #DADADA  ; margin-top:5px; font-size:20px;  
	 
 }
 
 
    .div-list-check-car{
 padding:10px;   border-radius:  25px; border: 1px solid #DADADA;background-color:#FFFFFF;     margin-bottom: 5px; box-shadow: 0px  0px 5px #DADADA  ; margin-top:5px; font-size:20px;  
	 
	}
	
	    .div-topic-check-car{
 padding: 5px;   border-radius:  25px; border:  2px solid #51AADD;background-color:#FFF;     margin-bottom: 5px; box-shadow: 0px  0px 5px #DADADA  ; margin-top:15px; font-size:18px;  padding-left:  0px; font-weight: bold; text-align: center;  
	 
	}
 
 </style>



<style>


  .cirnumbershow-car {
    border-radius: 50%; background-color: #FF0000;
 
    padding: 0px; padding-top: 0px; 
    width: 60px;
    height: 60px; 
	text-align: justify; color:#FFFFFF; margin-left: 0px;   font-size:30px; font-weight:bold;  
	border: solid 3px #FFFFFF;
	 box-shadow: 0 0 0px 0px #DADADA; 
    border-radius: 50%; background-color: #DD4B39; 
  color: #fff;
}
 
 
 
.select-car {
 
	  border: 1px solid #dadada; width:100%; border-radius: 15px; margin-bottom: 0px;
	  
}
 
 
 
  @-webkit-keyframes DIV-CAR {
    0%   { border-color: #FF0000 }
    50%  { border-color:  #3C8DBC }
 100% { border-color: #FF0000 }
 
}

 @-moz-keyframes DIV-CAR {
 
    0%   { border-color: #FF0000 }
    50%  { border-color: #3C8DBC }
 100% { border-color: #FF0000 }
	
 
	
}

 
 
.select-car-active {
 
	  border: 1px solid #3C8DBC; width:100%; border-radius: 40px; margin-bottom:10px;
	  
	   box-shadow: 0 0 10  #DADADA; background-color:#FFFDE9; 
	   
	   	 	  -webkit-transition: all 1s;
	   -moz-animation: DIV-CAR 1s infinite;
	  
      -webkit-transition: all 1s;
    -webkit-animation: DIV-CAR 1s infinite;
	  
}
 
 
 
 
 
</style>





<?php 
function DateThai($strDate)
	{
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("j",strtotime($strDate));
		$strHour= date("H",strtotime($strDate));
		$strMinute= date("i",strtotime($strDate));
		$strSeconds= date("s",strtotime($strDate));
		$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$strMonthThai=$strMonthCut[$strMonth];
		return "$strDay $strMonthThai $strYear เวลา $strHour:$strMinute";
	}
	
	$array = array("NEW", "PROGRESS", "COMPLETE");

foreach ($array as $value){
	$db->connectdb(DB_NAME_DATA, DB_USERNAME, DB_PASSWORD);
	$num =	$db->num_rows("car_repair_order","id","driver_id = '".$driver_id."' and order_date = '".$_GET[day]."'  and status = '".$value."'  "); 
	?> 
	<script>
		console.log('<?=$num;?>');
		var value = '<?=$value;?>';
		var num = '<?=$num;?>';
		
		$('#'+value).text(num);
	</script>
	<?
}
?> 
<? 


// if($_GET[type_filter]=="progress"){
   		$txt_status = 'กำลังดำเนินการซ่อม';
		
   	
		if($_GET[day]!=""){
		$filter_day = 'and order_date = "'.$_GET[day].'" ';
		}

		$filter_type_status = 'and status = "'.$_GET[type_filter].'" ';
		
	
   $db->connectdb(DB_NAME_DATA, DB_USERNAME, DB_PASSWORD);
   $count = $db->num_rows("car_repair_order","id"," driver_id = '".$driver_id."' ".$filter_day." and status != 'CANCEL' ".$filter_type_status); 

   
   ?>

 <?  if($count<=0){ ?>
   
   
   
   <? 
//   	exit();
   }
   
   ?>
 
 <?  
  
   $string_to_replace     = array ("COROLLA" );
$string_after_replace  = array ("" );
 //// list data
 
 $res[project] = $db->select_query("SELECT * FROM  car_repair_order  where driver_id = '".$driver_id."' ".$filter_day." ".$filter_type_status." order by id DESC");
 
  while ($arr[project] = $db->fetch($res[project])) {
   	
   	$date_inform = $arr[project][order_date].' '.date('H:i:s',$arr[project][post_date]);
   	$date_start = $arr[project][start_date].' '.$arr[project][start_time];
   	$date_finish = $arr[project][finish_date].' '.$arr[project][finish_time];
   	
   	
   	 $db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
	 $res[driver] = $db->select_query("SELECT id,nickname,phone  FROM  ".TB_driver."  where id = '".$arr[project][driver_id]."' ");
	 $arr[driver] = $db->fetch($res[driver]);
	 
	 $res[car] = $db->select_query("SELECT id,car_num,company,car_type,car_sub_brand FROM " . TB_carall . "  where id = '".$arr[project][car_id]."' ");
	 $arr[car] = $db->fetch($res[car]);
	 
	 $res[aum]   = $db->select_query("SELECT id,topic_en FROM " . TB_carall_type . " WHERE id='" . $arr[car][car_type] . "' ");
     $arr[aum]   = $db->fetch($res[aum]);
     
     $res[admin] = $db->select_query("SELECT id,company FROM " . TB_admin . " WHERE id='" . $arr[car][company] . "' ");
     $arr[admin] = $db->fetch($res[admin]);
 
 
 
    $res[type]   = $db->select_query("SELECT * FROM " . TB_carall_type . " WHERE id='" . $arr[car][car_type] . "' ");
                            $arr[type]   = $db->fetch($res[type]);
                        if($arr[type][topic_en]=='Car'){
                        $type='รถเก๋ง';
					$color='#009999';
					$text='#FFFFFF';
					$show='show_car';
					
						
                        }
                        if($arr[type][topic_en]=='Van'){
                        $type='รถตู้';
						$color='#FFCC00';
						$text='#000000';
						$show='show_van';
                        }
 
                            $res[admin] = $db->select_query("SELECT * FROM " . TB_admin . " WHERE id='" . $arr[car][company] . "' ");
                            $arr[admin] = $db->fetch($res[admin]);
 
 
$arr[car][car_sub_brand]      = str_replace($string_to_replace , $string_after_replace ,$arr[car][car_sub_brand], $count);   
 
 
 
 
 
 
   	 ?>
   	<div class="box div-list-check-car" style="margin-top: 15px;">
            <table width="100%" border="0" cellspacing="0" cellpadding="5">
                <tbody>
                	<tr>
                		<td width="90"><strong>เลขที่</strong></td>
                		<td class="font_20"><FONT color="#3C8DBC"><b><?=$arr[project][invoice];?></td>
                	</tr>
                	<tr>
                	  <td><strong>สถานะ</strong></td>
                	  <td class="font_18">  
                      
                      
                      <i class="fa fa-circle-o-notch fa-spin 2x" style="font-size:20px; color:#FF0000; "></i><font color="#FF0000"> <? if($arr[project][status]=='NEW'){?>
                    รออนุมัติการซ่อม
                      
                      
                      
                      
                      <? } ?>
                      
 
                        
              	     </font></td>
              	  </tr>
                    <tr  >
                        <td><strong>แจ้งซ่อม</strong></td>
                        <td><?=DateThai($date_inform).' น.';?></td>
                    </tr>
                    <tr  >
                      <td colspan="2"><div class="div-topic-check-car">ข้อมูลรถและผู้แจ้งซ่อม</div></td>
                    </tr>
                    <tr>
                      <td colspan="2"> 
                        <div class="select-car<? if($arr[car][id]==$_GET[car]){ echo '-active'; }?>" id="div_car_<?=$arr[car][id]?>">
                          <table width="100%" border="0" cellspacing="2" cellpadding="2">
                            <tbody>
                              <tr>
                                <td width="50" rowspan="2"><table width="100%" border="0" cellspacing="2" cellpadding="2" class="cirnumbershow-car" style="background-color:<?=$color?>">
                                  <tbody>
                                    <tr>
                                      <td align="center" valign="middle" style="color:<?=$text?>; font-size:26px"><?=$arr[car][car_num]?></td>
                                    </tr>
                                  </tbody>
                                </table></td>
                                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tbody>
                                    <tr>
                                      <td width="70"  style=" font-size:22px"><b>
                                        <?=$type?></td>
                                      <td valign="middle"><? echo $arr[car][car_brand];?>-<? echo $arr[car][car_sub_brand];?></td>
                                    </tr>
                                  </tbody>
                                </table></td>
                              </tr>
                              <tr>
                                <td class="font_16"><b>
                                  <?= $arr[admin][company]?>
                                </b></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
               </td>
                    </tr>
                    <tr>
                      <td><strong>ผู้แจ้งซ่อม</strong></td>
                      <td><?=$arr[driver][nickname];?>
                        &nbsp;(
                        <?=$arr[driver][phone];?>
                        )</td>
                    </tr>
                    <tr>
                      <td colspan="2"><div class="div-topic-check-car">ระยะเวลาการทำงาน</div></td>
                    </tr>
                     <tr>
                        <td><strong>เริ่มซ่อม</strong></td>
                        <td><?=DateThai($date_start).' น.';?></td>
                    </tr>
                     <tr>
                        <td><strong>กำหนดเสร็จ</strong></td>
                        <td><?=DateThai($date_finish).' น.';?></td>
                    </tr>
                     <tr>
                       <td colspan="2"><div class="div-topic-check-car">รายละเอียดและอาการเสีย</div></td>
                     </tr>
                    <tr>
                        <td valign="top"><strong>รายละเอียด</strong></td>
                        <td valign="top"><?=$arr[project][detail];?></td>
                  </tr>
                    <tr>
                        <td valign="top"><strong>หมายเหตุ</strong></td>
                        <td valign="top">-</td>
                  </tr>
                  
                        <tr>
                          
                          <td  class="font_22" colspan="2">
                          <table width="100%">
                          	<tr>
                          		<td width="50%"><button type="button" class="btn-repair btn-danger waves-effect waves-light btn-modal-no" style="padding: 6px;width: 100%; " 
                          onclick="cancelRepair('<?=$arr[list_repair][id];?>','<?=$arr[list_repair][driver_id];?>');">ยกเลิก</button> 
                          		
                          		</td>
                          		<td width="50%"><button type="button" class="btn-repair btn-warning waves-effect waves-light btn-modal-ok" style="padding: 6px;width: 100%;" onclick="viewHistoryRepair('<?=$arr[project][id];?>');">ตรวจสอบ</button></td>
                          		<!--<td width="50%">
                          		<button type="button" class="btn-repair btn-danger waves-effect waves-light font-btn" style="padding: 6px;width: 100%;" 
                          onclick="cancelRepair('<?=$arr[project][id];?>');">ยกเลิก</button>
                          		</td>-->
                          		<!--<td width="33%"> <button type="button" class="btn-repair btn-danger waves-effect waves-light font-btn" style="padding: 6px;width: 100%;" 
                          onclick="changeCompleteRepair('<?=$arr[project][id];?>');">เลื่อนวันเสร็จ</button></td>-->
                          	</tr>
                          </table>
                          </td>
                        </tr>
              </tbody>
      </table>
                    
	</div>
   
	   	 <? }  
	    ?>

 	<strong> </strong>	