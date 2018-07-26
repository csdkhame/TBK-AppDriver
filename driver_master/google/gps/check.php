 <?
$gps_icon_color="#FFED22";
?>
 <? $google_api="AIzaSyDJa08ZMaSnJP5A6EsL9wxqdDderh7zU90";?>
<style>
 
  
@-webkit-keyframes gps-color {
    0%   { color: <?=$gps_icon_color?> }
    25%  { color: white; font-size:24px; }
	50%   { color: <?=$gps_icon_color?> }
	75%  { color: white; font-size:24px; }
    100% { color: <?=$gps_icon_color?> }
 
}

 @-moz-keyframes gps-color {
     0%   { color: <?=$gps_icon_color?> }
    25%  { color: white; font-size:24px; }
	50%   { color: <?=$gps_icon_color?> }
	75%  { color: white; font-size:24px; }
    100% { color: <?=$gps_icon_color?> }
 
 
	
}
.gps-status-icon {
     
 font-size:24px;
 
	  
	  
	 	  -webkit-transition: all 2s;
	   -moz-animation: gps-color 2s infinite;
	  
      -webkit-transition: all 2s;
    -webkit-animation: gps-color 2s infinite;
}
</style> 


<input type="hidden" name="check_data_status_gps_lat_old" id="check_data_status_gps_lat_old" value="0"  style="width:100px " /> 
  <input type="hidden" name="check_data_status_gps_lng_old" id="check_data_status_gps_lng_old" value="0"  style="width:100px " />






<script>

 



document.getElementById('check_data_status_gps_lat').value=document.getElementById('check_data_status_gps_lat_old').value;
document.getElementById('check_data_status_gps_lng').value=document.getElementById('check_data_status_gps_lng_old').value;

</script>


 <input type="hidden" name="check_data_status_gps" id="check_data_status_gps" value="1"  style="width:20px " /> 
 
 

 
 
 
  <input type="hidden" name="check_data_status_gps_lat" id="check_data_status_gps_lat" value="0"  style="width:100px " /> 
  <input type="hidden" name="check_data_status_gps_lng" id="check_data_status_gps_lng" value="0"  style="width:100px " /> 
  
 
<div id="load_map_main" style="display:none"> </div>



 


<script async defer
src="https://maps.googleapis.com/maps/api/js?v=3.31&key=<?=$google_api?>">
</script>
 

<script>

getLocationCheck();
var x = document.getElementById("load_map_main");



function getLocationCheck() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {

 /// alert(position.coords.longitude);
 
document.getElementById('check_data_status_gps_lat').value=position.coords.latitude;
document.getElementById('check_data_status_gps_lng').value=position.coords.longitude;

document.getElementById('check_data_status_gps_lat_old').value=position.coords.latitude;
document.getElementById('check_data_status_gps_lng_old').value=position.coords.longitude;

$( "#main_gps_status" ).addClass( "gps-status-icon");
 
  ///// check update
  
  

  

 
 
}

function showError(error) {
	
	
/// $( "#main_gps_status" ).addClass( "icon-new-uniF_ultimate124");
	
	
	
	
	
    switch(error.code) {
        case error.PERMISSION_DENIED:
		 document.getElementById('check_data_status_gps').value=0 ;
		 
		  x.innerHTML = "No"
 
            break;
        case error.POSITION_UNAVAILABLE:
              x.innerHTML = "Location information is unavailable."
			// alert(0);
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
    }
}
 
 
 getLocationCheck();
 
 setInterval(function() {
 
getLocationCheck();
		 
}, 15000); // 60000 milliseconds = one minute
 
  
</script>
 
 

<div id="send_data_gps_update" style="display:none"></div>





<script>


 ///alert(document.getElementById('check_data_status_gps_lat_old').value)
 setInterval(function() {
var url="go.php?name=load/update/online&file=gps";
url =url+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
 url =url+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
 
$("#send_data_gps_update").load(url);
}, 5000); // 60000 milliseconds = one minute
	</script>