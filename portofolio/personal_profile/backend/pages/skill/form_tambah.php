<?php include "../../include/header.php" ?>
<div class="container-fluid">

<div class="container mt-4">
        <h2>skill entry</h2>

        <form action="<?= BASE_URL . 'aksi/skill/tambah.php' ?>" method="post" enctype="multipart/form-data">
        
        <form>
            <div class="form-group">
                <label for="nama">id:</label>
                <input type="number" class="form-control" id="nama" name="id_skill" placeholder="Masukkan id Anda">
            </div>
            <div class="form-group">
                <label for="skill">Skill:</label>
                <input type="text" class="form-control" id="skill" name="skill" placeholder="Masukkan skill Anda">
            </div>
            <div class="form-group">
                <label for="persen">Persentase Skill:</label>
                <input type="text" class="form-control" id="persen" name="persen" placeholder="Masukkan persentase skill (0-100)">
            </div>
            <div class="form-group">
                <label for="foto">Upload Foto:</label>
                <input type="file" class="form-control-file" id="foto" name="foto">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



<?php include "../../include/footer.php" ?>