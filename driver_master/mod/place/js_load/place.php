                                                   
<?php

$_GET[set]='map';

$id = $_GET['id'];
$pro = array();
$db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
$res[pro] = $db->select_query("SELECT * FROM web_transferplace_new  where  transferplace_type=" . $id . " group by pro  ");
while ($arr[pro] = $db->fetch($res[pro])) {
    $pro[] = $arr[pro];
}
///////////// Title
if ($id == '98') {
    $s_title = "ปั้มน้ำมัน";
} elseif ($id == '100') {
    $s_title = "ปั้มแก๊ส";
} else {
    $s_title = "อู่ซ่อมบำรุงรถ";
}

//////////// Get dv province
$db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
    $res[driver] = $db->select_query("SELECT company FROM web_driver  where  id=" . $_SESSION['data_user_id'] . " ");
    $arr[driver] = $db->fetch($res[driver]);
    
    $db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
    $res[province_id] = $db->select_query("SELECT province_id FROM web_admin  where  id=" . $arr[driver]['company'] . " ");
    $arr[province_id] = $db->fetch($res[province_id]);
if ($_GET[pro] > 0) {
    $sql_pro = " and pro = '" . $_GET[pro] . "' ";
} else {
    $sql_pro = " and pro = '" . $arr[province_id][province_id] . "' ";
}

$res[province_dv] = $db->select_query("SELECT name FROM web_province  where  id=" . $arr[province_id][province_id] . " ");
$arr[province_dv] = $db->fetch($res[province_dv]);
$place = array();
$db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
$res[place] = $db->select_query("SELECT * FROM web_transferplace_new  where  transferplace_type=" . $id . " $sql_pro ");
while ($arr[place] = $db->fetch($res[place])) {
    $place[] = $arr[place];
}
?>
 


<?php
        foreach ($place as $data) {
          $db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
          $res[province] = $db->select_query("SELECT name FROM web_province  where  id=" . $data[pro] . " ");
          $arr[province] = $db->fetch($res[province]);
          $db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
          $res[amphur] = $db->select_query("SELECT name FROM web_amphur  where  id=" . $data[aum] . " ");
          $arr[amphur] = $db->fetch($res[amphur]);   
            ?>
            <div class="div-all-checkin-step" >
                <div class="timeline-body " style="padding-top:5px; padding-bottom:5px;  ">
                    <div>              
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tbody>
                                <tr>
                                                                              <td class="td-text"><b> <?=$data[topic];?></td>
                                    </tr>
                                    <tr>
                                    	<td class="td-text" style="font-size:16px"><font color="#666666"> <?=$arr[amphur][name];?> | <?=$arr[province][name];?></font></td>
                                    </tr>
                                </tbody>
                                </table>

                        <div> 
                            <div style="background-color:#FFF; margin-top:5px; margin-bottom:5px; padding: 2px 0px 2px 0px;border-radius: 20px;">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tbody><tr>
                                            <td width="50%">
                                            <?php
                                            if($data[map] != ''){
												
												
											 include "mod/place/place/popup/map_pickup.php";
												
												
                                            ?>
                                           
                                                             <? 
								 $arr[place][id]=$data[id];
								 $arr[place][lat]=$data[lat];
								 $arr[place][lng]=$data[lng];
								 
								 
								 
								 
								 $arr[place][name_pickup_place] =$data[topic];
								  $arr[place][name_pickup_place_area] =$arr[province][name];
								   $arr[place][name_pickup_place_province] =$arr[amphur][name];
								 
								 
								 
								 ?>
                                            
                                             <script>
 
$("#icon_timeline_show_map_pickup_<? echo $arr[place][id];?>_<?=$_GET[set]?>").click(function(){   

 
 
  $("#alert_timeline_show_map_pickup_<? echo $arr[place][id];?>_<?=$_GET[set]?>" ).toggle();
 
  
 	});
 
 
 
					
 </script> 
                                         
                                         
  <script>
 $("#close_alert_timeline_show_map_pickup_<? echo $arr[place][id];?>_<?=$_GET[set]?>").click(function(){   
 
 $( "#alert_timeline_show_map_pickup_<? echo $arr[place][id];?>_<?=$_GET[set]?>" ).hide();
 
  });

</script>
                                            

                                            
                                            
                                                <div class="div-all-check-place">                           
                                                    <a id="icon_timeline_show_map_pickup_<? echo $arr[place][id];?>_<?=$_GET[set]?>">
                                                        <img src="images/icon/map/map.png" align="bottom" width="30"><b>&nbsp;แผนที่นำทาง </b></a><b>
                                                    </b>
                                                    </div>
                                                <?php } ?>
                                                </td>
                                            <td width="50%" style="padding-left:10px; ">
                                            <?php
                                            if($data[phone] != ''){
                                            ?>
                                                <div class="div-all-check-place"> 		   
                                                    <a href="tel:<?=$data[phone];?>" target="_blank" class="test" data-toggle="tooltip" title="โทรออก"> <img src="images/icon/map/phone.png" align="bottom" width="30"> <b> โทรศัพท์   </b></a>
                                                    </div>
                                                  <?php } ?>
                                                  </td>
                                        </tr>
                                    </tbody></table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>