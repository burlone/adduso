<?
$_CONFIG['host'] = "localhost";
$_CONFIG['user'] = "root";
$_CONFIG['pass'] = "adduso";
$_CONFIG['dbname'] = "adduso";

$mysqli = new mysqli($_CONFIG['host'], $_CONFIG['user'], $_CONFIG['pass'], $_CONFIG['dbname']) or die('I can not establish DB connection');

?>
