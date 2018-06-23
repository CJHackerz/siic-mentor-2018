<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['user_name']);
unset($_SESSION['regno']);
session_destroy();
session_write_close();
header('Location: ../auth/index.php');
die;
?>
