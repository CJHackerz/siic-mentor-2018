<?php
  require '../_require/db.php';
  require '../vendor/autoload.php';
  use Mailgun\Mailgun;
  $mgClient = new Mailgun('key-28f57d982d256aa39f2fa195678151b3');
  $domain = "mail.srmiic.com";

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(
        isset($_POST['mentor_name']) &&
        isset($_POST['mentor_email']) &&
        isset($_POST['mentor_reg_id']) &&
        isset($_POST['mentor_dept']) &&
        isset($_POST['mentor_desig']) &&
        isset($_POST['mentor_qualifications']) &&
        isset($_POST['mentor_experience']) &&
        isset($_POST['mentor_contact']) &&
        isset($_POST['mentor_aot']) &&
        isset($_POST['mentor_startup']) &&
        isset($_POST['mentor_val_add']) &&
        isset($_POST['mentor_time']) &&
        isset($_POST['mentor_spec_train'])
    ) {
      $name = $_POST['mentor_name'];
      $email = $_POST['mentor_email'] . '@ktr.srmuniv.ac.in';
      $reg_id = $_POST['mentor_reg_id'];
      $dept = $_POST['mentor_dept'];
      $desig = $_POST['mentor_desig'];
      $qual = $_POST['mentor_qualifications'];
      $exp = $_POST['mentor_experience'];
      $contact = $_POST['mentor_contact'];
      $aot = $_POST['mentor_aot'];
      $startup = $_POST['mentor_startup'];
      $val_add = $_POST['mentor_val_add'];
      $time = $_POST['mentor_time'];
      $spec_train = $_POST['mentor_spec_train'];

      $sql = "SELECT * FROM mentor where email = '$email'";
      $result = $conn->query($sql);

      if($result->num_rows > 0) {
        header('Location: ../signup.php?exists');
      } else {
        $pass = uniqid();
        $sql = "INSERT INTO mentor(name, email, reg_no, dept, desig, qualifications, experience, contact, aoi, startup_exp, value_add, hours, spec_train, password) VALUES(
          '$name', '$email', '$reg_id', '$dept', '$desig', '$qual', '$exp', '$contact', '$aot', '$startup', '$val_add', '$time', '$spec_train', '$pass')";

        if($conn->query($sql)) {
          echo "Registration successfull! Please check your email";

          $result = $mgClient->sendMessage($domain, array(
            'from'    =>    'SRMIIC NoReply <noreply@srmiic.com>',
            'to'      =>    'Hello User <' . $email . '>',
            'subject' =>    'Welcome to SRMIIC Mentor!',
            'html'    =>    '<p>Thank you for registering for SRM Innovation and Incubation Center Mentorship! Your password is :' . $pass .'. The mentor site is currently under construction. You will be notified once it is ready! Thanks again!'
          ));
        } else {
          header('Location: ../_error/500.php?sql_failed');
        }
      }
    } else {
      header('Location: ../signup.php?params_missing');
    }
  } else {
    header('Location: ../signup.php');
  }
?>
