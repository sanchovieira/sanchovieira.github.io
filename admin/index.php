<?php
include("../config.php");
$sql = "SELECT * FROM sugestoes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["sugestao"]. " " . $row["data"]. "<br>";
  }
} else {
  echo "0 comentários";
}
$conn->close();
?>