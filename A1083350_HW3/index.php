<?php
if(isset($_COOKIE["LoginName"])){
	echo $_COOKIE["LoginName"]."歡迎再次回來<br>";
	//setcookie("LoginName", "", time()-5);
	$inUsername=$_COOKIE['LoginName'];
}else{
	echo "歡迎第一次來本站<br>";
	}
?>

<h1><p align="center">請先登入</h1>
<center><form action="check.php" method="POST">
ID:<input type="text" name="id"><br>
PS:<input type="password" name="pwd"><p>
<input type="submit">
</center></form>