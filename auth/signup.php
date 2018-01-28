<?php
  include '../_include/header.php';
?>

<link rel="stylesheet" href="../assets/css/signup.css">

<!-- Body -->
  <div class="container">
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h2>SIIC Mentorship Register</h2>
      <p class="lead"></p>
    </div>

    <div class="row">
      <div class="col-md-8">
        <h4 class="mb-3">Personal Details</h4>
        <form class="needs-validation" novalidate>
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
                <option value="School of Civil Engineering">School of Civil Engineering</option>
                <option value="School of Architecture and Interior Design">School of Architecture and Interior Design</option>
                <option value="School of Mechanical Engineering">School of Mechanical Engineering</option>
                <option value="School of Chemical and Material Technology">School of Chemical and Material Technology</option>
                <option value="School of Electrical and Electronics Engineering">School of Electrical and Electronics Engineering</option>
                <option value="School of Bio - Engineering">School of Bio - Engineering</option>
                <option value="School of Computing">School of Computing</option>
                <option value="School of Basic Sciences">School of Basic Sciences</option>
                <option value="School of Languages">School of Languages</option>
                <option value="Center for TQM">Center for TQM</option>
                <option value="Center for Nanotechnology">Center for Nanotechnology</option>
                <option value="Career Development Center">Career Development Center</option>
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
            <label for="qual">Highes Qualifications</label>
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
          <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
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
