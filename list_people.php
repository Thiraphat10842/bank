<?php
require("con_db.php");

$sql = "SELECT id, user_name,password, age FROM customer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["user_name"]. " age:" . $row["age"];
    ?>
    <a href="save_edit.php?id=<?php print($row["id"]);?>">Edit</a>
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