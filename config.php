<?
$_CONFIG['host'] = "localhost";
$_CONFIG['user'] = "userDB";
$_CONFIG['pass'] = "passwordDB";
$_CONFIG['dbname'] = "adduso";

$conn = mysql_connect($_CONFIG['host'], $_CONFIG['user'], $_CONFIG['pass']) or die('I can not establish DB connection');
mysql_select_db($_CONFIG['dbname']);
?>
