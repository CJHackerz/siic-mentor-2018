<?php
    session_start();
    if(isset($_SESSION['user'])) {
        header('Location: ./profile.php');
    }
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mentor|SIIC</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon Icon Add -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- All STYLESHEET CSS -->
    <link rel="stylesheet" href="../assets/css/element.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/signIn.css">
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
<div class="main-wrapper">
        <?php
         require "../_require/db.php";
          ?>
        <!-- Start Header Section -->
        <?php include '../_include/nav.php' ?>
        <!-- End Header Section -->
        <br><br>
  <div class="main-content-wrapper">
  <?php
      if(isset($_GET['invalid_user'])) {
        include '../_error/invalid_login.php';
      } else if(isset($_GET['invalid_method'])){
        include '../_error/invalid_method.php';
      }
    ?>
            <!-- multistep form -->
            <div id="msform" style="padding-bottom:0%;">
            <form role="form" class="new_user" id="new_user" action="process-login.php" enctype="multipart/form-data" accept-charset="UTF-8" method="post">
              <!-- progressbar -->
             
              <!-- fieldsets -->
              <fieldset>
                <h2 class="fs-title">Sign In</h2>
                <h3 class="fs-subtitle">Enter the details to sign in</h3>
                <input type="email" name="user_email" placeholder="Email" required>
                <!-- <input type="text" placeholder="test123"> -->
                <input type="password" name="user_password" placeholder="Password" required />
                
                <input type="submit" name="" class="next action-button" value="SUBMIT" required />
              </fieldset>
             
            </form>
            </div>

<!-- Start Footer Section -->
<?php include '../_include/footer.php' ?>
<style>
   .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:#333;
   color: white;
   text-align: center;
   }
   .copyright{
       margin-bottom: 1em;
   }
</style>
</div>
<!-- End Main Content Wrapper -->
</div>

    <!-- ALL JQUERY  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="../assets/js/vendor/jquery-1.12.0.min.js"></script>
    <script src="../assets/js/minix-map.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>
      <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
</body>

</html>
