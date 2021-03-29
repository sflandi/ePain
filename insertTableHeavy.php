<?php
    include_once 'koneksi.php';

    date_default_timezone_set('Asia/Jakarta');
    session_start();
    if(isset($_SESSION['username'])){

        $userid1 = $_SESSION['username'];
        $code = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM Tbl_login where username = '$userid1'"));
        $userid = $code['nama'];



        $nrpID = $_POST['nrpID'];
        $planEmergency = $_POST['ruangan'];
        // $Heavy0 = $_POST['implementasiHeavy0'];
        // $Heavy1 = $_POST['implementasiHeavy1'];
        // $Heavy2 = $_POST['implementasiHeavy2'];
        // $Heavy3 = $_POST['implementasiHeavy3'];
        // $Heavy4 = $_POST['implementasiHeavy4'];
        // $Heavy5 = $_POST['implementasiHeavy5'];
        // $Heavy6 = $_POST['implementasiHeavy6'];
        // $Heavy7 = $_POST['implementasiHeavy7'];
        $skalaNyeri =$_POST['skalaNyeri'];


        if (!empty($_POST['implementasiHeavy0'])) {
            $Heavy0 = $_POST['implementasiHeavy0'];
            $Heavy01 = "'$Heavy0'";
        } else {
            $Heavy01 = 'NULL';
        }

        if (!empty($_POST['implementasiHeavy1'])) {
            $Heavy1 = $_POST['implementasiHeavy1'];
            $Heavy11 = "'$Heavy1'";
        } else {
            $Heavy11 = 'NULL';
        }
        if (!empty($_POST['implementasiHeavy2'])) {
            $Heavy2 = $_POST['implementasiHeavy2'];
            $Heavy21 = "'$Heavy2'";
        } else {
            $Heavy21 = 'NULL';
        }
        if (!empty($_POST['implementasiHeavy3'])) {
            $Heavy3 = $_POST['implementasiHeavy3'];
            $Heavy31 = "'$Heavy3'";
        } else {
            $Heavy31 = 'NULL';
        }
        if (!empty($_POST['implementasiHeavy4'])) {
            $Heavy4 = $_POST['implementasiHeavy4'];
            $Heavy41 = "'$Heavy4'";
        } else {
            $Heavy41 = 'NULL';
        }

        if (!empty($_POST['implementasiHeavy5'])) {
            $Heavy5 = $_POST['implementasiHeavy5'];
            $Heavy51 = "'$Heavy5'";
        } else {
            $Heavy51 = 'NULL';
        }
        if (!empty($_POST['implementasiHeavy6'])) {
            $Heavy6 = $_POST['implementasiHeavy6'];
            $Heavy61 = "'$Heavy6'";
        } else {
            $Heavy61 = 'NULL';
        }
        if (!empty($_POST['implementasiHeavy7'])) {
            $Heavy7 = $_POST['implementasiHeavy7'];
            $Heavy71 = "'$Heavy7'";
        } else {
            $Heavy71 = 'NULL';
        }




        if (!empty($_POST['evaluasiHeavy0'])) {
            $Heavy0eva = $_POST['evaluasiHeavy0'];
            $Heavy01eva = "'$Heavy0eva'";
        } else {
            $Heavy01eva = 'NULL';
        }

        if (!empty($_POST['evaluasiHeavy1'])) {
            $Heavy1eva = $_POST['evaluasiHeavy1'];
            $Heavy11eva = "'$Heavy1eva'";
        } else {
            $Heavy11eva = 'NULL';
        }
        if (!empty($_POST['evaluasiHeavy2'])) {
            $Heavy2eva = $_POST['evaluasiHeavy2'];
            $Heavy21eva = "'$Heavy2eva'";
        } else {
            $Heavy21eva = 'NULL';
        }
        if (!empty($_POST['evaluasiHeavy3'])) {
            $Heavy3eva = $_POST['evaluasiHeavy3'];
            $Heavy31eva = "'$Heavy3eva'";
        } else {
            $Heavy31eva = 'NULL';
        }
        if (!empty($_POST['evaluasiHeavy4'])) {
            $Heavy4eva = $_POST['evaluasiHeavy4'];
            $Heavy41eva = "'$Heavy4eva'";
        } else {
            $Heavy41eva = 'NULL';
        }
        if (!empty($_POST['evaluasiHeavy5'])) {
            $Heavy5eva = $_POST['evaluasiHeavy5'];
            $Heavy51eva = "'$Heavy5eva'";
        } else {
            $Heavy51eva = 'NULL';
        }
        if (!empty($_POST['evaluasiHeavy6'])) {
            $Heavy6eva = $_POST['evaluasiHeavy6'];
            $Heavy61eva = "'$Heavy6eva'";
        } else {
            $Heavy61eva = 'NULL';
        }
        if (!empty($_POST['evaluasiHeavy7'])) {
            $Heavy7eva = $_POST['evaluasiHeavy7'];
            $Heavy71eva = "'$Heavy7eva'";
        } else {
            $Heavy71eva = 'NULL';
        }

        //KOLAORASI
        if (!empty($_POST['implementasiHeavy8'])) {
            $Heavy8 = $_POST['implementasiHeavy8'];
            $Heavy81 = "'$Heavy8'";
        } else {
            $Heavy81 = 'NULL';
        }
        if (!empty($_POST['evaluasiHeavy8'])) {
            $Heavy8eva = $_POST['evaluasiHeavy8'];
            $Heavy81eva = "'$Heavy8eva'";
        } else {
            $Heavy81eva = 'NULL';
        }
        if (!empty($_POST['implementasiHeavy9'])) {
            $Heavy9 = $_POST['implementasiHeavy9'];
            $Heavy91 = "'$Heavy9'";
        } else {
            $Heavy91 = 'NULL';
        }
        if (!empty($_POST['evaluasiHeavy9'])) {
            $Heavy9eva = $_POST['evaluasiHeavy9'];
            $Heavy91eva = "'$Heavy9eva'";
        } else {
            $Heavy91eva = 'NULL';
        }
        

        $codeX = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM data_pasien where nrpID = '$nrpID'"));
        $usia = $codeX['usia'];
        $hariUsia = $codeX['hariUsia'];

        $koneksi=mysqli_connect($server,$username,$password,$database) 
        or die ("koneksi gagal");

            if(isset($nrpID)){
                
                // echo "INSERT INTO data_intervensi (nrpID, skalaNyeri, waktu, ruangan, perawat, imp1, eva1, imp2, eva2, imp3, eva3, imp4, eva4, imp5, eva5, imp6, eva6, imp7, eva7, imp8, eva8, kolimv1, koleva1, kolimv2, koleva2) VALUES ('$nrpID', '$skalaNyeri', NOW(), '$planEmergency', '$userid', $Heavy01, $Heavy01eva, $Heavy11, $Heavy11eva, $Heavy21, $Heavy21eva, $Heavy31, $Heavy31eva, $Heavy41, $Heavy41eva, $Heavy51, $Heavy51eva, $Heavy61, $Heavy61eva, $Heavy71, $Heavy71eva,  $Heavy81, $Heavy81eva, $Heavy91, $Heavy91eva)";
                
                $sql1 = mysqli_query($koneksi,"INSERT INTO data_intervensi (nrpID, skalaNyeri, waktu, ruangan, perawat, imp1, eva1, imp2, eva2, imp3, eva3, imp4, eva4, imp5, eva5, imp6, eva6, imp7, eva7, imp8, eva8, kolimv1, koleva1, kolimv2, koleva2) VALUES ('$nrpID', '$skalaNyeri', NOW(), '$planEmergency', '$userid', $Heavy01, $Heavy01eva, $Heavy11, $Heavy11eva, $Heavy21, $Heavy21eva, $Heavy31, $Heavy31eva, $Heavy41, $Heavy41eva, $Heavy51, $Heavy51eva, $Heavy61, $Heavy61eva, $Heavy71, $Heavy71eva,  $Heavy81, $Heavy81eva, $Heavy91, $Heavy91eva)");
                
                echo ("<script LANGUAGE='JavaScript'> window.alert('Data Sudah Tersimpan'); window.location.href='dataAssesment.php?idedit=$nrpID&age=$usia&days=$hariUsia'; </script>");
                
            }
    }else{
        echo "<script language=\"javascript\">alert(\"Please login\");document.location.href='login.php';</script>";
    }
    mysqli_close($koneksi);
?>