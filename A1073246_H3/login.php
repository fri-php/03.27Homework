<?php

if(isset($_COOKIE["loginName"])){
    echo $_COOKIE["loginName"]."歡迎再次回來";
    setcookie("loginName","",time()-3600);
    $inUsername=$_COOKIE['loginName'];

}else{
    echo "歡迎第一次來本站</br>";
    $inUsername="";
}
?>

<html>
<h2>請先登入並選購您要的商品</h2>
<form action ="check.php" method="post">
Your ID:<input type="text" name="id" value="<?php echo $inUsername;?>"></br>
Your password<input type="password" name="pwd"></br>
<input type="submit"></br>
</form>