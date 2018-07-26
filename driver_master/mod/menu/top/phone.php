  <script src="js/deep-link.js"></script>
 <div style="overflow: scroll; padding:5px;">
 
 
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

.box-button-phone { border-radius: 40px ; padding:3px; background-color:#FFF;  border:1px solid #dadada; margin-bottom:8px;  box-shadow: 0 0  5px #E8E6E6; 
	
	
	
	
}



</style>



<?
$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
$res[web_admin] = $db->select_query("SELECT admin_company FROM web_admin WHERE id='".$driver_company."'    "); 
$arr[web_admin] = $db->fetch($res[web_admin]);

  $arr[web_admin][admin_company];
?>




 
    <a id="btn_top_menu_phone_driver">
 
    <table width="100%" border="0" cellspacing="2" cellpadding="2"  class="btn btn-default box-button-phone"  >
    <tbody>
      <tr>
        <td width="40"><div class="boxphone-icon"><i class="icon-new-uniF10C-1" style="margin-left:-3px; "></i></div></td>
        <td align="left" class="font_18"><strong style="color:#3C8DBC">พนักงานขับรถ </strong>
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody>
              <tr>
                <td>เบอร์ติดต่อพนักงานขับรถในบริษัท</td>
              </tr>
            </tbody>
          </table><font  class="font_18"> <b><?=check_driver_phone($driver_id,$driver_company)?> หมายเลข</font>
</td>
      </tr>
    </tbody>
  </table></a>
    
    
    
    
    
    
    
      
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
    
    
 
    
    
    
    <a id="btn_top_menu_phone_op" href="tel:<?=$phone?>" >
      <table width="100%" border="0" cellspacing="2" cellpadding="2" class="btn btn-default box-button-phone"  >
        <tbody>
          <tr>
            <td width="40"><div class="boxphone-icon"><i class="icon-new-uniF10F" style="margin-left:-3px; "></i></div></td>
            <td align="left" class="font_18"><strong style="color:#3C8DBC">คอลเซ็นเตอร์</strong>
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                  <tr>
                    <td>ติดต่อประสานงานระหว่างแขกกับคนขับรถ</td>
                  </tr>
                </tbody>
              </table>
              
              
              <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:5px;">
  <tbody>
    <tr>
      <td width="35"><img src="images/icon/map/phone.png"     width="28"    /></td>
      <td>  <font  class="font_20"><b><? //=$all_call?> <?=$phone?></font></td>
    </tr>
  </tbody>
</table>
            
              
              
              </td>
          </tr>
        </tbody>
    </table>
    
    </a>
    
    
<?  $company=$arr[web_driver][company];?>
    
     <?
  if($company==276 or  $company==283 or  $company==284 or $company==3992 or  $company==3993 or  $company==3994){  
 
 
 
 ?>
 
 
 
      <?
  if($company==276 or  $company==283 or  $company==284 or $company==3992 or  $company==3993 or  $company==3994){  
 
 
 
 ?>
 
 
 
 
 
    
                    <? 
				$phone_office='0864713126';
				
				
				//=$all_call?>
    
    <a id="btn_top_menu_phone_driver2" href="tel:<?=$phone_office?>">
    <table width="100%" border="0" cellspacing="2" cellpadding="2"  class="btn btn-default box-button-phone"  >
        <tbody>
          <tr>
            <td width="40"><div class="boxphone-icon"><i class="icon-new-uniF10A-9" style="margin-left:-3px; "></i></div></td>
            <td align="left" class="font_18"><strong style="color:#3C8DBC">ฝ่ายจัดรถ</strong>
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                  <tr>
                    <td>จัดการงานรถรับส่ง ดูแลรถและพนักงานขับรถ</td>
                  </tr>
                </tbody>
              </table>
              
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:5px;">
  <tbody>
    <tr>
      <td width="35"><img src="images/icon/map/phone.png"     width="28"    /></td>
      <td>  <font  class="font_20"><b><? //=$all_call?> <?=$phone_office?></font></td>
    </tr>
  </tbody>
</table>
            
              
              
              
              
 </td>
          </tr>
        </tbody>
      </table>
    </a>
    
    
    
    
  <? } ?>  
  
  
       <?
  if($company==276 or  $company==283 or  $company==284 or $company==3992 or  $company==3993 or  $company==3994){  
 
 
 
 ?>
    

     <a id="btn_top_menu_phone_it" href="tel:0954293990">
    <table width="100%" border="0" cellspacing="2" cellpadding="2"  class="btn btn-default box-button-phone"  >
        <tbody>
          <tr>
            <td width="40"><div class="boxphone-icon"><i class="icon-new-uniF1EF" style="margin-left:-3px; "></i></div></td>
            <td align="left" class="font_18"><strong style="color:#3C8DBC">ช่างซ่อมบำรุงรถ (กล้า)</strong>
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                  <tr>
                    <td>ดูแลรักษา ซ่อมบำรุงรถในบริษัท</td>
                  </tr>
                </tbody>
              </table>
              
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:5px;">
  <tbody>
    <tr>
      <td width="35"><img src="images/icon/map/phone.png"     width="28"    /></td>
      <td>  <font  class="font_20"><b><? //=$all_call?> 0954293990</font></td>
    </tr>
  </tbody>
</table>
            
              
              
              
              
 </td>
          </tr>
        </tbody>
      </table>
    </a>
    
    
    
    <? } ?>
    
    
    
  
    
    
     <a id="btn_top_menu_phone_it" href="tel:0865265851">
    <table width="100%" border="0" cellspacing="2" cellpadding="2"  class="btn btn-default box-button-phone"  >
        <tbody>
          <tr>
            <td width="40"><div class="boxphone-icon"><i class="icon-new-uniF132-6" style="margin-left:-3px; "></i></div></td>
            <td align="left" class="font_18"><strong style="color:#3C8DBC">ไอที ซัพพอร์ท (ตู่)</strong>
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                  <tr>
                    <td>ดูแลระบบแอพพลิเคชั่นพนักงานขับรถ</td>
                  </tr>
                </tbody>
              </table>
              
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:5px;">
  <tbody>
    <tr>
      <td width="35"><img src="images/icon/map/phone.png"     width="28"    /></td>
      <td>  <font  class="font_20"><b><? //=$all_call?> 0865265851</font></td>
    </tr>
  </tbody>
</table>
            
              
              
              
              
 </td>
          </tr>
        </tbody>
      </table>
    </a>
    
    
    
    
    
    
    
    
    
    
    
    
    <? } ?>
    
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
    
    
     <a id="btn_top_menu_phone_law" href="tel:<?='0865645453';?>">
     <table width="100%" border="0" cellspacing="2" cellpadding="2"   class="btn btn-default box-button-phone"  >
        <tbody>
          <tr>
            <td width="40"><div class="boxphone-icon"><i class="fa fa-balance-scale" style="margin-left:-3px; "></i></div></td>
            <td align="left" class="font_18"><strong style="color:#3C8DBC">ทนายความประจำบริษัท (หรั่ง)</strong>
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                  <tr>
                    <td>ให้คำปรึกษาและแนะนำด้านกฎหมายทุกเรื่อง</td>
                  </tr>
                </tbody>
              </table>
 
            
            
             <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:5px;">
  <tbody>
    <tr>
      <td width="35"><img src="images/icon/map/phone.png"     width="28"    /></td>
      <td>  <font  class="font_20"><b><? //=$all_call?>   0865645453</font></td>
    </tr>
  </tbody>
</table>
              
            
            
            
            
            
            </td>
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
		
		<br> 
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
 
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</div> 