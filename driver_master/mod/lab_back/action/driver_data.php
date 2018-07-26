 
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
    <td colspan="3" align="center" valign="top" class="font_34"  style="padding-top:5px; color:#009999  "><div style="margin-left:-10px; "><?
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


<table width="100%" border="0" cellspacing="2" cellpadding="2">
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
   
 var urltime="load_in.php?name=lab/check/load/from&file=time_reply&id=<?=$arr[project][id];?>&dv_new=<?=$_GET[dvnew]?>";
 

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









 




 