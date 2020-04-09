<html>
<font face="微軟正黑體, Arial">
<head>
<style>
        html {
            height: 95%;
        }

        body {
            background-image: url(擷取4.PNG);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
</style>
</head>
<?php
session_start();
if (isset($_SESSION["login"])){
	if($_SESSION["login"]=="Yes"){
		header('Location:success.php');
	}
	else{
		echo "<h1><center>登入失敗</center</h1><br/>"; 
		echo "<a href='login1.php'><h6>重新登入</h6></a>";
	}
}
else{
	echo "非法進入<br/>";
	echo "<a href='login1.php'>回首頁</a>";
}

?>
</font>
</html>
