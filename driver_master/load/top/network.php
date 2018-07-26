

<table width="100%"  border="0" cellspacing="2" cellpadding="2">
  <tr align="center" >
    <td width="25%" ><a href="tel://" target="_blank" ><img   src="images/icon/top/phone.png" border="0"  style="width:95% " ></a>โทรศัพท์<br>
    <br></td>
    <td width="25%" valign="top"><a href="zello://<?=$driver_zello?>?add_channel" target="_blank" ><img src="images/icon/top/zello.png" border="0"  style="width:95% "  ></a>Zello</td>
    <td width="25%" valign="top"><a href="line://nv/chat"  ><img src="images/icon/top/line.png" border="0"  style="width:95% "  ></a>Line</td>
  <td width="25%" valign="top"><a href="weixin://"   ><img src="images/icon/top/wechat.png" border="0"  style="width:95% " ></a>Wechat</td>
  </tr>
</table><?=$driver_zello?>

<div id="popup_confirm_repair" style="position : fixed; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.80);display: none;top: 0px;z-index: 1000000000;left: 0px;
  padding:15px;">
  		
  		<div style="margin-top: 30px;padding: 15px;background-color: #fff;border-radius:15px;animation: showSweetAlert 0.3s;" >
  		
  		  <div id="body_popup_load">
  		  	
  		  </div>
          <table width="100%" style="margin-top: 10px;">
                	<tr>
                		<td width="100%" align="center"> 
                		<button type="button" class="btn btn-danger" style="width: 100%; font-size: 16px;border-radius: 25px;" id="close_confirm">ปิด</button> 
                		</td>
                		
                	</tr>
        </table>
         </div> 
         
  </div> 
<script>



	function bookPhone(){
		console.log('open book phone');
		$('#popup_confirm_repair').show();
		$('body').css('overflow','hidden');
	}
	 
  $('#close_confirm').click(function(){
 	console.log('close');
 	$('#popup_confirm_repair').hide();
 	$('#body_popup_confirm').html('');
 	$('body').css('overflow','auto');
 });
</script>
