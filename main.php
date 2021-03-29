<?php
    
    include 'koneksi.php';

    $nrmID = $_GET['idedit'];
    $usia = $_GET['age'];
    if(!empty($usia)){
        // echo "berhasil";
        // include 'koneksi.php';
        include "choosePlan.php";
    // }else{
    //     // echo "tidak dewasa";
    //     // include 'koneksi.php';
    //     // include "generalQuestion.php";
    }
?>