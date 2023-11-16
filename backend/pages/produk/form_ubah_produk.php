<?php include "../../includes/header.php";
//jika tidak ada data nim di urlnya maka pindah ke halaman index dengan pesan eror
if (!isset($_GET['id_produk'])) {
    $_SESSION['status'] = 400;
    $_SESSION['message'] = "tidak ada id tidak valid";
    header('location:info_produk.php');
}
$id_produk = $_GET['id_produk'];
$selectId = "SELECT * FROM produk INNER JOIN kumpulan ON produk.id_produk = kumpulan.id_produk WHERE produk.id_produk=$id_produk";
$select = mysqli_query($koneksi, $selectId) or die(mysqli_error($koneksi));
$data = mysqli_fetch_assoc($select);
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">ubah data produk</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">produk</li>
            <li class="breadcrumb-item active">ubah data produk</li>
        </ol>
        <form action="<?= BASE_URL . 'aksi/produk/ubah_produk.php' ?>" method="post" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="">id_produk</label>
                <input type="number" name="id_produk" class="form-control" value="<?= $data['id_produk'] ?>" readonly>
            </div>
            <div class="form-group mb-3">
                <label for="">nama produk</label>
                <input type="text" name="nama_produk" class="form-control" value="<?= $data['nama_produk'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="">harga produk</label>
                <input type="number" name="harga_produk" class="form-control" value="<?= $data['harga_produk'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="">deskripsi produk</label>
                <textarea id="" cols="30" rows="10" name="deskripsi_produk" class="form-control"><?= $data['deskripsi_produk'] ?></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="kategori">kategori produk</label>
                <select name="kategori" id="kategori" class="form-control1" aria-label="Default select example">
                    <option>Pilih Kategori</option>
                    <option value="vip" <?= $data['kategori'] == 'vip' ? 'selected' : '' ?>>vip</option>
                    <option value="middle" <?= $data['kategori'] == 'middle' ? 'selected' : '' ?>>middle</option>
                    <option value="standar" <?= $data['kategori'] == 'standar' ? 'selected' : '' ?>>standar</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="">foto depan</label>
                <img id="tampilGambardepan" width="100" height="100" class="rounded">
                <input type="file" name="depan" class="form-control" onchange="GambarYgdepan(event)">
            </div>
            <div class="form-group mb-3">
                <label for="">foto kiri</label>
                <img id="tampilGambarkiri" width="100" height="100" class="rounded">
                <input type="file" name="kiri" class="form-control" onchange="GambarYgkiri(event)">
            </div>
            <div class="form-group mb-3">
                <label for="">foto kanan</label>
                <img id="tampilGambarkanan" width="100" height="100" class="rounded">
                <input type="file" name="kanan" class="form-control" onchange="GambarYgkanan(event)">
            </div>
            <div class="form-group mb-3">
                <label for="">foto belakang</label>
                <img id="tampilGambarbelakang" width="100" height="100" class="rounded">
                <input type="file" name="belakang" class="form-control" onchange="GambarYgbelakang(event)">
            </div>
            <button type="submit" class="btn btn-success"><i class="fas fa-check"></i>ubahkan</button>
        </form>
    </div>
</main>

<?php
// $qselectgambar = "SELECT * FROM kumpulan INNER JOIN produk WHERE kumpulan.id_produk=produk.id_produk";
// $selectgambar = mysqli_query($koneksi, $qselectgambar) or die(mysqli_error($koneksi));
// $datagambar = mysqli_fetch_assoc($selectgambar);
?>

<script>
    // kondisi pertama pada saat halaman di load, tampilkan gambar di tag <img> dengan data gambar pada database
    // panggil id gambar dari tag <img>, ini untuk menampilkan gambarnya
    const tampilkanGambardepan = document.getElementById('tampilGambardepan');
    const tampilkanGambarkiri = document.getElementById('tampilGambarkiri');
    const tampilkanGambarkanan = document.getElementById('tampilGambarkanan');
    const tampilkanGambarbelakang = document.getElementById('tampilGambarbelakang');
    tampilkanGambardepan.src = "<?= BASE_URL . 'images/produk/' . $data['depan'] ?>";
    tampilkanGambarkiri.src = "<?= BASE_URL . 'images/produk/' . $data['kiri'] ?>";
    tampilkanGambarkanan.src = "<?= BASE_URL . 'images/produk/' . $data['kanan'] ?>";
    tampilkanGambarbelakang.src = "<?= BASE_URL . 'images/produk/' . $data['belakang'] ?>";
    // #####---------

    // function untuk menampilkan gambar pada saat setelah di pilih dari galery
    function GambarYgdepan(event) {
        // ambil data eventnya
        const eventGambar = event.target.files;
        // kemudian tambahkan attribut src nya seperti <img src="link disini dari javacript">
        // atur src dengan nama file yang ada di filegambar[0]
        tampilGambardepan.src = URL.createObjectURL(eventGambar[0]);
        // // kemudian  
        tampilGambardepan.style.display = "block";
    }
     // function untuk menampilkan gambar pada saat setelah di pilih dari galery
     function GambarYgkiri(event) {
        // ambil data eventnya
        const eventGambar = event.target.files;
        // kemudian tambahkan attribut src nya seperti <img src="link disini dari javacript">
        // atur src dengan nama file yang ada di filegambar[0]
        tampilGambarkiri.src = URL.createObjectURL(eventGambar[0]);
        // // kemudian  
        tampilGambarkiri.style.display = "block";
    }
     // function untuk menampilkan gambar pada saat setelah di pilih dari galery
     function GambarYgkanan(event) {
        // ambil data eventnya
        const eventGambar = event.target.files;
        // kemudian tambahkan attribut src nya seperti <img src="link disini dari javacript">
        // atur src dengan nama file yang ada di filegambar[0]
        tampilGambarkanan.src = URL.createObjectURL(eventGambar[0]);
        // // kemudian  
        tampilGambarkanan.style.display = "block";
    }
     // function untuk menampilkan gambar pada saat setelah di pilih dari galery
     function GambarYgbelakang(event) {
        // ambil data eventnya
        const eventGambar = event.target.files;
        // kemudian tambahkan attribut src nya seperti <img src="link disini dari javacript">
        // atur src dengan nama file yang ada di filegambar[0]
        tampilGambarbelakang.src = URL.createObjectURL(eventGambar[0]);
        // // kemudian  
        tampilGambarbelakang.style.display = "block";
    }
</script>

<?php include "../../includes/footer.php";
