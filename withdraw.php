<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit</title>
    <link rel="stylesheet" href="style_deposit.css">
</head>
<style>
a:link, a:visited {
  background-color: rgb(201, 80, 175);
  color: white;
  padding: 2px 2px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
</style>
<body>
<form action="Login.php" class="menu" method="post">
        <h1> (BBK) &nbsp BANK BAEWKRRUB </h1>
        <h1> ระบบถอน </h1> <br>
    </form>
</div>
    <div class="header">
        <h1 >บัญชีเงินฝาก</h1>
    </div>
    <form action="Login.php" method="post">
        <h1> เงินฝาก </h1>
        <h2>xxx-xxx-xxx-xxx</h2>
    </form><br>
    <form action="slip.php" class="con" method="post"><br>
    <h2>ใส่จำนวนเงินที่ต้องการถอน</h2> <br> <br>
    <div class="input_group">
        <label>	จำนวนเงิน:</label>
            <input type="text" name="money"><br><br>
        <label>	password:</label>
            <input type="password" name="password"><br>
        </div><br><br>
    <div class="pum">
        <input type="submit" value="Submit">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
        <input type="reset" value="Reset">
    </div>
    </form>
    <a style="text-decoration:none;" class="con2" href="account.php">back</a>
</body>
</html>