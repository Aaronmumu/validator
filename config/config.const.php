<?php
/**
 * Const
 * Created by PhpStorm.
 * User: Aaron
 * Date: 2018/8/22
 * Time: 15:03
 */

define('DS', DIRECTORY_SEPARATOR);
define('CLASS_EXT', '.php');
define('LOG_EXT', '.log');

define('WWWROOT', dirname(dirname(__FILE__)) . DS);
define('PATH_CFG', WWWROOT . 'config'. DS);
define('PATH_LIB', WWWROOT . 'vendor'. DS);
define('PATH_DATA', WWWROOT . 'data'. DS);
define('PATH_MODEL', WWWROOT . 'model' . DS);
define('PATH_API', WWWROOT . 'api' . DS);
define('PATH_EXTEND', WWWROOT . 'lib' . DS . 'extend' . DS);
define('PATH_THEME', '../public' . DS . 'theme' . DS);

define('NOWTIME', $_SERVER['REQUEST_TIME']);
define('IS_CLI', PHP_SAPI == 'cli' ? true : false);
define('CONTROLLER_SUFFIX', '');
define('TPL_SUFFIX', '.html');