<?
include("connect.php");

$no = $_GET['no'];

echo $no;

$query = "DELETE from memo WHERE no='$no'";

mysqli_query($connect, $query);

?>

<script>
    location.href = "insert.php";

</script>