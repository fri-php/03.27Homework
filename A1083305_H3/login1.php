<font face="微軟正黑體, Arial">
<center>
<head>
<style>
        html {
            height: 95%;
        }

        body {
            background-image: url(擷取.PNG);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
</style>
</head>
<?php
if(isset($_COOKIE["loginName"])){
	echo $_COOKIE["loginName"]."歡迎再次回來<br/>";
	setcookie("loginName","",time()-3600);
	$inUsername=$_COOKIE['loginName'];

}else{
	echo "<h2>歡迎第一次來本站</h2><br/>";
	$inUsername="";
}

?>


<h2>雜貨購物網</h2>
<form action="check.php" method="POST">
<p>
<b>帳號：</b><input type="text" name="id" value="<?php echo $_COOKIE["loginName"];?>"></br>
<b>密碼：</b><input type="password" name="pwd"></br>
</p>
<input type="submit"></br>
</center>
</form>
</font>