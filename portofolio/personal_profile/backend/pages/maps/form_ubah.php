<?php
include "../../include/header.php";
include "../../include/koneksi.php";

//jika tidak ada data nim di urlnya maka pindah ke halaman index dengan pesan eror
if (!isset($_GET['id'])) {
    $_SESSION['status'] = 400;
    $_SESSION['message'] = "tidak ada id tidak valid";
    // header('location:index.php');
    echo "
    <script>
        window.location.href = 'index.php';
    </script>
    ";

}



$id = $_GET['id'];
$selectid = "SELECT * FROM maps WHERE id_maps=$id";
$select = mysqli_query($koneksi, $selectid) or die(mysqli_error($koneksi));
$data = mysqli_fetch_assoc($select);

?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">ubah data maps</h1>

        <form action="<?= BASE_URL . 'aksi/maps/edit.php?id='.$id ?>" method="post" enctype="multipart/form-data">

            <div class="form-group mb-3">
                <label for="">maps</label>
                <div class="uni-map"> <br>
                    <textarea name="maps" class="buatText form-control" cols="30" rows="5"><?= $data['maps'] ?></textarea>
                </div>
            </div>
                <!-- <input type="text" class="form-control" value="<?= $data['maps'] ?>" readonly> -->
            </div>
            <button type="submit" class="btn btn-warning"><i class="fas fa-edit"></i>ubahkan</button>
        </form>
    </div>
</main>


<?php include "../../include/footer.php" ?>