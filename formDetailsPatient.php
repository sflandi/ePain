<?php
    include_once 'koneksi.php';
    include_once 'detailsEmanagement.php';
    date_default_timezone_set('Asia/Jakarta');
    session_start();
    if(isset($_SESSION['username'])){
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#0287D0">
    <link rel="shortcut icon" href="img/epain12.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details Patient | E-Pain</title>
    <link rel="stylesheet" href="css\buttonCustom.css">
    <link href="css\fontawesome-free-5.4.2-web\css\fontawesome.css" rel="stylesheet">
    <link href="css\fontawesome-free-5.4.2-web\css\brands.css" rel="stylesheet">
    <link href="css\fontawesome-free-5.4.2-web\css\solid.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css\bootstrap-4.1.3\dist\css\bootstrap.min.css">
    <script src="css\bootstrap-4.1.3\dist\js\bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css\loader.css">
    
</head>
<body style="font-family: 'Montserrat', sans-serif; background-image: url('img/bg2.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
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
            <a href="formEmanagement.php" class="navbar-brand">E-PAIN</a>
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
    <div class="container">
        <div class="animate-bottom">
        <center><h3>DATA PASIEN</h3></center><br><br>
        <!-- <form action="continueFormAdmission.php" method="post"> -->
            <form action="" method="post">
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label"><b>NRM ID</b></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nrmID" id="nrmID" value="<?php echo $nrpID; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label"><b>No Identitas KTP</b></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="noKTP" id="noKTP" value="<?php echo $ktp; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label"><b>Nama Pasien</b></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" id="name" value="<?php echo $namaPasien; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label"><b>Alamat</b></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="address" id="address" value="<?php echo $alamat; ?>" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label"><b>Jenis Kelamin</b></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="gridRadios" id="gridRadios" value="<?php echo $gender; ?>" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label"><b>Usia</b></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="age" id="age" value="<?php echo $usia; ?>" readonly>
                </div>
            </div><br>
            <input type="text" name="bulanLahir" id="bulanLahir" value="<?php echo $hariUsia; ?>" hidden>

            


            <hr>
            <center><h3>RIWAYAT DATA PASIEN</h3></center>
            <div class="table-responsive"><br>
                <table class="table table-hover order-table">
                    <thead>
                        <tr class="table-active">
                                    <th scope="col">TERAKHIR BEROBAT</th>
                                    <th scope="col" style="float:right">RIWAYAT PENYAKIT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            $sql = "select * from data_history where nrpID = '$nrpID' order by tglBerobat desc"; 
                            $sql1 = mysqli_query($koneksi,$sql);
                            $cek = mysqli_num_rows($sql1);
                            if($cek == 0){
                                echo "TIDAK ADA DATA";
                            }else{
                                while($row = mysqli_fetch_assoc($sql1)) {
                                    
                                    echo'<tr>';
                                        echo'<td scope="col" data-label="TERAKHIR BEROBAT">'.$row['tglBerobat'].'</td>';
                                        // echo'<td data-label="RIWAYAT PENYAKIT"><a href="" data-toggle="modal" data-target="#myModal" >Details</a></td>';
                                        echo'<td data-label="RIWAYAT PENYAKIT" style="float:right"><a href="dataHistory.php?idedit='.$nrpID.'&detail='.$row['nrp_Details'].'"  >Details</a></td>';

                                    echo'</tr>';
                                    }
                                }
                            ?>
                    </tbody>
                </table>
            </div><br><hr>

            <!-- <input type="text" name="age" id="age" hidden><br> -->
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-2">
                        <a href="formEmanagement.php" class="btn btn-primary btn-block button1">KELUAR</a>
                    </div>
                    <?php
                        include 'koneksi.php';

                        // $hariUsia = $_GET['']
                        if ($usia >= '7') {
                            echo '<div class="col-sm-2">
                            
                                <button type="button" class="btn btn-primary btn-block button1" data-toggle="modal" data-target="#myModal">LANJUTKAN</button>
                            </div>' ;
                        } else {
                            echo '<div class="col-sm-2">';
                                echo '<a href="choosePlan.php?idedit='.$nrpID.'&age='.$usia.'&days='.$hariUsia.'" class="btn btn-primary btn-block button1">LANJUTKAN</i></a>';
                            echo '</div>';
                        }
                    ?>
                    <!-- <div class="col-sm-2">
                        <button type="button" class="btn btn-primary btn-block button1" data-toggle="modal" data-target="#myModal">LANJUTKAN</button>
                    </div> -->
                    <div class="col-sm-4"></div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h6>Apakah ada keluhan?</h6>
                        </div>
                        <div class="modal-footer">
                            <!-- <button type="submit" class="btn btn-primary">YA</button> -->
                            <a href="continueFormAdmission.php?idedit=<?php echo $nrpID; ?>&age=<?php echo $usia; ?>&days=<?php echo $hariUsia; ?>" class="btn btn-primary button2">YA</a>
                            <button type="button" class="btn btn-danger button2" data-dismiss="modal">TIDAK</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
        </div>
    </div><br><br><br>
</body>
</html>
<?php
    }else{
        echo "<script language=\"javascript\"> alert(\"Please Login\");document.location.href='login.php'; </script>";
    }
?>