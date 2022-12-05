<!doctype html>
<html lang="en">
  <?php  
 
$sql = "SELECT * from Driver";
$result2 = $conn->query($sql1);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row = $result2->fetch_assoc()) {
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
}
$conn->close();
?>
</html>
