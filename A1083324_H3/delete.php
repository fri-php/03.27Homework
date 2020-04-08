<?php
if ($_GET["id"]==0) {
	setcookie("good1", "", time()-3600);
	setcookie("amount1", "", time()-3600);
}
elseif ($_GET["id"]==1) {
	setcookie("good2", "", time()-3600);
	setcookie("amount2", "", time()-3600);
}
elseif ($_GET["id"]==2) {
	setcookie("good3", "", time()-3600);
	setcookie("amount3", "", time()-3600);
}
header('Location:cart.php')
?>