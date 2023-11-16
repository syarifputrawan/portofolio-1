<?php include "../../includes/header.php" ?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">data produk</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">produk</li>
            <li class="breadcrumb-item active">tambah data produk</li>
        </ol>
        <form action="<?= BASE_URL . 'aksi/produk/tambah_produk.php' ?>" method="post" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="">id produk</label>
                <input type="number" name="id_produk" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">nama produk</label>
                <input type="text" name="nama_produk" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">harga produk</label>
                <input type="number" name="harga_produk" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">deskripsi produk</label>
                <input type="text" name="deskripsi_produk" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="kategori">kategori produk</label>
                <select name="kategori" id="kategori" class="form-control1" aria-label="Default select example">
                    <option selected>Pilih Kategori</option>
                    <option value="vip">vip</option>
                    <option value="middle">middle</option>
                    <option value="standar">standar</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="">depan</label>
                <img id="tampilGambardepan" width="100" height="100" class="rounded">
                <input type="file" name="depan" class="form-control" onchange="GambarYgdepan(event)">
            </div>
            <div class="form-group mb-3">
                <label for="">kiri</label>
                <img id="tampilGambarkiri" width="100" height="100" class="rounded">
                <input type="file" name="kiri" class="form-control" onchange="GambarYgkiri(event)">
            </div>
            <div class="form-group mb-3">
                <label for="">kanan</label>
                <img id="tampilGambarkanan" width="100" height="100" class="rounded">
                <input type="file" name="kanan" class="form-control" onchange="GambarYgkanan(event)">
            </div>
            <div class="form-group mb-3">
                <label for="">belakang</label>
                <img id="tampilGambarbelakang" width="100" height="100" class="rounded">
                <input type="file" name="belakang" class="form-control" onchange="GambarYgbelakang(event)">
            </div>
            <button type="submit" class="btn btn-success"><i class="fas fa-check"></i>tambahkan</button>
        </form>
    </div>
</main>

<script>
    // kondisi pertama pada saat halaman di load, tampilkan gambar di tag <img> dengan data gambar pada database
    // panggil id gambar dari tag <img>, ini untuk menampilkan gambarnya
    const tampilGambardepan = document.getElementById('tampilGambardepan');
    const tampilGambarkiri = document.getElementById('tampilGambarkiri');
    const tampilGambarkanan = document.getElementById('tampilGambarkanan');
    const tampilGambarbelakang = document.getElementById('tampilGambarbelakang');
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
    function GambarYgkiri(event) {
        // ambil data eventnya
        const eventGambar = event.target.files;
        // kemudian tambahkan attribut src nya seperti <img src="link disini dari javacript">
        // atur src dengan nama file yang ada di filegambar[0]
        tampilGambarkiri.src = URL.createObjectURL(eventGambar[0]);
        // // kemudian  
        tampilGambarkiri.style.display = "block";
    }
    function GambarYgkanan(event) {
        // ambil data eventnya
        const eventGambar = event.target.files;
        // kemudian tambahkan attribut src nya seperti <img src="link disini dari javacript">
        // atur src dengan nama file yang ada di filegambar[0]
        tampilGambarkanan.src = URL.createObjectURL(eventGambar[0]);
        // // kemudian  
        tampilGambarkanan.style.display = "block";
    }
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
