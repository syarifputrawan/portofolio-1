<!----------------------------------------------------------------------------------------------------------------->
<div class="section best-deal">
  <div class="container">
    <div class="row">

    </div>
    <div class="col-lg-12">
      <div class="tabs-content">
        <div class="row">
          <div class="col-lg-6">
            <img src="assets/images/photo_ari.jpeg" alt="" class="rounded">
          </div>
          <div class="col-lg-6">
            <h2>perkenalkan</h2>
            <br>
            <p>Halo, nama saya ari, dan saya adalah seorang programmer dengan minat mendalam dalam dunia teknologi. Sejak saya pertama kali menyentuh komputer, saya telah jatuh cinta dengan dunia pemrograman.
            </p> <br>
<!-- softskill -->
            <?php
            $menuMore = "SELECT * FROM softskill";
            $menu = mysqli_query($koneksi, $menuMore) or die(mysqli_error($koneksi));
            $index = 0;
            while ($data = mysqli_fetch_assoc($menu)) {
            ?>
              <div class="container">

              <h5><?= $data['title'] ?></h5>
                <div class="progress">
                  <div class="progress-bar bg-success" role="progressbar" style="width:<?= $data['persen'] ?>;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"><?= $data['persen'] ?></div>
                </div>
                

              </div>
            <?php
            }
            ?>
<!-- end softskill -->

            <br>
            <a href="https://wa.me/qr/PIEHKCZL25K5J1" class="btn btn-outline-primary btn-lg">hire me!</a>
            <a href="pages/curiculum_vitae/index.php" class="btn btn-outline-success btn-lg">download my cv</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!----------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------->
<div class="section best-deal">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="section-heading">
          <h6>website</h6>
          <h2>service yang bisa anda dapat di kami</h2>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="tabs-content">
          <div class="row">
            <div class="nav-wrapper ">
              <ul class="nav nav-tabs" role="tablist">
                <?php
                $menuMore = "SELECT * FROM services";
                $menu = mysqli_query($koneksi, $menuMore) or die(mysqli_error($koneksi));
                $index = 0;
                while ($data = mysqli_fetch_assoc($menu)) {
                  // ubah semua huruf menjadi huruf kecil
                  $judul = strtolower($data['title']);

                  // ganti semua space menjadi stip - 
                  $judul = str_replace(' ', '-', $judul);
                  // Juara 1 Olimpiade Lomba Desain Web
                  // juara-1-olimpiade-lomba-desain-web
                ?>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link <?= ($index == 0) ? 'active' : '' ?>" id="<?= $judul ?>-tab" data-bs-toggle="tab" data-bs-target="#<?= $judul ?>" type="button" role="tab" aria-controls="<?= $judul ?>" aria-selected="<?= ($index == 0) ? 'true' : 'false' ?>"><?= $data['title'] ?></button>
                  </li>
                <?php
                  $index++;
                }
                ?>
              </ul>
            </div>
            <div class="tab-content" id="myTabContent">
              <?php
              $menuMore = "SELECT * FROM services";
              $menu = mysqli_query($koneksi, $menuMore) or die(mysqli_error($koneksi));
              $index = 0;
              while ($data = mysqli_fetch_assoc($menu)) {
                // ubah semua huruf menjadi huruf kecil
                $judul = strtolower($data['title']);

                // ganti semua space menjadi stip - 
                $judul = str_replace(' ', '-', $judul);
                // Juara 1 Olimpiade Lomba Desain Web
                // juara-1-olimpiade-lomba-desain-web
              ?>
                <div class="tab-pane fade <?= ($index == 0) ? 'show active' : '' ?>" id="<?= $judul ?>" role="tabpanel" aria-labelledby="<?= $judul ?>-tab">
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
                      <img src="../backend/images/services/<?= $data['foto'] ?>" alt="">
                    </div>
                    <div class="col-lg-3">
                      <h4><?= $data['title'] ?></h4>
                      <p><?= $data['description'] ?></p>
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