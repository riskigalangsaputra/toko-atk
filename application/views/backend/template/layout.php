<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dashboard - Toko ATK</title>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="DashboardKit is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
        <meta name="keywords" content="DashboardKit, Dashboard Kit, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Free Bootstrap Admin Template">
        <meta name="author" content="DashboardKit ">
        <!-- Favicon icon -->
        <link rel="icon" href="assets/images/favicon.svg" type="image/x-icon">
        <!-- font css -->
        <link rel="stylesheet" href="<?=base_url()?>assets/backend/assets/fonts/feather.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/backend/assets/fonts/fontawesome.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/backend/assets/fonts/material.css">
        <!-- vendor css -->
        <link rel="stylesheet" href="<?=base_url()?>assets/backend/assets/css/style.css" id="main-style-link">
    </head>
    <body class="">
        <!-- [ Pre-loader ] start -->
        <div class="loader-bg">
            <div class="loader-track">
                <div class="loader-fill"></div>
            </div>
        </div>
        <!-- [ Pre-loader ] End -->
        <!-- [ Mobile header ] start -->
        <div class="pc-mob-header pc-header">
            <div class="pcm-logo">
                <img src="<?=base_url()?>assets/backend/assets/images/logo.svg" alt="" class="logo logo-lg">
            </div>
            <div class="pcm-toolbar">
                <a href="#!" class="pc-head-link" id="mobile-collapse">
                    <div class="hamburger hamburger--arrowturn">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </a>
                <a href="#!" class="pc-head-link" id="headerdrp-collapse">
                    <i data-feather="align-right"></i>
                </a>
                <a href="#!" class="pc-head-link" id="header-collapse">
                    <i data-feather="more-vertical"></i>
                </a>
            </div>
        </div>
        <!-- [ Mobile header ] End -->
        <!-- [ navigation menu ] start -->
        <nav class="pc-sidebar ">
            <div class="navbar-wrapper">
                <div class="m-header">
                    <a href="index.html" class="b-brand">
                        <!-- ========   change your logo hear   ============ -->
                        <a href="#" class="logo logo-lg"><h2 style="color: #fff;"><i class="fas fa-store"></i> Toko ATK</h2></a>
                    </a>
                </div>
                <div class="navbar-content">
                    <ul class="pc-navbar">
                        <li class="pc-item pc-caption">
                            <label>Navigation</label>
                        </li>
                        <li class="pc-item">
                            <a href="<?=base_url('backend/dashboard')?>" class="pc-link "><span class="pc-micon"><i class="fas fa-tachometer-alt"></i></span><span class="pc-mtext">Dashboard</span></a>
                        </li>
                        <li class="pc-item pc-caption">
                            <label>Main</label>
                        </li>
                        <li class="pc-item pc-hasmenu">
                            <a href="#!" class="pc-link "><span class="pc-micon"><i class="fas fa-database"></i></span><span class="pc-mtext">Master</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                            <ul class="pc-submenu">
                                <li class="pc-item"><a class="pc-link" href="<?=site_url('backend/master/product')?>">Product</a></li>
                                <li class="pc-item"><a class="pc-link" href="<?=site_url('backend/master/customers')?>">Customers</a></li>
                            </ul>
                        </li>
                        <li class="pc-item">
                            <a href="<?=base_url('backend/transaction')?>" class="pc-link "><span class="pc-micon"><i class="fas fa-spinner"></i></span><span class="pc-mtext">Transaction</span></a>
                        </li>
                        <li class="pc-item pc-hasmenu">
                            <a href="#!" class="pc-link "><span class="pc-micon"><i class="fas fa-chart-bar"></i></span><span class="pc-mtext">Report</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                            <ul class="pc-submenu">
                                <li class="pc-item"><a class="pc-link" href="<?=site_url('backend/transaction/history')?>">Transaction History</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- [ navigation menu ] end -->
        <!-- [ Header ] start -->
        <header class="pc-header ">
            <div class="header-wrapper">
                <div class="mr-auto pc-mob-drp">
                    <ul class="list-unstyled">
                        <li class="dropdown pc-h-item">
                            <a class="pc-head-link active dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="material-icons-two-tone">settings</i>  Settings
                            </a>
                            <div class="dropdown-menu pc-h-dropdown">
                                <a href="#!" class="dropdown-item">
                                    <i class="material-icons-two-tone">account_circle</i>
                                    <span>My Account</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="material-icons-two-tone">edit</i>
                                    <span>Change Password</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="ml-auto">
                    <ul class="list-unstyled">
                        <li class="dropdown pc-h-item">
                            <a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fas fa-user" style="margin-right: 5px;"></i>
                                <span>
                                    <span class="user-name"><?=$this->session->userdata('user_logged')->fullname?></span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right pc-h-dropdown">
                                <a href="<?=base_url('login/logout')?>" class="dropdown-item">
                                    <i class="material-icons-two-tone">chrome_reader_mode</i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- [ Header ] end -->
        <!-- [ Main Content ] start -->
        <div class="pc-container">
            <div class="pcoded-content">
                <!-- [ breadcrumb ] start -->
                <!-- [ breadcrumb ] end -->
                <!-- [ Main Content ] start -->
                <div class="row">
                    <?php echo $contents ?>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- Warning Section Ends -->
    <!-- Required Js -->
    <script src="<?=base_url()?>assets/backend/assets/js/vendor-all.min.js"></script>
    <script src="<?=base_url()?>assets/backend/assets/js/plugins/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/backend/assets/js/plugins/feather.min.js"></script>
    <script src="<?=base_url()?>assets/backend/assets/js/pcoded.min.js"></script>
    <!-- Apex Chart -->
    <script src="<?=base_url()?>assets/backend/assets/js/plugins/apexcharts.min.js"></script>
    <script src="<?=base_url()?>assets/backend/assets/js/pages/dashboard-sale.js"></script>
    <script src="<?=base_url()?>assets/backend/assets/js/pages/chart-apex.js"></script>
    <script type="text/javascript">
    function readURL(input) {
    if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
    $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
    }
    
    $("#imgInp").change(function() {
    readURL(this);
    })
    </script>
</body>
</html>