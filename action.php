<!doctype html>
<html lang="en">
   <left>
        <a href="index.html">Return to the Home Page</a> 
     </left>
   <style>
   img {
    float: left;
    width:  100px;
    height: 400px;
    object-fit: cover;
}
        </style>
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
 
$sql = "SELECT Driver.DriverID, DriverName, Team, LastRaceWon, ImageLink from Driver join Image on Driver.DriverID = Image.DriverID where Team =  ('$help')";
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
  $url = $row["ImageLink"];
    echo "<li>Team: " . $row["Team"]. "</li><li>Last Race Won: " .  $row["LastRaceWon"]. "</li><li>Driver Image: " ?><img src="<?php echo $url; ?>" />   "</li>";
   
       

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
