<?php
/**
 * Created by PhpStorm.
 * User: 11951
 * Date: 2019/6/14
 * Time: 23:00
 */

namespace vendor;

use model\User;

define('IN_WEB', true);
define('IN_API', true);

defined('IN_WEB') or die('Include Error!');

set_time_limit(30);
mb_internal_encoding("UTF-8");
date_default_timezone_set('Asia/Shanghai');

// 全局配置
$config = [];

// 载入配置文件
include __DIR__ . '/config/config.inc.php';

IN_WEB_ENV == 'local' && ini_set('display_errors', 1);

// 载入Loader类
require PATH_LIB . '/Loader.php';

Loader::register();


$data = [
    'name'  => '名校',
    'age'   => '你大爷',
    'email' => 'thinkphp@qq.com',
];

$validate = new User();
$validate->scene('edit')->batch()->check($data);

Loader::p($validate->getError());
