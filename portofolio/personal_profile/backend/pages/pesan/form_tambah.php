<?php include "../../include/header.php" ?>
<div class="container-fluid">

<!-- Page Heading -->
    <div class="container mt-4">
        <h2>pesan</h2>

        <form action="<?= BASE_URL . 'aksi/pesan/tambah.php' ?>" method="post" enctype="multipart/form-data">
        <div class="container mt-5">
        <form>
            
            <div class="form-group">
                <label for="title">id</label>
                <input type="text" class="form-control" name="id_pesan" placeholder="Masukkan Judul">
            </div>
            <div class="form-group">
                <label for="">nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukkan nama">
            </div>
            <div class="form-group">
                <label for="">email</label>
                <input type="text" class="form-control" name="email" placeholder="Masukkan email">
            </div>
            <div class="form-group">
                <label for="">pesan</label>
                <input type="text" class="form-control" name="pesan" placeholder="Masukkan pesan">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php include "../../include/footer.php" ?>