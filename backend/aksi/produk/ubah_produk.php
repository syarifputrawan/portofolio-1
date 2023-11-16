<?php 
session_start();
if (!isset($_POST)) {
    
    $_SESSION['status'] = 400;
    $_SESSION['message'] = "tidak ada data pada post";
    header("location:../../pages/produk/info_produk.php");
}
include "../../includes/koneksi.php";
$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$harga_produk = $_POST['harga_produk'];
$deskripsi_produk = $_POST['deskripsi_produk'];
$kategori = $_POST['kategori'];
$depan = $_FILES['depan']['tmp_name'];
$kiri = $_FILES['kiri']['tmp_name'];
$kanan = $_FILES['kanan']['tmp_name'];
$belakang = $_FILES['belakang']['tmp_name'];
// berikan variabel qUpdate kosong ini
    // untuk valuenya nanti akan diberikan ketika user upload gambar / tidak
    $qUpdate = "";

    // jika user ingin merubah gambar/ ada file yang di input yang artinya tidak kosong
    if (!empty($depan) || !empty($kiri) || !empty($kanan) || !empty($belakang)) {
        // cari data berdasarkan nim, yang diambil cuma kolom gambar
        if (!empty($depan)) {
            $qselectdepan = "SELECT depan FROM kumpulan INNER JOIN produk ON kumpulan.id_produk=produk.id_produk";
            $selectdepan = mysqli_query($koneksi, $qselectdepan);
            $oldDatadepan = mysqli_fetch_assoc($selectdepan);
            // definisikan sebuah lokasi gambar/ path gambar
            $pathdepan = "../../images/produk/" . $oldDatadepan['depan'];
            // jika sebelumnya ada gambar lama
            if (file_exists($pathdepan)) {
                // maka hapuskan gambar lama
                unlink($pathdepan);
            } 
            $namaGambardepan = rand(111111,999999) . '.png';
            $uploaddepan = move_uploaded_file($depan, "../../images/produk/$namaGambardepan");
            // rancang querynya
            $qUpdatedepan = "UPDATE kumpulan SET depan='$namaGambardepan' WHERE id_produk=$id_produk";
            $Updatedepan = mysqli_query($koneksi, $qUpdatedepan);
        } if (!empty($kiri)){
            $qselectkiri = "SELECT kiri FROM kumpulan INNER JOIN produk ON kumpulan.id_produk=produk.id_produk";
            $selectkiri = mysqli_query($koneksi, $qselectkiri);
            $oldDatakiri = mysqli_fetch_assoc($selectkiri);
            // definisikan sebuah lokasi gambar/ path gambar
            $pathkiri = "../../images/produk/" . $oldDatakiri['kiri'];
            // jika sebelumnya ada gambar lama
            if (file_exists($pathkiri)) {
                // maka hapuskan gambar lama
                unlink($pathkiri);
            } 
            $namaGambarkiri = rand(111111,999999) . '.png';
            $uploadkiri = move_uploaded_file($kiri, "../../images/produk/$namaGambarkiri");
            // rancang querynya
            $qUpdatekiri = "UPDATE kumpulan SET kiri='$namaGambarkiri' WHERE id_produk=$id_produk";
            $Updatekiri = mysqli_query($koneksi, $qUpdatekiri);
        } if (!empty($kanan)) {
            $qselectkanan = "SELECT kanan FROM kumpulan INNER JOIN produk ON kumpulan.id_produk=produk.id_produk";
            $selectkanan = mysqli_query($koneksi, $qselectkanan);
            $oldDatakanan = mysqli_fetch_assoc($selectkanan);
            // definisikan sebuah lokasi gambar/ path gambar
            $pathkanan = "../../images/produk/" . $oldDatakanan['kanan'];
            // jika sebelumnya ada gambar lama
            if (file_exists($pathkanan)) {
                // maka hapuskan gambar lama
                unlink($pathkanan);
            } 
            $namaGambarkanan = rand(111111,999999) . '.png';
            $uploadkanan = move_uploaded_file($kanan, "../../images/produk/$namaGambarkanan");
            // rancang querynya
            $qUpdatekanan = "UPDATE kumpulan SET kanan='$namaGambarkanan' WHERE id_produk=$id_produk";
            $Updatekanan = mysqli_query($koneksi, $qUpdatekanan);
        } if (!empty($belakang)) {
            $qselectbelakang = "SELECT belakang FROM kumpulan INNER JOIN produk ON kumpulan.id_produk=produk.id_produk";
            $selectbelakang = mysqli_query($koneksi, $qselectbelakang);
            $oldDatabelakang = mysqli_fetch_assoc($selectbelakang);
            // definisikan sebuah lokasi gambar/ path gambar
            $pathbelakang = "../../images/produk/" . $oldDatabelakang['belakang'];
            // jika sebelumnya ada gambar lama
            if (file_exists($pathbelakang)) {
                // maka hapuskan gambar lama
                unlink($pathbelakang);
            } 
            $namaGambarbelakang = rand(111111,999999) . '.png';
            $uploadbelakang = move_uploaded_file($belakang, "../../images/produk/$namaGambarbelakang");
            // rancang querynya
            $qUpdatebelakang = "UPDATE kumpulan SET belakang='$namaGambarbelakang' WHERE id_produk=$id_produk";
            $Updatebelakang = mysqli_query($koneksi, $qUpdatebelakang);
        }
    }else {
        // rancang querynya
        $qUpdate = "UPDATE produk SET nama_produk='$nama_produk', harga_produk='$harga_produk',  deskripsi_produk='$deskripsi_produk', kategori='$kategori' WHERE id_produk=$id_produk";
        $update = mysqli_query($koneksi, $qUpdate) or die(mysqli_error($koneksi));
    }

    
    // lakukan proses ubah
    


    // header('location:index.php');
    // jika proses update berhasil
    if ($update || $Updatedepan || $Updatekiri|| $Updatekanan || $Updatebelakang) {
        $_SESSION['status'] = 200;
        $_SESSION['message'] = "ubah data berhasil";
        header("location:../../pages/produk/info_produk.php");
    }else{
        // jika proses insert gagal
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "ubah data gagal";
        header("location:../../pages/produk/info_produk.php");
    }
?>
