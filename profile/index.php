<?php
  include '../_include/header.php';
  require '../_require/auth.php';
?>

<!-- Body -->
  <div class="container">
    <h1>Welcome <?php echo $user_name; ?></h1>
  </div>
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $user_name; ?></h5>
    <p class="card-text">Data to come soon here!</p>
  </div>
</div>
<!-- Body ends -->

<?php
  include '../_include/footer.php';
?>
