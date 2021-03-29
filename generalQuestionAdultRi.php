<?php
    include_once "koneksi.php";
    date_default_timezone_set('Asia/Jakarta');
    session_start();
    if(ISSET($_SESSION['username'])){
        $nrpID = $_GET['idedit'];
        $age = $_GET['age'];
        $hariUsia = $_GET['days'];
        $planRawatInap = $_GET['plan'];
?>
<?php
    // echo "test";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#0287D0">
    <link rel="shortcut icon" href="img/epain12.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Admission | E-Pain</title>
    <link rel="stylesheet" href="css\buttonCustom.css">
    <link rel="stylesheet" href="css\bootstrap-4.1.3\dist\css\bootstrap.min.css">
    <script src="css\bootstrap-4.1.3\dist\js\bootstrap.min.js"></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
</head>
<body style="font-family: 'Montserrat', sans-serif;">
    <div class="container-fluid">
        <?php
            include "koneksi.php";
            $userid=$_SESSION['username'];
            $sql = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM Tbl_login WHERE username = '$userid' "));
            $nama=strtoupper($sql['nama']);
            // $useridsave = $sql['userid'];
            // $usertype = $sql['usertype'];
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
                        <button type="submit" class="btn btn-outline-danger button" style="border-radius:9px">LOGOUT</button>
                    </div>
                </form>
            </div>
        </nav>
    </div><br><br><br><br>
    <div class="container"  style="border: 3px solid #aaa; border-radius: 15px; padding:25px;">
        <!-- <center><h2>BUAT DATA PASIEN BARU</h2></center><br><br> -->
        <form action="insertGeneralQuestionAdultRi.php" method="post">
            <input type="text" name="nrpID" id="nrpID" value="<?php echo $nrpID;?>" hidden>
            <div class="form-group row">
                <label for="" class="col-sm-7 col-form-label"><b>1. Apa penyebab rasa nyeri ?</b><span class="star"> *</span></label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="question0" id="question0" required>
                    <!-- <select class="form-control" name="question1" id="question1" required>
                        <option value="" selected disabled>Pilih</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                        <option value="Sulit Dinilai">Sulit Dinilai</option>
                    </select> -->
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-7 col-form-label"><b>2. Apakah nyeri berpindah dari tempat satu ke tempat lain?</b><span class="star"> *</span></label>
                <div class="col-sm-5">
                    <!-- <input type="text" class="form-control" name="question1" id="question1" required> -->
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
                <label for="" class="col-form-label"><b>3. Lokasi nyeri?</b><span class="star"> *</span>
                    
                </label>
                <div >
                        <img src="img/gq.jpg" alt="" style="width=100% !important; height=100% !important; max-width: 400px !important;">
                    </div>
                </div>
                
                
                
                <div class="col-sm-5">
                    <!-- <input type="text" class="form-control" name="question2" id="question2" required> -->
                    <textarea name="question2" id="question2" cols="45" rows="11" required></textarea>
                    <!-- <select class="form-control" name="question2" id="question2" required>
                        <option value="" selected disabled>Pilih</option>
                        <option value="Leher">Leher</option>
                        <option value="Pundak Kanan">Pundak Kanan</option>
                        <option value="Pundak Kiri">Pundak Kiri</option>
                        <option value="Siku Tangan Kanan">Siku Tangan Kanan</option>
                        <option value="Siku Tangan Kiri">Siku Tangan Kiri</option>
                        <option value="Pinggang Kanan">Pinggang Kanan</option>
                        <option value="Pinggang Kiri">Pinggang Kiri</option>
                        <option value="Dengkul Kanan">Dengkul Kanan</option>
                        <option value="Dengkul Kiri">Dengkul Tangan Kiri</option>
                        <option value="Sulit Dinilai">Sulit dinilai</option>
                    </select> -->
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-7 col-form-label"><b>4. Berapa lama nyeri ini?</b><span class="star"> *</span></label>
                <div class="col-sm-5">
                    <!-- <input type="text" class="form-control" name="question3" id="question3" required> -->
                    <select class="form-control" name="question3" id="question3" required>
                        <option value="" selected disabled>Pilih</option>
                        <option value="Kurang Dari 3 Bulan (Akut)">Kurang dari 3 bulan (Akut)</option>
                        <option value="Lebih dari 3 bulan (kronis)">Lebih dari 3 bulan (kronis)</option>
                        <!-- <option value="Sulit Dinilai">Sulit dinilai</option> -->
                    </select>
                </div>
            </div>


            <div class="form-group row">
                <label for="" class="col-sm-7 col-form-label"><b>5. Rasa nyeri?</b><span class="star"> *</span></label>
                <div class="col-sm-5">
                    <!-- <input type="text" class="form-control" name="question4" id="question4" required> -->
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
                        <!-- <option value="Sulit">Sulit</option> -->
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-7 col-form-label"><b>6. Seberapa sering anda mengalami nyeri ini?</b><span class="star"> *</span></label>
                <div class="col-sm-5">
                    <!-- <input type="text" class="form-control" name="question5" id="question5" required> -->
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
                <label for="" class="col-sm-7 col-form-label"><b>7. Apa yang membuat nyeri berkurang?</b><span class="star"> *</span></label>
                <div class="col-sm-5">
                    <!-- <input type="text" class="form-control" name="question6" id="question6" required> -->
                    <select class="form-control" name="question6" id="question6" required>
                        <option value="" selected disabled>Pilih</option>
                        <option value="Kompres air hangat">Kompres air hangat</option>
                        <option value="Aktifitas dikurangi (istirahat)">Aktifitas dikurangi ( istirahat )</option>
                        <option value="Minum obat">Minum obat</option>
                    </select>
                </div>
            </div><br><br>

            <!-- <input type="text" name="age" id="age" hidden><br> -->
            <!-- <div class="form-row">
                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </div> -->
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-5"></div>
                        <div class="col-sm-2">
                            <!-- <button type="submit" class="btn btn-primary btn-block button1" >XIMPAN</button> -->
                            <button type="submit" class="btn btn-primary btn-block button1" name="login">SIMPAN</button>
                        </div>
                    <div class="col-sm-5"></div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>

<?php
    }else{
        echo "<script language=\"javascript\"> alert(\"Please Login\");document.location.href='login.php'; </script>";
    }
?>