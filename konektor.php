<?php
#database variables
ini_set('display_errors',FALSE);
$dbname = "db_lpd";
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$entries=1;

$db = mysql_connect($dbhost,$dbuser,$dbpass);
$tanggal=date('D, d-M-Y H:i:s');
if (!mysql_select_db($dbname,$db)) {
	echo mysql_error();
}
?>