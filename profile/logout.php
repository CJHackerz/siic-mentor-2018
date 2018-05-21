<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['user_name']);
session_destroy();
session_write_close();
header('Location: ../auth/process-login.php');
die;
?>
