<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="loginch.php" method="POST">
        書入你的帳號: <input type="text" name="account"> <br>
        輸入密碼: <input type="password" name="pwd"> <br>
    <input type="submit" value="提交">

    </form>
  


</body>
</html>

<?php
if(isset($_COOKIE["loginname"])){
echo $_COOKIE["loginname"]."歡迎再次回來";

}
else{

    echo "低依次";
}

?>