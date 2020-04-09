<<?php
session_start();
if(isset($session['login']))
echo "登入失敗<br>";
echo "<a href='login.php'>重新登入</a>";
}else{
      echo "非法進入<br/>";
      echo "<a href='login.php'>首頁</a>"; 
  } 
 ?>