
<?php

$server = "localhost";
$username = "root";
$password = "root";
$database = 'midterm1';

// Create connection
$conn = new mysqli($server, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
	// echo "Connected successfully";
	header('Location: http://localhost/PHP/Lesson2/Quanly.php');

$sql = "SELECT * FROM member";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // var_dump($row);
    // echo $row['id'];
  }
} else {
  // echo "0 results";
}
?>