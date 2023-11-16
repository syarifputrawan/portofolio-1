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
$selectid = "SELECT * FROM hobby WHERE id_hobby=$id";
$select = mysqli_query($koneksi, $selectid) or die(mysqli_error($koneksi));
$data = mysqli_fetch_assoc($select);

?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">ubah data hobby</h1>

        <form action="<?= BASE_URL . 'aksi/hobby/ubah.php' ?>" method="post" enctype="multipart/form-data">

            <div class="form-group mb-3">
                <label for="">id</label>
                <input type="number" name="id_hobby" class="form-control" value="<?= $data['id_hobby'] ?>" readonly>
            </div>
            <div class="form-group">
                <label for="project">hobby</label>
                <input type="text" class="form-control" name="hobby" value="<?= $data['hobby'] ?>" placeholder="Enter hobby ">
            </div>
            <div class="form-group">
                <label for="project">description</label>
                <input type="text" class="form-control"  name="description" value="<?= $data['description'] ?>" placeholder="Enter description ">
            </div>
            <div class="form-group mb-3">
                <label for="">foto</label> <br>
                <img id="tampilGambarDipilih" width="100" height="100" class="rounded"> <br>
                <input type="file" name="foto" class="form-control" onchange="GambarYgDipilih(event)">
            </div>

            <button type="submit" class="btn btn-warning"><i class="fas fa-edit"></i>ubahkan</button>
        </form>
    </div>
</main>

<script>
    // kondisi pertama pada saat halaman di load, tampilkan gambar di tag <img> dengan data gambar pada database
    // panggil id gambar dari tag <img>, ini untuk menampilkan gambarnya
    const tampilkanGambar = document.getElementById('tampilGambarDipilih');
    tampilkanGambar.src = "<?= BASE_URL . 'images/hobby/' . $data['foto'] ?>";
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