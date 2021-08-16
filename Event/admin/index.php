<?php
include '../includes/dbh.inc.php';
session_start();

  if(isset($_SESSION['username']))
  {

  }
  else
  {
    echo "You are not allowed to access this page";
    exit();
  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aston Events</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="../css/style1.css">
</head>


  <body>
    <div class="menu">
      <div class="wrapper">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="manage.admin.php">Admin</a></li>
          <li><a href="manage.events.php">Events</a></li>
        </ul>

      </div>
    </div>

    <div class="main-content">
      <div class="wrapper">
        <h1>DASHBOARD</h1>

        <div class="col-4 text-centre">
          <h1>5</h1>
          <br>
          Categories
        </div>

        <div class="col-4 text-centre">
          <h1>5</h1>
          <br>
          Categories
        </div>

        <div class="col-4 text-centre">
          <h1>5</h1>
          <br>
          Categories
        </div>

        <div class="col-4 text-centre">
          <h1>5</h1>
          <br>
          Categories
        </div>

  <div class="clearfix"></div>
      </div>
    </div>


    <div class="footer">
      <div class="wrapper white-text text-centre" >
        <p> All rights are reserved 2021. Designed By <a href="#">Brenda Kuekia</a></p>
    </div>

    </div>


  </body>
</html>
