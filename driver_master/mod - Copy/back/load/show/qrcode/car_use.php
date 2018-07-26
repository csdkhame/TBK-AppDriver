 <?
 
 
 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$res[chkproject] = $db->select_query("SELECT id,report_id,invoice,server,car_number FROM ".TB_transfer_report_all."  where id='".$_GET[id]."' limit 1");
$arr[chkproject] = $db->fetch($res[chkproject]);
  
 
 
        $db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
        $res[car] = $db->select_query("SELECT * FROM " . TB_carall . "  where  id=".$arr[chkproject][car_number]."");
  
    $arr[car] = $db->fetch($res[car]);
	
	
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
  
?>
 
 
    <i class="icon-new-uniF10A-9" style="font-size:18px; color:#0072BC"></i>&nbsp;ใช้<?=$arr[type][topic_en]?>เบอร์ <?=$arr[car][car_num]?><b></b><span class="span-detail1" style="font-size:16px;  "> (<?=$arr[admin][company]?>)</span>