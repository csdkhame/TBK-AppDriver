 <? //=$_COOKIE['appdriver_remember_user'];?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>เข้าสู่ระบบ T-Booking</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
 
 
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<script type="text/javascript" src="js/dialog/main.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

<?
 include "bootstrap/fonts/all.php";	

?>
 
<style type="text/css">
<!-- class="hold-transition login-page" style="max-width:400px; "
body {
	 
}

.field-icon {
  float: right;
  margin-left: -50px; padding-left:10xp;
  margin-top: -35px;
  position: relative;
  z-index: 2; color:#999999; font-size:20px;
}

.container{
  padding-top:50px;
  margin: auto;
}
-->
</style>

</head>
<body > 
 


<table width="100%"  border="0" align="center" cellpadding="2" cellspacing="2" style="max-width:350px; ">
  <tr>
    <td align="center"><div class="login-box">
  <div class="login-logo"  style="padding:10px; color:#FFFFCC; font-size:22px; text-transform:uppercase " >


 <img src="images/applogo.png" id="login_logo" width="200" border="0" align="absbottom"  style="margin-top:-5px;text-shadow:  5px 3px #666666; cursor:pointer "   />   
  <script>
 
  $("#login_logo" ).click(function() {
 
    $("#submit_login").click();
 
 });
 
 
 

 
 
 
 
   </script>
  </div>
  <!-- /.login-logo -->
  <div id="load_form_main" class="login-box-body" style="padding:10px; margin-bottom:10px ; background-color:#FFFFFF;border: solid 0px #999999;box-shadow: 0 0 10px 3px #666666;border-radius: 25px; width:300px ">
 
<div id="load_form">
 


    <form method="post" id="login_form"  enctype="multipart/form-data" >
      <div class="form-group has-feedback" >
        <input name="loginusername"  class="form-control" id="loginusername" style="font-size:18px ; height:50px;border-radius: 25px; background-color:" value="<?=$_COOKIE['appdriver_remember_user'];?>" placeholder="ชื่อผู้ใช้งาน">
        <span class="glyphicon glyphicon-user form-control-feedback" style="color:#999999; margin-top:10px;"></span>
      </div>
      <div class="form-group has-feedback" >
        <input name="loginpassword"  id="loginpassword"  type="password" class="form-control"  style="font-size:18px ; height:50px;border-radius: 25px;"   value="<?=$_COOKIE['appdriver_remember_pass'];?>" placeholder="รหัสผ่าน">
         <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"  ></span> 
      </div>
      <div class="row" style="background-color:#FFFFFF;width:100%;border: 0px solid #3C8DBC" >
	  		<div style="width:90%; background-color:#FFFFFF; margin-top:-10px;  padding:3px;   border-radius:  25px; ;background-color:#FFFFFF;     margin-bottom: 5px; box-shadow: 0px  0px 0px #DADADA  ; ">
            
            
            
            
            <table  border="0" cellspacing="0" cellpadding="0" style="width:100%;"  >
  <tr>
    <td style="background-color:#FFFFFF "  > <div class="checkbox icheck" style="margin-left:-20px; " >
            <label>
<?
if($_COOKIE['appdriver_remember_time'] == 1) {
    $remember = 1;
   $chk_remem = "checked='checked'";
} else {
   $remember =1;
     $chk_remem = "checked='checked'";
}
?> 
              <input type="radio" name="chk_remem" id="chk_remem"  <?=$chk_remem;?>    >
			  
			  <input type="hidden" name="remember" id="remember" value="<?=$remember;?>" />	
			  
            </label>
			<font style="font-size:14px ">จำข้อมูล</font>
          </div></td>
    <td style="background-color:#FFFFFF ">  <button type="button" id="submit_login" class="btn btn-block btn-primary btn-fx" style="border-radius: 25px;font-size: 20px">เข้าสู่ระบบ</button></td>
  </tr>
</table>
</div>
        <div class="col-xs-6" >
		


		
		
       
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
        
        </div>
        <!-- /.col -->
      </div>
	    
		
		 <div class="social-auth-links text-center" id="lostpassword" style="display:nones;">
 
      <button type="button" class="btn btn-block btn-social btn-google btn-flat" data-toggle="modal" data-target="#myModal" style="border-radius: 25px; font-size:16px;"><i class="fa fa-unlock-alt"></i> ลืมรหัสผ่านเข้าระบบ</button>
    </div>
    </form>
</div>
     
    <!-- /.social-auth-links -->

 
<div id="sendlogin"> </div>
  </div>
  <!-- /.login-box-body -->

</div>
<!-- /.login-box -->

 
<!-- iCheck -->
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
</script></td>
  </tr>
</table>


<? include "js/control.php" ;	?>
</body>
</html>
 <style type="text/css">
<!--
body,td,th {
	font-family: Arial; font-size:16px; background-color:#2489C5;
}
-->
</style>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>






 
 
</head>
<body>

<div class="container">
 
 

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog"  style="background-color:#FFFFFF"   >
    <div class="modal-dialog" style="background-color:#FFFFFF" >
    
      <!-- Modal content-->
      <div class="modal-content" >
        <div class="modal-header">
 
          <h4 class="modal-title"  style="font-size:24px; text-align:center;"><b>ลืมรหัสผ่านเข้าสู่ระบบ</b></h4>
        </div>
        <div class="modal-body">
		
    <form method="post" action="" id="edit_form" name="edit_form"  enctype="multipart/form-data" >
 
                    <div class="topicname"><i class="fa  fa-unlock-alt"></i>&nbsp;&nbsp;<b>กรุณากรอกชื่อผู้ใช้งานของคุณ</b></div>
     
 
		      <input type="text" name="newpassword" id="newpassword"   value=""  onKeyPress="return KeyCode(txt)" class="form-control"  >
     
 
		 
 
 
 
 
 
  
     
 
  	
  
  <div id="send_password" style="display:none "></div>
 </form> 

        </div>
        <div class="modal-footer">
          <button id="submit_password" type="button" class="btn  btn-primary" >ส่งรหัสผ่าน</button> <button type="button" class="btn btn-default" data-dismiss="modal" id="close_password">ปิด</button>
 
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<script>
 
 /// check login

$("#submit_password").click(function(){ 
 
 
if(document.getElementById('newpassword').value=="") {
swal('กรุณากรอกชื่อผู้ใช้งาน'); 
document.getElementById('newpassword').focus() ; 
return false ;
}
  $('#send_password').show();
  $('#send_password').html('<i class="fa fa-refresh fa-spin 2x" ></i>');

 $.post('popup.php?name=login&file=password',$('#edit_form').serialize(),function(response){
   $('#send_password').html(response);
  });
 

 });
 ////
 
 $("#close_password").click(function(){ 
 document.getElementById('newpassword').value=="";
 $('#send_password').html('');
  $('#send_password').hide();

 });
 
 
  $(".toggle-password").click(function() {

 

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if ($('#loginpassword').attr("type") == "password") {
 $('#loginpassword').attr("type", "text");
  } else {
 $('#loginpassword').attr("type", "password");
 
  }
});
 
 
 

 
 </script> 
 
 <style>
 .modal {
  text-align: center; 
  padding: 0!important; 
}

.modal:before {
  content: '';
  display: inline-block;
  height: 100%;
  vertical-align: middle;
  margin-right: -4px;
}

.modal-dialog {
  display: inline-block;
  text-align: left;
  vertical-align: middle;  
}
 </style> 
 
 
   
   
   
   
   
    
   
   