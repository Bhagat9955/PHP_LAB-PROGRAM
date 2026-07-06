<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO student (firstname, lastname, email) VALUES
('Sanjay','baghel','sanjay@gmail.com'),
('bhagat','bhagat','bhagat@gmail.com')";

if (mysqli_multi_query($conn, $sql)) {
  echo "New records inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

