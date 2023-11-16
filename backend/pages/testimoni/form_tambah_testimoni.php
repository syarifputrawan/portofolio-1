<?php include "../../includes/header.php" ?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">data testimoni</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">testimoni</li>
            <li class="breadcrumb-item active">tambah data testimoni</li>
        </ol>
        <form action="<?= BASE_URL . 'aksi/testimoni/tambah_testimoni.php' ?>" method="post" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="">nama</label>
                <input type="text" name="nama" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">asal</label>
                <input type="text" name="asal" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">pesan</label>
                <input type="text" name="pesan" class="form-control">
            </div>
            <button type="submit" class="btn btn-success"><i class="fas fa-check"></i>tambahkan</button>
        </form>
    </div>
</main>

<?php include "../../includes/footer.php";
