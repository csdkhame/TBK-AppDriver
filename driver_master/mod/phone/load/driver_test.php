   <style>
   .div-all-check-place{
	 padding:5px;   border-radius:  25px; border: 1px solid #dadada;background-color:#FFFFFF;     margin-bottom: 5px; box-shadow: 0px  0px 5px #DADADA  ; font-size:16px; font-weight:bold; text-align:center;  
	 
 }
 
 
 </style>

 
  <? $google_api="AIzaSyDJa08ZMaSnJP5A6EsL9wxqdDderh7zU90";?>
 
 

 
 
 
 
 
 <?
  // $driver_company  =  "and id <> 1779  and id <> 1280   and id <> 373   and id <> 1347  and id <> 1240  and id <> 649 " ;						
 /// 283 284 276
 if($_GET[type]=='find'){ 
  $data_name = "and  (nickname like '%" . $_POST[findname] . "%' or phone like '%" . $_POST[findname] . "%') ";
}
 
 if($arr[web_driver][company]==276 or $arr[web_driver][company]==283 or $arr[web_driver][company]==284){
    $driver_company  =  "and (company=276 or company=283 or company=284)  and status_work=1 and status=1  and nickname<>''" ;						
 
 } else{
 $driver_company="and company=".$arr[web_driver][company]." and status_work=1 and status=1 and nickname<>''";
 }
 
 
 $find_all = $db->num_rows(TB_driver,"id","id  > 0   $driver_company $data_name");
 
 ?>
 
    <div  class="div-find-data" style="margin:10px; padding:10px; font-size:18px"  ><center>
    
  ค้นพบทั้งหมด   <?=$find_all?> รายชื่อ
    
    </div>
 
 
 <?
 
 
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);

