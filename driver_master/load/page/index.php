


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css?v=<?=time()?>">
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bootstrap/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bootstrap/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css?v=<?=time()?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.css?v=<?=time()?>">
  
   

 
    <link href="docs/css/highlight.css" rel="stylesheet">
    <link href="dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet">
 
  
  
  
  <script src="plugins/jQuery/js/jquery-latest.js"></script>
  
  
  <?  include ("bootstrap/fonts/all.php");?> 
  
 
  
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body class="hold-transition skin-blue sidebar-mini"   >


<div class="wrapper"  >
 <!-- head -->

 
 
  <? 
///// head
 include "load/page/head.php" ;
 ?> 
   <? 
///// head
 include "load/tool_bottom.php" ;
 ?> 

<input type="hidden" name="check_data_chat_now" id="check_data_chat_now" value="0"  style="width:100px " />


  <!----end head-->
   
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar"   style="position: absolute ;  "  id="load-main-sidebar"    >  
 
      <!-- search form -->
  
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
	  <div style="margin-top:-40px;box-shadow: 0px  0px  0px #B4B4B4; overflow: auto">
<? 
///// เมนู left
 include "load/page/left_menu.php" ;?></div> 
    <!-- /.sidebar -->
</aside>

  <!-- เพจ --> 
  
<!-- jQuery 2.2.3   jquery-3.0.0 -->

<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
 
<!-- AdminLTE App -->

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
  <div class="content-wrapper" style="margin-top:55px; "  >
  <div >



<div id="check_chat_update" style="display:none"> </div>

<script src="js/jquerymain.min.js"></script>
<script>
$( document ).ready(function() {
// ion.sound.play("alert_msg_new");

/*

 setTimeout(function() {
$("#play_alert_msg_new").click();
 
  
}, 3000); // 60000 milliseconds = one minute
*/

});


 

 setInterval(function() {
	 
/// document.getElementById('check_user_online_update').scrollIntoView({block: 'start', behavior: 'smooth'});
 
 var url_check_user_online_update = "go.php?name=load/update/online&file=chat&driver=<?=$driver_id?>";
 $('#check_user_online_update').load(url_check_user_online_update);
 //alert(0);
  
}, 10000); // 60000 milliseconds = one minute
 
	</script>
	<div id="check_user_online_update"></div>
    
    
    
    <script>
 document.getElementById('check_user_online_update').scrollIntoView({block: 'start', behavior: 'smooth'});
 
</script>    
    
    
    

<section class="content-header" style="padding:6px; margin-top:0px" >
   <?  include ("load/page/content.php");?> 
    <!-- Content Header (Page header) -->
	<div style="padding:5px ; margin-top:10px; margin-left:3px; margin-right:3px; margin-bottom:10px;  ">
	<div id="load_mod">
 <?  include ("".$MODPATHFILE."");?>  </div>
 </div>
  </div>
<!-- ./wrapper -->
<!-- ./wrapper -->
<script src="js/hide-address-bar.js?v=<?=time()?>"></script>
<script src="dist/js/app.js"></script>
    <script src="docs/js/highlight.js"></script>
    <script src="dist/js/bootstrap-switch.js"></script>
    <script src="docs/js/main.js"></script>
 

</body>
</html>
 
   
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

body { 
 
 
 
}

#body_main_web {
    -ms-overflow-style: none;  
    overflow: -moz-scrollbars-none;  
	
}
#body_main_web::-webkit-scrollbar { 
  overflow: -moz-scrollbars-none;  
}

.dropdown .dropdown-menu {

	
 

    max-height: 0;
    display: block;
    overflow: hidden;
    opacity: 0; z-index:50; margin-top:5px; border:none;border-radius: 0px;
}

.dropdown.open .dropdown-menu {
    max-height: 600px;margin-top:5px; background-color:#FFF;
    opacity: 1; z-index:50;
;box-shadow: 0px  5px 10px #999999;

-webkit-transition: 0.5s ease-in-out;
-moz-transition: 0.5s ease-in-out;
-o-transition: 0.5s ease-in-out;
-ms-transition: 0.5s ease-in-out;
transition: 0.5s ease-in-out;
border:none;
}
 
 
 </style>
 <style>
 .grayscale{ color:#FF3300;
  
 
 }
 
img {
 

}
html {
 
}
div {
 -webkit-full-screen {
  width: 100%;
  height: 100%;
}
 
 #myelement:-webkit-full-screen	{ width: 100% }
#myelement:-moz-full-screen		{ width: 100% }
#myelement:-ms-full-screen		{ width: 100% }
#myelement:-o-full-screen		{ width: 100% }
#myelement:full-screen			{ width: 100% }
}
 
</style><br>
<br>
<br>

  <style>
  .textmain_left_menu  {
  font-size:20px; font-family:Arial, Helvetica, sans-serif;color:#666666;
  }
  
    .textsub_left_menu  {
  font-size:16px;  font-family:Arial, Helvetica, sans-serif;
  }
  
      .textsub_left_menu:hover  {
  font-size:16px;  font-family:Arial, Helvetica, sans-serif; color:#3C8DBC;
  }
  .l-menu-li {
  
  border-bottom:  solid 1px #999999;
  }
  
    .l-menu-li-icon { 
	font-size:24px; padding-right:30px; color:#3C8DBC;
   }
   
  </style>
  
   