<?
if($arr[project][driver_topoint] > 0){
	
	
	
	if($arr[project][driver_pickup] > 0){
?>
                <script>
$('#iconchk_s2_<?=$arr[project][id];?>').attr("src", "images/yes.png");
$('#checkstep_2_<?=$arr[project][id];?>').addClass("checkinstep_active");
 $('#tab_pickup_<?=$arr[project][id];?>').removeClass("tab_alert");
 </script>
 
 <?
  /// รับแขก
  	if($arr[project][driver_pickup] == 1){ ?>
 
  <script>
				
$('#btn_pickup_check_<?=$arr[project][id];?>').removeClass("btnstatus-checkin");
$('#btn_pickup_check_<?=$arr[project][id];?>').addClass("btnstatus-checkin-no");


$('#btn_pickup_not_check_<?=$arr[project][id];?>').removeClass("btnstatus-checkin-no");
$('#btn_pickup_not_check_<?=$arr[project][id];?>').addClass("btnstatus-checkin-red");

</script>
 
 <? } ?>
 
 
 
 
 <?
  /// รับแขก
  	if($arr[project][driver_pickup] ==2){ ?>
 
  <script>
				
$('#btn_pickup_check_<?=$arr[project][id];?>').removeClass("btnstatus-checkin-no");
$('#btn_pickup_check_<?=$arr[project][id];?>').addClass("btnstatus-checkin");


$('#btn_pickup_not_check_<?=$arr[project][id];?>').removeClass("btnstatus-checkin-red");
$('#btn_pickup_not_check_<?=$arr[project][id];?>').addClass("btnstatus-checkin-no");

</script>
 
 <? } ?>
 
 
 
 
 
 
 
 <?
 
  } 
 
 } ?>
 
  <table width="100%"  cellpadding="0" cellspacing="0">
                  <tr id="tr_btn_pickup1<?=$arr[project][id];?>"  style="display: nonea<? if($arr[project][driver_pickup] == 1){ ?> 1  <? } ?>">
                    <td><button   class="btnstatus-checkin"   data_id="<?=$arr[project][id];?>"  data_vc="<?=$arr[project][invoice];?>"   data_report_id="<?=$arr[project][report_id];?>"  col_name="driver_pickup" id="btn_pickup_check_<?=$arr[project][id];?>" data_val="1"  >เช็คชื่อแขก</button></td>
                  </tr>
                  <tr height="5" id="cc_tr_pickup<?=$arr[project][id];?>" <? if($arr[project][driver_pickup] > 0){ ?> style="display: none"  <? } ?> ></tr>
                  <tr id="tr_btn_pickup2<?=$arr[project][id];?>"  style="display: nonea<? if($arr[project][driver_pickup] == 2){ ?> 1  <? } ?>">
                    <td style="padding-top:10px"><button style="color: #fffbfb;" class="btnstatus-checkin-red"    data_id="<?=$arr[project][id];?>"  data_vc="<?=$arr[project][invoice];?>"   data_report_id="<?=$arr[project][report_id];?>"  col_name="driver_pickup" id="btn_pickup_not_check_<?=$arr[project][id];?>" data_val="2"  >ไม่เจอแขก</button></td>
                  </tr>
                </table>
				
				
				
				
				<? if(1==0){ ?>
                <div  id="no_guest<?=$arr[project][id];?>"  style=" display:none<? if($arr[project][driver_pickup] == 2){ ?> 1  <? } ?>">
                  <button type="button" class="btn btn-default"  style=" padding:5px;border-radius: 15px "   data-toggle="modal" data-backdrop="static" data-keyboard="false" >สาเหตุไม่พบแขก</button>
            </div> 
			<? } ?>
			
			
    <script>
 

 
  ////// เจอแขก
 
 
$('#btn_pickup_check_<?=$arr[project][id];?>').click(function(){  

if(income>0 && income_status==0){
	
	
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
  
var url_chat_<? echo $arr[project][id];?> = "load_data_checkin.php?name=load/show&file=popup_guest&opentype=check_pickup&id=<? echo $arr[project][id];?>&type=yes"; 
 
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
 
 
 
 
 
$('#load_data_checkin_popup').html(load_main_mod); 
///$('#load_data_checkin_popup').load('load/loading/page_main.php'); 
 //$('#load_data_checkin_popup').load(url_chat_<? echo $arr[project][id];?>); 
 
 
$.post(url_chat_<? echo $arr[project][id];?>,$('#form_popup_send_data').serialize(),

function(response){ $('#load_data_checkin_popup').html(response); });
 
	
  }  
  
//
  
});





}

	
 

////////////


else {
	
	
	
geolocatCall();
 $( "#load_data_checkin_popup" ).toggle(); 
  
var url_chat_<? echo $arr[project][id];?> = "load_data_checkin.php?name=load/show&file=popup_guest&opentype=check_pickup&id=<? echo $arr[project][id];?>&type=yes"; 
 
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
 
 
 
 
 
$('#load_data_checkin_popup').html(load_main_mod); 
///$('#load_data_checkin_popup').load('load/loading/page_main.php'); 
 //$('#load_data_checkin_popup').load(url_chat_<? echo $arr[project][id];?>); 
 
 console.log(url_chat_<? echo $arr[project][id];?>);
$.post(url_chat_<? echo $arr[project][id];?>,$('#form_popup_send_data').serialize(),

function(response){ $('#load_data_checkin_popup').html(response); });
	
	
	
}







//////////







 
 
     	});
					
					</script>
                    
                    
                    
			
    <script>
 

 
  ////// เจอแขก
 
 
$('#btn_pickup_not_check_<?=$arr[project][id];?>').click(function(){  
 
 $( "#load_data_checkin_popup" ).toggle(); 
  
var url_chat_<? echo $arr[project][id];?> = "load_data_checkin.php?name=load/show&file=popup_guest&opentype=check_pickup_no_guest&id=<? echo $arr[project][id];?>&type=yes"; 
 
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
 
 
 
    $('#load_data_checkin_popup').load('load/loading/page_main.php'); 
    
 $('#load_data_checkin_popup').load(url_chat_<? echo $arr[project][id];?>); 
 
 
  
 
 
     	});
					
					</script>