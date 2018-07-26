<style type="text/css">
<!--
.topicname { padding-top:10px; padding-left:0px; padding-bottom:5px; font-size:18px; font-weight:bold; color: #666666 ; text-align:left;  
 
}
 

 
-->
</style>  

 <div class="box box-default ">
 
 
 <div class="box-header with-border">
 
  <h2 class="box-title with-border " style="padding:5px; margin-top:0px;"><span class="font_24"><b>ข้อมูลติดต่ออนไลน์</b></span></h2>

    </div>       
 
   
  
<form method="post" action="" id="edit_form" name="edit_form"  enctype="multipart/form-data" >
  <div class="box-body" >
         <div class="row">
		            <div class="col-md-6">
			      
<div>
                    <div class="topicname"><i class="fa  fa-envelope-square"></i>&nbsp;อีเมล์</div>
                    <input class="form-control" type="text" name="email" id="email"   required="true"  onkeypress="UserEnter(this,event)" value="<?=$arr[web_driver][email];?>"    >
              </div>
                
				
				 
		      <div> 
                     <div class="topicname"><i class="fa  fa-spotify"></i>&nbsp;LINE ID </div>

				  <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100%" style="padding-right:5px; "><input type="text" name="line_id" id="line_id"  required="true" onkeypress="PasswordEnter(this,event)"  value="<?=$arr[web_driver][line_id];?>" class="form-control"  ></td>
 
  </tr>
</table>
    <?  if($arr[web_driver][line_id]==""){ ?> <script type="text/javascript"> $('#line_id').addClass("tab_alert");</script> <? } ;?> 
			  </div>
			  
			  
			           <div>
                     <div class="topicname"><i class="fa fa-skype"></i>&nbsp;SKYPE</div>
					 
					   <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100%" style="padding-right:5px; "><input class="form-control" type="text" name="skype_id" id="skype_id"  required="true" onkeypress="PasswordEnter(this,event)"   value="<?=$arr[web_driver][skype_id];?>" ></td>
 
  </tr>
</table>
                    
            </div>
					
			  
			  
		   </div>  
		  
		  
		  <div class="col-md-6">
			      

					      <div> 
                     <div class="topicname"><i class="fa  fa-feed"></i>&nbsp;ZELLO ID </div>
                 <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100%" style="padding-right:5px; "><input type="text" name="zello_id" id="zello_id"  required="true" onkeypress="PasswordEnter(this,event)"  value="<?=$arr[web_driver][zello_id];?>" class="form-control"  ></td>
 
  </tr>
</table>
				 
				 
				  
			  </div>
					
					
					
                    <div>
                     <div class="topicname"><i class="fa fa-wechat"></i>&nbsp;WECHAT ID </div>
					<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100%" style="padding-right:5px; "><input type="text" name="wechat_id" id="wechat_id"  required="true"   value="<?=$arr[web_driver][wechat_id];?>" class="form-control"  ></td>
 
  </tr>
</table> 
    <?  if($arr[web_driver][wechat_id]==""){ ?> <script type="text/javascript"> $('#wechat_id').addClass("tab_alert");</script> <? } ;?> 
               
    </div>
	
	<div>
                     <div class="topicname"><i class="fa fa-whatsapp"></i>&nbsp;WHATSAPP ID </div>
					<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100%" style="padding-right:5px; "><input type="text" name="whatsapp_id" id="whatsapp_id"  required="true"   value="<?=$arr[web_driver][whatsapp_id];?>" class="form-control"  ></td>
 
  </tr>
</table> 
					  
               
    </div>
	
	
	    
			        </div>
					
   
		  </div>  
		
		 
 
		 
 
 
 
 

  
  <div  id="send_user_data"></div>
  
  
    <div style="margin-top:10px;"  >
 <table width="100%"  border="0" cellspacing="2" cellpadding="2" >
  <tr>
    <td width="150" style="padding:5 px;"><button id="submit_user_network" type="button" class="btn btn-block btn-primary" style="width:140px ">บันทึกข้อมูล</button></td>
    <td style="padding:5px;"><button type="reset" class="btn btn-block btn-default"  style="width:140px ">รีเซ็ต</button></td>
  </tr>
</table>
 
      </div>
        
  </div>
  
 
   
   
  	
 	<div id="popup_line"></div> 
	<div id="popup_zello"></div> 
	<div id="popup_wechat"></div> 
	<div id="popup_skype"></div> 
	<div id="popup_whatsapp"></div> 
  <script>
      	var url_zello= "popup.php?name=load/qrcode&file=button&userid=<?=$arr[web_driver][post_date];?>&type=zello";
$('#pic_zello').load(url_zello);
    	var url_popup_zello = "popup.php?name=load/qrcode&file=pic&userid=<?=$arr[web_driver][post_date];?>&type=zello";
$('#popup_zello').load(url_popup_zello);
  
    	var url_line = "popup.php?name=load/qrcode&file=button&userid=<?=$arr[web_driver][post_date];?>&type=line";
$('#pic_line').load(url_line);
    	var url_popup_line = "popup.php?name=load/qrcode&file=pic&userid=<?=$arr[web_driver][post_date];?>&type=line";
$('#popup_line').load(url_popup_line);



    	var url_whatsapp = "popup.php?name=load/qrcode&file=button&userid=<?=$arr[web_driver][post_date];?>&type=whatsapp";
$('#pic_whatsapp').load(url_whatsapp);
    	var url_popup_whatsapp = "popup.php?name=load/qrcode&file=pic&userid=<?=$arr[web_driver][post_date];?>&type=whatsapp";
$('#popup_whatsapp').load(url_popup_whatsapp);




    	var url_wechat= "popup.php?name=load/qrcode&file=button&userid=<?=$arr[web_driver][post_date];?>&type=wechat";
$('#pic_wechat').load(url_wechat);
    	var url_popup_wechat = "popup.php?name=load/qrcode&file=pic&userid=<?=$arr[web_driver][post_date];?>&type=wechat";
$('#popup_wechat').load(url_popup_wechat);
//alert(url_popup_1);

    	var url_skype= "popup.php?name=load/qrcode&file=button&userid=<?=$arr[web_driver][post_date];?>&type=skype";
$('#pic_skype').load(url_skype);
    	var url_popup_skype = "popup.php?name=load/qrcode&file=pic&userid=<?=$arr[web_driver][post_date];?>&type=skype";
$('#popup_skype').load(url_popup_skype);



//alert(00);
 
  
  
  
  
  
  
  
  
  
 /// check login

$("#submit_user_network").click(function(){ 
//$('#file_upload_line').click();

 
/*
if(document.getElementById('username').value=="") {
swal('กรุณากรอกชื่อผู้ใช้งาน'); 
document.getElementById('username').focus() ; 
return false ;
}
 */
 $.post('popup.php?name=user&file=savedata&type=network&id=<?=$arr[web_driver][id]?>',$('#edit_form').serialize(),function(response){
   $('#send_user_data').html(response);
  });
  
  
 });
 </script> 
 
 
 </form> 
 