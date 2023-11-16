<?php
    session_start();
    if (!isset($_POST)) {
        // maka pindah ke halaman sebelumnya
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "Tidak ada data POST!";
        header("location:../../pages/kontak/index.php");
    }
    if (!isset($_GET['id'])) {
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "Harap sisipkan ID";
        header("location:../../pages/kontak/index.php");
    }


    include "../../includes/koneksi.php";

    $id = $_GET['id'];
    $icon = $_POST['icon'];
    $tipeKontak = $_POST['tipe_kontak'];
    $isi = $_POST['isi'];
    $linkURL = $_POST['link_url'];

    // rancang querynya
    $qUpdate = "UPDATE kontak SET icon='$icon', tipe_kontak='$tipeKontak', isi='$isi', link_url='$linkURL' WHERE id='$id'";
    $update = mysqli_query($koneksi, $qUpdate) or die(mysqli_error($koneksi));

    if ($update) {
        $_SESSION['status'] = 200;
        $_SESSION['message'] = "Ubah kontak berhasil!";
        header('location:../../pages/kontak/index.php');
    }else {
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "Ubah kontak gagal!";
        header('location:../../pages/kontak/index.php');
    }


?>