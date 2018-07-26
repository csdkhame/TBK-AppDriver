 
 <?
 require_once("../../includes/config.in.php");

require_once("../../includes/class.mysql.php");
require_once("../../includes/function.in.php");
 
 ?>
 
 
 
 
 
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


<table width="100%"  border="0" cellspacing="2" cellpadding="2">
  <tr align="center">
    <td width="50%" align="center">
    
    
    <a id="btn_top_menu_phone_driver">
 
    <table width="100%" border="0" cellspacing="2" cellpadding="2"  class="btn btn-default" style="border-radius: 15px ; padding:3px; background-color:#FFF;  border:2px solid #dadada; margin-bottom:0px; " >
    <tbody>
      <tr>
        <td width="40"><div class="boxphone-icon"><i class="icon-new-uniF10C-1" style="margin-left:-3px; "></i></div></td>
        <td align="left" class="font_18"><strong>คนขับรถ</strong><br><font  class="font_14"> <?=check_driver_phone($driver_id,$driver_company)?>36  หมายเลข</font><?=$driver_company?>
</td>
      </tr>
    </tbody>
  </table></a>
    
    
    
       
   </td>
    <td width="50%" align="center" valign="top"> 
    
    <a id="btn_top_menu_phone_op">
      <table width="100%" border="0" cellspacing="2" cellpadding="2"  class="btn btn-default" style="border-radius:15px ; padding:3px; background-color:#FFF;  border: 2px solid #dadada; margin-bottom:0px; "  i>
        <tbody>
          <tr>
            <td width="40"><div class="boxphone-icon"><i class="icon-new-uniF10F" style="margin-left:-3px; "></i></div></td>
            <td align="left" class="font_18"><strong>โอพี</strong><br>
            <font  class="font_14"> 4 หมายเลข</font></td>
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
		
		