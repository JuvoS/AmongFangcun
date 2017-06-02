<?php
header('Access-Control-Allow-Origin:*'); 
header("Content-type:text/html;charset=utf-8");

$json_obj = "";

$json_arrtwo = array("sex"=>0,"name"=>"juvo");
$json_arr = array("is_authcode"=>0,"pass"=>12,"info"=>$json_arrtwo);
$json_obj = json_encode($json_arr);

if(empty($_POST['act'])){
	$temp=0;
}else{
	$temp=$_POST['act'];
}

$array = array( 
'username'=>'杨铸', 
'password'=>'123456', 
'user_id'=>1,
'act'=>$temp
); 
echo json_encode($array); 


?>