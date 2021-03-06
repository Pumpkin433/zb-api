<?php
/**
 * Created by PhpStorm.
 * User: xuliulei
 * Date: 2017/12/14 0014
 * Time: 16:08
 */

/*********************以下是全局变量的定义****************************/

/**
 * 错误码定义
 * 0代表没有错误
 * -10000开头是SQL错误
 * -20000开头是操作错误
 * -30000开头的是异常错误
 */
$GLOBALS['ERROR_SUCCESS'] = "0";
$GLOBALS['ERROR_SQL_INIT'] = "-10000001";                   //SQL数据库初始化错误
$GLOBALS['ERROR_SQL_INSERT'] = "-10000002";                 //插入出错，没有任何记录插入
$GLOBALS['ERROR_SQL_DELETE'] = "-10000003";                 //删除出错，没有任何记录被删除
$GLOBALS['ERROR_SQL_UPDATE'] = "-10000004";                 //更新出错，没有任何记录被更新
$GLOBALS['ERROR_SQL_QUERY'] = "-10000005";                    //查询出错，记录不存在
$GLOBALS['ERROR_POST'] = "-10000006";                        //不是POST传值
$GLOBALS['ERROR_RECORD_INSERT'] = "-10000007";                     //没有需要添加进数据库的新日志记录
$GLOBALS['ERROR_REDISKEY_NOT_EXISTS'] = "-10000008";                //查询出错，不存在要查询的键
$GLOBALS['ERROR_SERVERID_EXISTS'] = "-10000009";                //服务器Id不存在

$GLOBALS['ERROR_LOGIN'] = "-20000001";                        //登录错误
$GLOBALS['ERROR_PARAM_MISSING'] = "-20000002";                //参数缺失
$GLOBALS['ERROR_PERMISSION'] = "-20000003";                    //权限错误
$GLOBALS['ERROR_REQUEST'] = "-20000004";                    //请求错误，接口不存在

$GLOBALS['ERROR_REGISTER_DUPLICATEEMAIL'] = "-20000006";    //注册邮箱重复出错
$GLOBALS['ERROR_REGISTER'] = "-20000007";                    //注册出错
$GLOBALS['ERROR_REGISTER_DUPLICATEUSERNAME'] = "-20000008";    //注册用户名重复出错
$GLOBALS['ERROR_REGISTER_DUPLICATEPHONE'] = "-20000009";    //注册手机重复出错
$GLOBALS['ERROR_REGISTER_TYPE'] = "-20000010";                //注册方式不存在出错
$GLOBALS['ERROR_LOGIN_TYPE'] = "-20000011";                    //登录方式不存在出错
$GLOBALS['ERROR_INPUT_FORMAT'] = "-20000013";                //输入格式错误

$GLOBALS['ERROR_REGISTER_DUPLICATEWECHAT'] = "-20000015";   //微信账号已绑定
$GLOBALS['ERROR_INSERT_REDIS'] = "-20000016";               //REDIS插入失败
$GLOBALS['ERROR_ACCOUNT_NOT_EXIST'] = "-20000017";               //REDIS插入失败
$GLOBALS['ERROR_PARAM_WRONG'] = "-20000018";                //参数不正确

$GLOBALS['ERROR_USER_EXISTS'] = "-20000020";                //用户不存在
$GLOBALS['ERROR_PASSWORD'] = "-20000021";                   // 密码错误

$GLOBALS['ERROR_REVIEW_REFUSE'] = '-20000027';
$GLOBALS['ERROR_REVIEW_WAIT'] = '-20000028';
$GLOBALS['ERROR_REVIEW_WAIT_HAVE'] = '-20000029';


$GLOBALS['ERROR_EXCEPTION'] = "-30000001";                    //出现异常
$GLOBALS['ERROR_DB_EXCEPTION'] = "-30000000";                //数据库操作出现异常
$GLOBALS['ERROR_PDO_EXCEPTION'] = "-300000006";            //PDO操作出现异常
$GLOBALS['ERROR_DATA_NOT_FOUND_EXCEPTION'] = "-300000007";    //数据操作出现异常
$GLOBALS['ERROR_MODEL_NOT_FOUND_EXCEPTION'] = "-300000008";    //模型操作出现异常

$GLOBALS['ERROR_FILE_UPLOAD'] = "-30000002";                //文件上传失败
$GLOBALS['ERROR_VCODE'] = "-30000003";                      //验证错误

$GLOBALS['SHA256_SALT'] = "adhisugdd";        //加密的salt

