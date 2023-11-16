<?php
    session_start();
    include "../../include/koneksi.php";
    if (!isset($_POST)) {
        
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "harus memberikan nilai POST";
        header("location:../../pages/blog/index.php");
    }

    
    $blog = $_POST['blog'];
    $description = $_POST['description'];
    $passFoto = $_FILES['foto']['tmp_name'];
    $namaGambar = rand(111111,999999) . ".png";
    $tanggal_post = $_POST['tanggal_post'];
    
    $upload = move_uploaded_file($passFoto, "../../images/blog/$namaGambar");

    $qInsert = "INSERT INTO blog ( blog, description, foto, tanggal_post) VALUES ( '$blog', '$description', '$namaGambar', '$tanggal_post')";

    $insert = mysqli_query($koneksi, $qInsert) or die(mysqli_error($koneksi));


    if ($insert) {
        $_SESSION['status'] = 200;
        $_SESSION['message'] = "berhasil menambah data😀😀😀😀";
        header("location:../../pages/blog/index.php");
    }else {
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "gagal menambah data🙁🙁🙁🙁";
        header("location:../../pages/blog/index.php");
    }
?>