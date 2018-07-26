<?php
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
//mysql_query("SET NAMES uft8"); 
//		mysql_query("SET character_set_results=uft-8");
 $res[repair] = $db->select_query("SELECT * FROM  driver_send_repair ");

        while ($arr[repair] = $db->fetch($res[repair])) { 
        
        	echo $arr[repair][id]." -> ".$arr[repair][detail]."<br/>";
        	
        }
        	
?>