<?php
    include 'koneksi.php';

    $nrmID = $_GET['idedit'];
    $age = $_GET['age'];
    if(isset($_GET['idedit']) && ($age >= '7')){
        // echo " dewasa";
        include 'koneksi.php';
        //include "generalQuestion.php"; tadinya begini tadi berubah rules
        include "choosePlan.php";
    }else{
        // echo "tidak dewasa";
        // include 'koneksi.php';
        include "choosePlan.php";
    }
?>