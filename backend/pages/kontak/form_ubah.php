<?php 
    // jika tidak ada data id di URL nya, maka pindah ke halaman index dengan pesan error
    if (!isset($_GET['id'])) {
        session_start();
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "Tidak ada ID/ ID tidak valid!";
        header('location:index.php');
    }
    include "../../includes/header.php";
    include '../../includes/koneksi.php';
    $id = $_GET['id'];
    $selectID = "SELECT * FROM kontak WHERE id=$id";
    $select = mysqli_query($koneksi, $selectID) or die(mysqli_error($koneksi));
    $data = mysqli_fetch_assoc($select);
?>
    
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Ubah Data Kontak</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">Kontak</li>
                <li class="breadcrumb-item active">Ubah Data Kontak</li>
            </ol>
            <form action="<?= BASE_URL . 'aksi/kontak/ubah.php?id=' . $id?>" method="post" enctype="multipart/form-data">
                
                <div class="form-group mb-3">
                    <label for="">Icon</label>
                    <button type="button" class="btn btn-primary btn-lg" name="icon" data-icon="<?= $data['icon']?>" role="iconpicker"></button>
                </div>
                <div class="form-group mb-3">
                    <label for="">Tipe Kontak</label>
                    <input type="text" name="tipe_kontak" class="form-control" value="<?= $data['tipe_kontak']?>">
                </div>
                <div class="form-group mb-3">
                    <label for="">Isi</label>
                    <input type="text" name="isi" class="form-control" value="<?= $data['isi']?>">
                </div>
                <div class="form-group mb-3">
                    <label for="">Link URL</label>
                    <input type="text" name="link_url" class="form-control" value="<?= $data['link_url']?>">
                </div>
                <button type="submit" class="btn btn-warning"><i class="fas fa-edit"></i> Ubahkan</button>
            </form>


        </div>
    </main>
    <script>
    // jquery 
    // jika jquery sudah ready maka
    $(document).ready(function() {
        //lakukan sesuatu disini
        $('.buatText').summernote();
    });
</script>
<?php include "../../includes/footer.php"  ?>