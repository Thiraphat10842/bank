<?php
require("con_db.php");

$id=$_GET["id"];
print("ID:$id<br>");
$sql="DELETE FROM customer WHERE id=$id";
$conn->query($sql); 
header( "location: list_people.php" );
?>