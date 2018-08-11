 

			<? 

if($arr[project][driver_topoint] == 1){ $text_status = "check";$btn_status = "success  btn-block btn-md btnstatus approve"; ?>
                <script>
$('#iconchk_s1_<?=$arr[project][id];?>').attr("src", "images/yes.png");
$('#checkstep_1_<?=$arr[project][id];?>').addClass("checkinstep_active");
		 		</script>
            
                <?
}
else{$text_status = "times";$btn_status = "warning  btn-block btn-md btnstatus reject"; ?>
                <script>
$('#tab_to_<?=$arr[project][id];?>').addClass("tab_alert");
  </script>
                <?
} 
?>
 
 
 



 
 
      <button style="color: #fffbfb;" class="btnstatus-checkin<? if($arr[project][driver_topoint] > 0){ ?>-no <? } ?> "  data_id="<?=$arr[project][id];?>"  data_vc="<?=$arr[project][invoice];?>"   data_report_id="<?=$arr[project][report_id];?>" col_name="driver_topoint"  id="btn_topoint<?=$arr[project][id];?>" <? if($arr[project][driver_topoint] > 0){ ?>   <? } ?> >ถึงสถานที่รับแขก</button>
      
 
      <?
	   if(!$deposit){
		  $deposit=0;
		  
	  }
		  ?>
      
 
	  
 
 
 
    <script>
 
var income=document.getElementById('main_deposit_total_<?=$arr[project][id]?>').value;

var income_status=document.getElementById('main_deposit_status_<?=$arr[project][id]?>').value;

 
 
$('#btn_topoint<?=$arr[project][id];?>').click(function(){  


if(income>0 && income_status==0){


//// alert(income);

/*



alert('อย่าลืมเก็บเงินแขก <? echo number_format( $deposit , 2 );?> บาท');



*/
 
 
 
swal({
  title: "<font style='font-size:28px'><b>อย่าลืมเก็บเงินแขก",
  text: "<b><font style='font-size:28px; color:#FF0000'><? echo number_format( $deposit , 2 );?> บาท",
		type: "error",
		showCancelButton: false,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'รับทราบการเก็บเงิน',
		cancelButtonText: "ไม่แน่ใจ",
		closeOnConfirm: true,
		closeOnCancel: true,
		html: true
},
function(isConfirm) {
  if (isConfirm) {
//**
 

geolocatCall();
 
 $( "#load_data_checkin_popup" ).toggle();
  
var url_chat_<? echo $arr[project][id];?>= "load_data_checkin.php?name=load/show&file=popup_guest&opentype=check_to_point&id=<? echo $arr[project][id];?>";
 
 
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
 
 
 //alert(url_chat_<? echo $arr[project][id];?>);
 
 
 $('#load_data_checkin_popup').html(load_main_mod); 
 
 /// $('#load_data_checkin_popup').load('load/loading/page_main.php'); 
 // $('#load_data_checkin_popup').load(url_chat_<? echo $arr[project][id];?>); 
  
  
  
$.post(url_chat_<? echo $arr[project][id];?>,$('#form_popup_send_data').serialize(),

function(response){ $('#load_data_checkin_popup').html(response); });
  
  
  
	
	
	
  }  
  
//
  
});





}





else {

 //
 
 
geolocatCall();
 
 $( "#load_data_checkin_popup" ).toggle();
  
var url_chat_<? echo $arr[project][id];?>= "load_data_checkin.php?name=load/show&file=popup_guest&opentype=check_to_point&id=<? echo $arr[project][id];?>";
 
 
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
 
 
 //alert(url_chat_<? echo $arr[project][id];?>);
 
 
 $('#load_data_checkin_popup').html(load_main_mod); 
 
 /// $('#load_data_checkin_popup').load('load/loading/page_main.php'); 
 // $('#load_data_checkin_popup').load(url_chat_<? echo $arr[project][id];?>); 
  
  
  
$.post(url_chat_<? echo $arr[project][id];?>,$('#form_popup_send_data').serialize(),

function(response){ $('#load_data_checkin_popup').html(response); });
  
 
 
 ///
 
 
 
}

  
  
 
 
     	});
		
		
			</script>
  
<div id="popup_work_preview_map"    style="width:100%; height:100%; padding:0px;  left:0px;  top:0px;   z-index:99999; background-color:#FFFFFF; position:fixed;  display:none; margin-top:0px; overflow:hidden">
   <div class="back-full-popup">
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="40"   ><div   id="btn_close_chat_preview_map" class="back-full-popup-map-icon"><i class="fa fa-arrow-circle-left" style="font-size:22px; color:#FFFFFF "> </i></div></td>
  <td   ><div style="font-size:18px; color:#FFFFFF " id="head_full_popup_map"><?="ตำแหน่งของคุณ"?></div></td>
    <td width="50" align="right"   ><div style="font-size:18px; color:#FFFFFF " id="head_full_popup_icon"><i class='fa  fa-map-marker'></i></div></td>
  </tr>
</table>
</div>
 
   <div   style=" background-color:#F6F6F6 ; height:80px;width:100%; top:43; position:fixed; padding:10px;  ; overflow:hidden;z-index:999999; " >
 
<table width="100%"  border="0" cellspacing="2" cellpadding="0" >
  <tr>
 
    <td   style=" color:#000000; padding-top:0px; font-size:18px "><b>ตำแหน่ง</b></td>
 
   
  </tr>
  <tr>
    <td id="load_work_preview_map_address"  style=" color:#333333; padding-bottom:5px; " >&nbsp;</td>
  </tr>
</table>

</div>
 
 <div   id="load_work_preview_map"   style="margin-top: 0px; height:100%; overflow:hidden;  "  >  
		 
 <?  ///  include('google/check_system_realtime.php')?>
</div> 
 
 
              
				                </div>
 
 
 
 