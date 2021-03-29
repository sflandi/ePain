<?php
    include_once 'koneksi.php';
    date_default_timezone_set('Asia/Jakarta');
    session_start();
    if(isset($_SESSION['username'])){

        $username = $_SESSION['username'];
        $code = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM Tbl_login where username = '$username'"));
        $userid = $code['nama'];

        // $pengkajian1 = array('Epidural','IV','Oral','Suppositoria','Transdermal','Drip','IM');
        // $tes = $_POST['name2'];
        $nrpID = $_POST['nrpID'];
        // $noDetail = $_POST['noDetail'];
        // $q0 = $_POST['question0'];
        $q1 = $_POST['question1'];
        $q2 = $_POST['question2'];
        $q3 = $_POST['question3'];
        $q4 = $_POST['question4'];
        $q5 = $_POST['question5'];
        $q6 = $_POST['question6'];

        // if (!empty($_POST['checkSatu'])) {
        //     $pengkajian11=implode(', ', $_POST['checkSatu']);
        //     $pengkajian1 = $pengkajian11;
        // } else {
        //     $pengkajian1 = 'NULL';
        // }
        // // $pengkajian1=implode(', ', $_POST['checkSatu']);

        // if (!empty($_POST['checkDua'])) {
        //     $checkDua = $_POST['checkDua'];
        //     $check2 = "'$checkDua'";
        // } else {
        //     $check2 = 'NULL';
        // }

        // if (!empty($_POST['checkTiga'])) {
        //     $checkTiga = $_POST['checkTiga'];
        //     $check3 = "'$checkTiga'";
        // } else {
        //     $check3 = 'NULL';
        // }

        // if (!empty($_POST['checkEmpat'])) {
        //     $checkEmpat = $_POST['checkEmpat'];
        //     $check4 = "'$checkEmpat'";
        // } else {
        //     $check4 = 'NULL';
        // }

        // if (!empty($_POST['checkLima'])) {
        //     $checkLima = $_POST['checkLima'];
        //     $check5 = "'$checkLima'";
        // } else {
        //     $check5 = 'NULL';
        // }
        
        if (isset($nrpID)) {
            // echo "INSERT INTO data_pengujian (nrpID, nrp_Details, pengkajian1, pengkajian2, pengkajian3, pengkajian4, pengkajian5, waktu, perawat) VALUES ('$nrpID','$noDetail','$pengkajian1','$check2','$check3','$check4','$check5',NOW(),'$userid')";

            $sql1 = mysqli_query($koneksi,"INSERT INTO data_pertanyaan (nrpID, question1, question2, question3, question4, question5, question6, tanggal, skor, question0, perawat) VALUES ('$nrpID','$q1','$q2','$q3','$q4','$q5','$q6',NOW(), NULL, '$q0', '$userid')");
                
        }
    }else{
        echo "<script language=\"javascript\">alert(\"Please login\");document.location.href='login.php';</script>";
    }
    mysqli_close($koneksi);




?>