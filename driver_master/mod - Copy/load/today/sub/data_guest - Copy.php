<script>


</script>



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
    
    
<? if($arr[project][guest_phone]<>''){?>   
  <td valign="top"><i class="icon-new-uniF152-4" style="color:#666666; font-size:18px"></i></td>
      <td valign="top" class="td-text"><b>โทรศัพท์</td>
      <td valign="top" class="td-text"><b><?=$arr[project][guest_phone];?></td>
    </tr>
    		<? } ?>
    
    
    <tr>
      <td valign="top"><i class="icon-new-uniF109-14" style="color:#666666; font-size:18px"></i></td>
      <td valign="top" class="td-text"><b>ชื่อแขก</td>
      <td valign="top"  class="td-text"><?=$arr[project][guest_name]?></td>
  </tr>
   
</table>