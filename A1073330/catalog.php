<html>
<form action="savecart.php" method="POST">
    <select name="merch" >
        <option  value="NYKD-54">NYKD-54 - $100000</option>
        <option  value="SSNI-864">SSNI-864 - $800</option>
        <option  value="SQTE-483">SQTE-483 - $3000</option>
    </select>
    數量<input type="number" min = "1" max = "10" step="1.0" value="0" name="count"><br>
    <input type="submit" value="下單">
    <a href="cart.php">確認我的購物車</a>
    <a href="shoplog.php">返回登入頁面</a>
</form>
</html>
