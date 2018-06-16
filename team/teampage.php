<?php
    include '../_require/db.php';
    include '../_require/auth.php';

    // $user = get_user();

    if(isset($_GET["id"])) {
        //session_start();

        $team_id = htmlentities(mysql_real_escape_string(($_GET["id"])));

        $sql = "SELECT * from teams where team_id = '$team_id'";

        $result = $conn->query($sql);

        $row = $result->fetch_assoc();
        $team_email     = $row['team_email'];
        $team_name      = $row["team_name"];
        $description    = $row['description'];
        $logo           = $row['logo'];
        $contact        = $row['contact'];
        $website        = $row['website'];
        $fb             = $row['fb'];

        if (strpos($website, 'http') === false) {
            $website = 'http://' . $website;
        }
    } else {
        header('Location ./404.php');
    }
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

	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/animations.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">

    <link href="./css/sweetalert.css" rel="stylesheet">
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
    <link href="./font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom" style="padding: 0px;">
    <div id="wrapper">
        <div class="overlay"></div>

  <?php
  // require "../_include/nav.php";
  ?>
    <!-- /Navigation -->
<div id="page-content-wrapper">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<style>
  .well{

    background: none;
    box-shadow: none;
    border: 1px solid #ccc;
    border-top : 4px solid #ccc;
    border-radius: 2px;

  }
  .well:hover{
    border-radius: 0px;
    border-top : 4px solid #ffab00;
    transition: 0.4s;
  }

  h6{
  font-family: 'Nunito', sans-serif;
  }



  .applyBtn{
    height: 50px;
    width: 150px;
    border: 2px solid black;
    margin: 10px;
    padding: 5px;
    padding-bottom: 2px;
    float: right;
  }

  h6{
    margin: 0 0 5px;
  }

  p{
    margin: 0 0 5px;
  }

  .applyBtn:hover{
    background-color: yellow;
    color: black;
    transition: 0.4s;
  }

  .nav-tabs{
  background-color:none;
  border-bottom: 4px solid #ffc400;
  padding-bottom: 2px;
}

.nav-tabs > li > a{
  border:none;
  padding: 8px;
  outline: none;
}

.nav-tabs > li > a:hover{
  background-color: #fff59d !important;
  border-radius: 0;
  color:black;
  transition: ease-out 0.8s;
}

.nav-tabs > li > a.active{
  background-color: black !important;
  border-radius: 0;
  color:black;
}

.createLink{
  margin-top: 15px;

  background-color: #ffc400;
   border: 2px solid #ffc400;
}
.createLink:active{
  background-color: #ffab00;
  border: 2px solid #ffc400;
}
.createLink:hover{
  background-color: #ffab00;
  border: 2px solid #ffc400;
}
.rightBtn {
    margin-top: 15px;
    float: right;
    background-color: #ffc400;
    border: 2px solid #ffc400;
}
.rightBtn:active{
  background-color: #ffab00;
  border: 2px solid #ffc400;
}
.rightBtn:hover{
  background-color: #ffab00;
  border: 2px solid #ffc400;
}
hr{
  width: 80px;
  height: 10px;
  background-color: #ffab00;
}
.nav > li > a:hover {
    text-decoration: none;
    background-color: none;
}
  /*.nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus {
    color: #ffc400 !important;
    background-color: #efefea !important;
}*/

logoutBtn{
  background-color: none;
  border: 3px solid #ffc400;
  border-radius: 5px;
  color: #ffc400;
}
.logoutBtn{
  background-color: #ffab00;
}

.nav-pills > li > a:hover{
    color: black !important;
    background-color: #fff !important;
    border-radius: 0;
    border-bottom: 4px solid #ffab00;
    animation-delay: 2s;
}
.nav-pills > li.active > a, .nav-pills > li.active > a:focus {
    color: black !important;
    background-color: #fff !important;
    border-radius: 0;
    border-bottom: 4px solid #ffab00;
    animation-delay: 2s;
}

@media only screen and (min-width: 500px) {
    .padInLaptop{
  padding-left: 38%;
}
}

@media only screen and (max-width: 500px) {
    .padInLaptop{
  padding-left: 0%;
}
.nav-pills > li  > a{
  font-size: 0.9em;
  padding:0.5em;
}

.rightBtn{
 width: 100%;
}



footer{
  display: block;
}
}


</style>

