<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background-image:url('<?= base_url('assets/'); ?>/img/smallstars-home.svg');">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center ">

            <div class="col-lg-5">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-5 " style="background-color: #1F3043;">
                        <div style="text-align:right; color:white;">
                            <a style="font-family:Roboto Slab; color:white" href="<?= base_url('Welcome'); ?>">Back</a>
                        </div>
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div>
                                        <h1 style="text-align:center; font-family:Roboto Slab; color:white">Register</h1>
                                        <hr>

                                        <form method="POST" action="<?= base_url('Welcome/RegisterCon'); ?>">
                                            <a style="text-align:left; font-family:Roboto Slab; color:white"> Nama</a>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Full Name" value="<?= set_value('nama'); ?> ">
                                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <a style="text-align:left; font-family:Roboto Slab; color:white"> Email</a>
                                            <div class="form-group">
                                                <input type="teks" class="form-control form-control-user" id="email" name="email" placeholder="user@gmail.com" value="<?= set_value('email'); ?>">
                                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <a style="text-align:left; font-family:Roboto Slab; color:white"> Password</a>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-group ">
                                                <div class="custom-control custom-checkbox small text-left d-flex justify-content-start">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                                    <label class="custom-control-label" for="customCheck" style="font-family:Roboto Slab; color:white;">Ingat saya</label>

                                                </div>
                                            </div>
                                            <button type="submmit" class="btn btn-primary btn-user btn-block" style="font-family:Roboto Slab;">
                                                Daftar
                                            </button>
                                        </form>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>