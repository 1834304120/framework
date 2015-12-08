<?php

return [
    // 应用模式状态
    'app_status'            => '',
    // PATHINFO变量名 用于兼容模式
    'var_pathinfo'          => 's',
    // 兼容PATH_INFO获取
    'pathinfo_fetch'        => 'ORIG_PATH_INFO,REDIRECT_PATH_INFO,REDIRECT_URL',
    // 扩展配置文件
    'extra_config_list'     => ['database', 'route'],
    // pathinfo分隔符
    'pathinfo_depr'         => '/',
    // 默认模块名
    'default_module'        => 'index',
    // 禁止访问模块
    'deny_module_list'      => [COMMON_MODULE, 'runtime'],
    // 默认控制器名
    'default_controller'    => 'index',
    // 默认操作名
    'default_action'        => 'index',
    // 默认的空控制器名
    'empty_controller'      => 'error',
    // 操作方法后缀
    'action_suffix'         => '',
    // 获取当前页面地址的系统变量 默认为REQUEST_URI
    'url_request_uri'       => 'REQUEST_URI',
    // 基础URL路径
    'base_url'              => $_SERVER["SCRIPT_NAME"],
    // URL伪静态后缀
    'url_html_suffix'       => '.html',
    // url变量绑定
    'url_params_bind'       => true,
    // 异常页面的模板文件
    'exception_tmpl'        => THINK_PATH . 'tpl/think_exception.tpl',
    // 默认跳转页面对应的模板文件
    'dispatch_jump_tmpl'    => THINK_PATH . 'tpl/dispatch_jump.tpl',
    // 默认AJAX 数据返回格式,可选JSON XML ...
    'default_ajax_return'   => 'JSON',
    // 默认JSONP格式返回的处理方法
    'default_jsonp_handler' => 'jsonpReturn',
    'var_jsonp_handler'     => 'callback',
    'template_engine'       => 'think',
    'action_bind_class'     => false,
    'url_module_map'        => [],
    'response_exit'         => true,

    /* 错误设置 */
    //错误显示信息,非调试模式有效
    'error_message'         => '页面错误！请稍后再试～',
    // 错误定向页面
    'error_page'            => '',
    // 显示错误信息
    'show_error_msg'        => false,
    //默认输出类型
    'default_return_type'   => 'html',
    //默认语言
    'default_lang'          => 'zh-cn',
    //是否使用session
    'use_session'           => true,
    //url地址的后缀
    'url_deny_suffix'       => '',
    //是否必须使用路由
    'url_route_must'        => false,

    'log'                   => [
        'type' => 'File',
        'path' => LOG_PATH,
    ],

    'cache'                 => [
        'type'   => 'File',
        'path'   => CACHE_PATH,
        'prefix' => '',
        'expire' => 0,
    ],

    'session'               => [
        'prefix'     => 'think',
        'type'       => '',
        'auto_start' => true,
    ],

    /* 数据库设置 */
    'database'              => [
        // 数据库类型
        'type'        => 'mysql',
        // 数据库连接DSN配置
        'dsn'         => '',
        // 服务器地址
        'hostname'    => 'localhost',
        // 数据库名
        'database'    => '',
        // 数据库用户名
        'username'    => 'root',
        // 数据库密码
        'password'    => '',
        // 数据库连接端口
        'hostport'    => '',
        // 数据库连接参数
        'params'      => [],
        // 数据库编码默认采用utf8
        'charset'     => 'utf8',
        // 数据库表前缀
        'prefix'      => '',
        // 数据库调试模式
        'debug'       => false,
        // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
        'deploy'      => 0,
        // 数据库读写是否分离 主从式有效
        'rw_separate' => false,
        // 读写分离后 主服务器数量
        'master_num'  => 1,
        // 指定从服务器序号
        'slave_no'    => '',
    ],
    /* SocketLog 调试  */
    'slog'                  => [
        'host'                => 'localhost',
        //是否显示利于优化的参数，如果允许时间，消耗内存等
        'optimize'            => true,
        'show_included_files' => true,
        'error_handler'       => true,
        //日志强制记录到配置的client_id
        'force_client_id'     => '',
        //限制允许读取日志的client_id
        'allow_client_ids'    => array(),
    ],
];
