<?php
    include_once 'koneksi.php';
    include_once 'autoNumber.php';

    date_default_timezone_set('Asia/Jakarta');
    session_start();
    if(isset($_SESSION['username'])){

        $userid = $_SESSION['username'];
        $code = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM Tbl_loginAdmin where username = '$username'"));
        $userid = $code['username'];

        $noNrp = $_POST['noNrp'];
        $noKTP = $_POST['noKTP'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $gender = $_POST['gridRadios'];
        $birth = $_POST['tglLahir'];
        $age = $_POST['age'];
        $hariUsia = $_POST['bulan'];

        $koneksi=mysqli_connect($server,$username,$password,$database) 
        or die ("koneksi gagal");

        // $dbhandle = mysqli_connect("$host", "$User", "$Pass")
        // or die("Couldn't connect to SQL Server on $host");

        // $selected = mysqli_select_db($myDB, $dbhandle);
            // if(isset($format)){
            if(isset($noNrp)){
                // echo "INSERT INTO data_pasien (tgl_berobat, ktp, nrpID, nama, jenis_kelamin, alamat, tgl_lahir, usia,kategori, riwayat_penyakit, solusi) VALUES (NOW(),'$noKTP','$format','$name','$gender','$address','$birth','$age',NULL,NULL,NULL)";
                // echo "insert into tblProspect values('$format',GETDATE(),'$nama','$no_telp','$userid',GETDATE(),'$userid',GETDATE(),'$userid','$status',NULL,NULL)";
                // echo "insert into tblDetailsProspect values('$format','$format2',NULL,GETDATE(),'$userid',GETDATE(),'$userid',NULL,NULL,NULL,NULL,NULL,'$area',NULL)";
                $sql1 = mysqli_query($koneksi,"INSERT INTO data_pasien (tgl_berobat, ktp, nrpID, nama, jenis_kelamin, alamat, tgl_lahir, usia,kategori, riwayat_penyakit, solusi, hariUsia) VALUES (NOW(),'$noKTP','$noNrp','$name','$gender','$address','$birth','$age',NULL,NULL,NULL,'$hariUsia')");
                // $sql2 = mssql_query("insert into tblDetailsProspect values('$format','$format2',NULL,GETDATE(),'$userid',GETDATE(),'$userid',NULL,NULL,NULL,NULL,NULL,'$area',NULL)");
                
                echo ("<script LANGUAGE='JavaScript'> window.alert('Data Sudah Tersimpan'); window.location.href='formAdmission.php'; </script>");
                // echo ("<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>");
                // echo ("<script>function sweet() {swal('Good job!', 'You clicked the button!', 'success');}</script>");
                
            }
    }else{
        echo "<script language=\"javascript\">alert(\"Please login\");document.location.href='loginAdmission.php';</script>";
    }
    mysqli_close($koneksi);
?>