<div class="container-fluid">
    <div class="fb-profile">
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div style="padding: 20px 0px 0px 20px;" align="center"><img class="img-thumbnail" src="./teams/img/<?php echo $logo; ?>" alt="Team Logo";/></div>
                <h1 style="padding: 20px 0px 0px 20px;" align="center"><?php echo $team_name;?></h1>
                <div style="font-size: 40px; text-align: center;">
                    <a href="<?php echo $fb; ?>" style="color:#3b5998;"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="<?php echo $website; ?>" style="color:#333;"><i class="fa fa-globe" aria-hidden="true"></i></a>
                </div>
                <div style="text-align: center; margin-top: 7px;">
                    <p><i class="fa fa-phone" aria-hidden="true"></i><?php echo $contact; ?></p>
                </div>
            </div>
            <div class="hidden-xs col-sm-9 col-md-9 col-lg-9" style="padding: 20px 20px 50px 20px;">
                <div class="cover-img col-lg-12 col-md-12 col-sm-12 hidden-xs"></div>
                <!-- <img align="left" class="fb-image-lg" src="http://blog.lenycom.com/wp-content/uploads/2010/01/Apple-Vector-Desktop-Ful-HD-Background.jpg"/> -->
                <div class="pull-right action-btns">
                    <?php
                        if(!empty($_SESSION['email'])) {
                            $sql = "SELECT * from mentor_members where email = '" . $_SESSION['email'] . "' AND team_id = '$team_id'";
                            $result = $conn->query($sql);
                            if($result->num_rows > 0) {
                                $rows = $result->fetch_assoc();
                                if($rows['status'] == 'ACCEPTED') {
                                    echo '<button class="btn btn-primary btn-lg" onclick="leaveTeam()">Leave</button>';
                                } else {
                                    echo '<button class="btn btn-primary btn-lg" onclick="joinTeam()">Join</button>';
                                }
                            } else {
                                echo '<button class="btn btn-primary btn-lg" onclick="joinTeam()">Join</button>';
                            }
                        }
                    ?>
                </div>
                <div class="row">
                    <!-- <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <span></span>
                    </div> -->
                    <div class="row" style="color:#000;">

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="float: right; ">
                                <br>
                                <ul class="nav nav-pills padInLaptop">
                                    <li class="active"><a data-toggle="pill" href="#about-menu">About</a></li>
                                    <!-- <li><a data-toggle="pill" href="#feed-menu">Feed</a></li> -->
                                </ul>

                                <div class="container container-fluid">
                                    <div class="tab-content">
                                        <div id="about-menu" class="tab-pane tab-pane fade in active">
                                            <div class="row">
                                                <div id="aboutList" style="font-size: 20px;" class="container">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                                                            <p><b>Email</b></p>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
                                                            <p>: <?php echo $team_email; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                            <p><b>Description</b></p>

                                                            <p class="col-md-9"><?php echo $description; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br><br>
                                        </div>


                                    </div>
                                </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div><!-- Page content wrapper ends -->
</div><!-- wrapper ends -->
    <input type="hidden" id="uid" value="<?php echo $_SESSION['email'];?>">
    <input type="hidden" id="tid" value="<?php echo $_GET['id'];?>">
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
    <script src="js/sweetalert.min.js"></script>
    <script src="js/sidenav.js"></script>

    <?php
        if(isset($_GET['stat'])) {
            if($_GET["stat"] === 'nc') {
            ?>
        <script>
            swal("Success", "Congratulations you have created a new team!", "success")
        </script>
    <?php
            }
        }
    ?>

    <script>
        $( document ).ready(function() {
            var uid = $("#uid").val();
            var tid = $("#tid").val();

            loadRequests();
        });

        function joinTeam() {
            var uid = $("#uid").val();
            var tid = $("#tid").val();
            $.ajax({
                type: "post",
                url: "./process/join_team.php",
                data: {
                    id: uid,
                    team_id : tid
                },
                dataType: "json",
                success : function(data) {
                    if(data.status == 'success'){
                        swal('Request Sent', '', 'success');
                    }else if(data.status == 'error'){
                        swal('Request Already Sent or You are already a member', '', 'error');
                    }
                }
            });
        }


        // function loadRequests() {
        //     var tid = $("#tid").val();
        //     console.log("Loading requests");
        //     $.ajax({
        //         type: "POST",
        //         url: "./process/team/load_requests.php",
        //         data: {
        //             id  :   tid
        //         },
        //         beforeSend: function() {
        //             $('#requestList').html('<center>loading...</center>');
        //         },
        //         dataType: "html",
        //         success: function(data) {
        //             $("#requestList").html(data);
        //         }
        //     });
        // }
        //
        // function acceptRequest(accept_email) {
        //     console.log(accept_email);
        //     $.ajax({
        //         type: "POST",
        //         url: "./process/team/process_member_request.php",
        //         data: {
        //             email: accept_email,
        //             type : 'accept'
        //         },
        //         dataType: 'json',
        //         success: function(data) {
        //             if(data.status == 'success') {
        //                 console.log("accepted : " + accept_email);
        //             }
        //         },
        //         complete() {
        //             loadRequests();
        //         }
        //     });
        // }

        // function rejectRequest(reject_email) {
        //     console.log(reject_email);
        //     $.ajax({
        //         type: "POST",
        //         url: "./process/team/process_member_request.php",
        //         data: {
        //             email: reject_email,
        //             type : 'reject'
        //         },
        //         dataType: 'json',
        //         success: function(data) {
        //             if(data.status == 'success') {
        //                 console.log("reject : " + reject_email);
        //             }
        //         },
        //         complete() {
        //             loadRequests();
        //         }
        //     });
        // }
    </script>
</body>

</html>
