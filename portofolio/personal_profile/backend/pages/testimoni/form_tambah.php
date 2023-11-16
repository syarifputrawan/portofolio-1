<?php include "../../include/header.php" ?>
<div class="container-fluid">

<!-- Page Heading -->
    <div class="container mt-4">
        <h2>testimoni</h2>

        <form action="<?= BASE_URL . 'aksi/testimoni/tambah.php' ?>" method="post" enctype="multipart/form-data">
        <div class="container mt-5">
        <form>
            
            <div class="form-group">
                <label for="title">id</label>
                <input type="text" class="form-control" name="id_pesan" placeholder="Masukkan Judul">
            </div>
            <div class="form-group">
                <label for="">nama </label>
                <input type="text" class="form-control"  rows="3" name="nama" placeholder="Masukkan Deskripsi">
            </div>
            <div class="form-group">
                <label for="title">email</label>
                <input type="text" class="form-control" name="email" placeholder="Masukkan Judul">
            </div>
            <div class="form-group">
                <label for="title">pesan</label>
                <input type="text" class="form-control" name="pesan" placeholder="Masukkan Judul">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


<?php include "../../include/footer.php" ?>