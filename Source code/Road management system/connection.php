<?php
// connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "road";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>