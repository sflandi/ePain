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
    <title> List patient | E-Pain</title>
    <link rel="stylesheet" href="css\bootstrap-4.1.3\dist\css\bootstrap.min.css">
    <script src="css\bootstrap-4.1.3\dist\js\bootstrap.min.js"></script>
    <link rel="stylesheet" href="css\buttonCustom.css">
    <link rel="stylesheet" href="css\loader.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script type="text/javascript" src="js/searchtable.js"></script>
</head>
<body style="font-family: 'Montserrat', sans-serif; background-image: url('img/bg2.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover; opacity: 1">
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
                        <button type="submit" class="btn btn-outline-danger button">LOGOUT</button>
                    </div>
                </form>
            </div>
        </nav>
    </div><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col align-self-center">
                <input type="search" class="table-filter col-sm-auto" data-table="order-table" style="border-radius:9px" placeholder="Search">
            </div>
        </div>
        <div class="animate-bottom">
        <div class="table-responsive"><br>
        <table class="table table-hover order-table">
            <thead>
                <tr class="table-active">
                    <th scope="col">NRM</th>
                    <th scope="col">No Identitas KTP</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Umur</th>
                    <!-- <th scope="col">hariusia</th> -->
                    <!-- <th scope="col">Nama Sales</th>
                    <th scope="col">Status</th> -->
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql1 = mysqli_query($koneksi,"select * from data_pasien");
                    $cek = mysqli_num_rows($sql1);
                    if($cek == 0){
                        echo "TIDAK ADA DATA";
                    }else{
                        while($row = mysqli_fetch_assoc($sql1)) {
                            
                            echo'<tr>';
                                echo'<td scope="col" data-label="NRM">'.$row['nrpID'].'</td>';
                                echo'<td data-label="No Identitas KTP">'  .$row['ktp']. '</td>';
                                echo'<td data-label="Nama">'  .$row['nama']. '</td>';

                                echo'<td data-label="Alamat">' . $row['alamat']. '</td>';
                                echo'<td data-label="Umur">'  .$row['usia']. '</td>';
                                
                                echo'<td data-label="Action">
                                        <a href="formDetailsPatient.php?idedit='.$row['nrpID'].'">Details</a>
                                </td>';
                            echo'</tr>';
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
        </div>
    </div>
    
</body>
</html>
<?php
    }else{
        echo "<script language=\"javascript\"> alert(\"Please Login\");document.location.href='login.php'; </script>";
    }
?>
