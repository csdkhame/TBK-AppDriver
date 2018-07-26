<table width="100%"  border="0" cellspacing="1" cellpadding="1" class="td-icon-check-car" style="display:none" >
   <tr align="center" valign="top"   >
     <td width="50%" class="tool-td-chat"><center>
       <button type="button" class="btn btn-default tool-icon-check-car"  id="chat_icon_guest_wait" style=" height:80px; padding:5px;box-shadow: 0px 0px 0px #DADADA;">
         <div style="margin-top:  5px;  "><i class="icon-new-uniF10E-5" style=" font-size:36px; " ></i>
           <div style="font-size:16px; margin-top:5px; color:#333333"><B>ตรงเวลา</div>
         </div>
        </button>
       <br />
     </center></td>
     <td width="50%" class="tool-td-chat"><center>
       <button type="button" class="btn btn-default tool-icon-check-car"  id="chat_icon_guest_wait" style=" height:80px; padding:5px;box-shadow: 0px 0px 0px #DADADA;"> <div style="margin-top:  5px;  "><i class="icon-new-uniF13C" style=" font-size:36px; " ></i>  
         <div style="font-size:16px; margin-top:5px; color:#333333"><B>ถึงล่าช้า
           
         </div></div></button>
       <br />
       
     </center></td>
   </tr>
 </table>
 
 
 
 </style>
 
<style>

.td-icon-check-car {
 padding:0px; width:100%;border-radius: 15px;  background-color:#FFFFFF; font-size:32px; color: #367FA9;border:1px solid #DADADA;
 }


.tool-icon-check-car {
 padding:5px; width:100%;border-radius: 15px; height:60px; background-color:#FFFFFF; font-size:32px; color: #367FA9;border:2px solid #367FA9;
 }
 
 
 
 .tool-icon-check-car:hover{  
 padding:5px; width:100%;border-radius: 15px; height:60px; border:2px solid #FF0000;background-color:#FFFFFF; box-shadow: 0px 0px 10px #999999; color:#FF0000;
 }
 
 

</style>
 
 
 <? //  include ("load/loading/page_mod.php");?> 

<style>
 
.outer-loading-mod {
    position: fixed; margin-left: 0px; margin-top: 0px; display:table; top:0; left:0;  
    width: 100%; /* This could be ANY width */
    height: 100%; /* This could be ANY height */
   z-index:9999; background-color: rgba(255, 255, 255, 0.9) !important;
 
}

