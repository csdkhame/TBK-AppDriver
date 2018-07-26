 


<table width="100%" border="0" cellspacing="2" cellpadding="4">
 
    <tr>
      <td width="20" valign="top" ><i class="icon-new-uniF137" style="color:#666666; font-size:18px;"></i></td>
      <td width="100" valign="top" class="td-text"><b>เอเย่นต์</td>
      <td valign="top" class="td-text"><? echo $arr[showlogo][company];?> <? if($arr[showlogo][company_or]<>""){ ?> &nbsp;<? echo $arr[showlogo][company_or];?><? } ?></td>
    </tr>
    <tr>
      <td valign="top"><i class="icon-new-uniF12B-3" style="color:#666666; font-size:18px"></i></td>
      <td valign="top" class="td-text"><b>จำนวน</td>
      <td valign="top" class="td-text"><?
 	 if($arr[project][adult]>0){ ?>
	ผู้ใหญ่ : 
	<?=$arr[project][adult];?> &nbsp;<br>
	<? }else{ ?>
	ผู้ใหญ่ : 
	<?=$arr[project][total]-$arr[project][child]-$arr[project][baby];?> &nbsp;<br>
	<?php } ?>
	
		<? if($arr[project][child]>0){ ?>
	 เด็ก : 
	<?=$arr[project][child];?> &nbsp;<br>
	<? } ?>
	
	<? if($arr[project][baby]>0){ ?>
	 ทารก : 
	<?=$arr[project][baby];?> 
	<? } ?></td>
    </tr>
    
    
    
    
        <tr>
      <td valign="top"><i class="icon-new-uniF109-14" style="color:#666666; font-size:18px"></i></td>
      <td valign="top" class="td-text"><b>ชื่อแขก</td>
      <td valign="top"  class="td-text"><?=$arr[project][guest_name]?></td>
  </tr>
  
 
    
<? 

 $string_to_replace     = array ("-" ,"," , "+", "/");
$string_after_replace  = array ("" ,"<br>" , "", "<br>" ,);

if($arr[project][guest_phone]<>''){
	
 
$arr[project][guest_phone]    = str_replace($string_to_replace , $string_after_replace , $arr[project][guest_phone] , $count);   
	
 
	
	?>   
 <tr>
  <td valign="top"> 
  
  
  <span data-toggle="tooltip"    class="badge"   style="position:absolute; margin-left: 12px; border-radius: 20px; height:20px; width:20px; background-color:#0079C8; margin-top:-8px; " id="number_bottom_chat">1</span>
  
  <i class="icon-new-uniF152-4" style="color:#666666; font-size: 20px"></i></td>
      <td valign="top" class="td-text"><b>โทรศัพท์</td>
      <td valign="top" class="td-text"><b> 
      

      
      <table width="100%" border="0" cellspacing="2" cellpadding="0" style="margin-top:-5px;background-color:#FFF; 

 border-radius:25px; border : 1px solid #DADADA; padding:3px;   ">
  <tbody>
    <tr>
      <td width="20" valign="top"> <img src="images/icon/map/phone.png"   align="bottom"  width="22"    /></td>
      <td valign="middle">      <a  href="tel:<?=$arr[project][guest_phone];?>"  target="_blank" class="test" data-toggle="tooltip" title="โทรออก" style="font-size: 16px"> <?=$arr[project][guest_phone];?></a></td>
    </tr>
  </tbody>
</table>


 





      
 
       
       </td>
 </tr>
    		<? } ?>
            
            
            
     
<? if($arr[project][guest_phone_2]<>''){
	
	
 
$arr[project][guest_phone_2]    = str_replace($string_to_replace , $string_after_replace , $arr[project][guest_phone_2] , $count);   
	
 
	
	?>   
 <tr>
  <td valign="top"><span data-toggle="tooltip"    class="badge"   style="position:absolute; margin-left: 12px; border-radius: 20px; height:20px; width:20px; background-color:#0079C8; margin-top:-8px; " id="number_bottom_chat">2</span><i class="icon-new-uniF152-4" style="color:#666666; font-size: 20px"></i></td>
      <td valign="top" class="td-text"><b>โทรศัพท์</td>
      <td valign="top" class="td-text"><b> 
      
 
      
      <table width="100%" border="0" cellspacing="2" cellpadding="0" style="margin-top:-5px;background-color:#FFF; 

 border-radius:25px; border : 1px solid #DADADA; padding:3px;   ">
  <tbody>
    <tr>
      <td width="20" valign="top"> <img src="images/icon/map/phone.png"   align="bottom"  width="22"    /></td>
      <td valign="middle">      <a  href="tel:<?=$arr[project][guest_phone_2];?>"  target="_blank" class="test" data-toggle="tooltip" title="โทรออก" style="font-size: 16px"> <?=$arr[project][guest_phone_2];?></a></td>
    </tr>
  </tbody>
</table>

       
       </td>
 </tr>
    		<? } ?>
            
    
    
    
<? if($arr[project][guest_phone_3]<>''){
	
 
$arr[project][guest_phone_3]    = str_replace($string_to_replace , $string_after_replace , $arr[project][guest_phone_3] , $count);   
	
 
	
	?>   
 <tr>
  <td valign="top"><span data-toggle="tooltip"    class="badge"   style="position:absolute; margin-left: 12px; border-radius: 20px; height:20px; width:20px; background-color:#0079C8; margin-top:-8px; " id="number_bottom_chat">2</span><i class="icon-new-uniF152-4" style="color:#666666; font-size: 20px"></i></td>
      <td valign="top" class="td-text"><b>โทรศัพท์</td>
      <td valign="top" class="td-text"><b> 
      
 
      
      <table width="100%" border="0" cellspacing="2" cellpadding="0" style="margin-top:-5px;background-color:#FFF; 

 border-radius:25px; border : 1px solid #DADADA; padding:3px;   ">
  <tbody>
    <tr>
      <td width="20" valign="top"> <img src="images/icon/map/phone.png"   align="bottom"  width="22"    /></td>
      <td valign="middle">      <a  href="tel:<?=$arr[project][guest_phone_3];?>"  target="_blank" class="test" data-toggle="tooltip" title="โทรออก" style="font-size: 16px"> <?=$arr[project][guest_phone_3];?></a></td>
    </tr>
  </tbody>
</table>

       
       </td>
 </tr>
    		<? } ?>
   
</table>