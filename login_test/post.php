<?php
//　セッションを開始
session_start();

// ユーザーIDを取得
$id = isset($_SESSION["id"]) ? $_SESSION["id"] : "";

// ユーザーが入力したメッセージを取得
$message = isset($_POST['message']) ? $_POST['message'] : '';

// ユーザーがログインしていない場合
if ($id === null) {
    header('Location:./top.php');
    exit();
}

if ($message == '') {
    $_SESSION['errorMessage'] = 'メッセージを入力してください。';
    header('Location: ./top.php');
    exit();
}

// セッションにメッセージを保存
if (!isset($_SESSION['message']) || !is_array($_SESSION['message'])) {
    $_SESSION['message'] = array();
}

if (!isset($_SESSION['message'][$id]) || !is_array($_SESSION['message'][$id])) {
    $_SESSION['message'][$id] = array();
}

// 保存されたメッセージを配列に追加
$_SESSION['message'][$id][] = $message;

?>

<html>

<head></head>

<body>
    <h1>メッセージを送信しました</h1>
    <?php
    $sntMessage = htmlspecialchars($message);
    echo $sntMessage . "<br>"; ?>
    <br>
    <a href="top.php">トップページに戻る</a>
</body>

</html>