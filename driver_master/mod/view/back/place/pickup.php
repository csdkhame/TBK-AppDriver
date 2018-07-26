<div style="background-color:#FFF; margin-top:5px; margin-bottom:5px; padding: 2px 0px 2px 0px;border-radius: 20px;"   >
                                   <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                     <tr>
                                       <td width="50%" >
                                         
                                         
              <div class="div-all-check-place">                           
                                         
                                         
  <? if( $arr[pickupmap][map] == '' and $arr[pickupmap][lat] == ''  ){   ?>
  <a data-toggle="tooltip" title="ไม่มีแผนที่นำทาง"> <img src="images/icon/map/no/map.png"   align="bottom"  width="30"    /><b>  &nbsp;ไม่มีแผนที่</a>
  <? }  else { 
	
	
  include "mod/view/place/popup/map_pickup.php";
  
  
  
 
 ?>
                      
   <a id="icon_show_map_pickup_<? echo $arr[project][id];?>" >
                      
                                         <img src="images/icon/map/map.png"   align="bottom"  width="30"     /><b>&nbsp;แผนที่นำทาง </a>
                                         
                                         <script>
 
$("#icon_show_map_pickup_<? echo $arr[project][id];?>").click(function(){   

 
 
  $("#alert_show_map_pickup_<? echo $arr[project][id];?>" ).toggle();
 
  
 	});
 
 
 
					
 </script> 
                                         
                                         
  <script>
 $("#close_alert_show_map_pickup_<? echo $arr[project][id];?>").click(function(){   
 
 $( "#alert_show_map_pickup_<? echo $arr[project][id];?>" ).hide();
 
  });

</script>
                                         
                                         
                                         
                                         
                                         
                                         <?
	
	
}
 
 
 
 
 
 
 
?>
                                         
                                         
                                         
                                         
                                         
                                         
                      </div>                   
                                         
                                         
                                         
                                         
                                       </td>
                                       <td width="50%" style="padding-left:10px; ">
									   
									   
							 <div class="div-all-check-place"> 		   
									   
									   
									   
									   
									   
									   
									   
									   
									   <? if($arr[pickup][phone]<>""){ 

$string_to_replace     = array ("-" ,"," , " ");
$string_after_replace  = array ("" ,"&nbsp;&nbsp;&nbsp;" , "" ,);
$arr[pickup][phone]       = str_replace($string_to_replace , $string_after_replace , $arr[pickup][phone] , $count);   
}
?>
                                           <? if($arr[pickup][phone]<>""){  ?>
                                           <a  href="tel:<?=$arr[pickup][phone]?>"  target="_blank" class="test" data-toggle="tooltip" title="โทรออก"> <img src="images/icon/map/phone.png"   align="bottom"  width="30"    /> <b> โทรศัพท์   </a>
                                           <? } ?>
                                           <? if($arr[pickup][phone]==""){  ?>
                                           <a data-toggle="tooltip" title="ไม่มีเบอร์ติดต่อ"><img src="images/icon/map/no/phone.png"   align="bottom"  width="30"    /></a>
                                           <? } ?>
                                           
                                           
                                      </div>     
                                           
                                           
                                       </td>
                                     </tr>
                                   </table>
                               </div>
                               
      