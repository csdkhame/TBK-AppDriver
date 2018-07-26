 
 <?php
 
 

echo $driver=$to;
$vc=$_GET[vc];

 //// ข้อมูลคนขับ
 
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res[driver] = $db->select_query("SELECT id,nickname,name,line_token,company FROM ".TB_driver." WHERE id=".$driver."   ");
$arr[driver] = $db->fetch($res[driver]);


$res[companydriver] = $db->select_query("SELECT id,company  FROM ".TB_admin." WHERE id='".$arr[driver][company]."'    "); 
$arr[companydriver] = $db->fetch($res[companydriver]);


 


?>


<?



   $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
  
  
  
$select_order="
id
,invoice
,program
,orderid
,vc_id
,pickup_place
,to_place
,carno
,cartype
,drivername
,air
,airin_time
,airout_h
,airout_m
,airout_time
,driver_remark
,total
,guest_name
,guest_phone
,guest_phone_2
,guest_phone_3
,server
,car_price
,agent
,car_number
 
,product_name
,product_name_th
,extra_service_name_th

,name_pickup_place
,name_pickup_place_area
,name_pickup_place_province

,name_to_place
,name_to_place_area
,name_to_place_province
,read_msg

,driver_topoint
,driver_pickup
,driver_complete
,driver_checkcar

,driver_checklost
,driver_checklost_detail

,driver_topoint_date
,driver_pickup_date
,driver_complete_date
,driver_checkcar_date
,product_area
,product_area_type
,adult
,child
,baby
,change_work_status
,transfer_date
,outdate
,outdate_time
,numcar
,remark

";


$res[project] = $db->select_query("SELECT  $select_order  FROM  transfer_report_all where id='".$_GET[id]."' ");
$arr[project] = $db->fetch($res[project]);





   $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
  
 

 if($arr[companydriver][admin_company]==5) {
 $daywork=$arr[project][outdate];
  
 } 
	
	else {
		
 $daywork=$arr[project][transfer_date];		
		
		
	}
	
	
	?>
    
    <? if($arr[project][product_area] == 'In'){ 
						$work_area="รับเข้า";
						$music_type="รับเข้าจาก..";
						 $music_service="รับเข้าจาก";
  					 $work_f="เที่ยวบิน..".$arr[project][air]. "";
			  ?>
                    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td style="font-size:22px ; color: #3399CC; color:#444444  " width="30">&nbsp;<i class="fa   fa-plane " style=" -webkit-transform:rotateX(180deg);
  -moz-transform:rotateX(180deg);
  -o-transform:rotateX(180deg);
  -ms-transform:rotateX(180deg); "></i></td>
                        <td style="font-size:24px ; font-weight:bold">&nbsp;รับเข้า</td>
                      </tr>
                    </table>
                    <?  } elseif($arr[project][product_area] == 'Out'){
						   $work_area="ส่งออก";
						   $music_type="ส่งออกจาก..";
						   
						    $music_service="ส่งออกจาก";
						    
						   $work_f="เที่ยวบิน..".$arr[project][air]. "";
						    ?>
                    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td style="font-size:22px ;color: #3399CC; color:#444444  " width="30">&nbsp;<i class="fa   fa-plane "></i></td>
                        <td style="font-size:24px ; font-weight:bold">&nbsp;ส่งออก</td>
                      </tr>
                    </table>
                    <?  } elseif($arr[project][product_area] == 'Point'){ 
	 
	  $work_area="พ้อยท์ทูพ้อยท์";
	  $music_service="รับจาก";
	 ?>
                    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td style="font-size:22px ; color: #3399CC; color:#444444  " width="30">&nbsp;<i class="fa   fa-share-alt"></i></td>
                        <td style="font-size:24px ; font-weight:bold">&nbsp;พ้อยท์</td>
                      </tr>
                    </table>
                    <?  } elseif ($arr[project][product_area] == 'InOut'){ 
						 
						 
 
						   ?>
                    <? if($arr[project][pickup_place]==1461 or  $arr[project][pickup_place]==193){ 
 
 
 					$airport="In";
 
 						$work_area="รับเข้า";
						$music_type="รับเข้าจาก..";
						 $music_service="รับเข้าจาก";
  					 $work_f="เที่ยวบิน..".$arr[project][air]. "";
 
 
 
 ?>
                    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td style="font-size:22px ; color: #3399CC; color:#444444  " width="30">&nbsp;<i class="fa   fa-plane " style=" -webkit-transform:rotateX(180deg);
  -moz-transform:rotateX(180deg);
  -o-transform:rotateX(180deg);
  -ms-transform:rotateX(180deg); "></i></td>
                        <td style="font-size:24px ; font-weight:bold">&nbsp;รับเข้า</td>
                      </tr>
                    </table>
                    <? } ?>
                    <? if($arr[project][to_place]==1461 or  $arr[project][to_place]==193){ 
 
 
 
 				$airport="Out";
 
 						$work_area="รับเข้า";
						$music_type="รับเข้าจาก..";
						 $music_service="รับเข้าจาก";
  					 $work_f="เที่ยวบิน..".$arr[project][air]. "";
 
 
 
 
 
   $work_area="ส่งออก";
						   $music_type="ส่งออกจาก..";
						   
						    $music_service="ส่งออกจาก";
						    
						   $work_f="เที่ยวบิน..".$arr[project][air]. "";
						    ?>
                    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td style="font-size:22px ;color: #3399CC; color:#444444  " width="30">&nbsp;<i class="fa   fa-plane "></i></td>
                        <td style="font-size:24px ; font-weight:bold">&nbsp;ส่งออก</td>
                      </tr>
                    </table>
                    <? } ?>
                    <?  } else { 
						   $work_area="เซอร์วิส";
						   $music_service="งานใช้รถใน";
						   
						   ?>
                    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td style="font-size:20px ; color: #3399CC; color:#444444 " width="30">&nbsp;<i class="fa  fa-taxi"></i></td>
                        <td style="font-size:24px ; font-weight:bold">&nbsp;เซอร์วิส</td>
                      </tr>
                    </table>
                    <? } ?>
    
    <?

 

 

	

	
