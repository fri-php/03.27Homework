<?php  
session_start();
if ( isset($_SESSION["id"]) ) {
$id = $_SESSION["id"];
$nam = $_SESSION["nam"];
$pri = $_SESSION["pri"];
$num = $_SESSION["num"];
setcookie($id."[id]", $id, time()+3600);
setcookie($id."[nam]", $nam, time()+3600);
setcookie($id."[pri]", $pri, time()+3600);
setcookie($id."[num]", $num, time()+3600);
}
header("Location:shoppingcart.php");
?>