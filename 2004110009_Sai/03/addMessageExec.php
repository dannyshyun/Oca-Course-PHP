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
header("Location: http://localhost/2004110009_Sai/03/top.php");
exit();
?>