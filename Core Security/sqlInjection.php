<?php
$servername = "localhost";
$username = "root";
$password = "secret";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully". "<br>";

// try passing input id=1 or 1=1 , id=1 or ""=''
$id = $_GET['id'];
$sql = "SELECT * FROM db_name.partners where id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"] . " - name: " . $row["name"] . "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
