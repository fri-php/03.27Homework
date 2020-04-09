<?php
$id="1jinn";
$pwd="123123";

$uid=$_POST["id"];
$upwd=$_POST["pwd"];

if($uid==$id && $upwd==$pwd)
{
	echo "success";

    header('Location:catalog.php');
}
else
{
echo "fail";
}
?>