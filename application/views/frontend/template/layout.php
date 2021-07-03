<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Toko ATK</title>
    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/fontawesome-5.15.3-web/css/all.css" rel="stylesheet">
    <meta name="theme-color" content="#7952b3">
    <style>
    .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    }
    @media (min-width: 768px) {
    .bd-placeholder-img-lg {
    font-size: 3.5rem;
    }
    }
    </style>
    
  </head>
  <body>
    
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#"><i class="fas fa-store"></i> Toko ATK</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              
            </ul>
            <form class="d-flex">
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-shopping-cart"></i> 0 |</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?=site_url('/login')?>">Login |</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?=site_url('/register')?>">Register</a>
                </li>
              </ul>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <main>
       <?php echo $contents ?>
    </main>
    <footer class="text-muted py-5">
      <div class="container">
        <p class="float-end mb-1">
          <a href="#">Back to top</a>
        </p>
        <p class="mb-1">Toko ATK &copy; Nopal, 2021</p>
      </div>
    </footer>
    <script src="<?=base_url()?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>assets/fontawesome-5.15.3-web/js/all.js"></script>
  </body>
</html>