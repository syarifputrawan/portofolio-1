<?php
    session_start();
    if (!isset($_GET['id_produk'])) {
        
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "tidak ada data pada post";
        header("location:../../pages/produk/info_produk.php");
    }
    

    include "../../includes/koneksi.php";
    $id_produk1 = $_GET['id_produk'];
    
    // mencari data berdasarkan id buku
    $selectBy = "SELECT depan,kiri,kanan,belakang FROM kumpulan WHERE id_produk=$id_produk1";
    $select = mysqli_query($koneksi, $selectBy);
    $oldData = mysqli_fetch_assoc($select);
    // cek apakah gambar ini ada di folder images/
    $pathdepan = "../../images/produk/" . $oldData['depan'];
    $pathkiri = "../../images/produk/" . $oldData['kiri'];
    $pathkanan = "../../images/produk/" . $oldData['kanan'];
    $pathbelakang = "../../images/produk/" . $oldData['belakang'];

    // jika sebelumnya ada gambar lama
    if (file_exists($pathdepan)) {
        // maka hapuskan gambar lama
        unlink($pathdepan);
    }
    if (file_exists($pathkiri)) {
        // maka hapuskan gambar lama
        unlink($pathkiri);
    }
    if (file_exists($pathkanan)) {
        // maka hapuskan gambar lama
        unlink($pathkanan);
    }
    if (file_exists($pathbelakang)) {
        // maka hapuskan gambar lama
        unlink($pathbelakang);
    }

    $qDelete = "DELETE FROM produk WHERE id_produk=$id_produk1";
    $delete = mysqli_query($koneksi, $qDelete) or die(mysqli_error($koneksi));

    // header('location:index.php');
    // jika proses update berhasil
    if ($delete) {
        $qDelete = "DELETE FROM kumpulan WHERE id_produk=$id_produk1";
        mysqli_query($koneksi, $qDelete) or die(mysqli_error($koneksi));
        $_SESSION['status'] = 200;
        $_SESSION['message'] = "hapus data berhasil";
        header("location:../../pages/produk/info_produk.php");
    }else{
    // jika proses insert gagal
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "hapus data gagal";
        header("location:../../pages/produk/info_produk.php");
    }
?>
