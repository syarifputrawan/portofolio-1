<?php
    session_start();
    include "../../include/koneksi.php";
    if (!isset($_POST)) {
        
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "harus memberikan nilai POST";
        header("location:../../pages/achivement/index.php");
    }

   
    // $title = $_POST['title'];
    $achivement = $_POST['achivement'];
    $passFoto = $_FILES['foto']['tmp_name'];
    $namaGambar = rand(111111,999999) . ".png";
    
    $upload = move_uploaded_file($passFoto, "../../images/achivement/$namaGambar");

    $qInsert = "INSERT INTO achivement ( achivement, foto) VALUES ( '$achivement', '$namaGambar')";

    $insert = mysqli_query($koneksi, $qInsert) or die(mysqli_error($koneksi));


    if ($insert) {
        $_SESSION['status'] = 200;
        $_SESSION['message'] = "berhasil menambah data😀😀😀😀";
        header("location:../../pages/achivement/index.php");
    }else {
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "gagal menambah data🙁🙁🙁🙁";
        header("location:../../pages/achivement/index.php");
    }
?>