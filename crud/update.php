<?php
include_once("connect.php");

// 데이터 수정
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $newName = $_POST["new_name"];
    $newEmail = $_POST["new_email"];

    // DB에 값이 존재하는지부터 체크
    $checkSql = "SELECT * FROM members WHERE id = $id";
    $checkResult = $conn->query($checkSql);

    if ($checkResult->num_rows > 0) {
        $sql = "UPDATE members SET name='$newName', email='$newEmail' WHERE id=$id";

        if ($conn->query($sql)) {
            echo "데이터 수정 완료";
        } else {
            echo "데이터 수정 실패" . $conn->error;
        }
    } else {
        echo "잘못된 아이디 입니다 =>" . $id;
    }
}

//DB 연결 종료
$conn->close();
?>