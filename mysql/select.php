<?

include('connect.php');

$query = "SELECT * FROM memo";

$result = mysqli_query($connect, $query);

while ($a = mysqli_fetch_assoc($result)) {
    print_r($a);

}
;


?>