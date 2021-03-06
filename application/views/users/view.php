<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo asset_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
    <!-- Bootstrap JS -->
    <script src="<?php echo asset_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url();?>users/index">CARZBID</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url();?>users/register_view">Sign Up</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url();?>users/login_view">Log In</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead text-center">
        <div class="masthead-content">
            <div class="container">
                <h1 class="masthead-heading mb-0">We Are Here</h1>
                <h2 class="masthead-subheading mb-0">Book the world's worst drivers</h2>
            </div>
        </div>
        <div class="bg-circle-1 bg-circle"></div>
        <div class="bg-circle-2 bg-circle"></div>
        <div class="bg-circle-3 bg-circle"></div>
        <div class="bg-circle-4 bg-circle"></div>
    </header>
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img class="rounded-circle img-fluid" src="<?php echo asset_url(); ?>assets/img/car/car1.jpg"></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Time for shitty ride</h2>
                        <p>Track live time for horrible drivers without driving license.&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5"><img class="rounded-circle img-fluid" src="<?php echo asset_url(); ?>assets/img/car/car2.png"></div>
                </div>
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5">
                        <h2 class="display-4">Surprise by sercurity</h2>
                        <p>It is quite safe than what you think</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img class="rounded-circle img-fluid" src="<?php echo asset_url(); ?>assets/img/car/car3.jpg"></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Track Your driver</h2>
                        <p>You will never get lost. &nbsp;If the driver is too shitty, just report them to police. Track them after booking so you will know if the drivers ran away</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="container py-5">
        <p class="text-center m-0 small">Copyright&nbsp;© CARZBID 2018</p>
    </footer>
    <script src="<?php echo asset_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo asset_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
