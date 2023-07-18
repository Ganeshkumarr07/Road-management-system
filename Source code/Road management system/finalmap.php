<?php 

    session_start();
// connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "road";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
        
   ?>     
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title>Public complaint registry</title>
    <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.5.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.5.0/mapbox-gl.css' rel='stylesheet' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" type="text/css" href="stylehome.css">
    <style>
    
     
        #map {
            width: 100%;
            height: 300px;
           
        }
        #submit{
  background-color: #1a941f; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
        }
        #cancel{
  background-color: #e72727; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
        }
        input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  
}
#complaint {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
#rep{
     margin-left: 17%;
}
.dashboard {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    
  }
  
  .header {
  background-color: #372cd6;
  color: #fff;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0px;
  position: relative; /* Add position relative for user-profile absolute positioning */
  margin-left: 17%;
}

.user-profile {
  position: absolute;
  top: 20px;
  right: 20px;
  display: flex;
  align-items: center;
}

.user-profile img {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  margin-right: 10px;
}

.user-profile .username {
  font-size: 18px;
  font-weight: bold;
  margin-right: 10px;
}

.logout-button {
  background-color: #e72727;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 5px;
}

    </style>
</head>
<body><div class="fix">
    <div class="dashboard" id="das">
        <div class="header">
            <h1>Road management system</h1>
            <div class="user-profile">
            <i class='fa fa-user-circle' style='font-size: 34px;'></i><br><br>

              <?php
             if(isset($_SESSION["username"])) {
              echo "<b style='font-size: larger;'>Hello, {$_SESSION['username']}  </b><br>";

              
          }else{
              echo "error";
          }
          ?>
             <button class="logout-button" onclick="logout()">Logout</button>

<script>
function logout() {
 
  window.location.href = "card.php";
}
</script>

            </div>
          </div>
          
         
    <div class="sidebar">
        <a class="active" href="finalmap.html">Complaint</a>
        <a href="status.php">Status of Complaint</a>
        <a href="contact.php">Contact</a>
        <a href="about.php">About</a>
      </div>
    <div class="container-sm" id="rep">
    <!-- <h2>Road management system</h2>  -->
    <form action="fm.php" method="post" enctype="multipart/form-data"> 
<div id='map'></div><br>

<label>Name</label><br>
<input id='nam' type='text' name="nam" placeholder='Enter your name' /><br>
<label>Address</label><br>
<input id='address' type='text' name="address" placeholder='Address' /><br><br>

<label for="img">Select image of Damaged roads</label><br>
  <input type="file" id="img" name="img" ><br><br>

<label>Complaint</label><br>
<textarea id='complaint' rows='5' cols='50' name="complaint" placeholder='Enter your complaint here'></textarea><br>


<button id='submit' type='submit' name="submit">Submit</button>
<button id='cancel' type='reset'>Cancel</button>

</form></div>


<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiZ2FuZXNoa3VtYXIwNyIsImEiOiJjbGV3b2I2bGcwZ3J1M29rYzFrbXlmZGhyIn0.gYgMNNKuAyw3ia7ekZmIWA';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [78.82970181043784, 10.752463368605982],
        zoom: 12
    });

    var marker = new mapboxgl.Marker({
        draggable: true
    }).setLngLat([78.82970181043784, 10.752463368605982]).addTo(map);

    function onDragEnd() {
        var lngLat = marker.getLngLat();
        var url = 'https://api.mapbox.com/geocoding/v5/mapbox.places/' + lngLat.lng + ',' + lngLat.lat + '.json?access_token=' + mapboxgl.accessToken;
        fetch(url)
            .then(function (response) {
                return response.json();
            })
            .then(function (data) {
                var address = data.features[0].place_name;
                document.getElementById('address').value = address;
            });
    }

    marker.on('dragend', onDragEnd);

    document.getElementById('submit').addEventListener('click', function() {
        var complaint = document.getElementById('complaint').value;
        var address = document.getElementById('address').value;
        // alert('Complaint: ' + complaint + '\nAddress: ' + address);
    });

    document.getElementById('cancel').addEventListener('click', function() {
        document.getElementById('complaint').value = '';
        document.getElementById('address').value = '';
        marker.setLngLat([78.82970181043784, 10.752463368605982]);
        map.setCenter([78.82970181043784, 10.752463368605982,]);
        map.setZoom(12);
    });

//     function myFunction() {
//   alert("Your Complaint registered sucessfully");
// }

</script></div>

</body>
</html>
