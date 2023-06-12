<?
include("lib.php");

$idx = $_POST['idx'];
$pwd = $_POST['pwd'];
$idx = mysqli_real_escape_string($connect, $idx);
$pwd = mysqli_real_escape_string($connect, $pwd);

$query = "SELECT * FROM board WHERE idx='$idx' and pwd=password('$pwd')";
$result = mysqli_query($connect, $query);
$data = mysqli_fetch_array($result);

if (empty($data)) {
    echo "비밀번호가 달라 삭제 불가능";
    exit;
}
$query = "DELETE from board WHERE idx='$idx'";

mysqli_query($connect, $query);

?>

<script>
    location.href = "list.php";
</script>