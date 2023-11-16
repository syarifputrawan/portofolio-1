<?php 
session_start();
if (!isset($_POST)) {
    
    $_SESSION['status'] = 400;
    $_SESSION['message'] = "tidak ada data pada post";
    header("location:../../pages/about/info_perusahaan.php");
}
include "../../includes/koneksi.php";
$id_perusahaan1 = $_POST['id_perusahaan'];
$nama_perusahaan = $_POST['nama_perusahaan'];
$deskripsi = $_POST['deskripsi'];
$review = $_POST['review'];
$informasi = $_POST['informasi'];
$alamat = $_POST['alamat'];
$passFoto = $_FILES['foto_perusahaan']['tmp_name'];
$foto_admin = $_FILES['foto_admin']['tmp_name'];
// berikan variabel qUpdate kosong ini
$namaGambar = rand(111111, 999999) . ".png";
// buat kosong dulu q variabelnya 
$queryImages = ",";
// buat variabel path untuk lokasi gambarnya 
$path = "../../images/about/";

   // cari data berdasarkan nim, yang diambil cuma kolom gambar
   $selectBy = "SELECT foto_perusahaan, foto_admin FROM about WHERE id_perusahaan=$id_perusahaan1";
   $select = mysqli_query($koneksi, $selectBy);
   $oldData = mysqli_fetch_assoc($select);

   //cek apakah ada file gambar belakang
if ($passFoto != "") {
    // cek lagi gambarnya
    if (file_exists($path . $oldData['foto_perusahaan'])) {
        unlink($path . $oldData['foto_perusahaan']);
    }
    // uppload gambarnya 
    move_uploaded_file($passFoto, $path . "foto_perusahaan_$namaGambar");
    // gabungkan karakter dengan karater sebelumnya 
    $queryImages .= "foto_perusahaan='foto_perusahaan_$namaGambar',";
    //hasilnya : img_belakang_21424.pnp
}

if ($foto_admin != "") {
    // cek lagi gambarnya
    if (file_exists($path . $oldData['foto_admin'])) {
        unlink($path . $oldData['foto_admin']);
    }
    move_uploaded_file($foto_admin, $path . "foto_admin_$namaGambar");
    $queryImages .= "foto_admin='foto_admin_$namaGambar'";
    //hasilnya : img_belakang_21424.pnp
}

// hilangkan, di akhir karakter supa tidak terjadi bug/eror pada query databasenya 

$trimImages = rtrim($queryImages, ',');

// berikan variabel qUpdate kosong ini
// untuk valuenya nanti akan diberikan ketika user upload gambar / tidak
$qUpdate = "UPDATE about SET nama_perusahaan='$nama_perusahaan', deskripsi='$deskripsi', review='$review', informasi='$informasi', alamat='$alamat' '$queryImages' WHERE id_perusahaan=$id_perusahaan1";

// die($qUpdate);
// lakukan proses ubah
$update = mysqli_query($koneksi, $qUpdate) or die(mysqli_error($koneksi));

    // header('location:index.php');
    // jika proses update berhasil
    if ($update) {
        $_SESSION['status'] = 200;
        $_SESSION['message'] = "ubah data berhasil";
        header("location:../../pages/about/info_perusahaan.php");
    }else{
        // jika proses insert gagal
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "ubah data gagal";
        header("location:../../pages/about/info_perusahaan.php");
    }
