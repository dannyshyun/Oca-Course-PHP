<!DOCTYPE html>
<?php
session_start();
$messageArray = isset($_POST["messageArray"]) ? $_POST["messageArray"] : null;
?>
<html>

<head>
    <title>Receive Page</title>
</head>

<body>
    <?php
    if (!empty($messageArray)) {
        foreach ($messageArray as $message) {
            $sntMessage = htmlspecialchars($message);
            echo ("$sntMessage<br>");
        }
    }
    ?>
    が選択されました<br>
    <br>
    <a href="http://localhost/template/02/03/send.php">戻る</a>
</body>

</html>