<?php

$id=$_POST["id"];
$pwd=$_POST["pwd"];

echo $id."<br/>";
echo $pwd."<br/>";


$uid="aaa";
$upwd="111";

if($id==$uid && $pwd==$upwd)
{
	echo "Log success!!!";
	header('Location:http://www.nuk.edu.tw');
}
else
{
	echo "Log failed!!!Return to log in page in 3 seconds";
	echo "<meta http-equiv='refresh' content='3;url=log-in.php'/>";
}

?>