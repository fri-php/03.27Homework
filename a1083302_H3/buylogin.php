<?php
session_start();
if(isset($_SESSION["login"])){
	if($_SESSION["login"]=="NO"){
    echo "重新登入";
  }
    if($_SESSION["login"]=="YES"){
    echo "歡迎";
  }
 }  
?>

<body bgcolor="#FFB7DD">
<form action="buylogincheck.php" method="POST">
Your id:<input type="text" name="id"><br/>
Your password:<input type="password" name="pwd"><br/>
<input type="submit"><br/>
</form>

<?php
echo "<a href='buylogout.php'>登出系統</a>";
?>