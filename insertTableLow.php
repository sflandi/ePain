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
        // $Low0 = $_POST['implementasiLow0'];
        // $Low1 = $_POST['implementasiLow1'];
        // $Low2 = $_POST['implementasiLow2'];
        // $Low3 = $_POST['implementasiLow3'];
        // $Low4 = $_POST['implementasiLow4'];
        // $Low5 = $_POST['implementasiLow5'];
        // $Low6 = $_POST['implementasiLow6'];
        // $Low7 = $_POST['implementasiLow7'];
        $skalaNyeri =$_POST['skalaNyeri'];


        if (!empty($_POST['implementasiLow0'])) {
            $Low0 = $_POST['implementasiLow0'];
            $Low01 = "'$Low0'";
        } else {
            $Low01 = 'NULL';
        }

        if (!empty($_POST['implementasiLow1'])) {
            $Low1 = $_POST['implementasiLow1'];
            $Low11 = "'$Low1'";
        } else {
            $Low11 = 'NULL';
        }
        if (!empty($_POST['implementasiLow2'])) {
            $Low2 = $_POST['implementasiLow2'];
            $Low21 = "'$Low2'";
        } else {
            $Low21 = 'NULL';
        }
        if (!empty($_POST['implementasiLow3'])) {
            $Low3 = $_POST['implementasiLow3'];
            $Low31 = "'$Low3'";
        } else {
            $Low31 = 'NULL';
        }
        if (!empty($_POST['implementasiLow4'])) {
            $Low4 = $_POST['implementasiLow4'];
            $Low41 = "'$Low4'";
        } else {
            $Low41 = 'NULL';
        }
        if (!empty($_POST['implementasiLow5'])) {
            $Low5 = $_POST['implementasiLow5'];
            $Low51 = "'$Low5'";
        } else {
            $Low51 = 'NULL';
        }
        if (!empty($_POST['implementasiLow6'])) {
            $Low6 = $_POST['implementasiLow6'];
            $Low61 = "'$Low6'";
        } else {
            $Low61 = 'NULL';
        }
        if (!empty($_POST['implementasiLow7'])) {
            $Low7 = $_POST['implementasiLow7'];
            $Low71 = "'$Low7'";
        } else {
            $Low71 = 'NULL';
        }




        if (!empty($_POST['evaluasiLow0'])) {
            $Low0eva = $_POST['evaluasiLow0'];
            $Low01eva = "'$Low0eva'";
        } else {
            $Low01eva = 'NULL';
        }

        if (!empty($_POST['evaluasiLow1'])) {
            $Low1eva = $_POST['evaluasiLow1'];
            $Low11eva = "'$Low1eva'";
        } else {
            $Low11eva = 'NULL';
        }
        if (!empty($_POST['evaluasiLow2'])) {
            $Low2eva = $_POST['evaluasiLow2'];
            $Low21eva = "'$Low2eva'";
        } else {
            $Low21eva = 'NULL';
        }
        if (!empty($_POST['evaluasiLow3'])) {
            $Low3eva = $_POST['evaluasiLow3'];
            $Low31eva = "'$Low3eva'";
        } else {
            $Low31eva = 'NULL';
        }
        if (!empty($_POST['evaluasiLow4'])) {
            $Low4eva = $_POST['evaluasiLow4'];
            $Low41eva = "'$Low4eva'";
        } else {
            $Low41eva = 'NULL';
        }
        if (!empty($_POST['evaluasiLow5'])) {
            $Low5eva = $_POST['evaluasiLow5'];
            $Low51eva = "'$Low5eva'";
        } else {
            $Low51eva = 'NULL';
        }
        if (!empty($_POST['evaluasiLow6'])) {
            $Low6eva = $_POST['evaluasiLow6'];
            $Low61eva = "'$Low6eva'";
        } else {
            $Low61eva = 'NULL';
        }
        if (!empty($_POST['evaluasiLow7'])) {
            $Low7eva = $_POST['evaluasiLow7'];
            $Low71eva = "'$Low7eva'";
        } else {
            $Low71eva = 'NULL';
        }
        //KOLABORASI
        if (!empty($_POST['implementasiLow8'])) {
            $Low8 = $_POST['implementasiLow8'];
            $Low81 = "'$Low8'";
        } else {
            $Low81 = 'NULL';
        }
        if (!empty($_POST['evaluasiLowd8'])) {
            $Low8eva = $_POST['evaluasiLowd8'];
            $Low81eva = "'$Low8eva'";
        } else {
            $Low81eva = 'NULL';
        }

        $codeX = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM data_pasien where nrpID = '$nrpID'"));
        $usia = $codeX['usia'];
        $hariUsia = $codeX['hariUsia'];

        $koneksi=mysqli_connect($server,$username,$password,$database) 
        or die ("koneksi gagal");

            if(isset($nrpID)){
                
                // echo "INSERT INTO data_intervensi (nrpID, skalaNyeri, waktu, ruangan, perawat, imp1, eva1, imp2, eva2, imp3, eva3, imp4, eva4, imp5, eva5, imp6, eva6, imp7, eva7, imp8, eva8, kolimv1, koleva1, kolimv2, koleva2) VALUES ('$nrpID', '$skalaNyeri', NOW(), '$planEmergency', '$userid', $Low01, $Low01eva, $Low11, $Low11eva, $Low21, $Low21eva, $Low31, $Low31eva, $Low41, $Low41eva, $Low51, $Low51eva, $Low61, $Low61eva, $Low71, $Low71eva,  $Low81, $Low81eva, NULL, NULL)";
                
                $sql1 = mysqli_query($koneksi,"INSERT INTO data_intervensi (nrpID, skalaNyeri, waktu, ruangan, perawat, imp1, eva1, imp2, eva2, imp3, eva3, imp4, eva4, imp5, eva5, imp6, eva6, imp7, eva7, imp8, eva8, kolimv1, koleva1, kolimv2, koleva2) VALUES ('$nrpID', '$skalaNyeri', NOW(), '$planEmergency', '$userid', $Low01, $Low01eva, $Low11, $Low11eva, $Low21, $Low21eva, $Low31, $Low31eva, $Low41, $Low41eva, $Low51, $Low51eva, $Low61, $Low61eva, $Low71, $Low71eva,  $Low81, $Low81eva, NULL, NULL)");
                
                echo ("<script LANGUAGE='JavaScript'> window.alert('Data Sudah Tersimpan'); window.location.href='dataAssesment.php?idedit=$nrpID&age=$usia&days=$hariUsia'; </script>");
                
            }
    }else{
        echo "<script language=\"javascript\">alert(\"Please login\");document.location.href='login.php';</script>";
    }
    mysqli_close($koneksi);
?>