 
<style>


  .cirnumbershow-car {
    border-radius: 50%; background-color: #FF0000;
 
    padding: 0px; padding-top: 0px; 
    width: 60px;
    height: 60px; 
	text-align: justify; color:#FFFFFF; margin-left: 0px;   font-size:30px; font-weight:bold;  
	border: solid 3px #FFFFFF;
	 box-shadow: 0 0 0px 0px #DADADA; 
    border-radius: 50%; background-color: #DD4B39; 
  color: #fff;
}
 
 
 
.select-car-now {
 
	  border: 2px solid #dadada; width:100%; border-radius: 40px; margin-bottom:10px;
	  
}
 
 
 
</style>


 <?
 
 
 $string_to_replace     = array ("COROLLA" );
$string_after_replace  = array ("" );

 
 
 
 $db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
  $res[car] = $db->select_query("SELECT id,car_type,plate_color,car_sub_brand,car_brand,plate_num,province,car_num,company FROM " . TB_carall . "  where  id=".$_GET[car]." ");
 
 while ($arr[car] = $db->fetch($res[car])) { 
 
                             $res[type]   = $db->select_query("SELECT * FROM " . TB_carall_type . " WHERE id='" . $arr[car][car_type] . "' ");
                            $arr[type]   = $db->fetch($res[type]);
                        if($arr[type][topic_en]=='Car'){
                        $type='รถเก๋ง';
					$color='#009999';
					$text='#FFFFFF';
						
                        }
                        if($arr[type][topic_en]=='Van'){
                        $type='รถตู้';
						$color='#FFCC00';
						$text='#000000';
                        }
 
                            $res[admin] = $db->select_query("SELECT * FROM " . TB_admin . " WHERE id='" . $arr[car][company] . "' ");
                            $arr[admin] = $db->fetch($res[admin]);
 
 
$arr[car][car_sub_brand]      = str_replace($string_to_replace , $string_after_replace ,$arr[car][car_sub_brand], $count);   
 
 
 ?>
						
                        
 
    
    
    
    
    <a id="car_<?=$arr[car][id]?>ssss">
    
      
    
    
    
<div class="select-car-now" id="div_car_<?=$arr[car][id]?>">


    
    <table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tbody>
    <tr>
      <td width="55" rowspan="2"><table width="100%" border="0" cellspacing="2" cellpadding="2" class="cirnumbershow-car" style="background-color:<?=$color?>">
        <tbody>
          <tr>
            <td align="center" valign="middle" style="color:<?=$text?>; font-size:26px"><?=$arr[car][car_num]?></td>
          </tr>
        </tbody>
      </table></td>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="60"  style=" font-size:18px"><b><?=$type?></td>
      <td valign="middle" ><? echo $arr[car][car_brand];?>-<? echo $arr[car][car_sub_brand];?></td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
    <tr>
      <td valign="top" class="font_16"><b><?= $arr[admin][company]?></b></td>
    </tr>
  </tbody>
</table>

    </div>
    
  <? } ?>