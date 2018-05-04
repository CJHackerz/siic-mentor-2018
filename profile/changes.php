<?php
  include '../_include/header.php';
  require '../_require/auth.php';
  require '../_require/db.php';


  $sql="SELECT * from mentor WHERE email='$user_email'";
  $result =  $conn->query($sql);
  $row   =  $result->fetch_assoc();
  $reg   =  $row['reg_no'];
  $desig =  $row['desig'];
  $cont  =  $row['contact'];
  $dep   =  $row['dept'];
  $qual  =  $row['qualifications'];
  $email =  $row['email'];
  $aoi   =  $row['aoi'];
  $exp   =  $row['experience'];
  $time  =  $row['hours'];
  $prof  =  $row['profile_img']


?>

<link rel="stylesheet" href="../assets/css/signup.css">

<!-- Body -->
  <div class="container">
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="https://srmiic.com/siiclogo.jpg" alt="" width="72" height="72">
      <h2>Mentorship Edit Profile</h2>
      <p class="lead"></p>
    </div>

    <div class="row">
      <div class="col-md-8">
        <h4 class="mb-3">Personal Details</h4>
        <form method="post" action="./process-changes.php" class="needs-validation" novalidate>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="mentor_name" placeholder="" value="<?php echo $user_name ?>" required>
              <div class="invalid-feedback">
                Valid name is required
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="reg_id">Employee ID/ Registration Number</label>
            <input type="text" class="form-control" id="reg_id" name="mentor_reg_id" value="<?php echo $reg ?>" required>
            <div class="invalid-feedback">
              Please enter your Employee ID/ Registration Number
            </div>
          </div>

          <div class="row">
            <div class="col-md-5 mb-3">
              <label for="dept">Department</label>
              <select class="custom-select d-block w-100" id="dept" name="mentor_dept" required>
                <option value=""><?php echo $dep ?></option>
                <option value="Department of Civil Engineering">Department of Civil Engineering</option>
                <option value="Department of Mechanical Engineering">Department of Mechanical Engineering</option>
                <option value="Department of Automobile Engineering">Department of Automobile Engineering</option>
                <option value="Department of Aerospace Engineering">Department of Aerospace Engineering</option>
                <option value="Department of Mechatronics">Department of Mechatronics</option>
                <option value="Department of Electronics & Communication">Department of Electronics & Communication</option>
                <option value="Department of Telecommunication">Department of Telecommunication</option>
                <option value="Department of Electrical and Electronics">Department of Electrical and Electronics</option>
                <option value="Department of Electronics & Instrumentation">Department of Electronics & Instrumentation</option>
                <option value="Department of Computer Science Engineering">Department of Computer Science Engineering</option>
                <option value="Department of Information Technology">Department of Information Technology</option>
                <option value="Department of Software Engineering">Department of Software Engineering</option>
                <option value="Department of Nanotechnology">Department of Nanotechnology</option>
                <option value="Department of Nuclear Engineering">Department of Nuclear Engineering</option>
                <option value="Department of Architecture and Interior Design">Department of Architecture and Interior Design</option>
                <option value="Department of Chemical Engineering">Department of Chemical Engineering</option>
                <option value="Department of Biotechnology">Department of Biotechnology</option>
                <option value="Department of Biomedical Engineering">Department of Biomedical Engineering</option>
                <option value="Department of Genetic Engineering">Department of Genetic Engineering</option>
                <option value="Department of Food Process Engineering">Department of Food Process Engineering</option>
                <option value="Department of Mathematics">Department of Mathematics</option>
                <option value="Department of Physics">Department of Physics</option>
                <option value="Department of Chemistry">Department of Chemistry</option>
                <option value="School of Business and Management">School of Management</option>
                <option value="College of Science and Humanities">College of Science and Humanities</option>
                <option value="Career Development Centre">Career Development Centre</option>
                <option value="School of Law">School of Law</option>
                <option value="College of Medicine">College of Medicine, Dental and Health Science</option>
                <option value="others">Others</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid School/Department
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="desig">Designation</label>
            <input type="text" class="form-control" id="desig" name="mentor_desig" value="<?php echo $desig ?>" required>
            <div class="invalid-feedback">
              Please enter your Designation
            </div>
          </div>

          <div class="mb-3">
            <label for="qual">Highest Qualifications</label>
            <input type="text" class="form-control" id="qual" name="mentor_qualifications" value="<?php echo $qual ?>" required>
            <div class="invalid-feedback">
              Please enter your Qualifications
            </div>
          </div>

          <div class="mb-3">
            <label for="exp">Total Years of Experience</label>
            <input type="text" class="form-control" id="exp" name="mentor_experience" value="<?php echo $exp ?>" required>
            <div class="invalid-feedback">
              Please enter your Experience
            </div>
          </div>

          <div class="mb-3">
            <label for="contact">Contact Number</label>
            <input type="text" class="form-control" id="contact" name="mentor_contact" value="<?php echo $cont ?>" required>
            <div class="invalid-feedback">
              Please enter your Contact Number
            </div>
          </div>

          <hr class="mb-4">

          <h4 class="mb-3">Professional Details</h4>

          <div class="mb-3">
            <label for="aot">Area of Interest</label>
            <input type="text" class="form-control" id="aot" name="mentor_aot" value="<?php echo $aoi ?>" required>
            <div class="invalid-feedback">
              Please enter your Area of Interest
            </div>
          </div>





          <div class="mb-3">
            <label for="startup">What will be your comfortable hours of mentoring per week?</label>
            <input type="text" class="form-control" id="startup" name="mentor_time" value="<?php echo $time ?>" required>
            <div class="invalid-feedback">
              Please enter your preferred timing
            </div>
          </div>


          <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit" style="background-color:#0dba86;">Confirm Update</button>
        </form>
      </div>
    </div>
  </div>
<!-- Body ends -->
<script>
    (function() {
      'use strict';

      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');

        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
</script>
<?php
  include '../_include/footer.php';
?>
