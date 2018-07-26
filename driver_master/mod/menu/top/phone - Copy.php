 
 
 
 
<style>
.boxphone-icon {
    border-radius: 50%;  
 
    padding: 5px; 
    width: 40px;
    height: 40px; 
	text-align: justify; color:#3C8DBC;  font-size:24px;  
	border: solid 2px #3C8DBC;
	 box-shadow: 0 0 0px 0px #E8E6E6;  
}

</style>



<?
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res[web_admin] = $db->select_query("SELECT admin_company FROM web_admin WHERE id='".$driver_company."'    "); 
$arr[web_admin] = $db->fetch($res[web_admin]);

  $arr[web_admin][admin_company];
?>







<table width="100%"  border="0" cellspacing="2" cellpadding="2">
  <tr align="center">
    <td width="50%" align="center">
    
    
    <a id="btn_top_menu_phone_driver">
 
    <table width="100%" border="0" cellspacing="2" cellpadding="2"  class="btn btn-default" style="border-radius: 15px ; padding:3px; background-color:#FFF;  border:2px solid #dadada; margin-bottom:0px; " >
    <tbody>
      <tr>
        <td width="40"><div class="boxphone-icon"><i class="icon-new-uniF10C-1" style="margin-left:-3px; "></i></div></td>
        <td align="left" class="font_18"><strong>คนขับรถ </strong><br><font  class="font_14"> <?=check_driver_phone($driver_id,$driver_company)?> หมายเลข</font>
</td>
      </tr>
    </tbody>
  </table></a>
    
    
    
       
   </td>
    <td width="50%" align="center" valign="top"> 
    
    <?
	
  $time_now= date('H:i:s');
	
///$time_now='17:00:00';


 $time_now=strtotime($time_now);





	
	 $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
 
 $all_call = $db->num_rows('contact_phone_support',"id","company=".$arr[web_admin][admin_company]." and status=1");
 
 
 
 //$arr[web_admin][admin_company]=5;
 
 
 
 if($arr[web_admin][admin_company]==5){
	 
	 
	 
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);

$res[phone] = $db->select_query("SELECT * FROM contact_phone_support WHERE  company=".$arr[web_admin][admin_company]." "); 

 

$res[phone] = $db->select_query("SELECT * FROM contact_phone_support WHERE  company=".$arr[web_admin][admin_company]." and start < '".$time_now."'  and finish  >  '".$time_now."'    "); 







$arr[phone] = $db->fetch($res[phone]);
$phone= $arr[phone][phone];	


 if(!$phone){
	 
$phone='0957560498';
	 
 }





 












  
	 
 } else   {
	 
  
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res[phone] = $db->select_query("SELECT * FROM contact_phone_support WHERE  company=".$arr[web_admin][admin_company].""); 
$arr[phone] = $db->fetch($res[phone]); 
	 
$phone= $arr[phone][phone];	 
 }
 
 
	
	
	
	
	
	
	
	
	
	
	
	
	?>
    
    
 
    
    
    
    <a id="btn_top_menu_phone_op" href="tel:<?=$phone?>">
      <table width="100%" border="0" cellspacing="2" cellpadding="2"  class="btn btn-default" style="border-radius:15px ; padding:3px; background-color:#FFF;  border: 2px solid #dadada; margin-bottom:0px; "  i>
        <tbody>
          <tr>
            <td width="40"><div class="boxphone-icon"><i class="icon-new-uniF10F" style="margin-left:-3px; "></i></div></td>
            <td align="left" class="font_18"><strong>โอพี</strong><br>
            <font  class="font_14"><? //=$all_call?> <?=$phone?></font></td>
          </tr>
        </tbody>
    </table></td> 
    
  </tr>
</table>
<table width="100%"  border="0" cellspacing="2" cellpadding="2">
  <tr align="center">
    <td width="50%" align="center"><a id="btn_top_menu_phone_driver2">
      <table width="100%" border="0" cellspacing="2" cellpadding="2"  class="btn btn-default" style="border-radius: 15px ; padding:3px; background-color:#FFF;  border:2px solid #dadada; margin-bottom:0px; " >
        <tbody>
          <tr>
            <td width="40"><div class="boxphone-icon"><i class="icon-new-uniF10C-1" style="margin-left:-3px; "></i></div></td>
            <td align="left" class="font_18"><strong>ฝ่ายจัดรถ </strong><br>
              <font  class="font_14">
                <?=check_driver_phone($driver_id,$driver_company)?>
                หมายเลข</font></td>
          </tr>
        </tbody>
      </table>
    </a></td>
    <td width="50%" align="center" valign="top"><?
	
  $time_now= date('H:i:s');
	
///$time_now='17:00:00';


 $time_now=strtotime($time_now);





	
	 $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
 
 $all_call = $db->num_rows('contact_phone_support',"id","company=".$arr[web_admin][admin_company]." and status=1");
 
 
 
 //$arr[web_admin][admin_company]=5;
 
 
 
 if($arr[web_admin][admin_company]==5){
	 
	 
	 
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);

$res[phone] = $db->select_query("SELECT * FROM contact_phone_support WHERE  company=".$arr[web_admin][admin_company]." "); 

 

$res[phone] = $db->select_query("SELECT * FROM contact_phone_support WHERE  company=".$arr[web_admin][admin_company]." and start < '".$time_now."'  and finish  >  '".$time_now."'    "); 







$arr[phone] = $db->fetch($res[phone]);
$phone= $arr[phone][phone];	


 if(!$phone){
	 
$phone='0957560498';
	 
 }





 












  
	 
 } else   {
	 
  
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res[phone] = $db->select_query("SELECT * FROM contact_phone_support WHERE  company=".$arr[web_admin][admin_company].""); 
$arr[phone] = $db->fetch($res[phone]); 
	 
$phone= $arr[phone][phone];	 
 }
 
 
	
	
	
	
	
	
	
	
	
	
	
	
	?>
      <a id="btn_top_menu_phone_op" href="tel:<?=$phone?>">
      <table width="100%" border="0" cellspacing="2" cellpadding="2"  class="btn btn-default" style="border-radius:15px ; padding:3px; background-color:#FFF;  border: 2px solid #dadada; margin-bottom:0px; "  i>
        <tbody>
          <tr>
            <td width="40"><div class="boxphone-icon"><i class="fa fa-balance-scale" style="margin-left:-3px; "></i></div></td>
            <td align="left" class="font_18"><strong>ทนาย</strong><br>
              <font  class="font_14">
                <? //=$all_call?>
                <?=$phone?>
              </font></td>
          </tr>
        </tbody>
      </table></td>
  </tr>
</table> 

</a>






 





	<script>
		
		 $("#btn_top_menu_phone_driver").click(function(){
			 
$("#head_full_popup_main_menu" ).html('เบอร์โทรศัพท์คนขับรถ');			 

 
 
 
 $("#popup_work_main_menu" ).toggle();
 
  $("#load_work_main_menu").load('go.php?name=phone&file=driver');
 
 
		 });
		
		</script>
		
		