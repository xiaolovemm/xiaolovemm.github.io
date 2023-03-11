
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$tab = "dazuoye";

// 创建连接

$conn = new mysqli($servername, $username, $password,$tab);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

//mysqli_query($conn, 'set names utf8');



