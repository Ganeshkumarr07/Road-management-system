<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard - Road Management System</title>
  <link rel="stylesheet" href="dashboars1.css">
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
</style>
</head>
<body>
  <div class="dashboard">
    <div class="header">
      <h1>Admin Dashboard</h1>
      <ul class="menu">
        <li><a href="complaints.php">Manage Public Complaints</a></li>
        <li><a href="vs.php">View Schedule</a></li>
        <li><a href="report_display.php">Road Inspection Details</a></li>
        <li><a href="roadins.html">Allocation of Road Inspector</a></li>
      </ul>
    </div>
    <div class="content">
      <!-- Content goes here -->
    </div>
  </div>
</body>
</html>