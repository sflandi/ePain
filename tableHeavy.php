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
    <link href="css\fontawesome-free-5.4.2-web\css\fontawesome.css" rel="stylesheet">
    <link href="css\fontawesome-free-5.4.2-web\css\brands.css" rel="stylesheet">
    <link href="css\fontawesome-free-5.4.2-web\css\solid.css" rel="stylesheet">
    <script src="css\bootstrap-4.1.3\dist\js\bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js\scriptEmergencyAdult.js"></script>
    <link rel="stylesheet" href="css\loader.css">

    
    
</head>
<body style="font-family: 'Montserrat', sans-serif; background-image: url('img/bg2.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;" >
<!-- <body class="d-flex flex-column h-100"> -->
    
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

    <div class="container" style="overflow:hidden;">
        <div class="row">
            <div class="col-sm-2">
                <?php
                    include "koneksi.php";
                    $nrpID = $_GET['idedit'];
                    $query = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM data_pasien WHERE nrpID = '$nrpID' "));
                    $namaPasien=strtoupper($query['nama']);
                ?>
                <h6>Nama Pasien : <?php echo $namaPasien ?></h6>
            </div>
            <div class="col-sm-8"></div>
            <div class="col-sm-2">
                <h6  id="hari"></h6>
            </div>
        </div><hr>
        <div class="animate-bottom" >
        <center><h5>SKALA NYERI BERAT</h5></center>
            <div class="row" style="margin-top:5%;">
            <form action="insertTableHeavy.php" method="post">
                <input type="text" name="skalaNyeri" id="skalaNyeri" value="Berat" hidden>
                <input type="text" name="nrpID" id="nrpID" value="<?php echo $nrpID; ?>" hidden>
                <input type="text" name="ruangan" id="ruangan" value="<?php echo $planEmergency; ?>" hidden>
                <table class="table table-hover order-table">
                    <thead>
                        <tr class="table-active">
                            <th>Intervensi keperawatan</th>
                            <th>Implementasi keperawatan</th>
                            <th>Evaluasi keperawatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Lakukan assessment nyeri yang komprehensif</td>
                            <td><textarea name="implementasiHeavy0" id="implementasiHeavy0" cols="30" rows="7"></textarea> </td>
                            <td><textarea name="evaluasiHeavy0" id="evaluasiHeavy0" cols="30" rows="7"></textarea> </td>
                        </tr>
                        <tr>
                            <td>Observasi tanda-tanda vital sebelum dan sesudah pemberian obat narkotik</td>
                            <td><textarea name="implementasiHeavy1" id="implementasiHeavy1" cols="30" rows="7"></textarea> </td>
                            <td><textarea name="evaluasiHeavy1" id="evaluasiHeavy1" cols="30" rows="7"></textarea> </td>
                        </tr>
                        <tr>
                            <td>Hubungi pain nurse pada pasien yang menggunakan PCA (Patient Control Analgesis), dan atau obat narkotika</td>
                            <td><textarea name="implementasiHeavy2" id="implementasiHeavy2" cols="30" rows="7"></textarea> </td>
                            <td><textarea name="evaluasiHeavy2" id="evaluasiHeavy2" cols="30" rows="7"></textarea> </td>
                        </tr>
                        <tr>
                            <td>Lakukan evaluasi nyeri setiap 1 jam</td>
                            <td><textarea name="implementasiHeavy3" id="implementasiHeavy3" cols="30" rows="7"></textarea> </td>
                            <td><textarea name="evaluasiHeavy3" id="evaluasiHeavy3" cols="30" rows="7"></textarea> </td>
                        </tr>
                        <tr>
                            <td>Libatkan support keluarga dalam manajemen nyeri</td>
                            <td><textarea name="implementasiHeavy4" id="implementasiHeavy4" cols="30" rows="7"></textarea> </td>
                            <td><textarea name="evaluasiHeavy4" id="evaluasiHeavy4" cols="30" rows="7"></textarea> </td>
                        </tr>
                        <tr>
                            <td><b>KOLABORASI</b> </td>
                        </tr>
                        <tr>
                            <td>Berikan analgetik sesuai order dokter</td>
                            <td><textarea name="implementasiHeavy8" id="implementasiHeavy8" cols="30" rows="7"></textarea> </td>
                            <td><textarea name="evaluasiHeavy8" id="evaluasiHeavy8" cols="30" rows="7"></textarea> </td>
                        </tr>
                        <tr>
                            <td>Konsul DPJP untuk tindakan invasive/pembedahan</td>
                            <td><textarea name="implementasiHeavy9" id="implementasiHeavy9" cols="30" rows="7"></textarea> </td>
                            <td><textarea name="evaluasiHeavy9" id="evaluasiHeavy9" cols="30" rows="7"></textarea> </td>
                        </tr>
                    </tbody>
                </table><div class="form-group">
                <div class="row">
                    <div class="col-sm-5"></div>
                    <!-- <div class="col-sm-2">
                        <?php
                            //echo '<a href="emergencyKids.php?idedit='.$nrpID.'&age='.$usia.'&days='.$hariUsia.'" class="btn btn-primary btn-block button1"><span>KELUAR</span></a>';
                        ?>
                    </div> -->
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-primary btn-block button1" name="login">SIMPAN</button>
                    </div>
                    <div class="col-sm-5"></div>
                </div>
            </form> 
            </div>
            </div><hr><br>

            <div class="row">
                <div class="col-sm-2">
                    <?php
                        // echo '<a href="emergencyAdult.php?idedit='.$nrpID.'&age='.$usia.'&days='.$hariUsia.'&plan='.$planEmergency.'" class="btn btn-primary btn-block button1"><i class="fas fa-chevron-left"></i><span>KEMBALI</span></a>';
                        echo '<a class="btn btn-primary btn-block button1" onclick="goBack()" style="color: #ffffff !important;"><span>KELUAR</span></a>';
                    ?>
                    <script>
                        function goBack(){
                            window.history.back();
                        }
                    </script>
                </div>
                <div class="col-sm-10"></div>
            </div><br><br><br>
            
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