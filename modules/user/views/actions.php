<?php
include '../../core/db.php';  // 引入数据库连接文件

$action = $_GET['action'];

if ($action == 'updateProfile') {
    session_start();  // 确保我们有一个会话
    if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
        echo "请先登录!";
        exit;
    }

    $userId = $_SESSION['user_id'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // 如果用户提供了新密码，则更新密码；否则只更新电子邮件。
    if (!empty($password)) {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE users SET password = ?, email = ? WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('ssi', $passwordHash, $email, $userId);
    } else {
        $sql = "UPDATE users SET email = ? WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('si', $email, $userId);
    }

    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "资料更新成功!";
    } else {
        echo "资料更新失败，请重试!";
    }

    $stmt->close();
}

if ($action == 'logout') {
    session_start();  // 启动会话
    session_unset();  // 删除所有会话变量
    session_destroy();  // 销毁会话

    echo "注销成功!";
    // 可以重定向到主页或登录页面，例如：
    // header("Location: /path/to/login/page.php");
    exit;
}

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

    if ($user && password_verify($password, $user['password'])) {  // 使用password_verify()函数检查密码是否正确
        // 密码正确，开始会话并设置会话变量
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $user['username'];
        $_SESSION['user_id'] = $user['id'];

        echo "登录成功!";
        // 可以重定向到用户的主页或其他页面
    } else {
        echo "登录失败，用户名或密码错误!";
    }

    $stmt->close();
}

if ($action == 'register') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);  // 使用安全的方法对密码进行哈希处理
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

