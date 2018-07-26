 <? $google_api="AIzaSyDJa08ZMaSnJP5A6EsL9wxqdDderh7zU90";?>

<?
 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$res[to] = $db->select_query("SELECT * FROM ".TB_transfer_report_all."  where id='".$_GET[bookid]."' limit 1");
 $arr[to] = $db->fetch($res[to]);
  
?>
 
<? if($arr[to][driver_topoint] != 0 && $arr[to][driver_topoint] != '' or 1==1){ ?>
 <?
//echo $_GET[type];
 
if($_GET[type] == 'driver_topoint'){

 

	$type_point = "ถึงสถานที่รับแขก";
	$data_point = "topoint";
	
	$ptoto_type = "topoint";
 

	
}





if($_GET[type] == 'driver_checkcar'){

 

	$type_point = "ตรวจเช็คสัมภาระภายในรถ";
	$data_point = "checkcar";
	
	$ptoto_type = "checkcar";
 

	
}


if($_GET[type] == 'driver_pickup'){
	$data_point = "pickup";
	
	
	
	
	
	
	
	if($_GET[data_val] == 1){
		$type_point = "รับแขกขึ้นรถ";
		
		$ptoto_type = "yes";
		
	}else{
		$type_point = "ไม่เจอแขก";
		
		$ptoto_type = "no";
		
	}
}
if($_GET[type] == 'driver_complete'){
	$data_point = "complete";
	$type_point = "งานสำเร็จ";
	
	$ptoto_type = "finishpoint";
	
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
 
 
 
 
 

<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-left: 0px; "  >
  <tr>
    <td><div id="button_map_s<?=$_GET[type] ?>_<?=$_GET[bookid]?>"  style="cursor:pointer;margin-left: 6px; "    >
        <a>
        
        <table   width="100%">
      <tr>
        <td width="20" valign="top"><i   style=" font-size: 22px; color: #666666" class="fa fa-clock-o" ></i> </td>
        <td><div align="left" id="date_topiont<?=$arr[to][id];?>" style="font-size:16px; ">
     <? 
			$arr[to][driver_.$data_point._date] = $arr[to][driver_.$data_point._date]  ;
						?>
    
            <b>วันที่ </b> <?=$time_open_h= date('Y-m-d',$arr[to][driver_.$data_point._date]);?>&nbsp;                    <b>เวลา</b> <?=$time_open_h= date('H:i:s',$arr[to][driver_.$data_point._date]);?>
                        
        </div></td>
      </tr>
    </table></a>
 </div></td>
    <td width="30" style="display:none"><i class="fa  fa-camera" style="color:#999999; font-size:22px"></i></td>
  </tr>
</table>

    <?	
}
?>


 
 <? //=$_GET[type]?>
 
 <script>
 
   	var url_<?=$_GET[bookid];?> = "load_small.php?name=load/show/map&file=data&sv=<?=$_GET[sv];?>&bookid=<?=$_GET[bookid];?>&type=driver_<?=$data_point?>&data_val=<?=$_GET[data_val];?>";
 
$('#data_<?=$data_point?>_<?=$_GET[bookid];?>').load(url_<?=$_GET[bookid];?>);
 
 
 
 </script>