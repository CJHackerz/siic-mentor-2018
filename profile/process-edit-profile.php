<?php
require '../_require/auth.php';
require '../_require/db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $file_name = $_FILES["profile_img"]['name'];
  $file_size = $_FILES["profile_img"]['size'];
  $file_tmp  = $_FILES["profile_img"]['tmp_name'];
  $file_type = $_FILES["profile_img"]['type'];
  $ttt = end(((explode('.',$file_name))));
  $file_ext=strtolower($ttt);
  $uid = uniqid();
  $extensions= array("jpeg","jpg","png");

  if (!empty($file_name) && $file_size!=0) {
    if(in_array($file_ext,$extensions)=== false){
      $errors[] ="extension not allowed";
    }

    if ($file_size > 2097152) {
      $errors[] ='File size must be less than 2MB';
    }
    $count=count($errors);

    $profile_imgs = $uid . "." . $file_ext;
    if ($count==0) {
      move_uploaded_file($file_tmp, "../assets/imgs" . $profile_imgs);
    } else{
      foreach ($errors as $e) {
        echo $e . "<br />";
      }
    }
  }
} else {
  header('Location: edit_profile.php?invalid_method');
}

?>
