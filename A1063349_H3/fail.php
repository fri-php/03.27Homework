<?php 
session_start();

if(isset($_SESSION["login"])){
    echo "登入失敗<br/><br/>";
    echo "<a href='login.php'>重新登入</a>";
  }else{
      echo "非法進入<br/>";
      echo "<a href='login.php'>首頁</a>"; 
  }
    
    
    
?>