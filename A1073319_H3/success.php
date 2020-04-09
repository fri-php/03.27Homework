<?php
session_start();

if(isset($_SESSION["login"])){
    if($_SESSION["login"]=="yes"){
        echo "sucess";
        
        header('Location:catalog.php');
    }
    else{
        header('Location:fail.php');
    }
}
else{
    echo "非法登入123";
    echo "<a href='login.php'>回首頁</a>";
}



?>