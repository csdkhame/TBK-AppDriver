 <? $google_api="AIzaSyDJa08ZMaSnJP5A6EsL9wxqdDderh7zU90";?><br>
 
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
  
 

 <input type="text"   value="<? echo $daywork;?>" id="new_data_lat" name="new_data_lat">
  <input type="text"   value="<? echo $daywork_new;?>" id="new_data_lng" name="new_data_lng">
  <input type="text"   value="<? echo $_GET[place];?>" id="place_id" name="place_id">
  
 
        <div id="geo_data" style="display:none "></div>
        <div id="save_new_data" style="display:none "></div>
        

        
        <div id="map_canvas" style="background: #f5f5f5; height:100%; width:100%; border:none; margin-top: -20px;"></div>

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
						
 
 
						
                        initialLocation = new google.maps.LatLng(<?=$_GET[lat]?>, <?=$_GET[lng]?>);
                        map.setCenter(initialLocation);
                        setMarker(initialLocation);
						
						
						
						
                    }, function() {
                        handleNoGeolocation();
                    });
                } else {
                    handleNoGeolocation();
                }
        // no geolocation
                function handleNoGeolocation() {
                    map.setCenter(bangkok);
                    setMarker(bangkok);
                $("#geo_data").html('lat: 13.755716<br />long: 100.501589');
					// window.location = "alert_location.php";
                }

                // set marker
				var image = 'google/share.png';
                function setMarker(initialName) {
                    var marker = new google.maps.Marker({
						
                        draggable: true,
                        position: initialName,
						
                        map: map,
                        title: "เลื่อนเพื่อเปลี่ยนตำแหน่ง",
						icon: 'google/icon/yes.png'
                    });
					////
					
					
					
					
					//
					
					
					
					
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
						
						
                    //    setMarker(initialLocation_new);
				 
			 
				 
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