<?php
// Get the form data
$name = $_POST['nam'];
$address = $_POST['address'];
$complaint = $_POST['complaint'];
$image = $_FILES['img']['name'];

// Upload the image to the server
$target_dir = "uploads/";
$target_file = $target_dir . basename($image);
move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "road";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert the data into the database
$sql = "INSERT INTO complaints (name_r, address, complaint, image) VALUES ('$name', '$address', '$complaint', '$image')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Your complaint has been registered Sucessfully.');</script>";
    echo "<script>window.location.href='finalmap.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
