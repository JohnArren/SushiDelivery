<?php 

$db_name="aspid007_dragon";
$host="localhost";
$user="root";
$pass="";

$linc=mysql_connect($host, $user, $pass) or 
	die("хост недоступен");

$db=mysql_select_db($db_name) or
	die("база отсутствует");

mysql_query("SET NAMES 'utf8'");
?>