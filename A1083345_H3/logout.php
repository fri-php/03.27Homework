<?php

session_start();

for($i=0; $i<count($_SESSION["mdse"]); $i++)
	setcookie("S".$i, "", time()-3600);

unset($_SESSION["login"]);
unset($_SESSION["mdse"]);

header("location:login.php");

?>