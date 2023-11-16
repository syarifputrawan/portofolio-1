<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbName = "personal_profile";
    // koneksi ke database dari PHP
    $koneksi = mysqli_connect($host, $user, $pass, $dbName) or die (mysqli_error($koneksi));
?>