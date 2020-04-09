<center>
<h1>KS Apparel</h1>	<br/>
<title>www.ksapparel.com/catalog.php</title>
<form action="savecart.php" method="POST">
<body bgcolor="#FADBD8" >
<font size="5" >	
請選擇您要選購的服飾 : <select name="item" style="width:165px"></font>
　<option value="迷彩長袖帽T - NT$699" >迷彩長袖帽T - NT$699</option>
　<option value="極致黑合身縮口長褲 - NT$650" >極致黑合身縮口長褲 - NT$650</option>
　<option value="KSA Logo 籃球長襪 - NT$199" >KSA Logo 籃球長襪 - NT$199</option>
  <option value="''我沒事啦''血漬白色T恤 - NT$499" >''我沒事啦''血漬白色T恤 - NT$499</option>
  <option value="兩件式透氣運動束褲 - NT$899" >兩件式透氣運動束褲 - NT$899</option>
  <option value="紳士白襯衫(附黑領結) - NT$699" >紳士白襯衫(附黑領結) - NT$699</option>
</select>
&nbsp;&nbsp;<select name="quantity">
  <option value="1">1</option>
　<option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
　<option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select>	<br/><br/>
&nbsp;&nbsp;<input type="reset" value="全部重填" >&nbsp;
<input type="submit" value="訂購" ><br/><br/>

<font size="4" ><a href="savecart.php">商品目錄</a></font>
&nbsp;&nbsp;
<font size="4" ><a href="shopping.php">檢視購物車</a><br/><br/>
</form>
</center>

<?php
session_start();

if (isset($_SESSION["login"])) {
	if ($_SESSION["login"]=="Yes") {
		echo " <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><a href='logout.php'> 點此登出</a>";

		

	}else {
       header('Location:lose.php');
	}
	
}else {
    echo "非法進入!";  
    echo "<a href='login.php'>回登入頁面</a>";
}

?>






