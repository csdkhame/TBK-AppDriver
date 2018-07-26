 <style>
 
.outer-loading-mod {
    position: fixed; margin-left: 0px; margin-top: 0px; display:table; top:0; left:0;  
    width: 100%; /* This could be ANY width */
    height: 100%; /* This could be ANY height */
   z-index:9999; background-color: rgba(255, 255, 255, 0.9) !important;
 
}

.inner-loading {
    display: table-cell;
    vertical-align: middle;
    text-align: center;
	    width: 100%; /* This could be ANY width */
    height: 100%; /* This could be ANY height */
	background:none;    
}

 .navload {
  display: block;
  background-color: #f7f7f7;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#f7f7f7), to(#e7e7e7));
  background-image: -webkit-linear-gradient(top, #f7f7f7, #e7e7e7); 
  background-image: -moz-linear-gradient(top, #f7f7f7, #e7e7e7); 
  background-image: -ms-linear-gradient(top, #f7f7f7, #e7e7e7); 
  background-image: -o-linear-gradient(top, #f7f7f7, #e7e7e7); 
color: #3C8DBC;
 
  width:  60px;
  height: 60px;
 
  text-align: center;
 
  border-radius: 50%;
  box-shadow: 0px 3px 8px #aaa, inset 0px 2px 3px #fff;
}


</style>

<style>
  
 @-webkit-keyframes DIV-TEXT {
    0%   { color: #FF0000 }
	
    50%  { color: #0079C8 }
    100% { color: #FF0000 }
 
}

 @-moz-keyframes DIV-TEXT {
 
    0%   { color: #FF0000 }
    50%  { color: #0079C8 }
    100% { color: #FF0000 }
 
}




.text-alert {
	 
 
   -webkit-transition: all 3s;
	   -moz-animation: DIV-TEXT 1s infinite;
	  
      -webkit-transition: all 3s;
    -webkit-animation: DIV-TEXT 1s infinite;
}

 </style>
 <script>
 var load_main_mod='<div class="outer-loading-mod"   id="main_index_load_page_mod"><div class="inner-loading"><center><span  class="navload"><i class="fa fa-circle-o-notch fa-spin 4x" style="font-size:40px;   margin-top:10px " ></i></center></span><div style="font-size:14px; color:#333333; font-weight:normal;  margin-top:10px " ><center><span id="navload_topic"> โหลดข้อมูล</span></center></div></div></div>';
</script>


 <script>
 var load_main_mod_table='<br><center><span  class="navload"><i class="fa fa-circle-o-notch fa-spin 4x" style="font-size:40px;   margin-top:10px " ></i></center></span><div style="font-size:14px; color:#333333; font-weight:normal;  margin-top:10px " ><center><span id="navload_topic"> โหลดข้อมูล</span></center></div';
 
 
  ///var load_main_mod_table='';
</script>
 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="calendar/css/smoothness/main.css"> 
 
<?php
$y = date('Y');
?>   
  <div class="box box-default">
 
    <br>
<br>

 <br>


 
 
   <div class="box-body" >
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td> 
	<table width="100%"  border="0" cellspacing="2" cellpadding="2" style="display:nones">
        <tr>
          <td width="50" style="font-size:16px "><strong>เดือน  </strong></td>
          <td width="70"><select name="data_m" id="data_m" style="width:60px; font-size:20px ">
            <?
				   for($ii=1;$ii<13;$ii++){
				   if( $ii < 10){ $ii = '0'.$ii; }
				  ?>
            <option value="<?=$ii;?>" <?  if(date('m')== $ii){ echo "selected=selected";} ?> >
            <?=$ii;?>
            </option>
            <?  } ?>
          </select> </td>
          <td width="50"><strong>พ.ศ.   </strong></td>
          <td width="80"><select name="data_y" id="data_y"  style="width:70px; font-size:20px ">
            <?
				   for($ii=2018;$ii< date('Y')+1;$ii++){
 
				  ?>
            <option value="<?=$ii;?>" <?  if(date('Y')== $ii){ echo "selected=selected";} ?> >
            <?=$ii+543;?>
            </option>
            <?  } ?>
          </select></td>
          <td valign="top"><button type="button" id="btn_form" class="btn btn-block btn-primary btn-fx"  style="width:60px; height:30px; ">ค้นหา</button></td>
        </tr>
      </table>
	
 <br>

	
	<div  id="load_th"  style="display:none " > 
  <?  include ("load/page/loading.php");?> 
</div></td>
  </tr>
  <tr>
    <td> 
 <br>



 <!--  datepicker OK --> 
<link href="js/datepick/jquery.datepick.css" rel="stylesheet">
<script src="js/datepick/jquery.plugin.js"></script>
<script src="js/datepick/jquery.datepick.js"></script> 
<script src="js/datepick/datepick.op.js"></script> 
<script type="text/javascript">
// $('#date_report').datepick({altField: '#star_cal' 	, dateFormat: 'yyyy-mm-dd' 	, showTrigger: '#calImgInx' }); 
$("#btn_form").click(function(){
 
	//$('.loader').show();
	var year = $("#data_y").val();
	var month = $("#data_m").val();
  
  
  
  if($("#data_m").val()>'04'){
	  
	  var url_place_th = "go.php?name=load/pay&file=index_new&server=th&year="+$("#data_y").val()+"&month="+$("#data_m").val()+"";
 
	  
  } else {
	  
	  var url_place_th = "go.php?name=load/pay&file=index&server=th&year="+$("#data_y").val()+"&month="+$("#data_m").val()+"";  
	  
  }
  
 
	
	
	 $('#load_th').show();
	 
	  $('#load_th').html(load_main_mod_table);
 
 $('#load_th').load(url_place_th); 
	/*
	//// cn
		var url_place_cn = "go.php?name=load/all&file=all&server=cn&day="+$("#date_report").val()+"";
	$('#load_cn').show();
	$('#load_cn').load('load/page/loading.php');
	$('#load_cn').load(url_place_cn); 
	*/
});
$( document ).ready(function() {
///var url_place_th = "go.php?name=load/pay&file=index_new";
	 
	///$('#load_th').load('load/page/loading.php');
	///$('#load_th').load(url_place_th); 
	});
	
 
 
 
 
 $( "#data_m" ).change(function() {
 
  if($("#data_m").val()>'04'){
	  
	  var url_place_th = "go.php?name=load/pay&file=index_new&server=th&year="+$("#data_y").val()+"&month="+$("#data_m").val()+"";
 
	  
  } else {
	  
	  var url_place_th = "go.php?name=load/pay&file=index&server=th&year="+$("#data_y").val()+"&month="+$("#data_m").val()+"";  
	  
  }
  
	
	
	 $('#load_th').show();
	 
	  $('#load_th').html(load_main_mod_table);
 
 $('#load_th').load(url_place_th); 
 
 });
	/*
	//// cn
		var url_place_cn = "go.php?name=load/all&file=all&server=cn&day="+$("#date_report").val()+"";
	$('#load_cn').show();
	$('#load_cn').load('load/page/loading.php');
	$('#load_cn').load(url_place_cn); 
	//$('.loader').show();


*/

 




  $("#btn_form").click();   
	
 
	
	
	
	
</script></td>
  </tr>
</table>         
</div>
</div>

 
<div id="popup_work_preview_pay_day"    style="width:100%; height:100%; padding:0px;  left:0px;  top:0px;   z-index:99999999; background-color:#FFFFFF; position:fixed;  display:none; margin-top:0px; overflow:hidden">
   <div class="back-full-popup">
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="40"   ><a  id="btn_close_chat_preview_pay_day"><div    class="back-full-popup-pay-day"><i class="fa fa-arrow-circle-left" style="font-size:22px; color:#FFFFFF "> </i></div></a></td>
  <td   ><div style="font-size:18px; color:#FFFFFF " id="head_full_popup_pay_day"></div></td>
    <td width="50" align="right"   ><div style="font-size:18px; color:#FFFFFF " id="head_full_popup_icon"><i class='fa  fa-map-marker'></i></div></td>
  </tr>
</table>
</div>
 
   <div   style=" background-color:#FFFFFF ; height:auto;width:100%; top:43; position:fixed; padding:5px;  ; overflow:hidden;z-index:999999;"  id="head_popup_work_preview_pay_day" >
  


</div>



 
 <div   id="load_work_preview_pay_day"   style="margin-top: 0px; height:100%; overflow:auto;  "  >  
		 
 <?  ///  include('google/check_system_realtime.php')?>
</div> 
 
 
              
				                </div>
 


    