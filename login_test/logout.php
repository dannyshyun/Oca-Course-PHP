<?php
session_start();
if (isset($_SESSION["id"]) === true) {
    unset($_SESSION["id"]);
}
header("Location: ./top.php");
exit();
