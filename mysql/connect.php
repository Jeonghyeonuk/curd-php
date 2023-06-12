<?php
$servername = "localhost";
$username = "jeonghyeonuk";
$password = "jhu20232";
$dbname = "jeonghyeonuk";
// db 연결
$connect = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_error()) {
    echo mysqli_connect_error();
}

?>