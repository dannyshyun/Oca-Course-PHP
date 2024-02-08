<!DOCTYPE html>
<?php
session_start();
$isDelete = false;
if (isset($_SESSION["message"])) {
    unset($_SESSION["message"]);
    $isDelete = true;
}
?>
<html>

<head>
    <title>Your Page Title</title>
</head>

<body>
    <?php if ($isDelete === true) : ?>
        セッションからデータを削除しました！<br>
    <?php else : ?>
        セッションにデータは保存されていませんでした。<br>
    <?php endif; ?> <br>
    <a href="http://localhost/session.php">戻る</a>
</body>

</html>