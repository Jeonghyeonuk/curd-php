<?
include "lib.php";

$isLogin = $_SESSION['isLogin'];

if (!$isLogin) {
    echo "회원만 접근 가능합니다.";
    exit;
}


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="logout.php">로그아웃</a>
    <h1>회원 리스트</h1>
    <ul>
        <li>
            홍길동
        </li>
        <li>
            홍길동
        </li>
        <li>
            홍길동
        </li>
        <li>
            홍길동
        </li>
    </ul>
</body>

</html>