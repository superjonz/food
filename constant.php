<?php
/**
 * 全局常量文件
 */

error_reporting(E_ALL & ~E_NOTICE);
define('WCP',true);
define('CBSYS',true);
define('WCP_ROOT_PATH',str_replace('\\','/',dirname(__FILE__)));
define('WCP_SYS_PATH',WCP_ROOT_PATH.'/cbsys');
define('WCP_DATA_PATH',WCP_ROOT_PATH.'/data');
define('SLASH','/');
define('SIGN','cbsys');

define('WCP_DIR_RES','static');
define('WCP_DIR_UPLOAD','attachment');

define('DENCRYPTCHARS','ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_.');
define('DENCRYPTKEY','-x6g6ZWm2G9g_vr0Bo.pOq3kRIxsZ6rm');
define('StartTime',microtime(true));
define('TIMESTAMP',time());

//定义模板路径
define('CBSYS_TEMP', WCP_ROOT_PATH.'/theme');
define('CBSYS_TEMP_TPL', CBSYS_TEMP.'/tpl');
define('CBSYS_TEMP_TPLC', CBSYS_TEMP.'/tpl_c');
define('CBSYS_TEMP_CACHE', CBSYS_TEMP.'/cache');
//模板默认名称
define('CBSYS_TPL_DEFAULT','theme');
//编译文件路径名称
define('CBSYS_TPL_COMPILE',WCP_ROOT_PATH.'/temp');
//文件后缀名
define('CBSYS_TPL_SUFFIX','.php');
//左侧标签
define('CBSYS_TPL_TAG_LEFT','<');
//右侧标签
define('CBSYS_TPL_TAG_RIGHT','>');

define('TPL_WCPSHOP_NAME','default');
define('TPL_WCPADMIN_NAME', 'default');
define('TPL_WCPM_NAME', 'default');

define('ATTACH_PATH','index');
define('ATTACH_COMMON','index/common');
define('ATTACH_FLASH','index/flash');
define('ATTACH_ARTICLE','index/article');
define('ATTACH_CASE','index/case');
define('ATTACH_M','m');
