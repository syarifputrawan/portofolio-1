<!-- bagian kepala -->
<?php include "../../includes/header.php" ?>
<!-- contentnya apa  -->

<main>
    <div class="container-fluid px-4">
    <a href="<?= BASE_URL . 'pages/testimoni/form_tambah_testimoni.php' ?>" class="btn btn-success"><i class="fas fa-plus"></i> tambah data testimoni</a>
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col-md-7">
                    <?php include "../../includes/alert.php"; ?>
                </div>
            </div>
            <div class="tables">
                <div class="panel-body widget-shadow">
                <h1 class="mt-4">data testimoni</h1>
                    <table class="table">
                <div class="table-responsive bs-example widget-shadow">
                    <h4>data testimoni:</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>id testimoni</th>
                                <th>nama</th>
                                <th>asal</th>
                                <th>pesan</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <?php
                    include "../../includes/koneksi.php";

                    $qSelect = "SELECT * FROM testimoni";
                    $qselect = mysqli_query($koneksi, $qSelect) or die(mysqli_error($koneksi));
                    $nomor = 0;
                    while ($row = mysqli_fetch_array($qselect)) {
                        $nomor++;
                    ?>
                        <tbody>
                            <tr>
                            <td><?= $nomor ?></td>
                            <td><?= $row['id_testimoni'] ?></td>
                            <td><?= $row['nama'] ?></td>
                            <td><?= $row['asal'] ?></td>
                            <td><?= $row['pesan'] ?></td>
                            <td>
                                <a class="btn btn-warning" href="<?= BASE_URL . 'pages/testimoni/form_ubah_testimoni.php?id_testimoni=' . $row['id_testimoni'] ?>" onclick="return confirm('apakah anda yakin merubah data?🙁🙁🙁🙁')"></i>ubah</a>
                                <br>
                                <a class="btn btn-danger" href="<?= BASE_URL . 'aksi/testimoni/hapus.php?id_testimoni=' . $row['id_testimoni'] ?>" onclick="return confirm('apakah anda yakin?🙁🙁🙁🙁')"><i class="fas fa-edit"></i>hapus</a>
                            </td>
                            </tr>
                            <?php
                    }
                    ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</main>
<?php include "../../includes/footer.php" ?>