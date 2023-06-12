<?php

include_once("connect.php");

// 데이터 조회
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $search = $_GET["search"];

    $sql = "SELECT * FROM members";

    //검색어가 있으면 검색
    if($search !== '')
    {
        $sql = "SELECT * FROM members WHERE name LIKE '%$search%' OR email LIKE '%$search%'";
    }

    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array()) {
            echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
        }
    } else {
        echo "조회 결과가 없음";
    }
}


//DB 연결 종료
$conn->close();
?>