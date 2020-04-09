<?php 
session_start();
  if ( !isset($_SESSION["catalog.php"]) ) {
   $_SESSION["catalog.php"] = 1;
} else {
   $_SESSION["catalog.php"]++;
}

?>



