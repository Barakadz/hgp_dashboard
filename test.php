<?php
$servername = "groupehawmain.mysql.db";
$username = "groupehawmain";
$password = "t6EBECfbdXdR";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>