<?php
/**
 * Created by PhpStorm.
 * User: Juvo
 * Date: 2017/1/2
 * Time: 0:49
 */
$host = "localhost";
$user = "root";
$pass = "root";
$db = "bulterdb";
//创建一个mysql连接
$connection = mysql_connect($host, $user, $pass) or die("Unable to connect!");
//选择一个数据库
mysql_select_db($db) or die("Unable to select database!");
mysql_query("set names utf8");


if($connection) {
// global $sqlresult;

    $apply = "SELECT * FROM bulter_user";
    $apply1 = mysql_query($apply) or die("Error in query: $apply. " . mysql_error());
//    $row1 = mysql_fetch_row($apply1);//应聘信息
//    var_dump($row1);

    $temp=mysql_num_rows($apply1);
    for($i=0;$i<$temp;$i++)
    {
        $row=mysql_fetch_row($apply1);
        if($i==$temp-1)
        {
            echo "{id:\"$row[1]\" , name:\"$row[2]\"}";
        }
        else
        {
            echo "{id:\"$row[1]\"  , name:\"$row[2]\"},";
        }
    }
}
