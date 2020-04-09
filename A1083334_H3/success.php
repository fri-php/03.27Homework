<?php
session_start();

if(isset($_SESSION["login"]))
{
  echo"登入成功<br/><br/>";

  $date = strtotime("+7 days",time());
  setcookie("ID", $_SESSION["ID"],$date);


  echo"<a href='catalog.php'>回目錄</a>";
  echo"<a href='logout.php'>登出</a>";
}
else
{ 
  echo "非法進入<br/>";
  echo"<a href='login.php'>回首頁</a>";
}
?>