<?php
include "koneksi.php";
// definikan sebuah variabel konstanta 
// variable ini bisa digunakan di berbagai halaman
define('BASE_URL', 'http://localhost/agensi/backend/');
session_start();

// cek apkah id tidak ada tau username tidak ada di dalam session
if (!isset($_SESSION['id']) || !isset($_SESSION['name'])) {
    // maka pindah ke halaman selanjutnya  
    $_SESSION['status'] = 400;
    $_SESSION['message'] = "anda harus login terlebih dahulu";
    header("location:../../pages/login.php");
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Novus Admin Panel an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<style>

		@charset "utf-8";
		/* CSS Document */
		html,body,form{ margin:0px; padding:0px; font-family:Ebrima, Arial, Helvetica, sans-serif; font-size:12px; color:#666; empty-cells:hide;}
		table.calendar{border-style: solid; border-width: 1px; border-width:1px; border-color:#666; -moz-box-shadow:0px 0px 4px #CCCCCC; -webkit-box-shadow:0px 0px 4px #CCCCCC; box-shadow:0px 0px 4px #CCCCCC; }
		tr.calendar-row  {  }
		td.calendar-day  { min-height:80px; position:relative; } * html div.calendar-day { height:80px; }
		td.calendar-day:hover  { background:#FFF; -moz-box-shadow:0px 0px 20px #eeeeee inset; -webkit-box-shadow:0px 0px 20px #eeeeee inset; box-shadow:0px 0px 20px #eeeeee inset; cursor:pointer;}
		td.calendar-day-np  { background:#eee; min-height:80px; } * html div.calendar-day-np { height:80px; }
		td.calendar-day-head {font-weight:bold; text-shadow:0px 1px 0px #FFF;color:#666; text-align:center; width:64px; padding:12px 6px; border-bottom:1px solid #CCC; border-top:1px solid #CCC; border-right:1px solid #CCC; background: #ffffff;
		background: -moz-linear-gradient(top,  #ffffff 0%, #ededed 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#ededed));
		background: -webkit-linear-gradient(top,  #ffffff 0%,#ededed 100%);
		background: -o-linear-gradient(top,  #ffffff 0%,#ededed 100%);
		background: -ms-linear-gradient(top,  #ffffff 0%,#ededed 100%);
		background: linear-gradient(to bottom,  #ffffff 0%,#ededed 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed',GradientType=0 );
		}
		div.day-number{padding:6px; text-align:center; }
		/* shared */
		td.calendar-day, td.calendar-day-np {padding:5px; border-bottom:1px solid #DBDBDB; border-right:1px solid #DBDBDB; font-size:14px;background: #ffffff;
		background: -moz-linear-gradient(top,  #ffffff 0%, #f2f2f2 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#f2f2f2));
		background: -webkit-linear-gradient(top,  #ffffff 0%,#f2f2f2 100%);
		background: -o-linear-gradient(top,  #ffffff 0%,#f2f2f2 100%);
		background: -ms-linear-gradient(top,  #ffffff 0%,#f2f2f2 100%);
		background: linear-gradient(to bottom,  #ffffff 0%,#f2f2f2 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f2f2f2',GradientType=0 );
		}


		.overday{ color:#164b87; text-shadow:0px 1px 0px #FFF;}
		.currentday{background: #6cb7f3 !important;
		background: -moz-linear-gradient(top,  #6cb7f3 0%, #388be8 100%) !important;
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#6cb7f3), color-stop(100%,#388be8)) !important;
		background: -webkit-linear-gradient(top,  #6cb7f3 0%,#388be8 100%) !important;
		background: -o-linear-gradient(top,  #6cb7f3 0%,#388be8 100%) !important;
		background: -ms-linear-gradient(top,  #6cb7f3 0%,#388be8 100%) !important;
		background: linear-gradient(to bottom,  #6cb7f3 0%,#388be8 100%) !important;
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#6cb7f3', endColorstr='#388be8',GradientType=0 ) !important; color:#FFF  !important; font-weight:bold; -moz-box-shadow:0px 0px 18px #1F68BA inset; -webkit-box-shadow:0px 0px 18px #1F68BA inset; box-shadow:0px 0px 18px #1F68BA inset;
		}
		.currentday:hover{-moz-box-shadow:0px 0px 24px #074080 inset !important; -webkit-box-shadow:0px 0px 24px #074080 inset !important; box-shadow:0px 0px 24px #074080 inset !important;}

        .current-time {
    font-size: 20px;
    color: #555;
    margin-top: 10px;
    /* Gaya CSS untuk Tata Letak Kalender dan Foto */
        }
.calendar-container {
    display: flex;
    align-items: flex-start; /* Mengatur foto di sebelah kalender */
}

.profile-photo {
    width: 200px; /* Sesuaikan lebar foto sesuai keinginan Anda */
    height: auto; /* Lebar akan menyesuaikan proporsi aslinya */
    margin-left: 20px; /* Jarak antara kalender dan foto */
}


</style>
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="../../css/style.css" rel='stylesheet' type='text/css' />
    <!-- font CSS -->
    <!-- font-awesome icons -->
    <link href="../../css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js-->
    <script src="../../js/jquery-1.11.1.min.js"></script>
    <script src="../../js/modernizr.custom.js"></script>
    <!--webfonts-->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!--//webfonts-->
    <!--animate-->
    <link href="../../css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="../../js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->
    <!-- chart -->
    <script src="../../js/Chart.js"></script>
    <!-- //chart -->
    <!--Calender-->
    <link rel="stylesheet" href="../../css/clndr.css" type="text/css" />
    <script src="../../js/underscore-min.js" type="text/javascript"></script>
    <script src="../../js/moment-2.2.1.js" type="text/javascript"></script>
    <script src="../../js/clndr.js" type="text/javascript"></script>
    <script src="../../js/site.js" type="text/javascript"></script>
    <!--End Calender-->
    <!-- Metis Menu -->
    <script src="../../js/metisMenu.min.js"></script>
    <script src="../../js/custom.js"></script>
    <link href="../../css/custom.css" rel="stylesheet">
    <!--//Metis Menu -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
    <link rel="stylesheet" href="../../vendor/icon-picker/dist/css/bootstrap-iconpicker.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    
</head>

<body class="cbp-spmenu-push">
    <div class="main-content">
        <!--left-fixed -navigation-->
        <div class=" sidebar" role="navigation">
            <div class="navbar-colla    pse">
                <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?= BASE_URL . 'pages/dashboard/index.php' ?>" class="active"><i class="fas fa-home"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?= BASE_URL . 'pages/about/info_perusahaan.php' ?>" class="active"><i class="fas fa-cogs"></i> about</a>
                        <li>
                            <a href="<?= BASE_URL . 'pages/produk/info_produk.php' ?>" class="active"><i class="fas fa-info-circle"></i> info produk</a>
                            <!-- //nav-second-level -->
                        </li>
                        <li>
                            <a href="<?= BASE_URL . 'pages/testimoni/info_testimoni.php' ?>" class="active"><i class="fas fa-chalkboard"></i> info testimoni</a>
                            <!-- //nav-second-level -->
                        </li>
                        <li>
                            <a href="<?= BASE_URL . 'pages/kontak/index.php' ?>" class="active"><i class="fas fa-id-card-alt"></i> kontak</a>
                            <!-- //nav-second-level -->
                        </li>
                        <li>
                            <a href="<?= BASE_URL . 'pages/pesan/index.php' ?>" class="active"><i class="fab fa-rocketchat"></i> pesan</a>
                            <!-- //nav-second-level -->
                        </li>
                    </ul>
                    <!-- //sidebar-collapse -->
                </nav>
            </div>
        </div>
        <!--left-fixed -navigation-->
        <!-- header-starts -->
        <div class="sticky-header header-section ">
            <div class="header-left">
                <!--toggle button start-->
                <button id="showLeftPush"><i class="fa fa-bars"></i></button>
                <!--toggle button end-->
                <!--logo -->
                <div class="logo">
                    <a href="index.html">
                        <h1>NOVUS</h1>
                        <span>AdminPanel</span>
                    </a>
                </div>
                <!--//logo-->
                <div class="clearfix"> </div>
            </div>
           
            <div class="header-right">
                <div class="profile_details_left"><!--notifications of menu start -->
                    <ul class="nofitications-dropdown">
                        <li class="dropdown head-dpdn">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="notification_header">
                                        <h3>You have 3 new messages</h3>
                                    </div>
                                </li>
                                <?php
							$fasilitasSelect = "SELECT * FROM pesan LIMIT 3";
							$select = mysqli_query($koneksi, $fasilitasSelect) or die(mysqli_error($koneksi));
							while ($row = mysqli_fetch_assoc($select)) {
							?>
                                <li><a href="#">
                                        <div class="notification_desc">
                                            <p><?= $row['nama'] ?></p>
                                            <p><span><?= $row['email'] ?></span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a>
                                </li>
                                <?php }?>
                                <li>
                                    <div class="notification_bottom">
                                        <a href="#">See all messages</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="clearfix"> </div>
                </div>
                <!--notification menu end -->
                <div class="profile_details">
                    <ul>
                        <li class="dropdown profile_details_drop">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <div class="profile_img">
                                    <span class="prfil-img"><img src="images/a.png" alt=""> </span>
                                    <div class="user-name">
                                        <p><?= $_SESSION['name'] ?></p>
                                        <span>Administrator</span>
                                    </div>
                                    <i class="fa fa-angle-down lnr"></i>
                                    <i class="fa fa-angle-up lnr"></i>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                            <ul class="dropdown-menu drp-mnu">
                                <li> <a href="../profile/form_ubah_profile.php"><i class="fa fa-user"></i> Profile</a> </li>
                                <li> <a class="dropdown-item" onclick="return confirm('apakah anda yakin ingin logout?') " href="../../aksi/auth/logout.php">Logout</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- //header-ends -->
        <div id="page-wrapper">