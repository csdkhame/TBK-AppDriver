<!DOCTYPE html>
<html lang="en">
<head>
  <title>T-Booking</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
#snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
}

#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}
</style>
</head>
<?php 
require_once("../includes/class.mysql.php");
$db = New DB();
define("DB_NAME_DATA","admin_data");
define("DB_USERNAME","admin_MANbooking");
define("DB_PASSWORD","252631MANbooking");
?>
<body>

<div class="container">
<div class="col-md-6">
  <h2>ประเภทรายได้อื่นๆ</h2>
  <form id="form_add">
    <div class="form-group">
      <label for="name">ชื่อ</label>
      <input type="name" class="form-control" id="name" name="name" style="width: 230px;">
    </div>
    <div class="form-group">
      <label for="dv_percent">เปอร์เซ็นคนขับรถ</label>
      <input type="number" class="form-control" id="dv_percent" name="dv_percent" style="width: 80px;" value="50"><span style="font-weight: 800;position: absolute;left: 110px;margin-top: -28px;">%</span>
    </div>
    <div class="form-group">
      <label for="com_percent">เปอร์เซ็นบริษัท</label>
      <input type="number" class="form-control" id="com_percent" name="com_percent" style="width: 80px;" value="50"><span style="font-weight: 800;position: absolute;left: 110px;margin-top: -28px;">%</span>
    </div>
  	<input type="hidden" id="id_edit" value="0" name="id_edit" />
    <button type="submit" class="btn btn-success"> Save </button>
    <button type="reset" class="btn btn-danger" onclick="document.getElementById('form_add').reset();"> Reset </button>
  </form>
</div>

<div class="col-md-6">
<h2>ตารางประเภท</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>ชื่อ</th>
        <th>เปอร์เซ็นคนขับ</th>
        <th>เปอร์เซ็นบริษัท</th>
        <th></th>
      </tr>
    </thead>
    <tbody id="type_data">
    
    </tbody>
  </table>
  </div>

</div>

<div id="snackbar">Some text some message..</div>
<script>
	LoadData();
$( "#form_add" ).submit(function( event ) {
 	
 	console.log($(this).serialize())
 	if($().val()>0){
		$.post("income_other_php.php?action=edit_type",$(this).serialize(),function(data){
	 		console.log(data);
	 		LoadData();
	 		document.getElementById("form_add").reset();
	 		toast("แก้ไขข้อมูลสำเร็จ");
	 	});
	}else{
		$.post("income_other_php.php?action=add_type",$(this).serialize(),function(data){
	 		console.log(data);
	 		LoadData();
	 		toast("เพิ่มข้อมูลสำเร็จ");
	 	});
	}
 	
  	event.preventDefault();
});

function LoadData(){
	$.post("income_other_php.php?query=tr_component_type",function(html){
 		$('#type_data').html(html);
 	});
}

function edit(id){
	$.post("income_other_php.php?query=data_type",{ id:id },function(data){
 		console.log(data)
 		$('#name').val(data.topic);
 		$('#dv_percent').val(data.driver_percent)
 		$('#com_percent').val(data.company_percent)
 		$('#id_edit').val(data.id)
		
 	});
}

function changeStatus(id,status){
	if(status==1){
		var txt = "เปิดใช้งานแล้ว";
	}else{
		var txt = "ปิดใช้งานแล้ว";
	}
	$.post("income_other_php.php?action=change_status_type",{ id:id, status:status },function(data){
 		console.log(data);
 		LoadData();
 		toast(txt);
 	});
}

function toast(txt) {
	$('#snackbar').text(txt);
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
/*$('#dv_percent').change(function(){

	var dv_val = $(this).val();
	var com_val = $("#com_percent").val();
	var sum_val = parseInt(dv_val) + parseInt(com_val);
		console.log(sum_val);
	if(sum_val>100){
		var diff_val = parseInt(dv_val) - parseInt(com_val);
		console.log(diff_val)
//		console.log(diff_val+" = "+(parseInt(com_val)-diff_val))
		$("#com_percent").val(50-diff_val); 
//		$("#com_percent").val(diff_val); 
	}
});*/
</script>
</body>
</html>
