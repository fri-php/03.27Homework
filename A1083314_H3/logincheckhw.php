<?php
session_start();
ob_start();
$id="a1083314";
$pwd="1109to";

$uid=$_POST["id"];
$upwd=$_POST["pwd"];

if($id==$uid && $pwd==$upwd)
{
$_SESSION["login"]="Yes";
header('Location:catalog.php');
}
else
{
$_SESSION["login"]="No";
header('Location:loginhw.php');	
}
?>