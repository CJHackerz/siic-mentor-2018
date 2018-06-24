<?php
  session_start();

  if(!isset($_SESSION['email'])) {
    session_destroy();
    header('Location: ../auth/index.php');
  }

  $user_email = $_SESSION['email'];
  $user_name = $_SESSION['user_name'];
?>
