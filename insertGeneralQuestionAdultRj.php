<?php
    include_once 'koneksi.php';
    // include_once 'autoNumber.php';

    date_default_timezone_set('Asia/Jakarta');
    session_start();
    if(isset($_SESSION['username'])){

        $userid1 = $_SESSION['username'];
        $code = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM Tbl_login where username = '$userid1'"));
        $userid = $code['nama'];



        $nrpID = $_POST['nrpID'];
        
        $q0 = $_POST['question0'];
        $q1 = $_POST['question1'];
        $q2 = $_POST['question2'];
        $q3 = $_POST['question3'];
        $q4 = $_POST['question4'];
        $q5 = $_POST['question5'];
        $q6 = $_POST['question6'];

        $codeX = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM data_pasien where nrpID = '$nrpID'"));
        $usia = $codeX['usia'];
        $hariUsia = $codeX['hariUsia'];

        $koneksi=mysqli_connect($server,$username,$password,$database) 
        or die ("koneksi gagal");

        // $dbhandle = mysqli_connect("$host", "$User", "$Pass")
        // or die("Couldn't connect to SQL Server on $host");

        // $selected = mysqli_select_db($myDB, $dbhandle);
            // if(isset($format)){
            if(isset($nrpID)){
                
                // echo "INSERT INTO data_pertanyaan (nrpID, question1, question2, question3, question4, question5, question6, tanggal, skor) VALUES ('$nrpID','$q1','$q2','$q3','$q4','$q5','$q6',NOW(), NULL)";
                
                $sql1 = mysqli_query($koneksi,"INSERT INTO data_pertanyaan (nrpID, question1, question2, question3, question4, question5, question6, tanggal, skor, question0, perawat) VALUES ('$nrpID','$q1','$q2','$q3','$q4','$q5','$q6',NOW(), NULL, '$q0', '$userid')");
                
                echo ("<script LANGUAGE='JavaScript'> window.alert('Data Sudah Tersimpan'); window.location.href='rawatJalanAdult.php?idedit=$nrpID&age=$usia&days=$hariUsia&plan=rawatJalan'; </script>");
                
            }
    }else{
        echo "<script language=\"javascript\">alert(\"Please login\");document.location.href='login.php';</script>";
    }
    mysqli_close($koneksi);
?>