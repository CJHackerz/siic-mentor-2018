<?php
  include '../_include/header.php';
  include '../_include/navbar.php';
?>

<!-- Body -->
  <style media="screen">
    .error-404 {
      padding: 0;
      margin: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      background-color: rgba(255, 130, 45, 0.85);
      font-family: 'Montserrat', sans-serif;
      color: #fff;
      background: url('https://static.pexels.com/photos/818/sea-sunny-beach-holiday.jpg');
      background-size: cover;
      background-position: bottom
    }

    .error {
      text-align: center;
      padding-: 16px;
      position: relative;
      top: 50%;
      transform: translateY(-50%);
      -webkit-transform: translateY(-50%)
    }

    h1 {
      margin: -10px 0 -30px;
      font-size: calc(17vw + 40px);
      opacity: .8;
      letter-spacing: -17px;
    }

    p {
      opacity: .8;
      font-size: 20px;
      margin: 8px 0 38px 0;
      font-weight: bold
    }

    input,
    button,
    input:focus,
    button:focus {
      border: 0;
      outline: 0!important;
    }

    input {
      width: 300px;
      padding: 14px;
      max-width: calc(100% - 80px);
      border-radius: 6px 0 0 6px;
      font-weight: 400;
      font-family: 'Montserrat', sans-serif;
    }

    button {
      width: 40px;
      padding: 14.5px 16px 14.5px 12.5px;
      vertical-align: top;
      border-radius: 0 6px 6px 0;
      color: grey;
      background: silver;
      cursor: pointer;
      transition: all 0.4s
    }

    button:hover {
      color: white;
      background: #9A5C32
    }

    .fa-arrow-left {
      position: fixed;
      top: 30px;
      left: 30px;
      font-size: 2em;
      color:white;
      text-decoration:none
    }

  </style>

  <!-- <h1>Error! Page not found</h1> -->
  <div class="error">
    <div style="padding-top:500px">
  <h1>404</h1>
  <p>This page does not exist. Try another link.</p>
  <!-- <input placeholder="Try searching for what you were looking for..."></input><button onclick="window.location='' + this.previousSibling.value"><i class="fa fa-search"></i></button> -->
</div>
</div>

<!-- Body ends -->

<?php
  include '../_include/footer.php';
?>
