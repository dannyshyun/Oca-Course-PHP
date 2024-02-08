<!DOCTYPE html>
<?php
session_start();
$message = isset($_GET["message"]) ? $_GET["message"] : null;
if (!empty($message)) {
    if (isset($_SESSION["messageArray"]) === false) {
        $_SESSION["messageArray"] = array();
    }
    $_SESSION["messageArray"][] = $message;
}
header("Location: http://localhost/session.php");
exit();
?>