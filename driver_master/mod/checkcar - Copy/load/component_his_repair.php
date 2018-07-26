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
		return "$strDay $strMonthThai $strYear, $strHour:$strMinute";
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
<? if($_GET[type_filter]=="progress"){
   		$txt_status = 'กำลังดำเนินการซ่อม';
   		if($_GET[day]!=""){
		$filter_day = 'and order_date = "'.$_GET[day].'" ';
		}

		$filter_type_status = 'and status = "'.$_GET[type_filter].'" ';
	
   $db->connectdb(DB_NAME_DATA, DB_USERNAME, DB_PASSWORD);
   $count = $db->num_rows("car_repair_order","id"," driver_id = '".$driver_id."' ".$filter_day." and status != 'CANCEL' ".$filter_type_status); 
   $res[list_repair] = $db->select_query("SELECT * FROM  car_repair_order  where driver_id = '".$driver_id."' ".$filter_day." ".$filter_type_status." order by id DESC");

   if($count<=0){ ?>
   	<h2 style="color: red;"><strong>ไม่มีรายการซ่อม</strong></h2>	
   <? 
//   	exit();
   }
   while ($arr[list_repair] = $db->fetch($res[list_repair])) {
   	
   	$date_inform = $arr[list_repair][order_date].' '.date('h:m:s',$arr[list_repair][post_date]);
   	$date_start = $arr[list_repair][start_date].' '.$arr[list_repair][start_time];
   	$date_finish = $arr[list_repair][finish_date].' '.$arr[list_repair][finish_time];
   	
   	
   	 $db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
	 $res[driver] = $db->select_query("SELECT id,nickname,phone FROM  ".TB_driver."  where id = '".$arr[list_repair][driver_id]."' ");
	 $arr[driver] = $db->fetch($res[driver]);
	 
	 $res[car] = $db->select_query("SELECT id,car_num,company,car_type FROM " . TB_carall . "  where id = '".$arr[list_repair][car_id]."' ");
	 $arr[car] = $db->fetch($res[car]);
	 
	 $res[aum]   = $db->select_query("SELECT id,topic_en FROM " . TB_carall_type . " WHERE id='" . $arr[car][car_type] . "' ");
     $arr[aum]   = $db->fetch($res[aum]);
     
     $res[admin] = $db->select_query("SELECT id,company FROM " . TB_admin . " WHERE id='" . $arr[car][company] . "' ");
     $arr[admin] = $db->fetch($res[admin]);
   	$car_detail = $arr[car][car_num]."  ( " . $arr[aum][topic_en] . " )  -  ".$arr[admin][company];
   	 ?>
   	<div class="box box-default" style="margin-top: 15px;">
            <table width="100%" border="0" cellspacing="4" cellpadding="4">
                <tbody>
                	<tr>
                		<td width="100"><strong>เลขที่</strong></td>
                		<td><?=str_pad($arr[list_repair][id], 4, '0', STR_PAD_LEFT);?></td>
                	</tr>
                    <tr style="display: none;">
                        <td width="100"><strong>วันที่แจ้งซ่อม</strong></td>
                        <td><?=DateThai($date_inform).' น.';?></td>
                    </tr>
                     <tr>
                        <td width="100"><strong>เริ่มซ่อม</strong></td>
                        <td><?=DateThai($date_start).' น.';?></td>
                    </tr>
                     <tr>
                        <td width="100"><strong>ซ่อมเสร็จ</strong></td>
                        <td><?=DateThai($date_finish).' น.';?></td>
                    </tr>
                    <tr>
                        <td width="100"><strong>ข้อมูลรถ</strong></td>
                        <td><?=$car_detail;?></td>
                    </tr>
                    <tr>
                        <td><strong>รายละเอียด</strong></td>
                        <td><?=$arr[list_repair][detail];?></td>
                    </tr>
                    <tr>
                        <td><strong>หมายเหตุ</strong></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><strong>สถานะ</strong></td>
                        <td class="font_18">
                            <font color="#004A80">
                                <B><?=$icon." ".$txt_status;?></B>
                            </font>
                            </td>
                    </tr>
                  
                        <tr>
                          
                          <td  class="font_22" colspan="2">
                          <table width="100%">
                          	<tr>
                          		<td width="100%"> 
                          		<button type="button" class="btn-repair btn-warning waves-effect waves-light font-btn" style="padding: 6px;width: 100%;border-radius: 15px;" onclick="viewHistoryRepair('<?=$arr[list_repair][id];?>');">ตรวจสอบ</button>
                          		</td>
                          		<!--<td width="50%">
                          		<button type="button" class="btn-repair btn-danger waves-effect waves-light font-btn" style="padding: 6px;width: 100%;" 
                          onclick="cancelRepair('<?=$arr[list_repair][id];?>');">ยกเลิก</button>
                          		</td>-->
                          		<!--<td width="33%"> <button type="button" class="btn-repair btn-danger waves-effect waves-light font-btn" style="padding: 6px;width: 100%;" 
                          onclick="changeCompleteRepair('<?=$arr[list_repair][id];?>');">เลื่อนวันเสร็จ</button></td>-->
                          	</tr>
                          </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    
	</div>
   
	   	 <? }
	   } ?>

