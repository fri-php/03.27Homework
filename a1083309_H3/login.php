<?php
if(isset($_COOKIE["Loginname"])){
    echo "歡迎回來，".$_COOKIE["Loginname"]."!!<br>";

    $inUSername = $_COOKIE['Loginname'];
}else{
    echo "Whats up new guy?<br>";
    $inUSername = "";
}
?>

<form action = "check.php" method="post">
<body bgcolor="#FFBDAF">
<center>
帳號<br><input type="text" name="id" value="<?php echo $inUSername?>"><br>
密碼<br><input type="password" name="pwd"><br>
<input type="submit" value="登入"> <input type="reset" value="重設">
</center>
</body>
</form>