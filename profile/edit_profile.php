<?php
  include '../_include/header.php';
  require '../_require/auth.php';
?>

<!-- Body -->
<?php
  if(isset($_GET['invalid_user'])) {
    include '../_error/invalid_login.php';
  } else if(isset($_GET['invalid_method'])){
    include '../_error/invalid_method.php';
  }
?>
<form role="form" class="new_user" id="new_user" action="edit_profile.php" enctype="multipart/form-data" accept-charset="UTF-8" method="post">
  <div class="form-group col-md-12 col-lg-12 col-sm-12 col-xs-12">
    <label for="profile_avatar">Profile Image (Maximum size of 2MB)(JPEG, JPG, PNG)</label><br/>
    <input type="file" accept=".jpeg, .jpg, .png" name="profile_img" id="profile_img"/>
  </div>
</form>

<!-- Body ends -->

<?php
  include '../_include/footer.php';
?>
