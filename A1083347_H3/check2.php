<?php

$id=$_POST["id"];
$pwd=$_POST["pwd"];

$uid="a10833";
$upwd="1111";

if($id==$uid && $pwd==$upwd){
	echo "success";
	header("location:catalog.php");
}
else{
	echo "fail";
}

?>