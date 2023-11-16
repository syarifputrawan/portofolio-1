<!-- bagian kepala -->
<?php include "../../includes/header.php" ?>
<!-- contentnya apa  -->

<main>
    <div class="container-fluid px-4">
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col-md-7">
                    <?php include "../../includes/alert.php"; ?>
                </div>
            </div>
            <div class="tables">
                <?php
                include "../../includes/koneksi.php";

                $qSelect = "SELECT * FROM about";
                $qselect = mysqli_query($koneksi, $qSelect) or die(mysqli_error($koneksi));
                $row = mysqli_fetch_array($qselect)
                ?>
                <div class="panel-body widget-shadow ">
                    <table class="table">
                        <div class="table-responsive bs-example widget-shadow">
                            <h4>Table kumpulan data perusahaan:</h4>
                            <a class="btn btn-warning" href="<?= BASE_URL . 'pages/about/form_ubah_perusahaan.php?id_perusahaan='.$row['id_perusahaan'] ?>" onclick="return confirm('apakah anda yakin merubah data?🙁🙁🙁🙁')"></i>ubah</a>
                            <table class="table table-bordered">

                                <thead>
                                    <tr>
                                        <th>nama perusahaan</th>
                                        <td><?= $row['nama_perusahaan'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>gambar perusahaan</th>
                                        <td><img src="<?= BASE_URL . "images/about/" . $row['foto_perusahaan'] ?>" width="100" height="100" style="object-fit: cover;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>foto admin</th>
                                        <td><img src="<?= BASE_URL . "images/about/" . $row['foto_admin'] ?>" width="100" height="100" style="object-fit: cover;">
                                        </td>
                                    </tr>
                                    <tr>
                                    <th>alamat</th>
                                        <td><?= $row['alamat'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>deskripsi perusahaan</th>
                                        <td><?= $row['deskripsi'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>review</th>
                                        <td><?= $row['review'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>informasi</th>
                                        <td><?= $row['informasi'] ?></td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                </div>
            </div>
</main>
<?php include "../../includes/footer.php" ?>