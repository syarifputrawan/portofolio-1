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
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->

<style>
  .page-heading {
  background-image: url(../frondend/assets/images/programer2.jpg);
  background-position: center bottom;
  background-repeat: no-repeat;
  background-size: cover;
  padding: 110px 0px;
  text-align: center;
}
</style>
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <ul class="info">
            <li><i class="fa fa-envelope"></i> ariweb@gmail.com</li>
            <li><i class="fa fa-map"></i> web programer</li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-4">
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://x.com/minthu" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <h1>ari,web_programer</h1>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="properties.php" class="active">portofolio</a></li>
              <li><a href="property-details.php">achivement</a></li>
              <li><a href="contact.php">Contact Us</a></li>
             <br><br>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- <span class="breadcrumb"><a href="#">kemampuan </a> / saya</span> -->
          <h3>portofolio</h3>
        </div>
      </div>
    </div>
  </div>
  <!-- ------------------------------------------------------------------------------------------------------------->

  <div class="properties section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>experience</h6>
            <h2></h2>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
        $menuMore = "SELECT * FROM experience";
        $menu = mysqli_query($koneksi, $menuMore) or die(mysqli_error($koneksi));
        $index = 0;
        while ($data = mysqli_fetch_assoc($menu)) {
        ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="item">
              <img src='<?= '../backend/images/experience/' . $data['foto'] ?>' alt='' class='radius-image img-fluid' style=" width:100%; height:150px; object-fit: cover;">
              <h4><a href="property-details.html"> <?= $data['experience'] ?> </a></h4>
              <p> <?= substr(strip_tags($data['description']), 0, 200)  ?></p>

            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
  <!-------------------------------------------------------------------------------------------------------------->
  <div class="section best-deal">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="section-heading">
          <h6>web programer</h6>
          <h2>portofolio</h2>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="tabs-content">
          <div class="row">
            <div class="nav-wrapper ">
              <ul class="nav nav-tabs" role="tablist">
                <?php
                  $menuMore = "SELECT * FROM portofolio";
                  $menu = mysqli_query($koneksi, $menuMore) or die(mysqli_error($koneksi));
                  $index = 0;
                  while ($data = mysqli_fetch_assoc($menu)) {
                    // ubah semua huruf menjadi huruf kecil
                    $judul = strtolower($data['project']);

                    // ganti semua space menjadi stip - 
                    $judul = str_replace(' ', '-', $judul);
                    // Juara 1 Olimpiade Lomba Desain Web
                    // juara-1-olimpiade-lomba-desain-web
                ?>
                <li class="nav-item" role="presentation">
                  <button class="nav-link <?= ($index == 0) ? 'active' : ''?>" id="<?= $judul?>-tab" data-bs-toggle="tab" data-bs-target="#<?= $judul?>" type="button" role="tab" aria-controls="<?= $judul?>" aria-selected="<?= ($index == 0) ? 'true' : 'false'?>"><?= $data['project']?></button>
                </li>
                <?php
                $index++;
                  }
                ?>
              </ul>
            </div>
            <div class="tab-content" id="myTabContent">
              <?php
               $menuMore = "SELECT * FROM portofolio";
               $menu = mysqli_query($koneksi, $menuMore) or die(mysqli_error($koneksi));
               $index = 0;
               while ($data = mysqli_fetch_assoc($menu)) {
                // ubah semua huruf menjadi huruf kecil
                $judul = strtolower($data['project']);

                // ganti semua space menjadi stip - 
                $judul = str_replace(' ', '-', $judul);
                // Juara 1 Olimpiade Lomba Desain Web
                // juara-1-olimpiade-lomba-desain-web
              ?>
              <div class="tab-pane fade <?= ($index == 0) ? 'show active' : ''?>" id="<?= $judul?>" role="tabpanel" aria-labelledby="<?= $judul?>-tab">
                <div class="row">
                  <div class="col-lg-3">
                    <div class="info-table">
                      <ul>
                        <li>Desain Tampilan <span>✔</span></li>
                        <li>Navigasi <span>✔</span></li>
                        <li>Konten <span>✔</span></li>
                        <li>formulir/kontak <span>✔</span></li>
                        <li>SEO dan Analitik: <span>✔</span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <img src="../backend/images/portofolio/<?= $data['foto']?>" alt="">
                  </div>
                  <div class="col-lg-3">
                    <h4><?= $data['project']?></h4>
                    <p><?= $data['description']?></p>
                  </div>
                </div>
              </div>
              <?php
              $index++;
               }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-------------------------------------------------------------------------------------------------------------->
  

  <div class="properties section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>hobby</h6>
            <h2></h2>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
        $menuMore = "SELECT * FROM hobby";
        $menu = mysqli_query($koneksi, $menuMore) or die(mysqli_error($koneksi));
        $index = 0;
        while ($data = mysqli_fetch_assoc($menu)) {
        ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="item">
              <img src='<?= '../backend/images/hobby/' . $data['foto'] ?>' alt='' class='radius-image img-fluid' style=" width:100%; height:150px; object-fit: cover;">
              <h4><a href="property-details.html"> <?= $data['hobby'] ?> </a></h4>
              <p> <?= substr(strip_tags($data['description']), 0, 200)  ?></p>

            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </div>













  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <footer>
    <div class="container">
      <div class="col-lg-12">
      <p>Copyright © 2023 ari,web_programer</p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

</body>

</html>