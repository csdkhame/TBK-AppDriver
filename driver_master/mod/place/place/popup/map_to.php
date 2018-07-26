 <style>
body {
    margin : 0;
}

.outer-container {
    position: fixed; margin-left: 0px; margin-top: 0px; display:table; top:0; left:0;  
    width: 100%; /* This could be ANY width */
    height: 100%; /* This could be ANY height */
   z-index:99999  ;  
	background: url('images/bg-popup.png');  
}

.inner-container {
    display: table-cell;
    vertical-align: middle;
    text-align: center;
}

.centered-content {
    display: inline-block;
    text-align: left; width:280px;
   
 
    border : 5px solid #3C8DBC;  
	z-index:9 ; background-color:#F6F6F6;   -moz-border-radius:10px;
  -webkit-border-radius:3px;

  height:auto ; padding:10px;  border-radius:25px;
}



.place-pic-content {
 
   
 
    border : 5px solid #dadada;  
	z-index:9 ; background-color:#F6F6F6;   -moz-border-radius:15px;
  -webkit-border-radius:3px;
  
 border-radius:15px;

 
}

</style>
  
  

 
 
 
<div id="alert_timeline_show_map_to_<? echo $arr[project][id];?>_<?=$_GET[set]?>" style="display:none;z-index:99999">
<div class="outer-container" >
   <div class="inner-container">  <img src="images/close-popup.png" width="50" height="50" alt="" style="margin-top:-45px; position:absolute; margin-left:240px; margin-top:-10px; cursor:pointer" id="close_alert_timeline_show_map_to_<? echo $arr[project][id];?>_<?=$_GET[set]?>"/>
     <div class="centered-content">

     
             <?
		//	 $arr[tomap][lat] =0;
			 
			 ?>
             
      
             
<table width="100%" border="0" cellspacing="3" cellpadding="3">
  <tbody>
  
  
  
  
  <?
 $filename_to ="../data/pic/map/".$arr[project][to_place].".jpg";


$map_to = file_exists($filename_to) ;
  ///  echo "The file $filename exists";
  if($map_to==1){
    
?>
 
   
  
    <tr>
      <td colspan="2"><img src="../data/pic/map/<?=$arr[project][to_place];?>.jpg?v=<?=time()?>"   align="bottom"  width="100%"   class="place-pic-content" /></td>
      </tr>
    
  
  
  <?  } ?>
  
  
  
  
  
  
 
    
  
  
  
  
  
  
  
  
  
<? if( $arr[tomap][map] != ''  or  $arr[tomap][lat]  > 0){   ?> 
  
    <tr>
      <td width="30"> <img src="images/icon_map/map.png"   align="bottom"  width="30"   /></td>
      <td>
      
  <? if( $arr[tomap][lat] > 0){   ?> 
 
<a class="test" data-toggle="tooltip" title="แสดงแผนที่นำทาง" href="https://maps.google.com/?q=<?=$arr[tomap][lat];?>,<?=$arr[tomap][lng];?>" target="_blank"  style="color:#333333; font-size:22px;" >  ดูตำแหน่งสถานที่ส่ง
 </a>
 <? } else { ?> 
      
      <a class="test" data-toggle="tooltip" title="แสดงแผนที่นำทาง" href="<?=$arr[tomap][map];?>" target="_blank"  style="color:#333333; font-size:22px;" >  ดูตำแหน่งสถานที่ส่ง
 </a>
      
   <? } ?>   
      
</td>
    </tr>
    
 <? } ?>  
   
    
    
   
   
   
   
   
     
<? if($arr[tomap][lat]  > 0){   ?> 
  
    <tr>
      <td width="30"> <img src="images/icon_map/navigator.png"   align="bottom"  width="30"   /></td>
      <td>
<a class="test" data-toggle="tooltip" title="แสดงแผนที่นำทาง" href="https://www.google.co.th/maps/dir/<?=$_GET[lat]?>,<?=$_GET[lng]?>/<? echo $arr[project][name_to_place] ?>+<? echo $arr[project][name_to_place_area] ?>+<? echo $arr[project][name_to_place_province] ?>/@<?=$arr[tomap][lat];?>,<?=$arr[tomap][lng];?>,17z" target="_blank" style="color:#333333; font-size:22px;"> นำทางไปสถานที่ส่ง</td>
      
 
    </tr>
    
 <? } ?>  
   
    
    
    
    
    
    
    
        
        <tr>
      <td width="30"> <img src="images/icon_map/car.png"   align="bottom"  width="30"   /></td>
      <td>
<a id="edit_<?=$arr[project][to_place];?>_<?=$_GET[set]?>" class="test" data-toggle="tooltip" title="แสดงแผนที่นำทาง"   style="color:#FF0000; font-size:22px;"> แจ้งแก้ไขตำแหน่ง</a></td>
      
 
    </tr>
    
    

    
    
  </tbody>
</table>

      
<script> 


 $("#edit_<?=$arr[project][to_place];?>_<?=$_GET[set]?>").click(function(){
 
 
 $("#popup_work_preview_map_driver_edit" ).toggle();
 
  $("#head_full_popup_map_driver_edit").html('แจ้งแก้ไขตำแหน่ง');
 
 $("#load_work_preview_map_driver_edit_address_name").html('<?=$arr[project][name_to_place]?>');
 
 
  var url = "https://maps.googleapis.com/maps/api/geocode/json?latlng=<?=$arr[tomap][lat];?>,<?=$arr[tomap][lng];?>&sensor=false&language=th";
$.getJSON(url, function (data) {
    for(var i=0;i<1;i++) {
        var adress = data.results[i].formatted_address;
		
 
	  $( "#load_work_preview_map_driver_edit_address" ).html(adress);
	  
 
	  
    }
});
 
 
 

 
  $('#load_work_preview_map_driver_edit').html();
 
 $('#load_work_preview_map_driver_edit').load('go.php?name=load/today/sub/place&file=map_edit&lat=<?=$arr[tomap][lat];?>&lng=<?=$arr[tomap][lng];?>&place=<?=$arr[project][to_place];?>&type=from');
 
 
  
  });
  
 
  
</script> 
 
     </div>
   </div>
</div>
 
 </div>
 