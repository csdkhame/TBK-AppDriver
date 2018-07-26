
<? if($arr[project][driver_complete] > 0){ ?>

<script>

$('#btn_complete<?=$arr[project][id];?>').removeClass("btnstatus-checkin");
$('#btn_complete<?=$arr[project][id];?>').addClass("btnstatus-checkin-no");

//  $('#btn_qr<?=$arr[project][id];?>').hide();

</script>

 <? } ?>
 
   
  


<?

  $driver_company=$arr[web_driver][company];


 if($driver_company==284 or $driver_company==276 or $driver_company==283){ ?>


 <? if($arr[project][driver_complete] == 0){ ?>

<script>
 

$('#btn_complete<?=$arr[project][id];?>').hide();

</script>

 <? } ?>
 

 <table width="100%" border="0" cellspacing="2" cellpadding="2"  class="btn btn-default" style="border-radius: 25px ; padding:0px; background-color:#FFF;  border:2px solid #dadada; margin-bottom:10px; display:none5"  id="btn_qr<?=$arr[project][id];?>">
    <tbody>
      <tr>
        <td width="50"><img  id="qrimgs" src="mod/load/show/qrcode/c.png"   align="right" style="opacity: 1;"></td>
        <td align="left" class="font_18"><strong>กรุณายืนยัน</strong><br>
การใช้รถในงานนี้</td>
      </tr>
    </tbody>
  </table>
  
 
 
 
 <? } ?>
 
<button   class="btnstatus-checkin"     data_id="<?=$arr[project][id];?>"  data_vc="<?=$arr[project][invoice];?>"   data_report_id="<?=$arr[project][report_id];?>"  col_name="driver_complete" id="btn_complete<?=$arr[project][id];?>" <? if($arr[project][driver_complete] > 0){ ?> disabled="disabled"  <? } ?> >  งานสำเร็จ  | เช็ครถ 
</button> 


 
<script>
 
 
$('#btn_complete<?=$arr[project][id];?>').click(function(){  


////////////////
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
 

var id = '<?=$arr[project][id];?>';
		$.post( "mod/load/show/get_data.php?type=distance", { id : id },function( data ) {
			
			var obj = JSON.parse(data);
	  		console.log(obj);
	  		var obj_sub = obj.point;
	  		geolocatCall();
	  		
	  		var now_lat = $('#check_data_status_gps_lat_old').val();
	  		var now_lng = $('#check_data_status_gps_lng_old').val();
	  		
	  		var radlat1 = Math.PI * obj_sub.driver_topoint_lat / 180
        	var radlat2 = Math.PI * now_lat / 180
        	var theta = obj_sub.driver_topoint_lng - now_lng;
        	var radtheta = Math.PI * theta / 180
	        var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);      
	        dist = Math.acos(dist)
	        dist = dist * 180 / Math.PI
	        dist = dist * 60 * 1.609344;

	        var m = dist * 1000;
			
			
		
	        console.log('Distance : '+m+' m.');
	        if(m<20){
	        	if(obj_sub.driver_pickup!=2){
	        		if(obj_sub.pickup_place != obj_sub.to_place){
						swal({
					  position: 'top-right',
					  type: 'error',
					  title: 'ไม่สารมารถดำเนินการ',
					  text: "สถานที่รับกับสถานที่ส่งต้องห่างเกิน 20 เมตร",
					  showConfirmButton: true
					});
					return;
					}
					console.log('Alert Distance driver_pickup != 2');
				}
				console.log('Alert Distance driver_pickup == 2');
				 
			}
				$( "#load_data_checkin_popup" ).toggle();
  
				var url_chat_<? echo $arr[project][id];?> = "load_data_checkin.php?name=load/show&file=popup_guest&daytype=<?=$_GET[daytype]?>&opentype=check_complete&id=<? echo $arr[project][id];?>&day=<?=$_GET[day]?>";
				url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
				url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
				  
				$('#load_data_checkin_popup').html(load_main_mod); 
				$.post(url_chat_<? echo $arr[project][id];?>,$('#form_popup_send_data').serialize(),function(response){ 
				 	 $('#load_data_checkin_popup').html(response); 
				});
			
		});
		
 ///
	
  }  
  
  
  
  
//
  
});
/////	
}
	
	//////




///
		
		 else{
			 
//////////

		
		
	
var id = '<?=$arr[project][id];?>';
		$.post( "mod/load/show/get_data.php?type=distance", { id : id },function( data ) {
			
			var obj = JSON.parse(data);
	  		console.log(obj);
	  		var obj_sub = obj.point;
	  		geolocatCall();
	  		
	  		var now_lat = $('#check_data_status_gps_lat_old').val();
	  		var now_lng = $('#check_data_status_gps_lng_old').val();
	  		
	  		var radlat1 = Math.PI * obj_sub.driver_topoint_lat / 180
        	var radlat2 = Math.PI * now_lat / 180
        	var theta = obj_sub.driver_topoint_lng - now_lng;
        	var radtheta = Math.PI * theta / 180
	        var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);      
	        dist = Math.acos(dist)
	        dist = dist * 180 / Math.PI
	        dist = dist * 60 * 1.609344;

	        var m = dist * 1000;
			
			
		
	        console.log('Distance : '+m+' m.');
	        if(m<20){
	        	if(obj_sub.driver_pickup!=2){
	        		if(obj_sub.pickup_place != obj_sub.to_place){
						swal({
					  position: 'top-right',
					  type: 'error',
					  title: 'ไม่สารมารถดำเนินการ',
					  text: "สถานที่รับกับสถานที่ส่งต้องห่างเกิน 20 เมตร",
					  showConfirmButton: true
					});
					return;
					}
					console.log('Alert Distance driver_pickup != 2');
				}
				console.log('Alert Distance driver_pickup == 2');
				 
			}
				$( "#load_data_checkin_popup" ).toggle();
  
				var url_chat_<? echo $arr[project][id];?> = "load_data_checkin.php?name=load/show&file=popup_guest&daytype=<?=$_GET[daytype]?>&opentype=check_complete&id=<? echo $arr[project][id];?>&day=<?=$_GET[day]?>";
				url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
				url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
				  
				$('#load_data_checkin_popup').html(load_main_mod); 
				$.post(url_chat_<? echo $arr[project][id];?>,$('#form_popup_send_data').serialize(),function(response){ 
				 	 $('#load_data_checkin_popup').html(response); 
				});
			

	});

///////////
			 
			 
			 
			 
		


}




 //////
 });

					
</script>


 




  
    <script>
 


 
$('#btn_qr<?=$arr[project][id];?>').click(function(){  


/// $("#picfilenew").click();

 
 $( "#load_data_checkin_popup" ).toggle();
  
var url_chat_<? echo $arr[project][id];?>= "load_data_checkin.php?name=load/show&file=popup_qr&opentype=check_to_point&id=<? echo $arr[project][id];?>";
 
 
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
 
 
 
 
 
 //alert(url_chat_<? echo $arr[project][id];?>);
 
 
 $('#load_data_checkin_popup').html(load_main_mod); 
 
 /// $('#load_data_checkin_popup').load('load/loading/page_main.php'); 
 // $('#load_data_checkin_popup').load(url_chat_<? echo $arr[project][id];?>); 
  
  
  
$.post(url_chat_<? echo $arr[project][id];?>,$('#form_popup_send_data').serialize(),

function(response){ $('#load_data_checkin_popup').html(response); });
  
  /*
 setTimeout(function () { 
  

	
	 $('#picfile').trigger('click');
	
	alert(0);
 }, 5000); //w
 
 */

 
 
     	});
		
		
			</script>
      
      


