<?php
echo $_POST["id"]."<br/>";
echo $_POST["pwd"]."<br/>";

$uid="1083321";
$upwd="1083321";

if($id==$uid && $pwd==$upwd)
	{
	echo "success";
	}
else
	{
	echo "fail";
	}
header("location:catalog.php")
?>
