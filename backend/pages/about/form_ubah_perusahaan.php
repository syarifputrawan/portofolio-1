<?php include "../../includes/header.php";
//jika tidak ada data nim di urlnya maka pindah ke halaman index dengan pesan eror
if (!isset($_GET['id_perusahaan'])) {
    $_SESSION['status'] = 400;
    $_SESSION['message'] = "tidak ada id tidak valid";
    header('location:info_perusahaan.php');
}
$id_perusahaan1 = $_GET['id_perusahaan'];
$selectId = "SELECT * FROM about WHERE id_perusahaan=$id_perusahaan1";
$select = mysqli_query($koneksi, $selectId) or die(mysqli_error($koneksi));
$data = mysqli_fetch_assoc($select);
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">ubah data perusahaan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">perusahaan</li>
            <li class="breadcrumb-item active">ubah data perusahaan</li>
        </ol>
        <form action="<?= BASE_URL . 'aksi/about/ubah_perusahaan.php' ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_perusahaan" value="<?=$data['id_perusahaan']?>">
            <div class="form-group mb-3">
                <label for="">nama perusahaan</label>
                <textarea type="text" name="nama_perusahaan" class="buatText form-control"><?= $data['nama_perusahaan'] ?></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="">deskripsi perusahaan</label>
                <textarea type="text" name="deskripsi" class="buatText form-control"><?= $data['deskripsi'] ?></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="">review</label>
                <textarea type="text" name="review" class="buatText form-control"><?= $data['review'] ?></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="">informasi</label>
                <textarea type="text" name="informasi" class="buatText form-control"><?= $data['informasi'] ?></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="">alamat</label>
                <input type="text" name="alamat" class="form-control" value="<?= $data['alamat'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="">gambar perusahaan</label>
                <img id="tampilGambarPerusahaan" width="100" height="100" class="rounded">
                <input type="file" name="foto_perusahaan" class="form-control" onchange="GambarYgDipilih(event)">
            </div>
            <div class="form-group mb-3">
                <label for="">foto admin</label>
                <img id="tampilGambarAdmin" width="100" height="100" class="rounded">
                <input type="file" name="foto_admin" class="form-control" onchange="fotoadmin(event)">
            </div>
            <button type="submit" class="btn btn-success"><i class="fas fa-check"></i>ubahkan</button>
        </form>
    </div>
</main>


<script>
    // kondisi pertama pada saat halaman di load, tampilkan gambar di tag <img> dengan data gambar pada database
    // panggil id gambar dari tag <img>, ini untuk menampilkan gambarnya
    
const tampilkanGambarPerusahaan = document.getElementById('tampilGambarPerusahaan');
const tampilkanGambarAdmin = document.getElementById('tampilGambarAdmin');

tampilkanGambarPerusahaan.src = "<?= BASE_URL . 'images/about/' . $data['foto_perusahaan'] ?>";
tampilkanGambarAdmin.src = "<?= BASE_URL . 'images/about/' . $data['foto_admin'] ?>";

function GambarYgDipilih(event) {
    const eventGambar = event.target.files;
    tampilkanGambarPerusahaan.src = URL.createObjectURL(eventGambar[0]);
    tampilkanGambarPerusahaan.style.display = "block";
}

function fotoadmin(event) {
    const eventGambar = event.target.files;
    tampilkanGambarAdmin.src = URL.createObjectURL(eventGambar[0]);
    tampilkanGambarAdmin.style.display = "block";
}

</script>
<script>
    // jquery 
    // jika jquery sudah ready maka
    $(document).ready(function() {
        //lakukan sesuatu disini
        $('.buatText').summernote();
    });
</script>

<?php include "../../includes/footer.php";