$drivername=$arr[driver][nickname];

$accToken=$arr[driver][line_token];
	


if($arr[driver][line_token]<>''){

 
// กรณีต้องการตรวจสอบการแจ้ง error ให้เปิด 3 บรรทัดล่างนี้ให้ทำงาน กรณีไม่ ให้ comment ปิดไป
 
 
// กรณีมีการเชื่อมต่อกับฐานข้อมูล
//require_once("dbconnect.php");
 
/// $accToken = "0XewWxVOz3U9i6pmF4VFB0F5VRZByDyCQmiFPCPWF7Y";
$notifyURL = "https://notify-api.line.me/api/notify";
 
$headers = array(
    'Content-Type: application/x-www-form-urlencoded',
    'Authorization: Bearer '.$accToken
);

if(1==1){


$data = array(
    'message' =>"\nคุณ".$arr[name][nickname]."ต้องการส่งงานให้คุณ\n- งานใหม่คืองาน".$work_area."  \n- รับแขกเวลา ".$arr[project] [airout_time]." น. \n- วันที่ ".$daywork." \n- จำนวนแขก ".$arr[project][total]." คน \n- รับจาก ".$arr[project][name_pickup_place]."  (".$arr[project][name_pickup_place_area]." | ".$arr[project][name_pickup_place_province].")  \n- ส่งที่ ".$arr[project][name_to_place]."  (".$arr[project][name_to_place_area]." | ".$arr[project][name_to_place_province].")\n- กรุณาตรวจสอบรายละเอียดด้วยค่ะ",
	  //  'stickerPackageId' => 2,
  ///  'stickerId' => 22,
 'imageThumbnail' => 'https://goldenbeachgroup.com/app/data/pic/driver/main/'.$arr[name][post_date].'.jpg',
  'imageFullsize' =>'https://goldenbeachgroup.com/app/data/pic/driver/main/'.$arr[name][post_date].'.jpg',
  
 
);


}
 
// ส่วนของการส่งการแจ้งเตือนผ่านฟังก์ชั่น cURL
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, $notifyURL);
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0); // ถ้าเว็บเรามี ssl สามารถเปลี่ยนเป้น 2
curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0); // ถ้าเว็บเรามี ssl สามารถเปลี่ยนเป้น 1
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec( $ch );
curl_close( $ch );
 
// ตรวจสอบค่าข้อมูล ว่าเป็นตัวแปร ปรเภทไหน ข้อมูลอะไร
var_dump($result);
 
// การเช็คสถานะการทำงาน 
$result = json_decode($result,TRUE);
// ดูโครงสร้าง กรณีแปลงเป็น array แล้ว
//echo "<pre>";
//print_r($result);
 
// ตรวจสอบข้อมูล ใช้เป็นเงื่อนไขในการทำงาน
if(!is_null($result) && array_key_exists('status',$result)){
    if($result['status']==200){
        echo "Pass";
    }
	
}
 
 
// }
 
 
 
}

//


?>
        
 