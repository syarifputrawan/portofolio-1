<?php
    session_start();
    include "../../include/koneksi.php";
    if (!isset($_POST)) {
        
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "harus memberikan nilai POST";
        header("location:../../pages/about/index.php");
    }

    $id = $_POST['id_about'];
    $about = $_POST['about'];
    $deskripsi_singkat = $_POST['deskripsi_singkat'];
    $nama = $_POST['nama'];
    $pekerjaan = $_POST['pekerjaan'];
    $passFoto = $_FILES['foto']['tmp_name'];
    $namaGambar = rand(111111,999999) . ".png";
    
    $upload = move_uploaded_file($passFoto, "../../images/about/$namaGambar");

    $qInsert = "INSERT INTO about (id_about, about, deskripsi_singkat, nama, pekerjaan, foto) VALUES ($id, '$about','$deskripsi_singkat','$nama','$pekerjaan','$namaGambar')";

    $insert = mysqli_query($koneksi, $qInsert) or die(mysqli_error($koneksi));


    if ($insert) {
        $_SESSION['status'] = 200;
        $_SESSION['message'] = "berhasil menambah data😀😀😀😀";
        header("location:../../pages/about/index.php");
    }else {
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "gagal menambah data🙁🙁🙁🙁";
        header("location:../../pages/about/index.php");
    }
?>