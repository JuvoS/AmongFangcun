<?php
/**
 * Created by PhpStorm.
 * User: Juvo
 * Date: 2017/1/2
 * Time: 22:41
 */

//包含class.smarttemplate.php文件
require("plugins/s_config/class.smarttemplate.php");

//实例化SmartTemplate的一个对象，并与a.html关联
$page = new SmartTemplate("welcome.html");

//与Html中的占位符关联
$page->assign("name","姓名张三");
$page->assign("Email","Email没有");

//输出
$page->output();