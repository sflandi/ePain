<?php
    include_once 'koneksi.php';

    date_default_timezone_set('Asia/Jakarta');
    session_start();
    if(isset($_SESSION['username'])){

        $userid1 = $_SESSION['username'];
        $code = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM Tbl_login where username = '$userid1'"));
        $userid = $code['nama'];



        $nrpID = $_POST['nrpID'];
        $planEmergency = $_POST['ruangan'];
        $skalaNyeri =$_POST['skalaNyeri'];


        if (!empty($_POST['implementasiMed0'])) {
            $Med0 = $_POST['implementasiMed0'];
            $Med01 = "'$Med0'";
        } else {
            $Med01 = 'NULL';
        }

        if (!empty($_POST['implementasiMed1'])) {
            $Med1 = $_POST['implementasiMed1'];
            $Med11 = "'$Med1'";
        } else {
            $Med11 = 'NULL';
        }
        if (!empty($_POST['implementasiMed2'])) {
            $Med2 = $_POST['implementasiMed2'];
            $Med21 = "'$Med2'";
        } else {
            $Med21 = 'NULL';
        }
        if (!empty($_POST['implementasiMed3'])) {
            $Med3 = $_POST['implementasiMed3'];
            $Med31 = "'$Med3'";
        } else {
            $Med31 = 'NULL';
        }
        if (!empty($_POST['implementasiMed4'])) {
            $Med4 = $_POST['implementasiMed4'];
            $Med41 = "'$Med4'";
        } else {
            $Med41 = 'NULL';
        }
        if (!empty($_POST['implementasiMed5'])) {
            $Med5 = $_POST['implementasiMed5'];
            $Med51 = "'$Med5'";
        } else {
            $Med51 = 'NULL';
        }
        if (!empty($_POST['implementasiMed6'])) {
            $Med6 = $_POST['implementasiMed6'];
            $Med61 = "'$Med6'";
        } else {
            $Med61 = 'NULL';
        }
        if (!empty($_POST['implementasiMed7'])) {
            $Med7 = $_POST['implementasiMed7'];
            $Med71 = "'$Med7'";
        } else {
            $Med71 = 'NULL';
        }




        if (!empty($_POST['evaluasiMed0'])) {
            $Med0eva = $_POST['evaluasiMed0'];
            $Med01eva = "'$Med0eva'";
        } else {
            $Med01eva = 'NULL';
        }

        if (!empty($_POST['evaluasiMed1'])) {
            $Med1eva = $_POST['evaluasiMed1'];
            $Med11eva = "'$Med1eva'";
        } else {
            $Med11eva = 'NULL';
        }
        if (!empty($_POST['evaluasiMed2'])) {
            $Med2eva = $_POST['evaluasiMed2'];
            $Med21eva = "'$Med2eva'";
        } else {
            $Med21eva = 'NULL';
        }
        if (!empty($_POST['evaluasiMed3'])) {
            $Med3eva = $_POST['evaluasiMed3'];
            $Med31eva = "'$Med3eva'";
        } else {
            $Med31eva = 'NULL';
        }
        if (!empty($_POST['evaluasiMed4'])) {
            $Med4eva = $_POST['evaluasiMed4'];
            $Med41eva = "'$Med4eva'";
        } else {
            $Med41eva = 'NULL';
        }
        if (!empty($_POST['evaluasiMed5'])) {
            $Med5eva = $_POST['evaluasiMed5'];
            $Med51eva = "'$Med5eva'";
        } else {
            $Med51eva = 'NULL';
        }
        if (!empty($_POST['evaluasiMed6'])) {
            $Med6eva = $_POST['evaluasiMed6'];
            $Med61eva = "'$Med6eva'";
        } else {
            $Med61eva = 'NULL';
        }
        if (!empty($_POST['evaluasiMed7'])) {
            $Med7eva = $_POST['evaluasiMed7'];
            $Med71eva = "'$Med7eva'";
        } else {
            $Med71eva = 'NULL';
        }
        
        //KOLABORASI
        if (!empty($_POST['implementasiMed8'])) {
            $Med8 = $_POST['implementasiMed8'];
            $Med81 = "'$Med8'";
        } else {
            $Med81 = 'NULL';
        }
        if (!empty($_POST['evaluasiMed8'])) {
            $Med8eva = $_POST['evaluasiMed8'];
            $Med81eva = "'$Med8eva'";
        } else {
            $Med81eva = 'NULL';
        }

        $codeX = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM data_pasien where nrpID = '$nrpID'"));
        $usia = $codeX['usia'];
        $hariUsia = $codeX['hariUsia'];

        $koneksi=mysqli_connect($server,$username,$password,$database) 
        or die ("koneksi gagal");

            if(isset($nrpID)){
                
                // echo "INSERT INTO data_intervensi (nrpID, skalaNyeri, waktu, ruangan, perawat, imp1, eva1, imp2, eva2, imp3, eva3, imp4, eva4, imp5, eva5, imp6, eva6, imp7, eva7, imp8, eva8, kolimv1, koleva1, kolimv2, koleva2) VALUES ('$nrpID', '$skalaNyeri', NOW(), '$planEmergency', '$userid', $Med01, $Med01eva, $Med11, $Med11eva, $Med21, $Med21eva, $Med31, $Med31eva, $Med41, $Med41eva, $Med51, $Med51eva, $Med61, $Med61eva, $Med71, $Med71eva,  $Med81, $Med81eva, NULL, NULL)";
                
                $sql1 = mysqli_query($koneksi,"INSERT INTO data_intervensi (nrpID, skalaNyeri, waktu, ruangan, perawat, imp1, eva1, imp2, eva2, imp3, eva3, imp4, eva4, imp5, eva5, imp6, eva6, imp7, eva7, imp8, eva8, kolimv1, koleva1, kolimv2, koleva2) VALUES ('$nrpID', '$skalaNyeri', NOW(), '$planEmergency', '$userid', $Med01, $Med01eva, $Med11, $Med11eva, $Med21, $Med21eva, $Med31, $Med31eva, $Med41, $Med41eva, $Med51, $Med51eva, $Med61, $Med61eva, $Med71, $Med71eva,  $Med81, $Med81eva, NULL, NULL)");
                
                echo ("<script LANGUAGE='JavaScript'> window.alert('Data Sudah Tersimpan'); window.location.href='dataAssesment.php?idedit=$nrpID&age=$usia&days=$hariUsia'; </script>");
                
            }
    }else{
        echo "<script language=\"javascript\">alert(\"Please login\");document.location.href='login.php';</script>";
    }
    mysqli_close($koneksi);
?>