<?php
require("con_db.php");

$sql="UPDATE balance SET balance = balance + 10
WHERE id = '100'";
header( "location: list_people.php" );
?>