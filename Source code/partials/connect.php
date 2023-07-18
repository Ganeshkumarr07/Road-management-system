<?php
// connect to the database
$servername = "localhost";
$username = "id20791096_rmms";
$password = "dt*{>bfWtb7bk}Dl";
$dbname = "id20791096_road";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>