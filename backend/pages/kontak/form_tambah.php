<?php include "../../includes/header.php"  ?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Data Kontak</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Kontak</li>
            <li class="breadcrumb-item active">Tambah Data Kontak</li>
        </ol>
        <form action="<?= BASE_URL . 'aksi/kontak/tambah.php' ?>" method="post" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="">Icon</label>
                <button type="button" class="my btn btn-primary btn-lg" name="icon" role="iconpicker"></button>
            </div>
            <div class="form-group mb-3">
                <label for="">Tipe Kontak</label>
                <input type="text" name="tipe_kontak" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Isi</label>
                <input type="text" name="isi" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Link URL</label>
                <input type="text" name="link_url" class="form-control">
            </div>

            <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Tambahkan</button>
        </form>

    </div>
</main>
<script>
    // jquery 
    // jika jquery sudah ready maka
    $(document).ready(function() {
        //lakukan sesuatu disini
        $('.buatText').summernote();
    });
</script>

<?php include "../../includes/footer.php"  ?>