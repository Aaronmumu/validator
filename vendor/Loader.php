<?php
/**
 * 类的自动加载
 * Created by PhpStorm.
 * User: 11951
 * Date: 2019/6/14
 * Time: 23:00
 */

namespace vendor;

class Loader
{
    protected static $class;

    /**
     * 注册
     */
    public static function register()
    {
        spl_autoload_register('vendor\\Loader::autoload', true, true);
    }

    /**
     * 自动加载
     * @param $class
     * @return bool
     */
    public static function autoload($class)
    {
        $class_md5_key = md5($class);
        if (isset(self::$class[$class_md5_key])) {
            self::loader(self::$class[$class_md5_key]);
            return true;
        }
        $class_path = str_replace('\\', '/', WWWROOT . $class . CLASS_EXT);
        if (!file_exists($class_path)) {
            return false;
        }
        self::$class[$class_md5_key] = $class_path;
        self::loader($class_path);
        return true;
    }

    /**
     * 文件加载
     * @param $class
     */
    public static function loader($class)
    {
        include $class;
    }

    /**
     * 打印函数
     * @param $data
     */
    public static function p($data)
    {
        echo '<pre>';
        print_r($data);
        exit();
    }

    /**
     * 字符串命名风格转换
     * type 0 将Java风格转换为C的风格 1 将C风格转换为Java的风格
     * @access public
     * @param  string $name 字符串
     * @param  integer $type 转换类型
     * @param  bool $ucfirst 首字母是否大写（驼峰规则）
     * @return string
     */
    public static function parseName($name, $type = 0, $ucfirst = true)
    {
        if ($type) {
            $name = preg_replace_callback('/_([a-zA-Z])/', function ($match) {
                return strtoupper($match[1]);
            }, $name);
            return $ucfirst ? ucfirst($name) : lcfirst($name);
        }

        return strtolower(trim(preg_replace("/[A-Z]/", "_\\0", $name), "_"));
    }
}
