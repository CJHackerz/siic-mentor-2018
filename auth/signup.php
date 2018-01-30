<?php
  include '../_include/header.php';
?>

<link rel="stylesheet" href="../assets/css/signup.css">

<!-- Body -->
  <div class="container">
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="https://srmiic.com/siiclogo.jpg" alt="" width="72" height="72">
      <h2>SIIC Mentorship Registeration</h2>
      <p class="lead"></p>
    </div>

    <div class="row">
      <div class="col-md-8">
        <h4 class="mb-3">Personal Details</h4>
        <form method="post" action="./process-signup.php" class="needs-validation" novalidate>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="mentor_name" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid name is required
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="email">Email</label>
            <div class="input-group">
              <input type="text" class="form-control" id="email" name="mentor_email" required>
              <div class="input-group-append">
                <span class="input-group-text">@ktr.srmuniv.ac.in</span>
              </div>
              <div class="invalid-feedback" style="width: 100%;">
                Valid email is required
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="reg_id">Employee ID/ Registration Number</label>
            <input type="text" class="form-control" id="reg_id" name="mentor_reg_id" required>
            <div class="invalid-feedback">
              Please enter your Employee ID/ Registration Number
            </div>
          </div>

          <div class="row">
            <div class="col-md-5 mb-3">
              <label for="dept">Department</label>
              <select class="custom-select d-block w-100" id="dept" name="mentor_dept" required>
                <option value="">Choose...</option>
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
                <option value="School of Business and Management">School of Business and Management</option>
                <option value="School of Law">School of Law</option>
                <option value="College of Medicine">College of Medicine</option>
                <option value="others">Others</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid School/Department
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="desig">Designation</label>
            <input type="text" class="form-control" id="desig" name="mentor_desig" required>
            <div class="invalid-feedback">
              Please enter your Designation
            </div>
          </div>

          <div class="mb-3">
            <label for="qual">Highest Qualifications</label>
            <input type="text" class="form-control" id="qual" name="mentor_qualifications" required>
            <div class="invalid-feedback">
              Please enter your Qualifications
            </div>
          </div>

          <div class="mb-3">
            <label for="exp">Total Years of Experience</label>
            <input type="text" class="form-control" id="exp" name="mentor_experience" required>
            <div class="invalid-feedback">
              Please enter your Experience
            </div>
          </div>

          <div class="mb-3">
            <label for="contact">Contact Number</label>
            <input type="text" class="form-control" id="contact" name="mentor_contact" required>
            <div class="invalid-feedback">
              Please enter your Contact Number
            </div>
          </div>

          <hr class="mb-4">

          <h4 class="mb-3">Professional Details</h4>

          <div class="mb-3">
            <label for="aot">Area of Interest</label>
            <input type="text" class="form-control" id="aot" name="mentor_aot" required>
            <div class="invalid-feedback">
              Please enter your Area of Interest
            </div>
          </div>

          <div class="row">
            <div class="col-md-5 mb-3">
              <label for="startup">Do you have any experience in mentoring startups or woking with startups</label>
              <select class="custom-select d-block w-100" id="startup" name="mentor_startup" required>
                <option value="">Choose...</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid option
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-5 mb-3">
              <label for="startup">What kind of value addition can you make to a startup team?</label>
              <select class="custom-select d-block w-100" id="startup" name="mentor_val_add" required>
                <option value="">Choose...</option>
                <option value="Idea to Prototype(Technical)">Idea to Prototype(Technical)</option>
                <option value="Product to Market(Business)">Product to Market(Business)</option>
                <option value="Networking">Networking</option>
                <option value="Source of Funds/Investors">Source of Funds/Investors</option>
                <option value="Financial Management">Financial Management</option>
                <option value="Legal Assistance">Legal Assistance</option>
                <option value="Organization Development">Organization Development</option>
                <option value="Others">Others</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid option
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="startup">What will be your comfortable hours of mentoring per week?</label>
            <input type="text" class="form-control" id="startup" name="mentor_time" required>
            <div class="invalid-feedback">
              Please enter your preferred timing
            </div>
          </div>

          <div class="row">
            <div class="col-md-5 mb-3">
              <label for="startup">Are you interested to take special training to mentor startups?</label>
              <select class="custom-select d-block w-100" id="startup" name="mentor_spec_train" required>
                <option value="">Choose...</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid option
              </div>
            </div>
          </div>

          <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to Signup</button>
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
