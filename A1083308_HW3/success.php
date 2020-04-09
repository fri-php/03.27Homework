<link rel=stylesheet type="text/css" href="style.css">
<title>A1083308 登入成功</title>
<center>
<?php
session_start();

if(isset($_SESSION["login"])){
	if ($_SESSION["login"]=="Yes") {
		echo "<H1>登入成功</H1><br/>";
		echo "<a href='catalog.php' id='button'>前往購物</a>";
		echo "&emsp;";	
		echo "<a href='logout.php' id='button'>登出</a>";	
	}
	else{
		header('Location:fail.php');;
	}
}
else{
	echo "非法進入<br/><br/>";
	echo "<a href='login.php'>回登入頁面</a>";
}
?>
</center>