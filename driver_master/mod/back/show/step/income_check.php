
   
   
   
   
   
    
   <script type="text/javascript" src="js/dialog/main.js"></script>
 
	  
			  
		   
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  <script src="plugins/iCheck/icheck.min.js"></script>
   
<script>
 
 /// check login
 


  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
  
  
 
 
  
  
  
</script>






<?


$db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
 $check_deposit = $db->num_rows('pay_history_recieve',"id","invoice='".$arr[project][invoice]."'  ");
 
$db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
$res[income] = $db->select_query("SELECT * FROM  web_deposit  where  group_vc='".$arr[project][invoice]."'");
$arr[income] = $db->fetch($res[income]);

 
$check_deposit=0;
	
 $check_deposit_status=$arr[income][i_driver];
	


 
?>

 


 <input type="hidden"   value="<? echo $deposit ;?>" id="data_deposit_total" name="data_deposit_total">
 
 <input type="hidden"   value="<? echo $check_deposit ;?>" id="data_deposit_check" name="data_deposit_check">
 
 

<script>
 
$('#check_deposit').on('ifChecked', function(event){
  alert('ยืนยันการเก็บเงิน');
  
  
  $('#check_deposit_icon_no').hide();
    $('#check_deposit_text_no').hide();
	
	  $('#check_deposit_icon_ok').show();
    $('#check_deposit_text_ok').show();
  
      $('#data_deposit_check').val(1);
  
 
  
  
});


$('#check_deposit').on('ifUnchecked', function(event){
  alert('ยกเลิกการเก็บเงิน');
  
 
  
    $('#check_deposit_icon_no').show();
    $('#check_deposit_text_no').show();
	
	  $('#check_deposit_icon_ok').hide();
    $('#check_deposit_text_ok').hide();
  
  
        $('#data_deposit_check').val(0);
  
  
  
  
});






$('#check_lost_2').on('ifChecked', function(event){
  $('#tr_detail').show();
 
  $('#data_lost_check').val(1);
 
  
});


$('#check_lost_1').on('ifChecked', function(event){
  $('#tr_detail').hide();
 
  $('#data_lost_check').val(0);
 
  
});



</script>

  
 
 
 




 
 <? if($check_deposit_status==0 and $deposit > 0){?>
 
<div class="topictransfer1" style="border-radius: 15px ; padding:5px; background-color:#FFF;  border:2px solid #FF0000;  
 box-shadow: 0 0  0px   #E8E6E6; margin-top:5px; display:nones; padding-bottom: 5px; padding-left:5px; margin-bottom:20px; "  id="popup_deposit_no_<?=$arr[project][id]?>"> 
 <table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="30"><span style="width:30px; height:40px; ">
      <input name="check_deposit"  type="checkbox" id="check_deposit" onclick="check_use_car();" value="<? echo $check_deposit ;?>"   data-off-text="ชำรุด" data-on-text="สมบูรณ์">
    </span></td>
    <td style="font-size:  20px; ">เก็บเงินแขก <b>
	
	<? echo number_format( $deposit , 2 );?></b>
	
	
	&nbsp;บาท</td>
  </tr>
  <tr>
    <td> 
    
    
    
    
    
    
      <div style=" display:nones " id="check_deposit_icon_no">
    
    <i class="fa fa-refresh fa-spin" style="font-size: 22px; color:#FF0000"></i> 
    
    </div>
    
    
  <div style=" display:none " id="check_deposit_icon_ok">
 
    <i class="fa fa fa-check-circle" style="font-size: 22px; color:#17B3B2"></i> 
    
    </div>
    
    
    </td>
    <td >  
    
    <div style="font-size: 20px;color:#FF0000;display:nones" id="check_deposit_text_no">คุณยังไม่ได้เก็บเงินจากแขก</div>
    
    
    
    
    
    <div style="font-size: 20px;display:none; color:#17B3B2"  id="check_deposit_text_ok">ยืนยันการเก็บเงินจากแขก</div></td>
  </tr>
</table>
</div>

<? } ?>
 



<? if($check_deposit_status==1){?>
<div class="topictransfer1" style="border-radius: 25px ; padding:5px; background-color:#FFF;  border:2px solid #17B3B2;  
 box-shadow: 0 0  0px   #E8E6E6; margin-top:15px; display:nones; padding-bottom: 5px; padding-left:5px; font-size: 22px ; margin-bottom:20px; " id="popup_deposit_ok_<?=$arr[project][id]?>">    <i class="fa fa fa-check-circle" style="font-size: 20px; color:#17B3B2"></i>&nbsp;เก็บเงิน <span class="span-detail1" style="font-size:20px;  "><b>
   <? echo number_format( $deposit , 2 );?>
&nbsp;บาท  แล้ว</b></span>

<br>


<div>

<font color="#FF0000" style="font-size:20px; font-weight:normal  ">กรุณาตรวจสอบจำนวนเงินทั้งหมดที่เก็บจากแขก ว่าถูกต้องหรือไม่</div>

</div>
 
  <? } ?> 
   
   
   
   
   
   
   