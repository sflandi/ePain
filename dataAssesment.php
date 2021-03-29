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
<body style="font-family: 'Montserrat', sans-serif; background-image: url('img/bg2.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover; opacity: 1" " >
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
                <!-- <h6>Nama Pasien : <?php //echo $namaPasien ?></h6> -->
            </div>
            <div class="col-sm-8"></div>
            <div class="col-sm-2">
                <h6  id="hari"></h6>
            </div>
        </div>
        <div class="animate-bottom" >
            <h5><b>DATA PASIEN</b> </h5>
            <h6>
            <form action="insertDataAssesment.php" method="post">
                <input type="text" name="nrpID" id="nrpID" value="<?php echo $nrpID; ?>" hidden>
                <input type="text" name="nrpDetail" id="nrpDetail" value="<?php echo $nrpDetail; ?>" hidden >
                <input type="text" name="ruangan" id="ruangan" value="<?php echo $planEmergency; ?>" hidden>
                <?php
                $sql = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM data_pasien where nrpID = '$nrpID'"));
                // $tglBerobat = $sql['tgl_berobat'];
                $ktp = $sql['ktp'];
                $usia = $sql['usia'];
                $hariUsia = $sql['hariUsia'];
                $gender = $sql['jenis_kelamin'];
                $alamat = $sql['alamat'];
                $tglLahir = $sql['tgl_lahir'];
                ?>

            <div class="form-group row"  style="margin-top:5%;">
                <label for="" class="col-sm-4 col-form-label"><b>Nama Pasien</b></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="namaPasien" id="namaPasien" value="<?php echo $namaPasien; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label"><b>NRP ID</b></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="nrpID2" id="nrpID2" value="<?php echo $nrpID; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label"><b>No. KTP</b></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="noKtp" id="noKtp" value="<?php echo $ktp; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label"><b>Alamat</b></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $alamat; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label"><b>Jenis Kelamin</b></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="gender" id="gender" value="<?php echo $gender; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label"><b>Tgl. Lahir</b></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="tglLahir" id="tglLahir" value="<?php echo $tglLahir; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label"><b>Usia</b></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="usia" id="usia" value="<?php if ($usia == '0'){echo $hariUsia ." Hari"; }else{ echo $usia ." Tahun"; } ?>" readonly>
                </div>
            </div>
            <div class="form-group row" >
                <?php
                    $sql2 = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM data_plan where nrpID = '$nrpID' order by waktu desc limit 1"));
                    $ruangan = $sql2['ruangan'];
                    $nrs = $sql2['nrs'];
                    $flacc = $sql2['flacc'];
                    $fps = $sql2['fps'];
                    $nips = $sql2['nips'];
                    $cpot = $sql2['cpot'];
                    $waktu = $sql2['waktu'];
                ?>
                <label for="" class="col-sm-4 col-form-label"><b>Skor Pain</b></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="skor" id="skor" value="<?php 
                        if (isset($nrs)) {
                            // echo $nrs;
                            if ($nrs >= '0' && $nrs <= '3' ) {
                                echo $nrs ." (Ringan)";
                            } elseif ($nrs >= '4' && $nrs <= '7' ) {
                                echo $nrs ." (Sedang)";
                            }else {
                                echo $nrs ." (Berat)";
                            }
                        } elseif (isset($flacc)) {
                            // echo $flacc;
                            if ($flacc >= '0' && $flacc <= '3' ) {
                                echo $flacc ." (Ringan)";
                            } elseif ($flacc >= '4' && $flacc <= '7' ) {
                                echo $flacc ." (Sedang)";
                            }else {
                                echo $flacc ." (Berat)";
                            }
                        } elseif (isset($fps)){
                            // echo $fps;
                            if ($fps >= '0' && $fps <= '3' ) {
                                echo $fps ." (Ringan)";
                            } elseif ($fps >= '4' && $fps <= '7' ) {
                                echo $fps ." (Sedang)";
                            }else {
                                echo $fps ." (Berat)";
                            }
                        } elseif (isset($nips)) {
                            // echo $nips;
                            if ($nips >= '0' && $nips <= '1' ) {
                                echo $nips ." (Ringan)";
                            } elseif ($nips >= '2' && $nips <= '4' ) {
                                echo $nips ." (Sedang)";
                            }else {
                                echo $nips ." (Berat)";
                            }
                        } elseif (isset($cpot)) {
                            // echo $nips;
                            if ($cpot >= '0' && $cpot <= '2' ) {
                                echo $cpot ." (Ringan)";
                            } elseif ($cpot >= '3' && $cpot <= '5' ) {
                                echo $cpot ." (Sedang)";
                            }else {
                                echo $cpot ." (Berat)";
                            }
                        } else {
                            echo "-";
                        }
                        
                    ?>" readonly>
                </div>
            </div>
            <div class="form-group row" >
                <label for="" class="col-sm-4 col-form-label"><b>Ruangan</b></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="ruangan" id="ruangan" value="<?php 
                        if ($ruangan == 'emergency') {
                            echo "Emergency";
                        } elseif ($ruangan == 'rawatJalan') {
                            echo "Rawat Jalan";
                        } elseif ($ruangan == 'rawatInap') {
                            echo "Rawat Inap";
                        } else {
                            echo "-";
                        }
                    ?>" readonly>
                </div>
            </div>
            <div class="form-group row" >
                <label for="" class="col-sm-4 col-form-label"><b>Tanggal Berobat</b></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="tglBerobat" id="tglBerobat" value="<?php echo $waktu; ?>" readonly>
                </div>
            </div>
            <div class="form-group row" >
                <?php
                    $sql1 = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM data_pertanyaan where nrpID = '$nrpID' order by tanggal desc limit 1"));
                    $gQ = $sql1['question3']; //pake if untuk akut atau kronis 
                ?>
                <label for="" class="col-sm-4 col-form-label"><b>Tingkat Penyakit</b></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="class" id="class" value="<?php 
                    // echo $tglBerobat;
                        if ($gQ == 'Kurang Dari 3 Bulan (Akut)') {
                            echo "Akut";
                        } else {
                            echo "Kronis";
                        }
                    ?>" readonly>
                </div>
            </div>
            <div class="form-group row" >
                <?php
                    $sql4 = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM data_intervensi where nrpID = '$nrpID' order by waktu desc limit 1 "));
                    $namaPerawat = $sql4['perawat'];
                ?>
                <label for="" class="col-sm-4 col-form-label"><b>Nama Perawat</b></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="perawat" id="perawat" value="<?php echo $namaPerawat ?>" readonly>
                </div>
            </div>
            
                
            
            </h6>
            <hr><br>
            <div class="row">
                <div class="col-sm-2">
                <?php
                    // echo '<a href="emergencyAdult.php?idedit='.$nrpID.'&age='.$usia.'&days='.$hariUsia.'&plan='.$planEmergency.'" class="btn btn-primary btn-block button1"><i class="fas fa-chevron-left"></i><span>KEMBALI</span></a>';
                    
                    echo '<a href="formEmanagement.php" class="btn btn-primary btn-block button1"><span>KELUAR</span></a>'
                ?>
                </div>
                <div class="col-sm-8"></div>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary btn-block button1" name="submit">LANJUTKAN</button>
                <?php
                    // echo '<a href="sa.php?idedit='.$nrpID.'&age='.$usia.'&days='.$hariUsia.'" class="btn btn-primary btn-block button1"><span>LANJUTKAN</span><i class="fas fa-chevron-right"></i></a>';
                ?>
                </div>
                </form>
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