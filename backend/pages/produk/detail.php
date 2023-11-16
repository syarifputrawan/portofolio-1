<?php include "../../includes/header.php" ?>

<?php $id_produk = $_GET['id_produk'] ?>
<main>
    <div class="container-fluid px-5 py-5">
        <table class="table row">
        <?php
                    include "../../includes/koneksi.php";

                    $qSelect = "SELECT * FROM produk WHERE id_produk = $id_produk";
                    $select = mysqli_query($koneksi, $qSelect) or die(mysqli_error($koneksi));
                    $data = mysqli_fetch_assoc($select);
        ?>
            <tbody>
                <tr>
                    <td>deskripsi</td>
                    <td>:</td>
                    <td><?= $data['deskripsi_produk']?></td>
                </tr>
            </tbody>
        </table>
    </div>
</main>

<?php include "../../includes/footer.php" ?>

