<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db = "bulterdb";
//创建一个mysql连接
$connection = mysql_connect($host, $user, $pass) or die("Unable to connect!");
//选择一个数据库
mysql_select_db($db) or die("Unable to select database!");
mysql_query("set names utf8");
?>