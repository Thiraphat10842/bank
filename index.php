
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <title>From Insert</title>
    <title>add_people</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    label{
        display: inline-block;
        width: 100px;
        margin-bottom: 15px;
    }
    select {
        
  width: 100%;
  padding: 10px 15px;
  border: none;
  border: 1px solid #3f4441;
  border-radius: 4px;}


</style>
<body>
<div class="menu">
       <h1> (BBK) &nbsp BANK BAEWKRRUB  </h1> <br>
    </div>
    <div class="header">
        <h1 >ลงชื่อเพื่อเข้าใช้งาน</h1>
    </div>
    <form action="save_add_people.php" method="post">
        <div class="input_group">
            <label>user_name:</label>
            <input type="text" name="user_name"><br>
        </div>
        <div class="input_group">
            <label>	password:</label>
            <input type="password" name="password"><br> 
        </div>
        <div class="input_group">
            <label>Age:</label>
            <input type="text" name="age"><br>
        </div>
        <div class="input_group">
            <br>Gender:&nbsp &nbsp<select name="gender"></br>
            <option value="M">Male</option>
            <option value="F">Female</option>
            </select><br> 
        </div>
        <div class="input_group">
            Marry Status: <select name="marry_status">
            <option value="S">Single</option> 
            <option value="M">Married</option>
            </select><br> <br>
        </div>
        <div class="Pum">
        <input type="submit" value="Submit">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
        <input type="reset" value="Reset">
        </div>
        <div class ="p">
            <br> <p>Already a member <a href= "index.php">Sing in</a> </p>
        </div>
    
    </form>

    
</body>
</html>