<? if($_GET[type_filter]=="new"){  
//		echo $_GET[type_filter];
   	  $txt_status = 'รออนุมัติการซ่อม';
	  $icon = '<i class="fa fa-circle-o-notch fa-spin 2x" style="font-size:20px; color:#367FA9; "></i>';
	  
	  if($_GET[day]!=""){
		$filter_day = 'and order_date = "'.$_GET[day].'" ';
		}

		$filter_type_status = 'and status = "'.$_GET[type_filter].'" ';
	
   $db->connectdb(DB_NAME_DATA, DB_USERNAME, DB_PASSWORD);
   $count = $db->num_rows("car_repair_order","id"," driver_id = '".$driver_id."' ".$filter_day." and status != 'CANCEL' ".$filter_type_status); 
   $res[list_repair] = $db->select_query("SELECT * FROM  car_repair_order  where driver_id = '".$driver_id."' ".$filter_day." ".$filter_type_status." order by id DESC");

   if($count<=0){ ?>
   	<h2 style="color: red;"><strong>ไม่มีรายการซ่อม</strong></h2>	
   <? 
//   	exit();
   }
   while ($arr[list_repair] = $db->fetch($res[list_repair])) {
	  $date_inform = $arr[list_repair][order_date].' '.date('h:m:s',$arr[list_repair][post_date]);
	  
	  $db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
	 $res[driver] = $db->select_query("SELECT id,nickname,phone FROM  ".TB_driver."  where id = '".$arr[list_repair][driver_id]."' ");
	 $arr[driver] = $db->fetch($res[driver]);
	 
	 $res[car] = $db->select_query("SELECT id,car_num,company,car_type FROM " . TB_carall . "  where id = '".$arr[list_repair][car_id]."' ");
	 $arr[car] = $db->fetch($res[car]);
	 
	 $res[aum]   = $db->select_query("SELECT id,topic_en FROM " . TB_carall_type . " WHERE id='" . $arr[car][car_type] . "' ");
     $arr[aum]   = $db->fetch($res[aum]);
     
     $res[admin] = $db->select_query("SELECT id,company FROM " . TB_admin . " WHERE id='" . $arr[car][company] . "' ");
     $arr[admin] = $db->fetch($res[admin]);
   	$car_detail = $arr[car][car_num]."  ( " . $arr[aum][topic_en] . " )  -  ".$arr[admin][company];
   ?>           
	<div class="box box-default" style="margin-top: 15px;">
        
            <!--<div class="topicname" style="display:none "><i class="fa  fa-wrench"></i>&nbsp;รายการตรวจเช็ค</div>
            <table width="100%" border="0" cellspacing="2" cellpadding="2" style="display:none ">
                <tr>
                    <td style="width:150px; height:50px; ">

                        <input name="GroupedSwitches" type="checkbox" id="TheCheckBox2" value="1" data-off-text="ชำรุด" data-on-text="สมบูรณ์">


                    </td>

                    <td style="padding-bottom:10px; font-size:22px; font-weight:bold; padding-left:10px; ">หม้อน้ำ</td>
                </tr>

                <tr>
                    <td style="width:150px; height:50px; ">
                        <input name="GroupedSwitches" type="checkbox" id="TheCheckBox2" value="1" data-off-text="ชำรุด" data-on-text="สมบูรณ์"></td>

                    <td style="padding-bottom:10px; font-size:22px; font-weight:bold;padding-left:10px;">น้ำมันเครื่อง</td>

                </tr>

                <tr>
                    <td style="width:150px; height:50px; ">

                        <input name="GroupedSwitches" type="checkbox" id="TheCheckBox2" value="1" data-off-text="ชำรุด" data-on-text="สมบูรณ์"></td>
                    <td style="padding-bottom:10px; font-size:22px; font-weight:bold;padding-left:10px; ">ลมยาง</td>
                </tr>
                <tr>

                    <td style="width:150px; height:50px; ">

                        <input name="GroupedSwitches" type="checkbox" id="TheCheckBox2" value="1" data-off-text="ชำรุด" data-on-text="สมบูรณ์"></td>
                    <td style="padding-bottom:10px; font-size:22px; font-weight:bold;padding-left:10px; ">ที่ปัดน้ำฝน</td>

                </tr>
            </table>
			-->
			
            <table width="100%" border="0" cellspacing="4" cellpadding="4">
                <tbody>
                	<tr>
                		<td width="100"><strong>เลขที่</strong></td>
                		<td><?=str_pad($arr[list_repair][id], 4, '0', STR_PAD_LEFT);?></td>
                	</tr>
                    <tr>
                        <td width="100"><strong>วันที่แจ้งซ่อม</strong></td>
                        <td><?=DateThai($date_inform).' น.';?></td>
                    </tr>
                     <tr>
                        <td width="100"><strong>ข้อมูลรถ</strong></td>
                        <td><?=$car_detail;?></td>
                    </tr>
                    <tr>
                        <td><strong>รายละเอียด</strong></td>
                        <td><?=$arr[list_repair][detail];?></td>
                    </tr>
                
                    <tr>
                        <td><strong>สถานะ</strong></td>
                        <td class="font_18">
                            <font color="#004A80">
                                <B><?=$icon." ".$txt_status;?></B>
                            </font>
                            </td>
                    </tr>
                  
                        <tr>
                        <td colspan="2">
                        	<table width="100%">
                        		<tr>
                        			<td width="50%"><button type="button" class="btn-repair btn-warning waves-effect waves-light font-btn" style="padding: 6px;width: 100%;border-radius: 15px;" onclick="viewHistoryRepair('<?=$arr[list_repair][id];?>');">ตรวจสอบ</button></td>
                        			<td width="50%"><button type="button" class="btn-repair btn-danger waves-effect waves-light font-btn" style="padding: 6px;width: 100%;border-radius: 15px;" 
                          onclick="cancelRepair('<?=$arr[list_repair][id];?>','<?=$arr[list_repair][driver_id];?>');">ยกเลิก</button></td>
                        		</tr>
                        	</table>
                        </td>
                        </tr>
                      </tbody>
                    </table>
                   <!-- <form id="form_confirm_reapir_<?=$arr[list_repair][id];?>">
                    <input type="hidden" name="id" id="id_<?=$arr[list_repair][id];?>" value="<?=$arr[list_repair][id];?>"/>
                    <input type="hidden"  name="driver_id" id="driver_id_<?=$arr[list_repair][id];?>" value="<?=$arr[list_repair][driver_id];?>"/>
                    <input type="hidden"  name="detail" id="detail_<?=$arr[list_repair][id];?>" value="ยืนยันการแจ้งซ่อม กำลังดำเนินการซ่อม"/>
                    </form>-->
			</div>
				
	<?	 } 
	} ?>

