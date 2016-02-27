<?php
/**
 * 前台入口文件
 */

$httpHost = 'http://'.$_SERVER['HTTP_HOST'].substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], '/index.php'));
$url = $httpHost.'/m/index.php';
@header('Location: '.$url);