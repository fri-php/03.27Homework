<head>
<meta charset="utf-8">
    <style>
       
        /*畫一條再右邊的豎線*/
        .link-right {
            width: 70px;
            height: 3%;
            border-right: solid #ACC0D8 2px;
        }

    </style>
</head>
<body bgcolor="#fff8dc" align="center" >
	<h2 align="center"><b>歡迎來到網購賣場</b></h2>
<form action="savecart.php" method="post" align='center'>
	<br/><br/>
	選擇商品：<select name="item" ><!--下拉選單-->
			<option value="15.6吋筆記型電腦">15.6吋筆記型電腦 - $27000</option>
			<option value="iPhone手機">iPhone手機 - $21000</option>
			<option value="10吋變形平板">10吋變形平板 - $12000</option>	
			</select>
			<input type="text" name="num" size=5>
			<input type="submit" value="訂購" ><br/><br/>
	<hr/>
	<a class="link-right" href='catalog.php'>商品目錄&nbsp;</a>
	<a href='shoppingcart.php'>檢視購物車</a>

</form>
<a href='logout.php'>登出</a><br/>
</body>

<?php
	session_start();
	
?>
