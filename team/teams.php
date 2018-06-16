<?php
    include '../process/connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIIC</title>

    <!-- css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/animations.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">

    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="./css/teams.css">
    <?php
    // include 'feedback_modal.php';
    ?>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom" style="padding: 0px;">
    <div id="wrapper">
        <div class="overlay"></div>
<?php require '../_include/nav.php'; ?>
<!---->
<div id="page-content-wrapper">
<br>
<h1 align="center">100+ Teams</h1>
<div class="container-fluid">
  <div class="row">


    <?php
        $sql = "SELECT * from teams where type = 'team'";
        $result = $conn->query($sql);

        if($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo        '<div class="col-md-3" ng-repeat="aMem in aMems" style="height: 400px; overflow: hidden;">
                                <div class="card pop" desc="Siic ">
                                    <a href="./teampage.php?id=' . $row['team_id'] . '">
                                        <div class="team_pic">
                                            <img src="./teams/img/' . $row['logo'] . '" title="" style="width:100%">
                                            <div class="team_name">
                                                <p>' . $row['team_name'] . '</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>';
            }
        }
    ?>
  </div>
</div>


	<?php include '../_include/footer.php';?>
</div><!-- Page content wrapper ends -->
</div><!-- wrapper ends -->
    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>

    <script src="js/custom.js"></script>
	<script src="js/css3-animate-it.js"></script>
    <script src="js/sidenav.js"></script>
    <script>

    </script>

</body>

</html>
