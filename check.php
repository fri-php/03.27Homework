<html>
</html>

<?php
session_start();
$account=$_POST["account"];
$pwd=$_POST["pwd"];
echo $account."<br/>";
echo $pwd."<br/>";
$uaccount="a1073311";
$upwd="123";
if($account==$uaccount && $pwd==$upwd){
    $_SESSION["login"]="YES";
    echo "login success";
    header('Location:catalog.php');
    $date = strtotime("+100 days", time());
    setcookie("account", $uaccount,$date);

    $inUsername=$_COOKIE["account"];
    //ob_flush();
}
else{
    $_SESSION["login"]="NO";
    echo "login failed";
    header('Location:login.php');
    $inUsername="";
}
?>