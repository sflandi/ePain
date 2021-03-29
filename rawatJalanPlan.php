<?php

    include 'koneksi.php';
    $id = $_GET['idedit'];
    $age = $_GET['age'];
    $hariUsia = $_GET['days'];
    $planRawatJalan = $_GET['plan'];

    // if (!empty($id)) {
    //     $baby = $age - '4';
    //     echo "berhasil";
    //     echo $baby;
    // }
    // if (!empty($id) && $age >= '7') {
    //     include 'rawatJalanAdult.php';
    // } elseif (!empty($id) && ($age <= '6' && $age >='4' )) {
    //     // echo "umurnya <= 7";
    //     include 'rawatJalanKids.php';
    // }elseif (!empty($id) && ($age <= '3' && $age >='1') && ($hariUsia <= '365' && $hariUsia >= '29')) {
    //     // echo "umurnya <= 3 dan >= 1";
    //     include 'rawatJalanBatita.php';
    // }else {
    //     // echo "umurnya <= 1 bulan";
    //     include 'rawatJalanBayi.php';
    // }

    if (!empty($id) && $age >= '7') {
        // include 'rawatJalanAdult.php';
        // include 'rawatJalanAdult.php';
        include 'generalQuestionAdultRj.php';
    } elseif (!empty($id) && ($age <= '6' && $age >='4' )) {
        // echo "umurnya <= 7";
        // include 'rawatJalanKids.php';
        include 'generalQuestionKidsRj.php';
    }elseif (!empty($id) && ($age <= '3' && $age >='1') || ($hariUsia <= '365' && $hariUsia >= '29')) {
        // echo "umurnya <= 3 dan >= 1";
        // include 'rawatJalanBatita.php';
        include 'generalQuestionBatitaRj.php';
    }elseif (!empty($id) && ($hariUsia <= '28' && $hariUsia >= '1')) {
        // echo "umurnya <= 1 bulan";
        // include 'rawatJalanBayi.php';
        include 'generalQuestionBayiRj.php';
    }else {
        echo "Silahkan coba kembali";
    }

    



?>
