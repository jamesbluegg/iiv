<?php
$host_name = 'localhost';
$user_name = 'web2-vatable2012';
$pass_word = 'vatab13pa55';
$database_name = 'web2-vatable2012';

$conn = mysql_connect($host_name, $user_name, $pass_word) or die ('Error connecting to DB');
mysql_select_db($database_name);

?>