<?php
    include_once 'koneksi.php';
    include 'autoNumber.php';

    date_default_timezone_set('Asia/Jakarta');
    session_start();
    if(isset($_SESSION['username'])){

        $userid = $_SESSION['username'];
        $code = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM Tbl_login where username = '$username'"));
        $userid = $code['username'];


        $namaPasien = $_POST['namaPasien'];
        $nrpID = $_POST['nrpID2'];
        $noKtp = $_POST['noKtp'];
        $alamat = $_POST['alamat'];
        $gender = $_POST['gender'];
        $tglLahir = $_POST['tglLahir'];
        $usia = $_POST['usia'];
        $skorPain = $_POST['skor'];
        $ruangan = $_POST['ruangan'];
        $tglBerobat = $_POST['tglBerobat'];
        $tingkatPenyakit = $_POST['class'];
        $perawat = $_POST['perawat'];
        

        $codeX = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM data_pasien where nrpID = '$nrpID'"));
        $usia = $codeX['usia'];
        $hariUsia = $codeX['hariUsia'];

        $koneksi=mysqli_connect($server,$username,$password,$database) 
        or die ("koneksi gagal");

            if(isset($format)){
                
                // echo "INSERT INTO data_history (nrpID, nrp_Details, noKtp, alamat, gender, tglLahir, usia, skorPain, ruangan, tglBerobat, tingkatPenyakit, namaPasien) VALUES ('$nrpID', '$format', '$noKtp', '$alamat', '$gender', '$tglLahir', '$usia', '$skorPain', '$ruangan', '$tglBerobat', '$tingkatPenyakit', '$namaPasien')";
                
                $sql1 = mysqli_query($koneksi,"INSERT INTO data_history (nrpID, nrp_Details, noKtp, alamat, gender, tglLahir, usia, skorPain, ruangan, tglBerobat, tingkatPenyakit, namaPasien, perawat) VALUES ('$nrpID', '$format', '$noKtp', '$alamat', '$gender', '$tglLahir', '$usia', '$skorPain', '$ruangan', '$tglBerobat', '$tingkatPenyakit', '$namaPasien', '$perawat')");
                
                // echo ("<script LANGUAGE='JavaScript'> window.alert('Data Sudah Tersimpan'); window.location.href='emergencyAdult.php?idedit=$nrpID&age=$usia&days=$hariUsia'; </script>");
                echo ("<script LANGUAGE='JavaScript'> window.alert('Data Sudah Tersimpan'); window.location.href='formDetailsPatient.php?idedit=$nrpID'; </script>");
                
            }
    }else{
        echo "<script language=\"javascript\">alert(\"Please login\");document.location.href='login.php';</script>";
    }
    mysqli_close($koneksi);
?>