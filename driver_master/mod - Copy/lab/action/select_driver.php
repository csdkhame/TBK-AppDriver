      <? $google_api="AIzaSyDJa08ZMaSnJP5A6EsL9wxqdDderh7zU90";?>
	
	
	<style>
   .div-all-check-place{
	 padding:5px;   border-radius:  25px; border: 1px solid #dadada;background-color:#FFFFFF;     margin-bottom: 5px; box-shadow: 0px  0px 5px #DADADA  ; font-size:16px; font-weight:bold; text-align:centers;  
	 
 }
 
 
    .div-all-check-phone{
	 padding:5px;   border-radius:  25px; border: 1px solid #dadada;background-color:#FFFFFF;     margin-bottom: 5px; box-shadow: 0px  0px 5px #DADADA  ; font-size:16px; font-weight:bold; text-align:centers;  
	 
 }
 
 </style>


 <?
 
if($_GET[type]=='find'){ 

 
 $data_name = "and  (name like '%" . $_POST[findname] . "%' or nickname like '%" . $_POST[findname] . "%' or phone like '%" . $_POST[findname] . "%' or username like '%" . $_POST[findname] . "%') ";
}
 
 if($arr[web_driver][company]==276 or $arr[web_driver][company]==283 or $arr[web_driver][company]==284 or $arr[web_driver][company]==3992 or $arr[web_driver][company]==3993 or $arr[web_driver][company]==3994){
$driver_company  =  "and (company='276' or company='283' or company='284' or company='3992' or company='3993' or company='3994')  and status_work=1 and status=1 and nickname<>''" ;						
 
 } 
  if($arr[web_driver][company]==1133 or $arr[web_driver][company]==3589 or $arr[web_driver][company]==3590 or $arr[web_driver][company]==3591 or $arr[web_driver][company]==3592 or $arr[web_driver][company]==3596){
$driver_company  =  "and (company=1133 or company=3589 or company=3590 or company=3591 or company=3592 or company=3596)  and status_work=1 and status=1 and nickname<>''" ;						
 
 } 
 
 
 
 
 
 
 
 $find_all = $db->num_rows(TB_driver,"id","id  > 0   $driver_company $data_name");
 
 
 ?>
 
     <div  class="div-find-data" style="margin-bottom:10px; padding:10px; font-size:18px;border-radius: 25px;"  ><center>
 
         <? if($find_all>0){ ?>  
         ค้นพบทั้งหมด   <?=$find_all?> รายชื่อ <? }  else {?>
         <font color="#FF0000"> ไม่พบคนขับรถที่ต้องการค้นหา </font> 
     
     <? } ?>
    
    </div>
 
 
 <?
 
 
 $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
 
 
 $res[dv] = $db->select_query("SELECT * FROM   web_driver  where id  > 0   $driver_company $data_name   ORDER BY  convert(nickname using tis620) limit $find_all ");
	
	
	
