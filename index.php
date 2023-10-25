<?php
require_once 'core/bootstrap.php';

// 根据用户的请求参数来决定加载哪个模块
// 例如，如果请求参数 action=login，则加载用户登录视图
// 如果请求参数 action=generate，则加载密码生成器视图

$action = $_GET['action'];

if ($action == 'login') {
    require 'modules/user/views/login.php';
} elseif ($action == 'register') {
    require 'modules/user/views/register.php';
} elseif ($action == 'generate') {
    require 'modules/generator/views/generate.php';
} else {
    // 加载默认页面或首页
    require 'modules/home/views/index.php';
}
// 默认加载主页视图
require_once 'modules/home/views/index.php';
?>
