<?php 
	$color_step = Array("#00c4f3","#f39c12","#00a65a");
	foreach ($color_step as $value) {
   		
   		
	}
?>
<style>
#input_miles:disabled {
    background: #dddddd;
}
@media screen and (max-width: 320px){
	.text-td-repair{
	font-size: 14px !important;
}
}
.text-td-repair{
	font-size: 16px;
}
.hexa{
  border: 0px;
  float: left;
  text-align: center;
  height: 35px;
  width: 60px;
  font-size: 22px;
  background: #f0f0f0;
  color: #3c3c3c;
  position: relative;
  margin-top: 15px;
}
.hexa:before{
  content: ""; 
  position: absolute; 
  left: 0; 
  width: 0; 
  height: 0;
  border-bottom: 15px solid #f0f0f0;
  border-left: 30px solid transparent;
  border-right: 30px solid transparent;
  top: -15px;
}
.hexa:after{
  content: ""; 
  position: absolute; 
  left: 0; 
  width: 0; 
  height: 0;
  border-left: 30px solid transparent;
  border-right: 30px solid transparent;
  border-top: 15px solid #f0f0f0;
  bottom: -15px;
}
.timeline-repair {
  position: relative;
  padding: 0;
  width: 100%;
  margin-top: 20px;
  list-style-type: none;
}
.timeline-repair:before {
  position: absolute;
  left: 50%;
  top: 0;
  content: ' ';
  display: block;
  width: 2px;
  height: 100%;
  margin-left: -1px;
  background: rgb(213,213,213);
  background: -moz-linear-gradient(top, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(30,87,153,1)), color-stop(100%,rgba(125,185,232,1)));
  background: -webkit-linear-gradient(top, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
  background: -o-linear-gradient(top, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
  background: -ms-linear-gradient(top, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
  background: linear-gradient(to bottom, rgba(213,213,213,0) 0%, rgb(213,213,213) 8%, rgb(213,213,213) 92%, rgba(213,213,213,0) 100%);
  z-index: 5;
}
.timeline-repair li {
  padding: 2em 0;
  
}
.timeline-repair .hexa{
  width: 16px;
  height: 10px;
  position: absolute;
  background: #00c4f3;
  z-index: 5;
  left: 0px;
  right: 0;
  margin-left:auto;
  margin-right:auto;
  top: -30px;
  margin-top: 0;
}
.timeline-repair .hexa:before {
  border-bottom: 4px solid #00c4f3;
  border-left-width: 8px;
  border-right-width: 8px;
  top: -4px;
}
.timeline-repair .hexa:after {
  border-left-width: 8px;
  border-right-width: 8px;
  border-top: 4px solid #00c4f3;
  bottom: -4px;
}
.direction-l,
.direction-r {
  float: none;
  width: 100%;
  text-align: center;
}
.flag-wrapper {
  text-align: center;
  position: relative;
}
.flag {
  position: relative;
  display: inline;
  background: rgb(255,255,255);
  font-weight: 600;
  z-index: 15;
  padding: 6px 10px;
  text-align: left;
  border-radius: 5px;
}
.direction-l .flag:after,
.direction-r .flag:after {
  content: "";
  position: absolute;
  left: 50%;
  top: -15px;
  height: 0;
  width: 0;
  margin-left: -8px;
  border: solid transparent;
  border-bottom-color: rgb(255,255,255);
  border-width: 8px;
  pointer-events: none;
}

.direction-l .flag {
  -webkit-box-shadow: -1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  -moz-box-shadow: -1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  box-shadow: -1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
}

.direction-r .flag {
  -webkit-box-shadow: 1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  -moz-box-shadow: 1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  box-shadow: 1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
}

.time-wrapper {
  display: block;
  position: relative;
  margin: 4px 0 0 0;
  z-index: 14;
  line-height: 1em;
  vertical-align: middle;
  color: #fff;
}

.direction-l .time-wrapper {
  float: none;
}

.direction-r .time-wrapper {
  float: none;
}

.time {
  background: #00c4f3;
  display: inline-block;
  padding: 8px;
  box-shadow: 1px 1px 5px #777;
}

.desc {
  position: relative;
  margin: 1em 0 0 0;
  padding: 1em;
  background: rgb(254,254,254);
  -webkit-box-shadow: 0 0 1px rgba(0,0,0,0.20);
  -moz-box-shadow: 0 0 1px rgba(0,0,0,0.20);
  box-shadow: 0 0 1px rgba(0,0,0,0.20);
  z-index: 15;
}

.direction-l .desc,
.direction-r .desc {
  position: relative;
  margin: 1em 1em 0 1em;
  padding: 1em;
  z-index: 15;
}

@media(min-width: 768px){
  .timeline-repair {
    width: 660px;
    margin: 0 auto;
    margin-top: 20px;
  }

  .timeline-repair li:after {
    content: "";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
  }
  
  .timeline-repair .hexa {
    left: -28px;
    right: auto;
    top: 8px;
    z-index: 16;
  }

  .timeline-repair .direction-l .hexa {
    left: auto;
    right: -28px;
  }

  .direction-l {
    position: relative;
    width: 310px;
    float: left;
    text-align: right;
  }

  .direction-r {
    position: relative;
    width: 310px;
    float: right;
    text-align: left;
  }

  .flag-wrapper {
    display: inline-block;
  }
  
  .flag {
    font-size: 18px;
  }

  .direction-l .flag:after {
    left: auto;
    right: -16px;
    top: 50%;
    margin-top: -8px;
    border: solid transparent;
    border-left-color: rgb(254,254,254);
    border-width: 8px;
  }

  .direction-r .flag:after {
    top: 50%;
    margin-top: -8px;
    border: solid transparent;
    border-right-color: rgb(254,254,254);
    border-width: 8px;
    left: -8px;
  }

  .time-wrapper {
    display: inline;
    vertical-align: middle;
    margin: 0;
  }

  .direction-l .time-wrapper {
    float: left;
  }

  .direction-r .time-wrapper {
    float: right;
  }

  .time {
    padding: 5px 10px;
  }

  .direction-r .desc {
    margin: 1em 0 0 0.75em;
  }
}

@media(min-width: 992px){
  .timeline-repair {
    width: 800px;
    margin: 0 auto;
    margin-top: 20px;
  }

  .direction-l {
    position: relative;
    width: 380px;
    float: left;
    text-align: right;
  }

  .direction-r {
    position: relative;
    width: 380px;
    float: right;
    text-align: left;
  }
}

.x2{
					background: #f39c12 !important;
				}
.x2:before{
					border-bottom: 4px solid #f39c12 !important;
				}
.x2:after{
					border-top : 4px solid #f39c12 !important;
				}				
.x3{
					background: #dd4b39 !important;
				}
.x3:before{
					border-bottom: 4px solid #dd4b39 !important;
				}
.x3:after{
					border-top : 4px solid #dd4b39 !important;
				}
.x4{
					background: #11d87d !important;
				}
.x4:before{
					border-bottom: 4px solid #11d87d !important;
				}
.x4:after{
					border-top : 4px solid #11d87d !important;
				}
</style>
<script>
    $('#head_full_popup').html('ข้อมูลการแจ้งซ่อม');
</script>

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

	 $db->connectdb(DB_NAME_DATA, DB_USERNAME, DB_PASSWORD);
	 $res[repair] = $db->select_query("SELECT * FROM  car_repair_order  where id = '".$_GET[id]."' ");
	 $arr[repair] = $db->fetch($res[repair]);
	 if($arr[repair][status]=="NEW"){
	 	$txt_status = 'รออนุมัติการซ่อม';
	 }
	  if($arr[repair][status]=="PROGRESS"){
	 	$txt_status = 'อยู่ระหว่างดำเนินการซ่อม';
	 }
	 if($arr[repair][status]=="CANCEL"){
	 	$txt_status = 'ยกเลิกการซ่อม';
	 }
	 if($arr[repair][status]=="COMPLETE"){
	 	$txt_status = 'ซ่อมเสร็จแล้ว';
	 }
	 $path1 = "../data/fileupload/repair/".$arr[repair][id]."/1.png";
	 $path2 = "../data/fileupload/repair/".$arr[repair][id]."/2.png";
	 $path3 = "../data/fileupload/repair/".$arr[repair][id]."/3.png";
	 
	 $num_spare = $db->num_rows("car_repair_item_list","id","order_id = '".$_GET[id]."' and status = 1 ");
	 $num_service = $db->num_rows("car_repair_service_list","id","order_id = '".$_GET[id]."' and status = 1 "); 
	 
	 $db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
	 $res[driver] = $db->select_query("SELECT id,nickname,phone FROM  ".TB_driver."  where id = '".$arr[repair][driver_id]."' ");
	 $arr[driver] = $db->fetch($res[driver]);
	 
	 $res[car] = $db->select_query("SELECT id,car_num,company,car_type FROM " . TB_carall . "  where id = '".$arr[repair][car_id]."' ");
	 $arr[car] = $db->fetch($res[car]);
	 
	 $res[aum]   = $db->select_query("SELECT id,topic_en FROM " . TB_carall_type . " WHERE id='" . $arr[car][car_type] . "' ");
     $arr[aum]   = $db->fetch($res[aum]);
     
     $res[admin] = $db->select_query("SELECT id,company FROM " . TB_admin . " WHERE id='" . $arr[car][company] . "' ");
     $arr[admin] = $db->fetch($res[admin]);
	 
	 $miles_car = $arr[repair][miles_car];
	 
	 $car_detail = $arr[car][car_num]."  ( " . $arr[aum][topic_en] . " )  -  ".$arr[admin][company];
?>
<div style="margin-top: 20px;padding: 5px 10px;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td id="show_guest_detail_160490" class="show_guest_detail_all">
                
                <table width="100%" border="0" cellspacing="2" cellpadding="4" style="margin-left:-8px;">
                    <tbody>
                        <tr>
                            <td width="20" valign="top"><i class="icon-app-uniF111" style="color:#666666; font-size:18px;"></i></td>
                            <td width="100" valign="top" class="td-text text-td-repair"><b>วันเวลาแจ้ง</b></td>
                            <td valign="top" class="td-text text-td-repair"><span style="color: #ff0000;">
                              <?=DateThai($arr[repair][finish_date]." ".$arr[repair][finish_time]);?>
                            </span>.</td>
                        </tr>
						 <tr>
                            <td width="20" valign="top"><i class="icon-new-uniF158-3" style="color:#666666; font-size:18px;"></i></td>
                            <td width="100" valign="top" class="td-text text-td-repair"><b>คนขับ</b></td>
                            <td valign="top" class="td-text text-td-repair"><?=$arr[driver][nickname];?>&nbsp;<a href="tel:<?=$arr[driver][phone];?>"><strong><?=$arr[driver][phone];?></strong></a></td>
                        </tr>
						 <tr>
                            <td width="20" valign="top"><i class="car-icon-uniF105" style="color:#666666; font-size:18px;"></i></td>
                            <td width="100" valign="top" class="td-text text-td-repair"><b>หมายเลขรถ</b></td>
                            <td valign="top" class="td-text text-td-repair"><?=$car_detail;?></td>
                        </tr>
                         <tr>
                            <td width="20" valign="top"><i class="car-icon-uniF144" style="color:#666666; font-size:18px;"></i></td>
                            <td width="100" valign="top" class="td-text text-td-repair"><b>เลขไมล์รถ</b></td>
                            <td valign="top" class="td-text text-td-repair"> <?=$miles_car;?>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top"><i class="icon-new-uniF12B-3" style="color:#666666; font-size:18px;"></i></td>
                            <td width="100" valign="top" class="text-td-repair"><b>ช่างซ่อม</b></td>
                            <td valign="top" class="td-text text-td-repair">ช่างกล้า <a href="tel:095-4293990"><strong>095-4293990</strong></a></td>
                        </tr>
                        <tr>
                            <td valign="top"><i class="car-icon-uniF12B" style="color:#666666; font-size:18px"></i></td>
                            <td valign="top" class="td-text text-td-repair"><b>สถานะ</b></td>
                            <td valign="top" class="td-text text-td-repair"><?=$txt_status;?></td>
                        </tr>

                        <tr>
                            <td valign="top"><i class="icon-new-uniF137" style="color:#666666; font-size:18px"></i></td>
                            <td valign="top" class="td-text text-td-repair"><b>กำหนดเสร็จ</b></td>
                            <td valign="top" class="td-text text-td-repair"> <span style="color: #ff0000;"><?=DateThai($arr[repair][finish_date]." ".$arr[repair][finish_time]);?></span> </td>
                        </tr>
                        <tr>
                            <td valign="middle"><i class="car-icon-uniF107" style="color:#666666; font-size:18px"></i></td>
                            <td valign="middle" class="td-text text-td-repair"><b>อะไหล่</b></td>
                            <td valign="middle" class="td-text text-td-repair"><b>
           <? if($num_spare>0){ ?>                 
                            
      <button class="btn-repair btn-primary waves-effect waves-light" style="z-index: 0;font-size:12px;border-radius:25px;padding: 7px 15px;" onclick="spareChange('<?=$arr[repair][id];?>','<?=$num_spare;?>');"><span >ตรวจสอบ</span></button></b>
       <span class="badge bg-red"  style="position: absolute;margin-left: -20px;display: nones;"><font class="font_14"><?=$num_spare;?></font></span>
       
       <? } ?>
       
      </td>
                        </tr>
                         <tr>
                            <td valign="middle"><i class="fa fa-wrench" style="color:#666666; font-size:18px;margin-left: 5px;"></i></td>
                            <td valign="middle" class="td-text text-td-repair"><b>ค่าบริการ</b></td>
                            <td valign="middle" class="td-text text-td-repair"><b>
            <? if($num_service>0){ ?>     
                            
      <button class="btn-repair btn-primary waves-effect waves-light" style="z-index: 0;font-size:12px;border-radius:25px;padding: 7px 15px;background-color: #56c0da;"
       onclick="serviceManage('<?=$arr[repair][id];?>');"><span >ตรวจสอบ</span></button></b>
      <span class="badge bg-red"  style="position: absolute;margin-left: -20px;display: nones;"><font class="font_14"><?=$num_service;?></font></span>
      
      <? }  ?>
      </td>
                        </tr>
                       <tr>
                            <td valign="middle"><i class="fa fa-file-image-o" style="color:#666666; font-size:18px;margin-left:5px;"></i></td>
                            <td valign="middle" class="td-text text-td-repair"><b>แนบภาพ</b></td>
                            <td valign="middle" class="td-text text-td-repair">
                            
                            
  <? if($num_pic>0){ ?>                        
                            <input type="hidden" value="0" id="count_img" />
                            <b>
      <button class="btn-repair btn-default waves-effect waves-light" style="z-index: 0;font-size:12px;border-radius:25px;padding: 7px 15px;" onclick="viewImg('<?=$arr[repair][id];?>');"><span>ตรวจสอบ</span></button></b>
                            <span class="badge bg-red"  id="txt_count_img" style="position: absolute;margin-left: -20px;"><font class="font_14">0</font></span>
                            
                            
 <? } ?>      
                            
                            
                            </td>
                        </tr>
                    </tbody>
                </table>
               
            </td>
        </tr>
        <tr>
            <td>
                <div style="background-color:#F6F6F6; margin-top:5px; margin-bottom:0px; padding: 2px 0px 2px 0px;border-radius: 10px;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr>
                                <td valign="middle">
                                    <div class="topictransfer1" style=" margin-top: 0px;"><i class="icon-new-uniF10E-5" style="color:#666666; font-size:18px"></i>
                                    <span class="font_16"><strong>การดำเนินงาน</strong></span></div>
                                </td>
                                <td width="70" valign="middle"><b></b></td>
                                <td width="40">
                                    <div>
                                        <a data-toggle="tooltip"> <i class="icon-app-uniF129" style=" font-size:28px; color:#999999"></i></a>
                                    </div>
                                </td>
                                <td width="40" style="padding-right:10px;">
                                    <div>
                                        <a data-toggle="tooltip" ><i class="icon-new-uniF152-4" style=" font-size:24px; color:#999999"></i> </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
        	<td>
        		<ul class="timeline-repair" style="z-index: 0; margin-bottom: 50px;">
									    <!-- Item 1 -->
									    <?php
			$db->connectdb(DB_NAME_DATA, DB_USERNAME, DB_PASSWORD); 
			$res[list_his] = $db->select_query("SELECT * FROM  car_repair_history  where repair_order = '".$arr[repair][id]."' ");
			while ($arr[list_his] = $db->fetch($res[list_his])) {
				
				if($arr[list_his][type_activity]==1){
					$text_activity = 'แจ้งซ่อม.';
					$l_r = 'r';
				}else if($arr[list_his][type_activity]==2){
					$text_activity = 'รับซ่อม.';
					$l_r = 'l';
				}else if($arr[list_his][type_activity]==3){
					$text_activity = 'แจ้งเลื่อนรับรถ.';
					$l_r = 'l';
				}else if($arr[list_his][type_activity]==4){
					$text_activity = 'ซ่อมเสร็จสมบูรณ์.';
					$l_r = 'l';
				}
				$date = date('Y-m-d H:i:s',$arr[list_his][update_date]);
									    ?>
									    <li>
									        <div class="direction-<?=$l_r;?>">
									            <div class="flag-wrapper">
									                <span class="hexa x<?=$arr[list_his][type_activity];?>"></span>
									                <span class="flag"><?=$text_activity;?></span>
									                <span class="time-wrapper"><span class="time x<?=$arr[list_his][type_activity];?>"><?=DateThai($date);?></span></span>
									            </div>
									            <div class="desc">
									            	<?php
									            	if($arr[list_his][type_activity]==1){
														$db->connectdb(DB_NAME_DATA, DB_USERNAME, DB_PASSWORD); 
														$res[type_broken] = $db->select_query("
														SELECT t1.id as id , t1.type_id as type_id , t2.topic_th as name, t2.detail as detail
														FROM  car_repair_type_broken_list as t1
														LEFT JOIN car_repair_type as t2 
														ON t1.type_id = t2.id
														where t1.repair_order = '".$arr[repair][id]."'  and t2.status = 1	");
														while ($arr[type_broken] = $db->fetch($res[type_broken])) { 
															echo $arr[type_broken][name]."<br/>";
															echo "- ".$arr[type_broken][detail]."<br/>";
														}
													}else{ 
														echo $arr[list_his][detail_history]."<br/>".$arr[list_his][remark];
													}
									            	?>
									            </div>
									        </div>
									    </li>

									    <!-- Item 2 -->
									   <!-- <li style="display: none;">
									        <div class="direction-l">
									            <div class="flag-wrapper">
									                <span class="hexa x2"></span>
									                <span class="flag">รับซ่อม.</span>
									                <span class="time-wrapper"><span class="time x2"><?=DateThai('2018-03-14 08:30:00');?></span></span>
									            </div>
									            <div class="desc">รับการแจ้งซ่อมและกำลังเดินเนินการภายในระยะเวลาที่กำหนด (5 ชั่วโมง).</div>
									        </div>
									    </li>-->

									    <!-- Item 3 -->
									   <!-- <li style="display: none;">
									        <div class="direction-l">
									            <div class="flag-wrapper">
									                <span class="hexa x3"></span>
									                <span class="flag">แจ้งเลื่อนรับรถ.</span>
									                <span class="time-wrapper"><span class="time x3"><?=DateThai('2018-03-14 16:38:00');?></span></span>
									            </div>
									            <div class="desc">เนื่องจากพบว่าผ้าแบรกกำลังจะหมด จึงขอเลื่อนเวลารับรถเพื่อทำการเปลี่ยนผ้าแบรก รับรถ พรุ่งนี้ 5 โมงเย็น</div>
									        </div>
									    </li>-->
									    
									     <!-- Item 4 -->
									   <!-- <li style="display: none;">
									        <div class="direction-l">
									            <div class="flag-wrapper">
									                <span class="hexa x4"></span>
									                <span class="flag">ซ่อมเสร็จสมบูรณ์.</span>
									                <span class="time-wrapper"><span class="time x4"><?=DateThai('2018-03-15 09:44:00');?></span></span>
									            </div>
									            <div class="desc">การซ่อมเสร็จสมบูรณ์ กรุณามารับรถในระยะเวลาที่กำหนด. <a>(รับทราบการแจ้งรับรถ)</a></div>
									        </div>
									    </li>-->
		<? } ?>
									</ul>
        	</td>
        </tr>
    </table>
</div>

<script>
	
	$.ajax({
	    url:'<?=$path1;?>',
	    type:'HEAD',
	    error: function()
	    {
	        //file not exists
	    },
	    success: function()
	    {
	        //file exists
	        countFindImg();
	    }
	});
	
	$.ajax({
	    url:'<?=$path2;?>',
	    type:'HEAD',
	    error: function()
	    {
	        //file not exists
	    },
	    success: function()
	    {
	        //file exists
	        countFindImg();
	    }
	});
	
	$.ajax({
	    url:'<?=$path3;?>',
	    type:'HEAD',
	    error: function()
	    {
	        //file not exists
	    },
	    success: function()
	    {
	        //file exists
	      countFindImg();
	    }
	});
	
	function countFindImg(){
		
		var count = $('#count_img').val();
	        count = parseInt(count)+1;
	        $('#count_img').val(count);
	         console.log(count);
		$('#txt_count_img').text(count);
	}
	
	function serviceManage(id){
		$('#popup_confirm_repair').show();
	
	var url = "go.php?name=checkcar/load&file=component_popup&action=manage_service_order&id="+id;
		$('#body_popup_confirm').html(load_main_icon_big);
		$('#body_popup_confirm').load(url);
	}
</script>