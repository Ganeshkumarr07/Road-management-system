<?php
// Check if the form has been submitted
if(isset($_POST['submit'])){
    
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

    // Get the uploaded image data
    $image = addslashes(file_get_contents($_FILES['file']['tmp_name']));
    $image_name = addslashes($_FILES['file']['name']);
    $image_size = getimagesize($_FILES['file']['tmp_name']);

    // Check if the uploaded file is an image
    if($image_size == FALSE){
        echo "The uploaded file is not an image.";
    }
    else{
        // Insert the image data into the database
        $sql = "INSERT INTO images (image_name, image_data) VALUES ('$image_name', '$image')";
        if ($conn->query($sql) === TRUE) {
            echo "Image uploaded successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
}
?>
