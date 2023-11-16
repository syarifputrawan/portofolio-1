<?php
include "../../include/header.php";
include "../../include/koneksi.php";

//jika tidak ada data nim di urlnya maka pindah ke halaman index dengan pesan eror
if (!isset($_GET['id'])) {
    $_SESSION['status'] = 400;
    $_SESSION['message'] = "tidak ada id tidak valid";
    header('location:index.php');
}
$id = $_GET['id'];
$selectid = "SELECT * FROM softskill WHERE id_softskill=$id";
$select = mysqli_query($koneksi, $selectid) or die(mysqli_error($koneksi));
$data = mysqli_fetch_assoc($select);

?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">ubah data skill</h1>

        <form action="<?= BASE_URL . 'aksi/softskill/ubah.php' ?>" method="post" enctype="multipart/form-data">

            <div class="form-group mb-3">
                <label for="">id</label>
                <input type="number" name="id_softskill" class="form-control" value="<?= $data['id_softskill'] ?>" readonly>
            </div>
            <div class="form-group">
                <label for="nama">title</label>
                <input type="text" class="form-control"  name="title" value="<?= $data['title'] ?>" placeholder="Enter title ">
            </div>
            <div class="form-group">
                <label for="project">persen</label>
                <input type="text" class="form-control"  name="persen" value="<?= $data['persen'] ?>" placeholder="Enter persen ">
            </div>
            <button type="submit" class="btn btn-warning"><i class="fas fa-edit"></i>ubahkan</button>
        </form>
    </div>
</main>








<?php include "../../include/footer.php" ?>