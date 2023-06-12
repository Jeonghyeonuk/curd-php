<?

include 'lib.php';

$name = $_POST['name'];
$subject = $_POST['subject'];
$memo = $_POST['memo'];
$pwd = $_POST['pwd'];
$idx = $_GET['idx'];

$idx = mysqli_real_escape_string($connect, $idx);
$name = mysqli_real_escape_string($connect, $name);
$subject = mysqli_real_escape_string($connect, $subject);
$memo = mysqli_real_escape_string($connect, $memo);
$pwd = mysqli_real_escape_string($connect, $pwd);
$date = date("Y-m-d H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];

$query = "SELECT * FROM board WHERE idx='$idx' and pwd=password('$pwd')";
$result = mysqli_query($connect, $query);
$data = mysqli_fetch_array($result);

if (empty($data)) {
    echo "비밀번호가 달라 수정 불가능";
    exit;
}


$query = "UPDATE board set name='$name', subject='$subject', memo='$memo', create_date='$date', ip='$ip' WHERE idx='$idx'";
mysqli_query($connect, $query);
// echo $query;

?>

<script>
    location.href = 'list.php'
</script>