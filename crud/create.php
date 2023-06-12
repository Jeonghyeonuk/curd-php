<?php
include_once("connect.php");
// 데이터 생성
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    $sql = "INSERT INTO members (name, email) VALUES ('$name', '$email')";

    if ($conn->query($sql)) {
        echo "데이터 생성 완료";
    } else {
        echo "Error: " . $sql . "<br />" . $conn->error;
    }
}


//DB 연결 종료
$conn->close();

?>