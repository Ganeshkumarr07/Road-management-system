<?php
require_once('connection.php');
require_once('adash.php');

// Prepare and execute SQL query to retrieve inspection reports
$sql = "SELECT inspector_id, inspection_date, street_name, road_condition, description FROM inspection_report";
$result = $conn->query($sql);

// Check if there are any inspection reports
if ($result->num_rows > 0) {
    // Display inspection reports in a table
    echo "<table>";
    echo "<tr><th>Inspector ID</th><th>Inspection Date</th><th>Street Name</th><th>Road Condition</th><th>Description</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["inspector_id"] . "</td><td>" . $row["inspection_date"] . "</td><td>" . $row["street_name"] . "</td><td>" . $row["road_condition"] . "</td><td>" . $row["description"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No inspection reports found.";
}

// Close connection
$conn->close();
?>