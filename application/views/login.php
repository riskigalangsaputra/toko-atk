<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>assets/login-form/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/login-form/css/owl.carousel.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/login-form/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="<?=base_url()?>assets/login-form/css/style.css">
    <title>Toko ATK - Login</title>
  </head>
  <body>
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 order-md-2">
            <img src="<?=base_url()?>assets/login-form/images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6 contents">
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="mb-4">
                  <h3>Sign In to <strong> Toko ATK</strong></h3>
                  <p class="mb-4">sebelum anda melakukan transaksi pada Toko ATK, anda diharuskan login terlebih dahulu.</p>
                </div>
                <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success" role="alert">
                  <?php echo $this->session->flashdata('success'); ?> <i class="fa fa-check"></i>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger" role="alert">
                  <i class="fa fa-close"></i> <?php echo $this->session->flashdata('error'); ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php endif; ?>
                <form action="<?= site_url('login') ?>" method="POST">
                  <div class="form-group first">
                    <label for="username">Email</label>
                    <input type="text" class="form-control" name="email" required>
                  </div>
                  <div class="form-group last mb-4">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" required>
                  </div>
                  <input type="submit" value="Log In" class="btn text-white btn-block btn-primary">
                </form>
                <div style="margin-top:15px;">
                  <span class="ml-auto">Belum punya akun ? <a href="<?=site_url('/register')?>" class="forgot-pass">Register disini</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?=base_url()?>assets/login-form/js/jquery-3.3.1.min.js"></script>
    <script src="<?=base_url()?>assets/login-form/js/popper.min.js"></script>
    <script src="<?=base_url()?>assets/login-form/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/login-form/js/main.js"></script>
  </body>
</html>