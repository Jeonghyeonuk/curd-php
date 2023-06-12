<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_prac";

// db 연결
$conn = new mysqli($servername, $username, $password, $dbname);

// 연결 체크
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>