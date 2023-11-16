<?php include "../../include/header.php" ?>
<div class="container-fluid">

<div class="container mt-4">
        <h2>services</h2>

        <form action="<?= BASE_URL . 'aksi/services/tambah.php' ?>" method="post" enctype="multipart/form-data">
        
        <form>
            <div class="form-group">
                <label for="nama">id:</label>
                <input type="number" class="form-control"  name="id_services" placeholder="Masukkan id Anda">
            </div>
            <div class="form-group">
                <label for="skill">title:</label>
                <input type="text" class="form-control"  name="title" placeholder="Masukkan title Anda">
            </div>
            <div class="form-group">
                <label for="persen">description:</label>
                <input type="text" class="form-control" id="persen" name="description" placeholder="Masukkan description">
            </div>
            <div class="form-group">
                <label for="foto">Upload Foto:</label>
                <input type="file" class="form-control-file" id="foto" name="foto">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



<?php include "../../include/footer.php" ?>