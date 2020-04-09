<?php
$uid="a1073351";
$upwd="2221";

$id=$_POST["id"];
$pwd=$_POST["pwd"];

if($uid==$id && $upwd==$pwd)
  {
  	echo "success";
  	header('location:catalog.php');
  }
 else
  {
    echo "fail";
    header("Refresh:3 ; url='login.php'");
  }
  
  ?>