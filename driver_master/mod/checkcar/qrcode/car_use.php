 <?
 
    $string_to_replace     = array ("COROLLA" );
$string_after_replace  = array ("" );

 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$res[chkproject] = $db->select_query("SELECT id,report_id,invoice,server,car_number FROM ".TB_transfer_report_all."  where id='".$_GET[id]."' limit 1");
$arr[chkproject] = $db->fetch($res[chkproject]);
  
 
 
 

 
 
 
 
 

 $db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
  $res[car] = $db->select_query("SELECT id,car_type,plate_color,car_sub_brand,car_brand,plate_num,province,car_num,company FROM " . TB_carall . "  where  id=".$arr[chkproject] [car_number]." ");
 
 $arr[car] = $db->fetch($res[car]);
 
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
	
	
            $res[type]   = $db->select_query("SELECT topic_en FROM " .TB_carall_type." WHERE id='" . $arr[car][car_type] . "' ");
            $arr[type]   = $db->fetch($res[type]);
 
 
			if($arr[type][topic_en]=='Car'){
			$arr[type][topic_en]='รถเก๋ง';
			}
			if($arr[type][topic_en]=='Van'){
			$arr[type][topic_en]='รถตู้';
			}
 
			
 //$res[cartype] = $db->select_query("SELECT * FROM ".TB_carall." WHERE id='".$arr[category][car_type]."' ");
            //$arr[cartype] = $db->fetch($res[cartype);
 $res[admin] = $db->select_query("SELECT company FROM " . TB_admin . " WHERE id='" . $arr[car][company] . "' ");
  $arr[admin] = $db->fetch($res[admin]);
 
         //   
  $arr[car][car_sub_brand]      = str_replace($string_to_replace , $string_after_replace ,$arr[car][car_sub_brand], $count);   
?>
 
<style>

  .cirnumbershow-car-list {
    border-radius: 50%; background-color: #FF0000;
 
    padding: 0px; padding-top: 0px; 
    width: 40px;
    height: 40px; 
	text-align: justify; color:#FFFFFF; margin-left: 0px;   font-size:30px; font-weight:bold;  
	border: solid 3px #FFFFFF;
	 box-shadow: 0 0 0px 0px #DADADA; 
    border-radius: 50%; background-color: #DD4B39; 
  color: #fff;
}
 
 

</style>
 
 
      
 
<? if($arr[chkproject] [car_number]>0){ ?>

    
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="45" rowspan="2"><table width="100%" border="0" cellspacing="2" cellpadding="2" class="cirnumbershow-car-list" style="background-color:<?=$color?>">
        <tbody>
          <tr>
            <td align="center" valign="middle" style="color:<?=$text?>; font-size:18px"><?=$arr[car][car_num]?></td>
          </tr>
        </tbody>
      </table></td>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="60"  style=" font-size:18px"><b><?=$type?></td>
      <td valign="bottom" style="padding-bottom:3px;"><? echo $arr[car][car_brand];?>- <? echo $arr[car][car_sub_brand];?></td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
    <tr>
      <td class="font_16"><b><?= $arr[admin][company]?></b></td>
    </tr>
  </tbody>
</table>

<? }  else {?>

<center><font color="#FF0000">ยังไม่มีข้อมูลรถที่ใช้งาน</font></center>

<? } ?>
 