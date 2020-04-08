<?php

session_start();

if(isset($_SESSION["login"])){
    if($_SESSION["login"]=="YES"){
        header('Location:success.php');

        
    }else{     
        echo "登入失敗，網頁將在３秒後返回";
        echo "<meta http-equiv='refresh' content='3;url=login.php' />" ;
    }
}else{
    echo "非法進入<br>";
    echo "<a href='login1.php'>回首頁</a>";
}


?>