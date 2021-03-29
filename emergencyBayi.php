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
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js\scriptEmergencyBatita.js"></script>
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
                    echo '<a href="nips.php?idedit='.$nrpID.'&age='.$usia.'&days='.$hariUsia.'&plan='.$planEmergency.'" class="fancy-button bg-gradient1"><span>NIPS</span></a>';
                ?>
            </div>
            <div class="col-sm-4">
                <?php
                    echo '<a href="cpotEmergencyBayi.php?idedit='.$nrpID.'&age='.$usia.'&days='.$hariUsia.'&plan='.$planEmergency.'" class="fancy-button bg-gradient1"><span>CPOT</span></a>';
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
                echo '<a href="continueTableV4.php?idedit='.$nrpID.'&age='.$usia.'&days='.$hariUsia.'&plan='.$planEmergency.'" class="btn btn-primary btn-block button1"><span>LANJUTKAN</span></a>';
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

        <!-- <center><h5><b>NIPS Bayi<b></h5>
        <center><h6><i>EKSPRESI WAJAH</i></h6>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class=col-sm-4>
               <select name="faceValue" id="faceValue" class="form-control" onchange="faceChange(this);">
                   <option value="empty">Pilih Ekspresi Wajah</option>
                   <option value="0">Otot wajah relax, ekspresi neutral</option>
                   <option value="1">Otot wajah tegang, alis berkerut, rahang dagu mengunci</option>
               </select> 
            </div>
            <div class="col-sm-2">
                <select name="skorFace" id="skorFace" class="form-control" >
                    <option value="" selected disabled>Skor</option>
                </select>
            </div>
            <div class="col-sm-3">
            </div>
        </div>


        <center><h6><i>TANGISAN</i></h6>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class=col-sm-4>
               <select name="legValue" id="legValue" class="form-control" onchange="legChange(this);">
                   <option value="empty">Pilih Keadaan Tangisan</option>
                   <option value="0">Tenang, tidak menangis</option>
                   <option value="1">Mengerang, sebentar-sebentar menangis</option>
                   <option value="2">Terus-menerus menangis, menangis kencang, melengking</option>
               </select> 
            </div>
            <div class="col-sm-2">
                <select name="skorLeg" id="skorLeg" class="form-control" >
                    <option value="" selected disabled>Skor</option>
                </select>
            </div>
            <div class="col-sm-3">
            </div>
        </div>

        
        <center><h6><i>POLA NAPAS</i></h6>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class=col-sm-4>
               <select name="aktValue" id="aktValue" class="form-control" onchange="aktChange(this);">
                   <option value="empty">Pilih Pola Napas</option>
                   <option value="0">Relax, napas regular</option>
                   <option value="1">Pola napas berubah: tidak teratur, lebih cepat dari biasanya, tersedak, menahan napas</option>
               </select> 
            </div>
            <div class="col-sm-2">
                <select name="skorAkt" id="skorAkt" class="form-control" >
                    <option value="" selected disabled>Skor</option>
                </select>
            </div>
            <div class="col-sm-3">
            </div>
        </div>

        <center><h6><i>TANGAN</i></h6>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class=col-sm-4>
               <select name="cryValue" id="cryValue" class="form-control" onchange="cryChange(this);">
                   <option value="empty">Pilih Keadaan Tangan</option>
                   <option value="0">Relax, otot-otot tangan tidak kaku, kadang-kadang tangan bergerak tidak beraturan</option>
                   <option value="1">Flexi / extensi yang kaku meluruskan tangan tapi dengan cepat melakukan flexi / extensi yang kaku</option>
               </select> 
            </div>
            <div class="col-sm-2">
                <select name="skorCry" id="skorCry" class="form-control" >
                    <option value="" selected disabled>Skor</option>
                </select>
            </div>
            <div class="col-sm-3">
            </div>
        </div>

        <center><h6><i>KAKI</i></h6>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class=col-sm-4>
               <select name="consValue" id="consValue" class="form-control" onchange="consChange(this);">
                   <option value="empty">Pilih Keadaan kaki</option>
                   <option value="1">Relax, otot-otot kaki tidak kaku, kadang-kadang kaki bergerak tidak beraturan</option>
                   <option value="2">Flexi / extensi yang kaku, meluruskan kaki tapi dengan cepat melakukan flexi/extensi yang kaku</option>
               </select> 
            </div>
            <div class="col-sm-2">
                <select name="skorCons" id="skorCons" class="form-control" >
                    <option value="" selected disabled>Skor</option>
                </select>
            </div>
            <div class="col-sm-3">
            </div>
        </div>

        <center><h6><i>KESADARAN</i></h6>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class=col-sm-4>
               <select name="consValue" id="consValue" class="form-control" onchange="consChange(this);">
                   <option value="empty">Pilih Tingkat Kesadaran</option>
                   <option value="0">Tidur pulas / cepat bangun dengan tenang</option>
                   <option value="1">Rewel, gelisah dan merengek</option>
               </select> 
            </div>
            <div class="col-sm-2">
                <select name="skorCons" id="skorCons" class="form-control" >
                    <option value="" selected disabled>Skor</option>
                </select>
            </div>
            <div class="col-sm-3">
            </div>
        </div><br><hr><br><br>


        <center><h5><b>Critical Pain Observations Tools (CPOT)</b></h5>
        <center><h6><i>EKSPRESI WAJAH</i></h6>
        <div class="row">
            <div class=col-sm-3>
               <select name="cpotValue" id="cpotValue" class="form-control" onchange="cpotChange(this);">
                   <option value="empty">Pilih Ekspresi Wajah</option>
                   <option value="0">Rileks, normal</option>
                   <option value="1">Tegang</option>
                   <option value="2">Meringis </option>
               </select> 
            </div>
            <div class="col-sm-1">
                <select name="skalaCpot" id="skalaCpot" class="form-control" >
                    <option value="" selected disabled>Skor</option>
                </select>
            </div>
            <div class="col-sm-8">
                <p name="cpotDesc1" id="cpotDesc1"></p>
            </div>
        </div>
        <center><h6><i>GERAKAN TUBUH</i></h6>
        <div class="row">
            <div class=col-sm-3>
               <select name="gtValue" id="gtValue" class="form-control" onchange="gtChange(this);">
                   <option value="">Pilih Gerakan Tubuh</option>
                   <option value="0">Tidak adanya gerakan atau posisi normal</option>
                   <option value="1">Perlindungan</option>
                   <option value="2">Kegelisahan atau agitasi </option>
               </select> 
            </div>
            <div class="col-sm-1">
                <select name="skalaGt" id="skalaGt" class="form-control">
                    <option value="" selected disabled>Skor</option>
                </select>
            </div>
            <div class="col-sm-8">
                <input type="text" name="" id="" class="form-control">
            </div>
        </div>

        
        <center><h6><i>MENGIKUTI MODE VENTILATOR (PASIEN DENGAN INTUBASI ETT) ATAU VOKALISASI (ETT PASIEN UDAH TEREKSTUBASI)</i></h6>
        <div class="row">
            <div class=col-sm-3>
               <select name="modeValue" id="modeValue" class="form-control" onchange="modeChange(this);">
                   <option value="empty">Pilih Mode</option>
                   <option value="0">Ventilator toleransi terhadap pergerakan</option>
                   <option value="1">Batuk tapi masih toleransi</option>
                   <option value="2">Melawan ventilator </option>
                   <option value="0">Berbicara dalam nada normal atau tidak ada suara</option>
                   <option value="1">Menghela nafas, merintih</option>
                   <option value="2">Menangis, terisak- isak</option>
               </select> 
            </div>
            <div class="col-sm-1">
                <select name="skalaMode" id="skalaMode" class="form-control">
                    <option value="" selected disabled>Skor</option>
                </select>
            </div>
            <div class="col-sm-8">
                <input type="text" name="" id="" class="form-control">
            </div>
        </div>

        <center><h6><i>KETEGANGAN OTOT</i></h6>
        <div class="row">
            <div class=col-sm-3>
               <select name="ototValue" id="ototValue" class="form-control"  onchange="ototChange(this);">
                    <option value="">Pilih Ketegangan</option>
                    <option value="0">Rileks</option>
                    <option value="1">Tegang, kaku</option>
                    <option value="2">Sangat tegang atau kaku</option>
               </select> 
            </div>
            <div class="col-sm-1">
                <select name="skalaOtot" id="skalaOtot" class="form-control">
                    <option value="" selected disabled>Skor</option>
                </select>
            </div>
            <div class="col-sm-8">
                <input type="text" name="" id="" class="form-control">
            </div>
        </div><br><hr><br> -->

    </div>
<script>
     
</script>
</body>
</html>

<?php
    }else{
        echo "<script language=\"javascript\"> alert(\"Please Login\");document.location.href='login.php'; </script>";
    }
?>