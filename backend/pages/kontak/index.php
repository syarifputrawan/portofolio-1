<?php include "../../includes/header.php" ?>
<!-- main content -->
<main>
    <div class="container-fluid px-4">
    <a href="<?= BASE_URL . 'pages/kontak/form_tambah.php' ?>" class="btn btn-success"><i class="fas fa-plus"></i> tambah data kontak</a>
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col-md-7">
                    <?php include "../../includes/alert.php"; ?>
                </div>
            </div>
            <h1 class="mt-4">data kontak</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">kumpulan data kontak</li>
            </ol>
            <div class="tables">
                <div class="panel-body widget-shadow">
                    <h4>Basic Table:</h4>
                    <table class="table">
                <div class="table-responsive bs-example widget-shadow">
                    <h4>Responsive Table:</h4>
                    <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Icon</th>
                    <th>Tipe Kontak</th>
                    <th>Isi</th>
                    <th>Link URL</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "../../includes/koneksi.php";

                    $qSelect = "SELECT * FROM kontak";
                    $select = mysqli_query($koneksi, $qSelect) or die(mysqli_error($koneksi));
                    $nomor = 0;
                    while ($row = mysqli_fetch_array($select)) {
                        $nomor++;
                ?>
                <tr>
                    <td><?= $nomor?></td>
                    <td><i class="<?= $row['icon']?>"></i></td>
                    <td><?= $row['tipe_kontak']?></td>
                    <td><?= $row['isi']?></td>
                    <td><a href="<?= $row['link_url']?>"><?= $row['link_url']?></a></td>
                    <td>
                        <a class="btn btn-warning" href="<?= BASE_URL . 'pages/kontak/form_ubah.php?id=' . $row['id'] ?>"><i class="fas fa-edit"></i> Edit</a>
                        <br>
                        <a class="btn btn-danger" href="<?= BASE_URL . 'aksi/kontak/hapus.php?id=' . $row['id']?>"  onclick="return confirm('Apakah Anda yakin?')" ><i class="fas fa-trash"></i> Hapus</a>
                    </td>
                </tr>
                <?php
                // curly braces
                    }
                ?>
            </tbody>
            </table>
                </div>
            </div>
        </div>
</main>
<?php include "../../includes/footer.php" ?>