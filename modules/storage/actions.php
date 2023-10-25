<?php
include '../../core/db.php';  // 引入数据库连接文件

$action = $_GET['action'];

if ($action == 'store') {
    session_start();
    $userId = $_SESSION['user_id'];
    $title = $_POST['title'];
    $password = $_POST['password'];

    $sql = "INSERT INTO password_storage (user_id, title, password) VALUES (?, ?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('iss', $userId, $title, $password);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "密码保存成功!";
    } else {
        echo "密码保存失败，请重试!";
    }

    $stmt->close();
}
