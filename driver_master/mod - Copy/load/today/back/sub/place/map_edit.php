 <? $google_api="AIzaSyDJa08ZMaSnJP5A6EsL9wxqdDderh7zU90";?><br>
 
 
     <div  style="display:none">

 <input type="text"   value="<?=$_GET[lat]?>" id="new_data_lat" name="new_data_lat">
  <input type="text"   value="<?=$_GET[lng]?>" id="new_data_lng" name="new_data_lng">
  <input type="text"   value="<? echo $_GET[place];?>" id="place_id" name="place_id">
  
    <input type="text"   value="1" id="data_type" name="data_type">
  </div>
 
        <div id="geo_data" style="display:none "></div>
        <div id="save_new_data" style="display:none "></div>
        <div class="bottom-popup-main-map" >
 
 <table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tbody>
    <tr>
      <td id="bottom_popup_map_driver_edit"  style="font-size:16px; color:#FF0000 " > ตำแหน่งในระบบทีบุคกิ้ง</td>
      <td width="100"> <div style="margin-top:-5px"><button type="button" class="btn"   id="btn_send_new_point" data-backdrop="static"  style="padding:10px; width:100%;   background-color: #17B3B2;font-size:16px;   color:#FFF;border-radius: 25px; margin-top:-20px; box-shadow: 0 0 10px  #DADADA;border: solid 3px #FFFFFF;  " > ส่งตำแหน่งใหม่</button></div></td>
    </tr>
  </tbody>
</table>

 
</div>

        
        <div id="map_canvas" style="background: #f5f5f5; height:100%; width:100%; border:none; margin-top:  -80px;"></div>

        <script type="text/javascript">
        var initialLocation;
            var bangkok = new google.maps.LatLng(13.755716, 100.501589);
            function initialize() {
                var myOptions = {
                    zoom: 14,
                    //center: latlng,
                    mapTypeControl: false,
                    navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById("map_canvas"),
                myOptions);
				
				
				//// center
				

                // detect geolocation lat/lng
                if ( navigator.geolocation ) {
                    navigator.geolocation.getCurrentPosition(function(location) {
                        var location = location.coords;
                 $("#geo_data").html('lats: '+location.latitude+'<br />longs: '+location.longitude);
						

 
						if(document.getElementById("data_type").value==1){
                        initialLocation = new google.maps.LatLng(<?=$_GET[lat]?>, <?=$_GET[lng]?>);
                        map.setCenter(initialLocation);
                        setMarker(initialLocation);
						
						} else {
					
	 
					 	 initialLocation = new google.maps.LatLng(location.latitude, location.longitude);
                        map.setCenter(initialLocation);
                        setMarker(initialLocation);
 
					
						}
						
						


						
                    }, function() {
                        handleNoGeolocation();
                    });
                } else {
                    handleNoGeolocation();
                }
 




 
	
 



 



                // set marker
				
 
                function setMarker(initialName) {
					
					
					if(document.getElementById("data_type").value==1){
					 var image = 'google/icon/yes.png';
					} else{
						
					 var image = 'google/icon/no.png';	
					}
					 
					 
                    var marker = new google.maps.Marker({
						
                        draggable: true,
                        position: initialName,
 	
                        map: map,
                        title: "เลื่อนเพื่อเปลี่ยนตำแหน่ง",
						icon: image
						
						//icon: 'google/icon/yes.png'
 
                    });
					////
 		
					//
					
					var url = "https://maps.googleapis.com/maps/api/geocode/json?latlng="+marker.getPosition().lat()+","+marker.getPosition().lng()+"&sensor=false&language=th";
 
 
 
$.getJSON(url, function (data) {
    for(var i=0;i<1;i++) {
        var adress = data.results[i].formatted_address;
		
 
	  $( "#load_work_preview_map_driver_edit_address" ).html(adress);
	  
 
	  
    }
});	
			
					
					
					
					
                    google.maps.event.addListener(marker, 'dragend', function(event) {
                   $("#geo_data").html('lat: '+marker.getPosition().lat()+'<br />long: '+marker.getPosition().lng());
				   
				   
				   
				   
				     $("#new_data_lat").val(marker.getPosition().lat());
					  $("#new_data_lng").val(marker.getPosition().lng());
				   
				 
				 /// แสดงที่อยู่ใหม่
				 
			 
  initialLocation_new = new google.maps.LatLng($("#new_data_lat").val(),$("#new_data_lng").val());
 map.setCenter(initialLocation_new);
					
 	
						
						
 var url = "https://maps.googleapis.com/maps/api/geocode/json?latlng="+$("#new_data_lat").val()+","+$("#new_data_lng").val()+"&sensor=false&language=th";
 
 
 
$.getJSON(url, function (data) {
    for(var i=0;i<1;i++) {
        var adress = data.results[i].formatted_address;
		
 
	  $( "#load_work_preview_map_driver_edit_address" ).html(adress);
	  
 
	  
    }
});	
						
						

				 
			 
				 
//	 var newLatLng = new google.maps.LatLng($("#new_data_lat").val(),$("#new_data_lng").val());
  //  myMarker.setPosition(newLatLng);


    // using global variable:
    //map.panTo(newLatLng);
				 
				   
				   
                    });
					
					/////
google.maps.event.addDomListener(map, 'zoom_changed', function() {
	
 
  var zoom = map.getZoom();
  if (zoom >= 1 && zoom <= 9) { 
    layer_0.setMap(map);
    layer_1.setMap(map);
  } 
  else if (zoom > 9 && zoom <= 11) {
    layer_0.setMap(map);
    layer_1.setMap(map);
  }
  else if (zoom > 11) {
    layer_0.setMap(null);
    layer_1.setMap(map);
  }
});
					
					/////
					
				 
					
					
					
					
                }
				
				

				
            }
			
			///
		 
			

					
					
					//
 

            $(document).ready(function() {
                initialize();
            });
								
			function get_location() {
  if (Modernizr.geolocation) {
    navigator.geolocation.getCurrentPosition(show_map);
  } else {
    // no native support; maybe try a fallback?
  }
}
 
 						

						
        </script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?v=3.26&key=<?=$google_api?>&callback=initialize">
