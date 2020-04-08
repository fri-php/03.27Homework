<?php

$date=strtotime("+100 days", time());
$good=$_POST["good"];
$amount=$_POST["amount"];
if ($good==one) {
	setcookie("good1",$good,$date);
	setcookie("amount1", $amount, $date);
}
elseif ($good==two) {
	setcookie("good2",$good,$date);
	setcookie("amount2", $amount, $date);
}
elseif ($good==three) {
	setcookie("good3",$good,$date);
	setcookie("amount3", $amount, $date);
}


header("Location:catalog.php");
?>