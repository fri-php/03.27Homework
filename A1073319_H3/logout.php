<?php

session_start();
session_destroy();
echo "登出成功";
header('Location:login.php');

?>