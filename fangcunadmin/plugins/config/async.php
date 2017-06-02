<?php
	header('Content-Type: application/json');
    header('Content-Type: text/html;charset=utf-8');
	
	
$host = "localhost";
$user = "root";
$pass = "root";
$db = "qmr";
//创建一个mysql连接
$connection = mysql_connect($host, $user, $pass) or die("Unable to connect!");
//选择一个数据库
mysql_select_db($db) or die("Unable to select database!");
mysql_query("set names utf8");

if($connection) {

//	if($_GET["method"]=="jq"){
//		$apply = "SELECT * FROM q_users";
//	    $apply1 = mysql_query($apply) or die("Error in query: $apply. " . mysql_error());
//	
//	    $temp=mysql_num_rows($apply1);
//		$arr=array();
//		for($i=0;$i<$temp;$i++)
//	    {
//	        $row=mysql_fetch_row($apply1);
//	        $arrU=array('name'=>$row[1],'pass'=>$row[2]);
//	        array_push($arr, $arrU); 
//	    }
//			
//		echo $_GET['callback']."(".json_encode($arr).")";
//
//	}
	if($_GET["method"]=="jq"&&$_GET["pp"]=="side"){
		$apply = "SELECT * FROM q_list_name";
	    $apply1 = mysql_query($apply) or die("Error in query: $apply. " . mysql_error());
	
	    $temp=mysql_num_rows($apply1);
		$arr=array();
		for($i=0;$i<$temp;$i++)
	    {
	        $row=mysql_fetch_row($apply1);
	        $arrU=array('name'=>$row[1],'classn'=>$row[2]);
	        array_push($arr, $arrU); 
	    }
			
		echo $_GET['callback']."(".json_encode($arr).")";

	}
	if($_GET["method"]=="jq"&&$_GET["pp"]=="stu"){
		$apply = "SELECT * FROM ".$_GET["t"];
	    $apply1 = mysql_query($apply) or die("Error in query: $apply. " . mysql_error());
	
	    $temp=mysql_num_rows($apply1);
		$arr=array();
		for($i=0;$i<$temp;$i++)
	    {
	        $row=mysql_fetch_row($apply1);
	        $arrU=array('stuNum'=>$row[1],'stuName'=>$row[2],'stuSub'=>$row[3],'stuSex'=>$row[4],'stuTime'=>$row[5]);
	        array_push($arr, $arrU); 
	    }
			
		echo $_GET['callback']."(".json_encode($arr).")";

	}

}

?>