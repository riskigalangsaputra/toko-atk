<section class="py-5 text-center container">
  <div class="row py-lg-5">
    <?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?php echo $this->session->flashdata('success'); ?> <i class="fas fa-check"></i>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light">Welcome To Toko ATK</h1>
      <p class="lead text-muted">Toko ATK adalah merupakan perusahaan penyedia berbagai kebutuhan alat tulis kantor berkualitas di Jakarta timur.</p>
      <p>
        <a href="<?=site_url('/')?>" class="btn btn-primary my-2">Maulai Belanja</a>
      </p>
    </div>
  </div>
</section>
<div class="album py-5 bg-light">
  <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <?php foreach ($datas as $row): ?>
      <div class="col">
        <div class="card shadow-sm">
          <?php if ($row->photo_product == null) {?>
          <img src="<?=base_url()?>assets/img/default.png" class="bd-placeholder-img card-img-top" width="100%" height="225">
          <?php } else { ?>
          <img src="<?php echo base_url('assets/uploads/'.$row->photo_product) ?>" class="bd-placeholder-img card-img-top" width="100%" height="225">
          <?php } ?>
          <div class="card-body">
            <p class="card-text"><?=ucwords($row->product_name)?> - <?=$row->description?></p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="<?=site_url('main/view/'. $row->id_product)?>" class="btn btn-sm btn-outline-secondary">View</a>
              </div>
              <?php 
                $rupiah = "Rp " . number_format($row->price,2,',','.');
              ?>
              <small class="text-muted"><?=$rupiah?></small>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>