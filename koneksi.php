<?php
    $open=mysqli_connect("localhost:3306", "root", "");
    if (!$open){
        die("koneksi ke engine mysql gagal");
    }
    $koneksi=mysqli_select_db($open, "data_karyawan");
    if(!$koneksi){
        die("koneksi ke database gagal");
    }
?>