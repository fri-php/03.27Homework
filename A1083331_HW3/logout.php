<?php
session_start();

$outt=$_POST["out"];

if ($outt == "登出") {
session_destroy();
header('Location:login.php');
}
?>