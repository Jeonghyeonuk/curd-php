<?

$user_id = $_POST['user_id'];
$pwd = $_POST['pwd'];

if ($user_id === 'admin' && $pwd === '112233') {
    //로그인 처리
    setcookie("isAdmin", "ok");
} else {
    echo "관리자만 접근 가능 합니다.";
    exit;
}
?>
<script>
    location.href = "memberlist.php"
</script>