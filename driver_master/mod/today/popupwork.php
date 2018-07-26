

<style>
 

.outer-loadwait-work {
    position: fixed; margin-left: 0px; margin-top: 0px; display:table; top:0; left:0;  
    width: 100%; /* This could be ANY width */
    height: 100%; /* This could be ANY height */
   z-index:9999999999;  
	background: url('images/bg-popup.png');  
}

.inner-loadwait-work{
    display: table-cell;
    vertical-align: middle;
    text-align: center;
}

.div-loadwait-work {
    display: inline-block;
    text-align: left; width:150px;
   
 
    border : 0px solid <?=$maincolor?>;  
	z-index:999999999999999; background-color:#F6F6F6;   -moz-border-radius:10px;
  -webkit-border-radius:3px;

 border-radius: 30px; height: 150px; padding:10px; width:180px;  
}

</style>


		
<div id="popup_show_convert_work" style="display:noned;z-index:99999;  ">
<div class="outer-loadwait-work" >
   <div class="inner-loadwait-work"><img src="images/close-popup.png" width="50" height="50" alt="" style="margin-top:-45px; position:absolute; margin-left:150px; margin-top:-10px; cursor:pointer" id="close_popup_show_convert_work"/>
     <div class="div-loadwait-work">
 


<div  >

 






<div id="finish_convert_work" style="display:none; margin-top:10px;">

<a href="data/loadwork/<?=$driver_id?>.jpg"
   download="ใบงานคุณ<?=$data_driver_nickname?> <?=$_GET['day']?>"  target="_blank" >

<div   style="border:none; color:#000000; font-size:16px; "><center> <i class="fa  fa-download faa-bounce animated" style="font-size:80px;   margin-top:10px;color: #17B3B2" ></i></center></font></b>  </div> 

 <div    style="color:#000000; font-size:16px; text-transform:capitalize;z-index:99999; margin-top: 0px; "><center>  <div style="margin-top: 0px; "> </div><b>
 ดาวน์โหลดใบงาน</b></font> </span></font></b></center></div></div>
 

</a>
 
 
</div>














<div id="now_convert_work" style="display:nones; margin-top:10px;">


<div   style="border:none; color:#000000; font-size:16px; "><center> <i class="fa  fa-circle-o-notch fa-spin 4x" style="font-size:80px;   margin-top:10px;color: #3C8DBC" ></i></center></font></b>  </div> 

 <div    style="color:#000000; font-size:16px; text-transform:capitalize;z-index:99999; margin-top: 0px; "><center>  <div style="margin-top: 0px; "> </div><b>
 กำลังแปลงใบงาน</b></font> </span></font></b></center></div></div>
 

 
 
 
</div>





















     
<br>
 
     </div>
   </div>
</div>
 
 </div>
 
  
  
  
  
    <script>
    	
  $('#close_popup_show_convert_work').click(function(){   
  
 
 
   $( "#popup_show_convert_work" ).hide();
 
 

     	});
		
	  </script>	
  