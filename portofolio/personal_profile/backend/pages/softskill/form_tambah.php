<?php include "../../include/header.php" ?>
<div class="container-fluid">

<!-- Page Heading -->
    <div class="container mt-4">
        <h2>softskill</h2>

        <form action="<?= BASE_URL . 'aksi/softskill/tambah.php' ?>" method="post" enctype="multipart/form-data">
        <div class="container mt-5">
        <form>
            
         
            <div class="form-group">
                <label for="">title</label>
                <input type="text" class="form-control" name="title" placeholder="Masukkan nama">
            </div>
            <div class="form-group">
                <label for="">persen</label>
                <input type="text" class="form-control" name="persen" placeholder="Masukkan persen">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php include "../../include/footer.php" ?>