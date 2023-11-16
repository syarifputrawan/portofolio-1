<?php
    session_start();
    if(!isset($_POST)) {
        // kembali ke halaman login
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "data post tidak valid";
        header("location:../../pages/login.php");
    }

    include "../../includes/koneksi.php";
    // ambil data loginnya
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT id, name FROM admin WHERE username='$username' AND password='$password'";

    $findUser = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

    
    if (mysqli_num_rows($findUser) > 0) {
        $user = mysqli_fetch_assoc($findUser);
        
        // masukin data user ke sissionnya 
        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['name'];

        $_SESSION['status'] = 200;
        $_SESSION['message'] = "selamat datang, ". $user['name']. "!";
        header("location:../../pages/dashboard/index.php");
    
    } else{
        $_SESSION['status'] = 400;
        $_SESSION['message'] = "Username / password salah";
        header("location:../../pages/login.php");
    
    }

?>