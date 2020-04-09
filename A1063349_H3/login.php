<?php
if(isset($_COOKIE["ID"])){
    $user = $_COOKIE["ID"];
//    echo "歡迎再次光臨".$_COOKIE["ID"];
    setcookie("ID","",time()-3600);
}else{
//    echo "<h2>阿柴網路書城登入</h2>";
//    $user = "";
}

?>
<div style="text-align:center"><h2>阿柴網路書城登入</h2></div>
<body style="background-color:rgba(63,191,191,0.7);"></body>
<form action="check.php" method="post">
帳號:<input type="text" name="id"><br/><br/>
密碼:<input type="password" name="pwd"><br/><br/>
<input type="submit"><br/>
</form>