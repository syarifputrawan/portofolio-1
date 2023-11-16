<!-- bagian kepala -->
<?php include "../../include/header.php" ?>
<!-- contentnya apa  -->
<main>
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-md-7">
                <?php include "../../include/alert.php"; ?>
            </div>
        </div>


        <h1 class="mt-4">about</h1>



        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
               
                                <th>id</th>
                                <th>about</th>
                                <th>deskripsi singkat</th>
                                <th>nama</th>
                                <th>pekerjaan</th>
                                <th>foto</th>
                                <th>foto background</th>
                                <th>aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            include "../../include/koneksi.php";

                            $qSelect = "SELECT * FROM about";
                            $qselect = mysqli_query($koneksi, $qSelect) or die(mysqli_error($koneksi));
                            $nomor = 0;
                            while ($row = mysqli_fetch_array($qselect)) {
                                $nomor++;
                            ?>
                                <tr>
                                   
                                    <td><?= $row['id_about'] ?></td>
                                    <td><?= $row['about'] ?></td>
                                    <td><?= $row['deskripsi_singkat'] ?></td>
                                    <td><?= $row['nama'] ?></td>
                                    <td><?= $row['pekerjaan'] ?></td>
                                    <td>
                                    <img src="<?= BASE_URL . "images/about/" . $row['foto'] ?>" alt="" width="100" height="100" style="object-fit: cover;"></td>
                                    <td>
                                    <img src="<?= BASE_URL . "images/about/" . $row['foto_background'] ?>" alt="" width="100" height="100" style="object-fit: cover;"></td>
                                    </td>
                                    <td>
                                        <a class="btn btn-warning" href="<?= BASE_URL . 'pages/about/form_ubah.php?id=' . $row['id_about'] ?>"><i class="fas fa-edit"></i>edit</a>
                                        <br>
                                       
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
    </div>
</main>
<?php include "../../include/footer.php" ?>