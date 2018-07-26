 <style>
body {
    margin : 0;
}

.outer-container {
    position: fixed; margin-left: 0px; margin-top: 0px; display:table; top:0; left:0;  
    width: 100%; /* This could be ANY width */
    height: 100%; /* This could be ANY height */
   z-index:999999999999  ;  
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
  
  

 
 
 
<div id="alert_show_map_pickup_<? echo $arr[project][id];?>" style="display:none;z-index:99999">
<div class="outer-container" >
   <div class="inner-container">  <img src="images/close-popup.png" width="50" height="50" alt="" style="margin-top:-45px; position:absolute; margin-left:240px; margin-top:-10px; cursor:pointer" id="close_alert_show_map_pickup_<? echo $arr[project][id];?>"/>
     <div class="centered-content">

     
             <?
		//	 $arr[pickupmap][lat] =0;
			 
			 ?>
             
      
 
 
<table width="100%" border="0" cellspacing="3" cellpadding="3">
  <tbody>
  
  <?
 $filename_pickup ="../data/pic/map/".$arr[project][pickup_place].".jpg";


$map_pickup = file_exists($filename_pickup) ;
  ///  echo "The file $filename exists";
  if($map_pickup==1){
    
?>
 
 
  
    <tr>
      <td colspan="2"><img src="../data/pic/map/<?=$arr[project][pickup_place];?>.jpg?v=<?=time()?>"   align="bottom"  width="100%"   class="place-pic-content" /></td>
      </tr>
    
  
  
  <?  } ?>
  
  
  
  
  
  
  
  
<? if( $arr[pickupmap][map] != ''  or  $arr[pickupmap][lat]  > 0){   ?> 
  
    <tr>
      <td width="30"> <img src="images/icon_map/map.png"   align="bottom"  width="30"   /></td>
      <td>
      
  <? if( $arr[pickupmap][lat] > 0){   ?> 
 
<a class="test" data-toggle="tooltip" title="แสดงแผนที่นำทาง" href="https://maps.google.com/?q=<?=$arr[pickupmap][lat];?>,<?=$arr[pickupmap][lng];?>" target="_blank"  style="color:#333333; font-size:22px;" >  ดูตำแหน่งสถานที่รับ
 </a>
 <? } else { ?> 
      
      <a class="test" data-toggle="tooltip" title="แสดงแผนที่นำทาง" href="<?=$arr[pickupmap][map];?>" target="_blank"  style="color:#333333; font-size:22px;" >  ดูตำแหน่งสถานที่รับ
 </a>
      
   <? } ?>   
      
</td>
    </tr>
    
 <? } ?>  
   
    
    
   
   
   
   
   
     
<? if($arr[pickupmap][lat]  > 0){   ?> 
  
    <tr>
      <td width="30"> <img src="images/icon_map/navigator.png"   align="bottom"  width="30"   /></td>
      <td>
<a class="test" data-toggle="tooltip" title="แสดงแผนที่นำทาง" href="https://www.google.co.th/maps/dir/<?=$_GET[lat]?>,<?=$_GET[lng]?>/<? echo $arr[project][name_pickup_place] ?>+<? echo $arr[project][name_pickup_place_area] ?>+<? echo $arr[project][name_pickup_place_province] ?>/@<?=$arr[pickupmap][lat];?>,<?=$arr[pickupmap][lng];?>,17z" target="_blank" style="color:#333333; font-size:22px;"> นำทางไปสถานที่รับ</td>
      
 
    </tr>
    
 <? } ?>  
   
    
    
    
    
    
    
    
    
    

    
    
  </tbody>
</table>

      

 
     </div>
   </div>
</div>
 
 </div>
 