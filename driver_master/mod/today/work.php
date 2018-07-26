 <div style="padding:10px; margin-top:30px">
 
  
   
  
 
   
  
  
  
  
  
  
  
 
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
	 padding:5px;   border-radius:  30px; border: 3px solid #FF0000;background-color:#FFFFFF;     margin-bottom: 25px; box-shadow: 0px  0px 5px #DADADA  ; margin-left:0px;  
	 
 }
 
    .div-all-check-today-work-ok{
	 padding:5px;   border-radius:  30px; border: 3px solid #17B3B2;background-color:#FFFFFF;     margin-bottom: 25px; box-shadow: 0px  0px 5px #DADADA  ; margin-left:0px; z-index:1px;  
	 
 }
 
 
 
  .cirnumbershow-work {
    border-radius: 50%; background-color: #FF0000;
 
    padding: 0px; padding-top: 7px; 
    width: 50px;
    height: 50px; 
	text-align: justify; color:#FFFFFF; margin-left: 0px;   font-size:24px; font-weight:bold;  
	border: solid 3px #FFFFFF;
	 box-shadow: 0 0 15px 0px #DADADA; 
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
	 box-shadow: 0 0 15px 0px #DADADA; 
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

///echo $date=$_GET[day];


if(!$_GET[day]){
	
	$_GET[day]=$date;
}

 
 
$sortcar = "outdate_time asc";

$sortcarnext = "airout_time asc";

 
 
  $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
  
  
 
 
 
$res[project] = $db->select_query("SELECT id,product_area,airout_time,outdate,product_name_th,carno,outdate_time,name_pickup_place,name_to_place,car_price,driver_pickup,car_number,total,adult,child,baby   FROM  transfer_report_all where drivername='".$driver_id."'  and  transfer_date = '".$_GET[day]."'  and status='CONFIRM'  order by $sortcar   ");
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

 
 



 
<table width="100%" border="0" cellspacing="1" cellpadding="1"   id="work_<?=$arr[project][id]?>"  class="div-all-check-today-work<? if($arr[project][driver_pickup]>0){ echo '-ok';}?>">
  <tbody>
    <tr>
      
      <td style="font-size:16px; color:#FF0000"><table width="100%" border="0" cellspacing="1" cellpadding="1">
        <tbody>
          <tr>
            <td width="60" valign="top">
      
      <? if($arr[project][driver_pickup]>0){?>
 
	  
	  <span class="badge bg-green" style="border-radius: 25px;padding:5px; height:30px; width:30px; padding-top:5px; font-size:18px;border:2px solid #FFFFFF;  position: absolute ; margin-top:-20px; margin-left:10px;  display:none"  ><b><li class="fa fa-check"></li></b></span>
      
      
 
      
      
      
      <? } ?>
      
      
            
      <? if($arr[project][driver_pickup]==0){?>
	  
 
           <span class="badge bg-red" style="border-radius: 25px;padding:5px; height:30px; width:30px; padding-top:5px; font-size:18px;border:2px solid #FFFFFF;  position: absolute ; margin-top:-20px; margin-left:10px; display:none  "  ><b><li class="fa fa-close"></li></b></span> 
      
      <? } ?>
      
      <div class="cirnumbershow-work<? if($arr[project][driver_pickup]>0){ echo '-ok';}?> "> 
      <center>
      
      
      
      
      <? if($i>9){?>
      
      <span style="margin-left:-6px">
      
       <?= $i;?>
       
       </span>
       <? } else { ?>
          <?= $i;?>
       <? } ?>
 
      
	  </center>
	
     </div>
	 
	 
      </td>
            <td><table width="100%" border="0" cellpadding="1" cellspacing="1"   id="work_<?=$arr[project][id]?>2" >
              <tbody>
                <tr>
                  <td width="100" style="font-size:16px; color:#FF0000"><? //=$arr[project] [carno]?>
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
                        <td style="font-size:14px ; font-weight:bold">&nbsp;รับเข้า</td>
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
                        <td style="font-size:14px ; font-weight:bold">&nbsp;ส่งออก</td>
                        </tr>
                      </table>
                    <? }elseif($arr[project][product_area] == 'Point'){ 
	 
	  $work_area="พ้อยท์ทูพ้อยท์";
	  $music_service="รับจาก";
	 ?>
                    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td style="font-size:22px ; color: #3399CC; color:#444444  " width="30">&nbsp;<i class="fa   fa-share-alt"></i></td>
                        <td style="font-size:14px ; font-weight:bold">&nbsp;พ้อยท์</td>
                        </tr>
                      </table>
                    <? }else{ 
						   $work_area="เซอร์วิส";
						   $music_service="งานใช้รถใน";
						   
						   ?>
                    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td style="font-size:20px ; color: #3399CC; color:#444444 " width="30">&nbsp;<i class="fa  fa-taxi"></i></td>
                        <td style="font-size:14px ; font-weight:bold">&nbsp;เซอร์วิส</td>
                        </tr>
                      </table>
                    <? } ?></td>
                  <td style="font-size: 18px; "><i class="fa  fa-clock-o"  fa-spin 6x style="color:#999999"></i><b>&nbsp;&nbsp;
                    <?=$arr[project] [airout_time]?>
                    <b>
                    </td>
                </tr>
 
              </tbody>
            </table></td>
          </tr>
        </tbody>
      </table></td>
      </tr>
    <tr>
      <td colspan="2" align="center" valign="top" style="font-size:22px; color:#000000"><table width="100%" border="0" cellspacing="4" cellpadding="2">
        <tbody>
          <tr style="display:nones">
              <td colspan="2" class="font_20" style="color:#3C8DBC"><b>
                    <div><?=$pro_name_th?>
                  </div></td>
            </tr>
          <tr>
            <td width="80"><strong>ประเภทรถ</strong></td>
            <td valign="top" class="font_18"><?=$arr[maincartype][topic_en]?>&nbsp;(เบอร์ <?=$arr[maincar][car_num] ?>)</td>
            </tr>
          <tr>
            <td><strong>จำนวนแขก</strong></td>
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
            <td valign="top"><strong>รับ</strong></td>
            <td valign="top"><?=$arr[project][name_pickup_place]?></td>
            </tr>
          <tr>
            <td valign="top"><strong>ส่ง</strong></td>
            <td valign="top"><?=$arr[project][name_to_place]?></td>
            </tr>
          <tr>
            <td valign="top"><strong>ค่าเที่ยว</strong></td>
            <td valign="top" class="font_20" style="color:<? if($arr[project][driver_pickup]==0){ echo '#FF0000';} else {echo '#17B3B2'; }?>"><b><?=$arr[project][car_price]?></td>
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
                    
                  <? if($arr[project][driver_pickup]==0){?> 
                  <tr>
                    <td> <div class="btn-startwork bg-green" style="background-color: #FC9A35;border-radius: 25px;margin:0px;"  id="change_new_work_<?=$arr[project][id];?>" ><? //echo $arr[project][airout_time];?><center><font class="font_20 "><span  id="change_new_work_text_<?=$arr[project][id];?>">ส่งงานให้คนอื่น</span></font> </div>  </td>
                    </tr>
                    
                    <? } ?>
                  </tbody>
                </table>
              </td>
            </tr>
          <tr>
            
            </tr>
          </tbody>
      </table></td>
      </tr>
  </tbody>
</table>
 
 

<? } ?> 

  </div>
