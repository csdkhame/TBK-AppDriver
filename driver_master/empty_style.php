<?
session_start();
require_once("mainfile.php");
$PHP_SELF = "empty_style.php";
GETMODULE($_GET[name],$_GET[file]);
 
?>




<!-- Content -->
<? include ("".$MODPATHFILE."");?>
<!-- End Content -->

