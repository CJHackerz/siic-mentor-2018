<?php


if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if(
      isset($_POST['mentor_name']) &&

      isset($_POST['mentor_reg_id']) &&
      isset($_POST['mentor_dept']) &&
      isset($_POST['mentor_desig']) &&
      isset($_POST['mentor_qualifications']) &&
      isset($_POST['mentor_experience']) &&
      isset($_POST['mentor_contact']) &&
      isset($_POST['mentor_aot']) &&


      isset($_POST['mentor_time']) &&

  ) {
    $name = $_POST['mentor_name'];
    $reg_id = $_POST['mentor_reg_id'];
    $dept = $_POST['mentor_dept'];
    $desig = $_POST['mentor_desig'];
    $qual = $_POST['mentor_qualifications'];
    $exp = $_POST['mentor_experience'];
    $contact = $_POST['mentor_contact'];
    $aot = $_POST['mentor_aot'];
    $time = $_POST['mentor_time'];

    $sql = "SELECT * FROM mentor where email = '$email'";
    $result = $conn->query($sql);
    if($conn->query($sql)) {
      $sql1 = "UPDATE mentor SET name='$name', reg_no='$reg_id', dept='$dept', desig='$desig', qualifications='$qual', experience='$exp', contact='$contact',aoi='$aot', hours='$time' WHERE email='user_email'";
       if($conn->query($sql))
       {
      header('Location: ../profile/index.php');
    }
  }
    else {
      header('Location: ../_error/500.php?sql_failed');
    }

  }
}
    ?>
