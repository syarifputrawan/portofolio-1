<?php 
session_start();
//hapus semua data di session nya
session_destroy();

// header("location:../../login.php");
$_SESSION['status']=200;
$_SESSION['message']="logout Berhasil";
header("location:../../login.php");
?>