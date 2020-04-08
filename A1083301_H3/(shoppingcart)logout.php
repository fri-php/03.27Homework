<?php
session_start();

session_destroy();
header('Location:(shoppingcart)login.php');
?>