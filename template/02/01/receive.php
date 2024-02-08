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
    <title>Receive Page</title>
</head>

<body>
    入力されたメッセージは
    "<?php echo $message; ?>"です。<br>
    <br>
    <a href="http://localhost/template/02/01/send.php">戻る</a>
</body>

</html>