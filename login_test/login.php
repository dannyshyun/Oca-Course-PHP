<?php
session_start();

require_once(dirname(__FILE__) ."/const.php");

// 送信されたデータを取得
$username = isset($_POST['username']) ? $_POST['username'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";

// ユーザー名もしくはパスワードが空の場合
if ($username == "" || $password == "") {
    header("Location: ./top.php");
    exit();
}

// ユーザー名とパスワードが一致するかチェック
$isLoginSuccess = false;
foreach ($users as $key => $user) {
    if ($user['username'] == $username && $user['password'] == $password) {
        $_SESSION["id"] = $key;
        $isLoginSuccess = true;
        break;
    }
}

// ログイン成功
if ($isLoginSuccess) {
    $_SESSION['username'] = $username;
    header("Location: ./top.php");
} else {
    $_SESSION['errorMessage'] = "ユーザー名かパスワードが間違っています。";
    header("Location: ./top.php");
    exit();
}
