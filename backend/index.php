<?php
    session_start();

    // cek apkah id tidak ada tau username tidak ada di dalam session
        if (!isset($_SESSION['id']) || !isset($_SESSION['username'])) {
    // maka pindah ke halaman selanjutnya  
            header("location:pages/login.php");
        } else {
            header('location:pages/about/info_perusahaan.php');
        }
    ?>
