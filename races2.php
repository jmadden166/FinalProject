<!doctype html>
<html lang="en">
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
  ?>
  <?php  
 
$sql = "SELECT RaceName, Date From 2022Races join RaceDate on 2022Races.RaceID = RaceDate.RaceID WHERE Date > DATE(NOW()) OR (Date = DATE(NOW()) AND Date > TIME(NOW()) ) ORDER BY Date ASC, Date ASC ";
$result2 = $conn->query($sql);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row = $result2->fetch_assoc()) {
    ?>
     <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?=$row["RaceName"]?></h5>
      <p class="card-text"><ul>
<?php
  
    echo "<li>Date: " . $row["Date"]. "</li>";
   ?>
      <br>
         </ul></p>
  </div>
    </div>
  <?php  
  }
} else {
  echo "There are no more upcoming races";
}
$conn->close();
?>
</html>
