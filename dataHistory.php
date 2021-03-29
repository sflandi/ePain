<?php
    include_once "koneksi.php";
    date_default_timezone_set('Asia/Jakarta');
    session_start();
    if(ISSET($_SESSION['username'])){
        $nrpID = $_GET['idedit'];
        $detailnya = $_GET['detail'];
        // $usia = $_GET['age'];
        // $hariUsia = $_GET['days'];
        // $planEmergency = $_GET['plan'];
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
    <!-- <link rel="stylesheet" href="css\bootstrap-4.1.3\dist\css\bootstrap.min.css">
    <link href="css\fontawesome-free-5.4.2-web\css\fontawesome.css" rel="stylesheet">
    <link href="css\fontawesome-free-5.4.2-web\css\brands.css" rel="stylesheet">
    <link href="css\fontawesome-free-5.4.2-web\css\solid.css" rel="stylesheet">
    <script src="css\bootstrap-4.1.3\dist\js\bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js\scriptEmergencyAdult.js"></script>
    <link rel="stylesheet" href="css\loader.css">

    
    
</head>
<body style="font-family: 'Montserrat', sans-serif;background-image: url('img/bg2.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover; opacity: 1" >
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
                    $query = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM data_pasien WHERE nrpID = '$nrpID'  "));
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
            <h3><b>DATA PASIEN</b> </h3>
            <h6>
            <form action="insertDataAssesment.php" method="post">
                <?php
                $sql = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM data_history where nrpID = '$nrpID' and nrp_Details = '$detailnya' "));
                $nrp = $sql['nrpID'];
                $nrp_Details = $sql['nrp_Details'];
                $noKtp = $sql['noKtp'];
                $alamat = $sql['alamat'];
                $gender = $sql['gender'];
                $tglLahir = $sql['tglLahir'];
                $usia = $sql['usia'];
                $skorPain = $sql['skorPain'];
                $ruangan = $sql['ruangan'];
                $tglBerobat = $sql['tglBerobat'];
                $tingkatPenyakit = $sql['tingkatPenyakit'];
                $namaPasien = $sql['namaPasien'];
                $perawat = $sql['perawat'];
                ?>

            <div class="form-group row"  style="margin-top:5%;">
                <label for="" class="col-sm-4 col-form-label"><b>Nama Pasien</b></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="namaPasien" id="namaPasien" value="<?php echo $namaPasien  ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label"><b>NRP ID</b></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="nrpID2" id="nrpID2" value="<?php echo $nrp ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label"><b>No. KTP</b></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="noKtp" id="noKtp" value="<?php echo $noKtp ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label"><b>Alamat</b></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $alamat ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label"><b>Jenis Kelamin</b></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="gender" id="gender" value="<?php echo $gender ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label"><b>Tgl. Lahir</b></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="tglLahir" id="tglLahir" value="<?php echo $tglLahir ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label"><b>Usia</b></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="usia" id="usia" value="<?php echo $usia ?>" readonly>
                </div>
            </div>
            <div class="form-group row" >
                <label for="" class="col-sm-4 col-form-label"><b>Skor Pain</b></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="skor" id="skor" value="<?php echo $skorPain  ?>" readonly>
                </div>
            </div>
            <div class="form-group row" >
                <label for="" class="col-sm-4 col-form-label"><b>Ruangan</b></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="ruangan" id="ruangan" value="<?php echo $ruangan  ?>" readonly>
                </div>
            </div>
            <div class="form-group row" >
                <label for="" class="col-sm-4 col-form-label"><b>Tanggal Berobat</b></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="tglBerobat" id="tglBerobat" value="<?php  echo $tglBerobat ?>" readonly>
                </div>
            </div>
            <div class="form-group row" >
                <label for="" class="col-sm-4 col-form-label"><b>Tingkat Penyakit</b></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="class" id="class" value="<?php  echo $tingkatPenyakit ?>" readonly>
                </div>
            </div>
            <div class="form-group row" >
                <label for="" class="col-sm-4 col-form-label"><b>Nama Perawat</b></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="class" id="class" value="<?php echo $perawat ?>" readonly>
                </div>
            </div><hr>
            <!-- TABEL GENERAL QUESTION -->
            <div class="table-responsive"><br>
                <h4><b>GENERAL QUESTION</b>  </h4>
                <table class="table table-hover order-table">
                    <thead>
                        <tr class="table-active">
                            <th scope="col" class="text-center">Tanggal & Waktu</th>
                            <th scope="col" class="text-center">Nyeri Berpindah</th>
                            <th scope="col" class="text-center">Lokasi Nyeri</th>
                            <th scope="col" class="text-center">Lamanya Nyeri</th>
                            <th scope="col" class="text-center">Rasa Nyeri</th>
                            <th scope="col" class="text-center">Seringnya Nyeri</th>
                            <th scope="col" class="text-center">Membuat Nyeri Berkurang</th>
                            <th scope="col" class="text-center">Perawat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "select * from data_pertanyaan where nrpID = '$nrpID' order by tanggal desc "; 
                            $sql1 = mysqli_query($koneksi,$sql);
                            $cek = mysqli_num_rows($sql1);
                            if($cek == 0){
                                echo "TIDAK ADA DATA";
                            }else{
                                while($row = mysqli_fetch_assoc($sql1)) {   
                                    $question5 = $row['question5']; 
                                    if ($question5 == "1 2 jam") {
                                        $question5 = "1-2 jam";
                                        $question51 = $question5;
                                    } elseif ($question5 == "3 4 jam") {
                                        $question5 = "3-4 jam";
                                        $question51 = $question5;
                                    } else {
                                        $question51 = $question5;
                                    }
                                    echo'<tr>';
                                        echo'<td scope="col" data-label="Tanggal & Waktu" class="text-center">'.$row['tanggal'].'</td>';
                                        echo'<td scope="col" data-label="Pengkajian 1" class="text-center">'.$row['question1'].'</td>';
                                        echo'<td scope="col" data-label="Pengkajian 2" class="text-center">'.$row['question2'].'</td>';
                                        echo'<td scope="col" data-label="Pengkajian 3" class="text-center">'.$row['question3'].'</td>';
                                        echo'<td scope="col" data-label="Pengkajian 4" class="text-center">'.$row['question4'].'</td>';
                                        echo'<td scope="col" data-label="Pengkajian 5" class="text-center">'.$question51.'</td>';
                                        echo'<td scope="col" data-label="Pengkajian 5" class="text-center">'.$row['question6'].'</td>';
                                        echo'<td scope="col" data-label="Perawat" class="text-center">'.$row['perawat'].'</td>';
                                        // echo'<td data-label="RIWAYAT PENYAKIT"><a href="" data-toggle="modal" data-target="#myModal" >Details</a></td>';
                                        // echo'<td data-label="RIWAYAT PENYAKIT" style="float:right"><a href="dataHistory.php?idedit='.$nrpID.'&detail='.$row['nrp_Details'].'"  >Details</a></td>';
                                    echo'</tr>';
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div><br><br>
            
            <div class="row">
                <div class="col-sm-5"></div>
                <div class="col-sm-2">
                <!-- <a href="" data-toggle="modal" data-target="#contact-modalGQ" class="btn btn-primary btn-block button1">REASSESSMENT</a> -->
                </div>
                <!-- <div class="col-sm-2">
                
                </div> -->
                <div class="col-sm-5"></div>
            </div>
            <hr>
            <!-- PENGKAJIAN PASIEN -->
            <div class="table-responsive"><br>
                <h4><b>PENGKAJIAN PASIEN</b>  </h4>
                <table class="table table-hover order-table">
                    <thead>
                        <tr class="table-active">
                            <th scope="col" class="text-center">Tanggal & Waktu</th>
                            <th scope="col" class="text-center">Pengkajian 1</th>
                            <th scope="col" class="text-center">Pengkajian 2</th>
                            <th scope="col" class="text-center">Pengkajian 3</th>
                            <th scope="col" class="text-center">Pengkajian 4</th>
                            <th scope="col" class="text-center">Pengkajian 5</th>
                            <th scope="col" class="text-center">Perawat</th>
                            <!-- <th scope="col" style="float:right">RIWAYAT PENYAKIT</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "select * from data_pengujian where nrpID = '$nrpID' and nrp_Details = '$detailnya' order by waktu desc "; 
                            $sql1 = mysqli_query($koneksi,$sql);                            
                            $cek = mysqli_num_rows($sql1);
                            if($cek == 0){
                                echo "TIDAK ADA DATA";
                            }else{
                                while($row = mysqli_fetch_assoc($sql1)) {   
                                    $pengkajian1 = $row['pengkajian1']; 
                                    if ($pengkajian1 == "NULL") {
                                        $pengkajian1 = "";
                                        $pengkajian11 = $pengkajian1;
                                    } else {
                                        $pengkajian11 = $pengkajian1;
                                    }
                                    echo'<tr>';
                                        echo'<td scope="col" data-label="Tanggal & Waktu" class="text-center">'.$row['waktu'].'</td>';
                                        echo'<td scope="col" data-label="Pengkajian 1" class="text-center">'.$pengkajian11.'</td>';
                                        echo'<td scope="col" data-label="Pengkajian 2" class="text-center">'.$row['pengkajian2'].'</td>';
                                        echo'<td scope="col" data-label="Pengkajian 3" class="text-center">'.$row['pengkajian3'].'</td>';
                                        echo'<td scope="col" data-label="Pengkajian 4" class="text-center">'.$row['pengkajian4'].'</td>';
                                        echo'<td scope="col" data-label="Pengkajian 5" class="text-center">'.$row['pengkajian5'].'</td>';
                                        echo'<td scope="col" data-label="Perawat" class="text-center">'.$row['perawat'].'</td>';
                                    echo'</tr>';
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div><br><hr>
            
            <div class="row">
                <div class="col-sm-5"></div>
                <div class="col-sm-2">
                <a href="" data-toggle="modal" data-target="#contact-modal" class="btn btn-primary btn-block button1">ISI PENGKAJIAN</a>
                </div>
                <!-- <div class="col-sm-2">
                
                </div> -->
                <div class="col-sm-5"></div>
            </div>

            <!-- <a href="" data-toggle="modal" data-target="#contact-modal" >PENGKAJIAN</a> -->
                
            
            </h6>
            <hr><br>
            <div class="row">
                <div class="col-sm-2">
                <?php
                    // echo '<a href="emergencyAdult.php?idedit='.$nrpID.'&age='.$usia.'&days='.$hariUsia.'&plan='.$planEmergency.'" class="btn btn-primary btn-block button1"><i class="fas fa-chevron-left"></i><span>KEMBALI</span></a>';
                    
                    echo '<a href="formDetailsPatient.php?idedit='.$nrpID.'" class="btn btn-primary btn-block button1"><span>KELUAR</span></a>'
                    // formDetailsPatient.php?idedit=JK-EPAIN-19-12-00011
                ?>
                </div>
                <div class="col-sm-8"></div>
                <div class="col-sm-2">
                    <!-- <button type="submit" class="btn btn-primary btn-block button1" name="login">SIMPAN</button> -->
                    <!-- <a href="" data-toggle="modal" data-target="#contact-modal-intervensi" class="btn btn-primary btn-block button1">INTERVENSI</a> -->
                <?php
                    // echo '<a href="sa.php?idedit='.$nrpID.'&age='.$usia.'&days='.$hariUsia.'" class="btn btn-primary btn-block button1"><span>LANJUTKAN</span><i class="fas fa-chevron-right"></i></a>';
                ?>
                </div>
                </form>
            </div><br><br><br>
        </div>
        
        


        <!-- Modal PENGKAJIAN-->
            <div class="modal fade" id="contact-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content ">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle"><b>PENGKAJIAN ULANG</b> </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="contactForm" name="contact" role="form">
                            <input type="text" name="nrpID" value="<?php echo $nrpID ?>" hidden>
                            <input type="text" name="noDetail" value="<?php echo $detailnya ?>" hidden>
                            <div class="modal-body">
                            <h6>Setelah pemberian analgetik 
                                <h6><i> Jenis analgenik reassement nyeri :</i> </h6><br>
                                <div class="row">
                                    <div class="form-check">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-2">
                                            <label class="form-check-label"> 
                                                <input type="checkbox" name="checkSatu[]" class="form-check-input" value="Epidural">Epidural
                                            </label>
                                            <label class="form-check-label"> 
                                                <input type="checkbox" name="checkSatu[]" class="form-check-input" value="IV">IV
                                            </label>
                                            <label class="form-check-label"> 
                                                <input type="checkbox" name="checkSatu[]" class="form-check-input" value="Oral">Oral 
                                            </label>
                                            <label class="form-check-label"> 
                                                <input type="checkbox" name="checkSatu[]" class="form-check-input" value="Suppositoria">Suppositoria 
                                            </label>
                                            <label class="form-check-label"> 
                                                <input type="checkbox" name="checkSatu[]" class="form-check-input" value="Transdermal">Transdermal 
                                            </label>
                                            <label class="form-check-label"> 
                                                <input type="checkbox" name="checkSatu[]" class="form-check-input" value="Drip">Drip 
                                            </label>
                                            <label class="form-check-label"> 
                                                <input type="checkbox" name="checkSatu[]" class="form-check-input" value="IM">IM
                                            </label>
                                        </div>
                                        <div class="col-sm-8"></div>
                                    </div>
                                </div><hr>

                                
                                <div class="row">
                                    <div class="form-check" style="margin-left:15px">
                                        <!-- <div class="col-sm-3"></div> -->
                                        <!-- <div class="col-sm-9"> -->
                                            <label class="form-check-label"> 
                                                <input type="checkbox" name="checkDua" class="form-check-input" value="Perubahan kondisi">Perubahan kondisi  
                                            </label>
                                        <!-- </div> -->
                                        <!-- <div class="col-sm-7"></div> -->
                                    </div>
                                </div><hr>
                                <div class="row">
                                    <div class="form-check" style="margin-left:15px">
                                            <label class="form-check-label"> 
                                                <input type="checkbox" name="checkTiga" class="form-check-input" value="Pasien pindah ke ruangan lain">Pasien pindah ke ruangan lain  
                                            </label>
                                    </div>
                                </div><hr>
                                <div class="row">
                                    <div class="form-check" style="margin-left:15px">
                                            <label class="form-check-label"> 
                                                <input type="checkbox" name="checkEmpat" class="form-check-input" value="Maksimal setiap 8 jam">Maksimal setiap 8 jam  
                                            </label>
                                    </div>
                                </div><hr>
                                <div class="row">
                                    <div class="form-check" style="margin-left:15px">
                                            <label class="form-check-label"> 
                                                <input type="checkbox" name="checkLima" class="form-check-input" value="Pasien pulang">Pasien pulang  
                                            </label>
                                    </div>
                                </div><hr>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">KELUAR</button>
                                <input type="submit" class="btn btn-primary" id="submit" value="SIMPAN">
                            </div>
                            </h6>
                        </form>
                    </div>
                </div>
            </div>

        <!-- Modal GENERAL QUESTION-->
        <div class="modal fade" id="contact-modalGQ" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content ">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle"><b>GENERAL QUESTION</b> </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="contactForm2" name="contact2" role="form">
                            <input type="text" name="nrpID" value="<?php echo $nrpID ?>" hidden>
                            <input type="text" name="noDetail" value="<?php echo $detailnya ?>" hidden>
                            <div class="modal-body">

                                <div class="form-group row">
                                    <label for="" class="col-sm-7 col-form-label"><b>1. Apakah nyeri berpindah dari tempat satu ke tempat lain?</b><span class="star"> *</span></label>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="question1" id="question1" required>
                                            <option value="" selected disabled>Pilih</option>
                                            <option value="Ya">Ya</option>
                                            <option value="Tidak">Tidak</option>
                                            <option value="Sulit Dinilai">Sulit Dinilai</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-7" >
                                    <label for="" class="col-form-label"><b>2. Lokasi nyeri?</b><span class="star"> *</span>
                                        
                                    </label>
                                    <div >
                                            <img src="img/gq.jpg" alt="" style="width=100% !important; height=100% !important; max-width: 400px !important;">
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="col-sm-5">
                                        <textarea name="question2" id="question2" cols="30" rows="11" required></textarea>
                                        </select> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-7 col-form-label"><b>3. Berapa lama nyeri ini?</b><span class="star"> *</span></label>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="question3" id="question3" required>
                                            <option value="" selected disabled>Pilih</option>
                                            <option value="Kurang Dari 3 Bulan (Akut)">Kurang dari 3 bulan (Akut)</option>
                                            <option value="Lebih dari 3 bulan (kronis)">Lebih dari 3 bulan (kronis)</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="" class="col-sm-7 col-form-label"><b>4. Rasa nyeri?</b><span class="star"> *</span></label>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="question4" id="question4" required>
                                            <option value="" selected disabled>Pilih</option>
                                            <option value="Tajam">Tajam</option>
                                            <option value="Seperti ditarik">Seperti ditarik</option>
                                            <option value="Seperti berdenyut">Seperti berdenyut</option>
                                            <option value="Seperti ditikam">Seperti ditikam</option>
                                            <option value="Seperti keram">Seperti keram</option>
                                            <option value="Nyeri tumpul">Nyeri tumpul</option>
                                            <option value="Seperti ditusuk">Seperti ditusuk</option>
                                            <option value="Seperti dipukul">Seperti dipukul</option>
                                            <option value="Seperti di bakar">Seperti di bakar</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-7 col-form-label"><b>5. Seberapa sering anda mengalami nyeri ini?</b><span class="star"> *</span></label>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="question5" id="question5" required>
                                            <option value="" selected disabled>Pilih</option>
                                            <option value="1 2 jam">1 – 2 jam</option>
                                            <option value="3 4 jam">3 – 4 jam</option>
                                            <option value="Kurang dari 30 menit">Kurang dari 30 menit</option>
                                            <option value="Lebih dari 30 menit">Lebih dari 30 menit</option>
                                            <option value="Sulit dinilai">Sulit dinilai</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-7 col-form-label"><b>6. Apa yang membuat nyeri berkurang?</b><span class="star"> *</span></label>
                                    <div class="col-sm-5">
                                        <select class="form-control" name="question6" id="question6" required>
                                            <option value="" selected disabled>Pilih</option>
                                            <option value="Kompres air hangat">Kompres air hangat</option>
                                            <option value="Aktifitas dikurangi (istirahat)">Aktifitas dikurangi ( istirahat )</option>
                                            <option value="Minum obat">Minum obat</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">KELUAR</button>
                                <input type="submit" class="btn btn-primary" id="submit" value="SIMPAN">
                            </div>
                            </h6>
                        </form>
                    </div>
                </div>
            </div>

    
    
        <!-- Modal GENERAL QUESTION-->
        <div class="modal fade" id="contact-modal-intervensi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                    <div class="modal-content ">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle"><b>DATA INTERVENSI PASIEN</b> </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                            <div class="modal-body">
                                <div class="table-responsive"><br>
                                    <?php
                                        $intervensi = "select * from data_intervensi where nrpID = '$nrpID'"; 
                                        $inter = mysqli_fetch_array(mysqli_query($koneksi,$intervensi));
                                        $skala = strtoupper($inter['skalaNyeri']);
                                    ?>
                                    <h5>SKALA NYERI  <?= $skala ?></h5>
                                    <table class="table table-hover order-table">
                                        <thead>
                                            <tr class="table-active">
                                                <th scope="col" class="text-center">Tanggal & Waktu</th>
                                                <th scope="col" class="text-center">Nyeri Berpindah</th>
                                                <th scope="col" class="text-center">Lokasi Nyeri</th>
                                                <th scope="col" class="text-center">Lamanya Nyeri</th>
                                                <th scope="col" class="text-center">Rasa Nyeri</th>
                                                <th scope="col" class="text-center">Seringnya Nyeri</th>
                                                <th scope="col" class="text-center">Membuat Nyeri Berkurang</th>
                                                <th scope="col" class="text-center">Perawat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $sql = "select * from data_pertanyaan where nrpID = '$nrpID' order by tanggal desc "; 
                                                $sql1 = mysqli_query($koneksi,$sql);
                                                $cek = mysqli_num_rows($sql1);
                                                if($cek == 0){
                                                    echo "TIDAK ADA DATA";
                                                }else{
                                                    while($row = mysqli_fetch_assoc($sql1)) {   
                                                        $question5 = $row['question5']; 
                                                        if ($question5 == "1 2 jam") {
                                                            $question5 = "1-2 jam";
                                                            $question51 = $question5;
                                                        } elseif ($question5 == "3 4 jam") {
                                                            $question5 = "3-4 jam";
                                                            $question51 = $question5;
                                                        } else {
                                                            $question51 = $question5;
                                                        }
                                                        echo'<tr>';
                                                            echo'<td scope="col" data-label="Tanggal & Waktu" class="text-center">'.$row['tanggal'].'</td>';
                                                            echo'<td scope="col" data-label="Pengkajian 1" class="text-center">'.$row['question1'].'</td>';
                                                            echo'<td scope="col" data-label="Pengkajian 2" class="text-center">'.$row['question2'].'</td>';
                                                            echo'<td scope="col" data-label="Pengkajian 3" class="text-center">'.$row['question3'].'</td>';
                                                            echo'<td scope="col" data-label="Pengkajian 4" class="text-center">'.$row['question4'].'</td>';
                                                            echo'<td scope="col" data-label="Pengkajian 5" class="text-center">'.$question51.'</td>';
                                                            echo'<td scope="col" data-label="Pengkajian 5" class="text-center">'.$row['question6'].'</td>';
                                                            echo'<td scope="col" data-label="Perawat" class="text-center">'.$row['perawat'].'</td>';
                                                        echo'</tr>';
                                                    }
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div><br><hr>

                            </div>
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">KELUAR</button> -->
                                <!-- <input type="submit" class="btn btn-primary" id="submit" value="SIMPAN"> -->
                            </div>
                            </h6>
                    </div>
                </div>
            </div>
    
    
    </div>
    
<script>
$(document).ready(function(){	
	$("#contactForm").submit(function(event){
		submitForm();
		return false;
	});
});
</script>
<script>
function submitForm(){
	 $.ajax({
		type: "POST",
		url: "saveModalPengujian.php",
		cache:false,
		data: $('form#contactForm').serialize(),
		success: function(response){
			$("#contact").html(response)
			$("#contact-modal").modal('hide');
		},
		error: function(){
			alert("Error");
		}
	});
}
</script>
<script>
$(document).ready(function(){	
	$("#contactForm2").submit(function(event){
		submitFormGQ();
		return false;
	});
});
</script>
<script>
function submitFormGQ(){
	 $.ajax({
		type: "POST",
		url: "saveModalGQ.php",
		cache:false,
		data: $('form#contactForm2').serialize(),
		success: function(response){
			$("#contact2").html(response)
			$("#contact-modalGQ").modal('hide');
		},
		error: function(){
			alert("Error");
		}
	});
}
</script>
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