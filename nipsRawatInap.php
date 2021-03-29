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
    <script src="js\scriptEmergencyBayi.js"></script>

    
    
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
        <form action="insertNipsRawatInap.php" method="post">
            <input type="text" name="nrpID" id="nrpID" value="<?php echo $nrpID; ?>" hidden>
            <input type="text" name="ruangan" id="ruangan" value="<?php echo $planRawatInap; ?>" hidden>
            <center><h5><b>NIPS<b></h5>
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
                <select name="cryValue" id="cryValue" class="form-control" onchange="cryChange(this);">
                    <option value="empty">Pilih Keadaan Tangisan</option>
                    <option value="0">Tenang, tidak menangis</option>
                    <option value="1">Mengerang, sebentar-sebentar menangis</option>
                    <option value="2">Terus-menerus menangis, menangis kencang, melengking</option>
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

        
            <center><h6><i>POLA NAPAS</i></h6>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class=col-sm-4>
                <select name="nafasValue" id="nafasValue" class="form-control" onchange="nafasChange(this);">
                    <option value="empty">Pilih Pola Napas</option>
                    <option value="0">Relax, napas regular</option>
                    <option value="1">Pola napas berubah: tidak teratur, lebih cepat dari biasanya, tersedak, menahan napas</option>
                </select> 
                </div>
                <div class="col-sm-2">
                    <select name="skorNafas" id="skorNafas" class="form-control" >
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
                <select name="handValue" id="handValue" class="form-control" onchange="handChange(this);">
                    <option value="empty">Pilih Keadaan Tangan</option>
                    <option value="0">Relax, otot-otot tangan tidak kaku, kadang-kadang tangan bergerak tidak beraturan</option>
                    <option value="1">Flexi / extensi yang kaku meluruskan tangan tapi dengan cepat melakukan flexi / extensi yang kaku</option>
                </select> 
                </div>
                <div class="col-sm-2">
                    <select name="skorHand" id="skorHand" class="form-control" >
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
                <select name="footValue" id="footValue" class="form-control" onchange="footChange(this);">
                    <option value="empty">Pilih Keadaan kaki</option>
                    <option value="0">Relax, otot-otot kaki tidak kaku, kadang-kadang kaki bergerak tidak beraturan</option>
                    <option value="1">Flexi / extensi yang kaku, meluruskan kaki tapi dengan cepat melakukan flexi/extensi yang kaku</option>
                </select> 
                </div>
                <div class="col-sm-2">
                    <select name="skorFoot" id="skorFoot" class="form-control" >
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
                <select name="xValue" id="xValue" class="form-control" onchange="xChange(this);">
                    <option value="empty">Pilih Tingkat Kesadaran</option>
                    <option value="0">Tidur pulas / cepat bangun dengan tenang</option>
                    <option value="1">Rewel, gelisah dan merengek</option>
                </select> 
                </div>
                <div class="col-sm-2">
                    <select name="skorX" id="skorX" class="form-control" >
                        <option value="" selected disabled>Skor</option>
                    </select>
                </div>
                <div class="col-sm-3">
                </div>
                
            </div><br><br>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-2">
                        <?php
                            echo '<a href="RawatInapBayi.php?idedit='.$nrpID.'&age='.$usia.'&days='.$hariUsia.'&plan='.$planRawatInap.'" class="btn btn-primary btn-block button1"><span>KELUAR</span></a>';
                        ?>
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-primary btn-block button1" name="login">SIMPAN</button>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
            </div>
            <br><hr><br>


    </div>
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