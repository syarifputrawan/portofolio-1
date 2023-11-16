<!-- bagian kepala -->
<?php include "../../includes/header.php" ?>
<!-- contentnya apa  -->
<script>
    const rupiah = (number) => {
        return new Intl.NumberFormat("id-ID", {
            style: "currency",
            currency: "IDR"
        }).format(number);
    }
</script>
<main>
    <div class="container-fluid px-4">
        <a href="<?= BASE_URL . 'pages/produk/form_tambah_produk.php' ?>" class="btn btn-success"><i class="fas fa-plus"></i> tambah data produk</a>
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col-md-7">
                    <?php include "../../includes/alert.php"; ?>
                </div>
            </div>
            <h1 class="mt-4">data produk</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">kumpulan data produk</li>
            </ol>
            <div class="tables">
                <div class="panel-body widget-shadow">
                    <h4>Basic Table:</h4>
                    <table class="table ">
                        <div class="table-responsive bs-example widget-shadow">
                            <h4>Responsive Table:</h4>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>id produk</th>
                                        <th>nama produk</th>
                                        <th>harga produk</th>
                                        <th>deskripsi produk</th>
                                        <th>kategori produk</th>
                                        <th>foto depan</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <?php
                                include "../../includes/koneksi.php";

                                $qSelect = "SELECT * FROM produk INNER JOIN kumpulan ON produk.id_produk=kumpulan.id_produk";
                                $qselect = mysqli_query($koneksi, $qSelect) or die(mysqli_error($koneksi));
                                $nomor = 0;
                                while ($row = mysqli_fetch_array($qselect)) {
                                    $nomor++;
                                ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $nomor ?></td>
                                            <td><?= $row['id_produk'] ?></td>
                                            <td><?= $row['nama_produk'] ?></td>
                                            <td>
                                                <span id="convert-<?= $row['id_produk'] ?>"><?= $row['harga_produk'] ?></span>
                                                <script>
                                                    var convert_rupiah = document.getElementById("convert-<?= $row['id_produk'] ?>");
                                                    convert_rupiah.innerHTML = rupiah(convert_rupiah.innerHTML);
                                                </script>
                                            </td>
                                            <td>
                                            <a class="btn btn-warning" href="<?= BASE_URL . 'pages/produk/detail.php?id_produk=' . $row['id_produk']?>" ><i class="fas fa-info"></i>lebih lengkap</a>
                                        </td>
                                            <td><?= $row['kategori'] ?></td>
                                            <td><img src="<?= BASE_URL . "images/produk/" . $row['depan'] ?>" width="100" height="100" style="object-fit: cover;">
                                            </td>
                                            <td>
                                                <a class="btn btn-warning" href="<?= BASE_URL . 'pages/produk/form_ubah_produk.php?id_produk=' . $row['id_produk'] ?>" onclick="return confirm('apakah anda yakin merubah data?🙁🙁🙁🙁')"></i>ubah</a>
                                                <br>
                                                <a class="btn btn-danger" href="<?= BASE_URL . 'aksi/produk/hapus.php?id_produk=' . $row['id_produk'] ?>" onclick="return confirm('apakah anda yakin?🙁🙁🙁🙁')"><i class="fas fa-edit"></i>hapus</a>
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