<?php
function generateRandomPassword($length = 12, $includeNumbers = true, $includeUppercase = true, $includeLowercase = true, $includeSymbols = true) {
    $numbers = "0123456789";
    $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $lowercase = "abcdefghijklmnopqrstuvwxyz";
    $symbols = "!@#$%^&*()-_=+{}[]|;:'<>,.?~";

    $characters = "";
    if ($includeNumbers) {
        $characters .= $numbers;
    }
    if ($includeUppercase) {
        $characters .= $uppercase;
    }
    if ($includeLowercase) {
        $characters .= $lowercase;
    }
    if ($includeSymbols) {
        $characters .= $symbols;
    }

    $password = "";
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    
    return $password;
}

$action = $_GET['action'];

if ($action == 'generate') {
    $length = $_POST['length'];
    $includeNumbers = isset($_POST['includeNumbers']);
    $includeUppercase = isset($_POST['includeUppercase']);
    $includeLowercase = isset($_POST['includeLowercase']);
    $includeSymbols = isset($_POST['includeSymbols']);

    $generatedPassword = generateRandomPassword($length, $includeNumbers, $includeUppercase, $includeLowercase, $includeSymbols);

    echo "生成的密码: " . $generatedPassword;
    // 可以将此密码显示在用户界面上或提供复制到剪贴板的选项
}
