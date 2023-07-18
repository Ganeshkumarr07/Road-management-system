<html>
    <head>
        <title>status</title>
        <link rel="stylesheet" type="text/css" href="stylehome.css">
        <style>
            .dashboard {
    display: flex;
    flex-direction: column;
    min-height: 50vh;
    
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
    <body>
    <div class="fix">
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
        <a href="finalmap.php">Complaint</a>
        <a class="active" href="status.php">Status of Complaint</a>
        <a href="contact.php">Contact</a>
        <a href="about.php">About</a>
      </div>
        
    </body>
</html>
<?php
?>