<?php
/**
 * Created by PhpStorm.
 * User: Juvo
 * Date: 2017/1/2
 * Time: 0:54
 */


/**
 * 加载配置文件 支持格式转换 仅支持一级配置
 * @param string $file 配置文件名
 * @param string $parse 配置解析方法 有些格式需要用户自己解析
 * @return void
 */
function load_file($file) {
    if (file_exists($file)) {
        return include $file;
    }
}

/**
 * 返回404错误
 * @param $msg
 * @param int $code 404
 */
function E($msg, $code = 0) {
    include(ROOT_PATH. 'data/template/404.html');
    exit();
}