 
<style>
	.css-full-popup {
	position: fixed;
	left: 0px;
	top: 0px; 
	bottom:0;
	width: 100%;
	height: 100%;
	z-index: 9999; 
	overflow-y:hidden ; padding:0px; background-color:#FFFFFF; 
 
}

 

.back-full-popup
{ 
font-size:22px;   padding:10px;  color:#FFFFF;  width:100%; background-color:<?=$maincolor?>;      
 border-top: 0px solid #000000; margin-bottom: 0px;  
  top:  0; position:fixed;
    z-index: 1; 
 
}
 
 
</style> 
 
 
<div class="css-full-popup" id="load_data_change_work_show" style="display:noneฆ; position:fixed; overflow: auto "> 

 

 
  <div class="back-full-popup"> 
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="40"   ><div class="back-full-popup-button-change" ><i class="fa fa-arrow-circle-left" style="font-size:22px; color:#FFFFFF "></div></i></td>
  <td   ><div style="font-size:18px; color:#FFFFFF " id="head_full_popup">มีการสลับงานมายังคุณ</div></td>
    <td width="50" align="right"   ><div style="font-size:22px; color:#FFFFFF " id="head_full_popup_icon"></div></td>
  </tr>
</table>
</div>

 
 
 
 

 

 <div style="padding:10px; margin-top:40px;">




<?
//$_GET[dvold];
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD); 

$res[name] = $db->select_query("SELECT id,nickname,post_date,company FROM ".TB_driver." WHERE id='".$from."' ");
$arr[name] = $db->fetch($res[name]);
$arr[name][nickname];

$res[company] = $db->select_query("SELECT company FROM ".TB_admin." WHERE id='".$arr[name][company]."' ");
$arr[company] = $db->fetch($res[company]);


$res[drivernamenew] = $db->select_query("SELECT id,nickname,post_date,company FROM ".TB_driver." WHERE id='".$to."' ");
$arr[drivernamenew] = $db->fetch($res[drivernamenew]);

$res[companynew] = $db->select_query("SELECT company FROM ".TB_admin." WHERE id='".$arr[drivernamenew][company]."' ");
$arr[companynew] = $db->fetch($res[companynew]);

?>




 
<table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tbody>
    <tr>
      <td align="center"><span class="font_34" style="padding-top:5px; color:#009999  ">
        <div style="margin-left:-10px; ">
        <?
 $filename = "../../admin/file/driver/pic/" . $arr[drivernamenew][post_date] . ".jpg";
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
        <img src="http://t-booking.com/admin/file/driver/pic/<?=$arr[name][post_date];?>.jpg"  width="180"   border="0"  class="IMGSHOP"   />
        <?
                        }
                        else {
                          ?>
        <img src="http://t-booking.com/admin/file/driver/pic/no.jpg"  width="180" border="0"  class="IMGSHOP"   />
        <?
                        } ?>
        </span></td>
    </tr>
  </tbody>
</table>
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
    <td colspan="3" align="center" valign="top" class="font_34"  style="padding-top:5px; color:#009999  ">ฆฆฆฆฆฆฆฆฆฆ&nbsp;</td>
  </tr>
</table>

 
 <div id="load_change_work_data"></div>
 
 
 
<table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tbody>
    <tr>
      <td width="50%"> <button type="button" class="btn btn-modal-no"   id="btn_no_" style="width:100%" >ปฏิเสธ</button></td>
      <td width="50%"><button type="button" class="btn btn-modal-ok"   data-dismiss="modal" data-backdrop="static" id="btn_ok_<? echo $arr[project][id];?>" style="width:100%" >รับงาน</button></td>
    </tr>
  </tbody>
</table>
 			

</div><br>




 
 
 
 

<?   /// include "load/loading/page_main.php" ; ?>
 
 
 

</div>














   <script>
 
    	
  $('.back-full-popup-button-change').click(function(){   
  
 
   $( "#load_data_change_work_show" ).toggle();
 

     	});
 
  </script>