<?php
session_start();

if($_SESSION["login"]=="f")
{
	echo "登入失敗<br>";
	echo "<a href='login.php'>點擊返回登入頁面</a>";
}
else
{
	echo "非法進入<br/>";
	echo "<a href='login.php'>回登入畫面</a>";
}


?>