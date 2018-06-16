<?php
  require '../_require/db.php';

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $sql = "SELECT * from mentor WHERE email='$email' and password='$pass'";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
      // If user exists
      $row = $result->fetch_assoc();
      session_start();
      $_SESSION['email'] = $email;
      $_SESSION['user_name'] = $row['name'];
      $_SESSION['regno'] = $row['reg_no'];
      header('Location: ../profile/');
    } else {
      // User does not exist
      header('Location: index.php?invalid_user');
    }
  } else {
    header('Location: index.php?invalid_method');
  }
?>
