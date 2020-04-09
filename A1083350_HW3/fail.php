<?php
session_start();

if (isset($_SESSION["login"])) {
	if ($_SESSION["login"]=="Yes") {
		header('Location:success.php');
		}else{
		echo "<center><h1>登入失敗</h1></center>";
		echo "<center><a href='index.php'>重試一次</a></center>";
		echo "<meta http-equiv='refresh' content='3;url=index.php'/>";
		}
	}else{
		echo "<center><h1>非法進入</h1></center><p>";
		echo "<center><a href='login.php'>回首頁</a></center>";
}
?>