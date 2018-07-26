 
<?

$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD); 
 $res[drivername] = $db->select_query("SELECT id,nickname,post_date FROM ".TB_driver." WHERE id='".$_GET[dvnew]."' ");
 $arr[drivername] = $db->fetch($res[drivername]);
 
  $arr[project][id]=$_GET[id];
 

?>
<script>
document.getElementById('change_drivername<?=$_GET[id];?>').value = '<?=$_GET[dvnew];?>' ;

</script>
 

 

 




<?
//$_GET[dvold];
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD); 

$res[name] = $db->select_query("SELECT id,nickname,post_date,company FROM ".TB_driver." WHERE id='".$_GET[dvold]."' ");
$arr[name] = $db->fetch($res[name]);
$arr[name][nickname];

$res[company] = $db->select_query("SELECT company FROM ".TB_admin." WHERE id='".$arr[name][company]."' ");
$arr[company] = $db->fetch($res[company]);
 
 
$res[drivernamenew] = $db->select_query("SELECT id,nickname,post_date,company FROM ".TB_driver." WHERE id='".$_GET[dvnew]."' ");
$arr[drivernamenew] = $db->fetch($res[drivernamenew]);

$res[companynew] = $db->select_query("SELECT company FROM ".TB_admin." WHERE id='".$arr[drivernamenew][company]."' ");
$arr[companynew] = $db->fetch($res[companynew]);



 
?>




 
<table width="100%"  border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="38" rowspan="2" valign="middle" class="font_34"  style="padding-top:5px; color:#009999  "><i class="fa fa-arrow-circle-down"></i></td>
  <td width="80" class="font_22" style="padding-top:10px; "><?=$arr[name][nickname]?>   </td>
  <td class="font_22" style="padding-top:10px; "><font class="font_14"><?=$arr[company][company];?></td>
  </tr>
  <tr>
    <td class="font_22" style="padding-top:0px; "><?=$arr[drivernamenew][nickname]?></td>
  <td class="font_22" style="padding-top:0px; "><font class="font_14"><?=$arr[companynew][company];?></td>
  </tr>
  <tr>
    <td colspan="3" align="center" valign="top" class="font_34"  style="padding-top:5px; color:#009999  "><table width="100%" border="0" cellspacing="3" cellpadding="3">
      <tbody>
 
      </tbody>
    </table>
    
<script>
   
 

