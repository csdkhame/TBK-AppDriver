 
 
<?
 
 
/////   ส่งงานให้คนอื่น
$driver_chat_load = new DOMDocument(); 
 @$driver_chat_load->load( '../data/xml/driver/work_change/send/'.$driver_id .'.xml' ); 
 
$driver_chat_xml = $driver_chat_load->getElementsByTagName("online" ); 
foreach( $driver_chat_xml as $load) 
{ 

$day=$load->getElementsByTagName('day')->item(0)->nodeValue;
 $status=$load->getElementsByTagName('status')->item(0)->nodeValue;
$type=$load->getElementsByTagName('type')->item(0)->nodeValue;
$from=$load->getElementsByTagName('from')->item(0)->nodeValue;
$to=$load->getElementsByTagName('to')->item(0)->nodeValue;
 
 $time=$load->getElementsByTagName('time')->item(0)->nodeValue;
 
$arr[project][id]=$load->getElementsByTagName('id')->item(0)->nodeValue;
  
 
	  }
	  
	  
	  
//// เช็คเวลาตอบรับ	  
	  
$now=time();

$time_reply=$now-$time;

$time_limit= 300-$time_reply;

$time_limit_per=$time_limit/3;
 
 $time_open_h= date('i:s',$time_limit);
	  
 ?>
 
 
 
 
 <? 
 
 ///// ส่งงานใหม่ ยังไม่หมดเวลา
 
 if($time_limit>0 and $status=='new'){ 
 
 ?>
 
 
 

 

<? } ?>
 
 
 
<?

///// ส่งงานใหม่หมดเวลา

 if($time_limit < 1  and $status=='new' ){ 
 
  ?> 
  
<script>

 
 /////////////
 
 
	   swal({
		title: "<font style='font-size:28px'>หมดเวลาตอบรับ<b> ",
		text: "การส่งงานต่อให้คนอื่น",
		type: "error",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'รับทราบ',
		cancelButtonText: "ส่งใหม่",
		closeOnConfirm: true,
		closeOnCancel: true,
		html: true
	},
	function(isConfirm){
    if (isConfirm){
	 
	

 
 
$( "#load_data_send_work_show" ).hide();
   
 
 $("#check_data_status_send_new_work" ).val(0);
 $("#check_data_status_send_new_work_id" ).val(0);
 
 
 /*
 
 
 
	
url=url+"&drivername="+document.getElementById('drivername<? echo $arr[project][id];?>').value;
url=url+"&old_drivername="+document.getElementById('old_drivername<? echo $arr[project][id];?>').value;
 
  */
    
   
	//  alert('dd');
    } else {
		
		
 $('#change_new_work_<?=$arr[project][id];?>').click();
 
 
 ///alert(0);
 	
     //  swal("Cancelled", "", "error");
    }
	});
 
 
 
</script>
  
  
  <?
 
 //@unlink("../data/xml/driver/work_change/send/".$driver_id.".xml");
 
  
   } ?>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    
<?
 
///// ถูกยกเลิก

 if($time_limit < 1  and $status=='cancel' ){ 
 
  ?> 
  
<script>



 /*

 $("#time_change_new_work_<?=$arr[project][id];?>" ).hide();
  
 
 $("#tr_confirm_start_work_<?=$arr[project][id];?>" ).show();
 
 
 $('#change_new_work_<?=$arr[project][id];?>').removeClass('bg-red');


 $('#change_new_work_<?=$arr[project][id];?>').addClass('bg-green');


$('#change_new_work_text_<?=$arr[project][id];?>').html('ส่งงานให้คนอื่น');

 $("#load_send_data_work<?=$arr[project][id];?>").html('');
 
 $('#btn_change_new_work_<?=$arr[project][id];?>').removeClass('no-click');
 
 
 $('#main_edit_work_<?=$arr[project][id];?>').removeClass('tab_alert');
 
 
 */
 
 /////////////
 
 
	   swal({
		title: "<font style='font-size:28px'>การส่งต่องาน<b> ",
		text: "ถูกปฏิเสธโดยผู้รับงาน",
		type: "error",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'รับทราบ',
		cancelButtonText: "ส่งใหม่",
		closeOnConfirm: true,
		closeOnCancel: true,
		html: true
	},
	function(isConfirm){
    if (isConfirm){
	 
	

 /*
	
url=url+"&drivername="+document.getElementById('drivername<? echo $arr[project][id];?>').value;
url=url+"&old_drivername="+document.getElementById('old_drivername<? echo $arr[project][id];?>').value;
 
  */
    
   
	//  alert('dd');
    } else {
		
		
 $('#change_new_work_<?=$arr[project][id];?>').click();
 
 
 ///alert(0);
 	
     //  swal("Cancelled", "", "error");
    }
	});
 
 
 
</script>
  
  
  <?
 
 //@unlink("../data/xml/driver/work_change/send/".$driver_id.".xml");
 
  
   } ?>
   
   
   
   
   
   
   
   
   
   
   
  
      
<?
 
///// ถูกยกเลิก

 if($status=='confirm' ){ 
 
  ?> 
  
<script>

 
/*
 $("#time_change_new_work_<?=$arr[project][id];?>" ).hide();
  
 
 $("#tr_confirm_start_work_<?=$arr[project][id];?>" ).show();
 
 
 $('#change_new_work_<?=$arr[project][id];?>').removeClass('bg-red');


 $('#change_new_work_<?=$arr[project][id];?>').addClass('bg-green');


$('#change_new_work_text_<?=$arr[project][id];?>').html('ส่งงานให้คนอื่น');

 $("#load_send_data_work<?=$arr[project][id];?>").html('');
 
 $('#btn_change_new_work_<?=$arr[project][id];?>').removeClass('no-click');
 
 
 $('#main_edit_work_<?=$arr[project][id];?>').removeClass('tab_alert');
 
 
 */
 
 /////////////
 
 
	   swal({
		title: "<font style='font-size:28px'>การส่งต่องานสำเร็จ<b> ",
		text: "กรุณาตรวจสอบงานของคุณ",
		type: "info",
		//showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'ดูงานทั้งหมด',
		cancelButtonText: "ยกเลิก",
		closeOnConfirm: true,
		closeOnCancel: true,
		html: true
	},
	function(isConfirm){
    if (isConfirm){
	 
	
  window.location.href = "index.php?name=all"; //will redirect to your blog page (an ex: blog.html
	
 
    
   
	//  alert('dd');
    } else {
		
	
  window.location.href = "index.php?name=all"; //will redirect to your blog page (an ex: blog.html
		
 //$('#change_new_work_<?=$arr[project][id];?>').click();
 
 
 ///alert(0);
 	
     //  swal("Cancelled", "", "error");
    }
	});
 
 
 
</script>
  
  
  <?
 
 ///@unlink("../data/xml/driver/work_change/send/".$driver_id.".xml");
 
  
   } ?>