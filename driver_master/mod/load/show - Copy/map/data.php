 <? $google_api="AIzaSyDJa08ZMaSnJP5A6EsL9wxqdDderh7zU90";?>
 
<?
 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$res[to] = $db->select_query("SELECT * FROM ".TB_transfer_report_all."  where id='".$_GET[bookid]."' limit 1");
 $arr[to] = $db->fetch($res[to]);
  
?>
 
 
 <?
//echo $_GET[type];
 
if($_GET[type] == 'driver_topoint'){

 

	$type_point = "ถึงสถานที่รับแขก";
	
	$type_point_short = "สถานที่รับแขก";
	
	$data_point = "topoint";
	
	$photo_type = "topoint";
 

	
}





if($_GET[type] == 'driver_checkcar'){

 

	$type_point = "ตรวจเช็คสัมภาระภายในรถ";
	
		$type_point_short = "ในรถ";
		
	$data_point = "checkcar";
	
	$photo_type = "checkcar";
 

	
}


if($_GET[type] == 'driver_pickup'){
	$data_point = "pickup";
	
	
	
	
	
	
	
	if($arr[to][driver_pickup] == 1){
		$type_point = "รับแขกขึ้นรถ";
		
		$type_point_short = "แขก";
		
		$photo_type = "yes";
		
	}else{
		$type_point = "ไม่เจอแขก";
		
		$photo_type = "no";
		
		$type_point_short = "สถานที่รับแขก";
		
	}
}
if($_GET[type] == 'driver_complete'){
	$data_point = "complete";
	$type_point = "งานสำเร็จ";
	
	$photo_type = "finishpoint";
	
	$type_point_short = "สถานที่ส่งแขก";
	
	
}



?>
<?
$data_lat=$arr[to][driver_.$data_point._lat];
$data_lng=$arr[to][driver_.$data_point._lng];
 
?>
<style>
	#load_work_preview_map {
	position: fixed;  
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	 overflow:hidden;
	background: url('images/loader.gif') 50% 50% no-repeat rgb(249,249,249); background-color:#FFFFFF
}
</style>
 
 <script>
 $('#button_map_<?=$_GET[type] ?>_<?=$_GET[bookid]?>').click(function(){  
 

$( "#popup_work_preview_map" ).toggle();

//$('#tab_to_<?=$_POST[data_id]?>').removeClass("tab_alert");
$('#load_work_preview_map').addClass("map-page-loader");

 $("#head_full_popup_map").html('<?=$type_point?>');
  
 ///$("#load_work_preview_map").html('<iframe width="100%"  height="100%"  frameborder="0" style="border:0"  src="https://maps.google.com/maps?q=<?=$data_lat?>,<?=$data_lng?>&z=15&output=embed&key=<?=$google_api?>"></iframe>');
 
 
  $("#load_work_preview_map").html('<iframe width="100%"  height="100%"  frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=<?=$google_api?>&q=<?=$data_lat?>,<?=$data_lng?>&zoom=14" allowfullscreen></iframe>');
 
 ///$('#load_work_preview_map').removeClass("map-page-loader");
 
  var url = "https://maps.googleapis.com/maps/api/geocode/json?latlng=<?=$data_lat?>,<?=$data_lng?>&sensor=false&language=th";
$.getJSON(url, function (data) {
    for(var i=0;i<1;i++) {
        var adress = data.results[i].formatted_address;
 
	  $( "#load_work_preview_map_address" ).html(adress);
    }
});
 
 
 

});




 
 </script>
 
 
 
 
 
 
 
 
 
 <?
 
 
 
 
 
 ?>
 
 
 
 
 
 
 <div id="header">
<?php 
    // integer starts at 0 before counting
	
	/// http://localhost/app/
    $i = 0; 
    $dir = "../car/pic/guest/".$photo_type."/".$arr[to][invoice]."";
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }
    // prints out how many were in the directory
 
 /*
 
$dir =  "../car/pic/guest/".$photo_type."/".$arr[to][invoice]."/*";
$extension = '.png';

 
 // Open a known directory, and proceed to read its contents
foreach(glob($dir) as $file)
{
     echo '<img src='.$file.' height=50 width=50 />';
}
 
 */
?>
</div>
 
 
 
 
 
 
 

 <script>
 $('#button_photo_<?=$_GET[type] ?>_<?=$_GET[bookid]?>').click(function(){  
 

$( "#popup_work_preview_photo" ).toggle();

//$('#tab_to_<?=$_POST[data_id]?>').removeClass("tab_alert");
$('#load_work_preview_map').addClass("map-page-loader");

 $("#head_full_popup_photo").html('ภาพถ่าย<?=$type_point_short?>');
  
 ///$("#load_work_preview_map").html('<iframe width="100%"  height="100%"  frameborder="0" style="border:0"  src="https://maps.google.com/maps?q=<?=$data_lat?>,<?=$data_lng?>&z=15&output=embed&key=<?=$google_api?>"></iframe>');
 
 
   	var url_photo_<?=$_GET[bookid];?> = "go.php?name=load/show/map&file=photo&sv=<?=$_GET[sv];?>&bookid=<?=$_GET[bookid];?>&type=driver_<?=$data_point?>&data_val=<?=$_GET[data_val];?>";
 
  //$("#load_work_preview_photo").load(url_photo_<?=$_GET[bookid];?>);
 
 
$("#load_work_preview_photo").html('<iframe width="100%"  height="100%"  frameborder="0" style="border:0"  src="go.php?name=load/show/map&file=photo&sv=<?=$_GET[sv];?>&bookid=<?=$_GET[bookid];?>&type=driver_<?=$data_point?>&data_val=<?=$_GET[data_val];?>&type=<?=$photo_type?>&vc=<?=$arr[to][invoice]?>&num=<?=$i?>"></iframe>');
 
 

});




 
 </script>
 
 
 
 
 

