<?php
  include '../_include/header.php';
  require '../_require/auth.php';
  require '../_require/db.php';
?>

<head>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
<!-- Body -->
<?php
 $sql="SELECT * from mentor";
 $result =  $conn->query($sql);
 $row   =  $result->fetch_assoc();
 $reg   =  $row['reg_no'];
 $dep   =  $row['dept'];
 $qual  =  $row['qualifications'];
 $email =  $row['email'];
 $aoi   =  $row['aoi'];
 $exp   =  $row['experience'];
 $time  =  $row['hours'];
?>

 <div style="background-color:#DCDCDC">


  <div align="center" style="display: block;float:left;margin:100px 0px 0px 150px">
  <?php echo  '<img src="../public/imgs/'. $row['profile_img'].'" alt="No image" style="border-radius:50%;border:6px solid #696969; height:200px;width:200px;margin:auto "/> '?>
    <br/>
    <div style="display:block;font-size:40px;margin:auto">
    <?php echo $user_name; ?>
  </div>
  <center style="margin-top: -10px"><hr style="width: 50%; height: 5px; background-color:#0dba86;"></center>
  <span style="color:#696969;font-size:20px">Mentor</span>
</div>
  <!-- <div style="float:left; margin-left:50px">
    <?php echo $user_name; ?>
  </div> -->
  <div class="card" style="width: 47rem;margin-left:540px;">
    <center style="margin-top:-15px"><hr style="width: 100%; height: 5px; background-color:#0dba86;"></center>
    <div align="right">
    <i class="fas fa-user" style="width:200px;overflow:hidden; border-radius:50%; height:40px;padding-right:20px"></i>
  </div>
  <div class="card" style="width: 42rem;margin:20px 0px 0px 20px">
  <div class="card-body">
    <p style="font-size:30px">Hello, I am <strong><?php echo $user_name; ?></strong>
    </p>
    <p class="card-text">The mentor is from the department of <?php echo $dep ?>. The mentor provides a good opportunity for early-career researchers, especially those from <?php echo $aoi ?>. He himself
          having interest in this field. He himself being a very enthusiastic and having <?php echo $exp ?> years of experience.He is also willing to devote <?php echo $time ?> hours per week. He is also an
          excellent support for the whole team.
    </p>
  </div>
</div>
<div class="card" style="width: 42rem;margin:20px 0px 0px 20px">
<div class="card-body">
  <p style="font-size:30px">Personal Info
  </p>
  <div class="progress" style="width:40%; height:25px; margin:10px; float:left" >
    <div class="progress-bar" role="progressbar" style="width:30%;background-color:#0dba86">
      Name
    </div>
    <div class="progress-bar" role="progressbar" style="width:70%;background-color:	#DCDCDC; color:	#696969">
      <?php echo $user_name ?>
    </div>
  </div>
  <div class="progress" style="width:40%; height:25px;margin:10px; float:left">
    <div class="progress-bar" role="progressbar" style="width:30%; background-color:#0dba86">
      Reg no
    </div>
    <div class="progress-bar" role="progressbar" style="width:70%;background-color:	#DCDCDC; color:	#696969">
      <?php echo $reg ?>
    </div>
  </div>
  <div class="progress" style="width:40%; height:25px;margin:10px; float:left">
    <div class="progress-bar" role="progressbar" style="width:30%; background-color:#0dba86">
      Department
    </div>
    <div class="progress-bar" role="progressbar" style="width:70%;background-color:	#DCDCDC; color:	#696969">
      <?php echo $dep ?>
    </div>
  </div>
  <div class="progress" style="width:40%; height:25px;margin:10px; float:left">
    <div class="progress-bar" role="progressbar" style="width:30%; background-color:#0dba86">
      Qualifications
    </div>
    <div class="progress-bar" role="progressbar" style="width:70%;background-color:	#DCDCDC; color:	#696969">
      <?php echo $qual ?>
    </div>
  </div>
  <div class="progress" style="width:40%; height:30px;margin:10px; float:left">
    <div class="progress-bar" role="progressbar" style="width:30%; background-color:#0dba86">
      Email
    </div>
    <div class="progress-bar" role="progressbar" style="width:70%;background-color:	#DCDCDC; color:	#696969">
      <?php echo $email ?>
    </div>
  </div>
  <div class="progress" style="width:40%; height:30px;margin:10px; float:left">
    <div class="progress-bar" role="progressbar" style="width:30%; background-color:#0dba86">
      Area of Interest
    </div>
    <div class="progress-bar" role="progressbar" style="width:70%;background-color:	#DCDCDC; color:	#696969">
      <?php echo $aoi ?>
    </div>
  </div>
  <!-- <span class="btn btn-primary" style="background-color:#ffc400;border-color:#ffc400;padding:3px 10px 2px 10px;">Name</span><span class="btn btn-primary" style="background-color:	#D3D3D3;border-color:	#D3D3D3;color: #000000; padding:3px 10px 2px 10px;"><?php echo "Hi" ?></span><span class="btn btn-primary" style="background-color:#ffc400;border-color:#ffc400;">Department</span><br>
  <span class="btn btn-primary">DOB</span><span style="padding:5px 100px 0px 5px;font-size:20px"><?php echo $dob; ?><span class="btn btn-primary"></span> -->
</div>
</div>
</div>
</div>
<!-- Body ends -->

<?php
  include '../_include/footer.php';
?>
