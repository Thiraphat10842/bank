<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style_list.css">
</head>
<body>
  <div class="menu">
       <h1> (BBK) &nbsp BANK BAEWKRRUB  </h1> <br>
    </div>
  <div class = "header">
    <h1>list accounts</h1> 
  </div>
<form>
<?php
require("con_db.php");

$sql = "SELECT id, user_name,password, age FROM customer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. "  Name: " . $row["user_name"]. " age:" . $row["age"];
    ?>
    <a href="save_edit.php?id=<?php print($row["id"]);?>"> &nbsp Edit</a>&nbsp &nbsp
    <a href="delete.php?id=<?php print($row["id"]);?>" 
      onclick="return confirm('Are you sure to delete <?php print($row["user_name"]);?>')">Delete</a>
    <br>
    <?php
  }
} else {
  echo "0 results";
}

$conn->close();

?>
<br><a href="index.php">Add People</a>
  
</body>
</form>
</html>