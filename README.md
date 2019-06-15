# validator
通用检验类-抽离选自https://www.kancloud.cn/manual/thinkphp5/129320

格式验证类
require
验证某个字段必须，例如：

'name'=>'require'
number 或者 integer
验证某个字段的值是否为数字（采用filter_var验证），例如：

'num'=>'number'
float
验证某个字段的值是否为浮点数字（采用filter_var验证），例如：

'num'=>'float'
boolean
验证某个字段的值是否为布尔值（采用filter_var验证），例如：

'num'=>'boolean'
email
验证某个字段的值是否为email地址（采用filter_var验证），例如：

'email'=>'email'
array
验证某个字段的值是否为数组，例如：

'info'=>'array'
accepted
验证某个字段是否为为 yes, on, 或是 1。这在确认"服务条款"是否同意时很有用，例如：

'accept'=>'accepted'
date
验证值是否为有效的日期，例如：

'date'=>'date'
会对日期值进行strtotime后进行判断。

alpha
验证某个字段的值是否为字母，例如：

'name'=>'alpha'
alphaNum
验证某个字段的值是否为字母和数字，例如：

'name'=>'alphaNum'
alphaDash
验证某个字段的值是否为字母和数字，下划线_及破折号-，例如：

'name'=>'alphaDash'
chs
验证某个字段的值只能是汉字，例如：

'name'=>'chs'
chsAlpha
验证某个字段的值只能是汉字、字母，例如：

'name'=>'chsAlpha'
chsAlphaNum
验证某个字段的值只能是汉字、字母和数字，例如：

'name'=>'chsAlphaNum'
chsDash
验证某个字段的值只能是汉字、字母、数字和下划线_及破折号-，例如：

'name'=>'chsDash'
activeUrl
验证某个字段的值是否为有效的域名或者IP，例如：

'host'=>'activeUrl'
url
验证某个字段的值是否为有效的URL地址（采用filter_var验证），例如：

'url'=>'url'
ip
验证某个字段的值是否为有效的IP地址（采用filter_var验证），例如：

'ip'=>'ip'
支持验证ipv4和ipv6格式的IP地址。

dateFormat:format
验证某个字段的值是否为指定格式的日期，例如：

'create_time'=>'dateFormat:y-m-d'
长度和区间验证类
in
验证某个字段的值是否在某个范围，例如：

'num'=>'in:1,2,3'
notIn
验证某个字段的值不在某个范围，例如：

'num'=>'notIn:1,2,3'
between
验证某个字段的值是否在某个区间，例如：

'num'=>'between:1,10'
notBetween
验证某个字段的值不在某个范围，例如：

'num'=>'notBetween:1,10'
length:num1,num2
验证某个字段的值的长度是否在某个范围，例如：

'name'=>'length:4,25'
或者指定长度

'name'=>'length:4'
如果验证的数据是数组，则判断数组的长度。
如果验证的数据是File对象，则判断文件的大小。

max:number
验证某个字段的值的最大长度，例如：

'name'=>'max:25'
如果验证的数据是数组，则判断数组的长度。
如果验证的数据是File对象，则判断文件的大小。

min:number
验证某个字段的值的最小长度，例如：

'name'=>'min:5'
如果验证的数据是数组，则判断数组的长度。
如果验证的数据是File对象，则判断文件的大小。

after:日期
验证某个字段的值是否在某个日期之后，例如：

'begin_time' => 'after:2016-3-18',
before:日期
验证某个字段的值是否在某个日期之前，例如：

'end_time'   => 'before:2016-10-01',
expire:开始时间,结束时间
验证当前操作（注意不是某个值）是否在某个有效日期之内，例如：

'expire_time'   => 'expire:2016-2-1,2016-10-01',
allowIp:allow1,allow2,...
验证当前请求的IP是否在某个范围，例如：

'name'   => 'allowIp:114.45.4.55',
该规则可以用于某个后台的访问权限

denyIp:allow1,allow2,...
验证当前请求的IP是否禁止访问，例如：

'name'   => 'denyIp:114.45.4.55',
字段比较类
confirm
验证某个字段是否和另外一个字段的值一致，例如：

'repassword'=>'require|confirm:password'
5.0.4+版本开始，增加了字段自动匹配验证规则，如password和password_confirm是自动相互验证的，只需要使用

'password'=>'require|confirm'
会自动验证和password_confirm进行字段比较是否一致，反之亦然。

different
验证某个字段是否和另外一个字段的值不一致，例如：

'name'=>'require|different:account'
eq 或者 = 或者 same
验证是否等于某个值，例如：

'score'=>'eq:100'
'num'=>'=:100'
'num'=>'same:100'
egt 或者 >=
验证是否大于等于某个值，例如：

'score'=>'egt:60'
'num'=>'>=:100'
gt 或者 >
验证是否大于某个值，例如：

'score'=>'gt:60'
'num'=>'>:100'
elt 或者 <=
验证是否小于等于某个值，例如：

'score'=>'elt:100'
'num'=>'<=:100'
lt 或者 <
验证是否小于某个值，例如：

'score'=>'lt:100'
'num'=>'<:100'
验证字段比较支持对比其他字段（V5.0.8+）
验证对比其他字段大小（数值大小对比），例如：

'price'=>'lt:market_price'
'price'=>'<:market_price'
filter验证
支持使用filter_var进行验证，例如：

'ip'=>'filter:validate_ip'
正则验证
支持直接使用正则验证，例如：

'zip'=>'\d{6}',
// 或者
'zip'=>'regex:\d{6}',
如果你的正则表达式中包含有|符号的话，必须使用数组方式定义。

'accepted'=>['regex'=>'/^(yes|on|1)$/i'],
也可以实现预定义正则表达式后直接调用，例如在验证器类中定义regex属性

    protected $regex = [ 'zip' => '\d{6}'];
然后就可以使用

'zip'	=>	'regex:zip',
上传验证
file
验证是否是一个上传文件

image:width,height,type
验证是否是一个图像文件，width height和type都是可选，width和height必须同时定义。

fileExt:允许的文件后缀
验证上传文件后缀

fileMime:允许的文件类型
验证上传文件类型

fileSize:允许的文件字节大小
验证上传文件大小

行为验证
使用行为验证数据，例如：

'data'=>'behavior:\app\index\behavior\Check'
其它验证
unique:table,field,except,pk
版本	调整功能
5.0.5	支持指定完整模型类 并且默认会优先检测模型类是否存在 不存在则检测数据表
验证当前请求的字段值是否为唯一的，例如：

// 表示验证name字段的值是否在user表（不包含前缀）中唯一
'name'   => 'unique:user',
// 验证其他字段
'name'   => 'unique:user,account',
// 排除某个主键值
'name'   => 'unique:user,account,10',
// 指定某个主键值排除
'name'   => 'unique:user,account,10,user_id',
如果需要对复杂的条件验证唯一，可以使用下面的方式：

// 多个字段验证唯一验证条件
'name'   => 'unique:user,status^account',
// 复杂验证条件
'name'   => 'unique:user,status=1&account='.$data['account'],
requireIf:field,value
验证某个字段的值等于某个值的时候必须，例如：

// 当account的值等于1的时候 password必须
'password'=>'requireIf:account,1'
requireWith:field
验证某个字段有值的时候必须，例如：

// 当account有值的时候password字段必须
'password'=>'requireWith:account'
