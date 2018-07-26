
 
 <?
 
 ///$arr[web_driver][work_stop]=5;
 
  $driver_work_stop=$arr[web_driver][work_stop];
 
 
 
 
 
 
 
 	 
	 
$thai_day =array("","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์","อาทิตย์");



function getWeekday($date) {
    return date('w', strtotime($date));
}

	 
	
 if($_GET[day] == ''){
									$date_today = date('Y-m-d');
 }else{
									$date_today = $_GET[day];
 }
								
 						
 
$name_m = date('m', strtotime($date_today));

$name_y = date('Y', strtotime($date_today));
								
								
								 
								
								
 $no    = "$name_y-$name_m";
 
 $nowday = getWeekday($date_today); // returns 4 
	 
	 
	 ?>
     
     
     

							
							<? 			  
											  
											  
  $thai_date_return= $thai_day[$arr[web_driver][work_stop]];  
?>

                              
                              
                           
                              <?
							  
 $start=$driver_work_stop-date('N');

if( $start<0){
	
 $start=$start+7;
	
}



  $date_finish = date('Y-m-d',strtotime("+".$start." day")); 
 
 $date_y = date('Y',strtotime("+".$start." day")); 
 $date_m = date('m',strtotime("+".$start." day")); 
 $date_d = date('d',strtotime("+".$start." day")); 
 ///


$ot_day = date('Y-m-d',strtotime("+$start day")); 
							  
							  ?>
 

 
 <div style="margin-top:5px; margin-bottom:10px; padding:10px;

   border:0px solid #999999; background-color:#FFFFFF; border-radius: 25px;
   box-shadow: 0px 1px 5px #DADADA; font-size:16px;  ">  <center>
   
   
   วันหยุดของคุณคือวัน<? if($thai_date_return<>""){?><?=$thai_date_return?>
			                  <? } ?>
			                  <? if($thai_date_return==""){?>
			                  <img src="iconstatus/cir/no.png"  border="0" align="absmiddle" />
			                  <? } ?>
   
   
 
   
    <? if($start==0){?>
                              
                          <font color="#FF0000" >   (วันนี้)
                              
                              <? } ?>
                              
                                        <? if($start > 0){?>
                              
                            <font color="#666666" >  (เหลือ <?=$start?> วัน)
                              
                              <? } ?>
                              
 
 <div style="display:nones; margin-top:-10px;" class="show_ot_status">
 
 
 
 
 <span class="font_18" style="color:#000000"><br>
<b>
 คุณต้องการทำโอทีหรือไม่</b></span>
 
 
 
   <table width="100%" border="0" cellspacing="5" cellpadding="5">
                                <tbody>
                                  <tr>
                                    <td width="50%"><button type="button" class="btn btn-modal-no" data-dismiss="modal" data-backdrop="static" style="width:100%; background-color:#FF0000; color:#FFFFFF"  id="btn_no_work_ot">ไม่ต้องการ</button></td>
                                    <td width="50%"><button type="button" class="btn btn-modal-ok"   data-dismiss="modal" data-backdrop="static" id="btn_confirm_work_ot"  style="width:100%; color:#FFFFFF" >ต้องการ</button></td>
                                  </tr>
                                </tbody>
   </table>
   
 
    </div>
<div style="text-align:center; padding:5px; border-radius:25px; margin-top:10px; margin-bottom:10px;

   border: 2px solid #DADADA; background-color:#FFFFFF; font-size:18px " id="load_status_ot">สถานะยังไม่มีการแจ้งความต้องการ</div>
   
   
   
   
   <script>
   
   
    $( document ).ready(function() {
    var url_ot= "go.php?name=index/ot&file=status&drivername=<?=$driver_id;?>&day=<?=$ot_day?>";   
  
 $("#load_status_ot").load(url_ot);
 
	});
   
   </script>
   
   
   

 
 
 
 
 
 
 
 
 </div>
 
 
 
 
 
 
 
 
 
 
<script>

$('#btn_confirm_work_ot').click(function(){  


   swal({
		title: "<font style='font-size:24px'><b>คุณต้องการทำโอทีวันที่",
		text: "<div style='margin-top:-10px;'><font style='font-size:30px;color:#333333''><b><?=$ot_day?> </b><br><font style='font-size:18px; color:#FF0000'><?=$arr[admin][company]?></div>",
		type: "success",
		showCancelButton: true,
		confirmButtonColor: '#0ACB68',
		confirmButtonText: 'ใช่',
		cancelButtonText: "ไม่ใช่",
		closeOnConfirm: true,
		closeOnCancel: true,
		html: true
	},
	function(isConfirm){
    if (isConfirm){
	 
 
 
 
 
   var url_checkcar = "go.php?name=index/ot&file=action&drivername=<?=$driver_id;?>&day=<?=$ot_day?>&status=2"; 
 
  $("#load_save_ot_data").load(url_checkcar); 
  
  
  
  
  
  
  
  
   setTimeout(function () {
 
  
var url_ot= "go.php?name=index/ot&file=status&drivername=<?=$driver_id;?>&day=<?=$ot_day?>";   
  
 $("#load_status_ot").load(url_ot);
  
 
 }, 1500); //w
 
  
 
  
  
 
  
 /// $('#btn_qr<?=$_GET[id];?>').hide();
/// $('#btn_complete<?=$_GET[id];?>').show();
 
	//  alert('dd');
    } else {
		
		
      swal("Cancelled", "", "error");
	  
	///   $("#load_data_checkin_popup" ).toggle();
	  
	/// document.getElementById("load_work_main_control_scan").innerHTML= ''; 
    }
	
	
	
	});
 
	});

</script>













<script>

$('#btn_no_work_ot').click(function(){  


   swal({
		title: "<font style='font-size:24px'><b>คุณไม่ต้องการทำโอทีวันที่",
		text: "<div style='margin-top:-10px;'><font style='font-size:30px;color:#333333''><b><?=$ot_day?> </b><br><font style='font-size:18px; color:#FF0000'><?=$arr[admin][company]?></div>",
		type: "error",
		showCancelButton: true,
		confirmButtonColor: '#FF0000',
		confirmButtonText: 'ใช่',
		cancelButtonText: "ไม่ใช่",
		closeOnConfirm: true,
		closeOnCancel: true,
		html: true
	},
	function(isConfirm){
    if (isConfirm){
	 
 
 
   var url_checkcar = "go.php?name=index/ot&file=action&drivername=<?=$driver_id;?>&day=<?=$ot_day?>&status=1"; 
 
  $("#load_save_ot_data").load(url_checkcar); 
  
 
  
  
  
  
   setTimeout(function () {
 
  
  
var url_ot= "go.php?name=index/ot&file=status&drivername=<?=$driver_id;?>&day=<?=$ot_day?>";   
  
 $("#load_status_ot").load(url_ot);
  
 
 }, 1500); //w
 
  
 
  
 /// $('#btn_qr<?=$_GET[id];?>').hide();
/// $('#btn_complete<?=$_GET[id];?>').show();
 
	//  alert('dd');
    } else {
		
		
      swal("Cancelled", "", "error");
	  
	///   $("#load_data_checkin_popup" ).toggle();
	  
	/// document.getElementById("load_work_main_control_scan").innerHTML= ''; 
    }
	
	
	
	});
 
	});

</script>


 


<div id="load_save_ot_data" style="display:none"></div>
  