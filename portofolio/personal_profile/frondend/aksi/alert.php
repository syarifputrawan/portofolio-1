<?php

if (isset($_SESSION['status']) && isset($_SESSION['message'])) {
    $status = $_SESSION['status'];
    $msg = $_SESSION['message'];

    switch ($status) {
        case 200:
            // SweetAlert untuk berhasil
            echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
            echo "<script type='text/javascript'>
                    Swal.fire({
                        title: 'Berhasil!',
                        text: '$msg',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(function() {
                    });
                 </script>";
            break;
        case 400:
            // SweetAlert untuk error
            echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
            echo "<script type='text/javascript'>
                    Swal.fire({
                        title: 'Gagal!',
                        text: '$msg',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    }).then(function() {
                    });
                 </script>";
            break;
    }

    // unset adalah untuk menghapus status dan message agar tidak terus menampilkan alert jika tidak ada perubahan
    unset($_SESSION['status']);
    unset($_SESSION['message']);
}
?>