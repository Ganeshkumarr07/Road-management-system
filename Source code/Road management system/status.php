<?php
session_start();

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "road";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

require_once('sidebar.php') 
?>
<html>
<head>
	<title>Complaint Status</title>
	<style>
		.container {
			/* margin: 20px auto; */
			width: 50%;
			border: 5px solid #ddd;
			padding: 0px;
            margin-left: 17%;
            
		}
		#com {
			font-size: 24px;
			font-weight: bold;
			margin-bottom: 0px;
            margin-left: 1%;
		}
		.status {
			font-size: 20px;
			margin-left: 1%;
		}
        
	</style>
</head>
<body>
	<div class="container">
		<div id="com" >Complaint Status</div>
		<div class="status"><?php $username = $_SESSION['username'];
echo $username;
echo " your Complaint is ";
$fetch_status = mysqli_query($conn,"SELECT * FROM complaints where name_r='$username'  ");

$row = mysqli_fetch_array($fetch_status);  echo $row['status'] ?>
</div>
	</div>
</body>
</html>
