<!DOCTYPE html>
<?php
session_start();

$message = isset($_POST["message"]) ? $_POST["message"] : null;
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
    <form action="http://localhost/2004110009_Sai/03/addMessageExec.php" method="post">
        メッセージを入力してください：<br />
        <input type="text" name="message" /><br />
        <br />
        <input type="submit" />
    </form>
    <br />
    <br />
    ～～～過去に入力されたメッセージ～～～<br />
    <?php
    if (!empty($messageArray)) {
        foreach ($messageArray as $message) {
            $sntMessage = htmlspecialchars($message);
            echo ("$sntMessage<br>");
        }
    } else {
        echo ("まだメッセージは入力されていません<br>");
    }
    ?><br>
</body>

</html>