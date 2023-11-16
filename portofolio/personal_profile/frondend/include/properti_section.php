<!--portofolio -->
<div class="properties section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 offset-lg-4">
        <div class="section-heading text-center">
          <h6>Portofolio</h6>
          <h2></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <?php
      $menuMore = "SELECT * FROM portofolio";
      $menu = mysqli_query($koneksi, $menuMore) or die(mysqli_error($koneksi));
      $index = 0;
      while ($data = mysqli_fetch_assoc($menu)) {
      ?>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="item">
            <img src='<?= '../backend/images/portofolio/' . $data['foto'] ?>' alt='' class='radius-image img-fluid' style="width:100%; height:150px; object-fit: cover;">

            <h4><a href="property-details.html"> <?= $data['project'] ?> </a></h4>
            <p> <?= substr(strip_tags($data['description']), 0, 100) . "..."  ?></p>
            
            <!-- Button trigger modal -->
<button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal-<?=$data['id_portofolio']?>">
  Lihat selengkapnya
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal-<?=$data['id_portofolio']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><?=$data['project']?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?=$data['description']?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
  
</div><br><br>
<!--end portofolio-->


<!--skill-->
<center><h2>skill programer</h2></center>
<?php
      $menuMore = "SELECT * FROM skill";
      $menu = mysqli_query($koneksi, $menuMore) or die(mysqli_error($koneksi));
      $index = 0;
      while ($data = mysqli_fetch_assoc($menu)) {
      ?>
<div class="container">
        
        <br><br>
        <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width:<?= $data['persen'] ?>;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"><?= $data['persen'] ?></div>
        </div>
        <p><?= $data['skill'] ?></p>
        
        
    </div>
    <?php
      }
      ?>
<!--end skill-->

<!--pesan-->
<div class="properties section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 offset-lg-4">
        <div class="section-heading text-center">
          <h6>testimoni</h6>
          <h2></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <?php
      $menuMore = "SELECT * FROM pesan";
      $menu = mysqli_query($koneksi, $menuMore) or die(mysqli_error($koneksi));
      $index = 0;
      while ($data = mysqli_fetch_assoc($menu)) {
      ?>
        <div class="col-lg-4 col-md-6">
          <div class="item">

            <h4><a href="property-details.html"> <?= $data['nama'] ?> </a></h4>
            <p> <?= substr(strip_tags($data['pesan']), 0, 200) . "..."  ?></p>

          </div>
        </div>



      <?php
      }
      ?>
    </div>
  </div>
</div><br><br>
<!--end pesan-->




