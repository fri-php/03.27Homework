<?php

if(isset($_SESSION["login"]))
{
	if($_SESSION["login"]="Yes")
	{
	echo"歡迎光臨此網頁<br/>";
    }
    else
    {
    echo"請重新登入<br/>";
    }
}
?>
<head>
<title>購物網站</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
</head>
<h2>Please log me in</h2>
<form action="logincheck.php" method="post">
Your id<input type="text" name="id"><br/>
Your password<input type="password" name="pwd"><br/>
<input type="submit"><br/>
</form>	