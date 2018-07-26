<link rel="stylesheet" type="text/css" href="calendar/css/smoothness/mainall.css?v=<?=time()?>"> 
<script src="js/jquery-main.js"></script> 
<script   src="calendar/js/th.js?v=<?=time()?>"></script>


<style type="text/css">
<!--
.topicname { padding-top:10px; padding-left:0px; padding-bottom:5px; font-size:18px; font-weight:bold; color: #666666 ; text-align:left;  
 
}

.topicname_sub { padding-top:10px; padding-left:0px; padding-bottom:5px; font-size:16px; font-weight:bold; color: #333333 ; text-align:left;  
 
}
 

 
-->
</style>  
<style>
.ui-datepicker {
    width: 90%; max-width:400px; z-index:99;
    padding: 0; left:0px;
  }
  .ui-widget {
    font-size: 16px;  
  }
  .ui-datepicker table {
    font-size:18px; 
  }
</style>
<script>

  $(function(){

	$("#idcard_finish").datepicker({ dateFormat: 'yy-mm-dd',
	dateFormat: 'yy-mm-dd',

	            changeMonth: true,
            changeYear: true,
	todayHighlight: true,
	minDate: '-10Y', maxDate: '+10Y',
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


  </script> 
 

<script type="text/javascript">

$(document).ready(function() {

    $("#datepicker").datepicker();

// $('#date_report').datepick({altField: '#star_cal' 	, dateFormat: 'yyyy-mm-dd' 	, showTrigger: '#calImgInx' }); 

$("#btn_idcard_finish").click(function(){
 
 $('#idcard_finish').datepicker('show'); 

});

 

$("#btn_idcard_finish").click(function(){

	//$('.loader').show();
	var date_report = $("#date_report").val();
	 
	
});
 
        });
</script> 


<script>

  $(function(){
 
	$("#iddriving_finish").datepicker({ dateFormat: 'yy-mm-dd',
	dateFormat: 'yy-mm-dd',
 
	            changeMonth: true,
            changeYear: true,
	todayHighlight: true,
	minDate: '-10Y', maxDate: '+10Y',
	//showOn: "both", 
	// buttonImage: 'calendar/dateselect.gif',
	//buttonText: "<i class='fa fa-calendar'></i>",
	// buttonImageOnly: true ,    
  numberOfMonths: 1,
  onSelect: function(dateText, inst) {
  
//$('.loader').show();
	var date_report = $("#date_report").val();
	//alert(date_report);
	
	$('#load_cn').hide();
	
	//var url_place_th = "go.php?name=load/all&file=all&server=th&day="+$("#date_report").val()+"";
	var url_place_th = "go.php?name=load/today&file=timeline&find=day&day="+$("#date_report").val()+"";
	$('#load_th').show();
	$('#load_th').load('load/page/loading.php');
	$('#load_th').load(url_place_th); 
 
		

    }
	 
	 }
 
	);
 
});


  </script> 
 

<script type="text/javascript">
$(document).ready(function() {
    $("#datepicker").datepicker();

// $('#date_report').datepick({altField: '#star_cal' 	, dateFormat: 'yyyy-mm-dd' 	, showTrigger: '#calImgInx' }); 

$("#btn_iddriving_finish").click(function(){
 
 $('#iddriving_finish').datepicker('show'); 

});

 

$("#btn_iddriving_finish").click(function(){

	//$('.loader').show();
	var date_report = $("#date_report").val();
	 
	
});
 
        });
</script> 


	<?
// $rand = substr(str_shuffle('123456789012345678901234567890'),0,6);
?>

 
 <div class="box box-default">
 
   <div class="box box-default">
          <h2 class="box-title"><span class="font_24" style="margin-left:10px;"><b>บัตรประชาชน/ใบขับขี่</b></span></h2>
 
   </div>
 
 
   <input class="form-control" type="hidden" name="upload_pic_type" id="upload_pic_type"    value="id_card" >
  
  
<form method="post" action="" id="edit_form" name="edit_form"  enctype="multipart/form-data" >
  <div class="box-body" >
         <div class="row">
		            <div class="col-md-12">
			      
 
                
				
				 
		      <div> 
                     <div class="topicname"><i class="fa  fa-credit-card"></i>&nbsp;บัตรประจำตัวประชาชน </div>


   <div class="topicname_sub">เลขที่บัตรประชาชน</div>
				  <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="70%" style="padding-right:5px; "><input name="idcard" type="number" class="form-control" id="idcard" onkeypress="PasswordEnter(this,event)"  value="<?=$arr[web_driver][idcard];?>"  required="true"  ></td>
     
  </tr>
    <tr>
    <td colspan="2" style="padding-right:5px; padding-top:10px; ">
    
    
       <div class="topicname_sub">วันหมดอายุ</div>
    
    <div class="input-group date">
   
                  <input type="text" class="form-control pull-right" value="<?=$arr[web_driver][idcard_finish];?>"  name="idcard_finish" id="idcard_finish"  readonly="true" style="background-color:#FFFFFF; height:35px; font-size:24px; ">               
                  <div class="input-group-addon"  id="btn_idcard_finish" style="cursor:pointer ; width:40px; margin-right:5px;">
                     <i class="fa fa-calendar" style="font-size:24px; height:20px;"></i> 
                  </div>
                </div></td>
    </tr>
</table>

			  </div>
              
              
     <?
	 
	$part_idcard='';
	 ?>         
              
              
              <?php
			  
$filename_card = "../data/pic/driver/id_card/".$driver_id.".jpg";

if (file_exists($filename_card)) {
  ///  echo "The file $filename exists";
} else {
	
@copy ("../data/pic/driver/idcard.jpg", "../data/pic/driver/id_card/".$driver_id.".jpg" ); 
 
	
}


$filename_driving = "../data/pic/driver/id_driving/".$driver_id.".jpg";

if (file_exists($filename_driving)) {
  ///  echo "The file $filename exists";
} else {
	
@copy ("../data/pic/driver/iddriver.jpg", "../data/pic/driver/id_driving/".$driver_id.".jpg" ); 
 
	
}


?>
              
              
           <div class="topicname_sub" style="margin-top:10px;">ภาพถ่ายบัตรประชาชน</div>          
              
       <div>
       <?  include ("mod/user/photo/idcard.php");?>
       
       </div>       
              
              
              
              
              
              
              
              
			  
			  
			           <div><br><br>


                     <div class="topicname"><i class="fa fa-credit-card"></i>&nbsp;ใบอนุญาตขับขี่</div>
                     
                     
                     <div class="topicname_sub">หมายเลขใบขับขี่</div>
					 
					   <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="70%" style="padding-right:5px; "><input class="form-control" type="text" name="iddriving" id="iddriving"  required="true" onkeypress="PasswordEnter(this,event)"   value="<?=$arr[web_driver][iddriving];?>" ></td>
    
  </tr>
  <tr>
    <td colspan="2" style="padding-right:5px; padding-top:10px; ">
    
    
    <div class="topicname_sub">วันหมดอายุ</div>
    
 
    
    <div class="input-group date">
   
                  <input type="text" class="form-control pull-right" value="<?=$arr[web_driver][iddriving_finish];?>"  name="iddriving_finish" id="iddriving_finish"  readonly="true" style="background-color:#FFFFFF; height:35px; font-size:24px; ">               
                  <div class="input-group-addon"  id="btn_iddriving_finish" style="cursor:pointer ; width:40px; margin-right:5px;">
                     <i class="fa fa-calendar" style="font-size:24px; height:20px;"></i> 
                  </div>
                </div></td>
    </tr>
  
</table>




 <div class="topicname_sub" style="margin-top:10px;">ภาพถ่ายใบขับขี่</div>          
              
       <div>
       <?  include ("mod/user/photo/iddriving.php");?>
       
       </div>       
                    
            </div>
					
			 
		    </div>  
		  
		  

					
					
					
                    
                  
	
	 
                 
	
	 
					
   
	  </div>  
		 
 
		 
 
 
 
 

  
  <div  id="send_user_data"></div>
  
  
<div style="margin-top:0px; display:nones"  id="check_status_use_car" >
 <table width="100%"  border="0" cellspacing="2" cellpadding="2"  >
  <tr>
    <td width="50%" style="padding:5 px;"><button type="reset" class="btn-modal-no"  style="width:100% ">รีเซ็ต</button>
	 
    <td width="50%" style="padding:5px;"><button id="submit_user_data" type="button" class="btn-modal-ok" style="width:100% ">บันทึกข้อมูล</button></td>
	
	
	</td>
  </tr>
</table>
 

  </div>
        
  </div>
  
    <!----- ปิด row-->
   
   
 
 
  <script>
 
  
  
  
  
 /// check login

$("#submit_user_data").click(function(){ 




 

//$('#file_upload_line').click();

if(document.getElementById('idcard').value=="") {
alert('กรุณากรอกหมายเลขบัตรประชาชน'); 
document.getElementById('idcard').focus() ; 
return false ;
}



if(document.getElementById('idcard_finish').value=="") {
alert('กรุณากรอกวันหมดอายุบัตรประชาชน'); 
document.getElementById('idcard_finish').focus() ; 
return false ;
}

if(document.getElementById('iddriving').value=="") {
alert('กรุณากรอกหมายเลขใบขับขี่'); 
document.getElementById('iddriving').focus() ; 
return false ;
}



if(document.getElementById('iddriving_finish').value=="") {
alert('กรุณากรอกวันหมดอายุใบขับขี่'); 
document.getElementById('iddriving_finish').focus() ; 
return false ;
}







 $.post('popup.php?name=user&file=savedata&type=card&id=<?=$arr[web_driver][id]?>',$('#edit_form').serialize(),function(response){
   $('#send_user_data').html(response);
  });



 
/*
if(document.getElementById('username').value=="") {
swal('กรุณากรอกชื่อผู้ใช้งาน'); 
document.getElementById('username').focus() ; 
return false ;
}


 */
 
 /*
 $.post('popup.php?name=user&file=savedata&type=card&id=<?=$arr[web_driver][id]?>',$('#edit_form').serialize(),function(response){
   $('#send_user_data').html(response);
  });
  
  */
  
  
  
 });
 </script> 
 
 
 </form> 
 