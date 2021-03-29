<?php
    include_once 'koneksi.php';

    date_default_timezone_set('Asia/Jakarta');
    session_start();
    if(isset($_SESSION['username'])){

        $userid = $_SESSION['username'];
        $code = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM Tbl_login where username = '$username'"));
        $userid = $code['username'];



        $nrpID = $_POST['nrpID'];
        $planEmergency = $_POST['ruangan'];
        // $value = $_POST[''];
        $satu = $_POST['credit-card'];
        

        $codeX = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM data_pasien where nrpID = '$nrpID'"));
        $usia = $codeX['usia'];
        $hariUsia = $codeX['hariUsia'];

        $koneksi=mysqli_connect($server,$username,$password,$database) 
        or die ("koneksi gagal");

            if(isset($nrpID)){
                
                // echo "INSERT INTO data_plan (nrpID, nrs, fps, flacc, nips, cpot, cfs, ruangan, waktu) VALUES ('$nrpID', NULL, $satu, NULL, NULL, NULL,NULL,'$planEmergency', NOW() )";
                
                $sql1 = mysqli_query($koneksi,"INSERT INTO data_plan (nrpID, nrs, fps, flacc, nips, cpot, cfs, ruangan, waktu) VALUES ('$nrpID', NULL, $satu, NULL, NULL, NULL,NULL,'$planEmergency', NOW() )");
                
                echo ("<script LANGUAGE='JavaScript'> window.alert('Data Sudah Tersimpan'); window.location.href='emergencyKids.php?idedit=$nrpID&age=$usia&days=$hariUsia&plan=$planEmergency'; </script>");
                
            }
    }else{
        echo "<script language=\"javascript\">alert(\"Please login\");document.location.href='login.php';</script>";
    }
    mysqli_close($koneksi);
?>