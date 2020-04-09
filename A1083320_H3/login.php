<?php
if(isset($_COOKIE["ID"])){
	echo "歡迎蒞臨".$_COOKIE["ID"];

echo $_COOKIE["ID"].$_COOKIE["ID"];
setcookie("loginName","",time()-3600);

}else{
	echo "歡迎第一次進入本網站<br/>";
}
?>
<form action="check.php" method="POST">

請輸入帳號:<input type="text" name="id" value="<?php echo $_COOKIE['loginName'];?>">

請輸入密碼:<input type="password" name="pwd">
<input type="submit">

</form>

