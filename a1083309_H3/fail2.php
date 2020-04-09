<?php
session_start();
if(isset($_SESSION["login"])){
    if($_SESSION["login"]="No"){
        echo "登入失敗!請重新檢查<br>";

        echo "<a href = 'login2.php'>回到登入畫面</a>";
    }else{
        header('Location:sucess.php');
    }
}else{
    echo "bruh<br>";
    echo "<a href = 'login2.php'>回首頁</a>";
}

?>