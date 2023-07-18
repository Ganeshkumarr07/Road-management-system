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

// retrieve form data
$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['cpassword'];

// insert data into the database
$sql = "INSERT INTO rmms (username, email, password, cpassword) VALUES ('$name', '$email', '$password', '$confirm_password')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // The form has been submitted, so redirect to the login page
    header('Location: login.html');
    exit();
  }

mysqli_close($conn);
?>
