<?
include("connect.php");

$no = $_GET['no'];
$content = $_GET['content'];
echo $no;

echo "<br />";

echo $content;

$query = "UPDATE memo set content='$content' WHERE no='$no'";

mysqli_query($connect, $query);

?>

<script>
    location.href = "insert.php";

</script>