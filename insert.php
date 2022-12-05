<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
 
  $servername = "localhost";
$username = "jackstra_Homework3";
$password = "+JMx3n7)k+!H";
$dbname = "jackstra_final";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
       
        $driveid =  $_POST['DriverID'];
        $driver_name = $_POST['Driver Name'];
        $driver_team =  $_POST['Driver Team'];
        $lastRace = $_POST['LastRace'];
        
        $sql = "INSERT INTO Driver (Driver ID, Driver Name, Team, Last Race Won) VALUES ('$driveid',
            '$driver_name', '$driver_team','$lastRace')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>Driver data stored in a database successfully."
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
