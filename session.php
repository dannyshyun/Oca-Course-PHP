<!DOCTYPE html>
<?php
session_start();

if (empty($messageArray)) {
    header("Location: error.php");
    exit();
}

$message = isset($_GET["message"]) ? $_GET["message"] : null;
if (!empty($message)) {
    if (isset($_SESSION["messageArray"]) === false) {
        $_SESSION["messageArray"] = array();
    }
    $_SESSION["messageArray"][] = $message;
}
$messageArray = isset($_SESSION["messageArray"]) ? $_SESSION["messageArray"] : null;
?>
<html>

<head>
    <title>Your Page Title</title>
</head>

<body>
    <form action="http://localhost/session_save.php" method="get">
        セッションに保存させる文字列を入力してください。<br />
        <input type="text" name="message" /><br />
        <input type="submit" />
    </form>
    <br />
    <br />
    <?php
    if (!empty($messageArray)) {
        foreach ($messageArray as $message) {
            $sntMessage = htmlspecialchars($message);
            echo ("$sntMessage<br>");
        }
    }
    ?><br>
    <a href="http://localhost/session_delete.php">セッションデータを削除</a>
</body>

</html>