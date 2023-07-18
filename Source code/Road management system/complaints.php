<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard - Road Management System</title>
  <!-- <link rel="stylesheet" href="dashboars1.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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
.btn {
  width: 80px;
}

</style>
</head>
</html>
<?php
require_once('adash.php');
require_once('connection.php');

// check if delete button was clicked
if(isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM complaints WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
if(isset($_POST['accepted'])) {
  $id = $_POST['id'];
  $sql = "UPDATE complaints SET status = 'Accepted' WHERE id = '$id'";
  $result = mysqli_query($conn, $sql);
  if ($result) {
      echo "Status updated successfully";
  } else {
      echo "Error updating status: " . mysqli_error($conn);
  }
}

// check if rejected button was clicked
if(isset($_POST['rejected'])) {
  $id = $_POST['id'];
  $sql = "UPDATE complaints SET status = 'Rejected' WHERE id = '$id'";
  $result = mysqli_query($conn, $sql);
  if ($result) {
      echo "Status updated successfully";
  } else {
      echo "Error updating status: " . mysqli_error($conn);
  }
}

// check if onprogress button was clicked
if(isset($_POST['onprogress'])) {
  $id = $_POST['id'];
  $sql = "UPDATE complaints SET status = 'On Progress' WHERE id = '$id'";
  $result = mysqli_query($conn, $sql);
  if ($result) {
      echo "";
  } else {
      echo "Error updating status: " . mysqli_error($conn);
  }
}

// fetch all data from complaints table
$sql = "SELECT * FROM complaints";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row in a table
    echo "<table border='5'>";
    echo "<tr><th>ID</th><th>Name</th><th>Address</th><th>Complaint</th><th>Image</th><th>Action</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name_r"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "<td>" . $row["complaint"] . "</td>";
        echo "<td>";
        if (!empty($row["image"])) {
          echo "<img src='uploads/{$row['image']}' width='100' height='100' />";
        } else {
            echo "No image uploaded";
        }
        echo "</td>";
        echo "<td>";
        echo "<form method='post' action=''>";
        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
        echo "<button type='submit' name='delete' class='btn btn-danger btn-sm'>Delete</button><br><br>";
        echo "<button type='submit' name='accepted' class='btn btn-success btn-sm'>Accepted</button><br><br>";
echo "<button type='submit' name='rejected' class='btn btn-primary btn-sm'>Rejected</button><br><br>";
echo "<button type='submit' name='onprogress' class='btn btn-warning btn-sm'>On Progress</button><br><br>";
        echo "</form>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>