.inner-loading {
    display: table-cell;
    vertical-align: middle;
    text-align: center;
	    width: 100%; /* This could be ANY width */
    height: 100%; /* This could be ANY height */
	background:none;    
}

 .navload {
  display: block;
  background-color: #f7f7f7;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#f7f7f7), to(#e7e7e7));
  background-image: -webkit-linear-gradient(top, #f7f7f7, #e7e7e7); 
  background-image: -moz-linear-gradient(top, #f7f7f7, #e7e7e7); 
  background-image: -ms-linear-gradient(top, #f7f7f7, #e7e7e7); 
  background-image: -o-linear-gradient(top, #f7f7f7, #e7e7e7); 
color: #3C8DBC;
 
  width:  60px;
  height: 60px;
 
  text-align: center;
 
  border-radius: 50%;
  box-shadow: 0px 3px 8px #aaa, inset 0px 2px 3px #fff;
}


</style>


  <style>
   .div-all-checkin-step{
	 padding:5px;   border-radius: 25px; border: 2px solid #ddd;background-color:#FFFFFF;     margin-bottom: 5px; box-shadow: 0px  0px 10px #DADADA  ;
	 
 }
 
 
 </style>

<script>
 var load_main_mod='<div class="outer-loading-mod"   id="main_index_load_page_mod"><div class="inner-loading"><center><span  class="navload"><i class="fa fa-circle-o-notch fa-spin 4x" style="font-size:40px;   margin-top:10px " ></i></center></span><div style="font-size:14px; color:#333333; font-weight:normal;  margin-top:10px " ><center><span id="navload_topic"> โหลดข้อมูล</span></center></div></div></div>';
</script>


<script>
 var load_main_mod_table='<br><center><span  class="navload"><i class="fa fa-circle-o-notch fa-spin 4x" style="font-size:40px;   margin-top:10px " ></i></center></span><div style="font-size:14px; color:#333333; font-weight:normal;  margin-top:10px " ><center><span id="navload_topic"> โหลดข้อมูล</span></center></div';
</script>
 


  

<table width="100%" cellpadding="3" style="margin-top:10px;">
  <tr>
    <td width="100%" valign="top">
    
   
    
    
    
    
    <div id="tab_to_<?=$arr[project][id];?>"   class="div-all-checkin-step">
        <table width="100%"  border="0" cellspacing="2" cellpadding="2" style="border-bottom: solid 0px #999999;  " >
          <tr>
            <td width="45" ><div class="checkinstep" id="checkstep_1_<?=$arr[project][id];?>">
                <center>
                  <b>1</b>
                </center>
              </div>
                <div  style="position:absolute; margin-top:-30px; margin-left: -10px;"><img src="images/no.png"  align="absmiddle"  id="iconchk_s1_<?=$arr[project][id];?>"   /></div></td>
            <td valign="middle"> 
            <?
 include("mod/load/show/step/to.php");
 ?>               </td>
          </tr>
        </table>
        
     <div id="mapto_<?=$arr[project][id];?>" ></div>   
        
        <div id="data_topoint_<?=$arr[project][id];?>" ></div>
    </div>
    
 
 
 
    
    </td>
  </tr>
  <tr>
    <td colspan="2" valign="top" id="sub_see_guest<?=$arr[project][id];?>" style="display: none<? if($arr[project][driver_topoint] > 0){ echo "1"; } ?>"><div id="tab_pickup_<?=$arr[project][id];?>"  class="div-all-checkin-step">
        <? if($arr[project][driver_pickup] == 0 and $arr[project][driver_topoint] ==1){ ?>
        <script>
	  $('#tab_pickup_<?=$arr[project][id];?>').addClass("tab_alert");
	  </script>
        <? } ?>
        <table width="100%"  border="0" cellspacing="2" cellpadding="2" style="border-bottom: solid  0px #999999; margin-bottom:0px; ">
          <tr>
            <td width="45"  ><div class="checkinstep" id="checkstep_2_<?=$arr[project][id];?>">
                <center>
                  <b>2</b>
                </center>
              </div>
                <div  style="position:absolute; margin-top:-30px; margin-left: -10px;"><img src="images/no.png"  align="absmiddle" id="iconchk_s2_<?=$arr[project][id];?>"    /></div></td>
            <td valign="middle">
              <?
 include("mod/load/show/step/pickup.php");
 ?>
              
  <? if($arr[project][driver_pickup] != 0 && $arr[project][driver_pickup] != ''){ ?>
 <? if($arr[project][driver_pickup] == 2){ $txt_pick_g = "ไม่เจอแขก"; }else{ $txt_pick_g = "เช็คชื่อแขก";   }?>
 <script type="text/javascript">
 $('#iconchk_s2_<?=$arr[project][id];?>').attr("src", "images/yes.png");
$('#checkstep_2_<?=$arr[project][id];?>').addClass("checkinstep_active");
 $('#tab_pickup_<?=$arr[project][id];?>').removeClass("tab_alert");
 
 $(document).ready(function(){

  
   $('#show_price<?=$arr[project][id];?>').show();
  });
  </script>
            <?	
		}
		?></td>
          </tr>
        </table>
        
   <div id="mappickup_<?=$arr[project][id];?>"></div>
        
        <div id="data_pickup_<?=$arr[project][id];?>" ></div>
    </div> 
    
    
    
    
    </td>
  </tr>
  <tr id="sub_complete<?=$arr[project][id];?>"  style="display: none<? if($arr[project][driver_pickup] > 0 ){ ?> 1  <? } ?>">
    <td colspan="2"><div id="tab_complete_<?=$arr[project][id];?>" class="div-all-checkin-step">
	<? if($arr[project][driver_pickup] == 1 or $arr[project][driver_pickup] ==0  ){ ?> 
				<script>
 $(document).ready(function(){
		$('#text_1_complete_<?=$arr[project][id];?>').show();
		$('#text_2_complete_<?=$arr[project][id];?>').hide();
		  });
		 </script>
		<? } ?>
		
			<? if($arr[project][driver_pickup] == 2){ ?> 
				<script>
 $(document).ready(function(){
		$('#text_1_complete_<?=$arr[project][id];?>').hide();
		$('#text_2_complete_<?=$arr[project][id];?>').show();
		  });
		 </script>
		<? } ?>
	
 
	
        <table width="100%"  border="0" cellspacing="2" cellpadding="2" style="border-bottom: solid 0px #999999; margin-bottom:0px; ">
          <tr>
            <td width="45" ><div class="checkinstep" id="checkstep_3_<?=$arr[project][id];?>">
                <center>
                  <b>3</b>
                </center>
              </div>
  <div  style="position:absolute; margin-top:-30px; margin-left: -10px;"><img src="images/no.png"  align="absmiddle" id="iconchk_s3_<?=$arr[project][id];?>"></div></td>
            <td valign="middle">
              
  <?
 include("mod/load/show/step/complete.php");
 ?>
              
              <? if($arr[project][driver_complete] != 0 && $arr[project][driver_complete] != ''){ ?>
              <script>
$('#iconchk_s3_<?=$arr[project][id];?>').attr("src", "images/yes.png");
$('#checkstep_3_<?=$arr[project][id];?>').addClass("checkinstep_active");

 $('#tab_complete_<?=$arr[project][id];?>').removeClass("tab_alert");
 
 
		 		</script>
              
              
              <? } ?>
              
            </td>
          </tr>
        </table>
        
        <div id="mapcomplete_<?=$arr[project][id];?>"></div>
        <div id="data_complete_<?=$arr[project][id];?>" ></div>
        
        
    </div>
    
  
    
    </td>
  </tr>
  
  
  
  
  
  <!----->
  
  <tr id="sub_checkcar<?=$arr[project][id];?>"  style="display: none<? if($arr[project][driver_complete] > 0 ){ ?> 1  <? } ?>">
    <td colspan="2"><div id="tab_checkcar_<?=$arr[project][id];?>"  class="div-all-checkin-step">
	<? if($arr[project][driver_complete] == 1  ){ ?> 
				<script>
 $(document).ready(function(){
// alert(0);
		$('#text_1_checkcar_<?=$arr[project][id];?>').show();
		$('#text_2_checkcar_<?=$arr[project][id];?>').hide();
		  });
		 </script>
		<? } ?>
		
			<? if($arr[project][driver_pickup] == 2){ ?> 
		<script>
 $(document).ready(function(){
		$('#text_1_checkcar_<?=$arr[project][id];?>').hide();
		$('#text_2_checkcar_<?=$arr[project][id];?>').show();
		  });
		 </script>
		<? } ?>
	
 
	
        <table width="100%"  border="0" cellspacing="2" cellpadding="2" style="border-bottom: solid 0px #999999; margin-bottom:0px; ">
          <tr>
            <td width="45" ><div class="checkinstep" id="checkstep_4_<?=$arr[project][id];?>">
                <center>
                  <b>4</b>
                </center>
              </div>
  <div  style="position:absolute; margin-top:-30px; margin-left: -10px;"><img src="images/no.png"  align="absmiddle" id="iconchk_s4_<?=$arr[project][id];?>"></div></td>
            <td valign="middle">
              
  <?
 include("mod/load/show/step/checkcar.php");
 ?>
              
              <? if($arr[project][driver_checkcar] != 0 && $arr[project][driver_checkcar] != ''){ ?>
              <script>
$('#iconchk_s4_<?=$arr[project][id];?>').attr("src", "images/yes.png");
$('#checkstep_4_<?=$arr[project][id];?>').addClass("checkinstep_active");

 $('#tab_checkcar_<?=$arr[project][id];?>').removeClass("tab_alert");
 
 
		 		</script>
              
              
              <? } ?>
              
              
            </td>
          </tr>
        </table>
        
<div id="mapcheckcar_<?=$arr[project][id];?>"></div>
        
<div id="data_checkcar_<?=$arr[project][id];?>" ></div>
        
    </div>
    
     
    
    
    
    </td>
  </tr>


<?php 

	
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$res[type] = $db->select_query("select * from income_other_list  where transfer_id = '".$arr[project][id]."' ");
$arr[type] = $db->fetch($res[type]);

$res[cat] = $db->select_query("select * from income_other_type  where id = '".$arr[type][type]."' ");
$arr[cat] = $db->fetch($res[cat]);
if($arr[project][driver_complete]==1){
	$none_tr_ic_other = "";
}else{
	$none_tr_ic_other = "display: none;";
}
?>
<tr style="<?=$none_tr_ic_other;?>" id="tr_box_income_other">
   <td colspan="2">
      <div class="div-all-checkin-step">
         <table width="100%" border="0" cellspacing="2" cellpadding="2" style="border-bottom: solid 0px #999999; margin-bottom:0px; ">
            <tbody>
               <tr>
                  <td width="45">
                     <div class="checkinstep checkinstep_active" id="checkstep_4_264228">
                        <center>
                           <b>5</b>
                        </center>
                     </div>
                     <div style="position:absolute; margin-top:-30px; margin-left: -10px;"><img src="images/yes.png" align="absmiddle" id="iconchk_s4_264228"></div>
                  </td>
                  <td valign="middle">
                     <button class="btnstatus-checkin-no" id="btn_checkcar264228" disabled="disabled">รายได้อื่นๆ</button>
                  </td>
               </tr>
            </tbody>
         </table>
         <div >
           
            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-left: 0px; ">
               <tbody>
                  <tr>
                     <td>
                        <div style="cursor:pointer;margin-left: 6px; ">
                           <a>
                              <table width="100%">
                                 <tbody>
                                    <tr>
                                       <td width="20" valign="top"><i style=" font-size: 22px; color: #666666" class="fa fa-clock-o"></i> </td>
                                       <td>
                                          <div align="left" style="font-size:16px; ">
                                             <b>วันที่ <?=date('Y:m:d',$arr[type][post_date]);?></b><b> เวลา <?=date('H:i:s',$arr[type][post_date]);?></b>                         
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="20" valign="top"><i style=" font-size: 22px; color: #666666" class="fa fa-star"></i> </td>
                                       <td>
                                          <div align="left" style="font-size:16px; ">
                                             <b>ประเภท : <?=$arr[cat][topic];?></b>                         
                                          </div>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </a>
                        </div>
                     </td>
                     <td width="30" style="display:none"><i class="fa  fa-camera" style="color:#999999; font-size:22px"></i></td>
                  </tr>
               </tbody>
            </table>
         
         </div>
         <div>

            <table width="100%" border="0" cellspacing="2" cellpadding="2" style="margin-left:-15px;">
               <tbody>
                  <tr>
                     <td width="33%" align="center"><a class="btn btn-app" style="padding: 7px 20px; height:35px; width:100%;font-size:16px;border-radius: 15px;background-color:#FFFFFF; text-align:left "> เปอร์เซ็นคนขับ : <?=$arr[cat][driver_percent];?> % </a>   
                     </td>
                     <td width="33%"  align="center"><a class="btn btn-app" style="padding: 7px 20px; height:35px; width:100%;font-size:16px;border-radius: 15px;background-color:#FFFFFF; text-align:left "> ทั้งหมด : <?=$arr[type][balance];?> บาท </a>   
                     </td>
                     <td width="33%"  align="center"><a class="btn btn-app" style="padding: 7px 20px; height:35px; width:100%;font-size:16px;border-radius: 15px;background-color:#FFFFFF; text-align:left "> รายได้ : <?=$arr[type][driver_balance];?> บาท </a>   
                     </td>
                  </tr>
               </tbody>
            </table>
            <!--ประเภท : <?=$arr[cat][topic];?>  -->
         </div>
      </div>
   </td>
</tr>

</table>

<script>
var mapload='&nbsp;<i class="fa fa-circle-o-notch fa-spin 2x" style="font-size:22px; color:#367FA9; " ></i>&nbsp;กำลังรอการดำเนินการ';	
				
 $('#mapto_<?=$arr[project][id];?>').html(mapload);
$('#mappickup_<?=$arr[project][id];?>').html(mapload);

 $('#mapcomplete_<?=$arr[project][id];?>').html(mapload);
 $('#mapcheckcar_<?=$arr[project][id];?>').html(mapload);
				
				

				
				</script>
				<? 
				
//// ถึงที่รับ
				
if($arr[project][driver_topoint] > 0){ ?> 
 
    <script >
var url_mapto<?=$arr[project][id];?> = "load_small.php?name=load/show/map&file=view&sv=<?=$_GET[sv];?>&bookid=<?=$arr[project][id];?>&type=driver_topoint&data_val=<?=$arr[project][driver_topoint];?>";





 
 setTimeout(function () {
 $('#mapto_<?=$arr[project][id];?>').load(url_mapto<?=$arr[project][id];?>);
},1000); //w


/*
 setTimeout(function () {
 $('#checkin_to_<?=$arr[project][id];?>').load(url_mapto<?=$arr[project][id];?>);
},1000); //w

*/
 
  </script>

<? } ?>


<? 
if($arr[project][driver_pickup] > 0){ ?>
    <script >
 
  
  	var url_mappickup<?=$arr[project][id];?> = "load_small.php?name=load/show/map&file=view&sv=<?=$_GET[sv];?>&bookid=<?=$arr[project][id];?>&type=driver_pickup&data_val=<?=$arr[project][driver_topoint];?>";
		
setTimeout(function () {
$('#mappickup_<?=$arr[project][id];?>').load(url_mappickup<?=$arr[project][id];?>);
},1000); //w
 
  </script>
  
  <? } ?>
  
  
  
  
  
   <? 
if($arr[project][driver_complete] > 0){ ?>
<script >
 
  	var url_mapcomplete<?=$arr[project][id];?> = "load_small.php?name=load/show/map&file=view&sv=<?=$_GET[sv];?>&bookid=<?=$arr[project][id];?>&type=driver_complete&data_val=<?=$arr[project][driver_topoint];?>";
 
setTimeout(function () {
$('#mapcomplete_<?=$arr[project][id];?>').load(url_mapcomplete<?=$arr[project][id];?>);
},1000); //w
   </script>

<? } ?>
  
  
  <? 
if($arr[project][driver_checkcar] > 0){ ?>
<script >
 
  	var url_mapcheckcar<?=$arr[project][id];?> = "load_small.php?name=load/show/map&file=view&sv=<?=$_GET[sv];?>&bookid=<?=$arr[project][id];?>&type=driver_checkcar&data_val=<?=$arr[project][driver_topoint];?>";
 
setTimeout(function () {
$('#mapcheckcar_<?=$arr[project][id];?>').load(url_mapcheckcar<?=$arr[project][id];?>);
},1000); //w
   </script>

<? } ?>

  

<div id="show_price<?=$arr[project][id];?>" style="display:none ">
 
</div>
  