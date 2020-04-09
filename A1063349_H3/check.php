<?php 
session_start();
ob_start(); //啟用輸出緩衝區

$id = $_POST["id"];
$pwd = $_POST["pwd"];

$uid = "tiffany";
$upwd = "12345";

if($id==$uid && $pwd==$upwd){
    $_SESSION["login"]="YES";
    $_SESSION["ID"]=$id;
    
    header("Location: catalog.php"); //轉跳頁面
}else{
    $_SESSION["login"]="NO";
    header("Location: fail.php"); 
}

?>