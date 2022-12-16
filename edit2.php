<!DOCTYPE html>
<html>
 <left>
        <a href="index.html">Return to the Home Page</a> 
     </left>
<head>
    <title>Update Driver</title>
</head>
 
<body>
    <center>
        <?php
 
     $servername = "localhost";
$username = "jackstra_Homework3";
$password = "+JMx3n7)k+!H";
$dbname = "jackstra_final";
        $conn = mysqli_connect("localhost", "jackstra_Homework3", "+JMx3n7)k+!H", "jackstra_final");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
       
        $id1 =  $_POST['ID1'];
        $first2 = $_POST['newname2'];
      $manName =  $_POST['team2'];
        $manufacturer2 = $_POST['lastrace2'];
  
      
        $sql5 = "Update Driver Set DriverName = ('$first2'), Team = ('$team2'), LastRaceWon = ('$lastrace2') Where DriverID = ('$id1')";

         
        if(mysqli_query($conn, $sql5)){
            echo "<h3>This Driver has been updated successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>
