<?php
    include 'koneksi.php';
    
    $id = $_GET['idedit'];
    // if (!empty($id)) {
        if(isset($_GET['idedit'])){
        $data = "select * from data_pasien where nrpID = '$id'";

        $exec =mysqli_query($koneksi, $data);
        while ($execData = mysqli_fetch_array($exec)){
            $nrpID = $execData['nrpID'];
            $namaPasien = $execData['nama'];
            $ktp = $execData['ktp'];
            $alamat = $execData['alamat'];
            $gender = $execData['jenis_kelamin'];
            $usia = $execData['usia'];
            // $tglLahir = date_create($execData['tgl_lahir']);
            $hariUsia = $execData['hariUsia'];
            
        }
    }
?>
