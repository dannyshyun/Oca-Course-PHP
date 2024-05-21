<?php
session_start();

require_once(dirname(__FILE__) . "/const.php");

// ユーザーIDを取得
$id = isset($_SESSION['id']) ? $_SESSION['id'] : null;
// echo ("現在のファイルへの絶対パス => " . __FILE__ . "<br>");
// echo ("現在のファイルがあるフォルダへの絶対パス => " . dirname(__FILE__) . "<br>");
// echo ("現在のファイルから見たconst.phpへのパス => " . dirname(__FILE__) . "<br>");
// echo ("現在のファイルがあるフォルダへの絶対パス => ". __DIR__. "<br>");

$username = "";
if ($id !== null) {
    $user = isset($users[$id]) ? $users[$id] : null;
    if ($user !== null) {
        $username = $user['username'];
    }
}

// エラーメッセージを取得
$errorMessage =  null;

// エラーメッセージをセッションから削除
if (isset($_SESSION['errorMessage'])) {
    $errorMessage = $_SESSION['errorMessage'];
    unset($_SESSION['errorMessage']);
}

// 過去のメッセージを取得
$messages = isset($_SESSION['message'][$id]) ? $_SESSION['message'][$id] : array();

?>
<html>

<head>
    <title>Login Page</title>
</head>

<body>
    <?php
    // ログインしていない場合、ログインフォームを表示
    if ($id === null) :
    ?>
        <form action="./login.php" method="post">
            ログイン情報を入力してください<br>
            <br>
            <?php
            // エラーメッセージがあれば表示
            if ($errorMessage) : ?>
                <span style="color:red;"><?php echo $errorMessage; ?></span><br>
            <?php endif; ?>
            ユーザー名 : <input type="text" name="username"><br>
            パスワード : <input type="password" name="password"><br>
            <input type="submit" value="Login"><br>
        </form>
    <?php
    // ログインしている場合、ユーザー名を表示
    else :
    ?>
        ログイン中 : <?php echo $username; ?><br>
        <a href="./logout.php">ログアウト</a><br>
        <br>
        <form action="./post.php" method="post">
            <?php if ($errorMessage !== "") : ?>
                <font color="red"><?php echo $errorMessage; ?></font><br>
            <?php endif;?>
            
            <input type="text" name="message" placeholder="投稿内容を入力してください"><br>
            <input type="submit" value="投稿"><br>
        </form>
        <br>
        ～～～　過去に入力されたメッセージ　～～～<br>
        <?php foreach ($messages as $message) : ?>
            <?php
            $sntMessage = htmlspecialchars($message);
            echo $message . "<br>";
            ?>
        <?php endforeach; ?>
    <?php endif; ?>

</body>

</html>