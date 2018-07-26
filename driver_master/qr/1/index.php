 <script src="src/html5-qrcode.js"></script> 
 
 
 <div id="reader" style="width:300px;height:250px">
 </div>
 
 <script>
  $('#reader').html5_qrcode(function(data){
 		alert(data);
 	},
 	function(error){
		console.log(error);
	}, function(videoError){
		console.log(videoError);
	}
);
 
 </script>