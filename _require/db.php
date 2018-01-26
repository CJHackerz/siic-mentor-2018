<?php

  // For dev
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "siic";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $database);
  // Check connection
  if ($conn->connect_error) {
    header('Location: ../500.php');
    die("Connection failed: " . $conn->connect_error);
  }
?>
