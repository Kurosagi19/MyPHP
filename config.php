<?php

// Kết nối đến MySQL
$conn = mysqli_connect('localhost', 'root', '', 'newsql');

// Kiểm tra kết nối
if ($conn == false) {
    die("Kết nối không thành công".mysqli_connect_error());
}

// Tạo câu truy vấn
$sqlAllUsers = "SELECT * FROM users";
// Thực thi câu truy vấn
$queryAllUsers = mysqli_query($conn, $sqlAllUsers);

echo "<ul>";
while($row = mysqli_fetch_assoc($queryAllUsers)) {
    echo "<li>" . $row['id'] . " - " . $row['username'] . " - " . $row['email'] . "</li>";
}
echo "</ul>";

?>