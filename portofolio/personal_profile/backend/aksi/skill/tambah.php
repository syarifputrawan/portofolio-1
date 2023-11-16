<?php
    session_start();
    include "../../include/koneksi.php";
    if (!isset($_POST)) {
        
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "harus memberikan nilai POST";
        header("location:../../pages/skill/index.php");
    }

    $id = $_POST['id_skill'];
    $skill = $_POST['skill'];
    $persen = $_POST['persen'];
    $passFoto = $_FILES['foto']['tmp_name'];
    $namaGambar = rand(111111,999999) . ".png";
    
    $upload = move_uploaded_file($passFoto, "../../images/skill/$namaGambar");

    $qInsert = "INSERT INTO skill (id_skill, skill, persen, foto) VALUES ($id, '$skill','$persen', '$namaGambar')";

    $insert = mysqli_query($koneksi, $qInsert) or die(mysqli_error($koneksi));


    if ($insert) {
        $_SESSION['status'] = 200;
        $_SESSION['message'] = "berhasil menambah data😀😀😀😀";
        header("location:../../pages/skill/index.php");
    }else {
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "gagal menambah data🙁🙁🙁🙁";
        header("location:../../pages/skill/index.php");
    }
?>