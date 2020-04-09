<?php
while (list($arr,$value)=each($_COOKIE)) {

if(isset($_COOKIE[$arr]))  &&
	is array($_COOKIE[$arr])){
if($flag)
	$flag=false;
	$color="blue"
}else{
	$flag = true;
	$color="yellow"
}
echo "<a href='delete.php?id=".$arr."'>";
echo "刪除</a></td>";

$price=0;
$Quantity=0;
while (list($name,$value)=each($_COOKIE[$arr])) {
	echo "<td>" . $value . "<td>";
	if ($name=="price") $price=$value;
    if ($name=="Quantity")$Quantity=$value;	
	}
$sum +=$price*$Quantity;
echo "</tr>";


}

?>