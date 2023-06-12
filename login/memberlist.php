<?

$isAdmin = $_COOKIE['isAdmin'];

if ($isAdmin !== "ok") {
    echo '관리자만 접근 가능합니다.';
    exit;
}
?>

사용자 리스트 <br>
1. 홍길동 <br>
2. 박문수 <br>
1. 홍길동 <br>
2. 박문수 <br>
1. 홍길동 <br>
2. 박문수 <br>
1. 홍길동 <br>
2. 박문수 <br>
1. 홍길동 <br>
2. 박문수 <br>
1. 홍길동 <br>
2. 박문수 <br>

<a href="logout.php">로그아웃</a>