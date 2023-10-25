<?php
require_once 'config.php';

// 创建数据库连接
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// 检查连接
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
