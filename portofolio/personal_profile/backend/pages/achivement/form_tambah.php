<?php include "../../include/header.php" ?>
<div class="container-fluid">

<!-- Page Heading -->
    <div class="container mt-4">
        <h2>achivement</h2>

        <form action="<?= BASE_URL . 'aksi/achivement/tambah.php' ?>" method="post" enctype="multipart/form-data">
        <div class="container mt-5">
        <form>
            <div class="form-group">
                <label for="nama">id</label>
                <input type="text" class="form-control" name="id_achivement" placeholder="Masukkan id">
            </div>
            <div class="form-group">
                <label for="title">achivement</label>
                <input type="text" class="form-control" name="achivement" placeholder="Masukkan Judul">
            </div>
            <div class="form-group">
                <label for="foto">foto</label>
                <input type="file" class="form-control" name="foto" placeholder="Masukkan foto">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


<?php include "../../include/footer.php" ?>