 <?php
$host = "103.13.30.137";
$username = "admin_dbcontrol";
$password = "252631MANbooking";
$objConnect = mysql_connect($host,$username,$password);

if($objConnect)
{
	echo "MySQL Connected";
}
else
{
	echo "MySQL Connect Failed : Error : ".mysql_error();
}

mysql_close($objConnect);
?>