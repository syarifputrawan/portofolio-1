<?php include "../../include/header.php" ?>
<div class="container-fluid">

<!-- Page Heading -->
    <div class="container mt-4">
        <h2>experience</h2>

        <form action="<?= BASE_URL . 'aksi/experience/tambah.php' ?>" method="post" enctype="multipart/form-data">
        <div class="container mt-5">
        <form>
            <div class="form-group">
                <label for="">id</label>
                <input type="text" class="form-control" name="id_experience" placeholder="Masukkan id">
            </div>
            <div class="form-group">
                <label for="">experience</label>
                <input type="text" class="form-control" name="experience" placeholder="Masukkan Judul">
            </div>
            <div class="form-group">
                <label for="">description</label>
                <textarea class="form-control"  rows="3" name="description" placeholder="Masukkan Deskripsi"></textarea>
            </div>
            <div class="form-group">
                <label for="foto">foto</label>
                <input type="file" class="form-control" name="foto" placeholder="Masukkan foto">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


<?php include "../../include/footer.php" ?>