<?php
session_start();

session_destroy();
header('Location:(shoppingcar)login.php');
?>