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
 
$sql = "SELECT Driver.DriverID, Driver.DriverName, Driver.Team, Driver.LastRaceWon, count(2022Races.WinningDriverID) as NumberOfRacesWonIn2022 from Driver join 2022Races ON Driver.DriverID = 2022Races.WinningDriverID group by Driver.DriverID, Driver.DriverName, Driver.Team, Driver.LastRaceWon";
$result2 = $conn->query($sql);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row = $result2->fetch_assoc()) {
    ?>
     <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?=$row["Driver Name"]?></h5>
      <p class="card-text"><ul>
<?php
  
    echo "<li>-Driver ID: " . $row["Driver.DriverID"]. "</li><li>- Driver Name: " . $row["Driver.DriverName"]. "</li><li>- Team: " . $row["Driver.Team"]. "</li><li>- Last Race Won: " .  $row["Driver.LastRaceWon"]. "</li><li>- Races Won in 2022: " .  $row["NumberOfRacesWonIn2022"]. "</li>";
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
