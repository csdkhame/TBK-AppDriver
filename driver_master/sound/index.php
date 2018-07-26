 
<div style="display:none">


 

<div style="position: relative; padding: 100px;">




 

 
</div>
 
 
<script src="sound/js/ion.sound.js"></script> 
 

<script>

 
$( document ).ready(function() {
 
        ion.sound({
            sounds: [
			////// alert chat
			  {name: "alert_msg_new"},
			  
			  
			   {name: "alert_change_new_new"},
			    {name: "alert_change_new_to_ok"},
				 {name: "alert_change_new_to_reject"},
				 
				 
				 
				  {name: "checkin_to"},
				   {name: "checkin_no"},
				    {name: "checkin_yes"},
					 {name: "checkin_car"},
					 {name: "checkin_complete"},
			  
			  
			  ////
			
			    {name: "inphone"},
				  {name: "scan"},
			
                {name: "checkin"},
				  {name: "checkguest_new"},
				    {name: "checkguest_old"},
					 {name: "new_work"},
					  {name: "cancel_work"},
					  {name: "welcome"},
					  {name: "change_work"},
                {name: "new"}
            ],
            path: "sound/",
            preload: true,
			///ready_callback: true,
            volume: 1.0
        });
		
		 
		////// chat
		


        $("#play_checkin").on("click", function(){
		   ion.sound.play("checkin");
        });
        $("#play_checkguest_new").on("click", function(){
		   ion.sound.play("checkguest_new");
        });
		 $("#play_checkguest_old").on("click", function(){
		   ion.sound.play("checkguest_old");
        });
		 $("#play_new_work").on("click", function(){
		   ion.sound.play("new_work");
        });
		
		$("#play_cancel_work").on("click", function(){
		   ion.sound.play("cancel_work");
        });
		
		
 		 $("#play_change_work").on("click", function(){
		   ion.sound.play("change_work");
        });
 		 $("#play_new").on("click", function(){
		   ion.sound.play("new");
        }); 
		
		 $("#play_welcome").on("click", function(){
		   ion.sound.play("welcome");
        });
		
		$("#play_alert_msg_new").on("click", function(){
		   ion.sound.play("alert_msg_new");
        }); 
		
				$("#play_in_phone").on("click", function(){
		   ion.sound.play("inphone");
        }); 
		
		
 $("#play_scan").on("click", function(){
 ion.sound.play("scan");
        }); 
 ///ion.sound.play("scan");
		
///	$("#play_scan").click();
///	$("#play_new_work").click();
 
	});
	
///	 ion.sound.play("scan");
//// http://responsivevoice.org/responsivevoice/getvoice.php?t=การส่งงานของคุณให้เพื่อนถูกปฏิเสธค่ะ&tl=th-TH 
</script>

</script>

<button id="play_scan">scan</button>
<button id="play_checkin">checkin</button>
<button id="play_checkguest_new">checkguest_new</button>
<button id="play_checkguest_old">checkguest_old</button>
<button id="play_new_work">new_work</button>
<button id="play_cancel_work">cancel_work</button>
<button id="play_change_work">change_work</button>
<button id="play_welcome">welcome</button>
<button class="love" id="play_new">new</button>

<button class="love" id="play_alert_msg_new">chat new</button>
<button class="love" id="play_in_phone">chat new</button>

 
</div>
 
