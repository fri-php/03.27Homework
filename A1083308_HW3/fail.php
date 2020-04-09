<link rel=stylesheet type="text/css" href="style.css">
<title>A1083308 登入失敗</title>
<center>
<?php
session_start();

if(isset($_SESSION["login"])){
	if ($_SESSION["login"]=="Yes") {
		header('Location:success.php');
	}
	else{
		echo "<H1>登入失敗</H1><br/>";
		echo "<a href='login.php' id='button'>重新登入</a>";
	}
}
else{
	echo "非法進入<br/><br/>";
	echo "<a href='login.php'>回登入頁面</a>";
}
?>
</center>