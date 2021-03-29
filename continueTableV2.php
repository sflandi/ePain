<?php

    include 'koneksi.php';
    $id = $_GET['idedit'];
    $age = $_GET['age'];
    $hariUsia = $_GET['days'];
    $planEmergency = $_GET['plan'];
    

    // if (!empty($id)) {
    //     $baby = $age - '4';
    //     echo "berhasil";
    //     echo $baby;
    // }
    // $query = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM data_plan WHERE nrpID = '$id' "));
    $query = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM `data_plan` WHERE nrpID = '$id'  order by waktu DESC limit 1 "));
    // $namaPasien=strtoupper($query['nama']);
    $skorFPS = $query['fps'];
    $skorCPOT = $query['cpot'];

    if (!empty($id) && $skorFPS >= '7') {
        include 'tableHeavy.php';
    } elseif (!empty($id) && ($skorFPS <= '6' && $skorFPS >='4' )) {
        include 'tableMedium.php';
    }elseif (!empty($id) && ($skorFPS <= '3' && $skorFPS >='0' )){
        include 'tableLow.php';
    
    } elseif (!empty($id) && ($skorFPS == NULL || empty($skorFPS) )) {
        if (!empty($id) && $skorCPOT >= '6') {
            include 'tableHeavy.php';
        } elseif (!empty($id) && ($skorCPOT <= '5' && $skorCPOT >='3' )){
            include 'tableMedium.php';
        }elseif (!empty($id) && ($skorCPOT <= '2' && $skorCPOT >='0' )) {
            include 'tableLow.php';
        }else {
            echo "Silahkan Coba Lagi & Pastikan Data Terisi";
        }
        
    }else {
        echo "Silahkan Coba Lagi & Pastikan Data Terisi";
    }
    


    // if (!empty($id) && $age >= '7') {
    //     // include 'emergencyAdult.php';
    // } elseif (!empty($id) && ($age <= '6' && $age >='4' )) {
    //     // echo "umurnya <= 7";
    //     include 'emergencyKids.php';
    // }elseif (!empty($id) && ($age <= '3' && $age >='1') || ($hariUsia <= '365' && $hariUsia >= '29')) {
    //     // echo "umurnya <= 3 dan >= 1";
    //     include 'emergencyBatita.php';
    // }elseif (!empty($id) && ($hariUsia <= '28' && $hariUsia >= '1')) {
    //     // echo "umurnya <= 1 bulan";
    //     include 'emergencyBayi.php';
    // }else {
    //     echo "Silahkan coba kembali";
    // }

?>