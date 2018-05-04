<?php
  include '../_include/header.php';
  require '../_require/auth.php';
  require '../_require/db.php';
?>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../assets/css/signup.css">
</head>
<div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="https://srmiic.com/siiclogo.jpg" alt="" width="72" height="72">

    <p class="lead"></p>
  </div>
<div class="row">
  <div class="col-md-8">
    <h4 class="mb-3">Change password</h4>
    <form method="post" action="./process-changes.php" class="needs-validation" novalidate>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="name">Old password</label>
          <input type="text" class="form-control" id="name" name="mentor_name" placeholder="" value="" required>
          <div class="invalid-feedback">
            Valid name is required
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="name">New password</label>
          <input type="text" class="form-control" id="name" name="mentor_name" placeholder="" value="" required>
          <div class="invalid-feedback">
            Valid name is required
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="name">Confirm New password</label>
          <input type="text" class="form-control" id="name" name="mentor_name" placeholder="" value="" required>
          <div class="invalid-feedback">
            Valid name is required
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
