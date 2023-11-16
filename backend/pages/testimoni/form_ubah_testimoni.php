<?php include "../../includes/header.php";
//jika tidak ada data nim di urlnya maka pindah ke halaman index dengan pesan eror
if (!isset($_GET['id_testimoni'])) {
    $_SESSION['status'] = 400;
    $_SESSION['message'] = "tidak ada id tidak valid";
    header('location:info_testimoni.php');
}
$id_testimoni = $_GET['id_testimoni'];
$selectId = "SELECT * FROM testimoni WHERE id_testimoni=$id_testimoni";
$select = mysqli_query($koneksi, $selectId) or die(mysqli_error($koneksi));
$data = mysqli_fetch_assoc($select);
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">ubah data testimoni</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">testimoni</li>
            <li class="breadcrumb-item active">ubah data testimoni</li>
        </ol>
        <form action="<?= BASE_URL . 'aksi/testimoni/ubah_testimoni.php' ?>" method="post" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="">id_testimoni</label>
                <input type="number" name="id_testimoni" class="form-control" value="<?= $data['id_testimoni'] ?>" readonly>
            </div>
            <div class="form-group mb-3">
                <label for="">nama testimoni</label>
                <input type="text" name="nama_testimoni" class="form-control" value="<?= $data['nama'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="">asal</label>
                <input type="text" name="asal" class="form-control" value="<?= $data['asal'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="">pesan</label>
                <input type="text" name="pesan" class="form-control" value="<?= $data['pesan'] ?>">
            </div>
            <button type="submit" class="btn btn-success"><i class="fas fa-check"></i>ubahkan</button>
        </form>
    </div>
</main>


<?php include "../../includes/footer.php";
