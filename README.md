<div>
    app                                [PHP应用目录]<br/>
    ├── app                            [模块目录]<br/>
    │   ├── controllers                [控制器目录]<br/>
    │   │      └── Index.php           [默认控制器文件，输出json数据]<br/>
    │   ├── logics                     [逻辑层，主要写业务逻辑的地方]<br/>
    │   │   ├── exceptions             [异常目录]<br/>
    │   │   ├── gateway                [一个逻辑层实现的gateway演示]<br/>
    │   │   ├── tools                  [工具类目录]<br/>
    │   │   └── UserDefinedCase.php    [注册框架加载到路由前的处理用例]<br/>
    │   └── models                     [数据模型目录]<br/>
    │       └── TestTable.php          [演示模型文件，定义一一对应的数据模型]<br/>
    ├── config                         [配置目录]<br/>
    │    ├── demo                      [模块配置目录]<br/>
    │    │   ├── config.php            [模块自定义配置]<br/>
    │    │   └── route.php             [模块自定义路由]<br/>
    │    ├── common.php                [公共配置]<br/>
    │    ├── database.php              [数据库配置]<br/>
    │    └── nosql.php                 [nosql配置]<br/>
    docs                               [接口文档目录]<br/>
    ├── apib                           [Api Blueprint]<br/>
    │    └── demo.apib                 [接口文档示例文件]<br/>
    ├── swagger                        [swagger]<br/>
    framework                          [Easy PHP核心框架目录]<br/>
    ├── exceptions                     [异常目录]<br/>
    │      ├── CoreHttpException.php   [核心http异常]<br/>
    ├── handles                        [框架运行时挂载处理机制类目录]<br/>
    │      ├── Handle.php              [处理机制接口]<br/>
    │      ├── ErrorHandle.php         [错误处理机制类]<br/>
    │      ├── ExceptionHandle.php     [未捕获异常处理机制类]<br/>
    │      ├── ConfigHandle.php        [配置文件处理机制类]<br/>
    │      ├── NosqlHandle.php         [nosql处理机制类]<br/>
    │      ├── LogHandle.php           [log机制类]<br/>
    │      ├── UserDefinedHandle.php   [用户自定义处理机制类]<br/>
    │      └── RouterHandle.php        [路由处理机制类]<br/>
    ├── orm                            [对象关系模型]<br/>
    │      ├── Interpreter.php         [sql解析器]<br/>
    │      ├── DB.php                  [数据库操作类]<br/>
    │      ├── Model.php               [数据模型基类]<br/>
    │      └── db                      [数据库类目录]<br/>
    │          └── Mysql.php           [mysql实体类]<br/>
    ├── nosql                          [nosql类目录]<br/>
    │    ├── Memcahed.php              [Memcahed类文件]<br/>
    │    ├── MongoDB.php               [MongoDB类文件]<br/>
    │    └── Redis.php                 [Redis类文件]<br/>
    ├── App.php                        [框架类]<br/>
    ├── Container.php                  [服务容器]<br/>
    ├── Helper.php                     [框架助手类]<br/>
    ├── Load.php                       [自加载类]<br/>
    ├── Request.php                    [请求类]<br/>
    ├── Response.php                   [响应类]<br/>
    ├── run.php                        [框架应用启用脚本]<br/>
    frontend                           [前端源码和资源目录]<br/>
    ├── src                            [资源目录]<br/>
    │    ├── components                [vue组件目录]<br/>
    │    ├── views                     [vue视图目录]<br/>
    │    ├── images                    [图片]<br/>
    │    ├── ...<br/>   
    ├── app.js                         [根js]<br/>
    ├── app.vue                        [根组件]<br/>
    ├── index.template.html            [前端入口文件模板]<br/>
    ├── store.js                       [vuex store文件]<br/>
    public                             [公共资源目录，暴露到万维网]<br/>
    ├── dist                           [前端build之后的资源目录，build生成的目录，不是发布分支忽略该目录]<br/>
    │    └── ...<br/>   
    ├── index.html                     [前端入口文件,build生成的文件，不是发布分支忽略该文件]<br/>
    ├── index.php                      [后端入口文件]<br/>
    runtime                            [临时目录]<br/>
    ├── logs                           [日志目录]<br/>
    ├── build                          [php打包生成phar文件目录]<br/>
    tests                              [单元测试目录]<br/>
    ├── demo                           [模块名称]<br/>
    │      └── DemoTest.php            [测试演示]<br/>
    ├── TestCase.php                   [测试用例]<br/>
    vendor                             [composer目录]<br/>
    .git-hooks                         [git钩子目录]<br/>
    ├── pre-commit                     [git pre-commit预commit钩子示例文件]<br/>
    ├── commit-msg                     [git commit-msg示例文件]<br/>
    .babelrc                           [babel配置文件]<br/>
    .env                               [环境变量文件]<br/>
    .gitignore                         [git忽略文件配置]<br/>
    build                              [php打包脚本]<br/>
    cli                                [框架cli模式运行脚本]<br/>
    LICENSE                            [lincese文件]<br/>
    logo.png                           [框架logo图片]<br/>
    composer.json                      [composer配置文件]<br/>
    composer.lock                      [composer lock文件]<br/>
    package.json                       [前端依赖配置文件]<br/>
    phpunit.xml                        [phpunit配置文件]<br/>
    README-CN.md                       [中文版readme文件]<br/>
    README.md                          [readme文件]<br/>
    webpack.config.js                  [webpack配置文件]<br/>
    yarn.lock                          [yarn　lock文件]<br/>
</div>