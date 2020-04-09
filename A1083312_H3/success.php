<?php



session_start();
echo "<center>";

if (isset($_SESSION["login"])) 
{
	if ($_SESSION["login"]=="Yes") 
	{
		echo "登入成功"."<br/>"."<br/>";
		echo "<a href=catalog.php>"."登入成功開始購物"."</a>"."<br/>"."<br/>";
		echo "<a href=logout.php>"."登出"."</a>";
	}
	else
	{
		header('Location:fail.php');
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