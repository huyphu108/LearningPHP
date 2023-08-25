<?php

$server = "localhost";
$username = "root";
$password = "root";
$database = 'midterm1';

// Create connection
$conn = new mysqli($server, $username, $password, $database);
//  die;

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Hocky, Tenmonhoc, Diemlan1, Diemlan2 FROM diem WHERE Masinhvien = '" . $_POST['Masinhvien']."'";
// var_dump($sql);
// die;
$result = $conn->query($sql);
// var_dump($result);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {

    echo "Hoc ky: ". $row["Hocky"]. " - Ten mon hoc: ". $row["Tenmonhoc"]. " - Diem lan 1 "
. $row["Diemlan1"]. " - Diem lan 2: ". $row["Diemlan2"]. " <br> ";
  }
} else {
  echo "0 results";
}
?>