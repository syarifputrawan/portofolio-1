<?php
    session_start();
    include "../../includes/koneksi.php";
    if (!isset($_POST)) {
        
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "harus memberikan nilai POST";
        header("location:../../pages/produk/info_produk.php");
    }

    $id_produk = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $harga_produk = $_POST['harga_produk'];
    $deskripsi_produk = $_POST['deskripsi_produk'];
    $kategori = $_POST['kategori'];
    $depan = $_FILES['depan']['tmp_name'];
    $kiri = $_FILES['kiri']['tmp_name'];
    $kanan = $_FILES['kanan']['tmp_name'];
    $belakang = $_FILES['belakang']['tmp_name'];
    $namaGambardepan = rand(111111, 999999) . ".png";
    $namaGambarkiri = rand(111111, 999999) . ".png";
    $namaGambarkanan = rand(111111, 999999) . ".png";
    $namaGambarbelakang = rand(111111, 999999) . ".png";


    // $upload = move_uploaded_file($foto_produk, "../../images/produk/$namaGambar");

    $qInsert = "INSERT INTO produk (id_produk, nama_produk, harga_produk, deskripsi_produk, kategori) VALUES ($id_produk, '$nama_produk', '$harga_produk', '$deskripsi_produk', '$kategori')";
    // die($qInsert);
    $insert = mysqli_query($koneksi, $qInsert) or die(mysqli_error($koneksi));

    

    if ($insert) {
        $uploaddepan = move_uploaded_file($depan, "../../images/produk/$namaGambardepan");
        $uploadkiri = move_uploaded_file($kiri, "../../images/produk/$namaGambarkiri");
        $uploadkanan = move_uploaded_file($kanan, "../../images/produk/$namaGambarkanan");
        $uploadbelakang = move_uploaded_file($belakang, "../../images/produk/$namaGambarbelakang");

        $qInsertgambar = "INSERT INTO kumpulan (id_produk, depan, kiri, kanan, belakang) VALUES ($id_produk, '$namaGambardepan', '$namaGambarkiri', '$namaGambarkanan', '$namaGambarbelakang')";

        mysqli_query($koneksi, $qInsertgambar) or die(mysqli_error($koneksi));

        $_SESSION['status'] = 200;
        $_SESSION['message'] = "berhasil menambah data";
        header("location:../../pages/produk/info_produk.php");
    }else {
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "gagal menambah data";
        header("location:../../pages/produk/info_produk.php");
    }
?>