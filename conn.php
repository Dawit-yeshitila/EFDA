<?php
$servername = "localhost";
$username = "root";
$password = "vertrigo";
$dbname = "efda";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>