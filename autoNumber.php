<?php
date_default_timezone_set('Asia/Jakarta');
$server='localhost';
$username="root";
$password="";
$database="epain";

$koneksi = mysqli_connect($server,$username,$password,$database) 
or die ("koneksi gagal");

      
        $sql = mysqli_query($koneksi, "select nrp_Details from data_history order by nrp_Details desc LIMIT 1");
        $ePain = mysqli_fetch_array($sql);
        $ID = $ePain['nrp_Details'];
        

        $urut = substr($ID, 16,5);
        $tambah = (int) $urut + 1;
        $bln = date("m");
        $thn = date("y");

        if(strlen($tambah) == 1){
            $format = "JK"."-"."EPAIN"."-".$thn."-".$bln."-"."0000".$tambah;//JK-EPAIN-19-11-0000
        }else if(strlen($tambah) == 2){
            $format = "JK"."-"."EPAIN"."-".$thn."-".$bln."-"."000".$tambah;
        }else if(strlen($tambah) == 3){
            $format = "JK"."-"."EPAIN"."-".$thn."-".$bln."-"."00".$tambah;
        }else if(strlen($tambah) == 4){
            $format = "JK"."-"."EPAIN"."-".$thn."-".$bln."-"."0".$tambah;
        }else{
            $format = "JK"."-"."EPAIN"."-".$thn."-".$bln."-".$tambah;
        }
    ?>