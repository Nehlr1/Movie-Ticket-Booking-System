<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE userdata";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
  echo "<a href=admin.php>Click to go to the admin page</a>";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}

//And finally we close the connection to the MySQL server
mysqli_close($conn);
?>