<h2>Please log me in<h2>

<?php
if(isset($_COOKIES["ID"]))
{
 echo "歡迎再度光臨".$_COOKIES["ID"];
 setcookie("ID","",time()-3600);
}else
{
}


?>
<form action="check.php" method="POST">

Your ID:
<input type ="text" name="id"><br/>

Your password:
<input type ="password" name="pwd"><br/>

<input type="submit"><br/>
</form>