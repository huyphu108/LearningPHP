<?php
$server = "localhost";
$username = "root";
$password = "root";
$database = 'midterm1';

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
	// echo "Connected successfully";
	// header('Location: http://localhost/PHP/Quanly.php');
if ($conn->connect_error) {
die("Connection failed: ". $conn->connect_error);
}

$sql = "SELECT MaSinhvien, TenSinhvien, Malop, Ngaysinh, Gioitinh, Quequan FROM sinhvien";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// Load dữ liệu lên website
while($row = $result->fetch_assoc()) {
echo "Ma sinh vien: ". $row["MaSinhvien"]. " - Ten sinh vien: ". $row["TenSinhvien"]. " - Ma lop "
. $row["Malop"]. " - Ngay sinh: ". $row["Ngaysinh"]. " - Que quan: ". $row["Quequan"]." <br>
";
}
} else {
echo "0 results";
}
$conn->close();
?>