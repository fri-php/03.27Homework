

<?php  
$all;

echo '<table>';

echo '<tr><th bgcolor="#E1D7B4">功能</th>
		<th bgcolor="#E1D7B4">編號</th>
		<th bgcolor="#E1D7B4">名稱</th>
		<th bgcolor="#E1D7B4">價格</th>
		<th bgcolor="#E1D7B4">數量</th>
	</tr>';

if($_COOKIE["goods_g"]>"0"){
echo '<tr>';
echo '<td bgcolor="#FDF3F4">' . "<a href='delete.php?del=1'>我鼻要ㄌ</a>". '</td>';
echo '<td bgcolor="#FDF3F4">' . "A01". '</td>';
echo '<td bgcolor="#FDF3F4">' . "好Q好QㄉQQ軟糖" . '</td>';
echo '<td bgcolor="#FDF3F4">' . "100" . '</td>';
echo '<td bgcolor="#FDF3F4">' . $_COOKIE["goods_g"] . '</td>';

echo '</tr>';
}
if($_COOKIE["goods_ca"]>"0"){

echo '<tr>';
echo '<td bgcolor="#E79AAC">' . "<a href='delete.php?del=2'>我鼻要ㄌ</a>". '</td>';
echo '<td bgcolor="#E79AAC">' . "A02". '</td>';
echo '<td bgcolor="#E79AAC">' . "硬硬吃好久ㄉ糖糖" . '</td>';
echo '<td bgcolor="#E79AAC">' . "100" . '</td>';
echo '<td bgcolor="#E79AAC">' . $_COOKIE["goods_ca"] . '</td>';

echo '</tr>';

}
if($_COOKIE["goods_ch"]>"0"){

echo '<tr>';
echo '<td bgcolor="#FFCCB7">' . "<a href='delete.php?del=3'>我鼻要ㄌ </a>". '</td>';
echo '<td bgcolor="#FFCCB7">' . "A03". '</td>';
echo '<td bgcolor="#FFCCB7">' . "好甜好好七ㄉ巧克克" . '</td>';
echo '<td bgcolor="#FFCCB7">' . "100" . '</td>';
echo '<td bgcolor="#FFCCB7">' . $_COOKIE["goods_ch"] . '</td>';

echo '</tr>';

}

if ($all="100"*($_COOKIE["goods_g"]+$_COOKIE["goods_ca"]+$_COOKIE["goods_ch"])>0) 
echo '<td bgcolor="#A8C7CA" COLSPAN="5" align="right">'."總金額 = NT$".$all="100"*($_COOKIE["goods_g"]+$_COOKIE["goods_ca"]+$_COOKIE["goods_ch"])."元".'</td>';


echo '</table>';



echo "<a href='catalog.php'>商品目錄gogogo✧*｡٩(ˊᗜˋ*)و✧*｡</a>"."｜"."<a href='logout.php'>我要走ㄌ！=͟͟͞͞( •̀д•́)</a><br/>";

?>






