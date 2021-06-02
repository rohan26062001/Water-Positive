<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- CSS Style -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Ecological Engineering Project</title>
</head>

<style>
    body {
        overflow: auto;
    }
</style>

<body>
    <!-- Navbar Start -->
    <section class="navbar">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
            <div class="container">

                <!-- Brand -->
                <a class="navbar-brand" href="index.php" target="_blank">
                    <strong>Water Positive</strong>
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links  -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About This Project</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="authors.html">Authors</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <!-- Navbar -->
    </section>
    <!-- Navbar End -->

    <!-- Map Section Start -->
    <section class="map">
        <div class="container area" style="font-family: 'Josefin Sans', sans-serif; color: #E91E63; font-weight:bolder; font-size:larger">
            <br><br><br><br>
            <div class="row">
                <div class="col-lg-6  justify-content-center d-flex align-items-center flex-column p-5">
                    <ol class="p-5 list" style="background-color: white; border-radius: 5px;">
                        <li><a href="data.html"><span style="color: #E91E63;">Pathar Pratima (Main)</span></a></li>
                        <li><a href="data.html"><span style="color: #E91E63;">Pathar Pratima Supermarket</span></a></li>
                        <li><a href="data.html"><span style="color: #E91E63;">Dakshin Shibganj Oboitonik Prathamik Vidayalaya</span></a></li>
                        <li><a href="data.html"><span style="color: #E91E63;">Sanjibangiri</span></a></li>
                    </ol>
                </div>
                <div class="col-lg-6 home-img justify-content-center d-flex align-items-center p-5">
                    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=18zCxLAgvylPWd1ZcQB1HmKpR5nGFeTit" width="640" height="480"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- Map Section End -->

</body>

</html>

<?php
include("db-connection.php");


?>