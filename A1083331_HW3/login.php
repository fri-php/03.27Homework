<?php
session_start();
  if (isset($_COOKIE["lognam"])) {
  	echo $_COOKIE["lognam"]."歡迎回來!(如已登出請重新整理)<br/>";
  	setcookie("lognam","",time()-3600);
  	$userna=$_COOKIE["lognam"];
  }else{
  	echo "歡迎來到購物車登入畫面喔";
   $userna="";}
?>
<h2>請登入喔!!<h2/>
<form action="check.php" method="POST">
你的id:<input type="text" name="id" value="<?php echo $lognam;?>"><br/>	
你的密碼:<input type="password" name="pwd"><br/>	
<input type="submit"><br/>	
</form>