<?php
    include_once "koneksi.php";
    date_default_timezone_set('Asia/Jakarta');
    session_start();
    if(ISSET($_SESSION['username'])){
        $nrpID = $_GET['idedit'];
        $usia = $_GET['age'];
        $hariUsia = $_GET['days'];
        $planEmergency = $_GET['plan'];
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
    <script src="css\bootstrap-4.1.3\dist\js\bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- <script src="js\scriptEmergencyAdult.js"></script> -->
    <link rel="stylesheet" href="css\loader.css">
    <link rel="stylesheet" href="css/survey.css">

    
    
</head>
<body style="font-family: 'Montserrat', sans-serif; background-image: url('img/bg2.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
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
    
    <div class="container" style="margin-top:5%;">
    <div class="animate-bottom" >
        <form action="insertFps.php" method="post">
            <input type="text" name="nrpID" id="nrpID" value="<?php echo $nrpID; ?>" hidden>
            <input type="text" name="ruangan" id="ruangan" value="<?php echo $planEmergency; ?>" hidden>
            <center><h5><b><i>  FACES PAIN SCALE (FPS)</i></b></h5></center><br><hr>
            <h5><center>Seberapa Nyerikah Anda?</center> </h5><br>
            <fieldset class="form-group">
                <div class="cc-selector">
                    <input id="levelsatu" type="radio" name="credit-card" value="1" />
                        <label class="drinkcard-cc levelsatu" for="levelsatu"></label>

                    <input id="level2" type="radio" name="credit-card" value="2" />
                        <label class="drinkcard-cc level2"for="level2"></label>

                    <input id="level3" type="radio" name="credit-card" value="3" />
                        <label class="drinkcard-cc level3" for="level3"></label>

                    <input id="level4" type="radio" name="credit-card" value="4" />
                        <label class="drinkcard-cc level4"for="level4"></label>

                    <input id="level5" type="radio" name="credit-card" value="5" />
                        <label class="drinkcard-cc level5" for="level5"></label>

                    <input id="level6" type="radio" name="credit-card" value="6" />
                        <label class="drinkcard-cc level6"for="level6"></label>

                    <input id="level7" type="radio" name="credit-card" value="7" />
                        <label class="drinkcard-cc level7" for="level7"></label>

                    <input id="level8" type="radio" name="credit-card" value="8" />
                        <label class="drinkcard-cc level8"for="level8"></label>

                    <input id="level9" type="radio" name="credit-card" value="9" />
                        <label class="drinkcard-cc level9" for="level9"></label>

                    <input id="level10" type="radio" name="credit-card" value="10" />
                        <label class="drinkcard-cc level10"for="level10"></label>
                </div>
            </fieldset>
            <br><hr><br>

            <div class="form-group">
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-2">
                        <!-- <a href="emergencyAdult.php" class="btn btn-primary btn-block button1">KELUAR</a> -->
                        <?php
                            echo '<a href="emergencyKids.php?idedit='.$nrpID.'&age='.$usia.'&days='.$hariUsia.'&plan='.$planEmergency.'" class="btn btn-primary btn-block button1"><span>KELUAR</span></a>';
                        ?>
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-primary btn-block button1" name="login">SIMPAN</button>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
            </div>
        </form>
    </div>
    </div>    

</body>
</html>

<?php
    }else{
        echo "<script language=\"javascript\"> alert(\"Please Login\");document.location.href='login.php'; </script>";
    }
?>