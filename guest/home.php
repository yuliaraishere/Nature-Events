<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: ../login.php");
}

include "../connect.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="../assets/css/fontawesome.css">
  <link rel="stylesheet" href="../assets/css/templatemo-sixteen.css">
  <link rel="stylesheet" href="../assets/css/owl.css">

  <title>Nature Events</title>

  <!-- STYLE -->
  <style>
    body {
      font-family: 'Trebuchet MS', sans-serif;
    }

    #preloader {
      background: #39f7f4;
    }

    .navbar .navbar-brand h2 {
      font-size: 30px;
    }

    .navbar .navbar-brand h2 em {
      color: #39f7f4;
    }

    .navbar .navbar-nav .nav-link:hover,
    .navbar .navbar-nav .active>.nav-link,
    .navbar .navbar-nav .nav-link.active,
    .navbar .navbar-nav .nav-link.show,
    .navbar .navbar-nav .show>.nav-link {
      color: #fff;
      padding-bottom: 25px;
      border-bottom: 3px solid #39f7f4;
    }

    .banner-item-01 {
      background-image: url(../assets/images/auror-a.jpg);
    }

    .banner-item-02 {
      background-image: url(../assets/images/kawah.jpg);
    }

    .banner-item-03 {
      background-image: url(../assets/images/hujan-shower.jpeg);
    }

    .banner .text-content h2 {
      color: #39f7f4;
    }

    .banner .text-content h4 {
      color: white;
    }

    h1 {
      font-size: 40px;
      text-align: center;
      color: #343a40;
    }

    hr {
      width: 80%;
    }

    p {
      color: black;
      font-size: 20px;
      text-align: center;
      width: 70%;
      height: 200px;
      margin: auto;
      position: relative;
      top: -100px;
      margin-top: 70px;
      opacity: 25%;
    }

    .sm1 {
      width: 4%;
    }

    .sm2 {
      width: 7.9%;
    }

    .sm3 {
      width: 5%;
    }

    .sosmed {
      float: left;
      padding-left: 90px;
    }

    .copyright {
      text-align: right;
      margin-top: 120px;
    }
  </style>
  <!-- END STYLE -->

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->


  <!-- Header -->
  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="home.php">
          <h2>Nature <em>Events</em></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="naev.php">Nature</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="submit.php">Submission</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Banner Starts Here -->
  <div class="banner header-text">
    <div class="owl-banner owl-carousel">
      <div class="banner-item-01">
        <div class="text-content">
          <h2>Aurora</h2>
          <h4>Meledaknya Bintik Hitam di Permukaan Matahari yang menghasilkan angin surya</h4>
        </div>
      </div>
      <div class="banner-item-02">
        <div class="text-content">
          <h2>Lubang Neraka di Turkemistan</h2>
          <h4>Lubang besar di tengah gurun di Derweze,Karakum,Turkemistan</h4>
        </div>
      </div>
      <div class="banner-item-03">
        <div class="text-content">
          <h2>Hujan Meteor Lyrid</h2>
          <h4>Hujan meteor yang berasal dari partikel-partikel debu yang ditumpahkan oleh meteor periode panjang<br>C/1861 G1 Thatcher</h4>
        </div>
      </div>
    </div>
  </div>
  <!-- Banner Ends Here -->

  <!-- About Us -->
  <div class="containers">
    <br><br><br><br>
    <h1><b>About Us</b></h1>
    <hr>

    <br><br>
    <p>This website was created with the aim of adding insight into Natural Events that exist in this world, cause every Natural Events that
      exist doesn't always occurs as a disaster, but also can be such a beautyful view that can be enjoyed by our eyes. You can also get some
      informations that you want to know, but it is not yet available on the website by do a submission, then our team will update it up as
      soon as possible.</p>

    <!-- Footer -->
    <hr class="rule">
    <div class="sosmed">
      <a href="https://www.facebook.com/"><img src="../assets/media/fb.png" class="sm1"></a>
      <a href="https://www.twitter.com/"><img src="../assets/media/tw.png" class="sm2"></a>
      <a href="https://www.instagram.com/"><img src="../assets/media/ig.png" class="sm3"></a>
    </div>
    <p class="copyright">©2022NatureEvent</p>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/owl.js"></script>
    <script src="../assets/js/slick.js"></script>
    <script src="../assets/js/isotope.js"></script>
    <script src="../assets/js/accordions.js"></script>


    <script language="text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t) { //declaring the array outside of the
        if (!cleared[t.id]) { // function makes it static and global
          cleared[t.id] = 1; // you could use true and false, but that's more typing
          t.value = ''; // with more chance of typos
          t.style.color = '#fff';
        }
      }
    </script>

</body>

</html>