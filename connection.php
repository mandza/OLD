<?
//Connect to  MySQL
ini_set("session.gc_maxlifetime","14000");
session_start();
$db_user = 'root';
$db_password = 'password';
$db_database = 'database';
$connection = @mysql_connect("localhost", $db_user, $db_password);
$db = @mysql_select_db($db_database, $connection);
?>
