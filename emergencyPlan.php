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
    if (!empty($id) && $age >= '7') {
        // include 'emergencyAdult.php';
        include 'generalQuestion.php';
    } elseif (!empty($id) && ($age <= '6' && $age >='4' )) {
        // echo "umurnya <= 7";
        // include 'emergencyKids.php';
        include 'generalQuestionKids.php';
    }elseif (!empty($id) && ($age <= '3' && $age >='1') || ($hariUsia <= '365' && $hariUsia >= '29')) {
        // echo "umurnya <= 3 dan >= 1";
        // include 'emergencyBatita.php';
        include 'generalQuestionBatita.php';
    }elseif (!empty($id) && ($hariUsia <= '28' && $hariUsia >= '1')) {
        // echo "umurnya <= 1 bulan";
        // include 'emergencyBayi.php';
        include 'generalQuestionBayi.php';
    }else {
        echo "Silahkan coba kembali";
    }

?>
