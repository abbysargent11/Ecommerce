<?php
session_start();
require_once "config.php";
require_once "tools.php";

// Create connection
$conn = new mysqli($hn,$un,$pw,$db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$username = $_SESSION['username'];
$id = $_SESSION['id'];
$query = "SELECT id FROM users WHERE username='$username'";
$result = $conn->query($query);
$rows = $result->num_rows;
foreach($result as $item) {
    $id = $item['id'];
}

$query = "SELECT name FROM purchases WHERE id='$id'";
$result = $conn->query($query);
$rows = $result->num_rows;
foreach($result as $item) {
    $name = $item['name'];
}

$query = "SELECT name,photo,price FROM products WHERE name='$name'";
$result = $conn->query($query);
$rows = $result->num_rows;

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<img src='" . $row["photo"] . "'><br>" . "<h1>" . $row["name"] . "</h1><br>" . "<p>$" . $row["price"] . "<p><br>";
  }
} else {
  echo "No products in cart.";
}



$conn->close();
?>