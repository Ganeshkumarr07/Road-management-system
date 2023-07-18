<?php
// login.php

session_start();

// Check if the form has been submitted
if(isset($_POST['insid']) && isset($_POST['password'])){

    // Open a connection to the MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "road";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanitize the submitted username and password
    $username = mysqli_real_escape_string($conn, $_POST['insid']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check if the submitted credentials are valid
    $sql = "SELECT * FROM inspector WHERE ins_id='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Set session variables and redirect to admin dashboard
        $_SESSION['ins_id'] = $username;
        header("Location: dasboard.php");
        exit();
    } else {
        // Invalid credentials, show error message
        $error_msg = "Invalid login credentials.";
    }

    // Close the database connection
    $conn->close();
}
?>
