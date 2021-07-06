<section class="py-5">
  <div class="container px-4 px-lg-5 my-5">
    <main>
      <div class="py-5 text-center">
        <h2>Halaman Pengiriman</h2>
      </div>
      <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Pembelian anda</span>
          <span class="badge bg-primary rounded-pill"><?=count($carts)?></span>
          </h4>
          <ul class="list-group mb-3">
            <?php $subtotal = 0;?>
            <?php foreach ($carts as $row): ?>
            <?php $subtotal += $row->total; ?>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0"><?=ucwords($row->product_name)?></h6>
                <small class="text-muted">Qty : <?=$row->product_qty?></small>
              </div>
              <span class="text-muted"><?="Rp " . number_format($row->total,0,',','.')?></span>
            </li>
            <?php endforeach; ?>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total</span>
              <strong><?="Rp " . number_format($subtotal,0,',','.')?></strong>
            </li>
          </ul>
        </div>
        <div class="col-md-7 col-lg-8">
          <h4 class="mb-3">Alamat pengiriman</h4>
          <form action="<?php echo site_url('transaction/process') ?>" method="post">
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="firstName" class="form-label">Nama Depan</label>
                <input type="text" class="form-control" name="nama_depan" required>
              </div>
              <div class="col-sm-6">
                <label for="lastName" class="form-label">Nama Belakang</label>
                <input type="text" class="form-control" name="nama_belakang" required>
              </div>
              <div class="col-12">
                <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                <input type="email" class="form-control" name="email" placeholder="you@example.com">
              </div>
              <div class="col-12">
                <label for="address" class="form-label">Alamat</label>
                <textarea class="form-control" rows="3" name="alamat" required placeholder="masukan nama jalan atau alamat kantor untuk detail alamat pengiriman"></textarea>
              </div>
            </div>
            <hr class="my-4">
            <h4 class="mb-3">Transfer Ke</h4>
            <div class="my-3">
              <div class="form-check">
                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                <label class="form-check-label" for="credit">Bank BCA</label>
              </div>
              <!-- <div class="form-check">
                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                <label class="form-check-label" for="debit">BNI</label>
              </div>
              <div class="form-check">
                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                <label class="form-check-label" for="paypal">BRI</label>
              </div> -->
            </div>
            <div class="row gy-3">
              <div class="col-md-6">
                <label for="cc-name" class="form-label">Nama Pemilik Rekening</label>
                <input type="text" class="form-control" value="toko atk" disabled>
              </div>
              <div class="col-md-6">
                <label for="cc-number" class="form-label">Nomor Rekening</label>
                <input type="text" class="form-control" value="98298278723" disabled>
              </div>
            </div>
            <hr class="my-4">
            <button type="submit" class="w-100 btn btn-primary btn-lg" type="submit">Proses pembelian</button>
          </form>
        </div>
      </div>
    </main>
  </div>
</section>