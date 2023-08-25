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

$sql = "SELECT sinhvien.TenSinhvien , diem.Diemlan1, diem.Diemlan2
        FROM diem INNER JOIN sinhvien ON sinhvien.Masinhvien = diem.Masinhvien
        WHERE sinhvien.Malop = ('$_POST[Malop]') AND diem.Hocky = ('1') ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // var_dump($row);
    // echo $row['id'];
    echo "Ten sinh vien: ". $row["TenSinhvien"]. " - Diem lan 1: ". $row["Diemlan1"]. " - Diem lan 2 "
. $row["Diemlan2"]. "   <br> ";
  }
} else {
  echo "0 results";
}
?>