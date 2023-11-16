<?php include "../../include/header.php" ?>
<div class="container-fluid">

<!-- Page Heading -->
    <div class="container mt-4">
        <h2>cv</h2>

        <form action="<?= BASE_URL . 'aksi/cv/tambah.php' ?>" method="post" enctype="multipart/form-data">
        <div class="container mt-5">
        <form>
            
        
            <div class="form-group">
                <label for="">description</label>
                <textarea class="form-control"  rows="3" name="description" placeholder="Masukkan Deskripsi"></textarea>
            </div>
            <div class="form-group">
                <label for="title">tanggal post</label>
                <input type="date" class="form-control" name="tanggal_post" placeholder="Masukkan Judul">
            </div>
            <div class="form-group">
                <label for="foto">foto</label>
                <input type="file" class="form-control"  name="foto" placeholder="Masukkan foto">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


<?php include "../../include/footer.php" ?>