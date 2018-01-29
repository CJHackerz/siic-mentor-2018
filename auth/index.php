<?php
  include '../_include/header.php';
?>
<link rel="stylesheet" href="../assets/css/login.css">
<!-- Body -->
  <div class="text-center">
    <?php
      if(isset($_GET['invalid_user'])) {
        include '../_error/invalid_login.php';
      } else if(isset($_GET['invalid_method'])){
        include '../_error/invalid_method.php';
      }
    ?>
    <form class="form-signin" action="process-login.php" method="POST">
      <img class="mb-4" src="https://srmiic.com/siiclogo.jpg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </div>
<!-- Body ends -->

<?php
  include '../_include/footer.php';
?>
