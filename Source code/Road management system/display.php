<?php
// Check if the id is set in the URL parameters
if(isset($_GET['id'])){
    // Open a connection to the MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the id from the URL parameters
    $id = $_GET['id'];

    // Retrieve the image data from the database
    $sql = "SELECT * FROM images WHERE id='$id'";
    $result = $conn->query($sql);

    // Check if the query returned any rows
    if ($result && $result->num_rows > 0) {
        // Retrieve the image data from the query result
        $row = $result->fetch_assoc();
        $image_data = $row['image_data'];
        $image_name = $row['image_name'];

        // Display the image
        header("Content-type: image/jpeg");
        echo $image_data;
    } else {
        echo "Image not found.";
    }

    // Close the database connection
    $conn->close();
} 
?>
