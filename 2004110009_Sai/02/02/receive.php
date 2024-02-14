<!DOCTYPE html>
<?php
session_start();
$message = isset($_POST["message"]) ? $_POST["message"] : null;
if (empty($message)) {
    header("Location: http://localhost/2004110009_Sai/02/02/send.php");
    exit();
}
?>
<html>

<head>
    <title>Receive Page</title>
</head>

<body>
    入力されたメッセージは
    "<?php echo $message; ?>"です。<br>
    <br>
    <a href="http://localhost/2004110009_Sai/02/02/send.php">戻る</a>
</body>

</html>