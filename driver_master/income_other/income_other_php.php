<?php 
require_once("../includes/class.mysql.php");
$db = New DB();
define("DB_NAME_DATA","admin_data");
define("DB_USERNAME","admin_MANbooking");
define("DB_PASSWORD","252631MANbooking");
$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);

if($_GET[action]=="add_type"){
	
	$data[topic] = $_POST[name];
	$data[driver_percent] = $_POST[dv_percent];
	$data[company_percent] = $_POST[com_percent];
	$data[posted] = "";
	$data[post_date] = time();
	$data[last_update] = time();
	header('Content-Type: application/json');
	$data[result] = $db->add_db("income_other_type",$data);
	echo json_encode($data);
	
	
}
if($_GET[action]=="edit_type"){
	$data[topic] = $_POST[name];
	$data[driver_percent] = $_POST[dv_percent];
	$data[company_percent] = $_POST[com_percent];
	$data[posted] = "";
//	$data[post_date] = time();
	$data[last_update] = time();
	header('Content-Type: application/json');
	$data[result] = $db->update_db("income_other_type",$data,"id = '".$_POST[edit_id]."' ");
	echo json_encode($data);
}
if($_GET[action]=="change_status_type"){
	$data[status] = $_POST[status];
	$data[last_update] = time();
	header('Content-Type: application/json');
	$data[result] = $db->update_db("income_other_type",$data,"id = '".$_POST[id]."' ");
	$data[id] = $_POST[id];
	echo json_encode($data);
}
if($_GET[action]=="save_list"){
	$data[type] = $_POST[type];
	$data[driver_balance] = $_POST[driver_balance];
	$data[balance] = $_POST[balance];
	$data[company_balance] = $_POST[company_balance];
	$data[status] = 1;
	$data[posted] =	$_POST[posted];
	$data[transfer_id] = $_POST[transfer_id];
	$data[post_date] = time();
	$data[last_update] = time();
	header('Content-Type: application/json');
	$data[result] = $db->add_db("income_other_list",$data);
	echo json_encode($data);
}

if($_GET[query]=="tr_component_type"){ ?>

    <?php
    $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
    $res[type] = $db->select_query("select * from income_other_type  where id>0");
	while($arr[type] = $db->fetch($res[type])){
		
     ?>
      <tr>
        <td><?=$arr[type][id];?></td>
        <td><?=$arr[type][topic];?></td>
        <td><?=$arr[type][driver_percent];?></td>
        <td><?=$arr[type][company_percent];?></td>
        <td><button class="btn btn-info" style="margin: 0px 5px;" onclick="edit('<?=$arr[type][id];?>');">แก้ไข</button>
        	<?php 
        	if($arr[type][status]==0){ ?>
				<button  style="margin: 0px 5px;" class="btn btn-warning" onclick="changeStatus('<?=$arr[type][id];?>',1);">เปิดใช้</button>	
			<? }
			else{ ?>
				<button  style="margin: 0px 5px;" class="btn btn-danger" onclick="changeStatus('<?=$arr[type][id];?>',0);">ปิดใช้</button>
			<? }
        	?>
        </td>
      </tr>
      <? 
	} ?>

<? }
if($_GET[query]=="data_type"){
	$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
    $res[type] = $db->select_query("select * from income_other_type  where id= '".$_POST[id]."' ");
	$arr[type] = $db->fetch($res[type]);
	header('Content-Type: application/json');
	echo json_encode($arr[type]);
}
?>