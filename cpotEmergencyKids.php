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
    <script src="js\scriptEmergencyAdult.js"></script>
    <link rel="stylesheet" href="css\loader.css">

    
    
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
        
        <form action="insertCpotEmergencyKids.php" method="post">
            <input type="text" name="nrpID" id="nrpID" value="<?php echo $nrpID; ?>" hidden>
            <input type="text" name="ruangan" id="ruangan" value="<?php echo $planEmergency; ?>" hidden>
            <center><h5><b><i>Critical Pain Observations Tools (CPOT)</i></b></h5></center><br><hr><br>
            <h6><center>EKSPRESI WAJAH</center> </h6>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class=col-sm-4>
               <select name="cpotValue" id="cpotValue" class="form-control" onchange="cpotChange(this);">
                   <option value="empty">Pilih Ekspresi Wajah</option>
                   <option value="0">Rileks, normal</option>
                   <option value="1">Tegang</option>
                   <option value="2">Meringis </option>
               </select> 
            </div>
            <div class="col-sm-2">
                <select name="skalaCpot" id="skalaCpot" class="form-control" >
                    <option value="" selected disabled>Skor</option>
                </select>
            </div>
            <div class="col-sm-3"></div>
        </div><br>
        <h6><center>GERAKAN TUBUH</center></h6>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-4">
               <select name="gtValue" id="gtValue" class="form-control" onchange="gtChange(this);">
                   <option value="">Pilih Gerakan Tubuh</option>
                   <option value="0">Tidak adanya gerakan atau posisi normal</option>
                   <option value="1">Perlindungan</option>
                   <option value="2">Kegelisahan atau agitasi </option>
               </select> 
            </div>
            <div class="col-sm-2">
                <select name="skalaGt" id="skalaGt" class="form-control">
                    <option value="" selected disabled>Skor</option>
                </select>
            </div>
            <div class="col-sm-3"></div>
        </div><br>

        
        <h6><center>MENGIKUTI MODE VENTILATOR (PASIEN DENGAN INTUBASI ETT)</center></h6> 
        <h6><center>ATAU VOKALISASI (ETT PASIEN UDAH TEREKSTUBASI)</center></h6>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-4">
               <select name="modeValue" id="modeValue" class="form-control" onchange="modeChange(this);">
                   <option value="">Pilih Mode</option>
                   <option value="1">Ventilator toleransi terhadap pergerakan</option>
                   <option value="2">Batuk tapi masih toleransi</option>
                   <option value="3">Melawan ventilator </option>
                   <option value="4">Berbicara dalam nada normal atau tidak ada suara</option>
                   <option value="5">Menghela nafas, merintih</option>
                   <option value="6">Menangis, terisak- isak</option>
               </select> 
            </div>
            <div class="col-sm-2">
                <select name="skalaMode" id="skalaMode" class="form-control">
                    <option value="" selected disabled>Skor</option>
                </select>
            </div>
            <div class="col-sm-3"></div>
        </div><br>

        <h6><center>KETEGANGAN OTOT</center></h6>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-4">
               <select name="ototValue" id="ototValue" class="form-control"  onchange="ototChange(this);">
                    <option value="empty">Pilih Ketegangan</option>
                    <option value="0">Rileks</option>
                    <option value="1">Tegang, kaku</option>
                    <option value="2">Sangat tegang atau kaku</option>
               </select> 
            </div>
            <div class="col-sm-2">
                <select name="skalaOtot" id="skalaOtot" class="form-control">
                    <option value="" selected disabled>Skor</option>
                </select>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <br><hr><br>

            <div class="form-group">
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-2">
                        <?php
                            // echo '<a href="emergencyAdult.php?idedit='.$nrpID.'&age='.$usia.'&days='.$hariUsia.'" class="btn btn-primary btn-block button1"><span>KELUAR</span></a>';
                            echo '<a class="btn btn-primary btn-block button1" onclick="goBack()" style="color: #ffffff !important;"><span>KELUAR</span></a>';
                        ?>
                        <script>
                            function goBack(){
                                window.history.back();
                            }
                        </script>
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-primary btn-block button1" name="login">SIMPAN</button>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
            </div>
        </form>
    </div>
    </div><br>
        
<script>

</script>
    

</body>
</html>

<?php
    }else{
        echo "<script language=\"javascript\"> alert(\"Please Login\");document.location.href='login.php'; </script>";
    }
?>