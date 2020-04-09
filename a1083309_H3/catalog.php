<?php
session_start();
if(isset($_SESSION["login"])){
    if($_SESSION["login"]="Yes"){
        echo "登入成功<br>";
        echo "<a href = 'logout2.php'>登出</a><br>";
        echo "<a href = 'login.php'>回首頁</a>";
    }else{
    header('Location:fail2.php');
    }
}else{
    echo "bruh<br>";
    echo "<a href = 'login.php'>回首頁</a>";
}

?>
<form action="addcart.php" action="cart.php" method="post" >
	<body bgcolor="#FFB4A4">

	<center>
	<select name="item">
	<option value="dildo">假陽具:$50</option>
	<option value="pigsex">豬肉a片:$50</option>	
	<option value="pooper">大便:$1000</option>
	</select>

	<input type="text" name="amount">
	
	<input type="submit" action="catalog.php" name="送出">
	<hr>

<a href="cart.php">檢視購物車<a/>


</form>>
	</center>
