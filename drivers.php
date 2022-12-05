<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Current Driver Lineup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
  <body>
    <h1>Current Driver Lineup</h1>
<div class="card-group">
    <?php
$servername = "localhost";
$username = "jackstra_Homework3";
$password = "+JMx3n7)k+!H";
$dbname = "jackstra_final";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from Driver";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>
     <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?=$row["Driver Name"]?></h5>
      <p class="card-text"><ul>
<?php

    echo "<li>-Driver ID: " . $row["DriverID"]. "</li><li>- Driver Name: " . $row["Driver Name"]. "</li><li>- Team: " . $row["Team"]. "</li><li>- Last Race Won: " .  $row["Last Race Won"]. "</li>";
   ?>
      <br>
         </ul></p>
  </div>
    </div>
   
  <?php  
  }
} else {
  echo "0 results";
} ?>

    
    <?php  
$conn->close();
?>
 
  </card-group>
   
  <p>
   <a href="index.html">Go back to the Home Page</a>
  </p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
