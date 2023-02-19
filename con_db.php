<?php
$servername = "localhost";
$username = "new_ bank";
$password = "123456";
$db_name = "new_bank";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

//Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
