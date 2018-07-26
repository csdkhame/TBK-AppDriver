	<script>
	
 var url_check_data_time = "load_in.php?name=lab/check/load/from&file=time_countdown&id=<?=$_GET[id];?>";
 //url_check_data_time =url_check_data_time+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
 //url_check_data_time =url_check_data_time+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
   
/// $('#load_time_<?=$_GET[id];?>').load(url_check_data_time);
	
 setInterval(function() {
 var url_check_data_time = "load_in.php?name=lab/check/load/from&file=time_countdown&id=<?=$_GET[id];?>";
// url_check_data_time =url_check_data_time+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
// url_check_data_time =url_check_data_time+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
   
 //$('#load_time_<?=$_GET[id];?>').load(url_check_data_time);
 
  
}, 1000); // 60000 milliseconds = one minute
 
 
 // $('#load_time_wait_driver_<?=$_GET[id];?>').html(")");
	</script>
    
 