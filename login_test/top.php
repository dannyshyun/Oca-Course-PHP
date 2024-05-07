<?php
session_start();
// ユーザーIDを取得
$id = isset($_SESSION['id']) ? $_SESSION['id'] : null;
// エラーメッセージを取得
$errorMessage =  null;

// エラーメッセージをセッションから削除
if (isset($_SESSION['errorMessage'])) {
    $errorMessage = $_SESSION['errorMessage'];
    unset($_SESSION['errorMessage']);
}
?>
<html>

<head>
    <title>Login Page</title>
</head>

<body>
    <?php 
    // ログインしていない場合、ログインフォームを表示
    if (!$id):
    ?>
    <form action="login.php" method="post">
        ログイン情報を入力してください<br>
        <br>
        <?php
        // エラーメッセージがあれば表示
        if ($errorMessage):?>
        <span style="color:red;"><?php echo $errorMessage;?></span><br>
        <?php endif;?>
        ユーザー名 : <input type="text" name="username"><br>
        パスワード : <input type="password" name="password"><br>
        <input type="submit" value="Login"><br>
    </form>
    <?php 
    // ログインしている場合、ユーザー名を表示
    else:
   ?>
   ログイン中 : <?php echo $id;?><br>
   <?php endif;?>
    
</body>

</html>