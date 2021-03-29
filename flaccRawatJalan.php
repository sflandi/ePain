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
    <script src="css\bootstrap-4.1.3\dist\js\bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js\scriptEmergencyBatita.js"></script>
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
    
    <div class="container" style="margin-top:5%; overflow:hidden;">
    <div class="animate-bottom" >
        <form action="insertFlaccRawatJalan.php" method="post">
            <input type="text" name="nrpID" id="nrpID" value="<?php echo $nrpID; ?>" hidden>
            <input type="text" name="ruangan" id="ruangan" value="<?php echo $planRawatJalan; ?>" hidden>
            <center><h5><b>FLACC BATITA<b></h5>
        <center><h6><i>FACE (WAJAH)</i></h6>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class=col-sm-4>
               <select name="faceValue" id="faceValue" class="form-control" onchange="faceChange(this);">
                   <option value="empty">Pilih Keadaan Wajah</option>
                   <option value="0">Otot wajah relax</option>
                   <option value="1">Otot wajah tegang, sesekali meringis/ merengutkan dahi</option>
                   <option value="2">Otot wajah tegang menerus tegang, rahang mengunci</option>
               </select> 
            </div>
            <div class="col-sm-2">
                <select name="skorFace" id="skorFace" class="form-control" >
                    <!-- <option value="0">0</option> -->
                    <option value="" selected disabled>Skor</option>
                </select>
            </div>
            <div class="col-sm-3">
                <!-- <select name="cpotDesc1" id="cpotDesc1" class="form-control">
                    <option value="" selected disabled></option>
                </select> -->
                <!-- <input type="text" name="cpotDesc1" id="cpotDesc1" class="form-control" > -->
            </div>
        </div>


        <center><h6><i>LEG (KAKI)</i></h6>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class=col-sm-4>
               <select name="legValue" id="legValue" class="form-control" onchange="legChange(this);">
                   <option value="empty">Pilih Keadaan Kaki</option>
                   <option value="0">Posisi normal atau relaksasi</option>
                   <option value="1">Tidak tenang, tegang, gelisah</option>
                   <option value="2">Menendang atau menarik kaki, kaki terangkat (lebih gelisah)</option>
               </select> 
            </div>
            <div class="col-sm-2">
                <select name="skorLeg" id="skorLeg" class="form-control" >
                    <option value="" selected disabled>Skor</option>
                </select>
            </div>
            <div class="col-sm-3">
                <!-- <select name="cpotDesc1" id="cpotDesc1" class="form-control">
                    <option value="" selected disabled></option>
                </select> -->
                <!-- <input type="text" name="cpotDesc1" id="cpotDesc1" class="form-control" > -->
            </div>
        </div>

        
        <center><h6><i>ACTIVITY (AKTIFITAS)</i></h6>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class=col-sm-4>
               <!-- <label>Tidak Nyeri</label> -->
               <select name="aktValue" id="aktValue" class="form-control" onchange="aktChange(this);">
                   <option value="empty">Pilih Tingkat Tangisan</option>
                   <option value="0">Tonus otot normal, bergerak dengan mudah</option>
                   <option value="1">Tonus otot meningkat, pinggang menggeliat kedepan dan belakang</option>
                   <option value="2">Tonus otot kaku, badan melengkung kaku atau menyentak- menyentak</option>
               </select> 
            </div>
            <div class="col-sm-2">
                <select name="skorAkt" id="skorAkt" class="form-control" >
                    <!-- <option value="0">0</option> -->
                    <option value="" selected disabled>Skor</option>
                </select>
            </div>
            <div class="col-sm-3">
                <!-- <select name="cpotDesc1" id="cpotDesc1" class="form-control">
                    <option value="" selected disabled></option>
                </select> -->
                <!-- <input type="text" name="cpotDesc1" id="cpotDesc1" class="form-control" > -->
            </div>
        </div>

        <center><h6><i>CRY (MENANGIS)</i></h6>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class=col-sm-4>
               <!-- <label>Tidak Nyeri</label> -->
               <select name="cryValue" id="cryValue" class="form-control" onchange="cryChange(this);">
                   <option value="empty">Pilih Tingkat Tangisan</option>
                   <option value="0">Tidak menangis (bangun atau tidur)</option>
                   <option value="1">Mengerang kesakitan, merengek-rengek, sesekali mengeluh</option>
                   <option value="2">Terus-menerus menangis, menjerit atau terisak-isak, sering mengeluh</option>
               </select> 
            </div>
            <div class="col-sm-2">
                <select name="skorCry" id="skorCry" class="form-control" >
                    <!-- <option value="0">0</option> -->
                    <option value="" selected disabled>Skor</option>
                </select>
            </div>
            <div class="col-sm-3">
                <!-- <select name="cpotDesc1" id="cpotDesc1" class="form-control">
                    <option value="" selected disabled></option>
                </select> -->
                <!-- <input type="text" name="cpotDesc1" id="cpotDesc1" class="form-control" > -->
            </div>
        </div>


        <center><h6><i>CONSOLABILITY (BERSUARA)</i></h6>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class=col-sm-4>
               <!-- <label>Tidak Nyeri</label> -->
               <select name="consValue" id="consValue" class="form-control" onchange="consChange(this);">
                   <option value="empty">Pilih Keadaan Suara</option>
                   <option value="0">Bersuara normal, tenang, mudah ditenangkan</option>
                   <option value="1">Tenang bila dipeluk, digendong, atau diajak bicara untuk mengalihkan perhatian (distraksi)</option>
                   <option value="2">Sulit untuk ditenangkan, atau dibuat nyaman dengan sentuhan maupun pelukan</option>
               </select> 
            </div>
            <div class="col-sm-2">
                <select name="skorCons" id="skorCons" class="form-control" >
                    <!-- <option value="0">0</option> -->
                    <option value="" selected disabled>Skor</option>
                </select>
            </div>
            <div class="col-sm-3">
                <!-- <select name="cpotDesc1" id="cpotDesc1" class="form-control">
                    <option value="" selected disabled></option>
                </select> -->
                <!-- <input type="text" name="cpotDesc1" id="cpotDesc1" class="form-control" > -->
            </div>
        </div><br><hr><br><br>

        <div class="form-group">
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-2">
                        <!-- <a href="emergencyAdult.php" class="btn btn-primary btn-block button1">KELUAR</a> -->
                        <?php
                            echo '<a href="rawatJalanBatita.php?idedit='.$nrpID.'&age='.$usia.'&days='.$hariUsia.'&plan='.$planRawatJalan.'" class="btn btn-primary btn-block button1"><span>KELUAR</span></a>';
                        //     echo '<a class="btn btn-primary btn-block button1" onclick="goBack()" style="color: #ffffff !important;"><span>KELUAR</span></a>';
                        // ?>
                        <!-- <script>
                            function goBack(){
                                window.history.back();
                            }
                        </script> -->
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-primary btn-block button1" name="login">SIMPAN</button>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
            </div>
        </form>
    </div>
    </div><br><br>
     
<script>

</script>
    

</body>
</html>

<?php
    }else{
        echo "<script language=\"javascript\"> alert(\"Please Login\");document.location.href='login.php'; </script>";
    }
?>