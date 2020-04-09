<html>

<head>
</head>

<body>

<form method="POST" action="check.php">
   帳號:<input type="text" name="account" value="<?php echo $_COOKIE["accoount"]; ?>"></br>
   密碼:<input type="text" name="pwd"></br>
   <input type="submit" value="登入">
</form>
</body>
</html>
<?php

if(isset($_COOKIE["account"])){
   echo $_COOKIE["account"]."歡迎再次回來</br>";
}
else{
   echo "歡迎第一次來本站</br>";
}

?>