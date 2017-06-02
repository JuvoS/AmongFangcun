<?php
/**
 * Created by PhpStorm.
 * User: Juvo
 * Date: 2017/1/2
 * Time: 0:47
 */

defined('IN_QIMUREN') or die('Deny Access');
header("Content-Type:text/html;charset=utf-8");
define('SITENAME', 'QIMUREN');
define('VERSION', '1.0.0');
//基础路径..\manager\plugins/
defined('BASE_PATH') or define('BASE_PATH', dirname(__FILE__) . '/');
//echo BASE_PATH;
//父路径../manager/
defined('ROOT_PATH') or define('ROOT_PATH', str_replace('\\', '/', realpath(dirname(__FILE__) . '/../')) . '/');
// echo ROOT_PATH;

// /* 系统函数 */
// require(BASE_PATH . 'config/handle.php');
//  设备判断 
// require(BASE_PATH . 'config/mobile_config.php');


/*加载文件*/
//load_file(BASE_PATH . 'config/contant.php');
//require("/config/contant.php");

try {
	if(!empty($_GET["a"])){
		require('modules_class/a.php');
	}
	if(!empty($_GET["json"])){
		require('modules_class/json.php');
	}
	if(!empty($_GET["admin"])){
		require('modules_class/admin.php');
	}else{
		/* 控制器类是否存在 */
	    if (empty($_GET["go"])) {
	    	require('modules_class/index.php');
	        // load_file(BASE_PATH . 'config/contant.php');
	    }else{
	    	if($_GET["go"]=="welcome"){
	    		require('modules_class/welcome.php');
		    }
		    if($_GET["go"]==2){
		        load_file(BASE_PATH . 'config/contant.php');
		    }
		    if($_GET["go"]==3){
		        if (isMobile())
				    echo '手机登录m.jb51.com';
				else
				    echo '电脑登录www.jb51.com';
		    }
		    if($_GET["go"]==4){
		//      echo BASE_PATH . 'modules_class/a.php';
		        require('modules_class/dex.php');
		    }
			if($_GET["go"]==5){
				include(ROOT_PATH. 'data/template/up.html');
			}
	    }
	}
    
    
	
} catch (Exception $e) {
    E('不存在', 404);
}

?>