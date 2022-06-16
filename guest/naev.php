<?php
session_start();

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

        h1 {
            font-size: 75px;
            text-align: center;
            color: #343a40;
            padding-top: 15%;
        }

        hr {
            width: 85%;
        }

        .card {
            width: 100%;
            height: 75%;
            background-color: #343a40;
        }

        .card-img-top {
            height: 320px;
        }

        .card-title {
            text-align: center;
            color: #39f7f4;
        }

        .card-text {
            color: #fff;
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
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item active">
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

    <!-- CARD -->

    <div class="container">
        <!-- Kejadian Alam -->
        <h1><b>Nature Events</b></h1>
        <hr>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col-6">
                <div class="card h-99" style="margin-top: 30%;">
                    <img src="../assets/images/auror-a.jpg" class="card-img-top" alt="Aurora">
                    <div class="card-body">
                        <h5 class="card-title">Aurora</h5>
                        <p class="card-text">An aurora, also commonly known as the polar lights, is a natural light display in Earth's sky,
                            predominantly seen in high-latitude regions. Auroras display dynamic patterns of brilliant lights
                            that appear as curtains, rays, spirals, or dynamic flickers covering the entire sky.</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card h-99" style="margin-top: 30%;">
                    <img src="../assets/images/kawah.jpg" class="card-img-top" alt="Lubang Neraka">
                    <div class="card-body">
                        <h5 class="card-title">The Fire Hole</h5>
                        <p class="card-text">In the hot, expansive Karakum desert in Turkmenistan, near the 350-person village of Darvaza,
                            is a hole 230 feet wide that has been on fire for over 50 years. Though technically called the Darvaza gas crater,
                            locals know the crater as “The Gates of Hell.” Its fiery glow can be seen for miles around.</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card h-99" style="margin-top: 20%;">
                    <img src="../assets/images/pelangi-api.jpg" class="card-img-top" alt="Pelangi Api">
                    <div class="card-body">
                        <h5 class="card-title">Circumhorizontal Arc</h5>
                        <p class="card-text">A circumhorizontal arc is an optical phenomenon that belongs to the family of ice halos formed by
                            the refraction of sunlight or moonlight in plate-shaped ice crystals suspended in the atmosphere, typically in cirrus
                            or cirrostratus clouds.</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card h-99" style="margin-top: 20%; padding-bottom: 90px">
                    <img src="../assets/images/supmoon.jpg" class="card-img-top" alt="SuperMoon">
                    <div class="card-body">
                        <h5 class="card-title">Supermoon</h5>
                        <p class="card-text">A supermoon is a full moon or a new moon that nearly coincides with perigee—the closest that the Moon
                            comes to the Earth in its elliptic orbit—resulting in a slightly larger-than-usual apparent size of the lunar disk as
                            viewed from Earth.</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card h-99" style="margin-top: 20%; padding-bottom: 90px">
                    <img src="../assets/images/sundog.jpg" class="card-img-top" alt="Matahari Kembar">
                    <div class="card-body">
                        <h5 class="card-title">Mock Sun</h5>
                        <p class="card-text">A sun dog or mock sun, also called a parhelion in meteorology, is an atmospheric optical phenomenon that
                            consists of a bright spot to one or both sides of the Sun. Two sun dogs often flank the Sun within a 22° halo.</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card h-99" style="margin-top: 20%; padding-bottom: 90px">
                    <img src="../assets/images/meteor-lyrid-rain.jpg" class="card-img-top" alt="Hujan Meteor Lyrid">
                    <div class="card-body">
                        <h5 class="card-title">Lyrid Meteor Shower</h5>
                        <p class="card-text">The April Lyrids are a meteor shower lasting from April 16 to April 25 each year. The radiant of the meteor
                            shower is located in the constellation Lyra, near its brightest star, Vega. The peak of the shower is typically around April
                            22nd each year.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- END CARD -->

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