$res[private_phone] = $db->select_query("SELECT * FROM   web_driver  where id  > 0   $driver_company $data_name   ORDER BY  convert(nickname using tis620)  ");
	///$res[contact_phone] = $db->select_query("SELECT * FROM  contact_phone WHERE company = '".$arr[product][admin_company]."' ");
	while($arr[private_phone] = $db->fetch($res[private_phone])){  
	
	
	
	
	
$filename = "../data/pic/driver/main/".$arr[private_phone][post_date].".jpg";

if (file_exists($filename)) {
  //  echo "The file $filename exists";
	
	
	

	
	
	
	
	
} else {
 ////echo "The file $filename does not exist";
   
@copy ("http://www.t-booking.com/pic/driver/".$arr[private_phone][post_date].".jpg" , "../data/pic/driver/main/".$arr[private_phone][post_date].".jpg" );
   
}
	
	
	
	
	
 
  $res[type] = $db->select_query("SELECT id,company FROM web_admin where id= '".$arr[private_phone][company]."'  ");
 

 $db->connectdb(DB_NAME_DATA, DB_USERNAME, DB_PASSWORD);
$res[online] = $db->select_query("SELECT *   FROM  driver_online_update  where  drivername=".$arr[private_phone][id]."");
$arr[online]   = $db->fetch($res[online]);


$time=$arr[online][update_date];


$data_lat=$arr[online][lat];
$data_lng=$arr[online][lng];

 $db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
  $res[maincar] = $db->select_query("SELECT id,car_type,plate_color,car_sub_brand,car_brand,plate_num,province,car_num   FROM " . TB_carall . "  where  id=".$arr[private_phone][car_num]."");
  
    $arr[maincar] = $db->fetch($res[maincar]);
            $res[maincartype]   = $db->select_query("SELECT topic_en FROM " .TB_carall_type." WHERE id='" . $arr[maincar][car_type] . "' ");
            $arr[maincartype]   = $db->fetch($res[maincartype]);
 
 
			
			
			
			if($arr[maincartype][topic_en]=='Car'){
			$arr[maincartype][topic_en]='รถเก๋ง';
			}
			if($arr[maincartype][topic_en]=='Van'){
			$arr[maincartype][topic_en]='รถตู้';
			}
		
		
		
  $arr[maincartype][topic_en];
						
 
 $arr[type] = $db->fetch($res[type]);
 
 		$bgcolor = ($i++ & 1) ? '#FFFFFF' : '#FFFFFF'; 
 
	
		$string_to_replace     = array ("-" ,"," , "+", "/");
$string_after_replace  = array ("" ,"<br>" , "", "<br>" ,);

$arr[private_phone][phone]  = str_replace($string_to_replace , $string_after_replace , $arr[private_phone][phone] , $count);   
	
	 $online_time=time()-$time;
	 
	 if($online_time < 16){
		 
	$bd='#3B9FA6'	 ;
	 } else {
		 
$bd='#FFF'	 ;


	 }
	
	?>
	
    
 
    
 
 
   <div  >
   <div style="margin-top: 15px; margin-left:-0px; background:<? echo $bgcolor; ?>; box-shadow: 0 0PX 10px  #dadada;  border-radius: 20px; border:3px solid <?=$bd?>; padding:5px;  ">
   <table width="100%"  border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">
  <tr>
    <td width="50" rowspan="2" style="display:none"><div class="btn-group">
            <a href="tel:<?=$arr[private_phone][phone];?>" id="call_<?=$arr[private_phone][id]?>">     <button type="button" class="btn btn-primary" style="height:100px; padding-left:10px; padding-right:5px; " data-toggle="dropdowns"> 
<i class="fa fa-phone" style="font-size:36px "  ></i>  </button></a>
 
 
 
                
              </div>
			  
  </td>
  
    <td width="100" rowspan="2" align="center" class="font_16"><img src="../data/pic/driver/main/<?=$arr[private_phone][post_date];?>.jpg?v=<?=time()?>"  width="86" height="108"        class="imgdv"  style="border-radius: 15px;"   border="0"/>
    
    
    
    
    
    
    
    <? //=$online_time?> 
    
    
    
    </td>
    <td valign="top" class="font_16"> <br>

      <table width="100%" border="0" cellspacing="1" cellpadding="1">
        <tbody>
          <tr>
            <td>&nbsp;</td>
            <td width="90" align="right" style="padding-right:10px;"> 
    
    <? if($online_time < 16){?>
    
   
    
    

    
    
    <div style="background-color:#3B9FA6; color:#FFFFFF; font-size:18px; padding:3px; border-radius: 20px; margin-top:-40px; margin-right:-12px; "><center>ออนไลน์</div>
    
    
 
    
    <? } else { ?>
 
    
    
        
    <div style="background-color:#E30A31; color:#FFFFFF; font-size:18px; padding:3px; border-radius: 20px; margin-top:-40px; margin-right:-12px; "><center>ออฟไลน์</div>
    
    
    
    
    
    
    
    
    <? } ?></td>
          </tr>
        </tbody>
      </table>
      
      
      <table width="100%" border="0" cellspacing="2" cellpadding="2" style="margin-top: -30px;">
  <tbody>
    <tr>
      <td><a href="tel:<?=$arr[private_phone][phone];?>" id="call_<?=$arr[private_phone][id]?>"><div style="padding-bottom:3px;font-size: 20px; "><B><?=$arr[private_phone][nickname];?></div>
      </a> 
    

 
    
</td>
    </tr>
    <tr>
      <td><a href="tel:<?=$arr[private_phone][phone];?>" id="call_<?=$arr[private_phone][id]?>"><img src="images/icon/map/phone.png"   align="bottom"  width="26"  style="padding-right:5px; margin-top:-5px;"   /><span style="font-size:18px; color:#333333"><b><?=$arr[private_phone][phone];?></span></a></td>
    </tr>
    <tr>
      <td><div style="font-size:16px; color:#009999 "><?=$arr[type][company]?></div> </td>
    </tr>
    <tr>
      <td  style="font-size:16px; "><?=$arr[maincartype][topic_en]?>&nbsp;เบอร์ <?=$arr[maincar][car_num]?> </td>
    </tr>
    <tr>
      
    </tr>
 
   </table>
  

	 </td>
    </tr>
  </tbody>
</table>

    <? if($online_time < 16){?>
   <table width="100%" border="0" cellspacing="3" cellpadding="3" >
     <tbody>
       <tr>
         <td width="50%" ><a  class="button_map_update_<?=$arr[private_phone][id]?>">
           <div class="div-all-check-place"><img src="images/icon_map/map.png"      width="18"   /> ตำแหน่ง</div>
         </a></td>
         <td width="50%"><a  class="button_map_update_go_<?=$arr[private_phone][id]?>">
           <div class="div-all-check-place"><img src="images/icon_map/navigator.png"      width="18" style="margin-top:-5px"   /> นำทาง</div>
         </a></td>
       </tr>
     </tbody>
   </table>
   
   <? } ?>
   </div>
     </div>
	 
    <script>


	
 $('.button_map_update_<?=$arr[private_phone][id]?>').click(function(){  
 
 
  $( "#head_popup_work_preview_map_online" ).show();
 ///alert(<?=$data_lat?>,<?=$data_lng?>);


$( "#popup_work_preview_map_online" ).toggle();

//$('#tab_to_<?=$_POST[data_id]?>').removeClass("tab_alert");
///$('#load_work_preview_map_online').addClass("map-page-loader");

 $("#head_full_popup_map").html('แสดงตำแหน่ง <?=$arr[private_phone][nickname];?>');
 
 
 
 
 
 
  
 ///$("#load_work_preview_map_online").html('<iframe width="100%"  height="100%"  frameborder="0" style="border:0"  src="https://maps.google.com/maps?q=<?=$data_lat?>,<?=$data_lng?>&z=15&output=embed&key=<?=$google_api?>"></iframe>');
 
 
  $("#load_work_preview_map_online").html('<iframe width="100%"  height="100%"  frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=<?=$google_api?>&q=<?=$data_lat?>,<?=$data_lng?>&zoom=16" allowfullscreen></iframe>');
  
  
  
document.getElementById('driver_pic').src = "../data/pic/driver/main/<?=$arr[private_phone][post_date];?>.jpg";
  
  
  
  
  
 
 ///$('#load_work_preview_map_online').removeClass("map-page-loader");
 
  var url = "https://maps.googleapis.com/maps/api/geocode/json?latlng=<?=$data_lat?>,<?=$data_lng?>&sensor=false&language=th";
$.getJSON(url, function (data) {
    for(var i=0;i<1;i++) {
        var adress = data.results[i].formatted_address;
 
	  $( "#load_work_preview_map_online_address" ).html(adress);
    }
});
 

 
});
 
 
 


 
 </script>
 
 
 
 
 
 
 
  <script>


	
 $('.button_map_update_go_<?=$arr[private_phone][id]?>').click(function(){  
 
 
 ///alert(<?=$data_lat?>,<?=$data_lng?>);
 
 $( "#head_popup_work_preview_map_online" ).hide();
 


$( "#popup_work_preview_map_online" ).toggle();

//$('#tab_to_<?=$_POST[data_id]?>').removeClass("tab_alert");
///$('#load_work_preview_map_online').addClass("map-page-loader");

 $("#head_full_popup_map").html('นำทางไปหา <?=$arr[private_phone][nickname];?>');
 
 
 
 
 
 
var lat=document.getElementById('check_data_status_gps_lat').value
var lng=document.getElementById('check_data_status_gps_lng').value
 
 ///$("#load_work_preview_map_online").html('<iframe width="100%"  height="100%"  frameborder="0" style="border:0"  src="https://maps.google.com/maps?q=<?=$data_lat?>,<?=$data_lng?>&z=15&output=embed&key=<?=$google_api?>"></iframe>');
 
 
  $("#load_work_preview_map_online").html('<iframe width="100%"  height="100%"  frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/directions?key=<?=$google_api?>&origin='+lat+','+lng+'&destination=<?=$data_lat?>,<?=$data_lng?>&avoid=tolls|highways" allowfullscreen></iframe>');
  
  
  
document.getElementById('driver_pic').src = "../data/pic/driver/main/<?=$arr[private_phone][post_date];?>.jpg";
  
  
  
  
  
 
 ///$('#load_work_preview_map_online').removeClass("map-page-loader");
 
  var url = "https://maps.googleapis.com/maps/api/geocode/json?latlng=<?=$data_lat?>,<?=$data_lng?>&sensor=false&language=th";
$.getJSON(url, function (data) {
    for(var i=0;i<1;i++) {
        var adress = data.results[i].formatted_address;
 
	  $( "#load_work_preview_map_online_address" ).html(adress);
    }
});
 

 
});
 
 
 


 
 </script>
 
 
 
 
    
	 
 <? } ?>  
  
  
  

  
  <div id="popup_work_preview_map_online"    style="width:100%; height:100%; padding:0px;  left:0px;  top:0px;   z-index:99999999; background-color:#FFFFFF; position:fixed;  display:none; margin-top:0px; overflow:hidden">
   <div class="back-full-popup">
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="40"   ><a  id="btn_close_chat_preview_map_online"><div    class="back-full-popup-map-icon"><i class="fa fa-arrow-circle-left" style="font-size:22px; color:#FFFFFF "> </i></div></a></td>
  <td   ><div style="font-size:18px; color:#FFFFFF " id="head_full_popup_map"><?="ตำแหน่งของคุณ"?></div></td>
    <td width="50" align="right"   ><div style="font-size:18px; color:#FFFFFF " id="head_full_popup_icon"><i class='fa  fa-map-marker'></i></div></td>
  </tr>
