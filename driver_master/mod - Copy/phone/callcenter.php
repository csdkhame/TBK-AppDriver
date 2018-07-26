                 <form id="form_phone_send_data" action="" method="post"  enctype="multipart/form-data"   >


<style type="text/css">
<!--
.topicname { padding-top:10px; padding-left:0px; padding-bottom:5px; font-size:18px; font-weight:bold; color: #666666 ; text-align:left;  
 
}
 .pad_top_5 { padding-top:5px;  
 
 }

 
-->
</style>  
 
    <style>
   .div-find-data{
	 padding: 5px;   border-radius:  10px; border: 1px solid #dadada;background-color:#FFFFFF;     margin-bottom: 5px; box-shadow: 0px  0px 5px #DADADA  ; margin-top:10px; margin:5px; margin-left:-5px;   
	 
 }
 
    .div-main-find-data{
 background-color:#FFFFFF; padding: 5px;      margin-bottom: 0px; box-shadow: 0px  0px 0px #DADADA  ; position:fixed; width:100%; z-index:1; margin-top:-7px; 
	 
 }
 
 
 </style>

 

 <!--ss-->
 
 
 
    
    <!--แสดงผล-->
	
    <div class="box-body" style="padding:10px; " >
         <div class="row" style="margin-top:30px; ">
  <div class="box-body"  >
  
  
    <div class="div-main-find-data">
  <div class="div-find-data">
  	<div style="font-size:  20px; color:#3C8DBC"><i class="fa fa-search"></i>&nbsp;พิมพ์ชื่อเล่นหรือเบอร์โทรศัพท์</div>
 
<table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tbody>
    <tr>
      <td><input class="form-control" type="text" name="findname" id="findname"   required="true"  onkeypress="UserEnter(this,event)"    ></td>
      <td width="82"><button type="reset" class="btn btn-block btn-primary" id="submit_find_phone"  style="width:80px; position: static" data-toggle="modal" d ><i class="fa fa-find"></i> ดูทั้งหมด</button>  </td>
    </tr>
  </tbody>
</table>
</div>
 </div>

  </div>
      <!--แสดงผล-->
<div id="load_phone_data" style="margin-top: 85px;" > <?  // include "mod/phone/load/driver.php" ;?></div>
 
	
	
  <!----- ปิด row-->
   
  </div>
    </div>
 
	   
	 

 
	   <script>
 	 
	   
 
	   
	   
	   $("#submit_find_phone").click(function(){ 
//$('#file_upload_line').click();
 
 var url_phone='go.php?name=phone/load&file=driver';
 
/// $('#load_phone_data').load(url_phone);
 
/*
 $.post('go.php?name=phone/load&file=driver&type=find',$('#load_phone_data').serialize(),function(response){
   $('#phone_send_data').html(response);
  });*/
  
  
  $.post(url_phone,$('#form_phone_send_data').serialize(),

function(response){ $('#load_phone_data').html(response); });
  
  
 
  
 });
 
 
 
    $("#findname").keyup(function() {
//$('#file_upload_line').click();
 
 var url_phone='go.php?name=phone/load&file=driver&type=find';
 
/// $('#load_phone_data').load(url_phone);
 
/*
 $.post('go.php?name=phone/load&file=driver&type=find',$('#load_phone_data').serialize(),function(response){
   $('#phone_send_data').html(response);
  });*/
  
  
  $.post(url_phone,$('#form_phone_send_data').serialize(),

function(response){ $('#load_phone_data').html(response); });
  
  
 
  
 });
 
 
 
 
 
 
 
 
  var url_phone='go.php?name=phone/load&file=driver';
 
/// $('#load_phone_data').load(url_phone);
 
/*
 $.post('go.php?name=phone/load&file=driver&type=find',$('#load_phone_data').serialize(),function(response){
   $('#phone_send_data').html(response);
  });*/
  
  
  $.post(url_phone,$('#form_phone_send_data').serialize(),

function(response){ $('#load_phone_data').html(response); });
 
 
 
	   
	   </script>
	   
	   
	   </form>