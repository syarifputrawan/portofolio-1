<?php

    session_start();
    // hapus semua data di sessionnya
    session_destroy();
    // session_start();
    $_SESSION['status'] = 200;
    $_SESSION['message'] = "logout berhasil";

    header("location:../../pages/login.php");


?>