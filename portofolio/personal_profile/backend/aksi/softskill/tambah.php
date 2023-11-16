<?php
    session_start();
    include "../../include/koneksi.php";
    if (!isset($_POST)) {
        
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "harus memberikan nilai POST";
        header("location:../../pages/softskill/index.php");
    }

    $id = rand(11111,99999);
    $title = $_POST['title'];
    $persen = $_POST['persen'];
    

    $qInsert = "INSERT INTO softskill (id_softskill, title, persen) VALUES ($id, '$title', '$persen')";

    $insert = mysqli_query($koneksi, $qInsert) or die(mysqli_error($koneksi));


    if ($insert) {
        $_SESSION['status'] = 200;
        $_SESSION['message'] = "berhasil menambah data😀😀😀😀";
        header("location:../../pages/softskill/index.php");
    }else {
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "gagal menambah data🙁🙁🙁🙁";
        header("location:../../pages/softskill/index.php");
    }
?>