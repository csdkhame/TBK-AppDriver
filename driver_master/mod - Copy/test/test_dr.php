<?php
$db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
        $res[category] = $db->select_query("SELECT * FROM " . TB_carall . "  where company=276 or company=283 or company=284 order by company,car_num asc");
        while ($arr[category] = $db->fetch($res[category])) {
            $res[aum]   = $db->select_query("SELECT * FROM " . TB_carall_type . " WHERE id='" . $arr[category][car_type] . "' ");
            $arr[aum]   = $db->fetch($res[aum]);
            $res[aum]   = $db->select_query("SELECT * FROM " . TB_carall_type . " WHERE id='" . $arr[category][car_type] . "' ");
            $arr[aum]   = $db->fetch($res[aum]);
			
			if($arr[aum][topic_en]=='Car'){
			$arr[aum][topic_en]='รถเก๋ง';
			}
			if($arr[aum][topic_en]=='Van'){
			$arr[aum][topic_en]='รถตู้';
			}
			
			
            //$res[cartype] = $db->select_query("SELECT * FROM ".TB_carall." WHERE id='".$arr[category][car_type]."' ");
            //$arr[cartype] = $db->fetch($res[cartype);
            $res[admin] = $db->select_query("SELECT * FROM " . TB_admin . " WHERE id='" . $arr[category][company] . "' ");
            $arr[admin] = $db->fetch($res[admin]);
           echo $arr[category][car_num] . "  ( " . $arr[aum][topic_en] . " )  -  " . $arr[admin][company]."<br/>";
        }
        $db->closedb();
?>