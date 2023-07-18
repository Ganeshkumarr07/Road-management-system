<html>
    <head>
        <title>
            schedule
        </title>
        <style>
            table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
        </style>
    </head>
</html>
<?php
// Include the database configuration file
require_once('dasboard.php');
require_once('connection.php');

// Fetch all data from the table
$sql = "SELECT * FROM road_inspectors";
$result = mysqli_query($conn, $sql);

// Check if there are any records
if (mysqli_num_rows($result) > 0) {
    // Display the records in a table
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Street to Inspect</th><th>Date</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['street'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}

// Close the connection
mysqli_close($conn);
?>