<?php
// Include the database configuration file
require_once('connection.php');

// If the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $street = $_POST['street'];
    $date = $_POST['date'];

    // Prepare the SQL query
    $sql = "INSERT INTO road_inspectors (name, street, date) VALUES (?, ?, ?)";

    // Bind the parameters to the query
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $name, $street, $date);

    // Execute the query
    mysqli_stmt_execute($stmt);

    // Check if the query was successful
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        
        echo "<script>alert('Your Schedule id added.');</script>";
    echo "<script>window.location.href='roadins.html';</script>";
    } else {
        echo "Error adding record: " . mysqli_error($conn);
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);
}

// Close the connection
mysqli_close($conn);
?>
