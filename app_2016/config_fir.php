<?
date_default_timezone_set("Asia/Bangkok");
define("DB_HOST","localhost");

define("DB_NAME","admin_web");

define("DB_USERNAME","admin_MANbooking");

define("DB_PASSWORD","252631MANbooking");

define("TB_transferplace","web_transferplace");
define("TB_transferplace_new","web_transferplace_new");
define("TB_book_agent","web_book_agent");
define("TB_order","web_order");
define("TB_admin","web_admin");



require_once("../includes/class.mysql.php");
require_once("../includes/function.in.php");
$db = New DB();


?>
