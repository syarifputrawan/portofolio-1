<div class="main-banner">
  <?php
  $bannerSelect = "SELECT * FROM about";
  $select = mysqli_query($koneksi, $bannerSelect) or die(mysqli_error($koneksi));
  $banner = mysqli_fetch_assoc($select);
  ?>
  <div class="owl-carousel owl-banner">

    <div class="item item-1">
      <div class="header-text">
        <span class="category"> <?= $banner['nama'] ?>, <em> <?= $banner['pekerjaan'] ?></em></span>
        <h2> <?= $banner['deskripsi_singkat'] ?>
        </h2>
      </div>
    </div>
    <div class="item item-2">
      <div class="header-text">
        <span class="category"> <?= $banner['nama'] ?>, <em> <?= $banner['pekerjaan'] ?></em></span>
        <h2> <?= $banner['deskripsi_singkat'] ?>
        </h2>
      </div>
    </div>
    <div class="item item-3">
      <div class="header-text">
        <span class="category"> <?= $banner['nama'] ?>, <em> <?= $banner['pekerjaan'] ?></em></span>
        <h2> <?= $banner['deskripsi_singkat'] ?>
        </h2>
      </div>
    </div>
  </div>
</div>