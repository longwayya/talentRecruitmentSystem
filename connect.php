<?php
header("Content-type: text/html; charset=utf-8");
$con = mysql_connect('localhost','root','root') or die('can not connect server!'); 
mysql_select_db('rencai');
mysql_query("set names 'utf8'");
?>

