<?php
    // Include the database configuration file
    require_once('adash.php');
    require_once('connection.php');

    // Check if the delete button has been clicked
    if (isset($_POST['delete'])) {
        $id = $_POST['delete'];
        // Delete the record from the database
        $sql = "DELETE FROM road_inspectors WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }

    // Fetch all data from the table
    $sql = "SELECT * FROM road_inspectors";
    $result = mysqli_query($conn, $sql);

    // Check if there are any records
    if (mysqli_num_rows($result) > 0) {
        // Display the records in a table
        echo "<table border='5'>";
        echo "<tr><th>ID</th><th>Name</th><th>Street to Inspect</th><th>Date</th><th>Action</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['street'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>";
            echo "<form method='post' action=''>";
            echo "<input type='hidden' name='delete' value='" . $row['id'] . "'>";
            echo "<button type='submit' class='btn btn-danger btn-sm'>Delete</button><br><br>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No records found.";
    }

    // Close the connection
    $conn->close();
?>
