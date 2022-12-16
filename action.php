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
   $driveteam=  $_POST['Team1'];
$sql = "SELECT *from Driver Where Team = ('$driveteam')";
$result2 = $conn->query($sql);

        if(mysqli_query($conn, $sql)){
            echo "<li>- Team: " . $row["Team"]. "</li><li>- Last Race Won: " .  $row["LastRaceWon"]. "</li><li>- Races Won in 2022: " .  $row["NumberOfRacesWonIn2022"]. "</li>";

        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
</html>
