<?php
session_start();
if(isset($_SESSION["login"]))
{
		if($_SESSION["login"]=="Yes")
		{
			header('Location:catalog.php');
		}
		else
		{
			header('Location:(shoppingcart)log.php');
		}
}
else
{
		echo "非法進入<br/>";
		echo "<a href='(shoppingcar)login.php'>回首頁</a>";
}

?>