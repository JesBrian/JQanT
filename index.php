<?php

////////////////////////////////////////////////////////////////////
//                             _ooOoo_                            //
//                            o8888888o                           //
//                            88" . "88                           //
//                            (| -_- |)                           //
//                            O\  =  /O                           //
//                         ____/`---'\____                        //
//                       .'  \\|     |//  `.                      //
//                      /  \\|||  :  |||//  \                     //
//                     /  _||||| -:- |||||-  \                    //
//                     |   | \\\  -  /// |   |                    //
//                     | \_|  ''\---/''  |   |                    //
//                     \  .-\__  `-`  ___/-. /                    //
//                   ___`. .'  /--.--\  `. . __                   //
//                ."" '<  `.___\_<|>_/___.'  >'"".                //
//               | | :  `- \`.;`\ _ /`;.`/ - ` : | |              //
//               \  \ `-.   \_ __\ /__ _/   .-` /  /              //
//          ======`-.____`-.___\_____/___.-`____.-'======         //
//                             `=---='                            //
//          ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^         //
//                     佛祖保佑        永无BUG                      //
//            佛曰：                                               //
//                   写字楼里写字间,写字间里程序员;                    //
//                   程序人员写程序,又拿程序换酒钱.                    //
//                   酒醒只在网上坐,酒醉还来网下眠;                    //
//                   酒醉酒醒日复日,网上网下年复年.                    //
//                   但愿老死电脑间,不愿鞠躬老板前;                    //
//                   奔驰宝马贵者趣,公交自行程序员.                    //
//                   别人笑我忒疯癫,我笑自己命太贱;                    //
//                   不见满街漂亮妹,哪个归得程序员?                    //
////////////////////////////////////////////////////////////////////

/**
 * 项目入口文件
 *  1 - 定义常量
 *  2 - 加载函数库
 *  3 - 启动框架
 */

/**
 * 项目代码所在根目录
 */
define('JQANT', realpath('./'));

/**
 * 框架核心代码目录
 */
define('JQANT_CORE', JQANT . '/core');

/**
 * 项目扩展代码目录
 */
define('APP', JQANT . '/app');

/**
 * 配置文件代码目录
 */
define('CONFIG', JQANT . '/config');



$GLOBALS['config'] = require CONFIG . '/global.php';

require './vendor/autoload.php';
require JQANT_CORE . '/HelperFunction/index.php';
require JQANT_CORE . '/Index.php';

spl_autoload_register('\core\Index::autoloadClass');


if (config('isDebug') === true) {
    $whoops = new \Whoops\Run();
    $errorTitle = '框架运行错误';
    $option = new \Whoops\Handler\PrettyPageHandler();
    $option->setPageTitle($errorTitle);
    $whoops->pushHandler($option);
    $whoops->register();

    ini_set('display_errors', 'ON');
} else {
    ini_set('display_errors', 'OFF');
}
if ((config('sessionAutoStart') === true) && (PHP_SESSION_ACTIVE !== session_status())) {
    session_start();
}


\core\Index::bootstrap();

