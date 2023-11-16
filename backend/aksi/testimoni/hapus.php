<?php
    session_start();
    if (!isset($_GET['id_testimoni'])) {
        
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "tidak ada data pada post";
        header("location:../../pages/testimoni/info_testimoni.php");
    }
    

    include "../../includes/koneksi.php";
    $id_testimoni1 = $_GET['id_testimoni'];
    
    // mencari data berdasarkan id buku
    $selectBy = "SELECT foto FROM testimoni WHERE id_testimoni=$id_testimoni1";
    $select = mysqli_query($koneksi, $selectBy);
    $oldData = mysqli_fetch_assoc($select);
    // cek apakah gambar ini ada di folder images/
    $path = "../../images/testimoni" . $oldData['foto'];

    // jika sebelumnya ada gambar lama
    if (file_exists($path)) {
        // maka hapuskan gambar lama
        unlink($path);
    }

    $qDelete = "DELETE FROM testimoni WHERE id_testimoni=$id_testimoni1";
    $delete = mysqli_query($koneksi, $qDelete) or die(mysqli_error($koneksi));

    // header('location:index.php');
    // jika proses update berhasil
    if ($delete  ) {
        $_SESSION['status'] = 200;
        $_SESSION['message'] = "hapus data berhasil";
        header("location:../../pages/testimoni/info_testimoni.php");
    }else{
    // jika proses insert gagal
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "hapus data gagal";
        header("location:../../pages/testimoni/info_testimoni.php");
    }
?>
