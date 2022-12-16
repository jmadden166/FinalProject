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
 $help =  $_POST['Team1'];
$sql = "SELECT DriverID, DriverName, Team, LastRaceWon from Driver where Team =  ('$help') Group by Team";
$result2 = $conn->query($sql);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row = $result2->fetch_assoc()) {
    ?>
     <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?=$row["DriverName"]?></h5>
      <p class="card-text"><ul>
<?php
  
    echo "<li>- Team: " . $row["Team"]. "</li><li>- Last Race Won: " .  $row["LastRaceWon"]. "</li><li>- Races Won in 2022: " .  $row["NumberOfRacesWonIn2022"]. "</li>";
   ?>
      <br>
         </ul></p>
  </div>
    </div>
  <?php  
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</html>
