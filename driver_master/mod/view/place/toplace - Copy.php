





<div style="background-color:#F6F6F6; margin-top:5px; margin-bottom:5px; padding: 2px 0px 2px 0px;border-radius: 10px;"   >
                                   <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                     <tr>
                                       <td valign="top"><div class="topictransfer1" style=" margin-top:-2px;" ><i class="fa  fa-map-marker" style="color:#c1c1c1"></i> <span class="font_16">สถานที่ส่ง</span></div></td>
                                       <td width="50" valign="middle"><b>นำทาง</td>
                                       <td width="40" ><div >
                                       
                                                                             
<? if( $arr[tomap][map] == '' and $arr[tomap][lat] == ''  ){   ?>
<a data-toggle="tooltip" title="ไม่มีแผนที่นำทาง"> <i class="icon-new-uniF_ultimate124" style=" font-size:28px; color:#999999"  ></i></a>
<? } 
 
?>
                                       
                                       
                                       
   <? if( $arr[tomap][map] != ''  and $arr[tomap][lat] <= 0){   ?>


<a class="test" data-toggle="tooltip" title="แสดงแผนที่นำทาง" href="<?=$arr[tomap][map];?>" target="_blank"> <i class="icon-new-uniF13A-7" style=" font-size:28px; color:#3C8DBC"  ></i>
 </a>
 <? } ?>
 
 
    <? if( $arr[tomap][map] != ''  and $arr[tomap][lat] > 0){   ?> 

 
<a class="test" data-toggle="tooltip" title="แสดงแผนที่นำทาง" href="https://maps.google.com/?q=@<?=$arr[tomap][lat];?>,<?=$arr[tomap][lng];?>" target="_blank"> <i class="icon-new-uniF13A-7" style=" font-size:28px; color:#3C8DBC"  ></i>
 </a>
 <? } ?>
                                           

                                           
                                           
                                           
                                       </div></td>
                                       <td width="40" style="padding-right:10px; "><div  >
                                           <?
 $res[to] = $db->select_query("SELECT id,phone FROM ".TB_transferplace." where id=".$arr[project][to_place]."  ");
 $arr[to] = $db->fetch($res[to]);
		   
	  ?>
                                           <? if($arr[to][phone]<>""){ 

$string_to_replace     = array ("-" ,"," , " ");
$string_after_replace  = array ("" ,"" , "" ,);
$arr[to][phone]      = str_replace($string_to_replace , $string_after_replace , $arr[to][phone] , $count);   

}
?>
                                           <? if($arr[to][phone]<>""){  ?>
                                           <a href="tel:<?=$arr[to][phone]?>"  target="_blank" class="test"  data-toggle="tooltip" title="โทรออก"  ><i class="icon-new-uniF152-4" style=" font-size:24px; color:#3C8DBC"  ></i></a>
                                           <? } ?>
                                           <? if($arr[to][phone]==""){  ?>
 <a data-toggle="tooltip" title="ไม่มีเบอร์ติดต่อ" ><i class="icon-new-uniF152-4" style=" font-size:24px; color:#999999"  ></i> </a>
                                           <? } ?>
                                       </div></td>
                                     </tr>
                                   </table>
                               </div>