 
<style>
	.css-full-popup-main-mod {
	position: fixed;
	left: 0px;
	top: 0px; 
	bottom:0;
	width: 100%;
	height: 100%;
	z-index: 9999; 
	overflow-y:hidden ; padding:0px; background-color:#FFFFFF; 
	
	  overflow-y: scroll; /* has to be scroll, not auto */
  -webkit-overflow-scrolling: touch;
 
}

 

.back-full-popup-mod
{ 
font-size:22px;   padding:10px;  color:#FFFFF;  width:100%; background-color:<?=$maincolor?>;      
 border-top: 0px solid #000000; margin-bottom: 0px;  
  top:  0; position:fixed;
    z-index: 1; 
 
}
 
  * {
	  /*
    -webkit-overflow-scrolling: touch;
	
	*/
}



 





</style> 

 





 
 
<div class="css-full-popup-main-mod" id="load_data_main_popup" style="display:none; position:fixed; overflow: scroll "> 
<?  /// include "load/loading/page_main.php" ; ?>
 
 
 

</div>

 