</script>
    
        <?
	
	$rand = substr(str_shuffle('123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890'),0,100);
	?>
    
    <script>
	
 
	
	
 var url_load_check_status_to_driver<?=$rand?> = "load_in.php?name=lab/action&file=check_to_status&id=<?=$arr[project][id];?>&dv=<?=$_GET[dvnew]?>&rand=<?=$rand?>";
 $('#load_check_status_to_driver<?=$rand?>').load(url_load_check_status_to_driver<?=$rand?>);

 
 setInterval(function() {
  var url_load_check_status_to_driver<?=$rand?> = "load_in.php?name=lab/action&file=check_to_status&id=<?=$arr[project][id];?>&dv=<?=$_GET[dvnew]?>&rand=<?=$rand?>";
 $('#load_check_status_to_driver<?=$rand?>').load(url_load_check_status_to_driver<?=$rand?>);
}, 3000); // 60000 milliseconds = one minute
 
	
	</script>
    
    
      <style>
	  
	  @-webkit-keyframes online-color {
 
    50%  { border: 2px solid #DADADA }
    100% { border: 2px solid #FF0000 }
 
}

 @-moz-keyframes gps-color {
 
 
    50%  { border: 2px solid #DADADA }
    100% { border: 2px solid #FF0000 }
	 
	
}

	  
	  
	  
	  
	  
   .div-all-check-offline{
	 padding:5px;   border-radius:  25px; border: 2px solid #999999;background-color:#FFFFFF;     margin-bottom: 5px; box-shadow: 0px  0px 2px #DADADA; font-size:22px; font-weight:bold; height:40px; 
	 
 }
 
 
    .div-all-check-online{
	 padding:5px;   border-radius:  25px; border: 2px solid #DADADA;background-color:#FFFFFF;     margin-bottom: 5px; box-shadow: 0px  0px 2px #DADADA; font-size:22px; font-weight:bold; height:40px; 
	 
	 
 
	 	 	  -webkit-transition: all 1s;
	   -moz-animation: online-color 1s infinite;
	  
      -webkit-transition: all 1s;
    -webkit-animation: online-color 1s infinite;
	 
	 
	 
	 
 }
 
 
 
 
 
 
 
 </style>


    
    
    <div id="load_check_status_to_driver<?=$rand?>" class="div-all-check-offline" style="display:nones"></div>
    
    
    

    
    
    
    
    
    
    
    
      <div style="margin-left:-10px; "><?
 $filename = "../data/pic/driver/main/" . $arr[drivernamenew][post_date] . ".jpg";
if(file_exists($filename)) {

$file_exists = 1;  
}else{
	$url = "http://t-booking.com/admin/file/driver/pic/" . $arr[drivernamenew][post_date] . ".jpg";

$response = get_headers($url, 1);
$file_exists = (strpos($response[0], "404") === false);  
}	
                      
                       // if(file_exists($file_exists)) {
                        if($file_exists) {
                          // Ǩͺ
                          ?>              
      
      <img src="../data/pic/driver/main/<?=$arr[drivernamenew][post_date];?>.jpg"  width="180"   border="0"  class="IMGSHOP"   style="border-radius: 15px;" />
      <?
                        }
                        else {
                          ?>              
      <img src="http://t-booking.com/admin/file/driver/pic/no.jpg"  width="180" border="0"  class="IMGSHOP"  style="border-radius: 15px;"  />
      <?
                        } ?>    </td>
  </tr>
</table>


<table width="100%" border="0" cellspacing="2" cellpadding="2" style="margin-top:10px;">
  <tbody>
    <tr>
      <td width="50%"> <button type="button" class="btn btn-modal-no"   id="btn_no_<? echo $arr[project][id];?>" style="width:100%" >ยกเลิก</button>
      </td>
      <td width="50%"><button type="button" class="btn btn-modal-ok"   data-dismiss="modal" data-backdrop="static" id="btn_ok_<? echo $arr[project][id];?>" style="width:100%" >ส่งงานต่อ</button></td>
    </tr>
  </tbody>
</table>
 			

</div><br>
<br>
<br>

<script>

 $('#btn_no_<? echo $arr[project][id];?>').click(function(){   
 
 
 $( "#load_data_manage_work_show" ).toggle();

 });
 
 
 // $('#btn_ok_<? echo $arr[project][id];?>').click(function(){   
  
 
  
//$( "#load_data_manage_work_show" ).toggle();

 


// });
 
 
</script>
 
 
 
 
<script>

//// ส่งงาน
		
$('#btn_ok_<? echo $arr[project][id];?>').click(function(){   
   var url="load_in.php?name=lab/action&file=action&action=change_work&data_id=<?=$arr[project][id];?>&dv_old=<?=$_GET[dvold]?>&dv_new=<?=$_GET[dvnew]?>&day=<?=$_GET[day]?>";
   
 
var time=$("#work_time").val();


//alert(time);
   
 
 console.log(url);
	   swal({
		title: "<font style='font-size:28px'><b> คุณแน่ใจหรือไม่",
		text: "ว่าต้องการส่งงานให้ <br><font style='font-size:18px; color:#FF0000'><?=$arr[drivernamenew][nickname]?> (<?=$arr[companynew][company];?>)",
		type: "error",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'ใช่',
		cancelButtonText: "ไม่ใช่",
		closeOnConfirm: true,
		closeOnCancel: true,
		html: true
	},
	function(isConfirm){
    if (isConfirm){
	 
	
//swal("สลับงานสำเร็จ", "success");

 

$("#load_send_data_work<?=$arr[project][id];?>").load(url);

 /*
 
$(".change_new_work" ).hide();

 $('#main_edit_work_<?=$arr[project][id];?>').addClass('tab_alert');
$("#tr_change_new_work_<?=$arr[project][id];?>" ).show();
   


 

$('#change_new_work_<?=$arr[project][id];?>').removeClass('bg-green');


 $('#change_new_work_<?=$arr[project][id];?>').addClass('bg-red');
 
$('#change_new_work_text_<?=$arr[project][id];?>').html("รอการตอบรับ ");

 
 $("#load_data_manage_work_show" ).toggle();
  
 $("#time_change_new_work_<?=$arr[project][id];?>" ).show();
 
 $("#tr_confirm_start_work_<?=$arr[project][id];?>" ).hide();
  
 
  /// load time
  */
   
 var urltime="load_in.php?name=lab/check/load/from&file=time_reply&id=<?=$arr[project][id];?>&dv_new=<?=$_GET[dvnew]?>&time="+time;
 

 $("#check_update_work" ).load(urltime);
 
 

 $( "#load_data_manage_work_show" ).toggle();

   
	//  alert('dd');
    } else {
      swal("Cancelled", "", "error");
    }
	});
	   
	    

});
		
 	</script>
 

 


 
<div id="load_send_data_work<?=$arr[project][id];?>"></div>

 