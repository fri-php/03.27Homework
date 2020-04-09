<?php
if($_GET["id"]==1){
	setcookie("thing1", "", time()-2000);
	setcookie("nombor1", "", time()-2000);
}elseif ($_GET["id"]==2) {
	setcookie("thing2", "", time()-2000);
	setcookie("nombor2", "", time()-2000);
}elseif ($_GET["id"]==3) {
	setcookie("thing3", "", time()-2000);
	setcookie("nombor3", "", time()-2000);
}
header('Location:shop.php')
?>