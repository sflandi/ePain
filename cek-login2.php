<?php

include "koneksi.php";

if (isset ($_POST ['login'])) {
	$username =  ($_POST ['username']);
	$password =  ($_POST ['password']);
        
        $data = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM Tbl_login WHERE username='$username' AND password='$password'"));
        $cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM Tbl_login WHERE username='$username' AND password='$password'"));
        
    if($cek > 0){
        session_start();
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];
		// redirect ke index.php
		// header('location: home.php');
		echo "<script language=\"javascript\">document.location.href='formEmanagement.php';</script>";
	}else{
		echo "<script language=\"javascript\">alert(\"Invalid username or password\");document.location.href='index.php';</script>";
	}
}
?>
