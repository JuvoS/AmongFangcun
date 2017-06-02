<?php
header('Access-Control-Allow-Origin:*'); 
header("Content-type:text/html;charset=utf-8");

include_once ("util/dbconnect.php");

$apply = "SELECT * FROM fc_user";
$apply1 = mysql_query($apply);
$temp = mysql_num_rows($apply1);
for ($i = 0; $i < $temp; $i++) {
	$row = mysql_fetch_row($apply1);
	echo $row[1];
}

var_dump($apply1[0]);


// $json_obj = "";

// $json_arrtwo = array("sex"=>0,"name"=>"juvo");
// $json_arr = array("is_authcode"=>0,"pass"=>12,"info"=>$json_arrtwo);
// $json_obj = json_encode($json_arr);

// $array = array( 
// 'username'=>'杨铸', 
// 'password'=>'123456', 
// 'user_id'=>1 
// ); 
// echo json_encode($array); 