<table width="100%" border="0" cellspacing="2" cellpadding="2" style="margin-left:-15px;">
  <tbody>
    <tr>
      <td width="50%"><a  id="button_map_<?=$_GET[type] ?>_<?=$_GET[bookid]?>" class="btn btn-app" style="padding:5px; height:35px; width:100%;font-size:16px;border-radius: 15px;background-color:#FFFFFF; text-align:left " ><i   style=" font-size: 20px; color: #666666" class="icon-new-uniF139-7" ></i> 
         ดูตำแหน่ง 
              </a>   </td>
      <td width="50%"><a  id="button_photo_<?=$_GET[type] ?>_<?=$_GET[bookid]?>" class="btn btn-app" style="padding:5px; height:35px; width:100%;font-size:16px;border-radius: 15px; background-color:#FFFFFF; text-align:left " ><i   style=" font-size: 20px; color: #666666" class="icon-new-uniF134-7" ></i> 
          ดูภาพถ่าย 
<span class="badge bg-red" style="border-radius: 25px;padding:5px; height:25px; width:25px; padding-top:5px; font-size:14px;border:1px solid #FFFFFF; " ><b><?=$i?></b></span> </a>   </td>
    </tr>
  </tbody>
</table>


   <style>
   .div-all-lost{
	 padding:5px;   border-radius: 25px; border: 1px solid #ddd;background-color:#FFFFFF;     margin-bottom: 5px; box-shadow: 0px  0px 5px #DADADA  ; margin-top:-5px;
	 
 }
 
 
 </style>


<? if($_GET[type] == 'driver_checkcar'){ 



///echo $arr[to][driver_checklost];















?>

<table width="100%" border="0" cellspacing="2" cellpadding="2" class="div-all-lost">
  <tbody>
    <tr>
      <td>     
      
      <? if($arr[to][driver_checklost]==0){ ?>
      
      
      <i class="fa fa fa-check-circle" style="font-size: 24px; color:#17B3B2"></i><span style="font-size: 18px; "><b> ไม่มีสัมภาระตกค้างภายในรถ
 
      <? } ?>
      
      
      
      
      
         <? if($arr[to][driver_checklost]==1){ ?>
      
      <i class="fa  fa-plus-circle" style="font-size: 24px;color:#FF0000"></i>
      <span style="font-size: 18px; color:#FF0000"> มีสัมภาระตกค้างภายในรถ</span>
      <div style="margin-left:20px; padding:5px;"><?=$arr[to][driver_checklost_detail]?>
      </div>
      
      
 
      <? } ?>   
      
      
      
      
      </td>
    </tr>
  </tbody>
</table>



<? } ?>



 <? if($_GET[type] == 'driver_pickup' and $arr[to][driver_pickup]>0){ 

 




?>

<table width="100%" border="0" cellspacing="2" cellpadding="2" class="div-all-lost">
  <tbody>
    <tr>
      <td>     
      
      <? if($arr[to][driver_pickup]==1){ ?>
      
      
      <i class="fa fa fa-check-circle" style="font-size: 24px; color:#17B3B2"></i><span style="font-size: 18px; color:#333333"><b> เช็คชื่อแขกถูกต้อง
 
      <? } ?>
      
      
      
      
      
         <? if($arr[to][driver_pickup]==2){ 
		 
  $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res[remark] = $db->select_query("SELECT driver_remark FROM  web_order  WHERE id='".$arr[to][vc_id]."' ");
$arr[remark] = $db->fetch($res[remark]);		 

 
		 
		 
  $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res[remark_noguest] = $db->select_query("SELECT * FROM web_driver_remark WHERE id='".$arr[remark][driver_remark]."' ");
$arr[remark_noguest] = $db->fetch($res[remark_noguest]);
		 
		 ?>
      
 
      <i class="icon-new-uniF158-4" style="font-size: 24px;color:#FF0000"></i>
      <span style="font-size:  18px; color:#333333"><b> คนขับรถไม่เจอแขก</b></span>
      <div style="margin-left:0px; padding:5px;font-size:  16px;"><b>สาเหตุ :</b>  <?=$arr[remark_noguest][topic_th]?>
      </div>
      
 
      <? } ?>   
      
      
      
      
      </td>
    </tr>
  </tbody>
</table>



<? } ?>

  





  