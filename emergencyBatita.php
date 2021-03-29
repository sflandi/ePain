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
                    echo '<a href="flacc.php?idedit='.$nrpID.'&age='.$usia.'&days='.$hariUsia.'&plan='.$planEmergency.'" class="fancy-button bg-gradient1"><span>FLACC</span></a>';
                ?>
            </div>
            <div class="col-sm-4">
                <?php
                    echo '<a href="cpotEmergencyBatita.php?idedit='.$nrpID.'&age='.$usia.'&days='.$hariUsia.'&plan='.$planEmergency.'" class="fancy-button bg-gradient1"><span>CPOT</span></a>';
                ?>
            </div>
            <div class="col-sm-4">
                <?php
                    echo '<a href="cfs.php?idedit='.$nrpID.'&age='.$usia.'&days='.$hariUsia.'&plan='.$planEmergency.'" class="fancy-button bg-gradient1"><span>CFS</span></a>';
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
                echo '<a href="continueTableV3.php?idedit='.$nrpID.'&age='.$usia.'&days='.$hariUsia.'&plan='.$planEmergency.'" class="btn btn-primary btn-block button1"><span>LANJUTKAN</span></a>';
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
        <!-- <input type="text" name="nrpID" id="nrpID" value="<?php //echo $nrpID; ?>" hidden>
        <h5>FPS PAKE EMOJI SURVEY</h5>
        <div class="row">
           
        </div><br><hr><br>



        <center><h5><b>Critical Pain Observations Tools (CPOT)</b></h5></center>
        <center><h6><i>EKSPRESI WAJAH</i></h6></center>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class=col-sm-4>
               <select name="cpotValue" id="cpotValue" class="form-control" onchange="cpotChange(this);">
                   <option value="">Pilih Ekspresi Wajah</option>
                   <option value="0">Rileks, Normal</option>
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
        </div><hr>
                <center><div id="111" class="cpotDesc"></div></center>
                <center><div id="0" class="cpotDesc">Tidak terlihat ada ketegangan otot wajah.<hr></div></center>
                <center><div id="1" class="cpotDesc">Merengut, alis menurun, orbit menegang dan terdapat kerutan levator atau perubahan lainnya (misalnya membuka mata atau menangis selama prosedur nosiseptif).<hr></div></center>
                <center><div id="2" class="cpotDesc">Semua gerakan wajah sebelumnya ditambah kelopak mata tertutup rapat (mulut terbuka atau menggigit selang endotracheal).<hr></div></center><br><br>
        <script>
        $(document).ready(function(){
            $(".cpotDesc").hide();
            $("#111").show();
            $("#cpotValue").change(function(){
                $('.cpotDesc').hide();
                $('#'+$(this).val()).show();
            });
        }); 
        </script>




        <center><h6>GERAKAN TUBUH</h6></center>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class=col-sm-4>
               <select name="gtValue" id="gtValue" class="form-control" onchange="gtChange(this);">
                   <option value="">Pilih Gerakan Tubuh</option>
                   <option value="1">Tidak adanya gerakan atau posisi normal</option>
                   <option value="2">Perlindungan</option>
                   <option value="3">Kegelisahan atau agitasi </option>
               </select> 
            </div>
            <div class="col-sm-2">
                <select name="skalaGt" id="skalaGt" class="form-control">
                    <option value="" selected disabled>Skor</option>
                </select>
            </div>
            <div class="col-sm-3"></div>
                <center><div id="222" class="gtDesc"></div></center>
                <center><div id="0" class="gtDesc">Tidak bergerak sama sekali (tidak berarti tidak adanya rasa sakit) atau posisi normal (gerakan tidak dilakukan terhadap bagian yang terasa nyeri atau tidak dilakukan untuk tujuan perlindungan).<hr></div></center>
                <center><div id="1" class="gtDesc">Melambat, gerakan hati- hati, menyentuh, atau menggosok bagian yang nyeri, mencari perhatian melalui gerakan.<hr></div></center>
                <center><div id="2" class="gtDesc">Menarik selang, mencoba untuk duduk, menggerakan tungkai/ meronta ronta, tidak mengikuti perintah, menyerang staf, mencoba turun dari tempat tidur.<hr></div></center><br><br>
        </div><hr>
                

            <script>
            $(document).ready(function(){
                $(".gtDesc").hide();
                $("#222").show();
                $("#gtValue").change(function(){
                    $('.gtDesc').hide();
                    $('#'+$(this).val()).show();
                });
            }); 
            </script>



        <h6>MENGIKUTI MODE VENTILATOR (PASIEN DENGAN INTUBASI ETT) ATAU VOKALISASI (ETT PASIEN UDAH TEREKSTUBASI)</h6>
        <div class="row">
            <div class=col-sm-3>
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
            <div class="col-sm-1">
                <select name="skalaMode" id="skalaMode" class="form-control">
                    <option value="" selected disabled>0</option>
                </select>
            </div>
            <div class="col-sm-8">
                <input type="text" name="" id="" class="form-control">
            </div>
        </div><hr>
                <center><div id="100" class="modeDesc"></div></center>
                <center><div id="1" class="modeDesc">Tidak terlihat ada ketegangan otot wajah<hr></div></center>
                <center><div id="2" class="modeDesc">Merengut, alis menurun, orbit menegang dan terdapat kerutan levator atau perubahan lainnya (misalnya membuka mata atau menangis selama prosedur nosiseptif)<hr></div></center>
                <center><div id="3" class="modeDesc">Semua gerakan wajah sebelumnya ditambah kelopak mata tertutup rapat (mulut terbuka atau menggigit selang endotracheal)<hr></div></center><br><br>

        <center><h6>KETEGANGAN OTOT</h6></center>
        <div class="row">
            <div class=col-sm-3>
               <select name="ototValue" id="ototValue" class="form-control"  onchange="ototChange(this);">
                    <option value="">Pilih Ketegangan</option>
                    <option value="1">Rileks</option>
                    <option value="2">Tegang, kaku</option>
                    <option value="3">Sangat tegang atau kaku</option>
               </select> 
            </div>
            <div class="col-sm-1">
                <select name="skalaOtot" id="skalaOtot" class="form-control">
                    <option value="" selected disabled>0</option>
                </select>
            </div>
            <div class="col-sm-8">
                <input type="text" name="" id="" class="form-control">
            </div>
        </div><hr>
                <center><div id="1" class="ototDesc">Tidak terlihat ada ketegangan otot wajah<hr></div></center>
                <center><div id="2" class="ototDesc">Merengut, alis menurun, orbit menegang dan terdapat kerutan levator atau perubahan lainnya (misalnya membuka mata atau menangis selama prosedur nosiseptif)<hr></div></center>
                <center><div id="3" class="ototDesc">Semua gerakan wajah sebelumnya ditambah kelopak mata tertutup rapat (mulut terbuka atau menggigit selang endotracheal)<hr></div></center><br><br>
        <br><hr><br> -->



</body>
</html>

<?php
    }else{
        echo "<script language=\"javascript\"> alert(\"Please Login\");document.location.href='login.php'; </script>";
    }
?>