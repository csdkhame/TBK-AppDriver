<style type="text/css">
body,td,th {
	font-family: Arial, sans-serif;
	font-size: 16px;
}
</style>





 <div style="padding:10px; margin-top:0px; width:700px;">
 
  
   
  
 
     <?  include ("bootstrap/fonts/all.php");?> 
  
  
  
  
  
  
  
 
 <script>
 $("#head_full_popup_acc" ).html("งาน <?=$_GET[day]?>");
 
 </script>
 
 
 
 <style>
 
 
 @-webkit-keyframes DIV-BORDER-DV {
    0%   { border-color: #FF0000 }
    50%  { border-color: white }
    100% { border-color: #FF0000 }
}

 @-moz-keyframes DIV-BORDER-DV {
 
    0%   { border-color: #FF0000 }
    50%  { border-color: white }
    100% { border-color: #FF0000 }
}




.tab_alert_dv {
 
      border: 1px solid;
	  
	  
	 	  -webkit-transition: all 1s;
	   -moz-animation: DIV-BORDER-DV 1s infinite;
	  
      -webkit-transition: all 1s;
    -webkit-animation: DIV-BORDER-DV 1s infinite;
}
 
 </style>


   <style>
   .div-all-check-today-work{
	 padding:5px;   border-radius:  0px; border: 2px solid #dadada;background-color:#FFFFFF;     margin-bottom: 10px; margin-left:0px;  
	 
 }
 
    .div-all-check-today-work-ok{
	 padding:5px;   border-radius:  30px; border: 2px solid #17B3B2;background-color:#FFFFFF;     margin-bottom: 25px; box-shadow: 0px  0px 5px #DADADA  ; margin-left:0px; z-index:1px;  
	 
 }
 
 
 
  .cirnumbershow-work {
    border-radius: 50%; background-color: #FF0000;
 
    padding: 0px; padding-top: 7px; 
    width: 50px;
    height: 50px; 
	text-align: justify; color:#FFFFFF; margin-left: 0px;   font-size:24px; font-weight:bold;  
	border: solid 3px #FFFFFF;
 
    border-radius: 50%; background-color: #DD4B39; 
  color: #fff;
}


 .cirnumbershow-work-ok {
    border-radius: 50%; background-color: #17B3B2;
 
    padding: 0px; padding-top: 7px; 
    width: 50px;
    height: 50px; 
	text-align: justify; color:#FFFFFF; margin-left: 0px;   font-size:24px; font-weight:bold;  
	border: solid 3px #FFFFFF;
 
    border-radius: 50%;   
  color: #fff;
}

 
 
 </style>

 
<?
///include("config.php");
 
?>
<?
 $date=date('Y-m-d');

 $time=date("H:i:s");
  $timeall=date("H:i");
  

 $timestamp=time();

 //echo  $_GET[day];


if(!$_GET[day]){
	
	$_GET[day]=$date;
}

 
 
$sortcar = "outdate_time asc";

$sortcarnext = "airout_time asc";

 
 
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


 
 
$res[project] = $db->select_query("SELECT  $select_order  FROM  transfer_report_all where drivername='".$_GET[driver]."'  and  transfer_date = '".$_GET[day]."'  and status='CONFIRM'  order by  outdate,airout_time   ");
// $arr[project] = $db->fetch($res[project]); 





$i=0;

while($arr[project] = $db->fetch($res[project])){
	
        $db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
        $res[maincar] = $db->select_query("SELECT  car_type,car_num   FROM " . TB_carall . "  where  id=".$arr[project][car_number]."");
  
    $arr[maincar] = $db->fetch($res[maincar]);
	
	
	
            $res[maincartype]   = $db->select_query("SELECT topic_en FROM " .TB_carall_type." WHERE id='" . $arr[maincar][car_type] . "' ");
            $arr[maincartype]   = $db->fetch($res[maincartype]);
			
			
						if($arr[maincartype][topic_en]=='Car'){
			$arr[maincartype][topic_en]='รถเก๋ง';
			}
			if($arr[maincartype][topic_en]=='Van'){
			$arr[maincartype][topic_en]='รถตู้';
			}
	
	
	/*
$outdate_time=strtotime($arr[project][outdate].$arr[project][airout_time].':00'); 
 
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);  
$db->update_db(TB_transfer_report_all,array(
 
 "outdate_time"=>$outdate_time
 
		)," id='".$arr[project][id]."' ");
		
 */

$i++;

 
 

 
 
 
?>

 
  <?
 
  $string_to_replace     = array ("-" ,"," , " ");
$string_after_replace  = array (" ส่งที่ " ,"" , "" ,);
$pro_name_th       = str_replace($string_to_replace , $string_after_replace ,$arr[project][product_name_th], $count);   

 /// icon-new-uniF10A-9
 
 
 
  ?>

     <?
 
$string_to     = array ("/", "【" , "】");
$string_after  = array (" - " , "<font color='#666666'>&nbsp;[", "]</font>");
$pro_name_th_cut = str_replace($string_to , $string_after ,$arr[project][product_name_th], $count);   
$pro_name_en_cut= str_replace($string_to , $string_after ,$arr[project][product_name], $count);   
  ?>
  
 
<? 
			 
			if($arr[project][agent]=='13' and  $arr[project][cartype] <>'2'){
			$carpart="Ctrip";			
			$music_carpart="ซีทริป";			
			}
				if($arr[project][agent]=='13' and  $arr[project][cartype] =='2'){
			$carpart="Join";			
			$music_carpart="Join";			
			}
			
			if($arr[project][agent]<>'13' and  $arr[project][cartype] <>'2'){
			$carpart="Golden";			
			$music_carpart="Golden";
			}
				if($arr[project][agent]<>'13' and  $arr[project][cartype] =='2'){
			$carpart="Join";			
			$music_carpart="จอย";
			}
			
			/*
			if($arr[remark][admin_company]<>'1' and  $arr[project][cartype] <>'2'){
			$carpart="Private";			
			$music_carpart="Private";
			
			//$carpart="Golden";			
			}
			 */
			// $music_carpart="โกลเด้น";
  			
			?>


 
<table width="100%" border="0" cellspacing="1" cellpadding="1"   id="work_<?=$arr[project][id]?>"  class="div-all-check-today-work">
  <tbody>
    <tr>
      
      <td style="font-size:16px; color:#FF0000; background-color:#F6F6F6; padding:5px"><table width="100%" border="0" cellspacing="1" cellpadding="1">
        <tbody>
          <tr>
            <td width="40" style="font-size:28px; color:#000000"><b>
      
        <?= $i;?>
	 
	 
      .</td>
            <td><table width="100%" border="0" cellpadding="1" cellspacing="1"   id="work_<?=$arr[project][id]?>2" >
              <tbody>
                <tr>
                  <td width="140" style="font-size:16px; color:#FF0000"><? //=$arr[project] [carno]?>
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
                        <td style="font-size:16px ; font-weight:bold">&nbsp;รับเข้า</td>
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
                        <td style="font-size:16px ; font-weight:bold">&nbsp;ส่งออก</td>
                        </tr>
                      </table>
                    <? }elseif($arr[project][product_area] == 'Point'){ 
	 
	  $work_area="พ้อยท์ทูพ้อยท์";
	  $music_service="รับจาก";
	 ?>
                    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td style="font-size:22px ; color: #3399CC; color:#444444  " width="30">&nbsp;<i class="fa   fa-share-alt"></i></td>
                        <td style="font-size:16px ; font-weight:bold">&nbsp;พ้อยท์</td>
                        </tr>
                      </table>
                    <? }else{ 
						   $work_area="เซอร์วิส";
						   $music_service="งานใช้รถใน";
						   
						   ?>
                    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td style="font-size:20px ; color: #3399CC; color:#444444 " width="30">&nbsp;<i class="fa  fa-taxi"></i></td>
                        <td style="font-size:16px ; font-weight:bold">&nbsp;เซอร์วิส</td>
                        </tr>
                      </table>
                    <? } ?></td>
                  <td style="font-size: 20px; "><i class="fa  fa-clock-o"  fa-spin 6x style="color:#999999"></i><b>&nbsp;
                    <?=$arr[project] [airout_time]?>&nbsp;&nbsp;&nbsp;<i class="fa  fa-calendar"  fa-spin 6x style="color:#999999"></i><b>&nbsp;
                    <?=$arr[project] [transfer_date]?>
                    <b>
                    </td>
                </tr>
 
              </tbody>
            </table></td>
          </tr>
        </tbody>
      </table>
        <table width="100%"  border="0" cellspacing="1" cellpadding="1"   style="color:#000000; font-size:20px; border-top: 2px dotted #999999; padding-bottom: 0px; border-bottom: 2px dotted #999999; background-color:#FFFFFF">
  <tr>
    <td style="font-size: 20px; font-weight:bold;  padding:5px;border-radius: 5px; color:333333 "><b><?=$carpart?>  <?=$arr[project][carno];?>&nbsp;&nbsp;</td>
    <td width="100" align="right" style="font-size:18px; font-weight:bold;  padding:5PX;border-radius: 5px; color:000000 "> <?=$arr[project][invoice];?> </td>
  </tr>
</table></td>
      </tr>
    <tr>
      <td colspan="0" align="center" valign="top" style="font-size:22px; color:#000000"><table width="100%" border="0" cellspacing="4" cellpadding="2">
        <tbody>
          <tr style="display:nones">
              <td colspan="2"   style="color:#000000; font-size:20px; border-bottom: 2px dotted #999999; padding-bottom:10px;"><b>
                    <div><?=$pro_name_th?> <font color="#666666"> <?=$pro_name_en_cut?>
                  </div></td>
            </tr>
          <tr>
            <td valign="top"><strong>รับ</strong></td>
            <td valign="top"><b><?=$arr[project][name_pickup_place]?></b> &nbsp;<font color="#666666">&nbsp;(<? echo $arr[project][name_pickup_place_area] ?> | <? echo $arr[project][name_pickup_place_province] ?>)</td>
          </tr>
          <tr>
            <td valign="top"><strong>ส่ง</strong></td>
            <td valign="top"><b><?=$arr[project][name_to_place]?></b> &nbsp;<font color="#666666">&nbsp;(<? echo $arr[project][name_to_place_area] ?> | <? echo $arr[project][name_to_place_province] ?>)</td>
          </tr>
          <tr>
            <td width="100"><strong>จำนวนแขก</strong></td>
            <td><?
 	 if($arr[project][adult]>0){ ?>
              ผู้ใหญ่ : 
              <?=$arr[project][adult];?> &nbsp; 
              <? }else{ ?>
              ผู้ใหญ่ : 
              <?=$arr[project][total]-$arr[project][child]-$arr[project][baby];?> &nbsp;  
              <?php } ?>
              
              <? if($arr[project][child]>0){ ?>
              เด็ก : 
              <?=$arr[project][child];?> &nbsp; 
              <? } ?>
              
              <? if($arr[project][baby]>0){ ?>
              ทารก : 
              <?=$arr[project][baby];?> 
              <? } ?></td>
          </tr>
          <tr>
            <td><strong>ชื่อแขก</strong></td>
            <td><span class="td-text">
              <?=$arr[project][guest_name]?>
            </span></td>
          </tr>
          
          
          <? if($arr[project][remark]<>''){?>
          
          <tr>
            <td><strong>หมายเหตุ</strong></td>
            <td><?=$arr[project][remark]?></td>
            </tr>
            
            <? } ?>
            
          <tr>
            <td><strong>ค่าเที่ยว</strong></td>
            <td style="font-size:20px;"><b><?=$arr[project][car_price]?></td>
          </tr>
          <tr style="display:none">
            <td colspan="2" valign="top">
              <table width="100%" border="0" cellspacing="1" cellpadding="1">
                <tbody>
                  <tr>
                    <td width="50%"><div class="btn-startwork" style="background-color: #3C8DBC;border-radius: 25px; margin:0px; height:40px; padding-top:5px;"  ><? //echo $arr[project][airout_time];?><font class="font_22"><center>จัดการงาน</font>
                      </center>
                      </div> </td>
                    </tr>
                    
 
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
      </table></td>
      </tr>
  </tbody>
</table>
 
 

<? } ?> 

  </div>
