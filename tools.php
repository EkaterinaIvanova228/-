<?php
header("Content-Type: text/html; charset=utf-8");
$connect = mysql_connect('localhost', 'root', '') or die(mysql_error());
mysql_select_db('chipsoid') or die(mysql_error());
?>
