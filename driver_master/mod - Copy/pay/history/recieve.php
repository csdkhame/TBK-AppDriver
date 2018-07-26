<style>
.div-box-pay-detail {
border-radius: 15px ; padding:8px; background-color:#FFF;  border:2px solid #dadada; margin-bottom:0px; 
 box-shadow: 0 0  10px  #E8E6E6; margin-top:8px; display:nones;  
 
}


</style>








<link rel="stylesheet" type="text/css" href="calendar/css/smoothness/main.css"> 
<script src="js/jquery-main.js"></script> 
<script   src="calendar/js/th.js"></script>
 
<script type="text/javascript">
$(document).ready(function() {
    $("#datepicker").datepicker();

// $('#date_report').datepick({altField: '#star_cal' 	, dateFormat: 'yyyy-mm-dd' 	, showTrigger: '#calImgInx' }); 

$("#btn_calendar").click(function(){
	
 
 
 $('#date_report').datepicker('show'); 

});

 });


 
  $(function(){
 
	$("#date_report").datepicker({ dateFormat: 'yy-mm-dd',
	dateFormat: 'yy-mm-dd',
	todayHighlight: true,
	minDate: new Date('2016-08-01'), //
	maxDate: '+1Y',
	//showOn: "both", 
	// buttonImage: 'calendar/dateselect.gif',
	//buttonText: "<i class='fa fa-calendar'></i>",
	// buttonImageOnly: true ,    
  numberOfMonths: 1,
  onSelect: function(dateText, inst) {
  
//$('.loader').show();
 var date_report = $("#date_report").val();
	//alert(date_report);
	
 
		

    }
	 
	 }
 
	);
 
});

 

/*
var url_place_th = "go.php?name=load/all&file=all&server=th&day="+$("#date_report").val()+"";
	$('#load_th').show();
	$('#load_th').load('load/page/loading.php');
	$('#load_th').load(url_place_th); 
	/*
	//// cn
		var url_place_cn = "go.php?name=load/all&file=all&server=cn&day="+$("#date_report").val()+"";
	$('#load_cn').show();
	$('#load_cn').load('load/page/loading.php');
	$('#load_cn').load(url_place_cn); 
	//$('.loader').show();


*/

 
 
        
</script> 
 

<style type="text/css">
<!--
.topicname { padding-top:10px; padding-left:0px; padding-bottom:5px; font-size:18px; font-weight:bold; color: #666666 ; text-align:left;  
 
}
 .pad_top_5 { padding-top:5px;  
 
 }

 
-->
</style>  
  <link rel="stylesheet" href="plugins/select2/select2.min.css">
  
 <div class="box box-default">

 <!--ss-->
 
 
 
   <div class="box-header with-border">
          <h2 class="box-title"><span class="font_26"><b>รายรับคนขับรถ</b></span></h2>
 
   </div>
    <!--แสดงผล-->
    
    
    
	
    <div class="box-body" >
    
    
    <label class="font_20"><i class="fa fa-calendar" style="font-size: 20px; color:#999999"></i> เลือกวันที่</label>

                <div class="input-group date">
   
                  <input type="text" class="form-control pull-right" value="<?=date('Y-m-d');?>"  name="date_report" id="date_report"  readonly="true" style="background-color:#FFFFFF; height:40px; font-size:24px ">               <div class="input-group-addon"  id="btn_calendar" style="cursor:pointer ">
                     <i class="fa fa-calendar" style="font-size:24px; "></i> 
                  </div>
                </div>
        
 
<!--แสดงผล-->
<div id="load_phone_data"  style=" margin-top:10px; ">


<table width="100%" border="0" cellspacing="2" cellpadding="2" class="div-box-pay-detail">
  <tbody>
    <tr>
      <td width="120" class="font_16"><strong>วันที่ / เวลา</strong></td>
      <td class="font_16"> 2018-03-24 &nbsp;15.30 น.</td>
    </tr>
    <tr>
      <td width="120" class="font_16"><strong>เลขวอเชอร์</strong></td>
      <td class="font_16"><b>7087512&nbsp;</td>
    </tr>
    <tr>
      <td class="font_16"><strong>ประเภท</strong></td>
      <td class="font_16">ฝากเก็บเงินแขก</td>
    </tr>
    
    
    <tr>
      <td class="font_16"><strong>จำนวนเงิน</strong></td>
      <td class="font_20"><b>1,500.00 </b> <span class="font_14">บาท</span></td>
    </tr>
    <tr>
      <td class="font_16"><strong>คนขับรับเงิน</strong></td>
      <td class="font_16">    <i class="fa fa fa-check-circle" style="font-size: 16px; color:#17B3B2"></i> <font color="#17B3B2"> รับเงินแล้ว </td>
    </tr>
    <tr>
      <td class="font_16"><strong>บัญชีรับเงิน</strong></td>
      <td class="font_16">    <i class="fa fa-refresh fa-spin" style="font-size: 16px; color:#FF0000"></i><font color="#FF0000"> รอการยืนยัน </td>
    </tr>
  </tbody>
</table>

















 <? ///  include "mod/load/phone/driver.php" ;?></div>
 
	
	
  <!----- ปิด row-->
   
  </div>
    </div>
	  </div>
	   
	   
 

 
 
	   