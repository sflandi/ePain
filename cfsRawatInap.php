<?php
    include_once "koneksi.php";
    date_default_timezone_set('Asia/Jakarta');
    session_start();
    if(ISSET($_SESSION['username'])){
        $nrpID = $_GET['idedit'];
        $usia = $_GET['age'];
        $hariUsia = $_GET['days'];
        $planRawatInap = $_GET['plan'];
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

    
    
</head>
<body style="font-family: 'Montserrat', sans-serif;">
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
    
    <div class="container" style=" margin-top:5%; font-family: 'Montserrat', sans-serif; background-image: url('img/bg2.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover; opacity: 1">
    <div class="animate-bottom" >
        <form action="" method="post">
            <input type="text" name="nrpID" id="nrpID" value="<?php echo $nrpID; ?>" hidden>
            <input type="text" name="ruangan" id="ruangan" value="<?php echo $planRawatInap; ?>" hidden>
            <center><h5><b><i>Comfort Scale (CFS)</i></b></h5></center><br><hr><br>

            <h6><center>ALERTNESS / KESIAGAAN</center> </h6>    
            <div class="row">
                <div class="col-sm-3"></div>
                <div class=col-sm-6>
                <select name="cpotValue" id="cpotValue" class="form-control" >
                    <option value="" selected disabled>Pilih</option>
                    <option value="1">Tertidur dalam</option>
                    <option value="2">Tertidur tidak dalam</option>
                    <option value="3">Mengantuk </option>
                    <option value="4">Sepenuhnya terjaga siaga</option>
                    <option value="5">Siaga penuh </option>
                </select> 
                </div>
                <div class="col-sm-3"></div>
            </div><br>

            <h6><center>Calmness/ketenangan</center> </h6>    
            <div class="row">
                <div class="col-sm-3"></div>
                <div class=col-sm-6>
                <select name="cpotValue" id="cpotValue" class="form-control" >
                    <option value="" selected disabled>Pilih</option>
                    <option value="1">Tenang</option>
                    <option value="2">Sedikit cemas</option>
                    <option value="3">Cemas </option>
                    <option value="4">Sangat cemas</option>
                    <option value="5">Gugup/panik </option>
                </select> 
                </div>
                <div class="col-sm-3"></div>
            </div><br>

            <h6><center>Respiratory distress/gangguan pernapasan</center> </h6>    
            <div class="row">
                <div class="col-sm-3"></div>
                <div class=col-sm-6>
                <select name="cpotValue" id="cpotValue" class="form-control" >
                    <option value="" selected disabled>Pilih</option>
                    <option value="1">Tidak ada batuk dan tidak ada pernapasan spontan</option>
                    <option value="2">Pernapasan spontan dengan sedikit respon atau tanpa respon pada ventiasi</option>
                    <option value="3">Batuk sesekali atau resisten pada ventilasi </option>
                    <option value="4">Dengan aktif bernafas melawan ventilator atau batuk regular</option>
                    <option value="5">Melawan ventilator, batuk tersedak </option>
                </select> 
                </div>
                <div class="col-sm-3"></div>
            </div><br>

            <h6><center>Crying/tangis</center> </h6>    
            <div class="row">
                <div class="col-sm-3"></div>
                <div class=col-sm-6>
                <select name="cpotValue" id="cpotValue" class="form-control" >
                    <option value="" selected disabled>Pilih</option>
                    <option value="1">Nafas hening, tidak ada tangis</option>
                    <option value="2">Tersedu sedan</option>
                    <option value="3">Merintih </option>
                    <option value="4">Tangisan</option>
                    <option value="5">Jeritan </option>
                </select> 
                </div>
                <div class="col-sm-3"></div>
            </div><br>

            <h6><center>Physical movement/Gerakan fisik</center> </h6>    
            <div class="row">
                <div class="col-sm-3"></div>
                <div class=col-sm-6>
                <select name="cpotValue" id="cpotValue" class="form-control" >
                    <option value="" selected disabled>Pilih</option>
                    <option value="1">Tidak ada Gerakan</option>
                    <option value="2">Sekali-kali, Gerakan ringan</option>
                    <option value="3">Berulang, Gerakan ringan </option>
                    <option value="4">Gerakan bertenaga</option>
                    <option value="5">Gerakan bertenaga termasuk batang tubuh dan kepala </option>
                </select> 
                </div>
                <div class="col-sm-3"></div>
            </div><br>

            <h6><center>Muscle tone/kekuatan otot</center> </h6>    
            <div class="row">
                <div class="col-sm-3"></div>
                <div class=col-sm-6>
                <select name="cpotValue" id="cpotValue" class="form-control" >
                    <option value="" selected disabled>Pilih</option>
                    <option value="1">Otot secara total rileks ada kekuatan tonus otot</option>
                    <option value="2">Kekuatan tonus otot berkurang</option>
                    <option value="3">Kekuatan tonus otot normal </option>
                    <option value="4">Kekuatan tonus otot meningkat dan refleksi dari jari tangan dan jari kaki</option>
                    <option value="5">Kekuatan otot rigid/kaku dan fleksi dari jari tangan dan jari kaki </option>
                </select> 
                </div>
                <div class="col-sm-3"></div>
            </div><br>

            <h6><center>Facial tension/ketegangan wajah</center> </h6>    
            <div class="row">
                <div class="col-sm-3"></div>
                <div class=col-sm-6>
                <select name="cpotValue" id="cpotValue" class="form-control" >
                    <option value="" selected disabled>Pilih</option>
                    <option value="1">Otot muka secara total rileks</option>
                    <option value="2">Tonus otot muka normal, nada: jelas jelas tidak ada ketegangan otot muka</option>
                    <option value="3">Ketergantungan jelas di beberapa otot muka </option>
                    <option value="4">Jelas ketegangan sepanjang otot muka</option>
                    <option value="5">Otot muka menggeliat dan menyeringai </option>
                </select> 
                </div>
                <div class="col-sm-3"></div>
            </div><br>

            <h6><center>Blood pressure/tekanan darah (MAP) baseline</center> </h6>    
            <div class="row">
                <div class="col-sm-3"></div>
                <div class=col-sm-6>
                <select name="cpotValue" id="cpotValue" class="form-control" >
                    <option value="" selected disabled>Pilih</option>
                    <option value="1">Tekanan darah dibawah baseline</option>
                    <option value="2">Tekanan darah secara konsisten dibaseline</option>
                    <option value="3">Peningkatan tekanan darah (jarang) 15% atau lebih diatas baseline (1-3 selama 2 menit observasi) </option>
                    <option value="4">Peningkatan tekanan darah berulang (sering) 15% atau lebih di atas baseline (>3 semasa 2 menit observasi)</option>
                    <option value="5">Peningkatan tekanan darah menetap sebesar 15% atau lebih </option>
                </select> 
                </div>
                <div class="col-sm-3"></div>
            </div><br>

            <h6><center>Heart rate baseline/detak jantung baseline</center> </h6>    
            <div class="row">
                <div class="col-sm-3"></div>
                <div class=col-sm-6>
                <select name="cpotValue" id="cpotValue" class="form-control" >
                    <option value="" selected disabled>Pilih</option>
                    <option value="1">Detak jantung dibawah baseline</option>
                    <option value="2">Detak jantung secara konsisten di baseline</option>
                    <option value="3">Peningkatan detak jantung (jarang) 15% atau lebih diatas baseline (1-3 selama 2 menit observasi) </option>
                    <option value="4">Peningkatan detak jantiung berulang 15% atau lebih di atas garis baseline (>3 semasa 2 menit observasi)</option>
                    <option value="5">Peningkatan detak jantung meningkat sebesar 15% atau lebih. </option>
                </select> 
                </div>
                <div class="col-sm-3"></div>
            </div><hr><br>



            <div class="form-group">
                <div class="row">
                    <div class="col-sm-5"></div>
                    <div class="col-sm-2">
                        <!-- <a href="emergencyAdult.php" class="btn btn-primary btn-block button1">KELUAR</a> -->
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
                    <div class="col-sm-5">
                        <!-- <button type="submit" class="btn btn-primary btn-block button1" name="login">SIMPAN</button> -->
                    </div>
                    <!-- <div class="col-sm-4"></div> -->
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