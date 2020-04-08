<?php
    session_start();
    $user = "ccc";
    $passwd = "forphp";

    $uid = $_POST["USERNAME"];
    $upasswd = $_POST["PASSWD"];

    if($uid == $user && $upasswd == $passwd){
        $_SESSION["login"]="yes";
        header("Location:catalog.php");
    }else{
        echo "<center>"."帳號或密碼錯誤！請重新登入"."</center>";
        header("Refresh:3 ; url='login.php'");
        
    }
?>
<html> 
</html>