<?php 
session_start();
if (!isset($_POST)) {
    
    $_SESSION['status'] = 400;
    $_SESSION['message'] = "tidak ada data pada post";
    header("location:../../pages/about/index.php");
}
include "../../include/koneksi.php";
$id = $_POST['id_about'];
$about = $_POST['about'];
$deskripsi_singkat = $_POST['deskripsi_singkat'];
$nama = $_POST['nama'];
$pekerjaan = $_POST['pekerjaan'];

$gambarBelakang = $_FILES['foto_background']['tmp_name'];
$gambar = $_FILES['foto']['tmp_name'];

$namaGambar = rand(111111,999999) . ".png";
// berikan variabel qUpdate kosong ini 
$queryImages = ",";
// buat variabel path untuk lokasi gambarnya 
$path = "../../images/about/";
$qSelectOldData = "SELECT foto, foto_background FROM about WHERE id_about=$id";
$select = mysqli_query($koneksi,$qSelectOldData) or die(mysqli_error($koneksi));
$oldData = mysqli_fetch_assoc($select);

//cek apakah ada file gambar belakang
if ($gambar != "") {
    // cek lagi gambarnya
    if (file_exists($path . $oldData['foto'])) {
        // hapus gambar
        unlink($path . $oldData['foto']);
    }
    // uppload gambarnya 
    move_uploaded_file($gambar, $path . "foto_$namaGambar");
    // gabungkan karakter dengan karater sebelumnya 
    // gambar_belakang='img_belakang_123342.png',
    $queryImages .= "foto='foto_$namaGambar',";
    //hasilnya : img_belakang_21424.pnp
}

// ,gambar_belakang='img_belakang_123342.png',

if ($gambarBelakang != "") {
    //cek lagi gambar$gambarBelakangnya
    if (file_exists($path . $oldData['foto_background'])) {
        unlink($path . $oldData['foto_background']);
    }
    move_uploaded_file($gambarBelakang, $path . "foto_background_$namaGambar");
    $queryImages .= "foto_background='foto_background_$namaGambar',";
    //hasilnya : img_belakang_21424.pnp
}

// ,gambar_belakang='img_belakang_123342.png',gambar_sejarah='img_sejarah_$namaGambar',

// hilangkan , di akhir karakter supa tidak terjadi bug/eror pada query databasenya 

$trimImages = rtrim($queryImages, ',');
// ,gambar_belakang='img_belakang_123342.png',gambar_sejarah='img_sejarah_$namaGambar'

// berikan variabel qUpdate kosong ini
// untuk valuenya nanti akan diberikan ketika user upload gambar / tidak
$qUpdate = "UPDATE about SET about='$about', deskripsi_singkat='$deskripsi_singkat', nama='$nama', pekerjaan='$pekerjaan'$trimImages WHERE id_about='$id'";
// $qUpdate = "UPDATE about SET pesan='$pesan', deskripsi_singkat='$deskripsiSingkat', sejarah='$sejarah', nama_kampus='$nama_kampus1', map='$map' ,gambar_belakang='img_belakang_123342.png',gambar_sejarah='img_sejarah_$namaGambar' WHERE id=$id";
// die($qUpdate);
// lakukan proses ubah
$update = mysqli_query($koneksi, $qUpdate) or die(mysqli_error($koneksi));

// die($qUpdate);
// header('location:index.php');
// jika proses update berhasil
if ($update) {
    $_SESSION['status'] = 200;
    $_SESSION['message'] = "ubah tentang berhasil😀😀😀😀";
    header("location:../../pages/tentang/info_kampus.php");
} else {
    // jika proses insert gagal
    $_SESSION['status'] = 400;
    $_SESSION['message'] = "ubah tentang gagal🙁🙁🙁🙁";
    header("location:../../pages/tentang/info_kampus.php");
}



















// ----------------------------------------------------------------------------------------------------
    // untuk valuenya nanti akan diberikan ketika user upload gambar / tidak
    $qUpdate = "";

    // jika user ingin merubah gambar/ ada file yang di input yang artinya tidak kosong
    if (!empty($passFoto)) {
        // cari data berdasarkan nim, yang diambil cuma kolom gambar
        $selectBy = "SELECT foto FROM about WHERE id_about=$id";
        $select = mysqli_query($koneksi, $selectBy);
        $oldData = mysqli_fetch_assoc($select);
        // definisikan sebuah lokasi gambar/ path gambar
        $path = "images/about/" . $oldData['foto'];

        // jika sebelumnya ada gambar lama
        if (file_exists($path)) {
            // maka hapuskan gambar lama
            unlink($path);
        }

        $namaGambar = rand(111111,999999) . '.png';
        $upload = move_uploaded_file($passFoto, "../../images/about/$namaGambar");
        // rancang querynya
        $qUpdate = "UPDATE about SET id_about='$id', about='$about', deskripsi_singkat='$deskripsi_singkat', nama='$nama', pekerjaan='$pekerjaan' foto ='$namaGambar' WHERE id_about=$id";
    }else {
        // rancang querynya
        $qUpdate = "UPDATE about SET id_about='$id', about='$about', deskripsi_singkat='$deskripsi_singkat', nama='$nama', pekerjaan='$pekerjaan' WHERE id_about=$id";
    }

    
    // lakukan proses ubah
    $update = mysqli_query($koneksi, $qUpdate) or die(mysqli_error($koneksi));


    // header('location:index.php');
    // jika proses update berhasil
    if ($update) {
        $_SESSION['status'] = 200;
        $_SESSION['message'] = "ubah data berhasil😀😀😀😀";
        header("location:../../pages/about/index.php");
    }else{
    // jika proses insert gagal
    $_SESSION['status'] = 400;
    $_SESSION['message'] = "ubah data gagal🙁🙁🙁🙁";
    header("location:../../pages/about/index.php");
    }
?>
