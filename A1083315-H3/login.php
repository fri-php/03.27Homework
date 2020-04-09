<?php

if(isset($_COOKIE["loginName"])){
	echo $_COOKIE["loginName"]."歡迎再次回來~<br/>";
	setcookie("loginName","",time()-3600);
    $inUsername=$_COOKIE['loginName'];
	
}else {
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 歡迎蒞臨 KS Apparel 購物網站 :<br/>";
	$inUsername="";
}

?>
<center>

<h2>會員登入</h2><br/>
<title>www.ksapparel.com/login.php</title>
<body bgcolor="#FCF3CF" >
<form action="logincheck.php" method="POST">
KSA 帳號 : <input type="text" name="ID" value="<?php echo $inUsername; ?>">	<br/><br/>
KSA 密碼 : <input type="password" name="pwd">	<br/><br/>	
&nbsp; &nbsp;&nbsp;&nbsp;<input type="reset" value="再輸一次" > &nbsp;
<input type="submit" value="確認" ><br/>	
</form>
</center>