$GLOBALS['userId'] = 0;

$GLOBALS['TOKEN_API'] = 'API';
$GLOBALS['REQUEST_ILLEGAL'] = '-1';

$GLOBALS['ACCESS_KEY_ID'] = 'LTAIfhJUYdW6Rd2t'; //短信
$GLOBALS['ACCESS_KEY_SECRET'] = 'e7CJAkAqUb9u4iOhFDnMUdEP18NX5E';
$GLOBALS['ENDPOINT'] = 'http://oss-cn-shanghai.aliyuncs.com';
$GLOBALS['BUCKET'] = 'zb-pic-server';

$GLOBALS['WEB_ID'] = 'zhengbuwangluokejiwebid';
$GLOBALS['WEB_SECRET'] = 'zhengbuwangluokejisecret';

$GLOBALS['PIC_SERVER'] = 'pic.zhengbu121.com';

/*************************************数据库参数********************************************/
$GLOBALS['redis_port'] = '';
$GLOBALS['redis_auth'] = '';

$GLOBALS['CDN_URL'] = '127.0.0.1:9090';
$GLOBALS['db_config'] = [
    // 数据库类型
    'type' => 'mysql',
    // 服务器地址
    'hostname' => '47.103.59.100',
    // 数据库名
    'database' => 'zb_soft_shop_cn',
    // 用户名
    'username' => 'root',
    // 密码
    'password' => '0045abcba22aad6d',
    // 端口
    'hostport' => '3306',
    // 数据库编码默认采用utf8
    'charset' => 'utf8mb4',
    // 数据库表前缀
    'prefix' => 'grace_',
    // 数据库调试模式
    'debug' => true,
    // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'deploy' => 0,
    // 数据库读写是否分离 主从式有效
    'rw_separate' => false,
    // 读写分离后 主服务器数量
    'master_num' => 1,
    // 指定从服务器序号
    'slave_no' => '',
    // 是否严格检查字段是否存在
    'fields_strict' => true,
    // 数据集返回类型
    'resultset_type' => 'array',
    // 自动写入时间戳字段
    'auto_timestamp' => false,
    // 时间字段取出后的默认时间格式
    'datetime_format' => 'Y-m-d H:i:s',
];

$GLOBALS['db_config_t'] = [
    // 数据库类型
    'type' => 'mysql',
    // 服务器地址
    'hostname' => '47.103.59.100',
    // 数据库名
    'database' => 'zhengbu',
    // 用户名
    'username' => 'root',
    // 密码
    'password' => '0045abcba22aad6d',
    // 端口
    'hostport' => '3306',
    // 数据库编码默认采用utf8
    'charset' => 'utf8mb4',
    // 数据库表前缀
    'prefix' => 't_',
    // 数据库调试模式
    'debug' => true,
    // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'deploy' => 0,
    // 数据库读写是否分离 主从式有效
    'rw_separate' => false,
    // 读写分离后 主服务器数量
    'master_num' => 1,
    // 指定从服务器序号
    'slave_no' => '',
    // 是否严格检查字段是否存在
    'fields_strict' => true,
    // 数据集返回类型
    'resultset_type' => 'array',
    // 自动写入时间戳字段
    'auto_timestamp' => false,
    // 时间字段取出后的默认时间格式
    'datetime_format' => 'Y-m-d H:i:s',
];

$GLOBALS['dbConfig2'] = [
    // 数据库类型
    'type' => 'mysql',
    // 服务器地址
    'hostname' => '47.103.102.222',
    // 数据库名
    'database' => 'zhengbu_data',
    // 用户名
    'username' => 'root',
    // 密码
    'password' => 'zhengbu123',
    // 端口
    'hostport' => '3306'
];

$GLOBALS['dbConfigRds'] = [
    // 数据库类型
    'type' => 'mysql',
    // 服务器地址
    'hostname' => 'zhengbu123.mysql.rds.aliyuncs.com',
    // 数据库名
    'database' => 'resume_data',
    // 用户名
    'username' => 'zhengbu',
    // 密码
    'password' => 'Zhengbu123',
    // 端口
    'hostport' => '3306'
];

$GLOBALS['mini_url'] = 'https://api.weixin.qq.com/sns/jscode2session';
$GLOBALS['mini_appid'] = 'wx02c9a76ab01f424c&secret=22f25c64080e8a640d93d104cbc2a3ea';
$GLOBALS['mini_secret'] = '56293785e60d1954790d8b09e202efd5';