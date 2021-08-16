<?php
include '../includes/dbh.inc.php';


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
          <li><a href=manage.events.php>Home</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>

      </div>
    </div>
