<?php
require("con_db.php");

//print_r($_POST);
$user_name = $_POST["user_name"];
$password = $_POST["password"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$marry_status =$_POST["marry_status"];

$sql="INSERT INTO customer(user_name,password,age,gender,marry_status)
     VALUES ('$user_name','$password','$age','$gender','$marry_status')";
$conn->query($sql)                        
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>save</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
     <div class="text">
       <p> Thank You <a href= "Login.php">Sing in</a></p>  
     </div>
</body>
</html>