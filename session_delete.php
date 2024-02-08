<!DOCTYPE html>
<?php
session_start();
$isDelete = false;
if (isset($_SESSION["messageArray"])) {
    unset($_SESSION["messageArray"]);
    $isDelete = true;
}
header("Location: http://localhost/session.php");
exit();
?>