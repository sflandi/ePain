<?php
    include_once "koneksi.php";
    date_default_timezone_set('Asia/Jakarta');
    session_start();
    if(ISSET($_SESSION['username'])){
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
    <link rel="stylesheet" href="css\loader.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
</head>
<body style="font-family: 'Montserrat', sans-serif; background-image: url('img/bg5.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover; opacity: 1">
    <div class="container-fluid">
        <?php
            include "koneksi.php";
            $userid=$_SESSION['username'];
            $sql = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM Tbl_loginAdmin WHERE username = '$userid' "));
            $nama=strtoupper($sql['nama']);
            // $useridsave = $sql['userid'];
            // $usertype = $sql['usertype'];
        ?>
        <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark">
            <a href="formAdmission.php" class="navbar-brand"><img src="img/epain12.png" alt="" style="width:45px; height:45px;"> ADMISSION</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href='formAdmission.php' class='nav-item nav-link active'>FORM</a>
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
    <div class="container">
        <div class="animate-bottom">
        <center><h2>BUAT DATA PASIEN BARU</h2></center><br><hr>
        <form action="insertFormAdmission.php" method="post">
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label"><b>NRP ID</b><span class="star"> *</span></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="noNrp" id="noNrp" placeholder=" Masukan No NRP" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label"><b>No Identitas KTP</b><span class="star"> *</span></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="noKTP" id="noKTP" placeholder=" Masukan No KTP" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label"><b>Nama </b><span class="star"> *</span></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" id="name" placeholder=" Masukan Nama" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label"><b>Alamat</b><span class="star"> *</span></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="address" id="address" placeholder=" Masukan Alamat" required>
                </div>
            </div>

            <fieldset class="form-group">
                <div class="row">
                <legend class="col-form-label col-sm-3 pt-0"><b>Jenis Kelamin</b><span class="star"> *</span></legend>
                    <div class="col-sm-9">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Laki-Laki">
                            <label class="form-check-label" for="gridRadios1">Laki-Laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Perempuan">
                            <label class="form-check-label" for="gridRadios2">Perempuan</label>
                        </div>
                    </div>
                </div>
            </fieldset>

            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label"><b>Tanggal Lahir</b><span class="star"> *</span></label>
                <div class="col-sm-9">
                    <input type="date" class="form-control" name="tglLahir" id="tglLahir" placeholder=" Masukan Tanggal Lahir" required>
                </div>
            </div><br>
            <input type="text" name="age" id="age" hidden>
            <input type="text" name="bulan" id="bulan" hidden>
            <script>
                $(document).ready(function () {
                    $("#tglLahir").change(function () {
                        var start_date = new Date($("#tglLahir").val());
                        var date = new Date();
                        var end_date = new Date(start_date);
                        end_date.setFullYear(date.getFullYear()-start_date.getFullYear());
                        $("#age").val(end_date.getFullYear());
                        // $("#age").val(date);
                    });
                });  
            </script>
            

            <script>
            //Change ME
            $(document).ready(function () {
                    $("#tglLahir").change(function () {
            var DOB =  new Date($("#tglLahir").val());//document.getElementById('tglLahir').value;//"1993/12/23";
            var millisecondsBetweenDOBAnd1970 = Date.parse(DOB);
            var millisecondsBetweenNowAnd1970 = Date.now();
            var ageInMilliseconds = millisecondsBetweenNowAnd1970-millisecondsBetweenDOBAnd1970;
            //--We will leverage Date.parse and now method to calculate age in milliseconds refer here https://www.w3schools.com/jsref/jsref_parse.asp

            var milliseconds = ageInMilliseconds;
            var second = 1000;
            var minute = second*60;
            var hour = minute*60;
            var day = hour*24;
            var month = day*30; 
            /*using 30 as base as months can have 28, 29, 30 or 31 days depending a month in a year it itself is a different piece of comuptation*/
            var year = day*365;

            //let the age conversion begin
            var years = Math.round(milliseconds/year);
            var months = Math.round(milliseconds/month);
            var days = Math.round(milliseconds/day);
            var hours = Math.round(milliseconds/hour);
            var seconds = Math.round(milliseconds/second);


            // function printResults(){
               
            // var message = "Age in Years : "+years+
            //     "</br>Age in Months : "+months+
            //     "</br>Age in Days : "+days+
            //     "</br>Age in Hours : "+hours+
            //     "</br>Age in Seconds : "+seconds+
            //     "</br>Age in Milliseconds : "+milliseconds;
            var message = days
            // document.getElementById('bulan').innerHTML = message;
            $("#bulan").val(message);
            // }
                    });
                });  
            // window.onload = printResults;    
            </script>




            <hr>
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
    </div>
</body>
</html>
<?php
    }else{
        echo "<script language=\"javascript\"> alert(\"Please Login\");document.location.href='loginAdmission.php'; </script>";
    }
?>