<?php
$host_name = 'db441058178.db.1and1.com';
$user_name = 'dbo441058178';
$pass_word = 'N3v3Grac32012!';
$database_name = 'db441058178';

$conn = mysql_connect($host_name, $user_name, $pass_word) or die ('Error connecting to mysql');
mysql_select_db($database_name);
?>