while ($arr[dv] = $db->fetch($res[dv])){
	
	$bgcolor = ($i++ & 1) ? '#FFFFFF' : '#FFFFFF'; 
	
	
$db->connectdb(DB_NAME_DATA, DB_USERNAME, DB_PASSWORD);
$res[online] = $db->select_query("SELECT *   FROM  driver_online_update  where  drivername=".$arr[dv][id]."");
$arr[online]   = $db->fetch($res[online]);


$time=$arr[online][update_date];


$data_lat=$arr[online][lat];
$data_lng=$arr[online][lng];
 
	
	
	
		 $online_time=time()-$time;
	 
	 if($online_time < 16){
		 
	$bd='#3B9FA6'	 ;
	 } else {
		 
$bd='#FFF'	 ;


	 }
	
	
	
	
        $db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
        $res[maincar] = $db->select_query("SELECT id,car_type,plate_color,car_sub_brand,car_brand,plate_num,province,car_num   FROM " . TB_carall . "  where  id=".$arr[dv][car_num]."");
  
    $arr[maincar] = $db->fetch($res[maincar]);
            $res[maincartype]   = $db->select_query("SELECT topic_en FROM " .TB_carall_type." WHERE id='" . $arr[maincar][car_type] . "' ");
            $arr[maincartype]   = $db->fetch($res[maincartype]);
			
						if($arr[maincartype][topic_en]=='Car'){
			$arr[maincartype][topic_en]='รถเก๋ง';
			}
			if($arr[maincartype][topic_en]=='Van'){
			$arr[maincartype][topic_en]='รถตู้';
			}
			
	
	
	
//	$url = "http://t-booking.com/admin/file/driver/pic/small/" . $arr[dv][post_date] . ".jpg";
	$url = "../data/pic/driver/main/" . $arr[dv][post_date] . ".jpg";
//	$url = "../data/pic/driver/small/".$arr[dv][post_date].".jpg";
	
	$res[company] = $db->select_query("SELECT id,company FROM web_admin where id ='".$arr[dv][company]."'   ");
    $arr[company] = $db->fetch($res[company]); 
    if($arr[company][company]!=""){
		$company = "".$arr[company][company];
	}

	$phone = explode("/",$arr[dv][phone]);
	
	
		$string_to_replace     = array ("-" ,"," , "+", "/");
$string_after_replace  = array ("" ,"<br>" , "", "<br>" ,);

$arr[dv][phone]   = str_replace($string_to_replace , $string_after_replace , $arr[dv][phone] , $count);   
	
	if($phone[1]!="" and $phone[1]!=NULL){
		
		$tag_phone = '<span onclick="TelDriver(\''.$phone[0].'\'); ">'.$phone[0].'</span><br/><span onclick="TelDriver('.$phone[1].');">'.$phone[1]."</span>";
	}else{
		$tag_phone = '<span onclick="TelDriver(\''.$arr[dv][phone].'\') ;">'.$arr[dv][phone].'</span>';
	}
	
 
	
	
    ?>
    
    
    <script>
$("#submit_change_dv_<?=$arr[dv][id];?>").click(function(){ 
 
 
    $( "#popup_work_main_control_send_work" ).toggle();
 
 ///  $('#load_driver_data').hide();
	
 
 var drivernew = <?=$arr[dv][id];?>;
 var driverold = <?=$driver_id?>;
 
 
 
 
 var url_driver = "load_in.php?name=lab/action&file=driver_data&day=<?=$_GET[day]?>&part=<?=$carpart?>&type=driver&id=<? echo $_GET[id];?>&dvold="+driverold+"&dvnew="+drivernew;
 
		///   alert(name);
 $('#load_send_work_data').load(url_driver);


});
	
	
</script>



<div  style="margin-top: 15px; margin-left:-0px; background:<? echo $bgcolor; ?>; box-shadow: 0 0PX 10px  #dadada;  border-radius: 20px; border:3px solid <?=$bd?>; padding:5px;  "><a href="#" class="mobileSelect-control" id="submit_change_dv_<?=$arr[dv][id];?>"  >
 
 
 <input type="hidden" value="<?=substr($arr[dv][username],9);?>" id="user_<?=$arr[dv][id];?>" class="user" />
 <input type="hidden" value="<?=$arr[dv][nickname];?>" id="name_<?=$arr[dv][id];?>" class="name" />

 	<table width="100%">
 	<tr>
 		
 		<td width="120" align="center"> <img src="<?=$url;?>?v=<?=time()?>"  width="90" height="107"  class="imgdv"  style="border-radius: 15px;"   border="0"  />
        
        
        
        
        
        
         <? if($online_time < 16){?>
    
   
    
    

    
    
    <div style="background-color:#3B9FA6; color:#FFFFFF; font-size:18px; padding:3px; border-radius: 15px; margin-top: 00px; width:90px "><center>ออนไลน์</div>
    
    
 
    
    <? } else { ?>
 
    
    
        
    <div style="background-color:#E30A31; color:#FFFFFF; font-size:18px; padding:3px; border-radius:  15px; margin-top:0px; width:90px "><center>ออฟไลน์</div>
    
    
    
    
    
    
    
    
    <? } ?>
        
        
        
        
        
        
      </td>
 		<td   class="td-color other" id="td_<?=$arr[dv][id];?>">
 		 
 
    
    
    
    <table width="100%" border="0" cellspacing="4" cellpadding="2">
  <tbody>
    <tr>
      <td class="font_18" style="color:#3C8DBC"><b><?=$arr[dv][nickname]." (".substr($arr[dv][username],9).") ";?></td>
    </tr>
    <tr>
      <td class="font_18"  ><?=$arr[dv][name];?></td>
    </tr>
    <tr>
      <td  >
      
      <a href="tel:<?=$arr[dv][phone];?>" id="call_<?=$arr[dv][id]?>">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="div-all-check-phone">
          <tbody>
            <tr>
               
              <td class="font_18"><b><?=$arr[dv][phone];?></b></td>
              <td width="30" align="right"><img src="images/icon/map/phone.png"   align="bottom"  width="25"    /></td>
              </tr>
          </tbody>
        </table>
 </td>
    </tr>
    <tr>
      <td style="font-size:16px; color:#009999 "><?=$company;?></td>
    </tr>
    <tr>
      <td class="font_20"><b><?=$arr[maincartype][topic_en]?>&nbsp;เบอร์ <?=$arr[maincar][car_num]?></td>
    </tr>
  </tbody>
</table>

    
    </td>
    </tr>
    </table>
    
    
    
    
    
 </a>
 
 
    <? if($online_time < 16){?>
  <table width="100%" border="0" cellspacing="3" cellpadding="3" >
     <tbody>
       <tr>
         <td width="50%" ><a  class="button_map_update_<?=$arr[dv][id]?>">
           <div class="div-all-check-place"><img src="images/icon_map/map.png"      width="25"   /> ตำแหน่ง</div>
         </a></td>
         <td width="50%"><a  class="button_map_update_go_<?=$arr[dv][id]?>">
           <div class="div-all-check-place"><img src="images/icon_map/navigator.png"      width="25" style="margin-top:-5px"   /> นำทาง</div>
         </a></td>
       </tr>
     </tbody>
   </table>
   
   <? } ?>

  <script>


	
 $('.button_map_update_<?=$arr[dv][id]?>').click(function(){  
 
 
  $( "#head_popup_work_preview_map_online" ).show();
 ///alert(<?=$data_lat?>,<?=$data_lng?>);


$( "#popup_work_preview_map_online" ).toggle();

//$('#tab_to_<?=$_POST[data_id]?>').removeClass("tab_alert");
///$('#load_work_preview_map_online').addClass("map-page-loader");

 $("#head_full_popup_map").html('แสดงตำแหน่ง <?=$arr[dv][nickname];?>');
 
 
 
 
 
 
  
 ///$("#load_work_preview_map_online").html('<iframe width="100%"  height="100%"  frameborder="0" style="border:0"  src="https://maps.google.com/maps?q=<?=$data_lat?>,<?=$data_lng?>&z=15&output=embed&key=<?=$google_api?>"></iframe>');
 
 
  $("#load_work_preview_map_online").html('<iframe width="100%"  height="100%"  frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=<?=$google_api?>&q=<?=$data_lat?>,<?=$data_lng?>&zoom=16&language=th" allowfullscreen></iframe>');
  
  
  
document.getElementById('driver_pic').src = "../data/pic/driver/main/<?=$arr[dv][post_date];?>.jpg";
  
  
  
  
  
 
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


	
 $('.button_map_update_go_<?=$arr[dv][id]?>').click(function(){  
 
 
 ///alert(<?=$data_lat?>,<?=$data_lng?>);
 
 $( "#head_popup_work_preview_map_online" ).hide();
 


$( "#popup_work_preview_map_online" ).toggle();

//$('#tab_to_<?=$_POST[data_id]?>').removeClass("tab_alert");
///$('#load_work_preview_map_online').addClass("map-page-loader");

 $("#head_full_popup_map").html('นำทางไปหา <?=$arr[dv][nickname];?>');
 
 
 
 
 
 
var lat=document.getElementById('check_data_status_gps_lat').value
var lng=document.getElementById('check_data_status_gps_lng').value
 
 ///$("#load_work_preview_map_online").html('<iframe width="100%"  height="100%"  frameborder="0" style="border:0"  src="https://maps.google.com/maps?q=<?=$data_lat?>,<?=$data_lng?>&z=15&output=embed&key=<?=$google_api?>"></iframe>');
 
 
  $("#load_work_preview_map_online").html('<iframe width="100%"  height="100%"  frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/directions?key=<?=$google_api?>&origin='+lat+','+lng+'&destination=<?=$data_lat?>,<?=$data_lng?>&avoid=tolls|highways" allowfullscreen></iframe>');
  
  
  
document.getElementById('driver_pic').src = "../data/pic/driver/main/<?=$arr[dv][post_date];?>.jpg";
  
  
  
  
  
 
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
 
 
 
 
</div>  
	   <? }
                      $db->closedb ();
                      ?>
 
 <br>
<br>
<br>
<br>
<br>
 
  <div id="popup_work_preview_map_online"    style="width:100%; height:100%; padding:0px;  left:0px;  top:0px;   z-index:9999999999999999; background-color:#FFFFFF; position:fixed;  display:none; margin-top:0px; overflow:hidden">
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
      <td width="80" valign="top"><span class="font_16"><img  id="driver_pic" src="../data/pic/driver/main/<?=$arr[dv][post_date];?>.jpg"  width="70" height="87"        class="IMGSHOP"  style="border-radius: 15px;"   border="0"/></span></td>
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
 </b><br>
