<?php


session_start();
echo "<center>";
if (isset($_SESSION["login"])) 
{
	if ($_SESSION["login"]=="Yes") 
	{
		header('Location:success.php');
	}
	else
	{
		echo "登入失敗"."<br/>";
		echo "<a href=login.php>"."重新登入"."</a>";
	}
}
else
{
	echo "非法進入"."<br/>";
	echo "<a href=login.php>"."回首頁"."</a>";
}
echo "</center>";

echo "</body>";

?>