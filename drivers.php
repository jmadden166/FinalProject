<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>2022 Race Winners</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
    
    <h1>Current Driver Lineup</h1>
         <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
        </a>

        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="drivers.php">Current Drivers</a></li>
            <li><a class="dropdown-item" href="Past.html">Race Results</a></li>
            <li><a class="dropdown-item" href="races.html">Upcoming Races</a></li>
            <li><a class="dropdown-item" href="Standings.html">Current Standings</a></li>
          <li><a class="dropdown-item" href="admin.php">Admin Window</a></li>
        </ul>
    </div>
  <body>
<?php include 'drivers2.php'; ?>
<?php include 'insert2.php'; ?>      
  </body>
  </html>
