<?php
/**
 * Created by PhpStorm.
 * User: 11951
 * Date: 2019/6/15
 * Time: 16:24
 */

namespace model;

use vendor\Loader;
use vendor\validator\Validate;

class User extends Validate
{
    protected $rule = [
        'name' => 'require|checkName:thinkphp|max:25',
        'age' => 'number|between:1,120',
        'email' => 'email',
    ];

    protected $message = [
        'name.require' => '10001-名称必须',
        'name.max' => '10002-名称最多不能超过25个字符',
        'age.number' => '10003-年龄必须是数字',
        'age.between' => '10004-年龄只能在1-120之间',
        'email' => '10005-邮箱格式错误',
    ];

    protected $scene = [
        'edit' => ['name', 'age'],
    ];

    // 自定义验证规则
    protected function checkName($value, $rule, $data)
    {
        return $rule == $value ? true : '10006-名称错误';
    }
}
