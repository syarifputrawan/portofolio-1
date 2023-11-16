<?php include "../../includes/header.php";
//jika tidak ada data nim di urlnya maka pindah ke halaman index dengan pesan eror
if (!isset($_SESSION['id'])) {
    $_SESSION['status'] = 400;
    $_SESSION['message'] = "tidak ada id tidak valid";
    header('location:info_perusahaan.php');
}

$selectId = "SELECT * FROM admin LIMIT 1";
$select = mysqli_query($koneksi, $selectId) or die(mysqli_error($koneksi));
$data = mysqli_fetch_assoc($select);
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">ubah data admin</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">admin</li>
            <li class="breadcrumb-item active">ubah data admin</li>
        </ol>
        <form action="<?= BASE_URL . 'aksi/profile/ubah_profile.php' ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$data['id']?>">
            <div class="form-group mb-3">
                <label for="">nama</label>
                <input type="text" name="name" class="form-control" value="<?= $data['name'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="">username</label>
                <input type="text" name="username" class="form-control" value="<?= $data['username'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="">username</label>
                <input type="password" name="password" class="form-control">
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
