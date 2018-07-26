<?
session_start();
include "config_fir.php";

?>
<meta http-equiv=refresh content="0;URL=today_in.php" />
<style>
	.loader_wait {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url('images/loading-large.gif') 50% 50% no-repeat rgb(249,249,249);
}
</style>
<div class="loader_wait"></div>