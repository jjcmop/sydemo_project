<?php
/**
 * Created by PhpStorm.
 * User: 姜伟
 * Date: 2019/9/6 0006
 * Time: 13:56
 */
namespace SyConstant;

use SyTrait\SimpleTrait;

final class Server
{
    use SimpleTrait;

    //进程常量
    const PROCESS_TYPE_TASK = 'Task'; //类型-task
    const PROCESS_TYPE_WORKER = 'Worker'; //类型-worker
    const PROCESS_TYPE_MANAGER = 'Manager'; //类型-manager
    const PROCESS_TYPE_MAIN = 'Main'; //类型-main

    //环境常量
    public static $totalEnvProject = [
        self::ENV_PROJECT_DEV,
        self::ENV_PROJECT_PRODUCT,
    ];
    public static $totalEnvSystem = [
        self::ENV_SYSTEM_BSD,
        self::ENV_SYSTEM_MAC,
        self::ENV_SYSTEM_LINUX,
    ];
    const ENV_PROJECT_DEV = 'dev'; //项目环境-测试
    const ENV_PROJECT_PRODUCT = 'product'; //项目环境-生产
    const ENV_SYSTEM_BSD = 'FreeBSD'; //系统环境-bsd
    const ENV_SYSTEM_MAC = 'Darwin'; //系统环境-mac
    const ENV_SYSTEM_LINUX = 'Linux'; //系统环境-linux
    const ENV_PORT_MIN = 1024; //端口-最小
    const ENV_PORT_MAX = 65535; //端口-最大

    //版本常量
    const VERSION_MIN_PHP = '7.1.0'; //最低版本-php
    const VERSION_MIN_SWOOLE = '4.3.6'; //最低版本-swoole
    const VERSION_MIN_SEASLOG = '1.9.0'; //最低版本-seaslog
    const VERSION_MIN_YAC = '2.0.2'; //最低版本-yac
    const VERSION_MIN_YAF = '3.0.7'; //最低版本-yaf
}