 <?
 

 
 
        $db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
        $res[car] = $db->select_query("SELECT car_type,company,car_num FROM " . TB_carall . "  where  id=".$_GET[car]."");
  
    $arr[car] = $db->fetch($res[car]);
	
	
            $res[type]   = $db->select_query("SELECT * FROM " .TB_carall_type." WHERE id='" . $arr[car][car_type] . "' ");
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


 

<script>
 

   swal({
		title: "<font style='font-size:26px'><b> คุณกำลังขับ",
		text: "<div style='margin-top:-10px;'><font style='font-size:30px;color:#333333''><b><?=$arr[type][topic_en]?> เบอร์  <?= $arr[car][car_num]?></b><br><font style='font-size:18px; color:#FF0000'><?=$arr[admin][company]?></div>",
		type: "success",
		showCancelButton: true,
		confirmButtonColor: '#0ACB68',
		confirmButtonText: 'ใช่',
		cancelButtonText: "ไม่ใช่",
		closeOnConfirm: true,
		closeOnCancel: true,
		animation: false,
		html: true
	},
	function(isConfirm){
    if (isConfirm){
	 
 
 
 
 
   var url_checkcar = "go.php?name=load/show/qrcode&file=action&car=<?=$_GET[car];?>&id=<?=$_GET[id];?>"; 
 
  $("#load_save_car_<?=$_GET[id];?>").load(url_checkcar); 
  
 
  
 /// $('#btn_qr<?=$_GET[id];?>').hide();
 $('#btn_complete<?=$_GET[id];?>').show();
 
	//  alert('dd');
    } else {
		
		
      swal("Cancelled", "", "error");
	  
	///   $("#load_data_checkin_popup" ).toggle();
	  
	 document.getElementById("load_work_main_control_scan").innerHTML= ''; 
    }
	
	
	
	});
 
 

</script>