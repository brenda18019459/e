<?php

session_start();

define('SITEURL', 'https://localhost/event/');

$dBServername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "Events";

// Create connection
$conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
