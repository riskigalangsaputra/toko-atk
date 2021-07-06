<section class="py-5">
  <div class="container px-4 px-lg-5 my-5">
    <header>
      <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Selesai</h1>
        <p class="fs-5 text-muted">Transaksi sedang di proses oleh <b>Toko ATK</b>. Segera melakukan pembayaran dengan waktu yang telah di tentukan. Hubungi 
        admin <b>Toko ATK</b> WhatsApp : <b>08187898278</b></p>
      </div>
    </header>
    <main class="flex-shrink-0">
      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="container col">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Code : <?=$row->transaction_code?></h4>
            </div>
            <div class="card-body">
              <ul class="list-unstyled mt-3 mb-4">
                <li>Transfer sebelum tanggal : </li>
                <li><?=$row->expired_date?></li>
              </ul>
              <a href="<?=site_url('/')?>" class="w-100 btn btn-lg btn-outline-primary">Halaman utama</a>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</section>