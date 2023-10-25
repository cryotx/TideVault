
<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: /");
    exit;
}
?>

<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>用户仪表板</title>
</head>
<body>
    <div class="container mt-5">
        <h1>欢迎, <?php echo $_SESSION['username']; ?>!</h1>
        <p>这是您的用户仪表板。</p>

        <a href="/modules/generator/views/index.php" class="btn btn-primary">密码生成器</a>
        <!-- Add other module links here -->

        <a href="/modules/user/actions.php?action=logout" class="btn btn-danger mt-3">注销</a>
    </div>

    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
