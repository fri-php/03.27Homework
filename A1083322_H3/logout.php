<?php

echo "<body bgcolor='#eebbf7'>";

session_start();

session_destroy();
header('Location:login.php');

echo "</body>";

?>