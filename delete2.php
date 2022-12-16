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
        $conn = mysqli_connect("localhost", "jackstra_Homework3", "+JMx3n7)k+!H", "jackstra_Homework4");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
       
 
        $first = $_POST['Delete1'];
        $race1 = $_POST['Delete4'];
        
        $sql5 = "Delete FROM Driver Where DriverID = ('$first')";
         $sql6 = "Delete From 2022Races Where RaceID = ('$race1')";
         $sql7 = "Delete FROM Image Where DriverID = ('$first')";
         
        if(mysqli_query($conn, $sql5)){
            echo "<h3>Driver has been deleted from database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         if(mysqli_query($conn, $sql6)){
            echo "<h3>This race has been deleted from the database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
     if(mysqli_query($conn, $sql7)){
            echo "<h3>The Image of the deleted driver has also been deleted from database successfully."
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
