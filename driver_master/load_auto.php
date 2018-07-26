<?php @header ('Content-type: text/html; charset=utf-8'); 
@session_start();
require_once("mainfile.php");
$PHP_SELF = "index.php";
GETMODULE($_GET[name],$_GET[file]);
 //require_once("js/control.php");
?>   
   <link rel="stylesheet" href="bootstrap/css/bootstrap.css?v=<?=time()?>">
 
 

<? include ("".$MODPATHFILE.""); ?>
 