</script>
    </body> 

</html>


<? 
 $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
 
 
 
 $res[place] = $db->select_query("SELECT topic,amphur,province,phone FROM ".TB_transferplace." WHERE id='".$_GET[place]."' ");
$arr[place] = $db->fetch($res[place]);
 


?>




<script>

  $('#btn_start_new_point').click(function(){    
  
  
 document.getElementById("data_type").value=1;
///setMarkernew();	
   initialize();
   
     $("#bottom_popup_map_driver_edit").html('ตำแหน่งในระบบทีบุคกิ้ง');
   
  
  });
  
    $('#btn_realtime_new_point').click(function(){    
  
 
  document.getElementById("data_type").value=0;
  
     initialize();
///setMarkernew();	
 $("#bottom_popup_map_driver_edit").html('ตำแหน่งปัจจุบันของคุณ');
 
   
  
  });

   	
  $('#btn_send_new_point').click(function(){    
  
  

	   swal({
		title: "<font style='font-size:28px'><b> คุณแน่ใจหรือไม่",
		text: "ว่าต้องการแจ้งตำแหน่งใหม่<br><font style='font-size:16px; color:#FF0000'><?=$arr[place][topic]?>",
		type: "success",
		showCancelButton: true,
		confirmButtonColor: '#0ACB68',
		confirmButtonText: 'แน่ใจ',
		cancelButtonText: "ไม่แน่ใจ",
		closeOnConfirm: true,
		closeOnCancel: true,
		html: true
	},
	function(isConfirm){
		
 
    if (isConfirm){
	 
 
 
var url="load_in.php?name=load/today/sub/place&file=action&action=change_work&place=<?=$_GET[place];?>";	
url=url+"&lat="+document.getElementById('new_data_lat').value;
url=url+"&lng="+document.getElementById('new_data_lng').value;

 
 
$('#save_new_data').load(url);


 
  $("#popup_work_preview_map_driver_edit" ).toggle();
	//  alert('dd');
    } else {
      swal("Cancelled", "", "error");
    }
	});
	   
	    

});
		

</script>





 <style>
.bottom-popup-main-map
{ 
font-size:18px;   padding:3px;  color:#000000;  width:100%; background-color:#F6F6F6;      
 border-bottom: 0px solid #e5e5e5; margin-bottom: 0px; padding-bottom:5px;
 
position: fixed;
  bottom:  0;
 
 box-shadow: 1px 1px 10px #999999;
  left: 0; z-index:10;
 
}
 

 </style>
 
 