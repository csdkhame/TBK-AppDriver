<div style="background-color:#FFF; margin-top:5px; margin-bottom:5px; padding: 2px 0px 2px 0px;border-radius: 20px;"   >
                                   <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                     <tr>
                                       <td width="50%" >
                                         
                                         
              <div class="div-all-check-place">                           
                                         
                                         
  <? if( $arr[tomap][map] == '' and $arr[tomap][lat] == ''  ){   ?>
  <a data-toggle="tooltip" title="ไม่มีแผนที่นำทาง"> <img src="images/icon/map/no/map.png"   align="bottom"  width="30"    /> <b> &nbsp;ไม่มีแผนที่</a>
  <? }  else { 
	
	
  include "mod/load/today/sub/place/popup/map_to.php";
 
 ?>
                      
   <a id="icon_timeline_show_map_to_<? echo $arr[project][id];?>" >
                      
                                         <img src="images/icon/map/map.png"   align="bottom"  width="30"     /><b>&nbsp;แผนที่นำทาง </a>
                                         
                                         <script>
 
$("#icon_timeline_show_map_to_<? echo $arr[project][id];?>").click(function(){   

 
 
  $("#alert_timeline_show_map_to_<? echo $arr[project][id];?>" ).toggle();
 
  
 	});
 
 
 
					
 </script> 
                                         
                                         
  <script>
 $("#close_alert_timeline_show_map_to_<? echo $arr[project][id];?>").click(function(){   
 
 $( "#alert_timeline_show_map_to_<? echo $arr[project][id];?>" ).hide();
 
  });

</script>
                                         
                                         
                                         
                                         
                                         
                                         <?
	
	
}
 
 
 
 
 
 
 
?>
                                         
                                         
                                         
                                         
                                         
                                         
                      </div>                   
                                         
                                         
                                         
                                         
                                       </td>
                                       <td width="50%" style="padding-left:10px; ">
									   
									   
							 <div class="div-all-check-place"> 		   
									   
									   
									   
									   
									   
									   
									   
									   
									   <? if($arr[to][phone]<>""){ 

$string_to_replace     = array ("-" ,"," , " ");
$string_after_replace  = array ("" ,"&nbsp;&nbsp;&nbsp;" , "" ,);
$arr[to][phone]       = str_replace($string_to_replace , $string_after_replace , $arr[to][phone] , $count);   
}
?>
                                           <? if($arr[to][phone]<>""){  ?>
                                           <a  href="tel:<?=$arr[to][phone]?>"  target="_blank" class="test" data-toggle="tooltip" title="โทรออก"> <img src="images/icon/map/phone.png"   align="bottom"  width="30"    /> <b> โทรศัพท์   </a>
                                           <? } ?>
                                           <? if($arr[to][phone]==""){  ?>
                                           <a data-toggle="tooltip" title="ไม่มีเบอร์ติดต่อ"><img src="images/icon/map/no/phone.png"   align="bottom"  width="30"    /></a>
                                           <? } ?>
                                           
                                           
                                      </div>     
                                           
                                           
                                       </td>
                                     </tr>
                                   </table>
                               </div>
                               
      