<!DOCTYPE html>
<?php
session_start();
$message = isset($_POST["message"]) ? $_POST["message"] : null;
if (!empty($message)) {
    $_SESSION["message"] = $message;
}
$sessionData = isset($_SESSION["message"]) ? $_SESSION["message"] : null;
?>
<html>

<head>
    <title>Your Page Title</title>
</head>

<body>
    <form action="http://localhost/session.php" method="post">
        セッションに保存させる文字列を入力してください。<br />
        <input type="text" name="message" /><br />
        <input type="submit" />
    </form>
    <br />
    <br />
    <?php
    if (!empty($sessionData)) {
        $sntMessage = htmlspecialchars($sessionData);
        echo ("セッションに保存されたメッセージは'$sntMessage'です");
    }
    ?><br>
    <a href="http://localhost/session_delete.php">セッションデータを削除</a>
</body>

</html>