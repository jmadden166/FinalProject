<!DOCTYPE html>
<html>
<body>
<center>
<h1>Drivers for Team for the 2022 Season</h1>


  <form method="post" action="action.php">
  <label for="Team">Choose a Team:</label>
  <select name="Team" id="Team">
    <option value="Red Bull Racing">Red Bull Racing</option>
    <option value="Ferrari">Ferrari</option>
    <option value="Mercedes">Mercedes</option>
    <option value="McLaren">McLaren</option>
    <option value="Alpine">Alpine</option>
    <option value="Aston Martin">Aston Martin</option>
    <option value="AlphaTauri">AlphaTauri</option>
    <option value="Alfa Romeo">McLaren</option>
    <option value="Haas">Haas</option>
    <option value="Williams">Williams</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>

<p>Click the "Submit" button and get the Drivers for that Team</p>
<?php include 'insert2.php'; ?>   
  </center>
</body>
</html>

