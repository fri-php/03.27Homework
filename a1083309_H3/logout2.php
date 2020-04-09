<?php
 session_start();
 session_destroy();
 echo "<a href = 'login2.php'>回首頁</a>";
 setcookie("Loginname","", time()-3600);
?>