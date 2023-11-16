<?php include "../../includes/header.php" ?>

<?php $id_pesan = $_GET['id_pesan'] ?>
<main>
    <div class="container-fluid px-5 py-5">
        <table class="table row">
        <?php
                    include "../../includes/koneksi.php";

                    $qSelect = "SELECT * FROM pesan WHERE id_pesan = $id_pesan";
                    $select = mysqli_query($koneksi, $qSelect) or die(mysqli_error($koneksi));
                    $data = mysqli_fetch_assoc($select);
        ?>
            <tbody>
                <tr>
                    <td>nama</td>
                    <td>:</td>
                    <td><?= $data['nama']?></td>
                </tr>
                <tr>
                    <td>email / nomor hp</td>
                    <td>:</td>
                <td>
                    <?= $data['email']?>
                    and nomor hp 
                    <?= $data['no_hp']?>
                </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3"><h5>pesan:</h5>
                    <?= $data['pesan']?>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</main>

<?php include "../../includes/footer.php" ?>

