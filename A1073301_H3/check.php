<?php
    session_start();
    $user = "iris";
    $passwd = "123";

    $uid = $_POST["id"];
    $upasswd = $_POST["pwd"];

    if($uid == $user && $upasswd == $passwd)
    {
        header("Location:catalog.php");
    }else{
        echo "<center>"."登入失敗！請重新輸入帳號密碼!"."</center>";
        header("Refresh:3 ; url='login.php'");
        
    }
?>