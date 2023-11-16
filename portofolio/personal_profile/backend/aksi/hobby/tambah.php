<?php
    session_start();
    include "../../include/koneksi.php";
    if (!isset($_POST)) {
        
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "harus memberikan nilai POST";
        header("location:../../pages/hobby/index.php");
    }

    $id = $_POST['id_hobby'];
    $hobby = $_POST['hobby'];
    $description = $_POST['description'];
    $passFoto = $_FILES['foto']['tmp_name'];
    $namaGambar = rand(111111,999999) . ".png";
    
    $upload = move_uploaded_file($passFoto, "../../images/hobby/$namaGambar");

    $qInsert = "INSERT INTO hobby (id_hobby, hobby, description, foto) VALUES ($id, '$hobby', '$description','$namaGambar')";

    $insert = mysqli_query($koneksi, $qInsert) or die(mysqli_error($koneksi));


    if ($insert) {
        $_SESSION['status'] = 200;
        $_SESSION['message'] = "berhasil menambah data😀😀😀😀";
        header("location:../../pages/hobby/index.php");
    }else {
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "gagal menambah data🙁🙁🙁🙁";
        header("location:../../pages/hobby/index.php");
    }
?>