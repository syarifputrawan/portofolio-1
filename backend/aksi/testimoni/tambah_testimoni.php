<?php
    session_start();
    include "../../includes/koneksi.php";
    if (!isset($_POST)) {
        
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "harus memberikan nilai POST";
        header("location:../../pages/testimoni/info_testimoni.php");
    }

    $nama_testimoni = $_POST['nama'];
    $asal_testimoni = $_POST['asal'];
    $pesan_testimoni = $_POST['pesan'];
    

    $qInsert = "INSERT INTO testimoni ( nama, asal, pesan) VALUES ('$nama_testimoni', '$asal_testimoni', '$pesan_testimoni')";
    // die($qInsert);
    $insert = mysqli_query($koneksi, $qInsert) or die(mysqli_error($koneksi));


    if ($insert) {
        $_SESSION['status'] = 200;
        $_SESSION['message'] = "berhasil menambah data";
        header("location:../../pages/testimoni/info_testimoni.php");
    }else {
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "gagal menambah data";
        header("location:../../pages/testimoni/info_testimoni.php");
    }
?>