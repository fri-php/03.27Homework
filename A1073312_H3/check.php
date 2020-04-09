<?php
    session_start();
    $user = "pin0330";
    $passwd = "aries0330";

    $uid = $_POST["USERNAME"];
    $upasswd = $_POST["PASSWD"];

    if($uid == $user && $upasswd == $passwd){
        $_SESSION["login"]="yes";
        header("Location:catalog.php");
    }else{
        echo "<center>"."登入失敗！請重新輸入帳號密碼。"."</center>";
        header("Refresh:3 ; url='login.php'");
        
    }
?>
<html> 
</html>