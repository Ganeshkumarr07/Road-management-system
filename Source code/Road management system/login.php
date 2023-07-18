<?php
// start the session
session_start();

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

// retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// check if the user exists in the database
$sql = "SELECT * FROM rmms WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // login successful, set session variables and redirect to dashboard
    $_SESSION['username'] = $username;
    
    header('Location: finalmap.php');
} else {
    // login failed, display error message
    echo "Invalid username or password.";
}

mysqli_close($conn);
?>