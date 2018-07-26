<style type="text/css">
    <!--
    .topicname { padding-top:10px; padding-left:0px; padding-bottom:5px; font-size:18px; font-weight:bold; color: #666666 ; text-align:left;  
    }
    -->
</style>
<style>
    .div-all-check-phone{
        padding:5px;   border-radius:  30px; border: 1px solid #3C8DBC;background-color:#FFFFFF;     margin-bottom: 5px; box-shadow: 0px  0px 10px #DADADA; width:100%  ; margin-top:10px; font-size:40px;  
    }
    .div-all-checkin-step {
    padding: 5px;
    border-radius: 15px;
    border: 2px solid #ddd;
    background-color: #FFFFFF;
    margin-bottom: 5px;
    box-shadow: 0px 0px 10px #DADADA;
}
</style>
                                                   
<?php



$id = $_GET['id'];
$pro = array();
$db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
$res[pro] = $db->select_query("SELECT pro FROM web_transferplace_new  where  transferplace_type=" . $id . " group by pro  ");
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
<div class="box box-default">
    <div class="box-header with-border">
        <h2 class="box-title"><span class="font_28"><b><?= $s_title; ?></b></span></h2>
    </div>
    <div class="box-header with-border">
        <select id="place_pro" class="form-control">
            <option value="<?=$arr[province_id][province_id];?>">-- <?=$arr[province_dv][name];?> --</option>
            <?php
            foreach ($pro as $data) {
                $db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
                $res[province] = $db->select_query("SELECT name FROM web_province  where  id=" . $data[pro] . " ");
                $arr[province] = $db->fetch($res[province]);
                if ($_GET[pro] == $data['pro']) {
                    $s_select = ' selected="selected" ';
                }else{
									$s_select = '';
								}
                if($data[pro] != $arr[province_id][province_id]){
									
								
                ?>
                <option value="<?= $data['pro']; ?>" <?= $s_select; ?>><?= $arr[province][name]; ?></option>
                <?php
                }
            }
            ?>
        </select>
    </div>
    <div class="box-body"  style="margin-top:-10px; padding 0px">
        <!-- iCheck -->
        <div id="load_place" align="center">
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
                                        <td class="td-text"><?=$data[topic];?></td>
                                    </tr>
                                    <tr>
                                    	<td class="td-text"><font color="#666666"> <?=$arr[amphur][name];?> | <?=$arr[province][name];?></font></td>
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
                                            ?>
                                                <div class="div-all-check-place">                           
                                                    <a title="แสดงแผนที่นำทาง" href="<?=$data[map];?>" target="_blank">
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
        </div>


        <!----- ปิด row-->
    </div>
</div>


<script>
    $('#place_pro').change(function () {
        var pro = $(this).val();
        var id = '<?= $_GET[id]; ?>';
        var url = 'go.php?name=place/js_load&file=place&id=' + id + '&pro=' + pro;
        //location.replace('index.php?name=place&file=place&id=' + id + '&pro=' + pro);
        var load = '<div class="inner-loading" align="center"><center><span class="navload"><i class="fa fa-circle-o-notch fa-spin 4x" style="font-size:40px;   margin-top:10px "></i></span></center><div style="font-size:14px; color:#333333; font-weight:normal;  margin-top:10px "><center><span id="navload_topic"> โหลดข้อมูล</span></center></div></div>';
        $('#load_place').html(load);
        $('#load_place').load(url);
    });
</script> 