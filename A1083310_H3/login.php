
<?php

if(isset($_COOKIE["loginName"])){
	echo $_COOKIE["loginName"]."，歡迎再次回來買買買(⁎⁍̴̛ᴗ⁍̴̛⁎)<br/>";
	setcookie("loginName",);
}
else{
	echo "歡迎第一次來本站買買買(⁎⁍̴̛ᴗ⁍̴̛⁎)<br/>";
}


?>


<h2>Sign in 登入會員</h2>

<form action="check.php" method="post">
	
帳號：<input type="text" name="id"><br/><br/>

密碼：<input type="Password" name="pwd"><br/><br/>


<input type="submit" value="登入">
</form>

