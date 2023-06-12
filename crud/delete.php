<?php
include_once("connect.php");

// 데이터 삭제
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST["id"];

    // 데이터 존재하는지 먼저 체크
    $checkSql = "SELECT * FROM members WHERE id = $id";
    $checkResult = $conn->query($checkSql);

    if ($checkResult->num_rows > 0) {
        $sql = "DELETE FROM members WHERE id=$id";

        if ($conn->query($sql)) {
            echo "데이터 삭제 완료";
        } else {
            echo "데이터 삭제 실패: " . $conn->error;
        }
    } else {
        echo "잘못된 아이디 입니다 =>" . $id;
    }
}

// DB 연결 종료
$conn->close();
?>