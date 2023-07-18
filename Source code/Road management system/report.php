<?php
// Include the database configuration file
require_once('dasboard.php');
require_once('connection.php');
?>
<html>
<head>
    <title>Road Management System</title>
    <style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}
		form {
			border: 2px solid #ddd;
			padding: 20px;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
			max-width: 500px;
			margin: 50px auto;
		}
		input[type="text"], select {
			padding: 10px;
			border-radius: 5px;
			border: 1px solid #ccc;
			width: 100%;
			box-sizing: border-box;
			margin-bottom: 20px;
			font-size: 16px;
		}
		input[type="submit"], input[type="reset"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
			margin-right: 10px;
			transition: background-color 0.2s ease-in-out;
		}
		input[type="submit"]:hover, input[type="reset"]:hover {
			background-color: #3e8e41;
		}
		label {
			display: block;
			font-weight: bold;
			margin-bottom: 10px;
		}
		
    </style>
</head>
<body>
    <h2 style="text-align: center; margin-top: 50px; color: #666; text-shadow: 1px 1px 2px rgba(0,0,0,0.1);" >Road Inspection Report Form</h2>
    <form method="POST" action="report.php">
        Road Inspector ID: <input type="text" name="inspector_id"><br>
        Date: <input type="date" name="inspection_date"><br>
        Street Name:
        <select name="street_name">
		<option value="">Select a street</option>
  <option value="South Street">South Street</option>
  <option value="North Street">North Street</option>
  <option value="Middle Street">Middle Street</option>
  <option value="Ayyapan Nagar">Ayyapan Nagar</option>
  <option value="Mathakovil Street">Mathakovil Street</option>
        </select><br>
        Road Condition:
        <select name="road_condition">
            <option value="excellent">Excellent</option>
            <option value="good">Good</option>
            <option value="fair">Fair</option>
            <option value="poor">Poor</option>
            <option value="very_poor">Very Poor</option>
        </select><br>
        Description of Road Condition: <br>
        <textarea name="description" rows="5" cols="50"></textarea><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
// Check if required form fields are set
if (isset($_POST["inspector_id"], $_POST["inspection_date"], $_POST["street_name"], $_POST["road_condition"], $_POST["description"])) {

	// Prepare statement and bind parameters
	$stmt = $conn->prepare("INSERT INTO inspection_report (inspector_id, inspection_date, street_name, road_condition, description) VALUES (?, ?, ?, ?, ?)");
	$stmt->bind_param("sssss", $inspector_id, $inspection_date, $street_name, $road_condition, $description);
  
	// Set parameters
	$inspector_id = $_POST["inspector_id"];
	$inspection_date = $_POST["inspection_date"];
	$street_name = $_POST["street_name"];
	$road_condition = $_POST["road_condition"];
	$description = $_POST["description"];
  
	// Execute statement
	if ($stmt->execute() === TRUE) {
	  echo "<script>alert('Your report id submitted.');</script>";
	  echo "<script>window.location.href='report.php';</script>";
	} else {
	  echo "Error: " . $stmt->error;
	}
  
	// Close statement and connection
	$stmt->close();
	$conn->close();
  
  } else {
	
  }
?>

