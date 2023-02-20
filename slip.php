<?php
require("con_db.php");

//print_r($_POST);
$user_name = $_POST["user_name"];
$balance=$_POST["balance"];

$sql="INSERT INTO customer(user_name,balance)
     VALUES ('$user_name','$balance')";
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
     <div class="menu">
       <h1> (BBK) &nbsp BANK BAEWKRRUB  </h1> <br>
    </div>
    <div class="text1">
       <p class="H">ลงทะเบียนเเสร็จสิ้น </p>
       <p>  ชูก้า ชูก้ารูน เงินในบัญชีของเธอ<br>ฉันขอนะ <a href= "Login.php">Sing in</a></p>  
     </div>
</body>
</html>