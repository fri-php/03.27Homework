<html>
<?php

session_start();
//ob_start();
$id="joykuo";
$pwd="1122334455";
$uid=$_POST["id"];
$upwd=$_POST["pwd"];

if ($uid==$id && $upwd==$pwd) 
{
	$_SESSION["login"]="Yes";
	$date=strtotime("+100 days",time());
	setcookie("loginName", $uid , $date);
	header('Location:catalog.php');
	//ob_flush();
}
else{
	$_SESSION["login"]="No";
	header('Location:login.php');
}

?>
</html>