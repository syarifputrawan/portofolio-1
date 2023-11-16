<?php

session_start();
if (!isset($_POST)) {
    //kembali ke halamaan login
    $_SESSION['status'] = 400;
    $_SESSION['message'] = "Data POST tidak valid";
    header("location:../../login.php");
}


include "../../include/koneksi.php";
//  ambil data login nya 
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT id_login, username FROM login WHERE username='$username' AND password= '$password'";
$FindUser = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
if (mysqli_num_rows($FindUser) > 0) {
    $user = mysqli_fetch_assoc($FindUser);

    // masukin data user ke sessionnya

    $_SESSION['id_login'] = $user['id_login'];
    $_SESSION['username'] = $user['username'];

    $_SESSION['status'] = 200;
    $_SESSION['message'] = "selamat datang," . $user['username'] . "!";
    header("location:../../pages/dashboard/index.php");
} else {

    $_SESSION['status'] = 400;
    $_SESSION['message'] = "username/ passwword salah";
    header("location:../../login.php");
}
