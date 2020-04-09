<?php
session_start();

if (isset($_SESSION["login"])) {
	if ($_SESSION["login"]=="Yes") {
		echo "<center><h1>登入成功</h1></center><br>";
		echo "<center><a href='shop.php'>下一頁</a></center>";
		echo "<meta http-equiv='refresh' content='3;url=shop.php'/>";
		}else{
		header('Location:fail.php');
		}
	}else{
		echo "<center><h1>你必須先登入</h1></center><br>";
		echo "<center><a href='index.php'回首頁</a></center>";
}
?>