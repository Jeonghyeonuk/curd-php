<?

include 'lib.php';

$name = $_POST['name'];
$subject = $_POST['subject'];
$memo = $_POST['memo'];
$pwd = $_POST['pwd'];

$name = mysqli_real_escape_string($connect, $name);
$subject = mysqli_real_escape_string($connect, $subject);
$memo = mysqli_real_escape_string($connect, $memo);
$date = date("Y-m-d H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$pwd = mysqli_real_escape_string($connect, $pwd);

// 비번 암호화





$query = "INSERT INTO board (name, subject, memo, create_date, ip, pwd) 
values('$name', '$subject', '$memo','$date','$ip', password('$pwd'))";

mysqli_query($connect, $query);

// echo $query;

?>

<script>
    location.href = 'list.php'
</script>