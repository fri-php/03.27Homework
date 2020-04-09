<?php
session_start();
ob_start();

$ID="kai";
$pwd="1998";

$uID=$_POST["ID"];
$upwd=$_POST["pwd"];

if ($uID==$ID && $upwd==$pwd) {
    $_SESSION["login"]="Yes";

    $date = strtotime("+100 days", time());
    setcookie("loginName", $uID, $date);

	header('Location:catalog.php');
	ob_flush();

}else {
    $_SESSION["login"]="No";

	header('Location:lose.php');

} 

?>