

<? if($arr[project][driver_complete] > 0){ ?>

<script>

$('#btn_checkcar<?=$arr[project][id];?>').removeClass("btnstatus-checkin");
$('#btn_checkcar<?=$arr[project][id];?>').addClass("btnstatus-checkin-no");

</script>

 <? } ?>







<button   class="btnstatus-checkin"   id="btn_checkcar<?=$arr[project][id];?>" <? if($arr[project][driver_checkcar] > 0){ ?> disabled="disabled"  <? } ?> >  ตรวจเช็คสัมภาระในรถ 
</button>



<script>
 
 
$('#btn_checkcar<?=$arr[project][id];?>').click(function(){  

 
 $( "#load_data_checkin_popup" ).toggle();
  
var url_chat_<? echo $arr[project][id];?> = "load_data_checkin.php?name=load/show&file=popup_guest&opentype=check_checkcar&id=<? echo $arr[project][id];?>";
 
 
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
 
 
 
 
 
  $('#head_full_popup_check_in_topic').html("ถึงสถานที่รับแขก"); 
   $('#load_data_checkin_popup').html(load_main_mod); 
 
/// $('#load_data_checkin_popup').load('load/loading/page_main.php'); 
///  $('#load_data_checkin_popup').load(url_chat_<? echo $arr[project][id];?>); 
 
 
  $.post(url_chat_<? echo $arr[project][id];?>,$('#form_popup_send_data').serialize(),

function(response){ $('#load_data_checkin_popup').html(response); });
 
 
     	});
					
					</script>