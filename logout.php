<?php
session_start();

setcookie("ID",$_SESSION["ID"],time()-3600);

header('Location:login.php');
?>