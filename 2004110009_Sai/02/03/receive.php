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
    if (!empty($messageArray)):
        foreach ($messageArray as $message) {
            $sntMessage = htmlspecialchars($message);
            echo ("$sntMessage<br>");
        }
    else:
        echo ("何も選択されていません<br>");
    endif
    ?>
    <br>
    <a href="http://localhost/2004110009_Sai/02/03/send.php">戻る</a>
</body>

</html>