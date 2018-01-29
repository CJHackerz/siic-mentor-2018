<?php

  // For dev
  $servername = "localhost";
  $username = "siic";
  $password = "siic2017";
  $database = "siic";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $database);
  // Check connection
  if ($conn->connect_error) {
    header('Location: ../_error/500.php');
    die("Connection failed: " . $conn->connect_error);
  }
?>
