<?php
$date=strtotime("-1 days",time());
if(isset($_POST["tb"])){
setcookie("item1","",$date);
setcookie("quantity1","",$date);
}

if(isset($_POST["ip"])){
setcookie("item3","",$date);
setcookie("quantity3","",$date);
}

if(isset($_POST["lp"])){
setcookie("item2","",$date);
setcookie("quantity2","",$date);
}

header('Location:catalog.php');
?>
