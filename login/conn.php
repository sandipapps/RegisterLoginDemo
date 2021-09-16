<?php
// Create 4 variables to store these information
$server="localhost";
$username="root";
$password="";
$database = "register_from_android";
// Create connection
$conn = new mysqli($server, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