<? if($_GET[type_filter]=="complete"){
   		$txt_status = 'เสร็จสมบูรณ์';
   		if($_GET[day]!=""){
		$filter_day = 'and order_date = "'.$_GET[day].'" ';
		}

		$filter_type_status = 'and status = "'.$_GET[type_filter].'" ';
	
   $db->connectdb(DB_NAME_DATA, DB_USERNAME, DB_PASSWORD);
   $count = $db->num_rows("car_repair_order","id","driver_id = '".$driver_id."'  ".$filter_day."  ".$filter_type_status); 
   $res[list_repair] = $db->select_query("SELECT * FROM  car_repair_order  where driver_id = '".$driver_id."'  ".$filter_day." ".$filter_type_status." order by id DESC");

   if($count<=0){ ?>
   	<h2 style="color: red;"><strong>ไม่มีรายการซ่อม</strong></h2>	
   <? 
//   	exit();
   }
   $icon = '<span class="badge bg-green" style="border-radius: 25px;padding: 4px;height: 28px;width: 28px; padding-top: 4px; font-size: 16px; border: 2px solid #FFFFFF;"><b><li class="fa fa-check"></li></b></span>';
//  echo "driver_id = '".$driver_id."'  ".$filter_day."  ".$filter_type_status;
   while ($arr[list_repair] = $db->fetch($res[list_repair])) {
   	
   	$date_inform = $arr[list_repair][order_date].' '.date('h:m:s',$arr[list_repair][post_date]);
//   	$date_start = $arr[list_repair][start_date].' '.$arr[list_repair][start_time];
   	$date_finish = date('Y-m-d h:m:s',$arr[list_repair][update_date]);
    
  $db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
	 $res[driver] = $db->select_query("SELECT id,nickname,phone FROM  ".TB_driver."  where id = '".$arr[list_repair][driver_id]."' ");
	 $arr[driver] = $db->fetch($res[driver]);
	 
	 $res[car] = $db->select_query("SELECT id,car_num,company,car_type FROM " . TB_carall . "  where id = '".$arr[list_repair][car_id]."' ");
	 $arr[car] = $db->fetch($res[car]);
	 
	 $res[aum]   = $db->select_query("SELECT id,topic_en FROM " . TB_carall_type . " WHERE id='" . $arr[car][car_type] . "' ");
     $arr[aum]   = $db->fetch($res[aum]);
     
     $res[admin] = $db->select_query("SELECT id,company FROM " . TB_admin . " WHERE id='" . $arr[car][company] . "' ");
     $arr[admin] = $db->fetch($res[admin]);
   	$car_detail = $arr[car][car_num]."  ( " . $arr[aum][topic_en] . " )  -  ".$arr[admin][company];
    
   	 ?>
   	<div class="box box-default" style="margin-top: 15px;">
            <table width="100%" border="0" cellspacing="4" cellpadding="4">
                <tbody>
                	<tr>
                		<td width="100"><strong>เลขที่</strong></td>
                		<td><?=str_pad($arr[list_repair][id], 4, '0', STR_PAD_LEFT);?></td>
                	</tr>
                    <tr>
                        <td width="100"><strong>วันที่แจ้งซ่อม</strong></td>
                        <td><?=DateThai($date_inform).' น.';?></td>
                    </tr>
                    <tr>
                        <td width="100"><strong>ข้อมูลรถ</strong></td>
                        <td><?=$car_detail;?></td>
                    </tr>
                    <tr>
                        <td><strong>รายละเอียด</strong></td>
                        <td><?=$arr[list_repair][detail];?></td>
                    </tr>
                    <tr>
                        <td><strong>หมายเหตุ</strong></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><strong>สถานะ</strong></td>
                        <td class="font_18">
                            <font style="color: #07a05a;" >
                                <B><?=$icon." ".$txt_status;?></B>
                            </font>
                            </td>
                    </tr>
                    <tr>
                    	<td colspan="2">
                    		<button type="button" class="btn-repair btn-warning waves-effect waves-light font-btn" style="padding: 6px;width: 100%;border-radius: 15px;" onclick="viewHistoryRepair('<?=$arr[list_repair][id];?>');">ตรวจสอบ</button>
                    	</td>
                    </tr>
                      </tbody>
                    </table>              
	</div>
   
	   	 <? }
	   } ?>