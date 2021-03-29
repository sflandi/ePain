<?php

        $satu = $_POST['credit-card'];
        // $dua = $_POST['credit-card2'];


        // $dbhandle = mysqli_connect("$host", "$User", "$Pass")
        // or die("Couldn't connect to SQL Server on $host");

        // $selected = mysqli_select_db($myDB, $dbhandle);
            // if(isset($format)){
            if(isset($satu)){
                echo "INSERT INTO data_pasien (tgl_berobat, ktp, nrpID, nama, jenis_kelamin, alamat, tgl_lahir, usia,kategori, riwayat_penyakit, solusi) VALUES ('$satu')";
                // echo "insert into tblProspect values('$format',GETDATE(),'$nama','$no_telp','$userid',GETDATE(),'$userid',GETDATE(),'$userid','$status',NULL,NULL)";
                // echo "insert into tblDetailsProspect values('$format','$format2',NULL,GETDATE(),'$userid',GETDATE(),'$userid',NULL,NULL,NULL,NULL,NULL,'$area',NULL)";
                // $sql1 = mysqli_query($koneksi,"INSERT INTO data_pasien (tgl_berobat, ktp, nrpID, nama, jenis_kelamin, alamat, tgl_lahir, usia,kategori, riwayat_penyakit, solusi, hariUsia) VALUES (NOW(),'$noKTP','$noNrp','$name','$gender','$address','$birth','$age',NULL,NULL,NULL,'$hariUsia')");
                // $sql2 = mssql_query("insert into tblDetailsProspect values('$format','$format2',NULL,GETDATE(),'$userid',GETDATE(),'$userid',NULL,NULL,NULL,NULL,NULL,'$area',NULL)");
                
                // echo ("<script LANGUAGE='JavaScript'> window.alert('Data Sudah Tersimpan'); window.location.href='formAdmission.php'; </script>");
                // echo ("<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>");
                // echo ("<script>function sweet() {swal('Good job!', 'You clicked the button!', 'success');}</script>");
                
            }
?>