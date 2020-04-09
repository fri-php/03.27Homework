
<?php

if(isset($_COOKIE["loginName"])){ //isset檢查session是否存在
	echo $_COOKIE["loginName"]."歡迎再次回來<br/>";
	setcookie("loginName","",time()-3600);
	$inUsername=$_COOKIE["loginName"];
}else{
	echo '<marquee direction="right" height="30" scrollamount="10" behavior="alternate"><b>歡迎第一次來本站</b><br/></marquee>';
	$inUsername="";
}

?>


<body bgcolor="#fff8dc">
	<br/><br/><br/><br/><br/><br/>
<h2>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Welcome to the market</h2>
<form action="logincheck.php" method="post">
	&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;帳號:&emsp;<input type="text" name="id" value="<?php echo $inUsername;?>" ><br/><br/>
	&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;密碼:&emsp;<input type="password" name="pwd" ><br/><br/>
	&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="submit" value="登入" ><br/>
	
</form>
</body>