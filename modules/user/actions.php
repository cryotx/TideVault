<?php
include '../../core/db.php';  // 引入数据库连接文件

$action = $_GET['action'];

if ($action == 'login') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // 从数据库中获取用户信息
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        // 密码正确，开始会话并设置会话变量
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $user['username'];
        $_SESSION['user_id'] = $user['id'];

        header("Location: /modules/user/views/dashboard.php");
        exit;
    } else {
        echo "登录失败，用户名或密码错误!";
    }

    $stmt->close();
}

if ($action == 'register') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];

    // 插入数据到数据库
    $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('sss', $username, $password, $email);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "注册成功!";
    } else {
        echo "注册失败，请重试!";
    }

    $stmt->close();
}

if ($action == 'logout') {
    session_start();
    session_destroy();
    header("Location: /");
    exit;
}
?>
