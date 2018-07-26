<div style="background-color:#F6F6F6; margin-top:5px; margin-bottom:5px; padding: 2px 0px 2px 0px;border-radius: 10px;"   >
                                   <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                     <tr>
                                       <td valign="top"><div class="topictransfer1" style=" margin-top: -2px; margin-left:" ><i class="fa  fa-map-marker" style="color:#c1c1c1"></i> <span class="font_16">สถานที่รับ</span></div></td>
                                       <td width="50" valign="middle" style="display:none"><b>นำทาง</td>
                                       <td width="40">
 				   
                                       
<? if( $arr[pickupmap][map] == '' and $arr[pickupmap][lat] == ''  ){   ?>
<a data-toggle="tooltip" title="ไม่มีแผนที่นำทาง"> <img src="images/icon/view/no/map.png"   align="bottom"  width="35"    />     </a>
<? } 
 
 
 
 
 
?>
                                       
                                  
                                       
   <? if( $arr[pickupmap][map] != ''  and $arr[pickupmap][lat] <= 0){   ?> 


<a class="test" data-toggle="tooltip" title="แสดงแผนที่นำทาง" href="<?=$arr[pickupmap][map];?>" target="_blank"> <img src="images/icon/view/map.png"   align="bottom"  width="35"     />     
 </a>
 <? } ?>
 
 
    <? if( $arr[pickupmap][map] != ''  and $arr[pickupmap][lat] > 0){   ?> 

 
 
 
<a class="test" data-toggle="tooltip" title="แสดงแผนที่นำทาง" href="https://www.google.co.th/maps/dir/<?=$_GET[lat]?>,<?=$_GET[lng]?>/<? echo $arr[project][name_pickup_place] ?>+<? echo $arr[project][name_pickup_place_area] ?>+<? echo $arr[project][name_pickup_place_province] ?>/@<?=$arr[pickupmap][lat];?>,<?=$arr[pickupmap][lng];?>,17z" target="_blank"> <img src="images/icon/view/map.png"   align="bottom"  width="35"     />    
 </a>
 
 
 <? } ?>
                                           

                                           
 
                                           
                                       </td>
                                       <td width="40" style="padding-right:10px; "><? if($arr[pickup][phone]<>""){ 

$string_to_replace     = array ("-" ,"," , " ");
$string_after_replace  = array ("" ,"&nbsp;&nbsp;&nbsp;" , "" ,);
$arr[pickup][phone]       = str_replace($string_to_replace , $string_after_replace , $arr[pickup][phone] , $count);   
}
?>
                                           <? if($arr[pickup][phone]<>""){  ?>
                                           <a  href="tel:<?=$arr[pickup][phone]?>"  target="_blank" class="test" data-toggle="tooltip" title="โทรออก"> <img src="images/icon/view/phone.png"   align="bottom"  width="35"    />     </a>
                                           <? } ?>
                                           <? if($arr[pickup][phone]==""){  ?>
                                           <a data-toggle="tooltip" title="ไม่มีเบอร์ติดต่อ"><img src="images/icon/view/no/phone.png"   align="bottom"  width="35"    /></a>
                                           <? } ?>
                                       </td>
                                     </tr>
                                   </table>
                               </div>
                               
                               
                          
 
                               
                               
                               
                               
                   