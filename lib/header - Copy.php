<?php include '../lib/checkAuth.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>SDG Dashboard</title>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- My CSS -->
        <link rel="stylesheet" href="https://www.seendigital.asia/dashboard/lib/css/main.css">
        <link rel="stylesheet" href="https://www.seendigital.asia/dashboard/lib/css/style.css">
        <link rel="stylesheet" href="https://www.seendigital.asia/dashboard/lib/css/util.css">


        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        

        <!-- CDN hosted by Cachefly -->
       <!-- <script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
        <script>tinymce.init({selector: 'textarea'});</script> -->
        <?php
        $fullname = $_SESSION['auth'];
        ?>
    </head>
    <body class="bg-light">

        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
            <div class="my-0 mr-md-auto font-weight-normal">
                <img src="https://www.seendigital.asia/dashboard/images/seen_logo_web.png" style="width:80px">
            </div>
            <!--<h5 class="my-0 mr-md-auto font-weight-normal">SDG Dashboard</h5>-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav class="my-2 my-md-0 mr-md-3">
                <!--<a class="p-2 text-dark" href="mailto:thapagorn_h@seendigital.asia">Support</a>-->
                <?php if ($sysrole == 'admin') { ?>
                <div class="btn-group">
                <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Main
                        </button>

                        <div class="dropdown-menu">
                            <a class="dropdown-item active" href="https://www.seendigital.asia/dashboard/admin">Dashboard</a>
                            <a class="dropdown-item" href="https://www.seendigital.asia/dashboard/admin/coverage.php">Coverage</a>
                            
                        </div>

                            <!--<a class="btn btn-outline-secondary btn-sm" href="https://www.seendigital.asia/dashboard/admin">Main</a>-->

                     
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Publisher
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item active" href="#">SDG0001</a>
                            <a class="dropdown-item" href="https://www.seendigital.asia/dashboard/PB190001">|__PB190001 Network Advisor</a>
                            <a class="dropdown-item disabled" href="#" >|__PB190002 Network Provider</a>
                            <a class="dropdown-item disabled" href="#" >|__PB190003 Wide Access</a>
                            <a class="dropdown-item" href="https://www.seendigital.asia/dashboard/PB190004">|__PB190004 Kanjana</a>
                            <a class="dropdown-item disabled" href="#" >|__PB190005 B Campus</a>
                            <a class="dropdown-item" href="https://www.seendigital.asia/dashboard/PB190009" >|__PB190009 SeedSoft</a>
                            <a class="dropdown-item" href="https://www.seendigital.asia/dashboard/PB190008" >|__PB190008 Amarin Plaza</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item active" href="https://www.seendigital.asia/dashboard/PB190006">PB190006 Source Code</a>
                            <a class="dropdown-item" href="https://www.seendigital.asia/dashboard/PB190007">|__PB190007 JPS Mansion</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item active" href="#">PB190010 Impact</a>
							<a class="dropdown-item" href="https://www.seendigital.asia/dashboard/PB190011">|__PB190011 Central Expo</a>
							<a class="dropdown-item" href="https://www.seendigital.asia/dashboard/PB190012">|__PB190012 บ้านและสวน</a>
							
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Advertiser
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://www.seendigital.asia/dashboard/AD190001">AD190001 W/E</a>
							<a class="dropdown-item" href="https://www.seendigital.asia/dashboard/ADV190005">Major Cineplex</a>
                        </div>
                    </div>
                    <div class="btn-group">
                    <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Management
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item active" href="https://www.seendigital.asia/dashboard/admin/sdg_product.php">Seen Digital</a>
                            <a class="dropdown-item" href="https://www.seendigital.asia/dashboard/admin/executive.php">Executive</a>
                            <a class="dropdown-item" href="https://www.seendigital.asia/dashboard/admin/sdg_product.php">Product</a>
                            <a class="dropdown-item active" href="https://www.seendigital.asia/dashboard/admin/add_asset.php">Asset Inventory</a>
                            <a class="dropdown-item" href="https://www.seendigital.asia/dashboard/admin/add_asset.php"><i class="fa fa-plus-circle"></i> Add Asset</a>
                            <a class="dropdown-item" href="https://www.seendigital.asia/dashboard/admin/shareddrive.php"><i class="fa fa-upload"></i> Shared Drive</a>
                            <a class="dropdown-item" href="https://www.seendigital.asia/dashboard/admin/ipassignment.php"><i class="fa fa-car"></i> IP Assignment</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item active" href="#">Wi-Fi & LBS</a>
                            <a class="dropdown-item" href="https://asia.linkyfi.com" target='_blank'>Linkyfi</a>
                        </div>
                    </div>
                <?php } ?>
                <span class="btn btn-outline-success btn-sm"> Online user: <?php echo $online_user ?></span>
                

            </nav>


            <a class="btn btn-outline-secondary btn-sm" href="../lib/logout.php">logout</a>
        </div>
