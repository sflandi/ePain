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
        $value1 = $_POST['skalaCpot'];
        $value2 = $_POST['skalaGt'];
        $value3 = $_POST['skalaMode'];
        $value4 = $_POST['skalaOtot'];
        // $value5 = $_POST['skorCons'];

        $value = $value1 + $value2 + $value3 + $value4;
            
        

        $codeX = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM data_pasien where nrpID = '$nrpID'"));
        $usia = $codeX['usia'];
        $hariUsia = $codeX['hariUsia'];

        $koneksi=mysqli_connect($server,$username,$password,$database) 
        or die ("koneksi gagal");

            if(isset($nrpID)){
                
                // echo "INSERT INTO data_plan (nrpID, nrs, fps, flacc, nips, cpot, cfs, ruangan, waktu) VALUES ('$nrpID', NULL, NULL, NULL, NULL, $value, NULL,'$planEmergency',NOW())";
                
                $sql1 = mysqli_query($koneksi,"INSERT INTO data_plan (nrpID, nrs, fps, flacc, nips, cpot, cfs, ruangan, waktu) VALUES ('$nrpID', NULL ,NULL, NULL, NULL, $value, NULL,'$planEmergency',NOW())");
                
                echo ("<script LANGUAGE='JavaScript'> window.alert('Data Sudah Tersimpan'); window.location.href='emergencyBayi.php?idedit=$nrpID&age=$usia&days=$hariUsia'; </script>");
                
            }
    }else{
        echo "<script language=\"javascript\">alert(\"Please login\");document.location.href='login.php';</script>";
    }
    mysqli_close($koneksi);
?>