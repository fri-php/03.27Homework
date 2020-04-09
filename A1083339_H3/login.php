<?php
if(isset($_COOKIE["loginName"])){
    echo $_COOKIE["loginName"]."歡迎再次光臨";
    setcookie("loginName","",time()-3600);
    $inUsername=$_COOKIE['loginName'];
}
else{
    echo "歡迎使用購物車</br>";
    $inUsername="";
}
?>

<html>
<form action ="logincheck.php" method="POST">
Your ID:<input type="text" name="id" value="<?php echo $inUsername;?>"></br>
Your password<input type="password" name="pwd"></br>
<input type="submit"></br>
</form>