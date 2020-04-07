<?php
session_start();
if(isset($_SESSION["login"]))
{
	if($_SESSION["login"]=="Yes")
	{
		header('Location:(shoppingcar)success.php');
	}
	else
	{
	echo "登入失敗<br/><br/>";
    echo "<a href='(shoppingcar)login.php'>重新登入</a>";
	}
}
else
{
	echo "非法進入<br/>";
	echo "<a href='(shoppingcar)login.php'>回首頁</a>";
}
?>