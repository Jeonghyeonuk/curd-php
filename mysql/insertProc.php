<?
include "connect.php";

$name = $_GET['name'];
$content = $_GET['content'];
$date = date("Y-m-d H:i:s");

$query = "INSERT INTO memo(name,content,create_date) values('$name','$content','$date')";

mysqli_query($connect, $query);
?>


<script>
    location.href = "insert.php"
</script>