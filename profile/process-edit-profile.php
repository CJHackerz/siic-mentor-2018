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
  $extensions= array("jpeg","jpg","png");

  if (!empty($file_name) && $file_size!=0) {
    if(in_array($file_ext,$extensions)=== false){
      $errors[] ="extension not allowed";
    }

    if ($file_size > 2197152) {
      $errors[] ='File size must be less than 2MB';
    }
    // $count=count($errors);

    if (count($errors)==0) {
      $sql1 = "SELECT profile_img,id from mentor WHERE email = '$user_email'";
      $result = $conn->query($sql1);
      $row = $result->fetch_assoc();
      $profile_imgs = $row['id'] . "." . $file_ext;
      if($conn->query($sql1))
      {
        if(file_exists("../public/imgs/$profile_imgs")) unlink("../public/imgs/$profile_imgs");
          move_uploaded_file($file_tmp, "../public/imgs/" . $profile_imgs);
        $sql2 = "UPDATE mentor SET profile_img = '$profile_imgs' WHERE email='$user_email'";
        if($conn->query($sql2))
          echo "Profile Photo Updated successfully.";
      }
      else{
        move_uploaded_file($file_tmp, "../public/imgs/" . $profile_imgs);
        $sql2 = "INSERT INTO mentor(profile_img) VALUES('$profile_imgs') WHERE email='$user_email'";
        if($conn->query($sql2))
        echo "Profile Photo Uploaded Successfully.";
      }
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
