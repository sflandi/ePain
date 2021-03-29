<?php
    include_once "koneksi.php";
    date_default_timezone_set('Asia/Jakarta');
    session_start();
    if(ISSET($_SESSION['username'])){
        $nrpID = $_GET['idedit'];
        $usia = $_GET['age'];
        $hariUsia = $_GET['days'];
        $planRawatJalan = $_GET['plan'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#0287D0">
    <link rel="shortcut icon" href="img/epain12.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Plan | E-Pain</title>
    <!-- <link rel="stylesheet" href="css\style.css"> -->
    <link rel="stylesheet" href="css\buttonCustom.css">
    <link rel="stylesheet" href="css\bootstrap-4.1.3\dist\css\bootstrap.min.css">
    <link href="css\fontawesome-free-5.4.2-web\css\fontawesome.css" rel="stylesheet">
    <link href="css\fontawesome-free-5.4.2-web\css\brands.css" rel="stylesheet">
    <link href="css\fontawesome-free-5.4.2-web\css\solid.css" rel="stylesheet">
    <script src="css\bootstrap-4.1.3\dist\js\bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js\scriptEmergencyAdult.js"></script>
    <link rel="stylesheet" href="css\loader.css">

    
    
</head>
<body style="font-family: 'Montserrat', sans-serif; background-image: url('img/bg2.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
<!-- <body style="font-family: 'Helvetica', sans-serif;"> -->
    <div class="container-fluid">
        <?php
            include "koneksi.php";
            $userid=$_SESSION['username'];
            $sql = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM Tbl_login WHERE username = '$userid' "));
            $nama=strtoupper($sql['nama']);
        ?>
        <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark">
        <a href="formEmanagement.php" class="navbar-brand"><img src="img/epain12.png" alt="" style="width:45px; height:45px;"> E-PAIN</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href='#' class='nav-item nav-link active'></a>
                </div>
                <form class="form-inline ml-auto" action="logout.php" method="post">
                    <div class="row">
                        <div class="col-sm">
                            <a style="float: right; color: white;"><b><i>
                            <?php 
                                echo "WELCOME,";
                                echo "<br>";
                                echo "$nama";
                            ?>
                            </i></b></a>
                        </div>
                        <button type="submit" class="btn btn-outline-danger button">LOGOUT</button>
                    </div>
                </form>
            </div>
        </nav>
    </div><br><br><br><br>
    
    <div class="container" style="overflow:hidden;">
    <div class="row">
            <div class="col-sm-2">
                <?php
                    include "koneksi.php";
                    $nrpID = $_GET['idedit'];
                    $query = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM data_pasien WHERE nrpID = '$nrpID' "));
                    $namaPasien=strtoupper($query['nama']);
                ?>
                <h5>Nama Pasien : <?php echo $namaPasien ?></h5>
            </div>
            <div class="col-sm-8"></div>
            <div class="col-sm-2">
                <h5  id="hari"></h5>
            </div>
        </div>
        <div class="animate-bottom" >
        <div class="row" style="margin-top:15%;">
            <div class="col-sm-4">
                <?php
                    echo '<a href="fpsRawatJalan.php?idedit='.$nrpID.'&age='.$usia.'&days='.$hariUsia.'&plan='.$planRawatJalan.'" class="fancy-button bg-gradient1"><span>FPS</span></a>';
                ?>
            </div>
            <div class="col-sm-4">
                <?php
                    echo '<a href="cpotRawatJalanKids.php?idedit='.$nrpID.'&age='.$usia.'&days='.$hariUsia.'&plan='.$planRawatJalan.'" class="fancy-button bg-gradient1"><span>CPOT</span></a>';
                ?>
            </div>
            <div class="col-sm-4">
                <?php
                    echo '<a href="cfsRawatJalan.php?idedit='.$nrpID.'&age='.$usia.'&days='.$hariUsia.'&plan='.$planRawatJalan.'" class="fancy-button bg-gradient1"><span>CFS</span></a>';
                ?>
            </div>
        </div>

        <div class="row" style="margin-top:16%">
            <div class="col-sm-2">
            <?php
                echo '<a href="choosePlan.php?idedit='.$nrpID.'&age='.$usia.'&days='.$hariUsia.'" class="btn btn-primary btn-block button1"><span>KEMBALI</span></a>';
            ?>
            </div>
            <div class="col-sm-8"></div>
            <div class="col-sm-2">
            <?php
                echo '<a href="continueTableV2.php?idedit='.$nrpID.'&age='.$usia.'&days='.$hariUsia.'&plan='.$planRawatJalan.'" class="btn btn-primary btn-block button1"><span>LANJUTKAN</span>></a>';
            ?>
            </div>
        </div>
        </div>
    </div>
<script type='text/javascript'>
    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
    var date = new Date();
    var day = date.getDate();
    var month = date.getMonth();
    var thisDay = date.getDay(),
        thisDay = myDays[thisDay];
    var yy = date.getYear();
    var year = (yy < 1000) ? yy + 1900 : yy;
    var hari = (thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
    document.getElementById("hari").innerHTML = hari;
    // $("#hari").val(hari);
</script>
</body>
</html>

<?php
    }else{
        echo "<script language=\"javascript\"> alert(\"Please Login\");document.location.href='login.php'; </script>";
    }
?>