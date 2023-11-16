<?php 
session_start();
if (!isset($_POST)) {
    
    $_SESSION['status'] = 400;
    $_SESSION['message'] = "tidak ada data pada post";
    header("location:../../pages/softskill/index.php");
}
include "../../include/koneksi.php";
$id = $_POST['id_softskill'];
$title= $_POST['title'];
$persen= $_POST['persen'];




    $qUpdate = "UPDATE softskill SET title='$title', persen='$persen' WHERE id_softskill=$id";
    // lakukan proses ubah
    $update = mysqli_query($koneksi, $qUpdate) or die(mysqli_error($koneksi));


    // header('location:index.php');
    // jika proses update berhasil
    if ($update) {
        $_SESSION['status'] = 200;
        $_SESSION['message'] = "ubah data berhasil😀😀😀😀";
        header("location:../../pages/softskill/index.php");
    }else{
    // jika proses insert gagal
    $_SESSION['status'] = 400;
    $_SESSION['message'] = "ubah data gagal🙁🙁🙁🙁";
    header("location:../../pages/softskill/index.php");
    }
?>
