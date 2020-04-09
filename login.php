<html>
    <head></head>
    <body>
        <center style = "font-family:新細明體;">
            <h2>請輸入您的資料</h2>
            <form style = "font-family:新細明體;" action = "check.php" method = "POST">
                <label >帳號：</label>
                <input type="text"  name = "NAME" required></br>
                <label>密碼：</label>
                <input type="password" name = "PASSWD" required></br>
                <input type="submit" value = "登入">
            </form>
        </center>
    </body>
</html>
<?php
       