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


        <h1 class="mt-4">experience</h1>



        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data experience</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <a href="<?= BASE_URL . 'pages/experience/form_tambah.php' ?>" class="btn btn-success"><i class="fas fa-plus"></i>tambah data baru</a>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>experience</th>
                                <th>description</th>
                                <th>foto</th>
                                <th>aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            include "../../include/koneksi.php";

                            $qSelect = "SELECT * FROM experience";
                            $qselect = mysqli_query($koneksi, $qSelect) or die(mysqli_error($koneksi));
                            $nomor = 0;
                            while ($row = mysqli_fetch_array($qselect)) {
                                $nomor++;
                            ?>
                                <tr>
                                   
                                    <td><?= $row['id_experience'] ?></td>
                                    <td><?= $row['experience'] ?></td>
                                    <td><?= $row['description'] ?></td>
                                    <td>                                   
                                    <img src="<?= BASE_URL . "images/experience/" . $row['foto'] ?>" alt="" width="100" height="100" style="object-fit: cover;"></td>

                                    <td>
                                    <a class="btn btn-warning" href="<?= BASE_URL . 'pages/experience/form_ubah.php?id_experience=' . $row['id_experience'] ?>"><i class="fas fa-edit"></i>edit</a>
                                        <br>
                                        <a class="btn btn-danger" href="<?= BASE_URL . 'aksi/experience/hapus.php?id_experience=' . $row['id_experience'] ?>" onclick="return confirm('apakah anda yakin? ingin menghapus')"><i class="fas fa-edit"></i>hapus</a>
                                       
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
