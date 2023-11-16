<?php
session_start();
include "koneksi.php";

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>personal profile</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../frondend/assets/css/fontawesome.css">
    <link rel="stylesheet" href="../frondend/assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="../frondend/assets/css/owl.css">
    <link rel="stylesheet" href="../frondend/assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
<style>
  .main-banner .item-1 {
  background-image: url(../frondend/assets/images/paper-4.jpg);
}

.main-banner .item-2 {
  background-image: url(../frondend/assets/images/paper-1.jpg);
}

.main-banner .item-3 {
  background-image: url(../frondend/assets/images/paper-3.jpg);
}
</style>
  </head>

<body>


<?php 
include "include/header.php";


 
include "include/carousel.php";


include "include/video_section.php";


  
include "include/deal_section.php";


  
include "include/properti_section.php";

  
// include "include/contact_section.php";


include "include/footer.php";
?>

  </body>
</html>