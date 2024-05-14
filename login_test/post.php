<?php
session_start();
$message = isset($_POST['message']) ? $_POST['message'] :'';
$_SESSION['message'] = $message;
var_dump($message);