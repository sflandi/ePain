<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/epain12.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nurse E-Pain</title>
    <link rel="stylesheet" href="css\buttonCustom.css">
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\loader.css">
    <link href="css\fontawesome-free-5.4.2-web\css\fontawesome.css" rel="stylesheet">
    <link href="css\fontawesome-free-5.4.2-web\css\brands.css" rel="stylesheet">
    <link href="css\fontawesome-free-5.4.2-web\css\solid.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css\bootstrap-4.1.3\dist\css\bootstrap.min.css">
    <script src="css\bootstrap-4.1.3\dist\js\bootstrap.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>
<body style="font-family: 'Montserrat', sans-serif;">

<div class="slider fullscreen">

    <ul class="slides">
        <li>
            <img src="img/img1.jpg"> <!-- random image -->
            <div class="caption center-align">
            <h3>We’re here for you</h3>
            <h5 class="light grey-text text-lighten-3">Helping you take control of your health and wellbeing.</h5>
            

            </div>
        </li>
        <li>
            <img src="img/img4.jpg"> 
            <div class="caption left-align">
            <h3>Patient satisfaction</h3>
            <h5 class="light grey-text text-lighten-3">Given the best for your healthy.</h5>
            </div>
        </li>
        <li>
            <img src="img/img3.jpg"> <!-- random image -->
            <div class="caption right-align">
            <h3></h3>
            <h5 class="light grey-text text-lighten-3"></h5>
            </div>
        </li>
        <!-- <li>
            <img src="https://lorempixel.com/580/250/nature/4">
            <div class="caption center-align">
            <h3>This is our big Tagline!</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
        </li> -->
    </ul>
  </div>

<div id="marginYa">
    <div class="container">
        <div class="contain3"  style="margin-top:40%"> -->
        <!-- <center><h2>NURSE E-PAIN</h2></center> -->
        <div class="row">
            <div class="col s12 m6 xl6">
                    <a href="loginAdmission.php" class="fancy-button bg-gradient1"><span><i class="fas fa-notes-medical"></i>ADMISSION</span></a>
            </div>
            <div class="col s12 m6 xl6">
                <a href="login.php" class="fancy-button bg-gradient1"><span><i class="fas fa-stethoscope"></i>E-PAIN MANAGEMENT</span></a>
            </div>
        </div>
        </div>
    </div>

</div>
    <script>
    // document.addEventListener('DOMContentLoaded', function() {
    //     var elems = document.querySelectorAll('.slider');
    //     var instances = M.Slider.init(elems, options);
    // });
    // Or with jQuery

    $(document).ready(function(){
        $('.slider').slider();
    });
    </script>
</body>
</html>