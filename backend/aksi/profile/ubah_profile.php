<?php
    session_start();
    if (!isset($_POST)) {
        // maka pindah ke halaman sebelumnya
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "Tidak ada data POST!";
        header("location:../../pages/profile/form_ubah_profile.php");
    }
    if (!isset($_GET['id'])) {
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "Harap sisipkan ID";
        header("location:../../pages/profile/form_ubah_profile.php");
    }


    include "../../includes/koneksi.php";

    $id = $_GET['id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // rancang querynya
    $qUpdate = "UPDATE kontak SET name='$name', username='$username', password='$password', WHERE id='$id'";
    $update = mysqli_query($koneksi, $qUpdate) or die(mysqli_error($koneksi));

    if ($update) {
        $_SESSION['status'] = 200;
        $_SESSION['message'] = "Ubah kontak berhasil!";
        header('location:../../pages/profile/form_ubah_profile.php');
    }else {
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "Ubah kontak gagal!";
        header('location:../../pages/profile/form_ubah_profile.php');
    }


?>