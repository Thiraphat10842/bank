
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <title>From Insert</title>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    label{
        display: inline-block;
        width: 100px;
        margin-bottom: 15px;
    }
</style>
<body>
    <div class="menu">
       <h1> (BBK) &nbsp BANK BAEWKRRUB  </h1> 
    </div>
    <div class="header">
        <h1>Login</h1><br>
    </div>
    <form action="account.php" method="post">
        <div class="input_group">
            <label>user_name</label>
            <input type="text" name="user_name"><br>
        </div>
        <div class="input_group">
            <label>password</label>
            <input type="password" name="password" ><br> 
        </div>
        <div class="input_group">
            <input type="reset" value="Reset" class="btn">
        </div>
        <div class="input_group">
            <button type="submit" name="login_user" class ="btn">Login</button>
        </div>
        <p>Not yet member? <a href= "index.php">Sing in</a></p>
    </form>
    
</body>
</html>