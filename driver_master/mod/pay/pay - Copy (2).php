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
<script src="js/jquery-main.js"></script> 
<script   src="calendar/js/th.js"></script>

<script>
  $(function(){
 
	$("#date_report").datepicker({ dateFormat: 'yy-mm-dd',
	dateFormat: 'yy-mm-dd',
	todayHighlight: true,
	minDate: '-1Y', maxDate: '+0Y',
	showOn: 'button', 
	buttonImage: 'calendar/dateselect.gif',
	 buttonImageOnly: true ,    
  numberOfMonths: 1,
	 
	 }
 
	);
 
});
  </script>
<?php
$y = date('Y');
?>   
  <div class="box box-default">
 
    
          <h2 class="box-title" style="padding-left:10px; "><span class="font_28"><b>ค่าเที่ยว เบี้ยเลี้ยง</b></span></h2>

 
 
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
	  
	  
	///  alert(0);
	  
	  
  }
	
	
	
var url_place_th = "go.php?name=load/pay&file=index_new&server=th&year="+$("#data_y").val()+"&month="+$("#data_m").val()+"";
	
	
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
 
 var url_place_th = "go.php?name=load/pay&file=index_new&server=th&year="+$("#data_y").val()+"&month="+$("#data_m").val()+"";
	
	
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

 