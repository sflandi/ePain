<?php

    include 'koneksi.php';
    $id = $_GET['idedit'];
    $age = $_GET['age'];
    $hariUsia = $_GET['days'];
    $planRawatInap = $_GET['plan'];

    // if (!empty($id)) {
    //     $baby = $age - '4';
    //     echo "berhasil";
    //     echo $baby;
    // }
    // if (!empty($id) && $age >= '7') {
    //     include 'rawatInapAdult.php';
    // } elseif (!empty($id) && ($age <= '6' && $age >='4' )) {
    //     // echo "umurnya <= 7";
    //     include 'rawatInapKids.php';
    // } elseif (!empty($id) && ($age <= '3' && $age >='1') && ($hariUsia <= '365' && $hariUsia >= '29')) {
    //     // echo "umurnya <= 3 dan >= 1";
    //     include 'rawatInapKids.php';
    // }else {
    //     // echo "umurnya <= 1 bulan";
    //     include 'rawatInapBayi.php';
    // }
    
    if (!empty($id) && $age >= '7') {
        // include 'rawatInapAdult.php';
        // include 'rawatInapAdult.php';
        include 'generalQuestionAdultRi.php';
    } elseif (!empty($id) && ($age <= '6' && $age >='4' )) {
        // echo "umurnya <= 7";
        // include 'rawatInapKids.php';
        include 'generalQuestionKidsRi.php';
    }elseif (!empty($id) && ($age <= '3' && $age >='1') || ($hariUsia <= '365' && $hariUsia >= '29')) {
        // echo "umurnya <= 3 dan >= 1";
        // include 'rawatInapBatita.php';
        include 'generalQuestionBatitaRi.php';
    }elseif (!empty($id) && ($hariUsia <= '28' && $hariUsia >= '1')) {
        // echo "umurnya <= 1 bulan";
        // include 'rawatInapBayi.php';
        include 'generalQuestionBayiRi.php';
    }else {
        echo "Silahkan coba kembali";
    }



?>
