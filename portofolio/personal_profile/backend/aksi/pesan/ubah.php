<?php 
session_start();
if (!isset($_POST)) {
    
    $_SESSION['status'] = 400;
    $_SESSION['message'] = "tidak ada data pada post";
    header("location:../../pages/pesan/index.php");
}
include "../../include/koneksi.php";
$id = $_POST['id_pesan'];
$nama= $_POST['nama'];
$email= $_POST['email'];
$pesan= $_POST['pesan'];

// berikan variabel qUpdate kosong ini
    // untuk valuenya nanti akan diberikan ketika user upload gambar / tidak
    $qUpdate = "";

    // jika user ingin merubah gambar/ ada file yang di input yang artinya tidak kosong
    if (!empty($passFoto)) {
        // cari data berdasarkan nim, yang diambil cuma kolom gambar
        $selectBy = "SELECT foto FROM pesan WHERE id_pesan=$id";
        $select = mysqli_query($koneksi, $selectBy);
        $oldData = mysqli_fetch_assoc($select);
        // definisikan sebuah lokasi gambar/ path gambar
        $path = "images/pesan/" . $oldData['foto'];

        // jika sebelumnya ada gambar lama
        if (file_exists($path)) {
            // maka hapuskan gambar lama
            unlink($path);
        }

        $namaGambar = rand(111111,999999) . '.png';
        $upload = move_uploaded_file($passFoto, "../../images/pesan/$namaGambar");
        // rancang querynya
        $qUpdate = "UPDATE pesan SET id_pesan='$id', nama='$nama', email='$email',  pesan='$pesan' WHERE id_pesan=$id";
    }else {
        // rancang querynya
        $qUpdate = "UPDATE pesan SET id_pesan='$id', nama='$nama', email='$email' WHERE id_pesan=$id";
    }

    
    // lakukan proses ubah
    $update = mysqli_query($koneksi, $qUpdate) or die(mysqli_error($koneksi));


    // header('location:index.php');
    // jika proses update berhasil
    if ($update) {
        $_SESSION['status'] = 200;
        $_SESSION['message'] = "ubah data berhasil😀😀😀😀";
        header("location:../../pages/pesan/index.php");
    }else{
    // jika proses insert gagal
    $_SESSION['status'] = 400;
    $_SESSION['message'] = "ubah data gagal🙁🙁🙁🙁";
    header("location:../../pages/pesan/index.php");
    }
?>
