<?php
$host = "localhost";
$dbName = "crud_example";
$user = "root";
$password = "";

$conn = mysqli_connect($host, $user, $password, $dbName);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
