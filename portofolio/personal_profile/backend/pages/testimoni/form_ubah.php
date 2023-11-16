<?php
include "../../include/header.php";
include "../../include/koneksi.php";

//jika tidak ada data nim di urlnya maka pindah ke halaman index dengan pesan eror
if (!isset($_GET['id'])) {
    $_SESSION['status'] = 400;
    $_SESSION['message'] = "tidak ada id tidak valid";
    header('location:index.php');
}
$id = $_GET['id'];
$selectid = "SELECT * FROM tsetimoni WHERE id_pesan=$id";
$select = mysqli_query($koneksi, $selectid) or die(mysqli_error($koneksi));
$data = mysqli_fetch_assoc($select);

?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">ubah data testimoni</h1>

        <form action="<?= BASE_URL . 'aksi/testimoni/ubah.php' ?>" method="post" enctype="multipart/form-data">

            <div class="form-group mb-3">
                <label for="">id</label>
                <input type="number" name="id_pesan" class="form-control" value="<?= $data['id_pesan'] ?>" readonly>
            </div>
            <div class="form-group">
                <label for="project">nama</label>
                <input type="text" class="form-control" name="nama" value="<?= $data['nama'] ?>" placeholder="Enter pesan ">
            </div>
            <div class="form-group">
                <label for="project">email</label>
                <input type="text" class="form-control"  name="email" value="<?= $data['email'] ?>" placeholder="Enter description ">
            </div>
            <div class="form-group">
                <label for="project">pesan</label>
                <input type="text" class="form-control" name="pesan" value="<?= $data['pesan'] ?>" placeholder="Enter pesan ">
            </div>

            <button type="submit" class="btn btn-warning"><i class="fas fa-edit"></i>ubahkan</button>
        </form>
    </div>
</main>

<script>
    // kondisi pertama pada saat halaman di load, tampilkan gambar di tag <img> dengan data gambar pada database
    // panggil id gambar dari tag <img>, ini untuk menampilkan gambarnya
    const tampilkanGambar = document.getElementById('tampilGambarDipilih');
    tampilkanGambar.src = "<?= BASE_URL . 'images/testimoni/' . $data['foto'] ?>";
    // #####---------

    // function untuk menampilkan gambar pada saat setelah di pilih dari galery
    function GambarYgDipilih(event) {
        // ambil data eventnya
        const eventGambar = event.target.files;
        // kemudian tambahkan attribut src nya seperti <img src="link disini dari javacript">
        // atur src dengan nama file yang ada di filegambar[0]
        tampilkanGambar.src = URL.createObjectURL(eventGambar[0]);
        // // kemudian  
        tampilkanGambar.style.display = "block";
    }
</script>












<?php include "../../include/footer.php" ?>