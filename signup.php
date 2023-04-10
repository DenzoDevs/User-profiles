<?php
$servername = "localhost";
$username = "username";
$password = "password";
$db = "ustawi banking institute";

echo="Welcome"
// Create connection
  $connection = mysqli_connect("localhost","root","",'ustawi banking institute')

$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

return $conn
?>