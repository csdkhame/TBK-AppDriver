<?

if($_GET[price]){
 
 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
$db->add_db('driver_send_new_car_price',array(
 
			"drivername"=>"".$driver_id."",
			"price"=>"$_GET[price]",  
			
			"transfer_id"=>"$_GET[id]",  
		 
			"post_date"=>"".TIMESTAMP."",

			"update_date"=>"".TIMESTAMP.""

		));
        $db->closedb();
		
		


?>

<script>

 swal({
  position: 'top-right',
  type: 'success',
  title: 'บันทึกข้อมูล',
  text: "การแจ้งค่าเที่ยวสำเร็จ",
  showConfirmButton: false,
  timer: 2000
})
</script>


<? } ?>


