<?php 
session_start();
if (!isset($_POST)) {
    
    $_SESSION['status'] = 400;
    $_SESSION['message'] = "tidak ada data pada post";
    header("location:../../pages/testimoni/info_testimoni.php");
}
include "../../includes/koneksi.php";
$id_testimoni = $_POST['id_testimoni'];
$nama_testimoni = $_POST['nama_testimoni'];
$asal_testimoni = $_POST['asal'];
$pesan_testimoni = $_POST['pesan'];

        // rancang querynya
        $qUpdate = "UPDATE testimoni SET nama='$nama_testimoni', asal='$asal_testimoni', pesan='$pesan_testimoni' WHERE id_testimoni=$id_testimoni";

    
    // lakukan proses ubah
    $update = mysqli_query($koneksi, $qUpdate) or die(mysqli_error($koneksi));


    // header('location:index.php');
    // jika proses update berhasil
    if ($update) {
        $_SESSION['status'] = 200;
        $_SESSION['message'] = "ubah data berhasil";
        header("location:../../pages/testimoni/info_testimoni.php");
    }else{
        // jika proses insert gagal
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "ubah data gagal";
        header("location:../../pages/testimoni/info_testimoni.php");
    }
?>
