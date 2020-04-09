<?php
session_start();
if(isset($_COOKIE["loginName"]))
	{
		echo $_COOKIE["loginName"]."歡迎再次回來<br/>";
		setcookie("loginName","",time()-3600);
		$inUsername=$_COOKIE['loginName'];
    }
else
    {
    	echo"歡迎第一次來本站<br/>";
    	$inUsername="";
    }
?>

<h2>please log me in</h2>
<form action='logincheck.php' method="POST">
Your ID:<input type="text" name="id"><br/>
Your password:<input type="password" name="pwd"><br/>
<input type="submit"><br/>
</form>
<a href='logout.php'>登出系統</a>