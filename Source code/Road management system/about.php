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

require_once('sidebar2.php') 
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
  margin-left: 50%;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
  margin-left: 15%;
}

.container {
  padding: 0 16px;
  margin-left: 20%;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>Our Road Management System is a comprehensive web-based platform designed to simplify and streamline road management for municipalities, government agencies, and private road operators. Our application provides an easy-to-use interface that allows users to manage various aspects of road management, including maintenance, repairs, and emergency response.</p>
  <p>Our team has over a decade of experience in software development and road management, and we understand the complexities involved in managing roads. Our application is designed to meet the unique needs of each client, whether you're managing a large network of roads or a single private road.</p>
</div>

<h2 style="margin-left:54%;">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="Ganesh.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Ganesh Kumar R</h2>
        <p class="title">Developer</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="Akash.jpeg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Akash E</h2>
        <p class="title">Developer</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="Surya.jpeg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Surya M</h2>
        <p class="title">Developer</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</body>
</html>