</table>
</div>
 
   <div   style=" background-color:#FFFFFF ; height:auto;width:100%; top:43; position:fixed; padding:5px;  ; overflow:hidden;z-index:999999;"  id="head_popup_work_preview_map_online" >
 
<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tbody>
    <tr>
      <td width="80" valign="top"><span class="font_16"><img  id="driver_pic" src="../data/pic/driver/main/<?=$arr[private_phone][post_date];?>.jpg"  width="70" height="87"        class="IMGSHOP"  style="border-radius: 15px;"   border="0"/></span></td>
      <td  ><table width="100%"  border="0" cellspacing="2" cellpadding="0" >
  <tr>
 
    <td   style=" color:#000000; padding-top:0px; font-size:18px "><b>ตำแหน่ง</b></td>
 
   
  </tr>
  <tr>
    <td id="load_work_preview_map_online_address"  style=" color:#333333; padding-bottom:5px; " >&nbsp;</td>
  </tr>
</table></td>
    </tr>
  </tbody>
</table>


</div>



 
 <div   id="load_work_preview_map_online"   style="margin-top: 45px; height:100%; overflow:hidden;  "  >  
		 
 <?  ///  include('google/check_system_realtime.php')?>
</div> 
 
 
              
				                </div>
 
 
 
 
 
      <script>
 	
 $('#btn_close_chat_preview_map_online').click(function(){  
 
 
 
 $( "#popup_work_preview_map_online" ).toggle();
 
 
 });
  </script>
 